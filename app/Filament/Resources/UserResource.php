<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function getModelLabel(): string
    {
        return 'Kullanıcı';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Kullanıcılar';
    }

    // Kullanıcı yönetimi yalnızca süper adminlere açık
    public static function canViewAny(): bool
    {
        return auth()->user()?->isSuperAdmin() ?? false;
    }

    public static function canCreate(): bool
    {
        return static::canViewAny();
    }

    public static function canEdit(Model $record): bool
    {
        return static::canViewAny();
    }

    // Süper admin kendi hesabını silemesin
    public static function canDelete(Model $record): bool
    {
        return static::canViewAny() && ! $record->is(auth()->user());
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Ad Soyad')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('E-posta')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->label('Şifre')
                    ->password()
                    ->revealable()
                    ->minLength(8)
                    ->required(fn (string $operation): bool => $operation === 'create')
                    ->dehydrated(fn (?string $state): bool => filled($state))
                    ->dehydrateStateUsing(fn (string $state): string => Hash::make($state))
                    ->helperText(fn (string $operation): ?string => $operation === 'edit' ? 'Değiştirmek istemiyorsanız boş bırakın.' : null),
                Forms\Components\Select::make('role_id')
                    ->label('Rol')
                    ->relationship('role', 'display_name')
                    ->default(1)
                    ->required()
                    ->helperText('Yönetim paneline yalnızca "Yönetici" rolü girebilir.'),
                Forms\Components\Toggle::make('is_super_admin')
                    ->label('Süper Admin')
                    ->helperText('Kullanıcıları görüp ekleyebilir.')
                    // Süper admin kendi yetkisini kaldıramasın
                    ->disabled(fn (?User $record): bool => $record?->is(auth()->user()) ?? false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Ad Soyad')->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('E-posta')->searchable(),
                Tables\Columns\TextColumn::make('role.display_name')
                    ->label('Rol'),
                Tables\Columns\IconColumn::make('is_super_admin')
                    ->label('Süper Admin')->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Oluşturulma Tarihi')->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
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
