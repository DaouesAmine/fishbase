<?php



/**
 * This class defines the structure of the 'predats' table.
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
class PredatsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PredatsTableMap';

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
        $this->setName('predats');
        $this->setPhpName('Predats');
        $this->setClassname('Predats');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, 0);
        $this->addColumn('PredatsRefNo', 'Predatsrefno', 'INTEGER', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 64, '');
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addPrimaryKey('Predatstage', 'Predatstage', 'VARCHAR', true, 20, null);
        $this->addColumn('PredatorI', 'Predatori', 'VARCHAR', false, 11, null);
        $this->addColumn('PredatorII', 'Predatorii', 'VARCHAR', false, 19, null);
        $this->addPrimaryKey('PreyStage', 'Preystage', 'VARCHAR', true, 20, null);
        $this->addPrimaryKey('PredatorGroup', 'Predatorgroup', 'VARCHAR', true, 20, null);
        $this->addColumn('DietP', 'Dietp', 'FLOAT', false, null, null);
        $this->addColumn('StomachContent', 'Stomachcontent', 'VARCHAR', false, 20, null);
        $this->addPrimaryKey('PredatorName', 'Predatorname', 'VARCHAR', true, 40, null);
        $this->addColumn('Predatcode', 'Predatcode', 'INTEGER', false, null, null);
        $this->addColumn('AlphaCode', 'Alphacode', 'CHAR', false, 3, null);
        $this->addColumn('MaxLength', 'Maxlength', 'FLOAT', false, null, null);
        $this->addColumn('MaxLengthType', 'Maxlengthtype', 'CHAR', false, 2, null);
        $this->addColumn('PredatTroph', 'Predattroph', 'DOUBLE', false, null, null);
        $this->addColumn('PredatseTroph', 'Predatsetroph', 'DOUBLE', false, null, null);
        $this->addColumn('PredatRef', 'Predatref', 'INTEGER', false, null, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
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

} // PredatsTableMap
