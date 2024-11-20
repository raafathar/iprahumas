<?php

namespace App\Http\Requests\Anggota;

use Illuminate\Foundation\Http\FormRequest;

class AnggotaRequest extends FormRequest
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
            'jabatan_id' => ['required'],
            'golongan_id' => ['required'],
            'instansi_id' => ['required'],
            'NIP' => ['required'],
            'f_unit_kerja' => ['required'],
            'f_no_wa' => ['required'],
            'f_jenis_kartu' => ['required'],
            'f_alamat' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'jabatan_id.required' => 'Jabatan belum diisi !',
            'golongan_id.required' => 'Golongan belum diisi !',
            'instansi_id.required' => 'Instansi belum diisi !',
            'NIP.required' => 'NIP belum diisi !',
            'f_unit_kerja.required' => 'Unit Kerja belum diisi !',
            'f_no_wa.required' => 'No. WA belum diisi !',
            'f_jenis_kartu.required' => 'Jenis Kartu belum diisi !',
            'f_alamat.required' => 'Alamat belum diisi !',
        ];
    }
}
