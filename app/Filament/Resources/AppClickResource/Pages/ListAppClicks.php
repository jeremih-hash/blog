<?php

namespace App\Filament\Resources\AppClickResource\Pages;

use App\Filament\Resources\AppClickResource;
use App\Filament\Widgets\AppClickStats;
use App\Filament\Widgets\AppClicksChart;
use App\Filament\Widgets\AppClicksPieChart;
use App\Filament\Widgets\ClickTypesPieChart;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAppClicks extends ListRecords
{
    protected static string $resource = AppClickResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Widgets\AppClickStats::class,
            \App\Filament\Widgets\AppClicksPieChart::class,
            \App\Filament\Widgets\ClickTypesPieChart::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            \App\Filament\Widgets\AppClicksChart::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
