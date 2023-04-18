<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:225',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tahun_lahir' => 'required|date',
            'email' => 'required|email|unique:user_teman',
            'password' => 'required|min:8',
            'alamat' => 'required|max:225',
        ];
    }

    public function messages(): array
    {
        $error_messages = [
            'nama.required' => 'nama tidak boleh kosong',
            'nam.string' => 'nama harus berupa kalimat',
            'no_hp.required' => 'no_hp tidak boleh kosong',
            'no_hp.integer' => 'no_hp harus berupa angka',
            'tahun_lahir.required' => 'tahun_lahir tidak boleh kosong',
            'tahun_lahir.date' => 'tahun_lahir harus berformat YYYY-MM-DD',
            'email.unique' => 'nama sudah terdaftar',
            'email.required' => 'email tidak boleh kosong',
            'email.email' => 'email harus berupa email',
            'password.required' => 'password tidak boleh kosong',
            'password.min' => 'password minimal 8 karakter',
        ];

        return $error_messages;
    }
}
