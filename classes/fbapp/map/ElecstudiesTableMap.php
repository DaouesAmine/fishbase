<?php



/**
 * This class defines the structure of the 'elecstudies' table.
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
class ElecstudiesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ElecstudiesTableMap';

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
        $this->setName('elecstudies');
        $this->setPhpName('Elecstudies');
        $this->setClassname('Elecstudies');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('StudCode', 'Studcode', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('ElecDatRefNo', 'Elecdatrefno', 'INTEGER', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 75, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('TotalLoci', 'Totalloci', 'SMALLINT', false, null, null);
        $this->addColumn('ExpHeterozygosity', 'Expheterozygosity', 'FLOAT', false, null, null);
        $this->addColumn('Heterozygosity', 'Heterozygosity', 'FLOAT', false, null, null);
        $this->addColumn('PolymorphicLoci', 'Polymorphicloci', 'FLOAT', false, null, null);
        $this->addColumn('Comments', 'Comments', 'VARCHAR', false, 255, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Checked', 'Checked', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Source', 'Source', 'VARCHAR', false, 15, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ElecstudiesTableMap
