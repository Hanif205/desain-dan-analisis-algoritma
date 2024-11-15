<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FakultasResource\Pages;
use App\Filament\Admin\Resources\FakultasResource\RelationManagers;
use App\Models\Fakultas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FakultasResource extends Resource
{
    protected static ?string $model = Fakultas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Departemen')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Dosen')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Mahasiswa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('MataKuliah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('availability')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Departemen')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Dosen')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Mahasiswa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('MataKuliah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('availability')
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
            'index' => Pages\ListFakultas::route('/'),
            'create' => Pages\CreateFakultas::route('/create'),
            'edit' => Pages\EditFakultas::route('/{record}/edit'),
        ];
    }
}