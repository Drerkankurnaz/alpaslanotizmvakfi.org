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

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('surname')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('high_school')
                    ->maxLength(255),
                Forms\Components\TextInput::make('gpa')
                    ->maxLength(255),
                Forms\Components\TextInput::make('sat')
                    ->maxLength(255),
                Forms\Components\TextInput::make('act')
                    ->maxLength(255),
                Forms\Components\TextInput::make('dream_school')
                    ->maxLength(255),
                Forms\Components\TextInput::make('like_school_one')
                    ->maxLength(255),
                Forms\Components\TextInput::make('like_school_two')
                    ->maxLength(255),
                Forms\Components\TextInput::make('like_school_three')
                    ->maxLength(255),
                Forms\Components\TextInput::make('like_school_four')
                    ->maxLength(255),
                Forms\Components\TextInput::make('like_school_five')
                    ->maxLength(255),
                Forms\Components\TextInput::make('interested')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('surname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('high_school')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gpa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('act')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dream_school')
                    ->searchable(),
                Tables\Columns\TextColumn::make('like_school_one')
                    ->searchable(),
                Tables\Columns\TextColumn::make('like_school_two')
                    ->searchable(),
                Tables\Columns\TextColumn::make('like_school_three')
                    ->searchable(),
                Tables\Columns\TextColumn::make('like_school_four')
                    ->searchable(),
                Tables\Columns\TextColumn::make('like_school_five')
                    ->searchable(),
                Tables\Columns\TextColumn::make('interested')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
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
