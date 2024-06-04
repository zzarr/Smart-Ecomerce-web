<?php

namespace App\Http\Controllers\Petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardPetaniController extends Controller
{
    public function index()
    {

        return view('petani.dashboard.dashboard', compact('data'));
    }
}
