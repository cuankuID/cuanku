<?php

namespace App\Http\Controllers;

use App\Models\OrderConsultation;
use App\Models\StatusConsultation;
use App\Models\Subscription;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function subscription()
    {
        return view('dashboard.subscription', [
            'subscriptions' => Subscription::all()
        ]);
    }
}
