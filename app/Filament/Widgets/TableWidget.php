<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class TableWidget extends BaseWidget
{
    protected string|int|array $columnSpan = 'full'; 
    protected static ?int $sort = 3;



    public function table(Table $table): Table
    {
        return $table
            ->query(Product::class::query()
                // ...
            )
            ->columns([
                Tables\Columns\ImageColumn::make('img')->label('img'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('stock'),
            
            ]);
    }
}
