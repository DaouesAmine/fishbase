<?php



/**
 * This class defines the structure of the 'morphdat' table.
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
class MorphdatTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MorphdatTableMap';

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
        $this->setName('morphdat');
        $this->setPhpName('Morphdat');
        $this->setClassname('Morphdat');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('MorphDatRefNo', 'Morphdatrefno', 'INTEGER', false, null, null);
        $this->addColumn('Females', 'Females', 'TINYINT', true, null, null);
        $this->addColumn('Males', 'Males', 'TINYINT', true, null, null);
        $this->addColumn('AppearancePic', 'Appearancepic', 'VARCHAR', false, 8, null);
        $this->addColumn('SexualAttributes', 'Sexualattributes', 'VARCHAR', false, 32, null);
        $this->addColumn('SexMorphology', 'Sexmorphology', 'VARCHAR', false, 49, null);
        $this->addColumn('SexColors', 'Sexcolors', 'VARCHAR', false, 55, null);
        $this->addColumn('StrikingFeatures', 'Strikingfeatures', 'VARCHAR', false, 22, null);
        $this->addColumn('BodyShapeI', 'Bodyshapei', 'VARCHAR', false, 20, null);
        $this->addColumn('BodyShapeII', 'Bodyshapeii', 'VARCHAR', false, 19, null);
        $this->addColumn('Forehead', 'Forehead', 'VARCHAR', false, 21, null);
        $this->addColumn('OperculumPresent', 'Operculumpresent', 'TINYINT', false, null, null);
        $this->addColumn('TypeofEyes', 'Typeofeyes', 'VARCHAR', false, 48, null);
        $this->addColumn('TypeofMouth', 'Typeofmouth', 'VARCHAR', false, 27, null);
        $this->addColumn('PosofMouth', 'Posofmouth', 'VARCHAR', false, 21, null);
        $this->addColumn('MandibleTeeth', 'Mandibleteeth', 'VARCHAR', false, 7, null);
        $this->addColumn('MandibleTeethT1', 'Mandibleteetht1', 'VARCHAR', false, 14, null);
        $this->addColumn('MandibleTeethT2', 'Mandibleteetht2', 'VARCHAR', false, 14, null);
        $this->addColumn('MandibleRowsMin', 'Mandiblerowsmin', 'SMALLINT', false, null, null);
        $this->addColumn('MandibleRowsMax', 'Mandiblerowsmax', 'SMALLINT', false, null, null);
        $this->addColumn('MaxillaTeeth', 'Maxillateeth', 'VARCHAR', false, 7, null);
        $this->addColumn('MaxillaTeethT1', 'Maxillateetht1', 'VARCHAR', false, 14, null);
        $this->addColumn('MaxillaTeethT2', 'Maxillateetht2', 'VARCHAR', false, 14, null);
        $this->addColumn('MaxillaRowsMin', 'Maxillarowsmin', 'SMALLINT', false, null, null);
        $this->addColumn('MaxillaRowsMax', 'Maxillarowsmax', 'SMALLINT', false, null, null);
        $this->addColumn('VomerineTeeth', 'Vomerineteeth', 'VARCHAR', false, 7, null);
        $this->addColumn('VomerineTeethT1', 'Vomerineteetht1', 'VARCHAR', false, 14, null);
        $this->addColumn('VomerineTeethT2', 'Vomerineteetht2', 'VARCHAR', false, 14, null);
        $this->addColumn('VomerineRowsMin', 'Vomerinerowsmin', 'SMALLINT', false, null, null);
        $this->addColumn('VomerineRowsMax', 'Vomerinerowsmax', 'SMALLINT', false, null, null);
        $this->addColumn('Palatine', 'Palatine', 'VARCHAR', false, 7, null);
        $this->addColumn('PalatineTeethT1', 'Palatineteetht1', 'VARCHAR', false, 14, null);
        $this->addColumn('PalatineTeethT2', 'Palatineteetht2', 'VARCHAR', false, 14, null);
        $this->addColumn('PalatineRowsMin', 'Palatinerowsmin', 'SMALLINT', false, null, null);
        $this->addColumn('PalatineRowsMax', 'Palatinerowsmax', 'SMALLINT', false, null, null);
        $this->addColumn('PharyngealTeeth', 'Pharyngealteeth', 'VARCHAR', false, 7, null);
        $this->addColumn('PharyngealTeethT1', 'Pharyngealteetht1', 'VARCHAR', false, 14, null);
        $this->addColumn('PharyngealTeethT2', 'Pharyngealteetht2', 'VARCHAR', false, 14, null);
        $this->addColumn('PharyngealRowsMin', 'Pharyngealrowsmin', 'SMALLINT', false, null, null);
        $this->addColumn('PharyngealRowsMax', 'Pharyngealrowsmax', 'SMALLINT', false, null, null);
        $this->addColumn('TeethonTongue', 'Teethontongue', 'VARCHAR', false, 7, null);
        $this->addColumn('Lipsteeth', 'Lipsteeth', 'VARCHAR', false, 7, null);
        $this->addColumn('DermalTeeth', 'Dermalteeth', 'VARCHAR', false, 7, null);
        $this->addColumn('CommentonTeeth', 'Commentonteeth', 'VARCHAR', false, 255, null);
        $this->addColumn('TypeofScales', 'Typeofscales', 'VARCHAR', false, 45, null);
        $this->addColumn('Scutes', 'Scutes', 'VARCHAR', false, 18, null);
        $this->addColumn('Keels', 'Keels', 'SMALLINT', false, null, null);
        $this->addColumn('HorStripesTTI', 'Horstripestti', 'VARCHAR', false, 7, null);
        $this->addColumn('HorStripesTTII', 'Horstripesttii', 'VARCHAR', false, 18, null);
        $this->addColumn('VerStripesTTI', 'Verstripestti', 'VARCHAR', false, 7, null);
        $this->addColumn('VerStripesTTII', 'Verstripesttii', 'VARCHAR', false, 18, null);
        $this->addColumn('VerStripesTTIII', 'Verstripesttiii', 'VARCHAR', false, 29, null);
        $this->addColumn('DiaStripesTTI', 'Diastripestti', 'VARCHAR', false, 7, null);
        $this->addColumn('DiaStripesTTII', 'Diastripesttii', 'VARCHAR', false, 18, null);
        $this->addColumn('DiaStripesTTIII', 'Diastripesttiii', 'VARCHAR', false, 29, null);
        $this->addColumn('CurStripesTTI', 'Curstripestti', 'VARCHAR', false, 7, null);
        $this->addColumn('CurStripesTTII', 'Curstripesttii', 'VARCHAR', false, 18, null);
        $this->addColumn('CurStripesTTIII', 'Curstripesttiii', 'VARCHAR', false, 29, null);
        $this->addColumn('SpotsTTI', 'Spotstti', 'VARCHAR', false, 18, null);
        $this->addColumn('SpotsTTII', 'Spotsttii', 'VARCHAR', false, 18, null);
        $this->addColumn('SpotsTTIII', 'Spotsttiii', 'VARCHAR', false, 23, null);
        $this->addColumn('DorsalFinI', 'Dorsalfini', 'VARCHAR', false, 28, null);
        $this->addColumn('DorsalFinII', 'Dorsalfinii', 'VARCHAR', false, 17, null);
        $this->addColumn('CaudalFinI', 'Caudalfini', 'VARCHAR', false, 28, null);
        $this->addColumn('CaudalFinII', 'Caudalfinii', 'VARCHAR', false, 17, null);
        $this->addColumn('AnalFinI', 'Analfini', 'VARCHAR', false, 28, null);
        $this->addColumn('AnalFinII', 'Analfinii', 'VARCHAR', false, 17, null);
        $this->addColumn('LateralLinesNo', 'Laterallinesno', 'SMALLINT', false, null, null);
        $this->addColumn('LLinterrupted', 'Llinterrupted', 'BOOLEAN', false, 1, null);
        $this->addColumn('ScalesLateralmin', 'Scaleslateralmin', 'SMALLINT', false, null, null);
        $this->addColumn('ScalesLateralmax', 'Scaleslateralmax', 'SMALLINT', false, null, null);
        $this->addColumn('PoredScalesMin', 'Poredscalesmin', 'SMALLINT', false, null, null);
        $this->addColumn('PoredScalesMax', 'Poredscalesmax', 'SMALLINT', false, null, null);
        $this->addColumn('LatSeriesMin', 'Latseriesmin', 'SMALLINT', false, null, null);
        $this->addColumn('LatSeriesMax', 'Latseriesmax', 'SMALLINT', false, null, null);
        $this->addColumn('ScaleRowsAboveMin', 'Scalerowsabovemin', 'FLOAT', false, null, null);
        $this->addColumn('ScaleRowsAboveMax', 'Scalerowsabovemax', 'FLOAT', false, null, null);
        $this->addColumn('ScaleRowsBelowMin', 'Scalerowsbelowmin', 'FLOAT', false, null, null);
        $this->addColumn('ScaleRowsBelowMax', 'Scalerowsbelowmax', 'FLOAT', false, null, null);
        $this->addColumn('ScalesPeduncMin', 'Scalespeduncmin', 'SMALLINT', false, null, null);
        $this->addColumn('ScalesPeduncMax', 'Scalespeduncmax', 'SMALLINT', false, null, null);
        $this->addColumn('BarbelsNo', 'Barbelsno', 'SMALLINT', false, null, null);
        $this->addColumn('BarbelsType', 'Barbelstype', 'VARCHAR', false, 13, null);
        $this->addColumn('GillCleftsNo', 'Gillcleftsno', 'SMALLINT', false, null, null);
        $this->addColumn('Spiracle', 'Spiracle', 'VARCHAR', false, 7, null);
        $this->addColumn('GillRakersLowMin', 'Gillrakerslowmin', 'INTEGER', false, null, null);
        $this->addColumn('GillRakersLowMax', 'Gillrakerslowmax', 'INTEGER', false, null, null);
        $this->addColumn('GillRakersUpMin', 'Gillrakersupmin', 'INTEGER', false, null, null);
        $this->addColumn('GillRakersUpMax', 'Gillrakersupmax', 'INTEGER', false, null, null);
        $this->addColumn('GillRakersTotalMin', 'Gillrakerstotalmin', 'INTEGER', false, null, null);
        $this->addColumn('GillRakersTotalMax', 'Gillrakerstotalmax', 'INTEGER', false, null, null);
        $this->addColumn('Vertebrae', 'Vertebrae', 'VARCHAR', false, 19, null);
        $this->addColumn('VertebraePreanMin', 'Vertebraepreanmin', 'SMALLINT', false, null, null);
        $this->addColumn('VertebraePreanMax', 'Vertebraepreanmax', 'SMALLINT', false, null, null);
        $this->addColumn('VertebraeTotalMin', 'Vertebraetotalmin', 'SMALLINT', false, null, null);
        $this->addColumn('VertebraeTotalMax', 'Vertebraetotalmax', 'SMALLINT', false, null, null);
        $this->addColumn('DorsalAttributes', 'Dorsalattributes', 'VARCHAR', false, 55, null);
        $this->addColumn('Dfinno', 'Dfinno', 'SMALLINT', false, null, null);
        $this->addColumn('DorsalSpinesMin', 'Dorsalspinesmin', 'SMALLINT', false, null, null);
        $this->addColumn('DorsalSpinesMax', 'Dorsalspinesmax', 'SMALLINT', false, null, null);
        $this->addColumn('Notched', 'Notched', 'TINYINT', false, null, null);
        $this->addColumn('DorsalSoftRaysMin', 'Dorsalsoftraysmin', 'SMALLINT', false, null, null);
        $this->addColumn('DorsalSoftRaysMax', 'Dorsalsoftraysmax', 'SMALLINT', false, null, null);
        $this->addColumn('Adifin', 'Adifin', 'VARCHAR', false, 7, null);
        $this->addColumn('DFinletsmin', 'Dfinletsmin', 'SMALLINT', false, null, null);
        $this->addColumn('DFinletsmax', 'Dfinletsmax', 'SMALLINT', false, null, null);
        $this->addColumn('VFinletsmin', 'Vfinletsmin', 'SMALLINT', false, null, null);
        $this->addColumn('VFinletsmax', 'Vfinletsmax', 'SMALLINT', false, null, null);
        $this->addColumn('CShape', 'Cshape', 'VARCHAR', false, 21, null);
        $this->addColumn('Attributes', 'Attributes', 'VARCHAR', false, 32, null);
        $this->addColumn('Afinno', 'Afinno', 'SMALLINT', false, null, null);
        $this->addColumn('AnalFinSpinesMin', 'Analfinspinesmin', 'SMALLINT', false, null, null);
        $this->addColumn('AnalFinSpinesMax', 'Analfinspinesmax', 'SMALLINT', false, null, null);
        $this->addColumn('Araymin', 'Araymin', 'SMALLINT', false, null, null);
        $this->addColumn('Araymax', 'Araymax', 'SMALLINT', false, null, null);
        $this->addColumn('PectoralAttributes', 'Pectoralattributes', 'VARCHAR', false, 39, null);
        $this->addColumn('Pspines2', 'Pspines2', 'SMALLINT', false, null, null);
        $this->addColumn('Praymin', 'Praymin', 'SMALLINT', false, null, null);
        $this->addColumn('Praymax', 'Praymax', 'SMALLINT', false, null, null);
        $this->addColumn('PelvicsAttributes', 'Pelvicsattributes', 'VARCHAR', false, 27, null);
        $this->addColumn('VPosition', 'Vposition', 'VARCHAR', false, 9, null);
        $this->addColumn('VPosition2', 'Vposition2', 'VARCHAR', false, 20, null);
        $this->addColumn('Vspines', 'Vspines', 'SMALLINT', false, null, null);
        $this->addColumn('Vraymin', 'Vraymin', 'SMALLINT', false, null, null);
        $this->addColumn('Vraymax', 'Vraymax', 'SMALLINT', false, null, null);
        $this->addColumn('StandardLengthCm', 'Standardlengthcm', 'FLOAT', false, null, null);
        $this->addColumn('Forklength', 'Forklength', 'FLOAT', false, null, null);
        $this->addColumn('Totallength', 'Totallength', 'FLOAT', false, null, null);
        $this->addColumn('HeadLength', 'Headlength', 'FLOAT', false, null, null);
        $this->addColumn('PreDorsalLength', 'Predorsallength', 'FLOAT', false, null, null);
        $this->addColumn('PrePelvicsLength', 'Prepelvicslength', 'FLOAT', false, null, null);
        $this->addColumn('PreAnalLength', 'Preanallength', 'FLOAT', false, null, null);
        $this->addColumn('PostHeadDepth', 'Postheaddepth', 'FLOAT', false, null, null);
        $this->addColumn('PostTrunkDepth', 'Posttrunkdepth', 'FLOAT', false, null, null);
        $this->addColumn('MaximumDepth', 'Maximumdepth', 'FLOAT', false, null, null);
        $this->addColumn('PeduncleDepth', 'Peduncledepth', 'FLOAT', false, null, null);
        $this->addColumn('PeduncleLength', 'Pedunclelength', 'FLOAT', false, null, null);
        $this->addColumn('CaudalHeight', 'Caudalheight', 'FLOAT', false, null, null);
        $this->addColumn('PreorbitalLength', 'Preorbitallength', 'FLOAT', false, null, null);
        $this->addColumn('EyeLength', 'Eyelength', 'FLOAT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('RemarkSex', 'Remarksex', 'CLOB', false, null, null);
        $this->addColumn('AddChars', 'Addchars', 'CLOB', false, null, null);
        $this->addColumn('SimilarSpecies1', 'Similarspecies1', 'INTEGER', false, null, null);
        $this->addColumn('SimilarSpec1Remarks', 'Similarspec1remarks', 'CLOB', false, null, null);
        $this->addColumn('SimilarSpecies2', 'Similarspecies2', 'INTEGER', false, null, null);
        $this->addColumn('SimilarSpec2Remarks', 'Similarspec2remarks', 'CLOB', false, null, null);
        $this->addColumn('EaseofID', 'Easeofid', 'VARCHAR', false, 80, null);
        $this->addColumn('OtherRef1', 'Otherref1', 'INTEGER', false, null, null);
        $this->addColumn('OtherRef2', 'Otherref2', 'INTEGER', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MorphdatTableMap
