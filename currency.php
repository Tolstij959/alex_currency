<?php

function makeRequest(string $method, array $params = []): array
{
    if ($method !== 'currency_list' && $method !== 'rates') {
        throw new \InvalidArgumentException('Invalid method. Supports only: currency_list or rates');
    }

    $apiKey = API_KEY;

    $plainParams = '';
    foreach ($params as $key => $value) {
        $plainParams .= "&{$key}={$value}";
    }

    $response = file_get_contents("https://currate.ru/api/?get={$method}&key={$apiKey}{$plainParams}");

    if ($response === false) {
        throw new \RuntimeException('Cannot make request');
    }

    $json = json_decode($response, true);

    if ($json === null) {
        throw new \RuntimeException(sprintf('Cannot decode json response: %s', $response));
    }

    $result = $json['data'] ?? null;

    if ($result === null) {
        throw new \RuntimeException(sprintf('Response has not data key. Response body: %s', $response));
    }

    return $result;
}

$pairs = makeRequest('currency_list');
$rates = makeRequest('rates', ['pairs' => implode(',', $pairs, )]);
//$pairs = file_get_contents('https://currate.ru/api/?get=currency_list&key=83c9c0f6e1575afe82f80bbf15973264');

foreach ($rates as $key => $value) {
    echo "<pre><b>{$key}:{$value}</pre>";
};
?>