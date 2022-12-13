<?php

namespace App\Filament\Resources\ExamCategoryResource\Pages;

use App\Filament\Resources\ExamCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamCategory extends EditRecord
{
    protected static string $resource = ExamCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
