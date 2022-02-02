<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConferencesResource\Pages;
use App\Filament\Resources\ConferencesResource\RelationManagers;
use App\Models\Conferences;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ConferencesResource extends Resource
{
    protected static ?string $model = Conferences::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('topic')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\TextInput::make('hours')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_highlights_videos')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_path')
                    ->image(),
                Forms\Components\TextInput::make('gif_link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ticket_price')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('topic'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('date')
                    ->date(),
                Tables\Columns\TextColumn::make('hours'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('link_highlights_videos'),
                Tables\Columns\TextColumn::make('image_path'),
                Tables\Columns\TextColumn::make('gif_link'),
                Tables\Columns\TextColumn::make('ticket_price'),
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
            'index' => Pages\ListConferences::route('/'),
            'create' => Pages\CreateConferences::route('/create'),
            'edit' => Pages\EditConferences::route('/{record}/edit'),
        ];
    }
}
