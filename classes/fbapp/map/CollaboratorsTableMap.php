<?php



/**
 * This class defines the structure of the 'collaborators' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.fbapp.map
 */
class CollaboratorsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CollaboratorsTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('collaborators');
        $this->setPhpName('Collaborators');
        $this->setClassname('Collaborators');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('Personnel', 'Personnel', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Surname', 'Surname', 'VARCHAR', true, 50, null);
        $this->addPrimaryKey('Prename', 'Prename', 'VARCHAR', true, 50, null);
        $this->addColumn('ReportGroup', 'Reportgroup', 'VARCHAR', false, 50, null);
        $this->addColumn('CollabType', 'Collabtype', 'VARCHAR', false, 25, null);
        $this->addColumn('E-mail', 'Email', 'LONGVARCHAR', false, null, null);
        $this->addColumn('E-mailNew', 'Emailnew', 'LONGVARCHAR', false, null, null);
        $this->addColumn('Comments', 'Comments', 'CLOB', false, null, null);
        $this->addColumn('Copyright', 'Copyright', 'LONGVARCHAR', false, null, null);
        $this->addColumn('RDE_user', 'RdeUser', 'TINYINT', false, null, null);
        $this->addColumn('Institute', 'Institute', 'VARCHAR', false, 150, null);
        $this->addColumn('Number', 'Number', 'VARCHAR', false, 6, null);
        $this->addColumn('Street', 'Street', 'VARCHAR', false, 65, null);
        $this->addColumn('City', 'City', 'VARCHAR', false, 40, null);
        $this->addColumn('Country', 'Country', 'VARCHAR', false, 20, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Telefon-City', 'Telefoncity', 'VARCHAR', false, 4, null);
        $this->addColumn('Telefon', 'Telefon', 'VARCHAR', false, 25, null);
        $this->addColumn('FAX', 'Fax', 'VARCHAR', false, 25, null);
        $this->addColumn('TELEX', 'Telex', 'VARCHAR', false, 70, null);
        $this->addColumn('WebPage', 'Webpage', 'LONGVARCHAR', false, null, null);
        $this->addColumn('Keywords', 'Keywords', 'VARCHAR', false, 255, null);
        $this->addColumn('LarvalBaseCollab', 'Larvalbasecollab', 'TINYINT', false, null, null);
        $this->addColumn('NARS', 'Nars', 'TINYINT', false, null, null);
        $this->addColumn('StaffPhoto', 'Staffphoto', 'BLOB', false, null, null);
        $this->addColumn('CollabTypeOrder', 'Collabtypeorder', 'FLOAT', false, null, null);
        $this->addColumn('Year', 'Year', 'SMALLINT', false, null, null);
        $this->addColumn('YearEnd', 'Yearend', 'SMALLINT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('DataEntered', 'Dataentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('edit_country', 'EditCountry', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_species', 'EditSpecies', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_comnames', 'EditComnames', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_larvalbase', 'EditLarvalbase', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_synonymsx', 'EditSynonymsx', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_pictures', 'EditPictures', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_expedition', 'EditExpedition', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_occurrence', 'EditOccurrence', 'VARCHAR', false, 1, null);
        $this->addColumn('show_email', 'ShowEmail', 'TINYINT', false, null, null);
        $this->addColumn('show_country', 'ShowCountry', 'TINYINT', false, null, null);
        $this->addColumn('show_address', 'ShowAddress', 'TINYINT', false, null, null);
        $this->addColumn('edit_genera', 'EditGenera', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_contacts', 'EditContacts', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_popdyn', 'EditPopdyn', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_introductions', 'EditIntroductions', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_aquamaint', 'EditAquamaint', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_factsheet', 'EditFactsheet', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_dbase', 'EditDbase', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_factsheet_aquaculture', 'EditFactsheetAquaculture', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_labels', 'EditLabels', 'VARCHAR', false, 1, null);
        $this->addColumn('edit_labels_lang', 'EditLabelsLang', 'VARCHAR', false, 50, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CollaboratorsTableMap
