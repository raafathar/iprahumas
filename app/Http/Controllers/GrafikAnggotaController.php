<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrafikAnggotaController extends Controller
{
    public function index()
    {
        return view("dashboard.admin.grafik.index");
    }
}
