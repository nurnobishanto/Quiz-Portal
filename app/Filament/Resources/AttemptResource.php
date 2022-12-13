<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttemptResource\Pages;
use App\Filament\Resources\AttemptResource\RelationManagers;
use App\Models\Attempt;
use App\Models\District;
use App\Models\Result;
use App\Models\Upazila;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttemptResource extends Resource
{
    protected static ?string $model = Attempt::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name'),
                TextColumn::make('quiz.name'),
                TextColumn::make('mcq.name')->label("Question Title"),
                TextColumn::make('mcq.op1')->label("Option 1"),
                TextColumn::make('mcq.op2')->label("Option 2"),
                TextColumn::make('mcq.op3')->label("Option 3"),
                TextColumn::make('mcq.op4')->label("Option 4"),
                TextColumn::make('mcq.ca')->label("Correct Answer"),
                TextColumn::make('attempt')->label("Your Answer"),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAttempts::route('/'),
            'create' => Pages\CreateAttempt::route('/create'),
            'edit' => Pages\EditAttempt::route('/{record}/edit'),
        ];
    }
}
