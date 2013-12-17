<?php


/**
 * Base class that represents a query for the 'occurrence' table.
 *
 *
 *
 * @method OccurrenceQuery orderByCatnum2($order = Criteria::ASC) Order by the catnum2 column
 * @method OccurrenceQuery orderByOccurrencerefno($order = Criteria::ASC) Order by the OccurrenceRefNo column
 * @method OccurrenceQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method OccurrenceQuery orderBySyncode($order = Criteria::ASC) Order by the Syncode column
 * @method OccurrenceQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method OccurrenceQuery orderByGenuscol($order = Criteria::ASC) Order by the GenusCol column
 * @method OccurrenceQuery orderBySpeciescol($order = Criteria::ASC) Order by the SpeciesCol column
 * @method OccurrenceQuery orderByColname($order = Criteria::ASC) Order by the ColName column
 * @method OccurrenceQuery orderByPicname($order = Criteria::ASC) Order by the PicName column
 * @method OccurrenceQuery orderByCatnum($order = Criteria::ASC) Order by the CatNum column
 * @method OccurrenceQuery orderByUrl($order = Criteria::ASC) Order by the URL column
 * @method OccurrenceQuery orderByStation($order = Criteria::ASC) Order by the Station column
 * @method OccurrenceQuery orderByCruise($order = Criteria::ASC) Order by the Cruise column
 * @method OccurrenceQuery orderByGazetteer($order = Criteria::ASC) Order by the Gazetteer column
 * @method OccurrenceQuery orderByLocalitytype($order = Criteria::ASC) Order by the LocalityType column
 * @method OccurrenceQuery orderByWaterdepthmin($order = Criteria::ASC) Order by the WaterDepthMin column
 * @method OccurrenceQuery orderByWaterdepthmax($order = Criteria::ASC) Order by the WaterDepthMax column
 * @method OccurrenceQuery orderByAltitudemin($order = Criteria::ASC) Order by the AltitudeMin column
 * @method OccurrenceQuery orderByAltitudemax($order = Criteria::ASC) Order by the AltitudeMax column
 * @method OccurrenceQuery orderByLatitudedeg($order = Criteria::ASC) Order by the LatitudeDeg column
 * @method OccurrenceQuery orderByLatitudemin($order = Criteria::ASC) Order by the LatitudeMin column
 * @method OccurrenceQuery orderByNorthsouth($order = Criteria::ASC) Order by the NorthSouth column
 * @method OccurrenceQuery orderByLatitudedec($order = Criteria::ASC) Order by the LatitudeDec column
 * @method OccurrenceQuery orderByLongitudedeg($order = Criteria::ASC) Order by the LongitudeDeg column
 * @method OccurrenceQuery orderByLongitudemin($order = Criteria::ASC) Order by the LongitudeMIn column
 * @method OccurrenceQuery orderByEastwest($order = Criteria::ASC) Order by the EastWest column
 * @method OccurrenceQuery orderByLongitudedec($order = Criteria::ASC) Order by the LongitudeDec column
 * @method OccurrenceQuery orderByAccuracy($order = Criteria::ASC) Order by the Accuracy column
 * @method OccurrenceQuery orderBySalinity($order = Criteria::ASC) Order by the Salinity column
 * @method OccurrenceQuery orderByLatitudeto($order = Criteria::ASC) Order by the LatitudeTo column
 * @method OccurrenceQuery orderByLongitudeto($order = Criteria::ASC) Order by the LongitudeTo column
 * @method OccurrenceQuery orderByLatitudedegto($order = Criteria::ASC) Order by the LatitudeDegTo column
 * @method OccurrenceQuery orderByLatitudeminto($order = Criteria::ASC) Order by the LatitudeMinTo column
 * @method OccurrenceQuery orderByNorthsouthto($order = Criteria::ASC) Order by the NorthSouthTo column
 * @method OccurrenceQuery orderByLongitudedegto($order = Criteria::ASC) Order by the LongitudeDegTo column
 * @method OccurrenceQuery orderByLongitudeminto($order = Criteria::ASC) Order by the LongitudeMInTo column
 * @method OccurrenceQuery orderByEastwestto($order = Criteria::ASC) Order by the EastWestTo column
 * @method OccurrenceQuery orderByTemp($order = Criteria::ASC) Order by the Temp column
 * @method OccurrenceQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method OccurrenceQuery orderBySeadrainage($order = Criteria::ASC) Order by the SeaDrainage column
 * @method OccurrenceQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method OccurrenceQuery orderByProvince($order = Criteria::ASC) Order by the Province column
 * @method OccurrenceQuery orderByDate($order = Criteria::ASC) Order by the Date column
 * @method OccurrenceQuery orderByDateto($order = Criteria::ASC) Order by the DateTo column
 * @method OccurrenceQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method OccurrenceQuery orderByDatetype($order = Criteria::ASC) Order by the DateType column
 * @method OccurrenceQuery orderByDaytimestart($order = Criteria::ASC) Order by the DayTimeStart column
 * @method OccurrenceQuery orderByDaytimestop($order = Criteria::ASC) Order by the DayTimeStop column
 * @method OccurrenceQuery orderByLength($order = Criteria::ASC) Order by the Length column
 * @method OccurrenceQuery orderByLengthtype($order = Criteria::ASC) Order by the LengthType column
 * @method OccurrenceQuery orderByLength2($order = Criteria::ASC) Order by the Length2 column
 * @method OccurrenceQuery orderByLengthtype2($order = Criteria::ASC) Order by the LengthType2 column
 * @method OccurrenceQuery orderByLengthmin($order = Criteria::ASC) Order by the Lengthmin column
 * @method OccurrenceQuery orderByLengthmax($order = Criteria::ASC) Order by the Lengthmax column
 * @method OccurrenceQuery orderByWeight($order = Criteria::ASC) Order by the Weight column
 * @method OccurrenceQuery orderByNumber($order = Criteria::ASC) Order by the Number column
 * @method OccurrenceQuery orderByPercentcatch($order = Criteria::ASC) Order by the PercentCatch column
 * @method OccurrenceQuery orderByAbundance($order = Criteria::ASC) Order by the Abundance column
 * @method OccurrenceQuery orderByLivestage($order = Criteria::ASC) Order by the LiveStage column
 * @method OccurrenceQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method OccurrenceQuery orderByBottom($order = Criteria::ASC) Order by the Bottom column
 * @method OccurrenceQuery orderByGear($order = Criteria::ASC) Order by the Gear column
 * @method OccurrenceQuery orderByRemarkFb($order = Criteria::ASC) Order by the Remark_FB column
 * @method OccurrenceQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method OccurrenceQuery orderByVessel($order = Criteria::ASC) Order by the Vessel column
 * @method OccurrenceQuery orderByExpedition($order = Criteria::ASC) Order by the Expedition column
 * @method OccurrenceQuery orderByCollector($order = Criteria::ASC) Order by the Collector column
 * @method OccurrenceQuery orderByIdentifier($order = Criteria::ASC) Order by the Identifier column
 * @method OccurrenceQuery orderByIdentifierstandard($order = Criteria::ASC) Order by the IdentifierStandard column
 * @method OccurrenceQuery orderByIdentifieryr($order = Criteria::ASC) Order by the IdentifierYR column
 * @method OccurrenceQuery orderByQname($order = Criteria::ASC) Order by the QName column
 * @method OccurrenceQuery orderByQidentifier($order = Criteria::ASC) Order by the QIdentifier column
 * @method OccurrenceQuery orderByQarea($order = Criteria::ASC) Order by the QArea column
 * @method OccurrenceQuery orderByQcountry($order = Criteria::ASC) Order by the QCountry column
 * @method OccurrenceQuery orderByQcoordinates($order = Criteria::ASC) Order by the QCoordinates column
 * @method OccurrenceQuery orderByType($order = Criteria::ASC) Order by the Type column
 * @method OccurrenceQuery orderByMs($order = Criteria::ASC) Order by the MS column
 * @method OccurrenceQuery orderByStorage($order = Criteria::ASC) Order by the Storage column
 * @method OccurrenceQuery orderByRecordtype($order = Criteria::ASC) Order by the RecordType column
 * @method OccurrenceQuery orderByBasisofrecord($order = Criteria::ASC) Order by the BasisOfRecord column
 * @method OccurrenceQuery orderByCheckedcol($order = Criteria::ASC) Order by the CheckedCol column
 * @method OccurrenceQuery orderByValidity($order = Criteria::ASC) Order by the Validity column
 * @method OccurrenceQuery orderByDaterecapture($order = Criteria::ASC) Order by the DateRecapture column
 * @method OccurrenceQuery orderByLatdegrel($order = Criteria::ASC) Order by the LatDegRel column
 * @method OccurrenceQuery orderByLatminrel($order = Criteria::ASC) Order by the LatMinRel column
 * @method OccurrenceQuery orderByNorthsouthrel($order = Criteria::ASC) Order by the NorthSouthRel column
 * @method OccurrenceQuery orderByLongdegrel($order = Criteria::ASC) Order by the LongDegRel column
 * @method OccurrenceQuery orderByLongminrel($order = Criteria::ASC) Order by the LongMinRel column
 * @method OccurrenceQuery orderByEastwestrel($order = Criteria::ASC) Order by the EastWestRel column
 * @method OccurrenceQuery orderByLengthrel($order = Criteria::ASC) Order by the LengthRel column
 * @method OccurrenceQuery orderByLengthtyperel($order = Criteria::ASC) Order by the LengthTypeRel column
 * @method OccurrenceQuery orderByWeightrel($order = Criteria::ASC) Order by the WeightRel column
 * @method OccurrenceQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method OccurrenceQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method OccurrenceQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method OccurrenceQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method OccurrenceQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method OccurrenceQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method OccurrenceQuery orderByLocality1($order = Criteria::ASC) Order by the Locality1 column
 * @method OccurrenceQuery orderByTwodegree30w($order = Criteria::ASC) Order by the TwoDegree30W column
 * @method OccurrenceQuery orderByOnedegree30w($order = Criteria::ASC) Order by the OneDegree30W column
 * @method OccurrenceQuery orderByTendegree30w($order = Criteria::ASC) Order by the TenDegree30W column
 * @method OccurrenceQuery orderByCsquarecode($order = Criteria::ASC) Order by the CSquarecode column
 * @method OccurrenceQuery orderByPublisheddistance($order = Criteria::ASC) Order by the PublishedDistance column
 * @method OccurrenceQuery orderByInfo($order = Criteria::ASC) Order by the Info column
 * @method OccurrenceQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method OccurrenceQuery groupByCatnum2() Group by the catnum2 column
 * @method OccurrenceQuery groupByOccurrencerefno() Group by the OccurrenceRefNo column
 * @method OccurrenceQuery groupBySpeccode() Group by the SpecCode column
 * @method OccurrenceQuery groupBySyncode() Group by the Syncode column
 * @method OccurrenceQuery groupByStockcode() Group by the Stockcode column
 * @method OccurrenceQuery groupByGenuscol() Group by the GenusCol column
 * @method OccurrenceQuery groupBySpeciescol() Group by the SpeciesCol column
 * @method OccurrenceQuery groupByColname() Group by the ColName column
 * @method OccurrenceQuery groupByPicname() Group by the PicName column
 * @method OccurrenceQuery groupByCatnum() Group by the CatNum column
 * @method OccurrenceQuery groupByUrl() Group by the URL column
 * @method OccurrenceQuery groupByStation() Group by the Station column
 * @method OccurrenceQuery groupByCruise() Group by the Cruise column
 * @method OccurrenceQuery groupByGazetteer() Group by the Gazetteer column
 * @method OccurrenceQuery groupByLocalitytype() Group by the LocalityType column
 * @method OccurrenceQuery groupByWaterdepthmin() Group by the WaterDepthMin column
 * @method OccurrenceQuery groupByWaterdepthmax() Group by the WaterDepthMax column
 * @method OccurrenceQuery groupByAltitudemin() Group by the AltitudeMin column
 * @method OccurrenceQuery groupByAltitudemax() Group by the AltitudeMax column
 * @method OccurrenceQuery groupByLatitudedeg() Group by the LatitudeDeg column
 * @method OccurrenceQuery groupByLatitudemin() Group by the LatitudeMin column
 * @method OccurrenceQuery groupByNorthsouth() Group by the NorthSouth column
 * @method OccurrenceQuery groupByLatitudedec() Group by the LatitudeDec column
 * @method OccurrenceQuery groupByLongitudedeg() Group by the LongitudeDeg column
 * @method OccurrenceQuery groupByLongitudemin() Group by the LongitudeMIn column
 * @method OccurrenceQuery groupByEastwest() Group by the EastWest column
 * @method OccurrenceQuery groupByLongitudedec() Group by the LongitudeDec column
 * @method OccurrenceQuery groupByAccuracy() Group by the Accuracy column
 * @method OccurrenceQuery groupBySalinity() Group by the Salinity column
 * @method OccurrenceQuery groupByLatitudeto() Group by the LatitudeTo column
 * @method OccurrenceQuery groupByLongitudeto() Group by the LongitudeTo column
 * @method OccurrenceQuery groupByLatitudedegto() Group by the LatitudeDegTo column
 * @method OccurrenceQuery groupByLatitudeminto() Group by the LatitudeMinTo column
 * @method OccurrenceQuery groupByNorthsouthto() Group by the NorthSouthTo column
 * @method OccurrenceQuery groupByLongitudedegto() Group by the LongitudeDegTo column
 * @method OccurrenceQuery groupByLongitudeminto() Group by the LongitudeMInTo column
 * @method OccurrenceQuery groupByEastwestto() Group by the EastWestTo column
 * @method OccurrenceQuery groupByTemp() Group by the Temp column
 * @method OccurrenceQuery groupByAreacode() Group by the AreaCode column
 * @method OccurrenceQuery groupBySeadrainage() Group by the SeaDrainage column
 * @method OccurrenceQuery groupByCCode() Group by the C_Code column
 * @method OccurrenceQuery groupByProvince() Group by the Province column
 * @method OccurrenceQuery groupByDate() Group by the Date column
 * @method OccurrenceQuery groupByDateto() Group by the DateTo column
 * @method OccurrenceQuery groupByYear() Group by the Year column
 * @method OccurrenceQuery groupByDatetype() Group by the DateType column
 * @method OccurrenceQuery groupByDaytimestart() Group by the DayTimeStart column
 * @method OccurrenceQuery groupByDaytimestop() Group by the DayTimeStop column
 * @method OccurrenceQuery groupByLength() Group by the Length column
 * @method OccurrenceQuery groupByLengthtype() Group by the LengthType column
 * @method OccurrenceQuery groupByLength2() Group by the Length2 column
 * @method OccurrenceQuery groupByLengthtype2() Group by the LengthType2 column
 * @method OccurrenceQuery groupByLengthmin() Group by the Lengthmin column
 * @method OccurrenceQuery groupByLengthmax() Group by the Lengthmax column
 * @method OccurrenceQuery groupByWeight() Group by the Weight column
 * @method OccurrenceQuery groupByNumber() Group by the Number column
 * @method OccurrenceQuery groupByPercentcatch() Group by the PercentCatch column
 * @method OccurrenceQuery groupByAbundance() Group by the Abundance column
 * @method OccurrenceQuery groupByLivestage() Group by the LiveStage column
 * @method OccurrenceQuery groupBySex() Group by the Sex column
 * @method OccurrenceQuery groupByBottom() Group by the Bottom column
 * @method OccurrenceQuery groupByGear() Group by the Gear column
 * @method OccurrenceQuery groupByRemarkFb() Group by the Remark_FB column
 * @method OccurrenceQuery groupByRemark() Group by the Remark column
 * @method OccurrenceQuery groupByVessel() Group by the Vessel column
 * @method OccurrenceQuery groupByExpedition() Group by the Expedition column
 * @method OccurrenceQuery groupByCollector() Group by the Collector column
 * @method OccurrenceQuery groupByIdentifier() Group by the Identifier column
 * @method OccurrenceQuery groupByIdentifierstandard() Group by the IdentifierStandard column
 * @method OccurrenceQuery groupByIdentifieryr() Group by the IdentifierYR column
 * @method OccurrenceQuery groupByQname() Group by the QName column
 * @method OccurrenceQuery groupByQidentifier() Group by the QIdentifier column
 * @method OccurrenceQuery groupByQarea() Group by the QArea column
 * @method OccurrenceQuery groupByQcountry() Group by the QCountry column
 * @method OccurrenceQuery groupByQcoordinates() Group by the QCoordinates column
 * @method OccurrenceQuery groupByType() Group by the Type column
 * @method OccurrenceQuery groupByMs() Group by the MS column
 * @method OccurrenceQuery groupByStorage() Group by the Storage column
 * @method OccurrenceQuery groupByRecordtype() Group by the RecordType column
 * @method OccurrenceQuery groupByBasisofrecord() Group by the BasisOfRecord column
 * @method OccurrenceQuery groupByCheckedcol() Group by the CheckedCol column
 * @method OccurrenceQuery groupByValidity() Group by the Validity column
 * @method OccurrenceQuery groupByDaterecapture() Group by the DateRecapture column
 * @method OccurrenceQuery groupByLatdegrel() Group by the LatDegRel column
 * @method OccurrenceQuery groupByLatminrel() Group by the LatMinRel column
 * @method OccurrenceQuery groupByNorthsouthrel() Group by the NorthSouthRel column
 * @method OccurrenceQuery groupByLongdegrel() Group by the LongDegRel column
 * @method OccurrenceQuery groupByLongminrel() Group by the LongMinRel column
 * @method OccurrenceQuery groupByEastwestrel() Group by the EastWestRel column
 * @method OccurrenceQuery groupByLengthrel() Group by the LengthRel column
 * @method OccurrenceQuery groupByLengthtyperel() Group by the LengthTypeRel column
 * @method OccurrenceQuery groupByWeightrel() Group by the WeightRel column
 * @method OccurrenceQuery groupByEntered() Group by the Entered column
 * @method OccurrenceQuery groupByDateentered() Group by the DateEntered column
 * @method OccurrenceQuery groupByModified() Group by the Modified column
 * @method OccurrenceQuery groupByDatemodified() Group by the DateModified column
 * @method OccurrenceQuery groupByExpert() Group by the Expert column
 * @method OccurrenceQuery groupByDatechecked() Group by the DateChecked column
 * @method OccurrenceQuery groupByLocality1() Group by the Locality1 column
 * @method OccurrenceQuery groupByTwodegree30w() Group by the TwoDegree30W column
 * @method OccurrenceQuery groupByOnedegree30w() Group by the OneDegree30W column
 * @method OccurrenceQuery groupByTendegree30w() Group by the TenDegree30W column
 * @method OccurrenceQuery groupByCsquarecode() Group by the CSquarecode column
 * @method OccurrenceQuery groupByPublisheddistance() Group by the PublishedDistance column
 * @method OccurrenceQuery groupByInfo() Group by the Info column
 * @method OccurrenceQuery groupByTs() Group by the TS column
 *
 * @method OccurrenceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OccurrenceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OccurrenceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Occurrence findOne(PropelPDO $con = null) Return the first Occurrence matching the query
 * @method Occurrence findOneOrCreate(PropelPDO $con = null) Return the first Occurrence matching the query, or a new Occurrence object populated from the query conditions when no match is found
 *
 * @method Occurrence findOneByOccurrencerefno(int $OccurrenceRefNo) Return the first Occurrence filtered by the OccurrenceRefNo column
 * @method Occurrence findOneBySpeccode(int $SpecCode) Return the first Occurrence filtered by the SpecCode column
 * @method Occurrence findOneBySyncode(int $Syncode) Return the first Occurrence filtered by the Syncode column
 * @method Occurrence findOneByStockcode(int $Stockcode) Return the first Occurrence filtered by the Stockcode column
 * @method Occurrence findOneByGenuscol(string $GenusCol) Return the first Occurrence filtered by the GenusCol column
 * @method Occurrence findOneBySpeciescol(string $SpeciesCol) Return the first Occurrence filtered by the SpeciesCol column
 * @method Occurrence findOneByColname(string $ColName) Return the first Occurrence filtered by the ColName column
 * @method Occurrence findOneByPicname(string $PicName) Return the first Occurrence filtered by the PicName column
 * @method Occurrence findOneByCatnum(string $CatNum) Return the first Occurrence filtered by the CatNum column
 * @method Occurrence findOneByUrl(string $URL) Return the first Occurrence filtered by the URL column
 * @method Occurrence findOneByStation(string $Station) Return the first Occurrence filtered by the Station column
 * @method Occurrence findOneByCruise(string $Cruise) Return the first Occurrence filtered by the Cruise column
 * @method Occurrence findOneByGazetteer(string $Gazetteer) Return the first Occurrence filtered by the Gazetteer column
 * @method Occurrence findOneByLocalitytype(string $LocalityType) Return the first Occurrence filtered by the LocalityType column
 * @method Occurrence findOneByWaterdepthmin(double $WaterDepthMin) Return the first Occurrence filtered by the WaterDepthMin column
 * @method Occurrence findOneByWaterdepthmax(double $WaterDepthMax) Return the first Occurrence filtered by the WaterDepthMax column
 * @method Occurrence findOneByAltitudemin(int $AltitudeMin) Return the first Occurrence filtered by the AltitudeMin column
 * @method Occurrence findOneByAltitudemax(int $AltitudeMax) Return the first Occurrence filtered by the AltitudeMax column
 * @method Occurrence findOneByLatitudedeg(int $LatitudeDeg) Return the first Occurrence filtered by the LatitudeDeg column
 * @method Occurrence findOneByLatitudemin(double $LatitudeMin) Return the first Occurrence filtered by the LatitudeMin column
 * @method Occurrence findOneByNorthsouth(string $NorthSouth) Return the first Occurrence filtered by the NorthSouth column
 * @method Occurrence findOneByLatitudedec(double $LatitudeDec) Return the first Occurrence filtered by the LatitudeDec column
 * @method Occurrence findOneByLongitudedeg(int $LongitudeDeg) Return the first Occurrence filtered by the LongitudeDeg column
 * @method Occurrence findOneByLongitudemin(double $LongitudeMIn) Return the first Occurrence filtered by the LongitudeMIn column
 * @method Occurrence findOneByEastwest(string $EastWest) Return the first Occurrence filtered by the EastWest column
 * @method Occurrence findOneByLongitudedec(double $LongitudeDec) Return the first Occurrence filtered by the LongitudeDec column
 * @method Occurrence findOneByAccuracy(string $Accuracy) Return the first Occurrence filtered by the Accuracy column
 * @method Occurrence findOneBySalinity(string $Salinity) Return the first Occurrence filtered by the Salinity column
 * @method Occurrence findOneByLatitudeto(double $LatitudeTo) Return the first Occurrence filtered by the LatitudeTo column
 * @method Occurrence findOneByLongitudeto(double $LongitudeTo) Return the first Occurrence filtered by the LongitudeTo column
 * @method Occurrence findOneByLatitudedegto(int $LatitudeDegTo) Return the first Occurrence filtered by the LatitudeDegTo column
 * @method Occurrence findOneByLatitudeminto(double $LatitudeMinTo) Return the first Occurrence filtered by the LatitudeMinTo column
 * @method Occurrence findOneByNorthsouthto(string $NorthSouthTo) Return the first Occurrence filtered by the NorthSouthTo column
 * @method Occurrence findOneByLongitudedegto(int $LongitudeDegTo) Return the first Occurrence filtered by the LongitudeDegTo column
 * @method Occurrence findOneByLongitudeminto(double $LongitudeMInTo) Return the first Occurrence filtered by the LongitudeMInTo column
 * @method Occurrence findOneByEastwestto(string $EastWestTo) Return the first Occurrence filtered by the EastWestTo column
 * @method Occurrence findOneByTemp(double $Temp) Return the first Occurrence filtered by the Temp column
 * @method Occurrence findOneByAreacode(int $AreaCode) Return the first Occurrence filtered by the AreaCode column
 * @method Occurrence findOneBySeadrainage(string $SeaDrainage) Return the first Occurrence filtered by the SeaDrainage column
 * @method Occurrence findOneByCCode(string $C_Code) Return the first Occurrence filtered by the C_Code column
 * @method Occurrence findOneByProvince(string $Province) Return the first Occurrence filtered by the Province column
 * @method Occurrence findOneByDate(string $Date) Return the first Occurrence filtered by the Date column
 * @method Occurrence findOneByDateto(string $DateTo) Return the first Occurrence filtered by the DateTo column
 * @method Occurrence findOneByYear(int $Year) Return the first Occurrence filtered by the Year column
 * @method Occurrence findOneByDatetype(string $DateType) Return the first Occurrence filtered by the DateType column
 * @method Occurrence findOneByDaytimestart(string $DayTimeStart) Return the first Occurrence filtered by the DayTimeStart column
 * @method Occurrence findOneByDaytimestop(string $DayTimeStop) Return the first Occurrence filtered by the DayTimeStop column
 * @method Occurrence findOneByLength(double $Length) Return the first Occurrence filtered by the Length column
 * @method Occurrence findOneByLengthtype(string $LengthType) Return the first Occurrence filtered by the LengthType column
 * @method Occurrence findOneByLength2(double $Length2) Return the first Occurrence filtered by the Length2 column
 * @method Occurrence findOneByLengthtype2(string $LengthType2) Return the first Occurrence filtered by the LengthType2 column
 * @method Occurrence findOneByLengthmin(double $Lengthmin) Return the first Occurrence filtered by the Lengthmin column
 * @method Occurrence findOneByLengthmax(double $Lengthmax) Return the first Occurrence filtered by the Lengthmax column
 * @method Occurrence findOneByWeight(double $Weight) Return the first Occurrence filtered by the Weight column
 * @method Occurrence findOneByNumber(int $Number) Return the first Occurrence filtered by the Number column
 * @method Occurrence findOneByPercentcatch(double $PercentCatch) Return the first Occurrence filtered by the PercentCatch column
 * @method Occurrence findOneByAbundance(string $Abundance) Return the first Occurrence filtered by the Abundance column
 * @method Occurrence findOneByLivestage(string $LiveStage) Return the first Occurrence filtered by the LiveStage column
 * @method Occurrence findOneBySex(string $Sex) Return the first Occurrence filtered by the Sex column
 * @method Occurrence findOneByBottom(string $Bottom) Return the first Occurrence filtered by the Bottom column
 * @method Occurrence findOneByGear(string $Gear) Return the first Occurrence filtered by the Gear column
 * @method Occurrence findOneByRemarkFb(string $Remark_FB) Return the first Occurrence filtered by the Remark_FB column
 * @method Occurrence findOneByRemark(string $Remark) Return the first Occurrence filtered by the Remark column
 * @method Occurrence findOneByVessel(string $Vessel) Return the first Occurrence filtered by the Vessel column
 * @method Occurrence findOneByExpedition(string $Expedition) Return the first Occurrence filtered by the Expedition column
 * @method Occurrence findOneByCollector(string $Collector) Return the first Occurrence filtered by the Collector column
 * @method Occurrence findOneByIdentifier(string $Identifier) Return the first Occurrence filtered by the Identifier column
 * @method Occurrence findOneByIdentifierstandard(string $IdentifierStandard) Return the first Occurrence filtered by the IdentifierStandard column
 * @method Occurrence findOneByIdentifieryr(int $IdentifierYR) Return the first Occurrence filtered by the IdentifierYR column
 * @method Occurrence findOneByQname(int $QName) Return the first Occurrence filtered by the QName column
 * @method Occurrence findOneByQidentifier(int $QIdentifier) Return the first Occurrence filtered by the QIdentifier column
 * @method Occurrence findOneByQarea(int $QArea) Return the first Occurrence filtered by the QArea column
 * @method Occurrence findOneByQcountry(int $QCountry) Return the first Occurrence filtered by the QCountry column
 * @method Occurrence findOneByQcoordinates(int $QCoordinates) Return the first Occurrence filtered by the QCoordinates column
 * @method Occurrence findOneByType(string $Type) Return the first Occurrence filtered by the Type column
 * @method Occurrence findOneByMs(string $MS) Return the first Occurrence filtered by the MS column
 * @method Occurrence findOneByStorage(string $Storage) Return the first Occurrence filtered by the Storage column
 * @method Occurrence findOneByRecordtype(string $RecordType) Return the first Occurrence filtered by the RecordType column
 * @method Occurrence findOneByBasisofrecord(string $BasisOfRecord) Return the first Occurrence filtered by the BasisOfRecord column
 * @method Occurrence findOneByCheckedcol(string $CheckedCol) Return the first Occurrence filtered by the CheckedCol column
 * @method Occurrence findOneByValidity(string $Validity) Return the first Occurrence filtered by the Validity column
 * @method Occurrence findOneByDaterecapture(string $DateRecapture) Return the first Occurrence filtered by the DateRecapture column
 * @method Occurrence findOneByLatdegrel(int $LatDegRel) Return the first Occurrence filtered by the LatDegRel column
 * @method Occurrence findOneByLatminrel(double $LatMinRel) Return the first Occurrence filtered by the LatMinRel column
 * @method Occurrence findOneByNorthsouthrel(string $NorthSouthRel) Return the first Occurrence filtered by the NorthSouthRel column
 * @method Occurrence findOneByLongdegrel(int $LongDegRel) Return the first Occurrence filtered by the LongDegRel column
 * @method Occurrence findOneByLongminrel(double $LongMinRel) Return the first Occurrence filtered by the LongMinRel column
 * @method Occurrence findOneByEastwestrel(string $EastWestRel) Return the first Occurrence filtered by the EastWestRel column
 * @method Occurrence findOneByLengthrel(int $LengthRel) Return the first Occurrence filtered by the LengthRel column
 * @method Occurrence findOneByLengthtyperel(string $LengthTypeRel) Return the first Occurrence filtered by the LengthTypeRel column
 * @method Occurrence findOneByWeightrel(double $WeightRel) Return the first Occurrence filtered by the WeightRel column
 * @method Occurrence findOneByEntered(int $Entered) Return the first Occurrence filtered by the Entered column
 * @method Occurrence findOneByDateentered(string $DateEntered) Return the first Occurrence filtered by the DateEntered column
 * @method Occurrence findOneByModified(int $Modified) Return the first Occurrence filtered by the Modified column
 * @method Occurrence findOneByDatemodified(string $DateModified) Return the first Occurrence filtered by the DateModified column
 * @method Occurrence findOneByExpert(int $Expert) Return the first Occurrence filtered by the Expert column
 * @method Occurrence findOneByDatechecked(string $DateChecked) Return the first Occurrence filtered by the DateChecked column
 * @method Occurrence findOneByLocality1(string $Locality1) Return the first Occurrence filtered by the Locality1 column
 * @method Occurrence findOneByTwodegree30w(string $TwoDegree30W) Return the first Occurrence filtered by the TwoDegree30W column
 * @method Occurrence findOneByOnedegree30w(string $OneDegree30W) Return the first Occurrence filtered by the OneDegree30W column
 * @method Occurrence findOneByTendegree30w(string $TenDegree30W) Return the first Occurrence filtered by the TenDegree30W column
 * @method Occurrence findOneByCsquarecode(string $CSquarecode) Return the first Occurrence filtered by the CSquarecode column
 * @method Occurrence findOneByPublisheddistance(double $PublishedDistance) Return the first Occurrence filtered by the PublishedDistance column
 * @method Occurrence findOneByInfo(string $Info) Return the first Occurrence filtered by the Info column
 * @method Occurrence findOneByTs(string $TS) Return the first Occurrence filtered by the TS column
 *
 * @method array findByCatnum2(int $catnum2) Return Occurrence objects filtered by the catnum2 column
 * @method array findByOccurrencerefno(int $OccurrenceRefNo) Return Occurrence objects filtered by the OccurrenceRefNo column
 * @method array findBySpeccode(int $SpecCode) Return Occurrence objects filtered by the SpecCode column
 * @method array findBySyncode(int $Syncode) Return Occurrence objects filtered by the Syncode column
 * @method array findByStockcode(int $Stockcode) Return Occurrence objects filtered by the Stockcode column
 * @method array findByGenuscol(string $GenusCol) Return Occurrence objects filtered by the GenusCol column
 * @method array findBySpeciescol(string $SpeciesCol) Return Occurrence objects filtered by the SpeciesCol column
 * @method array findByColname(string $ColName) Return Occurrence objects filtered by the ColName column
 * @method array findByPicname(string $PicName) Return Occurrence objects filtered by the PicName column
 * @method array findByCatnum(string $CatNum) Return Occurrence objects filtered by the CatNum column
 * @method array findByUrl(string $URL) Return Occurrence objects filtered by the URL column
 * @method array findByStation(string $Station) Return Occurrence objects filtered by the Station column
 * @method array findByCruise(string $Cruise) Return Occurrence objects filtered by the Cruise column
 * @method array findByGazetteer(string $Gazetteer) Return Occurrence objects filtered by the Gazetteer column
 * @method array findByLocalitytype(string $LocalityType) Return Occurrence objects filtered by the LocalityType column
 * @method array findByWaterdepthmin(double $WaterDepthMin) Return Occurrence objects filtered by the WaterDepthMin column
 * @method array findByWaterdepthmax(double $WaterDepthMax) Return Occurrence objects filtered by the WaterDepthMax column
 * @method array findByAltitudemin(int $AltitudeMin) Return Occurrence objects filtered by the AltitudeMin column
 * @method array findByAltitudemax(int $AltitudeMax) Return Occurrence objects filtered by the AltitudeMax column
 * @method array findByLatitudedeg(int $LatitudeDeg) Return Occurrence objects filtered by the LatitudeDeg column
 * @method array findByLatitudemin(double $LatitudeMin) Return Occurrence objects filtered by the LatitudeMin column
 * @method array findByNorthsouth(string $NorthSouth) Return Occurrence objects filtered by the NorthSouth column
 * @method array findByLatitudedec(double $LatitudeDec) Return Occurrence objects filtered by the LatitudeDec column
 * @method array findByLongitudedeg(int $LongitudeDeg) Return Occurrence objects filtered by the LongitudeDeg column
 * @method array findByLongitudemin(double $LongitudeMIn) Return Occurrence objects filtered by the LongitudeMIn column
 * @method array findByEastwest(string $EastWest) Return Occurrence objects filtered by the EastWest column
 * @method array findByLongitudedec(double $LongitudeDec) Return Occurrence objects filtered by the LongitudeDec column
 * @method array findByAccuracy(string $Accuracy) Return Occurrence objects filtered by the Accuracy column
 * @method array findBySalinity(string $Salinity) Return Occurrence objects filtered by the Salinity column
 * @method array findByLatitudeto(double $LatitudeTo) Return Occurrence objects filtered by the LatitudeTo column
 * @method array findByLongitudeto(double $LongitudeTo) Return Occurrence objects filtered by the LongitudeTo column
 * @method array findByLatitudedegto(int $LatitudeDegTo) Return Occurrence objects filtered by the LatitudeDegTo column
 * @method array findByLatitudeminto(double $LatitudeMinTo) Return Occurrence objects filtered by the LatitudeMinTo column
 * @method array findByNorthsouthto(string $NorthSouthTo) Return Occurrence objects filtered by the NorthSouthTo column
 * @method array findByLongitudedegto(int $LongitudeDegTo) Return Occurrence objects filtered by the LongitudeDegTo column
 * @method array findByLongitudeminto(double $LongitudeMInTo) Return Occurrence objects filtered by the LongitudeMInTo column
 * @method array findByEastwestto(string $EastWestTo) Return Occurrence objects filtered by the EastWestTo column
 * @method array findByTemp(double $Temp) Return Occurrence objects filtered by the Temp column
 * @method array findByAreacode(int $AreaCode) Return Occurrence objects filtered by the AreaCode column
 * @method array findBySeadrainage(string $SeaDrainage) Return Occurrence objects filtered by the SeaDrainage column
 * @method array findByCCode(string $C_Code) Return Occurrence objects filtered by the C_Code column
 * @method array findByProvince(string $Province) Return Occurrence objects filtered by the Province column
 * @method array findByDate(string $Date) Return Occurrence objects filtered by the Date column
 * @method array findByDateto(string $DateTo) Return Occurrence objects filtered by the DateTo column
 * @method array findByYear(int $Year) Return Occurrence objects filtered by the Year column
 * @method array findByDatetype(string $DateType) Return Occurrence objects filtered by the DateType column
 * @method array findByDaytimestart(string $DayTimeStart) Return Occurrence objects filtered by the DayTimeStart column
 * @method array findByDaytimestop(string $DayTimeStop) Return Occurrence objects filtered by the DayTimeStop column
 * @method array findByLength(double $Length) Return Occurrence objects filtered by the Length column
 * @method array findByLengthtype(string $LengthType) Return Occurrence objects filtered by the LengthType column
 * @method array findByLength2(double $Length2) Return Occurrence objects filtered by the Length2 column
 * @method array findByLengthtype2(string $LengthType2) Return Occurrence objects filtered by the LengthType2 column
 * @method array findByLengthmin(double $Lengthmin) Return Occurrence objects filtered by the Lengthmin column
 * @method array findByLengthmax(double $Lengthmax) Return Occurrence objects filtered by the Lengthmax column
 * @method array findByWeight(double $Weight) Return Occurrence objects filtered by the Weight column
 * @method array findByNumber(int $Number) Return Occurrence objects filtered by the Number column
 * @method array findByPercentcatch(double $PercentCatch) Return Occurrence objects filtered by the PercentCatch column
 * @method array findByAbundance(string $Abundance) Return Occurrence objects filtered by the Abundance column
 * @method array findByLivestage(string $LiveStage) Return Occurrence objects filtered by the LiveStage column
 * @method array findBySex(string $Sex) Return Occurrence objects filtered by the Sex column
 * @method array findByBottom(string $Bottom) Return Occurrence objects filtered by the Bottom column
 * @method array findByGear(string $Gear) Return Occurrence objects filtered by the Gear column
 * @method array findByRemarkFb(string $Remark_FB) Return Occurrence objects filtered by the Remark_FB column
 * @method array findByRemark(string $Remark) Return Occurrence objects filtered by the Remark column
 * @method array findByVessel(string $Vessel) Return Occurrence objects filtered by the Vessel column
 * @method array findByExpedition(string $Expedition) Return Occurrence objects filtered by the Expedition column
 * @method array findByCollector(string $Collector) Return Occurrence objects filtered by the Collector column
 * @method array findByIdentifier(string $Identifier) Return Occurrence objects filtered by the Identifier column
 * @method array findByIdentifierstandard(string $IdentifierStandard) Return Occurrence objects filtered by the IdentifierStandard column
 * @method array findByIdentifieryr(int $IdentifierYR) Return Occurrence objects filtered by the IdentifierYR column
 * @method array findByQname(int $QName) Return Occurrence objects filtered by the QName column
 * @method array findByQidentifier(int $QIdentifier) Return Occurrence objects filtered by the QIdentifier column
 * @method array findByQarea(int $QArea) Return Occurrence objects filtered by the QArea column
 * @method array findByQcountry(int $QCountry) Return Occurrence objects filtered by the QCountry column
 * @method array findByQcoordinates(int $QCoordinates) Return Occurrence objects filtered by the QCoordinates column
 * @method array findByType(string $Type) Return Occurrence objects filtered by the Type column
 * @method array findByMs(string $MS) Return Occurrence objects filtered by the MS column
 * @method array findByStorage(string $Storage) Return Occurrence objects filtered by the Storage column
 * @method array findByRecordtype(string $RecordType) Return Occurrence objects filtered by the RecordType column
 * @method array findByBasisofrecord(string $BasisOfRecord) Return Occurrence objects filtered by the BasisOfRecord column
 * @method array findByCheckedcol(string $CheckedCol) Return Occurrence objects filtered by the CheckedCol column
 * @method array findByValidity(string $Validity) Return Occurrence objects filtered by the Validity column
 * @method array findByDaterecapture(string $DateRecapture) Return Occurrence objects filtered by the DateRecapture column
 * @method array findByLatdegrel(int $LatDegRel) Return Occurrence objects filtered by the LatDegRel column
 * @method array findByLatminrel(double $LatMinRel) Return Occurrence objects filtered by the LatMinRel column
 * @method array findByNorthsouthrel(string $NorthSouthRel) Return Occurrence objects filtered by the NorthSouthRel column
 * @method array findByLongdegrel(int $LongDegRel) Return Occurrence objects filtered by the LongDegRel column
 * @method array findByLongminrel(double $LongMinRel) Return Occurrence objects filtered by the LongMinRel column
 * @method array findByEastwestrel(string $EastWestRel) Return Occurrence objects filtered by the EastWestRel column
 * @method array findByLengthrel(int $LengthRel) Return Occurrence objects filtered by the LengthRel column
 * @method array findByLengthtyperel(string $LengthTypeRel) Return Occurrence objects filtered by the LengthTypeRel column
 * @method array findByWeightrel(double $WeightRel) Return Occurrence objects filtered by the WeightRel column
 * @method array findByEntered(int $Entered) Return Occurrence objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Occurrence objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Occurrence objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Occurrence objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Occurrence objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Occurrence objects filtered by the DateChecked column
 * @method array findByLocality1(string $Locality1) Return Occurrence objects filtered by the Locality1 column
 * @method array findByTwodegree30w(string $TwoDegree30W) Return Occurrence objects filtered by the TwoDegree30W column
 * @method array findByOnedegree30w(string $OneDegree30W) Return Occurrence objects filtered by the OneDegree30W column
 * @method array findByTendegree30w(string $TenDegree30W) Return Occurrence objects filtered by the TenDegree30W column
 * @method array findByCsquarecode(string $CSquarecode) Return Occurrence objects filtered by the CSquarecode column
 * @method array findByPublisheddistance(double $PublishedDistance) Return Occurrence objects filtered by the PublishedDistance column
 * @method array findByInfo(string $Info) Return Occurrence objects filtered by the Info column
 * @method array findByTs(string $TS) Return Occurrence objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOccurrenceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOccurrenceQuery object.
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
            $modelName = 'Occurrence';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OccurrenceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OccurrenceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OccurrenceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OccurrenceQuery) {
            return $criteria;
        }
        $query = new OccurrenceQuery(null, null, $modelAlias);

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
     * @return   Occurrence|Occurrence[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OccurrencePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Occurrence A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCatnum2($key, $con = null)
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
     * @return                 Occurrence A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `catnum2`, `OccurrenceRefNo`, `SpecCode`, `Syncode`, `Stockcode`, `GenusCol`, `SpeciesCol`, `ColName`, `PicName`, `CatNum`, `URL`, `Station`, `Cruise`, `Gazetteer`, `LocalityType`, `WaterDepthMin`, `WaterDepthMax`, `AltitudeMin`, `AltitudeMax`, `LatitudeDeg`, `LatitudeMin`, `NorthSouth`, `LatitudeDec`, `LongitudeDeg`, `LongitudeMIn`, `EastWest`, `LongitudeDec`, `Accuracy`, `Salinity`, `LatitudeTo`, `LongitudeTo`, `LatitudeDegTo`, `LatitudeMinTo`, `NorthSouthTo`, `LongitudeDegTo`, `LongitudeMInTo`, `EastWestTo`, `Temp`, `AreaCode`, `SeaDrainage`, `C_Code`, `Province`, `Date`, `DateTo`, `Year`, `DateType`, `DayTimeStart`, `DayTimeStop`, `Length`, `LengthType`, `Length2`, `LengthType2`, `Lengthmin`, `Lengthmax`, `Weight`, `Number`, `PercentCatch`, `Abundance`, `LiveStage`, `Sex`, `Bottom`, `Gear`, `Remark_FB`, `Remark`, `Vessel`, `Expedition`, `Collector`, `Identifier`, `IdentifierStandard`, `IdentifierYR`, `QName`, `QIdentifier`, `QArea`, `QCountry`, `QCoordinates`, `Type`, `MS`, `Storage`, `RecordType`, `BasisOfRecord`, `CheckedCol`, `Validity`, `DateRecapture`, `LatDegRel`, `LatMinRel`, `NorthSouthRel`, `LongDegRel`, `LongMinRel`, `EastWestRel`, `LengthRel`, `LengthTypeRel`, `WeightRel`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Locality1`, `TwoDegree30W`, `OneDegree30W`, `TenDegree30W`, `CSquarecode`, `PublishedDistance`, `Info`, `TS` FROM `occurrence` WHERE `catnum2` = :p0';
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
            $obj = new Occurrence();
            $obj->hydrate($row);
            OccurrencePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Occurrence|Occurrence[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Occurrence[]|mixed the list of results, formatted by the current formatter
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OccurrencePeer::CATNUM2, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OccurrencePeer::CATNUM2, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the catnum2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCatnum2(1234); // WHERE catnum2 = 1234
     * $query->filterByCatnum2(array(12, 34)); // WHERE catnum2 IN (12, 34)
     * $query->filterByCatnum2(array('min' => 12)); // WHERE catnum2 >= 12
     * $query->filterByCatnum2(array('max' => 12)); // WHERE catnum2 <= 12
     * </code>
     *
     * @param     mixed $catnum2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByCatnum2($catnum2 = null, $comparison = null)
    {
        if (is_array($catnum2)) {
            $useMinMax = false;
            if (isset($catnum2['min'])) {
                $this->addUsingAlias(OccurrencePeer::CATNUM2, $catnum2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($catnum2['max'])) {
                $this->addUsingAlias(OccurrencePeer::CATNUM2, $catnum2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::CATNUM2, $catnum2, $comparison);
    }

    /**
     * Filter the query on the OccurrenceRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByOccurrencerefno(1234); // WHERE OccurrenceRefNo = 1234
     * $query->filterByOccurrencerefno(array(12, 34)); // WHERE OccurrenceRefNo IN (12, 34)
     * $query->filterByOccurrencerefno(array('min' => 12)); // WHERE OccurrenceRefNo >= 12
     * $query->filterByOccurrencerefno(array('max' => 12)); // WHERE OccurrenceRefNo <= 12
     * </code>
     *
     * @param     mixed $occurrencerefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByOccurrencerefno($occurrencerefno = null, $comparison = null)
    {
        if (is_array($occurrencerefno)) {
            $useMinMax = false;
            if (isset($occurrencerefno['min'])) {
                $this->addUsingAlias(OccurrencePeer::OCCURRENCEREFNO, $occurrencerefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($occurrencerefno['max'])) {
                $this->addUsingAlias(OccurrencePeer::OCCURRENCEREFNO, $occurrencerefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::OCCURRENCEREFNO, $occurrencerefno, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(OccurrencePeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(OccurrencePeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::SPECCODE, $speccode, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(OccurrencePeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(OccurrencePeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::SYNCODE, $syncode, $comparison);
    }

    /**
     * Filter the query on the Stockcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE Stockcode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE Stockcode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE Stockcode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE Stockcode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(OccurrencePeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(OccurrencePeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the GenusCol column
     *
     * Example usage:
     * <code>
     * $query->filterByGenuscol('fooValue');   // WHERE GenusCol = 'fooValue'
     * $query->filterByGenuscol('%fooValue%'); // WHERE GenusCol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genuscol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByGenuscol($genuscol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genuscol)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genuscol)) {
                $genuscol = str_replace('*', '%', $genuscol);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::GENUSCOL, $genuscol, $comparison);
    }

    /**
     * Filter the query on the SpeciesCol column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciescol('fooValue');   // WHERE SpeciesCol = 'fooValue'
     * $query->filterBySpeciescol('%fooValue%'); // WHERE SpeciesCol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $speciescol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterBySpeciescol($speciescol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($speciescol)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $speciescol)) {
                $speciescol = str_replace('*', '%', $speciescol);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::SPECIESCOL, $speciescol, $comparison);
    }

    /**
     * Filter the query on the ColName column
     *
     * Example usage:
     * <code>
     * $query->filterByColname('fooValue');   // WHERE ColName = 'fooValue'
     * $query->filterByColname('%fooValue%'); // WHERE ColName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $colname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByColname($colname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($colname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $colname)) {
                $colname = str_replace('*', '%', $colname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::COLNAME, $colname, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::PICNAME, $picname, $comparison);
    }

    /**
     * Filter the query on the CatNum column
     *
     * Example usage:
     * <code>
     * $query->filterByCatnum('fooValue');   // WHERE CatNum = 'fooValue'
     * $query->filterByCatnum('%fooValue%'); // WHERE CatNum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $catnum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByCatnum($catnum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($catnum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $catnum)) {
                $catnum = str_replace('*', '%', $catnum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::CATNUM, $catnum, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the Station column
     *
     * Example usage:
     * <code>
     * $query->filterByStation('fooValue');   // WHERE Station = 'fooValue'
     * $query->filterByStation('%fooValue%'); // WHERE Station LIKE '%fooValue%'
     * </code>
     *
     * @param     string $station The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByStation($station = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($station)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $station)) {
                $station = str_replace('*', '%', $station);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::STATION, $station, $comparison);
    }

    /**
     * Filter the query on the Cruise column
     *
     * Example usage:
     * <code>
     * $query->filterByCruise('fooValue');   // WHERE Cruise = 'fooValue'
     * $query->filterByCruise('%fooValue%'); // WHERE Cruise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cruise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByCruise($cruise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cruise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cruise)) {
                $cruise = str_replace('*', '%', $cruise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::CRUISE, $cruise, $comparison);
    }

    /**
     * Filter the query on the Gazetteer column
     *
     * Example usage:
     * <code>
     * $query->filterByGazetteer('fooValue');   // WHERE Gazetteer = 'fooValue'
     * $query->filterByGazetteer('%fooValue%'); // WHERE Gazetteer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gazetteer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByGazetteer($gazetteer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gazetteer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gazetteer)) {
                $gazetteer = str_replace('*', '%', $gazetteer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::GAZETTEER, $gazetteer, $comparison);
    }

    /**
     * Filter the query on the LocalityType column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalitytype('fooValue');   // WHERE LocalityType = 'fooValue'
     * $query->filterByLocalitytype('%fooValue%'); // WHERE LocalityType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localitytype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLocalitytype($localitytype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localitytype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localitytype)) {
                $localitytype = str_replace('*', '%', $localitytype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LOCALITYTYPE, $localitytype, $comparison);
    }

    /**
     * Filter the query on the WaterDepthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByWaterdepthmin(1234); // WHERE WaterDepthMin = 1234
     * $query->filterByWaterdepthmin(array(12, 34)); // WHERE WaterDepthMin IN (12, 34)
     * $query->filterByWaterdepthmin(array('min' => 12)); // WHERE WaterDepthMin >= 12
     * $query->filterByWaterdepthmin(array('max' => 12)); // WHERE WaterDepthMin <= 12
     * </code>
     *
     * @param     mixed $waterdepthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByWaterdepthmin($waterdepthmin = null, $comparison = null)
    {
        if (is_array($waterdepthmin)) {
            $useMinMax = false;
            if (isset($waterdepthmin['min'])) {
                $this->addUsingAlias(OccurrencePeer::WATERDEPTHMIN, $waterdepthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waterdepthmin['max'])) {
                $this->addUsingAlias(OccurrencePeer::WATERDEPTHMIN, $waterdepthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::WATERDEPTHMIN, $waterdepthmin, $comparison);
    }

    /**
     * Filter the query on the WaterDepthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByWaterdepthmax(1234); // WHERE WaterDepthMax = 1234
     * $query->filterByWaterdepthmax(array(12, 34)); // WHERE WaterDepthMax IN (12, 34)
     * $query->filterByWaterdepthmax(array('min' => 12)); // WHERE WaterDepthMax >= 12
     * $query->filterByWaterdepthmax(array('max' => 12)); // WHERE WaterDepthMax <= 12
     * </code>
     *
     * @param     mixed $waterdepthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByWaterdepthmax($waterdepthmax = null, $comparison = null)
    {
        if (is_array($waterdepthmax)) {
            $useMinMax = false;
            if (isset($waterdepthmax['min'])) {
                $this->addUsingAlias(OccurrencePeer::WATERDEPTHMAX, $waterdepthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waterdepthmax['max'])) {
                $this->addUsingAlias(OccurrencePeer::WATERDEPTHMAX, $waterdepthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::WATERDEPTHMAX, $waterdepthmax, $comparison);
    }

    /**
     * Filter the query on the AltitudeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByAltitudemin(1234); // WHERE AltitudeMin = 1234
     * $query->filterByAltitudemin(array(12, 34)); // WHERE AltitudeMin IN (12, 34)
     * $query->filterByAltitudemin(array('min' => 12)); // WHERE AltitudeMin >= 12
     * $query->filterByAltitudemin(array('max' => 12)); // WHERE AltitudeMin <= 12
     * </code>
     *
     * @param     mixed $altitudemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByAltitudemin($altitudemin = null, $comparison = null)
    {
        if (is_array($altitudemin)) {
            $useMinMax = false;
            if (isset($altitudemin['min'])) {
                $this->addUsingAlias(OccurrencePeer::ALTITUDEMIN, $altitudemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($altitudemin['max'])) {
                $this->addUsingAlias(OccurrencePeer::ALTITUDEMIN, $altitudemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::ALTITUDEMIN, $altitudemin, $comparison);
    }

    /**
     * Filter the query on the AltitudeMax column
     *
     * Example usage:
     * <code>
     * $query->filterByAltitudemax(1234); // WHERE AltitudeMax = 1234
     * $query->filterByAltitudemax(array(12, 34)); // WHERE AltitudeMax IN (12, 34)
     * $query->filterByAltitudemax(array('min' => 12)); // WHERE AltitudeMax >= 12
     * $query->filterByAltitudemax(array('max' => 12)); // WHERE AltitudeMax <= 12
     * </code>
     *
     * @param     mixed $altitudemax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByAltitudemax($altitudemax = null, $comparison = null)
    {
        if (is_array($altitudemax)) {
            $useMinMax = false;
            if (isset($altitudemax['min'])) {
                $this->addUsingAlias(OccurrencePeer::ALTITUDEMAX, $altitudemax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($altitudemax['max'])) {
                $this->addUsingAlias(OccurrencePeer::ALTITUDEMAX, $altitudemax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::ALTITUDEMAX, $altitudemax, $comparison);
    }

    /**
     * Filter the query on the LatitudeDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudedeg(1234); // WHERE LatitudeDeg = 1234
     * $query->filterByLatitudedeg(array(12, 34)); // WHERE LatitudeDeg IN (12, 34)
     * $query->filterByLatitudedeg(array('min' => 12)); // WHERE LatitudeDeg >= 12
     * $query->filterByLatitudedeg(array('max' => 12)); // WHERE LatitudeDeg <= 12
     * </code>
     *
     * @param     mixed $latitudedeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLatitudedeg($latitudedeg = null, $comparison = null)
    {
        if (is_array($latitudedeg)) {
            $useMinMax = false;
            if (isset($latitudedeg['min'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDEDEG, $latitudedeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudedeg['max'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDEDEG, $latitudedeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LATITUDEDEG, $latitudedeg, $comparison);
    }

    /**
     * Filter the query on the LatitudeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudemin(1234); // WHERE LatitudeMin = 1234
     * $query->filterByLatitudemin(array(12, 34)); // WHERE LatitudeMin IN (12, 34)
     * $query->filterByLatitudemin(array('min' => 12)); // WHERE LatitudeMin >= 12
     * $query->filterByLatitudemin(array('max' => 12)); // WHERE LatitudeMin <= 12
     * </code>
     *
     * @param     mixed $latitudemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLatitudemin($latitudemin = null, $comparison = null)
    {
        if (is_array($latitudemin)) {
            $useMinMax = false;
            if (isset($latitudemin['min'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDEMIN, $latitudemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudemin['max'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDEMIN, $latitudemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LATITUDEMIN, $latitudemin, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::NORTHSOUTH, $northsouth, $comparison);
    }

    /**
     * Filter the query on the LatitudeDec column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudedec(1234); // WHERE LatitudeDec = 1234
     * $query->filterByLatitudedec(array(12, 34)); // WHERE LatitudeDec IN (12, 34)
     * $query->filterByLatitudedec(array('min' => 12)); // WHERE LatitudeDec >= 12
     * $query->filterByLatitudedec(array('max' => 12)); // WHERE LatitudeDec <= 12
     * </code>
     *
     * @param     mixed $latitudedec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLatitudedec($latitudedec = null, $comparison = null)
    {
        if (is_array($latitudedec)) {
            $useMinMax = false;
            if (isset($latitudedec['min'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDEDEC, $latitudedec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudedec['max'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDEDEC, $latitudedec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LATITUDEDEC, $latitudedec, $comparison);
    }

    /**
     * Filter the query on the LongitudeDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudedeg(1234); // WHERE LongitudeDeg = 1234
     * $query->filterByLongitudedeg(array(12, 34)); // WHERE LongitudeDeg IN (12, 34)
     * $query->filterByLongitudedeg(array('min' => 12)); // WHERE LongitudeDeg >= 12
     * $query->filterByLongitudedeg(array('max' => 12)); // WHERE LongitudeDeg <= 12
     * </code>
     *
     * @param     mixed $longitudedeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLongitudedeg($longitudedeg = null, $comparison = null)
    {
        if (is_array($longitudedeg)) {
            $useMinMax = false;
            if (isset($longitudedeg['min'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDEDEG, $longitudedeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudedeg['max'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDEDEG, $longitudedeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LONGITUDEDEG, $longitudedeg, $comparison);
    }

    /**
     * Filter the query on the LongitudeMIn column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudemin(1234); // WHERE LongitudeMIn = 1234
     * $query->filterByLongitudemin(array(12, 34)); // WHERE LongitudeMIn IN (12, 34)
     * $query->filterByLongitudemin(array('min' => 12)); // WHERE LongitudeMIn >= 12
     * $query->filterByLongitudemin(array('max' => 12)); // WHERE LongitudeMIn <= 12
     * </code>
     *
     * @param     mixed $longitudemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLongitudemin($longitudemin = null, $comparison = null)
    {
        if (is_array($longitudemin)) {
            $useMinMax = false;
            if (isset($longitudemin['min'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDEMIN, $longitudemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudemin['max'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDEMIN, $longitudemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LONGITUDEMIN, $longitudemin, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::EASTWEST, $eastwest, $comparison);
    }

    /**
     * Filter the query on the LongitudeDec column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudedec(1234); // WHERE LongitudeDec = 1234
     * $query->filterByLongitudedec(array(12, 34)); // WHERE LongitudeDec IN (12, 34)
     * $query->filterByLongitudedec(array('min' => 12)); // WHERE LongitudeDec >= 12
     * $query->filterByLongitudedec(array('max' => 12)); // WHERE LongitudeDec <= 12
     * </code>
     *
     * @param     mixed $longitudedec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLongitudedec($longitudedec = null, $comparison = null)
    {
        if (is_array($longitudedec)) {
            $useMinMax = false;
            if (isset($longitudedec['min'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDEDEC, $longitudedec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudedec['max'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDEDEC, $longitudedec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LONGITUDEDEC, $longitudedec, $comparison);
    }

    /**
     * Filter the query on the Accuracy column
     *
     * Example usage:
     * <code>
     * $query->filterByAccuracy('fooValue');   // WHERE Accuracy = 'fooValue'
     * $query->filterByAccuracy('%fooValue%'); // WHERE Accuracy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accuracy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByAccuracy($accuracy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accuracy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accuracy)) {
                $accuracy = str_replace('*', '%', $accuracy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::ACCURACY, $accuracy, $comparison);
    }

    /**
     * Filter the query on the Salinity column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinity('fooValue');   // WHERE Salinity = 'fooValue'
     * $query->filterBySalinity('%fooValue%'); // WHERE Salinity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salinity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterBySalinity($salinity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salinity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salinity)) {
                $salinity = str_replace('*', '%', $salinity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::SALINITY, $salinity, $comparison);
    }

    /**
     * Filter the query on the LatitudeTo column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudeto(1234); // WHERE LatitudeTo = 1234
     * $query->filterByLatitudeto(array(12, 34)); // WHERE LatitudeTo IN (12, 34)
     * $query->filterByLatitudeto(array('min' => 12)); // WHERE LatitudeTo >= 12
     * $query->filterByLatitudeto(array('max' => 12)); // WHERE LatitudeTo <= 12
     * </code>
     *
     * @param     mixed $latitudeto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLatitudeto($latitudeto = null, $comparison = null)
    {
        if (is_array($latitudeto)) {
            $useMinMax = false;
            if (isset($latitudeto['min'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDETO, $latitudeto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudeto['max'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDETO, $latitudeto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LATITUDETO, $latitudeto, $comparison);
    }

    /**
     * Filter the query on the LongitudeTo column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudeto(1234); // WHERE LongitudeTo = 1234
     * $query->filterByLongitudeto(array(12, 34)); // WHERE LongitudeTo IN (12, 34)
     * $query->filterByLongitudeto(array('min' => 12)); // WHERE LongitudeTo >= 12
     * $query->filterByLongitudeto(array('max' => 12)); // WHERE LongitudeTo <= 12
     * </code>
     *
     * @param     mixed $longitudeto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLongitudeto($longitudeto = null, $comparison = null)
    {
        if (is_array($longitudeto)) {
            $useMinMax = false;
            if (isset($longitudeto['min'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDETO, $longitudeto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudeto['max'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDETO, $longitudeto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LONGITUDETO, $longitudeto, $comparison);
    }

    /**
     * Filter the query on the LatitudeDegTo column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudedegto(1234); // WHERE LatitudeDegTo = 1234
     * $query->filterByLatitudedegto(array(12, 34)); // WHERE LatitudeDegTo IN (12, 34)
     * $query->filterByLatitudedegto(array('min' => 12)); // WHERE LatitudeDegTo >= 12
     * $query->filterByLatitudedegto(array('max' => 12)); // WHERE LatitudeDegTo <= 12
     * </code>
     *
     * @param     mixed $latitudedegto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLatitudedegto($latitudedegto = null, $comparison = null)
    {
        if (is_array($latitudedegto)) {
            $useMinMax = false;
            if (isset($latitudedegto['min'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDEDEGTO, $latitudedegto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudedegto['max'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDEDEGTO, $latitudedegto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LATITUDEDEGTO, $latitudedegto, $comparison);
    }

    /**
     * Filter the query on the LatitudeMinTo column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudeminto(1234); // WHERE LatitudeMinTo = 1234
     * $query->filterByLatitudeminto(array(12, 34)); // WHERE LatitudeMinTo IN (12, 34)
     * $query->filterByLatitudeminto(array('min' => 12)); // WHERE LatitudeMinTo >= 12
     * $query->filterByLatitudeminto(array('max' => 12)); // WHERE LatitudeMinTo <= 12
     * </code>
     *
     * @param     mixed $latitudeminto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLatitudeminto($latitudeminto = null, $comparison = null)
    {
        if (is_array($latitudeminto)) {
            $useMinMax = false;
            if (isset($latitudeminto['min'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDEMINTO, $latitudeminto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudeminto['max'])) {
                $this->addUsingAlias(OccurrencePeer::LATITUDEMINTO, $latitudeminto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LATITUDEMINTO, $latitudeminto, $comparison);
    }

    /**
     * Filter the query on the NorthSouthTo column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouthto('fooValue');   // WHERE NorthSouthTo = 'fooValue'
     * $query->filterByNorthsouthto('%fooValue%'); // WHERE NorthSouthTo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouthto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByNorthsouthto($northsouthto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouthto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouthto)) {
                $northsouthto = str_replace('*', '%', $northsouthto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::NORTHSOUTHTO, $northsouthto, $comparison);
    }

    /**
     * Filter the query on the LongitudeDegTo column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudedegto(1234); // WHERE LongitudeDegTo = 1234
     * $query->filterByLongitudedegto(array(12, 34)); // WHERE LongitudeDegTo IN (12, 34)
     * $query->filterByLongitudedegto(array('min' => 12)); // WHERE LongitudeDegTo >= 12
     * $query->filterByLongitudedegto(array('max' => 12)); // WHERE LongitudeDegTo <= 12
     * </code>
     *
     * @param     mixed $longitudedegto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLongitudedegto($longitudedegto = null, $comparison = null)
    {
        if (is_array($longitudedegto)) {
            $useMinMax = false;
            if (isset($longitudedegto['min'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDEDEGTO, $longitudedegto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudedegto['max'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDEDEGTO, $longitudedegto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LONGITUDEDEGTO, $longitudedegto, $comparison);
    }

    /**
     * Filter the query on the LongitudeMInTo column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudeminto(1234); // WHERE LongitudeMInTo = 1234
     * $query->filterByLongitudeminto(array(12, 34)); // WHERE LongitudeMInTo IN (12, 34)
     * $query->filterByLongitudeminto(array('min' => 12)); // WHERE LongitudeMInTo >= 12
     * $query->filterByLongitudeminto(array('max' => 12)); // WHERE LongitudeMInTo <= 12
     * </code>
     *
     * @param     mixed $longitudeminto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLongitudeminto($longitudeminto = null, $comparison = null)
    {
        if (is_array($longitudeminto)) {
            $useMinMax = false;
            if (isset($longitudeminto['min'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDEMINTO, $longitudeminto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudeminto['max'])) {
                $this->addUsingAlias(OccurrencePeer::LONGITUDEMINTO, $longitudeminto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LONGITUDEMINTO, $longitudeminto, $comparison);
    }

    /**
     * Filter the query on the EastWestTo column
     *
     * Example usage:
     * <code>
     * $query->filterByEastwestto('fooValue');   // WHERE EastWestTo = 'fooValue'
     * $query->filterByEastwestto('%fooValue%'); // WHERE EastWestTo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eastwestto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByEastwestto($eastwestto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eastwestto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eastwestto)) {
                $eastwestto = str_replace('*', '%', $eastwestto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::EASTWESTTO, $eastwestto, $comparison);
    }

    /**
     * Filter the query on the Temp column
     *
     * Example usage:
     * <code>
     * $query->filterByTemp(1234); // WHERE Temp = 1234
     * $query->filterByTemp(array(12, 34)); // WHERE Temp IN (12, 34)
     * $query->filterByTemp(array('min' => 12)); // WHERE Temp >= 12
     * $query->filterByTemp(array('max' => 12)); // WHERE Temp <= 12
     * </code>
     *
     * @param     mixed $temp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByTemp($temp = null, $comparison = null)
    {
        if (is_array($temp)) {
            $useMinMax = false;
            if (isset($temp['min'])) {
                $this->addUsingAlias(OccurrencePeer::TEMP, $temp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temp['max'])) {
                $this->addUsingAlias(OccurrencePeer::TEMP, $temp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::TEMP, $temp, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(OccurrencePeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(OccurrencePeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::AREACODE, $areacode, $comparison);
    }

    /**
     * Filter the query on the SeaDrainage column
     *
     * Example usage:
     * <code>
     * $query->filterBySeadrainage('fooValue');   // WHERE SeaDrainage = 'fooValue'
     * $query->filterBySeadrainage('%fooValue%'); // WHERE SeaDrainage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $seadrainage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterBySeadrainage($seadrainage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($seadrainage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $seadrainage)) {
                $seadrainage = str_replace('*', '%', $seadrainage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::SEADRAINAGE, $seadrainage, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::C_CODE, $cCode, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::PROVINCE, $province, $comparison);
    }

    /**
     * Filter the query on the Date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('fooValue');   // WHERE Date = 'fooValue'
     * $query->filterByDate('%fooValue%'); // WHERE Date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $date The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($date)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $date)) {
                $date = str_replace('*', '%', $date);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the DateTo column
     *
     * Example usage:
     * <code>
     * $query->filterByDateto('fooValue');   // WHERE DateTo = 'fooValue'
     * $query->filterByDateto('%fooValue%'); // WHERE DateTo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByDateto($dateto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateto)) {
                $dateto = str_replace('*', '%', $dateto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::DATETO, $dateto, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(OccurrencePeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(OccurrencePeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the DateType column
     *
     * Example usage:
     * <code>
     * $query->filterByDatetype('fooValue');   // WHERE DateType = 'fooValue'
     * $query->filterByDatetype('%fooValue%'); // WHERE DateType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datetype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByDatetype($datetype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datetype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datetype)) {
                $datetype = str_replace('*', '%', $datetype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::DATETYPE, $datetype, $comparison);
    }

    /**
     * Filter the query on the DayTimeStart column
     *
     * Example usage:
     * <code>
     * $query->filterByDaytimestart('fooValue');   // WHERE DayTimeStart = 'fooValue'
     * $query->filterByDaytimestart('%fooValue%'); // WHERE DayTimeStart LIKE '%fooValue%'
     * </code>
     *
     * @param     string $daytimestart The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByDaytimestart($daytimestart = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($daytimestart)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $daytimestart)) {
                $daytimestart = str_replace('*', '%', $daytimestart);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::DAYTIMESTART, $daytimestart, $comparison);
    }

    /**
     * Filter the query on the DayTimeStop column
     *
     * Example usage:
     * <code>
     * $query->filterByDaytimestop('fooValue');   // WHERE DayTimeStop = 'fooValue'
     * $query->filterByDaytimestop('%fooValue%'); // WHERE DayTimeStop LIKE '%fooValue%'
     * </code>
     *
     * @param     string $daytimestop The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByDaytimestop($daytimestop = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($daytimestop)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $daytimestop)) {
                $daytimestop = str_replace('*', '%', $daytimestop);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::DAYTIMESTOP, $daytimestop, $comparison);
    }

    /**
     * Filter the query on the Length column
     *
     * Example usage:
     * <code>
     * $query->filterByLength(1234); // WHERE Length = 1234
     * $query->filterByLength(array(12, 34)); // WHERE Length IN (12, 34)
     * $query->filterByLength(array('min' => 12)); // WHERE Length >= 12
     * $query->filterByLength(array('max' => 12)); // WHERE Length <= 12
     * </code>
     *
     * @param     mixed $length The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLength($length = null, $comparison = null)
    {
        if (is_array($length)) {
            $useMinMax = false;
            if (isset($length['min'])) {
                $this->addUsingAlias(OccurrencePeer::LENGTH, $length['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($length['max'])) {
                $this->addUsingAlias(OccurrencePeer::LENGTH, $length['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LENGTH, $length, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::LENGTHTYPE, $lengthtype, $comparison);
    }

    /**
     * Filter the query on the Length2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLength2(1234); // WHERE Length2 = 1234
     * $query->filterByLength2(array(12, 34)); // WHERE Length2 IN (12, 34)
     * $query->filterByLength2(array('min' => 12)); // WHERE Length2 >= 12
     * $query->filterByLength2(array('max' => 12)); // WHERE Length2 <= 12
     * </code>
     *
     * @param     mixed $length2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLength2($length2 = null, $comparison = null)
    {
        if (is_array($length2)) {
            $useMinMax = false;
            if (isset($length2['min'])) {
                $this->addUsingAlias(OccurrencePeer::LENGTH2, $length2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($length2['max'])) {
                $this->addUsingAlias(OccurrencePeer::LENGTH2, $length2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LENGTH2, $length2, $comparison);
    }

    /**
     * Filter the query on the LengthType2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtype2('fooValue');   // WHERE LengthType2 = 'fooValue'
     * $query->filterByLengthtype2('%fooValue%'); // WHERE LengthType2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtype2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLengthtype2($lengthtype2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtype2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtype2)) {
                $lengthtype2 = str_replace('*', '%', $lengthtype2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LENGTHTYPE2, $lengthtype2, $comparison);
    }

    /**
     * Filter the query on the Lengthmin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmin(1234); // WHERE Lengthmin = 1234
     * $query->filterByLengthmin(array(12, 34)); // WHERE Lengthmin IN (12, 34)
     * $query->filterByLengthmin(array('min' => 12)); // WHERE Lengthmin >= 12
     * $query->filterByLengthmin(array('max' => 12)); // WHERE Lengthmin <= 12
     * </code>
     *
     * @param     mixed $lengthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLengthmin($lengthmin = null, $comparison = null)
    {
        if (is_array($lengthmin)) {
            $useMinMax = false;
            if (isset($lengthmin['min'])) {
                $this->addUsingAlias(OccurrencePeer::LENGTHMIN, $lengthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmin['max'])) {
                $this->addUsingAlias(OccurrencePeer::LENGTHMIN, $lengthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LENGTHMIN, $lengthmin, $comparison);
    }

    /**
     * Filter the query on the Lengthmax column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmax(1234); // WHERE Lengthmax = 1234
     * $query->filterByLengthmax(array(12, 34)); // WHERE Lengthmax IN (12, 34)
     * $query->filterByLengthmax(array('min' => 12)); // WHERE Lengthmax >= 12
     * $query->filterByLengthmax(array('max' => 12)); // WHERE Lengthmax <= 12
     * </code>
     *
     * @param     mixed $lengthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLengthmax($lengthmax = null, $comparison = null)
    {
        if (is_array($lengthmax)) {
            $useMinMax = false;
            if (isset($lengthmax['min'])) {
                $this->addUsingAlias(OccurrencePeer::LENGTHMAX, $lengthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmax['max'])) {
                $this->addUsingAlias(OccurrencePeer::LENGTHMAX, $lengthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LENGTHMAX, $lengthmax, $comparison);
    }

    /**
     * Filter the query on the Weight column
     *
     * Example usage:
     * <code>
     * $query->filterByWeight(1234); // WHERE Weight = 1234
     * $query->filterByWeight(array(12, 34)); // WHERE Weight IN (12, 34)
     * $query->filterByWeight(array('min' => 12)); // WHERE Weight >= 12
     * $query->filterByWeight(array('max' => 12)); // WHERE Weight <= 12
     * </code>
     *
     * @param     mixed $weight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(OccurrencePeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(OccurrencePeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::WEIGHT, $weight, $comparison);
    }

    /**
     * Filter the query on the Number column
     *
     * Example usage:
     * <code>
     * $query->filterByNumber(1234); // WHERE Number = 1234
     * $query->filterByNumber(array(12, 34)); // WHERE Number IN (12, 34)
     * $query->filterByNumber(array('min' => 12)); // WHERE Number >= 12
     * $query->filterByNumber(array('max' => 12)); // WHERE Number <= 12
     * </code>
     *
     * @param     mixed $number The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (is_array($number)) {
            $useMinMax = false;
            if (isset($number['min'])) {
                $this->addUsingAlias(OccurrencePeer::NUMBER, $number['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($number['max'])) {
                $this->addUsingAlias(OccurrencePeer::NUMBER, $number['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::NUMBER, $number, $comparison);
    }

    /**
     * Filter the query on the PercentCatch column
     *
     * Example usage:
     * <code>
     * $query->filterByPercentcatch(1234); // WHERE PercentCatch = 1234
     * $query->filterByPercentcatch(array(12, 34)); // WHERE PercentCatch IN (12, 34)
     * $query->filterByPercentcatch(array('min' => 12)); // WHERE PercentCatch >= 12
     * $query->filterByPercentcatch(array('max' => 12)); // WHERE PercentCatch <= 12
     * </code>
     *
     * @param     mixed $percentcatch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByPercentcatch($percentcatch = null, $comparison = null)
    {
        if (is_array($percentcatch)) {
            $useMinMax = false;
            if (isset($percentcatch['min'])) {
                $this->addUsingAlias(OccurrencePeer::PERCENTCATCH, $percentcatch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($percentcatch['max'])) {
                $this->addUsingAlias(OccurrencePeer::PERCENTCATCH, $percentcatch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::PERCENTCATCH, $percentcatch, $comparison);
    }

    /**
     * Filter the query on the Abundance column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundance('fooValue');   // WHERE Abundance = 'fooValue'
     * $query->filterByAbundance('%fooValue%'); // WHERE Abundance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abundance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByAbundance($abundance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abundance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abundance)) {
                $abundance = str_replace('*', '%', $abundance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::ABUNDANCE, $abundance, $comparison);
    }

    /**
     * Filter the query on the LiveStage column
     *
     * Example usage:
     * <code>
     * $query->filterByLivestage('fooValue');   // WHERE LiveStage = 'fooValue'
     * $query->filterByLivestage('%fooValue%'); // WHERE LiveStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $livestage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLivestage($livestage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($livestage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $livestage)) {
                $livestage = str_replace('*', '%', $livestage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LIVESTAGE, $livestage, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the Bottom column
     *
     * Example usage:
     * <code>
     * $query->filterByBottom('fooValue');   // WHERE Bottom = 'fooValue'
     * $query->filterByBottom('%fooValue%'); // WHERE Bottom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bottom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByBottom($bottom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bottom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bottom)) {
                $bottom = str_replace('*', '%', $bottom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::BOTTOM, $bottom, $comparison);
    }

    /**
     * Filter the query on the Gear column
     *
     * Example usage:
     * <code>
     * $query->filterByGear('fooValue');   // WHERE Gear = 'fooValue'
     * $query->filterByGear('%fooValue%'); // WHERE Gear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gear The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByGear($gear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gear)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gear)) {
                $gear = str_replace('*', '%', $gear);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::GEAR, $gear, $comparison);
    }

    /**
     * Filter the query on the Remark_FB column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkFb('fooValue');   // WHERE Remark_FB = 'fooValue'
     * $query->filterByRemarkFb('%fooValue%'); // WHERE Remark_FB LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkFb The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByRemarkFb($remarkFb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkFb)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkFb)) {
                $remarkFb = str_replace('*', '%', $remarkFb);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::REMARK_FB, $remarkFb, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the Vessel column
     *
     * Example usage:
     * <code>
     * $query->filterByVessel('fooValue');   // WHERE Vessel = 'fooValue'
     * $query->filterByVessel('%fooValue%'); // WHERE Vessel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vessel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByVessel($vessel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vessel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vessel)) {
                $vessel = str_replace('*', '%', $vessel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::VESSEL, $vessel, $comparison);
    }

    /**
     * Filter the query on the Expedition column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedition('fooValue');   // WHERE Expedition = 'fooValue'
     * $query->filterByExpedition('%fooValue%'); // WHERE Expedition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByExpedition($expedition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedition)) {
                $expedition = str_replace('*', '%', $expedition);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::EXPEDITION, $expedition, $comparison);
    }

    /**
     * Filter the query on the Collector column
     *
     * Example usage:
     * <code>
     * $query->filterByCollector('fooValue');   // WHERE Collector = 'fooValue'
     * $query->filterByCollector('%fooValue%'); // WHERE Collector LIKE '%fooValue%'
     * </code>
     *
     * @param     string $collector The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByCollector($collector = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($collector)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $collector)) {
                $collector = str_replace('*', '%', $collector);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::COLLECTOR, $collector, $comparison);
    }

    /**
     * Filter the query on the Identifier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifier('fooValue');   // WHERE Identifier = 'fooValue'
     * $query->filterByIdentifier('%fooValue%'); // WHERE Identifier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByIdentifier($identifier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifier)) {
                $identifier = str_replace('*', '%', $identifier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::IDENTIFIER, $identifier, $comparison);
    }

    /**
     * Filter the query on the IdentifierStandard column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifierstandard('fooValue');   // WHERE IdentifierStandard = 'fooValue'
     * $query->filterByIdentifierstandard('%fooValue%'); // WHERE IdentifierStandard LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifierstandard The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByIdentifierstandard($identifierstandard = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifierstandard)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifierstandard)) {
                $identifierstandard = str_replace('*', '%', $identifierstandard);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::IDENTIFIERSTANDARD, $identifierstandard, $comparison);
    }

    /**
     * Filter the query on the IdentifierYR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifieryr(1234); // WHERE IdentifierYR = 1234
     * $query->filterByIdentifieryr(array(12, 34)); // WHERE IdentifierYR IN (12, 34)
     * $query->filterByIdentifieryr(array('min' => 12)); // WHERE IdentifierYR >= 12
     * $query->filterByIdentifieryr(array('max' => 12)); // WHERE IdentifierYR <= 12
     * </code>
     *
     * @param     mixed $identifieryr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByIdentifieryr($identifieryr = null, $comparison = null)
    {
        if (is_array($identifieryr)) {
            $useMinMax = false;
            if (isset($identifieryr['min'])) {
                $this->addUsingAlias(OccurrencePeer::IDENTIFIERYR, $identifieryr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identifieryr['max'])) {
                $this->addUsingAlias(OccurrencePeer::IDENTIFIERYR, $identifieryr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::IDENTIFIERYR, $identifieryr, $comparison);
    }

    /**
     * Filter the query on the QName column
     *
     * Example usage:
     * <code>
     * $query->filterByQname(1234); // WHERE QName = 1234
     * $query->filterByQname(array(12, 34)); // WHERE QName IN (12, 34)
     * $query->filterByQname(array('min' => 12)); // WHERE QName >= 12
     * $query->filterByQname(array('max' => 12)); // WHERE QName <= 12
     * </code>
     *
     * @param     mixed $qname The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByQname($qname = null, $comparison = null)
    {
        if (is_array($qname)) {
            $useMinMax = false;
            if (isset($qname['min'])) {
                $this->addUsingAlias(OccurrencePeer::QNAME, $qname['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qname['max'])) {
                $this->addUsingAlias(OccurrencePeer::QNAME, $qname['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::QNAME, $qname, $comparison);
    }

    /**
     * Filter the query on the QIdentifier column
     *
     * Example usage:
     * <code>
     * $query->filterByQidentifier(1234); // WHERE QIdentifier = 1234
     * $query->filterByQidentifier(array(12, 34)); // WHERE QIdentifier IN (12, 34)
     * $query->filterByQidentifier(array('min' => 12)); // WHERE QIdentifier >= 12
     * $query->filterByQidentifier(array('max' => 12)); // WHERE QIdentifier <= 12
     * </code>
     *
     * @param     mixed $qidentifier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByQidentifier($qidentifier = null, $comparison = null)
    {
        if (is_array($qidentifier)) {
            $useMinMax = false;
            if (isset($qidentifier['min'])) {
                $this->addUsingAlias(OccurrencePeer::QIDENTIFIER, $qidentifier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qidentifier['max'])) {
                $this->addUsingAlias(OccurrencePeer::QIDENTIFIER, $qidentifier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::QIDENTIFIER, $qidentifier, $comparison);
    }

    /**
     * Filter the query on the QArea column
     *
     * Example usage:
     * <code>
     * $query->filterByQarea(1234); // WHERE QArea = 1234
     * $query->filterByQarea(array(12, 34)); // WHERE QArea IN (12, 34)
     * $query->filterByQarea(array('min' => 12)); // WHERE QArea >= 12
     * $query->filterByQarea(array('max' => 12)); // WHERE QArea <= 12
     * </code>
     *
     * @param     mixed $qarea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByQarea($qarea = null, $comparison = null)
    {
        if (is_array($qarea)) {
            $useMinMax = false;
            if (isset($qarea['min'])) {
                $this->addUsingAlias(OccurrencePeer::QAREA, $qarea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qarea['max'])) {
                $this->addUsingAlias(OccurrencePeer::QAREA, $qarea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::QAREA, $qarea, $comparison);
    }

    /**
     * Filter the query on the QCountry column
     *
     * Example usage:
     * <code>
     * $query->filterByQcountry(1234); // WHERE QCountry = 1234
     * $query->filterByQcountry(array(12, 34)); // WHERE QCountry IN (12, 34)
     * $query->filterByQcountry(array('min' => 12)); // WHERE QCountry >= 12
     * $query->filterByQcountry(array('max' => 12)); // WHERE QCountry <= 12
     * </code>
     *
     * @param     mixed $qcountry The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByQcountry($qcountry = null, $comparison = null)
    {
        if (is_array($qcountry)) {
            $useMinMax = false;
            if (isset($qcountry['min'])) {
                $this->addUsingAlias(OccurrencePeer::QCOUNTRY, $qcountry['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qcountry['max'])) {
                $this->addUsingAlias(OccurrencePeer::QCOUNTRY, $qcountry['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::QCOUNTRY, $qcountry, $comparison);
    }

    /**
     * Filter the query on the QCoordinates column
     *
     * Example usage:
     * <code>
     * $query->filterByQcoordinates(1234); // WHERE QCoordinates = 1234
     * $query->filterByQcoordinates(array(12, 34)); // WHERE QCoordinates IN (12, 34)
     * $query->filterByQcoordinates(array('min' => 12)); // WHERE QCoordinates >= 12
     * $query->filterByQcoordinates(array('max' => 12)); // WHERE QCoordinates <= 12
     * </code>
     *
     * @param     mixed $qcoordinates The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByQcoordinates($qcoordinates = null, $comparison = null)
    {
        if (is_array($qcoordinates)) {
            $useMinMax = false;
            if (isset($qcoordinates['min'])) {
                $this->addUsingAlias(OccurrencePeer::QCOORDINATES, $qcoordinates['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qcoordinates['max'])) {
                $this->addUsingAlias(OccurrencePeer::QCOORDINATES, $qcoordinates['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::QCOORDINATES, $qcoordinates, $comparison);
    }

    /**
     * Filter the query on the Type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE Type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE Type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the MS column
     *
     * Example usage:
     * <code>
     * $query->filterByMs('fooValue');   // WHERE MS = 'fooValue'
     * $query->filterByMs('%fooValue%'); // WHERE MS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ms The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByMs($ms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ms)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ms)) {
                $ms = str_replace('*', '%', $ms);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::MS, $ms, $comparison);
    }

    /**
     * Filter the query on the Storage column
     *
     * Example usage:
     * <code>
     * $query->filterByStorage('fooValue');   // WHERE Storage = 'fooValue'
     * $query->filterByStorage('%fooValue%'); // WHERE Storage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByStorage($storage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $storage)) {
                $storage = str_replace('*', '%', $storage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::STORAGE, $storage, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::RECORDTYPE, $recordtype, $comparison);
    }

    /**
     * Filter the query on the BasisOfRecord column
     *
     * Example usage:
     * <code>
     * $query->filterByBasisofrecord('fooValue');   // WHERE BasisOfRecord = 'fooValue'
     * $query->filterByBasisofrecord('%fooValue%'); // WHERE BasisOfRecord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $basisofrecord The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByBasisofrecord($basisofrecord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($basisofrecord)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $basisofrecord)) {
                $basisofrecord = str_replace('*', '%', $basisofrecord);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::BASISOFRECORD, $basisofrecord, $comparison);
    }

    /**
     * Filter the query on the CheckedCol column
     *
     * Example usage:
     * <code>
     * $query->filterByCheckedcol('fooValue');   // WHERE CheckedCol = 'fooValue'
     * $query->filterByCheckedcol('%fooValue%'); // WHERE CheckedCol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $checkedcol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByCheckedcol($checkedcol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($checkedcol)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $checkedcol)) {
                $checkedcol = str_replace('*', '%', $checkedcol);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::CHECKEDCOL, $checkedcol, $comparison);
    }

    /**
     * Filter the query on the Validity column
     *
     * Example usage:
     * <code>
     * $query->filterByValidity('fooValue');   // WHERE Validity = 'fooValue'
     * $query->filterByValidity('%fooValue%'); // WHERE Validity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByValidity($validity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validity)) {
                $validity = str_replace('*', '%', $validity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::VALIDITY, $validity, $comparison);
    }

    /**
     * Filter the query on the DateRecapture column
     *
     * Example usage:
     * <code>
     * $query->filterByDaterecapture('fooValue');   // WHERE DateRecapture = 'fooValue'
     * $query->filterByDaterecapture('%fooValue%'); // WHERE DateRecapture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $daterecapture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByDaterecapture($daterecapture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($daterecapture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $daterecapture)) {
                $daterecapture = str_replace('*', '%', $daterecapture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::DATERECAPTURE, $daterecapture, $comparison);
    }

    /**
     * Filter the query on the LatDegRel column
     *
     * Example usage:
     * <code>
     * $query->filterByLatdegrel(1234); // WHERE LatDegRel = 1234
     * $query->filterByLatdegrel(array(12, 34)); // WHERE LatDegRel IN (12, 34)
     * $query->filterByLatdegrel(array('min' => 12)); // WHERE LatDegRel >= 12
     * $query->filterByLatdegrel(array('max' => 12)); // WHERE LatDegRel <= 12
     * </code>
     *
     * @param     mixed $latdegrel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLatdegrel($latdegrel = null, $comparison = null)
    {
        if (is_array($latdegrel)) {
            $useMinMax = false;
            if (isset($latdegrel['min'])) {
                $this->addUsingAlias(OccurrencePeer::LATDEGREL, $latdegrel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latdegrel['max'])) {
                $this->addUsingAlias(OccurrencePeer::LATDEGREL, $latdegrel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LATDEGREL, $latdegrel, $comparison);
    }

    /**
     * Filter the query on the LatMinRel column
     *
     * Example usage:
     * <code>
     * $query->filterByLatminrel(1234); // WHERE LatMinRel = 1234
     * $query->filterByLatminrel(array(12, 34)); // WHERE LatMinRel IN (12, 34)
     * $query->filterByLatminrel(array('min' => 12)); // WHERE LatMinRel >= 12
     * $query->filterByLatminrel(array('max' => 12)); // WHERE LatMinRel <= 12
     * </code>
     *
     * @param     mixed $latminrel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLatminrel($latminrel = null, $comparison = null)
    {
        if (is_array($latminrel)) {
            $useMinMax = false;
            if (isset($latminrel['min'])) {
                $this->addUsingAlias(OccurrencePeer::LATMINREL, $latminrel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latminrel['max'])) {
                $this->addUsingAlias(OccurrencePeer::LATMINREL, $latminrel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LATMINREL, $latminrel, $comparison);
    }

    /**
     * Filter the query on the NorthSouthRel column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouthrel('fooValue');   // WHERE NorthSouthRel = 'fooValue'
     * $query->filterByNorthsouthrel('%fooValue%'); // WHERE NorthSouthRel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouthrel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByNorthsouthrel($northsouthrel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouthrel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouthrel)) {
                $northsouthrel = str_replace('*', '%', $northsouthrel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::NORTHSOUTHREL, $northsouthrel, $comparison);
    }

    /**
     * Filter the query on the LongDegRel column
     *
     * Example usage:
     * <code>
     * $query->filterByLongdegrel(1234); // WHERE LongDegRel = 1234
     * $query->filterByLongdegrel(array(12, 34)); // WHERE LongDegRel IN (12, 34)
     * $query->filterByLongdegrel(array('min' => 12)); // WHERE LongDegRel >= 12
     * $query->filterByLongdegrel(array('max' => 12)); // WHERE LongDegRel <= 12
     * </code>
     *
     * @param     mixed $longdegrel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLongdegrel($longdegrel = null, $comparison = null)
    {
        if (is_array($longdegrel)) {
            $useMinMax = false;
            if (isset($longdegrel['min'])) {
                $this->addUsingAlias(OccurrencePeer::LONGDEGREL, $longdegrel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longdegrel['max'])) {
                $this->addUsingAlias(OccurrencePeer::LONGDEGREL, $longdegrel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LONGDEGREL, $longdegrel, $comparison);
    }

    /**
     * Filter the query on the LongMinRel column
     *
     * Example usage:
     * <code>
     * $query->filterByLongminrel(1234); // WHERE LongMinRel = 1234
     * $query->filterByLongminrel(array(12, 34)); // WHERE LongMinRel IN (12, 34)
     * $query->filterByLongminrel(array('min' => 12)); // WHERE LongMinRel >= 12
     * $query->filterByLongminrel(array('max' => 12)); // WHERE LongMinRel <= 12
     * </code>
     *
     * @param     mixed $longminrel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLongminrel($longminrel = null, $comparison = null)
    {
        if (is_array($longminrel)) {
            $useMinMax = false;
            if (isset($longminrel['min'])) {
                $this->addUsingAlias(OccurrencePeer::LONGMINREL, $longminrel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longminrel['max'])) {
                $this->addUsingAlias(OccurrencePeer::LONGMINREL, $longminrel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LONGMINREL, $longminrel, $comparison);
    }

    /**
     * Filter the query on the EastWestRel column
     *
     * Example usage:
     * <code>
     * $query->filterByEastwestrel('fooValue');   // WHERE EastWestRel = 'fooValue'
     * $query->filterByEastwestrel('%fooValue%'); // WHERE EastWestRel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eastwestrel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByEastwestrel($eastwestrel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eastwestrel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eastwestrel)) {
                $eastwestrel = str_replace('*', '%', $eastwestrel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::EASTWESTREL, $eastwestrel, $comparison);
    }

    /**
     * Filter the query on the LengthRel column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthrel(1234); // WHERE LengthRel = 1234
     * $query->filterByLengthrel(array(12, 34)); // WHERE LengthRel IN (12, 34)
     * $query->filterByLengthrel(array('min' => 12)); // WHERE LengthRel >= 12
     * $query->filterByLengthrel(array('max' => 12)); // WHERE LengthRel <= 12
     * </code>
     *
     * @param     mixed $lengthrel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLengthrel($lengthrel = null, $comparison = null)
    {
        if (is_array($lengthrel)) {
            $useMinMax = false;
            if (isset($lengthrel['min'])) {
                $this->addUsingAlias(OccurrencePeer::LENGTHREL, $lengthrel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthrel['max'])) {
                $this->addUsingAlias(OccurrencePeer::LENGTHREL, $lengthrel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LENGTHREL, $lengthrel, $comparison);
    }

    /**
     * Filter the query on the LengthTypeRel column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtyperel('fooValue');   // WHERE LengthTypeRel = 'fooValue'
     * $query->filterByLengthtyperel('%fooValue%'); // WHERE LengthTypeRel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtyperel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLengthtyperel($lengthtyperel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtyperel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtyperel)) {
                $lengthtyperel = str_replace('*', '%', $lengthtyperel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LENGTHTYPEREL, $lengthtyperel, $comparison);
    }

    /**
     * Filter the query on the WeightRel column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightrel(1234); // WHERE WeightRel = 1234
     * $query->filterByWeightrel(array(12, 34)); // WHERE WeightRel IN (12, 34)
     * $query->filterByWeightrel(array('min' => 12)); // WHERE WeightRel >= 12
     * $query->filterByWeightrel(array('max' => 12)); // WHERE WeightRel <= 12
     * </code>
     *
     * @param     mixed $weightrel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByWeightrel($weightrel = null, $comparison = null)
    {
        if (is_array($weightrel)) {
            $useMinMax = false;
            if (isset($weightrel['min'])) {
                $this->addUsingAlias(OccurrencePeer::WEIGHTREL, $weightrel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightrel['max'])) {
                $this->addUsingAlias(OccurrencePeer::WEIGHTREL, $weightrel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::WEIGHTREL, $weightrel, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(OccurrencePeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(OccurrencePeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::ENTERED, $entered, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OccurrencePeer::DATEENTERED, $dateentered, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(OccurrencePeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(OccurrencePeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::MODIFIED, $modified, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(OccurrencePeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(OccurrencePeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(OccurrencePeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(OccurrencePeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE DateChecked < '2011-03-13'
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(OccurrencePeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(OccurrencePeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Locality1 column
     *
     * Example usage:
     * <code>
     * $query->filterByLocality1('fooValue');   // WHERE Locality1 = 'fooValue'
     * $query->filterByLocality1('%fooValue%'); // WHERE Locality1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locality1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByLocality1($locality1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locality1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locality1)) {
                $locality1 = str_replace('*', '%', $locality1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::LOCALITY1, $locality1, $comparison);
    }

    /**
     * Filter the query on the TwoDegree30W column
     *
     * Example usage:
     * <code>
     * $query->filterByTwodegree30w('fooValue');   // WHERE TwoDegree30W = 'fooValue'
     * $query->filterByTwodegree30w('%fooValue%'); // WHERE TwoDegree30W LIKE '%fooValue%'
     * </code>
     *
     * @param     string $twodegree30w The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByTwodegree30w($twodegree30w = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($twodegree30w)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $twodegree30w)) {
                $twodegree30w = str_replace('*', '%', $twodegree30w);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::TWODEGREE30W, $twodegree30w, $comparison);
    }

    /**
     * Filter the query on the OneDegree30W column
     *
     * Example usage:
     * <code>
     * $query->filterByOnedegree30w('fooValue');   // WHERE OneDegree30W = 'fooValue'
     * $query->filterByOnedegree30w('%fooValue%'); // WHERE OneDegree30W LIKE '%fooValue%'
     * </code>
     *
     * @param     string $onedegree30w The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByOnedegree30w($onedegree30w = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($onedegree30w)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $onedegree30w)) {
                $onedegree30w = str_replace('*', '%', $onedegree30w);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::ONEDEGREE30W, $onedegree30w, $comparison);
    }

    /**
     * Filter the query on the TenDegree30W column
     *
     * Example usage:
     * <code>
     * $query->filterByTendegree30w('fooValue');   // WHERE TenDegree30W = 'fooValue'
     * $query->filterByTendegree30w('%fooValue%'); // WHERE TenDegree30W LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tendegree30w The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByTendegree30w($tendegree30w = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tendegree30w)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tendegree30w)) {
                $tendegree30w = str_replace('*', '%', $tendegree30w);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::TENDEGREE30W, $tendegree30w, $comparison);
    }

    /**
     * Filter the query on the CSquarecode column
     *
     * Example usage:
     * <code>
     * $query->filterByCsquarecode('fooValue');   // WHERE CSquarecode = 'fooValue'
     * $query->filterByCsquarecode('%fooValue%'); // WHERE CSquarecode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $csquarecode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByCsquarecode($csquarecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($csquarecode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $csquarecode)) {
                $csquarecode = str_replace('*', '%', $csquarecode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::CSQUARECODE, $csquarecode, $comparison);
    }

    /**
     * Filter the query on the PublishedDistance column
     *
     * Example usage:
     * <code>
     * $query->filterByPublisheddistance(1234); // WHERE PublishedDistance = 1234
     * $query->filterByPublisheddistance(array(12, 34)); // WHERE PublishedDistance IN (12, 34)
     * $query->filterByPublisheddistance(array('min' => 12)); // WHERE PublishedDistance >= 12
     * $query->filterByPublisheddistance(array('max' => 12)); // WHERE PublishedDistance <= 12
     * </code>
     *
     * @param     mixed $publisheddistance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByPublisheddistance($publisheddistance = null, $comparison = null)
    {
        if (is_array($publisheddistance)) {
            $useMinMax = false;
            if (isset($publisheddistance['min'])) {
                $this->addUsingAlias(OccurrencePeer::PUBLISHEDDISTANCE, $publisheddistance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($publisheddistance['max'])) {
                $this->addUsingAlias(OccurrencePeer::PUBLISHEDDISTANCE, $publisheddistance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::PUBLISHEDDISTANCE, $publisheddistance, $comparison);
    }

    /**
     * Filter the query on the Info column
     *
     * Example usage:
     * <code>
     * $query->filterByInfo('fooValue');   // WHERE Info = 'fooValue'
     * $query->filterByInfo('%fooValue%'); // WHERE Info LIKE '%fooValue%'
     * </code>
     *
     * @param     string $info The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByInfo($info = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($info)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $info)) {
                $info = str_replace('*', '%', $info);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::INFO, $info, $comparison);
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
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(OccurrencePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(OccurrencePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OccurrencePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Occurrence $occurrence Object to remove from the list of results
     *
     * @return OccurrenceQuery The current query, for fluid interface
     */
    public function prune($occurrence = null)
    {
        if ($occurrence) {
            $this->addUsingAlias(OccurrencePeer::CATNUM2, $occurrence->getCatnum2(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
