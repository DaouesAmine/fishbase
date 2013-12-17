<?php



/**
 * This class defines the structure of the 'strains' table.
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
class StrainsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.StrainsTableMap';

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
        $this->setName('strains');
        $this->setPhpName('Strains');
        $this->setClassname('Strains');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('StrainsRefNo', 'Strainsrefno', 'INTEGER', false, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addPrimaryKey('StrainCode', 'Straincode', 'VARCHAR', true, 10, null);
        $this->addColumn('Trait', 'Trait', 'VARCHAR', false, 35, null);
        $this->addColumn('Pic', 'Pic', 'VARCHAR', false, 8, null);
        $this->addColumn('BreedingStrategy', 'Breedingstrategy', 'VARCHAR', false, 50, null);
        $this->addColumn('Viability', 'Viability', 'TINYINT', false, null, null);
        $this->addColumn('SizeofFounding', 'Sizeoffounding', 'INTEGER', false, null, null);
        $this->addColumn('SizeofFoundingF', 'Sizeoffoundingf', 'INTEGER', false, null, null);
        $this->addColumn('SizeofFoundingM', 'Sizeoffoundingm', 'INTEGER', false, null, null);
        $this->addColumn('NumberofBroodstock', 'Numberofbroodstock', 'INTEGER', false, null, 0);
        $this->addColumn('BreedingYear', 'Breedingyear', 'SMALLINT', false, null, null);
        $this->addColumn('Source', 'Source', 'VARCHAR', false, 7, null);
        $this->addColumn('SourceII', 'Sourceii', 'VARCHAR', false, 45, null);
        $this->addColumn('StrainCodeFounder', 'Straincodefounder', 'VARCHAR', false, 10, null);
        $this->addColumn('ArrivalofFounder', 'Arrivaloffounder', 'SMALLINT', false, null, null);
        $this->addColumn('Availability', 'Availability', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarksRef', 'Remarksref', 'INTEGER', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('AddRemark', 'Addremark', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // StrainsTableMap
