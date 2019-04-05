<?php

namespace App\Http\Controllers\API;

use App\Services\UserServiceInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function changeInfo(Request $request, $id)
    {
        $user = $this->userService->findById($id);
        $newUser = $this->userService->update($request, $user);

        return response()->json([
            'status' => '200',
            'user' => $newUser
        ]);

    }

    public function showInfo($id)
    {
        $user = $this->userService->findById($id);
        return response()->json([
            'status' => '200',
            'user' => $user
        ]);
    }
    public function getAll(){
        $users = $this->userService->getAll();
        return response()->json([
           'user' => $users
        ]);
    }
    public function destroy($id){
        $user = $this->userService->destroy($id);
        return response()->json([
           'user' => $user
        ]);
    }
    public function store(Request $request)
    {
        $dataUser = $this->userService->create($request->all());

        return response()->json($dataUser['user']);
    }

    public function update(Request $request, $id)
    {
        $dataUser = $this->userService->update($request->all(), $id);

        return response()->json($dataUser['user']);
    }
}
