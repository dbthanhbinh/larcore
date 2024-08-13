<?php

namespace App\Services\Base;

class BaseService
{
    protected $repository;
    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->repository->update($data, $id);
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
