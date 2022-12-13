<?php

namespace App\Filament\Resources\DepositeResource\Pages;

use App\Filament\Resources\DepositeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeposites extends ListRecords
{
    protected static string $resource = DepositeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
