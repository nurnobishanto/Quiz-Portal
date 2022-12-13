<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NoticeResource\Pages;
use App\Filament\Resources\NoticeResource\RelationManagers;
use App\Models\Notice;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class NoticeResource extends Resource
{
    protected static ?string $model = Notice::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('title')
                    ->reactive()
                    ->required()
                    ->placeholder('Enter Notice Title')
                    ->label('Quiz Title')
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->unique(column: 'slug')
                    ->required()->placeholder('Enter Slug'),
                Textarea::make('details')->required(),
                TextInput::make('url')
                    ->placeholder('Enter Url')->type('url'),
                FileUpload::make('image'),
                Select::make('type')->options([
                    'student'=>'For Student',
                    'teacher'=>'For Teacher',
                    'all'=>'For Everyone',
                ])->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title')->searchable()->sortable(),
                ImageColumn::make('image'),
                TextColumn::make('type')->searchable()->sortable(),

            ])
            ->filters([

                SelectFilter::make('type')->options([
                    'all' => 'Everyone',
                    'teacher' => 'For Teachers',
                    'student' => 'For Students',

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
            'index' => Pages\ListNotices::route('/'),
            'create' => Pages\CreateNotice::route('/create'),
            'edit' => Pages\EditNotice::route('/{record}/edit'),
        ];
    }
}
