<?php


/**
 * Base static class for performing query and update operations on the 'faoaquacult' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFaoaquacultPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'faoaquacult';

    /** the related Propel class for this table */
    const OM_CLASS = 'Faoaquacult';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FaoaquacultTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 133;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 133;

    /** the column name for the autoctr field */
    const AUTOCTR = 'faoaquacult.autoctr';

    /** the column name for the Country field */
    const COUNTRY = 'faoaquacult.Country';

    /** the column name for the C_Code field */
    const C_CODE = 'faoaquacult.C_Code';

    /** the column name for the Specode field */
    const SPECODE = 'faoaquacult.Specode';

    /** the column name for the Environment field */
    const ENVIRONMENT = 'faoaquacult.Environment';

    /** the column name for the Area field */
    const AREA = 'faoaquacult.Area';

    /** the column name for the Arecode field */
    const ARECODE = 'faoaquacult.Arecode';

    /** the column name for the AreaCode field */
    const AREACODE = 'faoaquacult.AreaCode';

    /** the column name for the 1950 field */
    const 1950 = 'faoaquacult.1950';

    /** the column name for the 1951 field */
    const 1951 = 'faoaquacult.1951';

    /** the column name for the 1952 field */
    const 1952 = 'faoaquacult.1952';

    /** the column name for the 1953 field */
    const 1953 = 'faoaquacult.1953';

    /** the column name for the 1954 field */
    const 1954 = 'faoaquacult.1954';

    /** the column name for the 1955 field */
    const 1955 = 'faoaquacult.1955';

    /** the column name for the 1956 field */
    const 1956 = 'faoaquacult.1956';

    /** the column name for the 1957 field */
    const 1957 = 'faoaquacult.1957';

    /** the column name for the 1958 field */
    const 1958 = 'faoaquacult.1958';

    /** the column name for the 1959 field */
    const 1959 = 'faoaquacult.1959';

    /** the column name for the 1960 field */
    const 1960 = 'faoaquacult.1960';

    /** the column name for the 1961 field */
    const 1961 = 'faoaquacult.1961';

    /** the column name for the 1962 field */
    const 1962 = 'faoaquacult.1962';

    /** the column name for the 1963 field */
    const 1963 = 'faoaquacult.1963';

    /** the column name for the 1964 field */
    const 1964 = 'faoaquacult.1964';

    /** the column name for the 1965 field */
    const 1965 = 'faoaquacult.1965';

    /** the column name for the 1966 field */
    const 1966 = 'faoaquacult.1966';

    /** the column name for the 1967 field */
    const 1967 = 'faoaquacult.1967';

    /** the column name for the 1968 field */
    const 1968 = 'faoaquacult.1968';

    /** the column name for the 1969 field */
    const 1969 = 'faoaquacult.1969';

    /** the column name for the 1970 field */
    const 1970 = 'faoaquacult.1970';

    /** the column name for the 1971 field */
    const 1971 = 'faoaquacult.1971';

    /** the column name for the 1972 field */
    const 1972 = 'faoaquacult.1972';

    /** the column name for the 1973 field */
    const 1973 = 'faoaquacult.1973';

    /** the column name for the 1974 field */
    const 1974 = 'faoaquacult.1974';

    /** the column name for the 1975 field */
    const 1975 = 'faoaquacult.1975';

    /** the column name for the 1976 field */
    const 1976 = 'faoaquacult.1976';

    /** the column name for the 1977 field */
    const 1977 = 'faoaquacult.1977';

    /** the column name for the 1978 field */
    const 1978 = 'faoaquacult.1978';

    /** the column name for the 1979 field */
    const 1979 = 'faoaquacult.1979';

    /** the column name for the 1980 field */
    const 1980 = 'faoaquacult.1980';

    /** the column name for the 1981 field */
    const 1981 = 'faoaquacult.1981';

    /** the column name for the 1982 field */
    const 1982 = 'faoaquacult.1982';

    /** the column name for the 1983 field */
    const 1983 = 'faoaquacult.1983';

    /** the column name for the 1984 field */
    const 1984 = 'faoaquacult.1984';

    /** the column name for the 1985 field */
    const 1985 = 'faoaquacult.1985';

    /** the column name for the 1986 field */
    const 1986 = 'faoaquacult.1986';

    /** the column name for the 1987 field */
    const 1987 = 'faoaquacult.1987';

    /** the column name for the 1988 field */
    const 1988 = 'faoaquacult.1988';

    /** the column name for the 1989 field */
    const 1989 = 'faoaquacult.1989';

    /** the column name for the 1990 field */
    const 1990 = 'faoaquacult.1990';

    /** the column name for the 1991 field */
    const 1991 = 'faoaquacult.1991';

    /** the column name for the 1992 field */
    const 1992 = 'faoaquacult.1992';

    /** the column name for the 1993 field */
    const 1993 = 'faoaquacult.1993';

    /** the column name for the 1994 field */
    const 1994 = 'faoaquacult.1994';

    /** the column name for the 1995 field */
    const 1995 = 'faoaquacult.1995';

    /** the column name for the 1996 field */
    const 1996 = 'faoaquacult.1996';

    /** the column name for the 1997 field */
    const 1997 = 'faoaquacult.1997';

    /** the column name for the 1998 field */
    const 1998 = 'faoaquacult.1998';

    /** the column name for the 1999 field */
    const 1999 = 'faoaquacult.1999';

    /** the column name for the 2000 field */
    const 2000 = 'faoaquacult.2000';

    /** the column name for the 2001 field */
    const 2001 = 'faoaquacult.2001';

    /** the column name for the 2002 field */
    const 2002 = 'faoaquacult.2002';

    /** the column name for the 2003 field */
    const 2003 = 'faoaquacult.2003';

    /** the column name for the 2004 field */
    const 2004 = 'faoaquacult.2004';

    /** the column name for the 2005 field */
    const 2005 = 'faoaquacult.2005';

    /** the column name for the 2006 field */
    const 2006 = 'faoaquacult.2006';

    /** the column name for the 2007 field */
    const 2007 = 'faoaquacult.2007';

    /** the column name for the 2008 field */
    const 2008 = 'faoaquacult.2008';

    /** the column name for the 2009 field */
    const 2009 = 'faoaquacult.2009';

    /** the column name for the 2010 field */
    const 2010 = 'faoaquacult.2010';

    /** the column name for the 2011 field */
    const 2011 = 'faoaquacult.2011';

    /** the column name for the Y01 field */
    const Y01 = 'faoaquacult.Y01';

    /** the column name for the Y02 field */
    const Y02 = 'faoaquacult.Y02';

    /** the column name for the Y03 field */
    const Y03 = 'faoaquacult.Y03';

    /** the column name for the Y04 field */
    const Y04 = 'faoaquacult.Y04';

    /** the column name for the Y05 field */
    const Y05 = 'faoaquacult.Y05';

    /** the column name for the Y06 field */
    const Y06 = 'faoaquacult.Y06';

    /** the column name for the Y07 field */
    const Y07 = 'faoaquacult.Y07';

    /** the column name for the Y08 field */
    const Y08 = 'faoaquacult.Y08';

    /** the column name for the Y09 field */
    const Y09 = 'faoaquacult.Y09';

    /** the column name for the Y10 field */
    const Y10 = 'faoaquacult.Y10';

    /** the column name for the Y11 field */
    const Y11 = 'faoaquacult.Y11';

    /** the column name for the Y12 field */
    const Y12 = 'faoaquacult.Y12';

    /** the column name for the Y13 field */
    const Y13 = 'faoaquacult.Y13';

    /** the column name for the Y14 field */
    const Y14 = 'faoaquacult.Y14';

    /** the column name for the Y15 field */
    const Y15 = 'faoaquacult.Y15';

    /** the column name for the Y16 field */
    const Y16 = 'faoaquacult.Y16';

    /** the column name for the Y17 field */
    const Y17 = 'faoaquacult.Y17';

    /** the column name for the Y18 field */
    const Y18 = 'faoaquacult.Y18';

    /** the column name for the Y19 field */
    const Y19 = 'faoaquacult.Y19';

    /** the column name for the Y20 field */
    const Y20 = 'faoaquacult.Y20';

    /** the column name for the Y21 field */
    const Y21 = 'faoaquacult.Y21';

    /** the column name for the Y22 field */
    const Y22 = 'faoaquacult.Y22';

    /** the column name for the Y23 field */
    const Y23 = 'faoaquacult.Y23';

    /** the column name for the Y24 field */
    const Y24 = 'faoaquacult.Y24';

    /** the column name for the Y25 field */
    const Y25 = 'faoaquacult.Y25';

    /** the column name for the Y26 field */
    const Y26 = 'faoaquacult.Y26';

    /** the column name for the Y27 field */
    const Y27 = 'faoaquacult.Y27';

    /** the column name for the Y28 field */
    const Y28 = 'faoaquacult.Y28';

    /** the column name for the Y29 field */
    const Y29 = 'faoaquacult.Y29';

    /** the column name for the Y30 field */
    const Y30 = 'faoaquacult.Y30';

    /** the column name for the Y31 field */
    const Y31 = 'faoaquacult.Y31';

    /** the column name for the Y32 field */
    const Y32 = 'faoaquacult.Y32';

    /** the column name for the Y33 field */
    const Y33 = 'faoaquacult.Y33';

    /** the column name for the Y34 field */
    const Y34 = 'faoaquacult.Y34';

    /** the column name for the Y35 field */
    const Y35 = 'faoaquacult.Y35';

    /** the column name for the Y36 field */
    const Y36 = 'faoaquacult.Y36';

    /** the column name for the Y37 field */
    const Y37 = 'faoaquacult.Y37';

    /** the column name for the Y38 field */
    const Y38 = 'faoaquacult.Y38';

    /** the column name for the Y39 field */
    const Y39 = 'faoaquacult.Y39';

    /** the column name for the Y40 field */
    const Y40 = 'faoaquacult.Y40';

    /** the column name for the Y41 field */
    const Y41 = 'faoaquacult.Y41';

    /** the column name for the Y42 field */
    const Y42 = 'faoaquacult.Y42';

    /** the column name for the Y43 field */
    const Y43 = 'faoaquacult.Y43';

    /** the column name for the Y44 field */
    const Y44 = 'faoaquacult.Y44';

    /** the column name for the Y45 field */
    const Y45 = 'faoaquacult.Y45';

    /** the column name for the Y46 field */
    const Y46 = 'faoaquacult.Y46';

    /** the column name for the Y47 field */
    const Y47 = 'faoaquacult.Y47';

    /** the column name for the Y48 field */
    const Y48 = 'faoaquacult.Y48';

    /** the column name for the Y49 field */
    const Y49 = 'faoaquacult.Y49';

    /** the column name for the Y50 field */
    const Y50 = 'faoaquacult.Y50';

    /** the column name for the Y51 field */
    const Y51 = 'faoaquacult.Y51';

    /** the column name for the Y52 field */
    const Y52 = 'faoaquacult.Y52';

    /** the column name for the Y53 field */
    const Y53 = 'faoaquacult.Y53';

    /** the column name for the Y54 field */
    const Y54 = 'faoaquacult.Y54';

    /** the column name for the Y55 field */
    const Y55 = 'faoaquacult.Y55';

    /** the column name for the Y56 field */
    const Y56 = 'faoaquacult.Y56';

    /** the column name for the Y57 field */
    const Y57 = 'faoaquacult.Y57';

    /** the column name for the Y58 field */
    const Y58 = 'faoaquacult.Y58';

    /** the column name for the Y59 field */
    const Y59 = 'faoaquacult.Y59';

    /** the column name for the Y60 field */
    const Y60 = 'faoaquacult.Y60';

    /** the column name for the Y61 field */
    const Y61 = 'faoaquacult.Y61';

    /** the column name for the Y62 field */
    const Y62 = 'faoaquacult.Y62';

    /** the column name for the TS field */
    const TS = 'faoaquacult.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Faoaquacult objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Faoaquacult[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FaoaquacultPeer::$fieldNames[FaoaquacultPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Country', 'CCode', 'Specode', 'Environment', 'Area', 'Arecode', 'Areacode', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', 'Y01', 'Y02', 'Y03', 'Y04', 'Y05', 'Y06', 'Y07', 'Y08', 'Y09', 'Y10', 'Y11', 'Y12', 'Y13', 'Y14', 'Y15', 'Y16', 'Y17', 'Y18', 'Y19', 'Y20', 'Y21', 'Y22', 'Y23', 'Y24', 'Y25', 'Y26', 'Y27', 'Y28', 'Y29', 'Y30', 'Y31', 'Y32', 'Y33', 'Y34', 'Y35', 'Y36', 'Y37', 'Y38', 'Y39', 'Y40', 'Y41', 'Y42', 'Y43', 'Y44', 'Y45', 'Y46', 'Y47', 'Y48', 'Y49', 'Y50', 'Y51', 'Y52', 'Y53', 'Y54', 'Y55', 'Y56', 'Y57', 'Y58', 'Y59', 'Y60', 'Y61', 'Y62', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'country', 'cCode', 'specode', 'environment', 'area', 'arecode', 'areacode', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', 'y01', 'y02', 'y03', 'y04', 'y05', 'y06', 'y07', 'y08', 'y09', 'y10', 'y11', 'y12', 'y13', 'y14', 'y15', 'y16', 'y17', 'y18', 'y19', 'y20', 'y21', 'y22', 'y23', 'y24', 'y25', 'y26', 'y27', 'y28', 'y29', 'y30', 'y31', 'y32', 'y33', 'y34', 'y35', 'y36', 'y37', 'y38', 'y39', 'y40', 'y41', 'y42', 'y43', 'y44', 'y45', 'y46', 'y47', 'y48', 'y49', 'y50', 'y51', 'y52', 'y53', 'y54', 'y55', 'y56', 'y57', 'y58', 'y59', 'y60', 'y61', 'y62', 'ts', ),
        BasePeer::TYPE_COLNAME => array (FaoaquacultPeer::AUTOCTR, FaoaquacultPeer::COUNTRY, FaoaquacultPeer::C_CODE, FaoaquacultPeer::SPECODE, FaoaquacultPeer::ENVIRONMENT, FaoaquacultPeer::AREA, FaoaquacultPeer::ARECODE, FaoaquacultPeer::AREACODE, FaoaquacultPeer::1950, FaoaquacultPeer::1951, FaoaquacultPeer::1952, FaoaquacultPeer::1953, FaoaquacultPeer::1954, FaoaquacultPeer::1955, FaoaquacultPeer::1956, FaoaquacultPeer::1957, FaoaquacultPeer::1958, FaoaquacultPeer::1959, FaoaquacultPeer::1960, FaoaquacultPeer::1961, FaoaquacultPeer::1962, FaoaquacultPeer::1963, FaoaquacultPeer::1964, FaoaquacultPeer::1965, FaoaquacultPeer::1966, FaoaquacultPeer::1967, FaoaquacultPeer::1968, FaoaquacultPeer::1969, FaoaquacultPeer::1970, FaoaquacultPeer::1971, FaoaquacultPeer::1972, FaoaquacultPeer::1973, FaoaquacultPeer::1974, FaoaquacultPeer::1975, FaoaquacultPeer::1976, FaoaquacultPeer::1977, FaoaquacultPeer::1978, FaoaquacultPeer::1979, FaoaquacultPeer::1980, FaoaquacultPeer::1981, FaoaquacultPeer::1982, FaoaquacultPeer::1983, FaoaquacultPeer::1984, FaoaquacultPeer::1985, FaoaquacultPeer::1986, FaoaquacultPeer::1987, FaoaquacultPeer::1988, FaoaquacultPeer::1989, FaoaquacultPeer::1990, FaoaquacultPeer::1991, FaoaquacultPeer::1992, FaoaquacultPeer::1993, FaoaquacultPeer::1994, FaoaquacultPeer::1995, FaoaquacultPeer::1996, FaoaquacultPeer::1997, FaoaquacultPeer::1998, FaoaquacultPeer::1999, FaoaquacultPeer::2000, FaoaquacultPeer::2001, FaoaquacultPeer::2002, FaoaquacultPeer::2003, FaoaquacultPeer::2004, FaoaquacultPeer::2005, FaoaquacultPeer::2006, FaoaquacultPeer::2007, FaoaquacultPeer::2008, FaoaquacultPeer::2009, FaoaquacultPeer::2010, FaoaquacultPeer::2011, FaoaquacultPeer::Y01, FaoaquacultPeer::Y02, FaoaquacultPeer::Y03, FaoaquacultPeer::Y04, FaoaquacultPeer::Y05, FaoaquacultPeer::Y06, FaoaquacultPeer::Y07, FaoaquacultPeer::Y08, FaoaquacultPeer::Y09, FaoaquacultPeer::Y10, FaoaquacultPeer::Y11, FaoaquacultPeer::Y12, FaoaquacultPeer::Y13, FaoaquacultPeer::Y14, FaoaquacultPeer::Y15, FaoaquacultPeer::Y16, FaoaquacultPeer::Y17, FaoaquacultPeer::Y18, FaoaquacultPeer::Y19, FaoaquacultPeer::Y20, FaoaquacultPeer::Y21, FaoaquacultPeer::Y22, FaoaquacultPeer::Y23, FaoaquacultPeer::Y24, FaoaquacultPeer::Y25, FaoaquacultPeer::Y26, FaoaquacultPeer::Y27, FaoaquacultPeer::Y28, FaoaquacultPeer::Y29, FaoaquacultPeer::Y30, FaoaquacultPeer::Y31, FaoaquacultPeer::Y32, FaoaquacultPeer::Y33, FaoaquacultPeer::Y34, FaoaquacultPeer::Y35, FaoaquacultPeer::Y36, FaoaquacultPeer::Y37, FaoaquacultPeer::Y38, FaoaquacultPeer::Y39, FaoaquacultPeer::Y40, FaoaquacultPeer::Y41, FaoaquacultPeer::Y42, FaoaquacultPeer::Y43, FaoaquacultPeer::Y44, FaoaquacultPeer::Y45, FaoaquacultPeer::Y46, FaoaquacultPeer::Y47, FaoaquacultPeer::Y48, FaoaquacultPeer::Y49, FaoaquacultPeer::Y50, FaoaquacultPeer::Y51, FaoaquacultPeer::Y52, FaoaquacultPeer::Y53, FaoaquacultPeer::Y54, FaoaquacultPeer::Y55, FaoaquacultPeer::Y56, FaoaquacultPeer::Y57, FaoaquacultPeer::Y58, FaoaquacultPeer::Y59, FaoaquacultPeer::Y60, FaoaquacultPeer::Y61, FaoaquacultPeer::Y62, FaoaquacultPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'COUNTRY', 'C_CODE', 'SPECODE', 'ENVIRONMENT', 'AREA', 'ARECODE', 'AREACODE', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', 'Y01', 'Y02', 'Y03', 'Y04', 'Y05', 'Y06', 'Y07', 'Y08', 'Y09', 'Y10', 'Y11', 'Y12', 'Y13', 'Y14', 'Y15', 'Y16', 'Y17', 'Y18', 'Y19', 'Y20', 'Y21', 'Y22', 'Y23', 'Y24', 'Y25', 'Y26', 'Y27', 'Y28', 'Y29', 'Y30', 'Y31', 'Y32', 'Y33', 'Y34', 'Y35', 'Y36', 'Y37', 'Y38', 'Y39', 'Y40', 'Y41', 'Y42', 'Y43', 'Y44', 'Y45', 'Y46', 'Y47', 'Y48', 'Y49', 'Y50', 'Y51', 'Y52', 'Y53', 'Y54', 'Y55', 'Y56', 'Y57', 'Y58', 'Y59', 'Y60', 'Y61', 'Y62', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Country', 'C_Code', 'Specode', 'Environment', 'Area', 'Arecode', 'AreaCode', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', 'Y01', 'Y02', 'Y03', 'Y04', 'Y05', 'Y06', 'Y07', 'Y08', 'Y09', 'Y10', 'Y11', 'Y12', 'Y13', 'Y14', 'Y15', 'Y16', 'Y17', 'Y18', 'Y19', 'Y20', 'Y21', 'Y22', 'Y23', 'Y24', 'Y25', 'Y26', 'Y27', 'Y28', 'Y29', 'Y30', 'Y31', 'Y32', 'Y33', 'Y34', 'Y35', 'Y36', 'Y37', 'Y38', 'Y39', 'Y40', 'Y41', 'Y42', 'Y43', 'Y44', 'Y45', 'Y46', 'Y47', 'Y48', 'Y49', 'Y50', 'Y51', 'Y52', 'Y53', 'Y54', 'Y55', 'Y56', 'Y57', 'Y58', 'Y59', 'Y60', 'Y61', 'Y62', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FaoaquacultPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Country' => 1, 'CCode' => 2, 'Specode' => 3, 'Environment' => 4, 'Area' => 5, 'Arecode' => 6, 'Areacode' => 7, '1950' => 8, '1951' => 9, '1952' => 10, '1953' => 11, '1954' => 12, '1955' => 13, '1956' => 14, '1957' => 15, '1958' => 16, '1959' => 17, '1960' => 18, '1961' => 19, '1962' => 20, '1963' => 21, '1964' => 22, '1965' => 23, '1966' => 24, '1967' => 25, '1968' => 26, '1969' => 27, '1970' => 28, '1971' => 29, '1972' => 30, '1973' => 31, '1974' => 32, '1975' => 33, '1976' => 34, '1977' => 35, '1978' => 36, '1979' => 37, '1980' => 38, '1981' => 39, '1982' => 40, '1983' => 41, '1984' => 42, '1985' => 43, '1986' => 44, '1987' => 45, '1988' => 46, '1989' => 47, '1990' => 48, '1991' => 49, '1992' => 50, '1993' => 51, '1994' => 52, '1995' => 53, '1996' => 54, '1997' => 55, '1998' => 56, '1999' => 57, '2000' => 58, '2001' => 59, '2002' => 60, '2003' => 61, '2004' => 62, '2005' => 63, '2006' => 64, '2007' => 65, '2008' => 66, '2009' => 67, '2010' => 68, '2011' => 69, 'Y01' => 70, 'Y02' => 71, 'Y03' => 72, 'Y04' => 73, 'Y05' => 74, 'Y06' => 75, 'Y07' => 76, 'Y08' => 77, 'Y09' => 78, 'Y10' => 79, 'Y11' => 80, 'Y12' => 81, 'Y13' => 82, 'Y14' => 83, 'Y15' => 84, 'Y16' => 85, 'Y17' => 86, 'Y18' => 87, 'Y19' => 88, 'Y20' => 89, 'Y21' => 90, 'Y22' => 91, 'Y23' => 92, 'Y24' => 93, 'Y25' => 94, 'Y26' => 95, 'Y27' => 96, 'Y28' => 97, 'Y29' => 98, 'Y30' => 99, 'Y31' => 100, 'Y32' => 101, 'Y33' => 102, 'Y34' => 103, 'Y35' => 104, 'Y36' => 105, 'Y37' => 106, 'Y38' => 107, 'Y39' => 108, 'Y40' => 109, 'Y41' => 110, 'Y42' => 111, 'Y43' => 112, 'Y44' => 113, 'Y45' => 114, 'Y46' => 115, 'Y47' => 116, 'Y48' => 117, 'Y49' => 118, 'Y50' => 119, 'Y51' => 120, 'Y52' => 121, 'Y53' => 122, 'Y54' => 123, 'Y55' => 124, 'Y56' => 125, 'Y57' => 126, 'Y58' => 127, 'Y59' => 128, 'Y60' => 129, 'Y61' => 130, 'Y62' => 131, 'Ts' => 132, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'country' => 1, 'cCode' => 2, 'specode' => 3, 'environment' => 4, 'area' => 5, 'arecode' => 6, 'areacode' => 7, '1950' => 8, '1951' => 9, '1952' => 10, '1953' => 11, '1954' => 12, '1955' => 13, '1956' => 14, '1957' => 15, '1958' => 16, '1959' => 17, '1960' => 18, '1961' => 19, '1962' => 20, '1963' => 21, '1964' => 22, '1965' => 23, '1966' => 24, '1967' => 25, '1968' => 26, '1969' => 27, '1970' => 28, '1971' => 29, '1972' => 30, '1973' => 31, '1974' => 32, '1975' => 33, '1976' => 34, '1977' => 35, '1978' => 36, '1979' => 37, '1980' => 38, '1981' => 39, '1982' => 40, '1983' => 41, '1984' => 42, '1985' => 43, '1986' => 44, '1987' => 45, '1988' => 46, '1989' => 47, '1990' => 48, '1991' => 49, '1992' => 50, '1993' => 51, '1994' => 52, '1995' => 53, '1996' => 54, '1997' => 55, '1998' => 56, '1999' => 57, '2000' => 58, '2001' => 59, '2002' => 60, '2003' => 61, '2004' => 62, '2005' => 63, '2006' => 64, '2007' => 65, '2008' => 66, '2009' => 67, '2010' => 68, '2011' => 69, 'y01' => 70, 'y02' => 71, 'y03' => 72, 'y04' => 73, 'y05' => 74, 'y06' => 75, 'y07' => 76, 'y08' => 77, 'y09' => 78, 'y10' => 79, 'y11' => 80, 'y12' => 81, 'y13' => 82, 'y14' => 83, 'y15' => 84, 'y16' => 85, 'y17' => 86, 'y18' => 87, 'y19' => 88, 'y20' => 89, 'y21' => 90, 'y22' => 91, 'y23' => 92, 'y24' => 93, 'y25' => 94, 'y26' => 95, 'y27' => 96, 'y28' => 97, 'y29' => 98, 'y30' => 99, 'y31' => 100, 'y32' => 101, 'y33' => 102, 'y34' => 103, 'y35' => 104, 'y36' => 105, 'y37' => 106, 'y38' => 107, 'y39' => 108, 'y40' => 109, 'y41' => 110, 'y42' => 111, 'y43' => 112, 'y44' => 113, 'y45' => 114, 'y46' => 115, 'y47' => 116, 'y48' => 117, 'y49' => 118, 'y50' => 119, 'y51' => 120, 'y52' => 121, 'y53' => 122, 'y54' => 123, 'y55' => 124, 'y56' => 125, 'y57' => 126, 'y58' => 127, 'y59' => 128, 'y60' => 129, 'y61' => 130, 'y62' => 131, 'ts' => 132, ),
        BasePeer::TYPE_COLNAME => array (FaoaquacultPeer::AUTOCTR => 0, FaoaquacultPeer::COUNTRY => 1, FaoaquacultPeer::C_CODE => 2, FaoaquacultPeer::SPECODE => 3, FaoaquacultPeer::ENVIRONMENT => 4, FaoaquacultPeer::AREA => 5, FaoaquacultPeer::ARECODE => 6, FaoaquacultPeer::AREACODE => 7, FaoaquacultPeer::1950 => 8, FaoaquacultPeer::1951 => 9, FaoaquacultPeer::1952 => 10, FaoaquacultPeer::1953 => 11, FaoaquacultPeer::1954 => 12, FaoaquacultPeer::1955 => 13, FaoaquacultPeer::1956 => 14, FaoaquacultPeer::1957 => 15, FaoaquacultPeer::1958 => 16, FaoaquacultPeer::1959 => 17, FaoaquacultPeer::1960 => 18, FaoaquacultPeer::1961 => 19, FaoaquacultPeer::1962 => 20, FaoaquacultPeer::1963 => 21, FaoaquacultPeer::1964 => 22, FaoaquacultPeer::1965 => 23, FaoaquacultPeer::1966 => 24, FaoaquacultPeer::1967 => 25, FaoaquacultPeer::1968 => 26, FaoaquacultPeer::1969 => 27, FaoaquacultPeer::1970 => 28, FaoaquacultPeer::1971 => 29, FaoaquacultPeer::1972 => 30, FaoaquacultPeer::1973 => 31, FaoaquacultPeer::1974 => 32, FaoaquacultPeer::1975 => 33, FaoaquacultPeer::1976 => 34, FaoaquacultPeer::1977 => 35, FaoaquacultPeer::1978 => 36, FaoaquacultPeer::1979 => 37, FaoaquacultPeer::1980 => 38, FaoaquacultPeer::1981 => 39, FaoaquacultPeer::1982 => 40, FaoaquacultPeer::1983 => 41, FaoaquacultPeer::1984 => 42, FaoaquacultPeer::1985 => 43, FaoaquacultPeer::1986 => 44, FaoaquacultPeer::1987 => 45, FaoaquacultPeer::1988 => 46, FaoaquacultPeer::1989 => 47, FaoaquacultPeer::1990 => 48, FaoaquacultPeer::1991 => 49, FaoaquacultPeer::1992 => 50, FaoaquacultPeer::1993 => 51, FaoaquacultPeer::1994 => 52, FaoaquacultPeer::1995 => 53, FaoaquacultPeer::1996 => 54, FaoaquacultPeer::1997 => 55, FaoaquacultPeer::1998 => 56, FaoaquacultPeer::1999 => 57, FaoaquacultPeer::2000 => 58, FaoaquacultPeer::2001 => 59, FaoaquacultPeer::2002 => 60, FaoaquacultPeer::2003 => 61, FaoaquacultPeer::2004 => 62, FaoaquacultPeer::2005 => 63, FaoaquacultPeer::2006 => 64, FaoaquacultPeer::2007 => 65, FaoaquacultPeer::2008 => 66, FaoaquacultPeer::2009 => 67, FaoaquacultPeer::2010 => 68, FaoaquacultPeer::2011 => 69, FaoaquacultPeer::Y01 => 70, FaoaquacultPeer::Y02 => 71, FaoaquacultPeer::Y03 => 72, FaoaquacultPeer::Y04 => 73, FaoaquacultPeer::Y05 => 74, FaoaquacultPeer::Y06 => 75, FaoaquacultPeer::Y07 => 76, FaoaquacultPeer::Y08 => 77, FaoaquacultPeer::Y09 => 78, FaoaquacultPeer::Y10 => 79, FaoaquacultPeer::Y11 => 80, FaoaquacultPeer::Y12 => 81, FaoaquacultPeer::Y13 => 82, FaoaquacultPeer::Y14 => 83, FaoaquacultPeer::Y15 => 84, FaoaquacultPeer::Y16 => 85, FaoaquacultPeer::Y17 => 86, FaoaquacultPeer::Y18 => 87, FaoaquacultPeer::Y19 => 88, FaoaquacultPeer::Y20 => 89, FaoaquacultPeer::Y21 => 90, FaoaquacultPeer::Y22 => 91, FaoaquacultPeer::Y23 => 92, FaoaquacultPeer::Y24 => 93, FaoaquacultPeer::Y25 => 94, FaoaquacultPeer::Y26 => 95, FaoaquacultPeer::Y27 => 96, FaoaquacultPeer::Y28 => 97, FaoaquacultPeer::Y29 => 98, FaoaquacultPeer::Y30 => 99, FaoaquacultPeer::Y31 => 100, FaoaquacultPeer::Y32 => 101, FaoaquacultPeer::Y33 => 102, FaoaquacultPeer::Y34 => 103, FaoaquacultPeer::Y35 => 104, FaoaquacultPeer::Y36 => 105, FaoaquacultPeer::Y37 => 106, FaoaquacultPeer::Y38 => 107, FaoaquacultPeer::Y39 => 108, FaoaquacultPeer::Y40 => 109, FaoaquacultPeer::Y41 => 110, FaoaquacultPeer::Y42 => 111, FaoaquacultPeer::Y43 => 112, FaoaquacultPeer::Y44 => 113, FaoaquacultPeer::Y45 => 114, FaoaquacultPeer::Y46 => 115, FaoaquacultPeer::Y47 => 116, FaoaquacultPeer::Y48 => 117, FaoaquacultPeer::Y49 => 118, FaoaquacultPeer::Y50 => 119, FaoaquacultPeer::Y51 => 120, FaoaquacultPeer::Y52 => 121, FaoaquacultPeer::Y53 => 122, FaoaquacultPeer::Y54 => 123, FaoaquacultPeer::Y55 => 124, FaoaquacultPeer::Y56 => 125, FaoaquacultPeer::Y57 => 126, FaoaquacultPeer::Y58 => 127, FaoaquacultPeer::Y59 => 128, FaoaquacultPeer::Y60 => 129, FaoaquacultPeer::Y61 => 130, FaoaquacultPeer::Y62 => 131, FaoaquacultPeer::TS => 132, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'COUNTRY' => 1, 'C_CODE' => 2, 'SPECODE' => 3, 'ENVIRONMENT' => 4, 'AREA' => 5, 'ARECODE' => 6, 'AREACODE' => 7, '1950' => 8, '1951' => 9, '1952' => 10, '1953' => 11, '1954' => 12, '1955' => 13, '1956' => 14, '1957' => 15, '1958' => 16, '1959' => 17, '1960' => 18, '1961' => 19, '1962' => 20, '1963' => 21, '1964' => 22, '1965' => 23, '1966' => 24, '1967' => 25, '1968' => 26, '1969' => 27, '1970' => 28, '1971' => 29, '1972' => 30, '1973' => 31, '1974' => 32, '1975' => 33, '1976' => 34, '1977' => 35, '1978' => 36, '1979' => 37, '1980' => 38, '1981' => 39, '1982' => 40, '1983' => 41, '1984' => 42, '1985' => 43, '1986' => 44, '1987' => 45, '1988' => 46, '1989' => 47, '1990' => 48, '1991' => 49, '1992' => 50, '1993' => 51, '1994' => 52, '1995' => 53, '1996' => 54, '1997' => 55, '1998' => 56, '1999' => 57, '2000' => 58, '2001' => 59, '2002' => 60, '2003' => 61, '2004' => 62, '2005' => 63, '2006' => 64, '2007' => 65, '2008' => 66, '2009' => 67, '2010' => 68, '2011' => 69, 'Y01' => 70, 'Y02' => 71, 'Y03' => 72, 'Y04' => 73, 'Y05' => 74, 'Y06' => 75, 'Y07' => 76, 'Y08' => 77, 'Y09' => 78, 'Y10' => 79, 'Y11' => 80, 'Y12' => 81, 'Y13' => 82, 'Y14' => 83, 'Y15' => 84, 'Y16' => 85, 'Y17' => 86, 'Y18' => 87, 'Y19' => 88, 'Y20' => 89, 'Y21' => 90, 'Y22' => 91, 'Y23' => 92, 'Y24' => 93, 'Y25' => 94, 'Y26' => 95, 'Y27' => 96, 'Y28' => 97, 'Y29' => 98, 'Y30' => 99, 'Y31' => 100, 'Y32' => 101, 'Y33' => 102, 'Y34' => 103, 'Y35' => 104, 'Y36' => 105, 'Y37' => 106, 'Y38' => 107, 'Y39' => 108, 'Y40' => 109, 'Y41' => 110, 'Y42' => 111, 'Y43' => 112, 'Y44' => 113, 'Y45' => 114, 'Y46' => 115, 'Y47' => 116, 'Y48' => 117, 'Y49' => 118, 'Y50' => 119, 'Y51' => 120, 'Y52' => 121, 'Y53' => 122, 'Y54' => 123, 'Y55' => 124, 'Y56' => 125, 'Y57' => 126, 'Y58' => 127, 'Y59' => 128, 'Y60' => 129, 'Y61' => 130, 'Y62' => 131, 'TS' => 132, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Country' => 1, 'C_Code' => 2, 'Specode' => 3, 'Environment' => 4, 'Area' => 5, 'Arecode' => 6, 'AreaCode' => 7, '1950' => 8, '1951' => 9, '1952' => 10, '1953' => 11, '1954' => 12, '1955' => 13, '1956' => 14, '1957' => 15, '1958' => 16, '1959' => 17, '1960' => 18, '1961' => 19, '1962' => 20, '1963' => 21, '1964' => 22, '1965' => 23, '1966' => 24, '1967' => 25, '1968' => 26, '1969' => 27, '1970' => 28, '1971' => 29, '1972' => 30, '1973' => 31, '1974' => 32, '1975' => 33, '1976' => 34, '1977' => 35, '1978' => 36, '1979' => 37, '1980' => 38, '1981' => 39, '1982' => 40, '1983' => 41, '1984' => 42, '1985' => 43, '1986' => 44, '1987' => 45, '1988' => 46, '1989' => 47, '1990' => 48, '1991' => 49, '1992' => 50, '1993' => 51, '1994' => 52, '1995' => 53, '1996' => 54, '1997' => 55, '1998' => 56, '1999' => 57, '2000' => 58, '2001' => 59, '2002' => 60, '2003' => 61, '2004' => 62, '2005' => 63, '2006' => 64, '2007' => 65, '2008' => 66, '2009' => 67, '2010' => 68, '2011' => 69, 'Y01' => 70, 'Y02' => 71, 'Y03' => 72, 'Y04' => 73, 'Y05' => 74, 'Y06' => 75, 'Y07' => 76, 'Y08' => 77, 'Y09' => 78, 'Y10' => 79, 'Y11' => 80, 'Y12' => 81, 'Y13' => 82, 'Y14' => 83, 'Y15' => 84, 'Y16' => 85, 'Y17' => 86, 'Y18' => 87, 'Y19' => 88, 'Y20' => 89, 'Y21' => 90, 'Y22' => 91, 'Y23' => 92, 'Y24' => 93, 'Y25' => 94, 'Y26' => 95, 'Y27' => 96, 'Y28' => 97, 'Y29' => 98, 'Y30' => 99, 'Y31' => 100, 'Y32' => 101, 'Y33' => 102, 'Y34' => 103, 'Y35' => 104, 'Y36' => 105, 'Y37' => 106, 'Y38' => 107, 'Y39' => 108, 'Y40' => 109, 'Y41' => 110, 'Y42' => 111, 'Y43' => 112, 'Y44' => 113, 'Y45' => 114, 'Y46' => 115, 'Y47' => 116, 'Y48' => 117, 'Y49' => 118, 'Y50' => 119, 'Y51' => 120, 'Y52' => 121, 'Y53' => 122, 'Y54' => 123, 'Y55' => 124, 'Y56' => 125, 'Y57' => 126, 'Y58' => 127, 'Y59' => 128, 'Y60' => 129, 'Y61' => 130, 'Y62' => 131, 'TS' => 132, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, )
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
        $toNames = FaoaquacultPeer::getFieldNames($toType);
        $key = isset(FaoaquacultPeer::$fieldKeys[$fromType][$name]) ? FaoaquacultPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FaoaquacultPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FaoaquacultPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FaoaquacultPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FaoaquacultPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FaoaquacultPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FaoaquacultPeer::AUTOCTR);
            $criteria->addSelectColumn(FaoaquacultPeer::COUNTRY);
            $criteria->addSelectColumn(FaoaquacultPeer::C_CODE);
            $criteria->addSelectColumn(FaoaquacultPeer::SPECODE);
            $criteria->addSelectColumn(FaoaquacultPeer::ENVIRONMENT);
            $criteria->addSelectColumn(FaoaquacultPeer::AREA);
            $criteria->addSelectColumn(FaoaquacultPeer::ARECODE);
            $criteria->addSelectColumn(FaoaquacultPeer::AREACODE);
            $criteria->addSelectColumn(FaoaquacultPeer::1950);
            $criteria->addSelectColumn(FaoaquacultPeer::1951);
            $criteria->addSelectColumn(FaoaquacultPeer::1952);
            $criteria->addSelectColumn(FaoaquacultPeer::1953);
            $criteria->addSelectColumn(FaoaquacultPeer::1954);
            $criteria->addSelectColumn(FaoaquacultPeer::1955);
            $criteria->addSelectColumn(FaoaquacultPeer::1956);
            $criteria->addSelectColumn(FaoaquacultPeer::1957);
            $criteria->addSelectColumn(FaoaquacultPeer::1958);
            $criteria->addSelectColumn(FaoaquacultPeer::1959);
            $criteria->addSelectColumn(FaoaquacultPeer::1960);
            $criteria->addSelectColumn(FaoaquacultPeer::1961);
            $criteria->addSelectColumn(FaoaquacultPeer::1962);
            $criteria->addSelectColumn(FaoaquacultPeer::1963);
            $criteria->addSelectColumn(FaoaquacultPeer::1964);
            $criteria->addSelectColumn(FaoaquacultPeer::1965);
            $criteria->addSelectColumn(FaoaquacultPeer::1966);
            $criteria->addSelectColumn(FaoaquacultPeer::1967);
            $criteria->addSelectColumn(FaoaquacultPeer::1968);
            $criteria->addSelectColumn(FaoaquacultPeer::1969);
            $criteria->addSelectColumn(FaoaquacultPeer::1970);
            $criteria->addSelectColumn(FaoaquacultPeer::1971);
            $criteria->addSelectColumn(FaoaquacultPeer::1972);
            $criteria->addSelectColumn(FaoaquacultPeer::1973);
            $criteria->addSelectColumn(FaoaquacultPeer::1974);
            $criteria->addSelectColumn(FaoaquacultPeer::1975);
            $criteria->addSelectColumn(FaoaquacultPeer::1976);
            $criteria->addSelectColumn(FaoaquacultPeer::1977);
            $criteria->addSelectColumn(FaoaquacultPeer::1978);
            $criteria->addSelectColumn(FaoaquacultPeer::1979);
            $criteria->addSelectColumn(FaoaquacultPeer::1980);
            $criteria->addSelectColumn(FaoaquacultPeer::1981);
            $criteria->addSelectColumn(FaoaquacultPeer::1982);
            $criteria->addSelectColumn(FaoaquacultPeer::1983);
            $criteria->addSelectColumn(FaoaquacultPeer::1984);
            $criteria->addSelectColumn(FaoaquacultPeer::1985);
            $criteria->addSelectColumn(FaoaquacultPeer::1986);
            $criteria->addSelectColumn(FaoaquacultPeer::1987);
            $criteria->addSelectColumn(FaoaquacultPeer::1988);
            $criteria->addSelectColumn(FaoaquacultPeer::1989);
            $criteria->addSelectColumn(FaoaquacultPeer::1990);
            $criteria->addSelectColumn(FaoaquacultPeer::1991);
            $criteria->addSelectColumn(FaoaquacultPeer::1992);
            $criteria->addSelectColumn(FaoaquacultPeer::1993);
            $criteria->addSelectColumn(FaoaquacultPeer::1994);
            $criteria->addSelectColumn(FaoaquacultPeer::1995);
            $criteria->addSelectColumn(FaoaquacultPeer::1996);
            $criteria->addSelectColumn(FaoaquacultPeer::1997);
            $criteria->addSelectColumn(FaoaquacultPeer::1998);
            $criteria->addSelectColumn(FaoaquacultPeer::1999);
            $criteria->addSelectColumn(FaoaquacultPeer::2000);
            $criteria->addSelectColumn(FaoaquacultPeer::2001);
            $criteria->addSelectColumn(FaoaquacultPeer::2002);
            $criteria->addSelectColumn(FaoaquacultPeer::2003);
            $criteria->addSelectColumn(FaoaquacultPeer::2004);
            $criteria->addSelectColumn(FaoaquacultPeer::2005);
            $criteria->addSelectColumn(FaoaquacultPeer::2006);
            $criteria->addSelectColumn(FaoaquacultPeer::2007);
            $criteria->addSelectColumn(FaoaquacultPeer::2008);
            $criteria->addSelectColumn(FaoaquacultPeer::2009);
            $criteria->addSelectColumn(FaoaquacultPeer::2010);
            $criteria->addSelectColumn(FaoaquacultPeer::2011);
            $criteria->addSelectColumn(FaoaquacultPeer::Y01);
            $criteria->addSelectColumn(FaoaquacultPeer::Y02);
            $criteria->addSelectColumn(FaoaquacultPeer::Y03);
            $criteria->addSelectColumn(FaoaquacultPeer::Y04);
            $criteria->addSelectColumn(FaoaquacultPeer::Y05);
            $criteria->addSelectColumn(FaoaquacultPeer::Y06);
            $criteria->addSelectColumn(FaoaquacultPeer::Y07);
            $criteria->addSelectColumn(FaoaquacultPeer::Y08);
            $criteria->addSelectColumn(FaoaquacultPeer::Y09);
            $criteria->addSelectColumn(FaoaquacultPeer::Y10);
            $criteria->addSelectColumn(FaoaquacultPeer::Y11);
            $criteria->addSelectColumn(FaoaquacultPeer::Y12);
            $criteria->addSelectColumn(FaoaquacultPeer::Y13);
            $criteria->addSelectColumn(FaoaquacultPeer::Y14);
            $criteria->addSelectColumn(FaoaquacultPeer::Y15);
            $criteria->addSelectColumn(FaoaquacultPeer::Y16);
            $criteria->addSelectColumn(FaoaquacultPeer::Y17);
            $criteria->addSelectColumn(FaoaquacultPeer::Y18);
            $criteria->addSelectColumn(FaoaquacultPeer::Y19);
            $criteria->addSelectColumn(FaoaquacultPeer::Y20);
            $criteria->addSelectColumn(FaoaquacultPeer::Y21);
            $criteria->addSelectColumn(FaoaquacultPeer::Y22);
            $criteria->addSelectColumn(FaoaquacultPeer::Y23);
            $criteria->addSelectColumn(FaoaquacultPeer::Y24);
            $criteria->addSelectColumn(FaoaquacultPeer::Y25);
            $criteria->addSelectColumn(FaoaquacultPeer::Y26);
            $criteria->addSelectColumn(FaoaquacultPeer::Y27);
            $criteria->addSelectColumn(FaoaquacultPeer::Y28);
            $criteria->addSelectColumn(FaoaquacultPeer::Y29);
            $criteria->addSelectColumn(FaoaquacultPeer::Y30);
            $criteria->addSelectColumn(FaoaquacultPeer::Y31);
            $criteria->addSelectColumn(FaoaquacultPeer::Y32);
            $criteria->addSelectColumn(FaoaquacultPeer::Y33);
            $criteria->addSelectColumn(FaoaquacultPeer::Y34);
            $criteria->addSelectColumn(FaoaquacultPeer::Y35);
            $criteria->addSelectColumn(FaoaquacultPeer::Y36);
            $criteria->addSelectColumn(FaoaquacultPeer::Y37);
            $criteria->addSelectColumn(FaoaquacultPeer::Y38);
            $criteria->addSelectColumn(FaoaquacultPeer::Y39);
            $criteria->addSelectColumn(FaoaquacultPeer::Y40);
            $criteria->addSelectColumn(FaoaquacultPeer::Y41);
            $criteria->addSelectColumn(FaoaquacultPeer::Y42);
            $criteria->addSelectColumn(FaoaquacultPeer::Y43);
            $criteria->addSelectColumn(FaoaquacultPeer::Y44);
            $criteria->addSelectColumn(FaoaquacultPeer::Y45);
            $criteria->addSelectColumn(FaoaquacultPeer::Y46);
            $criteria->addSelectColumn(FaoaquacultPeer::Y47);
            $criteria->addSelectColumn(FaoaquacultPeer::Y48);
            $criteria->addSelectColumn(FaoaquacultPeer::Y49);
            $criteria->addSelectColumn(FaoaquacultPeer::Y50);
            $criteria->addSelectColumn(FaoaquacultPeer::Y51);
            $criteria->addSelectColumn(FaoaquacultPeer::Y52);
            $criteria->addSelectColumn(FaoaquacultPeer::Y53);
            $criteria->addSelectColumn(FaoaquacultPeer::Y54);
            $criteria->addSelectColumn(FaoaquacultPeer::Y55);
            $criteria->addSelectColumn(FaoaquacultPeer::Y56);
            $criteria->addSelectColumn(FaoaquacultPeer::Y57);
            $criteria->addSelectColumn(FaoaquacultPeer::Y58);
            $criteria->addSelectColumn(FaoaquacultPeer::Y59);
            $criteria->addSelectColumn(FaoaquacultPeer::Y60);
            $criteria->addSelectColumn(FaoaquacultPeer::Y61);
            $criteria->addSelectColumn(FaoaquacultPeer::Y62);
            $criteria->addSelectColumn(FaoaquacultPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Country');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Specode');
            $criteria->addSelectColumn($alias . '.Environment');
            $criteria->addSelectColumn($alias . '.Area');
            $criteria->addSelectColumn($alias . '.Arecode');
            $criteria->addSelectColumn($alias . '.AreaCode');
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
            $criteria->addSelectColumn($alias . '.Y01');
            $criteria->addSelectColumn($alias . '.Y02');
            $criteria->addSelectColumn($alias . '.Y03');
            $criteria->addSelectColumn($alias . '.Y04');
            $criteria->addSelectColumn($alias . '.Y05');
            $criteria->addSelectColumn($alias . '.Y06');
            $criteria->addSelectColumn($alias . '.Y07');
            $criteria->addSelectColumn($alias . '.Y08');
            $criteria->addSelectColumn($alias . '.Y09');
            $criteria->addSelectColumn($alias . '.Y10');
            $criteria->addSelectColumn($alias . '.Y11');
            $criteria->addSelectColumn($alias . '.Y12');
            $criteria->addSelectColumn($alias . '.Y13');
            $criteria->addSelectColumn($alias . '.Y14');
            $criteria->addSelectColumn($alias . '.Y15');
            $criteria->addSelectColumn($alias . '.Y16');
            $criteria->addSelectColumn($alias . '.Y17');
            $criteria->addSelectColumn($alias . '.Y18');
            $criteria->addSelectColumn($alias . '.Y19');
            $criteria->addSelectColumn($alias . '.Y20');
            $criteria->addSelectColumn($alias . '.Y21');
            $criteria->addSelectColumn($alias . '.Y22');
            $criteria->addSelectColumn($alias . '.Y23');
            $criteria->addSelectColumn($alias . '.Y24');
            $criteria->addSelectColumn($alias . '.Y25');
            $criteria->addSelectColumn($alias . '.Y26');
            $criteria->addSelectColumn($alias . '.Y27');
            $criteria->addSelectColumn($alias . '.Y28');
            $criteria->addSelectColumn($alias . '.Y29');
            $criteria->addSelectColumn($alias . '.Y30');
            $criteria->addSelectColumn($alias . '.Y31');
            $criteria->addSelectColumn($alias . '.Y32');
            $criteria->addSelectColumn($alias . '.Y33');
            $criteria->addSelectColumn($alias . '.Y34');
            $criteria->addSelectColumn($alias . '.Y35');
            $criteria->addSelectColumn($alias . '.Y36');
            $criteria->addSelectColumn($alias . '.Y37');
            $criteria->addSelectColumn($alias . '.Y38');
            $criteria->addSelectColumn($alias . '.Y39');
            $criteria->addSelectColumn($alias . '.Y40');
            $criteria->addSelectColumn($alias . '.Y41');
            $criteria->addSelectColumn($alias . '.Y42');
            $criteria->addSelectColumn($alias . '.Y43');
            $criteria->addSelectColumn($alias . '.Y44');
            $criteria->addSelectColumn($alias . '.Y45');
            $criteria->addSelectColumn($alias . '.Y46');
            $criteria->addSelectColumn($alias . '.Y47');
            $criteria->addSelectColumn($alias . '.Y48');
            $criteria->addSelectColumn($alias . '.Y49');
            $criteria->addSelectColumn($alias . '.Y50');
            $criteria->addSelectColumn($alias . '.Y51');
            $criteria->addSelectColumn($alias . '.Y52');
            $criteria->addSelectColumn($alias . '.Y53');
            $criteria->addSelectColumn($alias . '.Y54');
            $criteria->addSelectColumn($alias . '.Y55');
            $criteria->addSelectColumn($alias . '.Y56');
            $criteria->addSelectColumn($alias . '.Y57');
            $criteria->addSelectColumn($alias . '.Y58');
            $criteria->addSelectColumn($alias . '.Y59');
            $criteria->addSelectColumn($alias . '.Y60');
            $criteria->addSelectColumn($alias . '.Y61');
            $criteria->addSelectColumn($alias . '.Y62');
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
        $criteria->setPrimaryTableName(FaoaquacultPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FaoaquacultPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FaoaquacultPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FaoaquacultPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Faoaquacult
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FaoaquacultPeer::doSelect($critcopy, $con);
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
        return FaoaquacultPeer::populateObjects(FaoaquacultPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FaoaquacultPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FaoaquacultPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FaoaquacultPeer::DATABASE_NAME);

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
     * @param Faoaquacult $obj A Faoaquacult object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            FaoaquacultPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Faoaquacult object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Faoaquacult) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Faoaquacult object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FaoaquacultPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Faoaquacult Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FaoaquacultPeer::$instances[$key])) {
                return FaoaquacultPeer::$instances[$key];
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
        foreach (FaoaquacultPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FaoaquacultPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to faoaquacult
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
        $cls = FaoaquacultPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FaoaquacultPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FaoaquacultPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FaoaquacultPeer::addInstanceToPool($obj, $key);
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
     * @return array (Faoaquacult object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FaoaquacultPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FaoaquacultPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FaoaquacultPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FaoaquacultPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FaoaquacultPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FaoaquacultPeer::DATABASE_NAME)->getTable(FaoaquacultPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFaoaquacultPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFaoaquacultPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FaoaquacultTableMap());
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
        return FaoaquacultPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Faoaquacult or Criteria object.
     *
     * @param      mixed $values Criteria or Faoaquacult object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaoaquacultPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Faoaquacult object
        }


        // Set the correct dbName
        $criteria->setDbName(FaoaquacultPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Faoaquacult or Criteria object.
     *
     * @param      mixed $values Criteria or Faoaquacult object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaoaquacultPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FaoaquacultPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FaoaquacultPeer::AUTOCTR);
            $value = $criteria->remove(FaoaquacultPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(FaoaquacultPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FaoaquacultPeer::TABLE_NAME);
            }

        } else { // $values is Faoaquacult object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FaoaquacultPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the faoaquacult table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaoaquacultPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FaoaquacultPeer::TABLE_NAME, $con, FaoaquacultPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FaoaquacultPeer::clearInstancePool();
            FaoaquacultPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Faoaquacult or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Faoaquacult object or primary key or array of primary keys
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
            $con = Propel::getConnection(FaoaquacultPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FaoaquacultPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Faoaquacult) { // it's a model object
            // invalidate the cache for this single object
            FaoaquacultPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FaoaquacultPeer::DATABASE_NAME);
            $criteria->add(FaoaquacultPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FaoaquacultPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FaoaquacultPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FaoaquacultPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Faoaquacult object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Faoaquacult $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FaoaquacultPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FaoaquacultPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FaoaquacultPeer::DATABASE_NAME, FaoaquacultPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Faoaquacult
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FaoaquacultPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FaoaquacultPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FaoaquacultPeer::DATABASE_NAME);
        $criteria->add(FaoaquacultPeer::AUTOCTR, $pk);

        $v = FaoaquacultPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Faoaquacult[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaoaquacultPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FaoaquacultPeer::DATABASE_NAME);
            $criteria->add(FaoaquacultPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = FaoaquacultPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFaoaquacultPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFaoaquacultPeer::buildTableMap();

