<?php

namespace App\Filament\Resources;

use App\Enums\ChannelStatusEnum;
use App\Filament\Resources\B2CCustomerResource\Pages;
use App\Filament\Resources\B2CCustomerResource\RelationManagers;
use App\Models\B2CCustomer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class B2CCustomerResource extends Resource
{
    protected static ?string $model = B2CCustomer::class;


    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'B2C Customers';
    protected static ?string $modelLabel = 'Customer';

  public static function form(Form $form): Form
{
    return $form->schema([

        Forms\Components\Fieldset::make('Customer Information')->schema([
            Forms\Components\Grid::make(2)->schema([
                Forms\Components\TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->placeholder('e.g. john.doe@example.com'),

                Forms\Components\TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->placeholder('e.g. John Doe'),

              Forms\Components\TextInput::make('phone')
                ->label('Phone Number')
                ->required()
                ->numeric()
                ->minValue(0)
                ->placeholder('e.g. 1234567890')
                ->maxLength(20),

                Forms\Components\Select::make('channel')
                    ->label('Sales Channel')
                    ->options(ChannelStatusEnum::labels())
                    ->required()
                    ->placeholder('e.g. website or store'),

            ]),
        ]),


        Forms\Components\Fieldset::make('Billing Address')->schema([
            Forms\Components\TextInput::make('billing_address.street')
                ->label('Street')
                ->placeholder('123 Main St')
                ->required(),

            Forms\Components\TextInput::make('billing_address.city')
                ->label('City')
                ->placeholder('Los Angeles')
                ->required(),

            Forms\Components\TextInput::make('billing_address.state')
                ->label('State')
                ->placeholder('California')
                ->required(),

            Forms\Components\TextInput::make('billing_address.zip')
                ->label('Zip Code')
                ->placeholder('90001')
                ->required(),
        ]),


        Forms\Components\Fieldset::make('Shipping Address')->schema([
            Forms\Components\TextInput::make('shipping_address.street')
                ->label('Street')
                ->placeholder('456 Market Ave')
                ->required(),

            Forms\Components\TextInput::make('shipping_address.city')
                ->label('City')
                ->placeholder('San Francisco')
                ->required(),

            Forms\Components\TextInput::make('shipping_address.state')
                ->label('State')
                ->placeholder('California')
                ->required(),

            Forms\Components\TextInput::make('shipping_address.zip')
                ->label('Zip Code')
                ->placeholder('94105')
                ->required(),
        ]),
    ]);
}
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('channel')
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
            'index' => Pages\ListB2CCustomers::route('/'),
            'create' => Pages\CreateB2CCustomer::route('/create'),
            'edit' => Pages\EditB2CCustomer::route('/{record}/edit'),
        ];
    }
}
