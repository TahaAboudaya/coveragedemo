<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Exports\CoverageExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreStudentRequest;

class LocationController extends Controller
{
    public function index()
    {
        return view('front');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_num'=>'required|regex:/^\S*$/u',
            'phone'=>'required',
            'name'=>'required',
        ]);
        Location::create([
            'lat' => $request->lat,
            'lng' => $request->lng,
            'service_num' => $request->service_num,
            'phone' => $request->phone,
            'name' => $request->name,
        ]);
        //request()->session()->flash('success');
        return redirect('')->with('message', 'Success#');
    }
    public function export()
    {
        return Excel::download(new CoverageExport, 'InfoCoverage.xlsx');
    }

}
