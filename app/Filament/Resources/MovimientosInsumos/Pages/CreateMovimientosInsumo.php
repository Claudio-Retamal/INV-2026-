<?php

namespace App\Filament\Resources\MovimientosInsumos\Pages;

use App\Filament\Resources\MovimientosInsumos\MovimientosInsumoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMovimientosInsumo extends CreateRecord
{
    protected static string $resource = MovimientosInsumoResource::class;

     protected function afterCreate(): void
    {
        $this->record->insumo->update([
            'stock_actual' => $this->record->stock_actual,
        ]);
    }
}
