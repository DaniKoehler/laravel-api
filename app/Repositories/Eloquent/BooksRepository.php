<?php

namespace App\Repositories\Eloquent;

use App\Models\Book;
use App\Repositories\Contracts\BooksRepositoryInterface;

class BooksRepository extends AbstractRepository implements BooksRepositoryInterface
{
    protected $model = Book::class;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function resolveModel()
    {
        return app($this->model);
    }
}
