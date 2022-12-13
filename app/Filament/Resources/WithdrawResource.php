<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WithdrawResource\Pages;
use App\Filament\Resources\WithdrawResource\RelationManagers;
use App\Models\Method;
use App\Models\Withdraw;
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

class WithdrawResource extends Resource
{
    protected static ?string $model = Withdraw::class;

    protected static ?string $navigationIcon = 'heroicon-o-minus-circle';
    protected static ?string $navigationGroup = 'Accounts';
    protected static ?int $navigationSort = 1;

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
                    ->relationship('method', 'name')->required(),

                TextInput::make('account_number')->required()
                    ->label('Account Number')->placeholder('Account Number'),
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
                TextColumn::make('account_number')->searchable()->sortable()->label('Account Number'),
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
            'index' => Pages\ListWithdraws::route('/'),
            'create' => Pages\CreateWithdraw::route('/create'),
            'edit' => Pages\EditWithdraw::route('/{record}/edit'),
        ];
    }
}
