<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AmbassadorResource\Pages;
use App\Filament\Resources\AmbassadorResource\RelationManagers;
use App\Models\Ambassador;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AmbassadorResource extends Resource
{
    protected static ?string $model = Ambassador::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('secondname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('firstname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('statut')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('profession')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('compagnie')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('etudes')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('domaine')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nationalite')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('country')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image'),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->maxLength(255),
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
                Tables\Columns\TextColumn::make('profession'),
                Tables\Columns\TextColumn::make('compagnie'),
                Tables\Columns\TextColumn::make('etudes'),
                Tables\Columns\TextColumn::make('domaine'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('nationalite'),
                Tables\Columns\TextColumn::make('country'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('image'),
                Tables\Columns\TextColumn::make('phone'),
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
            'index' => Pages\ListAmbassadors::route('/'),
            'create' => Pages\CreateAmbassador::route('/create'),
            'edit' => Pages\EditAmbassador::route('/{record}/edit'),
        ];
    }
}
