<?php

namespace App\Filament\Resources\EstadoImpresoras\Pages;

use App\Filament\Resources\EstadoImpresoras\EstadoImpresoraResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEstadoImpresoras extends ListRecords
{
    protected static string $resource = EstadoImpresoraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
