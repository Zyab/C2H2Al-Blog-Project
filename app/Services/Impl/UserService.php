<?php


namespace App\Services\Impl;


use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\UserServiceInterface;
use App\User;

class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function findById($id)
    {
        $user = $this->userRepository->findById($id);
        return $user;
    }

    public function update($request, $id)
    {
//        $user->name = $request->input('name');
//        $user->email = $request->input('email');
//        $user->password = bcrypt($request->input('email'));
//        $user->address = $request->input('address');
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $path = $image->store('images', 'public');
//            $user->image = $path;
//        }
//        $user->dob = $request->input('dob');
//        $user->gender = $request->input('gender');
        $oldUser = $this->userRepository->findById($id);
        $user = $this->userRepository->update($request, $oldUser);
        return $user;
    }

    public function getAll()
    {
        $users = $this->userRepository->getAll();
        return $users;
    }

    public function create($request)
    {
//        $user = new User();
//        $user->name = $request->input('name');
//        $user->email = $request->input('email');
//        $user->password = bcrypt($request->input('email'));
//        $user->address = $request->input('address');
//
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $path = $image->store('images', 'public');
//            $user->image = $path;
//        }
//        $user->dob = $request->input('dob');
//        $user->gender = $request->input('gender');
        $user = $this->userRepository->create($request);
        return $user;
    }

    public function destroy($id)
    {
        $user = $this->userRepository->destroy($id);
        return $user;
    }
}
