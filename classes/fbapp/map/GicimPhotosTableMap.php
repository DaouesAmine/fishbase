<?php



/**
 * This class defines the structure of the 'gicim_photos' table.
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
class GicimPhotosTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.GicimPhotosTableMap';

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
        $this->setName('gicim_photos');
        $this->setPhpName('GicimPhotos');
        $this->setClassname('GicimPhotos');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('URL_Data', 'UrlData', 'VARCHAR', false, 255, null);
        $this->addColumn('IMAGEPK', 'Imagepk', 'DOUBLE', false, null, null);
        $this->addColumn('Status', 'Status', 'VARCHAR', false, 20, null);
        $this->addColumn('Type_status', 'TypeStatus', 'VARCHAR', false, 17, null);
        $this->addColumn('URLIMAGE', 'Urlimage', 'VARCHAR', false, 80, null);
        $this->addColumn('ETATDOC', 'Etatdoc', 'VARCHAR', false, 1, null);
        $this->addColumn('GICIMimageID', 'Gicimimageid', 'DOUBLE', false, null, null);
        $this->addColumn('GicimPoissonsID', 'Gicimpoissonsid', 'DOUBLE', false, null, null);
        $this->addColumn('FBSYNCODE', 'Fbsyncode', 'DOUBLE', false, null, null);
        $this->addColumn('FAMILLE', 'Famille', 'VARCHAR', false, 25, null);
        $this->addColumn('Name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('Author', 'Author', 'VARCHAR', false, 255, null);
        $this->addColumn('Catalog_no', 'CatalogNo', 'VARCHAR', false, 255, null);
        $this->addColumn('Country', 'Country', 'VARCHAR', false, 255, null);
        $this->addColumn('REGION', 'Region', 'VARCHAR', false, 30, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 100, null);
        $this->addColumn('Collector', 'Collector', 'VARCHAR', false, 255, null);
        $this->addColumn('Datecollected', 'Datecollected', 'VARCHAR', false, 255, null);
        $this->addColumn('Yearcollected', 'Yearcollected', 'DOUBLE', false, null, null);
        $this->addColumn('OBSERVATIONS', 'Observations', 'CLOB', false, null, null);
        $this->addColumn('Medium', 'Medium', 'VARCHAR', false, 15, null);
        $this->addColumn('PAYSADMIN', 'Paysadmin', 'VARCHAR', false, 50, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GicimPhotosTableMap
