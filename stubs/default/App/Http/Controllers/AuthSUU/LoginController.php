<?php

namespace App\Http\Controllers\AuthSUU;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!$validator->fails()){
            $data = $this->checkSUU(request()->only(['email', 'password']));
            if(!$data->error){
                $user = User::where('email', request()->only(['email']))->first();
                if($user){
                    Auth::loginUsingId($user->id);
                    return redirect('/');
                }else{
                    return redirect()->guest('login');
                }
            }else{
                return redirect()->guest('login');
            }
        }else{
            return redirect()->guest('login');
        }
    }

    private function checkSUU($campos)
    {

        $campos = http_build_query([
            'username' => $campos['email'],
            'password' => md5($campos['password'])
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://webservicebeta.irapuato.gob.mx/auth_beta_r/index.php/api/Usuario/select");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 900);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
        curl_setopt($ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST  , 'POST');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $campos);
        
        // Recibir respuesta
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $respuestaServidor = curl_exec($ch);
        curl_close($ch);
        return json_decode($respuestaServidor);
    }
}
