# Laravel TDK API

This is the Laravel TDK API. This Repository contains methods for easily interacting. Below are examples to get you started.

[![Latest Version](https://img.shields.io/github/release/thecaliskan/laravel-tdk.svg?style=flat-square)](https://github.com/thecaliskan/laravel-tdk/releases)
[![Build Status](https://img.shields.io/travis/thecaliskan/laravel-tdk/master.svg?style=flat-square)](https://travis-ci.org/thecaliskan/laravel-tdk)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/thecaliskan/laravel-tdk.svg?style=flat-square)](https://scrutinizer-ci.com/g/thecaliskan/laravel-tdk)
[![Quality Score](https://img.shields.io/scrutinizer/g/thecaliskan/laravel-tdk.svg?style=flat-square)](https://scrutinizer-ci.com/g/thecaliskan/laravel-tdk)
[![Total Downloads](https://img.shields.io/packagist/dt/thecaliskan/laravel-tdk.svg?style=flat-square)](https://packagist.org/packages/thecaliskan/laravel-tdk)

## Installation

To install the SDK, you will need to be using [Composer](http://getcomposer.org/) 
in your project. 
If you aren't using Composer yet, it's really simple! Here's how to install 
composer:

```bash
curl -sS https://getcomposer.org/installer | php
```

You can install the package via composer:

```bash
composer require thecaliskan/laravel-tdk
```

## Usage

You should always use Composer autoloader in your application to automatically load
your dependencies. All the examples below assume you've already included this in your
file:

```php
require 'vendor/autoload.php';

use TheCaliskan\TDK\Facades\TDK;

TDK::searchByCurrentTurkishDictionary('al');
TDK::searchByWesternOriginDictionary('bilanço');
TDK::searchByScanDictionary('bilanço');
TDK::searchByCompilationDictionary('al');
TDK::searchByProverbDictionary('yılan');
TDK::searchByForeignWordProvisionsGuide('avans');
TDK::searchByFrequentlyConfusedWordsGuide('fani');
TDK::searchByCommonMistakesGuide('itibariyle');
TDK::searchByScienceAndArtTermsDictionary('al');
TDK::searchByInternationalMetrologyDictionary('ölçüm');
TDK::person('emre',1,2);
TDK::personByName('emre');
TDK::personByWomanName('pelin');
TDK::personByManName('emre');
TDK::personByMeaning('tutkun');
TDK::personByWomanMeaning('yapraklarında');
TDK::personByManMeaning('tutkun');
TDK::comparativeDialectsDictionary('al');
TDK::comparativeDialectsDictionaryByTurkeyTurkish('al');
TDK::comparativeDialectsDictionaryByKazakhTurkish('al');
TDK::comparativeDialectsDictionaryByUzbekTurkish('küç');
TDK::comparativeDialectsDictionaryByAzerbaijaniTurkish('al');
TDK::comparativeDialectsDictionaryByUighurTurkish('al');
TDK::comparativeDialectsDictionaryByBashkirTurkish('al');
TDK::comparativeDialectsDictionaryByTatarTurkish('al');
TDK::comparativeDialectsDictionaryByTurkmenTurkish('al');
TDK::comparativeDialectsDictionaryByKyrgyzTurkish('al');
TDK::comparativeDialectsDictionaryByRussian('on');
TDK::suggestions('al');
TDK::spelling('al');

Storage::put('a2015.wav',TDK::sound('a2015'));

```

## Contribute

This Repository is an Open Source under the MIT license. It is, thus, maintained by collaborators and contributors.

Feel free to contribute in any way. As an example you may: 
* Trying out the `main` code
* Create issues if you find problems
* Reply to other people's issues
* Review PRs



## License

The Laravel TDK API is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
