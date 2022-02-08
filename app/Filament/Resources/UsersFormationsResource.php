<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersFormationsResource\Pages;
use App\Filament\Resources\UsersFormationsResource\RelationManagers;
use App\Models\Formation;
use App\Models\User;
use App\Models\UsersFormations;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class UsersFormationsResource extends Resource
{
    protected static ?string $model = UsersFormations::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                                        ->label('user')
                                        ->options(User::all()->pluck('name', 'id'))
                                        ->searchable(),
                Forms\Components\Select::make('formation_id')
                                        ->label('formation')
                                        ->options(Formation::all()->pluck('title', 'id'))
                                        ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('formation_id'),
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
            'index' => Pages\ListUsersFormations::route('/'),
            'create' => Pages\CreateUsersFormations::route('/create'),
            'edit' => Pages\EditUsersFormations::route('/{record}/edit'),
        ];
    }
}
