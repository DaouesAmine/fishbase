<?php


/**
 * Base static class for performing query and update operations on the 'language' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseLanguagePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'language';

    /** the related Propel class for this table */
    const OM_CLASS = 'Language';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LanguageTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 26;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 26;

    /** the column name for the LangCode field */
    const LANGCODE = 'language.LangCode';

    /** the column name for the LanguageName field */
    const LANGUAGENAME = 'language.LanguageName';

    /** the column name for the AlternateName field */
    const ALTERNATENAME = 'language.AlternateName';

    /** the column name for the FirstLanguageSpeakers field */
    const FIRSTLANGUAGESPEAKERS = 'language.FirstLanguageSpeakers';

    /** the column name for the LangGroupCode field */
    const LANGGROUPCODE = 'language.LangGroupCode';

    /** the column name for the LanguageSubgroup field */
    const LANGUAGESUBGROUP = 'language.LanguageSubgroup';

    /** the column name for the C_Code field */
    const C_CODE = 'language.C_Code';

    /** the column name for the LanguageRef field */
    const LANGUAGEREF = 'language.LanguageRef';

    /** the column name for the Remarks field */
    const REMARKS = 'language.Remarks';

    /** the column name for the SecondLanguageSpeakers field */
    const SECONDLANGUAGESPEAKERS = 'language.SecondLanguageSpeakers';

    /** the column name for the URL field */
    const URL = 'language.URL';

    /** the column name for the Used field */
    const USED = 'language.Used';

    /** the column name for the NamesCount field */
    const NAMESCOUNT = 'language.NamesCount';

    /** the column name for the SpeciesCount field */
    const SPECIESCOUNT = 'language.SpeciesCount';

    /** the column name for the FamiliesCount field */
    const FAMILIESCOUNT = 'language.FamiliesCount';

    /** the column name for the NamesCount_SLB field */
    const NAMESCOUNT_SLB = 'language.NamesCount_SLB';

    /** the column name for the SpeciesCount_SLB field */
    const SPECIESCOUNT_SLB = 'language.SpeciesCount_SLB';

    /** the column name for the FamiliesCount_SLB field */
    const FAMILIESCOUNT_SLB = 'language.FamiliesCount_SLB';

    /** the column name for the LastUpdate field */
    const LASTUPDATE = 'language.LastUpdate';

    /** the column name for the Entered field */
    const ENTERED = 'language.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'language.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'language.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'language.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'language.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'language.DateChecked';

    /** the column name for the TS field */
    const TS = 'language.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Language objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Language[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LanguagePeer::$fieldNames[LanguagePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Langcode', 'Languagename', 'Alternatename', 'Firstlanguagespeakers', 'Langgroupcode', 'Languagesubgroup', 'CCode', 'Languageref', 'Remarks', 'Secondlanguagespeakers', 'Url', 'Used', 'Namescount', 'Speciescount', 'Familiescount', 'NamescountSlb', 'SpeciescountSlb', 'FamiliescountSlb', 'Lastupdate', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('langcode', 'languagename', 'alternatename', 'firstlanguagespeakers', 'langgroupcode', 'languagesubgroup', 'cCode', 'languageref', 'remarks', 'secondlanguagespeakers', 'url', 'used', 'namescount', 'speciescount', 'familiescount', 'namescountSlb', 'speciescountSlb', 'familiescountSlb', 'lastupdate', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (LanguagePeer::LANGCODE, LanguagePeer::LANGUAGENAME, LanguagePeer::ALTERNATENAME, LanguagePeer::FIRSTLANGUAGESPEAKERS, LanguagePeer::LANGGROUPCODE, LanguagePeer::LANGUAGESUBGROUP, LanguagePeer::C_CODE, LanguagePeer::LANGUAGEREF, LanguagePeer::REMARKS, LanguagePeer::SECONDLANGUAGESPEAKERS, LanguagePeer::URL, LanguagePeer::USED, LanguagePeer::NAMESCOUNT, LanguagePeer::SPECIESCOUNT, LanguagePeer::FAMILIESCOUNT, LanguagePeer::NAMESCOUNT_SLB, LanguagePeer::SPECIESCOUNT_SLB, LanguagePeer::FAMILIESCOUNT_SLB, LanguagePeer::LASTUPDATE, LanguagePeer::ENTERED, LanguagePeer::DATEENTERED, LanguagePeer::MODIFIED, LanguagePeer::DATEMODIFIED, LanguagePeer::EXPERT, LanguagePeer::DATECHECKED, LanguagePeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LANGCODE', 'LANGUAGENAME', 'ALTERNATENAME', 'FIRSTLANGUAGESPEAKERS', 'LANGGROUPCODE', 'LANGUAGESUBGROUP', 'C_CODE', 'LANGUAGEREF', 'REMARKS', 'SECONDLANGUAGESPEAKERS', 'URL', 'USED', 'NAMESCOUNT', 'SPECIESCOUNT', 'FAMILIESCOUNT', 'NAMESCOUNT_SLB', 'SPECIESCOUNT_SLB', 'FAMILIESCOUNT_SLB', 'LASTUPDATE', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('LangCode', 'LanguageName', 'AlternateName', 'FirstLanguageSpeakers', 'LangGroupCode', 'LanguageSubgroup', 'C_Code', 'LanguageRef', 'Remarks', 'SecondLanguageSpeakers', 'URL', 'Used', 'NamesCount', 'SpeciesCount', 'FamiliesCount', 'NamesCount_SLB', 'SpeciesCount_SLB', 'FamiliesCount_SLB', 'LastUpdate', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LanguagePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Langcode' => 0, 'Languagename' => 1, 'Alternatename' => 2, 'Firstlanguagespeakers' => 3, 'Langgroupcode' => 4, 'Languagesubgroup' => 5, 'CCode' => 6, 'Languageref' => 7, 'Remarks' => 8, 'Secondlanguagespeakers' => 9, 'Url' => 10, 'Used' => 11, 'Namescount' => 12, 'Speciescount' => 13, 'Familiescount' => 14, 'NamescountSlb' => 15, 'SpeciescountSlb' => 16, 'FamiliescountSlb' => 17, 'Lastupdate' => 18, 'Entered' => 19, 'Dateentered' => 20, 'Modified' => 21, 'Datemodified' => 22, 'Expert' => 23, 'Datechecked' => 24, 'Ts' => 25, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('langcode' => 0, 'languagename' => 1, 'alternatename' => 2, 'firstlanguagespeakers' => 3, 'langgroupcode' => 4, 'languagesubgroup' => 5, 'cCode' => 6, 'languageref' => 7, 'remarks' => 8, 'secondlanguagespeakers' => 9, 'url' => 10, 'used' => 11, 'namescount' => 12, 'speciescount' => 13, 'familiescount' => 14, 'namescountSlb' => 15, 'speciescountSlb' => 16, 'familiescountSlb' => 17, 'lastupdate' => 18, 'entered' => 19, 'dateentered' => 20, 'modified' => 21, 'datemodified' => 22, 'expert' => 23, 'datechecked' => 24, 'ts' => 25, ),
        BasePeer::TYPE_COLNAME => array (LanguagePeer::LANGCODE => 0, LanguagePeer::LANGUAGENAME => 1, LanguagePeer::ALTERNATENAME => 2, LanguagePeer::FIRSTLANGUAGESPEAKERS => 3, LanguagePeer::LANGGROUPCODE => 4, LanguagePeer::LANGUAGESUBGROUP => 5, LanguagePeer::C_CODE => 6, LanguagePeer::LANGUAGEREF => 7, LanguagePeer::REMARKS => 8, LanguagePeer::SECONDLANGUAGESPEAKERS => 9, LanguagePeer::URL => 10, LanguagePeer::USED => 11, LanguagePeer::NAMESCOUNT => 12, LanguagePeer::SPECIESCOUNT => 13, LanguagePeer::FAMILIESCOUNT => 14, LanguagePeer::NAMESCOUNT_SLB => 15, LanguagePeer::SPECIESCOUNT_SLB => 16, LanguagePeer::FAMILIESCOUNT_SLB => 17, LanguagePeer::LASTUPDATE => 18, LanguagePeer::ENTERED => 19, LanguagePeer::DATEENTERED => 20, LanguagePeer::MODIFIED => 21, LanguagePeer::DATEMODIFIED => 22, LanguagePeer::EXPERT => 23, LanguagePeer::DATECHECKED => 24, LanguagePeer::TS => 25, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LANGCODE' => 0, 'LANGUAGENAME' => 1, 'ALTERNATENAME' => 2, 'FIRSTLANGUAGESPEAKERS' => 3, 'LANGGROUPCODE' => 4, 'LANGUAGESUBGROUP' => 5, 'C_CODE' => 6, 'LANGUAGEREF' => 7, 'REMARKS' => 8, 'SECONDLANGUAGESPEAKERS' => 9, 'URL' => 10, 'USED' => 11, 'NAMESCOUNT' => 12, 'SPECIESCOUNT' => 13, 'FAMILIESCOUNT' => 14, 'NAMESCOUNT_SLB' => 15, 'SPECIESCOUNT_SLB' => 16, 'FAMILIESCOUNT_SLB' => 17, 'LASTUPDATE' => 18, 'ENTERED' => 19, 'DATEENTERED' => 20, 'MODIFIED' => 21, 'DATEMODIFIED' => 22, 'EXPERT' => 23, 'DATECHECKED' => 24, 'TS' => 25, ),
        BasePeer::TYPE_FIELDNAME => array ('LangCode' => 0, 'LanguageName' => 1, 'AlternateName' => 2, 'FirstLanguageSpeakers' => 3, 'LangGroupCode' => 4, 'LanguageSubgroup' => 5, 'C_Code' => 6, 'LanguageRef' => 7, 'Remarks' => 8, 'SecondLanguageSpeakers' => 9, 'URL' => 10, 'Used' => 11, 'NamesCount' => 12, 'SpeciesCount' => 13, 'FamiliesCount' => 14, 'NamesCount_SLB' => 15, 'SpeciesCount_SLB' => 16, 'FamiliesCount_SLB' => 17, 'LastUpdate' => 18, 'Entered' => 19, 'DateEntered' => 20, 'Modified' => 21, 'DateModified' => 22, 'Expert' => 23, 'DateChecked' => 24, 'TS' => 25, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
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
        $toNames = LanguagePeer::getFieldNames($toType);
        $key = isset(LanguagePeer::$fieldKeys[$fromType][$name]) ? LanguagePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LanguagePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, LanguagePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LanguagePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. LanguagePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LanguagePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(LanguagePeer::LANGCODE);
            $criteria->addSelectColumn(LanguagePeer::LANGUAGENAME);
            $criteria->addSelectColumn(LanguagePeer::ALTERNATENAME);
            $criteria->addSelectColumn(LanguagePeer::FIRSTLANGUAGESPEAKERS);
            $criteria->addSelectColumn(LanguagePeer::LANGGROUPCODE);
            $criteria->addSelectColumn(LanguagePeer::LANGUAGESUBGROUP);
            $criteria->addSelectColumn(LanguagePeer::C_CODE);
            $criteria->addSelectColumn(LanguagePeer::LANGUAGEREF);
            $criteria->addSelectColumn(LanguagePeer::REMARKS);
            $criteria->addSelectColumn(LanguagePeer::SECONDLANGUAGESPEAKERS);
            $criteria->addSelectColumn(LanguagePeer::URL);
            $criteria->addSelectColumn(LanguagePeer::USED);
            $criteria->addSelectColumn(LanguagePeer::NAMESCOUNT);
            $criteria->addSelectColumn(LanguagePeer::SPECIESCOUNT);
            $criteria->addSelectColumn(LanguagePeer::FAMILIESCOUNT);
            $criteria->addSelectColumn(LanguagePeer::NAMESCOUNT_SLB);
            $criteria->addSelectColumn(LanguagePeer::SPECIESCOUNT_SLB);
            $criteria->addSelectColumn(LanguagePeer::FAMILIESCOUNT_SLB);
            $criteria->addSelectColumn(LanguagePeer::LASTUPDATE);
            $criteria->addSelectColumn(LanguagePeer::ENTERED);
            $criteria->addSelectColumn(LanguagePeer::DATEENTERED);
            $criteria->addSelectColumn(LanguagePeer::MODIFIED);
            $criteria->addSelectColumn(LanguagePeer::DATEMODIFIED);
            $criteria->addSelectColumn(LanguagePeer::EXPERT);
            $criteria->addSelectColumn(LanguagePeer::DATECHECKED);
            $criteria->addSelectColumn(LanguagePeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.LangCode');
            $criteria->addSelectColumn($alias . '.LanguageName');
            $criteria->addSelectColumn($alias . '.AlternateName');
            $criteria->addSelectColumn($alias . '.FirstLanguageSpeakers');
            $criteria->addSelectColumn($alias . '.LangGroupCode');
            $criteria->addSelectColumn($alias . '.LanguageSubgroup');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.LanguageRef');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.SecondLanguageSpeakers');
            $criteria->addSelectColumn($alias . '.URL');
            $criteria->addSelectColumn($alias . '.Used');
            $criteria->addSelectColumn($alias . '.NamesCount');
            $criteria->addSelectColumn($alias . '.SpeciesCount');
            $criteria->addSelectColumn($alias . '.FamiliesCount');
            $criteria->addSelectColumn($alias . '.NamesCount_SLB');
            $criteria->addSelectColumn($alias . '.SpeciesCount_SLB');
            $criteria->addSelectColumn($alias . '.FamiliesCount_SLB');
            $criteria->addSelectColumn($alias . '.LastUpdate');
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
        $criteria->setPrimaryTableName(LanguagePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LanguagePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LanguagePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Language
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LanguagePeer::doSelect($critcopy, $con);
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
        return LanguagePeer::populateObjects(LanguagePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LanguagePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LanguagePeer::DATABASE_NAME);

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
     * @param Language $obj A Language object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getLanguagename();
            } // if key === null
            LanguagePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Language object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Language) {
                $key = (string) $value->getLanguagename();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Language object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LanguagePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Language Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LanguagePeer::$instances[$key])) {
                return LanguagePeer::$instances[$key];
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
        foreach (LanguagePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LanguagePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to language
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
        if ($row[$startcol + 1] === null) {
            return null;
        }

        return (string) $row[$startcol + 1];
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

        return (string) $row[$startcol + 1];
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
        $cls = LanguagePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LanguagePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LanguagePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LanguagePeer::addInstanceToPool($obj, $key);
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
     * @return array (Language object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LanguagePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LanguagePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LanguagePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LanguagePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LanguagePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(LanguagePeer::DATABASE_NAME)->getTable(LanguagePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLanguagePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLanguagePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LanguageTableMap());
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
        return LanguagePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Language or Criteria object.
     *
     * @param      mixed $values Criteria or Language object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Language object
        }


        // Set the correct dbName
        $criteria->setDbName(LanguagePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Language or Criteria object.
     *
     * @param      mixed $values Criteria or Language object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LanguagePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LanguagePeer::LANGUAGENAME);
            $value = $criteria->remove(LanguagePeer::LANGUAGENAME);
            if ($value) {
                $selectCriteria->add(LanguagePeer::LANGUAGENAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LanguagePeer::TABLE_NAME);
            }

        } else { // $values is Language object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LanguagePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the language table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(LanguagePeer::TABLE_NAME, $con, LanguagePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LanguagePeer::clearInstancePool();
            LanguagePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Language or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Language object or primary key or array of primary keys
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
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            LanguagePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Language) { // it's a model object
            // invalidate the cache for this single object
            LanguagePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LanguagePeer::DATABASE_NAME);
            $criteria->add(LanguagePeer::LANGUAGENAME, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                LanguagePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(LanguagePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LanguagePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Language object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Language $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LanguagePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LanguagePeer::TABLE_NAME);

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

        return BasePeer::doValidate(LanguagePeer::DATABASE_NAME, LanguagePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Language
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = LanguagePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(LanguagePeer::DATABASE_NAME);
        $criteria->add(LanguagePeer::LANGUAGENAME, $pk);

        $v = LanguagePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Language[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LanguagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(LanguagePeer::DATABASE_NAME);
            $criteria->add(LanguagePeer::LANGUAGENAME, $pks, Criteria::IN);
            $objs = LanguagePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseLanguagePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLanguagePeer::buildTableMap();

