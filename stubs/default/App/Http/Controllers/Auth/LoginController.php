<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use TIGIrapuato\LaraSUU\Requests\SUURequest;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $autenticated = false;
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!$validator->fails()) {
            $dataSUU = SUURequest::checkSUU(request()->only(['email', 'password']));
            if (!$dataSUU['error']) {
                $suu = [
                    'username' => $dataSUU['data']['username'],
                    'email' => $dataSUU['data']['correo_electronico'],
                    'id' => $dataSUU['data']['id'],
                    'roles' => $dataSUU['roles']
                ];
                $user = User::where('email', request()->only(['email']))->first();
                if ($user) {
                    Auth::loginUsingId($user->id);
                    session()->push('user.suu', $suu);
                    $autenticated = true;
                } else {
                    $user = $this->stored($dataSUU['data']['username'], $dataSUU['data']['correo_electronico'], request()->only(['password'])['password']);
                    Auth::login($user);
                    session()->push('user.suu', $suu);
                    $autenticated = true;
                }
            } else {
                return response()->json([
                    'message' => 'Usuario o contraseña incorrecta',
                    'isError'  => true,
                ], 200);
            }
        }

        if ($autenticated) {
            return response()->json([
                'redirectUrl' => config('authsuu.redirect_succes'),
                'isError'  => false,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Usuario o contraseña incorrecta',
                'isError'  => true,
            ], 200);
        }
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect(config('authsuu.redirect_fail'));
    }

    public function stored(string $username, string $email, string $password)
    {
        $user = User::create([
            'name' => $username,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        return $user;
    }
}