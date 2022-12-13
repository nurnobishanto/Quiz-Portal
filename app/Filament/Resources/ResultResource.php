<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResultResource\Pages;
use App\Filament\Resources\ResultResource\RelationManagers;
use App\Models\Result;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResultResource extends Resource
{
    protected static ?string $model = Result::class;

    protected static ?string $navigationIcon = 'heroicon-o-table';
    protected static ?string $navigationGroup = 'Exam/Quiz';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('user_id')->required()->default(auth()->id())
                    ->relationship('user', 'name'),
                Select::make('quiz_id')->required()
                    ->relationship('quiz', 'name'),
                TextInput::make('ca')->label('Correct')->required(),
                TextInput::make('wa')->label('Wrong')->required(),
                TextInput::make('na')->label('Not Answer')->required(),
                TextInput::make('mark')->label('Total')->required(),
                TextInput::make('time')->label('Time Spent')->required(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('user.name')->searchable()->sortable(),
                TextColumn::make('quiz.name')->searchable()->sortable(),
                TextColumn::make('ca')->label('Correct')->sortable(),
                TextColumn::make('wa')->label('Wrong')->sortable(),
                TextColumn::make('mark')->label('Total')->sortable(),
                TextColumn::make('time')->label('Spent')->sortable(),
                TextColumn::make('created_at')->label('Submitted')
                    ->date(format: 'd/m/Y H:s A')->sortable(),

            ])
            ->filters([
                //
                SelectFilter::make('user')->relationship('user', 'name'),
                SelectFilter::make('quiz')->relationship('quiz', 'name'),
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
            'index' => Pages\ListResults::route('/'),
            'create' => Pages\CreateResult::route('/create'),
            'edit' => Pages\EditResult::route('/{record}/edit'),
        ];
    }
}
