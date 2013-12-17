<?php


/**
 * Base class that represents a query for the 'picturesmain' table.
 *
 *
 *
 * @method PicturesmainQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method PicturesmainQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method PicturesmainQuery orderByPicgenus($order = Criteria::ASC) Order by the PicGenus column
 * @method PicturesmainQuery orderByPicspecies($order = Criteria::ASC) Order by the PicSpecies column
 * @method PicturesmainQuery orderBySyncode($order = Criteria::ASC) Order by the Syncode column
 * @method PicturesmainQuery orderByPicname($order = Criteria::ASC) Order by the PicName column
 * @method PicturesmainQuery orderByScanned($order = Criteria::ASC) Order by the Scanned column
 * @method PicturesmainQuery orderByPicturetype($order = Criteria::ASC) Order by the PictureType column
 * @method PicturesmainQuery orderByPictype($order = Criteria::ASC) Order by the PicType column
 * @method PicturesmainQuery orderByRank($order = Criteria::ASC) Order by the Rank column
 * @method PicturesmainQuery orderByBestpic($order = Criteria::ASC) Order by the BestPic column
 * @method PicturesmainQuery orderByScore($order = Criteria::ASC) Order by the Score column
 * @method PicturesmainQuery orderByOccurrence($order = Criteria::ASC) Order by the Occurrence column
 * @method PicturesmainQuery orderByCdrom($order = Criteria::ASC) Order by the CDROM column
 * @method PicturesmainQuery orderByLifestage($order = Criteria::ASC) Order by the LifeStage column
 * @method PicturesmainQuery orderBySize($order = Criteria::ASC) Order by the Size column
 * @method PicturesmainQuery orderByLengthtype($order = Criteria::ASC) Order by the LengthType column
 * @method PicturesmainQuery orderBySize2($order = Criteria::ASC) Order by the Size2 column
 * @method PicturesmainQuery orderByLenghttype2($order = Criteria::ASC) Order by the LenghtType2 column
 * @method PicturesmainQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method PicturesmainQuery orderByProvince($order = Criteria::ASC) Order by the Province column
 * @method PicturesmainQuery orderByLatdeg($order = Criteria::ASC) Order by the LatDeg column
 * @method PicturesmainQuery orderByLatmin($order = Criteria::ASC) Order by the LatMin column
 * @method PicturesmainQuery orderByNorthsouth($order = Criteria::ASC) Order by the NorthSouth column
 * @method PicturesmainQuery orderByLongdeg($order = Criteria::ASC) Order by the LongDeg column
 * @method PicturesmainQuery orderByLongmin($order = Criteria::ASC) Order by the LongMin column
 * @method PicturesmainQuery orderByEastwest($order = Criteria::ASC) Order by the EastWest column
 * @method PicturesmainQuery orderByDepth($order = Criteria::ASC) Order by the Depth column
 * @method PicturesmainQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method PicturesmainQuery orderByDate($order = Criteria::ASC) Order by the Date column
 * @method PicturesmainQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method PicturesmainQuery orderByAuthname($order = Criteria::ASC) Order by the AuthName column
 * @method PicturesmainQuery orderByReference($order = Criteria::ASC) Order by the Reference column
 * @method PicturesmainQuery orderByPagecode($order = Criteria::ASC) Order by the PageCode column
 * @method PicturesmainQuery orderByUrl($order = Criteria::ASC) Order by the URL column
 * @method PicturesmainQuery orderByLogofile($order = Criteria::ASC) Order by the LogoFile column
 * @method PicturesmainQuery orderByCopyright($order = Criteria::ASC) Order by the Copyright column
 * @method PicturesmainQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method PicturesmainQuery orderByPublicdomain($order = Criteria::ASC) Order by the PublicDomain column
 * @method PicturesmainQuery orderByNewpic($order = Criteria::ASC) Order by the NewPic column
 * @method PicturesmainQuery orderByPicpreferred($order = Criteria::ASC) Order by the PicPreferred column
 * @method PicturesmainQuery orderByPicpreferredmale($order = Criteria::ASC) Order by the PicPreferredMale column
 * @method PicturesmainQuery orderByPicpreferredfem($order = Criteria::ASC) Order by the PicPreferredFem column
 * @method PicturesmainQuery orderByPicpreferredjuv($order = Criteria::ASC) Order by the PicPreferredJuv column
 * @method PicturesmainQuery orderByEol($order = Criteria::ASC) Order by the EOL column
 * @method PicturesmainQuery orderByTaxo($order = Criteria::ASC) Order by the Taxo column
 * @method PicturesmainQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method PicturesmainQuery orderByDateentered($order = Criteria::ASC) Order by the Dateentered column
 * @method PicturesmainQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method PicturesmainQuery orderByDatemodified($order = Criteria::ASC) Order by the Datemodified column
 * @method PicturesmainQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method PicturesmainQuery orderByDatechecked($order = Criteria::ASC) Order by the Datechecked column
 * @method PicturesmainQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PicturesmainQuery groupByAutoctr() Group by the autoctr column
 * @method PicturesmainQuery groupBySpeccode() Group by the SpecCode column
 * @method PicturesmainQuery groupByPicgenus() Group by the PicGenus column
 * @method PicturesmainQuery groupByPicspecies() Group by the PicSpecies column
 * @method PicturesmainQuery groupBySyncode() Group by the Syncode column
 * @method PicturesmainQuery groupByPicname() Group by the PicName column
 * @method PicturesmainQuery groupByScanned() Group by the Scanned column
 * @method PicturesmainQuery groupByPicturetype() Group by the PictureType column
 * @method PicturesmainQuery groupByPictype() Group by the PicType column
 * @method PicturesmainQuery groupByRank() Group by the Rank column
 * @method PicturesmainQuery groupByBestpic() Group by the BestPic column
 * @method PicturesmainQuery groupByScore() Group by the Score column
 * @method PicturesmainQuery groupByOccurrence() Group by the Occurrence column
 * @method PicturesmainQuery groupByCdrom() Group by the CDROM column
 * @method PicturesmainQuery groupByLifestage() Group by the LifeStage column
 * @method PicturesmainQuery groupBySize() Group by the Size column
 * @method PicturesmainQuery groupByLengthtype() Group by the LengthType column
 * @method PicturesmainQuery groupBySize2() Group by the Size2 column
 * @method PicturesmainQuery groupByLenghttype2() Group by the LenghtType2 column
 * @method PicturesmainQuery groupByLocality() Group by the Locality column
 * @method PicturesmainQuery groupByProvince() Group by the Province column
 * @method PicturesmainQuery groupByLatdeg() Group by the LatDeg column
 * @method PicturesmainQuery groupByLatmin() Group by the LatMin column
 * @method PicturesmainQuery groupByNorthsouth() Group by the NorthSouth column
 * @method PicturesmainQuery groupByLongdeg() Group by the LongDeg column
 * @method PicturesmainQuery groupByLongmin() Group by the LongMin column
 * @method PicturesmainQuery groupByEastwest() Group by the EastWest column
 * @method PicturesmainQuery groupByDepth() Group by the Depth column
 * @method PicturesmainQuery groupByRemark() Group by the Remark column
 * @method PicturesmainQuery groupByDate() Group by the Date column
 * @method PicturesmainQuery groupByCCode() Group by the C_Code column
 * @method PicturesmainQuery groupByAuthname() Group by the AuthName column
 * @method PicturesmainQuery groupByReference() Group by the Reference column
 * @method PicturesmainQuery groupByPagecode() Group by the PageCode column
 * @method PicturesmainQuery groupByUrl() Group by the URL column
 * @method PicturesmainQuery groupByLogofile() Group by the LogoFile column
 * @method PicturesmainQuery groupByCopyright() Group by the Copyright column
 * @method PicturesmainQuery groupByComment() Group by the Comment column
 * @method PicturesmainQuery groupByPublicdomain() Group by the PublicDomain column
 * @method PicturesmainQuery groupByNewpic() Group by the NewPic column
 * @method PicturesmainQuery groupByPicpreferred() Group by the PicPreferred column
 * @method PicturesmainQuery groupByPicpreferredmale() Group by the PicPreferredMale column
 * @method PicturesmainQuery groupByPicpreferredfem() Group by the PicPreferredFem column
 * @method PicturesmainQuery groupByPicpreferredjuv() Group by the PicPreferredJuv column
 * @method PicturesmainQuery groupByEol() Group by the EOL column
 * @method PicturesmainQuery groupByTaxo() Group by the Taxo column
 * @method PicturesmainQuery groupByEntered() Group by the Entered column
 * @method PicturesmainQuery groupByDateentered() Group by the Dateentered column
 * @method PicturesmainQuery groupByModified() Group by the Modified column
 * @method PicturesmainQuery groupByDatemodified() Group by the Datemodified column
 * @method PicturesmainQuery groupByExpert() Group by the Expert column
 * @method PicturesmainQuery groupByDatechecked() Group by the Datechecked column
 * @method PicturesmainQuery groupByTs() Group by the TS column
 *
 * @method PicturesmainQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PicturesmainQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PicturesmainQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Picturesmain findOne(PropelPDO $con = null) Return the first Picturesmain matching the query
 * @method Picturesmain findOneOrCreate(PropelPDO $con = null) Return the first Picturesmain matching the query, or a new Picturesmain object populated from the query conditions when no match is found
 *
 * @method Picturesmain findOneBySpeccode(int $SpecCode) Return the first Picturesmain filtered by the SpecCode column
 * @method Picturesmain findOneByPicgenus(string $PicGenus) Return the first Picturesmain filtered by the PicGenus column
 * @method Picturesmain findOneByPicspecies(string $PicSpecies) Return the first Picturesmain filtered by the PicSpecies column
 * @method Picturesmain findOneBySyncode(int $Syncode) Return the first Picturesmain filtered by the Syncode column
 * @method Picturesmain findOneByPicname(string $PicName) Return the first Picturesmain filtered by the PicName column
 * @method Picturesmain findOneByScanned(int $Scanned) Return the first Picturesmain filtered by the Scanned column
 * @method Picturesmain findOneByPicturetype(string $PictureType) Return the first Picturesmain filtered by the PictureType column
 * @method Picturesmain findOneByPictype(string $PicType) Return the first Picturesmain filtered by the PicType column
 * @method Picturesmain findOneByRank(int $Rank) Return the first Picturesmain filtered by the Rank column
 * @method Picturesmain findOneByBestpic(int $BestPic) Return the first Picturesmain filtered by the BestPic column
 * @method Picturesmain findOneByScore(int $Score) Return the first Picturesmain filtered by the Score column
 * @method Picturesmain findOneByOccurrence(int $Occurrence) Return the first Picturesmain filtered by the Occurrence column
 * @method Picturesmain findOneByCdrom(int $CDROM) Return the first Picturesmain filtered by the CDROM column
 * @method Picturesmain findOneByLifestage(string $LifeStage) Return the first Picturesmain filtered by the LifeStage column
 * @method Picturesmain findOneBySize(double $Size) Return the first Picturesmain filtered by the Size column
 * @method Picturesmain findOneByLengthtype(string $LengthType) Return the first Picturesmain filtered by the LengthType column
 * @method Picturesmain findOneBySize2(double $Size2) Return the first Picturesmain filtered by the Size2 column
 * @method Picturesmain findOneByLenghttype2(string $LenghtType2) Return the first Picturesmain filtered by the LenghtType2 column
 * @method Picturesmain findOneByLocality(string $Locality) Return the first Picturesmain filtered by the Locality column
 * @method Picturesmain findOneByProvince(string $Province) Return the first Picturesmain filtered by the Province column
 * @method Picturesmain findOneByLatdeg(int $LatDeg) Return the first Picturesmain filtered by the LatDeg column
 * @method Picturesmain findOneByLatmin(double $LatMin) Return the first Picturesmain filtered by the LatMin column
 * @method Picturesmain findOneByNorthsouth(string $NorthSouth) Return the first Picturesmain filtered by the NorthSouth column
 * @method Picturesmain findOneByLongdeg(int $LongDeg) Return the first Picturesmain filtered by the LongDeg column
 * @method Picturesmain findOneByLongmin(double $LongMin) Return the first Picturesmain filtered by the LongMin column
 * @method Picturesmain findOneByEastwest(string $EastWest) Return the first Picturesmain filtered by the EastWest column
 * @method Picturesmain findOneByDepth(double $Depth) Return the first Picturesmain filtered by the Depth column
 * @method Picturesmain findOneByRemark(string $Remark) Return the first Picturesmain filtered by the Remark column
 * @method Picturesmain findOneByDate(string $Date) Return the first Picturesmain filtered by the Date column
 * @method Picturesmain findOneByCCode(string $C_Code) Return the first Picturesmain filtered by the C_Code column
 * @method Picturesmain findOneByAuthname(string $AuthName) Return the first Picturesmain filtered by the AuthName column
 * @method Picturesmain findOneByReference(int $Reference) Return the first Picturesmain filtered by the Reference column
 * @method Picturesmain findOneByPagecode(string $PageCode) Return the first Picturesmain filtered by the PageCode column
 * @method Picturesmain findOneByUrl(string $URL) Return the first Picturesmain filtered by the URL column
 * @method Picturesmain findOneByLogofile(string $LogoFile) Return the first Picturesmain filtered by the LogoFile column
 * @method Picturesmain findOneByCopyright(string $Copyright) Return the first Picturesmain filtered by the Copyright column
 * @method Picturesmain findOneByComment(string $Comment) Return the first Picturesmain filtered by the Comment column
 * @method Picturesmain findOneByPublicdomain(boolean $PublicDomain) Return the first Picturesmain filtered by the PublicDomain column
 * @method Picturesmain findOneByNewpic(string $NewPic) Return the first Picturesmain filtered by the NewPic column
 * @method Picturesmain findOneByPicpreferred(boolean $PicPreferred) Return the first Picturesmain filtered by the PicPreferred column
 * @method Picturesmain findOneByPicpreferredmale(boolean $PicPreferredMale) Return the first Picturesmain filtered by the PicPreferredMale column
 * @method Picturesmain findOneByPicpreferredfem(boolean $PicPreferredFem) Return the first Picturesmain filtered by the PicPreferredFem column
 * @method Picturesmain findOneByPicpreferredjuv(boolean $PicPreferredJuv) Return the first Picturesmain filtered by the PicPreferredJuv column
 * @method Picturesmain findOneByEol(int $EOL) Return the first Picturesmain filtered by the EOL column
 * @method Picturesmain findOneByTaxo(int $Taxo) Return the first Picturesmain filtered by the Taxo column
 * @method Picturesmain findOneByEntered(int $Entered) Return the first Picturesmain filtered by the Entered column
 * @method Picturesmain findOneByDateentered(string $Dateentered) Return the first Picturesmain filtered by the Dateentered column
 * @method Picturesmain findOneByModified(int $Modified) Return the first Picturesmain filtered by the Modified column
 * @method Picturesmain findOneByDatemodified(string $Datemodified) Return the first Picturesmain filtered by the Datemodified column
 * @method Picturesmain findOneByExpert(int $Expert) Return the first Picturesmain filtered by the Expert column
 * @method Picturesmain findOneByDatechecked(string $Datechecked) Return the first Picturesmain filtered by the Datechecked column
 * @method Picturesmain findOneByTs(string $TS) Return the first Picturesmain filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Picturesmain objects filtered by the autoctr column
 * @method array findBySpeccode(int $SpecCode) Return Picturesmain objects filtered by the SpecCode column
 * @method array findByPicgenus(string $PicGenus) Return Picturesmain objects filtered by the PicGenus column
 * @method array findByPicspecies(string $PicSpecies) Return Picturesmain objects filtered by the PicSpecies column
 * @method array findBySyncode(int $Syncode) Return Picturesmain objects filtered by the Syncode column
 * @method array findByPicname(string $PicName) Return Picturesmain objects filtered by the PicName column
 * @method array findByScanned(int $Scanned) Return Picturesmain objects filtered by the Scanned column
 * @method array findByPicturetype(string $PictureType) Return Picturesmain objects filtered by the PictureType column
 * @method array findByPictype(string $PicType) Return Picturesmain objects filtered by the PicType column
 * @method array findByRank(int $Rank) Return Picturesmain objects filtered by the Rank column
 * @method array findByBestpic(int $BestPic) Return Picturesmain objects filtered by the BestPic column
 * @method array findByScore(int $Score) Return Picturesmain objects filtered by the Score column
 * @method array findByOccurrence(int $Occurrence) Return Picturesmain objects filtered by the Occurrence column
 * @method array findByCdrom(int $CDROM) Return Picturesmain objects filtered by the CDROM column
 * @method array findByLifestage(string $LifeStage) Return Picturesmain objects filtered by the LifeStage column
 * @method array findBySize(double $Size) Return Picturesmain objects filtered by the Size column
 * @method array findByLengthtype(string $LengthType) Return Picturesmain objects filtered by the LengthType column
 * @method array findBySize2(double $Size2) Return Picturesmain objects filtered by the Size2 column
 * @method array findByLenghttype2(string $LenghtType2) Return Picturesmain objects filtered by the LenghtType2 column
 * @method array findByLocality(string $Locality) Return Picturesmain objects filtered by the Locality column
 * @method array findByProvince(string $Province) Return Picturesmain objects filtered by the Province column
 * @method array findByLatdeg(int $LatDeg) Return Picturesmain objects filtered by the LatDeg column
 * @method array findByLatmin(double $LatMin) Return Picturesmain objects filtered by the LatMin column
 * @method array findByNorthsouth(string $NorthSouth) Return Picturesmain objects filtered by the NorthSouth column
 * @method array findByLongdeg(int $LongDeg) Return Picturesmain objects filtered by the LongDeg column
 * @method array findByLongmin(double $LongMin) Return Picturesmain objects filtered by the LongMin column
 * @method array findByEastwest(string $EastWest) Return Picturesmain objects filtered by the EastWest column
 * @method array findByDepth(double $Depth) Return Picturesmain objects filtered by the Depth column
 * @method array findByRemark(string $Remark) Return Picturesmain objects filtered by the Remark column
 * @method array findByDate(string $Date) Return Picturesmain objects filtered by the Date column
 * @method array findByCCode(string $C_Code) Return Picturesmain objects filtered by the C_Code column
 * @method array findByAuthname(string $AuthName) Return Picturesmain objects filtered by the AuthName column
 * @method array findByReference(int $Reference) Return Picturesmain objects filtered by the Reference column
 * @method array findByPagecode(string $PageCode) Return Picturesmain objects filtered by the PageCode column
 * @method array findByUrl(string $URL) Return Picturesmain objects filtered by the URL column
 * @method array findByLogofile(string $LogoFile) Return Picturesmain objects filtered by the LogoFile column
 * @method array findByCopyright(string $Copyright) Return Picturesmain objects filtered by the Copyright column
 * @method array findByComment(string $Comment) Return Picturesmain objects filtered by the Comment column
 * @method array findByPublicdomain(boolean $PublicDomain) Return Picturesmain objects filtered by the PublicDomain column
 * @method array findByNewpic(string $NewPic) Return Picturesmain objects filtered by the NewPic column
 * @method array findByPicpreferred(boolean $PicPreferred) Return Picturesmain objects filtered by the PicPreferred column
 * @method array findByPicpreferredmale(boolean $PicPreferredMale) Return Picturesmain objects filtered by the PicPreferredMale column
 * @method array findByPicpreferredfem(boolean $PicPreferredFem) Return Picturesmain objects filtered by the PicPreferredFem column
 * @method array findByPicpreferredjuv(boolean $PicPreferredJuv) Return Picturesmain objects filtered by the PicPreferredJuv column
 * @method array findByEol(int $EOL) Return Picturesmain objects filtered by the EOL column
 * @method array findByTaxo(int $Taxo) Return Picturesmain objects filtered by the Taxo column
 * @method array findByEntered(int $Entered) Return Picturesmain objects filtered by the Entered column
 * @method array findByDateentered(string $Dateentered) Return Picturesmain objects filtered by the Dateentered column
 * @method array findByModified(int $Modified) Return Picturesmain objects filtered by the Modified column
 * @method array findByDatemodified(string $Datemodified) Return Picturesmain objects filtered by the Datemodified column
 * @method array findByExpert(int $Expert) Return Picturesmain objects filtered by the Expert column
 * @method array findByDatechecked(string $Datechecked) Return Picturesmain objects filtered by the Datechecked column
 * @method array findByTs(string $TS) Return Picturesmain objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePicturesmainQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePicturesmainQuery object.
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
            $modelName = 'Picturesmain';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PicturesmainQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PicturesmainQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PicturesmainQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PicturesmainQuery) {
            return $criteria;
        }
        $query = new PicturesmainQuery(null, null, $modelAlias);

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
     * @return   Picturesmain|Picturesmain[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PicturesmainPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Picturesmain A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAutoctr($key, $con = null)
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
     * @return                 Picturesmain A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `SpecCode`, `PicGenus`, `PicSpecies`, `Syncode`, `PicName`, `Scanned`, `PictureType`, `PicType`, `Rank`, `BestPic`, `Score`, `Occurrence`, `CDROM`, `LifeStage`, `Size`, `LengthType`, `Size2`, `LenghtType2`, `Locality`, `Province`, `LatDeg`, `LatMin`, `NorthSouth`, `LongDeg`, `LongMin`, `EastWest`, `Depth`, `Remark`, `Date`, `C_Code`, `AuthName`, `Reference`, `PageCode`, `URL`, `LogoFile`, `Copyright`, `Comment`, `PublicDomain`, `NewPic`, `PicPreferred`, `PicPreferredMale`, `PicPreferredFem`, `PicPreferredJuv`, `EOL`, `Taxo`, `Entered`, `Dateentered`, `Modified`, `Datemodified`, `Expert`, `Datechecked`, `TS` FROM `picturesmain` WHERE `autoctr` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Picturesmain();
            $obj->hydrate($row);
            PicturesmainPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Picturesmain|Picturesmain[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Picturesmain[]|mixed the list of results, formatted by the current formatter
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
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PicturesmainPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PicturesmainPeer::AUTOCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PicturesmainPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PicturesmainPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(PicturesmainPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(PicturesmainPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the PicGenus column
     *
     * Example usage:
     * <code>
     * $query->filterByPicgenus('fooValue');   // WHERE PicGenus = 'fooValue'
     * $query->filterByPicgenus('%fooValue%'); // WHERE PicGenus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picgenus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPicgenus($picgenus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picgenus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picgenus)) {
                $picgenus = str_replace('*', '%', $picgenus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::PICGENUS, $picgenus, $comparison);
    }

    /**
     * Filter the query on the PicSpecies column
     *
     * Example usage:
     * <code>
     * $query->filterByPicspecies('fooValue');   // WHERE PicSpecies = 'fooValue'
     * $query->filterByPicspecies('%fooValue%'); // WHERE PicSpecies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picspecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPicspecies($picspecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picspecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picspecies)) {
                $picspecies = str_replace('*', '%', $picspecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::PICSPECIES, $picspecies, $comparison);
    }

    /**
     * Filter the query on the Syncode column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncode(1234); // WHERE Syncode = 1234
     * $query->filterBySyncode(array(12, 34)); // WHERE Syncode IN (12, 34)
     * $query->filterBySyncode(array('min' => 12)); // WHERE Syncode >= 12
     * $query->filterBySyncode(array('max' => 12)); // WHERE Syncode <= 12
     * </code>
     *
     * @param     mixed $syncode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(PicturesmainPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(PicturesmainPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::SYNCODE, $syncode, $comparison);
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
     * @return PicturesmainQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PicturesmainPeer::PICNAME, $picname, $comparison);
    }

    /**
     * Filter the query on the Scanned column
     *
     * Example usage:
     * <code>
     * $query->filterByScanned(1234); // WHERE Scanned = 1234
     * $query->filterByScanned(array(12, 34)); // WHERE Scanned IN (12, 34)
     * $query->filterByScanned(array('min' => 12)); // WHERE Scanned >= 12
     * $query->filterByScanned(array('max' => 12)); // WHERE Scanned <= 12
     * </code>
     *
     * @param     mixed $scanned The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByScanned($scanned = null, $comparison = null)
    {
        if (is_array($scanned)) {
            $useMinMax = false;
            if (isset($scanned['min'])) {
                $this->addUsingAlias(PicturesmainPeer::SCANNED, $scanned['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scanned['max'])) {
                $this->addUsingAlias(PicturesmainPeer::SCANNED, $scanned['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::SCANNED, $scanned, $comparison);
    }

    /**
     * Filter the query on the PictureType column
     *
     * Example usage:
     * <code>
     * $query->filterByPicturetype('fooValue');   // WHERE PictureType = 'fooValue'
     * $query->filterByPicturetype('%fooValue%'); // WHERE PictureType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picturetype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPicturetype($picturetype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picturetype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picturetype)) {
                $picturetype = str_replace('*', '%', $picturetype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::PICTURETYPE, $picturetype, $comparison);
    }

    /**
     * Filter the query on the PicType column
     *
     * Example usage:
     * <code>
     * $query->filterByPictype('fooValue');   // WHERE PicType = 'fooValue'
     * $query->filterByPictype('%fooValue%'); // WHERE PicType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pictype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPictype($pictype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pictype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pictype)) {
                $pictype = str_replace('*', '%', $pictype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::PICTYPE, $pictype, $comparison);
    }

    /**
     * Filter the query on the Rank column
     *
     * Example usage:
     * <code>
     * $query->filterByRank(1234); // WHERE Rank = 1234
     * $query->filterByRank(array(12, 34)); // WHERE Rank IN (12, 34)
     * $query->filterByRank(array('min' => 12)); // WHERE Rank >= 12
     * $query->filterByRank(array('max' => 12)); // WHERE Rank <= 12
     * </code>
     *
     * @param     mixed $rank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByRank($rank = null, $comparison = null)
    {
        if (is_array($rank)) {
            $useMinMax = false;
            if (isset($rank['min'])) {
                $this->addUsingAlias(PicturesmainPeer::RANK, $rank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rank['max'])) {
                $this->addUsingAlias(PicturesmainPeer::RANK, $rank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::RANK, $rank, $comparison);
    }

    /**
     * Filter the query on the BestPic column
     *
     * Example usage:
     * <code>
     * $query->filterByBestpic(1234); // WHERE BestPic = 1234
     * $query->filterByBestpic(array(12, 34)); // WHERE BestPic IN (12, 34)
     * $query->filterByBestpic(array('min' => 12)); // WHERE BestPic >= 12
     * $query->filterByBestpic(array('max' => 12)); // WHERE BestPic <= 12
     * </code>
     *
     * @param     mixed $bestpic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByBestpic($bestpic = null, $comparison = null)
    {
        if (is_array($bestpic)) {
            $useMinMax = false;
            if (isset($bestpic['min'])) {
                $this->addUsingAlias(PicturesmainPeer::BESTPIC, $bestpic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestpic['max'])) {
                $this->addUsingAlias(PicturesmainPeer::BESTPIC, $bestpic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::BESTPIC, $bestpic, $comparison);
    }

    /**
     * Filter the query on the Score column
     *
     * Example usage:
     * <code>
     * $query->filterByScore(1234); // WHERE Score = 1234
     * $query->filterByScore(array(12, 34)); // WHERE Score IN (12, 34)
     * $query->filterByScore(array('min' => 12)); // WHERE Score >= 12
     * $query->filterByScore(array('max' => 12)); // WHERE Score <= 12
     * </code>
     *
     * @param     mixed $score The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByScore($score = null, $comparison = null)
    {
        if (is_array($score)) {
            $useMinMax = false;
            if (isset($score['min'])) {
                $this->addUsingAlias(PicturesmainPeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($score['max'])) {
                $this->addUsingAlias(PicturesmainPeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::SCORE, $score, $comparison);
    }

    /**
     * Filter the query on the Occurrence column
     *
     * Example usage:
     * <code>
     * $query->filterByOccurrence(1234); // WHERE Occurrence = 1234
     * $query->filterByOccurrence(array(12, 34)); // WHERE Occurrence IN (12, 34)
     * $query->filterByOccurrence(array('min' => 12)); // WHERE Occurrence >= 12
     * $query->filterByOccurrence(array('max' => 12)); // WHERE Occurrence <= 12
     * </code>
     *
     * @param     mixed $occurrence The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByOccurrence($occurrence = null, $comparison = null)
    {
        if (is_array($occurrence)) {
            $useMinMax = false;
            if (isset($occurrence['min'])) {
                $this->addUsingAlias(PicturesmainPeer::OCCURRENCE, $occurrence['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($occurrence['max'])) {
                $this->addUsingAlias(PicturesmainPeer::OCCURRENCE, $occurrence['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::OCCURRENCE, $occurrence, $comparison);
    }

    /**
     * Filter the query on the CDROM column
     *
     * Example usage:
     * <code>
     * $query->filterByCdrom(1234); // WHERE CDROM = 1234
     * $query->filterByCdrom(array(12, 34)); // WHERE CDROM IN (12, 34)
     * $query->filterByCdrom(array('min' => 12)); // WHERE CDROM >= 12
     * $query->filterByCdrom(array('max' => 12)); // WHERE CDROM <= 12
     * </code>
     *
     * @param     mixed $cdrom The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByCdrom($cdrom = null, $comparison = null)
    {
        if (is_array($cdrom)) {
            $useMinMax = false;
            if (isset($cdrom['min'])) {
                $this->addUsingAlias(PicturesmainPeer::CDROM, $cdrom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cdrom['max'])) {
                $this->addUsingAlias(PicturesmainPeer::CDROM, $cdrom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::CDROM, $cdrom, $comparison);
    }

    /**
     * Filter the query on the LifeStage column
     *
     * Example usage:
     * <code>
     * $query->filterByLifestage('fooValue');   // WHERE LifeStage = 'fooValue'
     * $query->filterByLifestage('%fooValue%'); // WHERE LifeStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lifestage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByLifestage($lifestage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lifestage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lifestage)) {
                $lifestage = str_replace('*', '%', $lifestage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::LIFESTAGE, $lifestage, $comparison);
    }

    /**
     * Filter the query on the Size column
     *
     * Example usage:
     * <code>
     * $query->filterBySize(1234); // WHERE Size = 1234
     * $query->filterBySize(array(12, 34)); // WHERE Size IN (12, 34)
     * $query->filterBySize(array('min' => 12)); // WHERE Size >= 12
     * $query->filterBySize(array('max' => 12)); // WHERE Size <= 12
     * </code>
     *
     * @param     mixed $size The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterBySize($size = null, $comparison = null)
    {
        if (is_array($size)) {
            $useMinMax = false;
            if (isset($size['min'])) {
                $this->addUsingAlias(PicturesmainPeer::SIZE, $size['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($size['max'])) {
                $this->addUsingAlias(PicturesmainPeer::SIZE, $size['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::SIZE, $size, $comparison);
    }

    /**
     * Filter the query on the LengthType column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtype('fooValue');   // WHERE LengthType = 'fooValue'
     * $query->filterByLengthtype('%fooValue%'); // WHERE LengthType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByLengthtype($lengthtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtype)) {
                $lengthtype = str_replace('*', '%', $lengthtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::LENGTHTYPE, $lengthtype, $comparison);
    }

    /**
     * Filter the query on the Size2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySize2(1234); // WHERE Size2 = 1234
     * $query->filterBySize2(array(12, 34)); // WHERE Size2 IN (12, 34)
     * $query->filterBySize2(array('min' => 12)); // WHERE Size2 >= 12
     * $query->filterBySize2(array('max' => 12)); // WHERE Size2 <= 12
     * </code>
     *
     * @param     mixed $size2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterBySize2($size2 = null, $comparison = null)
    {
        if (is_array($size2)) {
            $useMinMax = false;
            if (isset($size2['min'])) {
                $this->addUsingAlias(PicturesmainPeer::SIZE2, $size2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($size2['max'])) {
                $this->addUsingAlias(PicturesmainPeer::SIZE2, $size2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::SIZE2, $size2, $comparison);
    }

    /**
     * Filter the query on the LenghtType2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLenghttype2('fooValue');   // WHERE LenghtType2 = 'fooValue'
     * $query->filterByLenghttype2('%fooValue%'); // WHERE LenghtType2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lenghttype2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByLenghttype2($lenghttype2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lenghttype2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lenghttype2)) {
                $lenghttype2 = str_replace('*', '%', $lenghttype2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::LENGHTTYPE2, $lenghttype2, $comparison);
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
     * @return PicturesmainQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PicturesmainPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the Province column
     *
     * Example usage:
     * <code>
     * $query->filterByProvince('fooValue');   // WHERE Province = 'fooValue'
     * $query->filterByProvince('%fooValue%'); // WHERE Province LIKE '%fooValue%'
     * </code>
     *
     * @param     string $province The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByProvince($province = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($province)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $province)) {
                $province = str_replace('*', '%', $province);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::PROVINCE, $province, $comparison);
    }

    /**
     * Filter the query on the LatDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLatdeg(1234); // WHERE LatDeg = 1234
     * $query->filterByLatdeg(array(12, 34)); // WHERE LatDeg IN (12, 34)
     * $query->filterByLatdeg(array('min' => 12)); // WHERE LatDeg >= 12
     * $query->filterByLatdeg(array('max' => 12)); // WHERE LatDeg <= 12
     * </code>
     *
     * @param     mixed $latdeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByLatdeg($latdeg = null, $comparison = null)
    {
        if (is_array($latdeg)) {
            $useMinMax = false;
            if (isset($latdeg['min'])) {
                $this->addUsingAlias(PicturesmainPeer::LATDEG, $latdeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latdeg['max'])) {
                $this->addUsingAlias(PicturesmainPeer::LATDEG, $latdeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::LATDEG, $latdeg, $comparison);
    }

    /**
     * Filter the query on the LatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLatmin(1234); // WHERE LatMin = 1234
     * $query->filterByLatmin(array(12, 34)); // WHERE LatMin IN (12, 34)
     * $query->filterByLatmin(array('min' => 12)); // WHERE LatMin >= 12
     * $query->filterByLatmin(array('max' => 12)); // WHERE LatMin <= 12
     * </code>
     *
     * @param     mixed $latmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByLatmin($latmin = null, $comparison = null)
    {
        if (is_array($latmin)) {
            $useMinMax = false;
            if (isset($latmin['min'])) {
                $this->addUsingAlias(PicturesmainPeer::LATMIN, $latmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latmin['max'])) {
                $this->addUsingAlias(PicturesmainPeer::LATMIN, $latmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::LATMIN, $latmin, $comparison);
    }

    /**
     * Filter the query on the NorthSouth column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouth('fooValue');   // WHERE NorthSouth = 'fooValue'
     * $query->filterByNorthsouth('%fooValue%'); // WHERE NorthSouth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByNorthsouth($northsouth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouth)) {
                $northsouth = str_replace('*', '%', $northsouth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::NORTHSOUTH, $northsouth, $comparison);
    }

    /**
     * Filter the query on the LongDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLongdeg(1234); // WHERE LongDeg = 1234
     * $query->filterByLongdeg(array(12, 34)); // WHERE LongDeg IN (12, 34)
     * $query->filterByLongdeg(array('min' => 12)); // WHERE LongDeg >= 12
     * $query->filterByLongdeg(array('max' => 12)); // WHERE LongDeg <= 12
     * </code>
     *
     * @param     mixed $longdeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByLongdeg($longdeg = null, $comparison = null)
    {
        if (is_array($longdeg)) {
            $useMinMax = false;
            if (isset($longdeg['min'])) {
                $this->addUsingAlias(PicturesmainPeer::LONGDEG, $longdeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longdeg['max'])) {
                $this->addUsingAlias(PicturesmainPeer::LONGDEG, $longdeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::LONGDEG, $longdeg, $comparison);
    }

    /**
     * Filter the query on the LongMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLongmin(1234); // WHERE LongMin = 1234
     * $query->filterByLongmin(array(12, 34)); // WHERE LongMin IN (12, 34)
     * $query->filterByLongmin(array('min' => 12)); // WHERE LongMin >= 12
     * $query->filterByLongmin(array('max' => 12)); // WHERE LongMin <= 12
     * </code>
     *
     * @param     mixed $longmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByLongmin($longmin = null, $comparison = null)
    {
        if (is_array($longmin)) {
            $useMinMax = false;
            if (isset($longmin['min'])) {
                $this->addUsingAlias(PicturesmainPeer::LONGMIN, $longmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longmin['max'])) {
                $this->addUsingAlias(PicturesmainPeer::LONGMIN, $longmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::LONGMIN, $longmin, $comparison);
    }

    /**
     * Filter the query on the EastWest column
     *
     * Example usage:
     * <code>
     * $query->filterByEastwest('fooValue');   // WHERE EastWest = 'fooValue'
     * $query->filterByEastwest('%fooValue%'); // WHERE EastWest LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eastwest The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByEastwest($eastwest = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eastwest)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eastwest)) {
                $eastwest = str_replace('*', '%', $eastwest);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::EASTWEST, $eastwest, $comparison);
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
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByDepth($depth = null, $comparison = null)
    {
        if (is_array($depth)) {
            $useMinMax = false;
            if (isset($depth['min'])) {
                $this->addUsingAlias(PicturesmainPeer::DEPTH, $depth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depth['max'])) {
                $this->addUsingAlias(PicturesmainPeer::DEPTH, $depth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::DEPTH, $depth, $comparison);
    }

    /**
     * Filter the query on the Remark column
     *
     * Example usage:
     * <code>
     * $query->filterByRemark('fooValue');   // WHERE Remark = 'fooValue'
     * $query->filterByRemark('%fooValue%'); // WHERE Remark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByRemark($remark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remark)) {
                $remark = str_replace('*', '%', $remark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the Date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE Date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE Date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE Date < '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(PicturesmainPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(PicturesmainPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::DATE, $date, $comparison);
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
     * @return PicturesmainQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PicturesmainPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the AuthName column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthname('fooValue');   // WHERE AuthName = 'fooValue'
     * $query->filterByAuthname('%fooValue%'); // WHERE AuthName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByAuthname($authname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authname)) {
                $authname = str_replace('*', '%', $authname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::AUTHNAME, $authname, $comparison);
    }

    /**
     * Filter the query on the Reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference(1234); // WHERE Reference = 1234
     * $query->filterByReference(array(12, 34)); // WHERE Reference IN (12, 34)
     * $query->filterByReference(array('min' => 12)); // WHERE Reference >= 12
     * $query->filterByReference(array('max' => 12)); // WHERE Reference <= 12
     * </code>
     *
     * @param     mixed $reference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (is_array($reference)) {
            $useMinMax = false;
            if (isset($reference['min'])) {
                $this->addUsingAlias(PicturesmainPeer::REFERENCE, $reference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reference['max'])) {
                $this->addUsingAlias(PicturesmainPeer::REFERENCE, $reference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the PageCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPagecode('fooValue');   // WHERE PageCode = 'fooValue'
     * $query->filterByPagecode('%fooValue%'); // WHERE PageCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pagecode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPagecode($pagecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pagecode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pagecode)) {
                $pagecode = str_replace('*', '%', $pagecode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::PAGECODE, $pagecode, $comparison);
    }

    /**
     * Filter the query on the URL column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE URL = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE URL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the LogoFile column
     *
     * Example usage:
     * <code>
     * $query->filterByLogofile('fooValue');   // WHERE LogoFile = 'fooValue'
     * $query->filterByLogofile('%fooValue%'); // WHERE LogoFile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logofile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByLogofile($logofile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logofile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logofile)) {
                $logofile = str_replace('*', '%', $logofile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::LOGOFILE, $logofile, $comparison);
    }

    /**
     * Filter the query on the Copyright column
     *
     * Example usage:
     * <code>
     * $query->filterByCopyright('fooValue');   // WHERE Copyright = 'fooValue'
     * $query->filterByCopyright('%fooValue%'); // WHERE Copyright LIKE '%fooValue%'
     * </code>
     *
     * @param     string $copyright The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByCopyright($copyright = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($copyright)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $copyright)) {
                $copyright = str_replace('*', '%', $copyright);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::COPYRIGHT, $copyright, $comparison);
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
     * @return PicturesmainQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PicturesmainPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the PublicDomain column
     *
     * Example usage:
     * <code>
     * $query->filterByPublicdomain(true); // WHERE PublicDomain = true
     * $query->filterByPublicdomain('yes'); // WHERE PublicDomain = true
     * </code>
     *
     * @param     boolean|string $publicdomain The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPublicdomain($publicdomain = null, $comparison = null)
    {
        if (is_string($publicdomain)) {
            $publicdomain = in_array(strtolower($publicdomain), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PicturesmainPeer::PUBLICDOMAIN, $publicdomain, $comparison);
    }

    /**
     * Filter the query on the NewPic column
     *
     * Example usage:
     * <code>
     * $query->filterByNewpic('fooValue');   // WHERE NewPic = 'fooValue'
     * $query->filterByNewpic('%fooValue%'); // WHERE NewPic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $newpic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByNewpic($newpic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($newpic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $newpic)) {
                $newpic = str_replace('*', '%', $newpic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::NEWPIC, $newpic, $comparison);
    }

    /**
     * Filter the query on the PicPreferred column
     *
     * Example usage:
     * <code>
     * $query->filterByPicpreferred(true); // WHERE PicPreferred = true
     * $query->filterByPicpreferred('yes'); // WHERE PicPreferred = true
     * </code>
     *
     * @param     boolean|string $picpreferred The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPicpreferred($picpreferred = null, $comparison = null)
    {
        if (is_string($picpreferred)) {
            $picpreferred = in_array(strtolower($picpreferred), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PicturesmainPeer::PICPREFERRED, $picpreferred, $comparison);
    }

    /**
     * Filter the query on the PicPreferredMale column
     *
     * Example usage:
     * <code>
     * $query->filterByPicpreferredmale(true); // WHERE PicPreferredMale = true
     * $query->filterByPicpreferredmale('yes'); // WHERE PicPreferredMale = true
     * </code>
     *
     * @param     boolean|string $picpreferredmale The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPicpreferredmale($picpreferredmale = null, $comparison = null)
    {
        if (is_string($picpreferredmale)) {
            $picpreferredmale = in_array(strtolower($picpreferredmale), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PicturesmainPeer::PICPREFERREDMALE, $picpreferredmale, $comparison);
    }

    /**
     * Filter the query on the PicPreferredFem column
     *
     * Example usage:
     * <code>
     * $query->filterByPicpreferredfem(true); // WHERE PicPreferredFem = true
     * $query->filterByPicpreferredfem('yes'); // WHERE PicPreferredFem = true
     * </code>
     *
     * @param     boolean|string $picpreferredfem The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPicpreferredfem($picpreferredfem = null, $comparison = null)
    {
        if (is_string($picpreferredfem)) {
            $picpreferredfem = in_array(strtolower($picpreferredfem), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PicturesmainPeer::PICPREFERREDFEM, $picpreferredfem, $comparison);
    }

    /**
     * Filter the query on the PicPreferredJuv column
     *
     * Example usage:
     * <code>
     * $query->filterByPicpreferredjuv(true); // WHERE PicPreferredJuv = true
     * $query->filterByPicpreferredjuv('yes'); // WHERE PicPreferredJuv = true
     * </code>
     *
     * @param     boolean|string $picpreferredjuv The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByPicpreferredjuv($picpreferredjuv = null, $comparison = null)
    {
        if (is_string($picpreferredjuv)) {
            $picpreferredjuv = in_array(strtolower($picpreferredjuv), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PicturesmainPeer::PICPREFERREDJUV, $picpreferredjuv, $comparison);
    }

    /**
     * Filter the query on the EOL column
     *
     * Example usage:
     * <code>
     * $query->filterByEol(1234); // WHERE EOL = 1234
     * $query->filterByEol(array(12, 34)); // WHERE EOL IN (12, 34)
     * $query->filterByEol(array('min' => 12)); // WHERE EOL >= 12
     * $query->filterByEol(array('max' => 12)); // WHERE EOL <= 12
     * </code>
     *
     * @param     mixed $eol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByEol($eol = null, $comparison = null)
    {
        if (is_array($eol)) {
            $useMinMax = false;
            if (isset($eol['min'])) {
                $this->addUsingAlias(PicturesmainPeer::EOL, $eol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eol['max'])) {
                $this->addUsingAlias(PicturesmainPeer::EOL, $eol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::EOL, $eol, $comparison);
    }

    /**
     * Filter the query on the Taxo column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxo(1234); // WHERE Taxo = 1234
     * $query->filterByTaxo(array(12, 34)); // WHERE Taxo IN (12, 34)
     * $query->filterByTaxo(array('min' => 12)); // WHERE Taxo >= 12
     * $query->filterByTaxo(array('max' => 12)); // WHERE Taxo <= 12
     * </code>
     *
     * @param     mixed $taxo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByTaxo($taxo = null, $comparison = null)
    {
        if (is_array($taxo)) {
            $useMinMax = false;
            if (isset($taxo['min'])) {
                $this->addUsingAlias(PicturesmainPeer::TAXO, $taxo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxo['max'])) {
                $this->addUsingAlias(PicturesmainPeer::TAXO, $taxo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::TAXO, $taxo, $comparison);
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
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(PicturesmainPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(PicturesmainPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the Dateentered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE Dateentered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE Dateentered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE Dateentered < '2011-03-13'
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
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(PicturesmainPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(PicturesmainPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(PicturesmainPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(PicturesmainPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the Datemodified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE Datemodified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE Datemodified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE Datemodified < '2011-03-13'
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
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(PicturesmainPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(PicturesmainPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(PicturesmainPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(PicturesmainPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the Datechecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE Datechecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE Datechecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE Datechecked < '2011-03-13'
     * </code>
     *
     * @param     mixed $datechecked The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(PicturesmainPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(PicturesmainPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PicturesmainPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PicturesmainPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PicturesmainPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Picturesmain $picturesmain Object to remove from the list of results
     *
     * @return PicturesmainQuery The current query, for fluid interface
     */
    public function prune($picturesmain = null)
    {
        if ($picturesmain) {
            $this->addUsingAlias(PicturesmainPeer::AUTOCTR, $picturesmain->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
