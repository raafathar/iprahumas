<?php

namespace App\Http\Controllers\Auth;

use App\Helper\helper;
use App\Models\Form;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Auth\RegisterRequest;

class RegisteredUserController extends Controller
{
    use helper;
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        $validate = $request->validated();
        // try {
        $transaction = DB::transaction(function () use ($validate, $request) {

            $user = User::create([
                'username' => $validate["username"],
                'email' => $validate["email"],
                'password' => $validate["password"],
            ]);

            $validate['f_bukti_pembayaran'] = $this->fileImageHandler($request, "f_bukti_pembayaran", "bukti_pembelajaran");

            Form::create([
                'user_id' => $user->id,
                'NIP' => $validate["NIP"],
                'jabatan_id' => $validate["jabatan"],
                'golongan_id' => $validate["golongan"],
                'instansi_id' => $validate["instansi"],
                'NIP' => $validate["NIP"],
                'f_unit_kerja' => $validate["f_unit_kerja"],
                'f_no_wa' => $validate["f_no_wa"],
                'f_jenis_kartu' => $validate["f_jenis_kartu"],
                'f_alamat' => $validate["f_alamat"],
                'f_bukti_pembayaran' => $validate["f_bukti_pembayaran"],
            ]);
        });
        if (!$transaction) {
            return back()->with("error", "Registrasi Gagal");
        }
        // } catch (\Exception $th) {
        //     return back()->with("error", "Terjadi Error");
        // }


        return back()->with("success", "Registrasi Berhasil");
    }
}
