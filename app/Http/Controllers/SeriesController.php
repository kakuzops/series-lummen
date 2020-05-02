<?php

namespace App\Http\Controllers;

use App\Model\Serie;
use Laravel\Lumen\Routing\Controller as BaseController;

class SeriesController extends BaseController
{
    public function index()
    {
        return Serie::all();
    }

    public function store(Resquest $request)
    {
        return response()
            ->json(
                Serie::create(['nome' => $request->nome]), 201
            );
    }

    public function get(int $id)
    {
        $serie = Serie::find($id);
        if(is_null($serie)){
            return response()->json($serie, 204);
        }
        return response()->json($serie, 404);
    }
}
