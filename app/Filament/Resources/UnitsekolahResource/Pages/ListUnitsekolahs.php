<?php

namespace App\Filament\Resources\UnitsekolahResource\Pages;

use App\Filament\Resources\UnitsekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnitsekolahs extends ListRecords
{
    protected static string $resource = UnitsekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
