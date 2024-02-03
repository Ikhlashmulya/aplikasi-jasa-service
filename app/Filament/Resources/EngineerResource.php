<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EngineerResource\Pages;
use App\Filament\Resources\EngineerResource\RelationManagers;
use App\Models\Engineer;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EngineerResource extends Resource
{
    protected static ?string $model = Engineer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = "Teknisi";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('contact')->required(),
                FileUpload::make('photo')->image()->imageEditor()->preserveFilenames()->directory('files')->imageEditorAspectRatios([
                    '1:1'
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('contact')
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
            'index' => Pages\ListEngineers::route('/'),
            'create' => Pages\CreateEngineer::route('/create'),
            'edit' => Pages\EditEngineer::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return "teknisi";
    }
}
