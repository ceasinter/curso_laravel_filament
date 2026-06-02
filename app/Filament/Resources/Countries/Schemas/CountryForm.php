<?php

namespace App\Filament\Resources\Countries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CountryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('iso2')
                    ->required(),
                TextInput::make('iso3')
                    ->required(),
                TextInput::make('numeric_code'),
                TextInput::make('phonecode')
                    ->tel(),
                TextInput::make('capital'),
                TextInput::make('currency'),
                TextInput::make('currency_name'),
                TextInput::make('currency_symbol'),
                TextInput::make('tld'),
                TextInput::make('native'),
                TextInput::make('region'),
                TextInput::make('subregion'),
                Textarea::make('timezones')
                    ->columnSpanFull(),
                Textarea::make('translations')
                    ->columnSpanFull(),
                TextInput::make('latitude')
                    ->numeric(),
                TextInput::make('longitude')
                    ->numeric(),
                TextInput::make('emoji'),
                TextInput::make('emojiU'),
                Toggle::make('flag')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
