<?php

require __DIR__ . '/vendor/autoload.php';

function get_random_url($csvPath) {
    $fh = fopen($csvPath, 'r');

    $rows = [];

    while ($row = fgetcsv($fh)) {
        $rows[] = 'http://' . $row[1];
    }

    $index = mt_rand(0, count($rows) - 1);

    return $rows[$index];
}

function visit_url($url) {
    try {
        $statusCode = (new GuzzleHttp\Client())->get($url)->getStatusCode();
        output_result($url, $statusCode);
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        output_result($url, $e->getResponse()->getStatusCode());
    }
}

function output_result($url, $statusCode) {
    echo 'Visited ' . $url . ' [' . $statusCode . ']' . PHP_EOL;
}

$csvPath = __DIR__ . '/top500.domains.11.16.csv';
visit_url(get_random_url($csvPath));
