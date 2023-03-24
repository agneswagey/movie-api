<?php

namespace Agneswagey\MovieApi\Controller;

use Agneswagey\MovieApi\App\Config;

class Api
{
    private function getApi($path)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => (new Config())->getApiUrl() . $path,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ]);

        $rawResponse = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($rawResponse, true);
        }
    }

    public function getMovieById($movieId)
    {
        return $this->getApi("&i=" . $movieId . "&plot=full");
    }

    public function getMovieByTitle($keyword)
    {
        return $this->getApi("&s=" . $keyword);
    }
}