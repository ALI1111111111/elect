<?php

namespace App\Http\Controllers;

use App\Models\chak;
use App\Models\candidate;
use App\Models\result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $data->area_name = $request->area;
        $data->totalvote = $request->tvote;
        $data->totpop = $request->tpop;
        $data->UC = $request->UC;

        // $data->result = $request->year;
        // $data->canid = $request->candid;
        // $data->voteget = $request->totalvote;
        $data->save();

        return redirect('/');
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
        // $candid3 = $request->candid3;
        // $candid4 = $request->candid4;
        if($request->area){
            $chak = chak::where('id', $areaid)->get();


        }else{

            $chak = chak::all();

        }
        $ars = chak::all();

        $cand = candidate::all();

       




        // $candr3s = chak::where('id', $areaid)
        // ->where('canid',$candid3)
        // ->get();

        // $candr4s = chak::where('id', $areaid)
        // ->where('canid',$candid4)
        // ->get();

        // $candr1s = $this->cnd( $candid1,$areaid);




        return view('chak\index', ['ars' => $ars,'chaks' => $chak,'candidates' => $cand,

        // 'cand2s' => $candr2s,
        // 'cand1s' => $candr1s,
        //    'cand3s' => $candr3s, 'cand4s' => $candr4s,
        ]
    );
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
