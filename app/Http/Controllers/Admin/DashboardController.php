<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countPending   = Form::where('isAccept', 0)->count();
        $countAccept    = Form::where('isAccept', 1)->count();

        $registrations = Form::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as total')
        ->groupBy('year', 'month')
        ->get();

        return view("dashboard.admin.home", compact("registrations", "countPending", "countAccept"));
    }
}
