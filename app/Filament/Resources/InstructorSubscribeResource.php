<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstructorSubscribeResource\Pages;
use App\Filament\Resources\InstructorSubscribeResource\RelationManagers;
use App\Models\InstructorSubscribe;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class InstructorSubscribeResource extends Resource
{
    protected static ?string $model = InstructorSubscribe::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('prenom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('postnom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('etat_civile')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nationalite')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mail')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telephone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('adress')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cv_path')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('identite_path')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('programme_path')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom'),
                Tables\Columns\TextColumn::make('prenom'),
                Tables\Columns\TextColumn::make('postnom'),
                Tables\Columns\TextColumn::make('etat_civile'),
                Tables\Columns\TextColumn::make('nationalite'),
                Tables\Columns\TextColumn::make('mail'),
                Tables\Columns\TextColumn::make('telephone'),
                Tables\Columns\TextColumn::make('adress'),
                Tables\Columns\TextColumn::make('cv_path'),
                Tables\Columns\TextColumn::make('identite_path'),
                Tables\Columns\TextColumn::make('programme_path'),
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
            'index' => Pages\ListInstructorSubscribes::route('/'),
            'create' => Pages\CreateInstructorSubscribe::route('/create'),
            'edit' => Pages\EditInstructorSubscribe::route('/{record}/edit'),
        ];
    }
}
