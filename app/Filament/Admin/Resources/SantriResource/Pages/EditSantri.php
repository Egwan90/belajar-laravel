<?php

namespace App\Filament\Admin\Resources\SantriResource\Pages;

use App\Filament\Admin\Resources\SantriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSantri extends EditRecord
{
    protected static string $resource = SantriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
