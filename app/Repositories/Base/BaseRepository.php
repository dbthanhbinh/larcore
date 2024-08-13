<?php

namespace App\Repositories\Base;

class BaseRepository implements IBaseRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function all()
    {
        return User::all();
    }

    public function create(array $data)
    {

    }

    public function update(array $data, $id)
    {

    }

    public function delete($id)
    {

    }

    public function find($id)
    {

    }
}
