<?php


/**
 * Base static class for performing query and update operations on the 'sponsors' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSponsorsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'sponsors';

    /** the related Propel class for this table */
    const OM_CLASS = 'Sponsors';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SponsorsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the SponsorshipID field */
    const SPONSORSHIPID = 'sponsors.SponsorshipID';

    /** the column name for the SponsorFor field */
    const SPONSORFOR = 'sponsors.SponsorFor';

    /** the column name for the Sponsor field */
    const SPONSOR = 'sponsors.Sponsor';

    /** the column name for the SponsorText field */
    const SPONSORTEXT = 'sponsors.SponsorText';

    /** the column name for the PartnerType field */
    const PARTNERTYPE = 'sponsors.PartnerType';

    /** the column name for the ContactPerson field */
    const CONTACTPERSON = 'sponsors.ContactPerson';

    /** the column name for the Address field */
    const ADDRESS = 'sponsors.Address';

    /** the column name for the Email field */
    const EMAIL = 'sponsors.Email';

    /** the column name for the URL field */
    const URL = 'sponsors.URL';

    /** the column name for the Logo field */
    const LOGO = 'sponsors.Logo';

    /** the column name for the StartRent field */
    const STARTRENT = 'sponsors.StartRent';

    /** the column name for the EndRent field */
    const ENDRENT = 'sponsors.EndRent';

    /** the column name for the Cost field */
    const COST = 'sponsors.Cost';

    /** the column name for the Received field */
    const RECEIVED = 'sponsors.Received';

    /** the column name for the Remarks field */
    const REMARKS = 'sponsors.Remarks';

    /** the column name for the SpecCode field */
    const SPECCODE = 'sponsors.SpecCode';

    /** the column name for the Entered field */
    const ENTERED = 'sponsors.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'sponsors.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'sponsors.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'sponsors.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'sponsors.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'sponsors.DateChecked';

    /** the column name for the TS field */
    const TS = 'sponsors.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Sponsors objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Sponsors[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SponsorsPeer::$fieldNames[SponsorsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Sponsorshipid', 'Sponsorfor', 'Sponsor', 'Sponsortext', 'Partnertype', 'Contactperson', 'Address', 'Email', 'Url', 'Logo', 'Startrent', 'Endrent', 'Cost', 'Received', 'Remarks', 'Speccode', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('sponsorshipid', 'sponsorfor', 'sponsor', 'sponsortext', 'partnertype', 'contactperson', 'address', 'email', 'url', 'logo', 'startrent', 'endrent', 'cost', 'received', 'remarks', 'speccode', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (SponsorsPeer::SPONSORSHIPID, SponsorsPeer::SPONSORFOR, SponsorsPeer::SPONSOR, SponsorsPeer::SPONSORTEXT, SponsorsPeer::PARTNERTYPE, SponsorsPeer::CONTACTPERSON, SponsorsPeer::ADDRESS, SponsorsPeer::EMAIL, SponsorsPeer::URL, SponsorsPeer::LOGO, SponsorsPeer::STARTRENT, SponsorsPeer::ENDRENT, SponsorsPeer::COST, SponsorsPeer::RECEIVED, SponsorsPeer::REMARKS, SponsorsPeer::SPECCODE, SponsorsPeer::ENTERED, SponsorsPeer::DATEENTERED, SponsorsPeer::MODIFIED, SponsorsPeer::DATEMODIFIED, SponsorsPeer::EXPERT, SponsorsPeer::DATECHECKED, SponsorsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPONSORSHIPID', 'SPONSORFOR', 'SPONSOR', 'SPONSORTEXT', 'PARTNERTYPE', 'CONTACTPERSON', 'ADDRESS', 'EMAIL', 'URL', 'LOGO', 'STARTRENT', 'ENDRENT', 'COST', 'RECEIVED', 'REMARKS', 'SPECCODE', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('SponsorshipID', 'SponsorFor', 'Sponsor', 'SponsorText', 'PartnerType', 'ContactPerson', 'Address', 'Email', 'URL', 'Logo', 'StartRent', 'EndRent', 'Cost', 'Received', 'Remarks', 'SpecCode', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SponsorsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Sponsorshipid' => 0, 'Sponsorfor' => 1, 'Sponsor' => 2, 'Sponsortext' => 3, 'Partnertype' => 4, 'Contactperson' => 5, 'Address' => 6, 'Email' => 7, 'Url' => 8, 'Logo' => 9, 'Startrent' => 10, 'Endrent' => 11, 'Cost' => 12, 'Received' => 13, 'Remarks' => 14, 'Speccode' => 15, 'Entered' => 16, 'Dateentered' => 17, 'Modified' => 18, 'Datemodified' => 19, 'Expert' => 20, 'Datechecked' => 21, 'Ts' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('sponsorshipid' => 0, 'sponsorfor' => 1, 'sponsor' => 2, 'sponsortext' => 3, 'partnertype' => 4, 'contactperson' => 5, 'address' => 6, 'email' => 7, 'url' => 8, 'logo' => 9, 'startrent' => 10, 'endrent' => 11, 'cost' => 12, 'received' => 13, 'remarks' => 14, 'speccode' => 15, 'entered' => 16, 'dateentered' => 17, 'modified' => 18, 'datemodified' => 19, 'expert' => 20, 'datechecked' => 21, 'ts' => 22, ),
        BasePeer::TYPE_COLNAME => array (SponsorsPeer::SPONSORSHIPID => 0, SponsorsPeer::SPONSORFOR => 1, SponsorsPeer::SPONSOR => 2, SponsorsPeer::SPONSORTEXT => 3, SponsorsPeer::PARTNERTYPE => 4, SponsorsPeer::CONTACTPERSON => 5, SponsorsPeer::ADDRESS => 6, SponsorsPeer::EMAIL => 7, SponsorsPeer::URL => 8, SponsorsPeer::LOGO => 9, SponsorsPeer::STARTRENT => 10, SponsorsPeer::ENDRENT => 11, SponsorsPeer::COST => 12, SponsorsPeer::RECEIVED => 13, SponsorsPeer::REMARKS => 14, SponsorsPeer::SPECCODE => 15, SponsorsPeer::ENTERED => 16, SponsorsPeer::DATEENTERED => 17, SponsorsPeer::MODIFIED => 18, SponsorsPeer::DATEMODIFIED => 19, SponsorsPeer::EXPERT => 20, SponsorsPeer::DATECHECKED => 21, SponsorsPeer::TS => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPONSORSHIPID' => 0, 'SPONSORFOR' => 1, 'SPONSOR' => 2, 'SPONSORTEXT' => 3, 'PARTNERTYPE' => 4, 'CONTACTPERSON' => 5, 'ADDRESS' => 6, 'EMAIL' => 7, 'URL' => 8, 'LOGO' => 9, 'STARTRENT' => 10, 'ENDRENT' => 11, 'COST' => 12, 'RECEIVED' => 13, 'REMARKS' => 14, 'SPECCODE' => 15, 'ENTERED' => 16, 'DATEENTERED' => 17, 'MODIFIED' => 18, 'DATEMODIFIED' => 19, 'EXPERT' => 20, 'DATECHECKED' => 21, 'TS' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('SponsorshipID' => 0, 'SponsorFor' => 1, 'Sponsor' => 2, 'SponsorText' => 3, 'PartnerType' => 4, 'ContactPerson' => 5, 'Address' => 6, 'Email' => 7, 'URL' => 8, 'Logo' => 9, 'StartRent' => 10, 'EndRent' => 11, 'Cost' => 12, 'Received' => 13, 'Remarks' => 14, 'SpecCode' => 15, 'Entered' => 16, 'DateEntered' => 17, 'Modified' => 18, 'DateModified' => 19, 'Expert' => 20, 'DateChecked' => 21, 'TS' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
        $toNames = SponsorsPeer::getFieldNames($toType);
        $key = isset(SponsorsPeer::$fieldKeys[$fromType][$name]) ? SponsorsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SponsorsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SponsorsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SponsorsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SponsorsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SponsorsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SponsorsPeer::SPONSORSHIPID);
            $criteria->addSelectColumn(SponsorsPeer::SPONSORFOR);
            $criteria->addSelectColumn(SponsorsPeer::SPONSOR);
            $criteria->addSelectColumn(SponsorsPeer::SPONSORTEXT);
            $criteria->addSelectColumn(SponsorsPeer::PARTNERTYPE);
            $criteria->addSelectColumn(SponsorsPeer::CONTACTPERSON);
            $criteria->addSelectColumn(SponsorsPeer::ADDRESS);
            $criteria->addSelectColumn(SponsorsPeer::EMAIL);
            $criteria->addSelectColumn(SponsorsPeer::URL);
            $criteria->addSelectColumn(SponsorsPeer::LOGO);
            $criteria->addSelectColumn(SponsorsPeer::STARTRENT);
            $criteria->addSelectColumn(SponsorsPeer::ENDRENT);
            $criteria->addSelectColumn(SponsorsPeer::COST);
            $criteria->addSelectColumn(SponsorsPeer::RECEIVED);
            $criteria->addSelectColumn(SponsorsPeer::REMARKS);
            $criteria->addSelectColumn(SponsorsPeer::SPECCODE);
            $criteria->addSelectColumn(SponsorsPeer::ENTERED);
            $criteria->addSelectColumn(SponsorsPeer::DATEENTERED);
            $criteria->addSelectColumn(SponsorsPeer::MODIFIED);
            $criteria->addSelectColumn(SponsorsPeer::DATEMODIFIED);
            $criteria->addSelectColumn(SponsorsPeer::EXPERT);
            $criteria->addSelectColumn(SponsorsPeer::DATECHECKED);
            $criteria->addSelectColumn(SponsorsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.SponsorshipID');
            $criteria->addSelectColumn($alias . '.SponsorFor');
            $criteria->addSelectColumn($alias . '.Sponsor');
            $criteria->addSelectColumn($alias . '.SponsorText');
            $criteria->addSelectColumn($alias . '.PartnerType');
            $criteria->addSelectColumn($alias . '.ContactPerson');
            $criteria->addSelectColumn($alias . '.Address');
            $criteria->addSelectColumn($alias . '.Email');
            $criteria->addSelectColumn($alias . '.URL');
            $criteria->addSelectColumn($alias . '.Logo');
            $criteria->addSelectColumn($alias . '.StartRent');
            $criteria->addSelectColumn($alias . '.EndRent');
            $criteria->addSelectColumn($alias . '.Cost');
            $criteria->addSelectColumn($alias . '.Received');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
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
        $criteria->setPrimaryTableName(SponsorsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SponsorsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SponsorsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SponsorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Sponsors
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SponsorsPeer::doSelect($critcopy, $con);
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
        return SponsorsPeer::populateObjects(SponsorsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SponsorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SponsorsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SponsorsPeer::DATABASE_NAME);

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
     * @param Sponsors $obj A Sponsors object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSponsor(), (string) $obj->getSpeccode()));
            } // if key === null
            SponsorsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Sponsors object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Sponsors) {
                $key = serialize(array((string) $value->getSponsor(), (string) $value->getSpeccode()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Sponsors object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SponsorsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Sponsors Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SponsorsPeer::$instances[$key])) {
                return SponsorsPeer::$instances[$key];
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
        foreach (SponsorsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SponsorsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to sponsors
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
        if ($row[$startcol + 2] === null && $row[$startcol + 15] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 15]));
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

        return array((string) $row[$startcol + 2], (int) $row[$startcol + 15]);
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
        $cls = SponsorsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SponsorsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SponsorsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SponsorsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Sponsors object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SponsorsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SponsorsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SponsorsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SponsorsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SponsorsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SponsorsPeer::DATABASE_NAME)->getTable(SponsorsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSponsorsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSponsorsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SponsorsTableMap());
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
        return SponsorsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Sponsors or Criteria object.
     *
     * @param      mixed $values Criteria or Sponsors object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SponsorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Sponsors object
        }


        // Set the correct dbName
        $criteria->setDbName(SponsorsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Sponsors or Criteria object.
     *
     * @param      mixed $values Criteria or Sponsors object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SponsorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SponsorsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SponsorsPeer::SPONSOR);
            $value = $criteria->remove(SponsorsPeer::SPONSOR);
            if ($value) {
                $selectCriteria->add(SponsorsPeer::SPONSOR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SponsorsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SponsorsPeer::SPECCODE);
            $value = $criteria->remove(SponsorsPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(SponsorsPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SponsorsPeer::TABLE_NAME);
            }

        } else { // $values is Sponsors object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SponsorsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the sponsors table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SponsorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SponsorsPeer::TABLE_NAME, $con, SponsorsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SponsorsPeer::clearInstancePool();
            SponsorsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Sponsors or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Sponsors object or primary key or array of primary keys
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
            $con = Propel::getConnection(SponsorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SponsorsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Sponsors) { // it's a model object
            // invalidate the cache for this single object
            SponsorsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SponsorsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SponsorsPeer::SPONSOR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SponsorsPeer::SPECCODE, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                SponsorsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SponsorsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SponsorsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Sponsors object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Sponsors $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SponsorsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SponsorsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SponsorsPeer::DATABASE_NAME, SponsorsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $sponsor
     * @param   int $speccode
     * @param      PropelPDO $con
     * @return Sponsors
     */
    public static function retrieveByPK($sponsor, $speccode, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $sponsor, (string) $speccode));
         if (null !== ($obj = SponsorsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SponsorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(SponsorsPeer::DATABASE_NAME);
        $criteria->add(SponsorsPeer::SPONSOR, $sponsor);
        $criteria->add(SponsorsPeer::SPECCODE, $speccode);
        $v = SponsorsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseSponsorsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSponsorsPeer::buildTableMap();

