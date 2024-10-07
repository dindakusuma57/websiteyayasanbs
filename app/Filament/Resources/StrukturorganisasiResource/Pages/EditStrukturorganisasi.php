<?php

namespace App\Filament\Resources\StrukturorganisasiResource\Pages;

use App\Filament\Resources\StrukturorganisasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStrukturorganisasi extends EditRecord
{
    protected static string $resource = StrukturorganisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
