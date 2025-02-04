<?php

namespace App\Repositories;

use App\Models\Block;

class BlockRepository implements BlockRepositoryInterface
{
    public function all() {return Block::all();}

    public function find($id) {return Block::findOrFail($id);}

    public function create(array $data) {return Block::create($data);}

    public function update($id, array $data)
    {
        $block = $this->find($id);
        $block->update($data);
        return $block;
    }

    public function delete($id)
    {
        return Block::destroy($id);
    }
}