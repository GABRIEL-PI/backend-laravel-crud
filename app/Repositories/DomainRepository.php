<?php

namespace App\Repositories;

use App\Models\Domain;

class DomainRepository implements DomainRepositoryInterface
{

    public function all() {return Domain::with('blocks')->get();}

    public function find($id) {return Domain::with('blocks')->findOrFail($id);}

    public function create(array $data) {return Domain::create($data);}

    public function update($id, array $data)
    {
        $domain = Domain::findOrFail($id);
        $domain->update($data);
        return $domain;
    }

    public function delete($id)
    {
        $domain = Domain::findOrFail($id);
        $domain->delete();
    }
}
