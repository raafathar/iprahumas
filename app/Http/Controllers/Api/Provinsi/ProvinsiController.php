<?php

namespace App\Http\Controllers\Api\Provinsi;

use App\Helper\standartData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Master\MasterService;

class ProvinsiController extends Controller
{
    use standartData;
    public function __construct(
        public MasterService $masterService
    ) {}

    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $request)
    {
        return $this->sendResponse($this->masterService->searchProvinsi($request->nama), "Berhasil menampilkan data provinsi");
    }
}
