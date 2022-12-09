<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function index() {
        return view('dashboard.admin.subscription.index', [
            'subscriptions' => Subscription::paginate(10)
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'price' => ['required', 'numeric'],
            'feature' => ['required'],
        ]);

        Subscription::create($validated);
        
        $request->session()->flash('success', 'Tambah Data Subscription berhasil!');

        return redirect('/dashboard/subscription');
    }

    public function update(Request $request, Subscription $subscription) {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'price' => ['required', 'numeric'],
            'feature' => ['required'],
        ]);
        
        Subscription::where('id', $subscription->id)->update($validated);

        $request->session()->flash('success', 'Update Data Subscription berhasil!');
        
        return redirect('/dashboard/subscription');
    }
    
    public function destroy(Subscription $subscription)
    {
        Subscription::destroy($subscription->id);
        return redirect('/dashboard/subscription')->with('success', 'Hapus Data Subscription berhasil!');
    }
}