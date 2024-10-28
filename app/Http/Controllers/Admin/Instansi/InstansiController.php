<?php

namespace App\Http\Controllers\Admin\Instansi;

use App\DTO\Instansi\InstansiDTO;
use App\Http\Controllers\Controller;
use App\Services\Master\MasterService;
use App\Http\Requests\Instansi\InstansiRequest;

class InstansiController extends Controller
{
    private $masterService;

    public function __construct(MasterService $masterService)
    {
        $this->masterService = $masterService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(InstansiRequest $request)
    {
        $instansiDTO = new InstansiDTO(
            $request->input("i_nama")
        );
        try {
            $this->masterService->createInstansi($instansiDTO);
        } catch (\Exception $th) {
            return back()->with("error", "Internal Error");
        }
        return back()->with("success", "Data berhasil ditambahkan");
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
    public function update(InstansiRequest $request, string $id)
    {
        try {
            $this->masterService->updateInstansi($request->validated(), $id);
        } catch (\Exception $th) {
            return back()->with("error", "Internal Error");
        }
        return back()->with("success", "Data berhasil ditambahkan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->masterService->deleteInstansi($id);
        } catch (\Exception $th) {
            return back()->with("error", "Internal Error");
        }
        return back()->with("success", "Data berhasil ditambahkan");
    }
}
