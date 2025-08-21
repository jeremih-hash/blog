<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppClickResource\Pages;
use App\Filament\Resources\AppClickResource\RelationManagers;
use App\Filament\Widgets;
use App\Models\AppClick;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppClickResource extends Resource
{
    protected static ?string $model = AppClick::class;

    protected static ?string $navigationIcon = 'heroicon-o-cursor-arrow-rays';
    protected static ?string $navigationGroup = 'Analytics';
    protected static ?string $modelLabel = 'App Click';
    protected static ?string $pluralModelLabel = 'App Clicks';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('app_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('app_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('click_type')
                    ->required(),
                Forms\Components\TextInput::make('user_agent')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('ip_address')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('app_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('click_type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'download' => 'success',
                        'playstore' => 'warning',
                        'appstore' => 'info',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Click Time'),
                Tables\Columns\TextColumn::make('ip_address')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('user_agent')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('app_name')
                    ->multiple()
                    ->options([
                        'Double Chance Predictions' => 'Double Chance Predictions',
                        'Goal Mind Soccer Predictions' => 'Goal Mind Soccer Predictions',
                        'Top Football Predictions' => 'Top Football Predictions',
                        'Over 1.5+ Daily Betting Tips' => 'Over 1.5+ Daily Betting Tips',
                        '2+ Odds Predictions' => '2+ Odds Predictions',
                    ])
                    ->label('App'),
                Tables\Filters\SelectFilter::make('click_type')
                    ->multiple()
                    ->options([
                        'download' => 'Main Download',
                        'playstore' => 'Play Store',
                        'appstore' => 'App Store',
                    ]),
                Tables\Filters\Filter::make('date_range')
                    ->form([
                        Forms\Components\Select::make('range')
                            ->options([
                                'today' => 'Today',
                                'yesterday' => 'Yesterday',
                                'last_7_days' => 'Last 7 Days',
                                'last_30_days' => 'Last 30 Days',
                                'this_month' => 'This Month',
                                'last_month' => 'Last Month',
                                'custom' => 'Custom Range',
                            ])
                            ->live()
                            ->default('today'),
                        Forms\Components\DatePicker::make('from_date')
                            ->visible(fn (Forms\Get $get) => $get('range') === 'custom'),
                        Forms\Components\DatePicker::make('to_date')
                            ->visible(fn (Forms\Get $get) => $get('range') === 'custom'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when($data['range'], function ($query, $range) use ($data) {
                            return match($range) {
                                'today' => $query->whereDate('created_at', today()),
                                'yesterday' => $query->whereDate('created_at', today()->subDay()),
                                'last_7_days' => $query->where('created_at', '>=', now()->subDays(7)),
                                'last_30_days' => $query->where('created_at', '>=', now()->subDays(30)),
                                'this_month' => $query->whereMonth('created_at', now()->month),
                                'last_month' => $query->whereMonth('created_at', now()->subMonth()->month),
                                'custom' => $query
                                    ->when(
                                        $data['from_date'],
                                        fn ($query, $date) => $query->whereDate('created_at', '>=', $date)
                                    )
                                    ->when(
                                        $data['to_date'],
                                        fn ($query, $date) => $query->whereDate('created_at', '<=', $date)
                                    ),
                                default => $query
                            };
                        });
                    })
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppClicks::route('/'),
            'create' => Pages\CreateAppClick::route('/create'),
            'edit' => Pages\EditAppClick::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            \App\Filament\Widgets\AppClickStats::class,
            \App\Filament\Widgets\AppClicksChart::class,
            \App\Filament\Widgets\AppClicksPieChart::class,
            \App\Filament\Widgets\ClickTypesPieChart::class,
        ];
    }
}
