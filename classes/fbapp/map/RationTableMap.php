<?php



/**
 * This class defines the structure of the 'ration' table.
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
class RationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.RationTableMap';

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
        $this->setName('ration');
        $this->setPhpName('Ration');
        $this->setClassname('Ration');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('RDRefNo', 'Rdrefno', 'INTEGER', false, null, null);
        $this->addColumn('DataRef1', 'Dataref1', 'INTEGER', false, null, null);
        $this->addColumn('EvacRate1', 'Evacrate1', 'DOUBLE', false, 15, null);
        $this->addColumn('FoodI', 'Foodi', 'VARCHAR', false, 20, null);
        $this->addColumn('Rd1', 'Rd1', 'DOUBLE', false, 15, null);
        $this->addColumn('FoodII', 'Foodii', 'VARCHAR', false, 27, null);
        $this->addColumn('GCE', 'Gce', 'DOUBLE', false, 15, null);
        $this->addColumn('FoodName', 'Foodname', 'VARCHAR', true, 50, null);
        $this->addColumn('TBW', 'Tbw', 'DOUBLE', true, 15, null);
        $this->addColumn('Water', 'Water', 'DOUBLE', false, 15, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 20, null);
        $this->addColumn('Salinity', 'Salinity', 'VARCHAR', false, 10, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('ComRDK1', 'Comrdk1', 'VARCHAR', false, 27, null);
        $this->addColumn('MethRDEvacRef', 'Methrdevacref', 'INTEGER', false, null, null);
        $this->addColumn('EvacRate2', 'Evacrate2', 'VARCHAR', false, 28, null);
        $this->addColumn('FeedBegin1', 'Feedbegin1', 'TIME', false, null, null);
        $this->addColumn('FeedBegin2', 'Feedbegin2', 'TIME', false, null, null);
        $this->addColumn('RD2', 'Rd2', 'VARCHAR', false, 29, null);
        $this->addColumn('FeedStop1', 'Feedstop1', 'TIME', false, null, null);
        $this->addColumn('FeedStop2', 'Feedstop2', 'TIME', false, null, null);
        $this->addColumn('DailyFeedingCycle', 'Dailyfeedingcycle', 'VARCHAR', false, 20, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 250, null);
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

} // RationTableMap
