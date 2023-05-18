<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InfoConsultant;
use App\Models\OrderConsultation;
use App\Models\StatusConsultation;
use Illuminate\Support\Facades\Validator;

class OrderConsultationController extends Controller
{
    public function index()
    {
        return OrderConsultation::with('categoryConsultation:id,name', 'consultant:id,name', 'methodConsultation:id,name')->where('user_id', auth()->user()->id)->get();
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $status = StatusConsultation::where('name', 'Requesting')->first();
        $validator = Validator::make($request->all(), [
            'consultant_id' => 'required',
            'category_id' => 'required|numeric',
            'method_id' => 'required|numeric',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $consultant = InfoConsultant::where("slug", $request->consultant_id)->first();

        OrderConsultation::Create([
            'no_order' => 'LC-' . Str::uuid(),
            'consultant_id' => $consultant->consultant_id,
            'user_id' => $user->id,
            'status_id' => $status->id,
            'category_id' => $request->category_id,
            'method_id' => $request->method_id,
            'schedule' => $request->date,
        ]);

        return response()->json(['message' => 'Order Added Successfully']);
    }

    public function show($id)
    {
        return OrderConsultation::where('id', $id)->get();
    }

    public function paid($id)
    {
        $status = StatusConsultation::where('name', 'Accepted')->first();
        OrderConsultation::Find($id)->Update([
            'status_id' => $status->id,
        ]);

        return response()->json(['message' => 'Order Paid Successfully']);
    }

    public function update(Request $request, $id)
    {
        $meetOrder = OrderConsultation::Find($id);
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|numeric',
            'method_id' => 'required|numeric',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $meetOrder->update([
            'category_id' => $request->category_id,
            'method_id' => $request->method_id,
            'schedule' => $request->date,
        ]);

        return response()->json(['message' => 'Order Updated Successfully']);
    }

    public function destroy($id)
    {
        OrderConsultation::find($id)->delete();
        return response()->json(['message' => 'Order Deleted Successfully']);
    }
}
