<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MeetConsultationOrder;
use Illuminate\Support\Facades\Validator;

class MeetConsultantOrderController extends Controller
{
    public function index()
    {
        return MeetConsultationOrder::where('customer_id', auth()->user()->id)->get();
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'consultant_id' => 'required|numeric',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        MeetConsultationOrder::Create([
            'no_order' => '',
            'consultant_id' => $request->consultant_id,
            'customer_id' => $user->id,
            'date' => $request->date,
        ]);

        return response()->json(['message' => 'Order Added Successfully']);
    }

    public function show($id)
    {
        return MeetConsultationOrder::where('id', $id)->get();
    }

    public function paid($id)
    {
        MeetConsultationOrder::Find($id)->Update([
            'status' => "Diterima",
        ]);

        return response()->json(['message' => 'Order Paid Successfully']);
    }

    public function update(Request $request, $id)
    {
        $meetOrder = MeetConsultationOrder::Find($id);
        $validator = Validator::make($request->all(), [
            'consultant_id' => 'required|numeric',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $meetOrder->update([
            'date' => $request->date,
        ]);

        return response()->json(['message' => 'Order Added Successfully']);
    }

    public function destroy($id)
    {
        MeetConsultationOrder::find($id)->delete();
        return response()->json(['message' => 'Order Deleted Successfully']);
    }
}
