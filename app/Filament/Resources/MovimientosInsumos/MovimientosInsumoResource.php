<?php

namespace App\Filament\Resources\MovimientosInsumos;

use App\Filament\Resources\MovimientosInsumos\Pages\CreateMovimientosInsumo;
use App\Filament\Resources\MovimientosInsumos\Pages\EditMovimientosInsumo;
use App\Filament\Resources\MovimientosInsumos\Pages\ListMovimientosInsumos;
use App\Filament\Resources\MovimientosInsumos\Pages\ViewMovimientosInsumo;
use App\Filament\Resources\MovimientosInsumos\Schemas\MovimientosInsumoForm;
use App\Filament\Resources\MovimientosInsumos\Schemas\MovimientosInsumoInfolist;
use App\Filament\Resources\MovimientosInsumos\Tables\MovimientosInsumosTable;
use App\Models\MovimientosInsumo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MovimientosInsumoResource extends Resource
{
    protected static ?string $model = MovimientosInsumo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'MovimientosInsumo';

    public static function form(Schema $schema): Schema
    {
        return MovimientosInsumoForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MovimientosInsumoInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MovimientosInsumosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMovimientosInsumos::route('/'),
            'create' => CreateMovimientosInsumo::route('/create'),
            'view' => ViewMovimientosInsumo::route('/{record}'),
            'edit' => EditMovimientosInsumo::route('/{record}/edit'),
        ];
    }
}
