<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DatesResource\Pages;
use App\Filament\Resources\DatesResource\RelationManagers;
use App\Models\Conferences;
use App\Models\Dates;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class DatesResource extends Resource
{
    protected static ?string $model = Dates::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('conference_id')
                ->label('Conference')
                ->options(Conferences::all()->pluck('topic', 'id'))
                ->searchable(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('conferences_id'),
                Tables\Columns\TextColumn::make('date')
                    ->date(),
            ])
            ->filters([
                //
            ]);
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
            'index' => Pages\ListDates::route('/'),
            'create' => Pages\CreateDates::route('/create'),
            'edit' => Pages\EditDates::route('/{record}/edit'),
        ];
    }
}
