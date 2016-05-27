<?php


/**
 * Base class that represents a query for the 'ticket_status' table.
 *
 *
 *
 * @method TicketStatusQuery orderByTicketStatusId($order = Criteria::ASC) Order by the ticket_status_id column
 * @method TicketStatusQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method TicketStatusQuery groupByTicketStatusId() Group by the ticket_status_id column
 * @method TicketStatusQuery groupByName() Group by the name column
 *
 * @method TicketStatusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TicketStatusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TicketStatusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TicketStatusQuery leftJoinTicket($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ticket relation
 * @method TicketStatusQuery rightJoinTicket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ticket relation
 * @method TicketStatusQuery innerJoinTicket($relationAlias = null) Adds a INNER JOIN clause to the query using the Ticket relation
 *
 * @method TicketStatusQuery leftJoinTicketHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the TicketHistory relation
 * @method TicketStatusQuery rightJoinTicketHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TicketHistory relation
 * @method TicketStatusQuery innerJoinTicketHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the TicketHistory relation
 *
 * @method TicketStatus findOne(PropelPDO $con = null) Return the first TicketStatus matching the query
 * @method TicketStatus findOneOrCreate(PropelPDO $con = null) Return the first TicketStatus matching the query, or a new TicketStatus object populated from the query conditions when no match is found
 *
 * @method TicketStatus findOneByName(string $name) Return the first TicketStatus filtered by the name column
 *
 * @method array findByTicketStatusId(int $ticket_status_id) Return TicketStatus objects filtered by the ticket_status_id column
 * @method array findByName(string $name) Return TicketStatus objects filtered by the name column
 *
 * @package    propel.generator.Soportando.om
 */
abstract class BaseTicketStatusQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTicketStatusQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Soportando', $modelName = 'TicketStatus', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TicketStatusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TicketStatusQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TicketStatusQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TicketStatusQuery) {
            return $criteria;
        }
        $query = new TicketStatusQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   TicketStatus|TicketStatus[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TicketStatusPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TicketStatusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 TicketStatus A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByTicketStatusId($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 TicketStatus A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ticket_status_id`, `name` FROM `ticket_status` WHERE `ticket_status_id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new TicketStatus();
            $obj->hydrate($row);
            TicketStatusPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return TicketStatus|TicketStatus[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|TicketStatus[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return TicketStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TicketStatusPeer::TICKET_STATUS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TicketStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TicketStatusPeer::TICKET_STATUS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ticket_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTicketStatusId(1234); // WHERE ticket_status_id = 1234
     * $query->filterByTicketStatusId(array(12, 34)); // WHERE ticket_status_id IN (12, 34)
     * $query->filterByTicketStatusId(array('min' => 12)); // WHERE ticket_status_id >= 12
     * $query->filterByTicketStatusId(array('max' => 12)); // WHERE ticket_status_id <= 12
     * </code>
     *
     * @param     mixed $ticketStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketStatusQuery The current query, for fluid interface
     */
    public function filterByTicketStatusId($ticketStatusId = null, $comparison = null)
    {
        if (is_array($ticketStatusId)) {
            $useMinMax = false;
            if (isset($ticketStatusId['min'])) {
                $this->addUsingAlias(TicketStatusPeer::TICKET_STATUS_ID, $ticketStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ticketStatusId['max'])) {
                $this->addUsingAlias(TicketStatusPeer::TICKET_STATUS_ID, $ticketStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketStatusPeer::TICKET_STATUS_ID, $ticketStatusId, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketStatusQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TicketStatusPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query by a related Ticket object
     *
     * @param   Ticket|PropelObjectCollection $ticket  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketStatusQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicket($ticket, $comparison = null)
    {
        if ($ticket instanceof Ticket) {
            return $this
                ->addUsingAlias(TicketStatusPeer::TICKET_STATUS_ID, $ticket->getTicketStatusId(), $comparison);
        } elseif ($ticket instanceof PropelObjectCollection) {
            return $this
                ->useTicketQuery()
                ->filterByPrimaryKeys($ticket->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTicket() only accepts arguments of type Ticket or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ticket relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TicketStatusQuery The current query, for fluid interface
     */
    public function joinTicket($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ticket');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Ticket');
        }

        return $this;
    }

    /**
     * Use the Ticket relation Ticket object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TicketQuery A secondary query class using the current class as primary query
     */
    public function useTicketQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTicket($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ticket', 'TicketQuery');
    }

    /**
     * Filter the query by a related TicketHistory object
     *
     * @param   TicketHistory|PropelObjectCollection $ticketHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketStatusQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicketHistory($ticketHistory, $comparison = null)
    {
        if ($ticketHistory instanceof TicketHistory) {
            return $this
                ->addUsingAlias(TicketStatusPeer::TICKET_STATUS_ID, $ticketHistory->getTicketStatusId(), $comparison);
        } elseif ($ticketHistory instanceof PropelObjectCollection) {
            return $this
                ->useTicketHistoryQuery()
                ->filterByPrimaryKeys($ticketHistory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTicketHistory() only accepts arguments of type TicketHistory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TicketHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TicketStatusQuery The current query, for fluid interface
     */
    public function joinTicketHistory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TicketHistory');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TicketHistory');
        }

        return $this;
    }

    /**
     * Use the TicketHistory relation TicketHistory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TicketHistoryQuery A secondary query class using the current class as primary query
     */
    public function useTicketHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTicketHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TicketHistory', 'TicketHistoryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   TicketStatus $ticketStatus Object to remove from the list of results
     *
     * @return TicketStatusQuery The current query, for fluid interface
     */
    public function prune($ticketStatus = null)
    {
        if ($ticketStatus) {
            $this->addUsingAlias(TicketStatusPeer::TICKET_STATUS_ID, $ticketStatus->getTicketStatusId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
