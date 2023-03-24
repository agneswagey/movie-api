<?php

namespace Agneswagey\MovieApi\App;

class Config
{
    private static string $API_URL = 'http://omdbapi.com';
    private static string $API_KEY = '5437ab1d';

    public function getUrl(): string
    {
        return self::$API_URL;
    }

    public function getApiKey(): string
    {
        return self::$API_KEY;
    }

    public function getApiUrl(): string
    {
        return $this->getUrl() . "?apikey=" . $this->getApiKey();
    }
}