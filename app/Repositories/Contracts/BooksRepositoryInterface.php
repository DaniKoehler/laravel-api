<?php

namespace App\Repositories\Contracts;

interface BooksRepositoryInterface
{
    public function all();
    public function find($id);
    public function create($request);
    public function update();
    public function delete();
}
