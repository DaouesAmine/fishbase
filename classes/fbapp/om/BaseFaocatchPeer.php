<?php


/**
 * Base static class for performing query and update operations on the 'faocatch' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFaocatchPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'faocatch';

    /** the related Propel class for this table */
    const OM_CLASS = 'Faocatch';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FaocatchTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 71;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 71;

    /** the column name for the autoctr field */
    const AUTOCTR = 'faocatch.autoctr';

    /** the column name for the Country field */
    const COUNTRY = 'faocatch.Country';

    /** the column name for the C_Code field */
    const C_CODE = 'faocatch.C_Code';

    /** the column name for the SPECODE field */
    const SPECODE = 'faocatch.SPECODE';

    /** the column name for the Area field */
    const AREA = 'faocatch.Area';

    /** the column name for the Arecode field */
    const ARECODE = 'faocatch.Arecode';

    /** the column name for the AreaCode field */
    const AREACODE = 'faocatch.AreaCode';

    /** the column name for the Measure field */
    const MEASURE = 'faocatch.Measure';

    /** the column name for the 1950 field */
    const 1950 = 'faocatch.1950';

    /** the column name for the 1951 field */
    const 1951 = 'faocatch.1951';

    /** the column name for the 1952 field */
    const 1952 = 'faocatch.1952';

    /** the column name for the 1953 field */
    const 1953 = 'faocatch.1953';

    /** the column name for the 1954 field */
    const 1954 = 'faocatch.1954';

    /** the column name for the 1955 field */
    const 1955 = 'faocatch.1955';

    /** the column name for the 1956 field */
    const 1956 = 'faocatch.1956';

    /** the column name for the 1957 field */
    const 1957 = 'faocatch.1957';

    /** the column name for the 1958 field */
    const 1958 = 'faocatch.1958';

    /** the column name for the 1959 field */
    const 1959 = 'faocatch.1959';

    /** the column name for the 1960 field */
    const 1960 = 'faocatch.1960';

    /** the column name for the 1961 field */
    const 1961 = 'faocatch.1961';

    /** the column name for the 1962 field */
    const 1962 = 'faocatch.1962';

    /** the column name for the 1963 field */
    const 1963 = 'faocatch.1963';

    /** the column name for the 1964 field */
    const 1964 = 'faocatch.1964';

    /** the column name for the 1965 field */
    const 1965 = 'faocatch.1965';

    /** the column name for the 1966 field */
    const 1966 = 'faocatch.1966';

    /** the column name for the 1967 field */
    const 1967 = 'faocatch.1967';

    /** the column name for the 1968 field */
    const 1968 = 'faocatch.1968';

    /** the column name for the 1969 field */
    const 1969 = 'faocatch.1969';

    /** the column name for the 1970 field */
    const 1970 = 'faocatch.1970';

    /** the column name for the 1971 field */
    const 1971 = 'faocatch.1971';

    /** the column name for the 1972 field */
    const 1972 = 'faocatch.1972';

    /** the column name for the 1973 field */
    const 1973 = 'faocatch.1973';

    /** the column name for the 1974 field */
    const 1974 = 'faocatch.1974';

    /** the column name for the 1975 field */
    const 1975 = 'faocatch.1975';

    /** the column name for the 1976 field */
    const 1976 = 'faocatch.1976';

    /** the column name for the 1977 field */
    const 1977 = 'faocatch.1977';

    /** the column name for the 1978 field */
    const 1978 = 'faocatch.1978';

    /** the column name for the 1979 field */
    const 1979 = 'faocatch.1979';

    /** the column name for the 1980 field */
    const 1980 = 'faocatch.1980';

    /** the column name for the 1981 field */
    const 1981 = 'faocatch.1981';

    /** the column name for the 1982 field */
    const 1982 = 'faocatch.1982';

    /** the column name for the 1983 field */
    const 1983 = 'faocatch.1983';

    /** the column name for the 1984 field */
    const 1984 = 'faocatch.1984';

    /** the column name for the 1985 field */
    const 1985 = 'faocatch.1985';

    /** the column name for the 1986 field */
    const 1986 = 'faocatch.1986';

    /** the column name for the 1987 field */
    const 1987 = 'faocatch.1987';

    /** the column name for the 1988 field */
    const 1988 = 'faocatch.1988';

    /** the column name for the 1989 field */
    const 1989 = 'faocatch.1989';

    /** the column name for the 1990 field */
    const 1990 = 'faocatch.1990';

    /** the column name for the 1991 field */
    const 1991 = 'faocatch.1991';

    /** the column name for the 1992 field */
    const 1992 = 'faocatch.1992';

    /** the column name for the 1993 field */
    const 1993 = 'faocatch.1993';

    /** the column name for the 1994 field */
    const 1994 = 'faocatch.1994';

    /** the column name for the 1995 field */
    const 1995 = 'faocatch.1995';

    /** the column name for the 1996 field */
    const 1996 = 'faocatch.1996';

    /** the column name for the 1997 field */
    const 1997 = 'faocatch.1997';

    /** the column name for the 1998 field */
    const 1998 = 'faocatch.1998';

    /** the column name for the 1999 field */
    const 1999 = 'faocatch.1999';

    /** the column name for the 2000 field */
    const 2000 = 'faocatch.2000';

    /** the column name for the 2001 field */
    const 2001 = 'faocatch.2001';

    /** the column name for the 2002 field */
    const 2002 = 'faocatch.2002';

    /** the column name for the 2003 field */
    const 2003 = 'faocatch.2003';

    /** the column name for the 2004 field */
    const 2004 = 'faocatch.2004';

    /** the column name for the 2005 field */
    const 2005 = 'faocatch.2005';

    /** the column name for the 2006 field */
    const 2006 = 'faocatch.2006';

    /** the column name for the 2007 field */
    const 2007 = 'faocatch.2007';

    /** the column name for the 2008 field */
    const 2008 = 'faocatch.2008';

    /** the column name for the 2009 field */
    const 2009 = 'faocatch.2009';

    /** the column name for the 2010 field */
    const 2010 = 'faocatch.2010';

    /** the column name for the 2011 field */
    const 2011 = 'faocatch.2011';

    /** the column name for the TS field */
    const TS = 'faocatch.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Faocatch objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Faocatch[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FaocatchPeer::$fieldNames[FaocatchPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Country', 'CCode', 'Specode', 'Area', 'Arecode', 'Areacode', 'Measure', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'country', 'cCode', 'specode', 'area', 'arecode', 'areacode', 'measure', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', 'ts', ),
        BasePeer::TYPE_COLNAME => array (FaocatchPeer::AUTOCTR, FaocatchPeer::COUNTRY, FaocatchPeer::C_CODE, FaocatchPeer::SPECODE, FaocatchPeer::AREA, FaocatchPeer::ARECODE, FaocatchPeer::AREACODE, FaocatchPeer::MEASURE, FaocatchPeer::1950, FaocatchPeer::1951, FaocatchPeer::1952, FaocatchPeer::1953, FaocatchPeer::1954, FaocatchPeer::1955, FaocatchPeer::1956, FaocatchPeer::1957, FaocatchPeer::1958, FaocatchPeer::1959, FaocatchPeer::1960, FaocatchPeer::1961, FaocatchPeer::1962, FaocatchPeer::1963, FaocatchPeer::1964, FaocatchPeer::1965, FaocatchPeer::1966, FaocatchPeer::1967, FaocatchPeer::1968, FaocatchPeer::1969, FaocatchPeer::1970, FaocatchPeer::1971, FaocatchPeer::1972, FaocatchPeer::1973, FaocatchPeer::1974, FaocatchPeer::1975, FaocatchPeer::1976, FaocatchPeer::1977, FaocatchPeer::1978, FaocatchPeer::1979, FaocatchPeer::1980, FaocatchPeer::1981, FaocatchPeer::1982, FaocatchPeer::1983, FaocatchPeer::1984, FaocatchPeer::1985, FaocatchPeer::1986, FaocatchPeer::1987, FaocatchPeer::1988, FaocatchPeer::1989, FaocatchPeer::1990, FaocatchPeer::1991, FaocatchPeer::1992, FaocatchPeer::1993, FaocatchPeer::1994, FaocatchPeer::1995, FaocatchPeer::1996, FaocatchPeer::1997, FaocatchPeer::1998, FaocatchPeer::1999, FaocatchPeer::2000, FaocatchPeer::2001, FaocatchPeer::2002, FaocatchPeer::2003, FaocatchPeer::2004, FaocatchPeer::2005, FaocatchPeer::2006, FaocatchPeer::2007, FaocatchPeer::2008, FaocatchPeer::2009, FaocatchPeer::2010, FaocatchPeer::2011, FaocatchPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'COUNTRY', 'C_CODE', 'SPECODE', 'AREA', 'ARECODE', 'AREACODE', 'MEASURE', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Country', 'C_Code', 'SPECODE', 'Area', 'Arecode', 'AreaCode', 'Measure', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FaocatchPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Country' => 1, 'CCode' => 2, 'Specode' => 3, 'Area' => 4, 'Arecode' => 5, 'Areacode' => 6, 'Measure' => 7, '1950' => 8, '1951' => 9, '1952' => 10, '1953' => 11, '1954' => 12, '1955' => 13, '1956' => 14, '1957' => 15, '1958' => 16, '1959' => 17, '1960' => 18, '1961' => 19, '1962' => 20, '1963' => 21, '1964' => 22, '1965' => 23, '1966' => 24, '1967' => 25, '1968' => 26, '1969' => 27, '1970' => 28, '1971' => 29, '1972' => 30, '1973' => 31, '1974' => 32, '1975' => 33, '1976' => 34, '1977' => 35, '1978' => 36, '1979' => 37, '1980' => 38, '1981' => 39, '1982' => 40, '1983' => 41, '1984' => 42, '1985' => 43, '1986' => 44, '1987' => 45, '1988' => 46, '1989' => 47, '1990' => 48, '1991' => 49, '1992' => 50, '1993' => 51, '1994' => 52, '1995' => 53, '1996' => 54, '1997' => 55, '1998' => 56, '1999' => 57, '2000' => 58, '2001' => 59, '2002' => 60, '2003' => 61, '2004' => 62, '2005' => 63, '2006' => 64, '2007' => 65, '2008' => 66, '2009' => 67, '2010' => 68, '2011' => 69, 'Ts' => 70, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'country' => 1, 'cCode' => 2, 'specode' => 3, 'area' => 4, 'arecode' => 5, 'areacode' => 6, 'measure' => 7, '1950' => 8, '1951' => 9, '1952' => 10, '1953' => 11, '1954' => 12, '1955' => 13, '1956' => 14, '1957' => 15, '1958' => 16, '1959' => 17, '1960' => 18, '1961' => 19, '1962' => 20, '1963' => 21, '1964' => 22, '1965' => 23, '1966' => 24, '1967' => 25, '1968' => 26, '1969' => 27, '1970' => 28, '1971' => 29, '1972' => 30, '1973' => 31, '1974' => 32, '1975' => 33, '1976' => 34, '1977' => 35, '1978' => 36, '1979' => 37, '1980' => 38, '1981' => 39, '1982' => 40, '1983' => 41, '1984' => 42, '1985' => 43, '1986' => 44, '1987' => 45, '1988' => 46, '1989' => 47, '1990' => 48, '1991' => 49, '1992' => 50, '1993' => 51, '1994' => 52, '1995' => 53, '1996' => 54, '1997' => 55, '1998' => 56, '1999' => 57, '2000' => 58, '2001' => 59, '2002' => 60, '2003' => 61, '2004' => 62, '2005' => 63, '2006' => 64, '2007' => 65, '2008' => 66, '2009' => 67, '2010' => 68, '2011' => 69, 'ts' => 70, ),
        BasePeer::TYPE_COLNAME => array (FaocatchPeer::AUTOCTR => 0, FaocatchPeer::COUNTRY => 1, FaocatchPeer::C_CODE => 2, FaocatchPeer::SPECODE => 3, FaocatchPeer::AREA => 4, FaocatchPeer::ARECODE => 5, FaocatchPeer::AREACODE => 6, FaocatchPeer::MEASURE => 7, FaocatchPeer::1950 => 8, FaocatchPeer::1951 => 9, FaocatchPeer::1952 => 10, FaocatchPeer::1953 => 11, FaocatchPeer::1954 => 12, FaocatchPeer::1955 => 13, FaocatchPeer::1956 => 14, FaocatchPeer::1957 => 15, FaocatchPeer::1958 => 16, FaocatchPeer::1959 => 17, FaocatchPeer::1960 => 18, FaocatchPeer::1961 => 19, FaocatchPeer::1962 => 20, FaocatchPeer::1963 => 21, FaocatchPeer::1964 => 22, FaocatchPeer::1965 => 23, FaocatchPeer::1966 => 24, FaocatchPeer::1967 => 25, FaocatchPeer::1968 => 26, FaocatchPeer::1969 => 27, FaocatchPeer::1970 => 28, FaocatchPeer::1971 => 29, FaocatchPeer::1972 => 30, FaocatchPeer::1973 => 31, FaocatchPeer::1974 => 32, FaocatchPeer::1975 => 33, FaocatchPeer::1976 => 34, FaocatchPeer::1977 => 35, FaocatchPeer::1978 => 36, FaocatchPeer::1979 => 37, FaocatchPeer::1980 => 38, FaocatchPeer::1981 => 39, FaocatchPeer::1982 => 40, FaocatchPeer::1983 => 41, FaocatchPeer::1984 => 42, FaocatchPeer::1985 => 43, FaocatchPeer::1986 => 44, FaocatchPeer::1987 => 45, FaocatchPeer::1988 => 46, FaocatchPeer::1989 => 47, FaocatchPeer::1990 => 48, FaocatchPeer::1991 => 49, FaocatchPeer::1992 => 50, FaocatchPeer::1993 => 51, FaocatchPeer::1994 => 52, FaocatchPeer::1995 => 53, FaocatchPeer::1996 => 54, FaocatchPeer::1997 => 55, FaocatchPeer::1998 => 56, FaocatchPeer::1999 => 57, FaocatchPeer::2000 => 58, FaocatchPeer::2001 => 59, FaocatchPeer::2002 => 60, FaocatchPeer::2003 => 61, FaocatchPeer::2004 => 62, FaocatchPeer::2005 => 63, FaocatchPeer::2006 => 64, FaocatchPeer::2007 => 65, FaocatchPeer::2008 => 66, FaocatchPeer::2009 => 67, FaocatchPeer::2010 => 68, FaocatchPeer::2011 => 69, FaocatchPeer::TS => 70, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'COUNTRY' => 1, 'C_CODE' => 2, 'SPECODE' => 3, 'AREA' => 4, 'ARECODE' => 5, 'AREACODE' => 6, 'MEASURE' => 7, '1950' => 8, '1951' => 9, '1952' => 10, '1953' => 11, '1954' => 12, '1955' => 13, '1956' => 14, '1957' => 15, '1958' => 16, '1959' => 17, '1960' => 18, '1961' => 19, '1962' => 20, '1963' => 21, '1964' => 22, '1965' => 23, '1966' => 24, '1967' => 25, '1968' => 26, '1969' => 27, '1970' => 28, '1971' => 29, '1972' => 30, '1973' => 31, '1974' => 32, '1975' => 33, '1976' => 34, '1977' => 35, '1978' => 36, '1979' => 37, '1980' => 38, '1981' => 39, '1982' => 40, '1983' => 41, '1984' => 42, '1985' => 43, '1986' => 44, '1987' => 45, '1988' => 46, '1989' => 47, '1990' => 48, '1991' => 49, '1992' => 50, '1993' => 51, '1994' => 52, '1995' => 53, '1996' => 54, '1997' => 55, '1998' => 56, '1999' => 57, '2000' => 58, '2001' => 59, '2002' => 60, '2003' => 61, '2004' => 62, '2005' => 63, '2006' => 64, '2007' => 65, '2008' => 66, '2009' => 67, '2010' => 68, '2011' => 69, 'TS' => 70, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Country' => 1, 'C_Code' => 2, 'SPECODE' => 3, 'Area' => 4, 'Arecode' => 5, 'AreaCode' => 6, 'Measure' => 7, '1950' => 8, '1951' => 9, '1952' => 10, '1953' => 11, '1954' => 12, '1955' => 13, '1956' => 14, '1957' => 15, '1958' => 16, '1959' => 17, '1960' => 18, '1961' => 19, '1962' => 20, '1963' => 21, '1964' => 22, '1965' => 23, '1966' => 24, '1967' => 25, '1968' => 26, '1969' => 27, '1970' => 28, '1971' => 29, '1972' => 30, '1973' => 31, '1974' => 32, '1975' => 33, '1976' => 34, '1977' => 35, '1978' => 36, '1979' => 37, '1980' => 38, '1981' => 39, '1982' => 40, '1983' => 41, '1984' => 42, '1985' => 43, '1986' => 44, '1987' => 45, '1988' => 46, '1989' => 47, '1990' => 48, '1991' => 49, '1992' => 50, '1993' => 51, '1994' => 52, '1995' => 53, '1996' => 54, '1997' => 55, '1998' => 56, '1999' => 57, '2000' => 58, '2001' => 59, '2002' => 60, '2003' => 61, '2004' => 62, '2005' => 63, '2006' => 64, '2007' => 65, '2008' => 66, '2009' => 67, '2010' => 68, '2011' => 69, 'TS' => 70, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, )
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
        $toNames = FaocatchPeer::getFieldNames($toType);
        $key = isset(FaocatchPeer::$fieldKeys[$fromType][$name]) ? FaocatchPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FaocatchPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FaocatchPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FaocatchPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FaocatchPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FaocatchPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FaocatchPeer::AUTOCTR);
            $criteria->addSelectColumn(FaocatchPeer::COUNTRY);
            $criteria->addSelectColumn(FaocatchPeer::C_CODE);
            $criteria->addSelectColumn(FaocatchPeer::SPECODE);
            $criteria->addSelectColumn(FaocatchPeer::AREA);
            $criteria->addSelectColumn(FaocatchPeer::ARECODE);
            $criteria->addSelectColumn(FaocatchPeer::AREACODE);
            $criteria->addSelectColumn(FaocatchPeer::MEASURE);
            $criteria->addSelectColumn(FaocatchPeer::1950);
            $criteria->addSelectColumn(FaocatchPeer::1951);
            $criteria->addSelectColumn(FaocatchPeer::1952);
            $criteria->addSelectColumn(FaocatchPeer::1953);
            $criteria->addSelectColumn(FaocatchPeer::1954);
            $criteria->addSelectColumn(FaocatchPeer::1955);
            $criteria->addSelectColumn(FaocatchPeer::1956);
            $criteria->addSelectColumn(FaocatchPeer::1957);
            $criteria->addSelectColumn(FaocatchPeer::1958);
            $criteria->addSelectColumn(FaocatchPeer::1959);
            $criteria->addSelectColumn(FaocatchPeer::1960);
            $criteria->addSelectColumn(FaocatchPeer::1961);
            $criteria->addSelectColumn(FaocatchPeer::1962);
            $criteria->addSelectColumn(FaocatchPeer::1963);
            $criteria->addSelectColumn(FaocatchPeer::1964);
            $criteria->addSelectColumn(FaocatchPeer::1965);
            $criteria->addSelectColumn(FaocatchPeer::1966);
            $criteria->addSelectColumn(FaocatchPeer::1967);
            $criteria->addSelectColumn(FaocatchPeer::1968);
            $criteria->addSelectColumn(FaocatchPeer::1969);
            $criteria->addSelectColumn(FaocatchPeer::1970);
            $criteria->addSelectColumn(FaocatchPeer::1971);
            $criteria->addSelectColumn(FaocatchPeer::1972);
            $criteria->addSelectColumn(FaocatchPeer::1973);
            $criteria->addSelectColumn(FaocatchPeer::1974);
            $criteria->addSelectColumn(FaocatchPeer::1975);
            $criteria->addSelectColumn(FaocatchPeer::1976);
            $criteria->addSelectColumn(FaocatchPeer::1977);
            $criteria->addSelectColumn(FaocatchPeer::1978);
            $criteria->addSelectColumn(FaocatchPeer::1979);
            $criteria->addSelectColumn(FaocatchPeer::1980);
            $criteria->addSelectColumn(FaocatchPeer::1981);
            $criteria->addSelectColumn(FaocatchPeer::1982);
            $criteria->addSelectColumn(FaocatchPeer::1983);
            $criteria->addSelectColumn(FaocatchPeer::1984);
            $criteria->addSelectColumn(FaocatchPeer::1985);
            $criteria->addSelectColumn(FaocatchPeer::1986);
            $criteria->addSelectColumn(FaocatchPeer::1987);
            $criteria->addSelectColumn(FaocatchPeer::1988);
            $criteria->addSelectColumn(FaocatchPeer::1989);
            $criteria->addSelectColumn(FaocatchPeer::1990);
            $criteria->addSelectColumn(FaocatchPeer::1991);
            $criteria->addSelectColumn(FaocatchPeer::1992);
            $criteria->addSelectColumn(FaocatchPeer::1993);
            $criteria->addSelectColumn(FaocatchPeer::1994);
            $criteria->addSelectColumn(FaocatchPeer::1995);
            $criteria->addSelectColumn(FaocatchPeer::1996);
            $criteria->addSelectColumn(FaocatchPeer::1997);
            $criteria->addSelectColumn(FaocatchPeer::1998);
            $criteria->addSelectColumn(FaocatchPeer::1999);
            $criteria->addSelectColumn(FaocatchPeer::2000);
            $criteria->addSelectColumn(FaocatchPeer::2001);
            $criteria->addSelectColumn(FaocatchPeer::2002);
            $criteria->addSelectColumn(FaocatchPeer::2003);
            $criteria->addSelectColumn(FaocatchPeer::2004);
            $criteria->addSelectColumn(FaocatchPeer::2005);
            $criteria->addSelectColumn(FaocatchPeer::2006);
            $criteria->addSelectColumn(FaocatchPeer::2007);
            $criteria->addSelectColumn(FaocatchPeer::2008);
            $criteria->addSelectColumn(FaocatchPeer::2009);
            $criteria->addSelectColumn(FaocatchPeer::2010);
            $criteria->addSelectColumn(FaocatchPeer::2011);
            $criteria->addSelectColumn(FaocatchPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Country');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.SPECODE');
            $criteria->addSelectColumn($alias . '.Area');
            $criteria->addSelectColumn($alias . '.Arecode');
            $criteria->addSelectColumn($alias . '.AreaCode');
            $criteria->addSelectColumn($alias . '.Measure');
            $criteria->addSelectColumn($alias . '.1950');
            $criteria->addSelectColumn($alias . '.1951');
            $criteria->addSelectColumn($alias . '.1952');
            $criteria->addSelectColumn($alias . '.1953');
            $criteria->addSelectColumn($alias . '.1954');
            $criteria->addSelectColumn($alias . '.1955');
            $criteria->addSelectColumn($alias . '.1956');
            $criteria->addSelectColumn($alias . '.1957');
            $criteria->addSelectColumn($alias . '.1958');
            $criteria->addSelectColumn($alias . '.1959');
            $criteria->addSelectColumn($alias . '.1960');
            $criteria->addSelectColumn($alias . '.1961');
            $criteria->addSelectColumn($alias . '.1962');
            $criteria->addSelectColumn($alias . '.1963');
            $criteria->addSelectColumn($alias . '.1964');
            $criteria->addSelectColumn($alias . '.1965');
            $criteria->addSelectColumn($alias . '.1966');
            $criteria->addSelectColumn($alias . '.1967');
            $criteria->addSelectColumn($alias . '.1968');
            $criteria->addSelectColumn($alias . '.1969');
            $criteria->addSelectColumn($alias . '.1970');
            $criteria->addSelectColumn($alias . '.1971');
            $criteria->addSelectColumn($alias . '.1972');
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
            $criteria->addSelectColumn($alias . '.2008');
            $criteria->addSelectColumn($alias . '.2009');
            $criteria->addSelectColumn($alias . '.2010');
            $criteria->addSelectColumn($alias . '.2011');
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
        $criteria->setPrimaryTableName(FaocatchPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FaocatchPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FaocatchPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FaocatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Faocatch
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FaocatchPeer::doSelect($critcopy, $con);
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
        return FaocatchPeer::populateObjects(FaocatchPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FaocatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FaocatchPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FaocatchPeer::DATABASE_NAME);

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
     * @param Faocatch $obj A Faocatch object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            FaocatchPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Faocatch object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Faocatch) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Faocatch object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FaocatchPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Faocatch Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FaocatchPeer::$instances[$key])) {
                return FaocatchPeer::$instances[$key];
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
        foreach (FaocatchPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FaocatchPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to faocatch
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
        $cls = FaocatchPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FaocatchPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FaocatchPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FaocatchPeer::addInstanceToPool($obj, $key);
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
     * @return array (Faocatch object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FaocatchPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FaocatchPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FaocatchPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FaocatchPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FaocatchPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FaocatchPeer::DATABASE_NAME)->getTable(FaocatchPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFaocatchPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFaocatchPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FaocatchTableMap());
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
        return FaocatchPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Faocatch or Criteria object.
     *
     * @param      mixed $values Criteria or Faocatch object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaocatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Faocatch object
        }

        if ($criteria->containsKey(FaocatchPeer::AUTOCTR) && $criteria->keyContainsValue(FaocatchPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FaocatchPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FaocatchPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Faocatch or Criteria object.
     *
     * @param      mixed $values Criteria or Faocatch object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaocatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FaocatchPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FaocatchPeer::AUTOCTR);
            $value = $criteria->remove(FaocatchPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(FaocatchPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FaocatchPeer::TABLE_NAME);
            }

        } else { // $values is Faocatch object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FaocatchPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the faocatch table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaocatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FaocatchPeer::TABLE_NAME, $con, FaocatchPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FaocatchPeer::clearInstancePool();
            FaocatchPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Faocatch or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Faocatch object or primary key or array of primary keys
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
            $con = Propel::getConnection(FaocatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FaocatchPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Faocatch) { // it's a model object
            // invalidate the cache for this single object
            FaocatchPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FaocatchPeer::DATABASE_NAME);
            $criteria->add(FaocatchPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FaocatchPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FaocatchPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FaocatchPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Faocatch object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Faocatch $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FaocatchPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FaocatchPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FaocatchPeer::DATABASE_NAME, FaocatchPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Faocatch
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FaocatchPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FaocatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FaocatchPeer::DATABASE_NAME);
        $criteria->add(FaocatchPeer::AUTOCTR, $pk);

        $v = FaocatchPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Faocatch[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaocatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FaocatchPeer::DATABASE_NAME);
            $criteria->add(FaocatchPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = FaocatchPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFaocatchPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFaocatchPeer::buildTableMap();

