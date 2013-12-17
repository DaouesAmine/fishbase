<?php



/**
 * This class defines the structure of the 'stocks_b4_igfaname_copy' table.
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
class StocksB4IgfanameCopyTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.StocksB4IgfanameCopyTableMap';

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
        $this->setName('stocks_b4_igfaname_copy');
        $this->setPhpName('StocksB4IgfanameCopy');
        $this->setClassname('StocksB4IgfanameCopy');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('StockDefs', 'Stockdefs', 'CLOB', false, null, null);
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('Level', 'Level', 'VARCHAR', true, 21, null);
        $this->addPrimaryKey('LocalUnique', 'Localunique', 'VARCHAR', true, 20, null);
        $this->addColumn('IUCN_Code', 'IucnCode', 'VARCHAR', false, 10, null);
        $this->addColumn('IUCN_Assessment', 'IucnAssessment', 'VARCHAR', false, 50, null);
        $this->addColumn('Protected', 'Protected', 'INTEGER', false, null, 0);
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
        $this->addColumn('SCRFA_data', 'ScrfaData', 'INTEGER', false, null, 0);
        $this->addColumn('GMAD_ID', 'GmadId', 'INTEGER', false, null, null);
        $this->addColumn('SAUP', 'Saup', 'INTEGER', false, null, 0);
        $this->addColumn('SAUP_ID', 'SaupId', 'INTEGER', false, null, null);
        $this->addColumn('SAUP_Group', 'SaupGroup', 'INTEGER', false, null, null);
        $this->addColumn('AusMuseum', 'Ausmuseum', 'INTEGER', false, null, null);
        $this->addColumn('FishTrace', 'Fishtrace', 'INTEGER', false, null, 0);
        $this->addColumn('IUCN_ID', 'IucnId', 'INTEGER', false, null, null);
        $this->addColumn('IUCN_Group', 'IucnGroup', 'VARCHAR', false, 150, null);
        $this->addColumn('BOLD_ID', 'BoldId', 'INTEGER', false, null, null);
        $this->addColumn('EssayID', 'Essayid', 'INTEGER', false, 4, null);
        $this->addColumn('Aquamaps', 'Aquamaps', 'TINYINT', false, null, null);
        $this->addColumn('Morphology', 'Morphology', 'TINYINT', false, null, 0);
        $this->addColumn('Occurrence', 'Occurrence', 'TINYINT', false, null, 0);
        $this->addColumn('Strains', 'Strains', 'TINYINT', false, null, 0);
        $this->addColumn('Ecology', 'Ecology', 'TINYINT', false, null, 0);
        $this->addColumn('Diseases', 'Diseases', 'TINYINT', false, null, 0);
        $this->addColumn('Abnorm', 'Abnorm', 'TINYINT', false, null, 0);
        $this->addColumn('Metabolism', 'Metabolism', 'TINYINT', false, null, 0);
        $this->addColumn('Predators', 'Predators', 'TINYINT', false, null, 0);
        $this->addColumn('Spawning', 'Spawning', 'TINYINT', false, null, 0);
        $this->addColumn('Speed', 'Speed', 'TINYINT', false, null, 0);
        $this->addColumn('Diet', 'Diet', 'TINYINT', false, null, 0);
        $this->addColumn('Eggs', 'Eggs', 'TINYINT', false, null, 0);
        $this->addColumn('EggDevelop', 'Eggdevelop', 'TINYINT', false, null, 0);
        $this->addColumn('Food', 'Food', 'TINYINT', false, null, 0);
        $this->addColumn('Larvae', 'Larvae', 'TINYINT', false, null, 0);
        $this->addColumn('LarvDyn', 'Larvdyn', 'TINYINT', false, null, 0);
        $this->addColumn('LarvSpeed', 'Larvspeed', 'TINYINT', false, null, 0);
        $this->addColumn('PopDyn', 'Popdyn', 'TINYINT', false, null, 0);
        $this->addColumn('LengthWeight', 'Lengthweight', 'TINYINT', false, null, 0);
        $this->addColumn('Gillarea', 'Gillarea', 'TINYINT', false, null, 0);
        $this->addColumn('Maturity', 'Maturity', 'TINYINT', false, null, 0);
        $this->addColumn('MatSizes', 'Matsizes', 'TINYINT', false, null, 0);
        $this->addColumn('Processing', 'Processing', 'TINYINT', false, null, 0);
        $this->addColumn('Reproduction', 'Reproduction', 'TINYINT', false, null, 0);
        $this->addColumn('Introductions', 'Introductions', 'TINYINT', false, null, 0);
        $this->addColumn('Abundance', 'Abundance', 'TINYINT', false, null, null);
        $this->addColumn('Vision', 'Vision', 'TINYINT', false, null, 0);
        $this->addColumn('Genetics', 'Genetics', 'TINYINT', false, null, 0);
        $this->addColumn('Aquaculture', 'Aquaculture', 'TINYINT', false, null, 0);
        $this->addColumn('CountryComp', 'Countrycomp', 'TINYINT', false, null, 0);
        $this->addColumn('Allele', 'Allele', 'TINYINT', false, null, 0);
        $this->addColumn('GeneticStudies', 'Geneticstudies', 'TINYINT', false, null, 0);
        $this->addColumn('Ration', 'Ration', 'TINYINT', false, null, 0);
        $this->addColumn('Foods', 'Foods', 'TINYINT', false, null, 0);
        $this->addColumn('Ecotoxicology', 'Ecotoxicology', 'TINYINT', false, null, 0);
        $this->addColumn('Catches', 'Catches', 'TINYINT', false, null, 0);
        $this->addColumn('FAOAqua', 'Faoaqua', 'TINYINT', false, null, 0);
        $this->addColumn('LengthRelations', 'Lengthrelations', 'TINYINT', false, null, 0);
        $this->addColumn('LengthFrequency', 'Lengthfrequency', 'TINYINT', false, null, 0);
        $this->addColumn('Sounds', 'Sounds', 'TINYINT', false, null, 0);
        $this->addColumn('Broodstock', 'Broodstock', 'TINYINT', false, null, 0);
        $this->addColumn('EggNursery', 'Eggnursery', 'TINYINT', false, null, 0);
        $this->addColumn('FryNursery', 'Frynursery', 'TINYINT', false, null, 0);
        $this->addColumn('LarvalNursery', 'Larvalnursery', 'TINYINT', false, 11, 0);
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

} // StocksB4IgfanameCopyTableMap
