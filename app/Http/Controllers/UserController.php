<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $validated_input = $request->validate([
            'firstname' => 'required | min: 3 | max: 10',
            'lastname' => 'required | min: 3 | max: 10',
            'email' => 'required',
            'password' => 'required | min: 6'
        ]);

        try {
            User::create($validated_input);
            return redirect('/login')->with('success', "Signup successful");
        } catch (QueryException $exception) {
            if ($exception->getCode() === '23000') {
                // Duplicate entry error
                return redirect()->back()->withInput()->withErrors(['email' => 'The email address is already in use. Please choose a different email.']);
            } else {
                // Other database-related error
                return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred. Please try again later.']);
            }
        }
    }
}
