<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Phone extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('phone')
            ->schema([
                TextInput::make('phone')
                ->default('Phone Number')
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}