<?php


/**
 * Base class that represents a query for the 'morphmettlratios' table.
 *
 *
 *
 * @method MorphmettlratiosQuery orderByPicname($order = Criteria::ASC) Order by the PicName column
 * @method MorphmettlratiosQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method MorphmettlratiosQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method MorphmettlratiosQuery orderByFamily($order = Criteria::ASC) Order by the Family column
 * @method MorphmettlratiosQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method MorphmettlratiosQuery orderByClassnum($order = Criteria::ASC) Order by the ClassNum column
 * @method MorphmettlratiosQuery orderByClass($order = Criteria::ASC) Order by the Class column
 * @method MorphmettlratiosQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method MorphmettlratiosQuery orderByPerc($order = Criteria::ASC) Order by the Perc column
 * @method MorphmettlratiosQuery orderByMaxlengthtl($order = Criteria::ASC) Order by the MaxLengthTL column
 * @method MorphmettlratiosQuery orderBySltl($order = Criteria::ASC) Order by the SLTL column
 * @method MorphmettlratiosQuery orderBySltlLower($order = Criteria::ASC) Order by the SLTL_LOWER column
 * @method MorphmettlratiosQuery orderBySltlUpper($order = Criteria::ASC) Order by the SLTL_UPPER column
 * @method MorphmettlratiosQuery orderByFltl($order = Criteria::ASC) Order by the FLTL column
 * @method MorphmettlratiosQuery orderByFltlLower($order = Criteria::ASC) Order by the FLTL_LOWER column
 * @method MorphmettlratiosQuery orderByFltlUpper($order = Criteria::ASC) Order by the FLTL_UPPER column
 * @method MorphmettlratiosQuery orderByHltl($order = Criteria::ASC) Order by the HLTL column
 * @method MorphmettlratiosQuery orderByHltlLower($order = Criteria::ASC) Order by the HLTL_LOWER column
 * @method MorphmettlratiosQuery orderByHltlUpper($order = Criteria::ASC) Order by the HLTL_UPPER column
 * @method MorphmettlratiosQuery orderByPaltl($order = Criteria::ASC) Order by the PALTL column
 * @method MorphmettlratiosQuery orderByPaltlLower($order = Criteria::ASC) Order by the PALTL_LOWER column
 * @method MorphmettlratiosQuery orderByPaltlUpper($order = Criteria::ASC) Order by the PALTL_UPPER column
 * @method MorphmettlratiosQuery orderByPdltl($order = Criteria::ASC) Order by the PDLTL column
 * @method MorphmettlratiosQuery orderByPdltlLower($order = Criteria::ASC) Order by the PDLTL_LOWER column
 * @method MorphmettlratiosQuery orderByPdltlUpper($order = Criteria::ASC) Order by the PDLTL_UPPER column
 * @method MorphmettlratiosQuery orderByPpltl($order = Criteria::ASC) Order by the PPLTL column
 * @method MorphmettlratiosQuery orderByPpltlLower($order = Criteria::ASC) Order by the PPLTL_LOWER column
 * @method MorphmettlratiosQuery orderByPpltlUpper($order = Criteria::ASC) Order by the PPLTL_UPPER column
 * @method MorphmettlratiosQuery orderByPpeltl($order = Criteria::ASC) Order by the PPELTL column
 * @method MorphmettlratiosQuery orderByPpeltlLower($order = Criteria::ASC) Order by the PPELTL_LOWER column
 * @method MorphmettlratiosQuery orderByPpeltlUpper($order = Criteria::ASC) Order by the PPELTL_UPPER column
 * @method MorphmettlratiosQuery orderByEdtl($order = Criteria::ASC) Order by the EDTL column
 * @method MorphmettlratiosQuery orderByEdtlLower($order = Criteria::ASC) Order by the EDTL_LOWER column
 * @method MorphmettlratiosQuery orderByEdtlUpper($order = Criteria::ASC) Order by the EDTL_UPPER column
 * @method MorphmettlratiosQuery orderByPoltl($order = Criteria::ASC) Order by the POLTL column
 * @method MorphmettlratiosQuery orderByPoltlLower($order = Criteria::ASC) Order by the POLTL_LOWER column
 * @method MorphmettlratiosQuery orderByPoltlUpper($order = Criteria::ASC) Order by the POLTL_UPPER column
 * @method MorphmettlratiosQuery orderByBdtl($order = Criteria::ASC) Order by the BDTL column
 * @method MorphmettlratiosQuery orderByBdtlLower($order = Criteria::ASC) Order by the BDTL_LOWER column
 * @method MorphmettlratiosQuery orderByBdtlUpper($order = Criteria::ASC) Order by the BDTL_UPPER column
 * @method MorphmettlratiosQuery orderByChtl($order = Criteria::ASC) Order by the CHTL column
 * @method MorphmettlratiosQuery orderByChtlLower($order = Criteria::ASC) Order by the CHTL_LOWER column
 * @method MorphmettlratiosQuery orderByChtlUpper($order = Criteria::ASC) Order by the CHTL_UPPER column
 * @method MorphmettlratiosQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method MorphmettlratiosQuery groupByPicname() Group by the PicName column
 * @method MorphmettlratiosQuery groupBySpeccode() Group by the Speccode column
 * @method MorphmettlratiosQuery groupByFamcode() Group by the FamCode column
 * @method MorphmettlratiosQuery groupByFamily() Group by the Family column
 * @method MorphmettlratiosQuery groupByCommonname() Group by the CommonName column
 * @method MorphmettlratiosQuery groupByClassnum() Group by the ClassNum column
 * @method MorphmettlratiosQuery groupByClass() Group by the Class column
 * @method MorphmettlratiosQuery groupByRemarks() Group by the Remarks column
 * @method MorphmettlratiosQuery groupByPerc() Group by the Perc column
 * @method MorphmettlratiosQuery groupByMaxlengthtl() Group by the MaxLengthTL column
 * @method MorphmettlratiosQuery groupBySltl() Group by the SLTL column
 * @method MorphmettlratiosQuery groupBySltlLower() Group by the SLTL_LOWER column
 * @method MorphmettlratiosQuery groupBySltlUpper() Group by the SLTL_UPPER column
 * @method MorphmettlratiosQuery groupByFltl() Group by the FLTL column
 * @method MorphmettlratiosQuery groupByFltlLower() Group by the FLTL_LOWER column
 * @method MorphmettlratiosQuery groupByFltlUpper() Group by the FLTL_UPPER column
 * @method MorphmettlratiosQuery groupByHltl() Group by the HLTL column
 * @method MorphmettlratiosQuery groupByHltlLower() Group by the HLTL_LOWER column
 * @method MorphmettlratiosQuery groupByHltlUpper() Group by the HLTL_UPPER column
 * @method MorphmettlratiosQuery groupByPaltl() Group by the PALTL column
 * @method MorphmettlratiosQuery groupByPaltlLower() Group by the PALTL_LOWER column
 * @method MorphmettlratiosQuery groupByPaltlUpper() Group by the PALTL_UPPER column
 * @method MorphmettlratiosQuery groupByPdltl() Group by the PDLTL column
 * @method MorphmettlratiosQuery groupByPdltlLower() Group by the PDLTL_LOWER column
 * @method MorphmettlratiosQuery groupByPdltlUpper() Group by the PDLTL_UPPER column
 * @method MorphmettlratiosQuery groupByPpltl() Group by the PPLTL column
 * @method MorphmettlratiosQuery groupByPpltlLower() Group by the PPLTL_LOWER column
 * @method MorphmettlratiosQuery groupByPpltlUpper() Group by the PPLTL_UPPER column
 * @method MorphmettlratiosQuery groupByPpeltl() Group by the PPELTL column
 * @method MorphmettlratiosQuery groupByPpeltlLower() Group by the PPELTL_LOWER column
 * @method MorphmettlratiosQuery groupByPpeltlUpper() Group by the PPELTL_UPPER column
 * @method MorphmettlratiosQuery groupByEdtl() Group by the EDTL column
 * @method MorphmettlratiosQuery groupByEdtlLower() Group by the EDTL_LOWER column
 * @method MorphmettlratiosQuery groupByEdtlUpper() Group by the EDTL_UPPER column
 * @method MorphmettlratiosQuery groupByPoltl() Group by the POLTL column
 * @method MorphmettlratiosQuery groupByPoltlLower() Group by the POLTL_LOWER column
 * @method MorphmettlratiosQuery groupByPoltlUpper() Group by the POLTL_UPPER column
 * @method MorphmettlratiosQuery groupByBdtl() Group by the BDTL column
 * @method MorphmettlratiosQuery groupByBdtlLower() Group by the BDTL_LOWER column
 * @method MorphmettlratiosQuery groupByBdtlUpper() Group by the BDTL_UPPER column
 * @method MorphmettlratiosQuery groupByChtl() Group by the CHTL column
 * @method MorphmettlratiosQuery groupByChtlLower() Group by the CHTL_LOWER column
 * @method MorphmettlratiosQuery groupByChtlUpper() Group by the CHTL_UPPER column
 * @method MorphmettlratiosQuery groupByPkid() Group by the PKID column
 *
 * @method MorphmettlratiosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MorphmettlratiosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MorphmettlratiosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Morphmettlratios findOne(PropelPDO $con = null) Return the first Morphmettlratios matching the query
 * @method Morphmettlratios findOneOrCreate(PropelPDO $con = null) Return the first Morphmettlratios matching the query, or a new Morphmettlratios object populated from the query conditions when no match is found
 *
 * @method Morphmettlratios findOneByPicname(string $PicName) Return the first Morphmettlratios filtered by the PicName column
 * @method Morphmettlratios findOneBySpeccode(int $Speccode) Return the first Morphmettlratios filtered by the Speccode column
 * @method Morphmettlratios findOneByFamcode(int $FamCode) Return the first Morphmettlratios filtered by the FamCode column
 * @method Morphmettlratios findOneByFamily(string $Family) Return the first Morphmettlratios filtered by the Family column
 * @method Morphmettlratios findOneByCommonname(string $CommonName) Return the first Morphmettlratios filtered by the CommonName column
 * @method Morphmettlratios findOneByClassnum(int $ClassNum) Return the first Morphmettlratios filtered by the ClassNum column
 * @method Morphmettlratios findOneByClass(string $Class) Return the first Morphmettlratios filtered by the Class column
 * @method Morphmettlratios findOneByRemarks(string $Remarks) Return the first Morphmettlratios filtered by the Remarks column
 * @method Morphmettlratios findOneByPerc(double $Perc) Return the first Morphmettlratios filtered by the Perc column
 * @method Morphmettlratios findOneByMaxlengthtl(double $MaxLengthTL) Return the first Morphmettlratios filtered by the MaxLengthTL column
 * @method Morphmettlratios findOneBySltl(double $SLTL) Return the first Morphmettlratios filtered by the SLTL column
 * @method Morphmettlratios findOneBySltlLower(double $SLTL_LOWER) Return the first Morphmettlratios filtered by the SLTL_LOWER column
 * @method Morphmettlratios findOneBySltlUpper(double $SLTL_UPPER) Return the first Morphmettlratios filtered by the SLTL_UPPER column
 * @method Morphmettlratios findOneByFltl(double $FLTL) Return the first Morphmettlratios filtered by the FLTL column
 * @method Morphmettlratios findOneByFltlLower(double $FLTL_LOWER) Return the first Morphmettlratios filtered by the FLTL_LOWER column
 * @method Morphmettlratios findOneByFltlUpper(double $FLTL_UPPER) Return the first Morphmettlratios filtered by the FLTL_UPPER column
 * @method Morphmettlratios findOneByHltl(double $HLTL) Return the first Morphmettlratios filtered by the HLTL column
 * @method Morphmettlratios findOneByHltlLower(double $HLTL_LOWER) Return the first Morphmettlratios filtered by the HLTL_LOWER column
 * @method Morphmettlratios findOneByHltlUpper(double $HLTL_UPPER) Return the first Morphmettlratios filtered by the HLTL_UPPER column
 * @method Morphmettlratios findOneByPaltl(double $PALTL) Return the first Morphmettlratios filtered by the PALTL column
 * @method Morphmettlratios findOneByPaltlLower(double $PALTL_LOWER) Return the first Morphmettlratios filtered by the PALTL_LOWER column
 * @method Morphmettlratios findOneByPaltlUpper(double $PALTL_UPPER) Return the first Morphmettlratios filtered by the PALTL_UPPER column
 * @method Morphmettlratios findOneByPdltl(double $PDLTL) Return the first Morphmettlratios filtered by the PDLTL column
 * @method Morphmettlratios findOneByPdltlLower(double $PDLTL_LOWER) Return the first Morphmettlratios filtered by the PDLTL_LOWER column
 * @method Morphmettlratios findOneByPdltlUpper(double $PDLTL_UPPER) Return the first Morphmettlratios filtered by the PDLTL_UPPER column
 * @method Morphmettlratios findOneByPpltl(double $PPLTL) Return the first Morphmettlratios filtered by the PPLTL column
 * @method Morphmettlratios findOneByPpltlLower(double $PPLTL_LOWER) Return the first Morphmettlratios filtered by the PPLTL_LOWER column
 * @method Morphmettlratios findOneByPpltlUpper(double $PPLTL_UPPER) Return the first Morphmettlratios filtered by the PPLTL_UPPER column
 * @method Morphmettlratios findOneByPpeltl(double $PPELTL) Return the first Morphmettlratios filtered by the PPELTL column
 * @method Morphmettlratios findOneByPpeltlLower(double $PPELTL_LOWER) Return the first Morphmettlratios filtered by the PPELTL_LOWER column
 * @method Morphmettlratios findOneByPpeltlUpper(double $PPELTL_UPPER) Return the first Morphmettlratios filtered by the PPELTL_UPPER column
 * @method Morphmettlratios findOneByEdtl(double $EDTL) Return the first Morphmettlratios filtered by the EDTL column
 * @method Morphmettlratios findOneByEdtlLower(double $EDTL_LOWER) Return the first Morphmettlratios filtered by the EDTL_LOWER column
 * @method Morphmettlratios findOneByEdtlUpper(double $EDTL_UPPER) Return the first Morphmettlratios filtered by the EDTL_UPPER column
 * @method Morphmettlratios findOneByPoltl(double $POLTL) Return the first Morphmettlratios filtered by the POLTL column
 * @method Morphmettlratios findOneByPoltlLower(double $POLTL_LOWER) Return the first Morphmettlratios filtered by the POLTL_LOWER column
 * @method Morphmettlratios findOneByPoltlUpper(double $POLTL_UPPER) Return the first Morphmettlratios filtered by the POLTL_UPPER column
 * @method Morphmettlratios findOneByBdtl(double $BDTL) Return the first Morphmettlratios filtered by the BDTL column
 * @method Morphmettlratios findOneByBdtlLower(double $BDTL_LOWER) Return the first Morphmettlratios filtered by the BDTL_LOWER column
 * @method Morphmettlratios findOneByBdtlUpper(double $BDTL_UPPER) Return the first Morphmettlratios filtered by the BDTL_UPPER column
 * @method Morphmettlratios findOneByChtl(double $CHTL) Return the first Morphmettlratios filtered by the CHTL column
 * @method Morphmettlratios findOneByChtlLower(double $CHTL_LOWER) Return the first Morphmettlratios filtered by the CHTL_LOWER column
 * @method Morphmettlratios findOneByChtlUpper(double $CHTL_UPPER) Return the first Morphmettlratios filtered by the CHTL_UPPER column
 *
 * @method array findByPicname(string $PicName) Return Morphmettlratios objects filtered by the PicName column
 * @method array findBySpeccode(int $Speccode) Return Morphmettlratios objects filtered by the Speccode column
 * @method array findByFamcode(int $FamCode) Return Morphmettlratios objects filtered by the FamCode column
 * @method array findByFamily(string $Family) Return Morphmettlratios objects filtered by the Family column
 * @method array findByCommonname(string $CommonName) Return Morphmettlratios objects filtered by the CommonName column
 * @method array findByClassnum(int $ClassNum) Return Morphmettlratios objects filtered by the ClassNum column
 * @method array findByClass(string $Class) Return Morphmettlratios objects filtered by the Class column
 * @method array findByRemarks(string $Remarks) Return Morphmettlratios objects filtered by the Remarks column
 * @method array findByPerc(double $Perc) Return Morphmettlratios objects filtered by the Perc column
 * @method array findByMaxlengthtl(double $MaxLengthTL) Return Morphmettlratios objects filtered by the MaxLengthTL column
 * @method array findBySltl(double $SLTL) Return Morphmettlratios objects filtered by the SLTL column
 * @method array findBySltlLower(double $SLTL_LOWER) Return Morphmettlratios objects filtered by the SLTL_LOWER column
 * @method array findBySltlUpper(double $SLTL_UPPER) Return Morphmettlratios objects filtered by the SLTL_UPPER column
 * @method array findByFltl(double $FLTL) Return Morphmettlratios objects filtered by the FLTL column
 * @method array findByFltlLower(double $FLTL_LOWER) Return Morphmettlratios objects filtered by the FLTL_LOWER column
 * @method array findByFltlUpper(double $FLTL_UPPER) Return Morphmettlratios objects filtered by the FLTL_UPPER column
 * @method array findByHltl(double $HLTL) Return Morphmettlratios objects filtered by the HLTL column
 * @method array findByHltlLower(double $HLTL_LOWER) Return Morphmettlratios objects filtered by the HLTL_LOWER column
 * @method array findByHltlUpper(double $HLTL_UPPER) Return Morphmettlratios objects filtered by the HLTL_UPPER column
 * @method array findByPaltl(double $PALTL) Return Morphmettlratios objects filtered by the PALTL column
 * @method array findByPaltlLower(double $PALTL_LOWER) Return Morphmettlratios objects filtered by the PALTL_LOWER column
 * @method array findByPaltlUpper(double $PALTL_UPPER) Return Morphmettlratios objects filtered by the PALTL_UPPER column
 * @method array findByPdltl(double $PDLTL) Return Morphmettlratios objects filtered by the PDLTL column
 * @method array findByPdltlLower(double $PDLTL_LOWER) Return Morphmettlratios objects filtered by the PDLTL_LOWER column
 * @method array findByPdltlUpper(double $PDLTL_UPPER) Return Morphmettlratios objects filtered by the PDLTL_UPPER column
 * @method array findByPpltl(double $PPLTL) Return Morphmettlratios objects filtered by the PPLTL column
 * @method array findByPpltlLower(double $PPLTL_LOWER) Return Morphmettlratios objects filtered by the PPLTL_LOWER column
 * @method array findByPpltlUpper(double $PPLTL_UPPER) Return Morphmettlratios objects filtered by the PPLTL_UPPER column
 * @method array findByPpeltl(double $PPELTL) Return Morphmettlratios objects filtered by the PPELTL column
 * @method array findByPpeltlLower(double $PPELTL_LOWER) Return Morphmettlratios objects filtered by the PPELTL_LOWER column
 * @method array findByPpeltlUpper(double $PPELTL_UPPER) Return Morphmettlratios objects filtered by the PPELTL_UPPER column
 * @method array findByEdtl(double $EDTL) Return Morphmettlratios objects filtered by the EDTL column
 * @method array findByEdtlLower(double $EDTL_LOWER) Return Morphmettlratios objects filtered by the EDTL_LOWER column
 * @method array findByEdtlUpper(double $EDTL_UPPER) Return Morphmettlratios objects filtered by the EDTL_UPPER column
 * @method array findByPoltl(double $POLTL) Return Morphmettlratios objects filtered by the POLTL column
 * @method array findByPoltlLower(double $POLTL_LOWER) Return Morphmettlratios objects filtered by the POLTL_LOWER column
 * @method array findByPoltlUpper(double $POLTL_UPPER) Return Morphmettlratios objects filtered by the POLTL_UPPER column
 * @method array findByBdtl(double $BDTL) Return Morphmettlratios objects filtered by the BDTL column
 * @method array findByBdtlLower(double $BDTL_LOWER) Return Morphmettlratios objects filtered by the BDTL_LOWER column
 * @method array findByBdtlUpper(double $BDTL_UPPER) Return Morphmettlratios objects filtered by the BDTL_UPPER column
 * @method array findByChtl(double $CHTL) Return Morphmettlratios objects filtered by the CHTL column
 * @method array findByChtlLower(double $CHTL_LOWER) Return Morphmettlratios objects filtered by the CHTL_LOWER column
 * @method array findByChtlUpper(double $CHTL_UPPER) Return Morphmettlratios objects filtered by the CHTL_UPPER column
 * @method array findByPkid(string $PKID) Return Morphmettlratios objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMorphmettlratiosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMorphmettlratiosQuery object.
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
            $modelName = 'Morphmettlratios';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MorphmettlratiosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MorphmettlratiosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MorphmettlratiosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MorphmettlratiosQuery) {
            return $criteria;
        }
        $query = new MorphmettlratiosQuery(null, null, $modelAlias);

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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Morphmettlratios|Morphmettlratios[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MorphmettlratiosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Morphmettlratios A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPkid($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Morphmettlratios A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `PicName`, `Speccode`, `FamCode`, `Family`, `CommonName`, `ClassNum`, `Class`, `Remarks`, `Perc`, `MaxLengthTL`, `SLTL`, `SLTL_LOWER`, `SLTL_UPPER`, `FLTL`, `FLTL_LOWER`, `FLTL_UPPER`, `HLTL`, `HLTL_LOWER`, `HLTL_UPPER`, `PALTL`, `PALTL_LOWER`, `PALTL_UPPER`, `PDLTL`, `PDLTL_LOWER`, `PDLTL_UPPER`, `PPLTL`, `PPLTL_LOWER`, `PPLTL_UPPER`, `PPELTL`, `PPELTL_LOWER`, `PPELTL_UPPER`, `EDTL`, `EDTL_LOWER`, `EDTL_UPPER`, `POLTL`, `POLTL_LOWER`, `POLTL_UPPER`, `BDTL`, `BDTL_LOWER`, `BDTL_UPPER`, `CHTL`, `CHTL_LOWER`, `CHTL_UPPER`, `PKID` FROM `morphmettlratios` WHERE `PKID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Morphmettlratios();
            $obj->hydrate($row);
            MorphmettlratiosPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Morphmettlratios|Morphmettlratios[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Morphmettlratios[]|mixed the list of results, formatted by the current formatter
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
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MorphmettlratiosPeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MorphmettlratiosPeer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PicName column
     *
     * Example usage:
     * <code>
     * $query->filterByPicname('fooValue');   // WHERE PicName = 'fooValue'
     * $query->filterByPicname('%fooValue%'); // WHERE PicName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPicname($picname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picname)) {
                $picname = str_replace('*', '%', $picname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PICNAME, $picname, $comparison);
    }

    /**
     * Filter the query on the Speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE Speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE Speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE Speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE Speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the FamCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE FamCode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE FamCode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE FamCode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE FamCode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the Family column
     *
     * Example usage:
     * <code>
     * $query->filterByFamily('fooValue');   // WHERE Family = 'fooValue'
     * $query->filterByFamily('%fooValue%'); // WHERE Family LIKE '%fooValue%'
     * </code>
     *
     * @param     string $family The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByFamily($family = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($family)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $family)) {
                $family = str_replace('*', '%', $family);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::FAMILY, $family, $comparison);
    }

    /**
     * Filter the query on the CommonName column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonname('fooValue');   // WHERE CommonName = 'fooValue'
     * $query->filterByCommonname('%fooValue%'); // WHERE CommonName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByCommonname($commonname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonname)) {
                $commonname = str_replace('*', '%', $commonname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::COMMONNAME, $commonname, $comparison);
    }

    /**
     * Filter the query on the ClassNum column
     *
     * Example usage:
     * <code>
     * $query->filterByClassnum(1234); // WHERE ClassNum = 1234
     * $query->filterByClassnum(array(12, 34)); // WHERE ClassNum IN (12, 34)
     * $query->filterByClassnum(array('min' => 12)); // WHERE ClassNum >= 12
     * $query->filterByClassnum(array('max' => 12)); // WHERE ClassNum <= 12
     * </code>
     *
     * @param     mixed $classnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByClassnum($classnum = null, $comparison = null)
    {
        if (is_array($classnum)) {
            $useMinMax = false;
            if (isset($classnum['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::CLASSNUM, $classnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classnum['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::CLASSNUM, $classnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::CLASSNUM, $classnum, $comparison);
    }

    /**
     * Filter the query on the Class column
     *
     * Example usage:
     * <code>
     * $query->filterByClass('fooValue');   // WHERE Class = 'fooValue'
     * $query->filterByClass('%fooValue%'); // WHERE Class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $class The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByClass($class = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($class)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $class)) {
                $class = str_replace('*', '%', $class);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::CLAZZ, $class, $comparison);
    }

    /**
     * Filter the query on the Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE Remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%'); // WHERE Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks)) {
                $remarks = str_replace('*', '%', $remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the Perc column
     *
     * Example usage:
     * <code>
     * $query->filterByPerc(1234); // WHERE Perc = 1234
     * $query->filterByPerc(array(12, 34)); // WHERE Perc IN (12, 34)
     * $query->filterByPerc(array('min' => 12)); // WHERE Perc >= 12
     * $query->filterByPerc(array('max' => 12)); // WHERE Perc <= 12
     * </code>
     *
     * @param     mixed $perc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPerc($perc = null, $comparison = null)
    {
        if (is_array($perc)) {
            $useMinMax = false;
            if (isset($perc['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PERC, $perc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($perc['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PERC, $perc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PERC, $perc, $comparison);
    }

    /**
     * Filter the query on the MaxLengthTL column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxlengthtl(1234); // WHERE MaxLengthTL = 1234
     * $query->filterByMaxlengthtl(array(12, 34)); // WHERE MaxLengthTL IN (12, 34)
     * $query->filterByMaxlengthtl(array('min' => 12)); // WHERE MaxLengthTL >= 12
     * $query->filterByMaxlengthtl(array('max' => 12)); // WHERE MaxLengthTL <= 12
     * </code>
     *
     * @param     mixed $maxlengthtl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByMaxlengthtl($maxlengthtl = null, $comparison = null)
    {
        if (is_array($maxlengthtl)) {
            $useMinMax = false;
            if (isset($maxlengthtl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::MAXLENGTHTL, $maxlengthtl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxlengthtl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::MAXLENGTHTL, $maxlengthtl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::MAXLENGTHTL, $maxlengthtl, $comparison);
    }

    /**
     * Filter the query on the SLTL column
     *
     * Example usage:
     * <code>
     * $query->filterBySltl(1234); // WHERE SLTL = 1234
     * $query->filterBySltl(array(12, 34)); // WHERE SLTL IN (12, 34)
     * $query->filterBySltl(array('min' => 12)); // WHERE SLTL >= 12
     * $query->filterBySltl(array('max' => 12)); // WHERE SLTL <= 12
     * </code>
     *
     * @param     mixed $sltl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterBySltl($sltl = null, $comparison = null)
    {
        if (is_array($sltl)) {
            $useMinMax = false;
            if (isset($sltl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::SLTL, $sltl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sltl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::SLTL, $sltl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::SLTL, $sltl, $comparison);
    }

    /**
     * Filter the query on the SLTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterBySltlLower(1234); // WHERE SLTL_LOWER = 1234
     * $query->filterBySltlLower(array(12, 34)); // WHERE SLTL_LOWER IN (12, 34)
     * $query->filterBySltlLower(array('min' => 12)); // WHERE SLTL_LOWER >= 12
     * $query->filterBySltlLower(array('max' => 12)); // WHERE SLTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $sltlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterBySltlLower($sltlLower = null, $comparison = null)
    {
        if (is_array($sltlLower)) {
            $useMinMax = false;
            if (isset($sltlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::SLTL_LOWER, $sltlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sltlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::SLTL_LOWER, $sltlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::SLTL_LOWER, $sltlLower, $comparison);
    }

    /**
     * Filter the query on the SLTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterBySltlUpper(1234); // WHERE SLTL_UPPER = 1234
     * $query->filterBySltlUpper(array(12, 34)); // WHERE SLTL_UPPER IN (12, 34)
     * $query->filterBySltlUpper(array('min' => 12)); // WHERE SLTL_UPPER >= 12
     * $query->filterBySltlUpper(array('max' => 12)); // WHERE SLTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $sltlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterBySltlUpper($sltlUpper = null, $comparison = null)
    {
        if (is_array($sltlUpper)) {
            $useMinMax = false;
            if (isset($sltlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::SLTL_UPPER, $sltlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sltlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::SLTL_UPPER, $sltlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::SLTL_UPPER, $sltlUpper, $comparison);
    }

    /**
     * Filter the query on the FLTL column
     *
     * Example usage:
     * <code>
     * $query->filterByFltl(1234); // WHERE FLTL = 1234
     * $query->filterByFltl(array(12, 34)); // WHERE FLTL IN (12, 34)
     * $query->filterByFltl(array('min' => 12)); // WHERE FLTL >= 12
     * $query->filterByFltl(array('max' => 12)); // WHERE FLTL <= 12
     * </code>
     *
     * @param     mixed $fltl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByFltl($fltl = null, $comparison = null)
    {
        if (is_array($fltl)) {
            $useMinMax = false;
            if (isset($fltl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::FLTL, $fltl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fltl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::FLTL, $fltl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::FLTL, $fltl, $comparison);
    }

    /**
     * Filter the query on the FLTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterByFltlLower(1234); // WHERE FLTL_LOWER = 1234
     * $query->filterByFltlLower(array(12, 34)); // WHERE FLTL_LOWER IN (12, 34)
     * $query->filterByFltlLower(array('min' => 12)); // WHERE FLTL_LOWER >= 12
     * $query->filterByFltlLower(array('max' => 12)); // WHERE FLTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $fltlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByFltlLower($fltlLower = null, $comparison = null)
    {
        if (is_array($fltlLower)) {
            $useMinMax = false;
            if (isset($fltlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::FLTL_LOWER, $fltlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fltlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::FLTL_LOWER, $fltlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::FLTL_LOWER, $fltlLower, $comparison);
    }

    /**
     * Filter the query on the FLTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterByFltlUpper(1234); // WHERE FLTL_UPPER = 1234
     * $query->filterByFltlUpper(array(12, 34)); // WHERE FLTL_UPPER IN (12, 34)
     * $query->filterByFltlUpper(array('min' => 12)); // WHERE FLTL_UPPER >= 12
     * $query->filterByFltlUpper(array('max' => 12)); // WHERE FLTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $fltlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByFltlUpper($fltlUpper = null, $comparison = null)
    {
        if (is_array($fltlUpper)) {
            $useMinMax = false;
            if (isset($fltlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::FLTL_UPPER, $fltlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fltlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::FLTL_UPPER, $fltlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::FLTL_UPPER, $fltlUpper, $comparison);
    }

    /**
     * Filter the query on the HLTL column
     *
     * Example usage:
     * <code>
     * $query->filterByHltl(1234); // WHERE HLTL = 1234
     * $query->filterByHltl(array(12, 34)); // WHERE HLTL IN (12, 34)
     * $query->filterByHltl(array('min' => 12)); // WHERE HLTL >= 12
     * $query->filterByHltl(array('max' => 12)); // WHERE HLTL <= 12
     * </code>
     *
     * @param     mixed $hltl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByHltl($hltl = null, $comparison = null)
    {
        if (is_array($hltl)) {
            $useMinMax = false;
            if (isset($hltl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::HLTL, $hltl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hltl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::HLTL, $hltl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::HLTL, $hltl, $comparison);
    }

    /**
     * Filter the query on the HLTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterByHltlLower(1234); // WHERE HLTL_LOWER = 1234
     * $query->filterByHltlLower(array(12, 34)); // WHERE HLTL_LOWER IN (12, 34)
     * $query->filterByHltlLower(array('min' => 12)); // WHERE HLTL_LOWER >= 12
     * $query->filterByHltlLower(array('max' => 12)); // WHERE HLTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $hltlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByHltlLower($hltlLower = null, $comparison = null)
    {
        if (is_array($hltlLower)) {
            $useMinMax = false;
            if (isset($hltlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::HLTL_LOWER, $hltlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hltlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::HLTL_LOWER, $hltlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::HLTL_LOWER, $hltlLower, $comparison);
    }

    /**
     * Filter the query on the HLTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterByHltlUpper(1234); // WHERE HLTL_UPPER = 1234
     * $query->filterByHltlUpper(array(12, 34)); // WHERE HLTL_UPPER IN (12, 34)
     * $query->filterByHltlUpper(array('min' => 12)); // WHERE HLTL_UPPER >= 12
     * $query->filterByHltlUpper(array('max' => 12)); // WHERE HLTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $hltlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByHltlUpper($hltlUpper = null, $comparison = null)
    {
        if (is_array($hltlUpper)) {
            $useMinMax = false;
            if (isset($hltlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::HLTL_UPPER, $hltlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hltlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::HLTL_UPPER, $hltlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::HLTL_UPPER, $hltlUpper, $comparison);
    }

    /**
     * Filter the query on the PALTL column
     *
     * Example usage:
     * <code>
     * $query->filterByPaltl(1234); // WHERE PALTL = 1234
     * $query->filterByPaltl(array(12, 34)); // WHERE PALTL IN (12, 34)
     * $query->filterByPaltl(array('min' => 12)); // WHERE PALTL >= 12
     * $query->filterByPaltl(array('max' => 12)); // WHERE PALTL <= 12
     * </code>
     *
     * @param     mixed $paltl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPaltl($paltl = null, $comparison = null)
    {
        if (is_array($paltl)) {
            $useMinMax = false;
            if (isset($paltl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PALTL, $paltl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paltl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PALTL, $paltl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PALTL, $paltl, $comparison);
    }

    /**
     * Filter the query on the PALTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterByPaltlLower(1234); // WHERE PALTL_LOWER = 1234
     * $query->filterByPaltlLower(array(12, 34)); // WHERE PALTL_LOWER IN (12, 34)
     * $query->filterByPaltlLower(array('min' => 12)); // WHERE PALTL_LOWER >= 12
     * $query->filterByPaltlLower(array('max' => 12)); // WHERE PALTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $paltlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPaltlLower($paltlLower = null, $comparison = null)
    {
        if (is_array($paltlLower)) {
            $useMinMax = false;
            if (isset($paltlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PALTL_LOWER, $paltlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paltlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PALTL_LOWER, $paltlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PALTL_LOWER, $paltlLower, $comparison);
    }

    /**
     * Filter the query on the PALTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterByPaltlUpper(1234); // WHERE PALTL_UPPER = 1234
     * $query->filterByPaltlUpper(array(12, 34)); // WHERE PALTL_UPPER IN (12, 34)
     * $query->filterByPaltlUpper(array('min' => 12)); // WHERE PALTL_UPPER >= 12
     * $query->filterByPaltlUpper(array('max' => 12)); // WHERE PALTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $paltlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPaltlUpper($paltlUpper = null, $comparison = null)
    {
        if (is_array($paltlUpper)) {
            $useMinMax = false;
            if (isset($paltlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PALTL_UPPER, $paltlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paltlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PALTL_UPPER, $paltlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PALTL_UPPER, $paltlUpper, $comparison);
    }

    /**
     * Filter the query on the PDLTL column
     *
     * Example usage:
     * <code>
     * $query->filterByPdltl(1234); // WHERE PDLTL = 1234
     * $query->filterByPdltl(array(12, 34)); // WHERE PDLTL IN (12, 34)
     * $query->filterByPdltl(array('min' => 12)); // WHERE PDLTL >= 12
     * $query->filterByPdltl(array('max' => 12)); // WHERE PDLTL <= 12
     * </code>
     *
     * @param     mixed $pdltl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPdltl($pdltl = null, $comparison = null)
    {
        if (is_array($pdltl)) {
            $useMinMax = false;
            if (isset($pdltl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PDLTL, $pdltl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pdltl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PDLTL, $pdltl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PDLTL, $pdltl, $comparison);
    }

    /**
     * Filter the query on the PDLTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterByPdltlLower(1234); // WHERE PDLTL_LOWER = 1234
     * $query->filterByPdltlLower(array(12, 34)); // WHERE PDLTL_LOWER IN (12, 34)
     * $query->filterByPdltlLower(array('min' => 12)); // WHERE PDLTL_LOWER >= 12
     * $query->filterByPdltlLower(array('max' => 12)); // WHERE PDLTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $pdltlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPdltlLower($pdltlLower = null, $comparison = null)
    {
        if (is_array($pdltlLower)) {
            $useMinMax = false;
            if (isset($pdltlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PDLTL_LOWER, $pdltlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pdltlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PDLTL_LOWER, $pdltlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PDLTL_LOWER, $pdltlLower, $comparison);
    }

    /**
     * Filter the query on the PDLTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterByPdltlUpper(1234); // WHERE PDLTL_UPPER = 1234
     * $query->filterByPdltlUpper(array(12, 34)); // WHERE PDLTL_UPPER IN (12, 34)
     * $query->filterByPdltlUpper(array('min' => 12)); // WHERE PDLTL_UPPER >= 12
     * $query->filterByPdltlUpper(array('max' => 12)); // WHERE PDLTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $pdltlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPdltlUpper($pdltlUpper = null, $comparison = null)
    {
        if (is_array($pdltlUpper)) {
            $useMinMax = false;
            if (isset($pdltlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PDLTL_UPPER, $pdltlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pdltlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PDLTL_UPPER, $pdltlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PDLTL_UPPER, $pdltlUpper, $comparison);
    }

    /**
     * Filter the query on the PPLTL column
     *
     * Example usage:
     * <code>
     * $query->filterByPpltl(1234); // WHERE PPLTL = 1234
     * $query->filterByPpltl(array(12, 34)); // WHERE PPLTL IN (12, 34)
     * $query->filterByPpltl(array('min' => 12)); // WHERE PPLTL >= 12
     * $query->filterByPpltl(array('max' => 12)); // WHERE PPLTL <= 12
     * </code>
     *
     * @param     mixed $ppltl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPpltl($ppltl = null, $comparison = null)
    {
        if (is_array($ppltl)) {
            $useMinMax = false;
            if (isset($ppltl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPLTL, $ppltl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ppltl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPLTL, $ppltl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PPLTL, $ppltl, $comparison);
    }

    /**
     * Filter the query on the PPLTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterByPpltlLower(1234); // WHERE PPLTL_LOWER = 1234
     * $query->filterByPpltlLower(array(12, 34)); // WHERE PPLTL_LOWER IN (12, 34)
     * $query->filterByPpltlLower(array('min' => 12)); // WHERE PPLTL_LOWER >= 12
     * $query->filterByPpltlLower(array('max' => 12)); // WHERE PPLTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $ppltlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPpltlLower($ppltlLower = null, $comparison = null)
    {
        if (is_array($ppltlLower)) {
            $useMinMax = false;
            if (isset($ppltlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPLTL_LOWER, $ppltlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ppltlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPLTL_LOWER, $ppltlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PPLTL_LOWER, $ppltlLower, $comparison);
    }

    /**
     * Filter the query on the PPLTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterByPpltlUpper(1234); // WHERE PPLTL_UPPER = 1234
     * $query->filterByPpltlUpper(array(12, 34)); // WHERE PPLTL_UPPER IN (12, 34)
     * $query->filterByPpltlUpper(array('min' => 12)); // WHERE PPLTL_UPPER >= 12
     * $query->filterByPpltlUpper(array('max' => 12)); // WHERE PPLTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $ppltlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPpltlUpper($ppltlUpper = null, $comparison = null)
    {
        if (is_array($ppltlUpper)) {
            $useMinMax = false;
            if (isset($ppltlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPLTL_UPPER, $ppltlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ppltlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPLTL_UPPER, $ppltlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PPLTL_UPPER, $ppltlUpper, $comparison);
    }

    /**
     * Filter the query on the PPELTL column
     *
     * Example usage:
     * <code>
     * $query->filterByPpeltl(1234); // WHERE PPELTL = 1234
     * $query->filterByPpeltl(array(12, 34)); // WHERE PPELTL IN (12, 34)
     * $query->filterByPpeltl(array('min' => 12)); // WHERE PPELTL >= 12
     * $query->filterByPpeltl(array('max' => 12)); // WHERE PPELTL <= 12
     * </code>
     *
     * @param     mixed $ppeltl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPpeltl($ppeltl = null, $comparison = null)
    {
        if (is_array($ppeltl)) {
            $useMinMax = false;
            if (isset($ppeltl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPELTL, $ppeltl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ppeltl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPELTL, $ppeltl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PPELTL, $ppeltl, $comparison);
    }

    /**
     * Filter the query on the PPELTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterByPpeltlLower(1234); // WHERE PPELTL_LOWER = 1234
     * $query->filterByPpeltlLower(array(12, 34)); // WHERE PPELTL_LOWER IN (12, 34)
     * $query->filterByPpeltlLower(array('min' => 12)); // WHERE PPELTL_LOWER >= 12
     * $query->filterByPpeltlLower(array('max' => 12)); // WHERE PPELTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $ppeltlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPpeltlLower($ppeltlLower = null, $comparison = null)
    {
        if (is_array($ppeltlLower)) {
            $useMinMax = false;
            if (isset($ppeltlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPELTL_LOWER, $ppeltlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ppeltlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPELTL_LOWER, $ppeltlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PPELTL_LOWER, $ppeltlLower, $comparison);
    }

    /**
     * Filter the query on the PPELTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterByPpeltlUpper(1234); // WHERE PPELTL_UPPER = 1234
     * $query->filterByPpeltlUpper(array(12, 34)); // WHERE PPELTL_UPPER IN (12, 34)
     * $query->filterByPpeltlUpper(array('min' => 12)); // WHERE PPELTL_UPPER >= 12
     * $query->filterByPpeltlUpper(array('max' => 12)); // WHERE PPELTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $ppeltlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPpeltlUpper($ppeltlUpper = null, $comparison = null)
    {
        if (is_array($ppeltlUpper)) {
            $useMinMax = false;
            if (isset($ppeltlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPELTL_UPPER, $ppeltlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ppeltlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PPELTL_UPPER, $ppeltlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PPELTL_UPPER, $ppeltlUpper, $comparison);
    }

    /**
     * Filter the query on the EDTL column
     *
     * Example usage:
     * <code>
     * $query->filterByEdtl(1234); // WHERE EDTL = 1234
     * $query->filterByEdtl(array(12, 34)); // WHERE EDTL IN (12, 34)
     * $query->filterByEdtl(array('min' => 12)); // WHERE EDTL >= 12
     * $query->filterByEdtl(array('max' => 12)); // WHERE EDTL <= 12
     * </code>
     *
     * @param     mixed $edtl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByEdtl($edtl = null, $comparison = null)
    {
        if (is_array($edtl)) {
            $useMinMax = false;
            if (isset($edtl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::EDTL, $edtl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($edtl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::EDTL, $edtl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::EDTL, $edtl, $comparison);
    }

    /**
     * Filter the query on the EDTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterByEdtlLower(1234); // WHERE EDTL_LOWER = 1234
     * $query->filterByEdtlLower(array(12, 34)); // WHERE EDTL_LOWER IN (12, 34)
     * $query->filterByEdtlLower(array('min' => 12)); // WHERE EDTL_LOWER >= 12
     * $query->filterByEdtlLower(array('max' => 12)); // WHERE EDTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $edtlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByEdtlLower($edtlLower = null, $comparison = null)
    {
        if (is_array($edtlLower)) {
            $useMinMax = false;
            if (isset($edtlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::EDTL_LOWER, $edtlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($edtlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::EDTL_LOWER, $edtlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::EDTL_LOWER, $edtlLower, $comparison);
    }

    /**
     * Filter the query on the EDTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterByEdtlUpper(1234); // WHERE EDTL_UPPER = 1234
     * $query->filterByEdtlUpper(array(12, 34)); // WHERE EDTL_UPPER IN (12, 34)
     * $query->filterByEdtlUpper(array('min' => 12)); // WHERE EDTL_UPPER >= 12
     * $query->filterByEdtlUpper(array('max' => 12)); // WHERE EDTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $edtlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByEdtlUpper($edtlUpper = null, $comparison = null)
    {
        if (is_array($edtlUpper)) {
            $useMinMax = false;
            if (isset($edtlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::EDTL_UPPER, $edtlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($edtlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::EDTL_UPPER, $edtlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::EDTL_UPPER, $edtlUpper, $comparison);
    }

    /**
     * Filter the query on the POLTL column
     *
     * Example usage:
     * <code>
     * $query->filterByPoltl(1234); // WHERE POLTL = 1234
     * $query->filterByPoltl(array(12, 34)); // WHERE POLTL IN (12, 34)
     * $query->filterByPoltl(array('min' => 12)); // WHERE POLTL >= 12
     * $query->filterByPoltl(array('max' => 12)); // WHERE POLTL <= 12
     * </code>
     *
     * @param     mixed $poltl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPoltl($poltl = null, $comparison = null)
    {
        if (is_array($poltl)) {
            $useMinMax = false;
            if (isset($poltl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::POLTL, $poltl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($poltl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::POLTL, $poltl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::POLTL, $poltl, $comparison);
    }

    /**
     * Filter the query on the POLTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterByPoltlLower(1234); // WHERE POLTL_LOWER = 1234
     * $query->filterByPoltlLower(array(12, 34)); // WHERE POLTL_LOWER IN (12, 34)
     * $query->filterByPoltlLower(array('min' => 12)); // WHERE POLTL_LOWER >= 12
     * $query->filterByPoltlLower(array('max' => 12)); // WHERE POLTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $poltlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPoltlLower($poltlLower = null, $comparison = null)
    {
        if (is_array($poltlLower)) {
            $useMinMax = false;
            if (isset($poltlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::POLTL_LOWER, $poltlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($poltlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::POLTL_LOWER, $poltlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::POLTL_LOWER, $poltlLower, $comparison);
    }

    /**
     * Filter the query on the POLTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterByPoltlUpper(1234); // WHERE POLTL_UPPER = 1234
     * $query->filterByPoltlUpper(array(12, 34)); // WHERE POLTL_UPPER IN (12, 34)
     * $query->filterByPoltlUpper(array('min' => 12)); // WHERE POLTL_UPPER >= 12
     * $query->filterByPoltlUpper(array('max' => 12)); // WHERE POLTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $poltlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPoltlUpper($poltlUpper = null, $comparison = null)
    {
        if (is_array($poltlUpper)) {
            $useMinMax = false;
            if (isset($poltlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::POLTL_UPPER, $poltlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($poltlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::POLTL_UPPER, $poltlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::POLTL_UPPER, $poltlUpper, $comparison);
    }

    /**
     * Filter the query on the BDTL column
     *
     * Example usage:
     * <code>
     * $query->filterByBdtl(1234); // WHERE BDTL = 1234
     * $query->filterByBdtl(array(12, 34)); // WHERE BDTL IN (12, 34)
     * $query->filterByBdtl(array('min' => 12)); // WHERE BDTL >= 12
     * $query->filterByBdtl(array('max' => 12)); // WHERE BDTL <= 12
     * </code>
     *
     * @param     mixed $bdtl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByBdtl($bdtl = null, $comparison = null)
    {
        if (is_array($bdtl)) {
            $useMinMax = false;
            if (isset($bdtl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::BDTL, $bdtl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bdtl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::BDTL, $bdtl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::BDTL, $bdtl, $comparison);
    }

    /**
     * Filter the query on the BDTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterByBdtlLower(1234); // WHERE BDTL_LOWER = 1234
     * $query->filterByBdtlLower(array(12, 34)); // WHERE BDTL_LOWER IN (12, 34)
     * $query->filterByBdtlLower(array('min' => 12)); // WHERE BDTL_LOWER >= 12
     * $query->filterByBdtlLower(array('max' => 12)); // WHERE BDTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $bdtlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByBdtlLower($bdtlLower = null, $comparison = null)
    {
        if (is_array($bdtlLower)) {
            $useMinMax = false;
            if (isset($bdtlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::BDTL_LOWER, $bdtlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bdtlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::BDTL_LOWER, $bdtlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::BDTL_LOWER, $bdtlLower, $comparison);
    }

    /**
     * Filter the query on the BDTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterByBdtlUpper(1234); // WHERE BDTL_UPPER = 1234
     * $query->filterByBdtlUpper(array(12, 34)); // WHERE BDTL_UPPER IN (12, 34)
     * $query->filterByBdtlUpper(array('min' => 12)); // WHERE BDTL_UPPER >= 12
     * $query->filterByBdtlUpper(array('max' => 12)); // WHERE BDTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $bdtlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByBdtlUpper($bdtlUpper = null, $comparison = null)
    {
        if (is_array($bdtlUpper)) {
            $useMinMax = false;
            if (isset($bdtlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::BDTL_UPPER, $bdtlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bdtlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::BDTL_UPPER, $bdtlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::BDTL_UPPER, $bdtlUpper, $comparison);
    }

    /**
     * Filter the query on the CHTL column
     *
     * Example usage:
     * <code>
     * $query->filterByChtl(1234); // WHERE CHTL = 1234
     * $query->filterByChtl(array(12, 34)); // WHERE CHTL IN (12, 34)
     * $query->filterByChtl(array('min' => 12)); // WHERE CHTL >= 12
     * $query->filterByChtl(array('max' => 12)); // WHERE CHTL <= 12
     * </code>
     *
     * @param     mixed $chtl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByChtl($chtl = null, $comparison = null)
    {
        if (is_array($chtl)) {
            $useMinMax = false;
            if (isset($chtl['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::CHTL, $chtl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chtl['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::CHTL, $chtl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::CHTL, $chtl, $comparison);
    }

    /**
     * Filter the query on the CHTL_LOWER column
     *
     * Example usage:
     * <code>
     * $query->filterByChtlLower(1234); // WHERE CHTL_LOWER = 1234
     * $query->filterByChtlLower(array(12, 34)); // WHERE CHTL_LOWER IN (12, 34)
     * $query->filterByChtlLower(array('min' => 12)); // WHERE CHTL_LOWER >= 12
     * $query->filterByChtlLower(array('max' => 12)); // WHERE CHTL_LOWER <= 12
     * </code>
     *
     * @param     mixed $chtlLower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByChtlLower($chtlLower = null, $comparison = null)
    {
        if (is_array($chtlLower)) {
            $useMinMax = false;
            if (isset($chtlLower['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::CHTL_LOWER, $chtlLower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chtlLower['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::CHTL_LOWER, $chtlLower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::CHTL_LOWER, $chtlLower, $comparison);
    }

    /**
     * Filter the query on the CHTL_UPPER column
     *
     * Example usage:
     * <code>
     * $query->filterByChtlUpper(1234); // WHERE CHTL_UPPER = 1234
     * $query->filterByChtlUpper(array(12, 34)); // WHERE CHTL_UPPER IN (12, 34)
     * $query->filterByChtlUpper(array('min' => 12)); // WHERE CHTL_UPPER >= 12
     * $query->filterByChtlUpper(array('max' => 12)); // WHERE CHTL_UPPER <= 12
     * </code>
     *
     * @param     mixed $chtlUpper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByChtlUpper($chtlUpper = null, $comparison = null)
    {
        if (is_array($chtlUpper)) {
            $useMinMax = false;
            if (isset($chtlUpper['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::CHTL_UPPER, $chtlUpper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chtlUpper['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::CHTL_UPPER, $chtlUpper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::CHTL_UPPER, $chtlUpper, $comparison);
    }

    /**
     * Filter the query on the PKID column
     *
     * Example usage:
     * <code>
     * $query->filterByPkid(1234); // WHERE PKID = 1234
     * $query->filterByPkid(array(12, 34)); // WHERE PKID IN (12, 34)
     * $query->filterByPkid(array('min' => 12)); // WHERE PKID >= 12
     * $query->filterByPkid(array('max' => 12)); // WHERE PKID <= 12
     * </code>
     *
     * @param     mixed $pkid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(MorphmettlratiosPeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphmettlratiosPeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Morphmettlratios $morphmettlratios Object to remove from the list of results
     *
     * @return MorphmettlratiosQuery The current query, for fluid interface
     */
    public function prune($morphmettlratios = null)
    {
        if ($morphmettlratios) {
            $this->addUsingAlias(MorphmettlratiosPeer::PKID, $morphmettlratios->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
