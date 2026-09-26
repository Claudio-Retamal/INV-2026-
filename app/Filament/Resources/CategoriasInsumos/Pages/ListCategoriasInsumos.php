<?php

namespace App\Filament\Resources\CategoriasInsumos\Pages;

use App\Filament\Resources\CategoriasInsumos\CategoriasInsumoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCategoriasInsumos extends ListRecords
{
    protected static string $resource = CategoriasInsumoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
