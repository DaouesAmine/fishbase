<?php



/**
 * This class defines the structure of the 'wpreferences' table.
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
class WpreferencesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.WpreferencesTableMap';

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
        $this->setName('wpreferences');
        $this->setPhpName('Wpreferences');
        $this->setClassname('Wpreferences');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('RefNo', 'Refno', 'INTEGER', true, null, 0);
        $this->addColumn('Title', 'Title', 'VARCHAR', true, 255, null);
        $this->addColumn('Topic', 'Topic', 'VARCHAR', false, 50, null);
        $this->addColumn('SubTopic', 'Subtopic', 'VARCHAR', false, 255, null);
        $this->addColumn('Author', 'Author', 'VARCHAR', true, 255, null);
        $this->addColumn('WP', 'Wp', 'VARCHAR', false, 11, null);
        $this->addColumn('Source', 'Source', 'CLOB', false, null, null);
        $this->addColumn('Year', 'Year', 'INTEGER', true, null, null);
        $this->addColumn('PaperURL', 'Paperurl', 'CLOB', false, null, null);
        $this->addColumn('IncPub', 'Incpub', 'VARCHAR', false, 11, null);
        $this->addColumn('PubStat', 'Pubstat', 'VARCHAR', false, 25, null);
        $this->addColumn('Annotation', 'Annotation', 'CLOB', false, null, null);
        $this->addColumn('NameType', 'Nametype', 'VARCHAR', false, 50, null);
        $this->addColumn('SourceUnique', 'Sourceunique', 'VARCHAR', true, 255, null);
        $this->addColumn('FirstAuthor', 'Firstauthor', 'VARCHAR', false, 65, null);
        $this->addColumn('PageStart', 'Pagestart', 'INTEGER', false, null, null);
        $this->addColumn('PageEnd', 'Pageend', 'INTEGER', false, null, null);
        $this->addColumn('PageCount', 'Pagecount', 'INTEGER', false, null, null);
        $this->addColumn('Language', 'Language', 'VARCHAR', false, 20, null);
        $this->addColumn('Complete', 'Complete', 'INTEGER', false, null, null);
        $this->addColumn('RefType', 'Reftype', 'VARCHAR', false, 50, null);
        $this->addColumn('Keywords', 'Keywords', 'VARCHAR', false, 255, null);
        $this->addColumn('OtherKeywords', 'Otherkeywords', 'VARCHAR', false, 255, null);
        $this->addColumn('Remarks', 'Remarks', 'CLOB', false, null, null);
        $this->addColumn('CrossRef1', 'Crossref1', 'INTEGER', false, null, null);
        $this->addColumn('CrossRef2', 'Crossref2', 'INTEGER', false, null, null);
        $this->addColumn('CrossRef3', 'Crossref3', 'INTEGER', false, null, null);
        $this->addColumn('CrossRef4', 'Crossref4', 'INTEGER', false, null, null);
        $this->addColumn('CrossRef5', 'Crossref5', 'INTEGER', false, null, null);
        $this->addColumn('Abstract', 'Abstract', 'CLOB', false, null, null);
        $this->addColumn('Citation', 'Citation', 'INTEGER', false, null, null);
        $this->addColumn('Team', 'Team', 'INTEGER', false, null, null);
        $this->addColumn('AvailIclarm2', 'Availiclarm2', 'INTEGER', false, null, null);
        $this->addColumn('AvailIclarm', 'Availiclarm', 'INTEGER', false, null, null);
        $this->addColumn('Aquarium', 'Aquarium', 'INTEGER', false, null, null);
        $this->addColumn('Processing', 'Processing', 'INTEGER', false, null, null);
        $this->addColumn('Comname', 'Comname', 'INTEGER', false, null, null);
        $this->addColumn('Pictures', 'Pictures', 'INTEGER', false, null, null);
        $this->addColumn('Tag/recapture', 'Tagrecapture', 'INTEGER', false, null, null);
        $this->addColumn('Conservation', 'Conservation', 'INTEGER', false, null, null);
        $this->addColumn('Checklist', 'Checklist', 'INTEGER', false, null, null);
        $this->addColumn('ISBN', 'Isbn', 'VARCHAR', false, 50, null);
        $this->addColumn('AuthorEmail', 'Authoremail', 'VARCHAR', false, 70, null);
        $this->addColumn('AuthorAdress', 'Authoradress', 'VARCHAR', false, 250, null);
        $this->addColumn('AuthorAdress2', 'Authoradress2', 'VARCHAR', false, 250, null);
        $this->addColumn('PdfFile', 'Pdffile', 'VARCHAR', false, 100, null);
        $this->addColumn('DP', 'Dp', 'INTEGER', false, null, null);
        $this->addColumn('RF', 'Rf', 'INTEGER', false, null, null);
        $this->addColumn('RDE', 'Rde', 'INTEGER', false, null, null);
        $this->addColumn('Used', 'Used', 'VARCHAR', false, 50, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Borrower', 'Borrower', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WpreferencesTableMap
