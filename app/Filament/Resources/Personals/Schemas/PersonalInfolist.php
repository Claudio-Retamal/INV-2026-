<?php

namespace App\Filament\Resources\Personals\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PersonalInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nombres'),
                TextEntry::make('apellidos'),
                TextEntry::make('cargo'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('telefono'),
                IconEntry::make('estado')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
