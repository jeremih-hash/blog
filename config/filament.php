<?php

return [
    'widgets' => [
        'namespace' => 'App\\Filament\\Widgets',
        'path' => app_path('Filament/Widgets'),
        'register' => [
            \App\Filament\Widgets\AppClickStats::class,
            \App\Filament\Widgets\AppClicksChart::class,
            \App\Filament\Widgets\AppClicksPieChart::class,
            \App\Filament\Widgets\ClickTypesPieChart::class,
        ],
    ],
];
