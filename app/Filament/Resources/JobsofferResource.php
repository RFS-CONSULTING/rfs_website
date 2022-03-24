<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobsofferResource\Pages;
use App\Filament\Resources\JobsofferResource\RelationManagers;
use App\Models\Jobsoffer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class JobsofferResource extends Resource
{
    protected static ?string $model = Jobsoffer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('image_path'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('image_path'),
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
            'index' => Pages\ListJobsoffers::route('/'),
            'create' => Pages\CreateJobsoffer::route('/create'),
            'edit' => Pages\EditJobsoffer::route('/{record}/edit'),
        ];
    }
}
