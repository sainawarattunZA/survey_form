<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use PhpParser\Node\Stmt\Label;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Email extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('email')
        ->label('Email')
            ->schema([
                TextInput::make('Email')
                ->default('Email')

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}