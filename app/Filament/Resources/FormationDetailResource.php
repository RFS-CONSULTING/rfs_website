<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Formation;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\FormationDetail;
use Filament\Resources\Resource;
use App\Filament\Resources\FormationDetailResource\Pages;
use App\Filament\Resources\FormationDetailResource\RelationManagers;

class FormationDetailResource extends Resource
{
    protected static ?string $model = FormationDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('formation_id')
                ->label('formation')
                ->options(Formation::all()->pluck('title', 'id'))
                ->searchable(),
                Forms\Components\TextInput::make('description')
                ->required()
                ->maxLength(255)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('formation_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
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
            'index' => Pages\ListFormationDetails::route('/'),
            'create' => Pages\CreateFormationDetail::route('/create'),
            'edit' => Pages\EditFormationDetail::route('/{record}/edit'),
        ];
    }
}
