<?php



/**
 * This class defines the structure of the 'oceanprovincesref' table.
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
class OceanprovincesrefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.OceanprovincesrefTableMap';

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
        $this->setName('oceanprovincesref');
        $this->setPhpName('Oceanprovincesref');
        $this->setClassname('Oceanprovincesref');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('RegionNo', 'Regionno', 'SMALLINT', false, null, null);
        $this->addColumn('RegionCode', 'Regioncode', 'VARCHAR', false, 4, null);
        $this->addColumn('DomainNo', 'Domainno', 'SMALLINT', false, null, null);
        $this->addColumn('Domain', 'Domain', 'VARCHAR', false, 50, null);
        $this->addColumn('Region', 'Region', 'VARCHAR', false, 60, null);
        $this->addColumn('Area', 'Area', 'DOUBLE', false, null, 0);
        $this->addColumn('PrimProd1', 'Primprod1', 'DOUBLE', false, null, 0);
        $this->addColumn('PrimProd2', 'Primprod2', 'DOUBLE', false, null, 0);
        $this->addColumn('PrimProd3', 'Primprod3', 'DOUBLE', false, null, 0);
        $this->addColumn('RegionDescription', 'Regiondescription', 'CLOB', false, null, null);
        $this->addColumn('Comment', 'Comment', 'CLOB', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // OceanprovincesrefTableMap
