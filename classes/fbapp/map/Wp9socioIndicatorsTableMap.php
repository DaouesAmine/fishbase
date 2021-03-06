<?php



/**
 * This class defines the structure of the 'wp9socio_indicators' table.
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
class Wp9socioIndicatorsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.Wp9socioIndicatorsTableMap';

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
        $this->setName('wp9socio_indicators');
        $this->setPhpName('Wp9socioIndicators');
        $this->setClassname('Wp9socioIndicators');
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
        $this->addColumn('Socio_HistInfo_4', 'SocioHistinfo4', 'CHAR', false, 5, null);
        $this->addColumn('Socio_HistInfo_3', 'SocioHistinfo3', 'CHAR', false, 5, null);
        $this->addColumn('Socio_HistInfo_2', 'SocioHistinfo2', 'CHAR', false, 5, null);
        $this->addColumn('Socio_HistInfo_1', 'SocioHistinfo1', 'CHAR', false, 5, null);
        $this->addColumn('Socio_Ref_Info1', 'SocioRefInfo1', 'CHAR', false, 5, null);
        $this->addColumn('Socio_CurInfo_1', 'SocioCurinfo1', 'CHAR', false, 5, null);
        $this->addColumn('Socio_CurInfo_2', 'SocioCurinfo2', 'CHAR', false, 5, null);
        $this->addColumn('Socio_CurInfo_3', 'SocioCurinfo3', 'CHAR', false, 5, null);
        $this->addColumn('Socio_CurInfo_4', 'SocioCurinfo4', 'CHAR', false, 5, null);
        $this->addColumn('Socio_HistInfo2_4', 'SocioHistinfo24', 'CHAR', false, 5, null);
        $this->addColumn('Socio_HistInfo2_3', 'SocioHistinfo23', 'CHAR', false, 5, null);
        $this->addColumn('Socio_HistInfo2_2', 'SocioHistinfo22', 'CHAR', false, 5, null);
        $this->addColumn('Socio_HistInfo2_1', 'SocioHistinfo21', 'CHAR', false, 5, null);
        $this->addColumn('Socio_Ref_Info2', 'SocioRefInfo2', 'CHAR', false, 5, null);
        $this->addColumn('Socio_CurInfo2_1', 'SocioCurinfo21', 'CHAR', false, 5, null);
        $this->addColumn('Socio_CurInfo2_2', 'SocioCurinfo22', 'CHAR', false, 5, null);
        $this->addColumn('Socio_CurInfo2_3', 'SocioCurinfo23', 'CHAR', false, 5, null);
        $this->addColumn('Socio_CurInfo2_4', 'SocioCurinfo24', 'CHAR', false, 5, null);
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

} // Wp9socioIndicatorsTableMap
