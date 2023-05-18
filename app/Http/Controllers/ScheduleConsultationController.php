<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoConsultant;
use App\Models\ScheduleConsultation;
use Illuminate\Support\Facades\Validator;

class ScheduleConsultationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index(Request $request, $slug)
    {
        $consultant = InfoConsultant::where("slug", $slug)->first();
        return ScheduleConsultation::select('time')->where('consultant_id', $consultant->id)->where('day', "LIKE" , "%".$request->day."%")->get();
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'day' => 'required',
            'time' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        ScheduleConsultation::Create([
            'day' => $request->day,
            'time' => $request->time,
            'consultant_id' => $user->infoConsultant->id,
        ]);

        return response()->json(['message' => 'Schedule Added Successfully']);
    }

    public function update(Request $request, $id)
    {
        $meetConsultationSchedule = ScheduleConsultation::find($id);
        $validator = Validator::make($request->all(), [
            'day' => 'required',
            'time' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $meetConsultationSchedule->update([
            'day' => $request->day,
            'time' => $request->time,
        ]);

        return response()->json(['message' => 'Schedule Updated Successfully']);
    }

    public function destroy($id)
    {
        ScheduleConsultation::find($id)->delete();
        return response()->json(['message' => 'Schedule Deleted Successfully']);
    }
}
