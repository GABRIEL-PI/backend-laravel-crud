<?php

namespace App\Formatters;

use App\DTOs\BlockDTO;

class BlockFormatter
{
    
    public function __construct()
    {
        //
    }

    public function format(BlockDTO $blockDTO)
    {
        
        return [
            'id' => $blockDTO->id,
            'name' => $blockDTO->name,
            
        ];
    }
}
