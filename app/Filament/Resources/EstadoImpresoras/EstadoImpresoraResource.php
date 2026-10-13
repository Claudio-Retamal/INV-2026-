<?php

namespace App\Filament\Resources\EstadoImpresoras;

use App\Filament\Resources\EstadoImpresoras\Pages\CreateEstadoImpresora;
use App\Filament\Resources\EstadoImpresoras\Pages\EditEstadoImpresora;
use App\Filament\Resources\EstadoImpresoras\Pages\ListEstadoImpresoras;
use App\Filament\Resources\EstadoImpresoras\Schemas\EstadoImpresoraForm;
use App\Filament\Resources\EstadoImpresoras\Tables\EstadoImpresorasTable;
use App\Models\EstadoImpresora;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EstadoImpresoraResource extends Resource
{
    protected static ?string $model = EstadoImpresora::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'EstadoImpresora';

    public static function form(Schema $schema): Schema
    {
        return EstadoImpresoraForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EstadoImpresorasTable::configure($table);
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
            'index' => ListEstadoImpresoras::route('/'),
            'create' => CreateEstadoImpresora::route('/create'),
            'edit' => EditEstadoImpresora::route('/{record}/edit'),
        ];
    }
}
