<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class MyBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('my')
        ->label('Name')
            ->schema([
                TextInput::make('firstname')->label('First Name'),
                TextInput::make('lastname')->label('Last Name'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}