<?php

namespace App\Enrichers;

use App\DTOs\BlockDTO;

class BlockEnricher
{
    
    public function __construct()
    {
        //
    }

    public function enrich(BlockDTO $blockDTO)
    {
        
        return $blockDTO;
    }
}
