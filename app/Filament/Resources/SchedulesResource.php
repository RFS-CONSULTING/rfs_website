<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SchedulesResource\Pages;
use App\Filament\Resources\SchedulesResource\RelationManagers;
use App\Models\Schedules;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class SchedulesResource extends Resource
{
    protected static ?string $model = Schedules::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('conferences_id')
                    ->required(),
                Forms\Components\TextInput::make('dates_id')
                    ->required(),
                Forms\Components\TextInput::make('time')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tags_id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('conferences_id'),
                Tables\Columns\TextColumn::make('dates_id'),
                Tables\Columns\TextColumn::make('time'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('tags_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedules::route('/create'),
            'edit' => Pages\EditSchedules::route('/{record}/edit'),
        ];
    }
}
