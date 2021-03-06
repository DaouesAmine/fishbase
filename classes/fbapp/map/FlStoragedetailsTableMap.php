<?php



/**
 * This class defines the structure of the 'fl_storagedetails' table.
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
class FlStoragedetailsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FlStoragedetailsTableMap';

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
        $this->setName('fl_storagedetails');
        $this->setPhpName('FlStoragedetails');
        $this->setClassname('FlStoragedetails');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('LossCode', 'Losscode', 'INTEGER', true, null, null);
        $this->addColumn('DistributionStage', 'Distributionstage', 'VARCHAR', false, 50, null);
        $this->addColumn('OtherDistributionStage', 'Otherdistributionstage', 'VARCHAR', false, 50, null);
        $this->addColumn('DurationOfStorageMin', 'Durationofstoragemin', 'DOUBLE', false, null, null);
        $this->addColumn('DurationOfStorageMax', 'Durationofstoragemax', 'DOUBLE', false, null, null);
        $this->addColumn('StorageMethod', 'Storagemethod', 'VARCHAR', false, 50, null);
        $this->addColumn('StorageTemperatureMin', 'Storagetemperaturemin', 'DOUBLE', false, null, null);
        $this->addColumn('StorageTemperatureMax', 'Storagetemperaturemax', 'DOUBLE', false, null, null);
        $this->addColumn('StorageContainers', 'Storagecontainers', 'VARCHAR', false, 50, null);
        $this->addColumn('StorageTreatments', 'Storagetreatments', 'VARCHAR', false, 50, null);
        $this->addColumn('SaltContent', 'Saltcontent', 'DOUBLE', false, null, null);
        $this->addColumn('Editable', 'Editable', 'VARCHAR', false, 50, '-1');
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FlStoragedetailsTableMap
