<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Option extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('option')
            ->schema([
                TextInput::make('name')->label('Title Name'),

                Repeater::make('select')
                ->schema([
                    TextInput::make('box_label')->label('Option Name'),
                ])

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}