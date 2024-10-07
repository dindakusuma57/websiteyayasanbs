<?php

namespace App\Filament\Resources\HerodetailResource\Pages;

use App\Filament\Resources\HerodetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHerodetails extends ListRecords
{
    protected static string $resource = HerodetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
