<?php


/**
 * Base class that represents a query for the 'faoarref' table.
 *
 *
 *
 * @method FaoarrefQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method FaoarrefQuery orderByFao($order = Criteria::ASC) Order by the FAO column
 * @method FaoarrefQuery orderByNote($order = Criteria::ASC) Order by the Note column
 * @method FaoarrefQuery orderByCoastline($order = Criteria::ASC) Order by the Coastline column
 * @method FaoarrefQuery orderByShelf($order = Criteria::ASC) Order by the Shelf column
 * @method FaoarrefQuery orderByEezarea($order = Criteria::ASC) Order by the EEZarea column
 * @method FaoarrefQuery orderByLatdeg($order = Criteria::ASC) Order by the LatDeg column
 * @method FaoarrefQuery orderByLatmin($order = Criteria::ASC) Order by the LatMin column
 * @method FaoarrefQuery orderByNS($order = Criteria::ASC) Order by the N_S column
 * @method FaoarrefQuery orderByLongdeg($order = Criteria::ASC) Order by the LongDeg column
 * @method FaoarrefQuery orderByLongmin($order = Criteria::ASC) Order by the LongMin column
 * @method FaoarrefQuery orderByEW($order = Criteria::ASC) Order by the E_W column
 * @method FaoarrefQuery orderByNeighborn($order = Criteria::ASC) Order by the NeighborN column
 * @method FaoarrefQuery orderByNeighbors($order = Criteria::ASC) Order by the NeighborS column
 * @method FaoarrefQuery orderByNeighborw($order = Criteria::ASC) Order by the NeighborW column
 * @method FaoarrefQuery orderByNeighbore($order = Criteria::ASC) Order by the NeighborE column
 * @method FaoarrefQuery orderByNorthernlatitude($order = Criteria::ASC) Order by the NorthernLatitude column
 * @method FaoarrefQuery orderByNorthernlatitudens($order = Criteria::ASC) Order by the NorthernLatitudeNS column
 * @method FaoarrefQuery orderBySouthernlatitude($order = Criteria::ASC) Order by the SouthernLatitude column
 * @method FaoarrefQuery orderBySouthernlatitudens($order = Criteria::ASC) Order by the SouthernLatitudeNS column
 * @method FaoarrefQuery orderByWesternlongitude($order = Criteria::ASC) Order by the WesternLongitude column
 * @method FaoarrefQuery orderByWesternlongitudeew($order = Criteria::ASC) Order by the WesternLongitudeEW column
 * @method FaoarrefQuery orderByEasternlongitude($order = Criteria::ASC) Order by the EasternLongitude column
 * @method FaoarrefQuery orderByEasternlongitudeew($order = Criteria::ASC) Order by the EasternLongitudeEW column
 * @method FaoarrefQuery orderByFamiliescount($order = Criteria::ASC) Order by the FamiliesCount column
 * @method FaoarrefQuery orderByFamiliesno($order = Criteria::ASC) Order by the FamiliesNo column
 * @method FaoarrefQuery orderByFamiliesref($order = Criteria::ASC) Order by the FamiliesRef column
 * @method FaoarrefQuery orderBySpeciescount($order = Criteria::ASC) Order by the SpeciesCount column
 * @method FaoarrefQuery orderBySpeciesno($order = Criteria::ASC) Order by the SpeciesNo column
 * @method FaoarrefQuery orderBySpeciesref($order = Criteria::ASC) Order by the SpeciesRef column
 * @method FaoarrefQuery orderByFamfisheries($order = Criteria::ASC) Order by the FamFisheries column
 * @method FaoarrefQuery orderBySpecfisheries($order = Criteria::ASC) Order by the SpecFisheries column
 * @method FaoarrefQuery orderByFamaqua($order = Criteria::ASC) Order by the FamAqua column
 * @method FaoarrefQuery orderBySpecaqua($order = Criteria::ASC) Order by the SpecAqua column
 * @method FaoarrefQuery orderByFambait($order = Criteria::ASC) Order by the FamBait column
 * @method FaoarrefQuery orderBySpecbait($order = Criteria::ASC) Order by the SpecBait column
 * @method FaoarrefQuery orderByFamornament($order = Criteria::ASC) Order by the FamOrnament column
 * @method FaoarrefQuery orderBySpecornament($order = Criteria::ASC) Order by the SpecOrnament column
 * @method FaoarrefQuery orderByFamsport($order = Criteria::ASC) Order by the FamSport column
 * @method FaoarrefQuery orderBySpecsport($order = Criteria::ASC) Order by the SpecSport column
 * @method FaoarrefQuery orderByFamhuman($order = Criteria::ASC) Order by the FamHuman column
 * @method FaoarrefQuery orderBySpechuman($order = Criteria::ASC) Order by the SpecHuman column
 * @method FaoarrefQuery orderByFamthreat($order = Criteria::ASC) Order by the FamThreat column
 * @method FaoarrefQuery orderBySpecthreat($order = Criteria::ASC) Order by the SpecThreat column
 * @method FaoarrefQuery orderByFamintro($order = Criteria::ASC) Order by the FamIntro column
 * @method FaoarrefQuery orderBySpecintro($order = Criteria::ASC) Order by the SpecIntro column
 * @method FaoarrefQuery orderByFamdanger($order = Criteria::ASC) Order by the FamDanger column
 * @method FaoarrefQuery orderBySpecdanger($order = Criteria::ASC) Order by the SpecDanger column
 * @method FaoarrefQuery orderByComplete($order = Criteria::ASC) Order by the Complete column
 * @method FaoarrefQuery orderByCompleteref($order = Criteria::ASC) Order by the CompleteRef column
 * @method FaoarrefQuery orderByContinentgrp($order = Criteria::ASC) Order by the ContinentGrp column
 * @method FaoarrefQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method FaoarrefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FaoarrefQuery groupByAreacode() Group by the AreaCode column
 * @method FaoarrefQuery groupByFao() Group by the FAO column
 * @method FaoarrefQuery groupByNote() Group by the Note column
 * @method FaoarrefQuery groupByCoastline() Group by the Coastline column
 * @method FaoarrefQuery groupByShelf() Group by the Shelf column
 * @method FaoarrefQuery groupByEezarea() Group by the EEZarea column
 * @method FaoarrefQuery groupByLatdeg() Group by the LatDeg column
 * @method FaoarrefQuery groupByLatmin() Group by the LatMin column
 * @method FaoarrefQuery groupByNS() Group by the N_S column
 * @method FaoarrefQuery groupByLongdeg() Group by the LongDeg column
 * @method FaoarrefQuery groupByLongmin() Group by the LongMin column
 * @method FaoarrefQuery groupByEW() Group by the E_W column
 * @method FaoarrefQuery groupByNeighborn() Group by the NeighborN column
 * @method FaoarrefQuery groupByNeighbors() Group by the NeighborS column
 * @method FaoarrefQuery groupByNeighborw() Group by the NeighborW column
 * @method FaoarrefQuery groupByNeighbore() Group by the NeighborE column
 * @method FaoarrefQuery groupByNorthernlatitude() Group by the NorthernLatitude column
 * @method FaoarrefQuery groupByNorthernlatitudens() Group by the NorthernLatitudeNS column
 * @method FaoarrefQuery groupBySouthernlatitude() Group by the SouthernLatitude column
 * @method FaoarrefQuery groupBySouthernlatitudens() Group by the SouthernLatitudeNS column
 * @method FaoarrefQuery groupByWesternlongitude() Group by the WesternLongitude column
 * @method FaoarrefQuery groupByWesternlongitudeew() Group by the WesternLongitudeEW column
 * @method FaoarrefQuery groupByEasternlongitude() Group by the EasternLongitude column
 * @method FaoarrefQuery groupByEasternlongitudeew() Group by the EasternLongitudeEW column
 * @method FaoarrefQuery groupByFamiliescount() Group by the FamiliesCount column
 * @method FaoarrefQuery groupByFamiliesno() Group by the FamiliesNo column
 * @method FaoarrefQuery groupByFamiliesref() Group by the FamiliesRef column
 * @method FaoarrefQuery groupBySpeciescount() Group by the SpeciesCount column
 * @method FaoarrefQuery groupBySpeciesno() Group by the SpeciesNo column
 * @method FaoarrefQuery groupBySpeciesref() Group by the SpeciesRef column
 * @method FaoarrefQuery groupByFamfisheries() Group by the FamFisheries column
 * @method FaoarrefQuery groupBySpecfisheries() Group by the SpecFisheries column
 * @method FaoarrefQuery groupByFamaqua() Group by the FamAqua column
 * @method FaoarrefQuery groupBySpecaqua() Group by the SpecAqua column
 * @method FaoarrefQuery groupByFambait() Group by the FamBait column
 * @method FaoarrefQuery groupBySpecbait() Group by the SpecBait column
 * @method FaoarrefQuery groupByFamornament() Group by the FamOrnament column
 * @method FaoarrefQuery groupBySpecornament() Group by the SpecOrnament column
 * @method FaoarrefQuery groupByFamsport() Group by the FamSport column
 * @method FaoarrefQuery groupBySpecsport() Group by the SpecSport column
 * @method FaoarrefQuery groupByFamhuman() Group by the FamHuman column
 * @method FaoarrefQuery groupBySpechuman() Group by the SpecHuman column
 * @method FaoarrefQuery groupByFamthreat() Group by the FamThreat column
 * @method FaoarrefQuery groupBySpecthreat() Group by the SpecThreat column
 * @method FaoarrefQuery groupByFamintro() Group by the FamIntro column
 * @method FaoarrefQuery groupBySpecintro() Group by the SpecIntro column
 * @method FaoarrefQuery groupByFamdanger() Group by the FamDanger column
 * @method FaoarrefQuery groupBySpecdanger() Group by the SpecDanger column
 * @method FaoarrefQuery groupByComplete() Group by the Complete column
 * @method FaoarrefQuery groupByCompleteref() Group by the CompleteRef column
 * @method FaoarrefQuery groupByContinentgrp() Group by the ContinentGrp column
 * @method FaoarrefQuery groupByModified() Group by the Modified column
 * @method FaoarrefQuery groupByTs() Group by the TS column
 *
 * @method FaoarrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FaoarrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FaoarrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Faoarref findOne(PropelPDO $con = null) Return the first Faoarref matching the query
 * @method Faoarref findOneOrCreate(PropelPDO $con = null) Return the first Faoarref matching the query, or a new Faoarref object populated from the query conditions when no match is found
 *
 * @method Faoarref findOneByFao(string $FAO) Return the first Faoarref filtered by the FAO column
 * @method Faoarref findOneByNote(string $Note) Return the first Faoarref filtered by the Note column
 * @method Faoarref findOneByCoastline(int $Coastline) Return the first Faoarref filtered by the Coastline column
 * @method Faoarref findOneByShelf(double $Shelf) Return the first Faoarref filtered by the Shelf column
 * @method Faoarref findOneByEezarea(double $EEZarea) Return the first Faoarref filtered by the EEZarea column
 * @method Faoarref findOneByLatdeg(int $LatDeg) Return the first Faoarref filtered by the LatDeg column
 * @method Faoarref findOneByLatmin(double $LatMin) Return the first Faoarref filtered by the LatMin column
 * @method Faoarref findOneByNS(string $N_S) Return the first Faoarref filtered by the N_S column
 * @method Faoarref findOneByLongdeg(int $LongDeg) Return the first Faoarref filtered by the LongDeg column
 * @method Faoarref findOneByLongmin(double $LongMin) Return the first Faoarref filtered by the LongMin column
 * @method Faoarref findOneByEW(string $E_W) Return the first Faoarref filtered by the E_W column
 * @method Faoarref findOneByNeighborn(int $NeighborN) Return the first Faoarref filtered by the NeighborN column
 * @method Faoarref findOneByNeighbors(int $NeighborS) Return the first Faoarref filtered by the NeighborS column
 * @method Faoarref findOneByNeighborw(int $NeighborW) Return the first Faoarref filtered by the NeighborW column
 * @method Faoarref findOneByNeighbore(int $NeighborE) Return the first Faoarref filtered by the NeighborE column
 * @method Faoarref findOneByNorthernlatitude(int $NorthernLatitude) Return the first Faoarref filtered by the NorthernLatitude column
 * @method Faoarref findOneByNorthernlatitudens(string $NorthernLatitudeNS) Return the first Faoarref filtered by the NorthernLatitudeNS column
 * @method Faoarref findOneBySouthernlatitude(int $SouthernLatitude) Return the first Faoarref filtered by the SouthernLatitude column
 * @method Faoarref findOneBySouthernlatitudens(string $SouthernLatitudeNS) Return the first Faoarref filtered by the SouthernLatitudeNS column
 * @method Faoarref findOneByWesternlongitude(int $WesternLongitude) Return the first Faoarref filtered by the WesternLongitude column
 * @method Faoarref findOneByWesternlongitudeew(string $WesternLongitudeEW) Return the first Faoarref filtered by the WesternLongitudeEW column
 * @method Faoarref findOneByEasternlongitude(int $EasternLongitude) Return the first Faoarref filtered by the EasternLongitude column
 * @method Faoarref findOneByEasternlongitudeew(string $EasternLongitudeEW) Return the first Faoarref filtered by the EasternLongitudeEW column
 * @method Faoarref findOneByFamiliescount(int $FamiliesCount) Return the first Faoarref filtered by the FamiliesCount column
 * @method Faoarref findOneByFamiliesno(int $FamiliesNo) Return the first Faoarref filtered by the FamiliesNo column
 * @method Faoarref findOneByFamiliesref(int $FamiliesRef) Return the first Faoarref filtered by the FamiliesRef column
 * @method Faoarref findOneBySpeciescount(int $SpeciesCount) Return the first Faoarref filtered by the SpeciesCount column
 * @method Faoarref findOneBySpeciesno(int $SpeciesNo) Return the first Faoarref filtered by the SpeciesNo column
 * @method Faoarref findOneBySpeciesref(int $SpeciesRef) Return the first Faoarref filtered by the SpeciesRef column
 * @method Faoarref findOneByFamfisheries(int $FamFisheries) Return the first Faoarref filtered by the FamFisheries column
 * @method Faoarref findOneBySpecfisheries(int $SpecFisheries) Return the first Faoarref filtered by the SpecFisheries column
 * @method Faoarref findOneByFamaqua(int $FamAqua) Return the first Faoarref filtered by the FamAqua column
 * @method Faoarref findOneBySpecaqua(int $SpecAqua) Return the first Faoarref filtered by the SpecAqua column
 * @method Faoarref findOneByFambait(int $FamBait) Return the first Faoarref filtered by the FamBait column
 * @method Faoarref findOneBySpecbait(int $SpecBait) Return the first Faoarref filtered by the SpecBait column
 * @method Faoarref findOneByFamornament(int $FamOrnament) Return the first Faoarref filtered by the FamOrnament column
 * @method Faoarref findOneBySpecornament(int $SpecOrnament) Return the first Faoarref filtered by the SpecOrnament column
 * @method Faoarref findOneByFamsport(int $FamSport) Return the first Faoarref filtered by the FamSport column
 * @method Faoarref findOneBySpecsport(int $SpecSport) Return the first Faoarref filtered by the SpecSport column
 * @method Faoarref findOneByFamhuman(int $FamHuman) Return the first Faoarref filtered by the FamHuman column
 * @method Faoarref findOneBySpechuman(int $SpecHuman) Return the first Faoarref filtered by the SpecHuman column
 * @method Faoarref findOneByFamthreat(int $FamThreat) Return the first Faoarref filtered by the FamThreat column
 * @method Faoarref findOneBySpecthreat(int $SpecThreat) Return the first Faoarref filtered by the SpecThreat column
 * @method Faoarref findOneByFamintro(int $FamIntro) Return the first Faoarref filtered by the FamIntro column
 * @method Faoarref findOneBySpecintro(int $SpecIntro) Return the first Faoarref filtered by the SpecIntro column
 * @method Faoarref findOneByFamdanger(int $FamDanger) Return the first Faoarref filtered by the FamDanger column
 * @method Faoarref findOneBySpecdanger(int $SpecDanger) Return the first Faoarref filtered by the SpecDanger column
 * @method Faoarref findOneByComplete(boolean $Complete) Return the first Faoarref filtered by the Complete column
 * @method Faoarref findOneByCompleteref(int $CompleteRef) Return the first Faoarref filtered by the CompleteRef column
 * @method Faoarref findOneByContinentgrp(string $ContinentGrp) Return the first Faoarref filtered by the ContinentGrp column
 * @method Faoarref findOneByModified(string $Modified) Return the first Faoarref filtered by the Modified column
 * @method Faoarref findOneByTs(string $TS) Return the first Faoarref filtered by the TS column
 *
 * @method array findByAreacode(int $AreaCode) Return Faoarref objects filtered by the AreaCode column
 * @method array findByFao(string $FAO) Return Faoarref objects filtered by the FAO column
 * @method array findByNote(string $Note) Return Faoarref objects filtered by the Note column
 * @method array findByCoastline(int $Coastline) Return Faoarref objects filtered by the Coastline column
 * @method array findByShelf(double $Shelf) Return Faoarref objects filtered by the Shelf column
 * @method array findByEezarea(double $EEZarea) Return Faoarref objects filtered by the EEZarea column
 * @method array findByLatdeg(int $LatDeg) Return Faoarref objects filtered by the LatDeg column
 * @method array findByLatmin(double $LatMin) Return Faoarref objects filtered by the LatMin column
 * @method array findByNS(string $N_S) Return Faoarref objects filtered by the N_S column
 * @method array findByLongdeg(int $LongDeg) Return Faoarref objects filtered by the LongDeg column
 * @method array findByLongmin(double $LongMin) Return Faoarref objects filtered by the LongMin column
 * @method array findByEW(string $E_W) Return Faoarref objects filtered by the E_W column
 * @method array findByNeighborn(int $NeighborN) Return Faoarref objects filtered by the NeighborN column
 * @method array findByNeighbors(int $NeighborS) Return Faoarref objects filtered by the NeighborS column
 * @method array findByNeighborw(int $NeighborW) Return Faoarref objects filtered by the NeighborW column
 * @method array findByNeighbore(int $NeighborE) Return Faoarref objects filtered by the NeighborE column
 * @method array findByNorthernlatitude(int $NorthernLatitude) Return Faoarref objects filtered by the NorthernLatitude column
 * @method array findByNorthernlatitudens(string $NorthernLatitudeNS) Return Faoarref objects filtered by the NorthernLatitudeNS column
 * @method array findBySouthernlatitude(int $SouthernLatitude) Return Faoarref objects filtered by the SouthernLatitude column
 * @method array findBySouthernlatitudens(string $SouthernLatitudeNS) Return Faoarref objects filtered by the SouthernLatitudeNS column
 * @method array findByWesternlongitude(int $WesternLongitude) Return Faoarref objects filtered by the WesternLongitude column
 * @method array findByWesternlongitudeew(string $WesternLongitudeEW) Return Faoarref objects filtered by the WesternLongitudeEW column
 * @method array findByEasternlongitude(int $EasternLongitude) Return Faoarref objects filtered by the EasternLongitude column
 * @method array findByEasternlongitudeew(string $EasternLongitudeEW) Return Faoarref objects filtered by the EasternLongitudeEW column
 * @method array findByFamiliescount(int $FamiliesCount) Return Faoarref objects filtered by the FamiliesCount column
 * @method array findByFamiliesno(int $FamiliesNo) Return Faoarref objects filtered by the FamiliesNo column
 * @method array findByFamiliesref(int $FamiliesRef) Return Faoarref objects filtered by the FamiliesRef column
 * @method array findBySpeciescount(int $SpeciesCount) Return Faoarref objects filtered by the SpeciesCount column
 * @method array findBySpeciesno(int $SpeciesNo) Return Faoarref objects filtered by the SpeciesNo column
 * @method array findBySpeciesref(int $SpeciesRef) Return Faoarref objects filtered by the SpeciesRef column
 * @method array findByFamfisheries(int $FamFisheries) Return Faoarref objects filtered by the FamFisheries column
 * @method array findBySpecfisheries(int $SpecFisheries) Return Faoarref objects filtered by the SpecFisheries column
 * @method array findByFamaqua(int $FamAqua) Return Faoarref objects filtered by the FamAqua column
 * @method array findBySpecaqua(int $SpecAqua) Return Faoarref objects filtered by the SpecAqua column
 * @method array findByFambait(int $FamBait) Return Faoarref objects filtered by the FamBait column
 * @method array findBySpecbait(int $SpecBait) Return Faoarref objects filtered by the SpecBait column
 * @method array findByFamornament(int $FamOrnament) Return Faoarref objects filtered by the FamOrnament column
 * @method array findBySpecornament(int $SpecOrnament) Return Faoarref objects filtered by the SpecOrnament column
 * @method array findByFamsport(int $FamSport) Return Faoarref objects filtered by the FamSport column
 * @method array findBySpecsport(int $SpecSport) Return Faoarref objects filtered by the SpecSport column
 * @method array findByFamhuman(int $FamHuman) Return Faoarref objects filtered by the FamHuman column
 * @method array findBySpechuman(int $SpecHuman) Return Faoarref objects filtered by the SpecHuman column
 * @method array findByFamthreat(int $FamThreat) Return Faoarref objects filtered by the FamThreat column
 * @method array findBySpecthreat(int $SpecThreat) Return Faoarref objects filtered by the SpecThreat column
 * @method array findByFamintro(int $FamIntro) Return Faoarref objects filtered by the FamIntro column
 * @method array findBySpecintro(int $SpecIntro) Return Faoarref objects filtered by the SpecIntro column
 * @method array findByFamdanger(int $FamDanger) Return Faoarref objects filtered by the FamDanger column
 * @method array findBySpecdanger(int $SpecDanger) Return Faoarref objects filtered by the SpecDanger column
 * @method array findByComplete(boolean $Complete) Return Faoarref objects filtered by the Complete column
 * @method array findByCompleteref(int $CompleteRef) Return Faoarref objects filtered by the CompleteRef column
 * @method array findByContinentgrp(string $ContinentGrp) Return Faoarref objects filtered by the ContinentGrp column
 * @method array findByModified(string $Modified) Return Faoarref objects filtered by the Modified column
 * @method array findByTs(string $TS) Return Faoarref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFaoarrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFaoarrefQuery object.
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
            $modelName = 'Faoarref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FaoarrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FaoarrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FaoarrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FaoarrefQuery) {
            return $criteria;
        }
        $query = new FaoarrefQuery(null, null, $modelAlias);

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
     * @return   Faoarref|Faoarref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FaoarrefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Faoarref A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAreacode($key, $con = null)
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
     * @return                 Faoarref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AreaCode`, `FAO`, `Note`, `Coastline`, `Shelf`, `EEZarea`, `LatDeg`, `LatMin`, `N_S`, `LongDeg`, `LongMin`, `E_W`, `NeighborN`, `NeighborS`, `NeighborW`, `NeighborE`, `NorthernLatitude`, `NorthernLatitudeNS`, `SouthernLatitude`, `SouthernLatitudeNS`, `WesternLongitude`, `WesternLongitudeEW`, `EasternLongitude`, `EasternLongitudeEW`, `FamiliesCount`, `FamiliesNo`, `FamiliesRef`, `SpeciesCount`, `SpeciesNo`, `SpeciesRef`, `FamFisheries`, `SpecFisheries`, `FamAqua`, `SpecAqua`, `FamBait`, `SpecBait`, `FamOrnament`, `SpecOrnament`, `FamSport`, `SpecSport`, `FamHuman`, `SpecHuman`, `FamThreat`, `SpecThreat`, `FamIntro`, `SpecIntro`, `FamDanger`, `SpecDanger`, `Complete`, `CompleteRef`, `ContinentGrp`, `Modified`, `TS` FROM `faoarref` WHERE `AreaCode` = :p0';
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
            $obj = new Faoarref();
            $obj->hydrate($row);
            FaoarrefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Faoarref|Faoarref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Faoarref[]|mixed the list of results, formatted by the current formatter
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
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FaoarrefPeer::AREACODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FaoarrefPeer::AREACODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AreaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacode(1234); // WHERE AreaCode = 1234
     * $query->filterByAreacode(array(12, 34)); // WHERE AreaCode IN (12, 34)
     * $query->filterByAreacode(array('min' => 12)); // WHERE AreaCode >= 12
     * $query->filterByAreacode(array('max' => 12)); // WHERE AreaCode <= 12
     * </code>
     *
     * @param     mixed $areacode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(FaoarrefPeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(FaoarrefPeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::AREACODE, $areacode, $comparison);
    }

    /**
     * Filter the query on the FAO column
     *
     * Example usage:
     * <code>
     * $query->filterByFao('fooValue');   // WHERE FAO = 'fooValue'
     * $query->filterByFao('%fooValue%'); // WHERE FAO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFao($fao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fao)) {
                $fao = str_replace('*', '%', $fao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAO, $fao, $comparison);
    }

    /**
     * Filter the query on the Note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote('fooValue');   // WHERE Note = 'fooValue'
     * $query->filterByNote('%fooValue%'); // WHERE Note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $note The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($note)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $note)) {
                $note = str_replace('*', '%', $note);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::NOTE, $note, $comparison);
    }

    /**
     * Filter the query on the Coastline column
     *
     * Example usage:
     * <code>
     * $query->filterByCoastline(1234); // WHERE Coastline = 1234
     * $query->filterByCoastline(array(12, 34)); // WHERE Coastline IN (12, 34)
     * $query->filterByCoastline(array('min' => 12)); // WHERE Coastline >= 12
     * $query->filterByCoastline(array('max' => 12)); // WHERE Coastline <= 12
     * </code>
     *
     * @param     mixed $coastline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByCoastline($coastline = null, $comparison = null)
    {
        if (is_array($coastline)) {
            $useMinMax = false;
            if (isset($coastline['min'])) {
                $this->addUsingAlias(FaoarrefPeer::COASTLINE, $coastline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coastline['max'])) {
                $this->addUsingAlias(FaoarrefPeer::COASTLINE, $coastline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::COASTLINE, $coastline, $comparison);
    }

    /**
     * Filter the query on the Shelf column
     *
     * Example usage:
     * <code>
     * $query->filterByShelf(1234); // WHERE Shelf = 1234
     * $query->filterByShelf(array(12, 34)); // WHERE Shelf IN (12, 34)
     * $query->filterByShelf(array('min' => 12)); // WHERE Shelf >= 12
     * $query->filterByShelf(array('max' => 12)); // WHERE Shelf <= 12
     * </code>
     *
     * @param     mixed $shelf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByShelf($shelf = null, $comparison = null)
    {
        if (is_array($shelf)) {
            $useMinMax = false;
            if (isset($shelf['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SHELF, $shelf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shelf['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SHELF, $shelf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SHELF, $shelf, $comparison);
    }

    /**
     * Filter the query on the EEZarea column
     *
     * Example usage:
     * <code>
     * $query->filterByEezarea(1234); // WHERE EEZarea = 1234
     * $query->filterByEezarea(array(12, 34)); // WHERE EEZarea IN (12, 34)
     * $query->filterByEezarea(array('min' => 12)); // WHERE EEZarea >= 12
     * $query->filterByEezarea(array('max' => 12)); // WHERE EEZarea <= 12
     * </code>
     *
     * @param     mixed $eezarea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByEezarea($eezarea = null, $comparison = null)
    {
        if (is_array($eezarea)) {
            $useMinMax = false;
            if (isset($eezarea['min'])) {
                $this->addUsingAlias(FaoarrefPeer::EEZAREA, $eezarea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eezarea['max'])) {
                $this->addUsingAlias(FaoarrefPeer::EEZAREA, $eezarea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::EEZAREA, $eezarea, $comparison);
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
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByLatdeg($latdeg = null, $comparison = null)
    {
        if (is_array($latdeg)) {
            $useMinMax = false;
            if (isset($latdeg['min'])) {
                $this->addUsingAlias(FaoarrefPeer::LATDEG, $latdeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latdeg['max'])) {
                $this->addUsingAlias(FaoarrefPeer::LATDEG, $latdeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::LATDEG, $latdeg, $comparison);
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
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByLatmin($latmin = null, $comparison = null)
    {
        if (is_array($latmin)) {
            $useMinMax = false;
            if (isset($latmin['min'])) {
                $this->addUsingAlias(FaoarrefPeer::LATMIN, $latmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latmin['max'])) {
                $this->addUsingAlias(FaoarrefPeer::LATMIN, $latmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::LATMIN, $latmin, $comparison);
    }

    /**
     * Filter the query on the N_S column
     *
     * Example usage:
     * <code>
     * $query->filterByNS('fooValue');   // WHERE N_S = 'fooValue'
     * $query->filterByNS('%fooValue%'); // WHERE N_S LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nS The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByNS($nS = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nS)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nS)) {
                $nS = str_replace('*', '%', $nS);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::N_S, $nS, $comparison);
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
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByLongdeg($longdeg = null, $comparison = null)
    {
        if (is_array($longdeg)) {
            $useMinMax = false;
            if (isset($longdeg['min'])) {
                $this->addUsingAlias(FaoarrefPeer::LONGDEG, $longdeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longdeg['max'])) {
                $this->addUsingAlias(FaoarrefPeer::LONGDEG, $longdeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::LONGDEG, $longdeg, $comparison);
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
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByLongmin($longmin = null, $comparison = null)
    {
        if (is_array($longmin)) {
            $useMinMax = false;
            if (isset($longmin['min'])) {
                $this->addUsingAlias(FaoarrefPeer::LONGMIN, $longmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longmin['max'])) {
                $this->addUsingAlias(FaoarrefPeer::LONGMIN, $longmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::LONGMIN, $longmin, $comparison);
    }

    /**
     * Filter the query on the E_W column
     *
     * Example usage:
     * <code>
     * $query->filterByEW('fooValue');   // WHERE E_W = 'fooValue'
     * $query->filterByEW('%fooValue%'); // WHERE E_W LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eW The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByEW($eW = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eW)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eW)) {
                $eW = str_replace('*', '%', $eW);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::E_W, $eW, $comparison);
    }

    /**
     * Filter the query on the NeighborN column
     *
     * Example usage:
     * <code>
     * $query->filterByNeighborn(1234); // WHERE NeighborN = 1234
     * $query->filterByNeighborn(array(12, 34)); // WHERE NeighborN IN (12, 34)
     * $query->filterByNeighborn(array('min' => 12)); // WHERE NeighborN >= 12
     * $query->filterByNeighborn(array('max' => 12)); // WHERE NeighborN <= 12
     * </code>
     *
     * @param     mixed $neighborn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByNeighborn($neighborn = null, $comparison = null)
    {
        if (is_array($neighborn)) {
            $useMinMax = false;
            if (isset($neighborn['min'])) {
                $this->addUsingAlias(FaoarrefPeer::NEIGHBORN, $neighborn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($neighborn['max'])) {
                $this->addUsingAlias(FaoarrefPeer::NEIGHBORN, $neighborn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::NEIGHBORN, $neighborn, $comparison);
    }

    /**
     * Filter the query on the NeighborS column
     *
     * Example usage:
     * <code>
     * $query->filterByNeighbors(1234); // WHERE NeighborS = 1234
     * $query->filterByNeighbors(array(12, 34)); // WHERE NeighborS IN (12, 34)
     * $query->filterByNeighbors(array('min' => 12)); // WHERE NeighborS >= 12
     * $query->filterByNeighbors(array('max' => 12)); // WHERE NeighborS <= 12
     * </code>
     *
     * @param     mixed $neighbors The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByNeighbors($neighbors = null, $comparison = null)
    {
        if (is_array($neighbors)) {
            $useMinMax = false;
            if (isset($neighbors['min'])) {
                $this->addUsingAlias(FaoarrefPeer::NEIGHBORS, $neighbors['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($neighbors['max'])) {
                $this->addUsingAlias(FaoarrefPeer::NEIGHBORS, $neighbors['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::NEIGHBORS, $neighbors, $comparison);
    }

    /**
     * Filter the query on the NeighborW column
     *
     * Example usage:
     * <code>
     * $query->filterByNeighborw(1234); // WHERE NeighborW = 1234
     * $query->filterByNeighborw(array(12, 34)); // WHERE NeighborW IN (12, 34)
     * $query->filterByNeighborw(array('min' => 12)); // WHERE NeighborW >= 12
     * $query->filterByNeighborw(array('max' => 12)); // WHERE NeighborW <= 12
     * </code>
     *
     * @param     mixed $neighborw The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByNeighborw($neighborw = null, $comparison = null)
    {
        if (is_array($neighborw)) {
            $useMinMax = false;
            if (isset($neighborw['min'])) {
                $this->addUsingAlias(FaoarrefPeer::NEIGHBORW, $neighborw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($neighborw['max'])) {
                $this->addUsingAlias(FaoarrefPeer::NEIGHBORW, $neighborw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::NEIGHBORW, $neighborw, $comparison);
    }

    /**
     * Filter the query on the NeighborE column
     *
     * Example usage:
     * <code>
     * $query->filterByNeighbore(1234); // WHERE NeighborE = 1234
     * $query->filterByNeighbore(array(12, 34)); // WHERE NeighborE IN (12, 34)
     * $query->filterByNeighbore(array('min' => 12)); // WHERE NeighborE >= 12
     * $query->filterByNeighbore(array('max' => 12)); // WHERE NeighborE <= 12
     * </code>
     *
     * @param     mixed $neighbore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByNeighbore($neighbore = null, $comparison = null)
    {
        if (is_array($neighbore)) {
            $useMinMax = false;
            if (isset($neighbore['min'])) {
                $this->addUsingAlias(FaoarrefPeer::NEIGHBORE, $neighbore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($neighbore['max'])) {
                $this->addUsingAlias(FaoarrefPeer::NEIGHBORE, $neighbore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::NEIGHBORE, $neighbore, $comparison);
    }

    /**
     * Filter the query on the NorthernLatitude column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthernlatitude(1234); // WHERE NorthernLatitude = 1234
     * $query->filterByNorthernlatitude(array(12, 34)); // WHERE NorthernLatitude IN (12, 34)
     * $query->filterByNorthernlatitude(array('min' => 12)); // WHERE NorthernLatitude >= 12
     * $query->filterByNorthernlatitude(array('max' => 12)); // WHERE NorthernLatitude <= 12
     * </code>
     *
     * @param     mixed $northernlatitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByNorthernlatitude($northernlatitude = null, $comparison = null)
    {
        if (is_array($northernlatitude)) {
            $useMinMax = false;
            if (isset($northernlatitude['min'])) {
                $this->addUsingAlias(FaoarrefPeer::NORTHERNLATITUDE, $northernlatitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($northernlatitude['max'])) {
                $this->addUsingAlias(FaoarrefPeer::NORTHERNLATITUDE, $northernlatitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::NORTHERNLATITUDE, $northernlatitude, $comparison);
    }

    /**
     * Filter the query on the NorthernLatitudeNS column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthernlatitudens('fooValue');   // WHERE NorthernLatitudeNS = 'fooValue'
     * $query->filterByNorthernlatitudens('%fooValue%'); // WHERE NorthernLatitudeNS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northernlatitudens The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByNorthernlatitudens($northernlatitudens = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northernlatitudens)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northernlatitudens)) {
                $northernlatitudens = str_replace('*', '%', $northernlatitudens);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::NORTHERNLATITUDENS, $northernlatitudens, $comparison);
    }

    /**
     * Filter the query on the SouthernLatitude column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthernlatitude(1234); // WHERE SouthernLatitude = 1234
     * $query->filterBySouthernlatitude(array(12, 34)); // WHERE SouthernLatitude IN (12, 34)
     * $query->filterBySouthernlatitude(array('min' => 12)); // WHERE SouthernLatitude >= 12
     * $query->filterBySouthernlatitude(array('max' => 12)); // WHERE SouthernLatitude <= 12
     * </code>
     *
     * @param     mixed $southernlatitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySouthernlatitude($southernlatitude = null, $comparison = null)
    {
        if (is_array($southernlatitude)) {
            $useMinMax = false;
            if (isset($southernlatitude['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SOUTHERNLATITUDE, $southernlatitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southernlatitude['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SOUTHERNLATITUDE, $southernlatitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SOUTHERNLATITUDE, $southernlatitude, $comparison);
    }

    /**
     * Filter the query on the SouthernLatitudeNS column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthernlatitudens('fooValue');   // WHERE SouthernLatitudeNS = 'fooValue'
     * $query->filterBySouthernlatitudens('%fooValue%'); // WHERE SouthernLatitudeNS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $southernlatitudens The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySouthernlatitudens($southernlatitudens = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($southernlatitudens)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $southernlatitudens)) {
                $southernlatitudens = str_replace('*', '%', $southernlatitudens);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SOUTHERNLATITUDENS, $southernlatitudens, $comparison);
    }

    /**
     * Filter the query on the WesternLongitude column
     *
     * Example usage:
     * <code>
     * $query->filterByWesternlongitude(1234); // WHERE WesternLongitude = 1234
     * $query->filterByWesternlongitude(array(12, 34)); // WHERE WesternLongitude IN (12, 34)
     * $query->filterByWesternlongitude(array('min' => 12)); // WHERE WesternLongitude >= 12
     * $query->filterByWesternlongitude(array('max' => 12)); // WHERE WesternLongitude <= 12
     * </code>
     *
     * @param     mixed $westernlongitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByWesternlongitude($westernlongitude = null, $comparison = null)
    {
        if (is_array($westernlongitude)) {
            $useMinMax = false;
            if (isset($westernlongitude['min'])) {
                $this->addUsingAlias(FaoarrefPeer::WESTERNLONGITUDE, $westernlongitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($westernlongitude['max'])) {
                $this->addUsingAlias(FaoarrefPeer::WESTERNLONGITUDE, $westernlongitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::WESTERNLONGITUDE, $westernlongitude, $comparison);
    }

    /**
     * Filter the query on the WesternLongitudeEW column
     *
     * Example usage:
     * <code>
     * $query->filterByWesternlongitudeew('fooValue');   // WHERE WesternLongitudeEW = 'fooValue'
     * $query->filterByWesternlongitudeew('%fooValue%'); // WHERE WesternLongitudeEW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $westernlongitudeew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByWesternlongitudeew($westernlongitudeew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($westernlongitudeew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $westernlongitudeew)) {
                $westernlongitudeew = str_replace('*', '%', $westernlongitudeew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::WESTERNLONGITUDEEW, $westernlongitudeew, $comparison);
    }

    /**
     * Filter the query on the EasternLongitude column
     *
     * Example usage:
     * <code>
     * $query->filterByEasternlongitude(1234); // WHERE EasternLongitude = 1234
     * $query->filterByEasternlongitude(array(12, 34)); // WHERE EasternLongitude IN (12, 34)
     * $query->filterByEasternlongitude(array('min' => 12)); // WHERE EasternLongitude >= 12
     * $query->filterByEasternlongitude(array('max' => 12)); // WHERE EasternLongitude <= 12
     * </code>
     *
     * @param     mixed $easternlongitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByEasternlongitude($easternlongitude = null, $comparison = null)
    {
        if (is_array($easternlongitude)) {
            $useMinMax = false;
            if (isset($easternlongitude['min'])) {
                $this->addUsingAlias(FaoarrefPeer::EASTERNLONGITUDE, $easternlongitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($easternlongitude['max'])) {
                $this->addUsingAlias(FaoarrefPeer::EASTERNLONGITUDE, $easternlongitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::EASTERNLONGITUDE, $easternlongitude, $comparison);
    }

    /**
     * Filter the query on the EasternLongitudeEW column
     *
     * Example usage:
     * <code>
     * $query->filterByEasternlongitudeew('fooValue');   // WHERE EasternLongitudeEW = 'fooValue'
     * $query->filterByEasternlongitudeew('%fooValue%'); // WHERE EasternLongitudeEW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $easternlongitudeew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByEasternlongitudeew($easternlongitudeew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($easternlongitudeew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $easternlongitudeew)) {
                $easternlongitudeew = str_replace('*', '%', $easternlongitudeew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::EASTERNLONGITUDEEW, $easternlongitudeew, $comparison);
    }

    /**
     * Filter the query on the FamiliesCount column
     *
     * Example usage:
     * <code>
     * $query->filterByFamiliescount(1234); // WHERE FamiliesCount = 1234
     * $query->filterByFamiliescount(array(12, 34)); // WHERE FamiliesCount IN (12, 34)
     * $query->filterByFamiliescount(array('min' => 12)); // WHERE FamiliesCount >= 12
     * $query->filterByFamiliescount(array('max' => 12)); // WHERE FamiliesCount <= 12
     * </code>
     *
     * @param     mixed $familiescount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamiliescount($familiescount = null, $comparison = null)
    {
        if (is_array($familiescount)) {
            $useMinMax = false;
            if (isset($familiescount['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMILIESCOUNT, $familiescount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($familiescount['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMILIESCOUNT, $familiescount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMILIESCOUNT, $familiescount, $comparison);
    }

    /**
     * Filter the query on the FamiliesNo column
     *
     * Example usage:
     * <code>
     * $query->filterByFamiliesno(1234); // WHERE FamiliesNo = 1234
     * $query->filterByFamiliesno(array(12, 34)); // WHERE FamiliesNo IN (12, 34)
     * $query->filterByFamiliesno(array('min' => 12)); // WHERE FamiliesNo >= 12
     * $query->filterByFamiliesno(array('max' => 12)); // WHERE FamiliesNo <= 12
     * </code>
     *
     * @param     mixed $familiesno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamiliesno($familiesno = null, $comparison = null)
    {
        if (is_array($familiesno)) {
            $useMinMax = false;
            if (isset($familiesno['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMILIESNO, $familiesno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($familiesno['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMILIESNO, $familiesno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMILIESNO, $familiesno, $comparison);
    }

    /**
     * Filter the query on the FamiliesRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFamiliesref(1234); // WHERE FamiliesRef = 1234
     * $query->filterByFamiliesref(array(12, 34)); // WHERE FamiliesRef IN (12, 34)
     * $query->filterByFamiliesref(array('min' => 12)); // WHERE FamiliesRef >= 12
     * $query->filterByFamiliesref(array('max' => 12)); // WHERE FamiliesRef <= 12
     * </code>
     *
     * @param     mixed $familiesref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamiliesref($familiesref = null, $comparison = null)
    {
        if (is_array($familiesref)) {
            $useMinMax = false;
            if (isset($familiesref['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMILIESREF, $familiesref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($familiesref['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMILIESREF, $familiesref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMILIESREF, $familiesref, $comparison);
    }

    /**
     * Filter the query on the SpeciesCount column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciescount(1234); // WHERE SpeciesCount = 1234
     * $query->filterBySpeciescount(array(12, 34)); // WHERE SpeciesCount IN (12, 34)
     * $query->filterBySpeciescount(array('min' => 12)); // WHERE SpeciesCount >= 12
     * $query->filterBySpeciescount(array('max' => 12)); // WHERE SpeciesCount <= 12
     * </code>
     *
     * @param     mixed $speciescount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpeciescount($speciescount = null, $comparison = null)
    {
        if (is_array($speciescount)) {
            $useMinMax = false;
            if (isset($speciescount['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECIESCOUNT, $speciescount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciescount['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECIESCOUNT, $speciescount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECIESCOUNT, $speciescount, $comparison);
    }

    /**
     * Filter the query on the SpeciesNo column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciesno(1234); // WHERE SpeciesNo = 1234
     * $query->filterBySpeciesno(array(12, 34)); // WHERE SpeciesNo IN (12, 34)
     * $query->filterBySpeciesno(array('min' => 12)); // WHERE SpeciesNo >= 12
     * $query->filterBySpeciesno(array('max' => 12)); // WHERE SpeciesNo <= 12
     * </code>
     *
     * @param     mixed $speciesno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpeciesno($speciesno = null, $comparison = null)
    {
        if (is_array($speciesno)) {
            $useMinMax = false;
            if (isset($speciesno['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECIESNO, $speciesno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciesno['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECIESNO, $speciesno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECIESNO, $speciesno, $comparison);
    }

    /**
     * Filter the query on the SpeciesRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciesref(1234); // WHERE SpeciesRef = 1234
     * $query->filterBySpeciesref(array(12, 34)); // WHERE SpeciesRef IN (12, 34)
     * $query->filterBySpeciesref(array('min' => 12)); // WHERE SpeciesRef >= 12
     * $query->filterBySpeciesref(array('max' => 12)); // WHERE SpeciesRef <= 12
     * </code>
     *
     * @param     mixed $speciesref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpeciesref($speciesref = null, $comparison = null)
    {
        if (is_array($speciesref)) {
            $useMinMax = false;
            if (isset($speciesref['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECIESREF, $speciesref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciesref['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECIESREF, $speciesref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECIESREF, $speciesref, $comparison);
    }

    /**
     * Filter the query on the FamFisheries column
     *
     * Example usage:
     * <code>
     * $query->filterByFamfisheries(1234); // WHERE FamFisheries = 1234
     * $query->filterByFamfisheries(array(12, 34)); // WHERE FamFisheries IN (12, 34)
     * $query->filterByFamfisheries(array('min' => 12)); // WHERE FamFisheries >= 12
     * $query->filterByFamfisheries(array('max' => 12)); // WHERE FamFisheries <= 12
     * </code>
     *
     * @param     mixed $famfisheries The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamfisheries($famfisheries = null, $comparison = null)
    {
        if (is_array($famfisheries)) {
            $useMinMax = false;
            if (isset($famfisheries['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMFISHERIES, $famfisheries['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famfisheries['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMFISHERIES, $famfisheries['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMFISHERIES, $famfisheries, $comparison);
    }

    /**
     * Filter the query on the SpecFisheries column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecfisheries(1234); // WHERE SpecFisheries = 1234
     * $query->filterBySpecfisheries(array(12, 34)); // WHERE SpecFisheries IN (12, 34)
     * $query->filterBySpecfisheries(array('min' => 12)); // WHERE SpecFisheries >= 12
     * $query->filterBySpecfisheries(array('max' => 12)); // WHERE SpecFisheries <= 12
     * </code>
     *
     * @param     mixed $specfisheries The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpecfisheries($specfisheries = null, $comparison = null)
    {
        if (is_array($specfisheries)) {
            $useMinMax = false;
            if (isset($specfisheries['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECFISHERIES, $specfisheries['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($specfisheries['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECFISHERIES, $specfisheries['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECFISHERIES, $specfisheries, $comparison);
    }

    /**
     * Filter the query on the FamAqua column
     *
     * Example usage:
     * <code>
     * $query->filterByFamaqua(1234); // WHERE FamAqua = 1234
     * $query->filterByFamaqua(array(12, 34)); // WHERE FamAqua IN (12, 34)
     * $query->filterByFamaqua(array('min' => 12)); // WHERE FamAqua >= 12
     * $query->filterByFamaqua(array('max' => 12)); // WHERE FamAqua <= 12
     * </code>
     *
     * @param     mixed $famaqua The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamaqua($famaqua = null, $comparison = null)
    {
        if (is_array($famaqua)) {
            $useMinMax = false;
            if (isset($famaqua['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMAQUA, $famaqua['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famaqua['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMAQUA, $famaqua['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMAQUA, $famaqua, $comparison);
    }

    /**
     * Filter the query on the SpecAqua column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecaqua(1234); // WHERE SpecAqua = 1234
     * $query->filterBySpecaqua(array(12, 34)); // WHERE SpecAqua IN (12, 34)
     * $query->filterBySpecaqua(array('min' => 12)); // WHERE SpecAqua >= 12
     * $query->filterBySpecaqua(array('max' => 12)); // WHERE SpecAqua <= 12
     * </code>
     *
     * @param     mixed $specaqua The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpecaqua($specaqua = null, $comparison = null)
    {
        if (is_array($specaqua)) {
            $useMinMax = false;
            if (isset($specaqua['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECAQUA, $specaqua['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($specaqua['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECAQUA, $specaqua['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECAQUA, $specaqua, $comparison);
    }

    /**
     * Filter the query on the FamBait column
     *
     * Example usage:
     * <code>
     * $query->filterByFambait(1234); // WHERE FamBait = 1234
     * $query->filterByFambait(array(12, 34)); // WHERE FamBait IN (12, 34)
     * $query->filterByFambait(array('min' => 12)); // WHERE FamBait >= 12
     * $query->filterByFambait(array('max' => 12)); // WHERE FamBait <= 12
     * </code>
     *
     * @param     mixed $fambait The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFambait($fambait = null, $comparison = null)
    {
        if (is_array($fambait)) {
            $useMinMax = false;
            if (isset($fambait['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMBAIT, $fambait['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fambait['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMBAIT, $fambait['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMBAIT, $fambait, $comparison);
    }

    /**
     * Filter the query on the SpecBait column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecbait(1234); // WHERE SpecBait = 1234
     * $query->filterBySpecbait(array(12, 34)); // WHERE SpecBait IN (12, 34)
     * $query->filterBySpecbait(array('min' => 12)); // WHERE SpecBait >= 12
     * $query->filterBySpecbait(array('max' => 12)); // WHERE SpecBait <= 12
     * </code>
     *
     * @param     mixed $specbait The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpecbait($specbait = null, $comparison = null)
    {
        if (is_array($specbait)) {
            $useMinMax = false;
            if (isset($specbait['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECBAIT, $specbait['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($specbait['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECBAIT, $specbait['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECBAIT, $specbait, $comparison);
    }

    /**
     * Filter the query on the FamOrnament column
     *
     * Example usage:
     * <code>
     * $query->filterByFamornament(1234); // WHERE FamOrnament = 1234
     * $query->filterByFamornament(array(12, 34)); // WHERE FamOrnament IN (12, 34)
     * $query->filterByFamornament(array('min' => 12)); // WHERE FamOrnament >= 12
     * $query->filterByFamornament(array('max' => 12)); // WHERE FamOrnament <= 12
     * </code>
     *
     * @param     mixed $famornament The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamornament($famornament = null, $comparison = null)
    {
        if (is_array($famornament)) {
            $useMinMax = false;
            if (isset($famornament['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMORNAMENT, $famornament['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famornament['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMORNAMENT, $famornament['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMORNAMENT, $famornament, $comparison);
    }

    /**
     * Filter the query on the SpecOrnament column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecornament(1234); // WHERE SpecOrnament = 1234
     * $query->filterBySpecornament(array(12, 34)); // WHERE SpecOrnament IN (12, 34)
     * $query->filterBySpecornament(array('min' => 12)); // WHERE SpecOrnament >= 12
     * $query->filterBySpecornament(array('max' => 12)); // WHERE SpecOrnament <= 12
     * </code>
     *
     * @param     mixed $specornament The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpecornament($specornament = null, $comparison = null)
    {
        if (is_array($specornament)) {
            $useMinMax = false;
            if (isset($specornament['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECORNAMENT, $specornament['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($specornament['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECORNAMENT, $specornament['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECORNAMENT, $specornament, $comparison);
    }

    /**
     * Filter the query on the FamSport column
     *
     * Example usage:
     * <code>
     * $query->filterByFamsport(1234); // WHERE FamSport = 1234
     * $query->filterByFamsport(array(12, 34)); // WHERE FamSport IN (12, 34)
     * $query->filterByFamsport(array('min' => 12)); // WHERE FamSport >= 12
     * $query->filterByFamsport(array('max' => 12)); // WHERE FamSport <= 12
     * </code>
     *
     * @param     mixed $famsport The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamsport($famsport = null, $comparison = null)
    {
        if (is_array($famsport)) {
            $useMinMax = false;
            if (isset($famsport['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMSPORT, $famsport['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famsport['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMSPORT, $famsport['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMSPORT, $famsport, $comparison);
    }

    /**
     * Filter the query on the SpecSport column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecsport(1234); // WHERE SpecSport = 1234
     * $query->filterBySpecsport(array(12, 34)); // WHERE SpecSport IN (12, 34)
     * $query->filterBySpecsport(array('min' => 12)); // WHERE SpecSport >= 12
     * $query->filterBySpecsport(array('max' => 12)); // WHERE SpecSport <= 12
     * </code>
     *
     * @param     mixed $specsport The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpecsport($specsport = null, $comparison = null)
    {
        if (is_array($specsport)) {
            $useMinMax = false;
            if (isset($specsport['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECSPORT, $specsport['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($specsport['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECSPORT, $specsport['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECSPORT, $specsport, $comparison);
    }

    /**
     * Filter the query on the FamHuman column
     *
     * Example usage:
     * <code>
     * $query->filterByFamhuman(1234); // WHERE FamHuman = 1234
     * $query->filterByFamhuman(array(12, 34)); // WHERE FamHuman IN (12, 34)
     * $query->filterByFamhuman(array('min' => 12)); // WHERE FamHuman >= 12
     * $query->filterByFamhuman(array('max' => 12)); // WHERE FamHuman <= 12
     * </code>
     *
     * @param     mixed $famhuman The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamhuman($famhuman = null, $comparison = null)
    {
        if (is_array($famhuman)) {
            $useMinMax = false;
            if (isset($famhuman['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMHUMAN, $famhuman['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famhuman['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMHUMAN, $famhuman['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMHUMAN, $famhuman, $comparison);
    }

    /**
     * Filter the query on the SpecHuman column
     *
     * Example usage:
     * <code>
     * $query->filterBySpechuman(1234); // WHERE SpecHuman = 1234
     * $query->filterBySpechuman(array(12, 34)); // WHERE SpecHuman IN (12, 34)
     * $query->filterBySpechuman(array('min' => 12)); // WHERE SpecHuman >= 12
     * $query->filterBySpechuman(array('max' => 12)); // WHERE SpecHuman <= 12
     * </code>
     *
     * @param     mixed $spechuman The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpechuman($spechuman = null, $comparison = null)
    {
        if (is_array($spechuman)) {
            $useMinMax = false;
            if (isset($spechuman['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECHUMAN, $spechuman['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spechuman['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECHUMAN, $spechuman['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECHUMAN, $spechuman, $comparison);
    }

    /**
     * Filter the query on the FamThreat column
     *
     * Example usage:
     * <code>
     * $query->filterByFamthreat(1234); // WHERE FamThreat = 1234
     * $query->filterByFamthreat(array(12, 34)); // WHERE FamThreat IN (12, 34)
     * $query->filterByFamthreat(array('min' => 12)); // WHERE FamThreat >= 12
     * $query->filterByFamthreat(array('max' => 12)); // WHERE FamThreat <= 12
     * </code>
     *
     * @param     mixed $famthreat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamthreat($famthreat = null, $comparison = null)
    {
        if (is_array($famthreat)) {
            $useMinMax = false;
            if (isset($famthreat['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMTHREAT, $famthreat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famthreat['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMTHREAT, $famthreat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMTHREAT, $famthreat, $comparison);
    }

    /**
     * Filter the query on the SpecThreat column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecthreat(1234); // WHERE SpecThreat = 1234
     * $query->filterBySpecthreat(array(12, 34)); // WHERE SpecThreat IN (12, 34)
     * $query->filterBySpecthreat(array('min' => 12)); // WHERE SpecThreat >= 12
     * $query->filterBySpecthreat(array('max' => 12)); // WHERE SpecThreat <= 12
     * </code>
     *
     * @param     mixed $specthreat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpecthreat($specthreat = null, $comparison = null)
    {
        if (is_array($specthreat)) {
            $useMinMax = false;
            if (isset($specthreat['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECTHREAT, $specthreat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($specthreat['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECTHREAT, $specthreat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECTHREAT, $specthreat, $comparison);
    }

    /**
     * Filter the query on the FamIntro column
     *
     * Example usage:
     * <code>
     * $query->filterByFamintro(1234); // WHERE FamIntro = 1234
     * $query->filterByFamintro(array(12, 34)); // WHERE FamIntro IN (12, 34)
     * $query->filterByFamintro(array('min' => 12)); // WHERE FamIntro >= 12
     * $query->filterByFamintro(array('max' => 12)); // WHERE FamIntro <= 12
     * </code>
     *
     * @param     mixed $famintro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamintro($famintro = null, $comparison = null)
    {
        if (is_array($famintro)) {
            $useMinMax = false;
            if (isset($famintro['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMINTRO, $famintro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famintro['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMINTRO, $famintro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMINTRO, $famintro, $comparison);
    }

    /**
     * Filter the query on the SpecIntro column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecintro(1234); // WHERE SpecIntro = 1234
     * $query->filterBySpecintro(array(12, 34)); // WHERE SpecIntro IN (12, 34)
     * $query->filterBySpecintro(array('min' => 12)); // WHERE SpecIntro >= 12
     * $query->filterBySpecintro(array('max' => 12)); // WHERE SpecIntro <= 12
     * </code>
     *
     * @param     mixed $specintro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpecintro($specintro = null, $comparison = null)
    {
        if (is_array($specintro)) {
            $useMinMax = false;
            if (isset($specintro['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECINTRO, $specintro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($specintro['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECINTRO, $specintro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECINTRO, $specintro, $comparison);
    }

    /**
     * Filter the query on the FamDanger column
     *
     * Example usage:
     * <code>
     * $query->filterByFamdanger(1234); // WHERE FamDanger = 1234
     * $query->filterByFamdanger(array(12, 34)); // WHERE FamDanger IN (12, 34)
     * $query->filterByFamdanger(array('min' => 12)); // WHERE FamDanger >= 12
     * $query->filterByFamdanger(array('max' => 12)); // WHERE FamDanger <= 12
     * </code>
     *
     * @param     mixed $famdanger The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByFamdanger($famdanger = null, $comparison = null)
    {
        if (is_array($famdanger)) {
            $useMinMax = false;
            if (isset($famdanger['min'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMDANGER, $famdanger['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famdanger['max'])) {
                $this->addUsingAlias(FaoarrefPeer::FAMDANGER, $famdanger['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::FAMDANGER, $famdanger, $comparison);
    }

    /**
     * Filter the query on the SpecDanger column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecdanger(1234); // WHERE SpecDanger = 1234
     * $query->filterBySpecdanger(array(12, 34)); // WHERE SpecDanger IN (12, 34)
     * $query->filterBySpecdanger(array('min' => 12)); // WHERE SpecDanger >= 12
     * $query->filterBySpecdanger(array('max' => 12)); // WHERE SpecDanger <= 12
     * </code>
     *
     * @param     mixed $specdanger The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterBySpecdanger($specdanger = null, $comparison = null)
    {
        if (is_array($specdanger)) {
            $useMinMax = false;
            if (isset($specdanger['min'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECDANGER, $specdanger['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($specdanger['max'])) {
                $this->addUsingAlias(FaoarrefPeer::SPECDANGER, $specdanger['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::SPECDANGER, $specdanger, $comparison);
    }

    /**
     * Filter the query on the Complete column
     *
     * Example usage:
     * <code>
     * $query->filterByComplete(true); // WHERE Complete = true
     * $query->filterByComplete('yes'); // WHERE Complete = true
     * </code>
     *
     * @param     boolean|string $complete The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByComplete($complete = null, $comparison = null)
    {
        if (is_string($complete)) {
            $complete = in_array(strtolower($complete), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FaoarrefPeer::COMPLETE, $complete, $comparison);
    }

    /**
     * Filter the query on the CompleteRef column
     *
     * Example usage:
     * <code>
     * $query->filterByCompleteref(1234); // WHERE CompleteRef = 1234
     * $query->filterByCompleteref(array(12, 34)); // WHERE CompleteRef IN (12, 34)
     * $query->filterByCompleteref(array('min' => 12)); // WHERE CompleteRef >= 12
     * $query->filterByCompleteref(array('max' => 12)); // WHERE CompleteRef <= 12
     * </code>
     *
     * @param     mixed $completeref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByCompleteref($completeref = null, $comparison = null)
    {
        if (is_array($completeref)) {
            $useMinMax = false;
            if (isset($completeref['min'])) {
                $this->addUsingAlias(FaoarrefPeer::COMPLETEREF, $completeref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($completeref['max'])) {
                $this->addUsingAlias(FaoarrefPeer::COMPLETEREF, $completeref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::COMPLETEREF, $completeref, $comparison);
    }

    /**
     * Filter the query on the ContinentGrp column
     *
     * Example usage:
     * <code>
     * $query->filterByContinentgrp('fooValue');   // WHERE ContinentGrp = 'fooValue'
     * $query->filterByContinentgrp('%fooValue%'); // WHERE ContinentGrp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $continentgrp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByContinentgrp($continentgrp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($continentgrp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $continentgrp)) {
                $continentgrp = str_replace('*', '%', $continentgrp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::CONTINENTGRP, $continentgrp, $comparison);
    }

    /**
     * Filter the query on the Modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified('2011-03-14'); // WHERE Modified = '2011-03-14'
     * $query->filterByModified('now'); // WHERE Modified = '2011-03-14'
     * $query->filterByModified(array('max' => 'yesterday')); // WHERE Modified < '2011-03-13'
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(FaoarrefPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(FaoarrefPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::MODIFIED, $modified, $comparison);
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
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FaoarrefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FaoarrefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarrefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Faoarref $faoarref Object to remove from the list of results
     *
     * @return FaoarrefQuery The current query, for fluid interface
     */
    public function prune($faoarref = null)
    {
        if ($faoarref) {
            $this->addUsingAlias(FaoarrefPeer::AREACODE, $faoarref->getAreacode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
