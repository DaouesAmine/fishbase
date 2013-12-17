<?php


/**
 * Base class that represents a query for the 'eggs' table.
 *
 *
 *
 * @method EggsQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method EggsQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method EggsQuery orderByEggsrefno($order = Criteria::ASC) Order by the EggsRefNo column
 * @method EggsQuery orderByWatereggref($order = Criteria::ASC) Order by the WaterEggRef column
 * @method EggsQuery orderByWatertempmax($order = Criteria::ASC) Order by the Watertempmax column
 * @method EggsQuery orderByWaterdepthmax($order = Criteria::ASC) Order by the Waterdepthmax column
 * @method EggsQuery orderBySalinitymax($order = Criteria::ASC) Order by the Salinitymax column
 * @method EggsQuery orderByPh($order = Criteria::ASC) Order by the pH column
 * @method EggsQuery orderByOxygenmax($order = Criteria::ASC) Order by the Oxygenmax column
 * @method EggsQuery orderByWatertempmin($order = Criteria::ASC) Order by the Watertempmin column
 * @method EggsQuery orderByWaterdepthmin($order = Criteria::ASC) Order by the Waterdepthmin column
 * @method EggsQuery orderBySalinitymin($order = Criteria::ASC) Order by the Salinitymin column
 * @method EggsQuery orderByPhmin($order = Criteria::ASC) Order by the pHmin column
 * @method EggsQuery orderByOxygenmin($order = Criteria::ASC) Order by the Oxygenmin column
 * @method EggsQuery orderByWatertempmod($order = Criteria::ASC) Order by the Watertempmod column
 * @method EggsQuery orderByWaterdepthmid($order = Criteria::ASC) Order by the Waterdepthmid column
 * @method EggsQuery orderBySalinitymod($order = Criteria::ASC) Order by the Salinitymod column
 * @method EggsQuery orderByPhmod($order = Criteria::ASC) Order by the pHmod column
 * @method EggsQuery orderByOxygenmod($order = Criteria::ASC) Order by the Oxygenmod column
 * @method EggsQuery orderByWategg3($order = Criteria::ASC) Order by the WatEgg3 column
 * @method EggsQuery orderByPlaceofdev($order = Criteria::ASC) Order by the Placeofdev column
 * @method EggsQuery orderByShapeofegg($order = Criteria::ASC) Order by the Shapeofegg column
 * @method EggsQuery orderByPic($order = Criteria::ASC) Order by the Pic column
 * @method EggsQuery orderByAttributes($order = Criteria::ASC) Order by the Attributes column
 * @method EggsQuery orderByAttributesii($order = Criteria::ASC) Order by the AttributesII column
 * @method EggsQuery orderByColourofegg($order = Criteria::ASC) Order by the Colourofegg column
 * @method EggsQuery orderByColouroilglobule($order = Criteria::ASC) Order by the Colouroilglobule column
 * @method EggsQuery orderByOilglobules($order = Criteria::ASC) Order by the Oilglobules column
 * @method EggsQuery orderByOilglobmaxref($order = Criteria::ASC) Order by the OilglobmaxRef column
 * @method EggsQuery orderByOilglobulesmin($order = Criteria::ASC) Order by the Oilglobulesmin column
 * @method EggsQuery orderByOilglobminref($order = Criteria::ASC) Order by the OilglobminRef column
 * @method EggsQuery orderByOilglobulesmod($order = Criteria::ASC) Order by the Oilglobulesmod column
 * @method EggsQuery orderByOilglobmodref($order = Criteria::ASC) Order by the OilglobmodRef column
 * @method EggsQuery orderByOildiametermax2($order = Criteria::ASC) Order by the Oildiametermax2 column
 * @method EggsQuery orderByOildiamaxref($order = Criteria::ASC) Order by the OildiamaxRef column
 * @method EggsQuery orderByOildiametermin2($order = Criteria::ASC) Order by the Oildiametermin2 column
 * @method EggsQuery orderByOildiaminref($order = Criteria::ASC) Order by the OildiaminRef column
 * @method EggsQuery orderByOildiametermod($order = Criteria::ASC) Order by the Oildiametermod column
 * @method EggsQuery orderByOildiamodref($order = Criteria::ASC) Order by the OildiamodRef column
 * @method EggsQuery orderByEggdiammax($order = Criteria::ASC) Order by the Eggdiammax column
 * @method EggsQuery orderByEggdiammaxref($order = Criteria::ASC) Order by the EggdiammaxRef column
 * @method EggsQuery orderByEggdiammin($order = Criteria::ASC) Order by the Eggdiammin column
 * @method EggsQuery orderByEggdiamminref($order = Criteria::ASC) Order by the EggdiamminRef column
 * @method EggsQuery orderByEggdiammod($order = Criteria::ASC) Order by the Eggdiammod column
 * @method EggsQuery orderByEggdiammodref($order = Criteria::ASC) Order by the EggdiammodRef column
 * @method EggsQuery orderByReferencediammax($order = Criteria::ASC) Order by the Referencediammax column
 * @method EggsQuery orderByReferencediammin($order = Criteria::ASC) Order by the Referencediammin column
 * @method EggsQuery orderByReferencediammod($order = Criteria::ASC) Order by the Referencediammod column
 * @method EggsQuery orderByMeasurementsref($order = Criteria::ASC) Order by the MeasurementsRef column
 * @method EggsQuery orderByPerivitwidthmax($order = Criteria::ASC) Order by the Perivitwidthmax column
 * @method EggsQuery orderByPerivitwidthmin($order = Criteria::ASC) Order by the Perivitwidthmin column
 * @method EggsQuery orderByPerivitwidthmod($order = Criteria::ASC) Order by the Perivitwidthmod column
 * @method EggsQuery orderByChorionthickmax($order = Criteria::ASC) Order by the Chorionthickmax column
 * @method EggsQuery orderByChorionthickmin($order = Criteria::ASC) Order by the Chorionthickmin column
 * @method EggsQuery orderByChorionthickmod($order = Criteria::ASC) Order by the Chorionthickmod column
 * @method EggsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method EggsQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method EggsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method EggsQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method EggsQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method EggsQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method EggsQuery orderByAddchars($order = Criteria::ASC) Order by the AddChars column
 * @method EggsQuery orderByWateggs($order = Criteria::ASC) Order by the WatEggs column
 * @method EggsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method EggsQuery groupByStockcode() Group by the Stockcode column
 * @method EggsQuery groupBySpeccode() Group by the Speccode column
 * @method EggsQuery groupByEggsrefno() Group by the EggsRefNo column
 * @method EggsQuery groupByWatereggref() Group by the WaterEggRef column
 * @method EggsQuery groupByWatertempmax() Group by the Watertempmax column
 * @method EggsQuery groupByWaterdepthmax() Group by the Waterdepthmax column
 * @method EggsQuery groupBySalinitymax() Group by the Salinitymax column
 * @method EggsQuery groupByPh() Group by the pH column
 * @method EggsQuery groupByOxygenmax() Group by the Oxygenmax column
 * @method EggsQuery groupByWatertempmin() Group by the Watertempmin column
 * @method EggsQuery groupByWaterdepthmin() Group by the Waterdepthmin column
 * @method EggsQuery groupBySalinitymin() Group by the Salinitymin column
 * @method EggsQuery groupByPhmin() Group by the pHmin column
 * @method EggsQuery groupByOxygenmin() Group by the Oxygenmin column
 * @method EggsQuery groupByWatertempmod() Group by the Watertempmod column
 * @method EggsQuery groupByWaterdepthmid() Group by the Waterdepthmid column
 * @method EggsQuery groupBySalinitymod() Group by the Salinitymod column
 * @method EggsQuery groupByPhmod() Group by the pHmod column
 * @method EggsQuery groupByOxygenmod() Group by the Oxygenmod column
 * @method EggsQuery groupByWategg3() Group by the WatEgg3 column
 * @method EggsQuery groupByPlaceofdev() Group by the Placeofdev column
 * @method EggsQuery groupByShapeofegg() Group by the Shapeofegg column
 * @method EggsQuery groupByPic() Group by the Pic column
 * @method EggsQuery groupByAttributes() Group by the Attributes column
 * @method EggsQuery groupByAttributesii() Group by the AttributesII column
 * @method EggsQuery groupByColourofegg() Group by the Colourofegg column
 * @method EggsQuery groupByColouroilglobule() Group by the Colouroilglobule column
 * @method EggsQuery groupByOilglobules() Group by the Oilglobules column
 * @method EggsQuery groupByOilglobmaxref() Group by the OilglobmaxRef column
 * @method EggsQuery groupByOilglobulesmin() Group by the Oilglobulesmin column
 * @method EggsQuery groupByOilglobminref() Group by the OilglobminRef column
 * @method EggsQuery groupByOilglobulesmod() Group by the Oilglobulesmod column
 * @method EggsQuery groupByOilglobmodref() Group by the OilglobmodRef column
 * @method EggsQuery groupByOildiametermax2() Group by the Oildiametermax2 column
 * @method EggsQuery groupByOildiamaxref() Group by the OildiamaxRef column
 * @method EggsQuery groupByOildiametermin2() Group by the Oildiametermin2 column
 * @method EggsQuery groupByOildiaminref() Group by the OildiaminRef column
 * @method EggsQuery groupByOildiametermod() Group by the Oildiametermod column
 * @method EggsQuery groupByOildiamodref() Group by the OildiamodRef column
 * @method EggsQuery groupByEggdiammax() Group by the Eggdiammax column
 * @method EggsQuery groupByEggdiammaxref() Group by the EggdiammaxRef column
 * @method EggsQuery groupByEggdiammin() Group by the Eggdiammin column
 * @method EggsQuery groupByEggdiamminref() Group by the EggdiamminRef column
 * @method EggsQuery groupByEggdiammod() Group by the Eggdiammod column
 * @method EggsQuery groupByEggdiammodref() Group by the EggdiammodRef column
 * @method EggsQuery groupByReferencediammax() Group by the Referencediammax column
 * @method EggsQuery groupByReferencediammin() Group by the Referencediammin column
 * @method EggsQuery groupByReferencediammod() Group by the Referencediammod column
 * @method EggsQuery groupByMeasurementsref() Group by the MeasurementsRef column
 * @method EggsQuery groupByPerivitwidthmax() Group by the Perivitwidthmax column
 * @method EggsQuery groupByPerivitwidthmin() Group by the Perivitwidthmin column
 * @method EggsQuery groupByPerivitwidthmod() Group by the Perivitwidthmod column
 * @method EggsQuery groupByChorionthickmax() Group by the Chorionthickmax column
 * @method EggsQuery groupByChorionthickmin() Group by the Chorionthickmin column
 * @method EggsQuery groupByChorionthickmod() Group by the Chorionthickmod column
 * @method EggsQuery groupByEntered() Group by the Entered column
 * @method EggsQuery groupByDateentered() Group by the DateEntered column
 * @method EggsQuery groupByModified() Group by the Modified column
 * @method EggsQuery groupByDatemodified() Group by the DateModified column
 * @method EggsQuery groupByExpert() Group by the Expert column
 * @method EggsQuery groupByDatechecked() Group by the DateChecked column
 * @method EggsQuery groupByAddchars() Group by the AddChars column
 * @method EggsQuery groupByWateggs() Group by the WatEggs column
 * @method EggsQuery groupByTs() Group by the TS column
 *
 * @method EggsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EggsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EggsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Eggs findOne(PropelPDO $con = null) Return the first Eggs matching the query
 * @method Eggs findOneOrCreate(PropelPDO $con = null) Return the first Eggs matching the query, or a new Eggs object populated from the query conditions when no match is found
 *
 * @method Eggs findOneBySpeccode(int $Speccode) Return the first Eggs filtered by the Speccode column
 * @method Eggs findOneByEggsrefno(int $EggsRefNo) Return the first Eggs filtered by the EggsRefNo column
 * @method Eggs findOneByWatereggref(int $WaterEggRef) Return the first Eggs filtered by the WaterEggRef column
 * @method Eggs findOneByWatertempmax(double $Watertempmax) Return the first Eggs filtered by the Watertempmax column
 * @method Eggs findOneByWaterdepthmax(int $Waterdepthmax) Return the first Eggs filtered by the Waterdepthmax column
 * @method Eggs findOneBySalinitymax(double $Salinitymax) Return the first Eggs filtered by the Salinitymax column
 * @method Eggs findOneByPh(double $pH) Return the first Eggs filtered by the pH column
 * @method Eggs findOneByOxygenmax(double $Oxygenmax) Return the first Eggs filtered by the Oxygenmax column
 * @method Eggs findOneByWatertempmin(double $Watertempmin) Return the first Eggs filtered by the Watertempmin column
 * @method Eggs findOneByWaterdepthmin(int $Waterdepthmin) Return the first Eggs filtered by the Waterdepthmin column
 * @method Eggs findOneBySalinitymin(double $Salinitymin) Return the first Eggs filtered by the Salinitymin column
 * @method Eggs findOneByPhmin(double $pHmin) Return the first Eggs filtered by the pHmin column
 * @method Eggs findOneByOxygenmin(double $Oxygenmin) Return the first Eggs filtered by the Oxygenmin column
 * @method Eggs findOneByWatertempmod(double $Watertempmod) Return the first Eggs filtered by the Watertempmod column
 * @method Eggs findOneByWaterdepthmid(int $Waterdepthmid) Return the first Eggs filtered by the Waterdepthmid column
 * @method Eggs findOneBySalinitymod(double $Salinitymod) Return the first Eggs filtered by the Salinitymod column
 * @method Eggs findOneByPhmod(double $pHmod) Return the first Eggs filtered by the pHmod column
 * @method Eggs findOneByOxygenmod(double $Oxygenmod) Return the first Eggs filtered by the Oxygenmod column
 * @method Eggs findOneByWategg3(string $WatEgg3) Return the first Eggs filtered by the WatEgg3 column
 * @method Eggs findOneByPlaceofdev(string $Placeofdev) Return the first Eggs filtered by the Placeofdev column
 * @method Eggs findOneByShapeofegg(string $Shapeofegg) Return the first Eggs filtered by the Shapeofegg column
 * @method Eggs findOneByPic(string $Pic) Return the first Eggs filtered by the Pic column
 * @method Eggs findOneByAttributes(string $Attributes) Return the first Eggs filtered by the Attributes column
 * @method Eggs findOneByAttributesii(string $AttributesII) Return the first Eggs filtered by the AttributesII column
 * @method Eggs findOneByColourofegg(string $Colourofegg) Return the first Eggs filtered by the Colourofegg column
 * @method Eggs findOneByColouroilglobule(string $Colouroilglobule) Return the first Eggs filtered by the Colouroilglobule column
 * @method Eggs findOneByOilglobules(int $Oilglobules) Return the first Eggs filtered by the Oilglobules column
 * @method Eggs findOneByOilglobmaxref(int $OilglobmaxRef) Return the first Eggs filtered by the OilglobmaxRef column
 * @method Eggs findOneByOilglobulesmin(int $Oilglobulesmin) Return the first Eggs filtered by the Oilglobulesmin column
 * @method Eggs findOneByOilglobminref(int $OilglobminRef) Return the first Eggs filtered by the OilglobminRef column
 * @method Eggs findOneByOilglobulesmod(int $Oilglobulesmod) Return the first Eggs filtered by the Oilglobulesmod column
 * @method Eggs findOneByOilglobmodref(int $OilglobmodRef) Return the first Eggs filtered by the OilglobmodRef column
 * @method Eggs findOneByOildiametermax2(double $Oildiametermax2) Return the first Eggs filtered by the Oildiametermax2 column
 * @method Eggs findOneByOildiamaxref(int $OildiamaxRef) Return the first Eggs filtered by the OildiamaxRef column
 * @method Eggs findOneByOildiametermin2(double $Oildiametermin2) Return the first Eggs filtered by the Oildiametermin2 column
 * @method Eggs findOneByOildiaminref(int $OildiaminRef) Return the first Eggs filtered by the OildiaminRef column
 * @method Eggs findOneByOildiametermod(double $Oildiametermod) Return the first Eggs filtered by the Oildiametermod column
 * @method Eggs findOneByOildiamodref(int $OildiamodRef) Return the first Eggs filtered by the OildiamodRef column
 * @method Eggs findOneByEggdiammax(double $Eggdiammax) Return the first Eggs filtered by the Eggdiammax column
 * @method Eggs findOneByEggdiammaxref(int $EggdiammaxRef) Return the first Eggs filtered by the EggdiammaxRef column
 * @method Eggs findOneByEggdiammin(double $Eggdiammin) Return the first Eggs filtered by the Eggdiammin column
 * @method Eggs findOneByEggdiamminref(int $EggdiamminRef) Return the first Eggs filtered by the EggdiamminRef column
 * @method Eggs findOneByEggdiammod(double $Eggdiammod) Return the first Eggs filtered by the Eggdiammod column
 * @method Eggs findOneByEggdiammodref(int $EggdiammodRef) Return the first Eggs filtered by the EggdiammodRef column
 * @method Eggs findOneByReferencediammax(double $Referencediammax) Return the first Eggs filtered by the Referencediammax column
 * @method Eggs findOneByReferencediammin(double $Referencediammin) Return the first Eggs filtered by the Referencediammin column
 * @method Eggs findOneByReferencediammod(double $Referencediammod) Return the first Eggs filtered by the Referencediammod column
 * @method Eggs findOneByMeasurementsref(int $MeasurementsRef) Return the first Eggs filtered by the MeasurementsRef column
 * @method Eggs findOneByPerivitwidthmax(double $Perivitwidthmax) Return the first Eggs filtered by the Perivitwidthmax column
 * @method Eggs findOneByPerivitwidthmin(double $Perivitwidthmin) Return the first Eggs filtered by the Perivitwidthmin column
 * @method Eggs findOneByPerivitwidthmod(double $Perivitwidthmod) Return the first Eggs filtered by the Perivitwidthmod column
 * @method Eggs findOneByChorionthickmax(double $Chorionthickmax) Return the first Eggs filtered by the Chorionthickmax column
 * @method Eggs findOneByChorionthickmin(double $Chorionthickmin) Return the first Eggs filtered by the Chorionthickmin column
 * @method Eggs findOneByChorionthickmod(double $Chorionthickmod) Return the first Eggs filtered by the Chorionthickmod column
 * @method Eggs findOneByEntered(int $Entered) Return the first Eggs filtered by the Entered column
 * @method Eggs findOneByDateentered(string $DateEntered) Return the first Eggs filtered by the DateEntered column
 * @method Eggs findOneByModified(int $Modified) Return the first Eggs filtered by the Modified column
 * @method Eggs findOneByDatemodified(string $DateModified) Return the first Eggs filtered by the DateModified column
 * @method Eggs findOneByExpert(int $Expert) Return the first Eggs filtered by the Expert column
 * @method Eggs findOneByDatechecked(string $DateChecked) Return the first Eggs filtered by the DateChecked column
 * @method Eggs findOneByAddchars(string $AddChars) Return the first Eggs filtered by the AddChars column
 * @method Eggs findOneByWateggs(string $WatEggs) Return the first Eggs filtered by the WatEggs column
 * @method Eggs findOneByTs(string $TS) Return the first Eggs filtered by the TS column
 *
 * @method array findByStockcode(int $Stockcode) Return Eggs objects filtered by the Stockcode column
 * @method array findBySpeccode(int $Speccode) Return Eggs objects filtered by the Speccode column
 * @method array findByEggsrefno(int $EggsRefNo) Return Eggs objects filtered by the EggsRefNo column
 * @method array findByWatereggref(int $WaterEggRef) Return Eggs objects filtered by the WaterEggRef column
 * @method array findByWatertempmax(double $Watertempmax) Return Eggs objects filtered by the Watertempmax column
 * @method array findByWaterdepthmax(int $Waterdepthmax) Return Eggs objects filtered by the Waterdepthmax column
 * @method array findBySalinitymax(double $Salinitymax) Return Eggs objects filtered by the Salinitymax column
 * @method array findByPh(double $pH) Return Eggs objects filtered by the pH column
 * @method array findByOxygenmax(double $Oxygenmax) Return Eggs objects filtered by the Oxygenmax column
 * @method array findByWatertempmin(double $Watertempmin) Return Eggs objects filtered by the Watertempmin column
 * @method array findByWaterdepthmin(int $Waterdepthmin) Return Eggs objects filtered by the Waterdepthmin column
 * @method array findBySalinitymin(double $Salinitymin) Return Eggs objects filtered by the Salinitymin column
 * @method array findByPhmin(double $pHmin) Return Eggs objects filtered by the pHmin column
 * @method array findByOxygenmin(double $Oxygenmin) Return Eggs objects filtered by the Oxygenmin column
 * @method array findByWatertempmod(double $Watertempmod) Return Eggs objects filtered by the Watertempmod column
 * @method array findByWaterdepthmid(int $Waterdepthmid) Return Eggs objects filtered by the Waterdepthmid column
 * @method array findBySalinitymod(double $Salinitymod) Return Eggs objects filtered by the Salinitymod column
 * @method array findByPhmod(double $pHmod) Return Eggs objects filtered by the pHmod column
 * @method array findByOxygenmod(double $Oxygenmod) Return Eggs objects filtered by the Oxygenmod column
 * @method array findByWategg3(string $WatEgg3) Return Eggs objects filtered by the WatEgg3 column
 * @method array findByPlaceofdev(string $Placeofdev) Return Eggs objects filtered by the Placeofdev column
 * @method array findByShapeofegg(string $Shapeofegg) Return Eggs objects filtered by the Shapeofegg column
 * @method array findByPic(string $Pic) Return Eggs objects filtered by the Pic column
 * @method array findByAttributes(string $Attributes) Return Eggs objects filtered by the Attributes column
 * @method array findByAttributesii(string $AttributesII) Return Eggs objects filtered by the AttributesII column
 * @method array findByColourofegg(string $Colourofegg) Return Eggs objects filtered by the Colourofegg column
 * @method array findByColouroilglobule(string $Colouroilglobule) Return Eggs objects filtered by the Colouroilglobule column
 * @method array findByOilglobules(int $Oilglobules) Return Eggs objects filtered by the Oilglobules column
 * @method array findByOilglobmaxref(int $OilglobmaxRef) Return Eggs objects filtered by the OilglobmaxRef column
 * @method array findByOilglobulesmin(int $Oilglobulesmin) Return Eggs objects filtered by the Oilglobulesmin column
 * @method array findByOilglobminref(int $OilglobminRef) Return Eggs objects filtered by the OilglobminRef column
 * @method array findByOilglobulesmod(int $Oilglobulesmod) Return Eggs objects filtered by the Oilglobulesmod column
 * @method array findByOilglobmodref(int $OilglobmodRef) Return Eggs objects filtered by the OilglobmodRef column
 * @method array findByOildiametermax2(double $Oildiametermax2) Return Eggs objects filtered by the Oildiametermax2 column
 * @method array findByOildiamaxref(int $OildiamaxRef) Return Eggs objects filtered by the OildiamaxRef column
 * @method array findByOildiametermin2(double $Oildiametermin2) Return Eggs objects filtered by the Oildiametermin2 column
 * @method array findByOildiaminref(int $OildiaminRef) Return Eggs objects filtered by the OildiaminRef column
 * @method array findByOildiametermod(double $Oildiametermod) Return Eggs objects filtered by the Oildiametermod column
 * @method array findByOildiamodref(int $OildiamodRef) Return Eggs objects filtered by the OildiamodRef column
 * @method array findByEggdiammax(double $Eggdiammax) Return Eggs objects filtered by the Eggdiammax column
 * @method array findByEggdiammaxref(int $EggdiammaxRef) Return Eggs objects filtered by the EggdiammaxRef column
 * @method array findByEggdiammin(double $Eggdiammin) Return Eggs objects filtered by the Eggdiammin column
 * @method array findByEggdiamminref(int $EggdiamminRef) Return Eggs objects filtered by the EggdiamminRef column
 * @method array findByEggdiammod(double $Eggdiammod) Return Eggs objects filtered by the Eggdiammod column
 * @method array findByEggdiammodref(int $EggdiammodRef) Return Eggs objects filtered by the EggdiammodRef column
 * @method array findByReferencediammax(double $Referencediammax) Return Eggs objects filtered by the Referencediammax column
 * @method array findByReferencediammin(double $Referencediammin) Return Eggs objects filtered by the Referencediammin column
 * @method array findByReferencediammod(double $Referencediammod) Return Eggs objects filtered by the Referencediammod column
 * @method array findByMeasurementsref(int $MeasurementsRef) Return Eggs objects filtered by the MeasurementsRef column
 * @method array findByPerivitwidthmax(double $Perivitwidthmax) Return Eggs objects filtered by the Perivitwidthmax column
 * @method array findByPerivitwidthmin(double $Perivitwidthmin) Return Eggs objects filtered by the Perivitwidthmin column
 * @method array findByPerivitwidthmod(double $Perivitwidthmod) Return Eggs objects filtered by the Perivitwidthmod column
 * @method array findByChorionthickmax(double $Chorionthickmax) Return Eggs objects filtered by the Chorionthickmax column
 * @method array findByChorionthickmin(double $Chorionthickmin) Return Eggs objects filtered by the Chorionthickmin column
 * @method array findByChorionthickmod(double $Chorionthickmod) Return Eggs objects filtered by the Chorionthickmod column
 * @method array findByEntered(int $Entered) Return Eggs objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Eggs objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Eggs objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Eggs objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Eggs objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Eggs objects filtered by the DateChecked column
 * @method array findByAddchars(string $AddChars) Return Eggs objects filtered by the AddChars column
 * @method array findByWateggs(string $WatEggs) Return Eggs objects filtered by the WatEggs column
 * @method array findByTs(string $TS) Return Eggs objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEggsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEggsQuery object.
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
            $modelName = 'Eggs';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EggsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EggsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EggsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EggsQuery) {
            return $criteria;
        }
        $query = new EggsQuery(null, null, $modelAlias);

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
     * @return   Eggs|Eggs[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EggsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Eggs A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByStockcode($key, $con = null)
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
     * @return                 Eggs A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Stockcode`, `Speccode`, `EggsRefNo`, `WaterEggRef`, `Watertempmax`, `Waterdepthmax`, `Salinitymax`, `pH`, `Oxygenmax`, `Watertempmin`, `Waterdepthmin`, `Salinitymin`, `pHmin`, `Oxygenmin`, `Watertempmod`, `Waterdepthmid`, `Salinitymod`, `pHmod`, `Oxygenmod`, `WatEgg3`, `Placeofdev`, `Shapeofegg`, `Pic`, `Attributes`, `AttributesII`, `Colourofegg`, `Colouroilglobule`, `Oilglobules`, `OilglobmaxRef`, `Oilglobulesmin`, `OilglobminRef`, `Oilglobulesmod`, `OilglobmodRef`, `Oildiametermax2`, `OildiamaxRef`, `Oildiametermin2`, `OildiaminRef`, `Oildiametermod`, `OildiamodRef`, `Eggdiammax`, `EggdiammaxRef`, `Eggdiammin`, `EggdiamminRef`, `Eggdiammod`, `EggdiammodRef`, `Referencediammax`, `Referencediammin`, `Referencediammod`, `MeasurementsRef`, `Perivitwidthmax`, `Perivitwidthmin`, `Perivitwidthmod`, `Chorionthickmax`, `Chorionthickmin`, `Chorionthickmod`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `AddChars`, `WatEggs`, `TS` FROM `eggs` WHERE `Stockcode` = :p0';
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
            $obj = new Eggs();
            $obj->hydrate($row);
            EggsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Eggs|Eggs[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Eggs[]|mixed the list of results, formatted by the current formatter
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
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EggsPeer::STOCKCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EggsPeer::STOCKCODE, $keys, Criteria::IN);
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
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(EggsPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(EggsPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(EggsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(EggsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the EggsRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByEggsrefno(1234); // WHERE EggsRefNo = 1234
     * $query->filterByEggsrefno(array(12, 34)); // WHERE EggsRefNo IN (12, 34)
     * $query->filterByEggsrefno(array('min' => 12)); // WHERE EggsRefNo >= 12
     * $query->filterByEggsrefno(array('max' => 12)); // WHERE EggsRefNo <= 12
     * </code>
     *
     * @param     mixed $eggsrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByEggsrefno($eggsrefno = null, $comparison = null)
    {
        if (is_array($eggsrefno)) {
            $useMinMax = false;
            if (isset($eggsrefno['min'])) {
                $this->addUsingAlias(EggsPeer::EGGSREFNO, $eggsrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggsrefno['max'])) {
                $this->addUsingAlias(EggsPeer::EGGSREFNO, $eggsrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::EGGSREFNO, $eggsrefno, $comparison);
    }

    /**
     * Filter the query on the WaterEggRef column
     *
     * Example usage:
     * <code>
     * $query->filterByWatereggref(1234); // WHERE WaterEggRef = 1234
     * $query->filterByWatereggref(array(12, 34)); // WHERE WaterEggRef IN (12, 34)
     * $query->filterByWatereggref(array('min' => 12)); // WHERE WaterEggRef >= 12
     * $query->filterByWatereggref(array('max' => 12)); // WHERE WaterEggRef <= 12
     * </code>
     *
     * @param     mixed $watereggref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByWatereggref($watereggref = null, $comparison = null)
    {
        if (is_array($watereggref)) {
            $useMinMax = false;
            if (isset($watereggref['min'])) {
                $this->addUsingAlias(EggsPeer::WATEREGGREF, $watereggref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($watereggref['max'])) {
                $this->addUsingAlias(EggsPeer::WATEREGGREF, $watereggref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::WATEREGGREF, $watereggref, $comparison);
    }

    /**
     * Filter the query on the Watertempmax column
     *
     * Example usage:
     * <code>
     * $query->filterByWatertempmax(1234); // WHERE Watertempmax = 1234
     * $query->filterByWatertempmax(array(12, 34)); // WHERE Watertempmax IN (12, 34)
     * $query->filterByWatertempmax(array('min' => 12)); // WHERE Watertempmax >= 12
     * $query->filterByWatertempmax(array('max' => 12)); // WHERE Watertempmax <= 12
     * </code>
     *
     * @param     mixed $watertempmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByWatertempmax($watertempmax = null, $comparison = null)
    {
        if (is_array($watertempmax)) {
            $useMinMax = false;
            if (isset($watertempmax['min'])) {
                $this->addUsingAlias(EggsPeer::WATERTEMPMAX, $watertempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($watertempmax['max'])) {
                $this->addUsingAlias(EggsPeer::WATERTEMPMAX, $watertempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::WATERTEMPMAX, $watertempmax, $comparison);
    }

    /**
     * Filter the query on the Waterdepthmax column
     *
     * Example usage:
     * <code>
     * $query->filterByWaterdepthmax(1234); // WHERE Waterdepthmax = 1234
     * $query->filterByWaterdepthmax(array(12, 34)); // WHERE Waterdepthmax IN (12, 34)
     * $query->filterByWaterdepthmax(array('min' => 12)); // WHERE Waterdepthmax >= 12
     * $query->filterByWaterdepthmax(array('max' => 12)); // WHERE Waterdepthmax <= 12
     * </code>
     *
     * @param     mixed $waterdepthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByWaterdepthmax($waterdepthmax = null, $comparison = null)
    {
        if (is_array($waterdepthmax)) {
            $useMinMax = false;
            if (isset($waterdepthmax['min'])) {
                $this->addUsingAlias(EggsPeer::WATERDEPTHMAX, $waterdepthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waterdepthmax['max'])) {
                $this->addUsingAlias(EggsPeer::WATERDEPTHMAX, $waterdepthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::WATERDEPTHMAX, $waterdepthmax, $comparison);
    }

    /**
     * Filter the query on the Salinitymax column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinitymax(1234); // WHERE Salinitymax = 1234
     * $query->filterBySalinitymax(array(12, 34)); // WHERE Salinitymax IN (12, 34)
     * $query->filterBySalinitymax(array('min' => 12)); // WHERE Salinitymax >= 12
     * $query->filterBySalinitymax(array('max' => 12)); // WHERE Salinitymax <= 12
     * </code>
     *
     * @param     mixed $salinitymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterBySalinitymax($salinitymax = null, $comparison = null)
    {
        if (is_array($salinitymax)) {
            $useMinMax = false;
            if (isset($salinitymax['min'])) {
                $this->addUsingAlias(EggsPeer::SALINITYMAX, $salinitymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinitymax['max'])) {
                $this->addUsingAlias(EggsPeer::SALINITYMAX, $salinitymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::SALINITYMAX, $salinitymax, $comparison);
    }

    /**
     * Filter the query on the pH column
     *
     * Example usage:
     * <code>
     * $query->filterByPh(1234); // WHERE pH = 1234
     * $query->filterByPh(array(12, 34)); // WHERE pH IN (12, 34)
     * $query->filterByPh(array('min' => 12)); // WHERE pH >= 12
     * $query->filterByPh(array('max' => 12)); // WHERE pH <= 12
     * </code>
     *
     * @param     mixed $ph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByPh($ph = null, $comparison = null)
    {
        if (is_array($ph)) {
            $useMinMax = false;
            if (isset($ph['min'])) {
                $this->addUsingAlias(EggsPeer::PH, $ph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ph['max'])) {
                $this->addUsingAlias(EggsPeer::PH, $ph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::PH, $ph, $comparison);
    }

    /**
     * Filter the query on the Oxygenmax column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygenmax(1234); // WHERE Oxygenmax = 1234
     * $query->filterByOxygenmax(array(12, 34)); // WHERE Oxygenmax IN (12, 34)
     * $query->filterByOxygenmax(array('min' => 12)); // WHERE Oxygenmax >= 12
     * $query->filterByOxygenmax(array('max' => 12)); // WHERE Oxygenmax <= 12
     * </code>
     *
     * @param     mixed $oxygenmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOxygenmax($oxygenmax = null, $comparison = null)
    {
        if (is_array($oxygenmax)) {
            $useMinMax = false;
            if (isset($oxygenmax['min'])) {
                $this->addUsingAlias(EggsPeer::OXYGENMAX, $oxygenmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmax['max'])) {
                $this->addUsingAlias(EggsPeer::OXYGENMAX, $oxygenmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OXYGENMAX, $oxygenmax, $comparison);
    }

    /**
     * Filter the query on the Watertempmin column
     *
     * Example usage:
     * <code>
     * $query->filterByWatertempmin(1234); // WHERE Watertempmin = 1234
     * $query->filterByWatertempmin(array(12, 34)); // WHERE Watertempmin IN (12, 34)
     * $query->filterByWatertempmin(array('min' => 12)); // WHERE Watertempmin >= 12
     * $query->filterByWatertempmin(array('max' => 12)); // WHERE Watertempmin <= 12
     * </code>
     *
     * @param     mixed $watertempmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByWatertempmin($watertempmin = null, $comparison = null)
    {
        if (is_array($watertempmin)) {
            $useMinMax = false;
            if (isset($watertempmin['min'])) {
                $this->addUsingAlias(EggsPeer::WATERTEMPMIN, $watertempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($watertempmin['max'])) {
                $this->addUsingAlias(EggsPeer::WATERTEMPMIN, $watertempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::WATERTEMPMIN, $watertempmin, $comparison);
    }

    /**
     * Filter the query on the Waterdepthmin column
     *
     * Example usage:
     * <code>
     * $query->filterByWaterdepthmin(1234); // WHERE Waterdepthmin = 1234
     * $query->filterByWaterdepthmin(array(12, 34)); // WHERE Waterdepthmin IN (12, 34)
     * $query->filterByWaterdepthmin(array('min' => 12)); // WHERE Waterdepthmin >= 12
     * $query->filterByWaterdepthmin(array('max' => 12)); // WHERE Waterdepthmin <= 12
     * </code>
     *
     * @param     mixed $waterdepthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByWaterdepthmin($waterdepthmin = null, $comparison = null)
    {
        if (is_array($waterdepthmin)) {
            $useMinMax = false;
            if (isset($waterdepthmin['min'])) {
                $this->addUsingAlias(EggsPeer::WATERDEPTHMIN, $waterdepthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waterdepthmin['max'])) {
                $this->addUsingAlias(EggsPeer::WATERDEPTHMIN, $waterdepthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::WATERDEPTHMIN, $waterdepthmin, $comparison);
    }

    /**
     * Filter the query on the Salinitymin column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinitymin(1234); // WHERE Salinitymin = 1234
     * $query->filterBySalinitymin(array(12, 34)); // WHERE Salinitymin IN (12, 34)
     * $query->filterBySalinitymin(array('min' => 12)); // WHERE Salinitymin >= 12
     * $query->filterBySalinitymin(array('max' => 12)); // WHERE Salinitymin <= 12
     * </code>
     *
     * @param     mixed $salinitymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterBySalinitymin($salinitymin = null, $comparison = null)
    {
        if (is_array($salinitymin)) {
            $useMinMax = false;
            if (isset($salinitymin['min'])) {
                $this->addUsingAlias(EggsPeer::SALINITYMIN, $salinitymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinitymin['max'])) {
                $this->addUsingAlias(EggsPeer::SALINITYMIN, $salinitymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::SALINITYMIN, $salinitymin, $comparison);
    }

    /**
     * Filter the query on the pHmin column
     *
     * Example usage:
     * <code>
     * $query->filterByPhmin(1234); // WHERE pHmin = 1234
     * $query->filterByPhmin(array(12, 34)); // WHERE pHmin IN (12, 34)
     * $query->filterByPhmin(array('min' => 12)); // WHERE pHmin >= 12
     * $query->filterByPhmin(array('max' => 12)); // WHERE pHmin <= 12
     * </code>
     *
     * @param     mixed $phmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByPhmin($phmin = null, $comparison = null)
    {
        if (is_array($phmin)) {
            $useMinMax = false;
            if (isset($phmin['min'])) {
                $this->addUsingAlias(EggsPeer::PHMIN, $phmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmin['max'])) {
                $this->addUsingAlias(EggsPeer::PHMIN, $phmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::PHMIN, $phmin, $comparison);
    }

    /**
     * Filter the query on the Oxygenmin column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygenmin(1234); // WHERE Oxygenmin = 1234
     * $query->filterByOxygenmin(array(12, 34)); // WHERE Oxygenmin IN (12, 34)
     * $query->filterByOxygenmin(array('min' => 12)); // WHERE Oxygenmin >= 12
     * $query->filterByOxygenmin(array('max' => 12)); // WHERE Oxygenmin <= 12
     * </code>
     *
     * @param     mixed $oxygenmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOxygenmin($oxygenmin = null, $comparison = null)
    {
        if (is_array($oxygenmin)) {
            $useMinMax = false;
            if (isset($oxygenmin['min'])) {
                $this->addUsingAlias(EggsPeer::OXYGENMIN, $oxygenmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmin['max'])) {
                $this->addUsingAlias(EggsPeer::OXYGENMIN, $oxygenmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OXYGENMIN, $oxygenmin, $comparison);
    }

    /**
     * Filter the query on the Watertempmod column
     *
     * Example usage:
     * <code>
     * $query->filterByWatertempmod(1234); // WHERE Watertempmod = 1234
     * $query->filterByWatertempmod(array(12, 34)); // WHERE Watertempmod IN (12, 34)
     * $query->filterByWatertempmod(array('min' => 12)); // WHERE Watertempmod >= 12
     * $query->filterByWatertempmod(array('max' => 12)); // WHERE Watertempmod <= 12
     * </code>
     *
     * @param     mixed $watertempmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByWatertempmod($watertempmod = null, $comparison = null)
    {
        if (is_array($watertempmod)) {
            $useMinMax = false;
            if (isset($watertempmod['min'])) {
                $this->addUsingAlias(EggsPeer::WATERTEMPMOD, $watertempmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($watertempmod['max'])) {
                $this->addUsingAlias(EggsPeer::WATERTEMPMOD, $watertempmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::WATERTEMPMOD, $watertempmod, $comparison);
    }

    /**
     * Filter the query on the Waterdepthmid column
     *
     * Example usage:
     * <code>
     * $query->filterByWaterdepthmid(1234); // WHERE Waterdepthmid = 1234
     * $query->filterByWaterdepthmid(array(12, 34)); // WHERE Waterdepthmid IN (12, 34)
     * $query->filterByWaterdepthmid(array('min' => 12)); // WHERE Waterdepthmid >= 12
     * $query->filterByWaterdepthmid(array('max' => 12)); // WHERE Waterdepthmid <= 12
     * </code>
     *
     * @param     mixed $waterdepthmid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByWaterdepthmid($waterdepthmid = null, $comparison = null)
    {
        if (is_array($waterdepthmid)) {
            $useMinMax = false;
            if (isset($waterdepthmid['min'])) {
                $this->addUsingAlias(EggsPeer::WATERDEPTHMID, $waterdepthmid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waterdepthmid['max'])) {
                $this->addUsingAlias(EggsPeer::WATERDEPTHMID, $waterdepthmid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::WATERDEPTHMID, $waterdepthmid, $comparison);
    }

    /**
     * Filter the query on the Salinitymod column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinitymod(1234); // WHERE Salinitymod = 1234
     * $query->filterBySalinitymod(array(12, 34)); // WHERE Salinitymod IN (12, 34)
     * $query->filterBySalinitymod(array('min' => 12)); // WHERE Salinitymod >= 12
     * $query->filterBySalinitymod(array('max' => 12)); // WHERE Salinitymod <= 12
     * </code>
     *
     * @param     mixed $salinitymod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterBySalinitymod($salinitymod = null, $comparison = null)
    {
        if (is_array($salinitymod)) {
            $useMinMax = false;
            if (isset($salinitymod['min'])) {
                $this->addUsingAlias(EggsPeer::SALINITYMOD, $salinitymod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinitymod['max'])) {
                $this->addUsingAlias(EggsPeer::SALINITYMOD, $salinitymod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::SALINITYMOD, $salinitymod, $comparison);
    }

    /**
     * Filter the query on the pHmod column
     *
     * Example usage:
     * <code>
     * $query->filterByPhmod(1234); // WHERE pHmod = 1234
     * $query->filterByPhmod(array(12, 34)); // WHERE pHmod IN (12, 34)
     * $query->filterByPhmod(array('min' => 12)); // WHERE pHmod >= 12
     * $query->filterByPhmod(array('max' => 12)); // WHERE pHmod <= 12
     * </code>
     *
     * @param     mixed $phmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByPhmod($phmod = null, $comparison = null)
    {
        if (is_array($phmod)) {
            $useMinMax = false;
            if (isset($phmod['min'])) {
                $this->addUsingAlias(EggsPeer::PHMOD, $phmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmod['max'])) {
                $this->addUsingAlias(EggsPeer::PHMOD, $phmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::PHMOD, $phmod, $comparison);
    }

    /**
     * Filter the query on the Oxygenmod column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygenmod(1234); // WHERE Oxygenmod = 1234
     * $query->filterByOxygenmod(array(12, 34)); // WHERE Oxygenmod IN (12, 34)
     * $query->filterByOxygenmod(array('min' => 12)); // WHERE Oxygenmod >= 12
     * $query->filterByOxygenmod(array('max' => 12)); // WHERE Oxygenmod <= 12
     * </code>
     *
     * @param     mixed $oxygenmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOxygenmod($oxygenmod = null, $comparison = null)
    {
        if (is_array($oxygenmod)) {
            $useMinMax = false;
            if (isset($oxygenmod['min'])) {
                $this->addUsingAlias(EggsPeer::OXYGENMOD, $oxygenmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmod['max'])) {
                $this->addUsingAlias(EggsPeer::OXYGENMOD, $oxygenmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OXYGENMOD, $oxygenmod, $comparison);
    }

    /**
     * Filter the query on the WatEgg3 column
     *
     * Example usage:
     * <code>
     * $query->filterByWategg3('fooValue');   // WHERE WatEgg3 = 'fooValue'
     * $query->filterByWategg3('%fooValue%'); // WHERE WatEgg3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wategg3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByWategg3($wategg3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wategg3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $wategg3)) {
                $wategg3 = str_replace('*', '%', $wategg3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggsPeer::WATEGG3, $wategg3, $comparison);
    }

    /**
     * Filter the query on the Placeofdev column
     *
     * Example usage:
     * <code>
     * $query->filterByPlaceofdev('fooValue');   // WHERE Placeofdev = 'fooValue'
     * $query->filterByPlaceofdev('%fooValue%'); // WHERE Placeofdev LIKE '%fooValue%'
     * </code>
     *
     * @param     string $placeofdev The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByPlaceofdev($placeofdev = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($placeofdev)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $placeofdev)) {
                $placeofdev = str_replace('*', '%', $placeofdev);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggsPeer::PLACEOFDEV, $placeofdev, $comparison);
    }

    /**
     * Filter the query on the Shapeofegg column
     *
     * Example usage:
     * <code>
     * $query->filterByShapeofegg('fooValue');   // WHERE Shapeofegg = 'fooValue'
     * $query->filterByShapeofegg('%fooValue%'); // WHERE Shapeofegg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shapeofegg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByShapeofegg($shapeofegg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shapeofegg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shapeofegg)) {
                $shapeofegg = str_replace('*', '%', $shapeofegg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggsPeer::SHAPEOFEGG, $shapeofegg, $comparison);
    }

    /**
     * Filter the query on the Pic column
     *
     * Example usage:
     * <code>
     * $query->filterByPic('fooValue');   // WHERE Pic = 'fooValue'
     * $query->filterByPic('%fooValue%'); // WHERE Pic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByPic($pic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic)) {
                $pic = str_replace('*', '%', $pic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggsPeer::PIC, $pic, $comparison);
    }

    /**
     * Filter the query on the Attributes column
     *
     * Example usage:
     * <code>
     * $query->filterByAttributes('fooValue');   // WHERE Attributes = 'fooValue'
     * $query->filterByAttributes('%fooValue%'); // WHERE Attributes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attributes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByAttributes($attributes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attributes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $attributes)) {
                $attributes = str_replace('*', '%', $attributes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggsPeer::ATTRIBUTES, $attributes, $comparison);
    }

    /**
     * Filter the query on the AttributesII column
     *
     * Example usage:
     * <code>
     * $query->filterByAttributesii('fooValue');   // WHERE AttributesII = 'fooValue'
     * $query->filterByAttributesii('%fooValue%'); // WHERE AttributesII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attributesii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByAttributesii($attributesii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attributesii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $attributesii)) {
                $attributesii = str_replace('*', '%', $attributesii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggsPeer::ATTRIBUTESII, $attributesii, $comparison);
    }

    /**
     * Filter the query on the Colourofegg column
     *
     * Example usage:
     * <code>
     * $query->filterByColourofegg('fooValue');   // WHERE Colourofegg = 'fooValue'
     * $query->filterByColourofegg('%fooValue%'); // WHERE Colourofegg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $colourofegg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByColourofegg($colourofegg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($colourofegg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $colourofegg)) {
                $colourofegg = str_replace('*', '%', $colourofegg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggsPeer::COLOUROFEGG, $colourofegg, $comparison);
    }

    /**
     * Filter the query on the Colouroilglobule column
     *
     * Example usage:
     * <code>
     * $query->filterByColouroilglobule('fooValue');   // WHERE Colouroilglobule = 'fooValue'
     * $query->filterByColouroilglobule('%fooValue%'); // WHERE Colouroilglobule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $colouroilglobule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByColouroilglobule($colouroilglobule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($colouroilglobule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $colouroilglobule)) {
                $colouroilglobule = str_replace('*', '%', $colouroilglobule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggsPeer::COLOUROILGLOBULE, $colouroilglobule, $comparison);
    }

    /**
     * Filter the query on the Oilglobules column
     *
     * Example usage:
     * <code>
     * $query->filterByOilglobules(1234); // WHERE Oilglobules = 1234
     * $query->filterByOilglobules(array(12, 34)); // WHERE Oilglobules IN (12, 34)
     * $query->filterByOilglobules(array('min' => 12)); // WHERE Oilglobules >= 12
     * $query->filterByOilglobules(array('max' => 12)); // WHERE Oilglobules <= 12
     * </code>
     *
     * @param     mixed $oilglobules The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOilglobules($oilglobules = null, $comparison = null)
    {
        if (is_array($oilglobules)) {
            $useMinMax = false;
            if (isset($oilglobules['min'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBULES, $oilglobules['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oilglobules['max'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBULES, $oilglobules['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILGLOBULES, $oilglobules, $comparison);
    }

    /**
     * Filter the query on the OilglobmaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOilglobmaxref(1234); // WHERE OilglobmaxRef = 1234
     * $query->filterByOilglobmaxref(array(12, 34)); // WHERE OilglobmaxRef IN (12, 34)
     * $query->filterByOilglobmaxref(array('min' => 12)); // WHERE OilglobmaxRef >= 12
     * $query->filterByOilglobmaxref(array('max' => 12)); // WHERE OilglobmaxRef <= 12
     * </code>
     *
     * @param     mixed $oilglobmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOilglobmaxref($oilglobmaxref = null, $comparison = null)
    {
        if (is_array($oilglobmaxref)) {
            $useMinMax = false;
            if (isset($oilglobmaxref['min'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBMAXREF, $oilglobmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oilglobmaxref['max'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBMAXREF, $oilglobmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILGLOBMAXREF, $oilglobmaxref, $comparison);
    }

    /**
     * Filter the query on the Oilglobulesmin column
     *
     * Example usage:
     * <code>
     * $query->filterByOilglobulesmin(1234); // WHERE Oilglobulesmin = 1234
     * $query->filterByOilglobulesmin(array(12, 34)); // WHERE Oilglobulesmin IN (12, 34)
     * $query->filterByOilglobulesmin(array('min' => 12)); // WHERE Oilglobulesmin >= 12
     * $query->filterByOilglobulesmin(array('max' => 12)); // WHERE Oilglobulesmin <= 12
     * </code>
     *
     * @param     mixed $oilglobulesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOilglobulesmin($oilglobulesmin = null, $comparison = null)
    {
        if (is_array($oilglobulesmin)) {
            $useMinMax = false;
            if (isset($oilglobulesmin['min'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBULESMIN, $oilglobulesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oilglobulesmin['max'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBULESMIN, $oilglobulesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILGLOBULESMIN, $oilglobulesmin, $comparison);
    }

    /**
     * Filter the query on the OilglobminRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOilglobminref(1234); // WHERE OilglobminRef = 1234
     * $query->filterByOilglobminref(array(12, 34)); // WHERE OilglobminRef IN (12, 34)
     * $query->filterByOilglobminref(array('min' => 12)); // WHERE OilglobminRef >= 12
     * $query->filterByOilglobminref(array('max' => 12)); // WHERE OilglobminRef <= 12
     * </code>
     *
     * @param     mixed $oilglobminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOilglobminref($oilglobminref = null, $comparison = null)
    {
        if (is_array($oilglobminref)) {
            $useMinMax = false;
            if (isset($oilglobminref['min'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBMINREF, $oilglobminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oilglobminref['max'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBMINREF, $oilglobminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILGLOBMINREF, $oilglobminref, $comparison);
    }

    /**
     * Filter the query on the Oilglobulesmod column
     *
     * Example usage:
     * <code>
     * $query->filterByOilglobulesmod(1234); // WHERE Oilglobulesmod = 1234
     * $query->filterByOilglobulesmod(array(12, 34)); // WHERE Oilglobulesmod IN (12, 34)
     * $query->filterByOilglobulesmod(array('min' => 12)); // WHERE Oilglobulesmod >= 12
     * $query->filterByOilglobulesmod(array('max' => 12)); // WHERE Oilglobulesmod <= 12
     * </code>
     *
     * @param     mixed $oilglobulesmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOilglobulesmod($oilglobulesmod = null, $comparison = null)
    {
        if (is_array($oilglobulesmod)) {
            $useMinMax = false;
            if (isset($oilglobulesmod['min'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBULESMOD, $oilglobulesmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oilglobulesmod['max'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBULESMOD, $oilglobulesmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILGLOBULESMOD, $oilglobulesmod, $comparison);
    }

    /**
     * Filter the query on the OilglobmodRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOilglobmodref(1234); // WHERE OilglobmodRef = 1234
     * $query->filterByOilglobmodref(array(12, 34)); // WHERE OilglobmodRef IN (12, 34)
     * $query->filterByOilglobmodref(array('min' => 12)); // WHERE OilglobmodRef >= 12
     * $query->filterByOilglobmodref(array('max' => 12)); // WHERE OilglobmodRef <= 12
     * </code>
     *
     * @param     mixed $oilglobmodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOilglobmodref($oilglobmodref = null, $comparison = null)
    {
        if (is_array($oilglobmodref)) {
            $useMinMax = false;
            if (isset($oilglobmodref['min'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBMODREF, $oilglobmodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oilglobmodref['max'])) {
                $this->addUsingAlias(EggsPeer::OILGLOBMODREF, $oilglobmodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILGLOBMODREF, $oilglobmodref, $comparison);
    }

    /**
     * Filter the query on the Oildiametermax2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOildiametermax2(1234); // WHERE Oildiametermax2 = 1234
     * $query->filterByOildiametermax2(array(12, 34)); // WHERE Oildiametermax2 IN (12, 34)
     * $query->filterByOildiametermax2(array('min' => 12)); // WHERE Oildiametermax2 >= 12
     * $query->filterByOildiametermax2(array('max' => 12)); // WHERE Oildiametermax2 <= 12
     * </code>
     *
     * @param     mixed $oildiametermax2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOildiametermax2($oildiametermax2 = null, $comparison = null)
    {
        if (is_array($oildiametermax2)) {
            $useMinMax = false;
            if (isset($oildiametermax2['min'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMETERMAX2, $oildiametermax2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oildiametermax2['max'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMETERMAX2, $oildiametermax2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILDIAMETERMAX2, $oildiametermax2, $comparison);
    }

    /**
     * Filter the query on the OildiamaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOildiamaxref(1234); // WHERE OildiamaxRef = 1234
     * $query->filterByOildiamaxref(array(12, 34)); // WHERE OildiamaxRef IN (12, 34)
     * $query->filterByOildiamaxref(array('min' => 12)); // WHERE OildiamaxRef >= 12
     * $query->filterByOildiamaxref(array('max' => 12)); // WHERE OildiamaxRef <= 12
     * </code>
     *
     * @param     mixed $oildiamaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOildiamaxref($oildiamaxref = null, $comparison = null)
    {
        if (is_array($oildiamaxref)) {
            $useMinMax = false;
            if (isset($oildiamaxref['min'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMAXREF, $oildiamaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oildiamaxref['max'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMAXREF, $oildiamaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILDIAMAXREF, $oildiamaxref, $comparison);
    }

    /**
     * Filter the query on the Oildiametermin2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOildiametermin2(1234); // WHERE Oildiametermin2 = 1234
     * $query->filterByOildiametermin2(array(12, 34)); // WHERE Oildiametermin2 IN (12, 34)
     * $query->filterByOildiametermin2(array('min' => 12)); // WHERE Oildiametermin2 >= 12
     * $query->filterByOildiametermin2(array('max' => 12)); // WHERE Oildiametermin2 <= 12
     * </code>
     *
     * @param     mixed $oildiametermin2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOildiametermin2($oildiametermin2 = null, $comparison = null)
    {
        if (is_array($oildiametermin2)) {
            $useMinMax = false;
            if (isset($oildiametermin2['min'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMETERMIN2, $oildiametermin2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oildiametermin2['max'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMETERMIN2, $oildiametermin2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILDIAMETERMIN2, $oildiametermin2, $comparison);
    }

    /**
     * Filter the query on the OildiaminRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOildiaminref(1234); // WHERE OildiaminRef = 1234
     * $query->filterByOildiaminref(array(12, 34)); // WHERE OildiaminRef IN (12, 34)
     * $query->filterByOildiaminref(array('min' => 12)); // WHERE OildiaminRef >= 12
     * $query->filterByOildiaminref(array('max' => 12)); // WHERE OildiaminRef <= 12
     * </code>
     *
     * @param     mixed $oildiaminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOildiaminref($oildiaminref = null, $comparison = null)
    {
        if (is_array($oildiaminref)) {
            $useMinMax = false;
            if (isset($oildiaminref['min'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMINREF, $oildiaminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oildiaminref['max'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMINREF, $oildiaminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILDIAMINREF, $oildiaminref, $comparison);
    }

    /**
     * Filter the query on the Oildiametermod column
     *
     * Example usage:
     * <code>
     * $query->filterByOildiametermod(1234); // WHERE Oildiametermod = 1234
     * $query->filterByOildiametermod(array(12, 34)); // WHERE Oildiametermod IN (12, 34)
     * $query->filterByOildiametermod(array('min' => 12)); // WHERE Oildiametermod >= 12
     * $query->filterByOildiametermod(array('max' => 12)); // WHERE Oildiametermod <= 12
     * </code>
     *
     * @param     mixed $oildiametermod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOildiametermod($oildiametermod = null, $comparison = null)
    {
        if (is_array($oildiametermod)) {
            $useMinMax = false;
            if (isset($oildiametermod['min'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMETERMOD, $oildiametermod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oildiametermod['max'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMETERMOD, $oildiametermod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILDIAMETERMOD, $oildiametermod, $comparison);
    }

    /**
     * Filter the query on the OildiamodRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOildiamodref(1234); // WHERE OildiamodRef = 1234
     * $query->filterByOildiamodref(array(12, 34)); // WHERE OildiamodRef IN (12, 34)
     * $query->filterByOildiamodref(array('min' => 12)); // WHERE OildiamodRef >= 12
     * $query->filterByOildiamodref(array('max' => 12)); // WHERE OildiamodRef <= 12
     * </code>
     *
     * @param     mixed $oildiamodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByOildiamodref($oildiamodref = null, $comparison = null)
    {
        if (is_array($oildiamodref)) {
            $useMinMax = false;
            if (isset($oildiamodref['min'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMODREF, $oildiamodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oildiamodref['max'])) {
                $this->addUsingAlias(EggsPeer::OILDIAMODREF, $oildiamodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::OILDIAMODREF, $oildiamodref, $comparison);
    }

    /**
     * Filter the query on the Eggdiammax column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdiammax(1234); // WHERE Eggdiammax = 1234
     * $query->filterByEggdiammax(array(12, 34)); // WHERE Eggdiammax IN (12, 34)
     * $query->filterByEggdiammax(array('min' => 12)); // WHERE Eggdiammax >= 12
     * $query->filterByEggdiammax(array('max' => 12)); // WHERE Eggdiammax <= 12
     * </code>
     *
     * @param     mixed $eggdiammax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByEggdiammax($eggdiammax = null, $comparison = null)
    {
        if (is_array($eggdiammax)) {
            $useMinMax = false;
            if (isset($eggdiammax['min'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMAX, $eggdiammax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdiammax['max'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMAX, $eggdiammax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::EGGDIAMMAX, $eggdiammax, $comparison);
    }

    /**
     * Filter the query on the EggdiammaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdiammaxref(1234); // WHERE EggdiammaxRef = 1234
     * $query->filterByEggdiammaxref(array(12, 34)); // WHERE EggdiammaxRef IN (12, 34)
     * $query->filterByEggdiammaxref(array('min' => 12)); // WHERE EggdiammaxRef >= 12
     * $query->filterByEggdiammaxref(array('max' => 12)); // WHERE EggdiammaxRef <= 12
     * </code>
     *
     * @param     mixed $eggdiammaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByEggdiammaxref($eggdiammaxref = null, $comparison = null)
    {
        if (is_array($eggdiammaxref)) {
            $useMinMax = false;
            if (isset($eggdiammaxref['min'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMAXREF, $eggdiammaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdiammaxref['max'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMAXREF, $eggdiammaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::EGGDIAMMAXREF, $eggdiammaxref, $comparison);
    }

    /**
     * Filter the query on the Eggdiammin column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdiammin(1234); // WHERE Eggdiammin = 1234
     * $query->filterByEggdiammin(array(12, 34)); // WHERE Eggdiammin IN (12, 34)
     * $query->filterByEggdiammin(array('min' => 12)); // WHERE Eggdiammin >= 12
     * $query->filterByEggdiammin(array('max' => 12)); // WHERE Eggdiammin <= 12
     * </code>
     *
     * @param     mixed $eggdiammin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByEggdiammin($eggdiammin = null, $comparison = null)
    {
        if (is_array($eggdiammin)) {
            $useMinMax = false;
            if (isset($eggdiammin['min'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMIN, $eggdiammin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdiammin['max'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMIN, $eggdiammin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::EGGDIAMMIN, $eggdiammin, $comparison);
    }

    /**
     * Filter the query on the EggdiamminRef column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdiamminref(1234); // WHERE EggdiamminRef = 1234
     * $query->filterByEggdiamminref(array(12, 34)); // WHERE EggdiamminRef IN (12, 34)
     * $query->filterByEggdiamminref(array('min' => 12)); // WHERE EggdiamminRef >= 12
     * $query->filterByEggdiamminref(array('max' => 12)); // WHERE EggdiamminRef <= 12
     * </code>
     *
     * @param     mixed $eggdiamminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByEggdiamminref($eggdiamminref = null, $comparison = null)
    {
        if (is_array($eggdiamminref)) {
            $useMinMax = false;
            if (isset($eggdiamminref['min'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMINREF, $eggdiamminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdiamminref['max'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMINREF, $eggdiamminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::EGGDIAMMINREF, $eggdiamminref, $comparison);
    }

    /**
     * Filter the query on the Eggdiammod column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdiammod(1234); // WHERE Eggdiammod = 1234
     * $query->filterByEggdiammod(array(12, 34)); // WHERE Eggdiammod IN (12, 34)
     * $query->filterByEggdiammod(array('min' => 12)); // WHERE Eggdiammod >= 12
     * $query->filterByEggdiammod(array('max' => 12)); // WHERE Eggdiammod <= 12
     * </code>
     *
     * @param     mixed $eggdiammod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByEggdiammod($eggdiammod = null, $comparison = null)
    {
        if (is_array($eggdiammod)) {
            $useMinMax = false;
            if (isset($eggdiammod['min'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMOD, $eggdiammod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdiammod['max'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMOD, $eggdiammod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::EGGDIAMMOD, $eggdiammod, $comparison);
    }

    /**
     * Filter the query on the EggdiammodRef column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdiammodref(1234); // WHERE EggdiammodRef = 1234
     * $query->filterByEggdiammodref(array(12, 34)); // WHERE EggdiammodRef IN (12, 34)
     * $query->filterByEggdiammodref(array('min' => 12)); // WHERE EggdiammodRef >= 12
     * $query->filterByEggdiammodref(array('max' => 12)); // WHERE EggdiammodRef <= 12
     * </code>
     *
     * @param     mixed $eggdiammodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByEggdiammodref($eggdiammodref = null, $comparison = null)
    {
        if (is_array($eggdiammodref)) {
            $useMinMax = false;
            if (isset($eggdiammodref['min'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMODREF, $eggdiammodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdiammodref['max'])) {
                $this->addUsingAlias(EggsPeer::EGGDIAMMODREF, $eggdiammodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::EGGDIAMMODREF, $eggdiammodref, $comparison);
    }

    /**
     * Filter the query on the Referencediammax column
     *
     * Example usage:
     * <code>
     * $query->filterByReferencediammax(1234); // WHERE Referencediammax = 1234
     * $query->filterByReferencediammax(array(12, 34)); // WHERE Referencediammax IN (12, 34)
     * $query->filterByReferencediammax(array('min' => 12)); // WHERE Referencediammax >= 12
     * $query->filterByReferencediammax(array('max' => 12)); // WHERE Referencediammax <= 12
     * </code>
     *
     * @param     mixed $referencediammax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByReferencediammax($referencediammax = null, $comparison = null)
    {
        if (is_array($referencediammax)) {
            $useMinMax = false;
            if (isset($referencediammax['min'])) {
                $this->addUsingAlias(EggsPeer::REFERENCEDIAMMAX, $referencediammax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($referencediammax['max'])) {
                $this->addUsingAlias(EggsPeer::REFERENCEDIAMMAX, $referencediammax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::REFERENCEDIAMMAX, $referencediammax, $comparison);
    }

    /**
     * Filter the query on the Referencediammin column
     *
     * Example usage:
     * <code>
     * $query->filterByReferencediammin(1234); // WHERE Referencediammin = 1234
     * $query->filterByReferencediammin(array(12, 34)); // WHERE Referencediammin IN (12, 34)
     * $query->filterByReferencediammin(array('min' => 12)); // WHERE Referencediammin >= 12
     * $query->filterByReferencediammin(array('max' => 12)); // WHERE Referencediammin <= 12
     * </code>
     *
     * @param     mixed $referencediammin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByReferencediammin($referencediammin = null, $comparison = null)
    {
        if (is_array($referencediammin)) {
            $useMinMax = false;
            if (isset($referencediammin['min'])) {
                $this->addUsingAlias(EggsPeer::REFERENCEDIAMMIN, $referencediammin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($referencediammin['max'])) {
                $this->addUsingAlias(EggsPeer::REFERENCEDIAMMIN, $referencediammin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::REFERENCEDIAMMIN, $referencediammin, $comparison);
    }

    /**
     * Filter the query on the Referencediammod column
     *
     * Example usage:
     * <code>
     * $query->filterByReferencediammod(1234); // WHERE Referencediammod = 1234
     * $query->filterByReferencediammod(array(12, 34)); // WHERE Referencediammod IN (12, 34)
     * $query->filterByReferencediammod(array('min' => 12)); // WHERE Referencediammod >= 12
     * $query->filterByReferencediammod(array('max' => 12)); // WHERE Referencediammod <= 12
     * </code>
     *
     * @param     mixed $referencediammod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByReferencediammod($referencediammod = null, $comparison = null)
    {
        if (is_array($referencediammod)) {
            $useMinMax = false;
            if (isset($referencediammod['min'])) {
                $this->addUsingAlias(EggsPeer::REFERENCEDIAMMOD, $referencediammod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($referencediammod['max'])) {
                $this->addUsingAlias(EggsPeer::REFERENCEDIAMMOD, $referencediammod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::REFERENCEDIAMMOD, $referencediammod, $comparison);
    }

    /**
     * Filter the query on the MeasurementsRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMeasurementsref(1234); // WHERE MeasurementsRef = 1234
     * $query->filterByMeasurementsref(array(12, 34)); // WHERE MeasurementsRef IN (12, 34)
     * $query->filterByMeasurementsref(array('min' => 12)); // WHERE MeasurementsRef >= 12
     * $query->filterByMeasurementsref(array('max' => 12)); // WHERE MeasurementsRef <= 12
     * </code>
     *
     * @param     mixed $measurementsref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByMeasurementsref($measurementsref = null, $comparison = null)
    {
        if (is_array($measurementsref)) {
            $useMinMax = false;
            if (isset($measurementsref['min'])) {
                $this->addUsingAlias(EggsPeer::MEASUREMENTSREF, $measurementsref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($measurementsref['max'])) {
                $this->addUsingAlias(EggsPeer::MEASUREMENTSREF, $measurementsref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::MEASUREMENTSREF, $measurementsref, $comparison);
    }

    /**
     * Filter the query on the Perivitwidthmax column
     *
     * Example usage:
     * <code>
     * $query->filterByPerivitwidthmax(1234); // WHERE Perivitwidthmax = 1234
     * $query->filterByPerivitwidthmax(array(12, 34)); // WHERE Perivitwidthmax IN (12, 34)
     * $query->filterByPerivitwidthmax(array('min' => 12)); // WHERE Perivitwidthmax >= 12
     * $query->filterByPerivitwidthmax(array('max' => 12)); // WHERE Perivitwidthmax <= 12
     * </code>
     *
     * @param     mixed $perivitwidthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByPerivitwidthmax($perivitwidthmax = null, $comparison = null)
    {
        if (is_array($perivitwidthmax)) {
            $useMinMax = false;
            if (isset($perivitwidthmax['min'])) {
                $this->addUsingAlias(EggsPeer::PERIVITWIDTHMAX, $perivitwidthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($perivitwidthmax['max'])) {
                $this->addUsingAlias(EggsPeer::PERIVITWIDTHMAX, $perivitwidthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::PERIVITWIDTHMAX, $perivitwidthmax, $comparison);
    }

    /**
     * Filter the query on the Perivitwidthmin column
     *
     * Example usage:
     * <code>
     * $query->filterByPerivitwidthmin(1234); // WHERE Perivitwidthmin = 1234
     * $query->filterByPerivitwidthmin(array(12, 34)); // WHERE Perivitwidthmin IN (12, 34)
     * $query->filterByPerivitwidthmin(array('min' => 12)); // WHERE Perivitwidthmin >= 12
     * $query->filterByPerivitwidthmin(array('max' => 12)); // WHERE Perivitwidthmin <= 12
     * </code>
     *
     * @param     mixed $perivitwidthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByPerivitwidthmin($perivitwidthmin = null, $comparison = null)
    {
        if (is_array($perivitwidthmin)) {
            $useMinMax = false;
            if (isset($perivitwidthmin['min'])) {
                $this->addUsingAlias(EggsPeer::PERIVITWIDTHMIN, $perivitwidthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($perivitwidthmin['max'])) {
                $this->addUsingAlias(EggsPeer::PERIVITWIDTHMIN, $perivitwidthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::PERIVITWIDTHMIN, $perivitwidthmin, $comparison);
    }

    /**
     * Filter the query on the Perivitwidthmod column
     *
     * Example usage:
     * <code>
     * $query->filterByPerivitwidthmod(1234); // WHERE Perivitwidthmod = 1234
     * $query->filterByPerivitwidthmod(array(12, 34)); // WHERE Perivitwidthmod IN (12, 34)
     * $query->filterByPerivitwidthmod(array('min' => 12)); // WHERE Perivitwidthmod >= 12
     * $query->filterByPerivitwidthmod(array('max' => 12)); // WHERE Perivitwidthmod <= 12
     * </code>
     *
     * @param     mixed $perivitwidthmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByPerivitwidthmod($perivitwidthmod = null, $comparison = null)
    {
        if (is_array($perivitwidthmod)) {
            $useMinMax = false;
            if (isset($perivitwidthmod['min'])) {
                $this->addUsingAlias(EggsPeer::PERIVITWIDTHMOD, $perivitwidthmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($perivitwidthmod['max'])) {
                $this->addUsingAlias(EggsPeer::PERIVITWIDTHMOD, $perivitwidthmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::PERIVITWIDTHMOD, $perivitwidthmod, $comparison);
    }

    /**
     * Filter the query on the Chorionthickmax column
     *
     * Example usage:
     * <code>
     * $query->filterByChorionthickmax(1234); // WHERE Chorionthickmax = 1234
     * $query->filterByChorionthickmax(array(12, 34)); // WHERE Chorionthickmax IN (12, 34)
     * $query->filterByChorionthickmax(array('min' => 12)); // WHERE Chorionthickmax >= 12
     * $query->filterByChorionthickmax(array('max' => 12)); // WHERE Chorionthickmax <= 12
     * </code>
     *
     * @param     mixed $chorionthickmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByChorionthickmax($chorionthickmax = null, $comparison = null)
    {
        if (is_array($chorionthickmax)) {
            $useMinMax = false;
            if (isset($chorionthickmax['min'])) {
                $this->addUsingAlias(EggsPeer::CHORIONTHICKMAX, $chorionthickmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chorionthickmax['max'])) {
                $this->addUsingAlias(EggsPeer::CHORIONTHICKMAX, $chorionthickmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::CHORIONTHICKMAX, $chorionthickmax, $comparison);
    }

    /**
     * Filter the query on the Chorionthickmin column
     *
     * Example usage:
     * <code>
     * $query->filterByChorionthickmin(1234); // WHERE Chorionthickmin = 1234
     * $query->filterByChorionthickmin(array(12, 34)); // WHERE Chorionthickmin IN (12, 34)
     * $query->filterByChorionthickmin(array('min' => 12)); // WHERE Chorionthickmin >= 12
     * $query->filterByChorionthickmin(array('max' => 12)); // WHERE Chorionthickmin <= 12
     * </code>
     *
     * @param     mixed $chorionthickmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByChorionthickmin($chorionthickmin = null, $comparison = null)
    {
        if (is_array($chorionthickmin)) {
            $useMinMax = false;
            if (isset($chorionthickmin['min'])) {
                $this->addUsingAlias(EggsPeer::CHORIONTHICKMIN, $chorionthickmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chorionthickmin['max'])) {
                $this->addUsingAlias(EggsPeer::CHORIONTHICKMIN, $chorionthickmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::CHORIONTHICKMIN, $chorionthickmin, $comparison);
    }

    /**
     * Filter the query on the Chorionthickmod column
     *
     * Example usage:
     * <code>
     * $query->filterByChorionthickmod(1234); // WHERE Chorionthickmod = 1234
     * $query->filterByChorionthickmod(array(12, 34)); // WHERE Chorionthickmod IN (12, 34)
     * $query->filterByChorionthickmod(array('min' => 12)); // WHERE Chorionthickmod >= 12
     * $query->filterByChorionthickmod(array('max' => 12)); // WHERE Chorionthickmod <= 12
     * </code>
     *
     * @param     mixed $chorionthickmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByChorionthickmod($chorionthickmod = null, $comparison = null)
    {
        if (is_array($chorionthickmod)) {
            $useMinMax = false;
            if (isset($chorionthickmod['min'])) {
                $this->addUsingAlias(EggsPeer::CHORIONTHICKMOD, $chorionthickmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chorionthickmod['max'])) {
                $this->addUsingAlias(EggsPeer::CHORIONTHICKMOD, $chorionthickmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::CHORIONTHICKMOD, $chorionthickmod, $comparison);
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
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(EggsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(EggsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::ENTERED, $entered, $comparison);
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
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(EggsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(EggsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(EggsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(EggsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::MODIFIED, $modified, $comparison);
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
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(EggsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(EggsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(EggsPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(EggsPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::EXPERT, $expert, $comparison);
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
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(EggsPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(EggsPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the AddChars column
     *
     * Example usage:
     * <code>
     * $query->filterByAddchars('fooValue');   // WHERE AddChars = 'fooValue'
     * $query->filterByAddchars('%fooValue%'); // WHERE AddChars LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addchars The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByAddchars($addchars = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addchars)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addchars)) {
                $addchars = str_replace('*', '%', $addchars);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggsPeer::ADDCHARS, $addchars, $comparison);
    }

    /**
     * Filter the query on the WatEggs column
     *
     * Example usage:
     * <code>
     * $query->filterByWateggs('fooValue');   // WHERE WatEggs = 'fooValue'
     * $query->filterByWateggs('%fooValue%'); // WHERE WatEggs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wateggs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByWateggs($wateggs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wateggs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $wateggs)) {
                $wateggs = str_replace('*', '%', $wateggs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggsPeer::WATEGGS, $wateggs, $comparison);
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
     * @return EggsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(EggsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(EggsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Eggs $eggs Object to remove from the list of results
     *
     * @return EggsQuery The current query, for fluid interface
     */
    public function prune($eggs = null)
    {
        if ($eggs) {
            $this->addUsingAlias(EggsPeer::STOCKCODE, $eggs->getStockcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
