<?php

namespace App\DTOs;

class BlockDTO
{
    public ?int $id;
    public string $name;
    public int $domain_id;

    public function __construct(?int $id, string $name, int $domain_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->domain_id = $domain_id;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'domain_id' => $this->domain_id,
        ];
    }
}
