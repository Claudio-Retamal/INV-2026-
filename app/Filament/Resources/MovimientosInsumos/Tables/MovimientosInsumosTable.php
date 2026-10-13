<?php

namespace App\Filament\Resources\MovimientosInsumos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MovimientosInsumosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('insumo.nombre')
                    ->label('Insumo')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('impresora.nombre')
                    ->label('Impresora')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('personal.nombres')
                    ->label('Personal')
                    ->formatStateUsing(fn($record) => $record->personal?->nombres . ' ' . $record->personal?->apellidos)
                    ->searchable(['nombres', 'apellidos']),
                TextColumn::make('sala.nombre')
                    ->label('Sala')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('tipo'),
                TextColumn::make('cantidad')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('stock_anterior')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('stock_actual')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('motivo')
                    ->searchable(),
                TextColumn::make('fecha_movimiento')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
