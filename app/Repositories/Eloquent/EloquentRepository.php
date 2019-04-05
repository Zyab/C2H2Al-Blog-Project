<?php


namespace App\Repositories\Eloquent;


use App\Repositories\Contracts\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{

    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get Model
     * @return string
     */
    abstract public function getModel();

    /**
     * set Model
     */
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->model->find($id);
        return $result;
    }

    public function create($object)
    {
        try {
            $object = $this->model->create($object);
        } catch (\Exception $e) {
            return null;
        }
        return $object;
    }

    public function update($data, $object)
    {
        $object->update($data);
        return $object;
    }

    public function destroy($object)
    {
        $object->delete();
    }

}
