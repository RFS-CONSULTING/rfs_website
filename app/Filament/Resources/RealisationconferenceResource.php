<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RealisationconferenceResource\Pages;
use App\Filament\Resources\RealisationconferenceResource\RelationManagers;
use App\Models\Realisationconference;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class RealisationconferenceResource extends Resource
{
    protected static ?string $model = Realisationconference::class;

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
                Forms\Components\FileUpload::make('imagepath'),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('youtube'),
                Tables\Columns\TextColumn::make('imagepath'),
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
            'index' => Pages\ListRealisationconferences::route('/'),
            'create' => Pages\CreateRealisationconference::route('/create'),
            'edit' => Pages\EditRealisationconference::route('/{record}/edit'),
        ];
    }
}
