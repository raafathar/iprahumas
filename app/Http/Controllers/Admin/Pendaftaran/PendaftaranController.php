<?php

namespace App\Http\Controllers\Admin\Pendaftaran;

use App\DataTables\PendaftaranDataTable;
use App\DTO\Registration\RegistrationDTO;
use App\Http\Controllers\Controller;
use App\Services\Registration\RegistrationService;
use App\Http\Requests\Pendaftaran\PendaftaranRequest;
use Illuminate\Http\Request;

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
            $data = $this->registrationService->getPendaftaranById($id);
            $pendaftaranDTO = new RegistrationDTO(
                isAccept: $request->input('isAccept')

            );

            $newData = $this->registrationService->updatePendaftaran($pendaftaranDTO, $id);
            // dd($newData);
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
