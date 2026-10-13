<?php

namespace App\Filament\Resources\MovimientosInsumos\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MovimientosInsumoInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('insumo.id')
                    ->numeric(),
                TextEntry::make('impresora.id')
                    ->numeric(),
                TextEntry::make('personal.id')
                    ->numeric(),
                TextEntry::make('sala.id')
                    ->numeric(),
                TextEntry::make('tipo'),
                TextEntry::make('cantidad')
                    ->numeric(),
                TextEntry::make('stock_anterior')
                    ->numeric(),
                TextEntry::make('stock_actual')
                    ->numeric(),
                TextEntry::make('motivo'),
                TextEntry::make('fecha_movimiento')
                    ->dateTime(),
            
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
