<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Stats extends BaseWidget
{
    protected static ?int $sort = 1;


    protected function getStats(): array
    {
        return [
            Stat::make('Today Sales', '192.1k')
                ->description('32k increase')->color('success')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make('Stocks', ' High Stock')
                ->description('7% decrease')->color('danger')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->chart([100, 88, 88, 88, 35, 20, 24, 5]),

            Stat::make('Store Sales', '50k')
                ->description('3% increase')->color('success')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                            ->chart([7, 2, 10, 3, 15, 4, 17]),
        ];
    }
}
