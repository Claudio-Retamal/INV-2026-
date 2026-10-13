<?php

namespace App\Filament\Resources\MovimientosInsumos\Pages;

use App\Filament\Resources\MovimientosInsumos\MovimientosInsumoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMovimientosInsumos extends ListRecords
{
    protected static string $resource = MovimientosInsumoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
