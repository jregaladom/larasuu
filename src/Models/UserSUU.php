<?php

namespace TIGIrapuato\LaraSUU\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSUU extends Model
{
    use HasFactory;

    protected $connection   = 'suu';
    protected $table = 'usuario';
    static public $_table   = 'usuario';
}
