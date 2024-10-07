<?php

namespace App\Filament\Resources\HerodetailResource\Pages;

use App\Filament\Resources\HerodetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHerodetail extends EditRecord
{
    protected static string $resource = HerodetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
