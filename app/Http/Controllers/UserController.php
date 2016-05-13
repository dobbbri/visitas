<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index(Request $request, User $user)
    {
        $users     = $this->repository->all($request);
        $isFiltred = $request->has('search');

        return view('users.index', compact('users', 'user', 'isFiltred'));
    }

    public function store(UserRequest $request)
    {
        $this->repository->create($request);

        return redirect('/users');
    }

    public function update(UserRequest $request, User $user)
    {
        $this->repository->update($request, $user);

        return redirect('/users');
    }

    public function destroy(Request $request, User $user)
    {
        $this->repository->delete($user);

        return redirect('/users');
    }
}
