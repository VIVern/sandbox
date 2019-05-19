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
        $result = $client->get('https://api.themoviedb.org/3/movie/551?api_key=' . getenv("TMDB_API_KEY"));
        return json_decode($result->getBody(), true);
    }
}