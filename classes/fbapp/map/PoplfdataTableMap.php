<?php



/**
 * This class defines the structure of the 'poplfdata' table.
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
class PoplfdataTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PoplfdataTableMap';

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
        $this->setName('poplfdata');
        $this->setPhpName('Poplfdata');
        $this->setClassname('Poplfdata');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('LFCode', 'Lfcode', 'INTEGER', false, null, null);
        $this->addColumn('DateSampled', 'Datesampled', 'TIMESTAMP', false, null, null);
        $this->addColumn('YearofSampleOld', 'Yearofsampleold', 'SMALLINT', false, null, null);
        $this->addColumn('YearofSample', 'Yearofsample', 'VARCHAR', false, 7, null);
        $this->addColumn('Individuals', 'Individuals', 'FLOAT', false, null, null);
        $this->addColumn('Class1ML', 'Class1ml', 'FLOAT', false, null, null);
        $this->addColumn('Class1FR', 'Class1fr', 'FLOAT', false, null, null);
        $this->addColumn('Class2ML', 'Class2ml', 'FLOAT', false, null, null);
        $this->addColumn('Class2FR', 'Class2fr', 'FLOAT', false, null, null);
        $this->addColumn('Class3ML', 'Class3ml', 'FLOAT', false, null, null);
        $this->addColumn('Class3FR', 'Class3fr', 'FLOAT', false, null, null);
        $this->addColumn('Class4ML', 'Class4ml', 'FLOAT', false, null, null);
        $this->addColumn('Class4FR', 'Class4fr', 'FLOAT', false, null, null);
        $this->addColumn('Class5ML', 'Class5ml', 'FLOAT', false, null, null);
        $this->addColumn('Class5FR', 'Class5fr', 'FLOAT', false, null, null);
        $this->addColumn('Class6ML', 'Class6ml', 'FLOAT', false, null, null);
        $this->addColumn('Class6FR', 'Class6fr', 'FLOAT', false, null, null);
        $this->addColumn('Class7ML', 'Class7ml', 'FLOAT', false, null, null);
        $this->addColumn('Class7FR', 'Class7fr', 'FLOAT', false, null, null);
        $this->addColumn('Class8ML', 'Class8ml', 'FLOAT', false, null, null);
        $this->addColumn('Class8FR', 'Class8fr', 'FLOAT', false, null, null);
        $this->addColumn('Class9ML', 'Class9ml', 'FLOAT', false, null, null);
        $this->addColumn('Class9FR', 'Class9fr', 'FLOAT', false, null, null);
        $this->addColumn('Class10ML', 'Class10ml', 'FLOAT', false, null, null);
        $this->addColumn('Class10FR', 'Class10fr', 'FLOAT', false, null, null);
        $this->addColumn('Class11ML', 'Class11ml', 'FLOAT', false, null, null);
        $this->addColumn('Class11FR', 'Class11fr', 'FLOAT', false, null, null);
        $this->addColumn('Class12ML', 'Class12ml', 'FLOAT', false, null, null);
        $this->addColumn('Class12FR', 'Class12fr', 'FLOAT', false, null, null);
        $this->addColumn('Class13ML', 'Class13ml', 'FLOAT', false, null, null);
        $this->addColumn('Class13FR', 'Class13fr', 'FLOAT', false, null, null);
        $this->addColumn('Class14ML', 'Class14ml', 'FLOAT', false, null, null);
        $this->addColumn('Class14FR', 'Class14fr', 'FLOAT', false, null, null);
        $this->addColumn('Class15ML', 'Class15ml', 'FLOAT', false, null, null);
        $this->addColumn('Class15FR', 'Class15fr', 'FLOAT', false, null, null);
        $this->addColumn('Class16ML', 'Class16ml', 'FLOAT', false, null, null);
        $this->addColumn('Class16FR', 'Class16fr', 'FLOAT', false, null, null);
        $this->addColumn('Class17ML', 'Class17ml', 'FLOAT', false, null, null);
        $this->addColumn('Class17FR', 'Class17fr', 'FLOAT', false, null, null);
        $this->addColumn('Class18ML', 'Class18ml', 'FLOAT', false, null, null);
        $this->addColumn('Class18FR', 'Class18fr', 'FLOAT', false, null, null);
        $this->addColumn('Class19ML', 'Class19ml', 'FLOAT', false, null, null);
        $this->addColumn('Class19FR', 'Class19fr', 'FLOAT', false, null, null);
        $this->addColumn('Class20ML', 'Class20ml', 'FLOAT', false, null, null);
        $this->addColumn('Class20FR', 'Class20fr', 'FLOAT', false, null, null);
        $this->addColumn('Class21ML', 'Class21ml', 'FLOAT', false, null, null);
        $this->addColumn('Class21FR', 'Class21fr', 'FLOAT', false, null, null);
        $this->addColumn('Class22ML', 'Class22ml', 'FLOAT', false, null, null);
        $this->addColumn('Class22FR', 'Class22fr', 'FLOAT', false, null, null);
        $this->addColumn('Class23ML', 'Class23ml', 'FLOAT', false, null, null);
        $this->addColumn('Class23FR', 'Class23fr', 'FLOAT', false, null, null);
        $this->addColumn('Class24ML', 'Class24ml', 'FLOAT', false, null, null);
        $this->addColumn('Class24FR', 'Class24fr', 'FLOAT', false, null, null);
        $this->addColumn('Class25ML', 'Class25ml', 'FLOAT', false, null, null);
        $this->addColumn('Class25FR', 'Class25fr', 'FLOAT', false, null, null);
        $this->addColumn('Class26ML', 'Class26ml', 'FLOAT', false, null, null);
        $this->addColumn('Class26FR', 'Class26fr', 'FLOAT', false, null, null);
        $this->addColumn('Class27ML', 'Class27ml', 'FLOAT', false, null, null);
        $this->addColumn('Class27FR', 'Class27fr', 'FLOAT', false, null, null);
        $this->addColumn('Class28ML', 'Class28ml', 'FLOAT', false, null, null);
        $this->addColumn('Class28FR', 'Class28fr', 'FLOAT', false, null, null);
        $this->addColumn('Class29ML', 'Class29ml', 'FLOAT', false, null, null);
        $this->addColumn('Class29FR', 'Class29fr', 'FLOAT', false, null, null);
        $this->addColumn('Class30ML', 'Class30ml', 'FLOAT', false, null, null);
        $this->addColumn('Class30FR', 'Class30fr', 'FLOAT', false, null, null);
        $this->addColumn('Class31ML', 'Class31ml', 'FLOAT', false, null, null);
        $this->addColumn('Class31FR', 'Class31fr', 'FLOAT', false, null, null);
        $this->addColumn('Class32ML', 'Class32ml', 'FLOAT', false, null, null);
        $this->addColumn('Class32FR', 'Class32fr', 'FLOAT', false, null, null);
        $this->addColumn('Class33ML', 'Class33ml', 'FLOAT', false, null, null);
        $this->addColumn('Class33FR', 'Class33fr', 'FLOAT', false, null, null);
        $this->addColumn('Class34ML', 'Class34ml', 'FLOAT', false, null, null);
        $this->addColumn('Class34FR', 'Class34fr', 'FLOAT', false, null, null);
        $this->addColumn('Class35ML', 'Class35ml', 'FLOAT', false, null, null);
        $this->addColumn('Class35FR', 'Class35fr', 'FLOAT', false, null, null);
        $this->addColumn('Class36ML', 'Class36ml', 'FLOAT', false, null, null);
        $this->addColumn('Class36FR', 'Class36fr', 'FLOAT', false, null, null);
        $this->addColumn('Class37ML', 'Class37ml', 'FLOAT', false, null, null);
        $this->addColumn('Class37FR', 'Class37fr', 'FLOAT', false, null, null);
        $this->addColumn('Class38ML', 'Class38ml', 'FLOAT', false, null, null);
        $this->addColumn('Class38FR', 'Class38fr', 'FLOAT', false, null, null);
        $this->addColumn('Class39ML', 'Class39ml', 'FLOAT', false, null, null);
        $this->addColumn('Class39FR', 'Class39fr', 'FLOAT', false, null, null);
        $this->addColumn('Class40ML', 'Class40ml', 'FLOAT', false, null, null);
        $this->addColumn('Class40FR', 'Class40fr', 'FLOAT', false, null, null);
        $this->addColumn('Class41ML', 'Class41ml', 'FLOAT', false, null, null);
        $this->addColumn('Class41FR', 'Class41fr', 'FLOAT', false, null, null);
        $this->addColumn('Class42ML', 'Class42ml', 'FLOAT', false, null, null);
        $this->addColumn('Class42FR', 'Class42fr', 'FLOAT', false, null, null);
        $this->addColumn('Class43ML', 'Class43ml', 'FLOAT', false, null, null);
        $this->addColumn('Class43FR', 'Class43fr', 'FLOAT', false, null, null);
        $this->addColumn('Class44ML', 'Class44ml', 'FLOAT', false, null, null);
        $this->addColumn('Class44FR', 'Class44fr', 'FLOAT', false, null, null);
        $this->addColumn('Class45ML', 'Class45ml', 'FLOAT', false, null, null);
        $this->addColumn('Class45FR', 'Class45fr', 'FLOAT', false, null, null);
        $this->addColumn('Class46ML', 'Class46ml', 'FLOAT', false, null, null);
        $this->addColumn('Class46FR', 'Class46fr', 'FLOAT', false, null, null);
        $this->addColumn('Class47ML', 'Class47ml', 'FLOAT', false, null, null);
        $this->addColumn('Class47FR', 'Class47fr', 'FLOAT', false, null, null);
        $this->addColumn('Class48ML', 'Class48ml', 'FLOAT', false, null, null);
        $this->addColumn('Class48FR', 'Class48fr', 'FLOAT', false, null, null);
        $this->addColumn('Class49ML', 'Class49ml', 'FLOAT', false, null, null);
        $this->addColumn('Class49FR', 'Class49fr', 'FLOAT', false, null, null);
        $this->addColumn('Class50ML', 'Class50ml', 'FLOAT', false, null, null);
        $this->addColumn('Class50FR', 'Class50fr', 'FLOAT', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PoplfdataTableMap
