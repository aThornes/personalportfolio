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
                "description" => 'Database communication library built with encryption methods, settings and file handler',
                "full_description" => 'A C# Library built to allow an application to establish a connection with a database. 
                The library provides simple communication commands, validates command variables and provides an editable system settings file.
                Built as part of a personal multi-platform application project that is currently still in progress.'
            ),
            "2" => Array(
                "header" => 'Optical Simulation',
                "image" => 'final_year_project.png',
                "description" => 'Simulation of a non-linear optical process created as part of my final year project at univeristy',
                "full_description" => 'An application providing the user with the means to run a simulation of the non-linear optical process known 
                as high harmonic generation. It provides a simple yet effective console interface allowing the user to call specific parts of the simulation and 
                evaluate various relationships such how laser intensity affects maximum harmonic generated.'
            ),
            "3" => Array(
                "header" => 'The Stars, Jupiter & Me',
                "image" => 'stars_jupiter_me.png',
                "description" => 'A 2-D shooter created as part of a game-jam event, Three Thing game. Created as part of a team',
                "full_description" => ''
            ),
            "4" => Array(
                "header" => 'Placeholder',
                "image" => 'placeholder.png',
                "description" => 'Placeholder description, don\'t read!',
                "full_description" => 'Placeholder full description'
            )
        ); 
        return view('index', compact('path', 'iter', 'projectData'));
    }   
}
