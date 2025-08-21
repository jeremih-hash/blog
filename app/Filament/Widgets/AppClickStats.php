<?php

namespace App\Filament\Widgets;

use App\Models\AppClick;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;

class AppClickStats extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';

    protected function getStats(): array
    {
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $lastWeek = Carbon::now()->subWeek();

        $todayClicks = AppClick::whereDate('created_at', $today)->count();
        $yesterdayClicks = AppClick::whereDate('created_at', $yesterday)->count();
        $weeklyClicks = AppClick::where('created_at', '>=', $lastWeek)->count();

        $trend = $yesterdayClicks > 0 
            ? (($todayClicks - $yesterdayClicks) / $yesterdayClicks) * 100 
            : 0;

        return [
            Stat::make('Today\'s Clicks', $todayClicks)
                ->description($trend >= 0 ? '+' . number_format($trend, 1) . '% from yesterday' : number_format($trend, 1) . '% from yesterday')
                ->descriptionIcon($trend > 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($trend > 0 ? 'success' : 'danger'),

            Stat::make('Yesterday\'s Clicks', $yesterdayClicks),

            Stat::make('Weekly Clicks', $weeklyClicks)
                ->chart(AppClick::where('created_at', '>=', $lastWeek)
                    ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
                    ->groupBy('date')
                    ->pluck('count')
                    ->toArray()),
        ];
    }
}
