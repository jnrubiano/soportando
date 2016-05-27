<?php


/**
 * Base class that represents a row from the 'user' table.
 *
 *
 *
 * @package    propel.generator.Soportando.om
 */
abstract class BaseUser extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UserPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UserPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the uid field.
     * @var        int
     */
    protected $uid;

    /**
     * The value for the rid field.
     * @var        int
     */
    protected $rid;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the login field.
     * @var        string
     */
    protected $login;

    /**
     * The value for the pass field.
     * @var        string
     */
    protected $pass;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the last_access field.
     * @var        string
     */
    protected $last_access;

    /**
     * The value for the active field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $active;

    /**
     * The value for the recover_code field.
     * @var        string
     */
    protected $recover_code;

    /**
     * The value for the recover_due field.
     * @var        string
     */
    protected $recover_due;

    /**
     * @var        Rol
     */
    protected $aRol;

    /**
     * @var        PropelObjectCollection|Customer[] Collection to store aggregation of Customer objects.
     */
    protected $collCustomers;
    protected $collCustomersPartial;

    /**
     * @var        PropelObjectCollection|Ticket[] Collection to store aggregation of Ticket objects.
     */
    protected $collTickets;
    protected $collTicketsPartial;

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
    protected $customersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ticketsScheduledForDeletion = null;

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
        $this->active = 1;
    }

    /**
     * Initializes internal state of BaseUser object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [uid] column value.
     *
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Get the [rid] column value.
     *
     * @return int
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [login] column value.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Get the [pass] column value.
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [optionally formatted] temporal [last_access] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastAccess($format = 'Y-m-d H:i:s')
    {
        if ($this->last_access === null) {
            return null;
        }

        if ($this->last_access === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->last_access);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_access, true), $x);
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
     * Get the [active] column value.
     *
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Get the [recover_code] column value.
     *
     * @return string
     */
    public function getRecoverCode()
    {
        return $this->recover_code;
    }

    /**
     * Get the [optionally formatted] temporal [recover_due] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getRecoverDue($format = 'Y-m-d H:i:s')
    {
        if ($this->recover_due === null) {
            return null;
        }

        if ($this->recover_due === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->recover_due);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->recover_due, true), $x);
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
     * Set the value of [uid] column.
     *
     * @param int $v new value
     * @return User The current object (for fluent API support)
     */
    public function setUid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->uid !== $v) {
            $this->uid = $v;
            $this->modifiedColumns[] = UserPeer::UID;
        }


        return $this;
    } // setUid()

    /**
     * Set the value of [rid] column.
     *
     * @param int $v new value
     * @return User The current object (for fluent API support)
     */
    public function setRid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rid !== $v) {
            $this->rid = $v;
            $this->modifiedColumns[] = UserPeer::RID;
        }

        if ($this->aRol !== null && $this->aRol->getRid() !== $v) {
            $this->aRol = null;
        }


        return $this;
    } // setRid()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = UserPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [login] column.
     *
     * @param string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setLogin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->login !== $v) {
            $this->login = $v;
            $this->modifiedColumns[] = UserPeer::LOGIN;
        }


        return $this;
    } // setLogin()

    /**
     * Set the value of [pass] column.
     *
     * @param string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setPass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pass !== $v) {
            $this->pass = $v;
            $this->modifiedColumns[] = UserPeer::PASS;
        }


        return $this;
    } // setPass()

    /**
     * Set the value of [email] column.
     *
     * @param string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = UserPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Sets the value of [last_access] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return User The current object (for fluent API support)
     */
    public function setLastAccess($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->last_access !== null || $dt !== null) {
            $currentDateAsString = ($this->last_access !== null && $tmpDt = new DateTime($this->last_access)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->last_access = $newDateAsString;
                $this->modifiedColumns[] = UserPeer::LAST_ACCESS;
            }
        } // if either are not null


        return $this;
    } // setLastAccess()

    /**
     * Set the value of [active] column.
     *
     * @param int $v new value
     * @return User The current object (for fluent API support)
     */
    public function setActive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->active !== $v) {
            $this->active = $v;
            $this->modifiedColumns[] = UserPeer::ACTIVE;
        }


        return $this;
    } // setActive()

    /**
     * Set the value of [recover_code] column.
     *
     * @param string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setRecoverCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recover_code !== $v) {
            $this->recover_code = $v;
            $this->modifiedColumns[] = UserPeer::RECOVER_CODE;
        }


        return $this;
    } // setRecoverCode()

    /**
     * Sets the value of [recover_due] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return User The current object (for fluent API support)
     */
    public function setRecoverDue($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->recover_due !== null || $dt !== null) {
            $currentDateAsString = ($this->recover_due !== null && $tmpDt = new DateTime($this->recover_due)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->recover_due = $newDateAsString;
                $this->modifiedColumns[] = UserPeer::RECOVER_DUE;
            }
        } // if either are not null


        return $this;
    } // setRecoverDue()

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
            if ($this->active !== 1) {
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

            $this->uid = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->rid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->login = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->pass = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->last_access = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->active = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->recover_code = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->recover_due = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 10; // 10 = UserPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating User object", $e);
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

        if ($this->aRol !== null && $this->rid !== $this->aRol->getRid()) {
            $this->aRol = null;
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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRol = null;
            $this->collCustomers = null;

            $this->collTickets = null;

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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UserQuery::create()
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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                UserPeer::addInstanceToPool($this);
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

            if ($this->aRol !== null) {
                if ($this->aRol->isModified() || $this->aRol->isNew()) {
                    $affectedRows += $this->aRol->save($con);
                }
                $this->setRol($this->aRol);
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

            if ($this->customersScheduledForDeletion !== null) {
                if (!$this->customersScheduledForDeletion->isEmpty()) {
                    CustomerQuery::create()
                        ->filterByPrimaryKeys($this->customersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->customersScheduledForDeletion = null;
                }
            }

            if ($this->collCustomers !== null) {
                foreach ($this->collCustomers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ticketsScheduledForDeletion !== null) {
                if (!$this->ticketsScheduledForDeletion->isEmpty()) {
                    TicketQuery::create()
                        ->filterByPrimaryKeys($this->ticketsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ticketsScheduledForDeletion = null;
                }
            }

            if ($this->collTickets !== null) {
                foreach ($this->collTickets as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = UserPeer::UID;
        if (null !== $this->uid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UserPeer::UID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UserPeer::UID)) {
            $modifiedColumns[':p' . $index++]  = '`uid`';
        }
        if ($this->isColumnModified(UserPeer::RID)) {
            $modifiedColumns[':p' . $index++]  = '`rid`';
        }
        if ($this->isColumnModified(UserPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(UserPeer::LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`login`';
        }
        if ($this->isColumnModified(UserPeer::PASS)) {
            $modifiedColumns[':p' . $index++]  = '`pass`';
        }
        if ($this->isColumnModified(UserPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(UserPeer::LAST_ACCESS)) {
            $modifiedColumns[':p' . $index++]  = '`last_access`';
        }
        if ($this->isColumnModified(UserPeer::ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`active`';
        }
        if ($this->isColumnModified(UserPeer::RECOVER_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`recover_code`';
        }
        if ($this->isColumnModified(UserPeer::RECOVER_DUE)) {
            $modifiedColumns[':p' . $index++]  = '`recover_due`';
        }

        $sql = sprintf(
            'INSERT INTO `user` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`uid`':
                        $stmt->bindValue($identifier, $this->uid, PDO::PARAM_INT);
                        break;
                    case '`rid`':
                        $stmt->bindValue($identifier, $this->rid, PDO::PARAM_INT);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`login`':
                        $stmt->bindValue($identifier, $this->login, PDO::PARAM_STR);
                        break;
                    case '`pass`':
                        $stmt->bindValue($identifier, $this->pass, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`last_access`':
                        $stmt->bindValue($identifier, $this->last_access, PDO::PARAM_STR);
                        break;
                    case '`active`':
                        $stmt->bindValue($identifier, $this->active, PDO::PARAM_INT);
                        break;
                    case '`recover_code`':
                        $stmt->bindValue($identifier, $this->recover_code, PDO::PARAM_STR);
                        break;
                    case '`recover_due`':
                        $stmt->bindValue($identifier, $this->recover_due, PDO::PARAM_STR);
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
        $this->setUid($pk);

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

            if ($this->aRol !== null) {
                if (!$this->aRol->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRol->getValidationFailures());
                }
            }


            if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCustomers !== null) {
                    foreach ($this->collCustomers as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTickets !== null) {
                    foreach ($this->collTickets as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUid();
                break;
            case 1:
                return $this->getRid();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getLogin();
                break;
            case 4:
                return $this->getPass();
                break;
            case 5:
                return $this->getEmail();
                break;
            case 6:
                return $this->getLastAccess();
                break;
            case 7:
                return $this->getActive();
                break;
            case 8:
                return $this->getRecoverCode();
                break;
            case 9:
                return $this->getRecoverDue();
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
        if (isset($alreadyDumpedObjects['User'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['User'][$this->getPrimaryKey()] = true;
        $keys = UserPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getUid(),
            $keys[1] => $this->getRid(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getLogin(),
            $keys[4] => $this->getPass(),
            $keys[5] => $this->getEmail(),
            $keys[6] => $this->getLastAccess(),
            $keys[7] => $this->getActive(),
            $keys[8] => $this->getRecoverCode(),
            $keys[9] => $this->getRecoverDue(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aRol) {
                $result['Rol'] = $this->aRol->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCustomers) {
                $result['Customers'] = $this->collCustomers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTickets) {
                $result['Tickets'] = $this->collTickets->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUid($value);
                break;
            case 1:
                $this->setRid($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setLogin($value);
                break;
            case 4:
                $this->setPass($value);
                break;
            case 5:
                $this->setEmail($value);
                break;
            case 6:
                $this->setLastAccess($value);
                break;
            case 7:
                $this->setActive($value);
                break;
            case 8:
                $this->setRecoverCode($value);
                break;
            case 9:
                $this->setRecoverDue($value);
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
        $keys = UserPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setUid($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRid($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLogin($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPass($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmail($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLastAccess($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setActive($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRecoverCode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRecoverDue($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UserPeer::DATABASE_NAME);

        if ($this->isColumnModified(UserPeer::UID)) $criteria->add(UserPeer::UID, $this->uid);
        if ($this->isColumnModified(UserPeer::RID)) $criteria->add(UserPeer::RID, $this->rid);
        if ($this->isColumnModified(UserPeer::NAME)) $criteria->add(UserPeer::NAME, $this->name);
        if ($this->isColumnModified(UserPeer::LOGIN)) $criteria->add(UserPeer::LOGIN, $this->login);
        if ($this->isColumnModified(UserPeer::PASS)) $criteria->add(UserPeer::PASS, $this->pass);
        if ($this->isColumnModified(UserPeer::EMAIL)) $criteria->add(UserPeer::EMAIL, $this->email);
        if ($this->isColumnModified(UserPeer::LAST_ACCESS)) $criteria->add(UserPeer::LAST_ACCESS, $this->last_access);
        if ($this->isColumnModified(UserPeer::ACTIVE)) $criteria->add(UserPeer::ACTIVE, $this->active);
        if ($this->isColumnModified(UserPeer::RECOVER_CODE)) $criteria->add(UserPeer::RECOVER_CODE, $this->recover_code);
        if ($this->isColumnModified(UserPeer::RECOVER_DUE)) $criteria->add(UserPeer::RECOVER_DUE, $this->recover_due);

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
        $criteria = new Criteria(UserPeer::DATABASE_NAME);
        $criteria->add(UserPeer::UID, $this->uid);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getUid();
    }

    /**
     * Generic method to set the primary key (uid column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setUid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getUid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of User (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRid($this->getRid());
        $copyObj->setName($this->getName());
        $copyObj->setLogin($this->getLogin());
        $copyObj->setPass($this->getPass());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setLastAccess($this->getLastAccess());
        $copyObj->setActive($this->getActive());
        $copyObj->setRecoverCode($this->getRecoverCode());
        $copyObj->setRecoverDue($this->getRecoverDue());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCustomers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCustomer($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTickets() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTicket($relObj->copy($deepCopy));
                }
            }

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
            $copyObj->setUid(NULL); // this is a auto-increment column, so set to default value
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
     * @return User Clone of current object.
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
     * @return UserPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UserPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Rol object.
     *
     * @param             Rol $v
     * @return User The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRol(Rol $v = null)
    {
        if ($v === null) {
            $this->setRid(NULL);
        } else {
            $this->setRid($v->getRid());
        }

        $this->aRol = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Rol object, it will not be re-added.
        if ($v !== null) {
            $v->addUser($this);
        }


        return $this;
    }


    /**
     * Get the associated Rol object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Rol The associated Rol object.
     * @throws PropelException
     */
    public function getRol(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRol === null && ($this->rid !== null) && $doQuery) {
            $this->aRol = RolQuery::create()->findPk($this->rid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRol->addUsers($this);
             */
        }

        return $this->aRol;
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
        if ('Customer' == $relationName) {
            $this->initCustomers();
        }
        if ('Ticket' == $relationName) {
            $this->initTickets();
        }
        if ('TicketComment' == $relationName) {
            $this->initTicketComments();
        }
        if ('TicketHistory' == $relationName) {
            $this->initTicketHistorys();
        }
    }

    /**
     * Clears out the collCustomers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
     * @see        addCustomers()
     */
    public function clearCustomers()
    {
        $this->collCustomers = null; // important to set this to null since that means it is uninitialized
        $this->collCustomersPartial = null;

        return $this;
    }

    /**
     * reset is the collCustomers collection loaded partially
     *
     * @return void
     */
    public function resetPartialCustomers($v = true)
    {
        $this->collCustomersPartial = $v;
    }

    /**
     * Initializes the collCustomers collection.
     *
     * By default this just sets the collCustomers collection to an empty array (like clearcollCustomers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCustomers($overrideExisting = true)
    {
        if (null !== $this->collCustomers && !$overrideExisting) {
            return;
        }
        $this->collCustomers = new PropelObjectCollection();
        $this->collCustomers->setModel('Customer');
    }

    /**
     * Gets an array of Customer objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this User is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Customer[] List of Customer objects
     * @throws PropelException
     */
    public function getCustomers($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCustomersPartial && !$this->isNew();
        if (null === $this->collCustomers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCustomers) {
                // return empty collection
                $this->initCustomers();
            } else {
                $collCustomers = CustomerQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCustomersPartial && count($collCustomers)) {
                      $this->initCustomers(false);

                      foreach($collCustomers as $obj) {
                        if (false == $this->collCustomers->contains($obj)) {
                          $this->collCustomers->append($obj);
                        }
                      }

                      $this->collCustomersPartial = true;
                    }

                    $collCustomers->getInternalIterator()->rewind();
                    return $collCustomers;
                }

                if($partial && $this->collCustomers) {
                    foreach($this->collCustomers as $obj) {
                        if($obj->isNew()) {
                            $collCustomers[] = $obj;
                        }
                    }
                }

                $this->collCustomers = $collCustomers;
                $this->collCustomersPartial = false;
            }
        }

        return $this->collCustomers;
    }

    /**
     * Sets a collection of Customer objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $customers A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return User The current object (for fluent API support)
     */
    public function setCustomers(PropelCollection $customers, PropelPDO $con = null)
    {
        $customersToDelete = $this->getCustomers(new Criteria(), $con)->diff($customers);

        $this->customersScheduledForDeletion = unserialize(serialize($customersToDelete));

        foreach ($customersToDelete as $customerRemoved) {
            $customerRemoved->setUser(null);
        }

        $this->collCustomers = null;
        foreach ($customers as $customer) {
            $this->addCustomer($customer);
        }

        $this->collCustomers = $customers;
        $this->collCustomersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Customer objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Customer objects.
     * @throws PropelException
     */
    public function countCustomers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCustomersPartial && !$this->isNew();
        if (null === $this->collCustomers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCustomers) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getCustomers());
            }
            $query = CustomerQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collCustomers);
    }

    /**
     * Method called to associate a Customer object to this object
     * through the Customer foreign key attribute.
     *
     * @param    Customer $l Customer
     * @return User The current object (for fluent API support)
     */
    public function addCustomer(Customer $l)
    {
        if ($this->collCustomers === null) {
            $this->initCustomers();
            $this->collCustomersPartial = true;
        }
        if (!in_array($l, $this->collCustomers->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCustomer($l);
        }

        return $this;
    }

    /**
     * @param	Customer $customer The customer object to add.
     */
    protected function doAddCustomer($customer)
    {
        $this->collCustomers[]= $customer;
        $customer->setUser($this);
    }

    /**
     * @param	Customer $customer The customer object to remove.
     * @return User The current object (for fluent API support)
     */
    public function removeCustomer($customer)
    {
        if ($this->getCustomers()->contains($customer)) {
            $this->collCustomers->remove($this->collCustomers->search($customer));
            if (null === $this->customersScheduledForDeletion) {
                $this->customersScheduledForDeletion = clone $this->collCustomers;
                $this->customersScheduledForDeletion->clear();
            }
            $this->customersScheduledForDeletion[]= clone $customer;
            $customer->setUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Customers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Customer[] List of Customer objects
     */
    public function getCustomersJoinCompany($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CustomerQuery::create(null, $criteria);
        $query->joinWith('Company', $join_behavior);

        return $this->getCustomers($query, $con);
    }

    /**
     * Clears out the collTickets collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
     * @see        addTickets()
     */
    public function clearTickets()
    {
        $this->collTickets = null; // important to set this to null since that means it is uninitialized
        $this->collTicketsPartial = null;

        return $this;
    }

    /**
     * reset is the collTickets collection loaded partially
     *
     * @return void
     */
    public function resetPartialTickets($v = true)
    {
        $this->collTicketsPartial = $v;
    }

    /**
     * Initializes the collTickets collection.
     *
     * By default this just sets the collTickets collection to an empty array (like clearcollTickets());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTickets($overrideExisting = true)
    {
        if (null !== $this->collTickets && !$overrideExisting) {
            return;
        }
        $this->collTickets = new PropelObjectCollection();
        $this->collTickets->setModel('Ticket');
    }

    /**
     * Gets an array of Ticket objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this User is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ticket[] List of Ticket objects
     * @throws PropelException
     */
    public function getTickets($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTicketsPartial && !$this->isNew();
        if (null === $this->collTickets || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTickets) {
                // return empty collection
                $this->initTickets();
            } else {
                $collTickets = TicketQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTicketsPartial && count($collTickets)) {
                      $this->initTickets(false);

                      foreach($collTickets as $obj) {
                        if (false == $this->collTickets->contains($obj)) {
                          $this->collTickets->append($obj);
                        }
                      }

                      $this->collTicketsPartial = true;
                    }

                    $collTickets->getInternalIterator()->rewind();
                    return $collTickets;
                }

                if($partial && $this->collTickets) {
                    foreach($this->collTickets as $obj) {
                        if($obj->isNew()) {
                            $collTickets[] = $obj;
                        }
                    }
                }

                $this->collTickets = $collTickets;
                $this->collTicketsPartial = false;
            }
        }

        return $this->collTickets;
    }

    /**
     * Sets a collection of Ticket objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tickets A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return User The current object (for fluent API support)
     */
    public function setTickets(PropelCollection $tickets, PropelPDO $con = null)
    {
        $ticketsToDelete = $this->getTickets(new Criteria(), $con)->diff($tickets);

        $this->ticketsScheduledForDeletion = unserialize(serialize($ticketsToDelete));

        foreach ($ticketsToDelete as $ticketRemoved) {
            $ticketRemoved->setUser(null);
        }

        $this->collTickets = null;
        foreach ($tickets as $ticket) {
            $this->addTicket($ticket);
        }

        $this->collTickets = $tickets;
        $this->collTicketsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ticket objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ticket objects.
     * @throws PropelException
     */
    public function countTickets(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTicketsPartial && !$this->isNew();
        if (null === $this->collTickets || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTickets) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getTickets());
            }
            $query = TicketQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collTickets);
    }

    /**
     * Method called to associate a Ticket object to this object
     * through the Ticket foreign key attribute.
     *
     * @param    Ticket $l Ticket
     * @return User The current object (for fluent API support)
     */
    public function addTicket(Ticket $l)
    {
        if ($this->collTickets === null) {
            $this->initTickets();
            $this->collTicketsPartial = true;
        }
        if (!in_array($l, $this->collTickets->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTicket($l);
        }

        return $this;
    }

    /**
     * @param	Ticket $ticket The ticket object to add.
     */
    protected function doAddTicket($ticket)
    {
        $this->collTickets[]= $ticket;
        $ticket->setUser($this);
    }

    /**
     * @param	Ticket $ticket The ticket object to remove.
     * @return User The current object (for fluent API support)
     */
    public function removeTicket($ticket)
    {
        if ($this->getTickets()->contains($ticket)) {
            $this->collTickets->remove($this->collTickets->search($ticket));
            if (null === $this->ticketsScheduledForDeletion) {
                $this->ticketsScheduledForDeletion = clone $this->collTickets;
                $this->ticketsScheduledForDeletion->clear();
            }
            $this->ticketsScheduledForDeletion[]= clone $ticket;
            $ticket->setUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Tickets from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ticket[] List of Ticket objects
     */
    public function getTicketsJoinCompany($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketQuery::create(null, $criteria);
        $query->joinWith('Company', $join_behavior);

        return $this->getTickets($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Tickets from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ticket[] List of Ticket objects
     */
    public function getTicketsJoinCustomer($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketQuery::create(null, $criteria);
        $query->joinWith('Customer', $join_behavior);

        return $this->getTickets($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Tickets from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ticket[] List of Ticket objects
     */
    public function getTicketsJoinModule($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketQuery::create(null, $criteria);
        $query->joinWith('Module', $join_behavior);

        return $this->getTickets($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Tickets from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ticket[] List of Ticket objects
     */
    public function getTicketsJoinTicketPriority($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketQuery::create(null, $criteria);
        $query->joinWith('TicketPriority', $join_behavior);

        return $this->getTickets($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Tickets from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ticket[] List of Ticket objects
     */
    public function getTicketsJoinTicketStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketQuery::create(null, $criteria);
        $query->joinWith('TicketStatus', $join_behavior);

        return $this->getTickets($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Tickets from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ticket[] List of Ticket objects
     */
    public function getTicketsJoinTicketType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketQuery::create(null, $criteria);
        $query->joinWith('TicketType', $join_behavior);

        return $this->getTickets($query, $con);
    }

    /**
     * Clears out the collTicketComments collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
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
     * If this User is new, it will return
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
                    ->filterByUser($this)
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
     * @return User The current object (for fluent API support)
     */
    public function setTicketComments(PropelCollection $ticketComments, PropelPDO $con = null)
    {
        $ticketCommentsToDelete = $this->getTicketComments(new Criteria(), $con)->diff($ticketComments);

        $this->ticketCommentsScheduledForDeletion = unserialize(serialize($ticketCommentsToDelete));

        foreach ($ticketCommentsToDelete as $ticketCommentRemoved) {
            $ticketCommentRemoved->setUser(null);
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
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collTicketComments);
    }

    /**
     * Method called to associate a TicketComment object to this object
     * through the TicketComment foreign key attribute.
     *
     * @param    TicketComment $l TicketComment
     * @return User The current object (for fluent API support)
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
        $ticketComment->setUser($this);
    }

    /**
     * @param	TicketComment $ticketComment The ticketComment object to remove.
     * @return User The current object (for fluent API support)
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
            $ticketComment->setUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related TicketComments from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TicketComment[] List of TicketComment objects
     */
    public function getTicketCommentsJoinTicket($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketCommentQuery::create(null, $criteria);
        $query->joinWith('Ticket', $join_behavior);

        return $this->getTicketComments($query, $con);
    }

    /**
     * Clears out the collTicketHistorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
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
     * If this User is new, it will return
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
                    ->filterByUser($this)
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
     * @return User The current object (for fluent API support)
     */
    public function setTicketHistorys(PropelCollection $ticketHistorys, PropelPDO $con = null)
    {
        $ticketHistorysToDelete = $this->getTicketHistorys(new Criteria(), $con)->diff($ticketHistorys);

        $this->ticketHistorysScheduledForDeletion = unserialize(serialize($ticketHistorysToDelete));

        foreach ($ticketHistorysToDelete as $ticketHistoryRemoved) {
            $ticketHistoryRemoved->setUser(null);
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
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collTicketHistorys);
    }

    /**
     * Method called to associate a TicketHistory object to this object
     * through the TicketHistory foreign key attribute.
     *
     * @param    TicketHistory $l TicketHistory
     * @return User The current object (for fluent API support)
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
        $ticketHistory->setUser($this);
    }

    /**
     * @param	TicketHistory $ticketHistory The ticketHistory object to remove.
     * @return User The current object (for fluent API support)
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
            $ticketHistory->setUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related TicketHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TicketHistory[] List of TicketHistory objects
     */
    public function getTicketHistorysJoinTicket($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TicketHistoryQuery::create(null, $criteria);
        $query->joinWith('Ticket', $join_behavior);

        return $this->getTicketHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related TicketHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
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
        $this->uid = null;
        $this->rid = null;
        $this->name = null;
        $this->login = null;
        $this->pass = null;
        $this->email = null;
        $this->last_access = null;
        $this->active = null;
        $this->recover_code = null;
        $this->recover_due = null;
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
            if ($this->collCustomers) {
                foreach ($this->collCustomers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTickets) {
                foreach ($this->collTickets as $o) {
                    $o->clearAllReferences($deep);
                }
            }
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
            if ($this->aRol instanceof Persistent) {
              $this->aRol->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCustomers instanceof PropelCollection) {
            $this->collCustomers->clearIterator();
        }
        $this->collCustomers = null;
        if ($this->collTickets instanceof PropelCollection) {
            $this->collTickets->clearIterator();
        }
        $this->collTickets = null;
        if ($this->collTicketComments instanceof PropelCollection) {
            $this->collTicketComments->clearIterator();
        }
        $this->collTicketComments = null;
        if ($this->collTicketHistorys instanceof PropelCollection) {
            $this->collTicketHistorys->clearIterator();
        }
        $this->collTicketHistorys = null;
        $this->aRol = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UserPeer::DEFAULT_STRING_FORMAT);
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
