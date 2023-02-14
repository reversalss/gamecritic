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
                'Client-ID' => '7xcr34x70bianj4wea8j4pnqzzb8e4',
                'Authorization' => 'Bearer ysbyzl7wn844ukov8jvpb09y4q6d91'
            ],
            'query' => [
                'order' => 'popularity:desc',
                'limit' => 20,
                'fields' => 'name,rating,genres.name,platforms.abbreviation,cover'
            ]
        ]);

        $games = json_decode($response->getBody());

        

        return view('home', ['games' => $games]);

    }


}