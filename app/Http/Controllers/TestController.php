<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tests = Test::all();
            return view('test.index', ['tests' => $tests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // C R E A T E -----------------------------------------------------------------------------
        return view('test.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // V A L I D A T I O N ---------------------------------------------------------------------
        $this->validate($request, [
            'lat' => 'required',
            'lng' => 'required',
        ]);

        // 
        $test = new Test;
        $test->lat = $request->lat;
        $test->lng = $request->lng;
        $test->save();
        return redirect()->route('test.index')->with('alert-success', 'Data Has Been Saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // -------------------------------------------------------------------------------
        $test = Test::findOrFail($id);
        return view('test.edit', compact('test'));
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
        // V A L I D A T I O N ------------------------------------------------------------
        $this->validate($request, [
            'lat' => 'required',
            'lng' => 'required',
        ]);

        $test = Test::findOrFail($id);
        $test->lat = $request->lat;
        $test->lng = $request->lng;
        $test->save();

        return redirect()->route('test.index')->with('alert-success', 'Data Has Been Saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // D E L E T E ----------------------------------------------------------------------
        $test = Test::findOrFail($id);
        $test->delete();

        return redirect()->route('test.index')->with('alert-success', 'Data Has Been Saved!');
    }
}
