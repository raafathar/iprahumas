<?php

namespace App\Http\Controllers\Api\Kelurahan;

use App\Helper\standartData;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Master\MasterService;

class KelurahanController extends Controller
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
        return $this->sendResponse($this->masterService->searchKelurahan($request->name), "Berhasil menampilkan data kelurahan");
    }
}
