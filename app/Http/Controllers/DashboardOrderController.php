<?php

namespace App\Http\Controllers;

use App\Models\OrderConsultation;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class DashboardOrderController extends Controller
{
    public function index()
    {
        return view('dashboard.order.index', [
            'orders' => OrderConsultation::where('status_id', 1)->filter(request(['search']))->paginate(10),
            'myOrders' => OrderConsultation::where([
                ['consultant_id', auth()->id()],
                ['status_id', 3]
                ])->get()
        ]);
    }

    public function getOrder(Request $request, OrderConsultation $orderConsultation)
    {
        $validated = $request->validate([
            'link' => ['required', 'active_url']
        ]);

        $validated['status_id'] = 3;
        $validated['consultant_id'] = auth()->id();

        OrderConsultation::where('id', $orderConsultation->id)
            ->update($validated);
        
        return redirect('/dashboard/order')->with('success', 'Order has been taken!');
    }

    public function activeOrder()
    {
        return view('dashboard.order.indexActive', [
            'orders' => OrderConsultation::where([
                ['consultant_id', auth()->id()],
                ['status_id', 3]
                ])->get()
        ]);
    }

    public function finishOrder(OrderConsultation $orderConsultation)
    {
        OrderConsultation::where('id', $orderConsultation->id)->update(['status_id' => 4]);

        return redirect('/dashboard/active-order')->with('success', 'Order has been finished!');
    }

    public function deleteOrder(OrderConsultation $orderConsultation)
    {
        OrderConsultation::destroy($orderConsultation->id);

        return redirect('/dashboard/active-order')->with('success', 'Order has been Cancelled!');
    }
}
