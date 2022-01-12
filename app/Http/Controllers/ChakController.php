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

        return view('chak\add',['candidates'=>$cand]);
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
        $data->totalvote= $request->tvote;
        $data->totpop = $request->tpop;
        $data->UC = $request->UC;

        $data->result = $request->year;
        $data->canid= $request->candid;
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
$id = $request->area;
$ars = chak::all();
$cand = candidate::all();
$chak = chak::where('id',$id)->get();

return view('chak\index',['ars'=>$ars,'candidates'=>$cand,'chaks'=>$chak]);




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
