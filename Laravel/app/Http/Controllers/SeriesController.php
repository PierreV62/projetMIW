<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Serie;

class SeriesController extends Controller
{
    public function getSerie($serie_id){

       $serie = Serie::with('seasons.episodes.actors')->findOrFail($serie_id);

     // if(!$series)abort(404);

        $data=[
            'serie' => $serie,
            'page_title' => $serie->title
        ];

        return view('serie', $data);
    }

    public function getSeason($season_id){

        $season = Serie::findOrFail($season_id);

        // if(!$series)abort(404);

        $data=[
            'season' => $season,
            'page_title' => ('Saison ' . $season->season_number .'de la série...'),
        ];

        return view('season', $data);
    }
}
