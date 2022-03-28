<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Tutovideo;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\TutovideoResource\Pages;
use App\Filament\Resources\TutovideoResource\RelationManagers;
use App\Filament\Resources\TutovideoResource\Pages\EditTutovideo;
use App\Filament\Resources\TutovideoResource\Pages\ListTutovideos;
use App\Filament\Resources\TutovideoResource\Pages\CreateTutovideo;
use App\Models\Formation;

class TutovideoResource extends Resource
{
    protected static ?string $model = Tutovideo::class;

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
            Forms\Components\TextInput::make('video_path')
                ->required()
                ->maxLength(255),
            Forms\Components\RichEditor::make('content'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('title'),
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
            'index' => Pages\ListTutovideos::route('/'),
            'create' => Pages\CreateTutovideo::route('/create'),
            'edit' => Pages\EditTutovideo::route('/{record}/edit'),
        ];
    }
}
