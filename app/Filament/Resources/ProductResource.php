<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                Forms\Components\Select::make('brand_id')
                    ->required()
                    ->label('Brand')    
                    ->relationship('brand', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([

                    Forms\Components\TextInput::make('name')
                        ->label('Brand Name')
                        ->required(),
                
                    Forms\Components\TextArea::make('description')
                    ->label('Description'),

                        ]),


                Forms\Components\Select::make('category_id')
                    ->required()
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([

                    Forms\Components\TextInput::make('name')
                        ->label('Category Name')
                        ->required(),
                
                    Forms\Components\TextArea::make('description')
                    ->label('Description'),

                        ]),

                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('₱'),

                Forms\Components\TextInput::make('stock')
                    ->required()
                    ->numeric()
                    ->default(0),

                Forms\Components\FileUpload::make('img')
                    ->image()
                    ->directory('products')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([       
                
                Tables\Columns\ImageColumn::make('img')
                    ->label('Image')
                    ->disk('public')
                   ->square(),

                 Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

    
                Tables\Columns\TextColumn::make('brand.name')
                    ->sortable()
                    ->searchable(),
               
                Tables\Columns\TextColumn::make('price')
                    ->money('PHP', true)
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ViewAction::make(),
                ]),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
