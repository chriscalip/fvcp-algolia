<?php

// composer autoload
require __DIR__ . '/vendor/autoload.php';

// if you are not using composer
// require_once 'path/to/algoliasearch.php';

$client = new \AlgoliaSearch\Client('HSTS7HGC3T', '191ab2220b39dbc73ba9792a4a8acced');
$batch = json_decode(file_get_contents('contacts.json'), true);
$index = $client->initIndex('contacts');
$index->addObjects($batch);

echo "Done adding contacts";
