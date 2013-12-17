<?php



/**
 * This class defines the structure of the 'cas_bibliogen' table.
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
class CasBibliogenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CasBibliogenTableMap';

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
        $this->setName('cas_bibliogen');
        $this->setPhpName('CasBibliogen');
        $this->setClassname('CasBibliogen');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('CAS_GEN', 'CasGen', 'INTEGER', true, null, null);
        $this->addPrimaryKey('CAS_REF_NO', 'CasRefNo', 'INTEGER', true, null, null);
        $this->addColumn('PageNo', 'Pageno', 'VARCHAR', false, 10, null);
        $this->addColumn('GenusCode', 'Genuscode', 'INTEGER', false, null, null);
        $this->addColumn('Quote', 'Quote', 'CLOB', false, null, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CasBibliogenTableMap
