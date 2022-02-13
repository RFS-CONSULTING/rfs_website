<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoursSkillResource\Pages;
use App\Filament\Resources\CoursSkillResource\RelationManagers;
use App\Models\CoursSkill;
use App\Models\Formation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class CoursSkillResource extends Resource
{
    protected static ?string $model = CoursSkill::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
                Tables\Columns\TextColumn::make('formation_id'),
                Tables\Columns\TextColumn::make('description'),
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
            'index' => Pages\ListCoursSkills::route('/'),
            'create' => Pages\CreateCoursSkill::route('/create'),
            'edit' => Pages\EditCoursSkill::route('/{record}/edit'),
        ];
    }
}
