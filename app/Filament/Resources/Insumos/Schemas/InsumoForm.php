<?php

namespace App\Filament\Resources\Insumos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InsumoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Información del insumo')
                    ->schema([
                        TextInput::make('codigo')
                            ->label('Código')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('nombre')
                            ->label('Nombre')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('marca')
                            ->label('Marca')
                            ->maxLength(255),

                        TextInput::make('modelo')
                            ->label('Modelo')
                            ->maxLength(255),

                        Select::make('tipo_insumos_id')
                            ->label('Tipo de insumo')
                            ->relationship('tipoInsumo', 'nombre')
                            ->required()
                            ->searchable()
                            ->preload(),

                        TextInput::make('color')
                            ->label('Color')
                            ->maxLength(100),

                        TextInput::make('unidad_medida')
                            ->label('Unidad de medida')
                            ->required()
                            ->maxLength(100),
                    ])
                    ->columns(2),

                Section::make('Control de stock')
                    ->schema([
                        TextInput::make('stock_actual')
                            ->label('Stock actual')
                            ->numeric()
                            ->default(0)
                            ->required()
                            ->minValue(0),

                        TextInput::make('stock_minimo')
                            ->label('Stock mínimo')
                            ->numeric()
                            ->default(0)
                            ->required()
                            ->minValue(0),

                        TextInput::make('stock_maximo')
                            ->label('Stock máximo')
                            ->numeric()
                            ->default(0)
                            ->required()
                            ->minValue(0),

                        Toggle::make('estado')
                            ->label('Activo')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}
