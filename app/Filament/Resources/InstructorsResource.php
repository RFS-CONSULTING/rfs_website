<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstructorsResource\Pages;
use App\Filament\Resources\InstructorsResource\RelationManagers;
use App\Models\Instructors;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class InstructorsResource extends Resource
{
    protected static ?string $model = Instructors::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('job')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook_link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('whatsapp_link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin_link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('twitter_link')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('job'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('facebook_link'),
                Tables\Columns\TextColumn::make('whatsapp_link'),
                Tables\Columns\TextColumn::make('linkedin_link'),
                Tables\Columns\TextColumn::make('twitter_link'),
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
            'index' => Pages\ListInstructors::route('/'),
            'create' => Pages\CreateInstructors::route('/create'),
            'edit' => Pages\EditInstructors::route('/{record}/edit'),
        ];
    }
}
