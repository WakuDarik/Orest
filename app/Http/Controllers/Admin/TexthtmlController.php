<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Texthtml;
use Illuminate\Http\Request;

class TexthtmlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texthtml = Texthtml::get();
        return view('auth.htmlcontents.index', compact('texthtml'));
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
     * @param  \App\Texthtml  $texthtml
     * @return \Illuminate\Http\Response
     */
    public function show(Texthtml $texthtml)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Texthtml  $texthtml
     * @return \Illuminate\Http\Response
     */
    public function edit(Texthtml $texthtml)
    {
        return view('auth.htmlcontents.form', compact('texthtml'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Texthtml  $texthtml
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Texthtml $texthtml)
    {
        $params = $request->all();
        $texthtml->update($params);
        return TexthtmlController::index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Texthtml  $texthtml
     * @return \Illuminate\Http\Response
     */
    public function destroy(Texthtml $texthtml)
    {
        //
    }
}
