<?php

namespace App\Http\Controllers;

use App\RxOrder;
use App\Patient;
use App\Disease;
use Illuminate\Http\Request;

class RxOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patient)
    {
        // dd($patient->user);
        $diseases = Disease::all();
        return view('dashboard.rx-order.form')
                    ->with('patient',$patient)
                    ->with('diseases',$diseases)
                    ->with('user',$patient->user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RxOrder  $rxOrder
     * @return \Illuminate\Http\Response
     */
    public function show(RxOrder $rxOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RxOrder  $rxOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(RxOrder $rxOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RxOrder  $rxOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RxOrder $rxOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RxOrder  $rxOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(RxOrder $rxOrder)
    {
        //
    }

    public function import(Request $request)
    {
        // dd($request);
        set_time_limit(300000);
        if ($request->hasFile('import_csv')) {
            $file = $request->file('import_csv');
            // dd($file);
            $handle = fopen($file,"r");
            $i = 0;
            while (($fileop = fgetcsv($handle, 100000, ",")) !== false) {
                if($i !== 0)
                {
                    $company = new Disease;
                    $company->code              = $fileop[0] ?? '';
                    $company->description  = $fileop[1] ?? '';
                    $company->save();
                    // dd($company);
                }
                else
                {
                    $i++;
                }
            }
        }
        else{
            dd('');
        }
    }
}
