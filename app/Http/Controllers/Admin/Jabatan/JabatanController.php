<?php

namespace App\Http\Controllers\Admin\Jabatan;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\DataTables\JabatanDataTable;
use App\DTO\Jabatan\JabatanDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Jabatan\JabatanRequest;
use App\Services\Master\MasterService;

class JabatanController extends Controller
{
    public function __construct(
        public MasterService $masterService
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(JabatanDataTable $dataTable)
    {
        return $dataTable->render("dashboard.admin.jabatan.lihat");
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
    public function store(JabatanRequest $request)
    {
        $jabatanDTO = new JabatanDTO(
            $request->input("j_nama")
        );
        try {
            $this->masterService->createJabatan($jabatanDTO);
        } catch (\Exception $th) {
            return back()->with("error", "Internal Error");
        }
        return back()->with("success", "Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jabatan $jabatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JabatanRequest $request, string $id)
    {
        try {
            $data = $this->masterService->getDataJabatanById($id);
            $jabatanDTO = new JabatanDTO(
                $request->input("j_nama")
            );
            $newData = $this->masterService->updateJabatan($jabatanDTO, $id);
        } catch (\Exception $th) {
            return back()->with("error", "Internal Error");
        }
        return back()->with("success", "Data " . $data->j_nama . " berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $item = $this->masterService->getDataJabatanById($id);
            $this->masterService->deleteJabatan($id);
        } catch (\Exception $th) {
            return back()->with("error", "Internal Error");
        }
        return back()->with("success", "Berhasil menghapus " . $item->j_nama);
    }
}
