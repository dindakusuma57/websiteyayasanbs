<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisimisiResource\Pages;
use App\Filament\Resources\VisimisiResource\RelationManagers;
use App\Models\Visimisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisimisiResource extends Resource
{
    protected static ?string $model = Visimisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-2';

    protected static ?string $navigationGroup = 'Profile';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make([
                Grid::make()
                    ->schema([
                        MarkdownEditor::make('visi')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('visimisi'),

                        FileUpload::make('gambar_visi')
                            ->label('Gambar Visi')
                            ->directory('visimisi')
                            ->image()
                            ->required()
                            ->rules('required'),

                        MarkdownEditor::make('misi')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('visimisi'),

                        FileUpload::make('gambar_misi')
                            ->label('Gambar Misi')
                            ->directory('visimisi')
                            ->image()
                            ->required()
                            ->rules('required'),

                    ])
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('visi')
                    ->searchable(),
                ImageColumn::make('gambar_visi')
                    ->label('Gambar')
                    ->width(100)
                    ->height(100),
                Tables\Columns\TextColumn::make('misi')
                    ->searchable(),
                ImageColumn::make('gambar_misi')
                    ->label('Gambar')
                    ->width(100)
                    ->height(100),
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
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                ])
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
            'index' => Pages\ListVisimisis::route('/'),
            'create' => Pages\CreateVisimisi::route('/create'),
            'edit' => Pages\EditVisimisi::route('/{record}/edit'),
        ];
    }
}
