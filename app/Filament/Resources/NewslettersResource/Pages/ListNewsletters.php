<?php

namespace App\Filament\Resources\NewslettersResource\Pages;

use App\Filament\Resources\NewslettersResource;
use Filament\Resources\Pages\ListRecords;

class ListNewsletters extends ListRecords
{
    protected static string $resource = NewslettersResource::class;
}
