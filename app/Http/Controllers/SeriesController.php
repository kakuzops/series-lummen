<?php

namespace App\Http\Controllers;

use App\Serie;
use Laravel\Lumen\Routing\Controller as BaseController;

class SeriesController extends BaseController
{
    function index()
    {
        return Serie::all();
    }
}
