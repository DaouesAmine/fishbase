<?php



/**
 * This class defines the structure of the 'fl_fish' table.
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
class FlFishTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FlFishTableMap';

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
        $this->setName('fl_fish');
        $this->setPhpName('FlFish');
        $this->setClassname('FlFish');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('FishCode', 'Fishcode', 'INTEGER', true, null, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('Stockcode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 50, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 50, null);
        $this->addColumn('Family', 'Family', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 50, null);
        $this->addColumn('LocalName', 'Localname', 'VARCHAR', false, 50, null);
        $this->addColumn('FishType', 'Fishtype', 'VARCHAR', false, 50, null);
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

} // FlFishTableMap
