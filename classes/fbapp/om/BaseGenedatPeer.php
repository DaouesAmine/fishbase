<?php


/**
 * Base static class for performing query and update operations on the 'genedat' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseGenedatPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'genedat';

    /** the related Propel class for this table */
    const OM_CLASS = 'Genedat';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GenedatTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 26;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 26;

    /** the column name for the autoctr field */
    const AUTOCTR = 'genedat.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'genedat.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'genedat.SpecCode';

    /** the column name for the GeneDatRefNo field */
    const GENEDATREFNO = 'genedat.GeneDatRefNo';

    /** the column name for the Locality field */
    const LOCALITY = 'genedat.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'genedat.C_Code';

    /** the column name for the Trait field */
    const TRAIT = 'genedat.Trait';

    /** the column name for the Comment field */
    const COMMENT = 'genedat.Comment';

    /** the column name for the MeanTrait field */
    const MEANTRAIT = 'genedat.MeanTrait';

    /** the column name for the UnitofTrait field */
    const UNITOFTRAIT = 'genedat.UnitofTrait';

    /** the column name for the StandardDeviation field */
    const STANDARDDEVIATION = 'genedat.StandardDeviation';

    /** the column name for the Heritability field */
    const HERITABILITY = 'genedat.Heritability';

    /** the column name for the StandardError field */
    const STANDARDERROR = 'genedat.StandardError';

    /** the column name for the MethodHeritab field */
    const METHODHERITAB = 'genedat.MethodHeritab';

    /** the column name for the CommentHeritab field */
    const COMMENTHERITAB = 'genedat.CommentHeritab';

    /** the column name for the Selection field */
    const SELECTION = 'genedat.Selection';

    /** the column name for the MethodSelection field */
    const METHODSELECTION = 'genedat.MethodSelection';

    /** the column name for the Response field */
    const RESPONSE = 'genedat.Response';

    /** the column name for the CommentSelection field */
    const COMMENTSELECTION = 'genedat.CommentSelection';

    /** the column name for the Entered field */
    const ENTERED = 'genedat.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'genedat.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'genedat.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'genedat.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'genedat.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'genedat.DateChecked';

    /** the column name for the TS field */
    const TS = 'genedat.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Genedat objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Genedat[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GenedatPeer::$fieldNames[GenedatPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Genedatrefno', 'Locality', 'CCode', 'Trait', 'Comment', 'Meantrait', 'Unitoftrait', 'Standarddeviation', 'Heritability', 'Standarderror', 'Methodheritab', 'Commentheritab', 'Selection', 'Methodselection', 'Response', 'Commentselection', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'genedatrefno', 'locality', 'cCode', 'trait', 'comment', 'meantrait', 'unitoftrait', 'standarddeviation', 'heritability', 'standarderror', 'methodheritab', 'commentheritab', 'selection', 'methodselection', 'response', 'commentselection', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (GenedatPeer::AUTOCTR, GenedatPeer::STOCKCODE, GenedatPeer::SPECCODE, GenedatPeer::GENEDATREFNO, GenedatPeer::LOCALITY, GenedatPeer::C_CODE, GenedatPeer::TRAIT, GenedatPeer::COMMENT, GenedatPeer::MEANTRAIT, GenedatPeer::UNITOFTRAIT, GenedatPeer::STANDARDDEVIATION, GenedatPeer::HERITABILITY, GenedatPeer::STANDARDERROR, GenedatPeer::METHODHERITAB, GenedatPeer::COMMENTHERITAB, GenedatPeer::SELECTION, GenedatPeer::METHODSELECTION, GenedatPeer::RESPONSE, GenedatPeer::COMMENTSELECTION, GenedatPeer::ENTERED, GenedatPeer::DATEENTERED, GenedatPeer::MODIFIED, GenedatPeer::DATEMODIFIED, GenedatPeer::EXPERT, GenedatPeer::DATECHECKED, GenedatPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'GENEDATREFNO', 'LOCALITY', 'C_CODE', 'TRAIT', 'COMMENT', 'MEANTRAIT', 'UNITOFTRAIT', 'STANDARDDEVIATION', 'HERITABILITY', 'STANDARDERROR', 'METHODHERITAB', 'COMMENTHERITAB', 'SELECTION', 'METHODSELECTION', 'RESPONSE', 'COMMENTSELECTION', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'GeneDatRefNo', 'Locality', 'C_Code', 'Trait', 'Comment', 'MeanTrait', 'UnitofTrait', 'StandardDeviation', 'Heritability', 'StandardError', 'MethodHeritab', 'CommentHeritab', 'Selection', 'MethodSelection', 'Response', 'CommentSelection', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GenedatPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Genedatrefno' => 3, 'Locality' => 4, 'CCode' => 5, 'Trait' => 6, 'Comment' => 7, 'Meantrait' => 8, 'Unitoftrait' => 9, 'Standarddeviation' => 10, 'Heritability' => 11, 'Standarderror' => 12, 'Methodheritab' => 13, 'Commentheritab' => 14, 'Selection' => 15, 'Methodselection' => 16, 'Response' => 17, 'Commentselection' => 18, 'Entered' => 19, 'Dateentered' => 20, 'Modified' => 21, 'Datemodified' => 22, 'Expert' => 23, 'Datechecked' => 24, 'Ts' => 25, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'genedatrefno' => 3, 'locality' => 4, 'cCode' => 5, 'trait' => 6, 'comment' => 7, 'meantrait' => 8, 'unitoftrait' => 9, 'standarddeviation' => 10, 'heritability' => 11, 'standarderror' => 12, 'methodheritab' => 13, 'commentheritab' => 14, 'selection' => 15, 'methodselection' => 16, 'response' => 17, 'commentselection' => 18, 'entered' => 19, 'dateentered' => 20, 'modified' => 21, 'datemodified' => 22, 'expert' => 23, 'datechecked' => 24, 'ts' => 25, ),
        BasePeer::TYPE_COLNAME => array (GenedatPeer::AUTOCTR => 0, GenedatPeer::STOCKCODE => 1, GenedatPeer::SPECCODE => 2, GenedatPeer::GENEDATREFNO => 3, GenedatPeer::LOCALITY => 4, GenedatPeer::C_CODE => 5, GenedatPeer::TRAIT => 6, GenedatPeer::COMMENT => 7, GenedatPeer::MEANTRAIT => 8, GenedatPeer::UNITOFTRAIT => 9, GenedatPeer::STANDARDDEVIATION => 10, GenedatPeer::HERITABILITY => 11, GenedatPeer::STANDARDERROR => 12, GenedatPeer::METHODHERITAB => 13, GenedatPeer::COMMENTHERITAB => 14, GenedatPeer::SELECTION => 15, GenedatPeer::METHODSELECTION => 16, GenedatPeer::RESPONSE => 17, GenedatPeer::COMMENTSELECTION => 18, GenedatPeer::ENTERED => 19, GenedatPeer::DATEENTERED => 20, GenedatPeer::MODIFIED => 21, GenedatPeer::DATEMODIFIED => 22, GenedatPeer::EXPERT => 23, GenedatPeer::DATECHECKED => 24, GenedatPeer::TS => 25, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'GENEDATREFNO' => 3, 'LOCALITY' => 4, 'C_CODE' => 5, 'TRAIT' => 6, 'COMMENT' => 7, 'MEANTRAIT' => 8, 'UNITOFTRAIT' => 9, 'STANDARDDEVIATION' => 10, 'HERITABILITY' => 11, 'STANDARDERROR' => 12, 'METHODHERITAB' => 13, 'COMMENTHERITAB' => 14, 'SELECTION' => 15, 'METHODSELECTION' => 16, 'RESPONSE' => 17, 'COMMENTSELECTION' => 18, 'ENTERED' => 19, 'DATEENTERED' => 20, 'MODIFIED' => 21, 'DATEMODIFIED' => 22, 'EXPERT' => 23, 'DATECHECKED' => 24, 'TS' => 25, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'GeneDatRefNo' => 3, 'Locality' => 4, 'C_Code' => 5, 'Trait' => 6, 'Comment' => 7, 'MeanTrait' => 8, 'UnitofTrait' => 9, 'StandardDeviation' => 10, 'Heritability' => 11, 'StandardError' => 12, 'MethodHeritab' => 13, 'CommentHeritab' => 14, 'Selection' => 15, 'MethodSelection' => 16, 'Response' => 17, 'CommentSelection' => 18, 'Entered' => 19, 'DateEntered' => 20, 'Modified' => 21, 'DateModified' => 22, 'Expert' => 23, 'DateChecked' => 24, 'TS' => 25, ),
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
        $toNames = GenedatPeer::getFieldNames($toType);
        $key = isset(GenedatPeer::$fieldKeys[$fromType][$name]) ? GenedatPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GenedatPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GenedatPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GenedatPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GenedatPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GenedatPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GenedatPeer::AUTOCTR);
            $criteria->addSelectColumn(GenedatPeer::STOCKCODE);
            $criteria->addSelectColumn(GenedatPeer::SPECCODE);
            $criteria->addSelectColumn(GenedatPeer::GENEDATREFNO);
            $criteria->addSelectColumn(GenedatPeer::LOCALITY);
            $criteria->addSelectColumn(GenedatPeer::C_CODE);
            $criteria->addSelectColumn(GenedatPeer::TRAIT);
            $criteria->addSelectColumn(GenedatPeer::COMMENT);
            $criteria->addSelectColumn(GenedatPeer::MEANTRAIT);
            $criteria->addSelectColumn(GenedatPeer::UNITOFTRAIT);
            $criteria->addSelectColumn(GenedatPeer::STANDARDDEVIATION);
            $criteria->addSelectColumn(GenedatPeer::HERITABILITY);
            $criteria->addSelectColumn(GenedatPeer::STANDARDERROR);
            $criteria->addSelectColumn(GenedatPeer::METHODHERITAB);
            $criteria->addSelectColumn(GenedatPeer::COMMENTHERITAB);
            $criteria->addSelectColumn(GenedatPeer::SELECTION);
            $criteria->addSelectColumn(GenedatPeer::METHODSELECTION);
            $criteria->addSelectColumn(GenedatPeer::RESPONSE);
            $criteria->addSelectColumn(GenedatPeer::COMMENTSELECTION);
            $criteria->addSelectColumn(GenedatPeer::ENTERED);
            $criteria->addSelectColumn(GenedatPeer::DATEENTERED);
            $criteria->addSelectColumn(GenedatPeer::MODIFIED);
            $criteria->addSelectColumn(GenedatPeer::DATEMODIFIED);
            $criteria->addSelectColumn(GenedatPeer::EXPERT);
            $criteria->addSelectColumn(GenedatPeer::DATECHECKED);
            $criteria->addSelectColumn(GenedatPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.GeneDatRefNo');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Trait');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.MeanTrait');
            $criteria->addSelectColumn($alias . '.UnitofTrait');
            $criteria->addSelectColumn($alias . '.StandardDeviation');
            $criteria->addSelectColumn($alias . '.Heritability');
            $criteria->addSelectColumn($alias . '.StandardError');
            $criteria->addSelectColumn($alias . '.MethodHeritab');
            $criteria->addSelectColumn($alias . '.CommentHeritab');
            $criteria->addSelectColumn($alias . '.Selection');
            $criteria->addSelectColumn($alias . '.MethodSelection');
            $criteria->addSelectColumn($alias . '.Response');
            $criteria->addSelectColumn($alias . '.CommentSelection');
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
        $criteria->setPrimaryTableName(GenedatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GenedatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GenedatPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Genedat
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GenedatPeer::doSelect($critcopy, $con);
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
        return GenedatPeer::populateObjects(GenedatPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GenedatPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GenedatPeer::DATABASE_NAME);

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
     * @param Genedat $obj A Genedat object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            GenedatPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Genedat object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Genedat) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Genedat object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GenedatPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Genedat Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GenedatPeer::$instances[$key])) {
                return GenedatPeer::$instances[$key];
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
        foreach (GenedatPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GenedatPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to genedat
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
        $cls = GenedatPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GenedatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GenedatPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GenedatPeer::addInstanceToPool($obj, $key);
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
     * @return array (Genedat object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GenedatPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GenedatPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GenedatPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GenedatPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GenedatPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GenedatPeer::DATABASE_NAME)->getTable(GenedatPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGenedatPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGenedatPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GenedatTableMap());
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
        return GenedatPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Genedat or Criteria object.
     *
     * @param      mixed $values Criteria or Genedat object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Genedat object
        }

        if ($criteria->containsKey(GenedatPeer::AUTOCTR) && $criteria->keyContainsValue(GenedatPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.GenedatPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(GenedatPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Genedat or Criteria object.
     *
     * @param      mixed $values Criteria or Genedat object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GenedatPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GenedatPeer::AUTOCTR);
            $value = $criteria->remove(GenedatPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(GenedatPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GenedatPeer::TABLE_NAME);
            }

        } else { // $values is Genedat object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GenedatPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the genedat table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GenedatPeer::TABLE_NAME, $con, GenedatPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GenedatPeer::clearInstancePool();
            GenedatPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Genedat or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Genedat object or primary key or array of primary keys
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
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GenedatPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Genedat) { // it's a model object
            // invalidate the cache for this single object
            GenedatPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GenedatPeer::DATABASE_NAME);
            $criteria->add(GenedatPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GenedatPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GenedatPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GenedatPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Genedat object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Genedat $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GenedatPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GenedatPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GenedatPeer::DATABASE_NAME, GenedatPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Genedat
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GenedatPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GenedatPeer::DATABASE_NAME);
        $criteria->add(GenedatPeer::AUTOCTR, $pk);

        $v = GenedatPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Genedat[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GenedatPeer::DATABASE_NAME);
            $criteria->add(GenedatPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = GenedatPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGenedatPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGenedatPeer::buildTableMap();

