<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regist extends Model
{
    protected $table = 'user_teman';

    protected $fillable = ['nama', 'no_hp', 'jenis_kelamin', 'tahun_lahir', 'email', 'password', 'alamat'];

    use HasFactory;
}
