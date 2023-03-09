<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubscriptionOrder;


use App\Models\MeetConsultationOrder;
use Illuminate\Support\Facades\Storage;

class DashboardCartController extends Controller
{
    public function historySubscription() {
        return view('dashboard.cart.history-subscription', [
            'orders' => SubscriptionOrder::where('user_id', auth()->user()->id)
                ->where(function($query) {
                    $query->where('status', 'Ditolak')->orWhere('status', 'Diterima');
                })
                ->filter(request(['status']))
                ->latest()->paginate(10)
        ]);
    }

    public function cartSubscription() {
        return view('dashboard.cart.index-subscription', [
            'orders' => SubscriptionOrder::where('user_id', auth()->user()->id)
                ->where(function ($query){
                    $query->where('status', 'Menunggu Pembayaran')->orWhere('status', 'Menunggu Konfirmasi');
                })->latest()->get()  
        ]);
    }

    public function historyMeetConsultation() {
        return view('dashboard.cart.history-meet-consultation', [
            'orders' => MeetConsultationOrder::where('customer_id', auth()->user()->id)
                ->where(function($query) {
                    $query->where('status', 'Ditolak')->orWhere('status', 'Diterima');
                })
                ->filter(request(['status']))
                ->latest()->paginate(10)
        ]);
    }

    public function cartMeetConsultation() {
        return view('dashboard.cart.index-meet-consultation', [
            'orders' => MeetConsultationOrder::where('customer_id', auth()->user()->id)
                    ->where(function ($query){
                        $query->where('status', 'Menunggu Pembayaran')->orWhere('status', 'Menunggu Konfirmasi');
                    })->latest()->get()  
        ]);
    }

    public function uploadSubsProof(SubscriptionOrder $subscriptionOrder, Request $request) {
        $validated = $request->validate([
            'payment_proof' => ['required', 'image', 'file', 'max:1024'],
        ]);

        $validated['payment_proof'] = $request->file('payment_proof')->store('payment-proof-images');
        
        SubscriptionOrder::where('id', $subscriptionOrder->id)
            ->update([
                'payment_proof' => $validated['payment_proof'],
                'status' => 'Menunggu Konfirmasi'
                ]);

        return redirect(route('index.subscription.cart'));
    }

    public function uploadMeetProof(MeetConsultationOrder $meetConsultationOrder, Request $request) {
        $validated = $request->validate([
            'payment_proof' => ['required', 'image', 'file', 'max:1024'],
        ]);

        $validated['payment_proof'] = $request->file('payment_proof')->store('payment-proof-images');
        
        MeetConsultationOrder::where('id', $meetConsultationOrder->id)
            ->update([
                'payment_proof' => $validated['payment_proof'],
                'status' => 'Menunggu Konfirmasi'
                ]);

        return redirect(route('index.meet.cart'));
    }

    public function deleteSubsOrder(SubscriptionOrder $subscriptionOrder) {
        if($subscriptionOrder->payment_proof) {
            $file_path = SubscriptionOrder::where('order_id', $subscriptionOrder->order_id)->first('payment_proof');
            Storage::delete($file_path->payment_proof);
        }
        SubscriptionOrder::destroy($subscriptionOrder->id);
        return redirect(route('index.subscription.cart'));
    }

    public function deleteMeetOrder(MeetConsultationOrder $meetConsultationOrder) {
        if($meetConsultationOrder->payment_proof) {
            $file_path = MeetConsultationOrder::where('order_id', $meetConsultationOrder->order_id)->first('payment_proof');
            Storage::delete($file_path->payment_proof);
        }
        MeetConsultationOrder::destroy($meetConsultationOrder->id);
        return redirect(route('index.meet.cart'));
    }
}
