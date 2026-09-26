<?php

namespace App\Filament\Resources\CategoriasInsumos;

use App\Filament\Resources\CategoriasInsumos\Pages\CreateCategoriasInsumo;
use App\Filament\Resources\CategoriasInsumos\Pages\EditCategoriasInsumo;
use App\Filament\Resources\CategoriasInsumos\Pages\ListCategoriasInsumos;
use App\Filament\Resources\CategoriasInsumos\Schemas\CategoriasInsumoForm;
use App\Filament\Resources\CategoriasInsumos\Tables\CategoriasInsumosTable;
use App\Models\CategoriasInsumo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CategoriasInsumoResource extends Resource
{
    protected static ?string $model = CategoriasInsumo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'CategoriasInsumo';

    public static function form(Schema $schema): Schema
    {
        return CategoriasInsumoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoriasInsumosTable::configure($table);
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
            'index' => ListCategoriasInsumos::route('/'),
            'create' => CreateCategoriasInsumo::route('/create'),
            'edit' => EditCategoriasInsumo::route('/{record}/edit'),
        ];
    }
}
