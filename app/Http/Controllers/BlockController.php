<?php

namespace App\Http\Controllers;

use App\Repositories\BlockRepositoryInterface;
use Illuminate\Http\Request;
use App\DTOs\BlockDTO;
use App\Services\BlockService;

class BlockController extends Controller
{
    protected $repository;
    protected $blockService;

    public function __construct(BlockRepositoryInterface $repository, BlockService $blockService)
    {
        $this->repository = $repository;
        $this->blockService = $blockService;
    }

    public function index() {return response()->json($this->repository->all(), 200);}

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'domain_id' => 'required|exists:domains,id',
        ]);

        $blockDTO = new BlockDTO(null, $request->name, $request->domain_id);
        $this->blockService->create($blockDTO->toArray());

        return response()->json(['message' => 'Block created successfully'], 201);
    }

    public function show($id)
    {
        $block = $this->repository->find($id);

        if (!$block) {
            return response()->json(['message' => 'Block not found'], 404);
        }

        return response()->json($block, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|string|max:255',
            'domain_id' => 'sometimes|exists:domains,id',
        ]);

        $block = $this->repository->update($id, $request->all());

        if (!$block) {
            return response()->json(['message' => 'Block not found'], 404);
        }

        return response()->json($block, 200);
    }

    public function destroy($id)
    {
        $block = $this->repository->find($id);

        if (!$block) {
            return response()->json(['message' => 'Block not found'], 404);
        }

        $this->repository->delete($id);

        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
