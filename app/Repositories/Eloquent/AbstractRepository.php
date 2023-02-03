<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create($request)
    {
        return $this->model->create($request);
    }

    public function update()
    {
        return $this->model->update();
    }

    public function delete()
    {
        return $this->model->delete();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }
}
