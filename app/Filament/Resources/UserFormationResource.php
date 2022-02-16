<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserFormationResource\Pages;
use App\Filament\Resources\UserFormationResource\RelationManagers;
use App\Models\Formation;
use App\Models\UserFormation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class UserFormationResource extends Resource
{
    protected static ?string $model = UserFormation::class;

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
                Forms\Components\TextInput::make('compagnie')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('domaine')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('address2')
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
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('paiement')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('type_formation')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('mode_formation')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('available_for_update')
                    ->maxLength(65535),
                Forms\Components\Select::make('formation_id')
                                        ->label('formation')
                                        ->options(Formation::all()->pluck('title','id')),
                Forms\Components\Toggle::make('confirmed')
                    ->required(),
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
                Tables\Columns\TextColumn::make('compagnie'),
                Tables\Columns\TextColumn::make('domaine'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('address2'),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('country'),
                Tables\Columns\TextColumn::make('code_postal'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('paiement'),
                Tables\Columns\TextColumn::make('type_formation'),
                Tables\Columns\TextColumn::make('mode_formation'),
                Tables\Columns\TextColumn::make('available_for_update'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('formation_id'),
                Tables\Columns\BooleanColumn::make('confirmed'),
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
            'index' => Pages\ListUserFormations::route('/'),
            'create' => Pages\CreateUserFormation::route('/create'),
            'edit' => Pages\EditUserFormation::route('/{record}/edit'),
        ];
    }
}
