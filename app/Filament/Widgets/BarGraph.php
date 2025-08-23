<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BarGraph extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static ?int $sort = 2;


    protected function getData(): array
    {
        
        return [
                    'datasets' => [
                    [
                        'label' => 'Coke',
                        'data' => [50, 45, 40, 60, 55, 70, 65, 80, 75, 60, 50, 45],
                        'borderColor' => '#EF4444', // red line
                        'backgroundColor' => 'rgba(239, 68, 68, 0.2)',
                        'pointBackgroundColor' => '#EF4444',
                    ],
                    [
                        'label' => 'Sprite',
                        'data' => [40, 42, 38, 50, 48, 55, 53, 60, 58, 52, 48, 46],
                        'borderColor' => '#10B981', // green line
                        'backgroundColor' => 'rgba(16, 185, 129, 0.2)',
                        'pointBackgroundColor' => '#10B981',
                    ],
                    [
                        'label' => 'Pepsi',
                        'data' => [30, 35, 32, 45, 40, 48, 52, 55, 53, 47, 43, 40],
                        'borderColor' => '#3B82F6', // blue line
                        'backgroundColor' => 'rgba(59, 130, 246, 0.2)',
                        'pointBackgroundColor' => '#3B82F6',
                    ],
                ],
                        'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            ];      
        
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
