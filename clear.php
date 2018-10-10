<?php

// composer autoload
require __DIR__ . '/vendor/autoload.php';

// if you are not using composer
// require_once 'path/to/algoliasearch.php';

$client = new \AlgoliaSearch\Client('HSTS7HGC3T', '191ab2220b39dbc73ba9792a4a8acced');

$index = $client->initIndex('contacts');
$index->clearIndex();

// $index->deleteObjects(["myID1", "myID2"]);
// $index->deleteObject('myID');

echo "Done clearing contacts";
