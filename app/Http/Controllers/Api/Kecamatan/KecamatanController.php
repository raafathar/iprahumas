<?php

namespace App\Http\Controllers\Api\Kecamatan;

use App\Models\Kecamatan;
use App\Helper\standartData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Master\MasterService;

class KecamatanController extends Controller
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
        return $this->sendResponse($this->masterService->searchKecamatan($request->name), "Berhasil menampilkan data kelurahan");
    }
}
