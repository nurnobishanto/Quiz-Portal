<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamCategoryResource\Pages;
use App\Filament\Resources\ExamCategoryResource\RelationManagers;
use App\Models\ExamCategory;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\ViewAction;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class ExamCategoryResource extends Resource
{
    protected static ?string $model = ExamCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationGroup = 'Exam/Quiz';
    protected static ?string $navigationLabel = 'Exam Category';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('subject_id')->required()
                    ->relationship('subject', 'name'),
                TextInput::make('name')
                    ->reactive()
                    ->required()
                    ->placeholder('Enter Exam Category Name')
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')->unique(column: 'slug')
                    ->required()->placeholder('Enter Slug'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('subject.name'),
                TextColumn::make('quizzes_count')->counts('quizzes')->sortable(),


            ])
            ->filters([
                SelectFilter::make('subject')->relationship('subject', 'name'),
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
            RelationManagers\QuizzesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExamCategories::route('/'),
            'create' => Pages\CreateExamCategory::route('/create'),
            'edit' => Pages\EditExamCategory::route('/{record}/edit'),
        ];
    }
}
