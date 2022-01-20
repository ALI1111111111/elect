<?php

namespace App\Http\Controllers;

use App\Models\result;

use App\Models\chak;
use App\Models\candidate;

use Illuminate\Http\Request;

class ResultController extends Controller
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
    public function create()
{
        $ars = chak::all();
        $cand = candidate::all();

        return view('result\add', ['candidates' => $cand,'ars' => $ars]);

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


        $result = new result();
        $result->cand1= $request->candid1;
        $result->cand2= $request->candid2;
        $result->cand3= $request->candid3;
        $result->cand4= $request->candid4;

        $result->cand1vote= $request->cand2vote;
        $result->cand2vote= $request->cand2vote;
        $result->cand3vote= $request->cand3vote;
        $result->cand4vote= $request->cand4vote;


        $result->area_id = $request->area;
        $result->year = $request->year;
        $result->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(result $result)
    {
        //
    }
}
