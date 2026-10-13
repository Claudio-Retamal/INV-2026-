<?php

namespace App\Filament\Resources\EstadoImpresoras\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EstadoImpresoraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('descripcion')
                    ->required(),
                Toggle::make('estado')
                    ->required(),
            ]);
    }
}
