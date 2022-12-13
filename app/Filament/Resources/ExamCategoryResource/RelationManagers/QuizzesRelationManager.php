<?php

namespace App\Filament\Resources\ExamCategoryResource\RelationManagers;

use App\Models\ExamCategory;
use App\Models\Subject;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class QuizzesRelationManager extends RelationManager
{
    protected static string $relationship = 'quizzes';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('subject_id')
                    ->label('Select a Subject')
                    ->options(Subject::all()->pluck('name','id')->toArray())
                    ->reactive(),
                Select::make('exam_category_id')
                    ->label('Select a Exam Category')
                    ->options(function (callable $get){
                        $subject = Subject::find($get('subject_id'));
                        if(!$subject){
                            return ExamCategory::all()->pluck('name','id');
                        }
                        return $subject->exam_categories->pluck('name','id');
                    })
                    ->reactive(),

                TextInput::make('name')
                    ->reactive()
                    ->required()
                    ->placeholder('Enter Quiz Title')
                    ->label('Quiz Title')
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->unique(column: 'slug')
                    ->required()->placeholder('Enter Slug'),
                TextInput::make('password')->placeholder('Enter Password'),
                Textarea::make('description')->placeholder('Enter Description'),
                TextInput::make('duration')
                    ->required()
                    ->placeholder('Enter Duration')
                    ->label('Duration (Min)')
                    ->numeric(),
                TextInput::make('attempt_limit')
                    ->required()
                    ->placeholder('Enter Attempt Limit')
                    ->label('Attempt Limit')
                    ->integer()
                    ->default(1)
                    ->numeric(),
                TextInput::make('positive_mark')
                    ->required()
                    ->placeholder('Enter Positive Mark')
                    ->label('Positive Mark')
                    ->numeric(),
                TextInput::make('negative_mark')
                    ->required()
                    ->placeholder('Enter Negative Mark')
                    ->label('Negative Mark')
                    ->numeric(),
                DateTimePicker::make('start')
                    ->label('Start Date & Time')
                    ->timezone('Asia/Dhaka')
                    ->displayFormat('D, d M Y H:i A')
                    ->placeholder('Select Start Date and Time')
                    ->required(),
                DateTimePicker::make('end')
                    ->label('End Date & Time')
                    ->timezone('Asia/Dhaka')
                    ->displayFormat('D, d M Y H:i A')
                    ->placeholder('Select End Date and Time')
                    ->required(),
                Select::make('user_id')->required()->default(auth()->id())
                    ->relationship('teacher', 'name'),
                CheckboxList::make('types')
                    ->label('Quiz Types')
                    ->required()
                    ->relationship('types', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('subject.name')->searchable()->sortable(),
                TextColumn::make('category.name')->searchable()->sortable(),
                TextColumn::make('types.name')->searchable()->sortable(),
                TextColumn::make('mcqs_count')->counts('mcqs')->sortable(),
            ])
            ->filters([
                SelectFilter::make('teacher')->relationship('teacher', 'name'),
                SelectFilter::make('subject')->relationship('subject', 'name'),
                SelectFilter::make('exam_category')->relationship('category', 'name'),
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
