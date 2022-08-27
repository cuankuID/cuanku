<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminConsultantController extends Controller
{
    public function createInfo()
    {
        return view('dashboard.admin.consultant.create-info');
    }    
}
