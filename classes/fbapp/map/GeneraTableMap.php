<?php



/**
 * This class defines the structure of the 'genera' table.
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
class GeneraTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.GeneraTableMap';

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
        $this->setName('genera');
        $this->setPhpName('Genera');
        $this->setClassname('Genera');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('GenCode', 'Gencode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('GenName', 'Genname', 'VARCHAR', true, 25, '');
        $this->addPrimaryKey('GenAuthorYear', 'Genauthoryear', 'VARCHAR', true, 100, '');
        $this->addColumn('GenAuthor', 'Genauthor', 'VARCHAR', false, 75, null);
        $this->addColumn('GenYear', 'Genyear', 'SMALLINT', false, null, null);
        $this->addColumn('GenInEx', 'Geninex', 'VARCHAR', false, 65, null);
        $this->addColumn('GenComName', 'Gencomname', 'VARCHAR', false, 50, null);
        $this->addColumn('GenRefno', 'Genrefno', 'INTEGER', false, null, null);
        $this->addColumn('Available', 'Available', 'VARCHAR', false, 1, null);
        $this->addPrimaryKey('GenStatus', 'Genstatus', 'VARCHAR', true, 15, '');
        $this->addColumn('GenStatusICZN', 'Genstatusiczn', 'VARCHAR', false, 25, null);
        $this->addColumn('GenCodeValid', 'Gencodevalid', 'INTEGER', false, null, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 255, null);
        $this->addColumn('Etymology', 'Etymology', 'LONGVARCHAR', false, null, null);
        $this->addColumn('Gender', 'Gender', 'VARCHAR', false, 9, null);
        $this->addColumn('SubgenusOf', 'Subgenusof', 'VARCHAR', false, 25, null);
        $this->addColumn('FamCode', 'Famcode', 'SMALLINT', false, null, null);
        $this->addColumn('Subfamily', 'Subfamily', 'VARCHAR', false, 30, null);
        $this->addColumn('Tribe', 'Tribe', 'VARCHAR', false, 50, null);
        $this->addColumn('BodyShapeI', 'Bodyshapei', 'VARCHAR', false, 20, null);
        $this->addColumn('Comment', 'Comment', 'LONGVARCHAR', false, null, null);
        $this->addColumn('SynCode', 'Syncode', 'INTEGER', false, null, null);
        $this->addColumn('FB_SppNb', 'FbSppnb', 'SMALLINT', false, null, null);
        $this->addColumn('CofF_SppNb', 'CoffSppnb', 'SMALLINT', false, null, null);
        $this->addColumn('FoW_SppNb', 'FowSppnb', 'SMALLINT', false, null, null);
        $this->addColumn('GSD_GenusFk', 'GsdGenusfk', 'INTEGER', false, null, null);
        $this->addColumn('GSD_GenusRefFk', 'GsdGenusreffk', 'INTEGER', false, null, null);
        $this->addColumn('Distribution', 'Distribution', 'LONGVARCHAR', false, null, null);
        $this->addColumn('Habitat', 'Habitat', 'VARCHAR', false, 255, null);
        $this->addColumn('WaterSalinity', 'Watersalinity', 'VARCHAR', false, 21, null);
        $this->addColumn('Marine', 'Marine', 'VARCHAR', false, 1, null);
        $this->addColumn('Brackish', 'Brackish', 'VARCHAR', false, 1, null);
        $this->addColumn('Freshwater', 'Freshwater', 'VARCHAR', false, 1, null);
        $this->addColumn('Diagnosis', 'Diagnosis', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DspinesMin', 'Dspinesmin', 'SMALLINT', false, null, null);
        $this->addColumn('DspinesMax', 'Dspinesmax', 'SMALLINT', false, null, null);
        $this->addColumn('DsoftRaysMin', 'Dsoftraysmin', 'SMALLINT', false, null, null);
        $this->addColumn('DsoftRaysMax', 'Dsoftraysmax', 'SMALLINT', false, null, null);
        $this->addColumn('TotalDsoftRaysMin', 'Totaldsoftraysmin', 'SMALLINT', false, null, null);
        $this->addColumn('TotalDsoftRaysMax', 'Totaldsoftraysmax', 'SMALLINT', false, null, null);
        $this->addColumn('DsoftRaysBranchMin', 'Dsoftraysbranchmin', 'SMALLINT', false, null, null);
        $this->addColumn('DsoftRaysBranchMax', 'Dsoftraysbranchmax', 'SMALLINT', false, null, null);
        $this->addColumn('AspinesMin', 'Aspinesmin', 'SMALLINT', false, null, null);
        $this->addColumn('AspinesMax', 'Aspinesmax', 'SMALLINT', false, null, null);
        $this->addColumn('AsoftRaysMin', 'Asoftraysmin', 'SMALLINT', false, null, null);
        $this->addColumn('AsoftRaysMax', 'Asoftraysmax', 'SMALLINT', false, null, null);
        $this->addColumn('TotalAsoftRaysMin', 'Totalasoftraysmin', 'SMALLINT', false, null, null);
        $this->addColumn('TotalAsoftRaysMax', 'Totalasoftraysmax', 'SMALLINT', false, null, null);
        $this->addColumn('AsoftRaysBranchMin', 'Asoftraysbranchmin', 'SMALLINT', false, null, null);
        $this->addColumn('AsoftRaysBranchMax', 'Asoftraysbranchmax', 'SMALLINT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('Dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('Datemodified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('Datechecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GeneraTableMap
