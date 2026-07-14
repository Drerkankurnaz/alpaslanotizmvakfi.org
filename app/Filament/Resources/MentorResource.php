<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MentorResource\Pages;
use App\Filament\Resources\MentorResource\RelationManagers;
use App\Models\Mentor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MentorResource extends Resource
{
    protected static ?string $model = Mentor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Mentor Başvurusu';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Mentor Başvuruları';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('İsim')->maxLength(255),
                Forms\Components\TextInput::make('surname')
                    ->label('Soyisim')->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('E-posta')->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label('Telefon')->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('school')
                    ->label('Okul')->maxLength(255),
                Forms\Components\TextInput::make('collage')
                    ->label('Üniversite')->maxLength(255),
                Forms\Components\TextInput::make('major')
                    ->label('Bölüm')->maxLength(255),
                Forms\Components\TextInput::make('minor')
                    ->label('Yandal')->maxLength(255),
                Forms\Components\TextInput::make('expertise')
                    ->label('Uzmanlık')->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('İsim')->searchable(),
                Tables\Columns\TextColumn::make('surname')
                    ->label('Soyisim')->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('E-posta')->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Telefon')->searchable(),
                Tables\Columns\TextColumn::make('school')
                    ->label('Okul')->searchable(),
                Tables\Columns\TextColumn::make('collage')
                    ->label('Üniversite')->searchable(),
                Tables\Columns\TextColumn::make('major')
                    ->label('Bölüm')->searchable(),
                Tables\Columns\TextColumn::make('minor')
                    ->label('Yandal')->searchable(),
                Tables\Columns\TextColumn::make('expertise')
                    ->label('Uzmanlık')->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Oluşturulma Tarihi')->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Güncellenme Tarihi')->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListMentors::route('/'),
            'create' => Pages\CreateMentor::route('/create'),
            'edit' => Pages\EditMentor::route('/{record}/edit'),
        ];
    }
}
