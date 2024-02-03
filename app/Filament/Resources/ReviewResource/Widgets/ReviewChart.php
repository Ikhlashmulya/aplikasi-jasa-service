<?php

namespace App\Filament\Resources\ReviewResource\Widgets;

use Filament\Widgets\ChartWidget;

class ReviewChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah rating';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'rating',
                    'data' => [0, 10, 5, 2, 21],
                ],
            ],
            'labels' => ['1', '2', '3', '4', '5'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
