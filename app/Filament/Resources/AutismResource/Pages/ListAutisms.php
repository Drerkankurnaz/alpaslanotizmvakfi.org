<?php

namespace App\Filament\Resources\AutismResource\Pages;

use App\Filament\Resources\AutismResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAutisms extends ListRecords
{
    protected static string $resource = AutismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
