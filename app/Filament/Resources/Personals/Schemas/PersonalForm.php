<?php

namespace App\Filament\Resources\Personals\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PersonalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombres')
                    ->required(),
                TextInput::make('apellidos')
                    ->required(),
                TextInput::make('cargo')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('telefono')
                    ->tel()
                    ->required(),
                Toggle::make('estado')
                    ->required(),
            ]);
    }
}
