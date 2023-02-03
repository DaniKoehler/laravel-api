<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\BooksStoreRequest;
use App\Http\Requests\Api\BooksUpdateRequest;
use App\Repositories\Contracts\BooksRepositoryInterface;
use Illuminate\Http\JsonResponse;

class BooksController extends Controller
{
    public function __construct(private BooksRepositoryInterface $repository)
    {
    }
    public function index(): JsonResponse
    {
        return response()->json($this->repository->all());
    }

    public function show($id): JsonResponse
    {
        $book = $this->repository->find($id);

        return response()->json($book);
    }

    public function store(BooksStoreRequest $request): JsonResponse
    {
        $book = $this->repository->create($request->all());

        return response()->json($book, 201);
    }

    public function update(BooksUpdateRequest $request, $id): JsonResponse
    {
        $book = $this->repository->find($id);
        $book->update($request->all());

        return response()->json($book);
    }

    public function destroy($id): JsonResponse
    {
        $book = $this->repository->find($id);
        $book->delete();

        return response()->json(null, 204);
    }
}
