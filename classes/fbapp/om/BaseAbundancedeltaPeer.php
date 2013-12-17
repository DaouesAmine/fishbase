<?php


/**
 * Base static class for performing query and update operations on the 'abundancedelta' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseAbundancedeltaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'abundancedelta';

    /** the related Propel class for this table */
    const OM_CLASS = 'Abundancedelta';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AbundancedeltaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 24;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 24;

    /** the column name for the A_DeltaCode field */
    const A_DELTACODE = 'abundancedelta.A_DeltaCode';

    /** the column name for the AbundanceCode field */
    const ABUNDANCECODE = 'abundancedelta.AbundanceCode';

    /** the column name for the EcoChange1 field */
    const ECOCHANGE1 = 'abundancedelta.EcoChange1';

    /** the column name for the EcoChange2 field */
    const ECOCHANGE2 = 'abundancedelta.EcoChange2';

    /** the column name for the EcoChange3 field */
    const ECOCHANGE3 = 'abundancedelta.EcoChange3';

    /** the column name for the EcoChange4 field */
    const ECOCHANGE4 = 'abundancedelta.EcoChange4';

    /** the column name for the EcoChange_Ref field */
    const ECOCHANGE_REF = 'abundancedelta.EcoChange_Ref';

    /** the column name for the AbioChange1 field */
    const ABIOCHANGE1 = 'abundancedelta.AbioChange1';

    /** the column name for the AbioChange2 field */
    const ABIOCHANGE2 = 'abundancedelta.AbioChange2';

    /** the column name for the AbioChange3 field */
    const ABIOCHANGE3 = 'abundancedelta.AbioChange3';

    /** the column name for the AbioChange4 field */
    const ABIOCHANGE4 = 'abundancedelta.AbioChange4';

    /** the column name for the AbioChange_Ref field */
    const ABIOCHANGE_REF = 'abundancedelta.AbioChange_Ref';

    /** the column name for the EcoHealth1 field */
    const ECOHEALTH1 = 'abundancedelta.EcoHealth1';

    /** the column name for the EcoHealth2 field */
    const ECOHEALTH2 = 'abundancedelta.EcoHealth2';

    /** the column name for the EcoHealth_Ref field */
    const ECOHEALTH_REF = 'abundancedelta.EcoHealth_Ref';

    /** the column name for the HumanInterest1 field */
    const HUMANINTEREST1 = 'abundancedelta.HumanInterest1';

    /** the column name for the HumanInterest2 field */
    const HUMANINTEREST2 = 'abundancedelta.HumanInterest2';

    /** the column name for the HumanInterest_Ref field */
    const HUMANINTEREST_REF = 'abundancedelta.HumanInterest_Ref';

    /** the column name for the Remarks field */
    const REMARKS = 'abundancedelta.Remarks';

    /** the column name for the AffectedType field */
    const AFFECTEDTYPE = 'abundancedelta.AffectedType';

    /** the column name for the AffectedGenus field */
    const AFFECTEDGENUS = 'abundancedelta.AffectedGenus';

    /** the column name for the AffectedSpecies field */
    const AFFECTEDSPECIES = 'abundancedelta.AffectedSpecies';

    /** the column name for the AffectedSpecCode field */
    const AFFECTEDSPECCODE = 'abundancedelta.AffectedSpecCode';

    /** the column name for the TS field */
    const TS = 'abundancedelta.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Abundancedelta objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Abundancedelta[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AbundancedeltaPeer::$fieldNames[AbundancedeltaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ADeltacode', 'Abundancecode', 'Ecochange1', 'Ecochange2', 'Ecochange3', 'Ecochange4', 'EcochangeRef', 'Abiochange1', 'Abiochange2', 'Abiochange3', 'Abiochange4', 'AbiochangeRef', 'Ecohealth1', 'Ecohealth2', 'EcohealthRef', 'Humaninterest1', 'Humaninterest2', 'HumaninterestRef', 'Remarks', 'Affectedtype', 'Affectedgenus', 'Affectedspecies', 'Affectedspeccode', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('aDeltacode', 'abundancecode', 'ecochange1', 'ecochange2', 'ecochange3', 'ecochange4', 'ecochangeRef', 'abiochange1', 'abiochange2', 'abiochange3', 'abiochange4', 'abiochangeRef', 'ecohealth1', 'ecohealth2', 'ecohealthRef', 'humaninterest1', 'humaninterest2', 'humaninterestRef', 'remarks', 'affectedtype', 'affectedgenus', 'affectedspecies', 'affectedspeccode', 'ts', ),
        BasePeer::TYPE_COLNAME => array (AbundancedeltaPeer::A_DELTACODE, AbundancedeltaPeer::ABUNDANCECODE, AbundancedeltaPeer::ECOCHANGE1, AbundancedeltaPeer::ECOCHANGE2, AbundancedeltaPeer::ECOCHANGE3, AbundancedeltaPeer::ECOCHANGE4, AbundancedeltaPeer::ECOCHANGE_REF, AbundancedeltaPeer::ABIOCHANGE1, AbundancedeltaPeer::ABIOCHANGE2, AbundancedeltaPeer::ABIOCHANGE3, AbundancedeltaPeer::ABIOCHANGE4, AbundancedeltaPeer::ABIOCHANGE_REF, AbundancedeltaPeer::ECOHEALTH1, AbundancedeltaPeer::ECOHEALTH2, AbundancedeltaPeer::ECOHEALTH_REF, AbundancedeltaPeer::HUMANINTEREST1, AbundancedeltaPeer::HUMANINTEREST2, AbundancedeltaPeer::HUMANINTEREST_REF, AbundancedeltaPeer::REMARKS, AbundancedeltaPeer::AFFECTEDTYPE, AbundancedeltaPeer::AFFECTEDGENUS, AbundancedeltaPeer::AFFECTEDSPECIES, AbundancedeltaPeer::AFFECTEDSPECCODE, AbundancedeltaPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('A_DELTACODE', 'ABUNDANCECODE', 'ECOCHANGE1', 'ECOCHANGE2', 'ECOCHANGE3', 'ECOCHANGE4', 'ECOCHANGE_REF', 'ABIOCHANGE1', 'ABIOCHANGE2', 'ABIOCHANGE3', 'ABIOCHANGE4', 'ABIOCHANGE_REF', 'ECOHEALTH1', 'ECOHEALTH2', 'ECOHEALTH_REF', 'HUMANINTEREST1', 'HUMANINTEREST2', 'HUMANINTEREST_REF', 'REMARKS', 'AFFECTEDTYPE', 'AFFECTEDGENUS', 'AFFECTEDSPECIES', 'AFFECTEDSPECCODE', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('A_DeltaCode', 'AbundanceCode', 'EcoChange1', 'EcoChange2', 'EcoChange3', 'EcoChange4', 'EcoChange_Ref', 'AbioChange1', 'AbioChange2', 'AbioChange3', 'AbioChange4', 'AbioChange_Ref', 'EcoHealth1', 'EcoHealth2', 'EcoHealth_Ref', 'HumanInterest1', 'HumanInterest2', 'HumanInterest_Ref', 'Remarks', 'AffectedType', 'AffectedGenus', 'AffectedSpecies', 'AffectedSpecCode', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AbundancedeltaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ADeltacode' => 0, 'Abundancecode' => 1, 'Ecochange1' => 2, 'Ecochange2' => 3, 'Ecochange3' => 4, 'Ecochange4' => 5, 'EcochangeRef' => 6, 'Abiochange1' => 7, 'Abiochange2' => 8, 'Abiochange3' => 9, 'Abiochange4' => 10, 'AbiochangeRef' => 11, 'Ecohealth1' => 12, 'Ecohealth2' => 13, 'EcohealthRef' => 14, 'Humaninterest1' => 15, 'Humaninterest2' => 16, 'HumaninterestRef' => 17, 'Remarks' => 18, 'Affectedtype' => 19, 'Affectedgenus' => 20, 'Affectedspecies' => 21, 'Affectedspeccode' => 22, 'Ts' => 23, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('aDeltacode' => 0, 'abundancecode' => 1, 'ecochange1' => 2, 'ecochange2' => 3, 'ecochange3' => 4, 'ecochange4' => 5, 'ecochangeRef' => 6, 'abiochange1' => 7, 'abiochange2' => 8, 'abiochange3' => 9, 'abiochange4' => 10, 'abiochangeRef' => 11, 'ecohealth1' => 12, 'ecohealth2' => 13, 'ecohealthRef' => 14, 'humaninterest1' => 15, 'humaninterest2' => 16, 'humaninterestRef' => 17, 'remarks' => 18, 'affectedtype' => 19, 'affectedgenus' => 20, 'affectedspecies' => 21, 'affectedspeccode' => 22, 'ts' => 23, ),
        BasePeer::TYPE_COLNAME => array (AbundancedeltaPeer::A_DELTACODE => 0, AbundancedeltaPeer::ABUNDANCECODE => 1, AbundancedeltaPeer::ECOCHANGE1 => 2, AbundancedeltaPeer::ECOCHANGE2 => 3, AbundancedeltaPeer::ECOCHANGE3 => 4, AbundancedeltaPeer::ECOCHANGE4 => 5, AbundancedeltaPeer::ECOCHANGE_REF => 6, AbundancedeltaPeer::ABIOCHANGE1 => 7, AbundancedeltaPeer::ABIOCHANGE2 => 8, AbundancedeltaPeer::ABIOCHANGE3 => 9, AbundancedeltaPeer::ABIOCHANGE4 => 10, AbundancedeltaPeer::ABIOCHANGE_REF => 11, AbundancedeltaPeer::ECOHEALTH1 => 12, AbundancedeltaPeer::ECOHEALTH2 => 13, AbundancedeltaPeer::ECOHEALTH_REF => 14, AbundancedeltaPeer::HUMANINTEREST1 => 15, AbundancedeltaPeer::HUMANINTEREST2 => 16, AbundancedeltaPeer::HUMANINTEREST_REF => 17, AbundancedeltaPeer::REMARKS => 18, AbundancedeltaPeer::AFFECTEDTYPE => 19, AbundancedeltaPeer::AFFECTEDGENUS => 20, AbundancedeltaPeer::AFFECTEDSPECIES => 21, AbundancedeltaPeer::AFFECTEDSPECCODE => 22, AbundancedeltaPeer::TS => 23, ),
        BasePeer::TYPE_RAW_COLNAME => array ('A_DELTACODE' => 0, 'ABUNDANCECODE' => 1, 'ECOCHANGE1' => 2, 'ECOCHANGE2' => 3, 'ECOCHANGE3' => 4, 'ECOCHANGE4' => 5, 'ECOCHANGE_REF' => 6, 'ABIOCHANGE1' => 7, 'ABIOCHANGE2' => 8, 'ABIOCHANGE3' => 9, 'ABIOCHANGE4' => 10, 'ABIOCHANGE_REF' => 11, 'ECOHEALTH1' => 12, 'ECOHEALTH2' => 13, 'ECOHEALTH_REF' => 14, 'HUMANINTEREST1' => 15, 'HUMANINTEREST2' => 16, 'HUMANINTEREST_REF' => 17, 'REMARKS' => 18, 'AFFECTEDTYPE' => 19, 'AFFECTEDGENUS' => 20, 'AFFECTEDSPECIES' => 21, 'AFFECTEDSPECCODE' => 22, 'TS' => 23, ),
        BasePeer::TYPE_FIELDNAME => array ('A_DeltaCode' => 0, 'AbundanceCode' => 1, 'EcoChange1' => 2, 'EcoChange2' => 3, 'EcoChange3' => 4, 'EcoChange4' => 5, 'EcoChange_Ref' => 6, 'AbioChange1' => 7, 'AbioChange2' => 8, 'AbioChange3' => 9, 'AbioChange4' => 10, 'AbioChange_Ref' => 11, 'EcoHealth1' => 12, 'EcoHealth2' => 13, 'EcoHealth_Ref' => 14, 'HumanInterest1' => 15, 'HumanInterest2' => 16, 'HumanInterest_Ref' => 17, 'Remarks' => 18, 'AffectedType' => 19, 'AffectedGenus' => 20, 'AffectedSpecies' => 21, 'AffectedSpecCode' => 22, 'TS' => 23, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
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
        $toNames = AbundancedeltaPeer::getFieldNames($toType);
        $key = isset(AbundancedeltaPeer::$fieldKeys[$fromType][$name]) ? AbundancedeltaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AbundancedeltaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AbundancedeltaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AbundancedeltaPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. AbundancedeltaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AbundancedeltaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AbundancedeltaPeer::A_DELTACODE);
            $criteria->addSelectColumn(AbundancedeltaPeer::ABUNDANCECODE);
            $criteria->addSelectColumn(AbundancedeltaPeer::ECOCHANGE1);
            $criteria->addSelectColumn(AbundancedeltaPeer::ECOCHANGE2);
            $criteria->addSelectColumn(AbundancedeltaPeer::ECOCHANGE3);
            $criteria->addSelectColumn(AbundancedeltaPeer::ECOCHANGE4);
            $criteria->addSelectColumn(AbundancedeltaPeer::ECOCHANGE_REF);
            $criteria->addSelectColumn(AbundancedeltaPeer::ABIOCHANGE1);
            $criteria->addSelectColumn(AbundancedeltaPeer::ABIOCHANGE2);
            $criteria->addSelectColumn(AbundancedeltaPeer::ABIOCHANGE3);
            $criteria->addSelectColumn(AbundancedeltaPeer::ABIOCHANGE4);
            $criteria->addSelectColumn(AbundancedeltaPeer::ABIOCHANGE_REF);
            $criteria->addSelectColumn(AbundancedeltaPeer::ECOHEALTH1);
            $criteria->addSelectColumn(AbundancedeltaPeer::ECOHEALTH2);
            $criteria->addSelectColumn(AbundancedeltaPeer::ECOHEALTH_REF);
            $criteria->addSelectColumn(AbundancedeltaPeer::HUMANINTEREST1);
            $criteria->addSelectColumn(AbundancedeltaPeer::HUMANINTEREST2);
            $criteria->addSelectColumn(AbundancedeltaPeer::HUMANINTEREST_REF);
            $criteria->addSelectColumn(AbundancedeltaPeer::REMARKS);
            $criteria->addSelectColumn(AbundancedeltaPeer::AFFECTEDTYPE);
            $criteria->addSelectColumn(AbundancedeltaPeer::AFFECTEDGENUS);
            $criteria->addSelectColumn(AbundancedeltaPeer::AFFECTEDSPECIES);
            $criteria->addSelectColumn(AbundancedeltaPeer::AFFECTEDSPECCODE);
            $criteria->addSelectColumn(AbundancedeltaPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.A_DeltaCode');
            $criteria->addSelectColumn($alias . '.AbundanceCode');
            $criteria->addSelectColumn($alias . '.EcoChange1');
            $criteria->addSelectColumn($alias . '.EcoChange2');
            $criteria->addSelectColumn($alias . '.EcoChange3');
            $criteria->addSelectColumn($alias . '.EcoChange4');
            $criteria->addSelectColumn($alias . '.EcoChange_Ref');
            $criteria->addSelectColumn($alias . '.AbioChange1');
            $criteria->addSelectColumn($alias . '.AbioChange2');
            $criteria->addSelectColumn($alias . '.AbioChange3');
            $criteria->addSelectColumn($alias . '.AbioChange4');
            $criteria->addSelectColumn($alias . '.AbioChange_Ref');
            $criteria->addSelectColumn($alias . '.EcoHealth1');
            $criteria->addSelectColumn($alias . '.EcoHealth2');
            $criteria->addSelectColumn($alias . '.EcoHealth_Ref');
            $criteria->addSelectColumn($alias . '.HumanInterest1');
            $criteria->addSelectColumn($alias . '.HumanInterest2');
            $criteria->addSelectColumn($alias . '.HumanInterest_Ref');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.AffectedType');
            $criteria->addSelectColumn($alias . '.AffectedGenus');
            $criteria->addSelectColumn($alias . '.AffectedSpecies');
            $criteria->addSelectColumn($alias . '.AffectedSpecCode');
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
        $criteria->setPrimaryTableName(AbundancedeltaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbundancedeltaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AbundancedeltaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Abundancedelta
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AbundancedeltaPeer::doSelect($critcopy, $con);
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
        return AbundancedeltaPeer::populateObjects(AbundancedeltaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AbundancedeltaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AbundancedeltaPeer::DATABASE_NAME);

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
     * @param Abundancedelta $obj A Abundancedelta object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getADeltacode();
            } // if key === null
            AbundancedeltaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Abundancedelta object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Abundancedelta) {
                $key = (string) $value->getADeltacode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Abundancedelta object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AbundancedeltaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Abundancedelta Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AbundancedeltaPeer::$instances[$key])) {
                return AbundancedeltaPeer::$instances[$key];
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
        foreach (AbundancedeltaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AbundancedeltaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to abundancedelta
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
        $cls = AbundancedeltaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AbundancedeltaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AbundancedeltaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AbundancedeltaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Abundancedelta object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AbundancedeltaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AbundancedeltaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AbundancedeltaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AbundancedeltaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AbundancedeltaPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(AbundancedeltaPeer::DATABASE_NAME)->getTable(AbundancedeltaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAbundancedeltaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAbundancedeltaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AbundancedeltaTableMap());
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
        return AbundancedeltaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Abundancedelta or Criteria object.
     *
     * @param      mixed $values Criteria or Abundancedelta object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Abundancedelta object
        }

        if ($criteria->containsKey(AbundancedeltaPeer::A_DELTACODE) && $criteria->keyContainsValue(AbundancedeltaPeer::A_DELTACODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AbundancedeltaPeer::A_DELTACODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AbundancedeltaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Abundancedelta or Criteria object.
     *
     * @param      mixed $values Criteria or Abundancedelta object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AbundancedeltaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AbundancedeltaPeer::A_DELTACODE);
            $value = $criteria->remove(AbundancedeltaPeer::A_DELTACODE);
            if ($value) {
                $selectCriteria->add(AbundancedeltaPeer::A_DELTACODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AbundancedeltaPeer::TABLE_NAME);
            }

        } else { // $values is Abundancedelta object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AbundancedeltaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the abundancedelta table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AbundancedeltaPeer::TABLE_NAME, $con, AbundancedeltaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AbundancedeltaPeer::clearInstancePool();
            AbundancedeltaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Abundancedelta or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Abundancedelta object or primary key or array of primary keys
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
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AbundancedeltaPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Abundancedelta) { // it's a model object
            // invalidate the cache for this single object
            AbundancedeltaPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AbundancedeltaPeer::DATABASE_NAME);
            $criteria->add(AbundancedeltaPeer::A_DELTACODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AbundancedeltaPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AbundancedeltaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AbundancedeltaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Abundancedelta object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Abundancedelta $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AbundancedeltaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AbundancedeltaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(AbundancedeltaPeer::DATABASE_NAME, AbundancedeltaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Abundancedelta
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AbundancedeltaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AbundancedeltaPeer::DATABASE_NAME);
        $criteria->add(AbundancedeltaPeer::A_DELTACODE, $pk);

        $v = AbundancedeltaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Abundancedelta[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbundancedeltaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AbundancedeltaPeer::DATABASE_NAME);
            $criteria->add(AbundancedeltaPeer::A_DELTACODE, $pks, Criteria::IN);
            $objs = AbundancedeltaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAbundancedeltaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAbundancedeltaPeer::buildTableMap();

