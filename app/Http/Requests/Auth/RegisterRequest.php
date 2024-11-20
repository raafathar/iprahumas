<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use App\Registrasi\JenisKartuState;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'jabatan' => ['required'],
            'golongan' =>
            ['required', 'string', 'max:255'],
            'instansi' => ['required'],
            'NIP' => ['required', 'string', Rule::unique("forms", "NIP")->where(function ($q) {
                $q->where("isAccept", 1);
            })],
            'f_unit_kerja' => ['required', 'string', 'max:255'],
            'f_no_wa' => ['required', 'string'],
            'f_alamat' => ['required', 'string', 'max:255'],
            'f_jenis_kartu' => ['required', "in:EMONEY,FLAZZ"],
            'f_bukti_pembayaran' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            "username.required" => "Nama mohon diisi !",
            "username.max" => "Nama terlalu panjang",

            "email.required" => "Email mohon diisi !",
            "email.email" => "Email tidak valid",
            "email.unique" => "Email telah digunakan !",
            "email.max" => "Email terlalu panjang",

            "jabatan.required" => "Jabatan mohon diisi !",

            "golongan.required" => "Golongan mohon diisi !",

            "instansi.required" => "Instansi mohon diisi !",

            "NIP.required" => "NIP mohon diisi !",
            "NIP.unique" => "NIP telah digunakan !",

            "f_unit_kerja.required" => "Unit Kerja mohon diisi !",
            "f_no_wa.required" => "No WA mohon diisi !",

            "f_jenis_kartu.required" => "Jenis Kartu mohon diisi !",
            "f_jenis_kartu.in" => "Jenis Kartu tidak valid !",

            "f_alamat.required" => "Alamat mohon diisi !",
            "f_alamat.max" => "Alamat terlalu panjang !",

            "f_bukti_pembayaran.required" => "Bukti pembayaran mohon diisi !",

            "password.required" => "Kata kunci mohon diisi !",
            "password.confirmed" => "Mohon ulangi Kata kunci dengan benar !",
        ];
    }
}