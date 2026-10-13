<?php

namespace App\Filament\Resources\MovimientosInsumos\Pages;

use App\Filament\Resources\MovimientosInsumos\MovimientosInsumoResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMovimientosInsumo extends EditRecord
{
    protected static string $resource = MovimientosInsumoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
