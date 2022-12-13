<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepositeResource\Pages;
use App\Filament\Resources\DepositeResource\RelationManagers;
use App\Models\Deposite;
use App\Models\ExamCategory;
use App\Models\Method;
use App\Models\Subject;
use Faker\Provider\Text;
use Filament\Forms;
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

class DepositeResource extends Resource
{
    protected static ?string $model = Deposite::class;

    protected static ?string $navigationIcon = 'heroicon-o-plus-circle';
    protected static ?string $navigationGroup = 'Accounts';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('user_id')
                    ->relationship('user', 'name')->required(),
                TextInput::make('amount')->required()
                    ->numeric()
                    ->label('Amount')->placeholder('Amount'),
                Select::make('method_id')
                    ->label('Select a Method')
                    ->options(Method::all()->pluck('name','id')->toArray())
                    ->reactive(),
//                Select::make('method_id')
//                    ->relationship('method', 'name')->required(),
                TextInput::make('Account Number')

                    ->disabled()->placeholder(function (callable $get){
                        $method = Method::find($get('method_id'));
                        if(!$method){
                            return "Select Method to get account Number";
                        }
                        return $method['account_number'];
                    }),
                Textarea::make('Account Details')

                    ->disabled()->placeholder(function (callable $get){
                        $method = Method::find($get('method_id'));
                        if(!$method){
                            return "Select Method to get account Number";
                        }
                        return $method['details'];
                    }),
                TextInput::make('trid')->required()
                    ->label('Transaction ID')->placeholder('Enter Transaction ID'),
                Select::make('status')->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'reject' => 'Reject',
                    'hold' => 'Hold',
                ])->required()->default('pending'),
                Textarea::make('note')->label('Note for this Transaction'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('user.name')->searchable()->sortable(),
                TextColumn::make('amount')->searchable()->sortable(),
                TextColumn::make('trid')->searchable()->sortable()->label('Transaction ID'),
                TextColumn::make('method.name')->searchable()->sortable(),
                TextColumn::make('status')->searchable()->sortable(),
            ])
            ->filters([
                //
                SelectFilter::make('method')->relationship('method', 'name'),
                SelectFilter::make('status')->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'reject' => 'Reject',
                    'hold' => 'Hold',
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
            'index' => Pages\ListDeposites::route('/'),
            'create' => Pages\CreateDeposite::route('/create'),
            'edit' => Pages\EditDeposite::route('/{record}/edit'),
        ];
    }
}
