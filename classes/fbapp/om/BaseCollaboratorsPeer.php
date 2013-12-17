<?php


/**
 * Base static class for performing query and update operations on the 'collaborators' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseCollaboratorsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'collaborators';

    /** the related Propel class for this table */
    const OM_CLASS = 'Collaborators';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CollaboratorsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 54;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 54;

    /** the column name for the Personnel field */
    const PERSONNEL = 'collaborators.Personnel';

    /** the column name for the Surname field */
    const SURNAME = 'collaborators.Surname';

    /** the column name for the Prename field */
    const PRENAME = 'collaborators.Prename';

    /** the column name for the ReportGroup field */
    const REPORTGROUP = 'collaborators.ReportGroup';

    /** the column name for the CollabType field */
    const COLLABTYPE = 'collaborators.CollabType';

    /** the column name for the E-mail field */
    const E-MAIL = 'collaborators.E-mail';

    /** the column name for the E-mailNew field */
    const E-MAILNEW = 'collaborators.E-mailNew';

    /** the column name for the Comments field */
    const COMMENTS = 'collaborators.Comments';

    /** the column name for the Copyright field */
    const COPYRIGHT = 'collaborators.Copyright';

    /** the column name for the RDE_user field */
    const RDE_USER = 'collaborators.RDE_user';

    /** the column name for the Institute field */
    const INSTITUTE = 'collaborators.Institute';

    /** the column name for the Number field */
    const NUMBER = 'collaborators.Number';

    /** the column name for the Street field */
    const STREET = 'collaborators.Street';

    /** the column name for the City field */
    const CITY = 'collaborators.City';

    /** the column name for the Country field */
    const COUNTRY = 'collaborators.Country';

    /** the column name for the C_Code field */
    const C_CODE = 'collaborators.C_Code';

    /** the column name for the Telefon-City field */
    const TELEFON-CITY = 'collaborators.Telefon-City';

    /** the column name for the Telefon field */
    const TELEFON = 'collaborators.Telefon';

    /** the column name for the FAX field */
    const FAX = 'collaborators.FAX';

    /** the column name for the TELEX field */
    const TELEX = 'collaborators.TELEX';

    /** the column name for the WebPage field */
    const WEBPAGE = 'collaborators.WebPage';

    /** the column name for the Keywords field */
    const KEYWORDS = 'collaborators.Keywords';

    /** the column name for the LarvalBaseCollab field */
    const LARVALBASECOLLAB = 'collaborators.LarvalBaseCollab';

    /** the column name for the NARS field */
    const NARS = 'collaborators.NARS';

    /** the column name for the StaffPhoto field */
    const STAFFPHOTO = 'collaborators.StaffPhoto';

    /** the column name for the CollabTypeOrder field */
    const COLLABTYPEORDER = 'collaborators.CollabTypeOrder';

    /** the column name for the Year field */
    const YEAR = 'collaborators.Year';

    /** the column name for the YearEnd field */
    const YEAREND = 'collaborators.YearEnd';

    /** the column name for the Entered field */
    const ENTERED = 'collaborators.Entered';

    /** the column name for the DataEntered field */
    const DATAENTERED = 'collaborators.DataEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'collaborators.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'collaborators.DateModified';

    /** the column name for the edit_country field */
    const EDIT_COUNTRY = 'collaborators.edit_country';

    /** the column name for the edit_species field */
    const EDIT_SPECIES = 'collaborators.edit_species';

    /** the column name for the edit_comnames field */
    const EDIT_COMNAMES = 'collaborators.edit_comnames';

    /** the column name for the edit_larvalbase field */
    const EDIT_LARVALBASE = 'collaborators.edit_larvalbase';

    /** the column name for the edit_synonymsx field */
    const EDIT_SYNONYMSX = 'collaborators.edit_synonymsx';

    /** the column name for the edit_pictures field */
    const EDIT_PICTURES = 'collaborators.edit_pictures';

    /** the column name for the edit_expedition field */
    const EDIT_EXPEDITION = 'collaborators.edit_expedition';

    /** the column name for the edit_occurrence field */
    const EDIT_OCCURRENCE = 'collaborators.edit_occurrence';

    /** the column name for the show_email field */
    const SHOW_EMAIL = 'collaborators.show_email';

    /** the column name for the show_country field */
    const SHOW_COUNTRY = 'collaborators.show_country';

    /** the column name for the show_address field */
    const SHOW_ADDRESS = 'collaborators.show_address';

    /** the column name for the edit_genera field */
    const EDIT_GENERA = 'collaborators.edit_genera';

    /** the column name for the edit_contacts field */
    const EDIT_CONTACTS = 'collaborators.edit_contacts';

    /** the column name for the edit_popdyn field */
    const EDIT_POPDYN = 'collaborators.edit_popdyn';

    /** the column name for the edit_introductions field */
    const EDIT_INTRODUCTIONS = 'collaborators.edit_introductions';

    /** the column name for the edit_aquamaint field */
    const EDIT_AQUAMAINT = 'collaborators.edit_aquamaint';

    /** the column name for the edit_factsheet field */
    const EDIT_FACTSHEET = 'collaborators.edit_factsheet';

    /** the column name for the edit_dbase field */
    const EDIT_DBASE = 'collaborators.edit_dbase';

    /** the column name for the edit_factsheet_aquaculture field */
    const EDIT_FACTSHEET_AQUACULTURE = 'collaborators.edit_factsheet_aquaculture';

    /** the column name for the edit_labels field */
    const EDIT_LABELS = 'collaborators.edit_labels';

    /** the column name for the edit_labels_lang field */
    const EDIT_LABELS_LANG = 'collaborators.edit_labels_lang';

    /** the column name for the TS field */
    const TS = 'collaborators.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Collaborators objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Collaborators[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CollaboratorsPeer::$fieldNames[CollaboratorsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Personnel', 'Surname', 'Prename', 'Reportgroup', 'Collabtype', 'Email', 'Emailnew', 'Comments', 'Copyright', 'RdeUser', 'Institute', 'Number', 'Street', 'City', 'Country', 'CCode', 'Telefoncity', 'Telefon', 'Fax', 'Telex', 'Webpage', 'Keywords', 'Larvalbasecollab', 'Nars', 'Staffphoto', 'Collabtypeorder', 'Year', 'Yearend', 'Entered', 'Dataentered', 'Modified', 'Datemodified', 'EditCountry', 'EditSpecies', 'EditComnames', 'EditLarvalbase', 'EditSynonymsx', 'EditPictures', 'EditExpedition', 'EditOccurrence', 'ShowEmail', 'ShowCountry', 'ShowAddress', 'EditGenera', 'EditContacts', 'EditPopdyn', 'EditIntroductions', 'EditAquamaint', 'EditFactsheet', 'EditDbase', 'EditFactsheetAquaculture', 'EditLabels', 'EditLabelsLang', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('personnel', 'surname', 'prename', 'reportgroup', 'collabtype', 'email', 'emailnew', 'comments', 'copyright', 'rdeUser', 'institute', 'number', 'street', 'city', 'country', 'cCode', 'telefoncity', 'telefon', 'fax', 'telex', 'webpage', 'keywords', 'larvalbasecollab', 'nars', 'staffphoto', 'collabtypeorder', 'year', 'yearend', 'entered', 'dataentered', 'modified', 'datemodified', 'editCountry', 'editSpecies', 'editComnames', 'editLarvalbase', 'editSynonymsx', 'editPictures', 'editExpedition', 'editOccurrence', 'showEmail', 'showCountry', 'showAddress', 'editGenera', 'editContacts', 'editPopdyn', 'editIntroductions', 'editAquamaint', 'editFactsheet', 'editDbase', 'editFactsheetAquaculture', 'editLabels', 'editLabelsLang', 'ts', ),
        BasePeer::TYPE_COLNAME => array (CollaboratorsPeer::PERSONNEL, CollaboratorsPeer::SURNAME, CollaboratorsPeer::PRENAME, CollaboratorsPeer::REPORTGROUP, CollaboratorsPeer::COLLABTYPE, CollaboratorsPeer::E-MAIL, CollaboratorsPeer::E-MAILNEW, CollaboratorsPeer::COMMENTS, CollaboratorsPeer::COPYRIGHT, CollaboratorsPeer::RDE_USER, CollaboratorsPeer::INSTITUTE, CollaboratorsPeer::NUMBER, CollaboratorsPeer::STREET, CollaboratorsPeer::CITY, CollaboratorsPeer::COUNTRY, CollaboratorsPeer::C_CODE, CollaboratorsPeer::TELEFON-CITY, CollaboratorsPeer::TELEFON, CollaboratorsPeer::FAX, CollaboratorsPeer::TELEX, CollaboratorsPeer::WEBPAGE, CollaboratorsPeer::KEYWORDS, CollaboratorsPeer::LARVALBASECOLLAB, CollaboratorsPeer::NARS, CollaboratorsPeer::STAFFPHOTO, CollaboratorsPeer::COLLABTYPEORDER, CollaboratorsPeer::YEAR, CollaboratorsPeer::YEAREND, CollaboratorsPeer::ENTERED, CollaboratorsPeer::DATAENTERED, CollaboratorsPeer::MODIFIED, CollaboratorsPeer::DATEMODIFIED, CollaboratorsPeer::EDIT_COUNTRY, CollaboratorsPeer::EDIT_SPECIES, CollaboratorsPeer::EDIT_COMNAMES, CollaboratorsPeer::EDIT_LARVALBASE, CollaboratorsPeer::EDIT_SYNONYMSX, CollaboratorsPeer::EDIT_PICTURES, CollaboratorsPeer::EDIT_EXPEDITION, CollaboratorsPeer::EDIT_OCCURRENCE, CollaboratorsPeer::SHOW_EMAIL, CollaboratorsPeer::SHOW_COUNTRY, CollaboratorsPeer::SHOW_ADDRESS, CollaboratorsPeer::EDIT_GENERA, CollaboratorsPeer::EDIT_CONTACTS, CollaboratorsPeer::EDIT_POPDYN, CollaboratorsPeer::EDIT_INTRODUCTIONS, CollaboratorsPeer::EDIT_AQUAMAINT, CollaboratorsPeer::EDIT_FACTSHEET, CollaboratorsPeer::EDIT_DBASE, CollaboratorsPeer::EDIT_FACTSHEET_AQUACULTURE, CollaboratorsPeer::EDIT_LABELS, CollaboratorsPeer::EDIT_LABELS_LANG, CollaboratorsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PERSONNEL', 'SURNAME', 'PRENAME', 'REPORTGROUP', 'COLLABTYPE', 'E-MAIL', 'E-MAILNEW', 'COMMENTS', 'COPYRIGHT', 'RDE_USER', 'INSTITUTE', 'NUMBER', 'STREET', 'CITY', 'COUNTRY', 'C_CODE', 'TELEFON-CITY', 'TELEFON', 'FAX', 'TELEX', 'WEBPAGE', 'KEYWORDS', 'LARVALBASECOLLAB', 'NARS', 'STAFFPHOTO', 'COLLABTYPEORDER', 'YEAR', 'YEAREND', 'ENTERED', 'DATAENTERED', 'MODIFIED', 'DATEMODIFIED', 'EDIT_COUNTRY', 'EDIT_SPECIES', 'EDIT_COMNAMES', 'EDIT_LARVALBASE', 'EDIT_SYNONYMSX', 'EDIT_PICTURES', 'EDIT_EXPEDITION', 'EDIT_OCCURRENCE', 'SHOW_EMAIL', 'SHOW_COUNTRY', 'SHOW_ADDRESS', 'EDIT_GENERA', 'EDIT_CONTACTS', 'EDIT_POPDYN', 'EDIT_INTRODUCTIONS', 'EDIT_AQUAMAINT', 'EDIT_FACTSHEET', 'EDIT_DBASE', 'EDIT_FACTSHEET_AQUACULTURE', 'EDIT_LABELS', 'EDIT_LABELS_LANG', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('Personnel', 'Surname', 'Prename', 'ReportGroup', 'CollabType', 'E-mail', 'E-mailNew', 'Comments', 'Copyright', 'RDE_user', 'Institute', 'Number', 'Street', 'City', 'Country', 'C_Code', 'Telefon-City', 'Telefon', 'FAX', 'TELEX', 'WebPage', 'Keywords', 'LarvalBaseCollab', 'NARS', 'StaffPhoto', 'CollabTypeOrder', 'Year', 'YearEnd', 'Entered', 'DataEntered', 'Modified', 'DateModified', 'edit_country', 'edit_species', 'edit_comnames', 'edit_larvalbase', 'edit_synonymsx', 'edit_pictures', 'edit_expedition', 'edit_occurrence', 'show_email', 'show_country', 'show_address', 'edit_genera', 'edit_contacts', 'edit_popdyn', 'edit_introductions', 'edit_aquamaint', 'edit_factsheet', 'edit_dbase', 'edit_factsheet_aquaculture', 'edit_labels', 'edit_labels_lang', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CollaboratorsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Personnel' => 0, 'Surname' => 1, 'Prename' => 2, 'Reportgroup' => 3, 'Collabtype' => 4, 'Email' => 5, 'Emailnew' => 6, 'Comments' => 7, 'Copyright' => 8, 'RdeUser' => 9, 'Institute' => 10, 'Number' => 11, 'Street' => 12, 'City' => 13, 'Country' => 14, 'CCode' => 15, 'Telefoncity' => 16, 'Telefon' => 17, 'Fax' => 18, 'Telex' => 19, 'Webpage' => 20, 'Keywords' => 21, 'Larvalbasecollab' => 22, 'Nars' => 23, 'Staffphoto' => 24, 'Collabtypeorder' => 25, 'Year' => 26, 'Yearend' => 27, 'Entered' => 28, 'Dataentered' => 29, 'Modified' => 30, 'Datemodified' => 31, 'EditCountry' => 32, 'EditSpecies' => 33, 'EditComnames' => 34, 'EditLarvalbase' => 35, 'EditSynonymsx' => 36, 'EditPictures' => 37, 'EditExpedition' => 38, 'EditOccurrence' => 39, 'ShowEmail' => 40, 'ShowCountry' => 41, 'ShowAddress' => 42, 'EditGenera' => 43, 'EditContacts' => 44, 'EditPopdyn' => 45, 'EditIntroductions' => 46, 'EditAquamaint' => 47, 'EditFactsheet' => 48, 'EditDbase' => 49, 'EditFactsheetAquaculture' => 50, 'EditLabels' => 51, 'EditLabelsLang' => 52, 'Ts' => 53, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('personnel' => 0, 'surname' => 1, 'prename' => 2, 'reportgroup' => 3, 'collabtype' => 4, 'email' => 5, 'emailnew' => 6, 'comments' => 7, 'copyright' => 8, 'rdeUser' => 9, 'institute' => 10, 'number' => 11, 'street' => 12, 'city' => 13, 'country' => 14, 'cCode' => 15, 'telefoncity' => 16, 'telefon' => 17, 'fax' => 18, 'telex' => 19, 'webpage' => 20, 'keywords' => 21, 'larvalbasecollab' => 22, 'nars' => 23, 'staffphoto' => 24, 'collabtypeorder' => 25, 'year' => 26, 'yearend' => 27, 'entered' => 28, 'dataentered' => 29, 'modified' => 30, 'datemodified' => 31, 'editCountry' => 32, 'editSpecies' => 33, 'editComnames' => 34, 'editLarvalbase' => 35, 'editSynonymsx' => 36, 'editPictures' => 37, 'editExpedition' => 38, 'editOccurrence' => 39, 'showEmail' => 40, 'showCountry' => 41, 'showAddress' => 42, 'editGenera' => 43, 'editContacts' => 44, 'editPopdyn' => 45, 'editIntroductions' => 46, 'editAquamaint' => 47, 'editFactsheet' => 48, 'editDbase' => 49, 'editFactsheetAquaculture' => 50, 'editLabels' => 51, 'editLabelsLang' => 52, 'ts' => 53, ),
        BasePeer::TYPE_COLNAME => array (CollaboratorsPeer::PERSONNEL => 0, CollaboratorsPeer::SURNAME => 1, CollaboratorsPeer::PRENAME => 2, CollaboratorsPeer::REPORTGROUP => 3, CollaboratorsPeer::COLLABTYPE => 4, CollaboratorsPeer::E-MAIL => 5, CollaboratorsPeer::E-MAILNEW => 6, CollaboratorsPeer::COMMENTS => 7, CollaboratorsPeer::COPYRIGHT => 8, CollaboratorsPeer::RDE_USER => 9, CollaboratorsPeer::INSTITUTE => 10, CollaboratorsPeer::NUMBER => 11, CollaboratorsPeer::STREET => 12, CollaboratorsPeer::CITY => 13, CollaboratorsPeer::COUNTRY => 14, CollaboratorsPeer::C_CODE => 15, CollaboratorsPeer::TELEFON-CITY => 16, CollaboratorsPeer::TELEFON => 17, CollaboratorsPeer::FAX => 18, CollaboratorsPeer::TELEX => 19, CollaboratorsPeer::WEBPAGE => 20, CollaboratorsPeer::KEYWORDS => 21, CollaboratorsPeer::LARVALBASECOLLAB => 22, CollaboratorsPeer::NARS => 23, CollaboratorsPeer::STAFFPHOTO => 24, CollaboratorsPeer::COLLABTYPEORDER => 25, CollaboratorsPeer::YEAR => 26, CollaboratorsPeer::YEAREND => 27, CollaboratorsPeer::ENTERED => 28, CollaboratorsPeer::DATAENTERED => 29, CollaboratorsPeer::MODIFIED => 30, CollaboratorsPeer::DATEMODIFIED => 31, CollaboratorsPeer::EDIT_COUNTRY => 32, CollaboratorsPeer::EDIT_SPECIES => 33, CollaboratorsPeer::EDIT_COMNAMES => 34, CollaboratorsPeer::EDIT_LARVALBASE => 35, CollaboratorsPeer::EDIT_SYNONYMSX => 36, CollaboratorsPeer::EDIT_PICTURES => 37, CollaboratorsPeer::EDIT_EXPEDITION => 38, CollaboratorsPeer::EDIT_OCCURRENCE => 39, CollaboratorsPeer::SHOW_EMAIL => 40, CollaboratorsPeer::SHOW_COUNTRY => 41, CollaboratorsPeer::SHOW_ADDRESS => 42, CollaboratorsPeer::EDIT_GENERA => 43, CollaboratorsPeer::EDIT_CONTACTS => 44, CollaboratorsPeer::EDIT_POPDYN => 45, CollaboratorsPeer::EDIT_INTRODUCTIONS => 46, CollaboratorsPeer::EDIT_AQUAMAINT => 47, CollaboratorsPeer::EDIT_FACTSHEET => 48, CollaboratorsPeer::EDIT_DBASE => 49, CollaboratorsPeer::EDIT_FACTSHEET_AQUACULTURE => 50, CollaboratorsPeer::EDIT_LABELS => 51, CollaboratorsPeer::EDIT_LABELS_LANG => 52, CollaboratorsPeer::TS => 53, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PERSONNEL' => 0, 'SURNAME' => 1, 'PRENAME' => 2, 'REPORTGROUP' => 3, 'COLLABTYPE' => 4, 'E-MAIL' => 5, 'E-MAILNEW' => 6, 'COMMENTS' => 7, 'COPYRIGHT' => 8, 'RDE_USER' => 9, 'INSTITUTE' => 10, 'NUMBER' => 11, 'STREET' => 12, 'CITY' => 13, 'COUNTRY' => 14, 'C_CODE' => 15, 'TELEFON-CITY' => 16, 'TELEFON' => 17, 'FAX' => 18, 'TELEX' => 19, 'WEBPAGE' => 20, 'KEYWORDS' => 21, 'LARVALBASECOLLAB' => 22, 'NARS' => 23, 'STAFFPHOTO' => 24, 'COLLABTYPEORDER' => 25, 'YEAR' => 26, 'YEAREND' => 27, 'ENTERED' => 28, 'DATAENTERED' => 29, 'MODIFIED' => 30, 'DATEMODIFIED' => 31, 'EDIT_COUNTRY' => 32, 'EDIT_SPECIES' => 33, 'EDIT_COMNAMES' => 34, 'EDIT_LARVALBASE' => 35, 'EDIT_SYNONYMSX' => 36, 'EDIT_PICTURES' => 37, 'EDIT_EXPEDITION' => 38, 'EDIT_OCCURRENCE' => 39, 'SHOW_EMAIL' => 40, 'SHOW_COUNTRY' => 41, 'SHOW_ADDRESS' => 42, 'EDIT_GENERA' => 43, 'EDIT_CONTACTS' => 44, 'EDIT_POPDYN' => 45, 'EDIT_INTRODUCTIONS' => 46, 'EDIT_AQUAMAINT' => 47, 'EDIT_FACTSHEET' => 48, 'EDIT_DBASE' => 49, 'EDIT_FACTSHEET_AQUACULTURE' => 50, 'EDIT_LABELS' => 51, 'EDIT_LABELS_LANG' => 52, 'TS' => 53, ),
        BasePeer::TYPE_FIELDNAME => array ('Personnel' => 0, 'Surname' => 1, 'Prename' => 2, 'ReportGroup' => 3, 'CollabType' => 4, 'E-mail' => 5, 'E-mailNew' => 6, 'Comments' => 7, 'Copyright' => 8, 'RDE_user' => 9, 'Institute' => 10, 'Number' => 11, 'Street' => 12, 'City' => 13, 'Country' => 14, 'C_Code' => 15, 'Telefon-City' => 16, 'Telefon' => 17, 'FAX' => 18, 'TELEX' => 19, 'WebPage' => 20, 'Keywords' => 21, 'LarvalBaseCollab' => 22, 'NARS' => 23, 'StaffPhoto' => 24, 'CollabTypeOrder' => 25, 'Year' => 26, 'YearEnd' => 27, 'Entered' => 28, 'DataEntered' => 29, 'Modified' => 30, 'DateModified' => 31, 'edit_country' => 32, 'edit_species' => 33, 'edit_comnames' => 34, 'edit_larvalbase' => 35, 'edit_synonymsx' => 36, 'edit_pictures' => 37, 'edit_expedition' => 38, 'edit_occurrence' => 39, 'show_email' => 40, 'show_country' => 41, 'show_address' => 42, 'edit_genera' => 43, 'edit_contacts' => 44, 'edit_popdyn' => 45, 'edit_introductions' => 46, 'edit_aquamaint' => 47, 'edit_factsheet' => 48, 'edit_dbase' => 49, 'edit_factsheet_aquaculture' => 50, 'edit_labels' => 51, 'edit_labels_lang' => 52, 'TS' => 53, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, )
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
        $toNames = CollaboratorsPeer::getFieldNames($toType);
        $key = isset(CollaboratorsPeer::$fieldKeys[$fromType][$name]) ? CollaboratorsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CollaboratorsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CollaboratorsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CollaboratorsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CollaboratorsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CollaboratorsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CollaboratorsPeer::PERSONNEL);
            $criteria->addSelectColumn(CollaboratorsPeer::SURNAME);
            $criteria->addSelectColumn(CollaboratorsPeer::PRENAME);
            $criteria->addSelectColumn(CollaboratorsPeer::REPORTGROUP);
            $criteria->addSelectColumn(CollaboratorsPeer::COLLABTYPE);
            $criteria->addSelectColumn(CollaboratorsPeer::E-MAIL);
            $criteria->addSelectColumn(CollaboratorsPeer::E-MAILNEW);
            $criteria->addSelectColumn(CollaboratorsPeer::COMMENTS);
            $criteria->addSelectColumn(CollaboratorsPeer::COPYRIGHT);
            $criteria->addSelectColumn(CollaboratorsPeer::RDE_USER);
            $criteria->addSelectColumn(CollaboratorsPeer::INSTITUTE);
            $criteria->addSelectColumn(CollaboratorsPeer::NUMBER);
            $criteria->addSelectColumn(CollaboratorsPeer::STREET);
            $criteria->addSelectColumn(CollaboratorsPeer::CITY);
            $criteria->addSelectColumn(CollaboratorsPeer::COUNTRY);
            $criteria->addSelectColumn(CollaboratorsPeer::C_CODE);
            $criteria->addSelectColumn(CollaboratorsPeer::TELEFON-CITY);
            $criteria->addSelectColumn(CollaboratorsPeer::TELEFON);
            $criteria->addSelectColumn(CollaboratorsPeer::FAX);
            $criteria->addSelectColumn(CollaboratorsPeer::TELEX);
            $criteria->addSelectColumn(CollaboratorsPeer::WEBPAGE);
            $criteria->addSelectColumn(CollaboratorsPeer::KEYWORDS);
            $criteria->addSelectColumn(CollaboratorsPeer::LARVALBASECOLLAB);
            $criteria->addSelectColumn(CollaboratorsPeer::NARS);
            $criteria->addSelectColumn(CollaboratorsPeer::STAFFPHOTO);
            $criteria->addSelectColumn(CollaboratorsPeer::COLLABTYPEORDER);
            $criteria->addSelectColumn(CollaboratorsPeer::YEAR);
            $criteria->addSelectColumn(CollaboratorsPeer::YEAREND);
            $criteria->addSelectColumn(CollaboratorsPeer::ENTERED);
            $criteria->addSelectColumn(CollaboratorsPeer::DATAENTERED);
            $criteria->addSelectColumn(CollaboratorsPeer::MODIFIED);
            $criteria->addSelectColumn(CollaboratorsPeer::DATEMODIFIED);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_COUNTRY);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_SPECIES);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_COMNAMES);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_LARVALBASE);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_SYNONYMSX);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_PICTURES);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_EXPEDITION);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_OCCURRENCE);
            $criteria->addSelectColumn(CollaboratorsPeer::SHOW_EMAIL);
            $criteria->addSelectColumn(CollaboratorsPeer::SHOW_COUNTRY);
            $criteria->addSelectColumn(CollaboratorsPeer::SHOW_ADDRESS);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_GENERA);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_CONTACTS);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_POPDYN);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_INTRODUCTIONS);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_AQUAMAINT);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_FACTSHEET);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_DBASE);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_FACTSHEET_AQUACULTURE);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_LABELS);
            $criteria->addSelectColumn(CollaboratorsPeer::EDIT_LABELS_LANG);
            $criteria->addSelectColumn(CollaboratorsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.Personnel');
            $criteria->addSelectColumn($alias . '.Surname');
            $criteria->addSelectColumn($alias . '.Prename');
            $criteria->addSelectColumn($alias . '.ReportGroup');
            $criteria->addSelectColumn($alias . '.CollabType');
            $criteria->addSelectColumn($alias . '.E-mail');
            $criteria->addSelectColumn($alias . '.E-mailNew');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.Copyright');
            $criteria->addSelectColumn($alias . '.RDE_user');
            $criteria->addSelectColumn($alias . '.Institute');
            $criteria->addSelectColumn($alias . '.Number');
            $criteria->addSelectColumn($alias . '.Street');
            $criteria->addSelectColumn($alias . '.City');
            $criteria->addSelectColumn($alias . '.Country');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Telefon-City');
            $criteria->addSelectColumn($alias . '.Telefon');
            $criteria->addSelectColumn($alias . '.FAX');
            $criteria->addSelectColumn($alias . '.TELEX');
            $criteria->addSelectColumn($alias . '.WebPage');
            $criteria->addSelectColumn($alias . '.Keywords');
            $criteria->addSelectColumn($alias . '.LarvalBaseCollab');
            $criteria->addSelectColumn($alias . '.NARS');
            $criteria->addSelectColumn($alias . '.StaffPhoto');
            $criteria->addSelectColumn($alias . '.CollabTypeOrder');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.YearEnd');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DataEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.edit_country');
            $criteria->addSelectColumn($alias . '.edit_species');
            $criteria->addSelectColumn($alias . '.edit_comnames');
            $criteria->addSelectColumn($alias . '.edit_larvalbase');
            $criteria->addSelectColumn($alias . '.edit_synonymsx');
            $criteria->addSelectColumn($alias . '.edit_pictures');
            $criteria->addSelectColumn($alias . '.edit_expedition');
            $criteria->addSelectColumn($alias . '.edit_occurrence');
            $criteria->addSelectColumn($alias . '.show_email');
            $criteria->addSelectColumn($alias . '.show_country');
            $criteria->addSelectColumn($alias . '.show_address');
            $criteria->addSelectColumn($alias . '.edit_genera');
            $criteria->addSelectColumn($alias . '.edit_contacts');
            $criteria->addSelectColumn($alias . '.edit_popdyn');
            $criteria->addSelectColumn($alias . '.edit_introductions');
            $criteria->addSelectColumn($alias . '.edit_aquamaint');
            $criteria->addSelectColumn($alias . '.edit_factsheet');
            $criteria->addSelectColumn($alias . '.edit_dbase');
            $criteria->addSelectColumn($alias . '.edit_factsheet_aquaculture');
            $criteria->addSelectColumn($alias . '.edit_labels');
            $criteria->addSelectColumn($alias . '.edit_labels_lang');
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
        $criteria->setPrimaryTableName(CollaboratorsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CollaboratorsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CollaboratorsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Collaborators
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CollaboratorsPeer::doSelect($critcopy, $con);
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
        return CollaboratorsPeer::populateObjects(CollaboratorsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CollaboratorsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CollaboratorsPeer::DATABASE_NAME);

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
     * @param Collaborators $obj A Collaborators object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSurname(), (string) $obj->getPrename()));
            } // if key === null
            CollaboratorsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Collaborators object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Collaborators) {
                $key = serialize(array((string) $value->getSurname(), (string) $value->getPrename()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Collaborators object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CollaboratorsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Collaborators Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CollaboratorsPeer::$instances[$key])) {
                return CollaboratorsPeer::$instances[$key];
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
        foreach (CollaboratorsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CollaboratorsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to collaborators
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2]));
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

        return array((string) $row[$startcol + 1], (string) $row[$startcol + 2]);
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
        $cls = CollaboratorsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CollaboratorsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CollaboratorsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CollaboratorsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Collaborators object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CollaboratorsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CollaboratorsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CollaboratorsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CollaboratorsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CollaboratorsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CollaboratorsPeer::DATABASE_NAME)->getTable(CollaboratorsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCollaboratorsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCollaboratorsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CollaboratorsTableMap());
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
        return CollaboratorsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Collaborators or Criteria object.
     *
     * @param      mixed $values Criteria or Collaborators object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Collaborators object
        }


        // Set the correct dbName
        $criteria->setDbName(CollaboratorsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Collaborators or Criteria object.
     *
     * @param      mixed $values Criteria or Collaborators object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CollaboratorsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CollaboratorsPeer::SURNAME);
            $value = $criteria->remove(CollaboratorsPeer::SURNAME);
            if ($value) {
                $selectCriteria->add(CollaboratorsPeer::SURNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CollaboratorsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CollaboratorsPeer::PRENAME);
            $value = $criteria->remove(CollaboratorsPeer::PRENAME);
            if ($value) {
                $selectCriteria->add(CollaboratorsPeer::PRENAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CollaboratorsPeer::TABLE_NAME);
            }

        } else { // $values is Collaborators object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CollaboratorsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the collaborators table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CollaboratorsPeer::TABLE_NAME, $con, CollaboratorsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CollaboratorsPeer::clearInstancePool();
            CollaboratorsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Collaborators or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Collaborators object or primary key or array of primary keys
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
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CollaboratorsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Collaborators) { // it's a model object
            // invalidate the cache for this single object
            CollaboratorsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CollaboratorsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CollaboratorsPeer::SURNAME, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CollaboratorsPeer::PRENAME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CollaboratorsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CollaboratorsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CollaboratorsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Collaborators object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Collaborators $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CollaboratorsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CollaboratorsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CollaboratorsPeer::DATABASE_NAME, CollaboratorsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $surname
     * @param   string $prename
     * @param      PropelPDO $con
     * @return Collaborators
     */
    public static function retrieveByPK($surname, $prename, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $surname, (string) $prename));
         if (null !== ($obj = CollaboratorsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CollaboratorsPeer::DATABASE_NAME);
        $criteria->add(CollaboratorsPeer::SURNAME, $surname);
        $criteria->add(CollaboratorsPeer::PRENAME, $prename);
        $v = CollaboratorsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCollaboratorsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCollaboratorsPeer::buildTableMap();

