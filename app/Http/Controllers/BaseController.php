<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController
{

    protected $classe;

    public function index(Request $request)
    {
        return $this->classe::paginate();
    }

    public function store(Request $request)
    {
        return response()
            ->json(
                $this->classe::create($request->all()),
                201
            );
    }

    public function show(int $id)
    {
        $recurso = $this->classe::find($id);
        if (is_null($recurso)) {
            return response()->json($recurso, 204);
        }
        return response()->json($recurso, 404);
    }

    public function update(int $id, Request $request)
    {
        $recurso = $this->classe::find($id);
        if (is_null($recurso)) {
            return response()->json('recurso Não encontrada', 404);
        }
        $recurso->fill($request->all());
        $recurso->save();

        return $recurso;
    }

    public function destroy(int $id, Request $request)
    {
        $recurso = $this->classe::find($request->id);
        if (is_null($recurso)) {
            return response()->json('recurso Não encontrada', 404);
        }
        $recurso->delete();
        return $recurso;
    }
}
