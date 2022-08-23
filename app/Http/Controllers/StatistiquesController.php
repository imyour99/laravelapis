<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistiquesController extends Controller
{
    //

    public function statistiques()
    {
        return view('statistiques.statistiques_index');
    }
}
