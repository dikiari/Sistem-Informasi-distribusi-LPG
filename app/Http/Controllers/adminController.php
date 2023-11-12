<?php

namespace App\Http\Controllers;

use App\Models\distribution;
use App\Models\User;
use App\Models\vendor;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard()
    {
        $dataVendor = vendor::all()->count();
        $dataDistribution = distribution::all()->count();
        $dataUser = User::all()->count();
        return view('dashboard', compact('dataVendor', 'dataDistribution', 'dataUser'));
    }
}
