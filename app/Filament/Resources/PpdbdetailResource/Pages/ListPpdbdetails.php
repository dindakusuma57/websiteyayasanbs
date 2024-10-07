<?php

namespace App\Filament\Resources\PpdbdetailResource\Pages;

use App\Filament\Resources\PpdbdetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPpdbdetails extends ListRecords
{
    protected static string $resource = PpdbdetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
