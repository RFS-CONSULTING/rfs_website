<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MasterClassResource\Pages;
use App\Filament\Resources\MasterClassResource\RelationManagers;
use App\Models\MasterClass;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class MasterClassResource extends Resource
{
    protected static ?string $model = MasterClass::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('secondname')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('firstname')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('statut')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('autreStatut')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('domaine')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('country')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('code_postal')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('suggestion')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('secondname'),
                Tables\Columns\TextColumn::make('firstname'),
                Tables\Columns\TextColumn::make('statut'),
                Tables\Columns\TextColumn::make('autreStatut'),
                Tables\Columns\TextColumn::make('domaine'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('country'),
                Tables\Columns\TextColumn::make('code_postal'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('suggestion'),
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
            'index' => Pages\ListMasterClasses::route('/'),
            'create' => Pages\CreateMasterClass::route('/create'),
            'edit' => Pages\EditMasterClass::route('/{record}/edit'),
        ];
    }
}
