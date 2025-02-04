<?php

namespace App\Services;

use App\Repositories\DomainRepositoryInterface;
use App\DTOs\DomainDTO;

class DomainService
{
    protected $repository;

   
    public function __construct(DomainRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data)
    {
        $domainDTO = new DomainDTO(null, $data['name']);
        return $this->repository->create((array)$domainDTO);
    }

    public function update($id, array $data) {return $this->repository->update($id, $data);}

    public function delete($id) {return $this->repository->delete($id);}

    public function all() {return $this->repository->all();}

    public function find($id) {return $this->repository->find($id);}
}
