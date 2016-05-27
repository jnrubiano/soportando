<?php


/**
 * Base class that represents a row from the 'ticket' table.
 *
 *
 *
 * @package    propel.generator.Soportando.om
 */
abstract class BaseTicket extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TicketPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TicketPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the ticket_id field.
     * @var        int
     */
    protected $ticket_id;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the reproducibility field.
     * @var        string
     */
    protected $reproducibility;

    /**
     * The value for the cid field.
     * @var        int
     */
    protected $cid;

    /**
     * The value for the engineer_id field.
     * @var        int
     */
    protected $engineer_id;

    /**
     * The value for the ticket_type_id field.
     * @var        int
     */
    protected $ticket_type_id;

    /**
     * The value for the company_id field.
     * @var        int
     */
    protected $company_id;

    /**
     * The value for the module_id field.
     * @var        int
     */
    protected $module_id;

    /**
     * The value for the priority_id field.
     * @var        int
     */
    protected $priority_id;

    /**
     * The value for the ticket_status_id field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $ticket_status_id;

    /**
     * The value for the status_date field.
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        string
     */
    protected $status_date;

    /**
     * @var        Company
     */
    protected $aCompany;

    /**
     * @var        Customer
     */
    protected $aCustomer;

    /**
     * @var        User
     */
    protected $aUser;

    /**
     * @var        Module
     */
    protected $aModule;

    /**
     * @var        TicketPriority
     */
    protected $aTicketPriority;

    /**
     * @var        TicketStatus
     */
    protected $aTicketStatus;

    /**
     * @var        TicketType
     */
    protected $aTicketType;

    /**
     * @var        PropelObjectCollection|TicketComment[] Collection to store aggregation of TicketComment objects.
     */
    protected $collTicketComments;
    protected $collTicketCommentsPartial;

    /**
     * @var        PropelObjectCollection|TicketHistory[] Collection to store aggregation of TicketHistory objects.
     */
    protected $collTicketHistorys;
    protected $collTicketHistorysPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ticketCommentsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ticketHistorysScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->ticket_status_id = 1;
    }

    /**
     * Initializes internal state of BaseTicket object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [ticket_id] column value.
     *
     * @return int
     */
    public function getTicketId()
    {
        return $this->ticket_id;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the [reproducibility] column value.
     *
     * @return string
     */
    public function getReproducibility()
    {
        return $this->reproducibility;
    }

    /**
     * Get the [cid] column value.
     *
     * @return int
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Get the [engineer_id] column value.
     *
     * @return int
     */
    public function getEngineerId()
    {
        return $this->engineer_id;
    }

    /**
     * Get the [ticket_type_id] column value.
     *
     * @return int
     */
    public function getTicketTypeId()
    {
        return $this->ticket_type_id;
    }

    /**
     * Get the [company_id] column value.
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Get the [module_id] column value.
     *
     * @return int
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * Get the [priority_id] column value.
     *
     * @return int
     */
    public function getPriorityId()
    {
        return $this->priority_id;
    }

    /**
     * Get the [ticket_status_id] column value.
     *
     * @return int
     */
    public function getTicketStatusId()
    {
        return $this->ticket_status_id;
    }

    /**
     * Get the [optionally formatted] temporal [status_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getStatusDate($format = 'Y-m-d H:i:s')
    {
        if ($this->status_date === null) {
            return null;
        }

        if ($this->status_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->status_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->status_date, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [ticket_id] column.
     *
     * @param int $v new value
     * @return Ticket The current object (for fluent API support)
     */
    public function setTicketId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ticket_id !== $v) {
            $this->ticket_id = $v;
            $this->modifiedColumns[] = TicketPeer::TICKET_ID;
        }


        return $this;
    } // setTicketId()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return Ticket The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = TicketPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [reproducibility] column.
     *
     * @param string $v new value
     * @return Ticket The current object (for fluent API support)
     */
    public function setReproducibility($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reproducibility !== $v) {
            $this->reproducibility = $v;
            $this->modifiedColumns[] = TicketPeer::REPRODUCIBILITY;
        }


        return $this;
    } // setReproducibility()

    /**
     * Set the value of [cid] column.
     *
     * @param int $v new value
     * @return Ticket The current object (for fluent API support)
     */
    public function setCid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cid !== $v) {
            $this->cid = $v;
            $this->modifiedColumns[] = TicketPeer::CID;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getCid() !== $v) {
            $this->aCustomer = null;
        }


        return $this;
    } // setCid()

    /**
     * Set the value of [engineer_id] column.
     *
     * @param int $v new value
     * @return Ticket The current object (for fluent API support)
     */
    public function setEngineerId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->engineer_id !== $v) {
            $this->engineer_id = $v;
            $this->modifiedColumns[] = TicketPeer::ENGINEER_ID;
        }

        if ($this->aUser !== null && $this->aUser->getUid() !== $v) {
            $this->aUser = null;
        }


        return $this;
    } // setEngineerId()

    /**
     * Set the value of [ticket_type_id] column.
     *
     * @param int $v new value
     * @return Ticket The current object (for fluent API support)
     */
    public function setTicketTypeId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ticket_type_id !== $v) {
            $this->ticket_type_id = $v;
            $this->modifiedColumns[] = TicketPeer::TICKET_TYPE_ID;
        }

        if ($this->aTicketType !== null && $this->aTicketType->getTicketTypeId() !== $v) {
            $this->aTicketType = null;
        }


        return $this;
    } // setTicketTypeId()

    /**
     * Set the value of [company_id] column.
     *
     * @param int $v new value
     * @return Ticket The current object (for fluent API support)
     */
    public function setCompanyId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->company_id !== $v) {
            $this->company_id = $v;
            $this->modifiedColumns[] = TicketPeer::COMPANY_ID;
        }

        if ($this->aCompany !== null && $this->aCompany->getCompanyId() !== $v) {
            $this->aCompany = null;
        }


        return $this;
    } // setCompanyId()

    /**
     * Set the value of [module_id] column.
     *
     * @param int $v new value
     * @return Ticket The current object (for fluent API support)
     */
    public function setModuleId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->module_id !== $v) {
            $this->module_id = $v;
            $this->modifiedColumns[] = TicketPeer::MODULE_ID;
        }

        if ($this->aModule !== null && $this->aModule->getModuleId() !== $v) {
            $this->aModule = null;
        }


        return $this;
    } // setModuleId()

    /**
     * Set the value of [priority_id] column.
     *
     * @param int $v new value
     * @return Ticket The current object (for fluent API support)
     */
    public function setPriorityId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->priority_id !== $v) {
            $this->priority_id = $v;
            $this->modifiedColumns[] = TicketPeer::PRIORITY_ID;
        }

        if ($this->aTicketPriority !== null && $this->aTicketPriority->getPriorityId() !== $v) {
            $this->aTicketPriority = null;
        }


        return $this;
    } // setPriorityId()

    /**
     * Set the value of [ticket_status_id] column.
     *
     * @param int $v new value
     * @return Ticket The current object (for fluent API support)
     */
    public function setTicketStatusId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ticket_status_id !== $v) {
            $this->ticket_status_id = $v;
            $this->modifiedColumns[] = TicketPeer::TICKET_STATUS_ID;
        }

        if ($this->aTicketStatus !== null && $this->aTicketStatus->getTicketStatusId() !== $v) {
            $this->aTicketStatus = null;
        }


        return $this;
    } // setTicketStatusId()

    /**
     * Sets the value of [status_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ticket The current object (for fluent API support)
     */
    public function setStatusDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->status_date !== null || $dt !== null) {
            $currentDateAsString = ($this->status_date !== null && $tmpDt = new DateTime($this->status_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->status_date = $newDateAsString;
                $this->modifiedColumns[] = TicketPeer::STATUS_DATE;
            }
        } // if either are not null


        return $this;
    } // setStatusDate()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->ticket_status_id !== 1) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->ticket_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->description = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->reproducibility = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cid = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->engineer_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->ticket_type_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->company_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->module_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->priority_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->ticket_status_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->status_date = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 11; // 11 = TicketPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ticket object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aCustomer !== null && $this->cid !== $this->aCustomer->getCid()) {
            $this->aCustomer = null;
        }
        if ($this->aUser !== null && $this->engineer_id !== $this->aUser->getUid()) {
            $this->aUser = null;
        }
        if ($this->aTicketType !== null && $this->ticket_type_id !== $this->aTicketType->getTicketTypeId()) {
            $this->aTicketType = null;
        }
        if ($this->aCompany !== null && $this->company_id !== $this->aCompany->getCompanyId()) {
            $this->aCompany = null;
        }
        if ($this->aModule !== null && $this->module_id !== $this->aModule->getModuleId()) {
            $this->aModule = null;
        }
        if ($this->aTicketPriority !== null && $this->priority_id !== $this->aTicketPriority->getPriorityId()) {
            $this->aTicketPriority = null;
        }
        if ($this->aTicketStatus !== null && $this->ticket_status_id !== $this->aTicketStatus->getTicketStatusId()) {
            $this->aTicketStatus = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TicketPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCompany = null;
            $this->aCustomer = null;
            $this->aUser = null;
            $this->aModule = null;
            $this->aTicketPriority = null;
            $this->aTicketStatus = null;
            $this->aTicketType = null;
            $this->collTicketComments = null;

            $this->collTicketHistorys = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TicketQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TicketPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                TicketPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCompany !== null) {
                if ($this->aCompany->isModified() || $this->aCompany->isNew()) {
                    $affectedRows += $this->aCompany->save($con);
                }
                $this->setCompany($this->aCompany);
            }

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
            }

            if ($this->aUser !== null) {
                if ($this->aUser->isModified() || $this->aUser->isNew()) {
                    $affectedRows += $this->aUser->save($con);
                }
                $this->setUser($this->aUser);
            }

            if ($this->aModule !== null) {
                if ($this->aModule->isModified() || $this->aModule->isNew()) {
                    $affectedRows += $this->aModule->save($con);
                }
                $this->setModule($this->aModule);
            }

            if ($this->aTicketPriority !== null) {
                if ($this->aTicketPriority->isModified() || $this->aTicketPriority->isNew()) {
                    $affectedRows += $this->aTicketPriority->save($con);
                }
                $this->setTicketPriority($this->aTicketPriority);
            }

            if ($this->aTicketStatus !== null) {
                if ($this->aTicketStatus->isModified() || $this->aTicketStatus->isNew()) {
                    $affectedRows += $this->aTicketStatus->save($con);
                }
                $this->setTicketStatus($this->aTicketStatus);
            }

            if ($this->aTicketType !== null) {
                if ($this->aTicketType->isModified() || $this->aTicketType->isNew()) {
                    $affectedRows += $this->aTicketType->save($con);
                }
                $this->setTicketType($this->aTicketType);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->ticketCommentsScheduledForDeletion !== null) {
                if (!$this->ticketCommentsScheduledForDeletion->isEmpty()) {
                    TicketCommentQuery::create()
                        ->filterByPrimaryKeys($this->ticketCommentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ticketCommentsScheduledForDeletion = null;
                }
            }

            if ($this->collTicketComments !== null) {
                foreach ($this->collTicketComments as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ticketHistorysScheduledForDeletion !== null) {
                if (!$this->ticketHistorysScheduledForDeletion->isEmpty()) {
                    TicketHistoryQuery::create()
                        ->filterByPrimaryKeys($this->ticketHistorysScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ticketHistorysScheduledForDeletion = null;
                }
            }

            if ($this->collTicketHistorys !== null) {
                foreach ($this->collTicketHistorys as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = TicketPeer::TICKET_ID;
        if (null !== $this->ticket_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TicketPeer::TICKET_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TicketPeer::TICKET_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ticket_id`';
        }
        if ($this->isColumnModified(TicketPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(TicketPeer::REPRODUCIBILITY)) {
            $modifiedColumns[':p' . $index++]  = '`reproducibility`';
        }
        if ($this->isColumnModified(TicketPeer::CID)) {
            $modifiedColumns[':p' . $index++]  = '`cid`';
        }
        if ($this->isColumnModified(TicketPeer::ENGINEER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`engineer_id`';
        }
        if ($this->isColumnModified(TicketPeer::TICKET_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ticket_type_id`';
        }
        if ($this->isColumnModified(TicketPeer::COMPANY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`company_id`';
        }
        if ($this->isColumnModified(TicketPeer::MODULE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`module_id`';
        }
        if ($this->isColumnModified(TicketPeer::PRIORITY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`priority_id`';
        }
        if ($this->isColumnModified(TicketPeer::TICKET_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ticket_status_id`';
        }
        if ($this->isColumnModified(TicketPeer::STATUS_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`status_date`';
        }

        $sql = sprintf(
            'INSERT INTO `ticket` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ticket_id`':
                        $stmt->bindValue($identifier, $this->ticket_id, PDO::PARAM_INT);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`reproducibility`':
                        $stmt->bindValue($identifier, $this->reproducibility, PDO::PARAM_STR);
                        break;
                    case '`cid`':
                        $stmt->bindValue($identifier, $this->cid, PDO::PARAM_INT);
                        break;
                    case '`engineer_id`':
                        $stmt->bindValue($identifier, $this->engineer_id, PDO::PARAM_INT);
                        break;
                    case '`ticket_type_id`':
                        $stmt->bindValue($identifier, $this->ticket_type_id, PDO::PARAM_INT);
                        break;
                    case '`company_id`':
                        $stmt->bindValue($identifier, $this->company_id, PDO::PARAM_INT);
                        break;
                    case '`module_id`':
                        $stmt->bindValue($identifier, $this->module_id, PDO::PARAM_INT);
                        break;
                    case '`priority_id`':
                        $stmt->bindValue($identifier, $this->priority_id, PDO::PARAM_INT);
                        break;
                    case '`ticket_status_id`':
                        $stmt->bindValue($identifier, $this->ticket_status_id, PDO::PARAM_INT);
                        break;
                    case '`status_date`':
                        $stmt->bindValue($identifier, $this->status_date, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setTicketId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCompany !== null) {
                if (!$this->aCompany->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCompany->getValidationFailures());
                }
            }

            if ($this->aCustomer !== null) {
                if (!$this->aCustomer->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCustomer->getValidationFailures());
                }
            }

            if ($this->aUser !== null) {
                if (!$this->aUser->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
                }
            }

            if ($this->aModule !== null) {
                if (!$this->aModule->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aModule->getValidationFailures());
                }
            }

            if ($this->aTicketPriority !== null) {
                if (!$this->aTicketPriority->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTicketPriority->getValidationFailures());
                }
            }

            if ($this->aTicketStatus !== null) {
                if (!$this->aTicketStatus->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTicketStatus->getValidationFailures());
                }
            }

            if ($this->aTicketType !== null) {
                if (!$this->aTicketType->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTicketType->getValidationFailures());
                }
            }


            if (($retval = TicketPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTicketComments !== null) {
                    foreach ($this->collTicketComments as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTicketHistorys !== null) {
                    foreach ($this->collTicketHistorys as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = TicketPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getTicketId();
                break;
            case 1:
                return $this->getDescription();
                break;
            case 2:
                return $this->getReproducibility();
                break;
            case 3:
                return $this->getCid();
                break;
            case 4:
                return $this->getEngineerId();
                break;
            case 5:
                return $this->getTicketTypeId();
                break;
            case 6:
                return $this->getCompanyId();
                break;
            case 7:
                return $this->getModuleId();
                break;
            case 8:
                return $this->getPriorityId();
                break;
            case 9:
                return $this->getTicketStatusId();
                break;
            case 10:
                return $this->getStatusDate();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Ticket'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ticket'][$this->getPrimaryKey()] = true;
        $keys = TicketPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getTicketId(),
            $keys[1] => $this->getDescription(),
            $keys[2] => $this->getReproducibility(),
            $keys[3] => $this->getCid(),
            $keys[4] => $this->getEngineerId(),
            $keys[5] => $this->getTicketTypeId(),
            $keys[6] => $this->getCompanyId(),
            $keys[7] => $this->getModuleId(),
            $keys[8] => $this->getPriorityId(),
            $keys[9] => $this->getTicketStatusId(),
            $keys[10] => $this->getStatusDate(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCompany) {
                $result['Company'] = $this->aCompany->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCustomer) {
                $result['Customer'] = $this->aCustomer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUser) {
                $result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aModule) {
                $result['Module'] = $this->aModule->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTicketPriority) {
                $result['TicketPriority'] = $this->aTicketPriority->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTicketStatus) {
                $result['TicketStatus'] = $this->aTicketStatus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTicketType) {
                $result['TicketType'] = $this->aTicketType->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collTicketComments) {
                $result['TicketComments'] = $this->collTicketComments->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTicketHistorys) {
                $result['TicketHistorys'] = $this->collTicketHistorys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = TicketPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setTicketId($value);
                break;
            case 1:
                $this->setDescription($value);
                break;
            case 2:
                $this->setReproducibility($value);
                break;
            case 3:
                $this->setCid($value);
                break;
            case 4:
                $this->setEngineerId($value);
                break;
            case 5:
                $this->setTicketTypeId($value);
                break;
            case 6:
                $this->setCompanyId($value);
                break;
            case 7:
                $this->setModuleId($value);
                break;
            case 8:
                $this->setPriorityId($value);
                break;
            case 9:
                $this->setTicketStatusId($value);
                break;
            case 10:
                $this->setStatusDate($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = TicketPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setTicketId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDescription($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setReproducibility($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCid($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEngineerId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTicketTypeId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCompanyId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setModuleId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPriorityId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTicketStatusId($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setStatusDate($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TicketPeer::DATABASE_NAME);

        if ($this->isColumnModified(TicketPeer::TICKET_ID)) $criteria->add(TicketPeer::TICKET_ID, $this->ticket_id);
        if ($this->isColumnModified(TicketPeer::DESCRIPTION)) $criteria->add(TicketPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(TicketPeer::REPRODUCIBILITY)) $criteria->add(TicketPeer::REPRODUCIBILITY, $this->reproducibility);
        if ($this->isColumnModified(TicketPeer::CID)) $criteria->add(TicketPeer::CID, $this->cid);
        if ($this->isColumnModified(TicketPeer::ENGINEER_ID)) $criteria->add(TicketPeer::ENGINEER_ID, $this->engineer_id);
        if ($this->isColumnModified(TicketPeer::TICKET_TYPE_ID)) $criteria->add(TicketPeer::TICKET_TYPE_ID, $this->ticket_type_id);
        if ($this->isColumnModified(TicketPeer::COMPANY_ID)) $criteria->add(TicketPeer::COMPANY_ID, $this->company_id);
        if ($this->isColumnModified(TicketPeer::MODULE_ID)) $criteria->add(TicketPeer::MODULE_ID, $this->module_id);
        if ($this->isColumnModified(TicketPeer::PRIORITY_ID)) $criteria->add(TicketPeer::PRIORITY_ID, $this->priority_id);
        if ($this->isColumnModified(TicketPeer::TICKET_STATUS_ID)) $criteria->add(TicketPeer::TICKET_STATUS_ID, $this->ticket_status_id);
        if ($this->isColumnModified(TicketPeer::STATUS_DATE)) $criteria->add(TicketPeer::STATUS_DATE, $this->status_date);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(TicketPeer::DATABASE_NAME);
        $criteria->add(TicketPeer::TICKET_ID, $this->ticket_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getTicketId();
    }

    /**
     * Generic method to set the primary key (ticket_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setTicketId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getTicketId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ticket (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDescription($this->getDescription());
        $copyObj->setReproducibility($this->getReproducibility());
        $copyObj->setCid($this->getCid());
        $copyObj->setEngineerId($this->getEngineerId());
        $copyObj->setTicketTypeId($this->getTicketTypeId());
        $copyObj->setCompanyId($this->getCompanyId());
        $copyObj->setModuleId($this->getModuleId());
        $copyObj->setPriorityId($this->getPriorityId());
        $copyObj->setTicketStatusId($this->getTicketStatusId());
        $copyObj->setStatusDate($this->getStatusDate());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTicketComments() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTicketComment($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTicketHistorys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTicketHistory($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setTicketId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Ticket Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return TicketPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TicketPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Company object.
     *
     * @param             Company $v
     * @return Ticket The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCompany(Company $v = null)
    {
        if ($v === null) {
            $this->setCompanyId(NULL);
        } else {
            $this->setCompanyId($v->getCompanyId());
        }

        $this->aCompany = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Company object, it will not be re-added.
        if ($v !== null) {
            $v->addTicket($this);
        }


        return $this;
    }


    /**
     * Get the associated Company object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Company The associated Company object.
     * @throws PropelException
     */
    public function getCompany(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCompany === null && ($this->company_id !== null) && $doQuery) {
            $this->aCompany = CompanyQuery::create()->findPk($this->company_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCompany->addTickets($this);
             */
        }

        return $this->aCompany;
    }

    /**
     * Declares an association between this object and a Customer object.
     *
     * @param             Customer $v
     * @return Ticket The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomer(Customer $v = null)
    {
        if ($v === null) {
            $this->setCid(NULL);
        } else {
            $this->setCid($v->getCid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Customer object, it will not be re-added.
        if ($v !== null) {
            $v->addTicket($this);
        }


        return $this;
    }


    /**
     * Get the associated Customer object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Customer The associated Customer object.
     * @throws PropelException
     */
    public function getCustomer(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCustomer === null && ($this->cid !== null) && $doQuery) {
            $this->aCustomer = CustomerQuery::create()->findPk($this->cid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addTickets($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Declares an association between this object and a User object.
     *
     * @param             User $v
     * @return Ticket The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUser(User $v = null)
    {
        if ($v === null) {
            $this->setEngineerId(NULL);
        } else {
            $this->setEngineerId($v->getUid());
        }

        $this->aUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the User object, it will not be re-added.
        if ($v !== null) {
            $v->addTicket($this);
        }


        return $this;
    }


    /**
     * Get the associated User object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return User The associated User object.
     * @throws PropelException
     */
    public function getUser(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUser === null && ($this->engineer_id !== null) && $doQuery) {
            $this->aUser = UserQuery::create()->findPk($this->engineer_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUser->addTickets($this);
             */
        }

        return $this->aUser;
    }

    /**
     * Declares an association between this object and a Module object.
     *
     * @param             Module $v
     * @return Ticket The current object (for fluent API support)
     * @throws PropelException
     */
    public function setModule(Module $v = null)
    {
        if ($v === null) {
            $this->setModuleId(NULL);
        } else {
            $this->setModuleId($v->getModuleId());
        }

        $this->aModule = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Module object, it will not be re-added.
        if ($v !== null) {
            $v->addTicket($this);
        }


        return $this;
    }


    /**
     * Get the associated Module object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Module The associated Module object.
     * @throws PropelException
     */
    public function getModule(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aModule === null && ($this->module_id !== null) && $doQuery) {
            $this->aModule = ModuleQuery::create()->findPk($this->module_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aModule->addTickets($this);
             */
        }

        return $this->aModule;
    }

    /**
     * Declares an association between this object and a TicketPriority object.
     *
     * @param             TicketPriority $v
     * @return Ticket The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTicketPriority(TicketPriority $v = null)
    {
        if ($v === null) {
            $this->setPriorityId(NULL);
        } else {
            $this->setPriorityId($v->getPriorityId());
        }

        $this->aTicketPriority = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TicketPriority object, it will not be re-added.
        if ($v !== null) {
            $v->addTicket($this);
        }


        return $this;
    }


    /**
     * Get the associated TicketPriority object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return TicketPriority The associated TicketPriority object.
     * @throws PropelException
     */
    public function getTicketPriority(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTicketPriority === null && ($this->priority_id !== null) && $doQuery) {
            $this->aTicketPriority = TicketPriorityQuery::create()->findPk($this->priority_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTicketPriority->addTickets($this);
             */
        }

        return $this->aTicketPriority;
    }

    /**
     * Declares an association between this object and a TicketStatus object.
     *
     * @param             TicketStatus $v
     * @return Ticket The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTicketStatus(TicketStatus $v = null)
    {
        if ($v === null) {
            $this->setTicketStatusId(1);
        } else {
            $this->setTicketStatusId($v->getTicketStatusId());
        }

        $this->aTicketStatus = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TicketStatus object, it will not be re-added.
        if ($v !== null) {
            $v->addTicket($this);
        }


        return $this;
    }


    /**
     * Get the associated TicketStatus object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return TicketStatus The associated TicketStatus object.
     * @throws PropelException
     */
    public function getTicketStatus(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTicketStatus === null && ($this->ticket_status_id !== null) && $doQuery) {
            $this->aTicketStatus = TicketStatusQuery::create()->findPk($this->ticket_status_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTicketStatus->addTickets($this);
             */
        }

        return $this->aTicketStatus;
    }

    /**
     * Declares an association between this object and a TicketType object.
     *
     * @param             TicketType $v
     * @return Ticket The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTicketType(TicketType $v = null)
    {
        if ($v === null) {
            $this->setTicketTypeId(NULL);
        } else {
            $this->setTicketTypeId($v->getTicketTypeId());
        }

        $this->aTicketType = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TicketType object, it will not be re-added.
        if ($v !== null) {
            $v->addTicket($this);
        }


        return $this;
    }


    /**
     * Get the associated TicketType object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return TicketType The associated TicketType object.
     * @throws PropelException
     */
    public function getTicketType(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTicketType === null && ($this->ticket_type_id !== null) && $doQuery) {
            $this->aTicketType = TicketTypeQuery::create()->findPk($this->ticket_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTicketType->addTickets($this);
             */
        }

        return $this->aTicketType;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('TicketComment' == $relationName) {
            $this->initTicketComments();
        }
        if ('TicketHistory' == $relationName) {
            $this->initTicketHistorys();
        }
    }

    /**
     * Clears out the collTicketComments collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Ticket The current object (for fluent API support)
     * @see        addTicketComments()
     */
    public function clearTicketComments()
    {
        $this->collTicketComments = null; // important to set this to null since that means it is uninitialized
        $this->collTicketCommentsPartial = null;

        return $this;
    }

    /**
     * reset is the collTicketComments collection loaded partially
     *
     * @return void
     */
    public function resetPartialTicketComments($v = true)
    {
        $this->collTicketCommentsPartial = $v;
    }

    /**
     * Initializes the collTicketComments collection.
     *
     * By default this just sets the collTicketComments collection to an empty array (like clearcollTicketComments());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTicketComments($overrideExisting = true)
    {
        if (null !== $this->collTicketComments && !$overrideExisting) {
            return;
        }
        $this->collTicketComments = new PropelObjectCollection();
        $this->collTicketComments->setModel('TicketComment');
    }

    /**
     * Gets an array of TicketComment objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Ticket is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|TicketComment[] List of TicketComment objects
     * @throws PropelException
     */
    public function getTicketComments($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTicketCommentsPartial && !$this->isNew();
        if (null === $this->collTicketComments || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTicketComments) {
                // return empty collection
                $this->initTicketComments();
            } else {
                $collTicketComments = TicketCommentQuery::create(null, $criteria)
                    ->filterByTicket($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTicketCommentsPartial && count($collTicketComments)) {
                      $this->initTicketComments(false);

                      foreach($collTicketComments as $obj) {
                        if (false == $this->collTicketComments->contains($obj)) {
                          $this->collTicketComments->append($obj);
                        }
                      }

                      $this->collTicketCommentsPartial = true;
                    }

                    $collTicketComments->getInternalIterator()->rewind();
                    return $collTicketComments;
                }

                if($partial && $this->collTicketComments) {
                    foreach($this->collTicketComments as $obj) {
                        if($obj->isNew()) {
                            $collTicketComments[] = $obj;
                        }
                    }
                }

                $this->collTicketComments = $collTicketComments;
                $this->collTicketCommentsPartial = false;
            }
        }

        return $this->collTicketComments;
    }

    /**
     * Sets a collection of TicketComment objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ticketComments A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Ticket The current object (for fluent API support)
     */
    public function setTicketComments(PropelCollection $ticketComments, PropelPDO $con = null)
    {
        $ticketCommentsToDelete = $this->getTicketComments(new Criteria(), $con)->diff($ticketComments);

        $this->ticketCommentsScheduledForDeletion = unserialize(serialize($ticketCommentsToDelete));

        foreach ($ticketCommentsToDelete as $ticketCommentRemoved) {
            $ticketCommentRemoved->setTicket(null);
        }

        $this->collTicketComments = null;
        foreach ($ticketComments as $ticketComment) {
            $this->addTicketComment($ticketComment);
        }

        $this->collTicketComments = $ticketComments;
        $this->collTicketCommentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related TicketComment objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related TicketComment objects.
     * @throws PropelException
     */
    public function countTicketComments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTicketCommentsPartial && !$this->isNew();
        if (null === $this->collTicketComments || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTicketComments) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getTicketComments());
            }
            $query = TicketCommentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTicket($this)
                ->count($con);
        }

        return count($this->collTicketComments);
    }

    /**
     * Method called to associate a TicketComment object to this object
     * through the TicketComment foreign key attribute.
     *
     * @param    TicketComment $l TicketComment
     * @return Ticket The current object (for fluent API support)
     */
    public function addTicketComment(TicketComment $l)
    {
        if ($this->collTicketComments === null) {
            $this->initTicketComments();
            $this->collTicketCommentsPartial = true;
        }
        if (!in_array($l, $this->collTicketComments->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTicketComment($l);
        }

        return $this;
    }

    /**
     * @param	TicketComment $ticketComment The ticketComment object to add.
     */
    protected function doAddTicketComment($ticketComment)
    {
        $this->collTicketComments[]= $ticketComment;
        $ticketComment->setTicket($this);
    }

    /**
     * @param	TicketComment $ticketComment The ticketComment object to remove.
     * @return Ticket The current object (for fluent API support)
     */
    public function removeTicketComment($ticketComment)
    {
        if ($this->getTicketComments()->contains($ticketComment)) {
            $this->collTicketComments->remove($this->collTicketComments->search($ticketComment));
            if (null === $this->ticketCommentsScheduledForDeletion) {
                $this->ticketCommentsScheduledForDeletion = clone $this->collTicketComments;
                $this->ticketCommentsScheduledForDeletion->clear();
            }
            $this->ticketCommentsScheduledForDeletion[]= clone $ticketComment;
            $ticketComment->setTicket(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ticket is new, it will return
     * an empty collection; or if this Ticket has previously
     * been saved, it will retrieve related TicketComments from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ticket.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TicketComment[] List of TicketComment objects
     */
    public function getTicketCommentsJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketCommentQuery::create(null, $criteria);
        $query->joinWith('User', $join_behavior);

        return $this->getTicketComments($query, $con);
    }

    /**
     * Clears out the collTicketHistorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Ticket The current object (for fluent API support)
     * @see        addTicketHistorys()
     */
    public function clearTicketHistorys()
    {
        $this->collTicketHistorys = null; // important to set this to null since that means it is uninitialized
        $this->collTicketHistorysPartial = null;

        return $this;
    }

    /**
     * reset is the collTicketHistorys collection loaded partially
     *
     * @return void
     */
    public function resetPartialTicketHistorys($v = true)
    {
        $this->collTicketHistorysPartial = $v;
    }

    /**
     * Initializes the collTicketHistorys collection.
     *
     * By default this just sets the collTicketHistorys collection to an empty array (like clearcollTicketHistorys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTicketHistorys($overrideExisting = true)
    {
        if (null !== $this->collTicketHistorys && !$overrideExisting) {
            return;
        }
        $this->collTicketHistorys = new PropelObjectCollection();
        $this->collTicketHistorys->setModel('TicketHistory');
    }

    /**
     * Gets an array of TicketHistory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Ticket is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|TicketHistory[] List of TicketHistory objects
     * @throws PropelException
     */
    public function getTicketHistorys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTicketHistorysPartial && !$this->isNew();
        if (null === $this->collTicketHistorys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTicketHistorys) {
                // return empty collection
                $this->initTicketHistorys();
            } else {
                $collTicketHistorys = TicketHistoryQuery::create(null, $criteria)
                    ->filterByTicket($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTicketHistorysPartial && count($collTicketHistorys)) {
                      $this->initTicketHistorys(false);

                      foreach($collTicketHistorys as $obj) {
                        if (false == $this->collTicketHistorys->contains($obj)) {
                          $this->collTicketHistorys->append($obj);
                        }
                      }

                      $this->collTicketHistorysPartial = true;
                    }

                    $collTicketHistorys->getInternalIterator()->rewind();
                    return $collTicketHistorys;
                }

                if($partial && $this->collTicketHistorys) {
                    foreach($this->collTicketHistorys as $obj) {
                        if($obj->isNew()) {
                            $collTicketHistorys[] = $obj;
                        }
                    }
                }

                $this->collTicketHistorys = $collTicketHistorys;
                $this->collTicketHistorysPartial = false;
            }
        }

        return $this->collTicketHistorys;
    }

    /**
     * Sets a collection of TicketHistory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ticketHistorys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Ticket The current object (for fluent API support)
     */
    public function setTicketHistorys(PropelCollection $ticketHistorys, PropelPDO $con = null)
    {
        $ticketHistorysToDelete = $this->getTicketHistorys(new Criteria(), $con)->diff($ticketHistorys);

        $this->ticketHistorysScheduledForDeletion = unserialize(serialize($ticketHistorysToDelete));

        foreach ($ticketHistorysToDelete as $ticketHistoryRemoved) {
            $ticketHistoryRemoved->setTicket(null);
        }

        $this->collTicketHistorys = null;
        foreach ($ticketHistorys as $ticketHistory) {
            $this->addTicketHistory($ticketHistory);
        }

        $this->collTicketHistorys = $ticketHistorys;
        $this->collTicketHistorysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related TicketHistory objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related TicketHistory objects.
     * @throws PropelException
     */
    public function countTicketHistorys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTicketHistorysPartial && !$this->isNew();
        if (null === $this->collTicketHistorys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTicketHistorys) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getTicketHistorys());
            }
            $query = TicketHistoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTicket($this)
                ->count($con);
        }

        return count($this->collTicketHistorys);
    }

    /**
     * Method called to associate a TicketHistory object to this object
     * through the TicketHistory foreign key attribute.
     *
     * @param    TicketHistory $l TicketHistory
     * @return Ticket The current object (for fluent API support)
     */
    public function addTicketHistory(TicketHistory $l)
    {
        if ($this->collTicketHistorys === null) {
            $this->initTicketHistorys();
            $this->collTicketHistorysPartial = true;
        }
        if (!in_array($l, $this->collTicketHistorys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTicketHistory($l);
        }

        return $this;
    }

    /**
     * @param	TicketHistory $ticketHistory The ticketHistory object to add.
     */
    protected function doAddTicketHistory($ticketHistory)
    {
        $this->collTicketHistorys[]= $ticketHistory;
        $ticketHistory->setTicket($this);
    }

    /**
     * @param	TicketHistory $ticketHistory The ticketHistory object to remove.
     * @return Ticket The current object (for fluent API support)
     */
    public function removeTicketHistory($ticketHistory)
    {
        if ($this->getTicketHistorys()->contains($ticketHistory)) {
            $this->collTicketHistorys->remove($this->collTicketHistorys->search($ticketHistory));
            if (null === $this->ticketHistorysScheduledForDeletion) {
                $this->ticketHistorysScheduledForDeletion = clone $this->collTicketHistorys;
                $this->ticketHistorysScheduledForDeletion->clear();
            }
            $this->ticketHistorysScheduledForDeletion[]= clone $ticketHistory;
            $ticketHistory->setTicket(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ticket is new, it will return
     * an empty collection; or if this Ticket has previously
     * been saved, it will retrieve related TicketHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ticket.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TicketHistory[] List of TicketHistory objects
     */
    public function getTicketHistorysJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketHistoryQuery::create(null, $criteria);
        $query->joinWith('User', $join_behavior);

        return $this->getTicketHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ticket is new, it will return
     * an empty collection; or if this Ticket has previously
     * been saved, it will retrieve related TicketHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ticket.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TicketHistory[] List of TicketHistory objects
     */
    public function getTicketHistorysJoinTicketStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketHistoryQuery::create(null, $criteria);
        $query->joinWith('TicketStatus', $join_behavior);

        return $this->getTicketHistorys($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->ticket_id = null;
        $this->description = null;
        $this->reproducibility = null;
        $this->cid = null;
        $this->engineer_id = null;
        $this->ticket_type_id = null;
        $this->company_id = null;
        $this->module_id = null;
        $this->priority_id = null;
        $this->ticket_status_id = null;
        $this->status_date = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collTicketComments) {
                foreach ($this->collTicketComments as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTicketHistorys) {
                foreach ($this->collTicketHistorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCompany instanceof Persistent) {
              $this->aCompany->clearAllReferences($deep);
            }
            if ($this->aCustomer instanceof Persistent) {
              $this->aCustomer->clearAllReferences($deep);
            }
            if ($this->aUser instanceof Persistent) {
              $this->aUser->clearAllReferences($deep);
            }
            if ($this->aModule instanceof Persistent) {
              $this->aModule->clearAllReferences($deep);
            }
            if ($this->aTicketPriority instanceof Persistent) {
              $this->aTicketPriority->clearAllReferences($deep);
            }
            if ($this->aTicketStatus instanceof Persistent) {
              $this->aTicketStatus->clearAllReferences($deep);
            }
            if ($this->aTicketType instanceof Persistent) {
              $this->aTicketType->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collTicketComments instanceof PropelCollection) {
            $this->collTicketComments->clearIterator();
        }
        $this->collTicketComments = null;
        if ($this->collTicketHistorys instanceof PropelCollection) {
            $this->collTicketHistorys->clearIterator();
        }
        $this->collTicketHistorys = null;
        $this->aCompany = null;
        $this->aCustomer = null;
        $this->aUser = null;
        $this->aModule = null;
        $this->aTicketPriority = null;
        $this->aTicketStatus = null;
        $this->aTicketType = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TicketPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
