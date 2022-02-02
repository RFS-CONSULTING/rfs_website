<?php

namespace App\Filament\Resources\InstructorsResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class FormationRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'Instructors';

    protected static ?string $recordTitleAttribute = 'instructor_id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('instructor_id'),
            ])
            ->filters([
                //
            ]);
    }
}
