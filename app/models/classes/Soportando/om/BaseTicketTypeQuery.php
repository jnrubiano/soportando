<?php


/**
 * Base class that represents a query for the 'ticket_type' table.
 *
 *
 *
 * @method TicketTypeQuery orderByTicketTypeId($order = Criteria::ASC) Order by the ticket_type_id column
 * @method TicketTypeQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method TicketTypeQuery groupByTicketTypeId() Group by the ticket_type_id column
 * @method TicketTypeQuery groupByName() Group by the name column
 *
 * @method TicketTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TicketTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TicketTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TicketTypeQuery leftJoinTicket($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ticket relation
 * @method TicketTypeQuery rightJoinTicket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ticket relation
 * @method TicketTypeQuery innerJoinTicket($relationAlias = null) Adds a INNER JOIN clause to the query using the Ticket relation
 *
 * @method TicketType findOne(PropelPDO $con = null) Return the first TicketType matching the query
 * @method TicketType findOneOrCreate(PropelPDO $con = null) Return the first TicketType matching the query, or a new TicketType object populated from the query conditions when no match is found
 *
 * @method TicketType findOneByName(string $name) Return the first TicketType filtered by the name column
 *
 * @method array findByTicketTypeId(int $ticket_type_id) Return TicketType objects filtered by the ticket_type_id column
 * @method array findByName(string $name) Return TicketType objects filtered by the name column
 *
 * @package    propel.generator.Soportando.om
 */
abstract class BaseTicketTypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTicketTypeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Soportando', $modelName = 'TicketType', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TicketTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TicketTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TicketTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TicketTypeQuery) {
            return $criteria;
        }
        $query = new TicketTypeQuery();
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
     * @return   TicketType|TicketType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TicketTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TicketTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TicketType A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByTicketTypeId($key, $con = null)
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
     * @return                 TicketType A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ticket_type_id`, `name` FROM `ticket_type` WHERE `ticket_type_id` = :p0';
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
            $obj = new TicketType();
            $obj->hydrate($row);
            TicketTypePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TicketType|TicketType[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TicketType[]|mixed the list of results, formatted by the current formatter
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
     * @return TicketTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TicketTypePeer::TICKET_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TicketTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TicketTypePeer::TICKET_TYPE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ticket_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTicketTypeId(1234); // WHERE ticket_type_id = 1234
     * $query->filterByTicketTypeId(array(12, 34)); // WHERE ticket_type_id IN (12, 34)
     * $query->filterByTicketTypeId(array('min' => 12)); // WHERE ticket_type_id >= 12
     * $query->filterByTicketTypeId(array('max' => 12)); // WHERE ticket_type_id <= 12
     * </code>
     *
     * @param     mixed $ticketTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketTypeQuery The current query, for fluid interface
     */
    public function filterByTicketTypeId($ticketTypeId = null, $comparison = null)
    {
        if (is_array($ticketTypeId)) {
            $useMinMax = false;
            if (isset($ticketTypeId['min'])) {
                $this->addUsingAlias(TicketTypePeer::TICKET_TYPE_ID, $ticketTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ticketTypeId['max'])) {
                $this->addUsingAlias(TicketTypePeer::TICKET_TYPE_ID, $ticketTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketTypePeer::TICKET_TYPE_ID, $ticketTypeId, $comparison);
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
     * @return TicketTypeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TicketTypePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query by a related Ticket object
     *
     * @param   Ticket|PropelObjectCollection $ticket  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketTypeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicket($ticket, $comparison = null)
    {
        if ($ticket instanceof Ticket) {
            return $this
                ->addUsingAlias(TicketTypePeer::TICKET_TYPE_ID, $ticket->getTicketTypeId(), $comparison);
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
     * @return TicketTypeQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   TicketType $ticketType Object to remove from the list of results
     *
     * @return TicketTypeQuery The current query, for fluid interface
     */
    public function prune($ticketType = null)
    {
        if ($ticketType) {
            $this->addUsingAlias(TicketTypePeer::TICKET_TYPE_ID, $ticketType->getTicketTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
