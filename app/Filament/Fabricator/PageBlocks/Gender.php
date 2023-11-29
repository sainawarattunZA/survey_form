<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Gender extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('gender')
            ->schema([
                TextInput::make('gender')->label('Gender')->default('Gender')
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}