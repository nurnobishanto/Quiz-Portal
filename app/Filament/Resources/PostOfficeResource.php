<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostOfficeResource\Pages;
use App\Filament\Resources\PostOfficeResource\RelationManagers;
use App\Models\District;
use App\Models\ExamCategory;
use App\Models\PostOffice;
use App\Models\Subject;
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

class PostOfficeResource extends Resource
{
    protected static ?string $model = PostOffice::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';
    protected static ?string $navigationGroup = 'Address';
    protected static ?int $navigationSort = 3;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('district_id')
                    ->label('Select a District')
                    ->options(District::all()->pluck('name','id')->toArray())
                    ->reactive(),
                Select::make('upazila_id')
                    ->label('Select a Upazila/Thana')
                    ->options(function (callable $get){
                        $district = District::find($get('district_id'));
                        if(!$district){
                            return Upazila::all()->pluck('name','id');
                        }
                        return $district->upazilas->pluck('name','id');
                    })
                    ->reactive(),

                TextInput::make('name')->required(),
                TextInput::make('code'),
                Toggle::make('is_active')->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('district.name')
                    ->label('District')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('upazila.name')
                    ->label('Upazila')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('code')->searchable()->sortable(),
                BooleanColumn::make('is_active'),
            ])
            ->filters([
                //
                SelectFilter::make('district')->relationship('district', 'name'),
                SelectFilter::make('upazila')->relationship('upazila', 'name'),
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
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPostOffices::route('/'),
            'create' => Pages\CreatePostOffice::route('/create'),
            'edit' => Pages\EditPostOffice::route('/{record}/edit'),
        ];
    }
}
