<?php



/**
 * This class defines the structure of the 'zweb_picturetype_lifestage' table.
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
class ZwebPicturetypeLifestageTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ZwebPicturetypeLifestageTableMap';

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
        $this->setName('zweb_picturetype_lifestage');
        $this->setPhpName('ZwebPicturetypeLifestage');
        $this->setClassname('ZwebPicturetypeLifestage');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('LifeStage', 'Lifestage', 'VARCHAR', false, 50, null);
        $this->addColumn('ranktype', 'Ranktype', 'SMALLINT', false, null, 0);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ZwebPicturetypeLifestageTableMap
