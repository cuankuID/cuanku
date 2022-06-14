<?php

namespace App\Http\Controllers;

use App\Models\ConsultantOffice;
use Illuminate\Http\Request;

class DashboardSearchController extends Controller
{
    public function jsonData()
    {
        return json_encode(ConsultantOffice::all());
    }

    public function index()
    {
        return view('dashboard.search.index');
    }
}
