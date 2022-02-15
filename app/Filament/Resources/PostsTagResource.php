<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostsTagResource\Pages;
use App\Filament\Resources\PostsTagResource\RelationManagers;
use App\Models\Posts;
use App\Models\PostsTag;
use App\Models\Tags;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PostsTagResource extends Resource
{
    protected static ?string $model = PostsTag::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('post_id')
                ->label('post')
                ->options(Posts::all()->pluck('title', 'id'))
                ->searchable(),
                Forms\Components\Select::make('tag_id')
                    ->label('Tag')
                    ->options(Tags::all()->pluck('name', 'id'))
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('post_id'),
                Tables\Columns\TextColumn::make('tag_id'),
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
            'index' => Pages\ListPostsTags::route('/'),
            'create' => Pages\CreatePostsTag::route('/create'),
            'edit' => Pages\EditPostsTag::route('/{record}/edit'),
        ];
    }
}
