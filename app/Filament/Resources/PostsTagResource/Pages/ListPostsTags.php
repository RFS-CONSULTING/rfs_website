<?php

namespace App\Filament\Resources\PostsTagResource\Pages;

use App\Filament\Resources\PostsTagResource;
use Filament\Resources\Pages\ListRecords;

class ListPostsTags extends ListRecords
{
    protected static string $resource = PostsTagResource::class;
}
