<?php



/**
 * This class defines the structure of the 'zweb_foridentification' table.
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
class ZwebForidentificationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ZwebForidentificationTableMap';

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
        $this->setName('zweb_foridentification');
        $this->setPhpName('ZwebForidentification');
        $this->setClassname('ZwebForidentification');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('FamCode', 'Famcode', 'INTEGER', false, null, 0);
        $this->addColumn('Family', 'Family', 'VARCHAR', false, 20, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 100, null);
        $this->addColumn('Ordnum', 'Ordnum', 'SMALLINT', false, null, null);
        $this->addColumn('AspinesMin', 'Aspinesmin', 'SMALLINT', false, null, null);
        $this->addColumn('AspinesMax', 'Aspinesmax', 'SMALLINT', false, null, null);
        $this->addColumn('DspinesMin', 'Dspinesmin', 'SMALLINT', false, null, null);
        $this->addColumn('DspinesMax', 'Dspinesmax', 'SMALLINT', false, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('AreaCode', 'Areacode', 'SMALLINT', false, null, null);
        $this->addColumn('FAM', 'Fam', 'VARCHAR', false, 6, null);
        $this->addColumn('e_code', 'ECode', 'INTEGER', false, null, 0);
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

} // ZwebForidentificationTableMap
