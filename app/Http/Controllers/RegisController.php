<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormReq;
use App\Models\regist;

class RegisController extends Controller
{
    public function regis(FormReq $request)
    {
        $user = new regist();
        $user->nama = $request->nama;
        $user->no_hp = $request->no_hp;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->tahun_lahir = $request->tahun_lahir;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->alamat = $request->alamat;
        $user->save();

        return redirect('/');
    }
}
