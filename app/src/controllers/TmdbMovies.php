<?php

namespace App\controllers;

use GuzzleHttp\Client;

class TmdbMovies
{
    /**
     * @return mixed
     */
    public function getMovies()
    {
        $client = new Client();
        //$result = $client->get('https://api.themoviedb.org/3/movie/551?api_key=e3c790bdb811cade513e875f4806841d');
        $result = $client->get('http://test.digipluggen.nl/denis_response_1.json');
        return json_decode($result->getBody(), true);
    }
}