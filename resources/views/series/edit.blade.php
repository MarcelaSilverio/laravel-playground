<x-layout title="Editar Série {{ $series->nome }}">
    <x-series.form :action="route('series.update', $series->id)" :name="$series->nome"/>
</x-layout>