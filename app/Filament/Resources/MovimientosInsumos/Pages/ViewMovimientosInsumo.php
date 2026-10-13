<?php

namespace App\Filament\Resources\MovimientosInsumos\Pages;

use App\Filament\Resources\MovimientosInsumos\MovimientosInsumoResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMovimientosInsumo extends ViewRecord
{
    protected static string $resource = MovimientosInsumoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
