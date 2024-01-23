<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use App\Traits\GenerateSlug;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeam extends CreateRecord
{
    use GenerateSlug;
    protected static string $resource = TeamResource::class;

    protected function mutateFormDataBeforeCreate(
        array $data
    ): array {
        $data['slug'] = $this->generateSlug(
            $data['name'],'teams'
        );

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
