<?php



/**
 * This class defines the structure of the 'popchar' table.
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
class PopcharTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PopcharTableMap';

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
        $this->setName('popchar');
        $this->setPhpName('Popchar');
        $this->setClassname('Popchar');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('Autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Stockcode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('PopCharRefNo', 'Popcharrefno', 'INTEGER', true, null, null);
        $this->addPrimaryKey('Sex', 'Sex', 'VARCHAR', true, 7, null);
        $this->addColumn('SourceRef', 'Sourceref', 'INTEGER', false, null, null);
        $this->addColumn('Wmax', 'Wmax', 'FLOAT', false, null, null);
        $this->addColumn('TypeWeight', 'Typeweight', 'VARCHAR', false, 13, null);
        $this->addColumn('Lmax', 'Lmax', 'FLOAT', false, null, null);
        $this->addColumn('Type', 'Type', 'VARCHAR', false, 5, null);
        $this->addColumn('tmax', 'Tmax', 'FLOAT', false, null, null);
        $this->addPrimaryKey('Locality', 'Locality', 'VARCHAR', true, 100, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Comments', 'Comments', 'VARCHAR', false, 255, null);
        $this->addColumn('SameWL', 'Samewl', 'TINYINT', false, null, null);
        $this->addColumn('SameLt', 'Samelt', 'TINYINT', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PopcharTableMap
