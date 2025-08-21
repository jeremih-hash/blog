<?php

namespace App\Filament\Widgets;

use App\Models\AppClick;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class AppClicksChart extends ChartWidget
{
    protected static ?string $heading = 'App Clicks Analytics';
    protected static ?string $pollingInterval = '10s';
    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        $data = AppClick::selectRaw('DATE(created_at) as date, app_name, COUNT(*) as count')
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('date', 'app_name')
            ->orderBy('date')
            ->get();

        $dates = $data->pluck('date')->unique()->values();
        $apps = $data->pluck('app_name')->unique();

        $datasets = [];
        foreach ($apps as $app) {
            $appData = [];
            foreach ($dates as $date) {
                $count = $data->where('date', $date)
                    ->where('app_name', $app)
                    ->first()?->count ?? 0;
                $appData[] = $count;
            }

            $datasets[] = [
                'label' => $app,
                'data' => $appData,
                'fill' => false,
                'tension' => 0.1,
            ];
        }

        return [
            'datasets' => $datasets,
            'labels' => $dates->map(fn ($date) => Carbon::parse($date)->format('M d'))->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
