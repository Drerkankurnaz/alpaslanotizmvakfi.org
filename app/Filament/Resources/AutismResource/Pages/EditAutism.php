<?php

namespace App\Filament\Resources\AutismResource\Pages;

use App\Filament\Resources\AutismResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAutism extends EditRecord
{
    protected static string $resource = AutismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
