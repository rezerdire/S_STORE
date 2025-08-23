<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class LineChart extends ChartWidget
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
                    'backgroundColor' => '#EF4444',
                    'borderColor' => '#EF4444', // red
                ],
                [
                    'label' => 'Sprite',
                    'data' => [40, 42, 38, 50, 48, 55, 53, 60, 58, 52, 48, 46],
                    'backgroundColor' => '#10B981',
                    'borderColor' => '#10B981', // green
                ],
                [
                    'label' => 'Pepsi',
                    'data' => [30, 35, 32, 45, 40, 48, 52, 55, 53, 47, 43, 40],
                    'backgroundColor' => '#3B82F6', // blue
                    'borderColor' => '#3B82F6',
                ],
            ],
            'labels' => [
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
            ],

        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
