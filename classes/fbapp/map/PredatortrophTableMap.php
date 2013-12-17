<?php



/**
 * This class defines the structure of the 'predatortroph' table.
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
class PredatortrophTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PredatortrophTableMap';

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
        $this->setName('predatortroph');
        $this->setPhpName('Predatortroph');
        $this->setClassname('Predatortroph');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('Predatorlevel', 'Predatorlevel', 'FLOAT', true, null, null);
        $this->addPrimaryKey('Predator', 'Predator', 'VARCHAR', true, 50, null);
        $this->addColumn('TL', 'Tl', 'DOUBLE', false, null, null);
        $this->addColumn('SETL', 'Setl', 'DOUBLE', false, null, null);
        $this->addColumn('RefNo', 'Refno', 'DOUBLE', false, null, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 150, null);
        $this->addColumn('MaxLength', 'Maxlength', 'FLOAT', false, null, null);
        $this->addColumn('MinLength', 'Minlength', 'FLOAT', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PredatortrophTableMap
