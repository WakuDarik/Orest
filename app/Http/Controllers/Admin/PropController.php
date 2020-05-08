<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Prop;
use Illuminate\Http\Request;

class PropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $props = Prop::get();
        $categories = Category::get();
        return view('auth.props.index', compact('props', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('auth.props.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input('categori'));
        $params = $request->all();
        $params['code'] = Controller::generate_chpu($params['name']);

        $props = Prop::create($params)->id;

        foreach ($request->input('categori') as $key => $value) {
            $category = Category::findOrFail($key);
            $category->props()->attach($props, ['category_id' => $key]);
        }

        return PropController::index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        dd($request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prop $prop)
    {
        $categories = Category::get();
        return view('auth.props.form', compact('prop', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prop $prop)
    {
        $params = $request->all();
        $params['code'] = Controller::generate_chpu($params['name']);

        $prop->update($params);

        // foreach ($request->input('categori') as $key => $value) {
        //     $category = Category::findOrFail($key);
        $prop->categories()->sync($request->categori);
        // }
        // return redirect()->route('auth.props.index');
        return PropController::index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prop $prop)
    {
        $prop->prodsProps()->wherePivot('prop_id', $prop->id)->detach();
        $prop->delete();
        return redirect()->route('props.index');
    }

    public function sort(Request $request)
    {
        if ($request->category == 'NULL') {
            return redirect()->route('props.index');
        } else {
            $categories = Category::get();
            $categorynow = Category::firstWhere('id', $request->category);
            $props = $categorynow->props;
            return view('auth.props.index', compact('props', 'categorynow', 'categories'));
        }

        // dd($props);
    }
}
