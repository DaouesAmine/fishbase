<?php



/**
 * This class defines the structure of the 'keyquestions' table.
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
class KeyquestionsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.KeyquestionsTableMap';

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
        $this->setName('keyquestions');
        $this->setPhpName('Keyquestions');
        $this->setClassname('Keyquestions');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('KeyCode', 'Keycode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('CoupleNum', 'Couplenum', 'SMALLINT', true, null, null);
        $this->addPrimaryKey('CouplePart', 'Couplepart', 'VARCHAR', true, 5, null);
        $this->addColumn('Question', 'Question', 'CLOB', false, null, null);
        $this->addColumn('NextCouple', 'Nextcouple', 'INTEGER', false, null, null);
        $this->addColumn('PrevCouple', 'Prevcouple', 'INTEGER', true, null, null);
        $this->addColumn('OrdNum', 'Ordnum', 'SMALLINT', false, null, null);
        $this->addColumn('FamCode', 'Famcode', 'INTEGER', false, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 50, null);
        $this->addColumn('Gencode', 'Gencode', 'INTEGER', false, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('Syncode', 'Syncode', 'INTEGER', false, null, null);
        $this->addColumn('PicName', 'Picname', 'VARCHAR', false, 50, null);
        $this->addColumn('NextKey', 'Nextkey', 'INTEGER', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // KeyquestionsTableMap
