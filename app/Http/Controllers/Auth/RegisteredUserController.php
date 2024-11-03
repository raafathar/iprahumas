<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use App\Helper\fileHandler;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Services\Master\MasterService;
use App\DTO\Registration\RegistrationDTO;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Registration\RegistrationService;

class RegisteredUserController extends Controller
{
    use fileHandler;

    public function __construct(
        private RegistrationService $registrationService,
        private MasterService $masterService,
    ) {}

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register', [
            "instansi" => $this->masterService->getAllDataInstansi(),
            "golongan" => $this->masterService->getAllDataGolongan(),
            "jabatan" => $this->masterService->getAllDataJabatan(),
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        $validate = $request->validated();
        $validate['f_bukti_pembayaran'] = $this->fileImageHandler($request, "f_bukti_pembayaran", "bukti_pembelajaran");

        $registrationDTO = new RegistrationDTO(
            $validate["jabatan"],
            $validate["golongan"],
            $validate["instansi"],
            $validate["NIP"],
            $validate["f_unit_kerja"],
            $validate["f_no_wa"],
            $validate["f_jenis_kartu"],
            $validate["f_alamat"],
            $validate["f_bukti_pembayaran"],
            $validate["username"],
            $validate["email"],
            $validate["password"],
            False,
        );

        try {
            $this->registrationService->RegisterMembership($registrationDTO);
        } catch (\Exception $th) {
            return back()->with("error", "Terjadi Error");
        }


        return back()->with("success", "Registrasi Berhasil");
    }
}
