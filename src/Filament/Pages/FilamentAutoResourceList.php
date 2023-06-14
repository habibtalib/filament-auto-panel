<?php

namespace Miguilim\FilamentAutoResource\Filament\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class FilamentAutoResourceList extends ListRecords
{
    protected function getActions(): array
    {
        return [
            ...static::getResource()::getPagesActions(),
            Actions\CreateAction::make(),
        ];
    }
}
