<?php



/**
 * This class defines the structure of the 'wp9bio_indicators' table.
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
class Wp9bioIndicatorsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.Wp9bioIndicatorsTableMap';

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
        $this->setName('wp9bio_indicators');
        $this->setPhpName('Wp9bioIndicators');
        $this->setClassname('Wp9bioIndicators');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('Name', 'Name', 'CHAR', false, 200, null);
        $this->addColumn('Institution', 'Institution', 'CHAR', false, 200, null);
        $this->addColumn('Email', 'Email', 'CHAR', false, 200, null);
        $this->addColumn('MPAName', 'Mpaname', 'CHAR', false, 200, null);
        $this->addColumn('MPACountry', 'Mpacountry', 'CHAR', false, 100, null);
        $this->addColumn('MPALocation', 'Mpalocation', 'CHAR', false, 200, null);
        $this->addColumn('MPACharacter', 'Mpacharacter', 'CHAR', false, 100, null);
        $this->addColumn('ScubaDiving', 'Scubadiving', 'CHAR', false, 10, null);
        $this->addColumn('Snorkeling', 'Snorkeling', 'CHAR', false, 10, null);
        $this->addColumn('Hiking', 'Hiking', 'CHAR', false, 10, null);
        $this->addColumn('FFWatching', 'Ffwatching', 'CHAR', false, 10, null);
        $this->addColumn('SeascapeWatching', 'Seascapewatching', 'CHAR', false, 10, null);
        $this->addColumn('Other1', 'Other1', 'CHAR', false, 200, null);
        $this->addColumn('Other2', 'Other2', 'CHAR', false, 200, null);
        $this->addColumn('Other3', 'Other3', 'CHAR', false, 200, null);
        $this->addColumn('Other4', 'Other4', 'CHAR', false, 200, null);
        $this->addColumn('ComName1', 'Comname1', 'CHAR', false, 200, null);
        $this->addColumn('SciName1', 'Sciname1', 'CHAR', false, 200, null);
        $this->addColumn('DescEco1', 'Desceco1', 'CHAR', false, 200, null);
        $this->addColumn('TempPres1', 'Temppres1', 'CHAR', false, 50, null);
        $this->addColumn('ComName2', 'Comname2', 'CHAR', false, 200, null);
        $this->addColumn('SciName2', 'Sciname2', 'CHAR', false, 200, null);
        $this->addColumn('DescEco2', 'Desceco2', 'CHAR', false, 200, null);
        $this->addColumn('TempPres2', 'Temppres2', 'CHAR', false, 50, null);
        $this->addColumn('ComName3', 'Comname3', 'CHAR', false, 200, null);
        $this->addColumn('SciName3', 'Sciname3', 'CHAR', false, 200, null);
        $this->addColumn('DescEco3', 'Desceco3', 'CHAR', false, 200, null);
        $this->addColumn('TempPres3', 'Temppres3', 'CHAR', false, 50, null);
        $this->addColumn('ComName4', 'Comname4', 'CHAR', false, 200, null);
        $this->addColumn('SciName4', 'Sciname4', 'CHAR', false, 200, null);
        $this->addColumn('DescEco4', 'Desceco4', 'CHAR', false, 200, null);
        $this->addColumn('TempPres4', 'Temppres4', 'CHAR', false, 50, null);
        $this->addColumn('EcoComName1', 'Ecocomname1', 'CHAR', false, 200, null);
        $this->addColumn('EcoDescEco1', 'Ecodesceco1', 'CHAR', false, 200, null);
        $this->addColumn('RelDis1', 'Reldis1', 'CHAR', false, 50, null);
        $this->addColumn('EcoComName2', 'Ecocomname2', 'CHAR', false, 200, null);
        $this->addColumn('EcoDescEco2', 'Ecodesceco2', 'CHAR', false, 200, null);
        $this->addColumn('RelDis2', 'Reldis2', 'CHAR', false, 50, null);
        $this->addColumn('EcoComName3', 'Ecocomname3', 'CHAR', false, 200, null);
        $this->addColumn('EcoDescEco3', 'Ecodesceco3', 'CHAR', false, 200, null);
        $this->addColumn('RelDis3', 'Reldis3', 'CHAR', false, 50, null);
        $this->addColumn('EcoComName4', 'Ecocomname4', 'CHAR', false, 200, null);
        $this->addColumn('EcoDescEco4', 'Ecodesceco4', 'CHAR', false, 200, null);
        $this->addColumn('RelDis4', 'Reldis4', 'CHAR', false, 50, null);
        $this->addColumn('Bio_HistInfo_4', 'BioHistinfo4', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo_3', 'BioHistinfo3', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo_2', 'BioHistinfo2', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo_1', 'BioHistinfo1', 'CHAR', false, 5, null);
        $this->addColumn('Bio_Ref_Info1', 'BioRefInfo1', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo_1', 'BioCurinfo1', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo_2', 'BioCurinfo2', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo_3', 'BioCurinfo3', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo_4', 'BioCurinfo4', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo2_4', 'BioHistinfo24', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo2_3', 'BioHistinfo23', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo2_2', 'BioHistinfo22', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo2_1', 'BioHistinfo21', 'CHAR', false, 5, null);
        $this->addColumn('Bio_Ref_Info2', 'BioRefInfo2', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo2_1', 'BioCurinfo21', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo2_2', 'BioCurinfo22', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo2_3', 'BioCurinfo23', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo2_4', 'BioCurinfo24', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo3_4', 'BioHistinfo34', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo3_3', 'BioHistinfo33', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo3_2', 'BioHistinfo32', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo3_1', 'BioHistinfo31', 'CHAR', false, 5, null);
        $this->addColumn('Bio_Ref_Info3', 'BioRefInfo3', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo3_1', 'BioCurinfo31', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo3_2', 'BioCurinfo32', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo3_3', 'BioCurinfo33', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo3_4', 'BioCurinfo34', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo4_4', 'BioHistinfo44', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo4_3', 'BioHistinfo43', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo4_2', 'BioHistinfo42', 'CHAR', false, 5, null);
        $this->addColumn('Bio_HistInfo4_1', 'BioHistinfo41', 'CHAR', false, 5, null);
        $this->addColumn('Bio_Ref_Info4', 'BioRefInfo4', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo4_1', 'BioCurinfo41', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo4_2', 'BioCurinfo42', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo4_3', 'BioCurinfo43', 'CHAR', false, 5, null);
        $this->addColumn('Bio_CurInfo4_4', 'BioCurinfo44', 'CHAR', false, 5, null);
        $this->addColumn('newpassword', 'Newpassword', 'VARCHAR', false, 5, null);
        $this->addColumn('IndDate', 'Inddate', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // Wp9bioIndicatorsTableMap
