<?php

namespace App\Http\Livewire;

use App\Models\Director;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Movie;

class MovieTable extends DataTableComponent
{
    /* public array $bulkActions = [
        'exportSelected' => 'Export',
    ]; */

    public function columns(): array
    {
        return [
            Column::make('Title')
                ->sortable()
                ->searchable(),
            Column::make('Description'),
            Column::make('Year Release', 'year_release')
                ->sortable()
                ->searchable(),
            Column::make('Director', 'director.name')
                ->sortable(function (Builder $query, $direction) {
                    return $query->orderBy(Director::select('name')->whereColumn('movies.director_id', 'directors.id'), $direction);
                })
                ->searchable(),
            Column::make('Actions')
                ->format(function ($value, $column, $row) {
                    return view('movies.action', compact('row'));
                }),
        ];
    }

    public function query(): Builder
    {
        return Movie::with('director');
    }
}
