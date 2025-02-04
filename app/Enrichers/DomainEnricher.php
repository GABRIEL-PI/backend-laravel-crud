<?php

namespace App\Enrichers;

use App\DTOs\DomainDTO;

class DomainEnricher
{
    
    public function __construct()
    {
        //
    }

    public function enrich(DomainDTO $domainDTO)
    {
        
        return $domainDTO;
    }
}
