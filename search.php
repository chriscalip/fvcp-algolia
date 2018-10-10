<?php

// composer autoload
require __DIR__ . '/vendor/autoload.php';

// if you are not using composer
// require_once 'path/to/algoliasearch.php';

$client = new \AlgoliaSearch\Client('HSTS7HGC3T', '191ab2220b39dbc73ba9792a4a8acced');

$index = $client->initIndex('contacts');

// without search parameters
$test1 = $index->search('Chicago');

echo count($test1) . ' hits for query Chicago' . PHP_EOL;

// with search parameters
$searchCompanies = $index->search('Chicago', ['attributesToRetrieve' => ['company',], 'hitsPerPage' => 50]);

echo 'Companies in Chicago' . PHP_EOL;
var_dump(array_column($searchCompanies['hits'], 'company'));

