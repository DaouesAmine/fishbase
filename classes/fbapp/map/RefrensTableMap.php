<?php



/**
 * This class defines the structure of the 'refrens' table.
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
class RefrensTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.RefrensTableMap';

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
        $this->setName('refrens');
        $this->setPhpName('Refrens');
        $this->setClassname('Refrens');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('RefNo', 'Refno', 'INTEGER', true, null, null);
        $this->addColumn('RMSNo', 'Rmsno', 'INTEGER', true, null, null);
        $this->addColumn('Author', 'Author', 'VARCHAR', true, 255, null);
        $this->addColumn('Year', 'Year', 'SMALLINT', true, null, null);
        $this->addColumn('Title', 'Title', 'CLOB', true, null, null);
        $this->addColumn('Source', 'Source', 'CLOB', true, null, null);
        $this->addColumn('SourceUnique', 'Sourceunique', 'VARCHAR', true, 255, null);
        $this->addColumn('FirstAuthor', 'Firstauthor', 'VARCHAR', false, 65, null);
        $this->addColumn('Language', 'Language', 'VARCHAR', false, 20, null);
        $this->addColumn('Complete', 'Complete', 'TINYINT', false, null, null);
        $this->addColumn('RefType', 'Reftype', 'VARCHAR', false, 50, null);
        $this->addColumn('Keywords', 'Keywords', 'VARCHAR', false, 255, null);
        $this->addColumn('Remarks', 'Remarks', 'CLOB', false, null, null);
        $this->addColumn('CrossRef1', 'Crossref1', 'INTEGER', false, null, null);
        $this->addColumn('CrossRef2', 'Crossref2', 'INTEGER', false, null, null);
        $this->addColumn('CrossRef3', 'Crossref3', 'INTEGER', false, null, null);
        $this->addColumn('CrossRef4', 'Crossref4', 'INTEGER', false, null, null);
        $this->addColumn('CrossRef5', 'Crossref5', 'INTEGER', false, null, null);
        $this->addColumn('CAS_REF_NO', 'CasRefNo', 'INTEGER', false, null, null);
        $this->addColumn('Ecology', 'Ecology', 'TINYINT', false, null, null);
        $this->addColumn('Ecotoxicology', 'Ecotoxicology', 'TINYINT', false, null, null);
        $this->addColumn('PopDynamics', 'Popdynamics', 'TINYINT', false, null, null);
        $this->addColumn('Aquaculture', 'Aquaculture', 'TINYINT', false, null, null);
        $this->addColumn('Brains', 'Brains', 'TINYINT', false, null, null);
        $this->addColumn('Reproduction', 'Reproduction', 'TINYINT', false, null, null);
        $this->addColumn('Migration', 'Migration', 'TINYINT', false, null, null);
        $this->addColumn('Growth', 'Growth', 'TINYINT', false, null, null);
        $this->addColumn('Recruitment', 'Recruitment', 'TINYINT', false, null, null);
        $this->addColumn('Vision', 'Vision', 'TINYINT', false, null, null);
        $this->addColumn('Ciguatera', 'Ciguatera', 'TINYINT', false, null, null);
        $this->addColumn('FryNursery', 'Frynursery', 'TINYINT', false, null, null);
        $this->addColumn('Maturity', 'Maturity', 'TINYINT', false, null, null);
        $this->addColumn('Distribution', 'Distribution', 'TINYINT', false, null, null);
        $this->addColumn('Mortality', 'Mortality', 'TINYINT', false, null, null);
        $this->addColumn('FarmingSystem', 'Farmingsystem', 'TINYINT', false, null, null);
        $this->addColumn('Eggs', 'Eggs', 'TINYINT', false, null, null);
        $this->addColumn('Habitats', 'Habitats', 'TINYINT', false, null, null);
        $this->addColumn('LengthWeight', 'Lengthweight', 'TINYINT', false, null, null);
        $this->addColumn('LengthFreq', 'Lengthfreq', 'TINYINT', false, null, null);
        $this->addColumn('Strains', 'Strains', 'TINYINT', false, null, null);
        $this->addColumn('Larvae', 'Larvae', 'TINYINT', false, null, null);
        $this->addColumn('Environment', 'Environment', 'TINYINT', false, null, null);
        $this->addColumn('Stocks', 'Stocks', 'TINYINT', false, null, null);
        $this->addColumn('Genetics', 'Genetics', 'TINYINT', false, null, null);
        $this->addColumn('Spawning', 'Spawning', 'TINYINT', false, null, null);
        $this->addColumn('Abundance', 'Abundance', 'TINYINT', false, null, null);
        $this->addColumn('Catches', 'Catches', 'TINYINT', false, null, null);
        $this->addColumn('Electrophoresis', 'Electrophoresis', 'TINYINT', false, null, null);
        $this->addColumn('SexRatio', 'Sexratio', 'TINYINT', false, null, null);
        $this->addColumn('Activity', 'Activity', 'TINYINT', false, null, null);
        $this->addColumn('Effort', 'Effort', 'TINYINT', false, null, null);
        $this->addColumn('Diseases', 'Diseases', 'TINYINT', false, null, null);
        $this->addColumn('Predators', 'Predators', 'TINYINT', false, null, null);
        $this->addColumn('Behavior', 'Behavior', 'TINYINT', false, null, null);
        $this->addColumn('Management', 'Management', 'TINYINT', false, null, null);
        $this->addColumn('Introduction', 'Introduction', 'TINYINT', false, null, null);
        $this->addColumn('Competitors', 'Competitors', 'TINYINT', false, null, null);
        $this->addColumn('Food', 'Food', 'TINYINT', false, null, null);
        $this->addColumn('Nomenclature', 'Nomenclature', 'TINYINT', false, null, null);
        $this->addColumn('Revision', 'Revision', 'TINYINT', false, null, null);
        $this->addColumn('Physiology', 'Physiology', 'TINYINT', false, null, null);
        $this->addColumn('Morphology', 'Morphology', 'TINYINT', false, null, null);
        $this->addColumn('Otolith', 'Otolith', 'TINYINT', false, 2, null);
        $this->addColumn('FoodConsum', 'Foodconsum', 'TINYINT', false, null, null);
        $this->addColumn('OrigDescr', 'Origdescr', 'TINYINT', false, null, null);
        $this->addColumn('Oxygen', 'Oxygen', 'TINYINT', false, null, null);
        $this->addColumn('MaxLength', 'Maxlength', 'TINYINT', false, null, null);
        $this->addColumn('Diet', 'Diet', 'TINYINT', false, null, null);
        $this->addColumn('RawData', 'Rawdata', 'TINYINT', false, null, null);
        $this->addColumn('Speeds', 'Speeds', 'TINYINT', false, null, null);
        $this->addColumn('MaxWeight', 'Maxweight', 'TINYINT', false, null, null);
        $this->addColumn('Longevity', 'Longevity', 'TINYINT', false, null, null);
        $this->addColumn('Keys', 'Keys', 'TINYINT', false, null, null);
        $this->addColumn('Broodstock', 'Broodstock', 'TINYINT', false, null, null);
        $this->addColumn('EggNursery', 'Eggnursery', 'TINYINT', false, null, null);
        $this->addColumn('LarvalNursery', 'Larvalnursery', 'TINYINT', false, null, null);
        $this->addColumn('Citation', 'Citation', 'TINYINT', false, null, null);
        $this->addColumn('Team', 'Team', 'TINYINT', false, null, null);
        $this->addColumn('Aquarium', 'Aquarium', 'TINYINT', false, null, null);
        $this->addColumn('Processing', 'Processing', 'TINYINT', false, null, null);
        $this->addColumn('Comname', 'Comname', 'TINYINT', false, null, null);
        $this->addColumn('Pictures', 'Pictures', 'TINYINT', false, null, null);
        $this->addColumn('Tagrecapture', 'Tagrecapture', 'TINYINT', false, null, null);
        $this->addColumn('Conservation', 'Conservation', 'TINYINT', false, null, null);
        $this->addColumn('Checklist', 'Checklist', 'TINYINT', false, null, null);
        $this->addColumn('ISBN', 'Isbn', 'VARCHAR', false, 50, null);
        $this->addColumn('DOI', 'Doi', 'VARCHAR', false, 50, null);
        $this->addColumn('AuthorEmail', 'Authoremail', 'VARCHAR', false, 70, null);
        $this->addColumn('AuthorAdress', 'Authoradress', 'VARCHAR', false, 250, null);
        $this->addColumn('PaperURL', 'Paperurl', 'CLOB', false, null, null);
        $this->addColumn('Used', 'Used', 'VARCHAR', false, 50, null);
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

} // RefrensTableMap
