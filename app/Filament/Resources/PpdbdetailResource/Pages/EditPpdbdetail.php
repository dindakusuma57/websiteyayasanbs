<?php

namespace App\Filament\Resources\PpdbdetailResource\Pages;

use App\Filament\Resources\PpdbdetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPpdbdetail extends EditRecord
{
    protected static string $resource = PpdbdetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
