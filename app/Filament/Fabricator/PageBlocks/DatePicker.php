<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class DatePicker extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('date-picker')
            ->schema([
                TextInput::make('date')->label('Date-Time')->default('Date-Time')
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}