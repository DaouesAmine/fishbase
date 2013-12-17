<?php



/**
 * This class defines the structure of the 'picturesmain' table.
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
class PicturesmainTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PicturesmainTableMap';

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
        $this->setName('picturesmain');
        $this->setPhpName('Picturesmain');
        $this->setClassname('Picturesmain');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('PicGenus', 'Picgenus', 'VARCHAR', false, 30, null);
        $this->addColumn('PicSpecies', 'Picspecies', 'VARCHAR', false, 45, null);
        $this->addColumn('Syncode', 'Syncode', 'INTEGER', false, null, null);
        $this->addColumn('PicName', 'Picname', 'VARCHAR', true, 20, null);
        $this->addColumn('Scanned', 'Scanned', 'TINYINT', false, null, null);
        $this->addColumn('PictureType', 'Picturetype', 'VARCHAR', false, 50, null);
        $this->addColumn('PicType', 'Pictype', 'CHAR', false, 17, null);
        $this->addColumn('Rank', 'Rank', 'SMALLINT', false, null, null);
        $this->addColumn('BestPic', 'Bestpic', 'TINYINT', false, null, null);
        $this->addColumn('Score', 'Score', 'INTEGER', false, null, 0);
        $this->addColumn('Occurrence', 'Occurrence', 'TINYINT', false, null, null);
        $this->addColumn('CDROM', 'Cdrom', 'SMALLINT', false, null, null);
        $this->addColumn('LifeStage', 'Lifestage', 'VARCHAR', false, 10, null);
        $this->addColumn('Size', 'Size', 'DOUBLE', false, null, null);
        $this->addColumn('LengthType', 'Lengthtype', 'VARCHAR', false, 5, null);
        $this->addColumn('Size2', 'Size2', 'DOUBLE', false, null, null);
        $this->addColumn('LenghtType2', 'Lenghttype2', 'VARCHAR', false, 5, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 150, null);
        $this->addColumn('Province', 'Province', 'VARCHAR', false, 150, null);
        $this->addColumn('LatDeg', 'Latdeg', 'SMALLINT', false, null, null);
        $this->addColumn('LatMin', 'Latmin', 'FLOAT', false, null, null);
        $this->addColumn('NorthSouth', 'Northsouth', 'CHAR', false, null, null);
        $this->addColumn('LongDeg', 'Longdeg', 'SMALLINT', false, null, null);
        $this->addColumn('LongMin', 'Longmin', 'FLOAT', false, null, null);
        $this->addColumn('EastWest', 'Eastwest', 'CHAR', false, null, null);
        $this->addColumn('Depth', 'Depth', 'DOUBLE', false, null, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 255, null);
        $this->addColumn('Date', 'Date', 'DATE', false, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('AuthName', 'Authname', 'VARCHAR', false, 75, null);
        $this->addColumn('Reference', 'Reference', 'INTEGER', false, null, null);
        $this->addColumn('PageCode', 'Pagecode', 'VARCHAR', false, 75, null);
        $this->addColumn('URL', 'Url', 'VARCHAR', false, 150, null);
        $this->addColumn('LogoFile', 'Logofile', 'VARCHAR', false, 12, null);
        $this->addColumn('Copyright', 'Copyright', 'VARCHAR', false, 19, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 100, null);
        $this->addColumn('PublicDomain', 'Publicdomain', 'BOOLEAN', false, 1, null);
        $this->addColumn('NewPic', 'Newpic', 'VARCHAR', false, 15, null);
        $this->addColumn('PicPreferred', 'Picpreferred', 'BOOLEAN', false, 1, null);
        $this->addColumn('PicPreferredMale', 'Picpreferredmale', 'BOOLEAN', false, 1, null);
        $this->addColumn('PicPreferredFem', 'Picpreferredfem', 'BOOLEAN', false, 1, null);
        $this->addColumn('PicPreferredJuv', 'Picpreferredjuv', 'BOOLEAN', false, 1, null);
        $this->addColumn('EOL', 'Eol', 'TINYINT', false, null, null);
        $this->addColumn('Taxo', 'Taxo', 'TINYINT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('Dateentered', 'Dateentered', 'DATE', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('Datemodified', 'Datemodified', 'DATE', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('Datechecked', 'Datechecked', 'DATE', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PicturesmainTableMap
