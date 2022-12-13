<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MCQResource\Pages;
use App\Filament\Resources\MCQResource\RelationManagers;
use App\Models\ExamCategory;
use App\Models\Mcq;
use App\Models\Quiz;
use App\Models\Subject;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MCQResource extends Resource
{
    protected static ?string $model = Mcq::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $navigationGroup = 'Exam/Quiz';
    protected static ?string $navigationLabel = 'MCQ Questions';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')->required()
                    ->placeholder('MCQ/Questions Title')
                    ->label('Questions Title')->columnSpan('full'),
                Select::make('subject_id')
                    ->label('Select a Subject')
                    ->options(Subject::all()->pluck('name','id')->toArray())
                    ->reactive(),
//                Select::make('quizzes')
//                    ->multiple()
//                    ->label('Select a Quiz')
//                    ->options(function (callable $get){
//                        $subject = Subject::find($get('subject_id'));
//                        if(!$subject){
//                            return Quiz::all()->pluck('name','id');
//                        }
//                        return $subject->quizzes->pluck('name','id');
//                    })
//                    ->reactive(),
                Select::make('quizzes')
                    ->multiple()
                    ->relationship('quizzes', 'name')->required(),
                FileUpload::make('image'),
                Textarea::make('description')
                    ->placeholder('Questions Description')
                    ->label('Questions Description'),
                TextInput::make('op1')->required()->label('Option A')->placeholder('Option A'),
                TextInput::make('op2')->required()->label('Option B')->placeholder('Option B'),
                TextInput::make('op3')->required()->label('Option C')->placeholder('Option C'),
                TextInput::make('op4')->required()->label('Option D')->placeholder('Option D'),
                Select::make('ca')->required()->label('Select Correct Answer')
                    ->options([
                        'op1' => 'Option A',
                        'op2' => 'Option B',
                        'op3' => 'Option C',
                        'op4' => 'Option D',
                    ]),
                FileUpload::make('explain_img')->label('Explain Image'),
                Textarea::make('explain')
                    ->placeholder('Explain')
                    ->label('Questions Explain')->columnSpan('full'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('subject.name')->searchable()->sortable(),
                TextColumn::make('quizzes.name')->searchable()->sortable(),
                TextColumn::make('quizzes_count')->counts('quizzes')->sortable(),
            ])
            ->filters([
                SelectFilter::make('subject')->relationship('subject', 'name'),
                SelectFilter::make('quizzes')->relationship('quizzes', 'name'),
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
            'index' => Pages\ListMCQS::route('/'),
            'create' => Pages\CreateMCQ::route('/create'),
            'edit' => Pages\EditMCQ::route('/{record}/edit'),
        ];
    }
}
