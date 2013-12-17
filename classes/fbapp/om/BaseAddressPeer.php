<?php


/**
 * Base static class for performing query and update operations on the 'address' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseAddressPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'address';

    /** the related Propel class for this table */
    const OM_CLASS = 'Address';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AddressTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the ID field */
    const ID = 'address.ID';

    /** the column name for the Address field */
    const ADDRESS = 'address.Address';

    /** the column name for the Name field */
    const NAME = 'address.Name';

    /** the column name for the Country field */
    const COUNTRY = 'address.Country';

    /** the column name for the Telephone field */
    const TELEPHONE = 'address.Telephone';

    /** the column name for the Fax field */
    const FAX = 'address.Fax';

    /** the column name for the EMail field */
    const EMAIL = 'address.EMail';

    /** the column name for the Internet field */
    const INTERNET = 'address.Internet';

    /** the column name for the Address1 field */
    const ADDRESS1 = 'address.Address1';

    /** the column name for the Address2 field */
    const ADDRESS2 = 'address.Address2';

    /** the column name for the City field */
    const CITY = 'address.City';

    /** the column name for the Province field */
    const PROVINCE = 'address.Province';

    /** the column name for the Email1 field */
    const EMAIL1 = 'address.Email1';

    /** the column name for the Email2 field */
    const EMAIL2 = 'address.Email2';

    /** the column name for the Internet1 field */
    const INTERNET1 = 'address.Internet1';

    /** the column name for the Internet2 field */
    const INTERNET2 = 'address.Internet2';

    /** the column name for the TS field */
    const TS = 'address.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Address objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Address[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AddressPeer::$fieldNames[AddressPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Address', 'Name', 'Country', 'Telephone', 'Fax', 'Email', 'Internet', 'Address1', 'Address2', 'City', 'Province', 'Email1', 'Email2', 'Internet1', 'Internet2', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'address', 'name', 'country', 'telephone', 'fax', 'email', 'internet', 'address1', 'address2', 'city', 'province', 'email1', 'email2', 'internet1', 'internet2', 'ts', ),
        BasePeer::TYPE_COLNAME => array (AddressPeer::ID, AddressPeer::ADDRESS, AddressPeer::NAME, AddressPeer::COUNTRY, AddressPeer::TELEPHONE, AddressPeer::FAX, AddressPeer::EMAIL, AddressPeer::INTERNET, AddressPeer::ADDRESS1, AddressPeer::ADDRESS2, AddressPeer::CITY, AddressPeer::PROVINCE, AddressPeer::EMAIL1, AddressPeer::EMAIL2, AddressPeer::INTERNET1, AddressPeer::INTERNET2, AddressPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ADDRESS', 'NAME', 'COUNTRY', 'TELEPHONE', 'FAX', 'EMAIL', 'INTERNET', 'ADDRESS1', 'ADDRESS2', 'CITY', 'PROVINCE', 'EMAIL1', 'EMAIL2', 'INTERNET1', 'INTERNET2', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'Address', 'Name', 'Country', 'Telephone', 'Fax', 'EMail', 'Internet', 'Address1', 'Address2', 'City', 'Province', 'Email1', 'Email2', 'Internet1', 'Internet2', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AddressPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Address' => 1, 'Name' => 2, 'Country' => 3, 'Telephone' => 4, 'Fax' => 5, 'Email' => 6, 'Internet' => 7, 'Address1' => 8, 'Address2' => 9, 'City' => 10, 'Province' => 11, 'Email1' => 12, 'Email2' => 13, 'Internet1' => 14, 'Internet2' => 15, 'Ts' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'address' => 1, 'name' => 2, 'country' => 3, 'telephone' => 4, 'fax' => 5, 'email' => 6, 'internet' => 7, 'address1' => 8, 'address2' => 9, 'city' => 10, 'province' => 11, 'email1' => 12, 'email2' => 13, 'internet1' => 14, 'internet2' => 15, 'ts' => 16, ),
        BasePeer::TYPE_COLNAME => array (AddressPeer::ID => 0, AddressPeer::ADDRESS => 1, AddressPeer::NAME => 2, AddressPeer::COUNTRY => 3, AddressPeer::TELEPHONE => 4, AddressPeer::FAX => 5, AddressPeer::EMAIL => 6, AddressPeer::INTERNET => 7, AddressPeer::ADDRESS1 => 8, AddressPeer::ADDRESS2 => 9, AddressPeer::CITY => 10, AddressPeer::PROVINCE => 11, AddressPeer::EMAIL1 => 12, AddressPeer::EMAIL2 => 13, AddressPeer::INTERNET1 => 14, AddressPeer::INTERNET2 => 15, AddressPeer::TS => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ADDRESS' => 1, 'NAME' => 2, 'COUNTRY' => 3, 'TELEPHONE' => 4, 'FAX' => 5, 'EMAIL' => 6, 'INTERNET' => 7, 'ADDRESS1' => 8, 'ADDRESS2' => 9, 'CITY' => 10, 'PROVINCE' => 11, 'EMAIL1' => 12, 'EMAIL2' => 13, 'INTERNET1' => 14, 'INTERNET2' => 15, 'TS' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'Address' => 1, 'Name' => 2, 'Country' => 3, 'Telephone' => 4, 'Fax' => 5, 'EMail' => 6, 'Internet' => 7, 'Address1' => 8, 'Address2' => 9, 'City' => 10, 'Province' => 11, 'Email1' => 12, 'Email2' => 13, 'Internet1' => 14, 'Internet2' => 15, 'TS' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $toNames = AddressPeer::getFieldNames($toType);
        $key = isset(AddressPeer::$fieldKeys[$fromType][$name]) ? AddressPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AddressPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AddressPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AddressPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. AddressPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AddressPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AddressPeer::ID);
            $criteria->addSelectColumn(AddressPeer::ADDRESS);
            $criteria->addSelectColumn(AddressPeer::NAME);
            $criteria->addSelectColumn(AddressPeer::COUNTRY);
            $criteria->addSelectColumn(AddressPeer::TELEPHONE);
            $criteria->addSelectColumn(AddressPeer::FAX);
            $criteria->addSelectColumn(AddressPeer::EMAIL);
            $criteria->addSelectColumn(AddressPeer::INTERNET);
            $criteria->addSelectColumn(AddressPeer::ADDRESS1);
            $criteria->addSelectColumn(AddressPeer::ADDRESS2);
            $criteria->addSelectColumn(AddressPeer::CITY);
            $criteria->addSelectColumn(AddressPeer::PROVINCE);
            $criteria->addSelectColumn(AddressPeer::EMAIL1);
            $criteria->addSelectColumn(AddressPeer::EMAIL2);
            $criteria->addSelectColumn(AddressPeer::INTERNET1);
            $criteria->addSelectColumn(AddressPeer::INTERNET2);
            $criteria->addSelectColumn(AddressPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.Address');
            $criteria->addSelectColumn($alias . '.Name');
            $criteria->addSelectColumn($alias . '.Country');
            $criteria->addSelectColumn($alias . '.Telephone');
            $criteria->addSelectColumn($alias . '.Fax');
            $criteria->addSelectColumn($alias . '.EMail');
            $criteria->addSelectColumn($alias . '.Internet');
            $criteria->addSelectColumn($alias . '.Address1');
            $criteria->addSelectColumn($alias . '.Address2');
            $criteria->addSelectColumn($alias . '.City');
            $criteria->addSelectColumn($alias . '.Province');
            $criteria->addSelectColumn($alias . '.Email1');
            $criteria->addSelectColumn($alias . '.Email2');
            $criteria->addSelectColumn($alias . '.Internet1');
            $criteria->addSelectColumn($alias . '.Internet2');
            $criteria->addSelectColumn($alias . '.TS');
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
        $criteria->setPrimaryTableName(AddressPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AddressPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AddressPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Address
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AddressPeer::doSelect($critcopy, $con);
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
        return AddressPeer::populateObjects(AddressPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AddressPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AddressPeer::DATABASE_NAME);

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
     * @param Address $obj A Address object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            AddressPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Address object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Address) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Address object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AddressPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Address Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AddressPeer::$instances[$key])) {
                return AddressPeer::$instances[$key];
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
      if ($and_clear_all_references) {
        foreach (AddressPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AddressPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to address
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
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
        $cls = AddressPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AddressPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AddressPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AddressPeer::addInstanceToPool($obj, $key);
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
     * @return array (Address object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AddressPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AddressPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AddressPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AddressPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AddressPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(AddressPeer::DATABASE_NAME)->getTable(AddressPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAddressPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAddressPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AddressTableMap());
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
        return AddressPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Address or Criteria object.
     *
     * @param      mixed $values Criteria or Address object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Address object
        }


        // Set the correct dbName
        $criteria->setDbName(AddressPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Address or Criteria object.
     *
     * @param      mixed $values Criteria or Address object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AddressPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AddressPeer::ID);
            $value = $criteria->remove(AddressPeer::ID);
            if ($value) {
                $selectCriteria->add(AddressPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AddressPeer::TABLE_NAME);
            }

        } else { // $values is Address object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AddressPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the address table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AddressPeer::TABLE_NAME, $con, AddressPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AddressPeer::clearInstancePool();
            AddressPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Address or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Address object or primary key or array of primary keys
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
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AddressPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Address) { // it's a model object
            // invalidate the cache for this single object
            AddressPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AddressPeer::DATABASE_NAME);
            $criteria->add(AddressPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AddressPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AddressPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AddressPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Address object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Address $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AddressPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AddressPeer::TABLE_NAME);

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

        return BasePeer::doValidate(AddressPeer::DATABASE_NAME, AddressPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Address
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AddressPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AddressPeer::DATABASE_NAME);
        $criteria->add(AddressPeer::ID, $pk);

        $v = AddressPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Address[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AddressPeer::DATABASE_NAME);
            $criteria->add(AddressPeer::ID, $pks, Criteria::IN);
            $objs = AddressPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAddressPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAddressPeer::buildTableMap();

