<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\RealisationProcess;
use App\Filament\Resources\RealisationProcessResource\Pages;
use App\Filament\Resources\RealisationProcessResource\RelationManagers;
use App\Filament\Resources\RealisationProcessResource\Pages\EditRealisationProcess;
use App\Filament\Resources\RealisationProcessResource\Pages\CreateRealisationProcess;
use App\Filament\Resources\RealisationProcessResource\Pages\ListRealisationProcesses;

class RealisationProcessResource extends Resource
{
    protected static ?string $model = RealisationProcess::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
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
                Tables\Columns\TextColumn::make('link'),
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
            'index' => Pages\ListRealisationProcesses::route('/'),
            'create' => Pages\CreateRealisationProcess::route('/create'),
            'edit' => Pages\EditRealisationProcess::route('/{record}/edit'),
        ];
    }
}
