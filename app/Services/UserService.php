<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Contracts\View\View;

class UserService
{
    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return view('users.index', [
            'users' => User::paginate(15)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param   User $user
     * @return  View
     */
    public function show(User $user): View
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
}
