<?php


namespace App\Services;


interface UserServiceInterface
{
    public function getById($id);
    public function update($request, $user);
}
