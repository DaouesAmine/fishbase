<?php



/**
 * This class defines the structure of the 'otoliths' table.
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
class OtolithsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.OtolithsTableMap';

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
        $this->setName('otoliths');
        $this->setPhpName('Otoliths');
        $this->setClassname('Otoliths');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('OtolithID', 'Otolithid', 'INTEGER', true, null, null);
        $this->addPrimaryKey('OtolithsRefno', 'Otolithsrefno', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('GenusUsed', 'Genusused', 'VARCHAR', true, 25, '');
        $this->addPrimaryKey('SpeciesUsed', 'Speciesused', 'VARCHAR', true, 50, '');
        $this->addColumn('SynCode', 'Syncode', 'INTEGER', false, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('SynCodeValid', 'Syncodevalid', 'INTEGER', false, null, null);
        $this->addColumn('LengthFish', 'Lengthfish', 'DOUBLE', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 100, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('E_CODE', 'ECode', 'SMALLINT', false, null, null);
        $this->addPrimaryKey('Plate', 'Plate', 'VARCHAR', true, 20, '');
        $this->addPrimaryKey('Figure', 'Figure', 'VARCHAR', true, 20, '');
        $this->addColumn('Position', 'Position', 'VARCHAR', false, 5, null);
        $this->addColumn('Face', 'Face', 'VARCHAR', false, 5, null);
        $this->addColumn('Type', 'Type', 'VARCHAR', false, 10, null);
        $this->addColumn('LengthOtolith', 'Lengthotolith', 'DOUBLE', false, null, null);
        $this->addColumn('HeightOtolith', 'Heightotolith', 'DOUBLE', false, null, null);
        $this->addColumn('FigFileName', 'Figfilename', 'VARCHAR', false, 50, null);
        $this->addColumn('AuthName', 'Authname', 'CHAR', false, 50, null);
        $this->addColumn('fkpoisson', 'Fkpoisson', 'DOUBLE', false, null, null);
        $this->addColumn('fktaxon', 'Fktaxon', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // OtolithsTableMap
