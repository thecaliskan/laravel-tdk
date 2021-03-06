<?php

namespace TheCaliskan\TDK;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class TDK
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected $app;

    /**
     * The Laravel HTTP Client.
     *
     * @var PendingRequest
     */
    protected $client;

    /**
     * Create a new Payment instance.
     *
     * @param Application $app
     *
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;

        $this->client = Http::baseUrl('https://sozluk.gov.tr');
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByCurrentTurkishDictionary(string $word)
    {
        return $this->client->get('/gts', [
            'ara' => $word,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByWesternOriginDictionary(string $word)
    {
        return $this->client->get('/bati', [
            'ara' => $word,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByScanDictionary(string $word)
    {
        return $this->client->get('/tarama', [
            'ara' => $word,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByCompilationDictionary(string $word)
    {
        return $this->client->get('/derleme', [
            'ara' => $word,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByProverbDictionary(string $word)
    {
        return $this->client->get('/atasozu', [
            'ara' => $word,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByForeignWordProvisionsGuide(string $word)
    {
        return $this->client->get('/kilavuz', [
            'ara' => $word,
            'prm' => 'ysk',
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByFrequentlyConfusedWordsGuide(string $word)
    {
        return $this->client->get('/kilavuz', [
            'ara' => $word,
            'prm' => 'sks',
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByCommonMistakesGuide(string $word)
    {
        return $this->client->get('/kilavuz', [
            'ara' => $word,
            'prm' => 'syyd',
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     * @param string $science
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByScienceAndArtTermsDictionary(string $word, string $science = 'tümü')
    {
        return $this->client->get('/terim', [
            'ara'     => $word,
            'eser_ad' => $science,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByNursingTermsDictionary(string $word)
    {
        return $this->client->get('/hemsirelik', [
            'ara' => $word,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByMedicineAndPharmacyTermsDictionary(string $word)
    {
        return $this->client->get('/eczacilik', [
            'ara' => $word,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function searchByInternationalMetrologyDictionary(string $word)
    {
        return $this->client->get('/metroloji', [
            'ara' => $word,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     * @param int    $by
     * @param int    $gender
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function person(string $word, int $by, int $gender)
    {
        return $this->client->get('/adlar', [
            'ara'  => $word,
            'gore' => $by,
            'cins' => $gender,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function personByName(string $word)
    {
        return $this->person($word, 1, 4);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function personByWomanName(string $word)
    {
        return $this->person($word, 1, 1);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function personByManName(string $word)
    {
        return $this->person($word, 1, 2);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function personByMeaning(string $word)
    {
        return $this->person($word, 2, 4);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function personByWomanMeaning(string $word)
    {
        return $this->person($word, 2, 1);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function personByManMeaning(string $word)
    {
        return $this->person($word, 2, 2);
    }

    /**
     * @param string $word
     * @param int    $dialect
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionary(string $word, int $dialect = 0)
    {
        return $this->client->get('/lehceler', [
            'ara' => $word,
        ] + ($dialect ? ['lehce' => $dialect] : []))->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionaryByTurkeyTurkish(string $word)
    {
        return $this->comparativeDialectsDictionary($word, 1);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionaryByKazakhTurkish(string $word)
    {
        return $this->comparativeDialectsDictionary($word, 2);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionaryByUzbekTurkish(string $word)
    {
        return $this->comparativeDialectsDictionary($word, 3);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionaryByAzerbaijaniTurkish(string $word)
    {
        return $this->comparativeDialectsDictionary($word, 4);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionaryByUighurTurkish(string $word)
    {
        return $this->comparativeDialectsDictionary($word, 5);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionaryByBashkirTurkish(string $word)
    {
        return $this->comparativeDialectsDictionary($word, 6);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionaryByTatarTurkish(string $word)
    {
        return $this->comparativeDialectsDictionary($word, 7);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionaryByTurkmenTurkish(string $word)
    {
        return $this->comparativeDialectsDictionary($word, 8);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionaryByKyrgyzTurkish(string $word)
    {
        return $this->comparativeDialectsDictionary($word, 9);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function comparativeDialectsDictionaryByRussian(string $word)
    {
        return $this->comparativeDialectsDictionary($word, 10);
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function suggestions(string $word)
    {
        return $this->client->get('/oneri', [
            'soz' => $word,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $word
     *
     * @throws TDKException|RequestException
     *
     * @return array
     */
    public function spelling(string $word)
    {
        return $this->client->get('/yazim', [
            'ara' => $word,
        ])->tdkThrow()->json();
    }

    /**
     * @param string $soundID
     *
     * @throws RequestException
     *
     * @return string
     */
    public function sound(string $soundID)
    {
        return $this->client->get("/ses/$soundID.wav")->throw()->body();
    }
}
