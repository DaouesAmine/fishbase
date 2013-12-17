<?php


/**
 * Base class that represents a query for the 'poplfdata' table.
 *
 *
 *
 * @method PoplfdataQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method PoplfdataQuery orderByLfcode($order = Criteria::ASC) Order by the LFCode column
 * @method PoplfdataQuery orderByDatesampled($order = Criteria::ASC) Order by the DateSampled column
 * @method PoplfdataQuery orderByYearofsampleold($order = Criteria::ASC) Order by the YearofSampleOld column
 * @method PoplfdataQuery orderByYearofsample($order = Criteria::ASC) Order by the YearofSample column
 * @method PoplfdataQuery orderByIndividuals($order = Criteria::ASC) Order by the Individuals column
 * @method PoplfdataQuery orderByClass1ml($order = Criteria::ASC) Order by the Class1ML column
 * @method PoplfdataQuery orderByClass1fr($order = Criteria::ASC) Order by the Class1FR column
 * @method PoplfdataQuery orderByClass2ml($order = Criteria::ASC) Order by the Class2ML column
 * @method PoplfdataQuery orderByClass2fr($order = Criteria::ASC) Order by the Class2FR column
 * @method PoplfdataQuery orderByClass3ml($order = Criteria::ASC) Order by the Class3ML column
 * @method PoplfdataQuery orderByClass3fr($order = Criteria::ASC) Order by the Class3FR column
 * @method PoplfdataQuery orderByClass4ml($order = Criteria::ASC) Order by the Class4ML column
 * @method PoplfdataQuery orderByClass4fr($order = Criteria::ASC) Order by the Class4FR column
 * @method PoplfdataQuery orderByClass5ml($order = Criteria::ASC) Order by the Class5ML column
 * @method PoplfdataQuery orderByClass5fr($order = Criteria::ASC) Order by the Class5FR column
 * @method PoplfdataQuery orderByClass6ml($order = Criteria::ASC) Order by the Class6ML column
 * @method PoplfdataQuery orderByClass6fr($order = Criteria::ASC) Order by the Class6FR column
 * @method PoplfdataQuery orderByClass7ml($order = Criteria::ASC) Order by the Class7ML column
 * @method PoplfdataQuery orderByClass7fr($order = Criteria::ASC) Order by the Class7FR column
 * @method PoplfdataQuery orderByClass8ml($order = Criteria::ASC) Order by the Class8ML column
 * @method PoplfdataQuery orderByClass8fr($order = Criteria::ASC) Order by the Class8FR column
 * @method PoplfdataQuery orderByClass9ml($order = Criteria::ASC) Order by the Class9ML column
 * @method PoplfdataQuery orderByClass9fr($order = Criteria::ASC) Order by the Class9FR column
 * @method PoplfdataQuery orderByClass10ml($order = Criteria::ASC) Order by the Class10ML column
 * @method PoplfdataQuery orderByClass10fr($order = Criteria::ASC) Order by the Class10FR column
 * @method PoplfdataQuery orderByClass11ml($order = Criteria::ASC) Order by the Class11ML column
 * @method PoplfdataQuery orderByClass11fr($order = Criteria::ASC) Order by the Class11FR column
 * @method PoplfdataQuery orderByClass12ml($order = Criteria::ASC) Order by the Class12ML column
 * @method PoplfdataQuery orderByClass12fr($order = Criteria::ASC) Order by the Class12FR column
 * @method PoplfdataQuery orderByClass13ml($order = Criteria::ASC) Order by the Class13ML column
 * @method PoplfdataQuery orderByClass13fr($order = Criteria::ASC) Order by the Class13FR column
 * @method PoplfdataQuery orderByClass14ml($order = Criteria::ASC) Order by the Class14ML column
 * @method PoplfdataQuery orderByClass14fr($order = Criteria::ASC) Order by the Class14FR column
 * @method PoplfdataQuery orderByClass15ml($order = Criteria::ASC) Order by the Class15ML column
 * @method PoplfdataQuery orderByClass15fr($order = Criteria::ASC) Order by the Class15FR column
 * @method PoplfdataQuery orderByClass16ml($order = Criteria::ASC) Order by the Class16ML column
 * @method PoplfdataQuery orderByClass16fr($order = Criteria::ASC) Order by the Class16FR column
 * @method PoplfdataQuery orderByClass17ml($order = Criteria::ASC) Order by the Class17ML column
 * @method PoplfdataQuery orderByClass17fr($order = Criteria::ASC) Order by the Class17FR column
 * @method PoplfdataQuery orderByClass18ml($order = Criteria::ASC) Order by the Class18ML column
 * @method PoplfdataQuery orderByClass18fr($order = Criteria::ASC) Order by the Class18FR column
 * @method PoplfdataQuery orderByClass19ml($order = Criteria::ASC) Order by the Class19ML column
 * @method PoplfdataQuery orderByClass19fr($order = Criteria::ASC) Order by the Class19FR column
 * @method PoplfdataQuery orderByClass20ml($order = Criteria::ASC) Order by the Class20ML column
 * @method PoplfdataQuery orderByClass20fr($order = Criteria::ASC) Order by the Class20FR column
 * @method PoplfdataQuery orderByClass21ml($order = Criteria::ASC) Order by the Class21ML column
 * @method PoplfdataQuery orderByClass21fr($order = Criteria::ASC) Order by the Class21FR column
 * @method PoplfdataQuery orderByClass22ml($order = Criteria::ASC) Order by the Class22ML column
 * @method PoplfdataQuery orderByClass22fr($order = Criteria::ASC) Order by the Class22FR column
 * @method PoplfdataQuery orderByClass23ml($order = Criteria::ASC) Order by the Class23ML column
 * @method PoplfdataQuery orderByClass23fr($order = Criteria::ASC) Order by the Class23FR column
 * @method PoplfdataQuery orderByClass24ml($order = Criteria::ASC) Order by the Class24ML column
 * @method PoplfdataQuery orderByClass24fr($order = Criteria::ASC) Order by the Class24FR column
 * @method PoplfdataQuery orderByClass25ml($order = Criteria::ASC) Order by the Class25ML column
 * @method PoplfdataQuery orderByClass25fr($order = Criteria::ASC) Order by the Class25FR column
 * @method PoplfdataQuery orderByClass26ml($order = Criteria::ASC) Order by the Class26ML column
 * @method PoplfdataQuery orderByClass26fr($order = Criteria::ASC) Order by the Class26FR column
 * @method PoplfdataQuery orderByClass27ml($order = Criteria::ASC) Order by the Class27ML column
 * @method PoplfdataQuery orderByClass27fr($order = Criteria::ASC) Order by the Class27FR column
 * @method PoplfdataQuery orderByClass28ml($order = Criteria::ASC) Order by the Class28ML column
 * @method PoplfdataQuery orderByClass28fr($order = Criteria::ASC) Order by the Class28FR column
 * @method PoplfdataQuery orderByClass29ml($order = Criteria::ASC) Order by the Class29ML column
 * @method PoplfdataQuery orderByClass29fr($order = Criteria::ASC) Order by the Class29FR column
 * @method PoplfdataQuery orderByClass30ml($order = Criteria::ASC) Order by the Class30ML column
 * @method PoplfdataQuery orderByClass30fr($order = Criteria::ASC) Order by the Class30FR column
 * @method PoplfdataQuery orderByClass31ml($order = Criteria::ASC) Order by the Class31ML column
 * @method PoplfdataQuery orderByClass31fr($order = Criteria::ASC) Order by the Class31FR column
 * @method PoplfdataQuery orderByClass32ml($order = Criteria::ASC) Order by the Class32ML column
 * @method PoplfdataQuery orderByClass32fr($order = Criteria::ASC) Order by the Class32FR column
 * @method PoplfdataQuery orderByClass33ml($order = Criteria::ASC) Order by the Class33ML column
 * @method PoplfdataQuery orderByClass33fr($order = Criteria::ASC) Order by the Class33FR column
 * @method PoplfdataQuery orderByClass34ml($order = Criteria::ASC) Order by the Class34ML column
 * @method PoplfdataQuery orderByClass34fr($order = Criteria::ASC) Order by the Class34FR column
 * @method PoplfdataQuery orderByClass35ml($order = Criteria::ASC) Order by the Class35ML column
 * @method PoplfdataQuery orderByClass35fr($order = Criteria::ASC) Order by the Class35FR column
 * @method PoplfdataQuery orderByClass36ml($order = Criteria::ASC) Order by the Class36ML column
 * @method PoplfdataQuery orderByClass36fr($order = Criteria::ASC) Order by the Class36FR column
 * @method PoplfdataQuery orderByClass37ml($order = Criteria::ASC) Order by the Class37ML column
 * @method PoplfdataQuery orderByClass37fr($order = Criteria::ASC) Order by the Class37FR column
 * @method PoplfdataQuery orderByClass38ml($order = Criteria::ASC) Order by the Class38ML column
 * @method PoplfdataQuery orderByClass38fr($order = Criteria::ASC) Order by the Class38FR column
 * @method PoplfdataQuery orderByClass39ml($order = Criteria::ASC) Order by the Class39ML column
 * @method PoplfdataQuery orderByClass39fr($order = Criteria::ASC) Order by the Class39FR column
 * @method PoplfdataQuery orderByClass40ml($order = Criteria::ASC) Order by the Class40ML column
 * @method PoplfdataQuery orderByClass40fr($order = Criteria::ASC) Order by the Class40FR column
 * @method PoplfdataQuery orderByClass41ml($order = Criteria::ASC) Order by the Class41ML column
 * @method PoplfdataQuery orderByClass41fr($order = Criteria::ASC) Order by the Class41FR column
 * @method PoplfdataQuery orderByClass42ml($order = Criteria::ASC) Order by the Class42ML column
 * @method PoplfdataQuery orderByClass42fr($order = Criteria::ASC) Order by the Class42FR column
 * @method PoplfdataQuery orderByClass43ml($order = Criteria::ASC) Order by the Class43ML column
 * @method PoplfdataQuery orderByClass43fr($order = Criteria::ASC) Order by the Class43FR column
 * @method PoplfdataQuery orderByClass44ml($order = Criteria::ASC) Order by the Class44ML column
 * @method PoplfdataQuery orderByClass44fr($order = Criteria::ASC) Order by the Class44FR column
 * @method PoplfdataQuery orderByClass45ml($order = Criteria::ASC) Order by the Class45ML column
 * @method PoplfdataQuery orderByClass45fr($order = Criteria::ASC) Order by the Class45FR column
 * @method PoplfdataQuery orderByClass46ml($order = Criteria::ASC) Order by the Class46ML column
 * @method PoplfdataQuery orderByClass46fr($order = Criteria::ASC) Order by the Class46FR column
 * @method PoplfdataQuery orderByClass47ml($order = Criteria::ASC) Order by the Class47ML column
 * @method PoplfdataQuery orderByClass47fr($order = Criteria::ASC) Order by the Class47FR column
 * @method PoplfdataQuery orderByClass48ml($order = Criteria::ASC) Order by the Class48ML column
 * @method PoplfdataQuery orderByClass48fr($order = Criteria::ASC) Order by the Class48FR column
 * @method PoplfdataQuery orderByClass49ml($order = Criteria::ASC) Order by the Class49ML column
 * @method PoplfdataQuery orderByClass49fr($order = Criteria::ASC) Order by the Class49FR column
 * @method PoplfdataQuery orderByClass50ml($order = Criteria::ASC) Order by the Class50ML column
 * @method PoplfdataQuery orderByClass50fr($order = Criteria::ASC) Order by the Class50FR column
 * @method PoplfdataQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PoplfdataQuery groupByAutoctr() Group by the autoctr column
 * @method PoplfdataQuery groupByLfcode() Group by the LFCode column
 * @method PoplfdataQuery groupByDatesampled() Group by the DateSampled column
 * @method PoplfdataQuery groupByYearofsampleold() Group by the YearofSampleOld column
 * @method PoplfdataQuery groupByYearofsample() Group by the YearofSample column
 * @method PoplfdataQuery groupByIndividuals() Group by the Individuals column
 * @method PoplfdataQuery groupByClass1ml() Group by the Class1ML column
 * @method PoplfdataQuery groupByClass1fr() Group by the Class1FR column
 * @method PoplfdataQuery groupByClass2ml() Group by the Class2ML column
 * @method PoplfdataQuery groupByClass2fr() Group by the Class2FR column
 * @method PoplfdataQuery groupByClass3ml() Group by the Class3ML column
 * @method PoplfdataQuery groupByClass3fr() Group by the Class3FR column
 * @method PoplfdataQuery groupByClass4ml() Group by the Class4ML column
 * @method PoplfdataQuery groupByClass4fr() Group by the Class4FR column
 * @method PoplfdataQuery groupByClass5ml() Group by the Class5ML column
 * @method PoplfdataQuery groupByClass5fr() Group by the Class5FR column
 * @method PoplfdataQuery groupByClass6ml() Group by the Class6ML column
 * @method PoplfdataQuery groupByClass6fr() Group by the Class6FR column
 * @method PoplfdataQuery groupByClass7ml() Group by the Class7ML column
 * @method PoplfdataQuery groupByClass7fr() Group by the Class7FR column
 * @method PoplfdataQuery groupByClass8ml() Group by the Class8ML column
 * @method PoplfdataQuery groupByClass8fr() Group by the Class8FR column
 * @method PoplfdataQuery groupByClass9ml() Group by the Class9ML column
 * @method PoplfdataQuery groupByClass9fr() Group by the Class9FR column
 * @method PoplfdataQuery groupByClass10ml() Group by the Class10ML column
 * @method PoplfdataQuery groupByClass10fr() Group by the Class10FR column
 * @method PoplfdataQuery groupByClass11ml() Group by the Class11ML column
 * @method PoplfdataQuery groupByClass11fr() Group by the Class11FR column
 * @method PoplfdataQuery groupByClass12ml() Group by the Class12ML column
 * @method PoplfdataQuery groupByClass12fr() Group by the Class12FR column
 * @method PoplfdataQuery groupByClass13ml() Group by the Class13ML column
 * @method PoplfdataQuery groupByClass13fr() Group by the Class13FR column
 * @method PoplfdataQuery groupByClass14ml() Group by the Class14ML column
 * @method PoplfdataQuery groupByClass14fr() Group by the Class14FR column
 * @method PoplfdataQuery groupByClass15ml() Group by the Class15ML column
 * @method PoplfdataQuery groupByClass15fr() Group by the Class15FR column
 * @method PoplfdataQuery groupByClass16ml() Group by the Class16ML column
 * @method PoplfdataQuery groupByClass16fr() Group by the Class16FR column
 * @method PoplfdataQuery groupByClass17ml() Group by the Class17ML column
 * @method PoplfdataQuery groupByClass17fr() Group by the Class17FR column
 * @method PoplfdataQuery groupByClass18ml() Group by the Class18ML column
 * @method PoplfdataQuery groupByClass18fr() Group by the Class18FR column
 * @method PoplfdataQuery groupByClass19ml() Group by the Class19ML column
 * @method PoplfdataQuery groupByClass19fr() Group by the Class19FR column
 * @method PoplfdataQuery groupByClass20ml() Group by the Class20ML column
 * @method PoplfdataQuery groupByClass20fr() Group by the Class20FR column
 * @method PoplfdataQuery groupByClass21ml() Group by the Class21ML column
 * @method PoplfdataQuery groupByClass21fr() Group by the Class21FR column
 * @method PoplfdataQuery groupByClass22ml() Group by the Class22ML column
 * @method PoplfdataQuery groupByClass22fr() Group by the Class22FR column
 * @method PoplfdataQuery groupByClass23ml() Group by the Class23ML column
 * @method PoplfdataQuery groupByClass23fr() Group by the Class23FR column
 * @method PoplfdataQuery groupByClass24ml() Group by the Class24ML column
 * @method PoplfdataQuery groupByClass24fr() Group by the Class24FR column
 * @method PoplfdataQuery groupByClass25ml() Group by the Class25ML column
 * @method PoplfdataQuery groupByClass25fr() Group by the Class25FR column
 * @method PoplfdataQuery groupByClass26ml() Group by the Class26ML column
 * @method PoplfdataQuery groupByClass26fr() Group by the Class26FR column
 * @method PoplfdataQuery groupByClass27ml() Group by the Class27ML column
 * @method PoplfdataQuery groupByClass27fr() Group by the Class27FR column
 * @method PoplfdataQuery groupByClass28ml() Group by the Class28ML column
 * @method PoplfdataQuery groupByClass28fr() Group by the Class28FR column
 * @method PoplfdataQuery groupByClass29ml() Group by the Class29ML column
 * @method PoplfdataQuery groupByClass29fr() Group by the Class29FR column
 * @method PoplfdataQuery groupByClass30ml() Group by the Class30ML column
 * @method PoplfdataQuery groupByClass30fr() Group by the Class30FR column
 * @method PoplfdataQuery groupByClass31ml() Group by the Class31ML column
 * @method PoplfdataQuery groupByClass31fr() Group by the Class31FR column
 * @method PoplfdataQuery groupByClass32ml() Group by the Class32ML column
 * @method PoplfdataQuery groupByClass32fr() Group by the Class32FR column
 * @method PoplfdataQuery groupByClass33ml() Group by the Class33ML column
 * @method PoplfdataQuery groupByClass33fr() Group by the Class33FR column
 * @method PoplfdataQuery groupByClass34ml() Group by the Class34ML column
 * @method PoplfdataQuery groupByClass34fr() Group by the Class34FR column
 * @method PoplfdataQuery groupByClass35ml() Group by the Class35ML column
 * @method PoplfdataQuery groupByClass35fr() Group by the Class35FR column
 * @method PoplfdataQuery groupByClass36ml() Group by the Class36ML column
 * @method PoplfdataQuery groupByClass36fr() Group by the Class36FR column
 * @method PoplfdataQuery groupByClass37ml() Group by the Class37ML column
 * @method PoplfdataQuery groupByClass37fr() Group by the Class37FR column
 * @method PoplfdataQuery groupByClass38ml() Group by the Class38ML column
 * @method PoplfdataQuery groupByClass38fr() Group by the Class38FR column
 * @method PoplfdataQuery groupByClass39ml() Group by the Class39ML column
 * @method PoplfdataQuery groupByClass39fr() Group by the Class39FR column
 * @method PoplfdataQuery groupByClass40ml() Group by the Class40ML column
 * @method PoplfdataQuery groupByClass40fr() Group by the Class40FR column
 * @method PoplfdataQuery groupByClass41ml() Group by the Class41ML column
 * @method PoplfdataQuery groupByClass41fr() Group by the Class41FR column
 * @method PoplfdataQuery groupByClass42ml() Group by the Class42ML column
 * @method PoplfdataQuery groupByClass42fr() Group by the Class42FR column
 * @method PoplfdataQuery groupByClass43ml() Group by the Class43ML column
 * @method PoplfdataQuery groupByClass43fr() Group by the Class43FR column
 * @method PoplfdataQuery groupByClass44ml() Group by the Class44ML column
 * @method PoplfdataQuery groupByClass44fr() Group by the Class44FR column
 * @method PoplfdataQuery groupByClass45ml() Group by the Class45ML column
 * @method PoplfdataQuery groupByClass45fr() Group by the Class45FR column
 * @method PoplfdataQuery groupByClass46ml() Group by the Class46ML column
 * @method PoplfdataQuery groupByClass46fr() Group by the Class46FR column
 * @method PoplfdataQuery groupByClass47ml() Group by the Class47ML column
 * @method PoplfdataQuery groupByClass47fr() Group by the Class47FR column
 * @method PoplfdataQuery groupByClass48ml() Group by the Class48ML column
 * @method PoplfdataQuery groupByClass48fr() Group by the Class48FR column
 * @method PoplfdataQuery groupByClass49ml() Group by the Class49ML column
 * @method PoplfdataQuery groupByClass49fr() Group by the Class49FR column
 * @method PoplfdataQuery groupByClass50ml() Group by the Class50ML column
 * @method PoplfdataQuery groupByClass50fr() Group by the Class50FR column
 * @method PoplfdataQuery groupByTs() Group by the TS column
 *
 * @method PoplfdataQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PoplfdataQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PoplfdataQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Poplfdata findOne(PropelPDO $con = null) Return the first Poplfdata matching the query
 * @method Poplfdata findOneOrCreate(PropelPDO $con = null) Return the first Poplfdata matching the query, or a new Poplfdata object populated from the query conditions when no match is found
 *
 * @method Poplfdata findOneByLfcode(int $LFCode) Return the first Poplfdata filtered by the LFCode column
 * @method Poplfdata findOneByDatesampled(string $DateSampled) Return the first Poplfdata filtered by the DateSampled column
 * @method Poplfdata findOneByYearofsampleold(int $YearofSampleOld) Return the first Poplfdata filtered by the YearofSampleOld column
 * @method Poplfdata findOneByYearofsample(string $YearofSample) Return the first Poplfdata filtered by the YearofSample column
 * @method Poplfdata findOneByIndividuals(double $Individuals) Return the first Poplfdata filtered by the Individuals column
 * @method Poplfdata findOneByClass1ml(double $Class1ML) Return the first Poplfdata filtered by the Class1ML column
 * @method Poplfdata findOneByClass1fr(double $Class1FR) Return the first Poplfdata filtered by the Class1FR column
 * @method Poplfdata findOneByClass2ml(double $Class2ML) Return the first Poplfdata filtered by the Class2ML column
 * @method Poplfdata findOneByClass2fr(double $Class2FR) Return the first Poplfdata filtered by the Class2FR column
 * @method Poplfdata findOneByClass3ml(double $Class3ML) Return the first Poplfdata filtered by the Class3ML column
 * @method Poplfdata findOneByClass3fr(double $Class3FR) Return the first Poplfdata filtered by the Class3FR column
 * @method Poplfdata findOneByClass4ml(double $Class4ML) Return the first Poplfdata filtered by the Class4ML column
 * @method Poplfdata findOneByClass4fr(double $Class4FR) Return the first Poplfdata filtered by the Class4FR column
 * @method Poplfdata findOneByClass5ml(double $Class5ML) Return the first Poplfdata filtered by the Class5ML column
 * @method Poplfdata findOneByClass5fr(double $Class5FR) Return the first Poplfdata filtered by the Class5FR column
 * @method Poplfdata findOneByClass6ml(double $Class6ML) Return the first Poplfdata filtered by the Class6ML column
 * @method Poplfdata findOneByClass6fr(double $Class6FR) Return the first Poplfdata filtered by the Class6FR column
 * @method Poplfdata findOneByClass7ml(double $Class7ML) Return the first Poplfdata filtered by the Class7ML column
 * @method Poplfdata findOneByClass7fr(double $Class7FR) Return the first Poplfdata filtered by the Class7FR column
 * @method Poplfdata findOneByClass8ml(double $Class8ML) Return the first Poplfdata filtered by the Class8ML column
 * @method Poplfdata findOneByClass8fr(double $Class8FR) Return the first Poplfdata filtered by the Class8FR column
 * @method Poplfdata findOneByClass9ml(double $Class9ML) Return the first Poplfdata filtered by the Class9ML column
 * @method Poplfdata findOneByClass9fr(double $Class9FR) Return the first Poplfdata filtered by the Class9FR column
 * @method Poplfdata findOneByClass10ml(double $Class10ML) Return the first Poplfdata filtered by the Class10ML column
 * @method Poplfdata findOneByClass10fr(double $Class10FR) Return the first Poplfdata filtered by the Class10FR column
 * @method Poplfdata findOneByClass11ml(double $Class11ML) Return the first Poplfdata filtered by the Class11ML column
 * @method Poplfdata findOneByClass11fr(double $Class11FR) Return the first Poplfdata filtered by the Class11FR column
 * @method Poplfdata findOneByClass12ml(double $Class12ML) Return the first Poplfdata filtered by the Class12ML column
 * @method Poplfdata findOneByClass12fr(double $Class12FR) Return the first Poplfdata filtered by the Class12FR column
 * @method Poplfdata findOneByClass13ml(double $Class13ML) Return the first Poplfdata filtered by the Class13ML column
 * @method Poplfdata findOneByClass13fr(double $Class13FR) Return the first Poplfdata filtered by the Class13FR column
 * @method Poplfdata findOneByClass14ml(double $Class14ML) Return the first Poplfdata filtered by the Class14ML column
 * @method Poplfdata findOneByClass14fr(double $Class14FR) Return the first Poplfdata filtered by the Class14FR column
 * @method Poplfdata findOneByClass15ml(double $Class15ML) Return the first Poplfdata filtered by the Class15ML column
 * @method Poplfdata findOneByClass15fr(double $Class15FR) Return the first Poplfdata filtered by the Class15FR column
 * @method Poplfdata findOneByClass16ml(double $Class16ML) Return the first Poplfdata filtered by the Class16ML column
 * @method Poplfdata findOneByClass16fr(double $Class16FR) Return the first Poplfdata filtered by the Class16FR column
 * @method Poplfdata findOneByClass17ml(double $Class17ML) Return the first Poplfdata filtered by the Class17ML column
 * @method Poplfdata findOneByClass17fr(double $Class17FR) Return the first Poplfdata filtered by the Class17FR column
 * @method Poplfdata findOneByClass18ml(double $Class18ML) Return the first Poplfdata filtered by the Class18ML column
 * @method Poplfdata findOneByClass18fr(double $Class18FR) Return the first Poplfdata filtered by the Class18FR column
 * @method Poplfdata findOneByClass19ml(double $Class19ML) Return the first Poplfdata filtered by the Class19ML column
 * @method Poplfdata findOneByClass19fr(double $Class19FR) Return the first Poplfdata filtered by the Class19FR column
 * @method Poplfdata findOneByClass20ml(double $Class20ML) Return the first Poplfdata filtered by the Class20ML column
 * @method Poplfdata findOneByClass20fr(double $Class20FR) Return the first Poplfdata filtered by the Class20FR column
 * @method Poplfdata findOneByClass21ml(double $Class21ML) Return the first Poplfdata filtered by the Class21ML column
 * @method Poplfdata findOneByClass21fr(double $Class21FR) Return the first Poplfdata filtered by the Class21FR column
 * @method Poplfdata findOneByClass22ml(double $Class22ML) Return the first Poplfdata filtered by the Class22ML column
 * @method Poplfdata findOneByClass22fr(double $Class22FR) Return the first Poplfdata filtered by the Class22FR column
 * @method Poplfdata findOneByClass23ml(double $Class23ML) Return the first Poplfdata filtered by the Class23ML column
 * @method Poplfdata findOneByClass23fr(double $Class23FR) Return the first Poplfdata filtered by the Class23FR column
 * @method Poplfdata findOneByClass24ml(double $Class24ML) Return the first Poplfdata filtered by the Class24ML column
 * @method Poplfdata findOneByClass24fr(double $Class24FR) Return the first Poplfdata filtered by the Class24FR column
 * @method Poplfdata findOneByClass25ml(double $Class25ML) Return the first Poplfdata filtered by the Class25ML column
 * @method Poplfdata findOneByClass25fr(double $Class25FR) Return the first Poplfdata filtered by the Class25FR column
 * @method Poplfdata findOneByClass26ml(double $Class26ML) Return the first Poplfdata filtered by the Class26ML column
 * @method Poplfdata findOneByClass26fr(double $Class26FR) Return the first Poplfdata filtered by the Class26FR column
 * @method Poplfdata findOneByClass27ml(double $Class27ML) Return the first Poplfdata filtered by the Class27ML column
 * @method Poplfdata findOneByClass27fr(double $Class27FR) Return the first Poplfdata filtered by the Class27FR column
 * @method Poplfdata findOneByClass28ml(double $Class28ML) Return the first Poplfdata filtered by the Class28ML column
 * @method Poplfdata findOneByClass28fr(double $Class28FR) Return the first Poplfdata filtered by the Class28FR column
 * @method Poplfdata findOneByClass29ml(double $Class29ML) Return the first Poplfdata filtered by the Class29ML column
 * @method Poplfdata findOneByClass29fr(double $Class29FR) Return the first Poplfdata filtered by the Class29FR column
 * @method Poplfdata findOneByClass30ml(double $Class30ML) Return the first Poplfdata filtered by the Class30ML column
 * @method Poplfdata findOneByClass30fr(double $Class30FR) Return the first Poplfdata filtered by the Class30FR column
 * @method Poplfdata findOneByClass31ml(double $Class31ML) Return the first Poplfdata filtered by the Class31ML column
 * @method Poplfdata findOneByClass31fr(double $Class31FR) Return the first Poplfdata filtered by the Class31FR column
 * @method Poplfdata findOneByClass32ml(double $Class32ML) Return the first Poplfdata filtered by the Class32ML column
 * @method Poplfdata findOneByClass32fr(double $Class32FR) Return the first Poplfdata filtered by the Class32FR column
 * @method Poplfdata findOneByClass33ml(double $Class33ML) Return the first Poplfdata filtered by the Class33ML column
 * @method Poplfdata findOneByClass33fr(double $Class33FR) Return the first Poplfdata filtered by the Class33FR column
 * @method Poplfdata findOneByClass34ml(double $Class34ML) Return the first Poplfdata filtered by the Class34ML column
 * @method Poplfdata findOneByClass34fr(double $Class34FR) Return the first Poplfdata filtered by the Class34FR column
 * @method Poplfdata findOneByClass35ml(double $Class35ML) Return the first Poplfdata filtered by the Class35ML column
 * @method Poplfdata findOneByClass35fr(double $Class35FR) Return the first Poplfdata filtered by the Class35FR column
 * @method Poplfdata findOneByClass36ml(double $Class36ML) Return the first Poplfdata filtered by the Class36ML column
 * @method Poplfdata findOneByClass36fr(double $Class36FR) Return the first Poplfdata filtered by the Class36FR column
 * @method Poplfdata findOneByClass37ml(double $Class37ML) Return the first Poplfdata filtered by the Class37ML column
 * @method Poplfdata findOneByClass37fr(double $Class37FR) Return the first Poplfdata filtered by the Class37FR column
 * @method Poplfdata findOneByClass38ml(double $Class38ML) Return the first Poplfdata filtered by the Class38ML column
 * @method Poplfdata findOneByClass38fr(double $Class38FR) Return the first Poplfdata filtered by the Class38FR column
 * @method Poplfdata findOneByClass39ml(double $Class39ML) Return the first Poplfdata filtered by the Class39ML column
 * @method Poplfdata findOneByClass39fr(double $Class39FR) Return the first Poplfdata filtered by the Class39FR column
 * @method Poplfdata findOneByClass40ml(double $Class40ML) Return the first Poplfdata filtered by the Class40ML column
 * @method Poplfdata findOneByClass40fr(double $Class40FR) Return the first Poplfdata filtered by the Class40FR column
 * @method Poplfdata findOneByClass41ml(double $Class41ML) Return the first Poplfdata filtered by the Class41ML column
 * @method Poplfdata findOneByClass41fr(double $Class41FR) Return the first Poplfdata filtered by the Class41FR column
 * @method Poplfdata findOneByClass42ml(double $Class42ML) Return the first Poplfdata filtered by the Class42ML column
 * @method Poplfdata findOneByClass42fr(double $Class42FR) Return the first Poplfdata filtered by the Class42FR column
 * @method Poplfdata findOneByClass43ml(double $Class43ML) Return the first Poplfdata filtered by the Class43ML column
 * @method Poplfdata findOneByClass43fr(double $Class43FR) Return the first Poplfdata filtered by the Class43FR column
 * @method Poplfdata findOneByClass44ml(double $Class44ML) Return the first Poplfdata filtered by the Class44ML column
 * @method Poplfdata findOneByClass44fr(double $Class44FR) Return the first Poplfdata filtered by the Class44FR column
 * @method Poplfdata findOneByClass45ml(double $Class45ML) Return the first Poplfdata filtered by the Class45ML column
 * @method Poplfdata findOneByClass45fr(double $Class45FR) Return the first Poplfdata filtered by the Class45FR column
 * @method Poplfdata findOneByClass46ml(double $Class46ML) Return the first Poplfdata filtered by the Class46ML column
 * @method Poplfdata findOneByClass46fr(double $Class46FR) Return the first Poplfdata filtered by the Class46FR column
 * @method Poplfdata findOneByClass47ml(double $Class47ML) Return the first Poplfdata filtered by the Class47ML column
 * @method Poplfdata findOneByClass47fr(double $Class47FR) Return the first Poplfdata filtered by the Class47FR column
 * @method Poplfdata findOneByClass48ml(double $Class48ML) Return the first Poplfdata filtered by the Class48ML column
 * @method Poplfdata findOneByClass48fr(double $Class48FR) Return the first Poplfdata filtered by the Class48FR column
 * @method Poplfdata findOneByClass49ml(double $Class49ML) Return the first Poplfdata filtered by the Class49ML column
 * @method Poplfdata findOneByClass49fr(double $Class49FR) Return the first Poplfdata filtered by the Class49FR column
 * @method Poplfdata findOneByClass50ml(double $Class50ML) Return the first Poplfdata filtered by the Class50ML column
 * @method Poplfdata findOneByClass50fr(double $Class50FR) Return the first Poplfdata filtered by the Class50FR column
 * @method Poplfdata findOneByTs(string $TS) Return the first Poplfdata filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Poplfdata objects filtered by the autoctr column
 * @method array findByLfcode(int $LFCode) Return Poplfdata objects filtered by the LFCode column
 * @method array findByDatesampled(string $DateSampled) Return Poplfdata objects filtered by the DateSampled column
 * @method array findByYearofsampleold(int $YearofSampleOld) Return Poplfdata objects filtered by the YearofSampleOld column
 * @method array findByYearofsample(string $YearofSample) Return Poplfdata objects filtered by the YearofSample column
 * @method array findByIndividuals(double $Individuals) Return Poplfdata objects filtered by the Individuals column
 * @method array findByClass1ml(double $Class1ML) Return Poplfdata objects filtered by the Class1ML column
 * @method array findByClass1fr(double $Class1FR) Return Poplfdata objects filtered by the Class1FR column
 * @method array findByClass2ml(double $Class2ML) Return Poplfdata objects filtered by the Class2ML column
 * @method array findByClass2fr(double $Class2FR) Return Poplfdata objects filtered by the Class2FR column
 * @method array findByClass3ml(double $Class3ML) Return Poplfdata objects filtered by the Class3ML column
 * @method array findByClass3fr(double $Class3FR) Return Poplfdata objects filtered by the Class3FR column
 * @method array findByClass4ml(double $Class4ML) Return Poplfdata objects filtered by the Class4ML column
 * @method array findByClass4fr(double $Class4FR) Return Poplfdata objects filtered by the Class4FR column
 * @method array findByClass5ml(double $Class5ML) Return Poplfdata objects filtered by the Class5ML column
 * @method array findByClass5fr(double $Class5FR) Return Poplfdata objects filtered by the Class5FR column
 * @method array findByClass6ml(double $Class6ML) Return Poplfdata objects filtered by the Class6ML column
 * @method array findByClass6fr(double $Class6FR) Return Poplfdata objects filtered by the Class6FR column
 * @method array findByClass7ml(double $Class7ML) Return Poplfdata objects filtered by the Class7ML column
 * @method array findByClass7fr(double $Class7FR) Return Poplfdata objects filtered by the Class7FR column
 * @method array findByClass8ml(double $Class8ML) Return Poplfdata objects filtered by the Class8ML column
 * @method array findByClass8fr(double $Class8FR) Return Poplfdata objects filtered by the Class8FR column
 * @method array findByClass9ml(double $Class9ML) Return Poplfdata objects filtered by the Class9ML column
 * @method array findByClass9fr(double $Class9FR) Return Poplfdata objects filtered by the Class9FR column
 * @method array findByClass10ml(double $Class10ML) Return Poplfdata objects filtered by the Class10ML column
 * @method array findByClass10fr(double $Class10FR) Return Poplfdata objects filtered by the Class10FR column
 * @method array findByClass11ml(double $Class11ML) Return Poplfdata objects filtered by the Class11ML column
 * @method array findByClass11fr(double $Class11FR) Return Poplfdata objects filtered by the Class11FR column
 * @method array findByClass12ml(double $Class12ML) Return Poplfdata objects filtered by the Class12ML column
 * @method array findByClass12fr(double $Class12FR) Return Poplfdata objects filtered by the Class12FR column
 * @method array findByClass13ml(double $Class13ML) Return Poplfdata objects filtered by the Class13ML column
 * @method array findByClass13fr(double $Class13FR) Return Poplfdata objects filtered by the Class13FR column
 * @method array findByClass14ml(double $Class14ML) Return Poplfdata objects filtered by the Class14ML column
 * @method array findByClass14fr(double $Class14FR) Return Poplfdata objects filtered by the Class14FR column
 * @method array findByClass15ml(double $Class15ML) Return Poplfdata objects filtered by the Class15ML column
 * @method array findByClass15fr(double $Class15FR) Return Poplfdata objects filtered by the Class15FR column
 * @method array findByClass16ml(double $Class16ML) Return Poplfdata objects filtered by the Class16ML column
 * @method array findByClass16fr(double $Class16FR) Return Poplfdata objects filtered by the Class16FR column
 * @method array findByClass17ml(double $Class17ML) Return Poplfdata objects filtered by the Class17ML column
 * @method array findByClass17fr(double $Class17FR) Return Poplfdata objects filtered by the Class17FR column
 * @method array findByClass18ml(double $Class18ML) Return Poplfdata objects filtered by the Class18ML column
 * @method array findByClass18fr(double $Class18FR) Return Poplfdata objects filtered by the Class18FR column
 * @method array findByClass19ml(double $Class19ML) Return Poplfdata objects filtered by the Class19ML column
 * @method array findByClass19fr(double $Class19FR) Return Poplfdata objects filtered by the Class19FR column
 * @method array findByClass20ml(double $Class20ML) Return Poplfdata objects filtered by the Class20ML column
 * @method array findByClass20fr(double $Class20FR) Return Poplfdata objects filtered by the Class20FR column
 * @method array findByClass21ml(double $Class21ML) Return Poplfdata objects filtered by the Class21ML column
 * @method array findByClass21fr(double $Class21FR) Return Poplfdata objects filtered by the Class21FR column
 * @method array findByClass22ml(double $Class22ML) Return Poplfdata objects filtered by the Class22ML column
 * @method array findByClass22fr(double $Class22FR) Return Poplfdata objects filtered by the Class22FR column
 * @method array findByClass23ml(double $Class23ML) Return Poplfdata objects filtered by the Class23ML column
 * @method array findByClass23fr(double $Class23FR) Return Poplfdata objects filtered by the Class23FR column
 * @method array findByClass24ml(double $Class24ML) Return Poplfdata objects filtered by the Class24ML column
 * @method array findByClass24fr(double $Class24FR) Return Poplfdata objects filtered by the Class24FR column
 * @method array findByClass25ml(double $Class25ML) Return Poplfdata objects filtered by the Class25ML column
 * @method array findByClass25fr(double $Class25FR) Return Poplfdata objects filtered by the Class25FR column
 * @method array findByClass26ml(double $Class26ML) Return Poplfdata objects filtered by the Class26ML column
 * @method array findByClass26fr(double $Class26FR) Return Poplfdata objects filtered by the Class26FR column
 * @method array findByClass27ml(double $Class27ML) Return Poplfdata objects filtered by the Class27ML column
 * @method array findByClass27fr(double $Class27FR) Return Poplfdata objects filtered by the Class27FR column
 * @method array findByClass28ml(double $Class28ML) Return Poplfdata objects filtered by the Class28ML column
 * @method array findByClass28fr(double $Class28FR) Return Poplfdata objects filtered by the Class28FR column
 * @method array findByClass29ml(double $Class29ML) Return Poplfdata objects filtered by the Class29ML column
 * @method array findByClass29fr(double $Class29FR) Return Poplfdata objects filtered by the Class29FR column
 * @method array findByClass30ml(double $Class30ML) Return Poplfdata objects filtered by the Class30ML column
 * @method array findByClass30fr(double $Class30FR) Return Poplfdata objects filtered by the Class30FR column
 * @method array findByClass31ml(double $Class31ML) Return Poplfdata objects filtered by the Class31ML column
 * @method array findByClass31fr(double $Class31FR) Return Poplfdata objects filtered by the Class31FR column
 * @method array findByClass32ml(double $Class32ML) Return Poplfdata objects filtered by the Class32ML column
 * @method array findByClass32fr(double $Class32FR) Return Poplfdata objects filtered by the Class32FR column
 * @method array findByClass33ml(double $Class33ML) Return Poplfdata objects filtered by the Class33ML column
 * @method array findByClass33fr(double $Class33FR) Return Poplfdata objects filtered by the Class33FR column
 * @method array findByClass34ml(double $Class34ML) Return Poplfdata objects filtered by the Class34ML column
 * @method array findByClass34fr(double $Class34FR) Return Poplfdata objects filtered by the Class34FR column
 * @method array findByClass35ml(double $Class35ML) Return Poplfdata objects filtered by the Class35ML column
 * @method array findByClass35fr(double $Class35FR) Return Poplfdata objects filtered by the Class35FR column
 * @method array findByClass36ml(double $Class36ML) Return Poplfdata objects filtered by the Class36ML column
 * @method array findByClass36fr(double $Class36FR) Return Poplfdata objects filtered by the Class36FR column
 * @method array findByClass37ml(double $Class37ML) Return Poplfdata objects filtered by the Class37ML column
 * @method array findByClass37fr(double $Class37FR) Return Poplfdata objects filtered by the Class37FR column
 * @method array findByClass38ml(double $Class38ML) Return Poplfdata objects filtered by the Class38ML column
 * @method array findByClass38fr(double $Class38FR) Return Poplfdata objects filtered by the Class38FR column
 * @method array findByClass39ml(double $Class39ML) Return Poplfdata objects filtered by the Class39ML column
 * @method array findByClass39fr(double $Class39FR) Return Poplfdata objects filtered by the Class39FR column
 * @method array findByClass40ml(double $Class40ML) Return Poplfdata objects filtered by the Class40ML column
 * @method array findByClass40fr(double $Class40FR) Return Poplfdata objects filtered by the Class40FR column
 * @method array findByClass41ml(double $Class41ML) Return Poplfdata objects filtered by the Class41ML column
 * @method array findByClass41fr(double $Class41FR) Return Poplfdata objects filtered by the Class41FR column
 * @method array findByClass42ml(double $Class42ML) Return Poplfdata objects filtered by the Class42ML column
 * @method array findByClass42fr(double $Class42FR) Return Poplfdata objects filtered by the Class42FR column
 * @method array findByClass43ml(double $Class43ML) Return Poplfdata objects filtered by the Class43ML column
 * @method array findByClass43fr(double $Class43FR) Return Poplfdata objects filtered by the Class43FR column
 * @method array findByClass44ml(double $Class44ML) Return Poplfdata objects filtered by the Class44ML column
 * @method array findByClass44fr(double $Class44FR) Return Poplfdata objects filtered by the Class44FR column
 * @method array findByClass45ml(double $Class45ML) Return Poplfdata objects filtered by the Class45ML column
 * @method array findByClass45fr(double $Class45FR) Return Poplfdata objects filtered by the Class45FR column
 * @method array findByClass46ml(double $Class46ML) Return Poplfdata objects filtered by the Class46ML column
 * @method array findByClass46fr(double $Class46FR) Return Poplfdata objects filtered by the Class46FR column
 * @method array findByClass47ml(double $Class47ML) Return Poplfdata objects filtered by the Class47ML column
 * @method array findByClass47fr(double $Class47FR) Return Poplfdata objects filtered by the Class47FR column
 * @method array findByClass48ml(double $Class48ML) Return Poplfdata objects filtered by the Class48ML column
 * @method array findByClass48fr(double $Class48FR) Return Poplfdata objects filtered by the Class48FR column
 * @method array findByClass49ml(double $Class49ML) Return Poplfdata objects filtered by the Class49ML column
 * @method array findByClass49fr(double $Class49FR) Return Poplfdata objects filtered by the Class49FR column
 * @method array findByClass50ml(double $Class50ML) Return Poplfdata objects filtered by the Class50ML column
 * @method array findByClass50fr(double $Class50FR) Return Poplfdata objects filtered by the Class50FR column
 * @method array findByTs(string $TS) Return Poplfdata objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePoplfdataQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePoplfdataQuery object.
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
            $modelName = 'Poplfdata';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PoplfdataQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PoplfdataQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PoplfdataQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PoplfdataQuery) {
            return $criteria;
        }
        $query = new PoplfdataQuery(null, null, $modelAlias);

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
     * @return   Poplfdata|Poplfdata[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PoplfdataPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Poplfdata A model object, or null if the key is not found
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
     * @return                 Poplfdata A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `LFCode`, `DateSampled`, `YearofSampleOld`, `YearofSample`, `Individuals`, `Class1ML`, `Class1FR`, `Class2ML`, `Class2FR`, `Class3ML`, `Class3FR`, `Class4ML`, `Class4FR`, `Class5ML`, `Class5FR`, `Class6ML`, `Class6FR`, `Class7ML`, `Class7FR`, `Class8ML`, `Class8FR`, `Class9ML`, `Class9FR`, `Class10ML`, `Class10FR`, `Class11ML`, `Class11FR`, `Class12ML`, `Class12FR`, `Class13ML`, `Class13FR`, `Class14ML`, `Class14FR`, `Class15ML`, `Class15FR`, `Class16ML`, `Class16FR`, `Class17ML`, `Class17FR`, `Class18ML`, `Class18FR`, `Class19ML`, `Class19FR`, `Class20ML`, `Class20FR`, `Class21ML`, `Class21FR`, `Class22ML`, `Class22FR`, `Class23ML`, `Class23FR`, `Class24ML`, `Class24FR`, `Class25ML`, `Class25FR`, `Class26ML`, `Class26FR`, `Class27ML`, `Class27FR`, `Class28ML`, `Class28FR`, `Class29ML`, `Class29FR`, `Class30ML`, `Class30FR`, `Class31ML`, `Class31FR`, `Class32ML`, `Class32FR`, `Class33ML`, `Class33FR`, `Class34ML`, `Class34FR`, `Class35ML`, `Class35FR`, `Class36ML`, `Class36FR`, `Class37ML`, `Class37FR`, `Class38ML`, `Class38FR`, `Class39ML`, `Class39FR`, `Class40ML`, `Class40FR`, `Class41ML`, `Class41FR`, `Class42ML`, `Class42FR`, `Class43ML`, `Class43FR`, `Class44ML`, `Class44FR`, `Class45ML`, `Class45FR`, `Class46ML`, `Class46FR`, `Class47ML`, `Class47FR`, `Class48ML`, `Class48FR`, `Class49ML`, `Class49FR`, `Class50ML`, `Class50FR`, `TS` FROM `poplfdata` WHERE `autoctr` = :p0';
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
            $obj = new Poplfdata();
            $obj->hydrate($row);
            PoplfdataPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Poplfdata|Poplfdata[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Poplfdata[]|mixed the list of results, formatted by the current formatter
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
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PoplfdataPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PoplfdataPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the LFCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLfcode(1234); // WHERE LFCode = 1234
     * $query->filterByLfcode(array(12, 34)); // WHERE LFCode IN (12, 34)
     * $query->filterByLfcode(array('min' => 12)); // WHERE LFCode >= 12
     * $query->filterByLfcode(array('max' => 12)); // WHERE LFCode <= 12
     * </code>
     *
     * @param     mixed $lfcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByLfcode($lfcode = null, $comparison = null)
    {
        if (is_array($lfcode)) {
            $useMinMax = false;
            if (isset($lfcode['min'])) {
                $this->addUsingAlias(PoplfdataPeer::LFCODE, $lfcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lfcode['max'])) {
                $this->addUsingAlias(PoplfdataPeer::LFCODE, $lfcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::LFCODE, $lfcode, $comparison);
    }

    /**
     * Filter the query on the DateSampled column
     *
     * Example usage:
     * <code>
     * $query->filterByDatesampled('2011-03-14'); // WHERE DateSampled = '2011-03-14'
     * $query->filterByDatesampled('now'); // WHERE DateSampled = '2011-03-14'
     * $query->filterByDatesampled(array('max' => 'yesterday')); // WHERE DateSampled < '2011-03-13'
     * </code>
     *
     * @param     mixed $datesampled The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByDatesampled($datesampled = null, $comparison = null)
    {
        if (is_array($datesampled)) {
            $useMinMax = false;
            if (isset($datesampled['min'])) {
                $this->addUsingAlias(PoplfdataPeer::DATESAMPLED, $datesampled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datesampled['max'])) {
                $this->addUsingAlias(PoplfdataPeer::DATESAMPLED, $datesampled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::DATESAMPLED, $datesampled, $comparison);
    }

    /**
     * Filter the query on the YearofSampleOld column
     *
     * Example usage:
     * <code>
     * $query->filterByYearofsampleold(1234); // WHERE YearofSampleOld = 1234
     * $query->filterByYearofsampleold(array(12, 34)); // WHERE YearofSampleOld IN (12, 34)
     * $query->filterByYearofsampleold(array('min' => 12)); // WHERE YearofSampleOld >= 12
     * $query->filterByYearofsampleold(array('max' => 12)); // WHERE YearofSampleOld <= 12
     * </code>
     *
     * @param     mixed $yearofsampleold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByYearofsampleold($yearofsampleold = null, $comparison = null)
    {
        if (is_array($yearofsampleold)) {
            $useMinMax = false;
            if (isset($yearofsampleold['min'])) {
                $this->addUsingAlias(PoplfdataPeer::YEAROFSAMPLEOLD, $yearofsampleold['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearofsampleold['max'])) {
                $this->addUsingAlias(PoplfdataPeer::YEAROFSAMPLEOLD, $yearofsampleold['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::YEAROFSAMPLEOLD, $yearofsampleold, $comparison);
    }

    /**
     * Filter the query on the YearofSample column
     *
     * Example usage:
     * <code>
     * $query->filterByYearofsample('fooValue');   // WHERE YearofSample = 'fooValue'
     * $query->filterByYearofsample('%fooValue%'); // WHERE YearofSample LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yearofsample The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByYearofsample($yearofsample = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yearofsample)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yearofsample)) {
                $yearofsample = str_replace('*', '%', $yearofsample);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::YEAROFSAMPLE, $yearofsample, $comparison);
    }

    /**
     * Filter the query on the Individuals column
     *
     * Example usage:
     * <code>
     * $query->filterByIndividuals(1234); // WHERE Individuals = 1234
     * $query->filterByIndividuals(array(12, 34)); // WHERE Individuals IN (12, 34)
     * $query->filterByIndividuals(array('min' => 12)); // WHERE Individuals >= 12
     * $query->filterByIndividuals(array('max' => 12)); // WHERE Individuals <= 12
     * </code>
     *
     * @param     mixed $individuals The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByIndividuals($individuals = null, $comparison = null)
    {
        if (is_array($individuals)) {
            $useMinMax = false;
            if (isset($individuals['min'])) {
                $this->addUsingAlias(PoplfdataPeer::INDIVIDUALS, $individuals['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($individuals['max'])) {
                $this->addUsingAlias(PoplfdataPeer::INDIVIDUALS, $individuals['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::INDIVIDUALS, $individuals, $comparison);
    }

    /**
     * Filter the query on the Class1ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass1ml(1234); // WHERE Class1ML = 1234
     * $query->filterByClass1ml(array(12, 34)); // WHERE Class1ML IN (12, 34)
     * $query->filterByClass1ml(array('min' => 12)); // WHERE Class1ML >= 12
     * $query->filterByClass1ml(array('max' => 12)); // WHERE Class1ML <= 12
     * </code>
     *
     * @param     mixed $class1ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass1ml($class1ml = null, $comparison = null)
    {
        if (is_array($class1ml)) {
            $useMinMax = false;
            if (isset($class1ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS1ML, $class1ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class1ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS1ML, $class1ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS1ML, $class1ml, $comparison);
    }

    /**
     * Filter the query on the Class1FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass1fr(1234); // WHERE Class1FR = 1234
     * $query->filterByClass1fr(array(12, 34)); // WHERE Class1FR IN (12, 34)
     * $query->filterByClass1fr(array('min' => 12)); // WHERE Class1FR >= 12
     * $query->filterByClass1fr(array('max' => 12)); // WHERE Class1FR <= 12
     * </code>
     *
     * @param     mixed $class1fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass1fr($class1fr = null, $comparison = null)
    {
        if (is_array($class1fr)) {
            $useMinMax = false;
            if (isset($class1fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS1FR, $class1fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class1fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS1FR, $class1fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS1FR, $class1fr, $comparison);
    }

    /**
     * Filter the query on the Class2ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass2ml(1234); // WHERE Class2ML = 1234
     * $query->filterByClass2ml(array(12, 34)); // WHERE Class2ML IN (12, 34)
     * $query->filterByClass2ml(array('min' => 12)); // WHERE Class2ML >= 12
     * $query->filterByClass2ml(array('max' => 12)); // WHERE Class2ML <= 12
     * </code>
     *
     * @param     mixed $class2ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass2ml($class2ml = null, $comparison = null)
    {
        if (is_array($class2ml)) {
            $useMinMax = false;
            if (isset($class2ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS2ML, $class2ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class2ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS2ML, $class2ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS2ML, $class2ml, $comparison);
    }

    /**
     * Filter the query on the Class2FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass2fr(1234); // WHERE Class2FR = 1234
     * $query->filterByClass2fr(array(12, 34)); // WHERE Class2FR IN (12, 34)
     * $query->filterByClass2fr(array('min' => 12)); // WHERE Class2FR >= 12
     * $query->filterByClass2fr(array('max' => 12)); // WHERE Class2FR <= 12
     * </code>
     *
     * @param     mixed $class2fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass2fr($class2fr = null, $comparison = null)
    {
        if (is_array($class2fr)) {
            $useMinMax = false;
            if (isset($class2fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS2FR, $class2fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class2fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS2FR, $class2fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS2FR, $class2fr, $comparison);
    }

    /**
     * Filter the query on the Class3ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass3ml(1234); // WHERE Class3ML = 1234
     * $query->filterByClass3ml(array(12, 34)); // WHERE Class3ML IN (12, 34)
     * $query->filterByClass3ml(array('min' => 12)); // WHERE Class3ML >= 12
     * $query->filterByClass3ml(array('max' => 12)); // WHERE Class3ML <= 12
     * </code>
     *
     * @param     mixed $class3ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass3ml($class3ml = null, $comparison = null)
    {
        if (is_array($class3ml)) {
            $useMinMax = false;
            if (isset($class3ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS3ML, $class3ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class3ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS3ML, $class3ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS3ML, $class3ml, $comparison);
    }

    /**
     * Filter the query on the Class3FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass3fr(1234); // WHERE Class3FR = 1234
     * $query->filterByClass3fr(array(12, 34)); // WHERE Class3FR IN (12, 34)
     * $query->filterByClass3fr(array('min' => 12)); // WHERE Class3FR >= 12
     * $query->filterByClass3fr(array('max' => 12)); // WHERE Class3FR <= 12
     * </code>
     *
     * @param     mixed $class3fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass3fr($class3fr = null, $comparison = null)
    {
        if (is_array($class3fr)) {
            $useMinMax = false;
            if (isset($class3fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS3FR, $class3fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class3fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS3FR, $class3fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS3FR, $class3fr, $comparison);
    }

    /**
     * Filter the query on the Class4ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass4ml(1234); // WHERE Class4ML = 1234
     * $query->filterByClass4ml(array(12, 34)); // WHERE Class4ML IN (12, 34)
     * $query->filterByClass4ml(array('min' => 12)); // WHERE Class4ML >= 12
     * $query->filterByClass4ml(array('max' => 12)); // WHERE Class4ML <= 12
     * </code>
     *
     * @param     mixed $class4ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass4ml($class4ml = null, $comparison = null)
    {
        if (is_array($class4ml)) {
            $useMinMax = false;
            if (isset($class4ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS4ML, $class4ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class4ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS4ML, $class4ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS4ML, $class4ml, $comparison);
    }

    /**
     * Filter the query on the Class4FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass4fr(1234); // WHERE Class4FR = 1234
     * $query->filterByClass4fr(array(12, 34)); // WHERE Class4FR IN (12, 34)
     * $query->filterByClass4fr(array('min' => 12)); // WHERE Class4FR >= 12
     * $query->filterByClass4fr(array('max' => 12)); // WHERE Class4FR <= 12
     * </code>
     *
     * @param     mixed $class4fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass4fr($class4fr = null, $comparison = null)
    {
        if (is_array($class4fr)) {
            $useMinMax = false;
            if (isset($class4fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS4FR, $class4fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class4fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS4FR, $class4fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS4FR, $class4fr, $comparison);
    }

    /**
     * Filter the query on the Class5ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass5ml(1234); // WHERE Class5ML = 1234
     * $query->filterByClass5ml(array(12, 34)); // WHERE Class5ML IN (12, 34)
     * $query->filterByClass5ml(array('min' => 12)); // WHERE Class5ML >= 12
     * $query->filterByClass5ml(array('max' => 12)); // WHERE Class5ML <= 12
     * </code>
     *
     * @param     mixed $class5ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass5ml($class5ml = null, $comparison = null)
    {
        if (is_array($class5ml)) {
            $useMinMax = false;
            if (isset($class5ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS5ML, $class5ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class5ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS5ML, $class5ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS5ML, $class5ml, $comparison);
    }

    /**
     * Filter the query on the Class5FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass5fr(1234); // WHERE Class5FR = 1234
     * $query->filterByClass5fr(array(12, 34)); // WHERE Class5FR IN (12, 34)
     * $query->filterByClass5fr(array('min' => 12)); // WHERE Class5FR >= 12
     * $query->filterByClass5fr(array('max' => 12)); // WHERE Class5FR <= 12
     * </code>
     *
     * @param     mixed $class5fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass5fr($class5fr = null, $comparison = null)
    {
        if (is_array($class5fr)) {
            $useMinMax = false;
            if (isset($class5fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS5FR, $class5fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class5fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS5FR, $class5fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS5FR, $class5fr, $comparison);
    }

    /**
     * Filter the query on the Class6ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass6ml(1234); // WHERE Class6ML = 1234
     * $query->filterByClass6ml(array(12, 34)); // WHERE Class6ML IN (12, 34)
     * $query->filterByClass6ml(array('min' => 12)); // WHERE Class6ML >= 12
     * $query->filterByClass6ml(array('max' => 12)); // WHERE Class6ML <= 12
     * </code>
     *
     * @param     mixed $class6ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass6ml($class6ml = null, $comparison = null)
    {
        if (is_array($class6ml)) {
            $useMinMax = false;
            if (isset($class6ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS6ML, $class6ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class6ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS6ML, $class6ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS6ML, $class6ml, $comparison);
    }

    /**
     * Filter the query on the Class6FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass6fr(1234); // WHERE Class6FR = 1234
     * $query->filterByClass6fr(array(12, 34)); // WHERE Class6FR IN (12, 34)
     * $query->filterByClass6fr(array('min' => 12)); // WHERE Class6FR >= 12
     * $query->filterByClass6fr(array('max' => 12)); // WHERE Class6FR <= 12
     * </code>
     *
     * @param     mixed $class6fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass6fr($class6fr = null, $comparison = null)
    {
        if (is_array($class6fr)) {
            $useMinMax = false;
            if (isset($class6fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS6FR, $class6fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class6fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS6FR, $class6fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS6FR, $class6fr, $comparison);
    }

    /**
     * Filter the query on the Class7ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass7ml(1234); // WHERE Class7ML = 1234
     * $query->filterByClass7ml(array(12, 34)); // WHERE Class7ML IN (12, 34)
     * $query->filterByClass7ml(array('min' => 12)); // WHERE Class7ML >= 12
     * $query->filterByClass7ml(array('max' => 12)); // WHERE Class7ML <= 12
     * </code>
     *
     * @param     mixed $class7ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass7ml($class7ml = null, $comparison = null)
    {
        if (is_array($class7ml)) {
            $useMinMax = false;
            if (isset($class7ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS7ML, $class7ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class7ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS7ML, $class7ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS7ML, $class7ml, $comparison);
    }

    /**
     * Filter the query on the Class7FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass7fr(1234); // WHERE Class7FR = 1234
     * $query->filterByClass7fr(array(12, 34)); // WHERE Class7FR IN (12, 34)
     * $query->filterByClass7fr(array('min' => 12)); // WHERE Class7FR >= 12
     * $query->filterByClass7fr(array('max' => 12)); // WHERE Class7FR <= 12
     * </code>
     *
     * @param     mixed $class7fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass7fr($class7fr = null, $comparison = null)
    {
        if (is_array($class7fr)) {
            $useMinMax = false;
            if (isset($class7fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS7FR, $class7fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class7fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS7FR, $class7fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS7FR, $class7fr, $comparison);
    }

    /**
     * Filter the query on the Class8ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass8ml(1234); // WHERE Class8ML = 1234
     * $query->filterByClass8ml(array(12, 34)); // WHERE Class8ML IN (12, 34)
     * $query->filterByClass8ml(array('min' => 12)); // WHERE Class8ML >= 12
     * $query->filterByClass8ml(array('max' => 12)); // WHERE Class8ML <= 12
     * </code>
     *
     * @param     mixed $class8ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass8ml($class8ml = null, $comparison = null)
    {
        if (is_array($class8ml)) {
            $useMinMax = false;
            if (isset($class8ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS8ML, $class8ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class8ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS8ML, $class8ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS8ML, $class8ml, $comparison);
    }

    /**
     * Filter the query on the Class8FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass8fr(1234); // WHERE Class8FR = 1234
     * $query->filterByClass8fr(array(12, 34)); // WHERE Class8FR IN (12, 34)
     * $query->filterByClass8fr(array('min' => 12)); // WHERE Class8FR >= 12
     * $query->filterByClass8fr(array('max' => 12)); // WHERE Class8FR <= 12
     * </code>
     *
     * @param     mixed $class8fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass8fr($class8fr = null, $comparison = null)
    {
        if (is_array($class8fr)) {
            $useMinMax = false;
            if (isset($class8fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS8FR, $class8fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class8fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS8FR, $class8fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS8FR, $class8fr, $comparison);
    }

    /**
     * Filter the query on the Class9ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass9ml(1234); // WHERE Class9ML = 1234
     * $query->filterByClass9ml(array(12, 34)); // WHERE Class9ML IN (12, 34)
     * $query->filterByClass9ml(array('min' => 12)); // WHERE Class9ML >= 12
     * $query->filterByClass9ml(array('max' => 12)); // WHERE Class9ML <= 12
     * </code>
     *
     * @param     mixed $class9ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass9ml($class9ml = null, $comparison = null)
    {
        if (is_array($class9ml)) {
            $useMinMax = false;
            if (isset($class9ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS9ML, $class9ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class9ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS9ML, $class9ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS9ML, $class9ml, $comparison);
    }

    /**
     * Filter the query on the Class9FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass9fr(1234); // WHERE Class9FR = 1234
     * $query->filterByClass9fr(array(12, 34)); // WHERE Class9FR IN (12, 34)
     * $query->filterByClass9fr(array('min' => 12)); // WHERE Class9FR >= 12
     * $query->filterByClass9fr(array('max' => 12)); // WHERE Class9FR <= 12
     * </code>
     *
     * @param     mixed $class9fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass9fr($class9fr = null, $comparison = null)
    {
        if (is_array($class9fr)) {
            $useMinMax = false;
            if (isset($class9fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS9FR, $class9fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class9fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS9FR, $class9fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS9FR, $class9fr, $comparison);
    }

    /**
     * Filter the query on the Class10ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass10ml(1234); // WHERE Class10ML = 1234
     * $query->filterByClass10ml(array(12, 34)); // WHERE Class10ML IN (12, 34)
     * $query->filterByClass10ml(array('min' => 12)); // WHERE Class10ML >= 12
     * $query->filterByClass10ml(array('max' => 12)); // WHERE Class10ML <= 12
     * </code>
     *
     * @param     mixed $class10ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass10ml($class10ml = null, $comparison = null)
    {
        if (is_array($class10ml)) {
            $useMinMax = false;
            if (isset($class10ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS10ML, $class10ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class10ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS10ML, $class10ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS10ML, $class10ml, $comparison);
    }

    /**
     * Filter the query on the Class10FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass10fr(1234); // WHERE Class10FR = 1234
     * $query->filterByClass10fr(array(12, 34)); // WHERE Class10FR IN (12, 34)
     * $query->filterByClass10fr(array('min' => 12)); // WHERE Class10FR >= 12
     * $query->filterByClass10fr(array('max' => 12)); // WHERE Class10FR <= 12
     * </code>
     *
     * @param     mixed $class10fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass10fr($class10fr = null, $comparison = null)
    {
        if (is_array($class10fr)) {
            $useMinMax = false;
            if (isset($class10fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS10FR, $class10fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class10fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS10FR, $class10fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS10FR, $class10fr, $comparison);
    }

    /**
     * Filter the query on the Class11ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass11ml(1234); // WHERE Class11ML = 1234
     * $query->filterByClass11ml(array(12, 34)); // WHERE Class11ML IN (12, 34)
     * $query->filterByClass11ml(array('min' => 12)); // WHERE Class11ML >= 12
     * $query->filterByClass11ml(array('max' => 12)); // WHERE Class11ML <= 12
     * </code>
     *
     * @param     mixed $class11ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass11ml($class11ml = null, $comparison = null)
    {
        if (is_array($class11ml)) {
            $useMinMax = false;
            if (isset($class11ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS11ML, $class11ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class11ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS11ML, $class11ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS11ML, $class11ml, $comparison);
    }

    /**
     * Filter the query on the Class11FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass11fr(1234); // WHERE Class11FR = 1234
     * $query->filterByClass11fr(array(12, 34)); // WHERE Class11FR IN (12, 34)
     * $query->filterByClass11fr(array('min' => 12)); // WHERE Class11FR >= 12
     * $query->filterByClass11fr(array('max' => 12)); // WHERE Class11FR <= 12
     * </code>
     *
     * @param     mixed $class11fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass11fr($class11fr = null, $comparison = null)
    {
        if (is_array($class11fr)) {
            $useMinMax = false;
            if (isset($class11fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS11FR, $class11fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class11fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS11FR, $class11fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS11FR, $class11fr, $comparison);
    }

    /**
     * Filter the query on the Class12ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass12ml(1234); // WHERE Class12ML = 1234
     * $query->filterByClass12ml(array(12, 34)); // WHERE Class12ML IN (12, 34)
     * $query->filterByClass12ml(array('min' => 12)); // WHERE Class12ML >= 12
     * $query->filterByClass12ml(array('max' => 12)); // WHERE Class12ML <= 12
     * </code>
     *
     * @param     mixed $class12ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass12ml($class12ml = null, $comparison = null)
    {
        if (is_array($class12ml)) {
            $useMinMax = false;
            if (isset($class12ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS12ML, $class12ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class12ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS12ML, $class12ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS12ML, $class12ml, $comparison);
    }

    /**
     * Filter the query on the Class12FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass12fr(1234); // WHERE Class12FR = 1234
     * $query->filterByClass12fr(array(12, 34)); // WHERE Class12FR IN (12, 34)
     * $query->filterByClass12fr(array('min' => 12)); // WHERE Class12FR >= 12
     * $query->filterByClass12fr(array('max' => 12)); // WHERE Class12FR <= 12
     * </code>
     *
     * @param     mixed $class12fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass12fr($class12fr = null, $comparison = null)
    {
        if (is_array($class12fr)) {
            $useMinMax = false;
            if (isset($class12fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS12FR, $class12fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class12fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS12FR, $class12fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS12FR, $class12fr, $comparison);
    }

    /**
     * Filter the query on the Class13ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass13ml(1234); // WHERE Class13ML = 1234
     * $query->filterByClass13ml(array(12, 34)); // WHERE Class13ML IN (12, 34)
     * $query->filterByClass13ml(array('min' => 12)); // WHERE Class13ML >= 12
     * $query->filterByClass13ml(array('max' => 12)); // WHERE Class13ML <= 12
     * </code>
     *
     * @param     mixed $class13ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass13ml($class13ml = null, $comparison = null)
    {
        if (is_array($class13ml)) {
            $useMinMax = false;
            if (isset($class13ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS13ML, $class13ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class13ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS13ML, $class13ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS13ML, $class13ml, $comparison);
    }

    /**
     * Filter the query on the Class13FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass13fr(1234); // WHERE Class13FR = 1234
     * $query->filterByClass13fr(array(12, 34)); // WHERE Class13FR IN (12, 34)
     * $query->filterByClass13fr(array('min' => 12)); // WHERE Class13FR >= 12
     * $query->filterByClass13fr(array('max' => 12)); // WHERE Class13FR <= 12
     * </code>
     *
     * @param     mixed $class13fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass13fr($class13fr = null, $comparison = null)
    {
        if (is_array($class13fr)) {
            $useMinMax = false;
            if (isset($class13fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS13FR, $class13fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class13fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS13FR, $class13fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS13FR, $class13fr, $comparison);
    }

    /**
     * Filter the query on the Class14ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass14ml(1234); // WHERE Class14ML = 1234
     * $query->filterByClass14ml(array(12, 34)); // WHERE Class14ML IN (12, 34)
     * $query->filterByClass14ml(array('min' => 12)); // WHERE Class14ML >= 12
     * $query->filterByClass14ml(array('max' => 12)); // WHERE Class14ML <= 12
     * </code>
     *
     * @param     mixed $class14ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass14ml($class14ml = null, $comparison = null)
    {
        if (is_array($class14ml)) {
            $useMinMax = false;
            if (isset($class14ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS14ML, $class14ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class14ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS14ML, $class14ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS14ML, $class14ml, $comparison);
    }

    /**
     * Filter the query on the Class14FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass14fr(1234); // WHERE Class14FR = 1234
     * $query->filterByClass14fr(array(12, 34)); // WHERE Class14FR IN (12, 34)
     * $query->filterByClass14fr(array('min' => 12)); // WHERE Class14FR >= 12
     * $query->filterByClass14fr(array('max' => 12)); // WHERE Class14FR <= 12
     * </code>
     *
     * @param     mixed $class14fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass14fr($class14fr = null, $comparison = null)
    {
        if (is_array($class14fr)) {
            $useMinMax = false;
            if (isset($class14fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS14FR, $class14fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class14fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS14FR, $class14fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS14FR, $class14fr, $comparison);
    }

    /**
     * Filter the query on the Class15ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass15ml(1234); // WHERE Class15ML = 1234
     * $query->filterByClass15ml(array(12, 34)); // WHERE Class15ML IN (12, 34)
     * $query->filterByClass15ml(array('min' => 12)); // WHERE Class15ML >= 12
     * $query->filterByClass15ml(array('max' => 12)); // WHERE Class15ML <= 12
     * </code>
     *
     * @param     mixed $class15ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass15ml($class15ml = null, $comparison = null)
    {
        if (is_array($class15ml)) {
            $useMinMax = false;
            if (isset($class15ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS15ML, $class15ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class15ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS15ML, $class15ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS15ML, $class15ml, $comparison);
    }

    /**
     * Filter the query on the Class15FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass15fr(1234); // WHERE Class15FR = 1234
     * $query->filterByClass15fr(array(12, 34)); // WHERE Class15FR IN (12, 34)
     * $query->filterByClass15fr(array('min' => 12)); // WHERE Class15FR >= 12
     * $query->filterByClass15fr(array('max' => 12)); // WHERE Class15FR <= 12
     * </code>
     *
     * @param     mixed $class15fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass15fr($class15fr = null, $comparison = null)
    {
        if (is_array($class15fr)) {
            $useMinMax = false;
            if (isset($class15fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS15FR, $class15fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class15fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS15FR, $class15fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS15FR, $class15fr, $comparison);
    }

    /**
     * Filter the query on the Class16ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass16ml(1234); // WHERE Class16ML = 1234
     * $query->filterByClass16ml(array(12, 34)); // WHERE Class16ML IN (12, 34)
     * $query->filterByClass16ml(array('min' => 12)); // WHERE Class16ML >= 12
     * $query->filterByClass16ml(array('max' => 12)); // WHERE Class16ML <= 12
     * </code>
     *
     * @param     mixed $class16ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass16ml($class16ml = null, $comparison = null)
    {
        if (is_array($class16ml)) {
            $useMinMax = false;
            if (isset($class16ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS16ML, $class16ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class16ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS16ML, $class16ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS16ML, $class16ml, $comparison);
    }

    /**
     * Filter the query on the Class16FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass16fr(1234); // WHERE Class16FR = 1234
     * $query->filterByClass16fr(array(12, 34)); // WHERE Class16FR IN (12, 34)
     * $query->filterByClass16fr(array('min' => 12)); // WHERE Class16FR >= 12
     * $query->filterByClass16fr(array('max' => 12)); // WHERE Class16FR <= 12
     * </code>
     *
     * @param     mixed $class16fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass16fr($class16fr = null, $comparison = null)
    {
        if (is_array($class16fr)) {
            $useMinMax = false;
            if (isset($class16fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS16FR, $class16fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class16fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS16FR, $class16fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS16FR, $class16fr, $comparison);
    }

    /**
     * Filter the query on the Class17ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass17ml(1234); // WHERE Class17ML = 1234
     * $query->filterByClass17ml(array(12, 34)); // WHERE Class17ML IN (12, 34)
     * $query->filterByClass17ml(array('min' => 12)); // WHERE Class17ML >= 12
     * $query->filterByClass17ml(array('max' => 12)); // WHERE Class17ML <= 12
     * </code>
     *
     * @param     mixed $class17ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass17ml($class17ml = null, $comparison = null)
    {
        if (is_array($class17ml)) {
            $useMinMax = false;
            if (isset($class17ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS17ML, $class17ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class17ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS17ML, $class17ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS17ML, $class17ml, $comparison);
    }

    /**
     * Filter the query on the Class17FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass17fr(1234); // WHERE Class17FR = 1234
     * $query->filterByClass17fr(array(12, 34)); // WHERE Class17FR IN (12, 34)
     * $query->filterByClass17fr(array('min' => 12)); // WHERE Class17FR >= 12
     * $query->filterByClass17fr(array('max' => 12)); // WHERE Class17FR <= 12
     * </code>
     *
     * @param     mixed $class17fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass17fr($class17fr = null, $comparison = null)
    {
        if (is_array($class17fr)) {
            $useMinMax = false;
            if (isset($class17fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS17FR, $class17fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class17fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS17FR, $class17fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS17FR, $class17fr, $comparison);
    }

    /**
     * Filter the query on the Class18ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass18ml(1234); // WHERE Class18ML = 1234
     * $query->filterByClass18ml(array(12, 34)); // WHERE Class18ML IN (12, 34)
     * $query->filterByClass18ml(array('min' => 12)); // WHERE Class18ML >= 12
     * $query->filterByClass18ml(array('max' => 12)); // WHERE Class18ML <= 12
     * </code>
     *
     * @param     mixed $class18ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass18ml($class18ml = null, $comparison = null)
    {
        if (is_array($class18ml)) {
            $useMinMax = false;
            if (isset($class18ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS18ML, $class18ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class18ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS18ML, $class18ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS18ML, $class18ml, $comparison);
    }

    /**
     * Filter the query on the Class18FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass18fr(1234); // WHERE Class18FR = 1234
     * $query->filterByClass18fr(array(12, 34)); // WHERE Class18FR IN (12, 34)
     * $query->filterByClass18fr(array('min' => 12)); // WHERE Class18FR >= 12
     * $query->filterByClass18fr(array('max' => 12)); // WHERE Class18FR <= 12
     * </code>
     *
     * @param     mixed $class18fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass18fr($class18fr = null, $comparison = null)
    {
        if (is_array($class18fr)) {
            $useMinMax = false;
            if (isset($class18fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS18FR, $class18fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class18fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS18FR, $class18fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS18FR, $class18fr, $comparison);
    }

    /**
     * Filter the query on the Class19ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass19ml(1234); // WHERE Class19ML = 1234
     * $query->filterByClass19ml(array(12, 34)); // WHERE Class19ML IN (12, 34)
     * $query->filterByClass19ml(array('min' => 12)); // WHERE Class19ML >= 12
     * $query->filterByClass19ml(array('max' => 12)); // WHERE Class19ML <= 12
     * </code>
     *
     * @param     mixed $class19ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass19ml($class19ml = null, $comparison = null)
    {
        if (is_array($class19ml)) {
            $useMinMax = false;
            if (isset($class19ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS19ML, $class19ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class19ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS19ML, $class19ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS19ML, $class19ml, $comparison);
    }

    /**
     * Filter the query on the Class19FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass19fr(1234); // WHERE Class19FR = 1234
     * $query->filterByClass19fr(array(12, 34)); // WHERE Class19FR IN (12, 34)
     * $query->filterByClass19fr(array('min' => 12)); // WHERE Class19FR >= 12
     * $query->filterByClass19fr(array('max' => 12)); // WHERE Class19FR <= 12
     * </code>
     *
     * @param     mixed $class19fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass19fr($class19fr = null, $comparison = null)
    {
        if (is_array($class19fr)) {
            $useMinMax = false;
            if (isset($class19fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS19FR, $class19fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class19fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS19FR, $class19fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS19FR, $class19fr, $comparison);
    }

    /**
     * Filter the query on the Class20ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass20ml(1234); // WHERE Class20ML = 1234
     * $query->filterByClass20ml(array(12, 34)); // WHERE Class20ML IN (12, 34)
     * $query->filterByClass20ml(array('min' => 12)); // WHERE Class20ML >= 12
     * $query->filterByClass20ml(array('max' => 12)); // WHERE Class20ML <= 12
     * </code>
     *
     * @param     mixed $class20ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass20ml($class20ml = null, $comparison = null)
    {
        if (is_array($class20ml)) {
            $useMinMax = false;
            if (isset($class20ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS20ML, $class20ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class20ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS20ML, $class20ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS20ML, $class20ml, $comparison);
    }

    /**
     * Filter the query on the Class20FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass20fr(1234); // WHERE Class20FR = 1234
     * $query->filterByClass20fr(array(12, 34)); // WHERE Class20FR IN (12, 34)
     * $query->filterByClass20fr(array('min' => 12)); // WHERE Class20FR >= 12
     * $query->filterByClass20fr(array('max' => 12)); // WHERE Class20FR <= 12
     * </code>
     *
     * @param     mixed $class20fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass20fr($class20fr = null, $comparison = null)
    {
        if (is_array($class20fr)) {
            $useMinMax = false;
            if (isset($class20fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS20FR, $class20fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class20fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS20FR, $class20fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS20FR, $class20fr, $comparison);
    }

    /**
     * Filter the query on the Class21ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass21ml(1234); // WHERE Class21ML = 1234
     * $query->filterByClass21ml(array(12, 34)); // WHERE Class21ML IN (12, 34)
     * $query->filterByClass21ml(array('min' => 12)); // WHERE Class21ML >= 12
     * $query->filterByClass21ml(array('max' => 12)); // WHERE Class21ML <= 12
     * </code>
     *
     * @param     mixed $class21ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass21ml($class21ml = null, $comparison = null)
    {
        if (is_array($class21ml)) {
            $useMinMax = false;
            if (isset($class21ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS21ML, $class21ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class21ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS21ML, $class21ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS21ML, $class21ml, $comparison);
    }

    /**
     * Filter the query on the Class21FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass21fr(1234); // WHERE Class21FR = 1234
     * $query->filterByClass21fr(array(12, 34)); // WHERE Class21FR IN (12, 34)
     * $query->filterByClass21fr(array('min' => 12)); // WHERE Class21FR >= 12
     * $query->filterByClass21fr(array('max' => 12)); // WHERE Class21FR <= 12
     * </code>
     *
     * @param     mixed $class21fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass21fr($class21fr = null, $comparison = null)
    {
        if (is_array($class21fr)) {
            $useMinMax = false;
            if (isset($class21fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS21FR, $class21fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class21fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS21FR, $class21fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS21FR, $class21fr, $comparison);
    }

    /**
     * Filter the query on the Class22ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass22ml(1234); // WHERE Class22ML = 1234
     * $query->filterByClass22ml(array(12, 34)); // WHERE Class22ML IN (12, 34)
     * $query->filterByClass22ml(array('min' => 12)); // WHERE Class22ML >= 12
     * $query->filterByClass22ml(array('max' => 12)); // WHERE Class22ML <= 12
     * </code>
     *
     * @param     mixed $class22ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass22ml($class22ml = null, $comparison = null)
    {
        if (is_array($class22ml)) {
            $useMinMax = false;
            if (isset($class22ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS22ML, $class22ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class22ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS22ML, $class22ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS22ML, $class22ml, $comparison);
    }

    /**
     * Filter the query on the Class22FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass22fr(1234); // WHERE Class22FR = 1234
     * $query->filterByClass22fr(array(12, 34)); // WHERE Class22FR IN (12, 34)
     * $query->filterByClass22fr(array('min' => 12)); // WHERE Class22FR >= 12
     * $query->filterByClass22fr(array('max' => 12)); // WHERE Class22FR <= 12
     * </code>
     *
     * @param     mixed $class22fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass22fr($class22fr = null, $comparison = null)
    {
        if (is_array($class22fr)) {
            $useMinMax = false;
            if (isset($class22fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS22FR, $class22fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class22fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS22FR, $class22fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS22FR, $class22fr, $comparison);
    }

    /**
     * Filter the query on the Class23ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass23ml(1234); // WHERE Class23ML = 1234
     * $query->filterByClass23ml(array(12, 34)); // WHERE Class23ML IN (12, 34)
     * $query->filterByClass23ml(array('min' => 12)); // WHERE Class23ML >= 12
     * $query->filterByClass23ml(array('max' => 12)); // WHERE Class23ML <= 12
     * </code>
     *
     * @param     mixed $class23ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass23ml($class23ml = null, $comparison = null)
    {
        if (is_array($class23ml)) {
            $useMinMax = false;
            if (isset($class23ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS23ML, $class23ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class23ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS23ML, $class23ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS23ML, $class23ml, $comparison);
    }

    /**
     * Filter the query on the Class23FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass23fr(1234); // WHERE Class23FR = 1234
     * $query->filterByClass23fr(array(12, 34)); // WHERE Class23FR IN (12, 34)
     * $query->filterByClass23fr(array('min' => 12)); // WHERE Class23FR >= 12
     * $query->filterByClass23fr(array('max' => 12)); // WHERE Class23FR <= 12
     * </code>
     *
     * @param     mixed $class23fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass23fr($class23fr = null, $comparison = null)
    {
        if (is_array($class23fr)) {
            $useMinMax = false;
            if (isset($class23fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS23FR, $class23fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class23fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS23FR, $class23fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS23FR, $class23fr, $comparison);
    }

    /**
     * Filter the query on the Class24ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass24ml(1234); // WHERE Class24ML = 1234
     * $query->filterByClass24ml(array(12, 34)); // WHERE Class24ML IN (12, 34)
     * $query->filterByClass24ml(array('min' => 12)); // WHERE Class24ML >= 12
     * $query->filterByClass24ml(array('max' => 12)); // WHERE Class24ML <= 12
     * </code>
     *
     * @param     mixed $class24ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass24ml($class24ml = null, $comparison = null)
    {
        if (is_array($class24ml)) {
            $useMinMax = false;
            if (isset($class24ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS24ML, $class24ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class24ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS24ML, $class24ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS24ML, $class24ml, $comparison);
    }

    /**
     * Filter the query on the Class24FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass24fr(1234); // WHERE Class24FR = 1234
     * $query->filterByClass24fr(array(12, 34)); // WHERE Class24FR IN (12, 34)
     * $query->filterByClass24fr(array('min' => 12)); // WHERE Class24FR >= 12
     * $query->filterByClass24fr(array('max' => 12)); // WHERE Class24FR <= 12
     * </code>
     *
     * @param     mixed $class24fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass24fr($class24fr = null, $comparison = null)
    {
        if (is_array($class24fr)) {
            $useMinMax = false;
            if (isset($class24fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS24FR, $class24fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class24fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS24FR, $class24fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS24FR, $class24fr, $comparison);
    }

    /**
     * Filter the query on the Class25ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass25ml(1234); // WHERE Class25ML = 1234
     * $query->filterByClass25ml(array(12, 34)); // WHERE Class25ML IN (12, 34)
     * $query->filterByClass25ml(array('min' => 12)); // WHERE Class25ML >= 12
     * $query->filterByClass25ml(array('max' => 12)); // WHERE Class25ML <= 12
     * </code>
     *
     * @param     mixed $class25ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass25ml($class25ml = null, $comparison = null)
    {
        if (is_array($class25ml)) {
            $useMinMax = false;
            if (isset($class25ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS25ML, $class25ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class25ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS25ML, $class25ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS25ML, $class25ml, $comparison);
    }

    /**
     * Filter the query on the Class25FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass25fr(1234); // WHERE Class25FR = 1234
     * $query->filterByClass25fr(array(12, 34)); // WHERE Class25FR IN (12, 34)
     * $query->filterByClass25fr(array('min' => 12)); // WHERE Class25FR >= 12
     * $query->filterByClass25fr(array('max' => 12)); // WHERE Class25FR <= 12
     * </code>
     *
     * @param     mixed $class25fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass25fr($class25fr = null, $comparison = null)
    {
        if (is_array($class25fr)) {
            $useMinMax = false;
            if (isset($class25fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS25FR, $class25fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class25fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS25FR, $class25fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS25FR, $class25fr, $comparison);
    }

    /**
     * Filter the query on the Class26ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass26ml(1234); // WHERE Class26ML = 1234
     * $query->filterByClass26ml(array(12, 34)); // WHERE Class26ML IN (12, 34)
     * $query->filterByClass26ml(array('min' => 12)); // WHERE Class26ML >= 12
     * $query->filterByClass26ml(array('max' => 12)); // WHERE Class26ML <= 12
     * </code>
     *
     * @param     mixed $class26ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass26ml($class26ml = null, $comparison = null)
    {
        if (is_array($class26ml)) {
            $useMinMax = false;
            if (isset($class26ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS26ML, $class26ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class26ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS26ML, $class26ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS26ML, $class26ml, $comparison);
    }

    /**
     * Filter the query on the Class26FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass26fr(1234); // WHERE Class26FR = 1234
     * $query->filterByClass26fr(array(12, 34)); // WHERE Class26FR IN (12, 34)
     * $query->filterByClass26fr(array('min' => 12)); // WHERE Class26FR >= 12
     * $query->filterByClass26fr(array('max' => 12)); // WHERE Class26FR <= 12
     * </code>
     *
     * @param     mixed $class26fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass26fr($class26fr = null, $comparison = null)
    {
        if (is_array($class26fr)) {
            $useMinMax = false;
            if (isset($class26fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS26FR, $class26fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class26fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS26FR, $class26fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS26FR, $class26fr, $comparison);
    }

    /**
     * Filter the query on the Class27ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass27ml(1234); // WHERE Class27ML = 1234
     * $query->filterByClass27ml(array(12, 34)); // WHERE Class27ML IN (12, 34)
     * $query->filterByClass27ml(array('min' => 12)); // WHERE Class27ML >= 12
     * $query->filterByClass27ml(array('max' => 12)); // WHERE Class27ML <= 12
     * </code>
     *
     * @param     mixed $class27ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass27ml($class27ml = null, $comparison = null)
    {
        if (is_array($class27ml)) {
            $useMinMax = false;
            if (isset($class27ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS27ML, $class27ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class27ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS27ML, $class27ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS27ML, $class27ml, $comparison);
    }

    /**
     * Filter the query on the Class27FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass27fr(1234); // WHERE Class27FR = 1234
     * $query->filterByClass27fr(array(12, 34)); // WHERE Class27FR IN (12, 34)
     * $query->filterByClass27fr(array('min' => 12)); // WHERE Class27FR >= 12
     * $query->filterByClass27fr(array('max' => 12)); // WHERE Class27FR <= 12
     * </code>
     *
     * @param     mixed $class27fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass27fr($class27fr = null, $comparison = null)
    {
        if (is_array($class27fr)) {
            $useMinMax = false;
            if (isset($class27fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS27FR, $class27fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class27fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS27FR, $class27fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS27FR, $class27fr, $comparison);
    }

    /**
     * Filter the query on the Class28ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass28ml(1234); // WHERE Class28ML = 1234
     * $query->filterByClass28ml(array(12, 34)); // WHERE Class28ML IN (12, 34)
     * $query->filterByClass28ml(array('min' => 12)); // WHERE Class28ML >= 12
     * $query->filterByClass28ml(array('max' => 12)); // WHERE Class28ML <= 12
     * </code>
     *
     * @param     mixed $class28ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass28ml($class28ml = null, $comparison = null)
    {
        if (is_array($class28ml)) {
            $useMinMax = false;
            if (isset($class28ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS28ML, $class28ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class28ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS28ML, $class28ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS28ML, $class28ml, $comparison);
    }

    /**
     * Filter the query on the Class28FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass28fr(1234); // WHERE Class28FR = 1234
     * $query->filterByClass28fr(array(12, 34)); // WHERE Class28FR IN (12, 34)
     * $query->filterByClass28fr(array('min' => 12)); // WHERE Class28FR >= 12
     * $query->filterByClass28fr(array('max' => 12)); // WHERE Class28FR <= 12
     * </code>
     *
     * @param     mixed $class28fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass28fr($class28fr = null, $comparison = null)
    {
        if (is_array($class28fr)) {
            $useMinMax = false;
            if (isset($class28fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS28FR, $class28fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class28fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS28FR, $class28fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS28FR, $class28fr, $comparison);
    }

    /**
     * Filter the query on the Class29ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass29ml(1234); // WHERE Class29ML = 1234
     * $query->filterByClass29ml(array(12, 34)); // WHERE Class29ML IN (12, 34)
     * $query->filterByClass29ml(array('min' => 12)); // WHERE Class29ML >= 12
     * $query->filterByClass29ml(array('max' => 12)); // WHERE Class29ML <= 12
     * </code>
     *
     * @param     mixed $class29ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass29ml($class29ml = null, $comparison = null)
    {
        if (is_array($class29ml)) {
            $useMinMax = false;
            if (isset($class29ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS29ML, $class29ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class29ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS29ML, $class29ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS29ML, $class29ml, $comparison);
    }

    /**
     * Filter the query on the Class29FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass29fr(1234); // WHERE Class29FR = 1234
     * $query->filterByClass29fr(array(12, 34)); // WHERE Class29FR IN (12, 34)
     * $query->filterByClass29fr(array('min' => 12)); // WHERE Class29FR >= 12
     * $query->filterByClass29fr(array('max' => 12)); // WHERE Class29FR <= 12
     * </code>
     *
     * @param     mixed $class29fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass29fr($class29fr = null, $comparison = null)
    {
        if (is_array($class29fr)) {
            $useMinMax = false;
            if (isset($class29fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS29FR, $class29fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class29fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS29FR, $class29fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS29FR, $class29fr, $comparison);
    }

    /**
     * Filter the query on the Class30ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass30ml(1234); // WHERE Class30ML = 1234
     * $query->filterByClass30ml(array(12, 34)); // WHERE Class30ML IN (12, 34)
     * $query->filterByClass30ml(array('min' => 12)); // WHERE Class30ML >= 12
     * $query->filterByClass30ml(array('max' => 12)); // WHERE Class30ML <= 12
     * </code>
     *
     * @param     mixed $class30ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass30ml($class30ml = null, $comparison = null)
    {
        if (is_array($class30ml)) {
            $useMinMax = false;
            if (isset($class30ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS30ML, $class30ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class30ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS30ML, $class30ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS30ML, $class30ml, $comparison);
    }

    /**
     * Filter the query on the Class30FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass30fr(1234); // WHERE Class30FR = 1234
     * $query->filterByClass30fr(array(12, 34)); // WHERE Class30FR IN (12, 34)
     * $query->filterByClass30fr(array('min' => 12)); // WHERE Class30FR >= 12
     * $query->filterByClass30fr(array('max' => 12)); // WHERE Class30FR <= 12
     * </code>
     *
     * @param     mixed $class30fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass30fr($class30fr = null, $comparison = null)
    {
        if (is_array($class30fr)) {
            $useMinMax = false;
            if (isset($class30fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS30FR, $class30fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class30fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS30FR, $class30fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS30FR, $class30fr, $comparison);
    }

    /**
     * Filter the query on the Class31ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass31ml(1234); // WHERE Class31ML = 1234
     * $query->filterByClass31ml(array(12, 34)); // WHERE Class31ML IN (12, 34)
     * $query->filterByClass31ml(array('min' => 12)); // WHERE Class31ML >= 12
     * $query->filterByClass31ml(array('max' => 12)); // WHERE Class31ML <= 12
     * </code>
     *
     * @param     mixed $class31ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass31ml($class31ml = null, $comparison = null)
    {
        if (is_array($class31ml)) {
            $useMinMax = false;
            if (isset($class31ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS31ML, $class31ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class31ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS31ML, $class31ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS31ML, $class31ml, $comparison);
    }

    /**
     * Filter the query on the Class31FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass31fr(1234); // WHERE Class31FR = 1234
     * $query->filterByClass31fr(array(12, 34)); // WHERE Class31FR IN (12, 34)
     * $query->filterByClass31fr(array('min' => 12)); // WHERE Class31FR >= 12
     * $query->filterByClass31fr(array('max' => 12)); // WHERE Class31FR <= 12
     * </code>
     *
     * @param     mixed $class31fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass31fr($class31fr = null, $comparison = null)
    {
        if (is_array($class31fr)) {
            $useMinMax = false;
            if (isset($class31fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS31FR, $class31fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class31fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS31FR, $class31fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS31FR, $class31fr, $comparison);
    }

    /**
     * Filter the query on the Class32ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass32ml(1234); // WHERE Class32ML = 1234
     * $query->filterByClass32ml(array(12, 34)); // WHERE Class32ML IN (12, 34)
     * $query->filterByClass32ml(array('min' => 12)); // WHERE Class32ML >= 12
     * $query->filterByClass32ml(array('max' => 12)); // WHERE Class32ML <= 12
     * </code>
     *
     * @param     mixed $class32ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass32ml($class32ml = null, $comparison = null)
    {
        if (is_array($class32ml)) {
            $useMinMax = false;
            if (isset($class32ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS32ML, $class32ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class32ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS32ML, $class32ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS32ML, $class32ml, $comparison);
    }

    /**
     * Filter the query on the Class32FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass32fr(1234); // WHERE Class32FR = 1234
     * $query->filterByClass32fr(array(12, 34)); // WHERE Class32FR IN (12, 34)
     * $query->filterByClass32fr(array('min' => 12)); // WHERE Class32FR >= 12
     * $query->filterByClass32fr(array('max' => 12)); // WHERE Class32FR <= 12
     * </code>
     *
     * @param     mixed $class32fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass32fr($class32fr = null, $comparison = null)
    {
        if (is_array($class32fr)) {
            $useMinMax = false;
            if (isset($class32fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS32FR, $class32fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class32fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS32FR, $class32fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS32FR, $class32fr, $comparison);
    }

    /**
     * Filter the query on the Class33ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass33ml(1234); // WHERE Class33ML = 1234
     * $query->filterByClass33ml(array(12, 34)); // WHERE Class33ML IN (12, 34)
     * $query->filterByClass33ml(array('min' => 12)); // WHERE Class33ML >= 12
     * $query->filterByClass33ml(array('max' => 12)); // WHERE Class33ML <= 12
     * </code>
     *
     * @param     mixed $class33ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass33ml($class33ml = null, $comparison = null)
    {
        if (is_array($class33ml)) {
            $useMinMax = false;
            if (isset($class33ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS33ML, $class33ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class33ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS33ML, $class33ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS33ML, $class33ml, $comparison);
    }

    /**
     * Filter the query on the Class33FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass33fr(1234); // WHERE Class33FR = 1234
     * $query->filterByClass33fr(array(12, 34)); // WHERE Class33FR IN (12, 34)
     * $query->filterByClass33fr(array('min' => 12)); // WHERE Class33FR >= 12
     * $query->filterByClass33fr(array('max' => 12)); // WHERE Class33FR <= 12
     * </code>
     *
     * @param     mixed $class33fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass33fr($class33fr = null, $comparison = null)
    {
        if (is_array($class33fr)) {
            $useMinMax = false;
            if (isset($class33fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS33FR, $class33fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class33fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS33FR, $class33fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS33FR, $class33fr, $comparison);
    }

    /**
     * Filter the query on the Class34ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass34ml(1234); // WHERE Class34ML = 1234
     * $query->filterByClass34ml(array(12, 34)); // WHERE Class34ML IN (12, 34)
     * $query->filterByClass34ml(array('min' => 12)); // WHERE Class34ML >= 12
     * $query->filterByClass34ml(array('max' => 12)); // WHERE Class34ML <= 12
     * </code>
     *
     * @param     mixed $class34ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass34ml($class34ml = null, $comparison = null)
    {
        if (is_array($class34ml)) {
            $useMinMax = false;
            if (isset($class34ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS34ML, $class34ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class34ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS34ML, $class34ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS34ML, $class34ml, $comparison);
    }

    /**
     * Filter the query on the Class34FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass34fr(1234); // WHERE Class34FR = 1234
     * $query->filterByClass34fr(array(12, 34)); // WHERE Class34FR IN (12, 34)
     * $query->filterByClass34fr(array('min' => 12)); // WHERE Class34FR >= 12
     * $query->filterByClass34fr(array('max' => 12)); // WHERE Class34FR <= 12
     * </code>
     *
     * @param     mixed $class34fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass34fr($class34fr = null, $comparison = null)
    {
        if (is_array($class34fr)) {
            $useMinMax = false;
            if (isset($class34fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS34FR, $class34fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class34fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS34FR, $class34fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS34FR, $class34fr, $comparison);
    }

    /**
     * Filter the query on the Class35ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass35ml(1234); // WHERE Class35ML = 1234
     * $query->filterByClass35ml(array(12, 34)); // WHERE Class35ML IN (12, 34)
     * $query->filterByClass35ml(array('min' => 12)); // WHERE Class35ML >= 12
     * $query->filterByClass35ml(array('max' => 12)); // WHERE Class35ML <= 12
     * </code>
     *
     * @param     mixed $class35ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass35ml($class35ml = null, $comparison = null)
    {
        if (is_array($class35ml)) {
            $useMinMax = false;
            if (isset($class35ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS35ML, $class35ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class35ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS35ML, $class35ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS35ML, $class35ml, $comparison);
    }

    /**
     * Filter the query on the Class35FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass35fr(1234); // WHERE Class35FR = 1234
     * $query->filterByClass35fr(array(12, 34)); // WHERE Class35FR IN (12, 34)
     * $query->filterByClass35fr(array('min' => 12)); // WHERE Class35FR >= 12
     * $query->filterByClass35fr(array('max' => 12)); // WHERE Class35FR <= 12
     * </code>
     *
     * @param     mixed $class35fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass35fr($class35fr = null, $comparison = null)
    {
        if (is_array($class35fr)) {
            $useMinMax = false;
            if (isset($class35fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS35FR, $class35fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class35fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS35FR, $class35fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS35FR, $class35fr, $comparison);
    }

    /**
     * Filter the query on the Class36ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass36ml(1234); // WHERE Class36ML = 1234
     * $query->filterByClass36ml(array(12, 34)); // WHERE Class36ML IN (12, 34)
     * $query->filterByClass36ml(array('min' => 12)); // WHERE Class36ML >= 12
     * $query->filterByClass36ml(array('max' => 12)); // WHERE Class36ML <= 12
     * </code>
     *
     * @param     mixed $class36ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass36ml($class36ml = null, $comparison = null)
    {
        if (is_array($class36ml)) {
            $useMinMax = false;
            if (isset($class36ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS36ML, $class36ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class36ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS36ML, $class36ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS36ML, $class36ml, $comparison);
    }

    /**
     * Filter the query on the Class36FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass36fr(1234); // WHERE Class36FR = 1234
     * $query->filterByClass36fr(array(12, 34)); // WHERE Class36FR IN (12, 34)
     * $query->filterByClass36fr(array('min' => 12)); // WHERE Class36FR >= 12
     * $query->filterByClass36fr(array('max' => 12)); // WHERE Class36FR <= 12
     * </code>
     *
     * @param     mixed $class36fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass36fr($class36fr = null, $comparison = null)
    {
        if (is_array($class36fr)) {
            $useMinMax = false;
            if (isset($class36fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS36FR, $class36fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class36fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS36FR, $class36fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS36FR, $class36fr, $comparison);
    }

    /**
     * Filter the query on the Class37ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass37ml(1234); // WHERE Class37ML = 1234
     * $query->filterByClass37ml(array(12, 34)); // WHERE Class37ML IN (12, 34)
     * $query->filterByClass37ml(array('min' => 12)); // WHERE Class37ML >= 12
     * $query->filterByClass37ml(array('max' => 12)); // WHERE Class37ML <= 12
     * </code>
     *
     * @param     mixed $class37ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass37ml($class37ml = null, $comparison = null)
    {
        if (is_array($class37ml)) {
            $useMinMax = false;
            if (isset($class37ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS37ML, $class37ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class37ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS37ML, $class37ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS37ML, $class37ml, $comparison);
    }

    /**
     * Filter the query on the Class37FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass37fr(1234); // WHERE Class37FR = 1234
     * $query->filterByClass37fr(array(12, 34)); // WHERE Class37FR IN (12, 34)
     * $query->filterByClass37fr(array('min' => 12)); // WHERE Class37FR >= 12
     * $query->filterByClass37fr(array('max' => 12)); // WHERE Class37FR <= 12
     * </code>
     *
     * @param     mixed $class37fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass37fr($class37fr = null, $comparison = null)
    {
        if (is_array($class37fr)) {
            $useMinMax = false;
            if (isset($class37fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS37FR, $class37fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class37fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS37FR, $class37fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS37FR, $class37fr, $comparison);
    }

    /**
     * Filter the query on the Class38ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass38ml(1234); // WHERE Class38ML = 1234
     * $query->filterByClass38ml(array(12, 34)); // WHERE Class38ML IN (12, 34)
     * $query->filterByClass38ml(array('min' => 12)); // WHERE Class38ML >= 12
     * $query->filterByClass38ml(array('max' => 12)); // WHERE Class38ML <= 12
     * </code>
     *
     * @param     mixed $class38ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass38ml($class38ml = null, $comparison = null)
    {
        if (is_array($class38ml)) {
            $useMinMax = false;
            if (isset($class38ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS38ML, $class38ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class38ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS38ML, $class38ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS38ML, $class38ml, $comparison);
    }

    /**
     * Filter the query on the Class38FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass38fr(1234); // WHERE Class38FR = 1234
     * $query->filterByClass38fr(array(12, 34)); // WHERE Class38FR IN (12, 34)
     * $query->filterByClass38fr(array('min' => 12)); // WHERE Class38FR >= 12
     * $query->filterByClass38fr(array('max' => 12)); // WHERE Class38FR <= 12
     * </code>
     *
     * @param     mixed $class38fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass38fr($class38fr = null, $comparison = null)
    {
        if (is_array($class38fr)) {
            $useMinMax = false;
            if (isset($class38fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS38FR, $class38fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class38fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS38FR, $class38fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS38FR, $class38fr, $comparison);
    }

    /**
     * Filter the query on the Class39ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass39ml(1234); // WHERE Class39ML = 1234
     * $query->filterByClass39ml(array(12, 34)); // WHERE Class39ML IN (12, 34)
     * $query->filterByClass39ml(array('min' => 12)); // WHERE Class39ML >= 12
     * $query->filterByClass39ml(array('max' => 12)); // WHERE Class39ML <= 12
     * </code>
     *
     * @param     mixed $class39ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass39ml($class39ml = null, $comparison = null)
    {
        if (is_array($class39ml)) {
            $useMinMax = false;
            if (isset($class39ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS39ML, $class39ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class39ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS39ML, $class39ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS39ML, $class39ml, $comparison);
    }

    /**
     * Filter the query on the Class39FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass39fr(1234); // WHERE Class39FR = 1234
     * $query->filterByClass39fr(array(12, 34)); // WHERE Class39FR IN (12, 34)
     * $query->filterByClass39fr(array('min' => 12)); // WHERE Class39FR >= 12
     * $query->filterByClass39fr(array('max' => 12)); // WHERE Class39FR <= 12
     * </code>
     *
     * @param     mixed $class39fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass39fr($class39fr = null, $comparison = null)
    {
        if (is_array($class39fr)) {
            $useMinMax = false;
            if (isset($class39fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS39FR, $class39fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class39fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS39FR, $class39fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS39FR, $class39fr, $comparison);
    }

    /**
     * Filter the query on the Class40ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass40ml(1234); // WHERE Class40ML = 1234
     * $query->filterByClass40ml(array(12, 34)); // WHERE Class40ML IN (12, 34)
     * $query->filterByClass40ml(array('min' => 12)); // WHERE Class40ML >= 12
     * $query->filterByClass40ml(array('max' => 12)); // WHERE Class40ML <= 12
     * </code>
     *
     * @param     mixed $class40ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass40ml($class40ml = null, $comparison = null)
    {
        if (is_array($class40ml)) {
            $useMinMax = false;
            if (isset($class40ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS40ML, $class40ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class40ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS40ML, $class40ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS40ML, $class40ml, $comparison);
    }

    /**
     * Filter the query on the Class40FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass40fr(1234); // WHERE Class40FR = 1234
     * $query->filterByClass40fr(array(12, 34)); // WHERE Class40FR IN (12, 34)
     * $query->filterByClass40fr(array('min' => 12)); // WHERE Class40FR >= 12
     * $query->filterByClass40fr(array('max' => 12)); // WHERE Class40FR <= 12
     * </code>
     *
     * @param     mixed $class40fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass40fr($class40fr = null, $comparison = null)
    {
        if (is_array($class40fr)) {
            $useMinMax = false;
            if (isset($class40fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS40FR, $class40fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class40fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS40FR, $class40fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS40FR, $class40fr, $comparison);
    }

    /**
     * Filter the query on the Class41ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass41ml(1234); // WHERE Class41ML = 1234
     * $query->filterByClass41ml(array(12, 34)); // WHERE Class41ML IN (12, 34)
     * $query->filterByClass41ml(array('min' => 12)); // WHERE Class41ML >= 12
     * $query->filterByClass41ml(array('max' => 12)); // WHERE Class41ML <= 12
     * </code>
     *
     * @param     mixed $class41ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass41ml($class41ml = null, $comparison = null)
    {
        if (is_array($class41ml)) {
            $useMinMax = false;
            if (isset($class41ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS41ML, $class41ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class41ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS41ML, $class41ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS41ML, $class41ml, $comparison);
    }

    /**
     * Filter the query on the Class41FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass41fr(1234); // WHERE Class41FR = 1234
     * $query->filterByClass41fr(array(12, 34)); // WHERE Class41FR IN (12, 34)
     * $query->filterByClass41fr(array('min' => 12)); // WHERE Class41FR >= 12
     * $query->filterByClass41fr(array('max' => 12)); // WHERE Class41FR <= 12
     * </code>
     *
     * @param     mixed $class41fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass41fr($class41fr = null, $comparison = null)
    {
        if (is_array($class41fr)) {
            $useMinMax = false;
            if (isset($class41fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS41FR, $class41fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class41fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS41FR, $class41fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS41FR, $class41fr, $comparison);
    }

    /**
     * Filter the query on the Class42ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass42ml(1234); // WHERE Class42ML = 1234
     * $query->filterByClass42ml(array(12, 34)); // WHERE Class42ML IN (12, 34)
     * $query->filterByClass42ml(array('min' => 12)); // WHERE Class42ML >= 12
     * $query->filterByClass42ml(array('max' => 12)); // WHERE Class42ML <= 12
     * </code>
     *
     * @param     mixed $class42ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass42ml($class42ml = null, $comparison = null)
    {
        if (is_array($class42ml)) {
            $useMinMax = false;
            if (isset($class42ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS42ML, $class42ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class42ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS42ML, $class42ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS42ML, $class42ml, $comparison);
    }

    /**
     * Filter the query on the Class42FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass42fr(1234); // WHERE Class42FR = 1234
     * $query->filterByClass42fr(array(12, 34)); // WHERE Class42FR IN (12, 34)
     * $query->filterByClass42fr(array('min' => 12)); // WHERE Class42FR >= 12
     * $query->filterByClass42fr(array('max' => 12)); // WHERE Class42FR <= 12
     * </code>
     *
     * @param     mixed $class42fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass42fr($class42fr = null, $comparison = null)
    {
        if (is_array($class42fr)) {
            $useMinMax = false;
            if (isset($class42fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS42FR, $class42fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class42fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS42FR, $class42fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS42FR, $class42fr, $comparison);
    }

    /**
     * Filter the query on the Class43ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass43ml(1234); // WHERE Class43ML = 1234
     * $query->filterByClass43ml(array(12, 34)); // WHERE Class43ML IN (12, 34)
     * $query->filterByClass43ml(array('min' => 12)); // WHERE Class43ML >= 12
     * $query->filterByClass43ml(array('max' => 12)); // WHERE Class43ML <= 12
     * </code>
     *
     * @param     mixed $class43ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass43ml($class43ml = null, $comparison = null)
    {
        if (is_array($class43ml)) {
            $useMinMax = false;
            if (isset($class43ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS43ML, $class43ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class43ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS43ML, $class43ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS43ML, $class43ml, $comparison);
    }

    /**
     * Filter the query on the Class43FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass43fr(1234); // WHERE Class43FR = 1234
     * $query->filterByClass43fr(array(12, 34)); // WHERE Class43FR IN (12, 34)
     * $query->filterByClass43fr(array('min' => 12)); // WHERE Class43FR >= 12
     * $query->filterByClass43fr(array('max' => 12)); // WHERE Class43FR <= 12
     * </code>
     *
     * @param     mixed $class43fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass43fr($class43fr = null, $comparison = null)
    {
        if (is_array($class43fr)) {
            $useMinMax = false;
            if (isset($class43fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS43FR, $class43fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class43fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS43FR, $class43fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS43FR, $class43fr, $comparison);
    }

    /**
     * Filter the query on the Class44ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass44ml(1234); // WHERE Class44ML = 1234
     * $query->filterByClass44ml(array(12, 34)); // WHERE Class44ML IN (12, 34)
     * $query->filterByClass44ml(array('min' => 12)); // WHERE Class44ML >= 12
     * $query->filterByClass44ml(array('max' => 12)); // WHERE Class44ML <= 12
     * </code>
     *
     * @param     mixed $class44ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass44ml($class44ml = null, $comparison = null)
    {
        if (is_array($class44ml)) {
            $useMinMax = false;
            if (isset($class44ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS44ML, $class44ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class44ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS44ML, $class44ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS44ML, $class44ml, $comparison);
    }

    /**
     * Filter the query on the Class44FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass44fr(1234); // WHERE Class44FR = 1234
     * $query->filterByClass44fr(array(12, 34)); // WHERE Class44FR IN (12, 34)
     * $query->filterByClass44fr(array('min' => 12)); // WHERE Class44FR >= 12
     * $query->filterByClass44fr(array('max' => 12)); // WHERE Class44FR <= 12
     * </code>
     *
     * @param     mixed $class44fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass44fr($class44fr = null, $comparison = null)
    {
        if (is_array($class44fr)) {
            $useMinMax = false;
            if (isset($class44fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS44FR, $class44fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class44fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS44FR, $class44fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS44FR, $class44fr, $comparison);
    }

    /**
     * Filter the query on the Class45ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass45ml(1234); // WHERE Class45ML = 1234
     * $query->filterByClass45ml(array(12, 34)); // WHERE Class45ML IN (12, 34)
     * $query->filterByClass45ml(array('min' => 12)); // WHERE Class45ML >= 12
     * $query->filterByClass45ml(array('max' => 12)); // WHERE Class45ML <= 12
     * </code>
     *
     * @param     mixed $class45ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass45ml($class45ml = null, $comparison = null)
    {
        if (is_array($class45ml)) {
            $useMinMax = false;
            if (isset($class45ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS45ML, $class45ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class45ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS45ML, $class45ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS45ML, $class45ml, $comparison);
    }

    /**
     * Filter the query on the Class45FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass45fr(1234); // WHERE Class45FR = 1234
     * $query->filterByClass45fr(array(12, 34)); // WHERE Class45FR IN (12, 34)
     * $query->filterByClass45fr(array('min' => 12)); // WHERE Class45FR >= 12
     * $query->filterByClass45fr(array('max' => 12)); // WHERE Class45FR <= 12
     * </code>
     *
     * @param     mixed $class45fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass45fr($class45fr = null, $comparison = null)
    {
        if (is_array($class45fr)) {
            $useMinMax = false;
            if (isset($class45fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS45FR, $class45fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class45fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS45FR, $class45fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS45FR, $class45fr, $comparison);
    }

    /**
     * Filter the query on the Class46ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass46ml(1234); // WHERE Class46ML = 1234
     * $query->filterByClass46ml(array(12, 34)); // WHERE Class46ML IN (12, 34)
     * $query->filterByClass46ml(array('min' => 12)); // WHERE Class46ML >= 12
     * $query->filterByClass46ml(array('max' => 12)); // WHERE Class46ML <= 12
     * </code>
     *
     * @param     mixed $class46ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass46ml($class46ml = null, $comparison = null)
    {
        if (is_array($class46ml)) {
            $useMinMax = false;
            if (isset($class46ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS46ML, $class46ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class46ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS46ML, $class46ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS46ML, $class46ml, $comparison);
    }

    /**
     * Filter the query on the Class46FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass46fr(1234); // WHERE Class46FR = 1234
     * $query->filterByClass46fr(array(12, 34)); // WHERE Class46FR IN (12, 34)
     * $query->filterByClass46fr(array('min' => 12)); // WHERE Class46FR >= 12
     * $query->filterByClass46fr(array('max' => 12)); // WHERE Class46FR <= 12
     * </code>
     *
     * @param     mixed $class46fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass46fr($class46fr = null, $comparison = null)
    {
        if (is_array($class46fr)) {
            $useMinMax = false;
            if (isset($class46fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS46FR, $class46fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class46fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS46FR, $class46fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS46FR, $class46fr, $comparison);
    }

    /**
     * Filter the query on the Class47ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass47ml(1234); // WHERE Class47ML = 1234
     * $query->filterByClass47ml(array(12, 34)); // WHERE Class47ML IN (12, 34)
     * $query->filterByClass47ml(array('min' => 12)); // WHERE Class47ML >= 12
     * $query->filterByClass47ml(array('max' => 12)); // WHERE Class47ML <= 12
     * </code>
     *
     * @param     mixed $class47ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass47ml($class47ml = null, $comparison = null)
    {
        if (is_array($class47ml)) {
            $useMinMax = false;
            if (isset($class47ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS47ML, $class47ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class47ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS47ML, $class47ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS47ML, $class47ml, $comparison);
    }

    /**
     * Filter the query on the Class47FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass47fr(1234); // WHERE Class47FR = 1234
     * $query->filterByClass47fr(array(12, 34)); // WHERE Class47FR IN (12, 34)
     * $query->filterByClass47fr(array('min' => 12)); // WHERE Class47FR >= 12
     * $query->filterByClass47fr(array('max' => 12)); // WHERE Class47FR <= 12
     * </code>
     *
     * @param     mixed $class47fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass47fr($class47fr = null, $comparison = null)
    {
        if (is_array($class47fr)) {
            $useMinMax = false;
            if (isset($class47fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS47FR, $class47fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class47fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS47FR, $class47fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS47FR, $class47fr, $comparison);
    }

    /**
     * Filter the query on the Class48ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass48ml(1234); // WHERE Class48ML = 1234
     * $query->filterByClass48ml(array(12, 34)); // WHERE Class48ML IN (12, 34)
     * $query->filterByClass48ml(array('min' => 12)); // WHERE Class48ML >= 12
     * $query->filterByClass48ml(array('max' => 12)); // WHERE Class48ML <= 12
     * </code>
     *
     * @param     mixed $class48ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass48ml($class48ml = null, $comparison = null)
    {
        if (is_array($class48ml)) {
            $useMinMax = false;
            if (isset($class48ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS48ML, $class48ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class48ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS48ML, $class48ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS48ML, $class48ml, $comparison);
    }

    /**
     * Filter the query on the Class48FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass48fr(1234); // WHERE Class48FR = 1234
     * $query->filterByClass48fr(array(12, 34)); // WHERE Class48FR IN (12, 34)
     * $query->filterByClass48fr(array('min' => 12)); // WHERE Class48FR >= 12
     * $query->filterByClass48fr(array('max' => 12)); // WHERE Class48FR <= 12
     * </code>
     *
     * @param     mixed $class48fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass48fr($class48fr = null, $comparison = null)
    {
        if (is_array($class48fr)) {
            $useMinMax = false;
            if (isset($class48fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS48FR, $class48fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class48fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS48FR, $class48fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS48FR, $class48fr, $comparison);
    }

    /**
     * Filter the query on the Class49ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass49ml(1234); // WHERE Class49ML = 1234
     * $query->filterByClass49ml(array(12, 34)); // WHERE Class49ML IN (12, 34)
     * $query->filterByClass49ml(array('min' => 12)); // WHERE Class49ML >= 12
     * $query->filterByClass49ml(array('max' => 12)); // WHERE Class49ML <= 12
     * </code>
     *
     * @param     mixed $class49ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass49ml($class49ml = null, $comparison = null)
    {
        if (is_array($class49ml)) {
            $useMinMax = false;
            if (isset($class49ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS49ML, $class49ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class49ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS49ML, $class49ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS49ML, $class49ml, $comparison);
    }

    /**
     * Filter the query on the Class49FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass49fr(1234); // WHERE Class49FR = 1234
     * $query->filterByClass49fr(array(12, 34)); // WHERE Class49FR IN (12, 34)
     * $query->filterByClass49fr(array('min' => 12)); // WHERE Class49FR >= 12
     * $query->filterByClass49fr(array('max' => 12)); // WHERE Class49FR <= 12
     * </code>
     *
     * @param     mixed $class49fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass49fr($class49fr = null, $comparison = null)
    {
        if (is_array($class49fr)) {
            $useMinMax = false;
            if (isset($class49fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS49FR, $class49fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class49fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS49FR, $class49fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS49FR, $class49fr, $comparison);
    }

    /**
     * Filter the query on the Class50ML column
     *
     * Example usage:
     * <code>
     * $query->filterByClass50ml(1234); // WHERE Class50ML = 1234
     * $query->filterByClass50ml(array(12, 34)); // WHERE Class50ML IN (12, 34)
     * $query->filterByClass50ml(array('min' => 12)); // WHERE Class50ML >= 12
     * $query->filterByClass50ml(array('max' => 12)); // WHERE Class50ML <= 12
     * </code>
     *
     * @param     mixed $class50ml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass50ml($class50ml = null, $comparison = null)
    {
        if (is_array($class50ml)) {
            $useMinMax = false;
            if (isset($class50ml['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS50ML, $class50ml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class50ml['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS50ML, $class50ml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS50ML, $class50ml, $comparison);
    }

    /**
     * Filter the query on the Class50FR column
     *
     * Example usage:
     * <code>
     * $query->filterByClass50fr(1234); // WHERE Class50FR = 1234
     * $query->filterByClass50fr(array(12, 34)); // WHERE Class50FR IN (12, 34)
     * $query->filterByClass50fr(array('min' => 12)); // WHERE Class50FR >= 12
     * $query->filterByClass50fr(array('max' => 12)); // WHERE Class50FR <= 12
     * </code>
     *
     * @param     mixed $class50fr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByClass50fr($class50fr = null, $comparison = null)
    {
        if (is_array($class50fr)) {
            $useMinMax = false;
            if (isset($class50fr['min'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS50FR, $class50fr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($class50fr['max'])) {
                $this->addUsingAlias(PoplfdataPeer::CLASS50FR, $class50fr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::CLASS50FR, $class50fr, $comparison);
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
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PoplfdataPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PoplfdataPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplfdataPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Poplfdata $poplfdata Object to remove from the list of results
     *
     * @return PoplfdataQuery The current query, for fluid interface
     */
    public function prune($poplfdata = null)
    {
        if ($poplfdata) {
            $this->addUsingAlias(PoplfdataPeer::AUTOCTR, $poplfdata->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
