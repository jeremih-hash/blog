<?php

namespace App\Filament\Widgets;

use App\Models\AppClick;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class ClickTypesPieChart extends ChartWidget
{
    protected static ?string $heading = 'Click Types Distribution';
    protected static ?string $maxHeight = '300px';
    protected static ?string $pollingInterval = '10s';

    protected function getData(): array
    {
        $data = AppClick::select('click_type', DB::raw('count(*) as total'))
            ->groupBy('click_type')
            ->get();

        return [
            'datasets' => [
                [
                    'data' => $data->pluck('total')->toArray(),
                    'backgroundColor' => [
                        '#22c55e', // green for downloads
                        '#f59e0b', // amber for playstore
                        '#3b82f6', // blue for appstore
                    ],
                ],
            ],
            'labels' => $data->pluck('click_type')->map(function ($type) {
                return match($type) {
                    'download' => 'Main Download',
                    'playstore' => 'Play Store',
                    'appstore' => 'App Store',
                    default => $type,
                };
            })->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                ],
            ],
        ];
    }
}
