<?php



/**
 * This class defines the structure of the 'stocks_with_igfa_damaged' table.
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
class StocksWithIgfaDamagedTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.StocksWithIgfaDamagedTableMap';

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
        $this->setName('stocks_with_igfa_damaged');
        $this->setPhpName('StocksWithIgfaDamaged');
        $this->setClassname('StocksWithIgfaDamaged');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('StockDefs', 'Stockdefs', 'LONGVARCHAR', false, null, null);
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('Level', 'Level', 'VARCHAR', true, 21, null);
        $this->addPrimaryKey('LocalUnique', 'Localunique', 'VARCHAR', true, 20, '');
        $this->addColumn('IUCN_Code', 'IucnCode', 'VARCHAR', false, 10, null);
        $this->addColumn('IUCN_Assessment', 'IucnAssessment', 'VARCHAR', false, 50, null);
        $this->addColumn('Protected', 'Protected', 'VARCHAR', false, 1, null);
        $this->addColumn('StocksRefNo', 'Stocksrefno', 'INTEGER', false, null, null);
        $this->addColumn('Northernmost', 'Northernmost', 'SMALLINT', false, null, null);
        $this->addColumn('NorthSouthN', 'Northsouthn', 'VARCHAR', false, 1, null);
        $this->addColumn('Southermost', 'Southermost', 'SMALLINT', false, null, null);
        $this->addColumn('NorthSouthS', 'Northsouths', 'VARCHAR', false, 1, null);
        $this->addColumn('Westernmost', 'Westernmost', 'SMALLINT', false, null, null);
        $this->addColumn('WestEastW', 'Westeastw', 'VARCHAR', false, 1, null);
        $this->addColumn('Easternmost', 'Easternmost', 'SMALLINT', false, null, null);
        $this->addColumn('WestEastE', 'Westeaste', 'VARCHAR', false, 1, null);
        $this->addColumn('BoundingRef', 'Boundingref', 'INTEGER', false, null, null);
        $this->addColumn('BoundingMethod', 'Boundingmethod', 'VARCHAR', false, 1, null);
        $this->addColumn('TempMin', 'Tempmin', 'DOUBLE', false, null, null);
        $this->addColumn('TempMax', 'Tempmax', 'DOUBLE', false, null, null);
        $this->addColumn('TempRef', 'Tempref', 'INTEGER', false, null, null);
        $this->addColumn('EnvTemp', 'Envtemp', 'VARCHAR', false, 20, null);
        $this->addColumn('Resilience', 'Resilience', 'VARCHAR', false, 50, null);
        $this->addColumn('ResilienceRemark', 'Resilienceremark', 'VARCHAR', false, 255, null);
        $this->addColumn('pHMin', 'Phmin', 'DOUBLE', false, null, null);
        $this->addColumn('pHMax', 'Phmax', 'DOUBLE', false, null, null);
        $this->addColumn('pHRef', 'Phref', 'INTEGER', false, null, null);
        $this->addColumn('dHMin', 'Dhmin', 'DOUBLE', false, null, null);
        $this->addColumn('dHMax', 'Dhmax', 'DOUBLE', false, null, null);
        $this->addColumn('dHRef', 'Dhref', 'INTEGER', false, null, null);
        $this->addColumn('GenBankID', 'Genbankid', 'INTEGER', false, null, null);
        $this->addColumn('RfeID', 'Rfeid', 'VARCHAR', false, 5, null);
        $this->addColumn('FIGIS_ID', 'FigisId', 'INTEGER', false, null, null);
        $this->addColumn('EcotoxID', 'Ecotoxid', 'INTEGER', false, null, null);
        $this->addColumn('SCRFA_data', 'ScrfaData', 'VARCHAR', false, 1, null);
        $this->addColumn('GMAD_ID', 'GmadId', 'INTEGER', false, null, null);
        $this->addColumn('SAUP', 'Saup', 'VARCHAR', false, 1, null);
        $this->addColumn('SAUP_ID', 'SaupId', 'INTEGER', false, null, null);
        $this->addColumn('SAUP_Group', 'SaupGroup', 'INTEGER', false, null, null);
        $this->addColumn('AusMuseum', 'Ausmuseum', 'INTEGER', false, null, null);
        $this->addColumn('FishTrace', 'Fishtrace', 'VARCHAR', false, 1, null);
        $this->addColumn('IUCN_ID', 'IucnId', 'INTEGER', false, null, null);
        $this->addColumn('IUCN_Group', 'IucnGroup', 'VARCHAR', false, 150, null);
        $this->addColumn('BOLD_ID', 'BoldId', 'INTEGER', false, null, null);
        $this->addColumn('IGFAName', 'Igfaname', 'VARCHAR', false, 30, null);
        $this->addColumn('EssayID', 'Essayid', 'INTEGER', false, null, null);
        $this->addColumn('Aquamaps', 'Aquamaps', 'VARCHAR', false, 1, null);
        $this->addColumn('Morphology', 'Morphology', 'VARCHAR', false, 1, null);
        $this->addColumn('Occurrence', 'Occurrence', 'VARCHAR', false, 1, null);
        $this->addColumn('Strains', 'Strains', 'VARCHAR', false, 1, null);
        $this->addColumn('Ecology', 'Ecology', 'VARCHAR', false, 1, null);
        $this->addColumn('Diseases', 'Diseases', 'VARCHAR', false, 1, null);
        $this->addColumn('Abnorm', 'Abnorm', 'VARCHAR', false, 1, null);
        $this->addColumn('Metabolism', 'Metabolism', 'VARCHAR', false, 1, null);
        $this->addColumn('Predators', 'Predators', 'VARCHAR', false, 1, null);
        $this->addColumn('Spawning', 'Spawning', 'VARCHAR', false, 1, null);
        $this->addColumn('Speed', 'Speed', 'VARCHAR', false, 1, null);
        $this->addColumn('Diet', 'Diet', 'VARCHAR', false, 1, null);
        $this->addColumn('Eggs', 'Eggs', 'VARCHAR', false, 1, null);
        $this->addColumn('EggDevelop', 'Eggdevelop', 'VARCHAR', false, 1, null);
        $this->addColumn('Food', 'Food', 'VARCHAR', false, 1, null);
        $this->addColumn('Larvae', 'Larvae', 'VARCHAR', false, 1, null);
        $this->addColumn('LarvDyn', 'Larvdyn', 'VARCHAR', false, 1, null);
        $this->addColumn('LarvSpeed', 'Larvspeed', 'VARCHAR', false, 1, null);
        $this->addColumn('PopDyn', 'Popdyn', 'VARCHAR', false, 1, null);
        $this->addColumn('LengthWeight', 'Lengthweight', 'VARCHAR', false, 1, null);
        $this->addColumn('Gillarea', 'Gillarea', 'VARCHAR', false, 1, null);
        $this->addColumn('Maturity', 'Maturity', 'VARCHAR', false, 1, null);
        $this->addColumn('MatSizes', 'Matsizes', 'VARCHAR', false, 1, null);
        $this->addColumn('Processing', 'Processing', 'VARCHAR', false, 1, null);
        $this->addColumn('Reproduction', 'Reproduction', 'VARCHAR', false, 1, null);
        $this->addColumn('Introductions', 'Introductions', 'VARCHAR', false, 1, null);
        $this->addColumn('Abundance', 'Abundance', 'VARCHAR', false, 1, null);
        $this->addColumn('Vision', 'Vision', 'VARCHAR', false, 1, null);
        $this->addColumn('Genetics', 'Genetics', 'VARCHAR', false, 1, null);
        $this->addColumn('Aquaculture', 'Aquaculture', 'VARCHAR', false, 1, null);
        $this->addColumn('CountryComp', 'Countrycomp', 'VARCHAR', false, 1, null);
        $this->addColumn('Allele', 'Allele', 'VARCHAR', false, 1, null);
        $this->addColumn('GeneticStudies', 'Geneticstudies', 'VARCHAR', false, 1, null);
        $this->addColumn('Ration', 'Ration', 'VARCHAR', false, 1, null);
        $this->addColumn('Foods', 'Foods', 'VARCHAR', false, 1, null);
        $this->addColumn('Ecotoxicology', 'Ecotoxicology', 'VARCHAR', false, 1, null);
        $this->addColumn('Catches', 'Catches', 'VARCHAR', false, 1, null);
        $this->addColumn('FAOAqua', 'Faoaqua', 'VARCHAR', false, 1, null);
        $this->addColumn('LengthRelations', 'Lengthrelations', 'VARCHAR', false, 1, null);
        $this->addColumn('LengthFrequency', 'Lengthfrequency', 'VARCHAR', false, 1, null);
        $this->addColumn('Sounds', 'Sounds', 'VARCHAR', false, 1, null);
        $this->addColumn('Broodstock', 'Broodstock', 'VARCHAR', false, 1, null);
        $this->addColumn('EggNursery', 'Eggnursery', 'VARCHAR', false, 1, null);
        $this->addColumn('FryNursery', 'Frynursery', 'VARCHAR', false, 1, null);
        $this->addColumn('LarvalNursery', 'Larvalnursery', 'VARCHAR', false, 1, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // StocksWithIgfaDamagedTableMap
