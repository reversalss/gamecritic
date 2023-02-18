<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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
                'limit' => 50,
                'fields' => 'id,name,total_rating,genres.name,cover.url; where first_release_date > '.strtotime("-5 months").' & total_rating > 10 & hypes > 1'
            ]
        ]);

        $games = json_decode($response->getBody());
    
        return view('home', ['games' => $games]);

    }



    public function getgame($id)
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
                'limit' => 1,
                'fields' => 'id,name,total_rating,genres.name,platforms.abbreviation,cover.url,first_release_date,franchise,game_engines.name,screenshots.url,summary; where id = '.$id
            ]
        ]);

        $game = json_decode($response->getBody());

        return view('game', ['game' => $game[0]]);
    }





}