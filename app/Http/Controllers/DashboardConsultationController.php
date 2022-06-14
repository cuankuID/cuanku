<?php

namespace App\Http\Controllers;

use App\Models\OrderConsultation;
use App\Models\CategoryConsultation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardConsultationController extends Controller
{
    public function index()
    {
        return view('dashboard.consultation.index', [
            'consultations' => OrderConsultation::with('statusConsultation')->where('user_id', auth()->id())->where(function($query) {
                $query->where('status_id', 1)->orWhere('status_id', 2);
                })->get(),

            'accConsultations' => OrderConsultation::with('statusConsultation')->where('user_id', auth()->id())->where(function($query) {
                $query->where('status_id', 3)->orWhere('status_id', 4);
                })->get(),

            'allConsultations' => OrderConsultation::with('statusConsultation')->where('user_id', auth()->id())->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.consultation.create', [
            'categories' => CategoryConsultation::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => ['required'],
            'schedule' => ['required', 'date', 'after:'.Carbon::now()],
            'problem' => ['nullable'],
        ]);

        if($validated['category_id'] == 1) {
            $validated['status_id'] = 1;
        }
        else {
            $validated['status_id'] = 2;
        }

        $validated['user_id'] = auth()->user()->id;
        $validated['no_order'] = 'LC-' . Str::uuid();

        OrderConsultation::create($validated);

        return redirect('/dashboard/consultation')->with('success', 'Request Created Successfully!');
    }

    public function edit(OrderConsultation $orderConsultation)
    {
        
        return view('dashboard.consultation.edit', [
            'consultation' => $orderConsultation,
            'categories' => CategoryConsultation::all()
        ]);
    }

    public function update(Request $request, OrderConsultation $orderConsultation)
    {
        $validated = $request->validate([
            'category_id' => ['required'],
            'schedule' => ['required', 'date', 'after:yesterday'],
            'problem' => ['nullable'],
        ]);

        if($validated['category_id'] == 1) {
            $validated['status_id'] = 1;
        }
        else {
            $validated['status_id'] = 2;
        }

        $validated['user_id'] = auth()->user()->id;

        OrderConsultation::where('id', $orderConsultation->id)
            ->update($validated);
        
        return redirect('/dashboard/posts')->with('success', 'Request has been updated!');
    }

    public function destroy(OrderConsultation $orderConsultation)
    {
        OrderConsultation::destroy($orderConsultation->id);

        return redirect('/dashboard/consultation')->with('success', 'Request has been canceled!');
    }

    public function done(OrderConsultation $orderConsultation)
    {
        OrderConsultation::destroy($orderConsultation->id);

        return redirect('/dashboard/consultation')->with('success', 'Request succesfully done, Thank you for using our service!');
    }
}
