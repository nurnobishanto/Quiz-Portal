<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UpazilaResource\Pages;
use App\Filament\Resources\UpazilaResource\RelationManagers;
use App\Models\Upazila;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UpazilaResource extends Resource
{
    protected static ?string $model = Upazila::class;

    protected static ?string $navigationIcon = 'heroicon-o-office-building';
    protected static ?string $navigationGroup = 'Address';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('district_id')
                    ->label("Select District")
                    ->required()
                    ->relationship('district','name')
                    ->required(),
                TextInput::make('name')->required(),
                Toggle::make('is_active')->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                Tables\Columns\TextColumn::make('district.name')
                    ->label('District')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('post_offices_count')
                    ->label('P.O Count')
                    ->counts('post_offices')->sortable(),
                BooleanColumn::make('is_active')->sortable(),
            ])
            ->filters([
                //
                SelectFilter::make('district')->relationship('district', 'name'),
                SelectFilter::make('is_active')->options([
                    1=>'Active',
                    0=>'Inactive',
                ]),
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
            RelationManagers\PostOfficesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUpazilas::route('/'),
            'create' => Pages\CreateUpazila::route('/create'),
            'edit' => Pages\EditUpazila::route('/{record}/edit'),
        ];
    }
}
