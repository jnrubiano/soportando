<?php


/**
 * Base class that represents a query for the 'ticket_history' table.
 *
 *
 *
 * @method TicketHistoryQuery orderByTicketHistoryId($order = Criteria::ASC) Order by the ticket_history_id column
 * @method TicketHistoryQuery orderByTicketId($order = Criteria::ASC) Order by the ticket_id column
 * @method TicketHistoryQuery orderByStatusDate($order = Criteria::ASC) Order by the status_date column
 * @method TicketHistoryQuery orderByUid($order = Criteria::ASC) Order by the uid column
 * @method TicketHistoryQuery orderByTicketStatusId($order = Criteria::ASC) Order by the ticket_status_id column
 *
 * @method TicketHistoryQuery groupByTicketHistoryId() Group by the ticket_history_id column
 * @method TicketHistoryQuery groupByTicketId() Group by the ticket_id column
 * @method TicketHistoryQuery groupByStatusDate() Group by the status_date column
 * @method TicketHistoryQuery groupByUid() Group by the uid column
 * @method TicketHistoryQuery groupByTicketStatusId() Group by the ticket_status_id column
 *
 * @method TicketHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TicketHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TicketHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TicketHistoryQuery leftJoinTicket($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ticket relation
 * @method TicketHistoryQuery rightJoinTicket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ticket relation
 * @method TicketHistoryQuery innerJoinTicket($relationAlias = null) Adds a INNER JOIN clause to the query using the Ticket relation
 *
 * @method TicketHistoryQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method TicketHistoryQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method TicketHistoryQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method TicketHistoryQuery leftJoinTicketStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the TicketStatus relation
 * @method TicketHistoryQuery rightJoinTicketStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TicketStatus relation
 * @method TicketHistoryQuery innerJoinTicketStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the TicketStatus relation
 *
 * @method TicketHistory findOne(PropelPDO $con = null) Return the first TicketHistory matching the query
 * @method TicketHistory findOneOrCreate(PropelPDO $con = null) Return the first TicketHistory matching the query, or a new TicketHistory object populated from the query conditions when no match is found
 *
 * @method TicketHistory findOneByTicketId(int $ticket_id) Return the first TicketHistory filtered by the ticket_id column
 * @method TicketHistory findOneByStatusDate(string $status_date) Return the first TicketHistory filtered by the status_date column
 * @method TicketHistory findOneByUid(int $uid) Return the first TicketHistory filtered by the uid column
 * @method TicketHistory findOneByTicketStatusId(int $ticket_status_id) Return the first TicketHistory filtered by the ticket_status_id column
 *
 * @method array findByTicketHistoryId(int $ticket_history_id) Return TicketHistory objects filtered by the ticket_history_id column
 * @method array findByTicketId(int $ticket_id) Return TicketHistory objects filtered by the ticket_id column
 * @method array findByStatusDate(string $status_date) Return TicketHistory objects filtered by the status_date column
 * @method array findByUid(int $uid) Return TicketHistory objects filtered by the uid column
 * @method array findByTicketStatusId(int $ticket_status_id) Return TicketHistory objects filtered by the ticket_status_id column
 *
 * @package    propel.generator.Soportando.om
 */
