<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * @var     UserService
     */
    protected UserService $userService;

    /**
     * UserController constructor.
     * @param   UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return $this->userService->index();
    }

    /**
     * Display the specified resource.
     *
     * @param   User $user
     * @return  View
     */
    public function show(User $user): View
    {
        return $this->userService->show($user);
    }
}
