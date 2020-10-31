<?php

namespace TheCaliskan\TDK\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array searchByCurrentTurkishDictionary(string $word)
 * @method static array searchByWesternOriginDictionary(string $word)
 * @method static array searchByScanDictionary(string $word)
 * @method static array searchByCompilationDictionary(string $word)
 * @method static array searchByProverbDictionary(string $word)
 * @method static array searchByForeignWordProvisionsGuide(string $word)
 * @method static array searchByFrequentlyConfusedWordsGuide(string $word)
 * @method static array searchByCommonMistakesGuide(string $word)
 * @method static array searchByScienceAndArtTermsDictionary(string $word)
 * @method static array searchByNursingTermsDictionary(string $word)
 * @method static array searchByMedicineAndPharmacyTermsDictionary(string $word)
 * @method static array searchByInternationalMetrologyDictionary(string $word)
 * @method static array person(string $word, int $by, int $gender)
 * @method static array personByName(string $word)
 * @method static array personByWomanName(string $word)
 * @method static array personByManName(string $word)
 * @method static array personByMeaning(string $word)
 * @method static array personByWomanMeaning(string $word)
 * @method static array personByManMeaning(string $word)
 * @method static array comparativeDialectsDictionary(string $word, int $dialect = 0)
 * @method static array comparativeDialectsDictionaryByTurkeyTurkish(string $word)
 * @method static array comparativeDialectsDictionaryByKazakhTurkish(string $word)
 * @method static array comparativeDialectsDictionaryByUzbekTurkish(string $word)
 * @method static array comparativeDialectsDictionaryByAzerbaijaniTurkish(string $word)
 * @method static array comparativeDialectsDictionaryByUighurTurkish(string $word)
 * @method static array comparativeDialectsDictionaryByBashkirTurkish(string $word)
 * @method static array comparativeDialectsDictionaryByTatarTurkish(string $word)
 * @method static array comparativeDialectsDictionaryByTurkmenTurkish(string $word)
 * @method static array comparativeDialectsDictionaryByKyrgyzTurkish(string $word)
 * @method static array comparativeDialectsDictionaryByRussian(string $word)
 * @method static array suggestions(string $word)
 * @method static array spelling(string $word)
 * @method static string sound(string $soundID)
 *
 * @see \TheCaliskan\TDK\TDK
 */
class TDK extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'thecaliskan-tdk';
    }
}
