<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScholarshipApplicationResource\Pages;
use App\Models\ScholarshipApplication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ScholarshipApplicationResource extends Resource
{
    protected static ?string $model = ScholarshipApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function getModelLabel(): string
    {
        return 'Burs Başvurusu';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Burs Başvuruları';
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Burs Bilgisi')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('track')
                            ->label('Başvuru Türü')->disabled(),
                        Forms\Components\TextInput::make('scholarship_type')
                            ->label('Burs Seçeneği')->disabled(),
                    ]),

                Forms\Components\Section::make('Öğrenci Bilgileri')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('first_name')->label('Adı')->disabled(),
                        Forms\Components\TextInput::make('last_name')->label('Soyadı')->disabled(),
                        Forms\Components\TextInput::make('birth_year')->label('Doğum Yılı')->disabled(),
                        Forms\Components\TextInput::make('province')->label('İl')->disabled(),
                        Forms\Components\TextInput::make('study_country')->label('Öğrenim Görülen Ülke')->disabled(),
                        Forms\Components\TextInput::make('study_city')->label('Şehir')->disabled(),
                        Forms\Components\TextInput::make('study_language')->label('Öğrenim Dili')->disabled(),
                        Forms\Components\TextInput::make('institution_name')->label('Kayıtlı Olduğu Okul/Kurum')->disabled(),
                        Forms\Components\TextInput::make('education_level')->label('Eğitim Kademesi')->disabled(),
                        Forms\Components\TextInput::make('grade_year')->label('Sınıf/Yıl')->disabled(),
                        Forms\Components\TextInput::make('gpa_scale')->label('Not Ortalaması Ölçeği')->disabled(),
                        Forms\Components\TextInput::make('gpa_value')->label('Not Ortalaması')->disabled(),
                        Forms\Components\TextInput::make('enrollment_status')->label('Kayıt Durumu')->disabled(),
                        Forms\Components\TextInput::make('annual_tuition_amount')->label('Yıllık Öğrenim Ücreti')->disabled(),
                        Forms\Components\TextInput::make('annual_tuition_currency')->label('Döviz')->disabled(),
                        Forms\Components\Textarea::make('other_scholarship_info')
                            ->label('Başka Kurumdan Alınan Burs/Kredi')->columnSpanFull()->disabled(),
                    ]),

                Forms\Components\Section::make('Veli/Vasi Bilgileri')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('guardian_relationship')->label('Yakınlık')->disabled(),
                        Forms\Components\TextInput::make('guardian_email')->label('E-posta')->disabled(),
                        Forms\Components\TextInput::make('guardian_phone')->label('Telefon')->disabled(),
                        Forms\Components\Textarea::make('support_need_description')
                            ->label('Destek İhtiyacı')->columnSpanFull()->disabled(),
                    ]),

                Forms\Components\Section::make('Belgeler')
                    ->schema([
                        Forms\Components\Repeater::make('documents')
                            ->relationship('documents')
                            ->label('Yüklenen Belgeler')
                            ->disabled()
                            ->addable(false)
                            ->deletable(false)
                            ->reorderable(false)
                            ->schema([
                                Forms\Components\TextInput::make('document_type')->label('Belge Türü')->disabled(),
                                Forms\Components\TextInput::make('original_filename')->label('Dosya Adı')->disabled(),
                                Forms\Components\Placeholder::make('download')
                                    ->label('İndir')
                                    ->content(fn ($record) => $record
                                        ? new \Illuminate\Support\HtmlString('<a href="' . $record->download_url . '" target="_blank">Belgeyi İndir</a>')
                                        : '-'),
                            ])
                            ->columns(3),
                    ]),

                Forms\Components\Section::make('İnceleme')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->label('Durum')
                            ->options([
                                'pending' => 'Beklemede',
                                'under_review' => 'İnceleniyor',
                                'needs_documents' => 'Belge Bekleniyor',
                                'approved' => 'Onaylandı',
                                'rejected' => 'Reddedildi',
                            ])
                            ->required(),
                        Forms\Components\Textarea::make('admin_notes')
                            ->label('Yönetici Notları')->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->label('Ad Soyad')
                    ->getStateUsing(fn ($record) => $record->full_name)
                    ->searchable(['first_name', 'last_name']),
                Tables\Columns\TextColumn::make('track')
                    ->label('Başvuru Türü')
                    ->badge()
                    ->formatStateUsing(fn ($state) => $state === 'domestic' ? 'Yurt İçi' : 'Yurt Dışı')
                    ->color(fn ($state) => $state === 'domestic' ? 'info' : 'warning'),
                Tables\Columns\TextColumn::make('scholarship_type')
                    ->label('Burs Seçeneği')->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Durum')
                    ->badge()
                    ->formatStateUsing(fn ($state) => [
                        'pending' => 'Beklemede',
                        'under_review' => 'İnceleniyor',
                        'needs_documents' => 'Belge Bekleniyor',
                        'approved' => 'Onaylandı',
                        'rejected' => 'Reddedildi',
                    ][$state] ?? $state)
                    ->color(fn ($state) => match ($state) {
                        'approved' => 'success',
                        'rejected' => 'danger',
                        'needs_documents' => 'warning',
                        'under_review' => 'info',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('guardian_email')
                    ->label('E-posta')->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('guardian_phone')
                    ->label('Telefon')->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Başvuru Tarihi')->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('track')
                    ->label('Başvuru Türü')
                    ->options([
                        'domestic' => 'Yurt İçi',
                        'international' => 'Yurt Dışı',
                    ]),
                Tables\Filters\SelectFilter::make('status')
                    ->label('Durum')
                    ->options([
                        'pending' => 'Beklemede',
                        'under_review' => 'İnceleniyor',
                        'needs_documents' => 'Belge Bekleniyor',
                        'approved' => 'Onaylandı',
                        'rejected' => 'Reddedildi',
                    ]),
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
            'index' => Pages\ListScholarshipApplications::route('/'),
            'edit' => Pages\EditScholarshipApplication::route('/{record}/edit'),
        ];
    }
}
