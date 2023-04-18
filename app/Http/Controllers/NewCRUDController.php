<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormReq;
use App\Http\Requests\UpdateReq;
use App\Models\NewCRUD;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NewCRUDController extends Controller
{
    public function index(): View
    {
        $data = NewCRUD::all();

        return view('CRUD2.index', ['list' => $data]);
    }

    public function create(): View
    {
        return view('CRUD2.create');
    }

    public function store(FormReq $request): RedirectResponse
    {
        $user = new NewCRUD();
        $user->nama = $request->nama;
        $user->no_hp = $request->no_hp;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->tahun_lahir = $request->tahun_lahir;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->alamat = $request->alamat;
        $user->save();

        $request->session()->flash('status', "Penambahan data {$request->nama} berhasil");

        return redirect()->route('CRUD-NEW.index');
    }

    public function show(NewCRUD $CRUD_NEW): View
    {
        return view('CRUD2.show', ['data' => $CRUD_NEW]);
    }

    public function edit(NewCRUD $CRUD_NEW)
    {
        return view('CRUD2.edit', ['data' => $CRUD_NEW]);
    }

    public function update(UpdateReq $request, NewCRUD $CRUD_NEW)
    {
        $CRUD_NEW->update($request->all());

        return redirect()->route('CRUD-NEW.index')->with('status', 'Data berhasil diubah');
    }

    public function destroy(NewCRUD $CRUD_NEW): RedirectResponse
    {
        $CRUD_NEW->delete();

        return redirect()->route('CRUD-NEW.index')->with('status', 'Data berhasil dihapus');
    }
}
