<?php


namespace App\Services\Impl;


use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\UserServiceInterface;

class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getById($id)
    {
        return $this->userRepository->findById($id);
    }

    public function update($request, $user)
    {
        // TODO: Implement update() method.
    }
}
