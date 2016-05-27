<?php


/**
 * Base class that represents a query for the 'engineer' table.
 *
 *
 *
 * @method EngineerQuery orderByEngineerId($order = Criteria::ASC) Order by the engineer_id column
 * @method EngineerQuery orderByUid($order = Criteria::ASC) Order by the uid column
 * @method EngineerQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method EngineerQuery orderBySpecialty($order = Criteria::ASC) Order by the specialty column
 *
 * @method EngineerQuery groupByEngineerId() Group by the engineer_id column
 * @method EngineerQuery groupByUid() Group by the uid column
 * @method EngineerQuery groupByName() Group by the name column
 * @method EngineerQuery groupBySpecialty() Group by the specialty column
 *
 * @method EngineerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EngineerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EngineerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EngineerQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method EngineerQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method EngineerQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method EngineerQuery leftJoinTicket($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ticket relation
 * @method EngineerQuery rightJoinTicket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ticket relation
 * @method EngineerQuery innerJoinTicket($relationAlias = null) Adds a INNER JOIN clause to the query using the Ticket relation
 *
 * @method Engineer findOne(PropelPDO $con = null) Return the first Engineer matching the query
 * @method Engineer findOneOrCreate(PropelPDO $con = null) Return the first Engineer matching the query, or a new Engineer object populated from the query conditions when no match is found
 *
 * @method Engineer findOneByUid(int $uid) Return the first Engineer filtered by the uid column
 * @method Engineer findOneByName(string $name) Return the first Engineer filtered by the name column
 * @method Engineer findOneBySpecialty(string $specialty) Return the first Engineer filtered by the specialty column
 *
 * @method array findByEngineerId(int $engineer_id) Return Engineer objects filtered by the engineer_id column
 * @method array findByUid(int $uid) Return Engineer objects filtered by the uid column
 * @method array findByName(string $name) Return Engineer objects filtered by the name column
 * @method array findBySpecialty(string $specialty) Return Engineer objects filtered by the specialty column
 *
 * @package    propel.generator.Soportando.om
 */
abstract class BaseEngineerQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEngineerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Soportando', $modelName = 'Engineer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EngineerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EngineerQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EngineerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EngineerQuery) {
            return $criteria;
        }
        $query = new EngineerQuery();
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
     * @return   Engineer|Engineer[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EngineerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EngineerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Engineer A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByEngineerId($key, $con = null)
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
     * @return                 Engineer A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `engineer_id`, `uid`, `name`, `specialty` FROM `engineer` WHERE `engineer_id` = :p0';
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
            $obj = new Engineer();
            $obj->hydrate($row);
            EngineerPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Engineer|Engineer[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Engineer[]|mixed the list of results, formatted by the current formatter
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
     * @return EngineerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EngineerPeer::ENGINEER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EngineerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EngineerPeer::ENGINEER_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the engineer_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEngineerId(1234); // WHERE engineer_id = 1234
     * $query->filterByEngineerId(array(12, 34)); // WHERE engineer_id IN (12, 34)
     * $query->filterByEngineerId(array('min' => 12)); // WHERE engineer_id >= 12
     * $query->filterByEngineerId(array('max' => 12)); // WHERE engineer_id <= 12
     * </code>
     *
     * @param     mixed $engineerId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EngineerQuery The current query, for fluid interface
     */
    public function filterByEngineerId($engineerId = null, $comparison = null)
    {
        if (is_array($engineerId)) {
            $useMinMax = false;
            if (isset($engineerId['min'])) {
                $this->addUsingAlias(EngineerPeer::ENGINEER_ID, $engineerId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($engineerId['max'])) {
                $this->addUsingAlias(EngineerPeer::ENGINEER_ID, $engineerId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EngineerPeer::ENGINEER_ID, $engineerId, $comparison);
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
     * @return EngineerQuery The current query, for fluid interface
     */
    public function filterByUid($uid = null, $comparison = null)
    {
        if (is_array($uid)) {
            $useMinMax = false;
            if (isset($uid['min'])) {
                $this->addUsingAlias(EngineerPeer::UID, $uid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uid['max'])) {
                $this->addUsingAlias(EngineerPeer::UID, $uid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EngineerPeer::UID, $uid, $comparison);
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
     * @return EngineerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EngineerPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the specialty column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecialty('fooValue');   // WHERE specialty = 'fooValue'
     * $query->filterBySpecialty('%fooValue%'); // WHERE specialty LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specialty The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EngineerQuery The current query, for fluid interface
     */
    public function filterBySpecialty($specialty = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specialty)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $specialty)) {
                $specialty = str_replace('*', '%', $specialty);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EngineerPeer::SPECIALTY, $specialty, $comparison);
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EngineerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(EngineerPeer::UID, $user->getUid(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EngineerPeer::UID, $user->toKeyValue('PrimaryKey', 'Uid'), $comparison);
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
     * @return EngineerQuery The current query, for fluid interface
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
     * Filter the query by a related Ticket object
     *
     * @param   Ticket|PropelObjectCollection $ticket  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EngineerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicket($ticket, $comparison = null)
    {
        if ($ticket instanceof Ticket) {
            return $this
                ->addUsingAlias(EngineerPeer::ENGINEER_ID, $ticket->getEngineerId(), $comparison);
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
     * @return EngineerQuery The current query, for fluid interface
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
     * @param   Engineer $engineer Object to remove from the list of results
     *
     * @return EngineerQuery The current query, for fluid interface
     */
    public function prune($engineer = null)
    {
        if ($engineer) {
            $this->addUsingAlias(EngineerPeer::ENGINEER_ID, $engineer->getEngineerId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
