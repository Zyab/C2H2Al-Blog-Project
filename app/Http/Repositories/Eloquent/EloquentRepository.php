<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Repository;
use App\User;

abstract class EloquentRepository implements Repository
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }
    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }
    public function findById($id){
        $result = $this->model->find($id);
        return $result;
    }
    public function create($object)
    {
        $object = $this->model->create($object);
        return $object;
    }
    public function update($object)
    {
        $object = $this->model->update($object);
        return $object;
    }
    public function destroy($object)
    {
        $object->delete();
    }
}
