<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function login(Request $request)
    {

        // Validate form data
        $this->validate($request, [
            'password'  => 'required|min:6'
        ]);
        

        if (Auth::attempt(['name' => $request->input('name'), 'password' => $request->input('password') ])) {
            // Authentication passed...
            return redirect()->intended('/paciente');
        }

        $errors = new MessageBag(['password' => ['Wrong name or password']]);

        return redirect()->back()->withInput( $request->only('name') )->withErrors($errors);

    }

    public function showLoginForm() {
      return view('login');
    }







    public function logout(Request $request) {
      Auth::logout();
      $request->session()->flush();
      $request->session()->regenerate();

      return redirect()->intended('/');
    }







}
