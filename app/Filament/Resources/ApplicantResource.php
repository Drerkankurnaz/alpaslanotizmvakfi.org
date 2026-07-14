<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicantResource\Pages;
use App\Filament\Resources\ApplicantResource\RelationManagers;
use App\Models\Applicant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicantResource extends Resource
{
    protected static ?string $model = Applicant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Başvuru';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Başvurular';
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
                Forms\Components\TextInput::make('high_school')
                    ->label('Lise')->maxLength(255),
                Forms\Components\TextInput::make('gpa')
                    ->label('Not Ortalaması')->maxLength(255),
                Forms\Components\TextInput::make('sat')
                    ->label('SAT')->maxLength(255),
                Forms\Components\TextInput::make('act')
                    ->label('ACT')->maxLength(255),
                Forms\Components\TextInput::make('dream_school')
                    ->label('Hedef Okul')->maxLength(255),
                Forms\Components\TextInput::make('like_school_one')
                    ->label('Tercih 1')->maxLength(255),
                Forms\Components\TextInput::make('like_school_two')
                    ->label('Tercih 2')->maxLength(255),
                Forms\Components\TextInput::make('like_school_three')
                    ->label('Tercih 3')->maxLength(255),
                Forms\Components\TextInput::make('like_school_four')
                    ->label('Tercih 4')->maxLength(255),
                Forms\Components\TextInput::make('like_school_five')
                    ->label('Tercih 5')->maxLength(255),
                Forms\Components\TextInput::make('interested')
                    ->label('İlgi Alanı')->maxLength(255),
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
                Tables\Columns\TextColumn::make('high_school')
                    ->label('Lise')->searchable(),
                Tables\Columns\TextColumn::make('gpa')
                    ->label('Not Ortalaması')->searchable(),
                Tables\Columns\TextColumn::make('sat')
                    ->label('SAT')->searchable(),
                Tables\Columns\TextColumn::make('act')
                    ->label('ACT')->searchable(),
                Tables\Columns\TextColumn::make('dream_school')
                    ->label('Hedef Okul')->searchable(),
                Tables\Columns\TextColumn::make('like_school_one')
                    ->label('Tercih 1')->searchable(),
                Tables\Columns\TextColumn::make('like_school_two')
                    ->label('Tercih 2')->searchable(),
                Tables\Columns\TextColumn::make('like_school_three')
                    ->label('Tercih 3')->searchable(),
                Tables\Columns\TextColumn::make('like_school_four')
                    ->label('Tercih 4')->searchable(),
                Tables\Columns\TextColumn::make('like_school_five')
                    ->label('Tercih 5')->searchable(),
                Tables\Columns\TextColumn::make('interested')
                    ->label('İlgi Alanı')->searchable(),
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
            'index' => Pages\ListApplicants::route('/'),
            'create' => Pages\CreateApplicant::route('/create'),
            'edit' => Pages\EditApplicant::route('/{record}/edit'),
        ];
    }
}
