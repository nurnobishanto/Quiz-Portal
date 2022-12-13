<?php

namespace App\Filament\Resources\MCQResource\Pages;

use App\Filament\Resources\MCQResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMCQ extends EditRecord
{
    protected static string $resource = MCQResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
