<?php

namespace App\Filament\Widgets;

use App\Models\appointment;
use App\Models\contact;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Appointments', appointment::get()->count())
            ->description('32k increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Total Requests', contact::get()->count())
            ->description('7% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('Unread Requests', contact::where('isRead',false)->count())
            ->description('3% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
/*
            Stat::make('Unique views', '192.1k')
            ->description('32k increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 7, 7])
            ->color('success'), */
        ];
    }


}
