<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class CheckBox extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('check-box')
            ->schema([
                TextInput::make('name')->label('Check Box')->placeholder('Please Enter Check Box Title'),
                Repeater::make('check')
                ->schema([
                    TextInput::make('check_box')->label(' ')->placeholder('Please Enter Check Box Name')
                ])
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}