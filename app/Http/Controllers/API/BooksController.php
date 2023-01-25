<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\BooksStoreRequest;
use App\Http\Requests\API\BooksUpdateRequest;
use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
class BooksController extends Controller
{
    public function __construct(private Book $book)
    {
    }
    public function index(): JsonResponse
    {
        return response()->json($this->book->all());
    }

    public function show($id): JsonResponse
    {
        $book = $this->book->find($id);

        return response()->json($book);
    }

    public function store(BooksStoreRequest $request): JsonResponse
    {
        $book = $this->book->create($request->all());

        return response()->json($book, 201);
    }

    public function update(BooksUpdateRequest $request, $id): JsonResponse
    {
        $book = $this->book->find($id);
        $book->update($request->all());

        return response()->json($book);
    }

    public function destroy($id): JsonResponse
    {
        $book = $this->book->find($id);
        $book->delete();

        return response()->json(null, 204);
    }
}