abstract class BaseTicketHistoryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTicketHistoryQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Soportando', $modelName = 'TicketHistory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TicketHistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TicketHistoryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TicketHistoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TicketHistoryQuery) {
            return $criteria;
        }
        $query = new TicketHistoryQuery();
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
     * @return   TicketHistory|TicketHistory[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TicketHistoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TicketHistoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TicketHistory A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByTicketHistoryId($key, $con = null)
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
     * @return                 TicketHistory A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ticket_history_id`, `ticket_id`, `status_date`, `uid`, `ticket_status_id` FROM `ticket_history` WHERE `ticket_history_id` = :p0';
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
            $obj = new TicketHistory();
            $obj->hydrate($row);
            TicketHistoryPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TicketHistory|TicketHistory[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TicketHistory[]|mixed the list of results, formatted by the current formatter
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
     * @return TicketHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TicketHistoryPeer::TICKET_HISTORY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TicketHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TicketHistoryPeer::TICKET_HISTORY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ticket_history_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTicketHistoryId(1234); // WHERE ticket_history_id = 1234
     * $query->filterByTicketHistoryId(array(12, 34)); // WHERE ticket_history_id IN (12, 34)
     * $query->filterByTicketHistoryId(array('min' => 12)); // WHERE ticket_history_id >= 12
     * $query->filterByTicketHistoryId(array('max' => 12)); // WHERE ticket_history_id <= 12
     * </code>
     *
     * @param     mixed $ticketHistoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketHistoryQuery The current query, for fluid interface
     */
    public function filterByTicketHistoryId($ticketHistoryId = null, $comparison = null)
    {
        if (is_array($ticketHistoryId)) {
            $useMinMax = false;
            if (isset($ticketHistoryId['min'])) {
                $this->addUsingAlias(TicketHistoryPeer::TICKET_HISTORY_ID, $ticketHistoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ticketHistoryId['max'])) {
                $this->addUsingAlias(TicketHistoryPeer::TICKET_HISTORY_ID, $ticketHistoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketHistoryPeer::TICKET_HISTORY_ID, $ticketHistoryId, $comparison);
    }

    /**
     * Filter the query on the ticket_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTicketId(1234); // WHERE ticket_id = 1234
     * $query->filterByTicketId(array(12, 34)); // WHERE ticket_id IN (12, 34)
     * $query->filterByTicketId(array('min' => 12)); // WHERE ticket_id >= 12
     * $query->filterByTicketId(array('max' => 12)); // WHERE ticket_id <= 12
     * </code>
     *
     * @see       filterByTicket()
     *
     * @param     mixed $ticketId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketHistoryQuery The current query, for fluid interface
     */
    public function filterByTicketId($ticketId = null, $comparison = null)
    {
        if (is_array($ticketId)) {
            $useMinMax = false;
            if (isset($ticketId['min'])) {
                $this->addUsingAlias(TicketHistoryPeer::TICKET_ID, $ticketId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ticketId['max'])) {
                $this->addUsingAlias(TicketHistoryPeer::TICKET_ID, $ticketId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketHistoryPeer::TICKET_ID, $ticketId, $comparison);
    }

    /**
     * Filter the query on the status_date column
     *
     * Example usage:
     * <code>
     * $query->filterByStatusDate('2011-03-14'); // WHERE status_date = '2011-03-14'
     * $query->filterByStatusDate('now'); // WHERE status_date = '2011-03-14'
     * $query->filterByStatusDate(array('max' => 'yesterday')); // WHERE status_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $statusDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketHistoryQuery The current query, for fluid interface
     */
    public function filterByStatusDate($statusDate = null, $comparison = null)
    {
        if (is_array($statusDate)) {
            $useMinMax = false;
            if (isset($statusDate['min'])) {
                $this->addUsingAlias(TicketHistoryPeer::STATUS_DATE, $statusDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statusDate['max'])) {
                $this->addUsingAlias(TicketHistoryPeer::STATUS_DATE, $statusDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketHistoryPeer::STATUS_DATE, $statusDate, $comparison);
    }

    /**
     * Filter the query on the uid column
     *
     * Example usage:
     * <code>
     * $query->filterByUid(1234); // WHERE uid = 1234
     * $query->filterByUid(array(12, 34)); // WHERE uid IN (12, 34)
     * $query->filterByUid(array('min' => 12)); // WHERE uid >= 12
     * $query->filterByUid(array('max' => 12)); // WHERE uid <= 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $uid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketHistoryQuery The current query, for fluid interface
     */
    public function filterByUid($uid = null, $comparison = null)
    {
        if (is_array($uid)) {
            $useMinMax = false;
            if (isset($uid['min'])) {
                $this->addUsingAlias(TicketHistoryPeer::UID, $uid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uid['max'])) {
                $this->addUsingAlias(TicketHistoryPeer::UID, $uid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketHistoryPeer::UID, $uid, $comparison);
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
     * @see       filterByTicketStatus()
     *
     * @param     mixed $ticketStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketHistoryQuery The current query, for fluid interface
     */
    public function filterByTicketStatusId($ticketStatusId = null, $comparison = null)
    {
        if (is_array($ticketStatusId)) {
            $useMinMax = false;
            if (isset($ticketStatusId['min'])) {
                $this->addUsingAlias(TicketHistoryPeer::TICKET_STATUS_ID, $ticketStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ticketStatusId['max'])) {
                $this->addUsingAlias(TicketHistoryPeer::TICKET_STATUS_ID, $ticketStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketHistoryPeer::TICKET_STATUS_ID, $ticketStatusId, $comparison);
    }

    /**
     * Filter the query by a related Ticket object
     *
     * @param   Ticket|PropelObjectCollection $ticket The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicket($ticket, $comparison = null)
    {
        if ($ticket instanceof Ticket) {
            return $this
                ->addUsingAlias(TicketHistoryPeer::TICKET_ID, $ticket->getTicketId(), $comparison);
        } elseif ($ticket instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TicketHistoryPeer::TICKET_ID, $ticket->toKeyValue('PrimaryKey', 'TicketId'), $comparison);
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
     * @return TicketHistoryQuery The current query, for fluid interface
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
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(TicketHistoryPeer::UID, $user->getUid(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TicketHistoryPeer::UID, $user->toKeyValue('PrimaryKey', 'Uid'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TicketHistoryQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

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
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
    }

    /**
     * Filter the query by a related TicketStatus object
     *
     * @param   TicketStatus|PropelObjectCollection $ticketStatus The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicketStatus($ticketStatus, $comparison = null)
    {
        if ($ticketStatus instanceof TicketStatus) {
            return $this
                ->addUsingAlias(TicketHistoryPeer::TICKET_STATUS_ID, $ticketStatus->getTicketStatusId(), $comparison);
        } elseif ($ticketStatus instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TicketHistoryPeer::TICKET_STATUS_ID, $ticketStatus->toKeyValue('PrimaryKey', 'TicketStatusId'), $comparison);
        } else {
            throw new PropelException('filterByTicketStatus() only accepts arguments of type TicketStatus or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TicketStatus relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TicketHistoryQuery The current query, for fluid interface
     */
    public function joinTicketStatus($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TicketStatus');

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
            $this->addJoinObject($join, 'TicketStatus');
        }

        return $this;
    }

    /**
     * Use the TicketStatus relation TicketStatus object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TicketStatusQuery A secondary query class using the current class as primary query
     */
    public function useTicketStatusQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTicketStatus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TicketStatus', 'TicketStatusQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   TicketHistory $ticketHistory Object to remove from the list of results
     *
     * @return TicketHistoryQuery The current query, for fluid interface
     */
    public function prune($ticketHistory = null)
    {
        if ($ticketHistory) {
            $this->addUsingAlias(TicketHistoryPeer::TICKET_HISTORY_ID, $ticketHistory->getTicketHistoryId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
