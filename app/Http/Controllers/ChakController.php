<?php

namespace App\Http\Controllers;

use App\Models\chak;
use App\Models\candidate;

use Illuminate\Http\Request;

class ChakController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request

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
        //

        $cand = candidate::all();

        return view('chak\add', ['candidates' => $cand]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new chak();
        $data->area = $request->area;
        $data->totalvote = $request->tvote;
        $data->totpop = $request->tpop;
        $data->UC = $request->UC;

        $data->result = $request->year;
        $data->canid = $request->candid;
        $data->voteget = $request->totalvote;
        $data->save();

        return redirect('/chak/add/show');
    }

    /**
     * Display the specified resource.
     *@param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chak  $chak
     * Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $areaid = $request->area;
        $candid1 = $request->candid1;
        $candid2 = $request->candid2;
        $candid3 = $request->candid3;
        $candid4 = $request->candid4;

        $ars = chak::all();
        $cand = candidate::all();
        $chak = chak::where('id', $areaid)->get();
        $candr1s = chak::where('id', $areaid)
        ->where('canid',$candid1)
        ->get();

        $candr2s = chak::where('id', $areaid)
        ->where('canid',$candid1)
        ->get(); $candr1s = chak::where('id', $areaid)
        ->where('canid',$candid2)
        ->get();

        $candr3s = chak::where('id', $areaid)
        ->where('canid',$candid3)
        ->get();

        $candr4s = chak::where('id', $areaid)
        ->where('canid',$candid4)
        ->get();

        // $candr1s = $this->cnd( $candid1,$areaid);




        return view('chak\index', ['ars' => $ars, 'candidates' => $cand, 'cand1s' => $candr1s, 'cand2s' => $candr2s, 'cand3s' => $candr3s, 'cand4s' => $candr4s, 'chaks' => $chak]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chak  $chak
     * @return \Illuminate\Http\Response
     */
    public function edit(chak $chak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chak  $chak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chak $chak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chak  $chak
     * @return \Illuminate\Http\Response
     */
    public function destroy(chak $chak)
    {
        //
    }
}
