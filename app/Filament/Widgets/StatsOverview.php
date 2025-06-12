<?php

namespace App\Filament\Widgets;

use App\Enum\Decor\DecorOrderStatusEnum;
use App\Models\Decor;
use App\Models\DecorOrder;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Bütün sifarişlər', DecorOrder::query()->count())
                ->description('Ümumi sifarişlərin sayı')
                ->descriptionIcon('heroicon-o-arrow-trending-up')
                ->color('success'),
            Stat::make('Tamamlanmış sifarişlər', DecorOrder::query()->where('status', DecorOrderStatusEnum::COMPLETED)->count())
                ->description('Tamamlanmış sifarişlərin sayı')
                ->descriptionIcon('heroicon-o-arrow-trending-up')
                ->color('success'),
            Stat::make('Bütün dekorların sayı', Decor::query()->count())
                ->description('Sistemdə olan bütün dekorlar')
                ->descriptionIcon('heroicon-o-arrow-trending-up')
                ->color('success')
        ];
    }
}
