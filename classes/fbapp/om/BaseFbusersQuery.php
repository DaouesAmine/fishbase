<?php


/**
 * Base class that represents a query for the 'fbusers' table.
 *
 *
 *
 * @method FbusersQuery orderByUsername($order = Criteria::ASC) Order by the UserName column
 * @method FbusersQuery orderByFirstname($order = Criteria::ASC) Order by the FirstName column
 * @method FbusersQuery orderBySurname($order = Criteria::ASC) Order by the Surname column
 * @method FbusersQuery orderByTitle($order = Criteria::ASC) Order by the Title column
 * @method FbusersQuery orderByInstitute($order = Criteria::ASC) Order by the Institute column
 * @method FbusersQuery orderByPosition($order = Criteria::ASC) Order by the Position column
 * @method FbusersQuery orderByUseraddress($order = Criteria::ASC) Order by the UserAddress column
 * @method FbusersQuery orderByUseraddress2($order = Criteria::ASC) Order by the UserAddress2 column
 * @method FbusersQuery orderByUsertype($order = Criteria::ASC) Order by the UserType column
 * @method FbusersQuery orderByUsertypeorder($order = Criteria::ASC) Order by the UserTypeOrder column
 * @method FbusersQuery orderByLibrary($order = Criteria::ASC) Order by the Library column
 * @method FbusersQuery orderByMuseum($order = Criteria::ASC) Order by the Museum column
 * @method FbusersQuery orderByCity($order = Criteria::ASC) Order by the City column
 * @method FbusersQuery orderByMailcountry($order = Criteria::ASC) Order by the MailCountry column
 * @method FbusersQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method FbusersQuery orderByStateprovince($order = Criteria::ASC) Order by the StateProvince column
 * @method FbusersQuery orderByPostalcode($order = Criteria::ASC) Order by the PostalCode column
 * @method FbusersQuery orderByV10($order = Criteria::ASC) Order by the V1_0 column
 * @method FbusersQuery orderByPayment10($order = Criteria::ASC) Order by the Payment1_0 column
 * @method FbusersQuery orderByDateshipped10($order = Criteria::ASC) Order by the DateShipped1_0 column
 * @method FbusersQuery orderByV20($order = Criteria::ASC) Order by the V2_0 column
 * @method FbusersQuery orderByPayment20($order = Criteria::ASC) Order by the Payment2_0 column
 * @method FbusersQuery orderByDateshipped20($order = Criteria::ASC) Order by the DateShipped2_0 column
 * @method FbusersQuery orderByV30($order = Criteria::ASC) Order by the V3_0 column
 * @method FbusersQuery orderByPayment30($order = Criteria::ASC) Order by the Payment3_0 column
 * @method FbusersQuery orderByDateshipped30($order = Criteria::ASC) Order by the DateShipped3_0 column
 * @method FbusersQuery orderByV40($order = Criteria::ASC) Order by the V4_0 column
 * @method FbusersQuery orderByPayment40($order = Criteria::ASC) Order by the Payment4_0 column
 * @method FbusersQuery orderByDateshipped40($order = Criteria::ASC) Order by the DateShipped4_0 column
 * @method FbusersQuery orderByV50($order = Criteria::ASC) Order by the V5_0 column
 * @method FbusersQuery orderByPayment50($order = Criteria::ASC) Order by the Payment5_0 column
 * @method FbusersQuery orderByDateshipped50($order = Criteria::ASC) Order by the DateShipped5_0 column
 * @method FbusersQuery orderByV60($order = Criteria::ASC) Order by the V6_0 column
 * @method FbusersQuery orderByPayment60($order = Criteria::ASC) Order by the Payment6_0 column
 * @method FbusersQuery orderByDateshipped60($order = Criteria::ASC) Order by the DateShipped6_0 column
 * @method FbusersQuery orderByV70($order = Criteria::ASC) Order by the V7_0 column
 * @method FbusersQuery orderByPayment70($order = Criteria::ASC) Order by the Payment7_0 column
 * @method FbusersQuery orderByDateshipped70($order = Criteria::ASC) Order by the DateShipped7_0 column
 * @method FbusersQuery orderByV71($order = Criteria::ASC) Order by the V7_1 column
 * @method FbusersQuery orderByPayment71($order = Criteria::ASC) Order by the Payment7_1 column
 * @method FbusersQuery orderByDateshipped71($order = Criteria::ASC) Order by the DateShipped7_1 column
 * @method FbusersQuery orderByEMail($order = Criteria::ASC) Order by the E_Mail column
 * @method FbusersQuery orderByWebpage($order = Criteria::ASC) Order by the WebPage column
 * @method FbusersQuery orderByTelephone($order = Criteria::ASC) Order by the Telephone column
 * @method FbusersQuery orderByFax($order = Criteria::ASC) Order by the FAX column
 * @method FbusersQuery orderByContactby($order = Criteria::ASC) Order by the ContactBy column
 * @method FbusersQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method FbusersQuery orderByCopiesnum($order = Criteria::ASC) Order by the CopiesNum column
 * @method FbusersQuery orderByCopies2k($order = Criteria::ASC) Order by the Copies2k column
 * @method FbusersQuery orderBySubscriber($order = Criteria::ASC) Order by the Subscriber column
 * @method FbusersQuery orderByCollaborator($order = Criteria::ASC) Order by the Collaborator column
 * @method FbusersQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method FbusersQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method FbusersQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method FbusersQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method FbusersQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method FbusersQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FbusersQuery groupByUsername() Group by the UserName column
 * @method FbusersQuery groupByFirstname() Group by the FirstName column
 * @method FbusersQuery groupBySurname() Group by the Surname column
 * @method FbusersQuery groupByTitle() Group by the Title column
 * @method FbusersQuery groupByInstitute() Group by the Institute column
 * @method FbusersQuery groupByPosition() Group by the Position column
 * @method FbusersQuery groupByUseraddress() Group by the UserAddress column
 * @method FbusersQuery groupByUseraddress2() Group by the UserAddress2 column
 * @method FbusersQuery groupByUsertype() Group by the UserType column
 * @method FbusersQuery groupByUsertypeorder() Group by the UserTypeOrder column
 * @method FbusersQuery groupByLibrary() Group by the Library column
 * @method FbusersQuery groupByMuseum() Group by the Museum column
 * @method FbusersQuery groupByCity() Group by the City column
 * @method FbusersQuery groupByMailcountry() Group by the MailCountry column
 * @method FbusersQuery groupByCCode() Group by the C_Code column
 * @method FbusersQuery groupByStateprovince() Group by the StateProvince column
 * @method FbusersQuery groupByPostalcode() Group by the PostalCode column
 * @method FbusersQuery groupByV10() Group by the V1_0 column
 * @method FbusersQuery groupByPayment10() Group by the Payment1_0 column
 * @method FbusersQuery groupByDateshipped10() Group by the DateShipped1_0 column
 * @method FbusersQuery groupByV20() Group by the V2_0 column
 * @method FbusersQuery groupByPayment20() Group by the Payment2_0 column
 * @method FbusersQuery groupByDateshipped20() Group by the DateShipped2_0 column
 * @method FbusersQuery groupByV30() Group by the V3_0 column
 * @method FbusersQuery groupByPayment30() Group by the Payment3_0 column
 * @method FbusersQuery groupByDateshipped30() Group by the DateShipped3_0 column
 * @method FbusersQuery groupByV40() Group by the V4_0 column
 * @method FbusersQuery groupByPayment40() Group by the Payment4_0 column
 * @method FbusersQuery groupByDateshipped40() Group by the DateShipped4_0 column
 * @method FbusersQuery groupByV50() Group by the V5_0 column
 * @method FbusersQuery groupByPayment50() Group by the Payment5_0 column
 * @method FbusersQuery groupByDateshipped50() Group by the DateShipped5_0 column
 * @method FbusersQuery groupByV60() Group by the V6_0 column
 * @method FbusersQuery groupByPayment60() Group by the Payment6_0 column
 * @method FbusersQuery groupByDateshipped60() Group by the DateShipped6_0 column
 * @method FbusersQuery groupByV70() Group by the V7_0 column
 * @method FbusersQuery groupByPayment70() Group by the Payment7_0 column
 * @method FbusersQuery groupByDateshipped70() Group by the DateShipped7_0 column
 * @method FbusersQuery groupByV71() Group by the V7_1 column
 * @method FbusersQuery groupByPayment71() Group by the Payment7_1 column
 * @method FbusersQuery groupByDateshipped71() Group by the DateShipped7_1 column
 * @method FbusersQuery groupByEMail() Group by the E_Mail column
 * @method FbusersQuery groupByWebpage() Group by the WebPage column
 * @method FbusersQuery groupByTelephone() Group by the Telephone column
 * @method FbusersQuery groupByFax() Group by the FAX column
 * @method FbusersQuery groupByContactby() Group by the ContactBy column
 * @method FbusersQuery groupByComment() Group by the Comment column
 * @method FbusersQuery groupByCopiesnum() Group by the CopiesNum column
 * @method FbusersQuery groupByCopies2k() Group by the Copies2k column
 * @method FbusersQuery groupBySubscriber() Group by the Subscriber column
 * @method FbusersQuery groupByCollaborator() Group by the Collaborator column
 * @method FbusersQuery groupByYear() Group by the Year column
 * @method FbusersQuery groupByEntered() Group by the Entered column
 * @method FbusersQuery groupByDateentered() Group by the DateEntered column
 * @method FbusersQuery groupByModified() Group by the Modified column
 * @method FbusersQuery groupByDatemodified() Group by the DateModified column
 * @method FbusersQuery groupByTs() Group by the TS column
 *
 * @method FbusersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FbusersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FbusersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Fbusers findOne(PropelPDO $con = null) Return the first Fbusers matching the query
 * @method Fbusers findOneOrCreate(PropelPDO $con = null) Return the first Fbusers matching the query, or a new Fbusers object populated from the query conditions when no match is found
 *
 * @method Fbusers findOneByUsername(string $UserName) Return the first Fbusers filtered by the UserName column
 * @method Fbusers findOneByFirstname(string $FirstName) Return the first Fbusers filtered by the FirstName column
 * @method Fbusers findOneBySurname(string $Surname) Return the first Fbusers filtered by the Surname column
 * @method Fbusers findOneByTitle(string $Title) Return the first Fbusers filtered by the Title column
 * @method Fbusers findOneByInstitute(string $Institute) Return the first Fbusers filtered by the Institute column
 * @method Fbusers findOneByPosition(string $Position) Return the first Fbusers filtered by the Position column
 * @method Fbusers findOneByUseraddress(string $UserAddress) Return the first Fbusers filtered by the UserAddress column
 * @method Fbusers findOneByUseraddress2(string $UserAddress2) Return the first Fbusers filtered by the UserAddress2 column
 * @method Fbusers findOneByUsertype(string $UserType) Return the first Fbusers filtered by the UserType column
 * @method Fbusers findOneByUsertypeorder(double $UserTypeOrder) Return the first Fbusers filtered by the UserTypeOrder column
 * @method Fbusers findOneByLibrary(int $Library) Return the first Fbusers filtered by the Library column
 * @method Fbusers findOneByMuseum(int $Museum) Return the first Fbusers filtered by the Museum column
 * @method Fbusers findOneByCity(string $City) Return the first Fbusers filtered by the City column
 * @method Fbusers findOneByMailcountry(string $MailCountry) Return the first Fbusers filtered by the MailCountry column
 * @method Fbusers findOneByCCode(string $C_Code) Return the first Fbusers filtered by the C_Code column
 * @method Fbusers findOneByStateprovince(string $StateProvince) Return the first Fbusers filtered by the StateProvince column
 * @method Fbusers findOneByPostalcode(string $PostalCode) Return the first Fbusers filtered by the PostalCode column
 * @method Fbusers findOneByV10(int $V1_0) Return the first Fbusers filtered by the V1_0 column
 * @method Fbusers findOneByPayment10(string $Payment1_0) Return the first Fbusers filtered by the Payment1_0 column
 * @method Fbusers findOneByDateshipped10(string $DateShipped1_0) Return the first Fbusers filtered by the DateShipped1_0 column
 * @method Fbusers findOneByV20(int $V2_0) Return the first Fbusers filtered by the V2_0 column
 * @method Fbusers findOneByPayment20(string $Payment2_0) Return the first Fbusers filtered by the Payment2_0 column
 * @method Fbusers findOneByDateshipped20(string $DateShipped2_0) Return the first Fbusers filtered by the DateShipped2_0 column
 * @method Fbusers findOneByV30(int $V3_0) Return the first Fbusers filtered by the V3_0 column
 * @method Fbusers findOneByPayment30(string $Payment3_0) Return the first Fbusers filtered by the Payment3_0 column
 * @method Fbusers findOneByDateshipped30(string $DateShipped3_0) Return the first Fbusers filtered by the DateShipped3_0 column
 * @method Fbusers findOneByV40(int $V4_0) Return the first Fbusers filtered by the V4_0 column
 * @method Fbusers findOneByPayment40(string $Payment4_0) Return the first Fbusers filtered by the Payment4_0 column
 * @method Fbusers findOneByDateshipped40(string $DateShipped4_0) Return the first Fbusers filtered by the DateShipped4_0 column
 * @method Fbusers findOneByV50(int $V5_0) Return the first Fbusers filtered by the V5_0 column
 * @method Fbusers findOneByPayment50(string $Payment5_0) Return the first Fbusers filtered by the Payment5_0 column
 * @method Fbusers findOneByDateshipped50(string $DateShipped5_0) Return the first Fbusers filtered by the DateShipped5_0 column
 * @method Fbusers findOneByV60(int $V6_0) Return the first Fbusers filtered by the V6_0 column
 * @method Fbusers findOneByPayment60(string $Payment6_0) Return the first Fbusers filtered by the Payment6_0 column
 * @method Fbusers findOneByDateshipped60(string $DateShipped6_0) Return the first Fbusers filtered by the DateShipped6_0 column
 * @method Fbusers findOneByV70(int $V7_0) Return the first Fbusers filtered by the V7_0 column
 * @method Fbusers findOneByPayment70(string $Payment7_0) Return the first Fbusers filtered by the Payment7_0 column
 * @method Fbusers findOneByDateshipped70(string $DateShipped7_0) Return the first Fbusers filtered by the DateShipped7_0 column
 * @method Fbusers findOneByV71(int $V7_1) Return the first Fbusers filtered by the V7_1 column
 * @method Fbusers findOneByPayment71(string $Payment7_1) Return the first Fbusers filtered by the Payment7_1 column
 * @method Fbusers findOneByDateshipped71(string $DateShipped7_1) Return the first Fbusers filtered by the DateShipped7_1 column
 * @method Fbusers findOneByEMail(string $E_Mail) Return the first Fbusers filtered by the E_Mail column
 * @method Fbusers findOneByWebpage(string $WebPage) Return the first Fbusers filtered by the WebPage column
 * @method Fbusers findOneByTelephone(string $Telephone) Return the first Fbusers filtered by the Telephone column
 * @method Fbusers findOneByFax(string $FAX) Return the first Fbusers filtered by the FAX column
 * @method Fbusers findOneByContactby(string $ContactBy) Return the first Fbusers filtered by the ContactBy column
 * @method Fbusers findOneByComment(string $Comment) Return the first Fbusers filtered by the Comment column
 * @method Fbusers findOneByCopiesnum(int $CopiesNum) Return the first Fbusers filtered by the CopiesNum column
 * @method Fbusers findOneByCopies2k(int $Copies2k) Return the first Fbusers filtered by the Copies2k column
 * @method Fbusers findOneBySubscriber(int $Subscriber) Return the first Fbusers filtered by the Subscriber column
 * @method Fbusers findOneByCollaborator(int $Collaborator) Return the first Fbusers filtered by the Collaborator column
 * @method Fbusers findOneByYear(int $Year) Return the first Fbusers filtered by the Year column
 * @method Fbusers findOneByEntered(int $Entered) Return the first Fbusers filtered by the Entered column
 * @method Fbusers findOneByDateentered(string $DateEntered) Return the first Fbusers filtered by the DateEntered column
 * @method Fbusers findOneByModified(int $Modified) Return the first Fbusers filtered by the Modified column
 * @method Fbusers findOneByDatemodified(string $DateModified) Return the first Fbusers filtered by the DateModified column
 * @method Fbusers findOneByTs(string $TS) Return the first Fbusers filtered by the TS column
 *
 * @method array findByUsername(string $UserName) Return Fbusers objects filtered by the UserName column
 * @method array findByFirstname(string $FirstName) Return Fbusers objects filtered by the FirstName column
 * @method array findBySurname(string $Surname) Return Fbusers objects filtered by the Surname column
 * @method array findByTitle(string $Title) Return Fbusers objects filtered by the Title column
 * @method array findByInstitute(string $Institute) Return Fbusers objects filtered by the Institute column
 * @method array findByPosition(string $Position) Return Fbusers objects filtered by the Position column
 * @method array findByUseraddress(string $UserAddress) Return Fbusers objects filtered by the UserAddress column
 * @method array findByUseraddress2(string $UserAddress2) Return Fbusers objects filtered by the UserAddress2 column
 * @method array findByUsertype(string $UserType) Return Fbusers objects filtered by the UserType column
 * @method array findByUsertypeorder(double $UserTypeOrder) Return Fbusers objects filtered by the UserTypeOrder column
 * @method array findByLibrary(int $Library) Return Fbusers objects filtered by the Library column
 * @method array findByMuseum(int $Museum) Return Fbusers objects filtered by the Museum column
 * @method array findByCity(string $City) Return Fbusers objects filtered by the City column
 * @method array findByMailcountry(string $MailCountry) Return Fbusers objects filtered by the MailCountry column
 * @method array findByCCode(string $C_Code) Return Fbusers objects filtered by the C_Code column
 * @method array findByStateprovince(string $StateProvince) Return Fbusers objects filtered by the StateProvince column
 * @method array findByPostalcode(string $PostalCode) Return Fbusers objects filtered by the PostalCode column
 * @method array findByV10(int $V1_0) Return Fbusers objects filtered by the V1_0 column
 * @method array findByPayment10(string $Payment1_0) Return Fbusers objects filtered by the Payment1_0 column
 * @method array findByDateshipped10(string $DateShipped1_0) Return Fbusers objects filtered by the DateShipped1_0 column
 * @method array findByV20(int $V2_0) Return Fbusers objects filtered by the V2_0 column
 * @method array findByPayment20(string $Payment2_0) Return Fbusers objects filtered by the Payment2_0 column
 * @method array findByDateshipped20(string $DateShipped2_0) Return Fbusers objects filtered by the DateShipped2_0 column
 * @method array findByV30(int $V3_0) Return Fbusers objects filtered by the V3_0 column
 * @method array findByPayment30(string $Payment3_0) Return Fbusers objects filtered by the Payment3_0 column
 * @method array findByDateshipped30(string $DateShipped3_0) Return Fbusers objects filtered by the DateShipped3_0 column
 * @method array findByV40(int $V4_0) Return Fbusers objects filtered by the V4_0 column
 * @method array findByPayment40(string $Payment4_0) Return Fbusers objects filtered by the Payment4_0 column
 * @method array findByDateshipped40(string $DateShipped4_0) Return Fbusers objects filtered by the DateShipped4_0 column
 * @method array findByV50(int $V5_0) Return Fbusers objects filtered by the V5_0 column
 * @method array findByPayment50(string $Payment5_0) Return Fbusers objects filtered by the Payment5_0 column
 * @method array findByDateshipped50(string $DateShipped5_0) Return Fbusers objects filtered by the DateShipped5_0 column
 * @method array findByV60(int $V6_0) Return Fbusers objects filtered by the V6_0 column
 * @method array findByPayment60(string $Payment6_0) Return Fbusers objects filtered by the Payment6_0 column
 * @method array findByDateshipped60(string $DateShipped6_0) Return Fbusers objects filtered by the DateShipped6_0 column
 * @method array findByV70(int $V7_0) Return Fbusers objects filtered by the V7_0 column
 * @method array findByPayment70(string $Payment7_0) Return Fbusers objects filtered by the Payment7_0 column
 * @method array findByDateshipped70(string $DateShipped7_0) Return Fbusers objects filtered by the DateShipped7_0 column
 * @method array findByV71(int $V7_1) Return Fbusers objects filtered by the V7_1 column
 * @method array findByPayment71(string $Payment7_1) Return Fbusers objects filtered by the Payment7_1 column
 * @method array findByDateshipped71(string $DateShipped7_1) Return Fbusers objects filtered by the DateShipped7_1 column
 * @method array findByEMail(string $E_Mail) Return Fbusers objects filtered by the E_Mail column
 * @method array findByWebpage(string $WebPage) Return Fbusers objects filtered by the WebPage column
 * @method array findByTelephone(string $Telephone) Return Fbusers objects filtered by the Telephone column
 * @method array findByFax(string $FAX) Return Fbusers objects filtered by the FAX column
 * @method array findByContactby(string $ContactBy) Return Fbusers objects filtered by the ContactBy column
 * @method array findByComment(string $Comment) Return Fbusers objects filtered by the Comment column
 * @method array findByCopiesnum(int $CopiesNum) Return Fbusers objects filtered by the CopiesNum column
 * @method array findByCopies2k(int $Copies2k) Return Fbusers objects filtered by the Copies2k column
 * @method array findBySubscriber(int $Subscriber) Return Fbusers objects filtered by the Subscriber column
 * @method array findByCollaborator(int $Collaborator) Return Fbusers objects filtered by the Collaborator column
 * @method array findByYear(int $Year) Return Fbusers objects filtered by the Year column
 * @method array findByEntered(int $Entered) Return Fbusers objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Fbusers objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Fbusers objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Fbusers objects filtered by the DateModified column
 * @method array findByTs(string $TS) Return Fbusers objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFbusersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFbusersQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'fbapp';
        }
        if (null === $modelName) {
            $modelName = 'Fbusers';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FbusersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FbusersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FbusersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FbusersQuery) {
            return $criteria;
        }
        $query = new FbusersQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$FirstName, $Surname, $UserAddress, $City, $MailCountry]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Fbusers|Fbusers[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FbusersPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Fbusers A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `UserName`, `FirstName`, `Surname`, `Title`, `Institute`, `Position`, `UserAddress`, `UserAddress2`, `UserType`, `UserTypeOrder`, `Library`, `Museum`, `City`, `MailCountry`, `C_Code`, `StateProvince`, `PostalCode`, `V1_0`, `Payment1_0`, `DateShipped1_0`, `V2_0`, `Payment2_0`, `DateShipped2_0`, `V3_0`, `Payment3_0`, `DateShipped3_0`, `V4_0`, `Payment4_0`, `DateShipped4_0`, `V5_0`, `Payment5_0`, `DateShipped5_0`, `V6_0`, `Payment6_0`, `DateShipped6_0`, `V7_0`, `Payment7_0`, `DateShipped7_0`, `V7_1`, `Payment7_1`, `DateShipped7_1`, `E_Mail`, `WebPage`, `Telephone`, `FAX`, `ContactBy`, `Comment`, `CopiesNum`, `Copies2k`, `Subscriber`, `Collaborator`, `Year`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `TS` FROM `fbusers` WHERE `FirstName` = :p0 AND `Surname` = :p1 AND `UserAddress` = :p2 AND `City` = :p3 AND `MailCountry` = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Fbusers();
            $obj->hydrate($row);
            FbusersPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Fbusers|Fbusers[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Fbusers[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(FbusersPeer::FIRSTNAME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(FbusersPeer::SURNAME, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(FbusersPeer::USERADDRESS, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(FbusersPeer::CITY, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(FbusersPeer::MAILCOUNTRY, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(FbusersPeer::FIRSTNAME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(FbusersPeer::SURNAME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(FbusersPeer::USERADDRESS, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(FbusersPeer::CITY, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(FbusersPeer::MAILCOUNTRY, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the UserName column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE UserName = 'fooValue'
     * $query->filterByUsername('%fooValue%'); // WHERE UserName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByUsername($username = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($username)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $username)) {
                $username = str_replace('*', '%', $username);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::USERNAME, $username, $comparison);
    }

    /**
     * Filter the query on the FirstName column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstname('fooValue');   // WHERE FirstName = 'fooValue'
     * $query->filterByFirstname('%fooValue%'); // WHERE FirstName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByFirstname($firstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstname)) {
                $firstname = str_replace('*', '%', $firstname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::FIRSTNAME, $firstname, $comparison);
    }

    /**
     * Filter the query on the Surname column
     *
     * Example usage:
     * <code>
     * $query->filterBySurname('fooValue');   // WHERE Surname = 'fooValue'
     * $query->filterBySurname('%fooValue%'); // WHERE Surname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $surname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterBySurname($surname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($surname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $surname)) {
                $surname = str_replace('*', '%', $surname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::SURNAME, $surname, $comparison);
    }

    /**
     * Filter the query on the Title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE Title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE Title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the Institute column
     *
     * Example usage:
     * <code>
     * $query->filterByInstitute('fooValue');   // WHERE Institute = 'fooValue'
     * $query->filterByInstitute('%fooValue%'); // WHERE Institute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $institute The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByInstitute($institute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($institute)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $institute)) {
                $institute = str_replace('*', '%', $institute);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::INSTITUTE, $institute, $comparison);
    }

    /**
     * Filter the query on the Position column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition('fooValue');   // WHERE Position = 'fooValue'
     * $query->filterByPosition('%fooValue%'); // WHERE Position LIKE '%fooValue%'
     * </code>
     *
     * @param     string $position The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPosition($position = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($position)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $position)) {
                $position = str_replace('*', '%', $position);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::POSITION, $position, $comparison);
    }

    /**
     * Filter the query on the UserAddress column
     *
     * Example usage:
     * <code>
     * $query->filterByUseraddress('fooValue');   // WHERE UserAddress = 'fooValue'
     * $query->filterByUseraddress('%fooValue%'); // WHERE UserAddress LIKE '%fooValue%'
     * </code>
     *
     * @param     string $useraddress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByUseraddress($useraddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($useraddress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $useraddress)) {
                $useraddress = str_replace('*', '%', $useraddress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::USERADDRESS, $useraddress, $comparison);
    }

    /**
     * Filter the query on the UserAddress2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUseraddress2('fooValue');   // WHERE UserAddress2 = 'fooValue'
     * $query->filterByUseraddress2('%fooValue%'); // WHERE UserAddress2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $useraddress2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByUseraddress2($useraddress2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($useraddress2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $useraddress2)) {
                $useraddress2 = str_replace('*', '%', $useraddress2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::USERADDRESS2, $useraddress2, $comparison);
    }

    /**
     * Filter the query on the UserType column
     *
     * Example usage:
     * <code>
     * $query->filterByUsertype('fooValue');   // WHERE UserType = 'fooValue'
     * $query->filterByUsertype('%fooValue%'); // WHERE UserType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usertype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByUsertype($usertype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usertype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usertype)) {
                $usertype = str_replace('*', '%', $usertype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::USERTYPE, $usertype, $comparison);
    }

    /**
     * Filter the query on the UserTypeOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByUsertypeorder(1234); // WHERE UserTypeOrder = 1234
     * $query->filterByUsertypeorder(array(12, 34)); // WHERE UserTypeOrder IN (12, 34)
     * $query->filterByUsertypeorder(array('min' => 12)); // WHERE UserTypeOrder >= 12
     * $query->filterByUsertypeorder(array('max' => 12)); // WHERE UserTypeOrder <= 12
     * </code>
     *
     * @param     mixed $usertypeorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByUsertypeorder($usertypeorder = null, $comparison = null)
    {
        if (is_array($usertypeorder)) {
            $useMinMax = false;
            if (isset($usertypeorder['min'])) {
                $this->addUsingAlias(FbusersPeer::USERTYPEORDER, $usertypeorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usertypeorder['max'])) {
                $this->addUsingAlias(FbusersPeer::USERTYPEORDER, $usertypeorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::USERTYPEORDER, $usertypeorder, $comparison);
    }

    /**
     * Filter the query on the Library column
     *
     * Example usage:
     * <code>
     * $query->filterByLibrary(1234); // WHERE Library = 1234
     * $query->filterByLibrary(array(12, 34)); // WHERE Library IN (12, 34)
     * $query->filterByLibrary(array('min' => 12)); // WHERE Library >= 12
     * $query->filterByLibrary(array('max' => 12)); // WHERE Library <= 12
     * </code>
     *
     * @param     mixed $library The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByLibrary($library = null, $comparison = null)
    {
        if (is_array($library)) {
            $useMinMax = false;
            if (isset($library['min'])) {
                $this->addUsingAlias(FbusersPeer::LIBRARY, $library['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($library['max'])) {
                $this->addUsingAlias(FbusersPeer::LIBRARY, $library['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::LIBRARY, $library, $comparison);
    }

    /**
     * Filter the query on the Museum column
     *
     * Example usage:
     * <code>
     * $query->filterByMuseum(1234); // WHERE Museum = 1234
     * $query->filterByMuseum(array(12, 34)); // WHERE Museum IN (12, 34)
     * $query->filterByMuseum(array('min' => 12)); // WHERE Museum >= 12
     * $query->filterByMuseum(array('max' => 12)); // WHERE Museum <= 12
     * </code>
     *
     * @param     mixed $museum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByMuseum($museum = null, $comparison = null)
    {
        if (is_array($museum)) {
            $useMinMax = false;
            if (isset($museum['min'])) {
                $this->addUsingAlias(FbusersPeer::MUSEUM, $museum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($museum['max'])) {
                $this->addUsingAlias(FbusersPeer::MUSEUM, $museum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::MUSEUM, $museum, $comparison);
    }

    /**
     * Filter the query on the City column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE City = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE City LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the MailCountry column
     *
     * Example usage:
     * <code>
     * $query->filterByMailcountry('fooValue');   // WHERE MailCountry = 'fooValue'
     * $query->filterByMailcountry('%fooValue%'); // WHERE MailCountry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailcountry The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByMailcountry($mailcountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailcountry)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailcountry)) {
                $mailcountry = str_replace('*', '%', $mailcountry);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::MAILCOUNTRY, $mailcountry, $comparison);
    }

    /**
     * Filter the query on the C_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_Code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByCCode($cCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCode)) {
                $cCode = str_replace('*', '%', $cCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the StateProvince column
     *
     * Example usage:
     * <code>
     * $query->filterByStateprovince('fooValue');   // WHERE StateProvince = 'fooValue'
     * $query->filterByStateprovince('%fooValue%'); // WHERE StateProvince LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stateprovince The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByStateprovince($stateprovince = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stateprovince)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stateprovince)) {
                $stateprovince = str_replace('*', '%', $stateprovince);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::STATEPROVINCE, $stateprovince, $comparison);
    }

    /**
     * Filter the query on the PostalCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPostalcode('fooValue');   // WHERE PostalCode = 'fooValue'
     * $query->filterByPostalcode('%fooValue%'); // WHERE PostalCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postalcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPostalcode($postalcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postalcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postalcode)) {
                $postalcode = str_replace('*', '%', $postalcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::POSTALCODE, $postalcode, $comparison);
    }

    /**
     * Filter the query on the V1_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByV10(1234); // WHERE V1_0 = 1234
     * $query->filterByV10(array(12, 34)); // WHERE V1_0 IN (12, 34)
     * $query->filterByV10(array('min' => 12)); // WHERE V1_0 >= 12
     * $query->filterByV10(array('max' => 12)); // WHERE V1_0 <= 12
     * </code>
     *
     * @param     mixed $v10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByV10($v10 = null, $comparison = null)
    {
        if (is_array($v10)) {
            $useMinMax = false;
            if (isset($v10['min'])) {
                $this->addUsingAlias(FbusersPeer::V1_0, $v10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($v10['max'])) {
                $this->addUsingAlias(FbusersPeer::V1_0, $v10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::V1_0, $v10, $comparison);
    }

    /**
     * Filter the query on the Payment1_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByPayment10('fooValue');   // WHERE Payment1_0 = 'fooValue'
     * $query->filterByPayment10('%fooValue%'); // WHERE Payment1_0 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payment10 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPayment10($payment10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payment10)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $payment10)) {
                $payment10 = str_replace('*', '%', $payment10);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::PAYMENT1_0, $payment10, $comparison);
    }

    /**
     * Filter the query on the DateShipped1_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateshipped10('2011-03-14'); // WHERE DateShipped1_0 = '2011-03-14'
     * $query->filterByDateshipped10('now'); // WHERE DateShipped1_0 = '2011-03-14'
     * $query->filterByDateshipped10(array('max' => 'yesterday')); // WHERE DateShipped1_0 < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateshipped10 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByDateshipped10($dateshipped10 = null, $comparison = null)
    {
        if (is_array($dateshipped10)) {
            $useMinMax = false;
            if (isset($dateshipped10['min'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED1_0, $dateshipped10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateshipped10['max'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED1_0, $dateshipped10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::DATESHIPPED1_0, $dateshipped10, $comparison);
    }

    /**
     * Filter the query on the V2_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByV20(1234); // WHERE V2_0 = 1234
     * $query->filterByV20(array(12, 34)); // WHERE V2_0 IN (12, 34)
     * $query->filterByV20(array('min' => 12)); // WHERE V2_0 >= 12
     * $query->filterByV20(array('max' => 12)); // WHERE V2_0 <= 12
     * </code>
     *
     * @param     mixed $v20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByV20($v20 = null, $comparison = null)
    {
        if (is_array($v20)) {
            $useMinMax = false;
            if (isset($v20['min'])) {
                $this->addUsingAlias(FbusersPeer::V2_0, $v20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($v20['max'])) {
                $this->addUsingAlias(FbusersPeer::V2_0, $v20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::V2_0, $v20, $comparison);
    }

    /**
     * Filter the query on the Payment2_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByPayment20('fooValue');   // WHERE Payment2_0 = 'fooValue'
     * $query->filterByPayment20('%fooValue%'); // WHERE Payment2_0 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payment20 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPayment20($payment20 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payment20)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $payment20)) {
                $payment20 = str_replace('*', '%', $payment20);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::PAYMENT2_0, $payment20, $comparison);
    }

    /**
     * Filter the query on the DateShipped2_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateshipped20('2011-03-14'); // WHERE DateShipped2_0 = '2011-03-14'
     * $query->filterByDateshipped20('now'); // WHERE DateShipped2_0 = '2011-03-14'
     * $query->filterByDateshipped20(array('max' => 'yesterday')); // WHERE DateShipped2_0 < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateshipped20 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByDateshipped20($dateshipped20 = null, $comparison = null)
    {
        if (is_array($dateshipped20)) {
            $useMinMax = false;
            if (isset($dateshipped20['min'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED2_0, $dateshipped20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateshipped20['max'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED2_0, $dateshipped20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::DATESHIPPED2_0, $dateshipped20, $comparison);
    }

    /**
     * Filter the query on the V3_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByV30(1234); // WHERE V3_0 = 1234
     * $query->filterByV30(array(12, 34)); // WHERE V3_0 IN (12, 34)
     * $query->filterByV30(array('min' => 12)); // WHERE V3_0 >= 12
     * $query->filterByV30(array('max' => 12)); // WHERE V3_0 <= 12
     * </code>
     *
     * @param     mixed $v30 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByV30($v30 = null, $comparison = null)
    {
        if (is_array($v30)) {
            $useMinMax = false;
            if (isset($v30['min'])) {
                $this->addUsingAlias(FbusersPeer::V3_0, $v30['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($v30['max'])) {
                $this->addUsingAlias(FbusersPeer::V3_0, $v30['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::V3_0, $v30, $comparison);
    }

    /**
     * Filter the query on the Payment3_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByPayment30('fooValue');   // WHERE Payment3_0 = 'fooValue'
     * $query->filterByPayment30('%fooValue%'); // WHERE Payment3_0 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payment30 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPayment30($payment30 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payment30)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $payment30)) {
                $payment30 = str_replace('*', '%', $payment30);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::PAYMENT3_0, $payment30, $comparison);
    }

    /**
     * Filter the query on the DateShipped3_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateshipped30('2011-03-14'); // WHERE DateShipped3_0 = '2011-03-14'
     * $query->filterByDateshipped30('now'); // WHERE DateShipped3_0 = '2011-03-14'
     * $query->filterByDateshipped30(array('max' => 'yesterday')); // WHERE DateShipped3_0 < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateshipped30 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByDateshipped30($dateshipped30 = null, $comparison = null)
    {
        if (is_array($dateshipped30)) {
            $useMinMax = false;
            if (isset($dateshipped30['min'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED3_0, $dateshipped30['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateshipped30['max'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED3_0, $dateshipped30['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::DATESHIPPED3_0, $dateshipped30, $comparison);
    }

    /**
     * Filter the query on the V4_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByV40(1234); // WHERE V4_0 = 1234
     * $query->filterByV40(array(12, 34)); // WHERE V4_0 IN (12, 34)
     * $query->filterByV40(array('min' => 12)); // WHERE V4_0 >= 12
     * $query->filterByV40(array('max' => 12)); // WHERE V4_0 <= 12
     * </code>
     *
     * @param     mixed $v40 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByV40($v40 = null, $comparison = null)
    {
        if (is_array($v40)) {
            $useMinMax = false;
            if (isset($v40['min'])) {
                $this->addUsingAlias(FbusersPeer::V4_0, $v40['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($v40['max'])) {
                $this->addUsingAlias(FbusersPeer::V4_0, $v40['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::V4_0, $v40, $comparison);
    }

    /**
     * Filter the query on the Payment4_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByPayment40('fooValue');   // WHERE Payment4_0 = 'fooValue'
     * $query->filterByPayment40('%fooValue%'); // WHERE Payment4_0 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payment40 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPayment40($payment40 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payment40)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $payment40)) {
                $payment40 = str_replace('*', '%', $payment40);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::PAYMENT4_0, $payment40, $comparison);
    }

    /**
     * Filter the query on the DateShipped4_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateshipped40('2011-03-14'); // WHERE DateShipped4_0 = '2011-03-14'
     * $query->filterByDateshipped40('now'); // WHERE DateShipped4_0 = '2011-03-14'
     * $query->filterByDateshipped40(array('max' => 'yesterday')); // WHERE DateShipped4_0 < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateshipped40 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByDateshipped40($dateshipped40 = null, $comparison = null)
    {
        if (is_array($dateshipped40)) {
            $useMinMax = false;
            if (isset($dateshipped40['min'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED4_0, $dateshipped40['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateshipped40['max'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED4_0, $dateshipped40['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::DATESHIPPED4_0, $dateshipped40, $comparison);
    }

    /**
     * Filter the query on the V5_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByV50(1234); // WHERE V5_0 = 1234
     * $query->filterByV50(array(12, 34)); // WHERE V5_0 IN (12, 34)
     * $query->filterByV50(array('min' => 12)); // WHERE V5_0 >= 12
     * $query->filterByV50(array('max' => 12)); // WHERE V5_0 <= 12
     * </code>
     *
     * @param     mixed $v50 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByV50($v50 = null, $comparison = null)
    {
        if (is_array($v50)) {
            $useMinMax = false;
            if (isset($v50['min'])) {
                $this->addUsingAlias(FbusersPeer::V5_0, $v50['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($v50['max'])) {
                $this->addUsingAlias(FbusersPeer::V5_0, $v50['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::V5_0, $v50, $comparison);
    }

    /**
     * Filter the query on the Payment5_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByPayment50('fooValue');   // WHERE Payment5_0 = 'fooValue'
     * $query->filterByPayment50('%fooValue%'); // WHERE Payment5_0 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payment50 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPayment50($payment50 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payment50)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $payment50)) {
                $payment50 = str_replace('*', '%', $payment50);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::PAYMENT5_0, $payment50, $comparison);
    }

    /**
     * Filter the query on the DateShipped5_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateshipped50('2011-03-14'); // WHERE DateShipped5_0 = '2011-03-14'
     * $query->filterByDateshipped50('now'); // WHERE DateShipped5_0 = '2011-03-14'
     * $query->filterByDateshipped50(array('max' => 'yesterday')); // WHERE DateShipped5_0 < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateshipped50 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByDateshipped50($dateshipped50 = null, $comparison = null)
    {
        if (is_array($dateshipped50)) {
            $useMinMax = false;
            if (isset($dateshipped50['min'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED5_0, $dateshipped50['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateshipped50['max'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED5_0, $dateshipped50['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::DATESHIPPED5_0, $dateshipped50, $comparison);
    }

    /**
     * Filter the query on the V6_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByV60(1234); // WHERE V6_0 = 1234
     * $query->filterByV60(array(12, 34)); // WHERE V6_0 IN (12, 34)
     * $query->filterByV60(array('min' => 12)); // WHERE V6_0 >= 12
     * $query->filterByV60(array('max' => 12)); // WHERE V6_0 <= 12
     * </code>
     *
     * @param     mixed $v60 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByV60($v60 = null, $comparison = null)
    {
        if (is_array($v60)) {
            $useMinMax = false;
            if (isset($v60['min'])) {
                $this->addUsingAlias(FbusersPeer::V6_0, $v60['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($v60['max'])) {
                $this->addUsingAlias(FbusersPeer::V6_0, $v60['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::V6_0, $v60, $comparison);
    }

    /**
     * Filter the query on the Payment6_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByPayment60('fooValue');   // WHERE Payment6_0 = 'fooValue'
     * $query->filterByPayment60('%fooValue%'); // WHERE Payment6_0 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payment60 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPayment60($payment60 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payment60)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $payment60)) {
                $payment60 = str_replace('*', '%', $payment60);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::PAYMENT6_0, $payment60, $comparison);
    }

    /**
     * Filter the query on the DateShipped6_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateshipped60('2011-03-14'); // WHERE DateShipped6_0 = '2011-03-14'
     * $query->filterByDateshipped60('now'); // WHERE DateShipped6_0 = '2011-03-14'
     * $query->filterByDateshipped60(array('max' => 'yesterday')); // WHERE DateShipped6_0 < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateshipped60 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByDateshipped60($dateshipped60 = null, $comparison = null)
    {
        if (is_array($dateshipped60)) {
            $useMinMax = false;
            if (isset($dateshipped60['min'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED6_0, $dateshipped60['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateshipped60['max'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED6_0, $dateshipped60['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::DATESHIPPED6_0, $dateshipped60, $comparison);
    }

    /**
     * Filter the query on the V7_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByV70(1234); // WHERE V7_0 = 1234
     * $query->filterByV70(array(12, 34)); // WHERE V7_0 IN (12, 34)
     * $query->filterByV70(array('min' => 12)); // WHERE V7_0 >= 12
     * $query->filterByV70(array('max' => 12)); // WHERE V7_0 <= 12
     * </code>
     *
     * @param     mixed $v70 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByV70($v70 = null, $comparison = null)
    {
        if (is_array($v70)) {
            $useMinMax = false;
            if (isset($v70['min'])) {
                $this->addUsingAlias(FbusersPeer::V7_0, $v70['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($v70['max'])) {
                $this->addUsingAlias(FbusersPeer::V7_0, $v70['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::V7_0, $v70, $comparison);
    }

    /**
     * Filter the query on the Payment7_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByPayment70('fooValue');   // WHERE Payment7_0 = 'fooValue'
     * $query->filterByPayment70('%fooValue%'); // WHERE Payment7_0 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payment70 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPayment70($payment70 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payment70)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $payment70)) {
                $payment70 = str_replace('*', '%', $payment70);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::PAYMENT7_0, $payment70, $comparison);
    }

    /**
     * Filter the query on the DateShipped7_0 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateshipped70('2011-03-14'); // WHERE DateShipped7_0 = '2011-03-14'
     * $query->filterByDateshipped70('now'); // WHERE DateShipped7_0 = '2011-03-14'
     * $query->filterByDateshipped70(array('max' => 'yesterday')); // WHERE DateShipped7_0 < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateshipped70 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByDateshipped70($dateshipped70 = null, $comparison = null)
    {
        if (is_array($dateshipped70)) {
            $useMinMax = false;
            if (isset($dateshipped70['min'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED7_0, $dateshipped70['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateshipped70['max'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED7_0, $dateshipped70['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::DATESHIPPED7_0, $dateshipped70, $comparison);
    }

    /**
     * Filter the query on the V7_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByV71(1234); // WHERE V7_1 = 1234
     * $query->filterByV71(array(12, 34)); // WHERE V7_1 IN (12, 34)
     * $query->filterByV71(array('min' => 12)); // WHERE V7_1 >= 12
     * $query->filterByV71(array('max' => 12)); // WHERE V7_1 <= 12
     * </code>
     *
     * @param     mixed $v71 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByV71($v71 = null, $comparison = null)
    {
        if (is_array($v71)) {
            $useMinMax = false;
            if (isset($v71['min'])) {
                $this->addUsingAlias(FbusersPeer::V7_1, $v71['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($v71['max'])) {
                $this->addUsingAlias(FbusersPeer::V7_1, $v71['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::V7_1, $v71, $comparison);
    }

    /**
     * Filter the query on the Payment7_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPayment71('fooValue');   // WHERE Payment7_1 = 'fooValue'
     * $query->filterByPayment71('%fooValue%'); // WHERE Payment7_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payment71 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByPayment71($payment71 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payment71)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $payment71)) {
                $payment71 = str_replace('*', '%', $payment71);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::PAYMENT7_1, $payment71, $comparison);
    }

    /**
     * Filter the query on the DateShipped7_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateshipped71('2011-03-14'); // WHERE DateShipped7_1 = '2011-03-14'
     * $query->filterByDateshipped71('now'); // WHERE DateShipped7_1 = '2011-03-14'
     * $query->filterByDateshipped71(array('max' => 'yesterday')); // WHERE DateShipped7_1 < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateshipped71 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByDateshipped71($dateshipped71 = null, $comparison = null)
    {
        if (is_array($dateshipped71)) {
            $useMinMax = false;
            if (isset($dateshipped71['min'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED7_1, $dateshipped71['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateshipped71['max'])) {
                $this->addUsingAlias(FbusersPeer::DATESHIPPED7_1, $dateshipped71['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::DATESHIPPED7_1, $dateshipped71, $comparison);
    }

    /**
     * Filter the query on the E_Mail column
     *
     * Example usage:
     * <code>
     * $query->filterByEMail('fooValue');   // WHERE E_Mail = 'fooValue'
     * $query->filterByEMail('%fooValue%'); // WHERE E_Mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eMail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByEMail($eMail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eMail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eMail)) {
                $eMail = str_replace('*', '%', $eMail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::E_MAIL, $eMail, $comparison);
    }

    /**
     * Filter the query on the WebPage column
     *
     * Example usage:
     * <code>
     * $query->filterByWebpage('fooValue');   // WHERE WebPage = 'fooValue'
     * $query->filterByWebpage('%fooValue%'); // WHERE WebPage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $webpage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByWebpage($webpage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($webpage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $webpage)) {
                $webpage = str_replace('*', '%', $webpage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::WEBPAGE, $webpage, $comparison);
    }

    /**
     * Filter the query on the Telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE Telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE Telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the FAX column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE FAX = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE FAX LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the ContactBy column
     *
     * Example usage:
     * <code>
     * $query->filterByContactby('fooValue');   // WHERE ContactBy = 'fooValue'
     * $query->filterByContactby('%fooValue%'); // WHERE ContactBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactby The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByContactby($contactby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactby)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contactby)) {
                $contactby = str_replace('*', '%', $contactby);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::CONTACTBY, $contactby, $comparison);
    }

    /**
     * Filter the query on the Comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE Comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE Comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FbusersPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the CopiesNum column
     *
     * Example usage:
     * <code>
     * $query->filterByCopiesnum(1234); // WHERE CopiesNum = 1234
     * $query->filterByCopiesnum(array(12, 34)); // WHERE CopiesNum IN (12, 34)
     * $query->filterByCopiesnum(array('min' => 12)); // WHERE CopiesNum >= 12
     * $query->filterByCopiesnum(array('max' => 12)); // WHERE CopiesNum <= 12
     * </code>
     *
     * @param     mixed $copiesnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByCopiesnum($copiesnum = null, $comparison = null)
    {
        if (is_array($copiesnum)) {
            $useMinMax = false;
            if (isset($copiesnum['min'])) {
                $this->addUsingAlias(FbusersPeer::COPIESNUM, $copiesnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($copiesnum['max'])) {
                $this->addUsingAlias(FbusersPeer::COPIESNUM, $copiesnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::COPIESNUM, $copiesnum, $comparison);
    }

    /**
     * Filter the query on the Copies2k column
     *
     * Example usage:
     * <code>
     * $query->filterByCopies2k(1234); // WHERE Copies2k = 1234
     * $query->filterByCopies2k(array(12, 34)); // WHERE Copies2k IN (12, 34)
     * $query->filterByCopies2k(array('min' => 12)); // WHERE Copies2k >= 12
     * $query->filterByCopies2k(array('max' => 12)); // WHERE Copies2k <= 12
     * </code>
     *
     * @param     mixed $copies2k The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByCopies2k($copies2k = null, $comparison = null)
    {
        if (is_array($copies2k)) {
            $useMinMax = false;
            if (isset($copies2k['min'])) {
                $this->addUsingAlias(FbusersPeer::COPIES2K, $copies2k['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($copies2k['max'])) {
                $this->addUsingAlias(FbusersPeer::COPIES2K, $copies2k['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::COPIES2K, $copies2k, $comparison);
    }

    /**
     * Filter the query on the Subscriber column
     *
     * Example usage:
     * <code>
     * $query->filterBySubscriber(1234); // WHERE Subscriber = 1234
     * $query->filterBySubscriber(array(12, 34)); // WHERE Subscriber IN (12, 34)
     * $query->filterBySubscriber(array('min' => 12)); // WHERE Subscriber >= 12
     * $query->filterBySubscriber(array('max' => 12)); // WHERE Subscriber <= 12
     * </code>
     *
     * @param     mixed $subscriber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterBySubscriber($subscriber = null, $comparison = null)
    {
        if (is_array($subscriber)) {
            $useMinMax = false;
            if (isset($subscriber['min'])) {
                $this->addUsingAlias(FbusersPeer::SUBSCRIBER, $subscriber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subscriber['max'])) {
                $this->addUsingAlias(FbusersPeer::SUBSCRIBER, $subscriber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::SUBSCRIBER, $subscriber, $comparison);
    }

    /**
     * Filter the query on the Collaborator column
     *
     * Example usage:
     * <code>
     * $query->filterByCollaborator(1234); // WHERE Collaborator = 1234
     * $query->filterByCollaborator(array(12, 34)); // WHERE Collaborator IN (12, 34)
     * $query->filterByCollaborator(array('min' => 12)); // WHERE Collaborator >= 12
     * $query->filterByCollaborator(array('max' => 12)); // WHERE Collaborator <= 12
     * </code>
     *
     * @param     mixed $collaborator The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByCollaborator($collaborator = null, $comparison = null)
    {
        if (is_array($collaborator)) {
            $useMinMax = false;
            if (isset($collaborator['min'])) {
                $this->addUsingAlias(FbusersPeer::COLLABORATOR, $collaborator['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collaborator['max'])) {
                $this->addUsingAlias(FbusersPeer::COLLABORATOR, $collaborator['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::COLLABORATOR, $collaborator, $comparison);
    }

    /**
     * Filter the query on the Year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE Year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE Year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE Year >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE Year <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(FbusersPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(FbusersPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the Entered column
     *
     * Example usage:
     * <code>
     * $query->filterByEntered(1234); // WHERE Entered = 1234
     * $query->filterByEntered(array(12, 34)); // WHERE Entered IN (12, 34)
     * $query->filterByEntered(array('min' => 12)); // WHERE Entered >= 12
     * $query->filterByEntered(array('max' => 12)); // WHERE Entered <= 12
     * </code>
     *
     * @param     mixed $entered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(FbusersPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(FbusersPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE DateEntered < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateentered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(FbusersPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(FbusersPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the Modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE Modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE Modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE Modified >= 12
     * $query->filterByModified(array('max' => 12)); // WHERE Modified <= 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(FbusersPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(FbusersPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE DateModified < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(FbusersPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(FbusersPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the TS column
     *
     * Example usage:
     * <code>
     * $query->filterByTs('2011-03-14'); // WHERE TS = '2011-03-14'
     * $query->filterByTs('now'); // WHERE TS = '2011-03-14'
     * $query->filterByTs(array('max' => 'yesterday')); // WHERE TS < '2011-03-13'
     * </code>
     *
     * @param     mixed $ts The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FbusersPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FbusersPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FbusersPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Fbusers $fbusers Object to remove from the list of results
     *
     * @return FbusersQuery The current query, for fluid interface
     */
    public function prune($fbusers = null)
    {
        if ($fbusers) {
            $this->addCond('pruneCond0', $this->getAliasedColName(FbusersPeer::FIRSTNAME), $fbusers->getFirstname(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(FbusersPeer::SURNAME), $fbusers->getSurname(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(FbusersPeer::USERADDRESS), $fbusers->getUseraddress(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(FbusersPeer::CITY), $fbusers->getCity(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(FbusersPeer::MAILCOUNTRY), $fbusers->getMailcountry(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
