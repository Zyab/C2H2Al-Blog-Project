<?php


namespace App\Repositories\Eloquent;


use App\Repositories\Contracts\UserRepositoryInterface;
use App\User;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = User::class;
        return $model;
    }
}
