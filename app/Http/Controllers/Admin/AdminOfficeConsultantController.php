<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConsultantOffice;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;

class AdminOfficeConsultantController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.consultant-office.index', [
            'offices' => ConsultantOffice::paginate(10)
        ]);
    }

    public function create()
    {
        return view('dashboard.admin.consultant-office.create');
    }

    public function edit(ConsultantOffice $consultantOffice)
    {
        return view('dashboard.admin.consultant-office.edit', [
            'office' => $consultantOffice,
        ]);
    }

    public function update(ConsultantOffice $consultantOffice, Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'image' => ['image', 'file', 'max:1024'],
            'information' => ['nullable'],
            'phone' => ['nullable', 'numeric'],
            'email' => ['nullable', 'email'],
            'website' => ['nullable', 'url'],
            'province_id' => ['required'],
            'city_id' => ['required'],
            'full_address' => ['nullable'],
            'lat' => ['required'],
            'long' => ['required'],
        ]);

        if($request->file('image'))
        {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('consultant-office-images');
        }

        $validated['slug'] = Str::slug($request->name, '-');

        ConsultantOffice::where('id', $consultantOffice->id)->update($validated);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }
}
