<?php

namespace App\Http\Controllers\AuthSUU;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

        if(!$validator->fails()){
            $data = SUURequest::checkSUU(request()->only(['email', 'password']));
            if(!$data->error){
                $user = User::where('email', request()->only(['email']))->first();
                if($user){
                    Auth::loginUsingId($user->id);
                    session()->push('user.suu', $data);
                    $autenticated = true;
                }
            }
        }

        if($autenticated){
            return redirect(config('authsuu.redirect_succes')); 
        }else{
            return redirect()->guest( config('authsuu.redirect_fail'));
        }
    }
}
