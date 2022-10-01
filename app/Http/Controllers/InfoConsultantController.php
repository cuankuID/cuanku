<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InfoConsultant;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class InfoConsultantController extends Controller
{
    public function index()
    {
        return InfoConsultant::get();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'mimes:jpeg,png,svg,jpg',
            'province' => 'required',
            'city' => 'required',
            'address' => '',
            'price' => 'required|min:4',
            'specialist' => 'required',
            'work_experience' => 'required',
            'biography' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $photoName = null;
        
        if($request->file('photo')){
            $photoName = $request->file('photo')->getClientOriginalName() . '-' . time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('imgUser'), $photoName);
        }

        InfoConsultant::Create([
            'consultant_id' => auth()->user()->id,
            'office_id' => $request->office_id,
            'slug' => "Str",
            'photo' => $photoName,
            'province' => $request->province,
            'city' => $request->city,
            'full_address' => $request->address,
            'price' => $request->price,
            'specialist' => $request->specialist,
            'work_experience' => $request->work_experience,
            'biography' => $request->biography,
        ]);

        return response()->json(['message' => 'Consultant Added Successfully']);
    }

    public function show($id)
    {
        return InfoConsultant::where("id", $id)->get();
    }

    public function update(Request $request, $id)
    {
        $infoConsultant = InfoConsultant::find($id);
        $validator = Validator::make($request->all(), [
            'photo' => 'mimes:jpeg,png,svg,jpg',
            'province' => 'required',
            'city' => 'required',
            'address' => '',
            'price' => 'required|min:4',
            'specialist' => 'required',
            'work_experience' => 'required',
            'biography' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $photoName = $infoConsultant->photo;
        
        if($request->file('photo')){
            $photoName = $request->file('photo')->getClientOriginalName() . '-' . time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('imgUser'), $photoName);
        }

        $infoConsultant->update([
            'photo' => $photoName,
            'province' => $request->province,
            'city' => $request->city,
            'full_address' => $request->address,
            'price' => $request->price,
            'specialist' => $request->specialist,
            'work_experience' => $request->work_experience,
            'biography' => $request->biography,
        ]);

        return response()->json(['message' => 'Consultant Updated Successfully']);
    }

    public function destroy($id)
    {
        $infoConsultant = InfoConsultant::Find($id);
        if ($infoConsultant->photo) {
            File::delete(public_path("\imgUser\\").$infoConsultant->photo);    
        }
        $infoConsultant->delete();
        return response()->json(['message' => 'Consultant Deleted Successfully']);
    }
}
