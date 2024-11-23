<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Http\Controllers\Controller;

class GrafikAnggotaController extends Controller
{
    public function index()

    {
        $countPending    = Form::where('isAccept', "0")->count();
        $countAccept     = Form::where('isAccept', "1")->count();
        $countRejected   = Form::where('isAccept', "2")->count();

        $grafikJabatan = Form::join('jabatans', 'forms.jabatan_id', '=', 'jabatans.id')
            ->select('jabatans.j_nama')
            ->selectRaw('count(forms.user_id) as jumlah')
            ->groupBy('jabatans.j_nama')
            ->get();

        $grafikGolongan = Form::join('golongans', 'forms.golongan_id', '=', 'golongans.id')
            ->select('golongans.g_nama')
            ->selectRaw('count(forms.user_id) as jumlah')
            ->groupBy('golongans.g_nama')
            ->get();
            
        $grafikPendidikan = Form::select('f_pendidikan_terakhir')
            ->selectRaw('count(user_id) as jumlah')
            ->groupBy('f_pendidikan_terakhir')
            ->get();

        $registrations = Form::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('year', 'month')
            ->get();

        return view("dashboard.admin.grafik.index", compact('countPending', 'countAccept', 'countRejected', 'registrations', 'grafikJabatan', 'grafikGolongan', 'grafikPendidikan'));

    }
}
