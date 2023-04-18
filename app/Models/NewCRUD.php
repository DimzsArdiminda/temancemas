<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCRUD extends Model
{
    protected $guarded = [];

    protected $table = 'user_teman';

    use HasFactory;
}
