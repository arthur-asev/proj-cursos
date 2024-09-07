<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FornecedorResource\Pages;
use App\Models\Fornecedor;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class FornecedorResource extends Resource
{
    protected static ?string $model = Fornecedor::class;
    protected static ?string $modelLabel = 'Fornecedor';
    protected static ?string $pluralModelLabel = 'Fornecedores';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static bool $shouldRegisterNavigation =  true;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('fornecedor'),
                DatePicker::make('data_fornecedor'),
                TextInput::make('nota_fiscal'),
                TextInput::make('valor'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('fornecedor'),
                TextColumn::make('data_fornecedor')->dateTime(),
                TextColumn::make('nota_fiscal'),
                TextColumn::make('valor')->money('BRL'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFornecedors::route('/'),
        ];
    }
}
