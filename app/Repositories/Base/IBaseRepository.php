<?php

namespace App\Repositories\Base;

interface IBaseRepository
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id);
}
