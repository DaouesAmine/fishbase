<?php



/**
 * This class defines the structure of the 'eggs' table.
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
class EggsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.EggsTableMap';

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
        $this->setName('eggs');
        $this->setPhpName('Eggs');
        $this->setClassname('Eggs');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('Stockcode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('EggsRefNo', 'Eggsrefno', 'INTEGER', false, null, null);
        $this->addColumn('WaterEggRef', 'Watereggref', 'INTEGER', false, null, null);
        $this->addColumn('Watertempmax', 'Watertempmax', 'FLOAT', false, null, null);
        $this->addColumn('Waterdepthmax', 'Waterdepthmax', 'SMALLINT', false, null, null);
        $this->addColumn('Salinitymax', 'Salinitymax', 'FLOAT', false, null, null);
        $this->addColumn('pH', 'Ph', 'FLOAT', false, null, null);
        $this->addColumn('Oxygenmax', 'Oxygenmax', 'FLOAT', false, null, null);
        $this->addColumn('Watertempmin', 'Watertempmin', 'FLOAT', false, null, null);
        $this->addColumn('Waterdepthmin', 'Waterdepthmin', 'SMALLINT', false, null, null);
        $this->addColumn('Salinitymin', 'Salinitymin', 'FLOAT', false, null, null);
        $this->addColumn('pHmin', 'Phmin', 'FLOAT', false, null, null);
        $this->addColumn('Oxygenmin', 'Oxygenmin', 'FLOAT', false, null, null);
        $this->addColumn('Watertempmod', 'Watertempmod', 'FLOAT', false, null, null);
        $this->addColumn('Waterdepthmid', 'Waterdepthmid', 'SMALLINT', false, null, null);
        $this->addColumn('Salinitymod', 'Salinitymod', 'FLOAT', false, null, null);
        $this->addColumn('pHmod', 'Phmod', 'FLOAT', false, null, null);
        $this->addColumn('Oxygenmod', 'Oxygenmod', 'FLOAT', false, null, null);
        $this->addColumn('WatEgg3', 'Wategg3', 'VARCHAR', false, 80, null);
        $this->addColumn('Placeofdev', 'Placeofdev', 'VARCHAR', false, 39, null);
        $this->addColumn('Shapeofegg', 'Shapeofegg', 'VARCHAR', false, 9, null);
        $this->addColumn('Pic', 'Pic', 'VARCHAR', false, 8, null);
        $this->addColumn('Attributes', 'Attributes', 'VARCHAR', false, 15, null);
        $this->addColumn('AttributesII', 'Attributesii', 'VARCHAR', false, 10, null);
        $this->addColumn('Colourofegg', 'Colourofegg', 'VARCHAR', false, 21, null);
        $this->addColumn('Colouroilglobule', 'Colouroilglobule', 'VARCHAR', false, 10, null);
        $this->addColumn('Oilglobules', 'Oilglobules', 'SMALLINT', false, null, null);
        $this->addColumn('OilglobmaxRef', 'Oilglobmaxref', 'INTEGER', false, null, null);
        $this->addColumn('Oilglobulesmin', 'Oilglobulesmin', 'SMALLINT', false, null, null);
        $this->addColumn('OilglobminRef', 'Oilglobminref', 'INTEGER', false, null, null);
        $this->addColumn('Oilglobulesmod', 'Oilglobulesmod', 'SMALLINT', false, null, null);
        $this->addColumn('OilglobmodRef', 'Oilglobmodref', 'INTEGER', false, null, null);
        $this->addColumn('Oildiametermax2', 'Oildiametermax2', 'FLOAT', false, null, null);
        $this->addColumn('OildiamaxRef', 'Oildiamaxref', 'INTEGER', false, null, null);
        $this->addColumn('Oildiametermin2', 'Oildiametermin2', 'FLOAT', false, null, null);
        $this->addColumn('OildiaminRef', 'Oildiaminref', 'INTEGER', false, null, null);
        $this->addColumn('Oildiametermod', 'Oildiametermod', 'FLOAT', false, null, null);
        $this->addColumn('OildiamodRef', 'Oildiamodref', 'INTEGER', false, null, null);
        $this->addColumn('Eggdiammax', 'Eggdiammax', 'FLOAT', false, null, null);
        $this->addColumn('EggdiammaxRef', 'Eggdiammaxref', 'INTEGER', false, null, null);
        $this->addColumn('Eggdiammin', 'Eggdiammin', 'FLOAT', false, null, null);
        $this->addColumn('EggdiamminRef', 'Eggdiamminref', 'INTEGER', false, null, null);
        $this->addColumn('Eggdiammod', 'Eggdiammod', 'FLOAT', false, null, null);
        $this->addColumn('EggdiammodRef', 'Eggdiammodref', 'INTEGER', false, null, null);
        $this->addColumn('Referencediammax', 'Referencediammax', 'FLOAT', false, null, null);
        $this->addColumn('Referencediammin', 'Referencediammin', 'FLOAT', false, null, null);
        $this->addColumn('Referencediammod', 'Referencediammod', 'FLOAT', false, null, null);
        $this->addColumn('MeasurementsRef', 'Measurementsref', 'INTEGER', false, null, null);
        $this->addColumn('Perivitwidthmax', 'Perivitwidthmax', 'FLOAT', false, null, null);
        $this->addColumn('Perivitwidthmin', 'Perivitwidthmin', 'FLOAT', false, null, null);
        $this->addColumn('Perivitwidthmod', 'Perivitwidthmod', 'FLOAT', false, null, null);
        $this->addColumn('Chorionthickmax', 'Chorionthickmax', 'FLOAT', false, null, null);
        $this->addColumn('Chorionthickmin', 'Chorionthickmin', 'FLOAT', false, null, null);
        $this->addColumn('Chorionthickmod', 'Chorionthickmod', 'FLOAT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('AddChars', 'Addchars', 'CLOB', false, null, null);
        $this->addColumn('WatEggs', 'Wateggs', 'VARCHAR', false, 255, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // EggsTableMap
