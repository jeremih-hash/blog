<?php

namespace App\Filament\Widgets;

use App\Models\AppClick;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class AppClicksPieChart extends ChartWidget
{
    protected static ?string $heading = 'App Distribution';
    protected static ?string $maxHeight = '300px';
    protected static ?string $pollingInterval = '10s';

    protected function getData(): array
    {
        $data = AppClick::select('app_name', DB::raw('count(*) as total'))
            ->groupBy('app_name')
            ->get();

        return [
            'datasets' => [
                [
                    'data' => $data->pluck('total')->toArray(),
                    'backgroundColor' => [
                        '#f59e0b', // amber
                        '#10b981', // emerald
                        '#3b82f6', // blue
                        '#8b5cf6', // violet
                        '#ec4899', // pink
                    ],
                ],
            ],
            'labels' => $data->pluck('app_name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
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
