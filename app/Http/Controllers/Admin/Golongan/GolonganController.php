<?php

namespace App\Http\Controllers\Admin\Golongan;

use App\DataTables\GolonganDataTable;
use App\DTO\Golongan\GolonganDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Golongan\GolonganRequest;
use App\Models\Golongan;
use App\Services\Master\MasterService;
use Illuminate\Http\Request;

class GolonganController extends Controller
{

    public function __construct(
        public MasterService $masterService
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(GolonganDataTable $dataTable)
    {
        return $dataTable->render("dashboard.admin.golongan.lihat");
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
    public function store(GolonganRequest $request)
    {
        $golonganDTO = new GolonganDTO(
            $request->input("g_nama")
        );
        try {
            $this->masterService->createGolongan($golonganDTO);
        } catch (\Exception $th) {
            return back()->with("error", "Internal Error");
        }
        return back()->with("success", "Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Golongan $golongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Golongan $golongan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GolonganRequest $request, string $id)
    {
        try {
            $data = $this->masterService->getDataGolonganById($id);
            $golonganDTO = new GolonganDTO(
                $request->input("g_nama")
            );
            $newData = $this->masterService->updateGolongan($golonganDTO, $id);
        } catch (\Exception $th) {
            return back()->with("error", "Internal Error");
        }
        return back()->with("success", "Data " . $data->g_nama . " berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $item = $this->masterService->getDataGolonganById($id);
            $this->masterService->deleteGolongan($id);
        } catch (\Exception $th) {
            return back()->with("error", "Internal Error");
        }
        return back()->with("success", "Berhasil menghapus " . $item->g_nama);
    }
}
