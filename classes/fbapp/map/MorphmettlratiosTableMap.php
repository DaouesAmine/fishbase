<?php



/**
 * This class defines the structure of the 'morphmettlratios' table.
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
class MorphmettlratiosTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MorphmettlratiosTableMap';

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
        $this->setName('morphmettlratios');
        $this->setPhpName('Morphmettlratios');
        $this->setClassname('Morphmettlratios');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('PicName', 'Picname', 'VARCHAR', false, 255, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('FamCode', 'Famcode', 'INTEGER', false, null, null);
        $this->addColumn('Family', 'Family', 'VARCHAR', false, 20, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 100, null);
        $this->addColumn('ClassNum', 'Classnum', 'SMALLINT', false, null, null);
        $this->addColumn('Class', 'Class', 'VARCHAR', false, 50, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('Perc', 'Perc', 'DOUBLE', false, null, null);
        $this->addColumn('MaxLengthTL', 'Maxlengthtl', 'FLOAT', false, null, null);
        $this->addColumn('SLTL', 'Sltl', 'DOUBLE', false, null, null);
        $this->addColumn('SLTL_LOWER', 'SltlLower', 'DOUBLE', false, null, null);
        $this->addColumn('SLTL_UPPER', 'SltlUpper', 'DOUBLE', false, null, null);
        $this->addColumn('FLTL', 'Fltl', 'DOUBLE', false, null, null);
        $this->addColumn('FLTL_LOWER', 'FltlLower', 'DOUBLE', false, null, null);
        $this->addColumn('FLTL_UPPER', 'FltlUpper', 'DOUBLE', false, null, null);
        $this->addColumn('HLTL', 'Hltl', 'DOUBLE', false, null, null);
        $this->addColumn('HLTL_LOWER', 'HltlLower', 'DOUBLE', false, null, null);
        $this->addColumn('HLTL_UPPER', 'HltlUpper', 'DOUBLE', false, null, null);
        $this->addColumn('PALTL', 'Paltl', 'DOUBLE', false, null, null);
        $this->addColumn('PALTL_LOWER', 'PaltlLower', 'DOUBLE', false, null, null);
        $this->addColumn('PALTL_UPPER', 'PaltlUpper', 'DOUBLE', false, null, null);
        $this->addColumn('PDLTL', 'Pdltl', 'DOUBLE', false, null, null);
        $this->addColumn('PDLTL_LOWER', 'PdltlLower', 'DOUBLE', false, null, null);
        $this->addColumn('PDLTL_UPPER', 'PdltlUpper', 'DOUBLE', false, null, null);
        $this->addColumn('PPLTL', 'Ppltl', 'DOUBLE', false, null, null);
        $this->addColumn('PPLTL_LOWER', 'PpltlLower', 'DOUBLE', false, null, null);
        $this->addColumn('PPLTL_UPPER', 'PpltlUpper', 'DOUBLE', false, null, null);
        $this->addColumn('PPELTL', 'Ppeltl', 'DOUBLE', false, null, null);
        $this->addColumn('PPELTL_LOWER', 'PpeltlLower', 'DOUBLE', false, null, null);
        $this->addColumn('PPELTL_UPPER', 'PpeltlUpper', 'DOUBLE', false, null, null);
        $this->addColumn('EDTL', 'Edtl', 'DOUBLE', false, null, null);
        $this->addColumn('EDTL_LOWER', 'EdtlLower', 'DOUBLE', false, null, null);
        $this->addColumn('EDTL_UPPER', 'EdtlUpper', 'DOUBLE', false, null, null);
        $this->addColumn('POLTL', 'Poltl', 'DOUBLE', false, null, null);
        $this->addColumn('POLTL_LOWER', 'PoltlLower', 'DOUBLE', false, null, null);
        $this->addColumn('POLTL_UPPER', 'PoltlUpper', 'DOUBLE', false, null, null);
        $this->addColumn('BDTL', 'Bdtl', 'DOUBLE', false, null, null);
        $this->addColumn('BDTL_LOWER', 'BdtlLower', 'DOUBLE', false, null, null);
        $this->addColumn('BDTL_UPPER', 'BdtlUpper', 'DOUBLE', false, null, null);
        $this->addColumn('CHTL', 'Chtl', 'DOUBLE', false, null, null);
        $this->addColumn('CHTL_LOWER', 'ChtlLower', 'DOUBLE', false, null, null);
        $this->addColumn('CHTL_UPPER', 'ChtlUpper', 'DOUBLE', false, null, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MorphmettlratiosTableMap
