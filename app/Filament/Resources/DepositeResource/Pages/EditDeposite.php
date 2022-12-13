<?php

namespace App\Filament\Resources\DepositeResource\Pages;

use App\Filament\Resources\DepositeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDeposite extends EditRecord
{
    protected static string $resource = DepositeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
