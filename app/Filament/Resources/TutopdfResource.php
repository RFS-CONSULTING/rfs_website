<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Tutopdf;
use App\Models\Formation;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\TutopdfResource\Pages;
use App\Filament\Resources\TutopdfResource\RelationManagers;
use App\Filament\Resources\TutopdfResource\Pages\EditTutopdf;
use App\Filament\Resources\TutopdfResource\Pages\ListTutopdfs;
use App\Filament\Resources\TutopdfResource\Pages\CreateTutopdf;

class TutopdfResource extends Resource
{
    protected static ?string $model = Tutopdf::class;

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
            Forms\Components\TextInput::make('pdf_path')
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
            'index' => Pages\ListTutopdfs::route('/'),
            'create' => Pages\CreateTutopdf::route('/create'),
            'edit' => Pages\EditTutopdf::route('/{record}/edit'),
        ];
    }
}
