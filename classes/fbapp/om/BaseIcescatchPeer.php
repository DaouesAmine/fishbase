<?php


/**
 * Base static class for performing query and update operations on the 'icescatch' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseIcescatchPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'icescatch';

    /** the related Propel class for this table */
    const OM_CLASS = 'Icescatch';

    /** the related TableMap class for this table */
    const TM_CLASS = 'IcescatchTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 46;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 46;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'icescatch.AutoCtr';

    /** the column name for the Specode field */
    const SPECODE = 'icescatch.Specode';

    /** the column name for the Areacode field */
    const AREACODE = 'icescatch.Areacode';

    /** the column name for the Country field */
    const COUNTRY = 'icescatch.Country';

    /** the column name for the CountryCode field */
    const COUNTRYCODE = 'icescatch.CountryCode';

    /** the column name for the C_Code field */
    const C_CODE = 'icescatch.C_Code';

    /** the column name for the Species field */
    const SPECIES = 'icescatch.Species';

    /** the column name for the AlphaCode field */
    const ALPHACODE = 'icescatch.AlphaCode';

    /** the column name for the Area field */
    const AREA = 'icescatch.Area';

    /** the column name for the Area2 field */
    const AREA2 = 'icescatch.Area2';

    /** the column name for the 1973 field */
    const 1973 = 'icescatch.1973';

    /** the column name for the 1974 field */
    const 1974 = 'icescatch.1974';

    /** the column name for the 1975 field */
    const 1975 = 'icescatch.1975';

    /** the column name for the 1976 field */
    const 1976 = 'icescatch.1976';

    /** the column name for the 1977 field */
    const 1977 = 'icescatch.1977';

    /** the column name for the 1978 field */
    const 1978 = 'icescatch.1978';

    /** the column name for the 1979 field */
    const 1979 = 'icescatch.1979';

    /** the column name for the 1980 field */
    const 1980 = 'icescatch.1980';

    /** the column name for the 1981 field */
    const 1981 = 'icescatch.1981';

    /** the column name for the 1982 field */
    const 1982 = 'icescatch.1982';

    /** the column name for the 1983 field */
    const 1983 = 'icescatch.1983';

    /** the column name for the 1984 field */
    const 1984 = 'icescatch.1984';

    /** the column name for the 1985 field */
    const 1985 = 'icescatch.1985';

    /** the column name for the 1986 field */
    const 1986 = 'icescatch.1986';

    /** the column name for the 1987 field */
    const 1987 = 'icescatch.1987';

    /** the column name for the 1988 field */
    const 1988 = 'icescatch.1988';

    /** the column name for the 1989 field */
    const 1989 = 'icescatch.1989';

    /** the column name for the 1990 field */
    const 1990 = 'icescatch.1990';

    /** the column name for the 1991 field */
    const 1991 = 'icescatch.1991';

    /** the column name for the 1992 field */
    const 1992 = 'icescatch.1992';

    /** the column name for the 1993 field */
    const 1993 = 'icescatch.1993';

    /** the column name for the 1994 field */
    const 1994 = 'icescatch.1994';

    /** the column name for the 1995 field */
    const 1995 = 'icescatch.1995';

    /** the column name for the 1996 field */
    const 1996 = 'icescatch.1996';

    /** the column name for the 1997 field */
    const 1997 = 'icescatch.1997';

    /** the column name for the 1998 field */
    const 1998 = 'icescatch.1998';

    /** the column name for the 1999 field */
    const 1999 = 'icescatch.1999';

    /** the column name for the 2000 field */
    const 2000 = 'icescatch.2000';

    /** the column name for the 2001 field */
    const 2001 = 'icescatch.2001';

    /** the column name for the 2002 field */
    const 2002 = 'icescatch.2002';

    /** the column name for the 2003 field */
    const 2003 = 'icescatch.2003';

    /** the column name for the 2004 field */
    const 2004 = 'icescatch.2004';

    /** the column name for the 2005 field */
    const 2005 = 'icescatch.2005';

    /** the column name for the 2006 field */
    const 2006 = 'icescatch.2006';

    /** the column name for the 2007 field */
    const 2007 = 'icescatch.2007';

    /** the column name for the TS field */
    const TS = 'icescatch.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Icescatch objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Icescatch[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. IcescatchPeer::$fieldNames[IcescatchPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Specode', 'Areacode', 'Country', 'Countrycode', 'CCode', 'Species', 'Alphacode', 'Area', 'Area2', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'specode', 'areacode', 'country', 'countrycode', 'cCode', 'species', 'alphacode', 'area', 'area2', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', 'ts', ),
        BasePeer::TYPE_COLNAME => array (IcescatchPeer::AUTOCTR, IcescatchPeer::SPECODE, IcescatchPeer::AREACODE, IcescatchPeer::COUNTRY, IcescatchPeer::COUNTRYCODE, IcescatchPeer::C_CODE, IcescatchPeer::SPECIES, IcescatchPeer::ALPHACODE, IcescatchPeer::AREA, IcescatchPeer::AREA2, IcescatchPeer::1973, IcescatchPeer::1974, IcescatchPeer::1975, IcescatchPeer::1976, IcescatchPeer::1977, IcescatchPeer::1978, IcescatchPeer::1979, IcescatchPeer::1980, IcescatchPeer::1981, IcescatchPeer::1982, IcescatchPeer::1983, IcescatchPeer::1984, IcescatchPeer::1985, IcescatchPeer::1986, IcescatchPeer::1987, IcescatchPeer::1988, IcescatchPeer::1989, IcescatchPeer::1990, IcescatchPeer::1991, IcescatchPeer::1992, IcescatchPeer::1993, IcescatchPeer::1994, IcescatchPeer::1995, IcescatchPeer::1996, IcescatchPeer::1997, IcescatchPeer::1998, IcescatchPeer::1999, IcescatchPeer::2000, IcescatchPeer::2001, IcescatchPeer::2002, IcescatchPeer::2003, IcescatchPeer::2004, IcescatchPeer::2005, IcescatchPeer::2006, IcescatchPeer::2007, IcescatchPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECODE', 'AREACODE', 'COUNTRY', 'COUNTRYCODE', 'C_CODE', 'SPECIES', 'ALPHACODE', 'AREA', 'AREA2', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'Specode', 'Areacode', 'Country', 'CountryCode', 'C_Code', 'Species', 'AlphaCode', 'Area', 'Area2', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. IcescatchPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Specode' => 1, 'Areacode' => 2, 'Country' => 3, 'Countrycode' => 4, 'CCode' => 5, 'Species' => 6, 'Alphacode' => 7, 'Area' => 8, 'Area2' => 9, '1973' => 10, '1974' => 11, '1975' => 12, '1976' => 13, '1977' => 14, '1978' => 15, '1979' => 16, '1980' => 17, '1981' => 18, '1982' => 19, '1983' => 20, '1984' => 21, '1985' => 22, '1986' => 23, '1987' => 24, '1988' => 25, '1989' => 26, '1990' => 27, '1991' => 28, '1992' => 29, '1993' => 30, '1994' => 31, '1995' => 32, '1996' => 33, '1997' => 34, '1998' => 35, '1999' => 36, '2000' => 37, '2001' => 38, '2002' => 39, '2003' => 40, '2004' => 41, '2005' => 42, '2006' => 43, '2007' => 44, 'Ts' => 45, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'specode' => 1, 'areacode' => 2, 'country' => 3, 'countrycode' => 4, 'cCode' => 5, 'species' => 6, 'alphacode' => 7, 'area' => 8, 'area2' => 9, '1973' => 10, '1974' => 11, '1975' => 12, '1976' => 13, '1977' => 14, '1978' => 15, '1979' => 16, '1980' => 17, '1981' => 18, '1982' => 19, '1983' => 20, '1984' => 21, '1985' => 22, '1986' => 23, '1987' => 24, '1988' => 25, '1989' => 26, '1990' => 27, '1991' => 28, '1992' => 29, '1993' => 30, '1994' => 31, '1995' => 32, '1996' => 33, '1997' => 34, '1998' => 35, '1999' => 36, '2000' => 37, '2001' => 38, '2002' => 39, '2003' => 40, '2004' => 41, '2005' => 42, '2006' => 43, '2007' => 44, 'ts' => 45, ),
        BasePeer::TYPE_COLNAME => array (IcescatchPeer::AUTOCTR => 0, IcescatchPeer::SPECODE => 1, IcescatchPeer::AREACODE => 2, IcescatchPeer::COUNTRY => 3, IcescatchPeer::COUNTRYCODE => 4, IcescatchPeer::C_CODE => 5, IcescatchPeer::SPECIES => 6, IcescatchPeer::ALPHACODE => 7, IcescatchPeer::AREA => 8, IcescatchPeer::AREA2 => 9, IcescatchPeer::1973 => 10, IcescatchPeer::1974 => 11, IcescatchPeer::1975 => 12, IcescatchPeer::1976 => 13, IcescatchPeer::1977 => 14, IcescatchPeer::1978 => 15, IcescatchPeer::1979 => 16, IcescatchPeer::1980 => 17, IcescatchPeer::1981 => 18, IcescatchPeer::1982 => 19, IcescatchPeer::1983 => 20, IcescatchPeer::1984 => 21, IcescatchPeer::1985 => 22, IcescatchPeer::1986 => 23, IcescatchPeer::1987 => 24, IcescatchPeer::1988 => 25, IcescatchPeer::1989 => 26, IcescatchPeer::1990 => 27, IcescatchPeer::1991 => 28, IcescatchPeer::1992 => 29, IcescatchPeer::1993 => 30, IcescatchPeer::1994 => 31, IcescatchPeer::1995 => 32, IcescatchPeer::1996 => 33, IcescatchPeer::1997 => 34, IcescatchPeer::1998 => 35, IcescatchPeer::1999 => 36, IcescatchPeer::2000 => 37, IcescatchPeer::2001 => 38, IcescatchPeer::2002 => 39, IcescatchPeer::2003 => 40, IcescatchPeer::2004 => 41, IcescatchPeer::2005 => 42, IcescatchPeer::2006 => 43, IcescatchPeer::2007 => 44, IcescatchPeer::TS => 45, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECODE' => 1, 'AREACODE' => 2, 'COUNTRY' => 3, 'COUNTRYCODE' => 4, 'C_CODE' => 5, 'SPECIES' => 6, 'ALPHACODE' => 7, 'AREA' => 8, 'AREA2' => 9, '1973' => 10, '1974' => 11, '1975' => 12, '1976' => 13, '1977' => 14, '1978' => 15, '1979' => 16, '1980' => 17, '1981' => 18, '1982' => 19, '1983' => 20, '1984' => 21, '1985' => 22, '1986' => 23, '1987' => 24, '1988' => 25, '1989' => 26, '1990' => 27, '1991' => 28, '1992' => 29, '1993' => 30, '1994' => 31, '1995' => 32, '1996' => 33, '1997' => 34, '1998' => 35, '1999' => 36, '2000' => 37, '2001' => 38, '2002' => 39, '2003' => 40, '2004' => 41, '2005' => 42, '2006' => 43, '2007' => 44, 'TS' => 45, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'Specode' => 1, 'Areacode' => 2, 'Country' => 3, 'CountryCode' => 4, 'C_Code' => 5, 'Species' => 6, 'AlphaCode' => 7, 'Area' => 8, 'Area2' => 9, '1973' => 10, '1974' => 11, '1975' => 12, '1976' => 13, '1977' => 14, '1978' => 15, '1979' => 16, '1980' => 17, '1981' => 18, '1982' => 19, '1983' => 20, '1984' => 21, '1985' => 22, '1986' => 23, '1987' => 24, '1988' => 25, '1989' => 26, '1990' => 27, '1991' => 28, '1992' => 29, '1993' => 30, '1994' => 31, '1995' => 32, '1996' => 33, '1997' => 34, '1998' => 35, '1999' => 36, '2000' => 37, '2001' => 38, '2002' => 39, '2003' => 40, '2004' => 41, '2005' => 42, '2006' => 43, '2007' => 44, 'TS' => 45, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, )
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
        $toNames = IcescatchPeer::getFieldNames($toType);
        $key = isset(IcescatchPeer::$fieldKeys[$fromType][$name]) ? IcescatchPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(IcescatchPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, IcescatchPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return IcescatchPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. IcescatchPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(IcescatchPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(IcescatchPeer::AUTOCTR);
            $criteria->addSelectColumn(IcescatchPeer::SPECODE);
            $criteria->addSelectColumn(IcescatchPeer::AREACODE);
            $criteria->addSelectColumn(IcescatchPeer::COUNTRY);
            $criteria->addSelectColumn(IcescatchPeer::COUNTRYCODE);
            $criteria->addSelectColumn(IcescatchPeer::C_CODE);
            $criteria->addSelectColumn(IcescatchPeer::SPECIES);
            $criteria->addSelectColumn(IcescatchPeer::ALPHACODE);
            $criteria->addSelectColumn(IcescatchPeer::AREA);
            $criteria->addSelectColumn(IcescatchPeer::AREA2);
            $criteria->addSelectColumn(IcescatchPeer::1973);
            $criteria->addSelectColumn(IcescatchPeer::1974);
            $criteria->addSelectColumn(IcescatchPeer::1975);
            $criteria->addSelectColumn(IcescatchPeer::1976);
            $criteria->addSelectColumn(IcescatchPeer::1977);
            $criteria->addSelectColumn(IcescatchPeer::1978);
            $criteria->addSelectColumn(IcescatchPeer::1979);
            $criteria->addSelectColumn(IcescatchPeer::1980);
            $criteria->addSelectColumn(IcescatchPeer::1981);
            $criteria->addSelectColumn(IcescatchPeer::1982);
            $criteria->addSelectColumn(IcescatchPeer::1983);
            $criteria->addSelectColumn(IcescatchPeer::1984);
            $criteria->addSelectColumn(IcescatchPeer::1985);
            $criteria->addSelectColumn(IcescatchPeer::1986);
            $criteria->addSelectColumn(IcescatchPeer::1987);
            $criteria->addSelectColumn(IcescatchPeer::1988);
            $criteria->addSelectColumn(IcescatchPeer::1989);
            $criteria->addSelectColumn(IcescatchPeer::1990);
            $criteria->addSelectColumn(IcescatchPeer::1991);
            $criteria->addSelectColumn(IcescatchPeer::1992);
            $criteria->addSelectColumn(IcescatchPeer::1993);
            $criteria->addSelectColumn(IcescatchPeer::1994);
            $criteria->addSelectColumn(IcescatchPeer::1995);
            $criteria->addSelectColumn(IcescatchPeer::1996);
            $criteria->addSelectColumn(IcescatchPeer::1997);
            $criteria->addSelectColumn(IcescatchPeer::1998);
            $criteria->addSelectColumn(IcescatchPeer::1999);
            $criteria->addSelectColumn(IcescatchPeer::2000);
            $criteria->addSelectColumn(IcescatchPeer::2001);
            $criteria->addSelectColumn(IcescatchPeer::2002);
            $criteria->addSelectColumn(IcescatchPeer::2003);
            $criteria->addSelectColumn(IcescatchPeer::2004);
            $criteria->addSelectColumn(IcescatchPeer::2005);
            $criteria->addSelectColumn(IcescatchPeer::2006);
            $criteria->addSelectColumn(IcescatchPeer::2007);
            $criteria->addSelectColumn(IcescatchPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.Specode');
            $criteria->addSelectColumn($alias . '.Areacode');
            $criteria->addSelectColumn($alias . '.Country');
            $criteria->addSelectColumn($alias . '.CountryCode');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.AlphaCode');
            $criteria->addSelectColumn($alias . '.Area');
            $criteria->addSelectColumn($alias . '.Area2');
            $criteria->addSelectColumn($alias . '.1973');
            $criteria->addSelectColumn($alias . '.1974');
            $criteria->addSelectColumn($alias . '.1975');
            $criteria->addSelectColumn($alias . '.1976');
            $criteria->addSelectColumn($alias . '.1977');
            $criteria->addSelectColumn($alias . '.1978');
            $criteria->addSelectColumn($alias . '.1979');
            $criteria->addSelectColumn($alias . '.1980');
            $criteria->addSelectColumn($alias . '.1981');
            $criteria->addSelectColumn($alias . '.1982');
            $criteria->addSelectColumn($alias . '.1983');
            $criteria->addSelectColumn($alias . '.1984');
            $criteria->addSelectColumn($alias . '.1985');
            $criteria->addSelectColumn($alias . '.1986');
            $criteria->addSelectColumn($alias . '.1987');
            $criteria->addSelectColumn($alias . '.1988');
            $criteria->addSelectColumn($alias . '.1989');
            $criteria->addSelectColumn($alias . '.1990');
            $criteria->addSelectColumn($alias . '.1991');
            $criteria->addSelectColumn($alias . '.1992');
            $criteria->addSelectColumn($alias . '.1993');
            $criteria->addSelectColumn($alias . '.1994');
            $criteria->addSelectColumn($alias . '.1995');
            $criteria->addSelectColumn($alias . '.1996');
            $criteria->addSelectColumn($alias . '.1997');
            $criteria->addSelectColumn($alias . '.1998');
            $criteria->addSelectColumn($alias . '.1999');
            $criteria->addSelectColumn($alias . '.2000');
            $criteria->addSelectColumn($alias . '.2001');
            $criteria->addSelectColumn($alias . '.2002');
            $criteria->addSelectColumn($alias . '.2003');
            $criteria->addSelectColumn($alias . '.2004');
            $criteria->addSelectColumn($alias . '.2005');
            $criteria->addSelectColumn($alias . '.2006');
            $criteria->addSelectColumn($alias . '.2007');
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
        $criteria->setPrimaryTableName(IcescatchPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IcescatchPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(IcescatchPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Icescatch
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = IcescatchPeer::doSelect($critcopy, $con);
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
        return IcescatchPeer::populateObjects(IcescatchPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            IcescatchPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(IcescatchPeer::DATABASE_NAME);

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
     * @param Icescatch $obj A Icescatch object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            IcescatchPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Icescatch object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Icescatch) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Icescatch object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(IcescatchPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Icescatch Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(IcescatchPeer::$instances[$key])) {
                return IcescatchPeer::$instances[$key];
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
        foreach (IcescatchPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        IcescatchPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to icescatch
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
        $cls = IcescatchPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = IcescatchPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = IcescatchPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                IcescatchPeer::addInstanceToPool($obj, $key);
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
     * @return array (Icescatch object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = IcescatchPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = IcescatchPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + IcescatchPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = IcescatchPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            IcescatchPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(IcescatchPeer::DATABASE_NAME)->getTable(IcescatchPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseIcescatchPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseIcescatchPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \IcescatchTableMap());
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
        return IcescatchPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Icescatch or Criteria object.
     *
     * @param      mixed $values Criteria or Icescatch object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Icescatch object
        }

        if ($criteria->containsKey(IcescatchPeer::AUTOCTR) && $criteria->keyContainsValue(IcescatchPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.IcescatchPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(IcescatchPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Icescatch or Criteria object.
     *
     * @param      mixed $values Criteria or Icescatch object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(IcescatchPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(IcescatchPeer::AUTOCTR);
            $value = $criteria->remove(IcescatchPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(IcescatchPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(IcescatchPeer::TABLE_NAME);
            }

        } else { // $values is Icescatch object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(IcescatchPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the icescatch table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(IcescatchPeer::TABLE_NAME, $con, IcescatchPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            IcescatchPeer::clearInstancePool();
            IcescatchPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Icescatch or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Icescatch object or primary key or array of primary keys
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
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            IcescatchPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Icescatch) { // it's a model object
            // invalidate the cache for this single object
            IcescatchPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(IcescatchPeer::DATABASE_NAME);
            $criteria->add(IcescatchPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                IcescatchPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(IcescatchPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            IcescatchPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Icescatch object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Icescatch $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(IcescatchPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(IcescatchPeer::TABLE_NAME);

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

        return BasePeer::doValidate(IcescatchPeer::DATABASE_NAME, IcescatchPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Icescatch
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = IcescatchPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(IcescatchPeer::DATABASE_NAME);
        $criteria->add(IcescatchPeer::AUTOCTR, $pk);

        $v = IcescatchPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Icescatch[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IcescatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(IcescatchPeer::DATABASE_NAME);
            $criteria->add(IcescatchPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = IcescatchPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseIcescatchPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseIcescatchPeer::buildTableMap();

