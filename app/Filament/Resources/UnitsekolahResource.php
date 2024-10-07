<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UnitsekolahResource\Pages;
use App\Filament\Resources\UnitsekolahResource\RelationManagers;
use App\Models\Unitsekolah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UnitsekolahResource extends Resource
{
    protected static ?string $model = Unitsekolah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Grid::make()
                        ->schema([
                            TextInput::make('nama_unit')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('alamat_unit')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('deskripsi')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('link')
                                ->required()
                                ->maxLength(255),
                        ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_unit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat_unit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
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
            'index' => Pages\ListUnitsekolahs::route('/'),
            'create' => Pages\CreateUnitsekolah::route('/create'),
            'edit' => Pages\EditUnitsekolah::route('/{record}/edit'),
        ];
    }
}
