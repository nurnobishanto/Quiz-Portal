<?php

namespace io3x1\FilamentUser\Resources;

use App\Models\District;
use App\Models\Upazila;
use Filament\Forms;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\Builder;
use io3x1\FilamentUser\Resources\UserResource\Pages;
use STS\FilamentImpersonate\Impersonate;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?int $navigationSort = 9;

    protected static ?string $navigationIcon = 'heroicon-o-lock-closed';


    protected static function getNavigationLabel(): string
    {
        return trans('filament-user::user.resource.label');
    }

    public static function getPluralLabel(): string
    {
        return trans('filament-user::user.resource.label');
    }


    public static function getLabel(): string
    {
        return trans('filament-user::user.resource.single');
    }

    protected static function getNavigationGroup(): ?string
    {
        return "User, Role & Permission";
    }

    protected function getTitle(): string
    {
        return trans('filament-user::user.resource.title.resource');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->label(trans('filament-user::user.resource.name')),
                TextInput::make('email')->email()->required()->label(trans('filament-user::user.resource.email')),
                Forms\Components\TextInput::make('password')->label(trans('filament-user::user.resource.password'))
                    ->password()
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn ($state) => !empty($state) ? Hash::make($state) : ""),
                Forms\Components\MultiSelect::make('roles')->relationship('roles', 'name')->label(trans('filament-user::user.resource.roles')),
                Forms\Components\FileUpload::make('image')
                    ->label("Profile Image")
                    ->image()
                    ->maxSize(5120)
                    ->directory('user')
                    ->disk('public'),
                Forms\Components\TextInput::make("school")
                    ->maxLength(200)
                    ->label("Your School/College/Institute Name"),
                Forms\Components\Select::make("profession")
                    ->options([
                        "TEACHER" => 'Teacher',
                        "STUDENT" => 'Student',
                    ])
                    ->label("Select Your Profession"),
                Select::make('district_id')
                    ->label('Select a District')->required()
                    ->options(District::all()->pluck('name','id')->toArray())
                    ->reactive(),
                Select::make('upazila_id')
                    ->label('Select a Upazila/Thana')
                    ->options(function (callable $get){
                        $district = District::find($get('district_id'));
                        if(!$district){
                            return [];
                        }
                        return $district->upazilas->pluck('name','id');
                    })->required()
                    ->reactive(),
                Select::make('post_office_id')
                    ->label('Select a Post Office')
                    ->options(function (callable $get){
                        $upazila = Upazila::find($get('upazila_id'));
                        if(!$upazila){
                            return [];
                        }
                        return $upazila->post_offices->pluck('name','id');
                    })->required()
                    ->reactive(),
                Forms\Components\Textarea::make("address")
                    ->maxLength(50)
                    ->label("Your Address"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->label(trans('filament-user::user.resource.id')),
                Tables\Columns\ImageColumn::make('image')
                    ->label("Profile")
                    ->rounded(),
                TextColumn::make('name')->sortable()->searchable()->label(trans('filament-user::user.resource.name')),
                TextColumn::make('email')->sortable()->searchable()->label(trans('filament-user::user.resource.email')),
                BooleanColumn::make('email_verified_at')->sortable()->searchable()->label(trans('filament-user::user.resource.email_verified_at')),
                TextColumn::make('profession')->sortable()->searchable()->label('Profession'),
                TextColumn::make('roles.name')->sortable()->searchable()->label('Roles'),

            ])
            ->prependActions([
                Impersonate::make('impersonate'),
            ])
            ->filters([
                Tables\Filters\Filter::make('verified')
                    ->label(trans('filament-user::user.resource.verified'))
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
                Tables\Filters\Filter::make('unverified')
                    ->label(trans('filament-user::user.resource.unverified'))
                    ->query(fn (Builder $query): Builder => $query->whereNull('email_verified_at')),
                Tables\Filters\Filter::make('TEACHER')
                    ->label('Teacher')
                    ->query(fn (Builder $query): Builder => $query->whereNull('profession')),
                Tables\Filters\Filter::make('STUDENT')
                    ->label('Student')
                    ->query(fn (Builder $query): Builder => $query->whereNull('profession')),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
