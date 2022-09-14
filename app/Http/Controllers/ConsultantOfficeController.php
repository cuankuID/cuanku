<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultantOffice;
use Illuminate\Support\Facades\Validator;

class ConsultantOfficeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
 
    public function index()
    {
        return ConsultantOffice::get();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'mimes:jpeg,png,svg,jpg',
            'information' => 'min:10',
            'phone' => 'numeric',
            'email' => 'email|unique:consultant_offices',
            'website' => 'active_url',
            'address' => '',
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $imageName = null;
        
        if($request->file('image')){
            $imageName = $request->file('image')->getClientOriginalName() . '-' . time() . '.' . $request->file('cover')->extension();
            $request->file('image')->move(public_path('imgUser'), $imageName);
        }

        ConsultantOffice::Create([
            'name' => $request->name,
            'image' => $imageName,
            'information' => $request->information,
            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'address' => $request->address,
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        return response()->json(['message' => 'Office Added Successfully']);
    }

    public function show($id)
    {
        return ConsultantOffice::where("id", $id)->get();
    }

    public function update(Request $request, $id)
    {
        $consultantOffice = ConsultantOffice::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'mimes:jpeg,png,svg,jpg',
            'information' => 'min:10',
            'phone' => 'numeric',
            'email' => 'email|unique:consultant_offices',
            'website' => 'active_url',
            'address' => '',
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $imageName = $consultantOffice->image;
        
        if($request->file('image')){
            File::delete(public_path("\imgUser\\").$imageName);
            $imageName = $request->file('image')->getClientOriginalName() . '-' . time() . '.' . $request->file('cover')->extension();
            $request->file('image')->move(public_path('imgUser'), $imageName);
        }

        $consultantOffice->update([
            'name' => $request->name,
            'image' => $imageName,
            'information' => $request->information,
            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'address' => $request->address,
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        return response()->json(['message' => 'Office Updated Successfully']);
    }

    public function destroy($id)
    {
        $consultantOffice = ConsultantOffice::Find($id);
        if ($consultantOffice->image) {
            File::delete(public_path("\imgUser\\").$consultantOffice->image);    
        }
        $consultantOffice->delete();
        return response()->json(['message' => 'Office Deleted Successfully']);
    }
}
