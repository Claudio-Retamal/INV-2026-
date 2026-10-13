<?php

namespace App\Filament\Resources\EstadoImpresoras\Pages;

use App\Filament\Resources\EstadoImpresoras\EstadoImpresoraResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEstadoImpresora extends EditRecord
{
    protected static string $resource = EstadoImpresoraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
