<?php



/**
 * This class defines the structure of the 'synonyms' table.
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
class SynonymsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.SynonymsTableMap';

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
        $this->setName('synonyms');
        $this->setPhpName('Synonyms');
        $this->setClassname('Synonyms');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('SynCode', 'Syncode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('SynGenus', 'Syngenus', 'VARCHAR', true, 25, null);
        $this->addPrimaryKey('SynSpecies', 'Synspecies', 'VARCHAR', true, 45, null);
        $this->addPrimaryKey('Author', 'Author', 'VARCHAR', true, 95, null);
        $this->addColumn('Year', 'Year', 'SMALLINT', false, null, null);
        $this->addColumn('SynonymsRef', 'Synonymsref', 'INTEGER', false, null, null);
        $this->addColumn('TaxonLevel', 'Taxonlevel', 'VARCHAR', false, 20, null);
        $this->addColumn('SyncodeValid', 'Syncodevalid', 'INTEGER', false, null, null);
        $this->addColumn('LastEpithet', 'Lastepithet', 'VARCHAR', false, 50, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 255, null);
        $this->addColumn('Etymology', 'Etymology', 'CLOB', false, null, null);
        $this->addColumn('Status', 'Status', 'VARCHAR', true, 20, null);
        $this->addColumn('Valid', 'Valid', 'INTEGER', false, null, null);
        $this->addColumn('ValidTax', 'Validtax', 'TINYINT', false, null, null);
        $this->addPrimaryKey('Synonymy', 'Synonymy', 'VARCHAR', true, 20, '');
        $this->addColumn('SynonymyDetail', 'Synonymydetail', 'CHAR', false, 22, null);
        $this->addPrimaryKey('Combination', 'Combination', 'VARCHAR', true, 20, '');
        $this->addColumn('OriginalPub', 'Originalpub', 'VARCHAR', false, 1, null);
        $this->addPrimaryKey('Misspelling', 'Misspelling', 'INTEGER', true, null, 0);
        $this->addColumn('MisspellingDetail', 'Misspellingdetail', 'CHAR', false, 7, null);
        $this->addColumn('NounApposition', 'Nounapposition', 'TINYINT', false, null, null);
        $this->addColumn('StatusOrder', 'Statusorder', 'INTEGER', false, null, 0);
        $this->addColumn('RankSearch', 'Ranksearch', 'SMALLINT', false, null, null);
        $this->addColumn('CommentTax', 'Commenttax', 'VARCHAR', false, 255, null);
        $this->addColumn('GSDOriginal', 'Gsdoriginal', 'TINYINT', false, null, 0);
        $this->addColumn('GSDStatus', 'Gsdstatus', 'TINYINT', false, null, 0);
        $this->addColumn('GSDVersionDate', 'Gsdversiondate', 'TIMESTAMP', false, null, null);
        $this->addColumn('GSDExpert', 'Gsdexpert', 'INTEGER', false, null, null);
        $this->addColumn('CAS_REF_NO', 'CasRefNo', 'INTEGER', false, null, null);
        $this->addColumn('CAS_SPC', 'CasSpc', 'INTEGER', false, null, null);
        $this->addColumn('CoL', 'Col', 'TINYINT', false, null, null);
        $this->addColumn('CoL_ID', 'ColId', 'INTEGER', false, null, null);
        $this->addColumn('ZooBank_ID', 'ZoobankId', 'INTEGER', false, null, null);
        $this->addColumn('ION_ID', 'IonId', 'INTEGER', false, null, null);
        $this->addColumn('TSN', 'Tsn', 'INTEGER', false, null, null);
        $this->addColumn('WoRMS_ID', 'WormsId', 'INTEGER', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // SynonymsTableMap
