<?php

namespace App\Http\Controllers\Konsumen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardKonsumenController extends Controller
{
    public function index(){
        $webtitle = 'Dashboard';
        return view('konsumen.dashboard.dashboard', compact('webtitle'));
    }
}
