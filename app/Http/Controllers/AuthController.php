<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $this->validateRegisterData($request);

        $user = $this->createUser($validatedData);

        return $this->redirectToLogin();
    }

    protected function validateRegisterData(Request $request)
    {
        return $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    protected function createUser(array $validatedData)
    {
        return User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
    }

    protected function redirectToLogin()
    {
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if ($this->attemptLogin($credentials, $remember)) {
            return $this->redirectToIndex();
        } else {
            return $this->sendFailedLoginResponse();
        }
    }

    protected function attemptLogin(array $credentials, bool $remember)
    {
        return Auth::attempt($credentials, $remember);
    }

    protected function redirectToIndex()
    {
        return redirect()->route('customer.index');
    }

    protected function sendFailedLoginResponse()
    {
        return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng']);
    }

    public function showLoginForm()
    {

        return view('auth.login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function showResetPasswordForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function index()
    {
        return view('index');
    }

}

