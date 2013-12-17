<?php



/**
 * This class defines the structure of the 'fbusers' table.
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
class FbusersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FbusersTableMap';

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
        $this->setName('fbusers');
        $this->setPhpName('Fbusers');
        $this->setClassname('Fbusers');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('UserName', 'Username', 'VARCHAR', false, 255, null);
        $this->addPrimaryKey('FirstName', 'Firstname', 'VARCHAR', true, 50, null);
        $this->addPrimaryKey('Surname', 'Surname', 'VARCHAR', true, 50, null);
        $this->addColumn('Title', 'Title', 'VARCHAR', false, 10, null);
        $this->addColumn('Institute', 'Institute', 'VARCHAR', false, 255, null);
        $this->addColumn('Position', 'Position', 'VARCHAR', false, 50, null);
        $this->addPrimaryKey('UserAddress', 'Useraddress', 'VARCHAR', true, 255, null);
        $this->addColumn('UserAddress2', 'Useraddress2', 'VARCHAR', false, 255, null);
        $this->addColumn('UserType', 'Usertype', 'VARCHAR', false, 50, null);
        $this->addColumn('UserTypeOrder', 'Usertypeorder', 'FLOAT', false, null, 0);
        $this->addColumn('Library', 'Library', 'TINYINT', false, null, null);
        $this->addColumn('Museum', 'Museum', 'TINYINT', false, null, null);
        $this->addPrimaryKey('City', 'City', 'VARCHAR', true, 50, null);
        $this->addPrimaryKey('MailCountry', 'Mailcountry', 'VARCHAR', true, 50, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('StateProvince', 'Stateprovince', 'VARCHAR', false, 50, null);
        $this->addColumn('PostalCode', 'Postalcode', 'VARCHAR', false, 50, null);
        $this->addColumn('V1_0', 'V10', 'TINYINT', false, null, null);
        $this->addColumn('Payment1_0', 'Payment10', 'VARCHAR', false, 50, null);
        $this->addColumn('DateShipped1_0', 'Dateshipped10', 'TIMESTAMP', false, null, null);
        $this->addColumn('V2_0', 'V20', 'TINYINT', false, null, null);
        $this->addColumn('Payment2_0', 'Payment20', 'VARCHAR', false, 50, null);
        $this->addColumn('DateShipped2_0', 'Dateshipped20', 'DATE', false, null, null);
        $this->addColumn('V3_0', 'V30', 'TINYINT', false, null, null);
        $this->addColumn('Payment3_0', 'Payment30', 'VARCHAR', false, 50, null);
        $this->addColumn('DateShipped3_0', 'Dateshipped30', 'TIMESTAMP', false, null, null);
        $this->addColumn('V4_0', 'V40', 'TINYINT', false, null, null);
        $this->addColumn('Payment4_0', 'Payment40', 'VARCHAR', false, 50, null);
        $this->addColumn('DateShipped4_0', 'Dateshipped40', 'TIMESTAMP', false, null, null);
        $this->addColumn('V5_0', 'V50', 'TINYINT', false, null, null);
        $this->addColumn('Payment5_0', 'Payment50', 'VARCHAR', false, 50, null);
        $this->addColumn('DateShipped5_0', 'Dateshipped50', 'TIMESTAMP', false, null, null);
        $this->addColumn('V6_0', 'V60', 'TINYINT', false, null, null);
        $this->addColumn('Payment6_0', 'Payment60', 'VARCHAR', false, 50, null);
        $this->addColumn('DateShipped6_0', 'Dateshipped60', 'TIMESTAMP', false, null, null);
        $this->addColumn('V7_0', 'V70', 'TINYINT', false, null, null);
        $this->addColumn('Payment7_0', 'Payment70', 'VARCHAR', false, 50, null);
        $this->addColumn('DateShipped7_0', 'Dateshipped70', 'TIMESTAMP', false, null, null);
        $this->addColumn('V7_1', 'V71', 'TINYINT', false, null, null);
        $this->addColumn('Payment7_1', 'Payment71', 'VARCHAR', false, 50, null);
        $this->addColumn('DateShipped7_1', 'Dateshipped71', 'TIMESTAMP', false, null, null);
        $this->addColumn('E_Mail', 'EMail', 'VARCHAR', false, 50, null);
        $this->addColumn('WebPage', 'Webpage', 'CLOB', false, null, null);
        $this->addColumn('Telephone', 'Telephone', 'VARCHAR', false, 25, null);
        $this->addColumn('FAX', 'Fax', 'VARCHAR', false, 50, null);
        $this->addColumn('ContactBy', 'Contactby', 'VARCHAR', false, 15, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 255, null);
        $this->addColumn('CopiesNum', 'Copiesnum', 'SMALLINT', false, null, 0);
        $this->addColumn('Copies2k', 'Copies2k', 'SMALLINT', false, null, null);
        $this->addColumn('Subscriber', 'Subscriber', 'TINYINT', false, null, null);
        $this->addColumn('Collaborator', 'Collaborator', 'TINYINT', false, null, null);
        $this->addColumn('Year', 'Year', 'SMALLINT', false, null, 0);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FbusersTableMap
