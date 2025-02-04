<?php

namespace App\Http\Controllers;

use App\Repositories\DomainRepositoryInterface;
use Illuminate\Http\Request;
use App\Services\DomainService;

class DomainController extends Controller
{
    protected $repository;
    protected $domainService;

    public function __construct(DomainRepositoryInterface $repository, DomainService $domainService)
    {
        $this->repository = $repository;
        $this->domainService = $domainService;
    }

    public function index() {$domains = $this->domainService->all();return response()->json($domains);}

    public function store(Request $request) {return response()->json($this->repository->create($request->all()), 201);}

    public function show($id) {return response()->json($this->repository->find($id));}

    public function update(Request $request, $id) {return response()->json($this->repository->update($id, $request->all()));}

    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'Block deleted successfully'], 204);
    }
}
