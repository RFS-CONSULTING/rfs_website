<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonsResource\Pages;
use App\Filament\Resources\LessonsResource\RelationManagers;
use App\Models\Formation;
use App\Models\Lessons;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class LessonsResource extends Resource
{
    protected static ?string $model = Lessons::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('formations_id')
                ->label('Formation')
                ->options(Formation::all()->pluck('title', 'id'))
                ->searchable(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('formations_id'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
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
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLessons::route('/create'),
            'edit' => Pages\EditLessons::route('/{record}/edit'),
        ];
    }
}
