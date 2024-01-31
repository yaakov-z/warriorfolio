<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Forms\Components\Core\Info;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Footer extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('footer')
            ->schema([
                Section::make('Core: Footer Section Module')
                    ->description('Add a footer section module to your page.')
                    ->icon('heroicon-o-cpu-chip')
                    ->collapsed()
                    ->schema([
                        Info::make()->schema([
                            TextInput::make('active')
                                ->hidden()
                                ->label('Title')
                                ->maxLength(1),
                        ]),
                    ])
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
