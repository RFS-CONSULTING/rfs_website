<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormationsResource\Pages;
use App\Filament\Resources\FormationsResource\RelationManagers;
use App\Models\Formation;
use App\Models\Instructors;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class FormationsResource extends Resource
{
    protected static ?string $model = Formation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('instructor_id')
                    ->label('Instructor')
                    ->options(Instructors::all()->pluck('name', 'id'))
                    ->searchable(),
                Forms\Components\TextInput::make('nb_hours')
                    ->required(),
                Forms\Components\TextInput::make('nb_articles')
                    ->required(),
                Forms\Components\Toggle::make('downloadable_ressources')
                    ->required(),
                Forms\Components\Toggle::make('is_certified')
                    ->required(),
                Forms\Components\TextInput::make('actual_price')
                    ->required(),
                Forms\Components\TextInput::make('original_price')
                    ->required(),
                Forms\Components\TextInput::make('etudiant_price')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('keywords')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_path'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('instructor_id'),
                Tables\Columns\TextColumn::make('nb_hours'),
                Tables\Columns\TextColumn::make('nb_articles'),
                Tables\Columns\BooleanColumn::make('downloadable_ressources'),
                Tables\Columns\BooleanColumn::make('is_certified'),
                Tables\Columns\TextColumn::make('actual_price'),
                Tables\Columns\TextColumn::make('original_price'),
                Tables\Columns\TextColumn::make('etudiant_price'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('keywords'),
                Tables\Columns\ImageColumn::make('image_path')->size(40),
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
            'index' => Pages\ListFormations::route('/'),
            'create' => Pages\CreateFormations::route('/create'),
            'edit' => Pages\EditFormations::route('/{record}/edit'),
        ];
    }
}
