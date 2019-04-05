<?php


namespace App\Http\Repositories;


use App\Http\Repositories\Eloquent\EloquentRepository;
use App\User;

class UserRepositoryImpl extends EloquentRepository
{
    public function getModel()
    {
        $model = User::class;
        return $model;
    }
}
