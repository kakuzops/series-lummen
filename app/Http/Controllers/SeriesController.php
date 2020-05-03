<?php

namespace App\Http\Controllers;

use App\Model\Serie;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class SeriesController extends BaseController
{
    public function index()
    {
        return Serie::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(
                Serie::create($request->all()), 201
            );
    }

    public function show(int $id)
    {
        $serie = Serie::find($id);
        if(is_null($serie)){
            return response()->json($serie, 204);
        }
        return response()->json($serie, 404);
    }

    public function update(int $id, Request $request)
    {
        $serie = Serie::find($id);
        if(is_null($serie)) {
            return response()->json('Serie Não encontrada', 404);
        }
        $serie->fill($request->all());
        $serie->save();

        return $serie;
    }

    public function destroy(int $id, Request $request)
    {
        $serie = Serie::find($request->id);
        $serie->delete();
        if (is_null($serie)) {
            return response()->json('Serie Não encontrada', 404);
        }
        return $serie;
    }
}
