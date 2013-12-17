<?php



/**
 * This class defines the structure of the 'slb_species' table.
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
class SlbSpeciesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.SlbSpeciesTableMap';

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
        $this->setName('slb_species');
        $this->setPhpName('SlbSpecies');
        $this->setClassname('SlbSpecies');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Genus', 'Genus', 'VARCHAR', true, 30, null);
        $this->addPrimaryKey('Species', 'Species', 'VARCHAR', true, 50, null);
        $this->addColumn('SpeciesRefNo', 'Speciesrefno', 'INTEGER', false, null, null);
        $this->addColumn('Author', 'Author', 'VARCHAR', false, 90, null);
        $this->addColumn('AuthorRef', 'Authorref', 'INTEGER', false, null, null);
        $this->addColumn('FBname', 'Fbname', 'VARCHAR', false, 40, null);
        $this->addColumn('FamCode', 'Famcode', 'INTEGER', false, null, null);
        $this->addColumn('Subfamily', 'Subfamily', 'VARCHAR', false, 20, null);
        $this->addColumn('Fossil', 'Fossil', 'TINYINT', false, null, null);
        $this->addColumn('PeriodRange', 'Periodrange', 'VARCHAR', false, 6, null);
        $this->addColumn('Period', 'Period', 'VARCHAR', false, 11, null);
        $this->addColumn('Source', 'Source', 'VARCHAR', false, 20, null);
        $this->addColumn('Remark', 'Remark', 'CLOB', false, null, null);
        $this->addColumn('Fresh', 'Fresh', 'TINYINT', false, null, null);
        $this->addColumn('Brack', 'Brack', 'TINYINT', false, null, null);
        $this->addColumn('Saltwater', 'Saltwater', 'TINYINT', false, null, null);
        $this->addColumn('Land', 'Land', 'TINYINT', false, null, null);
        $this->addColumn('DemersPelag', 'Demerspelag', 'VARCHAR', false, 15, null);
        $this->addColumn('AnaCat', 'Anacat', 'VARCHAR', false, 16, null);
        $this->addColumn('MigratRef', 'Migratref', 'INTEGER', false, null, null);
        $this->addColumn('DepthRangeShallow', 'Depthrangeshallow', 'INTEGER', false, null, null);
        $this->addColumn('DepthRangeDeep', 'Depthrangedeep', 'INTEGER', false, null, null);
        $this->addColumn('DepthRangeRef', 'Depthrangeref', 'INTEGER', false, null, null);
        $this->addColumn('DepthRangeComShallow', 'Depthrangecomshallow', 'INTEGER', false, null, null);
        $this->addColumn('DepthRangeComDeep', 'Depthrangecomdeep', 'INTEGER', false, null, null);
        $this->addColumn('DepthComRef', 'Depthcomref', 'INTEGER', false, null, null);
        $this->addColumn('LongevityWild', 'Longevitywild', 'DOUBLE', false, null, null);
        $this->addColumn('LongevityWildRef', 'Longevitywildref', 'INTEGER', false, null, null);
        $this->addColumn('LongevityCaptive', 'Longevitycaptive', 'DOUBLE', false, null, null);
        $this->addColumn('LongevityCapRef', 'Longevitycapref', 'INTEGER', false, null, null);
        $this->addColumn('Length', 'Length', 'DOUBLE', false, null, null);
        $this->addColumn('LTypeMaxM', 'Ltypemaxm', 'VARCHAR', false, 6, null);
        $this->addColumn('LengthFemale', 'Lengthfemale', 'DOUBLE', false, null, null);
        $this->addColumn('LTypeMaxF', 'Ltypemaxf', 'VARCHAR', false, 6, null);
        $this->addColumn('MaxLengthRef', 'Maxlengthref', 'INTEGER', false, null, null);
        $this->addColumn('CommonLength', 'Commonlength', 'DOUBLE', false, null, null);
        $this->addColumn('LTypeComM', 'Ltypecomm', 'VARCHAR', false, 6, null);
        $this->addColumn('CommonLengthF', 'Commonlengthf', 'DOUBLE', false, null, null);
        $this->addColumn('LTypeComF', 'Ltypecomf', 'VARCHAR', false, 6, null);
        $this->addColumn('CommonLengthRef', 'Commonlengthref', 'INTEGER', false, null, null);
        $this->addColumn('Weight', 'Weight', 'DOUBLE', false, null, null);
        $this->addColumn('WeightFemale', 'Weightfemale', 'DOUBLE', false, null, null);
        $this->addColumn('MaxWeightRef', 'Maxweightref', 'INTEGER', false, null, null);
        $this->addColumn('Pic', 'Pic', 'VARCHAR', false, 8, null);
        $this->addColumn('PictureFemale', 'Picturefemale', 'VARCHAR', false, 8, null);
        $this->addColumn('LarvaPic', 'Larvapic', 'VARCHAR', false, 8, null);
        $this->addColumn('EggPic', 'Eggpic', 'VARCHAR', false, 8, null);
        $this->addColumn('ImportanceRef', 'Importanceref', 'INTEGER', false, null, null);
        $this->addColumn('Importance', 'Importance', 'VARCHAR', false, 21, null);
        $this->addColumn('Remarks7', 'Remarks7', 'VARCHAR', false, 150, null);
        $this->addColumn('PriceCateg', 'Pricecateg', 'VARCHAR', false, 20, null);
        $this->addColumn('PriceReliability', 'Pricereliability', 'VARCHAR', false, 70, null);
        $this->addColumn('LandingStatistics', 'Landingstatistics', 'VARCHAR', false, 23, null);
        $this->addColumn('Landings', 'Landings', 'VARCHAR', false, 45, null);
        $this->addColumn('MainCatchingMethod', 'Maincatchingmethod', 'VARCHAR', false, 15, null);
        $this->addColumn('II', 'Ii', 'VARCHAR', false, 33, null);
        $this->addColumn('MSeines', 'Mseines', 'TINYINT', false, null, null);
        $this->addColumn('MGillnets', 'Mgillnets', 'TINYINT', false, null, null);
        $this->addColumn('MCastnets', 'Mcastnets', 'TINYINT', false, null, null);
        $this->addColumn('MTraps', 'Mtraps', 'TINYINT', false, null, null);
        $this->addColumn('MSpears', 'Mspears', 'TINYINT', false, null, null);
        $this->addColumn('MTrawls', 'Mtrawls', 'TINYINT', false, null, null);
        $this->addColumn('MDredges', 'Mdredges', 'TINYINT', false, null, null);
        $this->addColumn('MLiftnets', 'Mliftnets', 'TINYINT', false, null, null);
        $this->addColumn('MHooksLines', 'Mhookslines', 'TINYINT', false, null, null);
        $this->addColumn('MOther', 'Mother', 'TINYINT', false, null, null);
        $this->addColumn('UsedforAquaculture', 'Usedforaquaculture', 'VARCHAR', false, 17, null);
        $this->addColumn('LifeCycle', 'Lifecycle', 'VARCHAR', false, 40, null);
        $this->addColumn('AquacultureRef', 'Aquacultureref', 'INTEGER', false, null, null);
        $this->addColumn('UsedasBait', 'Usedasbait', 'VARCHAR', false, 12, null);
        $this->addColumn('BaitRef', 'Baitref', 'INTEGER', false, null, null);
        $this->addColumn('Aquarium', 'Aquarium', 'VARCHAR', false, 16, null);
        $this->addColumn('AquariumFishII', 'Aquariumfishii', 'VARCHAR', false, 24, null);
        $this->addColumn('AquariumRef', 'Aquariumref', 'INTEGER', false, null, null);
        $this->addColumn('GameFish', 'Gamefish', 'TINYINT', false, null, null);
        $this->addColumn('GameRef', 'Gameref', 'INTEGER', false, null, null);
        $this->addColumn('Dangerous', 'Dangerous', 'VARCHAR', false, 50, null);
        $this->addColumn('DangerousRef', 'Dangerousref', 'INTEGER', false, null, null);
        $this->addColumn('Electrogenic', 'Electrogenic', 'VARCHAR', false, 50, null);
        $this->addColumn('ElectroRef', 'Electroref', 'INTEGER', false, null, null);
        $this->addColumn('Complete', 'Complete', 'VARCHAR', false, 50, null);
        $this->addColumn('ASFA', 'Asfa', 'TIMESTAMP', false, null, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Synopsis', 'Synopsis', 'INTEGER', false, null, null);
        $this->addColumn('DateSynopsis', 'Datesynopsis', 'TIMESTAMP', false, null, null);
        $this->addColumn('Flag', 'Flag', 'VARCHAR', false, 1, null);
        $this->addColumn('Comments', 'Comments', 'CLOB', false, null, null);
        $this->addColumn('VancouverAquarium', 'Vancouveraquarium', 'TINYINT', false, null, null);
        $this->addColumn('Profile', 'Profile', 'CLOB', false, null, null);
        $this->addColumn('Sp2000_NameCode', 'Sp2000Namecode', 'VARCHAR', false, 50, null);
        $this->addColumn('Sp2000_HierarchyCode', 'Sp2000Hierarchycode', 'VARCHAR', false, 100, null);
        $this->addColumn('Sp2000_AuthorRefNumber', 'Sp2000Authorrefnumber', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // SlbSpeciesTableMap
