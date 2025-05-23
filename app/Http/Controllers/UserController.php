<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepository;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    protected $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }
    // Show all users
    public function index()
    {
        $users = $this->users->all();
        return view('users', compact('users'));
    }

    // Show single user by id
    public function show($id)
    {
        $user = $this->users->find($id);
        if (!$user) {
            abort(404);
        }
        return view('user', compact('user'));
    }

    // Show onboarding form
    public function create()
    {
        return view('onboard');
    }

    // Store new user (from form or API)
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $user = $this->users->create([
            'first_name' => $validated['firstName'],
            'last_name' => $validated['lastName'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'phone_number' => $validated['phoneNumber'],
            'age' => $validated['age'],
            'gender' => $validated['gender'],
            'address' => $validated['address'],
        ]);
        if ($request->wantsJson()) {
            return response()->json(['user' => $user], 201);
        }
        return redirect()->route('users.show', $user->id);
    }

    // API: Get all users
    public function apiIndex()
    {
        return response()->json($this->users->all());
    }

    // API: Get single user
    public function apiShow($id)
    {
        $user = $this->users->find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user);
    }

    // API: Update user
    public function apiUpdate(UpdateUserRequest $request, $id)
    {
        $user = $this->users->find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $validated = $request->validated();
        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }
        $this->users->update($user, $validated);
        return response()->json($user);
    }

    // API: Delete user
    public function apiDestroy($id)
    {
        $user = $this->users->find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $this->users->delete($user);
        return response()->json(['message' => 'User deleted']);
    }
}
