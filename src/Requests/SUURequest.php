<?php

namespace TIGIrapuato\LaraSUU\Requests;

use TIGIrapuato\LaraSUU\Models\UserSUU;
use Illuminate\Support\Facades\DB;

class SUURequest
{
    public static function checkSUU($fields)
    {
        $error = true;
        $user = UserSUU::where([
            'username' => $fields['email'],
            'password' => md5($fields['password'])
        ])->first();

        if ($user) {
            $error = false;
            $roles = self::getPermissionsSUU($user);
            return [
                'error' => $error,
                'data' => $user->toArray(),
                'roles' => $roles
            ];
        } else {
            return ['error' => $error];
        }
    }

    private static function getPermissionsSUU($user)
    {
        return UserSUU::select(
            DB::raw("
                usuario.id as usuario_id,
                usuario_perfil_sistema.id as usuario_perfil_sistema_id,
                perfil_sistema.id AS perfil_sistema_id,
                perfil_sistema.clave,
                perfil.id AS perfil_id,
                perfil.nombre
            ")
        )
            ->leftJoin('usuario_perfil_sistema', 'usuario_perfil_sistema.usuario_id', '=', 'usuario.id')
            ->leftJoin('perfil_sistema', 'perfil_sistema.id', '=', 'usuario_perfil_sistema.perfil_sistema_id')
            ->leftJoin('perfil', 'perfil.id', '=', 'perfil_sistema.perfil_id')
            ->where('usuario.id', $user['id'])->get()->toArray();
    }
}
