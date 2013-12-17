<?php


/**
 * Base class that represents a row from the 'diet_items' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseDietItems extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DietItemsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DietItemsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the autoctr field.
     * @var        int
     */
    protected $autoctr;

    /**
     * The value for the dietcode field.
     * @var        int
     */
    protected $dietcode;

    /**
     * The value for the foodi field.
     * @var        string
     */
    protected $foodi;

    /**
     * The value for the foodii field.
     * @var        string
     */
    protected $foodii;

    /**
     * The value for the foodiii field.
     * @var        string
     */
    protected $foodiii;

    /**
     * The value for the stage field.
     * @var        string
     */
    protected $stage;

    /**
     * The value for the dietpercent field.
     * @var        double
     */
    protected $dietpercent;

    /**
     * The value for the itemname field.
     * @var        string
     */
    protected $itemname;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the dietspeccode field.
     * @var        int
     */
    protected $dietspeccode;

    /**
     * The value for the dietspeccodeslb field.
     * @var        int
     */
    protected $dietspeccodeslb;

    /**
     * The value for the alphacode field.
     * @var        string
     */
    protected $alphacode;

    /**
     * The value for the preytroph field.
     * @var        double
     */
    protected $preytroph;

    /**
     * The value for the preysetroph field.
     * @var        double
     */
    protected $preysetroph;

    /**
     * The value for the preyremark field.
     * @var        string
     */
    protected $preyremark;

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
     * Get the [autoctr] column value.
     *
     * @return int
     */
    public function getAutoctr()
    {

        return $this->autoctr;
    }

    /**
     * Get the [dietcode] column value.
     *
     * @return int
     */
    public function getDietcode()
    {

        return $this->dietcode;
    }

    /**
     * Get the [foodi] column value.
     *
     * @return string
     */
    public function getFoodi()
    {

        return $this->foodi;
    }

    /**
     * Get the [foodii] column value.
     *
     * @return string
     */
    public function getFoodii()
    {

        return $this->foodii;
    }

    /**
     * Get the [foodiii] column value.
     *
     * @return string
     */
    public function getFoodiii()
    {

        return $this->foodiii;
    }

    /**
     * Get the [stage] column value.
     *
     * @return string
     */
    public function getStage()
    {

        return $this->stage;
    }

    /**
     * Get the [dietpercent] column value.
     *
     * @return double
     */
    public function getDietpercent()
    {

        return $this->dietpercent;
    }

    /**
     * Get the [itemname] column value.
     *
     * @return string
     */
    public function getItemname()
    {

        return $this->itemname;
    }

    /**
     * Get the [comment] column value.
     *
     * @return string
     */
    public function getComment()
    {

        return $this->comment;
    }

    /**
     * Get the [dietspeccode] column value.
     *
     * @return int
     */
    public function getDietspeccode()
    {

        return $this->dietspeccode;
    }

    /**
     * Get the [dietspeccodeslb] column value.
     *
     * @return int
     */
    public function getDietspeccodeslb()
    {

        return $this->dietspeccodeslb;
    }

    /**
     * Get the [alphacode] column value.
     *
     * @return string
     */
    public function getAlphacode()
    {

        return $this->alphacode;
    }

    /**
     * Get the [preytroph] column value.
     *
     * @return double
     */
    public function getPreytroph()
    {

        return $this->preytroph;
    }

    /**
     * Get the [preysetroph] column value.
     *
     * @return double
     */
    public function getPreysetroph()
    {

        return $this->preysetroph;
    }

    /**
     * Get the [preyremark] column value.
     *
     * @return string
     */
    public function getPreyremark()
    {

        return $this->preyremark;
    }

    /**
     * Set the value of [autoctr] column.
     *
     * @param  int $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = DietItemsPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [dietcode] column.
     *
     * @param  int $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setDietcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dietcode !== $v) {
            $this->dietcode = $v;
            $this->modifiedColumns[] = DietItemsPeer::DIETCODE;
        }


        return $this;
    } // setDietcode()

    /**
     * Set the value of [foodi] column.
     *
     * @param  string $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setFoodi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodi !== $v) {
            $this->foodi = $v;
            $this->modifiedColumns[] = DietItemsPeer::FOODI;
        }


        return $this;
    } // setFoodi()

    /**
     * Set the value of [foodii] column.
     *
     * @param  string $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setFoodii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodii !== $v) {
            $this->foodii = $v;
            $this->modifiedColumns[] = DietItemsPeer::FOODII;
        }


        return $this;
    } // setFoodii()

    /**
     * Set the value of [foodiii] column.
     *
     * @param  string $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setFoodiii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodiii !== $v) {
            $this->foodiii = $v;
            $this->modifiedColumns[] = DietItemsPeer::FOODIII;
        }


        return $this;
    } // setFoodiii()

    /**
     * Set the value of [stage] column.
     *
     * @param  string $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setStage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->stage !== $v) {
            $this->stage = $v;
            $this->modifiedColumns[] = DietItemsPeer::STAGE;
        }


        return $this;
    } // setStage()

    /**
     * Set the value of [dietpercent] column.
     *
     * @param  double $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setDietpercent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dietpercent !== $v) {
            $this->dietpercent = $v;
            $this->modifiedColumns[] = DietItemsPeer::DIETPERCENT;
        }


        return $this;
    } // setDietpercent()

    /**
     * Set the value of [itemname] column.
     *
     * @param  string $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setItemname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->itemname !== $v) {
            $this->itemname = $v;
            $this->modifiedColumns[] = DietItemsPeer::ITEMNAME;
        }


        return $this;
    } // setItemname()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = DietItemsPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [dietspeccode] column.
     *
     * @param  int $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setDietspeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dietspeccode !== $v) {
            $this->dietspeccode = $v;
            $this->modifiedColumns[] = DietItemsPeer::DIETSPECCODE;
        }


        return $this;
    } // setDietspeccode()

    /**
     * Set the value of [dietspeccodeslb] column.
     *
     * @param  int $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setDietspeccodeslb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dietspeccodeslb !== $v) {
            $this->dietspeccodeslb = $v;
            $this->modifiedColumns[] = DietItemsPeer::DIETSPECCODESLB;
        }


        return $this;
    } // setDietspeccodeslb()

    /**
     * Set the value of [alphacode] column.
     *
     * @param  string $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setAlphacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alphacode !== $v) {
            $this->alphacode = $v;
            $this->modifiedColumns[] = DietItemsPeer::ALPHACODE;
        }


        return $this;
    } // setAlphacode()

    /**
     * Set the value of [preytroph] column.
     *
     * @param  double $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setPreytroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preytroph !== $v) {
            $this->preytroph = $v;
            $this->modifiedColumns[] = DietItemsPeer::PREYTROPH;
        }


        return $this;
    } // setPreytroph()

    /**
     * Set the value of [preysetroph] column.
     *
     * @param  double $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setPreysetroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preysetroph !== $v) {
            $this->preysetroph = $v;
            $this->modifiedColumns[] = DietItemsPeer::PREYSETROPH;
        }


        return $this;
    } // setPreysetroph()

    /**
     * Set the value of [preyremark] column.
     *
     * @param  string $v new value
     * @return DietItems The current object (for fluent API support)
     */
    public function setPreyremark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->preyremark !== $v) {
            $this->preyremark = $v;
            $this->modifiedColumns[] = DietItemsPeer::PREYREMARK;
        }


        return $this;
    } // setPreyremark()

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
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->autoctr = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->dietcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->foodi = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->foodii = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->foodiii = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->stage = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->dietpercent = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->itemname = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->comment = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->dietspeccode = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->dietspeccodeslb = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->alphacode = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->preytroph = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->preysetroph = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->preyremark = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = DietItemsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating DietItems object", $e);
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
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DietItemsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DietItemsQuery::create()
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
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DietItemsPeer::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DietItemsPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(DietItemsPeer::DIETCODE)) {
            $modifiedColumns[':p' . $index++]  = '`DietCode`';
        }
        if ($this->isColumnModified(DietItemsPeer::FOODI)) {
            $modifiedColumns[':p' . $index++]  = '`FoodI`';
        }
        if ($this->isColumnModified(DietItemsPeer::FOODII)) {
            $modifiedColumns[':p' . $index++]  = '`FoodII`';
        }
        if ($this->isColumnModified(DietItemsPeer::FOODIII)) {
            $modifiedColumns[':p' . $index++]  = '`FoodIII`';
        }
        if ($this->isColumnModified(DietItemsPeer::STAGE)) {
            $modifiedColumns[':p' . $index++]  = '`Stage`';
        }
        if ($this->isColumnModified(DietItemsPeer::DIETPERCENT)) {
            $modifiedColumns[':p' . $index++]  = '`DietPercent`';
        }
        if ($this->isColumnModified(DietItemsPeer::ITEMNAME)) {
            $modifiedColumns[':p' . $index++]  = '`ItemName`';
        }
        if ($this->isColumnModified(DietItemsPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(DietItemsPeer::DIETSPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`DietSpeccode`';
        }
        if ($this->isColumnModified(DietItemsPeer::DIETSPECCODESLB)) {
            $modifiedColumns[':p' . $index++]  = '`DietSpeccodeSLB`';
        }
        if ($this->isColumnModified(DietItemsPeer::ALPHACODE)) {
            $modifiedColumns[':p' . $index++]  = '`AlphaCode`';
        }
        if ($this->isColumnModified(DietItemsPeer::PREYTROPH)) {
            $modifiedColumns[':p' . $index++]  = '`PreyTroph`';
        }
        if ($this->isColumnModified(DietItemsPeer::PREYSETROPH)) {
            $modifiedColumns[':p' . $index++]  = '`PreySeTroph`';
        }
        if ($this->isColumnModified(DietItemsPeer::PREYREMARK)) {
            $modifiedColumns[':p' . $index++]  = '`PreyRemark`';
        }

        $sql = sprintf(
            'INSERT INTO `diet_items` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`autoctr`':
                        $stmt->bindValue($identifier, $this->autoctr, PDO::PARAM_INT);
                        break;
                    case '`DietCode`':
                        $stmt->bindValue($identifier, $this->dietcode, PDO::PARAM_INT);
                        break;
                    case '`FoodI`':
                        $stmt->bindValue($identifier, $this->foodi, PDO::PARAM_STR);
                        break;
                    case '`FoodII`':
                        $stmt->bindValue($identifier, $this->foodii, PDO::PARAM_STR);
                        break;
                    case '`FoodIII`':
                        $stmt->bindValue($identifier, $this->foodiii, PDO::PARAM_STR);
                        break;
                    case '`Stage`':
                        $stmt->bindValue($identifier, $this->stage, PDO::PARAM_STR);
                        break;
                    case '`DietPercent`':
                        $stmt->bindValue($identifier, $this->dietpercent, PDO::PARAM_STR);
                        break;
                    case '`ItemName`':
                        $stmt->bindValue($identifier, $this->itemname, PDO::PARAM_STR);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`DietSpeccode`':
                        $stmt->bindValue($identifier, $this->dietspeccode, PDO::PARAM_INT);
                        break;
                    case '`DietSpeccodeSLB`':
                        $stmt->bindValue($identifier, $this->dietspeccodeslb, PDO::PARAM_INT);
                        break;
                    case '`AlphaCode`':
                        $stmt->bindValue($identifier, $this->alphacode, PDO::PARAM_STR);
                        break;
                    case '`PreyTroph`':
                        $stmt->bindValue($identifier, $this->preytroph, PDO::PARAM_STR);
                        break;
                    case '`PreySeTroph`':
                        $stmt->bindValue($identifier, $this->preysetroph, PDO::PARAM_STR);
                        break;
                    case '`PreyRemark`':
                        $stmt->bindValue($identifier, $this->preyremark, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = DietItemsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DietItemsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAutoctr();
                break;
            case 1:
                return $this->getDietcode();
                break;
            case 2:
                return $this->getFoodi();
                break;
            case 3:
                return $this->getFoodii();
                break;
            case 4:
                return $this->getFoodiii();
                break;
            case 5:
                return $this->getStage();
                break;
            case 6:
                return $this->getDietpercent();
                break;
            case 7:
                return $this->getItemname();
                break;
            case 8:
                return $this->getComment();
                break;
            case 9:
                return $this->getDietspeccode();
                break;
            case 10:
                return $this->getDietspeccodeslb();
                break;
            case 11:
                return $this->getAlphacode();
                break;
            case 12:
                return $this->getPreytroph();
                break;
            case 13:
                return $this->getPreysetroph();
                break;
            case 14:
                return $this->getPreyremark();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['DietItems'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['DietItems'][serialize($this->getPrimaryKey())] = true;
        $keys = DietItemsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getDietcode(),
            $keys[2] => $this->getFoodi(),
            $keys[3] => $this->getFoodii(),
            $keys[4] => $this->getFoodiii(),
            $keys[5] => $this->getStage(),
            $keys[6] => $this->getDietpercent(),
            $keys[7] => $this->getItemname(),
            $keys[8] => $this->getComment(),
            $keys[9] => $this->getDietspeccode(),
            $keys[10] => $this->getDietspeccodeslb(),
            $keys[11] => $this->getAlphacode(),
            $keys[12] => $this->getPreytroph(),
            $keys[13] => $this->getPreysetroph(),
            $keys[14] => $this->getPreyremark(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
        $pos = DietItemsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAutoctr($value);
                break;
            case 1:
                $this->setDietcode($value);
                break;
            case 2:
                $this->setFoodi($value);
                break;
            case 3:
                $this->setFoodii($value);
                break;
            case 4:
                $this->setFoodiii($value);
                break;
            case 5:
                $this->setStage($value);
                break;
            case 6:
                $this->setDietpercent($value);
                break;
            case 7:
                $this->setItemname($value);
                break;
            case 8:
                $this->setComment($value);
                break;
            case 9:
                $this->setDietspeccode($value);
                break;
            case 10:
                $this->setDietspeccodeslb($value);
                break;
            case 11:
                $this->setAlphacode($value);
                break;
            case 12:
                $this->setPreytroph($value);
                break;
            case 13:
                $this->setPreysetroph($value);
                break;
            case 14:
                $this->setPreyremark($value);
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
        $keys = DietItemsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDietcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFoodi($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFoodii($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFoodiii($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStage($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDietpercent($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setItemname($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setComment($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDietspeccode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDietspeccodeslb($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAlphacode($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPreytroph($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPreysetroph($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPreyremark($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DietItemsPeer::DATABASE_NAME);

        if ($this->isColumnModified(DietItemsPeer::AUTOCTR)) $criteria->add(DietItemsPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(DietItemsPeer::DIETCODE)) $criteria->add(DietItemsPeer::DIETCODE, $this->dietcode);
        if ($this->isColumnModified(DietItemsPeer::FOODI)) $criteria->add(DietItemsPeer::FOODI, $this->foodi);
        if ($this->isColumnModified(DietItemsPeer::FOODII)) $criteria->add(DietItemsPeer::FOODII, $this->foodii);
        if ($this->isColumnModified(DietItemsPeer::FOODIII)) $criteria->add(DietItemsPeer::FOODIII, $this->foodiii);
        if ($this->isColumnModified(DietItemsPeer::STAGE)) $criteria->add(DietItemsPeer::STAGE, $this->stage);
        if ($this->isColumnModified(DietItemsPeer::DIETPERCENT)) $criteria->add(DietItemsPeer::DIETPERCENT, $this->dietpercent);
        if ($this->isColumnModified(DietItemsPeer::ITEMNAME)) $criteria->add(DietItemsPeer::ITEMNAME, $this->itemname);
        if ($this->isColumnModified(DietItemsPeer::COMMENT)) $criteria->add(DietItemsPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(DietItemsPeer::DIETSPECCODE)) $criteria->add(DietItemsPeer::DIETSPECCODE, $this->dietspeccode);
        if ($this->isColumnModified(DietItemsPeer::DIETSPECCODESLB)) $criteria->add(DietItemsPeer::DIETSPECCODESLB, $this->dietspeccodeslb);
        if ($this->isColumnModified(DietItemsPeer::ALPHACODE)) $criteria->add(DietItemsPeer::ALPHACODE, $this->alphacode);
        if ($this->isColumnModified(DietItemsPeer::PREYTROPH)) $criteria->add(DietItemsPeer::PREYTROPH, $this->preytroph);
        if ($this->isColumnModified(DietItemsPeer::PREYSETROPH)) $criteria->add(DietItemsPeer::PREYSETROPH, $this->preysetroph);
        if ($this->isColumnModified(DietItemsPeer::PREYREMARK)) $criteria->add(DietItemsPeer::PREYREMARK, $this->preyremark);

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
        $criteria = new Criteria(DietItemsPeer::DATABASE_NAME);
        $criteria->add(DietItemsPeer::DIETCODE, $this->dietcode);
        $criteria->add(DietItemsPeer::FOODIII, $this->foodiii);
        $criteria->add(DietItemsPeer::STAGE, $this->stage);
        $criteria->add(DietItemsPeer::DIETPERCENT, $this->dietpercent);
        $criteria->add(DietItemsPeer::ITEMNAME, $this->itemname);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getDietcode();
        $pks[1] = $this->getFoodiii();
        $pks[2] = $this->getStage();
        $pks[3] = $this->getDietpercent();
        $pks[4] = $this->getItemname();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setDietcode($keys[0]);
        $this->setFoodiii($keys[1]);
        $this->setStage($keys[2]);
        $this->setDietpercent($keys[3]);
        $this->setItemname($keys[4]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getDietcode()) && (null === $this->getFoodiii()) && (null === $this->getStage()) && (null === $this->getDietpercent()) && (null === $this->getItemname());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of DietItems (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAutoctr($this->getAutoctr());
        $copyObj->setDietcode($this->getDietcode());
        $copyObj->setFoodi($this->getFoodi());
        $copyObj->setFoodii($this->getFoodii());
        $copyObj->setFoodiii($this->getFoodiii());
        $copyObj->setStage($this->getStage());
        $copyObj->setDietpercent($this->getDietpercent());
        $copyObj->setItemname($this->getItemname());
        $copyObj->setComment($this->getComment());
        $copyObj->setDietspeccode($this->getDietspeccode());
        $copyObj->setDietspeccodeslb($this->getDietspeccodeslb());
        $copyObj->setAlphacode($this->getAlphacode());
        $copyObj->setPreytroph($this->getPreytroph());
        $copyObj->setPreysetroph($this->getPreysetroph());
        $copyObj->setPreyremark($this->getPreyremark());
        if ($makeNew) {
            $copyObj->setNew(true);
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
     * @return DietItems Clone of current object.
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
     * @return DietItemsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DietItemsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->dietcode = null;
        $this->foodi = null;
        $this->foodii = null;
        $this->foodiii = null;
        $this->stage = null;
        $this->dietpercent = null;
        $this->itemname = null;
        $this->comment = null;
        $this->dietspeccode = null;
        $this->dietspeccodeslb = null;
        $this->alphacode = null;
        $this->preytroph = null;
        $this->preysetroph = null;
        $this->preyremark = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DietItemsPeer::DEFAULT_STRING_FORMAT);
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
