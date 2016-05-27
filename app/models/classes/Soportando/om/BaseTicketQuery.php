<?php


/**
 * Base class that represents a query for the 'ticket' table.
 *
 *
 *
 * @method TicketQuery orderByTicketId($order = Criteria::ASC) Order by the ticket_id column
 * @method TicketQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method TicketQuery orderByReproducibility($order = Criteria::ASC) Order by the reproducibility column
 * @method TicketQuery orderByCid($order = Criteria::ASC) Order by the cid column
 * @method TicketQuery orderByEngineerId($order = Criteria::ASC) Order by the engineer_id column
 * @method TicketQuery orderByTicketTypeId($order = Criteria::ASC) Order by the ticket_type_id column
 * @method TicketQuery orderByCompanyId($order = Criteria::ASC) Order by the company_id column
 * @method TicketQuery orderByModuleId($order = Criteria::ASC) Order by the module_id column
 * @method TicketQuery orderByPriorityId($order = Criteria::ASC) Order by the priority_id column
 * @method TicketQuery orderByTicketStatusId($order = Criteria::ASC) Order by the ticket_status_id column
 * @method TicketQuery orderByStatusDate($order = Criteria::ASC) Order by the status_date column
 *
 * @method TicketQuery groupByTicketId() Group by the ticket_id column
 * @method TicketQuery groupByDescription() Group by the description column
 * @method TicketQuery groupByReproducibility() Group by the reproducibility column
 * @method TicketQuery groupByCid() Group by the cid column
 * @method TicketQuery groupByEngineerId() Group by the engineer_id column
 * @method TicketQuery groupByTicketTypeId() Group by the ticket_type_id column
 * @method TicketQuery groupByCompanyId() Group by the company_id column
 * @method TicketQuery groupByModuleId() Group by the module_id column
 * @method TicketQuery groupByPriorityId() Group by the priority_id column
 * @method TicketQuery groupByTicketStatusId() Group by the ticket_status_id column
 * @method TicketQuery groupByStatusDate() Group by the status_date column
 *
 * @method TicketQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TicketQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TicketQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TicketQuery leftJoinCompany($relationAlias = null) Adds a LEFT JOIN clause to the query using the Company relation
 * @method TicketQuery rightJoinCompany($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Company relation
 * @method TicketQuery innerJoinCompany($relationAlias = null) Adds a INNER JOIN clause to the query using the Company relation
 *
 * @method TicketQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method TicketQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method TicketQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method TicketQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method TicketQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method TicketQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method TicketQuery leftJoinModule($relationAlias = null) Adds a LEFT JOIN clause to the query using the Module relation
 * @method TicketQuery rightJoinModule($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Module relation
 * @method TicketQuery innerJoinModule($relationAlias = null) Adds a INNER JOIN clause to the query using the Module relation
 *
 * @method TicketQuery leftJoinTicketPriority($relationAlias = null) Adds a LEFT JOIN clause to the query using the TicketPriority relation
 * @method TicketQuery rightJoinTicketPriority($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TicketPriority relation
 * @method TicketQuery innerJoinTicketPriority($relationAlias = null) Adds a INNER JOIN clause to the query using the TicketPriority relation
 *
 * @method TicketQuery leftJoinTicketStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the TicketStatus relation
 * @method TicketQuery rightJoinTicketStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TicketStatus relation
 * @method TicketQuery innerJoinTicketStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the TicketStatus relation
 *
 * @method TicketQuery leftJoinTicketType($relationAlias = null) Adds a LEFT JOIN clause to the query using the TicketType relation
 * @method TicketQuery rightJoinTicketType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TicketType relation
 * @method TicketQuery innerJoinTicketType($relationAlias = null) Adds a INNER JOIN clause to the query using the TicketType relation
 *
 * @method TicketQuery leftJoinTicketComment($relationAlias = null) Adds a LEFT JOIN clause to the query using the TicketComment relation
 * @method TicketQuery rightJoinTicketComment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TicketComment relation
 * @method TicketQuery innerJoinTicketComment($relationAlias = null) Adds a INNER JOIN clause to the query using the TicketComment relation
 *
 * @method TicketQuery leftJoinTicketHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the TicketHistory relation
 * @method TicketQuery rightJoinTicketHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TicketHistory relation
 * @method TicketQuery innerJoinTicketHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the TicketHistory relation
 *
 * @method Ticket findOne(PropelPDO $con = null) Return the first Ticket matching the query
 * @method Ticket findOneOrCreate(PropelPDO $con = null) Return the first Ticket matching the query, or a new Ticket object populated from the query conditions when no match is found
 *
 * @method Ticket findOneByDescription(string $description) Return the first Ticket filtered by the description column
 * @method Ticket findOneByReproducibility(string $reproducibility) Return the first Ticket filtered by the reproducibility column
 * @method Ticket findOneByCid(int $cid) Return the first Ticket filtered by the cid column
 * @method Ticket findOneByEngineerId(int $engineer_id) Return the first Ticket filtered by the engineer_id column
 * @method Ticket findOneByTicketTypeId(int $ticket_type_id) Return the first Ticket filtered by the ticket_type_id column
 * @method Ticket findOneByCompanyId(int $company_id) Return the first Ticket filtered by the company_id column
 * @method Ticket findOneByModuleId(int $module_id) Return the first Ticket filtered by the module_id column
 * @method Ticket findOneByPriorityId(int $priority_id) Return the first Ticket filtered by the priority_id column
 * @method Ticket findOneByTicketStatusId(int $ticket_status_id) Return the first Ticket filtered by the ticket_status_id column
 * @method Ticket findOneByStatusDate(string $status_date) Return the first Ticket filtered by the status_date column
 *
 * @method array findByTicketId(int $ticket_id) Return Ticket objects filtered by the ticket_id column
 * @method array findByDescription(string $description) Return Ticket objects filtered by the description column
 * @method array findByReproducibility(string $reproducibility) Return Ticket objects filtered by the reproducibility column
 * @method array findByCid(int $cid) Return Ticket objects filtered by the cid column
 * @method array findByEngineerId(int $engineer_id) Return Ticket objects filtered by the engineer_id column
 * @method array findByTicketTypeId(int $ticket_type_id) Return Ticket objects filtered by the ticket_type_id column
 * @method array findByCompanyId(int $company_id) Return Ticket objects filtered by the company_id column
 * @method array findByModuleId(int $module_id) Return Ticket objects filtered by the module_id column
 * @method array findByPriorityId(int $priority_id) Return Ticket objects filtered by the priority_id column
 * @method array findByTicketStatusId(int $ticket_status_id) Return Ticket objects filtered by the ticket_status_id column
 * @method array findByStatusDate(string $status_date) Return Ticket objects filtered by the status_date column
 *
 * @package    propel.generator.Soportando.om
 */
