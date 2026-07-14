<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Başlık')->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->label('İsim')->maxLength(255),
                Forms\Components\Textarea::make('content')
                    ->label('İçerik')->columnSpanFull(),
                Forms\Components\Textarea::make('content_two')
                    ->label('İçerik (2)')->columnSpanFull(),
                Forms\Components\FileUpload::make('photo')
                    ->label('Fotoğraf')->image()
                    ->directory('teams')
                    ->disk('public'),
                Forms\Components\TextInput::make('url')
                    ->label('Bağlantı')->maxLength(255),
                Forms\Components\TextInput::make('order')
                    ->label('Sıra')->numeric()
                    ->default(0),
                Forms\Components\CheckboxList::make('type')
                    ->label('Tür')->options([
                        '1' => 'Yönetim Kurulu',
                        '2' => 'Bilim Kurulu',
                        '3' => 'Eğitim Kadrosu',
                        '4' => 'İdari Kadro',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('İsim')->searchable(),
                Tables\Columns\TextColumn::make('photo')
                    ->label('Fotoğraf')->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->label('Bağlantı')->searchable(),
                Tables\Columns\TextColumn::make('order')
                    ->label('Sıra')->numeric()
                    ->sortable(),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
