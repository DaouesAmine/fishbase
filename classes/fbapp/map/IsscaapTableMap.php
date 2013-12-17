<?php



/**
 * This class defines the structure of the 'isscaap' table.
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
class IsscaapTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.IsscaapTableMap';

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
        $this->setName('isscaap');
        $this->setPhpName('Isscaap');
        $this->setClassname('Isscaap');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('OrdNum', 'Ordnum', 'SMALLINT', false, null, null);
        $this->addColumn('FamCode', 'Famcode', 'SMALLINT', false, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('Syncode', 'Syncode', 'INTEGER', false, null, null);
        $this->addColumn('Valid', 'Valid', 'TINYINT', false, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 50, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 50, null);
        $this->addColumn('AggLevel', 'Agglevel', 'VARCHAR', false, 50, null);
        $this->addColumn('ISSCAAP', 'Isscaap', 'SMALLINT', false, null, null);
        $this->addColumn('TaxCode', 'Taxcode', 'VARCHAR', false, 20, null);
        $this->addColumn('AlphaCode', 'Alphacode', 'VARCHAR', false, 4, null);
        $this->addColumn('Scientific', 'Scientific', 'VARCHAR', false, 50, null);
        $this->addColumn('English', 'English', 'VARCHAR', false, 50, null);
        $this->addColumn('French', 'French', 'VARCHAR', false, 50, null);
        $this->addColumn('Spanish', 'Spanish', 'VARCHAR', false, 50, null);
        $this->addColumn('Arabic', 'Arabic', 'VARCHAR', false, 60, null);
        $this->addColumn('Chinese', 'Chinese', 'VARCHAR', false, 60, null);
        $this->addColumn('Russian', 'Russian', 'VARCHAR', false, 60, null);
        $this->addColumn('Author', 'Author', 'VARCHAR', false, 70, null);
        $this->addColumn('Family', 'Family', 'VARCHAR', false, 50, null);
        $this->addColumn('Order', 'Order', 'VARCHAR', false, 50, null);
        $this->addColumn('Troph', 'Troph', 'DOUBLE', false, null, null);
        $this->addColumn('seTroph', 'Setroph', 'DOUBLE', false, null, null);
        $this->addColumn('RefNo', 'Refno', 'INTEGER', false, null, null);
        $this->addColumn('RemarkTroph', 'Remarktroph', 'VARCHAR', false, 100, null);
        $this->addColumn('SLmax', 'Slmax', 'FLOAT', false, null, null);
        $this->addColumn('RefNoSL', 'Refnosl', 'INTEGER', false, null, null);
        $this->addColumn('RemarkSL', 'Remarksl', 'VARCHAR', false, 100, null);
        $this->addColumn('Reef', 'Reef', 'FLOAT', false, null, null);
        $this->addColumn('Pelagic', 'Pelagic', 'FLOAT', false, null, null);
        $this->addColumn('Demersal', 'Demersal', 'FLOAT', false, null, null);
        $this->addColumn('DeepSea', 'Deepsea', 'FLOAT', false, null, null);
        $this->addColumn('Resilience', 'Resilience', 'VARCHAR', false, 50, null);
        $this->addColumn('ResilienceRemark', 'Resilienceremark', 'VARCHAR', false, 255, null);
        $this->addColumn('ResilienceVal', 'Resilienceval', 'FLOAT', false, null, null);
        $this->addColumn('Stats_data', 'StatsData', 'TINYINT', false, null, null);
        $this->addColumn('Stats_Catch', 'StatsCatch', 'TINYINT', false, null, null);
        $this->addColumn('Stats_Aquaculture', 'StatsAquaculture', 'TINYINT', false, null, null);
        $this->addColumn('FS_Aquatic', 'FsAquatic', 'TINYINT', false, null, null);
        $this->addColumn('FS_AquaticSumm', 'FsAquaticsumm', 'TINYINT', false, null, null);
        $this->addColumn('FS_Cultured', 'FsCultured', 'TINYINT', false, null, null);
        $this->addColumn('FS_CulturedSumm', 'FsCulturedsumm', 'TINYINT', false, null, null);
        $this->addColumn('FIRMS', 'Firms', 'TINYINT', false, null, null);
        $this->addColumn('FIRMS_Summ', 'FirmsSumm', 'TINYINT', false, null, null);
        $this->addColumn('FIGIS_ID', 'FigisId', 'INTEGER', false, null, null);
        $this->addColumn('CoL_ID', 'ColId', 'VARCHAR', false, 50, null);
        $this->addColumn('DB', 'Db', 'VARCHAR', false, 3, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // IsscaapTableMap
