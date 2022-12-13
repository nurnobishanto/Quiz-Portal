<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MethodResource\Pages;
use App\Filament\Resources\MethodResource\RelationManagers;
use App\Models\Method;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MethodResource extends Resource
{
    protected static ?string $model = Method::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationGroup = 'Accounts';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')->label('Account Name')->required(),
                TextInput::make('account_number')->label('Account Number')->required(),
                Textarea::make('details')->label('Account Details')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('account_number')->searchable()->sortable(),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListMethods::route('/'),
            'create' => Pages\CreateMethod::route('/create'),
            'edit' => Pages\EditMethod::route('/{record}/edit'),
        ];
    }
}
