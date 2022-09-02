<?php

namespace App\Http\Controllers;

use App\Models\Lendbook1;
use Illuminate\Http\Request;

class Lendbook1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $request ->validate([
        'book_ID' =>'required',
        'stu_id' => 'required',
        'date' => 'required',
        ]);
        Lendbook1::create($request->all());
        return redirect()->route('index')
                         ->with('success','Book borrowed successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lendbook1  $lendbook1
     * @return \Illuminate\Http\Response
     */
    public function show(Lendbook1 $lendbook1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lendbook1  $lendbook1
     * @return \Illuminate\Http\Response
     */
    public function edit(Lendbook1 $lendbook1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lendbook1  $lendbook1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lendbook1 $lendbook1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lendbook1  $lendbook1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lendbook1 $lendbook1)
    {
        //
    }
}
