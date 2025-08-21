<?php

namespace App\Filament\Resources\AppClickResource\Pages;

use App\Filament\Resources\AppClickResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAppClick extends EditRecord
{
    protected static string $resource = AppClickResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
