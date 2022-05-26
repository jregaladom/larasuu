<?php

namespace TIGIrapuato\LaraSUU\Session;

class SUUSession
{
    public static function getUserName()
    {
        return session()->get('user.suu')[0]['username'];
    }

    public static function getEmail()
    {
        return session()->get('user.suu')[0]['email'];
    }

    public static function getSUUId()
    {
        return session()->get('user.suu')[0]['id'];
    }

    public static function getRoles()
    {
        return session()->get('user.suu')[0]['roles'];
    }
}