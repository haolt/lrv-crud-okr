<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Okr;
use App\Http\Controllers\OkrController;

class OkrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $okrs = DB::table('okr')->select('*');
        $okrs = $okrs->get();
        return view('okr.index', compact('okrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('okr.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $okr = new Okr;
        $okr->title = $request->title; 
        $okr->unit = $request->unit;

        $okr->save();
        return redirect()->action([OkrController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $okr = okr::where('id', '=', $id)->select('*')->first();
        return view('okr.detail', compact('okr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $okr = okr::findOrFail($id);
        return view('okr.edit', compact('okr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $okr = Okr::find($id);
        $okr->title = $request->title; 
        $okr->unit = $request->unit;

        $okr->save();
        return redirect()->action([OkrController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $okr = Okr::find($id);

        $okr->delete();
        return redirect()->action([OkrController::class, 'index'])->with('success','Delete the OKR successfully.');
    }
}
