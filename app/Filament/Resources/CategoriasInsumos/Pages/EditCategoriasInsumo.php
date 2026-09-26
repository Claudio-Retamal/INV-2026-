<?php

namespace App\Filament\Resources\CategoriasInsumos\Pages;

use App\Filament\Resources\CategoriasInsumos\CategoriasInsumoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCategoriasInsumo extends EditRecord
{
    protected static string $resource = CategoriasInsumoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
