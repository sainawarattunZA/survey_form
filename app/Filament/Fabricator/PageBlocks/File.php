<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class File extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('file')
            ->schema([
                TextInput::make('file')
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}