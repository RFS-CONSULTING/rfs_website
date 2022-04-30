<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RealisationmasterclassResource\Pages;
use App\Filament\Resources\RealisationmasterclassResource\RelationManagers;
use App\Models\Realisationmasterclass;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class RealisationmasterclassResource extends Resource
{
    protected static ?string $model = Realisationmasterclass::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('youtube')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('youtube_embeded')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('imagepath')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('youtube'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('imagepath'),
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
            'index' => Pages\ListRealisationmasterclasses::route('/'),
            'create' => Pages\CreateRealisationmasterclass::route('/create'),
            'edit' => Pages\EditRealisationmasterclass::route('/{record}/edit'),
        ];
    }
}
