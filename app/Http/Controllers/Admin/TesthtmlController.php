<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Testhtml;
use Illuminate\Http\Request;

class TesthtmlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $htmlcontents = Testhtml::get();
        return view('auth.htmlcontents.index', compact('htmlcontents'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testhtml  $testhtml
     * @return \Illuminate\Http\Response
     */
    public function show(Testhtml $testhtml)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testhtml  $testhtml
     * @return \Illuminate\Http\Response
     */
    public function edit(Testhtml $testhtml)
    {
        return view('auth.htmlcontents.form', compact('testhtml'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testhtml  $testhtml
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testhtml $testhtml)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testhtml  $testhtml
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testhtml $testhtml)
    {
        //
    }
}
