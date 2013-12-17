<?php



/**
 * This class defines the structure of the 'morphmet' table.
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
class MorphmetTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MorphmetTableMap';

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
        $this->setName('morphmet');
        $this->setPhpName('Morphmet');
        $this->setClassname('Morphmet');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('PicName', 'Picname', 'VARCHAR', true, 255, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('TL', 'Tl', 'SMALLINT', false, null, null);
        $this->addColumn('SL', 'Sl', 'SMALLINT', false, null, null);
        $this->addColumn('FL', 'Fl', 'SMALLINT', false, null, null);
        $this->addColumn('HL', 'Hl', 'SMALLINT', false, null, null);
        $this->addColumn('PAL', 'Pal', 'SMALLINT', false, null, null);
        $this->addColumn('PDL', 'Pdl', 'SMALLINT', false, null, null);
        $this->addColumn('PPL', 'Ppl', 'SMALLINT', false, null, null);
        $this->addColumn('PPEL', 'Ppel', 'SMALLINT', false, null, null);
        $this->addColumn('ED', 'Ed', 'SMALLINT', false, null, null);
        $this->addColumn('POL', 'Pol', 'SMALLINT', false, null, null);
        $this->addColumn('BD', 'Bd', 'SMALLINT', false, null, null);
        $this->addColumn('CH', 'Ch', 'SMALLINT', false, null, null);
        $this->addColumn('CA', 'Ca', 'SMALLINT', false, null, null);
        $this->addColumn('SnoutTipX', 'Snouttipx', 'SMALLINT', false, null, null);
        $this->addColumn('SnoutTipY', 'Snouttipy', 'SMALLINT', false, null, null);
        $this->addColumn('CaudalOriginX', 'Caudaloriginx', 'SMALLINT', false, null, null);
        $this->addColumn('CaudalOriginY', 'Caudaloriginy', 'SMALLINT', false, null, null);
        $this->addColumn('TLEndX', 'Tlendx', 'SMALLINT', false, null, null);
        $this->addColumn('TLEndY', 'Tlendy', 'SMALLINT', false, null, null);
        $this->addColumn('DorsalOriginX', 'Dorsaloriginx', 'SMALLINT', false, null, null);
        $this->addColumn('DorsalOriginY', 'Dorsaloriginy', 'SMALLINT', false, null, null);
        $this->addColumn('AnalOriginX', 'Analoriginx', 'SMALLINT', false, null, null);
        $this->addColumn('AnalOriginY', 'Analoriginy', 'SMALLINT', false, null, null);
        $this->addColumn('EyeFrontX', 'Eyefrontx', 'SMALLINT', false, null, null);
        $this->addColumn('EyeFrontY', 'Eyefronty', 'SMALLINT', false, null, null);
        $this->addColumn('EyeEndX', 'Eyeendx', 'SMALLINT', false, null, null);
        $this->addColumn('EyeEndY', 'Eyeendy', 'SMALLINT', false, null, null);
        $this->addColumn('OpercleEndX', 'Opercleendx', 'SMALLINT', false, null, null);
        $this->addColumn('OpercleEndY', 'Opercleendy', 'SMALLINT', false, null, null);
        $this->addColumn('MaxDepthDorsalX', 'Maxdepthdorsalx', 'SMALLINT', false, null, null);
        $this->addColumn('MaxDepthDorsalY', 'Maxdepthdorsaly', 'SMALLINT', false, null, null);
        $this->addColumn('MaxDepthVentralX', 'Maxdepthventralx', 'SMALLINT', false, null, null);
        $this->addColumn('MaxDepthVentralY', 'Maxdepthventraly', 'SMALLINT', false, null, null);
        $this->addColumn('PectoralOriginX', 'Pectoraloriginx', 'SMALLINT', false, null, null);
        $this->addColumn('PectoralOriginY', 'Pectoraloriginy', 'SMALLINT', false, null, null);
        $this->addColumn('PelvicOriginX', 'Pelvicoriginx', 'SMALLINT', false, null, null);
        $this->addColumn('PelvicOriginY', 'Pelvicoriginy', 'SMALLINT', false, null, null);
        $this->addColumn('FLEndX', 'Flendx', 'SMALLINT', false, null, null);
        $this->addColumn('FLEndY', 'Flendy', 'SMALLINT', false, null, null);
        $this->addColumn('CaudalUpperX', 'Caudalupperx', 'SMALLINT', false, null, null);
        $this->addColumn('CaudalUpperY', 'Caudaluppery', 'SMALLINT', false, null, null);
        $this->addColumn('CaudalLowerX', 'Caudallowerx', 'SMALLINT', false, null, null);
        $this->addColumn('CaudalLowerY', 'Caudallowery', 'SMALLINT', false, null, null);
        $this->addColumn('AspectRatio', 'Aspectratio', 'FLOAT', false, null, null);
        $this->addColumn('Doubtful', 'Doubtful', 'TINYINT', false, null, 0);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MorphmetTableMap
