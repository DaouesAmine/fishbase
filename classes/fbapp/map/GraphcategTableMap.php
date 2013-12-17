<?php



/**
 * This class defines the structure of the 'graphcateg' table.
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
class GraphcategTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.GraphcategTableMap';

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
        $this->setName('graphcateg');
        $this->setPhpName('Graphcateg');
        $this->setClassname('Graphcateg');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('Speccode', 'Speccode', 'INTEGER', true, null, null);
        $this->addColumn('Africa', 'Africa', 'TINYINT', false, null, null);
        $this->addColumn('AmerNC', 'Amernc', 'TINYINT', false, null, null);
        $this->addColumn('AmerS', 'Amers', 'TINYINT', false, null, null);
        $this->addColumn('AmerNS', 'Amerns', 'TINYINT', false, null, null);
        $this->addColumn('Asia', 'Asia', 'TINYINT', false, null, null);
        $this->addColumn('Oceania', 'Oceania', 'TINYINT', false, null, null);
        $this->addColumn('Antarctica', 'Antarctica', 'TINYINT', false, null, null);
        $this->addColumn('Europe', 'Europe', 'TINYINT', false, null, null);
        $this->addColumn('EuroAf', 'Euroaf', 'TINYINT', false, null, null);
        $this->addColumn('USSR', 'Ussr', 'TINYINT', false, null, null);
        $this->addColumn('Pacific', 'Pacific', 'TINYINT', false, null, null);
        $this->addColumn('Atlantic', 'Atlantic', 'TINYINT', false, null, null);
        $this->addColumn('Indian', 'Indian', 'TINYINT', false, null, null);
        $this->addColumn('Medit', 'Medit', 'TINYINT', false, null, null);
        $this->addColumn('Salinity', 'Salinity', 'CHAR', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GraphcategTableMap
