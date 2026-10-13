<?php

namespace App\Filament\Resources\Impresoras\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ImpresoraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('codigo_interno')
                    ->required(),
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('marca')
                    ->required(),
                TextInput::make('modelo')
                    ->required(),
                TextInput::make('serie')
                    ->required(),
                TextInput::make('tipo_impresora')
                    ->required(),
                TextInput::make('ip')
                    ->required(),
                TextInput::make('mac')
                    ->required(),
                TextInput::make('contador_inicial')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('contador_actual')
                    ->required()
                    ->numeric()
                    ->default(0),
                DatePicker::make('fecha_ingreso')
                    ->required(),
                Select::make('sala_id')
                    ->label('Sala')
                    ->relationship('sala', 'nombre')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('estado_impresora_id')
                    ->relationship('estadoImpresora', 'id')
                    ->required(),
                Toggle::make('estado')
                    ->required(),
            ]);
    }
}
