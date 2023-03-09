<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\OrderVerification;
use App\Models\SubscriptionOrder;
use App\Http\Controllers\Controller;
use App\Mail\OrderMeetVerification;
use Illuminate\Support\Facades\Mail;
use App\Models\MeetConsultationOrder;

class OrderVerificationController extends Controller
{
    public function indexSubs(){
        return view('dashboard.admin.order-verification.index-subscription', [
            'orders' => SubscriptionOrder::where('status', 'Menunggu Konfirmasi')
                ->orWhere('status', 'Ditolak')->orWhere('status', 'Diterima')
                ->filter(request(['status']))
                ->latest()->paginate(10)
        ]);
    }

    public function indexMeetConsultant(){
        return view('dashboard.admin.order-verification.index-meet-consultant', [
            'orders' => MeetConsultationOrder::where('status', 'Menunggu Konfirmasi')
                ->orWhere('status', 'Ditolak')->orWhere('status', 'Diterima')
                ->filter(request(['status']))
                ->latest()->paginate(10)
        ]);
    }

    public function accSubsOrder(SubscriptionOrder $subscriptionOrder){
        SubscriptionOrder::where('order_id', $subscriptionOrder->order_id)
            ->update(['status' => 'Diterima']);

        User::where('id', $subscriptionOrder->user_id)
            ->update(['subscription_id' => $subscriptionOrder->subscription_id]);

        Mail::to($subscriptionOrder->user->email)->send(new OrderVerification($subscriptionOrder));
        
        return redirect(route('index.subs.order.verif'));
    }

    public function accMeetOrder(MeetConsultationOrder $meetConsultationOrder){
        MeetConsultationOrder::where('order_id', $meetConsultationOrder->order_id)
            ->update(['status' => 'Diterima']);

        Mail::to($meetConsultationOrder->customer->email)->send(new OrderMeetVerification($meetConsultationOrder));
        
        return redirect(route('index.meet.order.verif'));
    }

    public function rejectSubsOrder(Request $request, SubscriptionOrder $subscriptionOrder){
        SubscriptionOrder::where('order_id', $subscriptionOrder->order_id)
            ->update([
                'status' => 'Ditolak',
                'information' => $request->information
                ]);

        return redirect(route('index.subs.order.verif'));
    }

    public function rejectMeetOrder(Request $request, MeetConsultationOrder $meetConsultationOrder){
        MeetConsultationOrder::where('order_id', $meetConsultationOrder->order_id)
            ->update([
                'status' => 'Ditolak',
                'information' => $request->information
                ]);

        return redirect(route('index.meet.order.verif'));
    }
}
