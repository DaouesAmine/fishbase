<?php



/**
 * This class defines the structure of the 'estimate' table.
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
class EstimateTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.EstimateTableMap';

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
        $this->setName('estimate');
        $this->setPhpName('Estimate');
        $this->setClassname('Estimate');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, 0);
        $this->addColumn('MaxLengthTL', 'Maxlengthtl', 'FLOAT', false, null, null);
        $this->addColumn('TLObserved', 'Tlobserved', 'VARCHAR', false, 1, null);
        $this->addColumn('Troph', 'Troph', 'FLOAT', false, null, null);
        $this->addColumn('seTroph', 'Setroph', 'FLOAT', false, null, null);
        $this->addColumn('TrophObserved', 'Trophobserved', 'VARCHAR', false, 1, null);
        $this->addColumn('TrophPredicted', 'Trophpredicted', 'FLOAT', false, null, null);
        $this->addColumn('seTrophPredicted', 'Setrophpredicted', 'FLOAT', false, null, null);
        $this->addColumn('a', 'A', 'FLOAT', false, null, null);
        $this->addColumn('sd_log10a', 'SdLog10a', 'FLOAT', false, null, null);
        $this->addColumn('b', 'B', 'FLOAT', false, null, null);
        $this->addColumn('sd_b', 'SdB', 'FLOAT', false, null, null);
        $this->addColumn('Method_ab', 'MethodAb', 'VARCHAR', false, 50, null);
        $this->addColumn('K', 'K', 'FLOAT', false, null, null);
        $this->addColumn('SD_logK', 'SdLogk', 'FLOAT', false, null, null);
        $this->addColumn('Linf', 'Linf', 'FLOAT', false, null, null);
        $this->addColumn('SD_logLinf', 'SdLoglinf', 'FLOAT', false, null, null);
        $this->addColumn('LengthType', 'Lengthtype', 'VARCHAR', false, 4, null);
        $this->addColumn('ComDepthMin', 'Comdepthmin', 'SMALLINT', false, null, null);
        $this->addColumn('ComDepthMax', 'Comdepthmax', 'SMALLINT', false, null, null);
        $this->addColumn('ComDepMinObserved', 'Comdepminobserved', 'VARCHAR', false, 1, null);
        $this->addColumn('ComDepMaxObserved', 'Comdepmaxobserved', 'VARCHAR', false, 1, null);
        $this->addColumn('DepthMin', 'Depthmin', 'SMALLINT', false, null, null);
        $this->addColumn('DepthMax', 'Depthmax', 'SMALLINT', false, null, null);
        $this->addColumn('DepthMinEstimate', 'Depthminestimate', 'VARCHAR', false, 1, null);
        $this->addColumn('DepthMaxEstimate', 'Depthmaxestimate', 'VARCHAR', false, 1, null);
        $this->addColumn('LastModified', 'Lastmodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('MaxLengthSL', 'Maxlengthsl', 'FLOAT', false, null, null);
        $this->addColumn('KObserved', 'Kobserved', 'VARCHAR', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // EstimateTableMap
