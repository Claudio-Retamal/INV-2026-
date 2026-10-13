<?php

namespace App\Filament\Resources\MovimientosInsumos\Schemas;

use App\Models\Insumo;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;


class MovimientosInsumoForm
{
    public static function configure(Schema $schema): Schema
    {
        $recalcular = function (Get $get, Set $set): void {
            $insumo = Insumo::find($get('insumo_id'));
            $anterior = (float) ($insumo?->stock_actual ?? 0);
            $cantidad = (float) ($get('cantidad') ?? 0);

            $actual = match ($get('tipo')) {
                'entrada', 'devolucion', 'ajuste' => $anterior + $cantidad,
                'salida', 'consumo', 'baja'       => $anterior - $cantidad,
                default                           => $anterior,
            };

            $set('stock_anterior', $anterior);
            $set('stock_actual', $actual);
        };

        return $schema->components([
            Select::make('insumo_id')
                ->label('Insumo')
                ->relationship('insumo', 'nombre')
                ->searchable()
                ->preload()
                ->live()
                ->afterStateUpdated($recalcular)
                ->required(),

            Select::make('impresora_id')
                ->label('Impresora')
                ->relationship('impresora', 'nombre')
                ->searchable()
                ->preload()
                ->default(null),

            Select::make('personal_id')
                ->label('Personal')
                ->relationship('personal', 'nombres')
                ->getOptionLabelFromRecordUsing(fn($record) => "{$record->nombres} {$record->apellidos}")
                ->searchable(['nombres', 'apellidos'])
                ->preload()
                ->default(null),

            Select::make('sala_id')
                ->label('Sala')
                ->relationship('sala', 'nombre')
                ->searchable()
                ->preload()
                ->default(null),

            Select::make('tipo')
                ->options([
                    'entrada'    => 'Entrada',
                    'salida'     => 'Salida',
                    'consumo'    => 'Consumo',
                    'devolucion' => 'Devolución',
                    'ajuste'     => 'Ajuste',
                    'baja'       => 'Baja',
                ])
                ->live()
                ->afterStateUpdated($recalcular)
                ->required(),

            TextInput::make('cantidad')
                ->numeric()
                ->minValue(0)
                ->live(onBlur: true)
                ->afterStateUpdated($recalcular)
                ->required(),

            TextInput::make('stock_anterior')
                ->numeric()
                ->readOnly()
                ->dehydrated()
                ->required(),

            TextInput::make('stock_actual')
                ->numeric()
                ->readOnly()
                ->dehydrated()
                ->required(),

            TextInput::make('motivo')
                ->default(null),

            DateTimePicker::make('fecha_movimiento')
                ->default(now())
                ->required()
        ]);
    }
}
