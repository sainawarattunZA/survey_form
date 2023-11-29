<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Description extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('description')
            ->schema([
                TextInput::make('dec')->label('Description Label')->default('Description')
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}