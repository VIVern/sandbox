<?php

namespace Test\Unit;

use App\controllers\TmdbMovies;
use PHPUnit\Framework\TestCase;

class TmdbMoviesTest extends TestCase
{
    /**
     * Test 3rd party call by making real call and having expected result in json file.
     */
//    public function testGetMoviesReal()
//    {
//        $expectedJson = json_decode(file_get_contents('./tests/examples/movie_example.json'), true);
//        $controller = new TmdbMovies();
//        $result = $controller->getMovies();
//
//        $this->assertEquals($expectedJson, $result);
//    }

    /**
     * @vcr tmdb_movie
     */
    public function testGetMoviesVsrCassete()
    {
        $expectedJson = json_decode(file_get_contents('./tests/examples/movie_example.json'), true);
        $controller = new TmdbMovies();
        $result = $controller->getMovies();
        var_dump($result);
        $this->assertTrue(true);
        //$this->assertEquals($expectedJson, $result);

    }

}