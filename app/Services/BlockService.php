<?php

namespace App\Services;

use App\Repositories\BlockRepositoryInterface;
use App\DTOs\BlockDTO;

class BlockService
{
    protected $repository;

   
    public function __construct(BlockRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data)
    {
        $blockDTO = new BlockDTO(null, $data['name'], $data['domain_id']);
        return $this->repository->create((array)$blockDTO);
    }

    public function update($id, array $data)
    {
        
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

}
