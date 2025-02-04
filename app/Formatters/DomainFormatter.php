<?php

namespace App\Formatters;

use App\DTOs\DomainDTO;

class DomainFormatter
{
    
    public function __construct()
    {
        //
    }

    public function format(DomainDTO $domainDTO)
    {
        
        return [
            'id' => $domainDTO->id,
            'name' => $domainDTO->name,
            
        ];
    }
}
