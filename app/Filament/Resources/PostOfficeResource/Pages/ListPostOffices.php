<?php

namespace App\Filament\Resources\PostOfficeResource\Pages;

use App\Filament\Resources\PostOfficeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostOffices extends ListRecords
{
    protected static string $resource = PostOfficeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
