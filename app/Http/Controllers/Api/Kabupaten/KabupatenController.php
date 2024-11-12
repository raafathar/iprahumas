<?php

namespace App\Http\Controllers\Api\Kabupaten;

use App\Helper\standartData;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Master\MasterService;

class KabupatenController extends Controller
{
    use standartData;
    public function __construct(
        private MasterService $masterService
    ) {}

    /**
     * Show the form for creating a new resource.
     */
    public function search($data)
    {
        return $this->sendResponse($this->masterService->searchKelurahan($data), "Berhasil menampilkan data kelurahan");
    }
}
