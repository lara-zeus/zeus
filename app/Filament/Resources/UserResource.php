<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?int $navigationSort = 1;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-lock-closed';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    /*public static function getNavigationLabel(): string
    {
        return 'Users';
    }

    public static function getPluralLabel(): string
    {
        return 'users';
    }

    public static function getLabel(): string
    {
        return 'user';
    }*/

    public static function getNavigationGroup(): ?string
    {
        return 'Users';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make()
                ->hiddenLabel()
                ->columns()
                ->schema([
                    TextInput::make('name')->required(),
                    TextInput::make('email')->email()->required(),
                    TextInput::make('password')
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                        ->password()
                        ->revealable()
                        ->revealable()
                        ->maxLength(255),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar_url')
                    ->toggleable()
                    ->circular(),
                TextColumn::make('name')
                    ->sortable()
                    ->toggleable()
                    ->description(fn (User $record) => $record->email)
                    ->searchable(),
                IconColumn::make('email_verified_at')
                    ->boolean()
                    ->default(0)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime('M j, Y')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->toggleable()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->dateTime('M j, Y')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
            ])
            ->filters([
                Filter::make('verified')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
                Filter::make('unverified')
                    ->query(fn (Builder $query): Builder => $query->whereNull('email_verified_at')),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
