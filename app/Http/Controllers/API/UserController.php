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
        $user = $this->userService->getById($id);
        $newUser = $this->userService->update($request, $user);

        return response()->json([
            'status' => '200',
            'user' => $newUser
        ]);

    }

    public function showInfo($id)
    {
        $user = $this->userService->getById($id);
        return response()->json([
            'status' => '200',
            'user' => $user
        ]);
    }

}
