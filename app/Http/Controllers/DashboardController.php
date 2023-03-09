<?php

namespace App\Http\Controllers;

use App\Models\OrderConsultation;
use App\Models\StatusConsultation;
use App\Models\Subscription;
use App\Models\SubscriptionOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function buySubscription(Request $request)
    {
        SubscriptionOrder::create([
            'order_id' => Str::uuid()->toString(),
            'subscription_id' => $request->subscription_id,
            'user_id' => Auth()->user()->id
        ]);

        return redirect('/dashboard/cart/subscription');
    }
}
