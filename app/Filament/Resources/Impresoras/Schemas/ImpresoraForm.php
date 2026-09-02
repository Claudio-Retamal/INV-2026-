<?php

namespace App\Filament\Resources\Impresoras\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

use function Laravel\Prompts\select;

class ImpresoraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
                DatePicker::make('fecha_ingreso')
                    ->required(),
                TextInput::make('ubicacion')
                    ->required(),



                select::make('estado_impresora')
                    ->options([
                        'Nueva' => 'nueva',
                        'Usada' => 'usada',
                    ]),
                Toggle::make('estado')
                    ->required(),


            ]);
    }
}
