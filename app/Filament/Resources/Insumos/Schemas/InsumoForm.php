<?php

namespace App\Filament\Resources\Insumos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class InsumoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('codigo')
                    ->required(),
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('marca')
                    ->default(null),
                TextInput::make('modelo')
                    ->default(null),
                Select::make('Categorias Insumos')
                    ->label('Categorias de Insumos')
                    ->relationship('categoriasInsumo', 'nombre')
                    ->searchable()
                    ->preload()
                    ->required(),
                    
                Select::make('Unidad de medida del Insumos')
                    ->label('Unidad de Medida')
                    ->relationship('unidadMedida', 'nombre')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('color')
                    ->default(null),
                TextInput::make('stock_actual')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('stock_minimo')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('stock_maximo')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Toggle::make('estado')
                    ->required(),
            ]);
    }
}
