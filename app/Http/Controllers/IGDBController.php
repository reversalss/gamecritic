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
                'order' => 'hypes:desc',
                'limit' => 21,
                'fields' => 'id,name,rating,genres.name,platforms.abbreviation, cover; where first_release_date > 1664575200 & rating > 10'
            ]
        ]);

        $games = json_decode($response->getBody());
        

        
        $cover_ids = [];
        foreach ($games as $game)
        {
            $cover_ids[$game->id] = $game->cover;
        }



        $cover_response = $client->get('https://api.igdb.com/v4/covers', [
            'headers' => [
                'Accept' => 'application/json',
                'Client-ID' => env("CLIENTID"),
                'Authorization' => 'Bearer '.env("APIKEY")
            ],
            'query' => [
                'limit' => count($cover_ids),
                'fields' => 'url, game; where id=('.implode(',',$cover_ids).')'
            ]
        ]);


        $covers = json_decode($cover_response->getBody());    


        return view('home', ['games' => $games, 'covers' => $covers]);

    }
}