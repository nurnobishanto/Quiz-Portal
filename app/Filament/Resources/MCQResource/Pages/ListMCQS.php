<?php

namespace App\Filament\Resources\MCQResource\Pages;

use App\Filament\Resources\MCQResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMCQS extends ListRecords
{
    protected static string $resource = MCQResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
