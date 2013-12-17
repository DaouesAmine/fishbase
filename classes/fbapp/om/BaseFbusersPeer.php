<?php


/**
 * Base static class for performing query and update operations on the 'fbusers' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFbusersPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'fbusers';

    /** the related Propel class for this table */
    const OM_CLASS = 'Fbusers';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FbusersTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 57;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 57;

    /** the column name for the UserName field */
    const USERNAME = 'fbusers.UserName';

    /** the column name for the FirstName field */
    const FIRSTNAME = 'fbusers.FirstName';

    /** the column name for the Surname field */
    const SURNAME = 'fbusers.Surname';

    /** the column name for the Title field */
    const TITLE = 'fbusers.Title';

    /** the column name for the Institute field */
    const INSTITUTE = 'fbusers.Institute';

    /** the column name for the Position field */
    const POSITION = 'fbusers.Position';

    /** the column name for the UserAddress field */
    const USERADDRESS = 'fbusers.UserAddress';

    /** the column name for the UserAddress2 field */
    const USERADDRESS2 = 'fbusers.UserAddress2';

    /** the column name for the UserType field */
    const USERTYPE = 'fbusers.UserType';

    /** the column name for the UserTypeOrder field */
    const USERTYPEORDER = 'fbusers.UserTypeOrder';

    /** the column name for the Library field */
    const LIBRARY = 'fbusers.Library';

    /** the column name for the Museum field */
    const MUSEUM = 'fbusers.Museum';

    /** the column name for the City field */
    const CITY = 'fbusers.City';

    /** the column name for the MailCountry field */
    const MAILCOUNTRY = 'fbusers.MailCountry';

    /** the column name for the C_Code field */
    const C_CODE = 'fbusers.C_Code';

    /** the column name for the StateProvince field */
    const STATEPROVINCE = 'fbusers.StateProvince';

    /** the column name for the PostalCode field */
    const POSTALCODE = 'fbusers.PostalCode';

    /** the column name for the V1_0 field */
    const V1_0 = 'fbusers.V1_0';

    /** the column name for the Payment1_0 field */
    const PAYMENT1_0 = 'fbusers.Payment1_0';

    /** the column name for the DateShipped1_0 field */
    const DATESHIPPED1_0 = 'fbusers.DateShipped1_0';

    /** the column name for the V2_0 field */
    const V2_0 = 'fbusers.V2_0';

    /** the column name for the Payment2_0 field */
    const PAYMENT2_0 = 'fbusers.Payment2_0';

    /** the column name for the DateShipped2_0 field */
    const DATESHIPPED2_0 = 'fbusers.DateShipped2_0';

    /** the column name for the V3_0 field */
    const V3_0 = 'fbusers.V3_0';

    /** the column name for the Payment3_0 field */
    const PAYMENT3_0 = 'fbusers.Payment3_0';

    /** the column name for the DateShipped3_0 field */
    const DATESHIPPED3_0 = 'fbusers.DateShipped3_0';

    /** the column name for the V4_0 field */
    const V4_0 = 'fbusers.V4_0';

    /** the column name for the Payment4_0 field */
    const PAYMENT4_0 = 'fbusers.Payment4_0';

    /** the column name for the DateShipped4_0 field */
    const DATESHIPPED4_0 = 'fbusers.DateShipped4_0';

    /** the column name for the V5_0 field */
    const V5_0 = 'fbusers.V5_0';

    /** the column name for the Payment5_0 field */
    const PAYMENT5_0 = 'fbusers.Payment5_0';

    /** the column name for the DateShipped5_0 field */
    const DATESHIPPED5_0 = 'fbusers.DateShipped5_0';

    /** the column name for the V6_0 field */
    const V6_0 = 'fbusers.V6_0';

    /** the column name for the Payment6_0 field */
    const PAYMENT6_0 = 'fbusers.Payment6_0';

    /** the column name for the DateShipped6_0 field */
    const DATESHIPPED6_0 = 'fbusers.DateShipped6_0';

    /** the column name for the V7_0 field */
    const V7_0 = 'fbusers.V7_0';

    /** the column name for the Payment7_0 field */
    const PAYMENT7_0 = 'fbusers.Payment7_0';

    /** the column name for the DateShipped7_0 field */
    const DATESHIPPED7_0 = 'fbusers.DateShipped7_0';

    /** the column name for the V7_1 field */
    const V7_1 = 'fbusers.V7_1';

    /** the column name for the Payment7_1 field */
    const PAYMENT7_1 = 'fbusers.Payment7_1';

    /** the column name for the DateShipped7_1 field */
    const DATESHIPPED7_1 = 'fbusers.DateShipped7_1';

    /** the column name for the E_Mail field */
    const E_MAIL = 'fbusers.E_Mail';

    /** the column name for the WebPage field */
    const WEBPAGE = 'fbusers.WebPage';

    /** the column name for the Telephone field */
    const TELEPHONE = 'fbusers.Telephone';

    /** the column name for the FAX field */
    const FAX = 'fbusers.FAX';

    /** the column name for the ContactBy field */
    const CONTACTBY = 'fbusers.ContactBy';

    /** the column name for the Comment field */
    const COMMENT = 'fbusers.Comment';

    /** the column name for the CopiesNum field */
    const COPIESNUM = 'fbusers.CopiesNum';

    /** the column name for the Copies2k field */
    const COPIES2K = 'fbusers.Copies2k';

    /** the column name for the Subscriber field */
    const SUBSCRIBER = 'fbusers.Subscriber';

    /** the column name for the Collaborator field */
    const COLLABORATOR = 'fbusers.Collaborator';

    /** the column name for the Year field */
    const YEAR = 'fbusers.Year';

    /** the column name for the Entered field */
    const ENTERED = 'fbusers.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'fbusers.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'fbusers.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'fbusers.DateModified';

    /** the column name for the TS field */
    const TS = 'fbusers.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Fbusers objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Fbusers[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FbusersPeer::$fieldNames[FbusersPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Username', 'Firstname', 'Surname', 'Title', 'Institute', 'Position', 'Useraddress', 'Useraddress2', 'Usertype', 'Usertypeorder', 'Library', 'Museum', 'City', 'Mailcountry', 'CCode', 'Stateprovince', 'Postalcode', 'V10', 'Payment10', 'Dateshipped10', 'V20', 'Payment20', 'Dateshipped20', 'V30', 'Payment30', 'Dateshipped30', 'V40', 'Payment40', 'Dateshipped40', 'V50', 'Payment50', 'Dateshipped50', 'V60', 'Payment60', 'Dateshipped60', 'V70', 'Payment70', 'Dateshipped70', 'V71', 'Payment71', 'Dateshipped71', 'EMail', 'Webpage', 'Telephone', 'Fax', 'Contactby', 'Comment', 'Copiesnum', 'Copies2k', 'Subscriber', 'Collaborator', 'Year', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('username', 'firstname', 'surname', 'title', 'institute', 'position', 'useraddress', 'useraddress2', 'usertype', 'usertypeorder', 'library', 'museum', 'city', 'mailcountry', 'cCode', 'stateprovince', 'postalcode', 'v10', 'payment10', 'dateshipped10', 'v20', 'payment20', 'dateshipped20', 'v30', 'payment30', 'dateshipped30', 'v40', 'payment40', 'dateshipped40', 'v50', 'payment50', 'dateshipped50', 'v60', 'payment60', 'dateshipped60', 'v70', 'payment70', 'dateshipped70', 'v71', 'payment71', 'dateshipped71', 'eMail', 'webpage', 'telephone', 'fax', 'contactby', 'comment', 'copiesnum', 'copies2k', 'subscriber', 'collaborator', 'year', 'entered', 'dateentered', 'modified', 'datemodified', 'ts', ),
        BasePeer::TYPE_COLNAME => array (FbusersPeer::USERNAME, FbusersPeer::FIRSTNAME, FbusersPeer::SURNAME, FbusersPeer::TITLE, FbusersPeer::INSTITUTE, FbusersPeer::POSITION, FbusersPeer::USERADDRESS, FbusersPeer::USERADDRESS2, FbusersPeer::USERTYPE, FbusersPeer::USERTYPEORDER, FbusersPeer::LIBRARY, FbusersPeer::MUSEUM, FbusersPeer::CITY, FbusersPeer::MAILCOUNTRY, FbusersPeer::C_CODE, FbusersPeer::STATEPROVINCE, FbusersPeer::POSTALCODE, FbusersPeer::V1_0, FbusersPeer::PAYMENT1_0, FbusersPeer::DATESHIPPED1_0, FbusersPeer::V2_0, FbusersPeer::PAYMENT2_0, FbusersPeer::DATESHIPPED2_0, FbusersPeer::V3_0, FbusersPeer::PAYMENT3_0, FbusersPeer::DATESHIPPED3_0, FbusersPeer::V4_0, FbusersPeer::PAYMENT4_0, FbusersPeer::DATESHIPPED4_0, FbusersPeer::V5_0, FbusersPeer::PAYMENT5_0, FbusersPeer::DATESHIPPED5_0, FbusersPeer::V6_0, FbusersPeer::PAYMENT6_0, FbusersPeer::DATESHIPPED6_0, FbusersPeer::V7_0, FbusersPeer::PAYMENT7_0, FbusersPeer::DATESHIPPED7_0, FbusersPeer::V7_1, FbusersPeer::PAYMENT7_1, FbusersPeer::DATESHIPPED7_1, FbusersPeer::E_MAIL, FbusersPeer::WEBPAGE, FbusersPeer::TELEPHONE, FbusersPeer::FAX, FbusersPeer::CONTACTBY, FbusersPeer::COMMENT, FbusersPeer::COPIESNUM, FbusersPeer::COPIES2K, FbusersPeer::SUBSCRIBER, FbusersPeer::COLLABORATOR, FbusersPeer::YEAR, FbusersPeer::ENTERED, FbusersPeer::DATEENTERED, FbusersPeer::MODIFIED, FbusersPeer::DATEMODIFIED, FbusersPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('USERNAME', 'FIRSTNAME', 'SURNAME', 'TITLE', 'INSTITUTE', 'POSITION', 'USERADDRESS', 'USERADDRESS2', 'USERTYPE', 'USERTYPEORDER', 'LIBRARY', 'MUSEUM', 'CITY', 'MAILCOUNTRY', 'C_CODE', 'STATEPROVINCE', 'POSTALCODE', 'V1_0', 'PAYMENT1_0', 'DATESHIPPED1_0', 'V2_0', 'PAYMENT2_0', 'DATESHIPPED2_0', 'V3_0', 'PAYMENT3_0', 'DATESHIPPED3_0', 'V4_0', 'PAYMENT4_0', 'DATESHIPPED4_0', 'V5_0', 'PAYMENT5_0', 'DATESHIPPED5_0', 'V6_0', 'PAYMENT6_0', 'DATESHIPPED6_0', 'V7_0', 'PAYMENT7_0', 'DATESHIPPED7_0', 'V7_1', 'PAYMENT7_1', 'DATESHIPPED7_1', 'E_MAIL', 'WEBPAGE', 'TELEPHONE', 'FAX', 'CONTACTBY', 'COMMENT', 'COPIESNUM', 'COPIES2K', 'SUBSCRIBER', 'COLLABORATOR', 'YEAR', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('UserName', 'FirstName', 'Surname', 'Title', 'Institute', 'Position', 'UserAddress', 'UserAddress2', 'UserType', 'UserTypeOrder', 'Library', 'Museum', 'City', 'MailCountry', 'C_Code', 'StateProvince', 'PostalCode', 'V1_0', 'Payment1_0', 'DateShipped1_0', 'V2_0', 'Payment2_0', 'DateShipped2_0', 'V3_0', 'Payment3_0', 'DateShipped3_0', 'V4_0', 'Payment4_0', 'DateShipped4_0', 'V5_0', 'Payment5_0', 'DateShipped5_0', 'V6_0', 'Payment6_0', 'DateShipped6_0', 'V7_0', 'Payment7_0', 'DateShipped7_0', 'V7_1', 'Payment7_1', 'DateShipped7_1', 'E_Mail', 'WebPage', 'Telephone', 'FAX', 'ContactBy', 'Comment', 'CopiesNum', 'Copies2k', 'Subscriber', 'Collaborator', 'Year', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FbusersPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Username' => 0, 'Firstname' => 1, 'Surname' => 2, 'Title' => 3, 'Institute' => 4, 'Position' => 5, 'Useraddress' => 6, 'Useraddress2' => 7, 'Usertype' => 8, 'Usertypeorder' => 9, 'Library' => 10, 'Museum' => 11, 'City' => 12, 'Mailcountry' => 13, 'CCode' => 14, 'Stateprovince' => 15, 'Postalcode' => 16, 'V10' => 17, 'Payment10' => 18, 'Dateshipped10' => 19, 'V20' => 20, 'Payment20' => 21, 'Dateshipped20' => 22, 'V30' => 23, 'Payment30' => 24, 'Dateshipped30' => 25, 'V40' => 26, 'Payment40' => 27, 'Dateshipped40' => 28, 'V50' => 29, 'Payment50' => 30, 'Dateshipped50' => 31, 'V60' => 32, 'Payment60' => 33, 'Dateshipped60' => 34, 'V70' => 35, 'Payment70' => 36, 'Dateshipped70' => 37, 'V71' => 38, 'Payment71' => 39, 'Dateshipped71' => 40, 'EMail' => 41, 'Webpage' => 42, 'Telephone' => 43, 'Fax' => 44, 'Contactby' => 45, 'Comment' => 46, 'Copiesnum' => 47, 'Copies2k' => 48, 'Subscriber' => 49, 'Collaborator' => 50, 'Year' => 51, 'Entered' => 52, 'Dateentered' => 53, 'Modified' => 54, 'Datemodified' => 55, 'Ts' => 56, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('username' => 0, 'firstname' => 1, 'surname' => 2, 'title' => 3, 'institute' => 4, 'position' => 5, 'useraddress' => 6, 'useraddress2' => 7, 'usertype' => 8, 'usertypeorder' => 9, 'library' => 10, 'museum' => 11, 'city' => 12, 'mailcountry' => 13, 'cCode' => 14, 'stateprovince' => 15, 'postalcode' => 16, 'v10' => 17, 'payment10' => 18, 'dateshipped10' => 19, 'v20' => 20, 'payment20' => 21, 'dateshipped20' => 22, 'v30' => 23, 'payment30' => 24, 'dateshipped30' => 25, 'v40' => 26, 'payment40' => 27, 'dateshipped40' => 28, 'v50' => 29, 'payment50' => 30, 'dateshipped50' => 31, 'v60' => 32, 'payment60' => 33, 'dateshipped60' => 34, 'v70' => 35, 'payment70' => 36, 'dateshipped70' => 37, 'v71' => 38, 'payment71' => 39, 'dateshipped71' => 40, 'eMail' => 41, 'webpage' => 42, 'telephone' => 43, 'fax' => 44, 'contactby' => 45, 'comment' => 46, 'copiesnum' => 47, 'copies2k' => 48, 'subscriber' => 49, 'collaborator' => 50, 'year' => 51, 'entered' => 52, 'dateentered' => 53, 'modified' => 54, 'datemodified' => 55, 'ts' => 56, ),
        BasePeer::TYPE_COLNAME => array (FbusersPeer::USERNAME => 0, FbusersPeer::FIRSTNAME => 1, FbusersPeer::SURNAME => 2, FbusersPeer::TITLE => 3, FbusersPeer::INSTITUTE => 4, FbusersPeer::POSITION => 5, FbusersPeer::USERADDRESS => 6, FbusersPeer::USERADDRESS2 => 7, FbusersPeer::USERTYPE => 8, FbusersPeer::USERTYPEORDER => 9, FbusersPeer::LIBRARY => 10, FbusersPeer::MUSEUM => 11, FbusersPeer::CITY => 12, FbusersPeer::MAILCOUNTRY => 13, FbusersPeer::C_CODE => 14, FbusersPeer::STATEPROVINCE => 15, FbusersPeer::POSTALCODE => 16, FbusersPeer::V1_0 => 17, FbusersPeer::PAYMENT1_0 => 18, FbusersPeer::DATESHIPPED1_0 => 19, FbusersPeer::V2_0 => 20, FbusersPeer::PAYMENT2_0 => 21, FbusersPeer::DATESHIPPED2_0 => 22, FbusersPeer::V3_0 => 23, FbusersPeer::PAYMENT3_0 => 24, FbusersPeer::DATESHIPPED3_0 => 25, FbusersPeer::V4_0 => 26, FbusersPeer::PAYMENT4_0 => 27, FbusersPeer::DATESHIPPED4_0 => 28, FbusersPeer::V5_0 => 29, FbusersPeer::PAYMENT5_0 => 30, FbusersPeer::DATESHIPPED5_0 => 31, FbusersPeer::V6_0 => 32, FbusersPeer::PAYMENT6_0 => 33, FbusersPeer::DATESHIPPED6_0 => 34, FbusersPeer::V7_0 => 35, FbusersPeer::PAYMENT7_0 => 36, FbusersPeer::DATESHIPPED7_0 => 37, FbusersPeer::V7_1 => 38, FbusersPeer::PAYMENT7_1 => 39, FbusersPeer::DATESHIPPED7_1 => 40, FbusersPeer::E_MAIL => 41, FbusersPeer::WEBPAGE => 42, FbusersPeer::TELEPHONE => 43, FbusersPeer::FAX => 44, FbusersPeer::CONTACTBY => 45, FbusersPeer::COMMENT => 46, FbusersPeer::COPIESNUM => 47, FbusersPeer::COPIES2K => 48, FbusersPeer::SUBSCRIBER => 49, FbusersPeer::COLLABORATOR => 50, FbusersPeer::YEAR => 51, FbusersPeer::ENTERED => 52, FbusersPeer::DATEENTERED => 53, FbusersPeer::MODIFIED => 54, FbusersPeer::DATEMODIFIED => 55, FbusersPeer::TS => 56, ),
        BasePeer::TYPE_RAW_COLNAME => array ('USERNAME' => 0, 'FIRSTNAME' => 1, 'SURNAME' => 2, 'TITLE' => 3, 'INSTITUTE' => 4, 'POSITION' => 5, 'USERADDRESS' => 6, 'USERADDRESS2' => 7, 'USERTYPE' => 8, 'USERTYPEORDER' => 9, 'LIBRARY' => 10, 'MUSEUM' => 11, 'CITY' => 12, 'MAILCOUNTRY' => 13, 'C_CODE' => 14, 'STATEPROVINCE' => 15, 'POSTALCODE' => 16, 'V1_0' => 17, 'PAYMENT1_0' => 18, 'DATESHIPPED1_0' => 19, 'V2_0' => 20, 'PAYMENT2_0' => 21, 'DATESHIPPED2_0' => 22, 'V3_0' => 23, 'PAYMENT3_0' => 24, 'DATESHIPPED3_0' => 25, 'V4_0' => 26, 'PAYMENT4_0' => 27, 'DATESHIPPED4_0' => 28, 'V5_0' => 29, 'PAYMENT5_0' => 30, 'DATESHIPPED5_0' => 31, 'V6_0' => 32, 'PAYMENT6_0' => 33, 'DATESHIPPED6_0' => 34, 'V7_0' => 35, 'PAYMENT7_0' => 36, 'DATESHIPPED7_0' => 37, 'V7_1' => 38, 'PAYMENT7_1' => 39, 'DATESHIPPED7_1' => 40, 'E_MAIL' => 41, 'WEBPAGE' => 42, 'TELEPHONE' => 43, 'FAX' => 44, 'CONTACTBY' => 45, 'COMMENT' => 46, 'COPIESNUM' => 47, 'COPIES2K' => 48, 'SUBSCRIBER' => 49, 'COLLABORATOR' => 50, 'YEAR' => 51, 'ENTERED' => 52, 'DATEENTERED' => 53, 'MODIFIED' => 54, 'DATEMODIFIED' => 55, 'TS' => 56, ),
        BasePeer::TYPE_FIELDNAME => array ('UserName' => 0, 'FirstName' => 1, 'Surname' => 2, 'Title' => 3, 'Institute' => 4, 'Position' => 5, 'UserAddress' => 6, 'UserAddress2' => 7, 'UserType' => 8, 'UserTypeOrder' => 9, 'Library' => 10, 'Museum' => 11, 'City' => 12, 'MailCountry' => 13, 'C_Code' => 14, 'StateProvince' => 15, 'PostalCode' => 16, 'V1_0' => 17, 'Payment1_0' => 18, 'DateShipped1_0' => 19, 'V2_0' => 20, 'Payment2_0' => 21, 'DateShipped2_0' => 22, 'V3_0' => 23, 'Payment3_0' => 24, 'DateShipped3_0' => 25, 'V4_0' => 26, 'Payment4_0' => 27, 'DateShipped4_0' => 28, 'V5_0' => 29, 'Payment5_0' => 30, 'DateShipped5_0' => 31, 'V6_0' => 32, 'Payment6_0' => 33, 'DateShipped6_0' => 34, 'V7_0' => 35, 'Payment7_0' => 36, 'DateShipped7_0' => 37, 'V7_1' => 38, 'Payment7_1' => 39, 'DateShipped7_1' => 40, 'E_Mail' => 41, 'WebPage' => 42, 'Telephone' => 43, 'FAX' => 44, 'ContactBy' => 45, 'Comment' => 46, 'CopiesNum' => 47, 'Copies2k' => 48, 'Subscriber' => 49, 'Collaborator' => 50, 'Year' => 51, 'Entered' => 52, 'DateEntered' => 53, 'Modified' => 54, 'DateModified' => 55, 'TS' => 56, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
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
        $toNames = FbusersPeer::getFieldNames($toType);
        $key = isset(FbusersPeer::$fieldKeys[$fromType][$name]) ? FbusersPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FbusersPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FbusersPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FbusersPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FbusersPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FbusersPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FbusersPeer::USERNAME);
            $criteria->addSelectColumn(FbusersPeer::FIRSTNAME);
            $criteria->addSelectColumn(FbusersPeer::SURNAME);
            $criteria->addSelectColumn(FbusersPeer::TITLE);
            $criteria->addSelectColumn(FbusersPeer::INSTITUTE);
            $criteria->addSelectColumn(FbusersPeer::POSITION);
            $criteria->addSelectColumn(FbusersPeer::USERADDRESS);
            $criteria->addSelectColumn(FbusersPeer::USERADDRESS2);
            $criteria->addSelectColumn(FbusersPeer::USERTYPE);
            $criteria->addSelectColumn(FbusersPeer::USERTYPEORDER);
            $criteria->addSelectColumn(FbusersPeer::LIBRARY);
            $criteria->addSelectColumn(FbusersPeer::MUSEUM);
            $criteria->addSelectColumn(FbusersPeer::CITY);
            $criteria->addSelectColumn(FbusersPeer::MAILCOUNTRY);
            $criteria->addSelectColumn(FbusersPeer::C_CODE);
            $criteria->addSelectColumn(FbusersPeer::STATEPROVINCE);
            $criteria->addSelectColumn(FbusersPeer::POSTALCODE);
            $criteria->addSelectColumn(FbusersPeer::V1_0);
            $criteria->addSelectColumn(FbusersPeer::PAYMENT1_0);
            $criteria->addSelectColumn(FbusersPeer::DATESHIPPED1_0);
            $criteria->addSelectColumn(FbusersPeer::V2_0);
            $criteria->addSelectColumn(FbusersPeer::PAYMENT2_0);
            $criteria->addSelectColumn(FbusersPeer::DATESHIPPED2_0);
            $criteria->addSelectColumn(FbusersPeer::V3_0);
            $criteria->addSelectColumn(FbusersPeer::PAYMENT3_0);
            $criteria->addSelectColumn(FbusersPeer::DATESHIPPED3_0);
            $criteria->addSelectColumn(FbusersPeer::V4_0);
            $criteria->addSelectColumn(FbusersPeer::PAYMENT4_0);
            $criteria->addSelectColumn(FbusersPeer::DATESHIPPED4_0);
            $criteria->addSelectColumn(FbusersPeer::V5_0);
            $criteria->addSelectColumn(FbusersPeer::PAYMENT5_0);
            $criteria->addSelectColumn(FbusersPeer::DATESHIPPED5_0);
            $criteria->addSelectColumn(FbusersPeer::V6_0);
            $criteria->addSelectColumn(FbusersPeer::PAYMENT6_0);
            $criteria->addSelectColumn(FbusersPeer::DATESHIPPED6_0);
            $criteria->addSelectColumn(FbusersPeer::V7_0);
            $criteria->addSelectColumn(FbusersPeer::PAYMENT7_0);
            $criteria->addSelectColumn(FbusersPeer::DATESHIPPED7_0);
            $criteria->addSelectColumn(FbusersPeer::V7_1);
            $criteria->addSelectColumn(FbusersPeer::PAYMENT7_1);
            $criteria->addSelectColumn(FbusersPeer::DATESHIPPED7_1);
            $criteria->addSelectColumn(FbusersPeer::E_MAIL);
            $criteria->addSelectColumn(FbusersPeer::WEBPAGE);
            $criteria->addSelectColumn(FbusersPeer::TELEPHONE);
            $criteria->addSelectColumn(FbusersPeer::FAX);
            $criteria->addSelectColumn(FbusersPeer::CONTACTBY);
            $criteria->addSelectColumn(FbusersPeer::COMMENT);
            $criteria->addSelectColumn(FbusersPeer::COPIESNUM);
            $criteria->addSelectColumn(FbusersPeer::COPIES2K);
            $criteria->addSelectColumn(FbusersPeer::SUBSCRIBER);
            $criteria->addSelectColumn(FbusersPeer::COLLABORATOR);
            $criteria->addSelectColumn(FbusersPeer::YEAR);
            $criteria->addSelectColumn(FbusersPeer::ENTERED);
            $criteria->addSelectColumn(FbusersPeer::DATEENTERED);
            $criteria->addSelectColumn(FbusersPeer::MODIFIED);
            $criteria->addSelectColumn(FbusersPeer::DATEMODIFIED);
            $criteria->addSelectColumn(FbusersPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.UserName');
            $criteria->addSelectColumn($alias . '.FirstName');
            $criteria->addSelectColumn($alias . '.Surname');
            $criteria->addSelectColumn($alias . '.Title');
            $criteria->addSelectColumn($alias . '.Institute');
            $criteria->addSelectColumn($alias . '.Position');
            $criteria->addSelectColumn($alias . '.UserAddress');
            $criteria->addSelectColumn($alias . '.UserAddress2');
            $criteria->addSelectColumn($alias . '.UserType');
            $criteria->addSelectColumn($alias . '.UserTypeOrder');
            $criteria->addSelectColumn($alias . '.Library');
            $criteria->addSelectColumn($alias . '.Museum');
            $criteria->addSelectColumn($alias . '.City');
            $criteria->addSelectColumn($alias . '.MailCountry');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.StateProvince');
            $criteria->addSelectColumn($alias . '.PostalCode');
            $criteria->addSelectColumn($alias . '.V1_0');
            $criteria->addSelectColumn($alias . '.Payment1_0');
            $criteria->addSelectColumn($alias . '.DateShipped1_0');
            $criteria->addSelectColumn($alias . '.V2_0');
            $criteria->addSelectColumn($alias . '.Payment2_0');
            $criteria->addSelectColumn($alias . '.DateShipped2_0');
            $criteria->addSelectColumn($alias . '.V3_0');
            $criteria->addSelectColumn($alias . '.Payment3_0');
            $criteria->addSelectColumn($alias . '.DateShipped3_0');
            $criteria->addSelectColumn($alias . '.V4_0');
            $criteria->addSelectColumn($alias . '.Payment4_0');
            $criteria->addSelectColumn($alias . '.DateShipped4_0');
            $criteria->addSelectColumn($alias . '.V5_0');
            $criteria->addSelectColumn($alias . '.Payment5_0');
            $criteria->addSelectColumn($alias . '.DateShipped5_0');
            $criteria->addSelectColumn($alias . '.V6_0');
            $criteria->addSelectColumn($alias . '.Payment6_0');
            $criteria->addSelectColumn($alias . '.DateShipped6_0');
            $criteria->addSelectColumn($alias . '.V7_0');
            $criteria->addSelectColumn($alias . '.Payment7_0');
            $criteria->addSelectColumn($alias . '.DateShipped7_0');
            $criteria->addSelectColumn($alias . '.V7_1');
            $criteria->addSelectColumn($alias . '.Payment7_1');
            $criteria->addSelectColumn($alias . '.DateShipped7_1');
            $criteria->addSelectColumn($alias . '.E_Mail');
            $criteria->addSelectColumn($alias . '.WebPage');
            $criteria->addSelectColumn($alias . '.Telephone');
            $criteria->addSelectColumn($alias . '.FAX');
            $criteria->addSelectColumn($alias . '.ContactBy');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.CopiesNum');
            $criteria->addSelectColumn($alias . '.Copies2k');
            $criteria->addSelectColumn($alias . '.Subscriber');
            $criteria->addSelectColumn($alias . '.Collaborator');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
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
        $criteria->setPrimaryTableName(FbusersPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FbusersPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FbusersPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Fbusers
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FbusersPeer::doSelect($critcopy, $con);
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
        return FbusersPeer::populateObjects(FbusersPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FbusersPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FbusersPeer::DATABASE_NAME);

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
     * @param Fbusers $obj A Fbusers object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getFirstname(), (string) $obj->getSurname(), (string) $obj->getUseraddress(), (string) $obj->getCity(), (string) $obj->getMailcountry()));
            } // if key === null
            FbusersPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Fbusers object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Fbusers) {
                $key = serialize(array((string) $value->getFirstname(), (string) $value->getSurname(), (string) $value->getUseraddress(), (string) $value->getCity(), (string) $value->getMailcountry()));
            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Fbusers object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FbusersPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Fbusers Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FbusersPeer::$instances[$key])) {
                return FbusersPeer::$instances[$key];
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
        foreach (FbusersPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FbusersPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to fbusers
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 6] === null && $row[$startcol + 12] === null && $row[$startcol + 13] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 6], (string) $row[$startcol + 12], (string) $row[$startcol + 13]));
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

        return array((string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 6], (string) $row[$startcol + 12], (string) $row[$startcol + 13]);
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
        $cls = FbusersPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FbusersPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FbusersPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FbusersPeer::addInstanceToPool($obj, $key);
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
     * @return array (Fbusers object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FbusersPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FbusersPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FbusersPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FbusersPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FbusersPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FbusersPeer::DATABASE_NAME)->getTable(FbusersPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFbusersPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFbusersPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FbusersTableMap());
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
        return FbusersPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Fbusers or Criteria object.
     *
     * @param      mixed $values Criteria or Fbusers object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Fbusers object
        }


        // Set the correct dbName
        $criteria->setDbName(FbusersPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Fbusers or Criteria object.
     *
     * @param      mixed $values Criteria or Fbusers object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FbusersPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FbusersPeer::FIRSTNAME);
            $value = $criteria->remove(FbusersPeer::FIRSTNAME);
            if ($value) {
                $selectCriteria->add(FbusersPeer::FIRSTNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FbusersPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FbusersPeer::SURNAME);
            $value = $criteria->remove(FbusersPeer::SURNAME);
            if ($value) {
                $selectCriteria->add(FbusersPeer::SURNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FbusersPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FbusersPeer::USERADDRESS);
            $value = $criteria->remove(FbusersPeer::USERADDRESS);
            if ($value) {
                $selectCriteria->add(FbusersPeer::USERADDRESS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FbusersPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FbusersPeer::CITY);
            $value = $criteria->remove(FbusersPeer::CITY);
            if ($value) {
                $selectCriteria->add(FbusersPeer::CITY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FbusersPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FbusersPeer::MAILCOUNTRY);
            $value = $criteria->remove(FbusersPeer::MAILCOUNTRY);
            if ($value) {
                $selectCriteria->add(FbusersPeer::MAILCOUNTRY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FbusersPeer::TABLE_NAME);
            }

        } else { // $values is Fbusers object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FbusersPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the fbusers table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FbusersPeer::TABLE_NAME, $con, FbusersPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FbusersPeer::clearInstancePool();
            FbusersPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Fbusers or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Fbusers object or primary key or array of primary keys
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
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FbusersPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Fbusers) { // it's a model object
            // invalidate the cache for this single object
            FbusersPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FbusersPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(FbusersPeer::FIRSTNAME, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(FbusersPeer::SURNAME, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(FbusersPeer::USERADDRESS, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(FbusersPeer::CITY, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(FbusersPeer::MAILCOUNTRY, $value[4]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                FbusersPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FbusersPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FbusersPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Fbusers object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Fbusers $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FbusersPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FbusersPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FbusersPeer::DATABASE_NAME, FbusersPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $firstname
     * @param   string $surname
     * @param   string $useraddress
     * @param   string $city
     * @param   string $mailcountry
     * @param      PropelPDO $con
     * @return Fbusers
     */
    public static function retrieveByPK($firstname, $surname, $useraddress, $city, $mailcountry, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $firstname, (string) $surname, (string) $useraddress, (string) $city, (string) $mailcountry));
         if (null !== ($obj = FbusersPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(FbusersPeer::DATABASE_NAME);
        $criteria->add(FbusersPeer::FIRSTNAME, $firstname);
        $criteria->add(FbusersPeer::SURNAME, $surname);
        $criteria->add(FbusersPeer::USERADDRESS, $useraddress);
        $criteria->add(FbusersPeer::CITY, $city);
        $criteria->add(FbusersPeer::MAILCOUNTRY, $mailcountry);
        $v = FbusersPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseFbusersPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFbusersPeer::buildTableMap();

