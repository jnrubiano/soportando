<?php


/**
 * Base class that represents a row from the 'ticket_history' table.
 *
 *
 *
 * @package    propel.generator.Soportando.om
 */
abstract class BaseTicketHistory extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TicketHistoryPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TicketHistoryPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the ticket_history_id field.
     * @var        int
     */
    protected $ticket_history_id;

    /**
     * The value for the ticket_id field.
     * @var        int
     */
    protected $ticket_id;

    /**
     * The value for the status_date field.
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        string
     */
    protected $status_date;

    /**
     * The value for the uid field.
     * @var        int
     */
    protected $uid;

    /**
     * The value for the ticket_status_id field.
     * @var        int
     */
    protected $ticket_status_id;

    /**
     * @var        Ticket
     */
    protected $aTicket;

    /**
     * @var        User
     */
    protected $aUser;

    /**
     * @var        TicketStatus
     */
    protected $aTicketStatus;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
    }

    /**
     * Initializes internal state of BaseTicketHistory object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [ticket_history_id] column value.
     *
     * @return int
     */
    public function getTicketHistoryId()
    {
        return $this->ticket_history_id;
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
     * Get the [uid] column value.
     *
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
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
     * Set the value of [ticket_history_id] column.
     *
     * @param int $v new value
     * @return TicketHistory The current object (for fluent API support)
     */
    public function setTicketHistoryId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ticket_history_id !== $v) {
            $this->ticket_history_id = $v;
            $this->modifiedColumns[] = TicketHistoryPeer::TICKET_HISTORY_ID;
        }


        return $this;
    } // setTicketHistoryId()

    /**
     * Set the value of [ticket_id] column.
     *
     * @param int $v new value
     * @return TicketHistory The current object (for fluent API support)
     */
    public function setTicketId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ticket_id !== $v) {
            $this->ticket_id = $v;
            $this->modifiedColumns[] = TicketHistoryPeer::TICKET_ID;
        }

        if ($this->aTicket !== null && $this->aTicket->getTicketId() !== $v) {
            $this->aTicket = null;
        }


        return $this;
    } // setTicketId()

    /**
     * Sets the value of [status_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TicketHistory The current object (for fluent API support)
     */
    public function setStatusDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->status_date !== null || $dt !== null) {
            $currentDateAsString = ($this->status_date !== null && $tmpDt = new DateTime($this->status_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->status_date = $newDateAsString;
                $this->modifiedColumns[] = TicketHistoryPeer::STATUS_DATE;
            }
        } // if either are not null


        return $this;
    } // setStatusDate()

    /**
     * Set the value of [uid] column.
     *
     * @param int $v new value
     * @return TicketHistory The current object (for fluent API support)
     */
    public function setUid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->uid !== $v) {
            $this->uid = $v;
            $this->modifiedColumns[] = TicketHistoryPeer::UID;
        }

        if ($this->aUser !== null && $this->aUser->getUid() !== $v) {
            $this->aUser = null;
        }


        return $this;
    } // setUid()

    /**
     * Set the value of [ticket_status_id] column.
     *
     * @param int $v new value
     * @return TicketHistory The current object (for fluent API support)
     */
    public function setTicketStatusId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ticket_status_id !== $v) {
            $this->ticket_status_id = $v;
            $this->modifiedColumns[] = TicketHistoryPeer::TICKET_STATUS_ID;
        }

        if ($this->aTicketStatus !== null && $this->aTicketStatus->getTicketStatusId() !== $v) {
            $this->aTicketStatus = null;
        }


        return $this;
    } // setTicketStatusId()

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

            $this->ticket_history_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->ticket_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->status_date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->uid = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->ticket_status_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 5; // 5 = TicketHistoryPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TicketHistory object", $e);
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

        if ($this->aTicket !== null && $this->ticket_id !== $this->aTicket->getTicketId()) {
            $this->aTicket = null;
        }
        if ($this->aUser !== null && $this->uid !== $this->aUser->getUid()) {
            $this->aUser = null;
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
            $con = Propel::getConnection(TicketHistoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TicketHistoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTicket = null;
            $this->aUser = null;
            $this->aTicketStatus = null;
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
            $con = Propel::getConnection(TicketHistoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TicketHistoryQuery::create()
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
            $con = Propel::getConnection(TicketHistoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TicketHistoryPeer::addInstanceToPool($this);
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

            if ($this->aTicket !== null) {
                if ($this->aTicket->isModified() || $this->aTicket->isNew()) {
                    $affectedRows += $this->aTicket->save($con);
                }
                $this->setTicket($this->aTicket);
            }

            if ($this->aUser !== null) {
                if ($this->aUser->isModified() || $this->aUser->isNew()) {
                    $affectedRows += $this->aUser->save($con);
                }
                $this->setUser($this->aUser);
            }

            if ($this->aTicketStatus !== null) {
                if ($this->aTicketStatus->isModified() || $this->aTicketStatus->isNew()) {
                    $affectedRows += $this->aTicketStatus->save($con);
                }
                $this->setTicketStatus($this->aTicketStatus);
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

        $this->modifiedColumns[] = TicketHistoryPeer::TICKET_HISTORY_ID;
        if (null !== $this->ticket_history_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TicketHistoryPeer::TICKET_HISTORY_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TicketHistoryPeer::TICKET_HISTORY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ticket_history_id`';
        }
        if ($this->isColumnModified(TicketHistoryPeer::TICKET_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ticket_id`';
        }
        if ($this->isColumnModified(TicketHistoryPeer::STATUS_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`status_date`';
        }
        if ($this->isColumnModified(TicketHistoryPeer::UID)) {
            $modifiedColumns[':p' . $index++]  = '`uid`';
        }
        if ($this->isColumnModified(TicketHistoryPeer::TICKET_STATUS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ticket_status_id`';
        }

        $sql = sprintf(
            'INSERT INTO `ticket_history` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ticket_history_id`':
                        $stmt->bindValue($identifier, $this->ticket_history_id, PDO::PARAM_INT);
                        break;
                    case '`ticket_id`':
                        $stmt->bindValue($identifier, $this->ticket_id, PDO::PARAM_INT);
                        break;
                    case '`status_date`':
                        $stmt->bindValue($identifier, $this->status_date, PDO::PARAM_STR);
                        break;
                    case '`uid`':
                        $stmt->bindValue($identifier, $this->uid, PDO::PARAM_INT);
                        break;
                    case '`ticket_status_id`':
                        $stmt->bindValue($identifier, $this->ticket_status_id, PDO::PARAM_INT);
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
        $this->setTicketHistoryId($pk);

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

            if ($this->aTicket !== null) {
                if (!$this->aTicket->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTicket->getValidationFailures());
                }
            }

            if ($this->aUser !== null) {
                if (!$this->aUser->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
                }
            }

            if ($this->aTicketStatus !== null) {
                if (!$this->aTicketStatus->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTicketStatus->getValidationFailures());
                }
            }


            if (($retval = TicketHistoryPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = TicketHistoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTicketHistoryId();
                break;
            case 1:
                return $this->getTicketId();
                break;
            case 2:
                return $this->getStatusDate();
                break;
            case 3:
                return $this->getUid();
                break;
            case 4:
                return $this->getTicketStatusId();
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
        if (isset($alreadyDumpedObjects['TicketHistory'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TicketHistory'][$this->getPrimaryKey()] = true;
        $keys = TicketHistoryPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getTicketHistoryId(),
            $keys[1] => $this->getTicketId(),
            $keys[2] => $this->getStatusDate(),
            $keys[3] => $this->getUid(),
            $keys[4] => $this->getTicketStatusId(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aTicket) {
                $result['Ticket'] = $this->aTicket->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUser) {
                $result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTicketStatus) {
                $result['TicketStatus'] = $this->aTicketStatus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = TicketHistoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTicketHistoryId($value);
                break;
            case 1:
                $this->setTicketId($value);
                break;
            case 2:
                $this->setStatusDate($value);
                break;
            case 3:
                $this->setUid($value);
                break;
            case 4:
                $this->setTicketStatusId($value);
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
        $keys = TicketHistoryPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setTicketHistoryId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTicketId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStatusDate($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUid($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTicketStatusId($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TicketHistoryPeer::DATABASE_NAME);

        if ($this->isColumnModified(TicketHistoryPeer::TICKET_HISTORY_ID)) $criteria->add(TicketHistoryPeer::TICKET_HISTORY_ID, $this->ticket_history_id);
        if ($this->isColumnModified(TicketHistoryPeer::TICKET_ID)) $criteria->add(TicketHistoryPeer::TICKET_ID, $this->ticket_id);
        if ($this->isColumnModified(TicketHistoryPeer::STATUS_DATE)) $criteria->add(TicketHistoryPeer::STATUS_DATE, $this->status_date);
        if ($this->isColumnModified(TicketHistoryPeer::UID)) $criteria->add(TicketHistoryPeer::UID, $this->uid);
        if ($this->isColumnModified(TicketHistoryPeer::TICKET_STATUS_ID)) $criteria->add(TicketHistoryPeer::TICKET_STATUS_ID, $this->ticket_status_id);

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
        $criteria = new Criteria(TicketHistoryPeer::DATABASE_NAME);
        $criteria->add(TicketHistoryPeer::TICKET_HISTORY_ID, $this->ticket_history_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getTicketHistoryId();
    }

    /**
     * Generic method to set the primary key (ticket_history_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setTicketHistoryId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getTicketHistoryId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of TicketHistory (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTicketId($this->getTicketId());
        $copyObj->setStatusDate($this->getStatusDate());
        $copyObj->setUid($this->getUid());
        $copyObj->setTicketStatusId($this->getTicketStatusId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setTicketHistoryId(NULL); // this is a auto-increment column, so set to default value
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
     * @return TicketHistory Clone of current object.
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
     * @return TicketHistoryPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TicketHistoryPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Ticket object.
     *
     * @param             Ticket $v
     * @return TicketHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTicket(Ticket $v = null)
    {
        if ($v === null) {
            $this->setTicketId(NULL);
        } else {
            $this->setTicketId($v->getTicketId());
        }

        $this->aTicket = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Ticket object, it will not be re-added.
        if ($v !== null) {
            $v->addTicketHistory($this);
        }


        return $this;
    }


    /**
     * Get the associated Ticket object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Ticket The associated Ticket object.
     * @throws PropelException
     */
    public function getTicket(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTicket === null && ($this->ticket_id !== null) && $doQuery) {
            $this->aTicket = TicketQuery::create()->findPk($this->ticket_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTicket->addTicketHistorys($this);
             */
        }

        return $this->aTicket;
    }

    /**
     * Declares an association between this object and a User object.
     *
     * @param             User $v
     * @return TicketHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUser(User $v = null)
    {
        if ($v === null) {
            $this->setUid(NULL);
        } else {
            $this->setUid($v->getUid());
        }

        $this->aUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the User object, it will not be re-added.
        if ($v !== null) {
            $v->addTicketHistory($this);
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
        if ($this->aUser === null && ($this->uid !== null) && $doQuery) {
            $this->aUser = UserQuery::create()->findPk($this->uid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUser->addTicketHistorys($this);
             */
        }

        return $this->aUser;
    }

    /**
     * Declares an association between this object and a TicketStatus object.
     *
     * @param             TicketStatus $v
     * @return TicketHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTicketStatus(TicketStatus $v = null)
    {
        if ($v === null) {
            $this->setTicketStatusId(NULL);
        } else {
            $this->setTicketStatusId($v->getTicketStatusId());
        }

        $this->aTicketStatus = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TicketStatus object, it will not be re-added.
        if ($v !== null) {
            $v->addTicketHistory($this);
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
                $this->aTicketStatus->addTicketHistorys($this);
             */
        }

        return $this->aTicketStatus;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->ticket_history_id = null;
        $this->ticket_id = null;
        $this->status_date = null;
        $this->uid = null;
        $this->ticket_status_id = null;
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
            if ($this->aTicket instanceof Persistent) {
              $this->aTicket->clearAllReferences($deep);
            }
            if ($this->aUser instanceof Persistent) {
              $this->aUser->clearAllReferences($deep);
            }
            if ($this->aTicketStatus instanceof Persistent) {
              $this->aTicketStatus->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aTicket = null;
        $this->aUser = null;
        $this->aTicketStatus = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TicketHistoryPeer::DEFAULT_STRING_FORMAT);
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
