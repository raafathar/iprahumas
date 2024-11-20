<?php

namespace App\Http\Controllers\Admin\Pendaftaran;

use App\DataTables\PendaftaranDataTable;
use App\DTO\Registration\RegistrationDTO;
use App\Http\Controllers\Controller;
use App\Services\Registration\RegistrationService;
use App\Http\Requests\Pendaftaran\PendaftaranRequest;
use App\Mail\SendSKPendaftaranMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\LaravelPdf\Facades\Pdf;

class PendaftaranController extends Controller
{
    private $registrationService;

    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(PendaftaranDataTable $dataTable)
    {
        $allowedStatuses = ['diterima', 'ditolak', 'diproses'];

        if (!in_array(request()->segment(4), $allowedStatuses)) {
            abort(404);
        }

        return $dataTable->render("dashboard.admin.pendaftaran.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PendaftaranRequest $request, string $id)
    {
        try {
            $data = $this->registrationService->getAnggotaById($id);
            $dataUser = $this->registrationService->getDataAnggotaById($id);

            // jika isAccept == 1 maka data akan di terima
            if ($request->input('isAccept') == "1") {
                try {
                    $this->generateSKPendaftaran($dataUser);
                    $this->sendEmail($data);
                } catch (\Exception $e) {
                    return back()->with('error', 'Internal Error');
                }
            }
            $pendaftaranDTO = new RegistrationDTO(
                isAccept: $request->input('isAccept')
            );

            $newData = $this->registrationService->updatePendaftaran($pendaftaranDTO, $id);
        } catch (\Exception $th) {
            return back()->with('error', 'Internal Error');
        }
        return back()->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->registrationService->deletePendaftaran($id);
        } catch (\Exception $th) {
            return back()->with('error', 'Internal Error');
        }
        return back()->with('success', 'Data berhasil dihapus');
    }

    public function sendEmail($data)
    {
        try {
            Mail::to($data->email)->send(new SendSKPendaftaranMail($data));
        } catch (\Exception $th) {
            return back()->with('error', 'Internal Error');
        }
    }

    public function generateSKPendaftaran($data)
    {

        // dd($data->user->username);

        $username =   str_replace(' ', '_', $data->user->username);
        try {
            $pdf = Pdf::view('documents.pdf_sk_diterima', ['data' => $data])
                ->format('a4')
                ->save('storage/sk_anggota/' . $username . '_' . $data->user->id . '.pdf');
        } catch (\Exception $th) {
            return back()->with('error', 'Internal Error');
        }
    }
}
