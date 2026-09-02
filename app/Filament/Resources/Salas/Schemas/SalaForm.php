<?php

namespace App\Filament\Resources\Salas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SalaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                Toggle::make('estado')
                    ->required(),
            ]);
    }
}
