<?php

namespace App\Filament\Resources\UnidadMedidas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UnidadMedidaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('abreviatura')
                    ->required(),
                   Toggle::make('estado')
                    ->required(),
            ]);
    }
}
