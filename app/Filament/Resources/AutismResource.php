<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AutismResource\Pages;
use App\Filament\Resources\AutismResource\RelationManagers;
use App\Models\Autism;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AutismResource extends Resource
{
    protected static ?string $model = Autism::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Otizm İçeriği';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Otizm İçerikleri';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Başlık')->maxLength(255),
                Forms\Components\Textarea::make('content')
                    ->label('İçerik')->columnSpanFull(),
                Forms\Components\FileUpload::make('photo')
                    ->label('Fotoğraf')->image()
                    ->directory('autisms')
                    ->disk('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')->searchable(),
                Tables\Columns\TextColumn::make('photo')
                    ->label('Fotoğraf')->searchable(),
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
            'index' => Pages\ListAutisms::route('/'),
            'create' => Pages\CreateAutism::route('/create'),
            'edit' => Pages\EditAutism::route('/{record}/edit'),
        ];
    }
}
