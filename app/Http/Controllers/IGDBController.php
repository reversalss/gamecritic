<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class IGDBController extends Controller
{
    //


    public function getTopGames()
    {
        $client = new Client();

        $response = $client->get('https://api.igdb.com/v4/games/', [
            'headers' => [
                'Accept' => 'application/json',
                'Client-ID' => env("CLIENTID"),
                'Authorization' => 'Bearer '.env("APIKEY")
            ],
            'query' => [
                'order' => 'rating:desc',
                'limit' => 20,
                'fields' => 'id,name,rating,genres.name,platforms.abbreviation,cover'
            ]
        ]);

        $games = json_decode($response->getBody());
    


        return view('home', ['games' => $games]);

    }


}