<?php


/**
 * Base static class for performing query and update operations on the 'institution_copy' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseInstitutionCopyPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'institution_copy';

    /** the related Propel class for this table */
    const OM_CLASS = 'InstitutionCopy';

    /** the related TableMap class for this table */
    const TM_CLASS = 'InstitutionCopyTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the ID field */
    const ID = 'institution_copy.ID';

    /** the column name for the MainRef field */
    const MAINREF = 'institution_copy.MainRef';

    /** the column name for the Acronym field */
    const ACRONYM = 'institution_copy.Acronym';

    /** the column name for the FullName field */
    const FULLNAME = 'institution_copy.FullName';

    /** the column name for the SubjectArea field */
    const SUBJECTAREA = 'institution_copy.SubjectArea';

    /** the column name for the Type field */
    const TYPE = 'institution_copy.Type';

    /** the column name for the Outreach field */
    const OUTREACH = 'institution_copy.Outreach';

    /** the column name for the Established field */
    const ESTABLISHED = 'institution_copy.Established';

    /** the column name for the EstablishingDate field */
    const ESTABLISHINGDATE = 'institution_copy.EstablishingDate';

    /** the column name for the EntryIntoForceDate field */
    const ENTRYINTOFORCEDATE = 'institution_copy.EntryIntoForceDate';

    /** the column name for the ExpiryDate field */
    const EXPIRYDATE = 'institution_copy.ExpiryDate';

    /** the column name for the LocalityCity field */
    const LOCALITYCITY = 'institution_copy.LocalityCity';

    /** the column name for the LocalityCountry field */
    const LOCALITYCOUNTRY = 'institution_copy.LocalityCountry';

    /** the column name for the Description field */
    const DESCRIPTION = 'institution_copy.Description';

    /** the column name for the Remarks field */
    const REMARKS = 'institution_copy.Remarks';

    /** the column name for the FullText field */
    const FULLTEXT = 'institution_copy.FullText';

    /** the column name for the Address field */
    const ADDRESS = 'institution_copy.Address';

    /** the column name for the Telephone field */
    const TELEPHONE = 'institution_copy.Telephone';

    /** the column name for the Fax field */
    const FAX = 'institution_copy.Fax';

    /** the column name for the EMail field */
    const EMAIL = 'institution_copy.EMail';

    /** the column name for the Internet field */
    const INTERNET = 'institution_copy.Internet';

    /** the column name for the TS field */
    const TS = 'institution_copy.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of InstitutionCopy objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array InstitutionCopy[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. InstitutionCopyPeer::$fieldNames[InstitutionCopyPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Mainref', 'Acronym', 'Fullname', 'Subjectarea', 'Type', 'Outreach', 'Established', 'Establishingdate', 'Entryintoforcedate', 'Expirydate', 'Localitycity', 'Localitycountry', 'Description', 'Remarks', 'Fulltext', 'Address', 'Telephone', 'Fax', 'Email', 'Internet', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'mainref', 'acronym', 'fullname', 'subjectarea', 'type', 'outreach', 'established', 'establishingdate', 'entryintoforcedate', 'expirydate', 'localitycity', 'localitycountry', 'description', 'remarks', 'fulltext', 'address', 'telephone', 'fax', 'email', 'internet', 'ts', ),
        BasePeer::TYPE_COLNAME => array (InstitutionCopyPeer::ID, InstitutionCopyPeer::MAINREF, InstitutionCopyPeer::ACRONYM, InstitutionCopyPeer::FULLNAME, InstitutionCopyPeer::SUBJECTAREA, InstitutionCopyPeer::TYPE, InstitutionCopyPeer::OUTREACH, InstitutionCopyPeer::ESTABLISHED, InstitutionCopyPeer::ESTABLISHINGDATE, InstitutionCopyPeer::ENTRYINTOFORCEDATE, InstitutionCopyPeer::EXPIRYDATE, InstitutionCopyPeer::LOCALITYCITY, InstitutionCopyPeer::LOCALITYCOUNTRY, InstitutionCopyPeer::DESCRIPTION, InstitutionCopyPeer::REMARKS, InstitutionCopyPeer::FULLTEXT, InstitutionCopyPeer::ADDRESS, InstitutionCopyPeer::TELEPHONE, InstitutionCopyPeer::FAX, InstitutionCopyPeer::EMAIL, InstitutionCopyPeer::INTERNET, InstitutionCopyPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'MAINREF', 'ACRONYM', 'FULLNAME', 'SUBJECTAREA', 'TYPE', 'OUTREACH', 'ESTABLISHED', 'ESTABLISHINGDATE', 'ENTRYINTOFORCEDATE', 'EXPIRYDATE', 'LOCALITYCITY', 'LOCALITYCOUNTRY', 'DESCRIPTION', 'REMARKS', 'FULLTEXT', 'ADDRESS', 'TELEPHONE', 'FAX', 'EMAIL', 'INTERNET', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'MainRef', 'Acronym', 'FullName', 'SubjectArea', 'Type', 'Outreach', 'Established', 'EstablishingDate', 'EntryIntoForceDate', 'ExpiryDate', 'LocalityCity', 'LocalityCountry', 'Description', 'Remarks', 'FullText', 'Address', 'Telephone', 'Fax', 'EMail', 'Internet', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. InstitutionCopyPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Mainref' => 1, 'Acronym' => 2, 'Fullname' => 3, 'Subjectarea' => 4, 'Type' => 5, 'Outreach' => 6, 'Established' => 7, 'Establishingdate' => 8, 'Entryintoforcedate' => 9, 'Expirydate' => 10, 'Localitycity' => 11, 'Localitycountry' => 12, 'Description' => 13, 'Remarks' => 14, 'Fulltext' => 15, 'Address' => 16, 'Telephone' => 17, 'Fax' => 18, 'Email' => 19, 'Internet' => 20, 'Ts' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'mainref' => 1, 'acronym' => 2, 'fullname' => 3, 'subjectarea' => 4, 'type' => 5, 'outreach' => 6, 'established' => 7, 'establishingdate' => 8, 'entryintoforcedate' => 9, 'expirydate' => 10, 'localitycity' => 11, 'localitycountry' => 12, 'description' => 13, 'remarks' => 14, 'fulltext' => 15, 'address' => 16, 'telephone' => 17, 'fax' => 18, 'email' => 19, 'internet' => 20, 'ts' => 21, ),
        BasePeer::TYPE_COLNAME => array (InstitutionCopyPeer::ID => 0, InstitutionCopyPeer::MAINREF => 1, InstitutionCopyPeer::ACRONYM => 2, InstitutionCopyPeer::FULLNAME => 3, InstitutionCopyPeer::SUBJECTAREA => 4, InstitutionCopyPeer::TYPE => 5, InstitutionCopyPeer::OUTREACH => 6, InstitutionCopyPeer::ESTABLISHED => 7, InstitutionCopyPeer::ESTABLISHINGDATE => 8, InstitutionCopyPeer::ENTRYINTOFORCEDATE => 9, InstitutionCopyPeer::EXPIRYDATE => 10, InstitutionCopyPeer::LOCALITYCITY => 11, InstitutionCopyPeer::LOCALITYCOUNTRY => 12, InstitutionCopyPeer::DESCRIPTION => 13, InstitutionCopyPeer::REMARKS => 14, InstitutionCopyPeer::FULLTEXT => 15, InstitutionCopyPeer::ADDRESS => 16, InstitutionCopyPeer::TELEPHONE => 17, InstitutionCopyPeer::FAX => 18, InstitutionCopyPeer::EMAIL => 19, InstitutionCopyPeer::INTERNET => 20, InstitutionCopyPeer::TS => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'MAINREF' => 1, 'ACRONYM' => 2, 'FULLNAME' => 3, 'SUBJECTAREA' => 4, 'TYPE' => 5, 'OUTREACH' => 6, 'ESTABLISHED' => 7, 'ESTABLISHINGDATE' => 8, 'ENTRYINTOFORCEDATE' => 9, 'EXPIRYDATE' => 10, 'LOCALITYCITY' => 11, 'LOCALITYCOUNTRY' => 12, 'DESCRIPTION' => 13, 'REMARKS' => 14, 'FULLTEXT' => 15, 'ADDRESS' => 16, 'TELEPHONE' => 17, 'FAX' => 18, 'EMAIL' => 19, 'INTERNET' => 20, 'TS' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'MainRef' => 1, 'Acronym' => 2, 'FullName' => 3, 'SubjectArea' => 4, 'Type' => 5, 'Outreach' => 6, 'Established' => 7, 'EstablishingDate' => 8, 'EntryIntoForceDate' => 9, 'ExpiryDate' => 10, 'LocalityCity' => 11, 'LocalityCountry' => 12, 'Description' => 13, 'Remarks' => 14, 'FullText' => 15, 'Address' => 16, 'Telephone' => 17, 'Fax' => 18, 'EMail' => 19, 'Internet' => 20, 'TS' => 21, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
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
        $toNames = InstitutionCopyPeer::getFieldNames($toType);
        $key = isset(InstitutionCopyPeer::$fieldKeys[$fromType][$name]) ? InstitutionCopyPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(InstitutionCopyPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, InstitutionCopyPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return InstitutionCopyPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. InstitutionCopyPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(InstitutionCopyPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(InstitutionCopyPeer::ID);
            $criteria->addSelectColumn(InstitutionCopyPeer::MAINREF);
            $criteria->addSelectColumn(InstitutionCopyPeer::ACRONYM);
            $criteria->addSelectColumn(InstitutionCopyPeer::FULLNAME);
            $criteria->addSelectColumn(InstitutionCopyPeer::SUBJECTAREA);
            $criteria->addSelectColumn(InstitutionCopyPeer::TYPE);
            $criteria->addSelectColumn(InstitutionCopyPeer::OUTREACH);
            $criteria->addSelectColumn(InstitutionCopyPeer::ESTABLISHED);
            $criteria->addSelectColumn(InstitutionCopyPeer::ESTABLISHINGDATE);
            $criteria->addSelectColumn(InstitutionCopyPeer::ENTRYINTOFORCEDATE);
            $criteria->addSelectColumn(InstitutionCopyPeer::EXPIRYDATE);
            $criteria->addSelectColumn(InstitutionCopyPeer::LOCALITYCITY);
            $criteria->addSelectColumn(InstitutionCopyPeer::LOCALITYCOUNTRY);
            $criteria->addSelectColumn(InstitutionCopyPeer::DESCRIPTION);
            $criteria->addSelectColumn(InstitutionCopyPeer::REMARKS);
            $criteria->addSelectColumn(InstitutionCopyPeer::FULLTEXT);
            $criteria->addSelectColumn(InstitutionCopyPeer::ADDRESS);
            $criteria->addSelectColumn(InstitutionCopyPeer::TELEPHONE);
            $criteria->addSelectColumn(InstitutionCopyPeer::FAX);
            $criteria->addSelectColumn(InstitutionCopyPeer::EMAIL);
            $criteria->addSelectColumn(InstitutionCopyPeer::INTERNET);
            $criteria->addSelectColumn(InstitutionCopyPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.MainRef');
            $criteria->addSelectColumn($alias . '.Acronym');
            $criteria->addSelectColumn($alias . '.FullName');
            $criteria->addSelectColumn($alias . '.SubjectArea');
            $criteria->addSelectColumn($alias . '.Type');
            $criteria->addSelectColumn($alias . '.Outreach');
            $criteria->addSelectColumn($alias . '.Established');
            $criteria->addSelectColumn($alias . '.EstablishingDate');
            $criteria->addSelectColumn($alias . '.EntryIntoForceDate');
            $criteria->addSelectColumn($alias . '.ExpiryDate');
            $criteria->addSelectColumn($alias . '.LocalityCity');
            $criteria->addSelectColumn($alias . '.LocalityCountry');
            $criteria->addSelectColumn($alias . '.Description');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.FullText');
            $criteria->addSelectColumn($alias . '.Address');
            $criteria->addSelectColumn($alias . '.Telephone');
            $criteria->addSelectColumn($alias . '.Fax');
            $criteria->addSelectColumn($alias . '.EMail');
            $criteria->addSelectColumn($alias . '.Internet');
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
        $criteria->setPrimaryTableName(InstitutionCopyPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InstitutionCopyPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(InstitutionCopyPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(InstitutionCopyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return InstitutionCopy
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = InstitutionCopyPeer::doSelect($critcopy, $con);
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
        return InstitutionCopyPeer::populateObjects(InstitutionCopyPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(InstitutionCopyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            InstitutionCopyPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(InstitutionCopyPeer::DATABASE_NAME);

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
     * @param InstitutionCopy $obj A InstitutionCopy object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            InstitutionCopyPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A InstitutionCopy object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof InstitutionCopy) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or InstitutionCopy object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(InstitutionCopyPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return InstitutionCopy Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(InstitutionCopyPeer::$instances[$key])) {
                return InstitutionCopyPeer::$instances[$key];
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
        foreach (InstitutionCopyPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        InstitutionCopyPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to institution_copy
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
        $cls = InstitutionCopyPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = InstitutionCopyPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = InstitutionCopyPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InstitutionCopyPeer::addInstanceToPool($obj, $key);
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
     * @return array (InstitutionCopy object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = InstitutionCopyPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = InstitutionCopyPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + InstitutionCopyPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InstitutionCopyPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            InstitutionCopyPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(InstitutionCopyPeer::DATABASE_NAME)->getTable(InstitutionCopyPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseInstitutionCopyPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseInstitutionCopyPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \InstitutionCopyTableMap());
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
        return InstitutionCopyPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a InstitutionCopy or Criteria object.
     *
     * @param      mixed $values Criteria or InstitutionCopy object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InstitutionCopyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from InstitutionCopy object
        }

        if ($criteria->containsKey(InstitutionCopyPeer::ID) && $criteria->keyContainsValue(InstitutionCopyPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.InstitutionCopyPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(InstitutionCopyPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a InstitutionCopy or Criteria object.
     *
     * @param      mixed $values Criteria or InstitutionCopy object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InstitutionCopyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(InstitutionCopyPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(InstitutionCopyPeer::ID);
            $value = $criteria->remove(InstitutionCopyPeer::ID);
            if ($value) {
                $selectCriteria->add(InstitutionCopyPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(InstitutionCopyPeer::TABLE_NAME);
            }

        } else { // $values is InstitutionCopy object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(InstitutionCopyPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the institution_copy table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InstitutionCopyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(InstitutionCopyPeer::TABLE_NAME, $con, InstitutionCopyPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InstitutionCopyPeer::clearInstancePool();
            InstitutionCopyPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a InstitutionCopy or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or InstitutionCopy object or primary key or array of primary keys
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
            $con = Propel::getConnection(InstitutionCopyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            InstitutionCopyPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof InstitutionCopy) { // it's a model object
            // invalidate the cache for this single object
            InstitutionCopyPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InstitutionCopyPeer::DATABASE_NAME);
            $criteria->add(InstitutionCopyPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                InstitutionCopyPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(InstitutionCopyPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            InstitutionCopyPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given InstitutionCopy object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param InstitutionCopy $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(InstitutionCopyPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(InstitutionCopyPeer::TABLE_NAME);

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

        return BasePeer::doValidate(InstitutionCopyPeer::DATABASE_NAME, InstitutionCopyPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return InstitutionCopy
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = InstitutionCopyPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(InstitutionCopyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(InstitutionCopyPeer::DATABASE_NAME);
        $criteria->add(InstitutionCopyPeer::ID, $pk);

        $v = InstitutionCopyPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return InstitutionCopy[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InstitutionCopyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(InstitutionCopyPeer::DATABASE_NAME);
            $criteria->add(InstitutionCopyPeer::ID, $pks, Criteria::IN);
            $objs = InstitutionCopyPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseInstitutionCopyPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseInstitutionCopyPeer::buildTableMap();

