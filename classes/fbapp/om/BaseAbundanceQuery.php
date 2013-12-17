<?php


/**
 * Base class that represents a query for the 'abundance' table.
 *
 *
 *
 * @method AbundanceQuery orderByAbundancecode($order = Criteria::ASC) Order by the AbundanceCode column
 * @method AbundanceQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method AbundanceQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method AbundanceQuery orderByMainref($order = Criteria::ASC) Order by the MainRef column
 * @method AbundanceQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method AbundanceQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method AbundanceQuery orderByECode($order = Criteria::ASC) Order by the E_CODE column
 * @method AbundanceQuery orderByIntroduced($order = Criteria::ASC) Order by the Introduced column
 * @method AbundanceQuery orderByYearIntro($order = Criteria::ASC) Order by the Year_intro column
 * @method AbundanceQuery orderByLifestage1($order = Criteria::ASC) Order by the LifeStage1 column
 * @method AbundanceQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method AbundanceQuery orderByLifestage2($order = Criteria::ASC) Order by the Lifestage2 column
 * @method AbundanceQuery orderBySexual($order = Criteria::ASC) Order by the Sexual column
 * @method AbundanceQuery orderByAsexual($order = Criteria::ASC) Order by the Asexual column
 * @method AbundanceQuery orderByAbundanceQuan($order = Criteria::ASC) Order by the Abundance_Quan column
 * @method AbundanceQuery orderByAbundanceQuanunit($order = Criteria::ASC) Order by the Abundance_QuanUnit column
 * @method AbundanceQuery orderByAbundanceSemiquan($order = Criteria::ASC) Order by the Abundance_SemiQuan column
 * @method AbundanceQuery orderByAbundanceSemiquanunit($order = Criteria::ASC) Order by the Abundance_SemiQuanUnit column
 * @method AbundanceQuery orderByAbundanceQual($order = Criteria::ASC) Order by the Abundance_Qual column
 * @method AbundanceQuery orderByDepth($order = Criteria::ASC) Order by the Depth column
 * @method AbundanceQuery orderByDepthunit($order = Criteria::ASC) Order by the DepthUnit column
 * @method AbundanceQuery orderByYearOccur1($order = Criteria::ASC) Order by the Year_Occur1 column
 * @method AbundanceQuery orderByYearOccur2($order = Criteria::ASC) Order by the Year_Occur2 column
 * @method AbundanceQuery orderByDateOccur1($order = Criteria::ASC) Order by the Date_Occur1 column
 * @method AbundanceQuery orderByDateOccur2($order = Criteria::ASC) Order by the Date_Occur2 column
 * @method AbundanceQuery orderBySeasonal($order = Criteria::ASC) Order by the Seasonal column
 * @method AbundanceQuery orderByPeriod($order = Criteria::ASC) Order by the Period column
 * @method AbundanceQuery orderByRecordtype($order = Criteria::ASC) Order by the RecordType column
 * @method AbundanceQuery orderByMethod($order = Criteria::ASC) Order by the Method column
 * @method AbundanceQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method AbundanceQuery orderByInvasivereport($order = Criteria::ASC) Order by the InvasiveReport column
 * @method AbundanceQuery orderByInvasivenessdegree($order = Criteria::ASC) Order by the InvasivenessDegree column
 * @method AbundanceQuery orderByReporttype($order = Criteria::ASC) Order by the ReportType column
 * @method AbundanceQuery orderByInvasiveref($order = Criteria::ASC) Order by the InvasiveRef column
 * @method AbundanceQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method AbundanceQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method AbundanceQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method AbundanceQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method AbundanceQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method AbundanceQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method AbundanceQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method AbundanceQuery groupByAbundancecode() Group by the AbundanceCode column
 * @method AbundanceQuery groupByStockcode() Group by the StockCode column
 * @method AbundanceQuery groupBySpeccode() Group by the SpecCode column
 * @method AbundanceQuery groupByMainref() Group by the MainRef column
 * @method AbundanceQuery groupByLocality() Group by the Locality column
 * @method AbundanceQuery groupByCCode() Group by the C_Code column
 * @method AbundanceQuery groupByECode() Group by the E_CODE column
 * @method AbundanceQuery groupByIntroduced() Group by the Introduced column
 * @method AbundanceQuery groupByYearIntro() Group by the Year_intro column
 * @method AbundanceQuery groupByLifestage1() Group by the LifeStage1 column
 * @method AbundanceQuery groupBySex() Group by the Sex column
 * @method AbundanceQuery groupByLifestage2() Group by the Lifestage2 column
 * @method AbundanceQuery groupBySexual() Group by the Sexual column
 * @method AbundanceQuery groupByAsexual() Group by the Asexual column
 * @method AbundanceQuery groupByAbundanceQuan() Group by the Abundance_Quan column
 * @method AbundanceQuery groupByAbundanceQuanunit() Group by the Abundance_QuanUnit column
 * @method AbundanceQuery groupByAbundanceSemiquan() Group by the Abundance_SemiQuan column
 * @method AbundanceQuery groupByAbundanceSemiquanunit() Group by the Abundance_SemiQuanUnit column
 * @method AbundanceQuery groupByAbundanceQual() Group by the Abundance_Qual column
 * @method AbundanceQuery groupByDepth() Group by the Depth column
 * @method AbundanceQuery groupByDepthunit() Group by the DepthUnit column
 * @method AbundanceQuery groupByYearOccur1() Group by the Year_Occur1 column
 * @method AbundanceQuery groupByYearOccur2() Group by the Year_Occur2 column
 * @method AbundanceQuery groupByDateOccur1() Group by the Date_Occur1 column
 * @method AbundanceQuery groupByDateOccur2() Group by the Date_Occur2 column
 * @method AbundanceQuery groupBySeasonal() Group by the Seasonal column
 * @method AbundanceQuery groupByPeriod() Group by the Period column
 * @method AbundanceQuery groupByRecordtype() Group by the RecordType column
 * @method AbundanceQuery groupByMethod() Group by the Method column
 * @method AbundanceQuery groupByRemarks() Group by the Remarks column
 * @method AbundanceQuery groupByInvasivereport() Group by the InvasiveReport column
 * @method AbundanceQuery groupByInvasivenessdegree() Group by the InvasivenessDegree column
 * @method AbundanceQuery groupByReporttype() Group by the ReportType column
 * @method AbundanceQuery groupByInvasiveref() Group by the InvasiveRef column
 * @method AbundanceQuery groupByEntered() Group by the Entered column
 * @method AbundanceQuery groupByDateentered() Group by the DateEntered column
 * @method AbundanceQuery groupByModified() Group by the Modified column
 * @method AbundanceQuery groupByDatemodified() Group by the DateModified column
 * @method AbundanceQuery groupByExpert() Group by the Expert column
 * @method AbundanceQuery groupByDatechecked() Group by the DateChecked column
 * @method AbundanceQuery groupByTs() Group by the TS column
 *
 * @method AbundanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AbundanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AbundanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Abundance findOne(PropelPDO $con = null) Return the first Abundance matching the query
 * @method Abundance findOneOrCreate(PropelPDO $con = null) Return the first Abundance matching the query, or a new Abundance object populated from the query conditions when no match is found
 *
 * @method Abundance findOneByAbundancecode(int $AbundanceCode) Return the first Abundance filtered by the AbundanceCode column
 * @method Abundance findOneByStockcode(int $StockCode) Return the first Abundance filtered by the StockCode column
 * @method Abundance findOneBySpeccode(int $SpecCode) Return the first Abundance filtered by the SpecCode column
 * @method Abundance findOneByMainref(int $MainRef) Return the first Abundance filtered by the MainRef column
 * @method Abundance findOneByLocality(string $Locality) Return the first Abundance filtered by the Locality column
 * @method Abundance findOneByCCode(string $C_Code) Return the first Abundance filtered by the C_Code column
 * @method Abundance findOneByECode(int $E_CODE) Return the first Abundance filtered by the E_CODE column
 * @method Abundance findOneByIntroduced(boolean $Introduced) Return the first Abundance filtered by the Introduced column
 * @method Abundance findOneByYearIntro(int $Year_intro) Return the first Abundance filtered by the Year_intro column
 * @method Abundance findOneByLifestage1(string $LifeStage1) Return the first Abundance filtered by the LifeStage1 column
 * @method Abundance findOneBySex(string $Sex) Return the first Abundance filtered by the Sex column
 * @method Abundance findOneByLifestage2(string $Lifestage2) Return the first Abundance filtered by the Lifestage2 column
 * @method Abundance findOneBySexual(boolean $Sexual) Return the first Abundance filtered by the Sexual column
 * @method Abundance findOneByAsexual(boolean $Asexual) Return the first Abundance filtered by the Asexual column
 * @method Abundance findOneByAbundanceQuan(double $Abundance_Quan) Return the first Abundance filtered by the Abundance_Quan column
 * @method Abundance findOneByAbundanceQuanunit(string $Abundance_QuanUnit) Return the first Abundance filtered by the Abundance_QuanUnit column
 * @method Abundance findOneByAbundanceSemiquan(string $Abundance_SemiQuan) Return the first Abundance filtered by the Abundance_SemiQuan column
 * @method Abundance findOneByAbundanceSemiquanunit(string $Abundance_SemiQuanUnit) Return the first Abundance filtered by the Abundance_SemiQuanUnit column
 * @method Abundance findOneByAbundanceQual(string $Abundance_Qual) Return the first Abundance filtered by the Abundance_Qual column
 * @method Abundance findOneByDepth(double $Depth) Return the first Abundance filtered by the Depth column
 * @method Abundance findOneByDepthunit(string $DepthUnit) Return the first Abundance filtered by the DepthUnit column
 * @method Abundance findOneByYearOccur1(int $Year_Occur1) Return the first Abundance filtered by the Year_Occur1 column
 * @method Abundance findOneByYearOccur2(int $Year_Occur2) Return the first Abundance filtered by the Year_Occur2 column
 * @method Abundance findOneByDateOccur1(string $Date_Occur1) Return the first Abundance filtered by the Date_Occur1 column
 * @method Abundance findOneByDateOccur2(string $Date_Occur2) Return the first Abundance filtered by the Date_Occur2 column
 * @method Abundance findOneBySeasonal(string $Seasonal) Return the first Abundance filtered by the Seasonal column
 * @method Abundance findOneByPeriod(string $Period) Return the first Abundance filtered by the Period column
 * @method Abundance findOneByRecordtype(string $RecordType) Return the first Abundance filtered by the RecordType column
 * @method Abundance findOneByMethod(string $Method) Return the first Abundance filtered by the Method column
 * @method Abundance findOneByRemarks(string $Remarks) Return the first Abundance filtered by the Remarks column
 * @method Abundance findOneByInvasivereport(string $InvasiveReport) Return the first Abundance filtered by the InvasiveReport column
 * @method Abundance findOneByInvasivenessdegree(string $InvasivenessDegree) Return the first Abundance filtered by the InvasivenessDegree column
 * @method Abundance findOneByReporttype(string $ReportType) Return the first Abundance filtered by the ReportType column
 * @method Abundance findOneByInvasiveref(int $InvasiveRef) Return the first Abundance filtered by the InvasiveRef column
 * @method Abundance findOneByEntered(int $Entered) Return the first Abundance filtered by the Entered column
 * @method Abundance findOneByDateentered(string $DateEntered) Return the first Abundance filtered by the DateEntered column
 * @method Abundance findOneByModified(int $Modified) Return the first Abundance filtered by the Modified column
 * @method Abundance findOneByDatemodified(string $DateModified) Return the first Abundance filtered by the DateModified column
 * @method Abundance findOneByExpert(int $Expert) Return the first Abundance filtered by the Expert column
 * @method Abundance findOneByDatechecked(string $DateChecked) Return the first Abundance filtered by the DateChecked column
 * @method Abundance findOneByTs(string $TS) Return the first Abundance filtered by the TS column
 *
 * @method array findByAbundancecode(int $AbundanceCode) Return Abundance objects filtered by the AbundanceCode column
 * @method array findByStockcode(int $StockCode) Return Abundance objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Abundance objects filtered by the SpecCode column
 * @method array findByMainref(int $MainRef) Return Abundance objects filtered by the MainRef column
 * @method array findByLocality(string $Locality) Return Abundance objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Abundance objects filtered by the C_Code column
 * @method array findByECode(int $E_CODE) Return Abundance objects filtered by the E_CODE column
 * @method array findByIntroduced(boolean $Introduced) Return Abundance objects filtered by the Introduced column
 * @method array findByYearIntro(int $Year_intro) Return Abundance objects filtered by the Year_intro column
 * @method array findByLifestage1(string $LifeStage1) Return Abundance objects filtered by the LifeStage1 column
 * @method array findBySex(string $Sex) Return Abundance objects filtered by the Sex column
 * @method array findByLifestage2(string $Lifestage2) Return Abundance objects filtered by the Lifestage2 column
 * @method array findBySexual(boolean $Sexual) Return Abundance objects filtered by the Sexual column
 * @method array findByAsexual(boolean $Asexual) Return Abundance objects filtered by the Asexual column
 * @method array findByAbundanceQuan(double $Abundance_Quan) Return Abundance objects filtered by the Abundance_Quan column
 * @method array findByAbundanceQuanunit(string $Abundance_QuanUnit) Return Abundance objects filtered by the Abundance_QuanUnit column
 * @method array findByAbundanceSemiquan(string $Abundance_SemiQuan) Return Abundance objects filtered by the Abundance_SemiQuan column
 * @method array findByAbundanceSemiquanunit(string $Abundance_SemiQuanUnit) Return Abundance objects filtered by the Abundance_SemiQuanUnit column
 * @method array findByAbundanceQual(string $Abundance_Qual) Return Abundance objects filtered by the Abundance_Qual column
 * @method array findByDepth(double $Depth) Return Abundance objects filtered by the Depth column
 * @method array findByDepthunit(string $DepthUnit) Return Abundance objects filtered by the DepthUnit column
 * @method array findByYearOccur1(int $Year_Occur1) Return Abundance objects filtered by the Year_Occur1 column
 * @method array findByYearOccur2(int $Year_Occur2) Return Abundance objects filtered by the Year_Occur2 column
 * @method array findByDateOccur1(string $Date_Occur1) Return Abundance objects filtered by the Date_Occur1 column
 * @method array findByDateOccur2(string $Date_Occur2) Return Abundance objects filtered by the Date_Occur2 column
 * @method array findBySeasonal(string $Seasonal) Return Abundance objects filtered by the Seasonal column
 * @method array findByPeriod(string $Period) Return Abundance objects filtered by the Period column
 * @method array findByRecordtype(string $RecordType) Return Abundance objects filtered by the RecordType column
 * @method array findByMethod(string $Method) Return Abundance objects filtered by the Method column
 * @method array findByRemarks(string $Remarks) Return Abundance objects filtered by the Remarks column
 * @method array findByInvasivereport(string $InvasiveReport) Return Abundance objects filtered by the InvasiveReport column
 * @method array findByInvasivenessdegree(string $InvasivenessDegree) Return Abundance objects filtered by the InvasivenessDegree column
 * @method array findByReporttype(string $ReportType) Return Abundance objects filtered by the ReportType column
 * @method array findByInvasiveref(int $InvasiveRef) Return Abundance objects filtered by the InvasiveRef column
 * @method array findByEntered(int $Entered) Return Abundance objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Abundance objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Abundance objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Abundance objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Abundance objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Abundance objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Abundance objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAbundanceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAbundanceQuery object.
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
            $modelName = 'Abundance';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AbundanceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AbundanceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AbundanceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AbundanceQuery) {
            return $criteria;
        }
        $query = new AbundanceQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$StockCode, $SpecCode, $Locality, $C_Code, $LifeStage1, $Date_Occur1, $Date_Occur2]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Abundance|Abundance[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AbundancePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Abundance A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AbundanceCode`, `StockCode`, `SpecCode`, `MainRef`, `Locality`, `C_Code`, `E_CODE`, `Introduced`, `Year_intro`, `LifeStage1`, `Sex`, `Lifestage2`, `Sexual`, `Asexual`, `Abundance_Quan`, `Abundance_QuanUnit`, `Abundance_SemiQuan`, `Abundance_SemiQuanUnit`, `Abundance_Qual`, `Depth`, `DepthUnit`, `Year_Occur1`, `Year_Occur2`, `Date_Occur1`, `Date_Occur2`, `Seasonal`, `Period`, `RecordType`, `Method`, `Remarks`, `InvasiveReport`, `InvasivenessDegree`, `ReportType`, `InvasiveRef`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `abundance` WHERE `StockCode` = :p0 AND `SpecCode` = :p1 AND `Locality` = :p2 AND `C_Code` = :p3 AND `LifeStage1` = :p4 AND `Date_Occur1` = :p5 AND `Date_Occur2` = :p6';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Abundance();
            $obj->hydrate($row);
            AbundancePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6])));
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
     * @return Abundance|Abundance[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Abundance[]|mixed the list of results, formatted by the current formatter
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
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(AbundancePeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(AbundancePeer::SPECCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(AbundancePeer::LOCALITY, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(AbundancePeer::C_CODE, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(AbundancePeer::LIFESTAGE1, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(AbundancePeer::DATE_OCCUR1, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(AbundancePeer::DATE_OCCUR2, $key[6], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(AbundancePeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(AbundancePeer::SPECCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(AbundancePeer::LOCALITY, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(AbundancePeer::C_CODE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(AbundancePeer::LIFESTAGE1, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(AbundancePeer::DATE_OCCUR1, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(AbundancePeer::DATE_OCCUR2, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the AbundanceCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundancecode(1234); // WHERE AbundanceCode = 1234
     * $query->filterByAbundancecode(array(12, 34)); // WHERE AbundanceCode IN (12, 34)
     * $query->filterByAbundancecode(array('min' => 12)); // WHERE AbundanceCode >= 12
     * $query->filterByAbundancecode(array('max' => 12)); // WHERE AbundanceCode <= 12
     * </code>
     *
     * @param     mixed $abundancecode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByAbundancecode($abundancecode = null, $comparison = null)
    {
        if (is_array($abundancecode)) {
            $useMinMax = false;
            if (isset($abundancecode['min'])) {
                $this->addUsingAlias(AbundancePeer::ABUNDANCECODE, $abundancecode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abundancecode['max'])) {
                $this->addUsingAlias(AbundancePeer::ABUNDANCECODE, $abundancecode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::ABUNDANCECODE, $abundancecode, $comparison);
    }

    /**
     * Filter the query on the StockCode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE StockCode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE StockCode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE StockCode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE StockCode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(AbundancePeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(AbundancePeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the SpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE SpecCode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE SpecCode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE SpecCode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE SpecCode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(AbundancePeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(AbundancePeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the MainRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMainref(1234); // WHERE MainRef = 1234
     * $query->filterByMainref(array(12, 34)); // WHERE MainRef IN (12, 34)
     * $query->filterByMainref(array('min' => 12)); // WHERE MainRef >= 12
     * $query->filterByMainref(array('max' => 12)); // WHERE MainRef <= 12
     * </code>
     *
     * @param     mixed $mainref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByMainref($mainref = null, $comparison = null)
    {
        if (is_array($mainref)) {
            $useMinMax = false;
            if (isset($mainref['min'])) {
                $this->addUsingAlias(AbundancePeer::MAINREF, $mainref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mainref['max'])) {
                $this->addUsingAlias(AbundancePeer::MAINREF, $mainref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::MAINREF, $mainref, $comparison);
    }

    /**
     * Filter the query on the Locality column
     *
     * Example usage:
     * <code>
     * $query->filterByLocality('fooValue');   // WHERE Locality = 'fooValue'
     * $query->filterByLocality('%fooValue%'); // WHERE Locality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByLocality($locality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locality)) {
                $locality = str_replace('*', '%', $locality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::LOCALITY, $locality, $comparison);
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
     * @return AbundanceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AbundancePeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the E_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByECode(1234); // WHERE E_CODE = 1234
     * $query->filterByECode(array(12, 34)); // WHERE E_CODE IN (12, 34)
     * $query->filterByECode(array('min' => 12)); // WHERE E_CODE >= 12
     * $query->filterByECode(array('max' => 12)); // WHERE E_CODE <= 12
     * </code>
     *
     * @param     mixed $eCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(AbundancePeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(AbundancePeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::E_CODE, $eCode, $comparison);
    }

    /**
     * Filter the query on the Introduced column
     *
     * Example usage:
     * <code>
     * $query->filterByIntroduced(true); // WHERE Introduced = true
     * $query->filterByIntroduced('yes'); // WHERE Introduced = true
     * </code>
     *
     * @param     boolean|string $introduced The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByIntroduced($introduced = null, $comparison = null)
    {
        if (is_string($introduced)) {
            $introduced = in_array(strtolower($introduced), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(AbundancePeer::INTRODUCED, $introduced, $comparison);
    }

    /**
     * Filter the query on the Year_intro column
     *
     * Example usage:
     * <code>
     * $query->filterByYearIntro(1234); // WHERE Year_intro = 1234
     * $query->filterByYearIntro(array(12, 34)); // WHERE Year_intro IN (12, 34)
     * $query->filterByYearIntro(array('min' => 12)); // WHERE Year_intro >= 12
     * $query->filterByYearIntro(array('max' => 12)); // WHERE Year_intro <= 12
     * </code>
     *
     * @param     mixed $yearIntro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByYearIntro($yearIntro = null, $comparison = null)
    {
        if (is_array($yearIntro)) {
            $useMinMax = false;
            if (isset($yearIntro['min'])) {
                $this->addUsingAlias(AbundancePeer::YEAR_INTRO, $yearIntro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearIntro['max'])) {
                $this->addUsingAlias(AbundancePeer::YEAR_INTRO, $yearIntro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::YEAR_INTRO, $yearIntro, $comparison);
    }

    /**
     * Filter the query on the LifeStage1 column
     *
     * Example usage:
     * <code>
     * $query->filterByLifestage1('fooValue');   // WHERE LifeStage1 = 'fooValue'
     * $query->filterByLifestage1('%fooValue%'); // WHERE LifeStage1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lifestage1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByLifestage1($lifestage1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lifestage1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lifestage1)) {
                $lifestage1 = str_replace('*', '%', $lifestage1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::LIFESTAGE1, $lifestage1, $comparison);
    }

    /**
     * Filter the query on the Sex column
     *
     * Example usage:
     * <code>
     * $query->filterBySex('fooValue');   // WHERE Sex = 'fooValue'
     * $query->filterBySex('%fooValue%'); // WHERE Sex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterBySex($sex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sex)) {
                $sex = str_replace('*', '%', $sex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the Lifestage2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLifestage2('fooValue');   // WHERE Lifestage2 = 'fooValue'
     * $query->filterByLifestage2('%fooValue%'); // WHERE Lifestage2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lifestage2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByLifestage2($lifestage2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lifestage2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lifestage2)) {
                $lifestage2 = str_replace('*', '%', $lifestage2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::LIFESTAGE2, $lifestage2, $comparison);
    }

    /**
     * Filter the query on the Sexual column
     *
     * Example usage:
     * <code>
     * $query->filterBySexual(true); // WHERE Sexual = true
     * $query->filterBySexual('yes'); // WHERE Sexual = true
     * </code>
     *
     * @param     boolean|string $sexual The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterBySexual($sexual = null, $comparison = null)
    {
        if (is_string($sexual)) {
            $sexual = in_array(strtolower($sexual), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(AbundancePeer::SEXUAL, $sexual, $comparison);
    }

    /**
     * Filter the query on the Asexual column
     *
     * Example usage:
     * <code>
     * $query->filterByAsexual(true); // WHERE Asexual = true
     * $query->filterByAsexual('yes'); // WHERE Asexual = true
     * </code>
     *
     * @param     boolean|string $asexual The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByAsexual($asexual = null, $comparison = null)
    {
        if (is_string($asexual)) {
            $asexual = in_array(strtolower($asexual), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(AbundancePeer::ASEXUAL, $asexual, $comparison);
    }

    /**
     * Filter the query on the Abundance_Quan column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundanceQuan(1234); // WHERE Abundance_Quan = 1234
     * $query->filterByAbundanceQuan(array(12, 34)); // WHERE Abundance_Quan IN (12, 34)
     * $query->filterByAbundanceQuan(array('min' => 12)); // WHERE Abundance_Quan >= 12
     * $query->filterByAbundanceQuan(array('max' => 12)); // WHERE Abundance_Quan <= 12
     * </code>
     *
     * @param     mixed $abundanceQuan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByAbundanceQuan($abundanceQuan = null, $comparison = null)
    {
        if (is_array($abundanceQuan)) {
            $useMinMax = false;
            if (isset($abundanceQuan['min'])) {
                $this->addUsingAlias(AbundancePeer::ABUNDANCE_QUAN, $abundanceQuan['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abundanceQuan['max'])) {
                $this->addUsingAlias(AbundancePeer::ABUNDANCE_QUAN, $abundanceQuan['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::ABUNDANCE_QUAN, $abundanceQuan, $comparison);
    }

    /**
     * Filter the query on the Abundance_QuanUnit column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundanceQuanunit('fooValue');   // WHERE Abundance_QuanUnit = 'fooValue'
     * $query->filterByAbundanceQuanunit('%fooValue%'); // WHERE Abundance_QuanUnit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abundanceQuanunit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByAbundanceQuanunit($abundanceQuanunit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abundanceQuanunit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abundanceQuanunit)) {
                $abundanceQuanunit = str_replace('*', '%', $abundanceQuanunit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::ABUNDANCE_QUANUNIT, $abundanceQuanunit, $comparison);
    }

    /**
     * Filter the query on the Abundance_SemiQuan column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundanceSemiquan('fooValue');   // WHERE Abundance_SemiQuan = 'fooValue'
     * $query->filterByAbundanceSemiquan('%fooValue%'); // WHERE Abundance_SemiQuan LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abundanceSemiquan The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByAbundanceSemiquan($abundanceSemiquan = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abundanceSemiquan)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abundanceSemiquan)) {
                $abundanceSemiquan = str_replace('*', '%', $abundanceSemiquan);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::ABUNDANCE_SEMIQUAN, $abundanceSemiquan, $comparison);
    }

    /**
     * Filter the query on the Abundance_SemiQuanUnit column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundanceSemiquanunit('fooValue');   // WHERE Abundance_SemiQuanUnit = 'fooValue'
     * $query->filterByAbundanceSemiquanunit('%fooValue%'); // WHERE Abundance_SemiQuanUnit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abundanceSemiquanunit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByAbundanceSemiquanunit($abundanceSemiquanunit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abundanceSemiquanunit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abundanceSemiquanunit)) {
                $abundanceSemiquanunit = str_replace('*', '%', $abundanceSemiquanunit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::ABUNDANCE_SEMIQUANUNIT, $abundanceSemiquanunit, $comparison);
    }

    /**
     * Filter the query on the Abundance_Qual column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundanceQual('fooValue');   // WHERE Abundance_Qual = 'fooValue'
     * $query->filterByAbundanceQual('%fooValue%'); // WHERE Abundance_Qual LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abundanceQual The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByAbundanceQual($abundanceQual = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abundanceQual)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abundanceQual)) {
                $abundanceQual = str_replace('*', '%', $abundanceQual);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::ABUNDANCE_QUAL, $abundanceQual, $comparison);
    }

    /**
     * Filter the query on the Depth column
     *
     * Example usage:
     * <code>
     * $query->filterByDepth(1234); // WHERE Depth = 1234
     * $query->filterByDepth(array(12, 34)); // WHERE Depth IN (12, 34)
     * $query->filterByDepth(array('min' => 12)); // WHERE Depth >= 12
     * $query->filterByDepth(array('max' => 12)); // WHERE Depth <= 12
     * </code>
     *
     * @param     mixed $depth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByDepth($depth = null, $comparison = null)
    {
        if (is_array($depth)) {
            $useMinMax = false;
            if (isset($depth['min'])) {
                $this->addUsingAlias(AbundancePeer::DEPTH, $depth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depth['max'])) {
                $this->addUsingAlias(AbundancePeer::DEPTH, $depth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::DEPTH, $depth, $comparison);
    }

    /**
     * Filter the query on the DepthUnit column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthunit('fooValue');   // WHERE DepthUnit = 'fooValue'
     * $query->filterByDepthunit('%fooValue%'); // WHERE DepthUnit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depthunit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByDepthunit($depthunit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depthunit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depthunit)) {
                $depthunit = str_replace('*', '%', $depthunit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::DEPTHUNIT, $depthunit, $comparison);
    }

    /**
     * Filter the query on the Year_Occur1 column
     *
     * Example usage:
     * <code>
     * $query->filterByYearOccur1(1234); // WHERE Year_Occur1 = 1234
     * $query->filterByYearOccur1(array(12, 34)); // WHERE Year_Occur1 IN (12, 34)
     * $query->filterByYearOccur1(array('min' => 12)); // WHERE Year_Occur1 >= 12
     * $query->filterByYearOccur1(array('max' => 12)); // WHERE Year_Occur1 <= 12
     * </code>
     *
     * @param     mixed $yearOccur1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByYearOccur1($yearOccur1 = null, $comparison = null)
    {
        if (is_array($yearOccur1)) {
            $useMinMax = false;
            if (isset($yearOccur1['min'])) {
                $this->addUsingAlias(AbundancePeer::YEAR_OCCUR1, $yearOccur1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearOccur1['max'])) {
                $this->addUsingAlias(AbundancePeer::YEAR_OCCUR1, $yearOccur1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::YEAR_OCCUR1, $yearOccur1, $comparison);
    }

    /**
     * Filter the query on the Year_Occur2 column
     *
     * Example usage:
     * <code>
     * $query->filterByYearOccur2(1234); // WHERE Year_Occur2 = 1234
     * $query->filterByYearOccur2(array(12, 34)); // WHERE Year_Occur2 IN (12, 34)
     * $query->filterByYearOccur2(array('min' => 12)); // WHERE Year_Occur2 >= 12
     * $query->filterByYearOccur2(array('max' => 12)); // WHERE Year_Occur2 <= 12
     * </code>
     *
     * @param     mixed $yearOccur2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByYearOccur2($yearOccur2 = null, $comparison = null)
    {
        if (is_array($yearOccur2)) {
            $useMinMax = false;
            if (isset($yearOccur2['min'])) {
                $this->addUsingAlias(AbundancePeer::YEAR_OCCUR2, $yearOccur2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearOccur2['max'])) {
                $this->addUsingAlias(AbundancePeer::YEAR_OCCUR2, $yearOccur2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::YEAR_OCCUR2, $yearOccur2, $comparison);
    }

    /**
     * Filter the query on the Date_Occur1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateOccur1('fooValue');   // WHERE Date_Occur1 = 'fooValue'
     * $query->filterByDateOccur1('%fooValue%'); // WHERE Date_Occur1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateOccur1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByDateOccur1($dateOccur1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateOccur1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateOccur1)) {
                $dateOccur1 = str_replace('*', '%', $dateOccur1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::DATE_OCCUR1, $dateOccur1, $comparison);
    }

    /**
     * Filter the query on the Date_Occur2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateOccur2('fooValue');   // WHERE Date_Occur2 = 'fooValue'
     * $query->filterByDateOccur2('%fooValue%'); // WHERE Date_Occur2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateOccur2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByDateOccur2($dateOccur2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateOccur2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateOccur2)) {
                $dateOccur2 = str_replace('*', '%', $dateOccur2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::DATE_OCCUR2, $dateOccur2, $comparison);
    }

    /**
     * Filter the query on the Seasonal column
     *
     * Example usage:
     * <code>
     * $query->filterBySeasonal('fooValue');   // WHERE Seasonal = 'fooValue'
     * $query->filterBySeasonal('%fooValue%'); // WHERE Seasonal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $seasonal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterBySeasonal($seasonal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($seasonal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $seasonal)) {
                $seasonal = str_replace('*', '%', $seasonal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::SEASONAL, $seasonal, $comparison);
    }

    /**
     * Filter the query on the Period column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriod('fooValue');   // WHERE Period = 'fooValue'
     * $query->filterByPeriod('%fooValue%'); // WHERE Period LIKE '%fooValue%'
     * </code>
     *
     * @param     string $period The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByPeriod($period = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($period)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $period)) {
                $period = str_replace('*', '%', $period);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::PERIOD, $period, $comparison);
    }

    /**
     * Filter the query on the RecordType column
     *
     * Example usage:
     * <code>
     * $query->filterByRecordtype('fooValue');   // WHERE RecordType = 'fooValue'
     * $query->filterByRecordtype('%fooValue%'); // WHERE RecordType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recordtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByRecordtype($recordtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recordtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $recordtype)) {
                $recordtype = str_replace('*', '%', $recordtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::RECORDTYPE, $recordtype, $comparison);
    }

    /**
     * Filter the query on the Method column
     *
     * Example usage:
     * <code>
     * $query->filterByMethod('fooValue');   // WHERE Method = 'fooValue'
     * $query->filterByMethod('%fooValue%'); // WHERE Method LIKE '%fooValue%'
     * </code>
     *
     * @param     string $method The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByMethod($method = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($method)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $method)) {
                $method = str_replace('*', '%', $method);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::METHOD, $method, $comparison);
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
     * @return AbundanceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AbundancePeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the InvasiveReport column
     *
     * Example usage:
     * <code>
     * $query->filterByInvasivereport('fooValue');   // WHERE InvasiveReport = 'fooValue'
     * $query->filterByInvasivereport('%fooValue%'); // WHERE InvasiveReport LIKE '%fooValue%'
     * </code>
     *
     * @param     string $invasivereport The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByInvasivereport($invasivereport = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($invasivereport)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $invasivereport)) {
                $invasivereport = str_replace('*', '%', $invasivereport);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::INVASIVEREPORT, $invasivereport, $comparison);
    }

    /**
     * Filter the query on the InvasivenessDegree column
     *
     * Example usage:
     * <code>
     * $query->filterByInvasivenessdegree('fooValue');   // WHERE InvasivenessDegree = 'fooValue'
     * $query->filterByInvasivenessdegree('%fooValue%'); // WHERE InvasivenessDegree LIKE '%fooValue%'
     * </code>
     *
     * @param     string $invasivenessdegree The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByInvasivenessdegree($invasivenessdegree = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($invasivenessdegree)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $invasivenessdegree)) {
                $invasivenessdegree = str_replace('*', '%', $invasivenessdegree);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::INVASIVENESSDEGREE, $invasivenessdegree, $comparison);
    }

    /**
     * Filter the query on the ReportType column
     *
     * Example usage:
     * <code>
     * $query->filterByReporttype('fooValue');   // WHERE ReportType = 'fooValue'
     * $query->filterByReporttype('%fooValue%'); // WHERE ReportType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reporttype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByReporttype($reporttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reporttype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reporttype)) {
                $reporttype = str_replace('*', '%', $reporttype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::REPORTTYPE, $reporttype, $comparison);
    }

    /**
     * Filter the query on the InvasiveRef column
     *
     * Example usage:
     * <code>
     * $query->filterByInvasiveref(1234); // WHERE InvasiveRef = 1234
     * $query->filterByInvasiveref(array(12, 34)); // WHERE InvasiveRef IN (12, 34)
     * $query->filterByInvasiveref(array('min' => 12)); // WHERE InvasiveRef >= 12
     * $query->filterByInvasiveref(array('max' => 12)); // WHERE InvasiveRef <= 12
     * </code>
     *
     * @param     mixed $invasiveref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByInvasiveref($invasiveref = null, $comparison = null)
    {
        if (is_array($invasiveref)) {
            $useMinMax = false;
            if (isset($invasiveref['min'])) {
                $this->addUsingAlias(AbundancePeer::INVASIVEREF, $invasiveref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invasiveref['max'])) {
                $this->addUsingAlias(AbundancePeer::INVASIVEREF, $invasiveref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::INVASIVEREF, $invasiveref, $comparison);
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
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(AbundancePeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(AbundancePeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('fooValue');   // WHERE DateEntered = 'fooValue'
     * $query->filterByDateentered('%fooValue%'); // WHERE DateEntered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateentered The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateentered)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateentered)) {
                $dateentered = str_replace('*', '%', $dateentered);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::DATEENTERED, $dateentered, $comparison);
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
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(AbundancePeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(AbundancePeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('fooValue');   // WHERE DateModified = 'fooValue'
     * $query->filterByDatemodified('%fooValue%'); // WHERE DateModified LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datemodified The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datemodified)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datemodified)) {
                $datemodified = str_replace('*', '%', $datemodified);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert(1234); // WHERE Expert = 1234
     * $query->filterByExpert(array(12, 34)); // WHERE Expert IN (12, 34)
     * $query->filterByExpert(array('min' => 12)); // WHERE Expert >= 12
     * $query->filterByExpert(array('max' => 12)); // WHERE Expert <= 12
     * </code>
     *
     * @param     mixed $expert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(AbundancePeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(AbundancePeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('fooValue');   // WHERE DateChecked = 'fooValue'
     * $query->filterByDatechecked('%fooValue%'); // WHERE DateChecked LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datechecked The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datechecked)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datechecked)) {
                $datechecked = str_replace('*', '%', $datechecked);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbundancePeer::DATECHECKED, $datechecked, $comparison);
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
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(AbundancePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(AbundancePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbundancePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Abundance $abundance Object to remove from the list of results
     *
     * @return AbundanceQuery The current query, for fluid interface
     */
    public function prune($abundance = null)
    {
        if ($abundance) {
            $this->addCond('pruneCond0', $this->getAliasedColName(AbundancePeer::STOCKCODE), $abundance->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(AbundancePeer::SPECCODE), $abundance->getSpeccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(AbundancePeer::LOCALITY), $abundance->getLocality(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(AbundancePeer::C_CODE), $abundance->getCCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(AbundancePeer::LIFESTAGE1), $abundance->getLifestage1(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(AbundancePeer::DATE_OCCUR1), $abundance->getDateOccur1(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(AbundancePeer::DATE_OCCUR2), $abundance->getDateOccur2(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
