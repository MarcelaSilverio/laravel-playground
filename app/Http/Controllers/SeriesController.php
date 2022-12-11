<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) 
    {
        $series = Serie::query()->orderBy('nome')->get();
        $success = session('message.success');

        return view('series.index')->with('series', $series)
            ->with('success', $success);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $series = Serie::create($request->all());

        return to_route('series.index')
            ->with('message.success', "Série '{$series->nome}' adicionada com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')
            ->with('series', $series);
    }

    public function update(Serie $series, Request $request)
    {
        $series->update($request->all());

        return to_route('series.index')
            ->with('message.success', "Série {$series->nome} atualizada com sucesso");
    }

    public function destroy(Serie $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('message.success', "Série '{$series->nome}' removida com sucesso");
    }
}
