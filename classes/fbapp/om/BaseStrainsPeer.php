<?php


/**
 * Base static class for performing query and update operations on the 'strains' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseStrainsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'strains';

    /** the related Propel class for this table */
    const OM_CLASS = 'Strains';

    /** the related TableMap class for this table */
    const TM_CLASS = 'StrainsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 28;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 28;

    /** the column name for the StockCode field */
    const STOCKCODE = 'strains.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'strains.SpecCode';

    /** the column name for the StrainsRefNo field */
    const STRAINSREFNO = 'strains.StrainsRefNo';

    /** the column name for the C_Code field */
    const C_CODE = 'strains.C_Code';

    /** the column name for the StrainCode field */
    const STRAINCODE = 'strains.StrainCode';

    /** the column name for the Trait field */
    const TRAIT = 'strains.Trait';

    /** the column name for the Pic field */
    const PIC = 'strains.Pic';

    /** the column name for the BreedingStrategy field */
    const BREEDINGSTRATEGY = 'strains.BreedingStrategy';

    /** the column name for the Viability field */
    const VIABILITY = 'strains.Viability';

    /** the column name for the SizeofFounding field */
    const SIZEOFFOUNDING = 'strains.SizeofFounding';

    /** the column name for the SizeofFoundingF field */
    const SIZEOFFOUNDINGF = 'strains.SizeofFoundingF';

    /** the column name for the SizeofFoundingM field */
    const SIZEOFFOUNDINGM = 'strains.SizeofFoundingM';

    /** the column name for the NumberofBroodstock field */
    const NUMBEROFBROODSTOCK = 'strains.NumberofBroodstock';

    /** the column name for the BreedingYear field */
    const BREEDINGYEAR = 'strains.BreedingYear';

    /** the column name for the Source field */
    const SOURCE = 'strains.Source';

    /** the column name for the SourceII field */
    const SOURCEII = 'strains.SourceII';

    /** the column name for the StrainCodeFounder field */
    const STRAINCODEFOUNDER = 'strains.StrainCodeFounder';

    /** the column name for the ArrivalofFounder field */
    const ARRIVALOFFOUNDER = 'strains.ArrivalofFounder';

    /** the column name for the Availability field */
    const AVAILABILITY = 'strains.Availability';

    /** the column name for the RemarksRef field */
    const REMARKSREF = 'strains.RemarksRef';

    /** the column name for the Entered field */
    const ENTERED = 'strains.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'strains.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'strains.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'strains.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'strains.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'strains.DateChecked';

    /** the column name for the AddRemark field */
    const ADDREMARK = 'strains.AddRemark';

    /** the column name for the TS field */
    const TS = 'strains.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Strains objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Strains[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. StrainsPeer::$fieldNames[StrainsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode', 'Speccode', 'Strainsrefno', 'CCode', 'Straincode', 'Trait', 'Pic', 'Breedingstrategy', 'Viability', 'Sizeoffounding', 'Sizeoffoundingf', 'Sizeoffoundingm', 'Numberofbroodstock', 'Breedingyear', 'Source', 'Sourceii', 'Straincodefounder', 'Arrivaloffounder', 'Availability', 'Remarksref', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Addremark', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode', 'speccode', 'strainsrefno', 'cCode', 'straincode', 'trait', 'pic', 'breedingstrategy', 'viability', 'sizeoffounding', 'sizeoffoundingf', 'sizeoffoundingm', 'numberofbroodstock', 'breedingyear', 'source', 'sourceii', 'straincodefounder', 'arrivaloffounder', 'availability', 'remarksref', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'addremark', 'ts', ),
        BasePeer::TYPE_COLNAME => array (StrainsPeer::STOCKCODE, StrainsPeer::SPECCODE, StrainsPeer::STRAINSREFNO, StrainsPeer::C_CODE, StrainsPeer::STRAINCODE, StrainsPeer::TRAIT, StrainsPeer::PIC, StrainsPeer::BREEDINGSTRATEGY, StrainsPeer::VIABILITY, StrainsPeer::SIZEOFFOUNDING, StrainsPeer::SIZEOFFOUNDINGF, StrainsPeer::SIZEOFFOUNDINGM, StrainsPeer::NUMBEROFBROODSTOCK, StrainsPeer::BREEDINGYEAR, StrainsPeer::SOURCE, StrainsPeer::SOURCEII, StrainsPeer::STRAINCODEFOUNDER, StrainsPeer::ARRIVALOFFOUNDER, StrainsPeer::AVAILABILITY, StrainsPeer::REMARKSREF, StrainsPeer::ENTERED, StrainsPeer::DATEENTERED, StrainsPeer::MODIFIED, StrainsPeer::DATEMODIFIED, StrainsPeer::EXPERT, StrainsPeer::DATECHECKED, StrainsPeer::ADDREMARK, StrainsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE', 'SPECCODE', 'STRAINSREFNO', 'C_CODE', 'STRAINCODE', 'TRAIT', 'PIC', 'BREEDINGSTRATEGY', 'VIABILITY', 'SIZEOFFOUNDING', 'SIZEOFFOUNDINGF', 'SIZEOFFOUNDINGM', 'NUMBEROFBROODSTOCK', 'BREEDINGYEAR', 'SOURCE', 'SOURCEII', 'STRAINCODEFOUNDER', 'ARRIVALOFFOUNDER', 'AVAILABILITY', 'REMARKSREF', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'ADDREMARK', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode', 'SpecCode', 'StrainsRefNo', 'C_Code', 'StrainCode', 'Trait', 'Pic', 'BreedingStrategy', 'Viability', 'SizeofFounding', 'SizeofFoundingF', 'SizeofFoundingM', 'NumberofBroodstock', 'BreedingYear', 'Source', 'SourceII', 'StrainCodeFounder', 'ArrivalofFounder', 'Availability', 'RemarksRef', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'AddRemark', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. StrainsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode' => 0, 'Speccode' => 1, 'Strainsrefno' => 2, 'CCode' => 3, 'Straincode' => 4, 'Trait' => 5, 'Pic' => 6, 'Breedingstrategy' => 7, 'Viability' => 8, 'Sizeoffounding' => 9, 'Sizeoffoundingf' => 10, 'Sizeoffoundingm' => 11, 'Numberofbroodstock' => 12, 'Breedingyear' => 13, 'Source' => 14, 'Sourceii' => 15, 'Straincodefounder' => 16, 'Arrivaloffounder' => 17, 'Availability' => 18, 'Remarksref' => 19, 'Entered' => 20, 'Dateentered' => 21, 'Modified' => 22, 'Datemodified' => 23, 'Expert' => 24, 'Datechecked' => 25, 'Addremark' => 26, 'Ts' => 27, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode' => 0, 'speccode' => 1, 'strainsrefno' => 2, 'cCode' => 3, 'straincode' => 4, 'trait' => 5, 'pic' => 6, 'breedingstrategy' => 7, 'viability' => 8, 'sizeoffounding' => 9, 'sizeoffoundingf' => 10, 'sizeoffoundingm' => 11, 'numberofbroodstock' => 12, 'breedingyear' => 13, 'source' => 14, 'sourceii' => 15, 'straincodefounder' => 16, 'arrivaloffounder' => 17, 'availability' => 18, 'remarksref' => 19, 'entered' => 20, 'dateentered' => 21, 'modified' => 22, 'datemodified' => 23, 'expert' => 24, 'datechecked' => 25, 'addremark' => 26, 'ts' => 27, ),
        BasePeer::TYPE_COLNAME => array (StrainsPeer::STOCKCODE => 0, StrainsPeer::SPECCODE => 1, StrainsPeer::STRAINSREFNO => 2, StrainsPeer::C_CODE => 3, StrainsPeer::STRAINCODE => 4, StrainsPeer::TRAIT => 5, StrainsPeer::PIC => 6, StrainsPeer::BREEDINGSTRATEGY => 7, StrainsPeer::VIABILITY => 8, StrainsPeer::SIZEOFFOUNDING => 9, StrainsPeer::SIZEOFFOUNDINGF => 10, StrainsPeer::SIZEOFFOUNDINGM => 11, StrainsPeer::NUMBEROFBROODSTOCK => 12, StrainsPeer::BREEDINGYEAR => 13, StrainsPeer::SOURCE => 14, StrainsPeer::SOURCEII => 15, StrainsPeer::STRAINCODEFOUNDER => 16, StrainsPeer::ARRIVALOFFOUNDER => 17, StrainsPeer::AVAILABILITY => 18, StrainsPeer::REMARKSREF => 19, StrainsPeer::ENTERED => 20, StrainsPeer::DATEENTERED => 21, StrainsPeer::MODIFIED => 22, StrainsPeer::DATEMODIFIED => 23, StrainsPeer::EXPERT => 24, StrainsPeer::DATECHECKED => 25, StrainsPeer::ADDREMARK => 26, StrainsPeer::TS => 27, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE' => 0, 'SPECCODE' => 1, 'STRAINSREFNO' => 2, 'C_CODE' => 3, 'STRAINCODE' => 4, 'TRAIT' => 5, 'PIC' => 6, 'BREEDINGSTRATEGY' => 7, 'VIABILITY' => 8, 'SIZEOFFOUNDING' => 9, 'SIZEOFFOUNDINGF' => 10, 'SIZEOFFOUNDINGM' => 11, 'NUMBEROFBROODSTOCK' => 12, 'BREEDINGYEAR' => 13, 'SOURCE' => 14, 'SOURCEII' => 15, 'STRAINCODEFOUNDER' => 16, 'ARRIVALOFFOUNDER' => 17, 'AVAILABILITY' => 18, 'REMARKSREF' => 19, 'ENTERED' => 20, 'DATEENTERED' => 21, 'MODIFIED' => 22, 'DATEMODIFIED' => 23, 'EXPERT' => 24, 'DATECHECKED' => 25, 'ADDREMARK' => 26, 'TS' => 27, ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode' => 0, 'SpecCode' => 1, 'StrainsRefNo' => 2, 'C_Code' => 3, 'StrainCode' => 4, 'Trait' => 5, 'Pic' => 6, 'BreedingStrategy' => 7, 'Viability' => 8, 'SizeofFounding' => 9, 'SizeofFoundingF' => 10, 'SizeofFoundingM' => 11, 'NumberofBroodstock' => 12, 'BreedingYear' => 13, 'Source' => 14, 'SourceII' => 15, 'StrainCodeFounder' => 16, 'ArrivalofFounder' => 17, 'Availability' => 18, 'RemarksRef' => 19, 'Entered' => 20, 'DateEntered' => 21, 'Modified' => 22, 'DateModified' => 23, 'Expert' => 24, 'DateChecked' => 25, 'AddRemark' => 26, 'TS' => 27, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
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
        $toNames = StrainsPeer::getFieldNames($toType);
        $key = isset(StrainsPeer::$fieldKeys[$fromType][$name]) ? StrainsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(StrainsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, StrainsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return StrainsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. StrainsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(StrainsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(StrainsPeer::STOCKCODE);
            $criteria->addSelectColumn(StrainsPeer::SPECCODE);
            $criteria->addSelectColumn(StrainsPeer::STRAINSREFNO);
            $criteria->addSelectColumn(StrainsPeer::C_CODE);
            $criteria->addSelectColumn(StrainsPeer::STRAINCODE);
            $criteria->addSelectColumn(StrainsPeer::TRAIT);
            $criteria->addSelectColumn(StrainsPeer::PIC);
            $criteria->addSelectColumn(StrainsPeer::BREEDINGSTRATEGY);
            $criteria->addSelectColumn(StrainsPeer::VIABILITY);
            $criteria->addSelectColumn(StrainsPeer::SIZEOFFOUNDING);
            $criteria->addSelectColumn(StrainsPeer::SIZEOFFOUNDINGF);
            $criteria->addSelectColumn(StrainsPeer::SIZEOFFOUNDINGM);
            $criteria->addSelectColumn(StrainsPeer::NUMBEROFBROODSTOCK);
            $criteria->addSelectColumn(StrainsPeer::BREEDINGYEAR);
            $criteria->addSelectColumn(StrainsPeer::SOURCE);
            $criteria->addSelectColumn(StrainsPeer::SOURCEII);
            $criteria->addSelectColumn(StrainsPeer::STRAINCODEFOUNDER);
            $criteria->addSelectColumn(StrainsPeer::ARRIVALOFFOUNDER);
            $criteria->addSelectColumn(StrainsPeer::AVAILABILITY);
            $criteria->addSelectColumn(StrainsPeer::REMARKSREF);
            $criteria->addSelectColumn(StrainsPeer::ENTERED);
            $criteria->addSelectColumn(StrainsPeer::DATEENTERED);
            $criteria->addSelectColumn(StrainsPeer::MODIFIED);
            $criteria->addSelectColumn(StrainsPeer::DATEMODIFIED);
            $criteria->addSelectColumn(StrainsPeer::EXPERT);
            $criteria->addSelectColumn(StrainsPeer::DATECHECKED);
            $criteria->addSelectColumn(StrainsPeer::ADDREMARK);
            $criteria->addSelectColumn(StrainsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.StrainsRefNo');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.StrainCode');
            $criteria->addSelectColumn($alias . '.Trait');
            $criteria->addSelectColumn($alias . '.Pic');
            $criteria->addSelectColumn($alias . '.BreedingStrategy');
            $criteria->addSelectColumn($alias . '.Viability');
            $criteria->addSelectColumn($alias . '.SizeofFounding');
            $criteria->addSelectColumn($alias . '.SizeofFoundingF');
            $criteria->addSelectColumn($alias . '.SizeofFoundingM');
            $criteria->addSelectColumn($alias . '.NumberofBroodstock');
            $criteria->addSelectColumn($alias . '.BreedingYear');
            $criteria->addSelectColumn($alias . '.Source');
            $criteria->addSelectColumn($alias . '.SourceII');
            $criteria->addSelectColumn($alias . '.StrainCodeFounder');
            $criteria->addSelectColumn($alias . '.ArrivalofFounder');
            $criteria->addSelectColumn($alias . '.Availability');
            $criteria->addSelectColumn($alias . '.RemarksRef');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.AddRemark');
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
        $criteria->setPrimaryTableName(StrainsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            StrainsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(StrainsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Strains
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = StrainsPeer::doSelect($critcopy, $con);
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
        return StrainsPeer::populateObjects(StrainsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            StrainsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(StrainsPeer::DATABASE_NAME);

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
     * @param Strains $obj A Strains object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getStraincode()));
            } // if key === null
            StrainsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Strains object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Strains) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getStraincode()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Strains object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(StrainsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Strains Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(StrainsPeer::$instances[$key])) {
                return StrainsPeer::$instances[$key];
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
        foreach (StrainsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        StrainsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to strains
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
        if ($row[$startcol] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 4]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 4]);
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
        $cls = StrainsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = StrainsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = StrainsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                StrainsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Strains object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = StrainsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = StrainsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + StrainsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = StrainsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            StrainsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(StrainsPeer::DATABASE_NAME)->getTable(StrainsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseStrainsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseStrainsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \StrainsTableMap());
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
        return StrainsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Strains or Criteria object.
     *
     * @param      mixed $values Criteria or Strains object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Strains object
        }


        // Set the correct dbName
        $criteria->setDbName(StrainsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Strains or Criteria object.
     *
     * @param      mixed $values Criteria or Strains object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(StrainsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(StrainsPeer::STOCKCODE);
            $value = $criteria->remove(StrainsPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(StrainsPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StrainsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(StrainsPeer::STRAINCODE);
            $value = $criteria->remove(StrainsPeer::STRAINCODE);
            if ($value) {
                $selectCriteria->add(StrainsPeer::STRAINCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StrainsPeer::TABLE_NAME);
            }

        } else { // $values is Strains object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(StrainsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the strains table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(StrainsPeer::TABLE_NAME, $con, StrainsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StrainsPeer::clearInstancePool();
            StrainsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Strains or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Strains object or primary key or array of primary keys
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
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            StrainsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Strains) { // it's a model object
            // invalidate the cache for this single object
            StrainsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(StrainsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(StrainsPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(StrainsPeer::STRAINCODE, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                StrainsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(StrainsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            StrainsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Strains object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Strains $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(StrainsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(StrainsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(StrainsPeer::DATABASE_NAME, StrainsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   string $straincode
     * @param      PropelPDO $con
     * @return Strains
     */
    public static function retrieveByPK($stockcode, $straincode, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $straincode));
         if (null !== ($obj = StrainsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(StrainsPeer::DATABASE_NAME);
        $criteria->add(StrainsPeer::STOCKCODE, $stockcode);
        $criteria->add(StrainsPeer::STRAINCODE, $straincode);
        $v = StrainsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseStrainsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseStrainsPeer::buildTableMap();

