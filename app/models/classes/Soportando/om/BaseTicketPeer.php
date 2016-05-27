<?php


/**
 * Base static class for performing query and update operations on the 'ticket' table.
 *
 *
 *
 * @package propel.generator.Soportando.om
 */
abstract class BaseTicketPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'Soportando';

    /** the table name for this class */
    const TABLE_NAME = 'ticket';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ticket';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TicketTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the ticket_id field */
    const TICKET_ID = 'ticket.ticket_id';

    /** the column name for the description field */
    const DESCRIPTION = 'ticket.description';

    /** the column name for the reproducibility field */
    const REPRODUCIBILITY = 'ticket.reproducibility';

    /** the column name for the cid field */
    const CID = 'ticket.cid';

    /** the column name for the engineer_id field */
    const ENGINEER_ID = 'ticket.engineer_id';

    /** the column name for the ticket_type_id field */
    const TICKET_TYPE_ID = 'ticket.ticket_type_id';

    /** the column name for the company_id field */
    const COMPANY_ID = 'ticket.company_id';

    /** the column name for the module_id field */
    const MODULE_ID = 'ticket.module_id';

    /** the column name for the priority_id field */
    const PRIORITY_ID = 'ticket.priority_id';

    /** the column name for the ticket_status_id field */
    const TICKET_STATUS_ID = 'ticket.ticket_status_id';

    /** the column name for the status_date field */
    const STATUS_DATE = 'ticket.status_date';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Ticket objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ticket[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TicketPeer::$fieldNames[TicketPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('TicketId', 'Description', 'Reproducibility', 'Cid', 'EngineerId', 'TicketTypeId', 'CompanyId', 'ModuleId', 'PriorityId', 'TicketStatusId', 'StatusDate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ticketId', 'description', 'reproducibility', 'cid', 'engineerId', 'ticketTypeId', 'companyId', 'moduleId', 'priorityId', 'ticketStatusId', 'statusDate', ),
        BasePeer::TYPE_COLNAME => array (TicketPeer::TICKET_ID, TicketPeer::DESCRIPTION, TicketPeer::REPRODUCIBILITY, TicketPeer::CID, TicketPeer::ENGINEER_ID, TicketPeer::TICKET_TYPE_ID, TicketPeer::COMPANY_ID, TicketPeer::MODULE_ID, TicketPeer::PRIORITY_ID, TicketPeer::TICKET_STATUS_ID, TicketPeer::STATUS_DATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('TICKET_ID', 'DESCRIPTION', 'REPRODUCIBILITY', 'CID', 'ENGINEER_ID', 'TICKET_TYPE_ID', 'COMPANY_ID', 'MODULE_ID', 'PRIORITY_ID', 'TICKET_STATUS_ID', 'STATUS_DATE', ),
        BasePeer::TYPE_FIELDNAME => array ('ticket_id', 'description', 'reproducibility', 'cid', 'engineer_id', 'ticket_type_id', 'company_id', 'module_id', 'priority_id', 'ticket_status_id', 'status_date', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TicketPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('TicketId' => 0, 'Description' => 1, 'Reproducibility' => 2, 'Cid' => 3, 'EngineerId' => 4, 'TicketTypeId' => 5, 'CompanyId' => 6, 'ModuleId' => 7, 'PriorityId' => 8, 'TicketStatusId' => 9, 'StatusDate' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ticketId' => 0, 'description' => 1, 'reproducibility' => 2, 'cid' => 3, 'engineerId' => 4, 'ticketTypeId' => 5, 'companyId' => 6, 'moduleId' => 7, 'priorityId' => 8, 'ticketStatusId' => 9, 'statusDate' => 10, ),
        BasePeer::TYPE_COLNAME => array (TicketPeer::TICKET_ID => 0, TicketPeer::DESCRIPTION => 1, TicketPeer::REPRODUCIBILITY => 2, TicketPeer::CID => 3, TicketPeer::ENGINEER_ID => 4, TicketPeer::TICKET_TYPE_ID => 5, TicketPeer::COMPANY_ID => 6, TicketPeer::MODULE_ID => 7, TicketPeer::PRIORITY_ID => 8, TicketPeer::TICKET_STATUS_ID => 9, TicketPeer::STATUS_DATE => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('TICKET_ID' => 0, 'DESCRIPTION' => 1, 'REPRODUCIBILITY' => 2, 'CID' => 3, 'ENGINEER_ID' => 4, 'TICKET_TYPE_ID' => 5, 'COMPANY_ID' => 6, 'MODULE_ID' => 7, 'PRIORITY_ID' => 8, 'TICKET_STATUS_ID' => 9, 'STATUS_DATE' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('ticket_id' => 0, 'description' => 1, 'reproducibility' => 2, 'cid' => 3, 'engineer_id' => 4, 'ticket_type_id' => 5, 'company_id' => 6, 'module_id' => 7, 'priority_id' => 8, 'ticket_status_id' => 9, 'status_date' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = TicketPeer::getFieldNames($toType);
        $key = isset(TicketPeer::$fieldKeys[$fromType][$name]) ? TicketPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TicketPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, TicketPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TicketPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. TicketPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TicketPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(TicketPeer::TICKET_ID);
            $criteria->addSelectColumn(TicketPeer::DESCRIPTION);
            $criteria->addSelectColumn(TicketPeer::REPRODUCIBILITY);
            $criteria->addSelectColumn(TicketPeer::CID);
            $criteria->addSelectColumn(TicketPeer::ENGINEER_ID);
            $criteria->addSelectColumn(TicketPeer::TICKET_TYPE_ID);
            $criteria->addSelectColumn(TicketPeer::COMPANY_ID);
            $criteria->addSelectColumn(TicketPeer::MODULE_ID);
            $criteria->addSelectColumn(TicketPeer::PRIORITY_ID);
            $criteria->addSelectColumn(TicketPeer::TICKET_STATUS_ID);
            $criteria->addSelectColumn(TicketPeer::STATUS_DATE);
        } else {
            $criteria->addSelectColumn($alias . '.ticket_id');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.reproducibility');
            $criteria->addSelectColumn($alias . '.cid');
            $criteria->addSelectColumn($alias . '.engineer_id');
            $criteria->addSelectColumn($alias . '.ticket_type_id');
            $criteria->addSelectColumn($alias . '.company_id');
            $criteria->addSelectColumn($alias . '.module_id');
            $criteria->addSelectColumn($alias . '.priority_id');
            $criteria->addSelectColumn($alias . '.ticket_status_id');
            $criteria->addSelectColumn($alias . '.status_date');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TicketPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 Ticket
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TicketPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return TicketPeer::populateObjects(TicketPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TicketPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      Ticket $obj A Ticket object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getTicketId();
            } // if key === null
            TicketPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Ticket object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ticket) {
                $key = (string) $value->getTicketId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ticket object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TicketPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Ticket Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TicketPeer::$instances[$key])) {
                return TicketPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references)
      {
        foreach (TicketPeer::$instances as $instance)
        {
          $instance->clearAllReferences(true);
        }
      }
        TicketPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to ticket
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in TicketCommentPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        TicketCommentPeer::clearInstancePool();
        // Invalidate objects in TicketHistoryPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        TicketHistoryPeer::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = TicketPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TicketPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TicketPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Ticket object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TicketPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TicketPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TicketPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TicketPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TicketPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Company table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCompany(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Customer table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCustomer(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Module table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinModule(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TicketPriority table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTicketPriority(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TicketStatus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTicketStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TicketType table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTicketType(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with their Company objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCompany(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol = TicketPeer::NUM_HYDRATE_COLUMNS;
        CompanyPeer::addSelectColumns($criteria);

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CompanyPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CompanyPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CompanyPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ticket) to $obj2 (Company)
                $obj2->addTicket($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with their Customer objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCustomer(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol = TicketPeer::NUM_HYDRATE_COLUMNS;
        CustomerPeer::addSelectColumns($criteria);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CustomerPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CustomerPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CustomerPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CustomerPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ticket) to $obj2 (Customer)
                $obj2->addTicket($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with their User objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol = TicketPeer::NUM_HYDRATE_COLUMNS;
        UserPeer::addSelectColumns($criteria);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ticket) to $obj2 (User)
                $obj2->addTicket($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with their Module objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinModule(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol = TicketPeer::NUM_HYDRATE_COLUMNS;
        ModulePeer::addSelectColumns($criteria);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ModulePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ModulePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ModulePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ModulePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ticket) to $obj2 (Module)
                $obj2->addTicket($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with their TicketPriority objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTicketPriority(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol = TicketPeer::NUM_HYDRATE_COLUMNS;
        TicketPriorityPeer::addSelectColumns($criteria);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TicketPriorityPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TicketPriorityPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TicketPriorityPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TicketPriorityPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ticket) to $obj2 (TicketPriority)
                $obj2->addTicket($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with their TicketStatus objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTicketStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol = TicketPeer::NUM_HYDRATE_COLUMNS;
        TicketStatusPeer::addSelectColumns($criteria);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TicketStatusPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TicketStatusPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TicketStatusPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TicketStatusPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ticket) to $obj2 (TicketStatus)
                $obj2->addTicket($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with their TicketType objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTicketType(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol = TicketPeer::NUM_HYDRATE_COLUMNS;
        TicketTypePeer::addSelectColumns($criteria);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TicketTypePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TicketTypePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TicketTypePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TicketTypePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ticket) to $obj2 (TicketType)
                $obj2->addTicket($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Ticket objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol2 = TicketPeer::NUM_HYDRATE_COLUMNS;

        CompanyPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompanyPeer::NUM_HYDRATE_COLUMNS;

        CustomerPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CustomerPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UserPeer::NUM_HYDRATE_COLUMNS;

        ModulePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ModulePeer::NUM_HYDRATE_COLUMNS;

        TicketPriorityPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + TicketPriorityPeer::NUM_HYDRATE_COLUMNS;

        TicketStatusPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + TicketStatusPeer::NUM_HYDRATE_COLUMNS;

        TicketTypePeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + TicketTypePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Company rows

            $key2 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CompanyPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CompanyPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompanyPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Ticket) to the collection in $obj2 (Company)
                $obj2->addTicket($obj1);
            } // if joined row not null

            // Add objects for joined Customer rows

            $key3 = CustomerPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CustomerPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CustomerPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CustomerPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Ticket) to the collection in $obj3 (Customer)
                $obj3->addTicket($obj1);
            } // if joined row not null

            // Add objects for joined User rows

            $key4 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = UserPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = UserPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UserPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Ticket) to the collection in $obj4 (User)
                $obj4->addTicket($obj1);
            } // if joined row not null

            // Add objects for joined Module rows

            $key5 = ModulePeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = ModulePeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = ModulePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ModulePeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Ticket) to the collection in $obj5 (Module)
                $obj5->addTicket($obj1);
            } // if joined row not null

            // Add objects for joined TicketPriority rows

            $key6 = TicketPriorityPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = TicketPriorityPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = TicketPriorityPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    TicketPriorityPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Ticket) to the collection in $obj6 (TicketPriority)
                $obj6->addTicket($obj1);
            } // if joined row not null

            // Add objects for joined TicketStatus rows

            $key7 = TicketStatusPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = TicketStatusPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = TicketStatusPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    TicketStatusPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (Ticket) to the collection in $obj7 (TicketStatus)
                $obj7->addTicket($obj1);
            } // if joined row not null

            // Add objects for joined TicketType rows

            $key8 = TicketTypePeer::getPrimaryKeyHashFromRow($row, $startcol8);
            if ($key8 !== null) {
                $obj8 = TicketTypePeer::getInstanceFromPool($key8);
                if (!$obj8) {

                    $cls = TicketTypePeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    TicketTypePeer::addInstanceToPool($obj8, $key8);
                } // if obj8 loaded

                // Add the $obj1 (Ticket) to the collection in $obj8 (TicketType)
                $obj8->addTicket($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Company table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCompany(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Customer table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCustomer(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Module table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptModule(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TicketPriority table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTicketPriority(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TicketStatus table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTicketStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TicketType table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTicketType(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TicketPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TicketPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with all related objects except Company.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCompany(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol2 = TicketPeer::NUM_HYDRATE_COLUMNS;

        CustomerPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UserPeer::NUM_HYDRATE_COLUMNS;

        ModulePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ModulePeer::NUM_HYDRATE_COLUMNS;

        TicketPriorityPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TicketPriorityPeer::NUM_HYDRATE_COLUMNS;

        TicketStatusPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + TicketStatusPeer::NUM_HYDRATE_COLUMNS;

        TicketTypePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + TicketTypePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Customer rows

                $key2 = CustomerPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CustomerPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CustomerPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CustomerPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj2 (Customer)
                $obj2->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined User rows

                $key3 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UserPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UserPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UserPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj3 (User)
                $obj3->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Module rows

                $key4 = ModulePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ModulePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ModulePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ModulePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj4 (Module)
                $obj4->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketPriority rows

                $key5 = TicketPriorityPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = TicketPriorityPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = TicketPriorityPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TicketPriorityPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj5 (TicketPriority)
                $obj5->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketStatus rows

                $key6 = TicketStatusPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = TicketStatusPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = TicketStatusPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    TicketStatusPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj6 (TicketStatus)
                $obj6->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketType rows

                $key7 = TicketTypePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = TicketTypePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = TicketTypePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    TicketTypePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj7 (TicketType)
                $obj7->addTicket($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with all related objects except Customer.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCustomer(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol2 = TicketPeer::NUM_HYDRATE_COLUMNS;

        CompanyPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompanyPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UserPeer::NUM_HYDRATE_COLUMNS;

        ModulePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ModulePeer::NUM_HYDRATE_COLUMNS;

        TicketPriorityPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TicketPriorityPeer::NUM_HYDRATE_COLUMNS;

        TicketStatusPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + TicketStatusPeer::NUM_HYDRATE_COLUMNS;

        TicketTypePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + TicketTypePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Company rows

                $key2 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompanyPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompanyPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompanyPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj2 (Company)
                $obj2->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined User rows

                $key3 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UserPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UserPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UserPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj3 (User)
                $obj3->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Module rows

                $key4 = ModulePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ModulePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ModulePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ModulePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj4 (Module)
                $obj4->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketPriority rows

                $key5 = TicketPriorityPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = TicketPriorityPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = TicketPriorityPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TicketPriorityPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj5 (TicketPriority)
                $obj5->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketStatus rows

                $key6 = TicketStatusPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = TicketStatusPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = TicketStatusPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    TicketStatusPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj6 (TicketStatus)
                $obj6->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketType rows

                $key7 = TicketTypePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = TicketTypePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = TicketTypePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    TicketTypePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj7 (TicketType)
                $obj7->addTicket($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with all related objects except User.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol2 = TicketPeer::NUM_HYDRATE_COLUMNS;

        CompanyPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompanyPeer::NUM_HYDRATE_COLUMNS;

        CustomerPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CustomerPeer::NUM_HYDRATE_COLUMNS;

        ModulePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ModulePeer::NUM_HYDRATE_COLUMNS;

        TicketPriorityPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TicketPriorityPeer::NUM_HYDRATE_COLUMNS;

        TicketStatusPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + TicketStatusPeer::NUM_HYDRATE_COLUMNS;

        TicketTypePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + TicketTypePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Company rows

                $key2 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompanyPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompanyPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompanyPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj2 (Company)
                $obj2->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Customer rows

                $key3 = CustomerPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CustomerPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CustomerPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CustomerPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj3 (Customer)
                $obj3->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Module rows

                $key4 = ModulePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ModulePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ModulePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ModulePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj4 (Module)
                $obj4->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketPriority rows

                $key5 = TicketPriorityPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = TicketPriorityPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = TicketPriorityPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TicketPriorityPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj5 (TicketPriority)
                $obj5->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketStatus rows

                $key6 = TicketStatusPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = TicketStatusPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = TicketStatusPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    TicketStatusPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj6 (TicketStatus)
                $obj6->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketType rows

                $key7 = TicketTypePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = TicketTypePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = TicketTypePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    TicketTypePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj7 (TicketType)
                $obj7->addTicket($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with all related objects except Module.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptModule(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol2 = TicketPeer::NUM_HYDRATE_COLUMNS;

        CompanyPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompanyPeer::NUM_HYDRATE_COLUMNS;

        CustomerPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CustomerPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UserPeer::NUM_HYDRATE_COLUMNS;

        TicketPriorityPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TicketPriorityPeer::NUM_HYDRATE_COLUMNS;

        TicketStatusPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + TicketStatusPeer::NUM_HYDRATE_COLUMNS;

        TicketTypePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + TicketTypePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Company rows

                $key2 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompanyPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompanyPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompanyPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj2 (Company)
                $obj2->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Customer rows

                $key3 = CustomerPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CustomerPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CustomerPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CustomerPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj3 (Customer)
                $obj3->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined User rows

                $key4 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UserPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UserPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UserPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj4 (User)
                $obj4->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketPriority rows

                $key5 = TicketPriorityPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = TicketPriorityPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = TicketPriorityPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TicketPriorityPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj5 (TicketPriority)
                $obj5->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketStatus rows

                $key6 = TicketStatusPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = TicketStatusPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = TicketStatusPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    TicketStatusPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj6 (TicketStatus)
                $obj6->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketType rows

                $key7 = TicketTypePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = TicketTypePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = TicketTypePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    TicketTypePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj7 (TicketType)
                $obj7->addTicket($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with all related objects except TicketPriority.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTicketPriority(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol2 = TicketPeer::NUM_HYDRATE_COLUMNS;

        CompanyPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompanyPeer::NUM_HYDRATE_COLUMNS;

        CustomerPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CustomerPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UserPeer::NUM_HYDRATE_COLUMNS;

        ModulePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ModulePeer::NUM_HYDRATE_COLUMNS;

        TicketStatusPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + TicketStatusPeer::NUM_HYDRATE_COLUMNS;

        TicketTypePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + TicketTypePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Company rows

                $key2 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompanyPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompanyPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompanyPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj2 (Company)
                $obj2->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Customer rows

                $key3 = CustomerPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CustomerPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CustomerPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CustomerPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj3 (Customer)
                $obj3->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined User rows

                $key4 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UserPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UserPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UserPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj4 (User)
                $obj4->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Module rows

                $key5 = ModulePeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ModulePeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ModulePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ModulePeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj5 (Module)
                $obj5->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketStatus rows

                $key6 = TicketStatusPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = TicketStatusPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = TicketStatusPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    TicketStatusPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj6 (TicketStatus)
                $obj6->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketType rows

                $key7 = TicketTypePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = TicketTypePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = TicketTypePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    TicketTypePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj7 (TicketType)
                $obj7->addTicket($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with all related objects except TicketStatus.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTicketStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol2 = TicketPeer::NUM_HYDRATE_COLUMNS;

        CompanyPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompanyPeer::NUM_HYDRATE_COLUMNS;

        CustomerPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CustomerPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UserPeer::NUM_HYDRATE_COLUMNS;

        ModulePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ModulePeer::NUM_HYDRATE_COLUMNS;

        TicketPriorityPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + TicketPriorityPeer::NUM_HYDRATE_COLUMNS;

        TicketTypePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + TicketTypePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_TYPE_ID, TicketTypePeer::TICKET_TYPE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Company rows

                $key2 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompanyPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompanyPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompanyPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj2 (Company)
                $obj2->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Customer rows

                $key3 = CustomerPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CustomerPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CustomerPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CustomerPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj3 (Customer)
                $obj3->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined User rows

                $key4 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UserPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UserPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UserPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj4 (User)
                $obj4->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Module rows

                $key5 = ModulePeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ModulePeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ModulePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ModulePeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj5 (Module)
                $obj5->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketPriority rows

                $key6 = TicketPriorityPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = TicketPriorityPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = TicketPriorityPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    TicketPriorityPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj6 (TicketPriority)
                $obj6->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketType rows

                $key7 = TicketTypePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = TicketTypePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = TicketTypePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    TicketTypePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj7 (TicketType)
                $obj7->addTicket($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ticket objects pre-filled with all related objects except TicketType.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ticket objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTicketType(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TicketPeer::DATABASE_NAME);
        }

        TicketPeer::addSelectColumns($criteria);
        $startcol2 = TicketPeer::NUM_HYDRATE_COLUMNS;

        CompanyPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompanyPeer::NUM_HYDRATE_COLUMNS;

        CustomerPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CustomerPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UserPeer::NUM_HYDRATE_COLUMNS;

        ModulePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ModulePeer::NUM_HYDRATE_COLUMNS;

        TicketPriorityPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + TicketPriorityPeer::NUM_HYDRATE_COLUMNS;

        TicketStatusPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + TicketStatusPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TicketPeer::COMPANY_ID, CompanyPeer::COMPANY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::CID, CustomerPeer::CID, $join_behavior);

        $criteria->addJoin(TicketPeer::ENGINEER_ID, UserPeer::UID, $join_behavior);

        $criteria->addJoin(TicketPeer::MODULE_ID, ModulePeer::MODULE_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::PRIORITY_ID, TicketPriorityPeer::PRIORITY_ID, $join_behavior);

        $criteria->addJoin(TicketPeer::TICKET_STATUS_ID, TicketStatusPeer::TICKET_STATUS_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TicketPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TicketPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TicketPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TicketPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Company rows

                $key2 = CompanyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompanyPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompanyPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompanyPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj2 (Company)
                $obj2->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Customer rows

                $key3 = CustomerPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CustomerPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CustomerPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CustomerPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj3 (Customer)
                $obj3->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined User rows

                $key4 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UserPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UserPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UserPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj4 (User)
                $obj4->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined Module rows

                $key5 = ModulePeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ModulePeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ModulePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ModulePeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj5 (Module)
                $obj5->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketPriority rows

                $key6 = TicketPriorityPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = TicketPriorityPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = TicketPriorityPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    TicketPriorityPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj6 (TicketPriority)
                $obj6->addTicket($obj1);

            } // if joined row is not null

                // Add objects for joined TicketStatus rows

                $key7 = TicketStatusPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = TicketStatusPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = TicketStatusPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    TicketStatusPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Ticket) to the collection in $obj7 (TicketStatus)
                $obj7->addTicket($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(TicketPeer::DATABASE_NAME)->getTable(TicketPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTicketPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTicketPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new TicketTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return TicketPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ticket or Criteria object.
     *
     * @param      mixed $values Criteria or Ticket object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ticket object
        }

        if ($criteria->containsKey(TicketPeer::TICKET_ID) && $criteria->keyContainsValue(TicketPeer::TICKET_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TicketPeer::TICKET_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Ticket or Criteria object.
     *
     * @param      mixed $values Criteria or Ticket object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TicketPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TicketPeer::TICKET_ID);
            $value = $criteria->remove(TicketPeer::TICKET_ID);
            if ($value) {
                $selectCriteria->add(TicketPeer::TICKET_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TicketPeer::TABLE_NAME);
            }

        } else { // $values is Ticket object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ticket table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += TicketPeer::doOnDeleteCascade(new Criteria(TicketPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(TicketPeer::TABLE_NAME, $con, TicketPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TicketPeer::clearInstancePool();
            TicketPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ticket or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ticket object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ticket) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TicketPeer::DATABASE_NAME);
            $criteria->add(TicketPeer::TICKET_ID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(TicketPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += TicketPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                TicketPeer::clearInstancePool();
            } elseif ($values instanceof Ticket) { // it's a model object
                TicketPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    TicketPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TicketPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = TicketPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related TicketComment objects
            $criteria = new Criteria(TicketCommentPeer::DATABASE_NAME);

            $criteria->add(TicketCommentPeer::TICKET_ID, $obj->getTicketId());
            $affectedRows += TicketCommentPeer::doDelete($criteria, $con);

            // delete related TicketHistory objects
            $criteria = new Criteria(TicketHistoryPeer::DATABASE_NAME);

            $criteria->add(TicketHistoryPeer::TICKET_ID, $obj->getTicketId());
            $affectedRows += TicketHistoryPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Ticket object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Ticket $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TicketPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TicketPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(TicketPeer::DATABASE_NAME, TicketPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Ticket
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TicketPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TicketPeer::DATABASE_NAME);
        $criteria->add(TicketPeer::TICKET_ID, $pk);

        $v = TicketPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Ticket[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TicketPeer::DATABASE_NAME);
            $criteria->add(TicketPeer::TICKET_ID, $pks, Criteria::IN);
            $objs = TicketPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTicketPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTicketPeer::buildTableMap();

