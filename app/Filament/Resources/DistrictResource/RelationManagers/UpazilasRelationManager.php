<?php

namespace App\Filament\Resources\DistrictResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UpazilasRelationManager extends RelationManager
{
    protected static string $relationship = 'upazilas';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}
