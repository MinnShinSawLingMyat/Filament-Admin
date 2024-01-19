<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TestUserStatus extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', 10),
        ];
    }
}
