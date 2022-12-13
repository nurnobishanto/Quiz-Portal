<?php

namespace App\Filament\Resources\UpazilaResource\Pages;

use App\Filament\Resources\UpazilaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUpazilas extends ListRecords
{
    protected static string $resource = UpazilaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
