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

        Location::create([
            'lat' => $request->lat,
            'lng' => $request->lng,
            'service_num' => $request->service_num,
            'phone' => $request->phone,
            'name' => $request->name,
        ]);
        return view('front');
    }
    public function export()
    {
        return Excel::download(new CoverageExport, 'InfoCoverage.xlsx');
    }

}
