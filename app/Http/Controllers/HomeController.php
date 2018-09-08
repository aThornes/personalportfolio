<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $path = url('/images') . '/';
        $iter = 1;
        $projectData = array(
            "1" => Array(
                "header" => 'Database Library',
                "image" => 'database_library.png',
                "description" => 'Database communication library built with encryption methods, settings and file handler'
            ),
            "2" => Array(
                "header" => 'Optical Simulation',
                "image" => 'final_year_project.png',
                "description" => 'Simulation of a non-linear optical process created as part of my final year project at univeristy.'
            ),
            "3" => Array(
                "header" => 'The Stars, Jupiter & Me',
                "image" => 'stars_jupiter_me.png',
                "description" => 'A 2-D shooter created as part of a game-jam event, Three Thing game. Created as part of a team'
            ),
            "4" => Array(
                "header" => 'Placeholder',
                "image" => 'placeholder.png',
                "description" => 'Placeholder description, don\'t readt!'
            )
        ); 
        return view('index', compact('path', 'iter', 'projectData'));
    }   
}