abstract class BaseTicketQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTicketQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Soportando', $modelName = 'Ticket', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TicketQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TicketQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TicketQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TicketQuery) {
            return $criteria;
        }
        $query = new TicketQuery();
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
     * @return   Ticket|Ticket[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TicketPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ticket A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByTicketId($key, $con = null)
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
     * @return                 Ticket A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ticket_id`, `description`, `reproducibility`, `cid`, `engineer_id`, `ticket_type_id`, `company_id`, `module_id`, `priority_id`, `ticket_status_id`, `status_date` FROM `ticket` WHERE `ticket_id` = :p0';
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
            $obj = new Ticket();
            $obj->hydrate($row);
            TicketPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ticket|Ticket[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ticket[]|mixed the list of results, formatted by the current formatter
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
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TicketPeer::TICKET_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TicketPeer::TICKET_ID, $keys, Criteria::IN);
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
     * @param     mixed $ticketId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByTicketId($ticketId = null, $comparison = null)
    {
        if (is_array($ticketId)) {
            $useMinMax = false;
            if (isset($ticketId['min'])) {
                $this->addUsingAlias(TicketPeer::TICKET_ID, $ticketId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ticketId['max'])) {
                $this->addUsingAlias(TicketPeer::TICKET_ID, $ticketId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketPeer::TICKET_ID, $ticketId, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TicketPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the reproducibility column
     *
     * Example usage:
     * <code>
     * $query->filterByReproducibility('fooValue');   // WHERE reproducibility = 'fooValue'
     * $query->filterByReproducibility('%fooValue%'); // WHERE reproducibility LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reproducibility The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByReproducibility($reproducibility = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reproducibility)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reproducibility)) {
                $reproducibility = str_replace('*', '%', $reproducibility);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TicketPeer::REPRODUCIBILITY, $reproducibility, $comparison);
    }

    /**
     * Filter the query on the cid column
     *
     * Example usage:
     * <code>
     * $query->filterByCid(1234); // WHERE cid = 1234
     * $query->filterByCid(array(12, 34)); // WHERE cid IN (12, 34)
     * $query->filterByCid(array('min' => 12)); // WHERE cid >= 12
     * $query->filterByCid(array('max' => 12)); // WHERE cid <= 12
     * </code>
     *
     * @see       filterByCustomer()
     *
     * @param     mixed $cid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByCid($cid = null, $comparison = null)
    {
        if (is_array($cid)) {
            $useMinMax = false;
            if (isset($cid['min'])) {
                $this->addUsingAlias(TicketPeer::CID, $cid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cid['max'])) {
                $this->addUsingAlias(TicketPeer::CID, $cid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketPeer::CID, $cid, $comparison);
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
     * @see       filterByUser()
     *
     * @param     mixed $engineerId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByEngineerId($engineerId = null, $comparison = null)
    {
        if (is_array($engineerId)) {
            $useMinMax = false;
            if (isset($engineerId['min'])) {
                $this->addUsingAlias(TicketPeer::ENGINEER_ID, $engineerId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($engineerId['max'])) {
                $this->addUsingAlias(TicketPeer::ENGINEER_ID, $engineerId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketPeer::ENGINEER_ID, $engineerId, $comparison);
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
     * @see       filterByTicketType()
     *
     * @param     mixed $ticketTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByTicketTypeId($ticketTypeId = null, $comparison = null)
    {
        if (is_array($ticketTypeId)) {
            $useMinMax = false;
            if (isset($ticketTypeId['min'])) {
                $this->addUsingAlias(TicketPeer::TICKET_TYPE_ID, $ticketTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ticketTypeId['max'])) {
                $this->addUsingAlias(TicketPeer::TICKET_TYPE_ID, $ticketTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketPeer::TICKET_TYPE_ID, $ticketTypeId, $comparison);
    }

    /**
     * Filter the query on the company_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCompanyId(1234); // WHERE company_id = 1234
     * $query->filterByCompanyId(array(12, 34)); // WHERE company_id IN (12, 34)
     * $query->filterByCompanyId(array('min' => 12)); // WHERE company_id >= 12
     * $query->filterByCompanyId(array('max' => 12)); // WHERE company_id <= 12
     * </code>
     *
     * @see       filterByCompany()
     *
     * @param     mixed $companyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByCompanyId($companyId = null, $comparison = null)
    {
        if (is_array($companyId)) {
            $useMinMax = false;
            if (isset($companyId['min'])) {
                $this->addUsingAlias(TicketPeer::COMPANY_ID, $companyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($companyId['max'])) {
                $this->addUsingAlias(TicketPeer::COMPANY_ID, $companyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketPeer::COMPANY_ID, $companyId, $comparison);
    }

    /**
     * Filter the query on the module_id column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleId(1234); // WHERE module_id = 1234
     * $query->filterByModuleId(array(12, 34)); // WHERE module_id IN (12, 34)
     * $query->filterByModuleId(array('min' => 12)); // WHERE module_id >= 12
     * $query->filterByModuleId(array('max' => 12)); // WHERE module_id <= 12
     * </code>
     *
     * @see       filterByModule()
     *
     * @param     mixed $moduleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByModuleId($moduleId = null, $comparison = null)
    {
        if (is_array($moduleId)) {
            $useMinMax = false;
            if (isset($moduleId['min'])) {
                $this->addUsingAlias(TicketPeer::MODULE_ID, $moduleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($moduleId['max'])) {
                $this->addUsingAlias(TicketPeer::MODULE_ID, $moduleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketPeer::MODULE_ID, $moduleId, $comparison);
    }

    /**
     * Filter the query on the priority_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPriorityId(1234); // WHERE priority_id = 1234
     * $query->filterByPriorityId(array(12, 34)); // WHERE priority_id IN (12, 34)
     * $query->filterByPriorityId(array('min' => 12)); // WHERE priority_id >= 12
     * $query->filterByPriorityId(array('max' => 12)); // WHERE priority_id <= 12
     * </code>
     *
     * @see       filterByTicketPriority()
     *
     * @param     mixed $priorityId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByPriorityId($priorityId = null, $comparison = null)
    {
        if (is_array($priorityId)) {
            $useMinMax = false;
            if (isset($priorityId['min'])) {
                $this->addUsingAlias(TicketPeer::PRIORITY_ID, $priorityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($priorityId['max'])) {
                $this->addUsingAlias(TicketPeer::PRIORITY_ID, $priorityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketPeer::PRIORITY_ID, $priorityId, $comparison);
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
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByTicketStatusId($ticketStatusId = null, $comparison = null)
    {
        if (is_array($ticketStatusId)) {
            $useMinMax = false;
            if (isset($ticketStatusId['min'])) {
                $this->addUsingAlias(TicketPeer::TICKET_STATUS_ID, $ticketStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ticketStatusId['max'])) {
                $this->addUsingAlias(TicketPeer::TICKET_STATUS_ID, $ticketStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketPeer::TICKET_STATUS_ID, $ticketStatusId, $comparison);
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
     * @return TicketQuery The current query, for fluid interface
     */
    public function filterByStatusDate($statusDate = null, $comparison = null)
    {
        if (is_array($statusDate)) {
            $useMinMax = false;
            if (isset($statusDate['min'])) {
                $this->addUsingAlias(TicketPeer::STATUS_DATE, $statusDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statusDate['max'])) {
                $this->addUsingAlias(TicketPeer::STATUS_DATE, $statusDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TicketPeer::STATUS_DATE, $statusDate, $comparison);
    }

    /**
     * Filter the query by a related Company object
     *
     * @param   Company|PropelObjectCollection $company The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompany($company, $comparison = null)
    {
        if ($company instanceof Company) {
            return $this
                ->addUsingAlias(TicketPeer::COMPANY_ID, $company->getCompanyId(), $comparison);
        } elseif ($company instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TicketPeer::COMPANY_ID, $company->toKeyValue('PrimaryKey', 'CompanyId'), $comparison);
        } else {
            throw new PropelException('filterByCompany() only accepts arguments of type Company or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Company relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function joinCompany($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Company');

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
            $this->addJoinObject($join, 'Company');
        }

        return $this;
    }

    /**
     * Use the Company relation Company object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompanyQuery A secondary query class using the current class as primary query
     */
    public function useCompanyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompany($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Company', 'CompanyQuery');
    }

    /**
     * Filter the query by a related Customer object
     *
     * @param   Customer|PropelObjectCollection $customer The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof Customer) {
            return $this
                ->addUsingAlias(TicketPeer::CID, $customer->getCid(), $comparison);
        } elseif ($customer instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TicketPeer::CID, $customer->toKeyValue('PrimaryKey', 'Cid'), $comparison);
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type Customer or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customer');

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
            $this->addJoinObject($join, 'Customer');
        }

        return $this;
    }

    /**
     * Use the Customer relation Customer object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CustomerQuery A secondary query class using the current class as primary query
     */
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customer', 'CustomerQuery');
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(TicketPeer::ENGINEER_ID, $user->getUid(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TicketPeer::ENGINEER_ID, $user->toKeyValue('PrimaryKey', 'Uid'), $comparison);
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
     * @return TicketQuery The current query, for fluid interface
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
     * Filter the query by a related Module object
     *
     * @param   Module|PropelObjectCollection $module The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByModule($module, $comparison = null)
    {
        if ($module instanceof Module) {
            return $this
                ->addUsingAlias(TicketPeer::MODULE_ID, $module->getModuleId(), $comparison);
        } elseif ($module instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TicketPeer::MODULE_ID, $module->toKeyValue('PrimaryKey', 'ModuleId'), $comparison);
        } else {
            throw new PropelException('filterByModule() only accepts arguments of type Module or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Module relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function joinModule($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Module');

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
            $this->addJoinObject($join, 'Module');
        }

        return $this;
    }

    /**
     * Use the Module relation Module object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ModuleQuery A secondary query class using the current class as primary query
     */
    public function useModuleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinModule($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Module', 'ModuleQuery');
    }

    /**
     * Filter the query by a related TicketPriority object
     *
     * @param   TicketPriority|PropelObjectCollection $ticketPriority The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicketPriority($ticketPriority, $comparison = null)
    {
        if ($ticketPriority instanceof TicketPriority) {
            return $this
                ->addUsingAlias(TicketPeer::PRIORITY_ID, $ticketPriority->getPriorityId(), $comparison);
        } elseif ($ticketPriority instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TicketPeer::PRIORITY_ID, $ticketPriority->toKeyValue('PrimaryKey', 'PriorityId'), $comparison);
        } else {
            throw new PropelException('filterByTicketPriority() only accepts arguments of type TicketPriority or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TicketPriority relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function joinTicketPriority($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TicketPriority');

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
            $this->addJoinObject($join, 'TicketPriority');
        }

        return $this;
    }

    /**
     * Use the TicketPriority relation TicketPriority object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TicketPriorityQuery A secondary query class using the current class as primary query
     */
    public function useTicketPriorityQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTicketPriority($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TicketPriority', 'TicketPriorityQuery');
    }

    /**
     * Filter the query by a related TicketStatus object
     *
     * @param   TicketStatus|PropelObjectCollection $ticketStatus The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicketStatus($ticketStatus, $comparison = null)
    {
        if ($ticketStatus instanceof TicketStatus) {
            return $this
                ->addUsingAlias(TicketPeer::TICKET_STATUS_ID, $ticketStatus->getTicketStatusId(), $comparison);
        } elseif ($ticketStatus instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TicketPeer::TICKET_STATUS_ID, $ticketStatus->toKeyValue('PrimaryKey', 'TicketStatusId'), $comparison);
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
     * @return TicketQuery The current query, for fluid interface
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
     * Filter the query by a related TicketType object
     *
     * @param   TicketType|PropelObjectCollection $ticketType The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicketType($ticketType, $comparison = null)
    {
        if ($ticketType instanceof TicketType) {
            return $this
                ->addUsingAlias(TicketPeer::TICKET_TYPE_ID, $ticketType->getTicketTypeId(), $comparison);
        } elseif ($ticketType instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TicketPeer::TICKET_TYPE_ID, $ticketType->toKeyValue('PrimaryKey', 'TicketTypeId'), $comparison);
        } else {
            throw new PropelException('filterByTicketType() only accepts arguments of type TicketType or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TicketType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function joinTicketType($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TicketType');

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
            $this->addJoinObject($join, 'TicketType');
        }

        return $this;
    }

    /**
     * Use the TicketType relation TicketType object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TicketTypeQuery A secondary query class using the current class as primary query
     */
    public function useTicketTypeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTicketType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TicketType', 'TicketTypeQuery');
    }

    /**
     * Filter the query by a related TicketComment object
     *
     * @param   TicketComment|PropelObjectCollection $ticketComment  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicketComment($ticketComment, $comparison = null)
    {
        if ($ticketComment instanceof TicketComment) {
            return $this
                ->addUsingAlias(TicketPeer::TICKET_ID, $ticketComment->getTicketId(), $comparison);
        } elseif ($ticketComment instanceof PropelObjectCollection) {
            return $this
                ->useTicketCommentQuery()
                ->filterByPrimaryKeys($ticketComment->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTicketComment() only accepts arguments of type TicketComment or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TicketComment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function joinTicketComment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TicketComment');

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
            $this->addJoinObject($join, 'TicketComment');
        }

        return $this;
    }

    /**
     * Use the TicketComment relation TicketComment object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TicketCommentQuery A secondary query class using the current class as primary query
     */
    public function useTicketCommentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTicketComment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TicketComment', 'TicketCommentQuery');
    }

    /**
     * Filter the query by a related TicketHistory object
     *
     * @param   TicketHistory|PropelObjectCollection $ticketHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TicketQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTicketHistory($ticketHistory, $comparison = null)
    {
        if ($ticketHistory instanceof TicketHistory) {
            return $this
                ->addUsingAlias(TicketPeer::TICKET_ID, $ticketHistory->getTicketId(), $comparison);
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
     * @return TicketQuery The current query, for fluid interface
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
     * @param   Ticket $ticket Object to remove from the list of results
     *
     * @return TicketQuery The current query, for fluid interface
     */
    public function prune($ticket = null)
    {
        if ($ticket) {
            $this->addUsingAlias(TicketPeer::TICKET_ID, $ticket->getTicketId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
