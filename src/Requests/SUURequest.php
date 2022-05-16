<?php

namespace TIGIrapuato\LaraSUU\Requests;
use Illuminate\Support\Facades\Http;

class SUURequest
{
    public static function checkSUU($campos)
    {
        $url = env('SUU_URL');
        $response = Http::asForm()->post(
        "{$url}/auth_beta_r/index.php/api/Usuario/select",
        [
            'username' => $campos['email'],
            'password' => md5($campos['password'])
        ]);
        return json_decode($response->body());
    }
}