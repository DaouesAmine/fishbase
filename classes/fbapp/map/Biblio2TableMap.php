<?php



/**
 * This class defines the structure of the 'biblio2' table.
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
class Biblio2TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.Biblio2TableMap';

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
        $this->setName('biblio2');
        $this->setPhpName('Biblio2');
        $this->setClassname('Biblio2');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('RefNo', 'Refno', 'INTEGER', true, null, null);
        $this->addPrimaryKey('SynCodePrimary', 'Syncodeprimary', 'INTEGER', true, null, null);
        $this->addPrimaryKey('SynCode', 'Syncode', 'INTEGER', true, null, null);
        $this->addColumn('RefPage', 'Refpage', 'VARCHAR', false, 30, null);
        $this->addColumn('PageFirst', 'Pagefirst', 'SMALLINT', false, 4, null);
        $this->addColumn('PageInSort', 'Pageinsort', 'SMALLINT', false, 4, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 255, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 250, null);
        $this->addColumn('Quote', 'Quote', 'CLOB', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
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

} // Biblio2TableMap
