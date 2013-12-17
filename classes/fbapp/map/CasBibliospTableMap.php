<?php



/**
 * This class defines the structure of the 'cas_bibliosp' table.
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
class CasBibliospTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CasBibliospTableMap';

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
        $this->setName('cas_bibliosp');
        $this->setPhpName('CasBibliosp');
        $this->setClassname('CasBibliosp');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('CAS_SPC', 'CasSpc', 'INTEGER', true, null, null);
        $this->addPrimaryKey('CAS_REF_NO', 'CasRefNo', 'INTEGER', true, null, null);
        $this->addColumn('PageNo', 'Pageno', 'VARCHAR', false, 10, null);
        $this->addColumn('SynCode', 'Syncode', 'INTEGER', false, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('JuniorSynonym', 'Juniorsynonym', 'TINYINT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CasBibliospTableMap
