<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExampleStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        # User is a model, first() is a method that allows you to get the first record from the database.
        $users =  User::paginate(10); // User::all();
        $countUser = User::count();

        # Forma Compactada de retornar para a view dados do usuário.
        # compact() is a method that allows you to pass a variable to a view.
        return view('admin.users.index', compact('users', 'countUser'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(ExampleStoreRequest $request){

        User::create($request->all());

        return redirect()->route('users.index');
    }
}
