<?php



/**
 * This class defines the structure of the 'sounds' table.
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
class SoundsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.SoundsTableMap';

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
        $this->setName('sounds');
        $this->setPhpName('Sounds');
        $this->setClassname('Sounds');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addColumn('Stockcode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 25, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 35, null);
        $this->addColumn('FishbaseName', 'Fishbasename', 'VARCHAR', false, 40, null);
        $this->addColumn('SynonymUsed', 'Synonymused', 'VARCHAR', false, 75, null);
        $this->addColumn('SoundRefNo', 'Soundrefno', 'INTEGER', false, null, null);
        $this->addColumn('SoundProduction', 'Soundproduction', 'VARCHAR', false, 100, null);
        $this->addColumn('Soundtypes', 'Soundtypes', 'VARCHAR', false, 100, null);
        $this->addColumn('SoundOrgan', 'Soundorgan', 'VARCHAR', false, 200, null);
        $this->addColumn('SonicMechanism', 'Sonicmechanism', 'VARCHAR', false, 255, null);
        $this->addColumn('Behaviour', 'Behaviour', 'VARCHAR', false, 255, null);
        $this->addColumn('Remarks', 'Remarks', 'CLOB', false, null, null);
        $this->addPrimaryKey('SoundFile', 'Soundfile', 'VARCHAR', true, 12, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
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

} // SoundsTableMap
