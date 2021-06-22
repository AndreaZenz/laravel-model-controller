<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MovieModel;

class MovieController extends Controller
{
    function index() {
        $data = [
            "movies" => MovieModel::all()
        ];
        return view("movie", $data);
    }
}
