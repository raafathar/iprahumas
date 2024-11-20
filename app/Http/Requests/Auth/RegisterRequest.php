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
        // dd($this->all());
        return [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'jabatan' => ['required'],
            'golongan' => ['required'],
            'keahlian' => ['required'],
            'f_agama' => ['required'],
            'instansi' => ['required'],
            'NIP' => ['required', 'string', Rule::unique("forms", "NIP")->where(function ($q) {
                $q->where("isAccept", 1);
            })],
            'f_agama' => ['required'],
            'f_unit_kerja' => ['required'],
            'f_pendidikan_terakhir' => ['required'],
            'f_universitas' => ['required'],
            'f_tanggal_lahir' => ['required', 'date'],
            'kelurahan' => ['required'],
            'kecamatan' => ['required'],
            'kabupaten' => ['required'],
            'provinsi' => ['required'],
            'f_no_wa' => ['required', 'string'],
            'f_alamat' => ['required', 'string', 'max:255'],
            "f_bukti_pembayaran" => ["required", "extensions:jpg,png"]
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

            "f_agama.required" => "Agama mohon diisi !",

            "f_alamat.required" => "Alamat mohon diisi !",
            "f_alamat.max" => "Alamat terlalu panjang !",

            'f_unit_kerja.required' => "Unit Kerja mohon diisi !",
            'f_pendidikan_terakhir.required' => "Pendidikan Terakhir mohon diisi !",

            'f_universitas.required' => "Universitas mohon diisi !",
            'f_tanggal_lahir.required' => "Tanggal Lahir mohon diisi !",
            'f_tanggal_lahir.date' => "Tanggal lahir tidak valid !",

            'keahlian.required' => "Keahlian mohon diisi !",
            'kelurahan.required' => "Kelurahan mohon diisi !",
            'kecamatan.required' => "Kecamatan mohon diisi !",
            'kabupaten.required' => "Kabupaten mohon diisi !",
            'provinsi.required' => "Provinsi mohon diisi !",

            "f_bukti_pembayaran.required" => "Bukti pembayaran mohon diisi !",
            "f_bukti_pembayaran.extensions" => "Bukti pembayaran gunakan format jpg atau png !",
        ];
    }
}
