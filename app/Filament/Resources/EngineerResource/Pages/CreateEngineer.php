<?php

namespace App\Filament\Resources\EngineerResource\Pages;

use App\Filament\Resources\EngineerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEngineer extends CreateRecord
{
    protected static string $resource = EngineerResource::class;

    protected function getCreatedNotificationMessage(): ?string
    {
        return 'teknisi disimpan';
    }


    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
