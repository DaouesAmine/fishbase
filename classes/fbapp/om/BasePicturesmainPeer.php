<?php


/**
 * Base static class for performing query and update operations on the 'picturesmain' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BasePicturesmainPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'picturesmain';

    /** the related Propel class for this table */
    const OM_CLASS = 'Picturesmain';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PicturesmainTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 53;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 53;

    /** the column name for the autoctr field */
    const AUTOCTR = 'picturesmain.autoctr';

    /** the column name for the SpecCode field */
    const SPECCODE = 'picturesmain.SpecCode';

    /** the column name for the PicGenus field */
    const PICGENUS = 'picturesmain.PicGenus';

    /** the column name for the PicSpecies field */
    const PICSPECIES = 'picturesmain.PicSpecies';

    /** the column name for the Syncode field */
    const SYNCODE = 'picturesmain.Syncode';

    /** the column name for the PicName field */
    const PICNAME = 'picturesmain.PicName';

    /** the column name for the Scanned field */
    const SCANNED = 'picturesmain.Scanned';

    /** the column name for the PictureType field */
    const PICTURETYPE = 'picturesmain.PictureType';

    /** the column name for the PicType field */
    const PICTYPE = 'picturesmain.PicType';

    /** the column name for the Rank field */
    const RANK = 'picturesmain.Rank';

    /** the column name for the BestPic field */
    const BESTPIC = 'picturesmain.BestPic';

    /** the column name for the Score field */
    const SCORE = 'picturesmain.Score';

    /** the column name for the Occurrence field */
    const OCCURRENCE = 'picturesmain.Occurrence';

    /** the column name for the CDROM field */
    const CDROM = 'picturesmain.CDROM';

    /** the column name for the LifeStage field */
    const LIFESTAGE = 'picturesmain.LifeStage';

    /** the column name for the Size field */
    const SIZE = 'picturesmain.Size';

    /** the column name for the LengthType field */
    const LENGTHTYPE = 'picturesmain.LengthType';

    /** the column name for the Size2 field */
    const SIZE2 = 'picturesmain.Size2';

    /** the column name for the LenghtType2 field */
    const LENGHTTYPE2 = 'picturesmain.LenghtType2';

    /** the column name for the Locality field */
    const LOCALITY = 'picturesmain.Locality';

    /** the column name for the Province field */
    const PROVINCE = 'picturesmain.Province';

    /** the column name for the LatDeg field */
    const LATDEG = 'picturesmain.LatDeg';

    /** the column name for the LatMin field */
    const LATMIN = 'picturesmain.LatMin';

    /** the column name for the NorthSouth field */
    const NORTHSOUTH = 'picturesmain.NorthSouth';

    /** the column name for the LongDeg field */
    const LONGDEG = 'picturesmain.LongDeg';

    /** the column name for the LongMin field */
    const LONGMIN = 'picturesmain.LongMin';

    /** the column name for the EastWest field */
    const EASTWEST = 'picturesmain.EastWest';

    /** the column name for the Depth field */
    const DEPTH = 'picturesmain.Depth';

    /** the column name for the Remark field */
    const REMARK = 'picturesmain.Remark';

    /** the column name for the Date field */
    const DATE = 'picturesmain.Date';

    /** the column name for the C_Code field */
    const C_CODE = 'picturesmain.C_Code';

    /** the column name for the AuthName field */
    const AUTHNAME = 'picturesmain.AuthName';

    /** the column name for the Reference field */
    const REFERENCE = 'picturesmain.Reference';

    /** the column name for the PageCode field */
    const PAGECODE = 'picturesmain.PageCode';

    /** the column name for the URL field */
    const URL = 'picturesmain.URL';

    /** the column name for the LogoFile field */
    const LOGOFILE = 'picturesmain.LogoFile';

    /** the column name for the Copyright field */
    const COPYRIGHT = 'picturesmain.Copyright';

    /** the column name for the Comment field */
    const COMMENT = 'picturesmain.Comment';

    /** the column name for the PublicDomain field */
    const PUBLICDOMAIN = 'picturesmain.PublicDomain';

    /** the column name for the NewPic field */
    const NEWPIC = 'picturesmain.NewPic';

    /** the column name for the PicPreferred field */
    const PICPREFERRED = 'picturesmain.PicPreferred';

    /** the column name for the PicPreferredMale field */
    const PICPREFERREDMALE = 'picturesmain.PicPreferredMale';

    /** the column name for the PicPreferredFem field */
    const PICPREFERREDFEM = 'picturesmain.PicPreferredFem';

    /** the column name for the PicPreferredJuv field */
    const PICPREFERREDJUV = 'picturesmain.PicPreferredJuv';

    /** the column name for the EOL field */
    const EOL = 'picturesmain.EOL';

    /** the column name for the Taxo field */
    const TAXO = 'picturesmain.Taxo';

    /** the column name for the Entered field */
    const ENTERED = 'picturesmain.Entered';

    /** the column name for the Dateentered field */
    const DATEENTERED = 'picturesmain.Dateentered';

    /** the column name for the Modified field */
    const MODIFIED = 'picturesmain.Modified';

    /** the column name for the Datemodified field */
    const DATEMODIFIED = 'picturesmain.Datemodified';

    /** the column name for the Expert field */
    const EXPERT = 'picturesmain.Expert';

    /** the column name for the Datechecked field */
    const DATECHECKED = 'picturesmain.Datechecked';

    /** the column name for the TS field */
    const TS = 'picturesmain.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Picturesmain objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Picturesmain[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PicturesmainPeer::$fieldNames[PicturesmainPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Picgenus', 'Picspecies', 'Syncode', 'Picname', 'Scanned', 'Picturetype', 'Pictype', 'Rank', 'Bestpic', 'Score', 'Occurrence', 'Cdrom', 'Lifestage', 'Size', 'Lengthtype', 'Size2', 'Lenghttype2', 'Locality', 'Province', 'Latdeg', 'Latmin', 'Northsouth', 'Longdeg', 'Longmin', 'Eastwest', 'Depth', 'Remark', 'Date', 'CCode', 'Authname', 'Reference', 'Pagecode', 'Url', 'Logofile', 'Copyright', 'Comment', 'Publicdomain', 'Newpic', 'Picpreferred', 'Picpreferredmale', 'Picpreferredfem', 'Picpreferredjuv', 'Eol', 'Taxo', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'picgenus', 'picspecies', 'syncode', 'picname', 'scanned', 'picturetype', 'pictype', 'rank', 'bestpic', 'score', 'occurrence', 'cdrom', 'lifestage', 'size', 'lengthtype', 'size2', 'lenghttype2', 'locality', 'province', 'latdeg', 'latmin', 'northsouth', 'longdeg', 'longmin', 'eastwest', 'depth', 'remark', 'date', 'cCode', 'authname', 'reference', 'pagecode', 'url', 'logofile', 'copyright', 'comment', 'publicdomain', 'newpic', 'picpreferred', 'picpreferredmale', 'picpreferredfem', 'picpreferredjuv', 'eol', 'taxo', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (PicturesmainPeer::AUTOCTR, PicturesmainPeer::SPECCODE, PicturesmainPeer::PICGENUS, PicturesmainPeer::PICSPECIES, PicturesmainPeer::SYNCODE, PicturesmainPeer::PICNAME, PicturesmainPeer::SCANNED, PicturesmainPeer::PICTURETYPE, PicturesmainPeer::PICTYPE, PicturesmainPeer::RANK, PicturesmainPeer::BESTPIC, PicturesmainPeer::SCORE, PicturesmainPeer::OCCURRENCE, PicturesmainPeer::CDROM, PicturesmainPeer::LIFESTAGE, PicturesmainPeer::SIZE, PicturesmainPeer::LENGTHTYPE, PicturesmainPeer::SIZE2, PicturesmainPeer::LENGHTTYPE2, PicturesmainPeer::LOCALITY, PicturesmainPeer::PROVINCE, PicturesmainPeer::LATDEG, PicturesmainPeer::LATMIN, PicturesmainPeer::NORTHSOUTH, PicturesmainPeer::LONGDEG, PicturesmainPeer::LONGMIN, PicturesmainPeer::EASTWEST, PicturesmainPeer::DEPTH, PicturesmainPeer::REMARK, PicturesmainPeer::DATE, PicturesmainPeer::C_CODE, PicturesmainPeer::AUTHNAME, PicturesmainPeer::REFERENCE, PicturesmainPeer::PAGECODE, PicturesmainPeer::URL, PicturesmainPeer::LOGOFILE, PicturesmainPeer::COPYRIGHT, PicturesmainPeer::COMMENT, PicturesmainPeer::PUBLICDOMAIN, PicturesmainPeer::NEWPIC, PicturesmainPeer::PICPREFERRED, PicturesmainPeer::PICPREFERREDMALE, PicturesmainPeer::PICPREFERREDFEM, PicturesmainPeer::PICPREFERREDJUV, PicturesmainPeer::EOL, PicturesmainPeer::TAXO, PicturesmainPeer::ENTERED, PicturesmainPeer::DATEENTERED, PicturesmainPeer::MODIFIED, PicturesmainPeer::DATEMODIFIED, PicturesmainPeer::EXPERT, PicturesmainPeer::DATECHECKED, PicturesmainPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'PICGENUS', 'PICSPECIES', 'SYNCODE', 'PICNAME', 'SCANNED', 'PICTURETYPE', 'PICTYPE', 'RANK', 'BESTPIC', 'SCORE', 'OCCURRENCE', 'CDROM', 'LIFESTAGE', 'SIZE', 'LENGTHTYPE', 'SIZE2', 'LENGHTTYPE2', 'LOCALITY', 'PROVINCE', 'LATDEG', 'LATMIN', 'NORTHSOUTH', 'LONGDEG', 'LONGMIN', 'EASTWEST', 'DEPTH', 'REMARK', 'DATE', 'C_CODE', 'AUTHNAME', 'REFERENCE', 'PAGECODE', 'URL', 'LOGOFILE', 'COPYRIGHT', 'COMMENT', 'PUBLICDOMAIN', 'NEWPIC', 'PICPREFERRED', 'PICPREFERREDMALE', 'PICPREFERREDFEM', 'PICPREFERREDJUV', 'EOL', 'TAXO', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'SpecCode', 'PicGenus', 'PicSpecies', 'Syncode', 'PicName', 'Scanned', 'PictureType', 'PicType', 'Rank', 'BestPic', 'Score', 'Occurrence', 'CDROM', 'LifeStage', 'Size', 'LengthType', 'Size2', 'LenghtType2', 'Locality', 'Province', 'LatDeg', 'LatMin', 'NorthSouth', 'LongDeg', 'LongMin', 'EastWest', 'Depth', 'Remark', 'Date', 'C_Code', 'AuthName', 'Reference', 'PageCode', 'URL', 'LogoFile', 'Copyright', 'Comment', 'PublicDomain', 'NewPic', 'PicPreferred', 'PicPreferredMale', 'PicPreferredFem', 'PicPreferredJuv', 'EOL', 'Taxo', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PicturesmainPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Picgenus' => 2, 'Picspecies' => 3, 'Syncode' => 4, 'Picname' => 5, 'Scanned' => 6, 'Picturetype' => 7, 'Pictype' => 8, 'Rank' => 9, 'Bestpic' => 10, 'Score' => 11, 'Occurrence' => 12, 'Cdrom' => 13, 'Lifestage' => 14, 'Size' => 15, 'Lengthtype' => 16, 'Size2' => 17, 'Lenghttype2' => 18, 'Locality' => 19, 'Province' => 20, 'Latdeg' => 21, 'Latmin' => 22, 'Northsouth' => 23, 'Longdeg' => 24, 'Longmin' => 25, 'Eastwest' => 26, 'Depth' => 27, 'Remark' => 28, 'Date' => 29, 'CCode' => 30, 'Authname' => 31, 'Reference' => 32, 'Pagecode' => 33, 'Url' => 34, 'Logofile' => 35, 'Copyright' => 36, 'Comment' => 37, 'Publicdomain' => 38, 'Newpic' => 39, 'Picpreferred' => 40, 'Picpreferredmale' => 41, 'Picpreferredfem' => 42, 'Picpreferredjuv' => 43, 'Eol' => 44, 'Taxo' => 45, 'Entered' => 46, 'Dateentered' => 47, 'Modified' => 48, 'Datemodified' => 49, 'Expert' => 50, 'Datechecked' => 51, 'Ts' => 52, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'picgenus' => 2, 'picspecies' => 3, 'syncode' => 4, 'picname' => 5, 'scanned' => 6, 'picturetype' => 7, 'pictype' => 8, 'rank' => 9, 'bestpic' => 10, 'score' => 11, 'occurrence' => 12, 'cdrom' => 13, 'lifestage' => 14, 'size' => 15, 'lengthtype' => 16, 'size2' => 17, 'lenghttype2' => 18, 'locality' => 19, 'province' => 20, 'latdeg' => 21, 'latmin' => 22, 'northsouth' => 23, 'longdeg' => 24, 'longmin' => 25, 'eastwest' => 26, 'depth' => 27, 'remark' => 28, 'date' => 29, 'cCode' => 30, 'authname' => 31, 'reference' => 32, 'pagecode' => 33, 'url' => 34, 'logofile' => 35, 'copyright' => 36, 'comment' => 37, 'publicdomain' => 38, 'newpic' => 39, 'picpreferred' => 40, 'picpreferredmale' => 41, 'picpreferredfem' => 42, 'picpreferredjuv' => 43, 'eol' => 44, 'taxo' => 45, 'entered' => 46, 'dateentered' => 47, 'modified' => 48, 'datemodified' => 49, 'expert' => 50, 'datechecked' => 51, 'ts' => 52, ),
        BasePeer::TYPE_COLNAME => array (PicturesmainPeer::AUTOCTR => 0, PicturesmainPeer::SPECCODE => 1, PicturesmainPeer::PICGENUS => 2, PicturesmainPeer::PICSPECIES => 3, PicturesmainPeer::SYNCODE => 4, PicturesmainPeer::PICNAME => 5, PicturesmainPeer::SCANNED => 6, PicturesmainPeer::PICTURETYPE => 7, PicturesmainPeer::PICTYPE => 8, PicturesmainPeer::RANK => 9, PicturesmainPeer::BESTPIC => 10, PicturesmainPeer::SCORE => 11, PicturesmainPeer::OCCURRENCE => 12, PicturesmainPeer::CDROM => 13, PicturesmainPeer::LIFESTAGE => 14, PicturesmainPeer::SIZE => 15, PicturesmainPeer::LENGTHTYPE => 16, PicturesmainPeer::SIZE2 => 17, PicturesmainPeer::LENGHTTYPE2 => 18, PicturesmainPeer::LOCALITY => 19, PicturesmainPeer::PROVINCE => 20, PicturesmainPeer::LATDEG => 21, PicturesmainPeer::LATMIN => 22, PicturesmainPeer::NORTHSOUTH => 23, PicturesmainPeer::LONGDEG => 24, PicturesmainPeer::LONGMIN => 25, PicturesmainPeer::EASTWEST => 26, PicturesmainPeer::DEPTH => 27, PicturesmainPeer::REMARK => 28, PicturesmainPeer::DATE => 29, PicturesmainPeer::C_CODE => 30, PicturesmainPeer::AUTHNAME => 31, PicturesmainPeer::REFERENCE => 32, PicturesmainPeer::PAGECODE => 33, PicturesmainPeer::URL => 34, PicturesmainPeer::LOGOFILE => 35, PicturesmainPeer::COPYRIGHT => 36, PicturesmainPeer::COMMENT => 37, PicturesmainPeer::PUBLICDOMAIN => 38, PicturesmainPeer::NEWPIC => 39, PicturesmainPeer::PICPREFERRED => 40, PicturesmainPeer::PICPREFERREDMALE => 41, PicturesmainPeer::PICPREFERREDFEM => 42, PicturesmainPeer::PICPREFERREDJUV => 43, PicturesmainPeer::EOL => 44, PicturesmainPeer::TAXO => 45, PicturesmainPeer::ENTERED => 46, PicturesmainPeer::DATEENTERED => 47, PicturesmainPeer::MODIFIED => 48, PicturesmainPeer::DATEMODIFIED => 49, PicturesmainPeer::EXPERT => 50, PicturesmainPeer::DATECHECKED => 51, PicturesmainPeer::TS => 52, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'PICGENUS' => 2, 'PICSPECIES' => 3, 'SYNCODE' => 4, 'PICNAME' => 5, 'SCANNED' => 6, 'PICTURETYPE' => 7, 'PICTYPE' => 8, 'RANK' => 9, 'BESTPIC' => 10, 'SCORE' => 11, 'OCCURRENCE' => 12, 'CDROM' => 13, 'LIFESTAGE' => 14, 'SIZE' => 15, 'LENGTHTYPE' => 16, 'SIZE2' => 17, 'LENGHTTYPE2' => 18, 'LOCALITY' => 19, 'PROVINCE' => 20, 'LATDEG' => 21, 'LATMIN' => 22, 'NORTHSOUTH' => 23, 'LONGDEG' => 24, 'LONGMIN' => 25, 'EASTWEST' => 26, 'DEPTH' => 27, 'REMARK' => 28, 'DATE' => 29, 'C_CODE' => 30, 'AUTHNAME' => 31, 'REFERENCE' => 32, 'PAGECODE' => 33, 'URL' => 34, 'LOGOFILE' => 35, 'COPYRIGHT' => 36, 'COMMENT' => 37, 'PUBLICDOMAIN' => 38, 'NEWPIC' => 39, 'PICPREFERRED' => 40, 'PICPREFERREDMALE' => 41, 'PICPREFERREDFEM' => 42, 'PICPREFERREDJUV' => 43, 'EOL' => 44, 'TAXO' => 45, 'ENTERED' => 46, 'DATEENTERED' => 47, 'MODIFIED' => 48, 'DATEMODIFIED' => 49, 'EXPERT' => 50, 'DATECHECKED' => 51, 'TS' => 52, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'SpecCode' => 1, 'PicGenus' => 2, 'PicSpecies' => 3, 'Syncode' => 4, 'PicName' => 5, 'Scanned' => 6, 'PictureType' => 7, 'PicType' => 8, 'Rank' => 9, 'BestPic' => 10, 'Score' => 11, 'Occurrence' => 12, 'CDROM' => 13, 'LifeStage' => 14, 'Size' => 15, 'LengthType' => 16, 'Size2' => 17, 'LenghtType2' => 18, 'Locality' => 19, 'Province' => 20, 'LatDeg' => 21, 'LatMin' => 22, 'NorthSouth' => 23, 'LongDeg' => 24, 'LongMin' => 25, 'EastWest' => 26, 'Depth' => 27, 'Remark' => 28, 'Date' => 29, 'C_Code' => 30, 'AuthName' => 31, 'Reference' => 32, 'PageCode' => 33, 'URL' => 34, 'LogoFile' => 35, 'Copyright' => 36, 'Comment' => 37, 'PublicDomain' => 38, 'NewPic' => 39, 'PicPreferred' => 40, 'PicPreferredMale' => 41, 'PicPreferredFem' => 42, 'PicPreferredJuv' => 43, 'EOL' => 44, 'Taxo' => 45, 'Entered' => 46, 'Dateentered' => 47, 'Modified' => 48, 'Datemodified' => 49, 'Expert' => 50, 'Datechecked' => 51, 'TS' => 52, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, )
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
        $toNames = PicturesmainPeer::getFieldNames($toType);
        $key = isset(PicturesmainPeer::$fieldKeys[$fromType][$name]) ? PicturesmainPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PicturesmainPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PicturesmainPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PicturesmainPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PicturesmainPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PicturesmainPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PicturesmainPeer::AUTOCTR);
            $criteria->addSelectColumn(PicturesmainPeer::SPECCODE);
            $criteria->addSelectColumn(PicturesmainPeer::PICGENUS);
            $criteria->addSelectColumn(PicturesmainPeer::PICSPECIES);
            $criteria->addSelectColumn(PicturesmainPeer::SYNCODE);
            $criteria->addSelectColumn(PicturesmainPeer::PICNAME);
            $criteria->addSelectColumn(PicturesmainPeer::SCANNED);
            $criteria->addSelectColumn(PicturesmainPeer::PICTURETYPE);
            $criteria->addSelectColumn(PicturesmainPeer::PICTYPE);
            $criteria->addSelectColumn(PicturesmainPeer::RANK);
            $criteria->addSelectColumn(PicturesmainPeer::BESTPIC);
            $criteria->addSelectColumn(PicturesmainPeer::SCORE);
            $criteria->addSelectColumn(PicturesmainPeer::OCCURRENCE);
            $criteria->addSelectColumn(PicturesmainPeer::CDROM);
            $criteria->addSelectColumn(PicturesmainPeer::LIFESTAGE);
            $criteria->addSelectColumn(PicturesmainPeer::SIZE);
            $criteria->addSelectColumn(PicturesmainPeer::LENGTHTYPE);
            $criteria->addSelectColumn(PicturesmainPeer::SIZE2);
            $criteria->addSelectColumn(PicturesmainPeer::LENGHTTYPE2);
            $criteria->addSelectColumn(PicturesmainPeer::LOCALITY);
            $criteria->addSelectColumn(PicturesmainPeer::PROVINCE);
            $criteria->addSelectColumn(PicturesmainPeer::LATDEG);
            $criteria->addSelectColumn(PicturesmainPeer::LATMIN);
            $criteria->addSelectColumn(PicturesmainPeer::NORTHSOUTH);
            $criteria->addSelectColumn(PicturesmainPeer::LONGDEG);
            $criteria->addSelectColumn(PicturesmainPeer::LONGMIN);
            $criteria->addSelectColumn(PicturesmainPeer::EASTWEST);
            $criteria->addSelectColumn(PicturesmainPeer::DEPTH);
            $criteria->addSelectColumn(PicturesmainPeer::REMARK);
            $criteria->addSelectColumn(PicturesmainPeer::DATE);
            $criteria->addSelectColumn(PicturesmainPeer::C_CODE);
            $criteria->addSelectColumn(PicturesmainPeer::AUTHNAME);
            $criteria->addSelectColumn(PicturesmainPeer::REFERENCE);
            $criteria->addSelectColumn(PicturesmainPeer::PAGECODE);
            $criteria->addSelectColumn(PicturesmainPeer::URL);
            $criteria->addSelectColumn(PicturesmainPeer::LOGOFILE);
            $criteria->addSelectColumn(PicturesmainPeer::COPYRIGHT);
            $criteria->addSelectColumn(PicturesmainPeer::COMMENT);
            $criteria->addSelectColumn(PicturesmainPeer::PUBLICDOMAIN);
            $criteria->addSelectColumn(PicturesmainPeer::NEWPIC);
            $criteria->addSelectColumn(PicturesmainPeer::PICPREFERRED);
            $criteria->addSelectColumn(PicturesmainPeer::PICPREFERREDMALE);
            $criteria->addSelectColumn(PicturesmainPeer::PICPREFERREDFEM);
            $criteria->addSelectColumn(PicturesmainPeer::PICPREFERREDJUV);
            $criteria->addSelectColumn(PicturesmainPeer::EOL);
            $criteria->addSelectColumn(PicturesmainPeer::TAXO);
            $criteria->addSelectColumn(PicturesmainPeer::ENTERED);
            $criteria->addSelectColumn(PicturesmainPeer::DATEENTERED);
            $criteria->addSelectColumn(PicturesmainPeer::MODIFIED);
            $criteria->addSelectColumn(PicturesmainPeer::DATEMODIFIED);
            $criteria->addSelectColumn(PicturesmainPeer::EXPERT);
            $criteria->addSelectColumn(PicturesmainPeer::DATECHECKED);
            $criteria->addSelectColumn(PicturesmainPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.PicGenus');
            $criteria->addSelectColumn($alias . '.PicSpecies');
            $criteria->addSelectColumn($alias . '.Syncode');
            $criteria->addSelectColumn($alias . '.PicName');
            $criteria->addSelectColumn($alias . '.Scanned');
            $criteria->addSelectColumn($alias . '.PictureType');
            $criteria->addSelectColumn($alias . '.PicType');
            $criteria->addSelectColumn($alias . '.Rank');
            $criteria->addSelectColumn($alias . '.BestPic');
            $criteria->addSelectColumn($alias . '.Score');
            $criteria->addSelectColumn($alias . '.Occurrence');
            $criteria->addSelectColumn($alias . '.CDROM');
            $criteria->addSelectColumn($alias . '.LifeStage');
            $criteria->addSelectColumn($alias . '.Size');
            $criteria->addSelectColumn($alias . '.LengthType');
            $criteria->addSelectColumn($alias . '.Size2');
            $criteria->addSelectColumn($alias . '.LenghtType2');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.Province');
            $criteria->addSelectColumn($alias . '.LatDeg');
            $criteria->addSelectColumn($alias . '.LatMin');
            $criteria->addSelectColumn($alias . '.NorthSouth');
            $criteria->addSelectColumn($alias . '.LongDeg');
            $criteria->addSelectColumn($alias . '.LongMin');
            $criteria->addSelectColumn($alias . '.EastWest');
            $criteria->addSelectColumn($alias . '.Depth');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.Date');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.AuthName');
            $criteria->addSelectColumn($alias . '.Reference');
            $criteria->addSelectColumn($alias . '.PageCode');
            $criteria->addSelectColumn($alias . '.URL');
            $criteria->addSelectColumn($alias . '.LogoFile');
            $criteria->addSelectColumn($alias . '.Copyright');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.PublicDomain');
            $criteria->addSelectColumn($alias . '.NewPic');
            $criteria->addSelectColumn($alias . '.PicPreferred');
            $criteria->addSelectColumn($alias . '.PicPreferredMale');
            $criteria->addSelectColumn($alias . '.PicPreferredFem');
            $criteria->addSelectColumn($alias . '.PicPreferredJuv');
            $criteria->addSelectColumn($alias . '.EOL');
            $criteria->addSelectColumn($alias . '.Taxo');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.Dateentered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.Datemodified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.Datechecked');
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
        $criteria->setPrimaryTableName(PicturesmainPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PicturesmainPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PicturesmainPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Picturesmain
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PicturesmainPeer::doSelect($critcopy, $con);
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
        return PicturesmainPeer::populateObjects(PicturesmainPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PicturesmainPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PicturesmainPeer::DATABASE_NAME);

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
     * @param Picturesmain $obj A Picturesmain object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            PicturesmainPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Picturesmain object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Picturesmain) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Picturesmain object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PicturesmainPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Picturesmain Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PicturesmainPeer::$instances[$key])) {
                return PicturesmainPeer::$instances[$key];
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
        foreach (PicturesmainPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PicturesmainPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to picturesmain
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
        $cls = PicturesmainPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PicturesmainPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PicturesmainPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PicturesmainPeer::addInstanceToPool($obj, $key);
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
     * @return array (Picturesmain object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PicturesmainPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PicturesmainPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PicturesmainPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PicturesmainPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PicturesmainPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PicturesmainPeer::DATABASE_NAME)->getTable(PicturesmainPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePicturesmainPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePicturesmainPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PicturesmainTableMap());
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
        return PicturesmainPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Picturesmain or Criteria object.
     *
     * @param      mixed $values Criteria or Picturesmain object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Picturesmain object
        }

        if ($criteria->containsKey(PicturesmainPeer::AUTOCTR) && $criteria->keyContainsValue(PicturesmainPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PicturesmainPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PicturesmainPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Picturesmain or Criteria object.
     *
     * @param      mixed $values Criteria or Picturesmain object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PicturesmainPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PicturesmainPeer::AUTOCTR);
            $value = $criteria->remove(PicturesmainPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(PicturesmainPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PicturesmainPeer::TABLE_NAME);
            }

        } else { // $values is Picturesmain object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PicturesmainPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the picturesmain table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PicturesmainPeer::TABLE_NAME, $con, PicturesmainPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PicturesmainPeer::clearInstancePool();
            PicturesmainPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Picturesmain or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Picturesmain object or primary key or array of primary keys
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
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PicturesmainPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Picturesmain) { // it's a model object
            // invalidate the cache for this single object
            PicturesmainPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PicturesmainPeer::DATABASE_NAME);
            $criteria->add(PicturesmainPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PicturesmainPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PicturesmainPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PicturesmainPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Picturesmain object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Picturesmain $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PicturesmainPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PicturesmainPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PicturesmainPeer::DATABASE_NAME, PicturesmainPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Picturesmain
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PicturesmainPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PicturesmainPeer::DATABASE_NAME);
        $criteria->add(PicturesmainPeer::AUTOCTR, $pk);

        $v = PicturesmainPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Picturesmain[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PicturesmainPeer::DATABASE_NAME);
            $criteria->add(PicturesmainPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = PicturesmainPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePicturesmainPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePicturesmainPeer::buildTableMap();

