<?php


/**
 * Base static class for performing query and update operations on the 'otoliths' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseOtolithsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'otoliths';

    /** the related Propel class for this table */
    const OM_CLASS = 'Otoliths';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OtolithsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the OtolithID field */
    const OTOLITHID = 'otoliths.OtolithID';

    /** the column name for the OtolithsRefno field */
    const OTOLITHSREFNO = 'otoliths.OtolithsRefno';

    /** the column name for the GenusUsed field */
    const GENUSUSED = 'otoliths.GenusUsed';

    /** the column name for the SpeciesUsed field */
    const SPECIESUSED = 'otoliths.SpeciesUsed';

    /** the column name for the SynCode field */
    const SYNCODE = 'otoliths.SynCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'otoliths.SpecCode';

    /** the column name for the SynCodeValid field */
    const SYNCODEVALID = 'otoliths.SynCodeValid';

    /** the column name for the LengthFish field */
    const LENGTHFISH = 'otoliths.LengthFish';

    /** the column name for the Locality field */
    const LOCALITY = 'otoliths.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'otoliths.C_Code';

    /** the column name for the E_CODE field */
    const E_CODE = 'otoliths.E_CODE';

    /** the column name for the Plate field */
    const PLATE = 'otoliths.Plate';

    /** the column name for the Figure field */
    const FIGURE = 'otoliths.Figure';

    /** the column name for the Position field */
    const POSITION = 'otoliths.Position';

    /** the column name for the Face field */
    const FACE = 'otoliths.Face';

    /** the column name for the Type field */
    const TYPE = 'otoliths.Type';

    /** the column name for the LengthOtolith field */
    const LENGTHOTOLITH = 'otoliths.LengthOtolith';

    /** the column name for the HeightOtolith field */
    const HEIGHTOTOLITH = 'otoliths.HeightOtolith';

    /** the column name for the FigFileName field */
    const FIGFILENAME = 'otoliths.FigFileName';

    /** the column name for the AuthName field */
    const AUTHNAME = 'otoliths.AuthName';

    /** the column name for the fkpoisson field */
    const FKPOISSON = 'otoliths.fkpoisson';

    /** the column name for the fktaxon field */
    const FKTAXON = 'otoliths.fktaxon';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Otoliths objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Otoliths[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OtolithsPeer::$fieldNames[OtolithsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Otolithid', 'Otolithsrefno', 'Genusused', 'Speciesused', 'Syncode', 'Speccode', 'Syncodevalid', 'Lengthfish', 'Locality', 'CCode', 'ECode', 'Plate', 'Figure', 'Position', 'Face', 'Type', 'Lengthotolith', 'Heightotolith', 'Figfilename', 'Authname', 'Fkpoisson', 'Fktaxon', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('otolithid', 'otolithsrefno', 'genusused', 'speciesused', 'syncode', 'speccode', 'syncodevalid', 'lengthfish', 'locality', 'cCode', 'eCode', 'plate', 'figure', 'position', 'face', 'type', 'lengthotolith', 'heightotolith', 'figfilename', 'authname', 'fkpoisson', 'fktaxon', ),
        BasePeer::TYPE_COLNAME => array (OtolithsPeer::OTOLITHID, OtolithsPeer::OTOLITHSREFNO, OtolithsPeer::GENUSUSED, OtolithsPeer::SPECIESUSED, OtolithsPeer::SYNCODE, OtolithsPeer::SPECCODE, OtolithsPeer::SYNCODEVALID, OtolithsPeer::LENGTHFISH, OtolithsPeer::LOCALITY, OtolithsPeer::C_CODE, OtolithsPeer::E_CODE, OtolithsPeer::PLATE, OtolithsPeer::FIGURE, OtolithsPeer::POSITION, OtolithsPeer::FACE, OtolithsPeer::TYPE, OtolithsPeer::LENGTHOTOLITH, OtolithsPeer::HEIGHTOTOLITH, OtolithsPeer::FIGFILENAME, OtolithsPeer::AUTHNAME, OtolithsPeer::FKPOISSON, OtolithsPeer::FKTAXON, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OTOLITHID', 'OTOLITHSREFNO', 'GENUSUSED', 'SPECIESUSED', 'SYNCODE', 'SPECCODE', 'SYNCODEVALID', 'LENGTHFISH', 'LOCALITY', 'C_CODE', 'E_CODE', 'PLATE', 'FIGURE', 'POSITION', 'FACE', 'TYPE', 'LENGTHOTOLITH', 'HEIGHTOTOLITH', 'FIGFILENAME', 'AUTHNAME', 'FKPOISSON', 'FKTAXON', ),
        BasePeer::TYPE_FIELDNAME => array ('OtolithID', 'OtolithsRefno', 'GenusUsed', 'SpeciesUsed', 'SynCode', 'SpecCode', 'SynCodeValid', 'LengthFish', 'Locality', 'C_Code', 'E_CODE', 'Plate', 'Figure', 'Position', 'Face', 'Type', 'LengthOtolith', 'HeightOtolith', 'FigFileName', 'AuthName', 'fkpoisson', 'fktaxon', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OtolithsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Otolithid' => 0, 'Otolithsrefno' => 1, 'Genusused' => 2, 'Speciesused' => 3, 'Syncode' => 4, 'Speccode' => 5, 'Syncodevalid' => 6, 'Lengthfish' => 7, 'Locality' => 8, 'CCode' => 9, 'ECode' => 10, 'Plate' => 11, 'Figure' => 12, 'Position' => 13, 'Face' => 14, 'Type' => 15, 'Lengthotolith' => 16, 'Heightotolith' => 17, 'Figfilename' => 18, 'Authname' => 19, 'Fkpoisson' => 20, 'Fktaxon' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('otolithid' => 0, 'otolithsrefno' => 1, 'genusused' => 2, 'speciesused' => 3, 'syncode' => 4, 'speccode' => 5, 'syncodevalid' => 6, 'lengthfish' => 7, 'locality' => 8, 'cCode' => 9, 'eCode' => 10, 'plate' => 11, 'figure' => 12, 'position' => 13, 'face' => 14, 'type' => 15, 'lengthotolith' => 16, 'heightotolith' => 17, 'figfilename' => 18, 'authname' => 19, 'fkpoisson' => 20, 'fktaxon' => 21, ),
        BasePeer::TYPE_COLNAME => array (OtolithsPeer::OTOLITHID => 0, OtolithsPeer::OTOLITHSREFNO => 1, OtolithsPeer::GENUSUSED => 2, OtolithsPeer::SPECIESUSED => 3, OtolithsPeer::SYNCODE => 4, OtolithsPeer::SPECCODE => 5, OtolithsPeer::SYNCODEVALID => 6, OtolithsPeer::LENGTHFISH => 7, OtolithsPeer::LOCALITY => 8, OtolithsPeer::C_CODE => 9, OtolithsPeer::E_CODE => 10, OtolithsPeer::PLATE => 11, OtolithsPeer::FIGURE => 12, OtolithsPeer::POSITION => 13, OtolithsPeer::FACE => 14, OtolithsPeer::TYPE => 15, OtolithsPeer::LENGTHOTOLITH => 16, OtolithsPeer::HEIGHTOTOLITH => 17, OtolithsPeer::FIGFILENAME => 18, OtolithsPeer::AUTHNAME => 19, OtolithsPeer::FKPOISSON => 20, OtolithsPeer::FKTAXON => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OTOLITHID' => 0, 'OTOLITHSREFNO' => 1, 'GENUSUSED' => 2, 'SPECIESUSED' => 3, 'SYNCODE' => 4, 'SPECCODE' => 5, 'SYNCODEVALID' => 6, 'LENGTHFISH' => 7, 'LOCALITY' => 8, 'C_CODE' => 9, 'E_CODE' => 10, 'PLATE' => 11, 'FIGURE' => 12, 'POSITION' => 13, 'FACE' => 14, 'TYPE' => 15, 'LENGTHOTOLITH' => 16, 'HEIGHTOTOLITH' => 17, 'FIGFILENAME' => 18, 'AUTHNAME' => 19, 'FKPOISSON' => 20, 'FKTAXON' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('OtolithID' => 0, 'OtolithsRefno' => 1, 'GenusUsed' => 2, 'SpeciesUsed' => 3, 'SynCode' => 4, 'SpecCode' => 5, 'SynCodeValid' => 6, 'LengthFish' => 7, 'Locality' => 8, 'C_Code' => 9, 'E_CODE' => 10, 'Plate' => 11, 'Figure' => 12, 'Position' => 13, 'Face' => 14, 'Type' => 15, 'LengthOtolith' => 16, 'HeightOtolith' => 17, 'FigFileName' => 18, 'AuthName' => 19, 'fkpoisson' => 20, 'fktaxon' => 21, ),
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
        $toNames = OtolithsPeer::getFieldNames($toType);
        $key = isset(OtolithsPeer::$fieldKeys[$fromType][$name]) ? OtolithsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OtolithsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OtolithsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OtolithsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OtolithsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OtolithsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OtolithsPeer::OTOLITHID);
            $criteria->addSelectColumn(OtolithsPeer::OTOLITHSREFNO);
            $criteria->addSelectColumn(OtolithsPeer::GENUSUSED);
            $criteria->addSelectColumn(OtolithsPeer::SPECIESUSED);
            $criteria->addSelectColumn(OtolithsPeer::SYNCODE);
            $criteria->addSelectColumn(OtolithsPeer::SPECCODE);
            $criteria->addSelectColumn(OtolithsPeer::SYNCODEVALID);
            $criteria->addSelectColumn(OtolithsPeer::LENGTHFISH);
            $criteria->addSelectColumn(OtolithsPeer::LOCALITY);
            $criteria->addSelectColumn(OtolithsPeer::C_CODE);
            $criteria->addSelectColumn(OtolithsPeer::E_CODE);
            $criteria->addSelectColumn(OtolithsPeer::PLATE);
            $criteria->addSelectColumn(OtolithsPeer::FIGURE);
            $criteria->addSelectColumn(OtolithsPeer::POSITION);
            $criteria->addSelectColumn(OtolithsPeer::FACE);
            $criteria->addSelectColumn(OtolithsPeer::TYPE);
            $criteria->addSelectColumn(OtolithsPeer::LENGTHOTOLITH);
            $criteria->addSelectColumn(OtolithsPeer::HEIGHTOTOLITH);
            $criteria->addSelectColumn(OtolithsPeer::FIGFILENAME);
            $criteria->addSelectColumn(OtolithsPeer::AUTHNAME);
            $criteria->addSelectColumn(OtolithsPeer::FKPOISSON);
            $criteria->addSelectColumn(OtolithsPeer::FKTAXON);
        } else {
            $criteria->addSelectColumn($alias . '.OtolithID');
            $criteria->addSelectColumn($alias . '.OtolithsRefno');
            $criteria->addSelectColumn($alias . '.GenusUsed');
            $criteria->addSelectColumn($alias . '.SpeciesUsed');
            $criteria->addSelectColumn($alias . '.SynCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.SynCodeValid');
            $criteria->addSelectColumn($alias . '.LengthFish');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.E_CODE');
            $criteria->addSelectColumn($alias . '.Plate');
            $criteria->addSelectColumn($alias . '.Figure');
            $criteria->addSelectColumn($alias . '.Position');
            $criteria->addSelectColumn($alias . '.Face');
            $criteria->addSelectColumn($alias . '.Type');
            $criteria->addSelectColumn($alias . '.LengthOtolith');
            $criteria->addSelectColumn($alias . '.HeightOtolith');
            $criteria->addSelectColumn($alias . '.FigFileName');
            $criteria->addSelectColumn($alias . '.AuthName');
            $criteria->addSelectColumn($alias . '.fkpoisson');
            $criteria->addSelectColumn($alias . '.fktaxon');
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
        $criteria->setPrimaryTableName(OtolithsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OtolithsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OtolithsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Otoliths
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OtolithsPeer::doSelect($critcopy, $con);
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
        return OtolithsPeer::populateObjects(OtolithsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OtolithsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OtolithsPeer::DATABASE_NAME);

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
     * @param Otoliths $obj A Otoliths object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getOtolithsrefno(), (string) $obj->getGenusused(), (string) $obj->getSpeciesused(), (string) $obj->getPlate(), (string) $obj->getFigure()));
            } // if key === null
            OtolithsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Otoliths object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Otoliths) {
                $key = serialize(array((string) $value->getOtolithsrefno(), (string) $value->getGenusused(), (string) $value->getSpeciesused(), (string) $value->getPlate(), (string) $value->getFigure()));
            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Otoliths object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OtolithsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Otoliths Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OtolithsPeer::$instances[$key])) {
                return OtolithsPeer::$instances[$key];
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
        foreach (OtolithsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OtolithsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to otoliths
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 11] === null && $row[$startcol + 12] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 11], (string) $row[$startcol + 12]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 11], (string) $row[$startcol + 12]);
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
        $cls = OtolithsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OtolithsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OtolithsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OtolithsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Otoliths object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OtolithsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OtolithsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OtolithsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OtolithsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OtolithsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(OtolithsPeer::DATABASE_NAME)->getTable(OtolithsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOtolithsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOtolithsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OtolithsTableMap());
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
        return OtolithsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Otoliths or Criteria object.
     *
     * @param      mixed $values Criteria or Otoliths object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Otoliths object
        }


        // Set the correct dbName
        $criteria->setDbName(OtolithsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Otoliths or Criteria object.
     *
     * @param      mixed $values Criteria or Otoliths object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OtolithsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OtolithsPeer::OTOLITHSREFNO);
            $value = $criteria->remove(OtolithsPeer::OTOLITHSREFNO);
            if ($value) {
                $selectCriteria->add(OtolithsPeer::OTOLITHSREFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OtolithsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(OtolithsPeer::GENUSUSED);
            $value = $criteria->remove(OtolithsPeer::GENUSUSED);
            if ($value) {
                $selectCriteria->add(OtolithsPeer::GENUSUSED, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OtolithsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(OtolithsPeer::SPECIESUSED);
            $value = $criteria->remove(OtolithsPeer::SPECIESUSED);
            if ($value) {
                $selectCriteria->add(OtolithsPeer::SPECIESUSED, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OtolithsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(OtolithsPeer::PLATE);
            $value = $criteria->remove(OtolithsPeer::PLATE);
            if ($value) {
                $selectCriteria->add(OtolithsPeer::PLATE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OtolithsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(OtolithsPeer::FIGURE);
            $value = $criteria->remove(OtolithsPeer::FIGURE);
            if ($value) {
                $selectCriteria->add(OtolithsPeer::FIGURE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OtolithsPeer::TABLE_NAME);
            }

        } else { // $values is Otoliths object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OtolithsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the otoliths table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OtolithsPeer::TABLE_NAME, $con, OtolithsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OtolithsPeer::clearInstancePool();
            OtolithsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Otoliths or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Otoliths object or primary key or array of primary keys
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
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OtolithsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Otoliths) { // it's a model object
            // invalidate the cache for this single object
            OtolithsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OtolithsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(OtolithsPeer::OTOLITHSREFNO, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(OtolithsPeer::GENUSUSED, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(OtolithsPeer::SPECIESUSED, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(OtolithsPeer::PLATE, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(OtolithsPeer::FIGURE, $value[4]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                OtolithsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OtolithsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OtolithsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Otoliths object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Otoliths $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OtolithsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OtolithsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(OtolithsPeer::DATABASE_NAME, OtolithsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $otolithsrefno
     * @param   string $genusused
     * @param   string $speciesused
     * @param   string $plate
     * @param   string $figure
     * @param      PropelPDO $con
     * @return Otoliths
     */
    public static function retrieveByPK($otolithsrefno, $genusused, $speciesused, $plate, $figure, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $otolithsrefno, (string) $genusused, (string) $speciesused, (string) $plate, (string) $figure));
         if (null !== ($obj = OtolithsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OtolithsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(OtolithsPeer::DATABASE_NAME);
        $criteria->add(OtolithsPeer::OTOLITHSREFNO, $otolithsrefno);
        $criteria->add(OtolithsPeer::GENUSUSED, $genusused);
        $criteria->add(OtolithsPeer::SPECIESUSED, $speciesused);
        $criteria->add(OtolithsPeer::PLATE, $plate);
        $criteria->add(OtolithsPeer::FIGURE, $figure);
        $v = OtolithsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseOtolithsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOtolithsPeer::buildTableMap();

