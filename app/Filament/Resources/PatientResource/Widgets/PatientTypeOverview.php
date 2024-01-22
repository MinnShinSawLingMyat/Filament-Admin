<?php

namespace App\Filament\Resources\PatientResource\Widgets;

use App\Models\Patient;
use Filament\Facades\Filament;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PatientTypeOverview extends BaseWidget
{
    protected static ?string $pollingInterval = null;
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Cats',
                Patient::query()
                    ->where('type', 'cat')
                    ->where(
                        'team_id',
                        Filament::getTenant()
                            ->id
                    )
                    ->count()
                ),
            Stat::make(
                'Dogs',
                Patient::query()
                    ->where('type', 'dog')
                    ->where(
                        'team_id',
                        Filament::getTenant()
                            ->id
                    )
                    ->count()
                ),
            Stat::make(
                'Rabbits',
                Patient::query()
                    ->where('type', 'rabbit')
                    ->where(
                        'team_id',
                        Filament::getTenant()
                            ->id
                    )
                    ->count()
                ),
        ];
    }
}
