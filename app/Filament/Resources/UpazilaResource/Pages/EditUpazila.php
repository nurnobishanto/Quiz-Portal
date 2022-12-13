<?php

namespace App\Filament\Resources\UpazilaResource\Pages;

use App\Filament\Resources\UpazilaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUpazila extends EditRecord
{
    protected static string $resource = UpazilaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
