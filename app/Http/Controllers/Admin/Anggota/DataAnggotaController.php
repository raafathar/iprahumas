<?php

namespace App\Http\Controllers\Admin\Anggota;

use App\DataTables\AnggotaDataTable;
use App\DTO\Registration\RegistrationDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Anggota\AnggotaRequest;
use App\Services\Registration\RegistrationService;
use Illuminate\Http\Request;

class DataAnggotaController extends Controller
{
    private $registrationService;

    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(AnggotaDataTable $dataTable)
    {
        return $dataTable->render("dashboard.admin.anggota.index");
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
    public function store(AnggotaRequest $request, string $id)
    {
        dd($request->all());
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
    public function update(AnggotaRequest $request, string $id)
    {
        try {
            $data = $this->registrationService->getPendaftaranById($id);
            $aggotaDTO = new RegistrationDTO(
                username: $request->input('username'),
                email: $request->input('email'),
                jabatan_id: $request->input('jabatan_id'),
                golongan_id: $request->input('golongan_id'),
                instansi_id: $request->input('instansi_id'),
                NIP: $request->input('NIP'),
                f_unit_kerja: $request->input('f_unit_kerja'),
                f_no_wa: $request->input('f_no_wa'),
                f_jenis_kartu: $request->input('f_jenis_kartu'),
                f_alamat: $request->input('f_alamat'),
            );

            $newData = $this->registrationService->updateAnggota($aggotaDTO, $id);

            // dd($newData);

            // dd($newData);

            //     // dd($newData);
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
}