<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Goods_Image;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdRequest;
use App\Prods;
use App\Prop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Foreach_;

class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Prods::get();
        return view('auth.goods.index', compact('goods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Prop::
        // $last_prod = Prods::latest('id')->first('id')->id + 1;
        // if (is_null($last_prod)) {
        //     $order = Prop::create();
        //     session(['orderId' => $order->id]);
        // } else {
        //     $order = Prop::find($orderId);
        // }
        $categories = Category::get();
        $category = $categories->first();
        $props = $category->props;
        // dd($props);
        return view('auth.goods.form', compact('categories', 'props'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdRequest $request)
    {
        //$prods = Prods::create(['name' => $request->name, 'code' => $request->code, 'category_id' => $request->category_id, 'price' => $request->price, 'articul' => $request->articul, 'description' => $request->description, 'iamge' => $request->code])->id;

        $params = $request->all();
        $params['code'] = Controller::generate_chpu($params['name']);

        unset($params['iamge']);

        if ($request->has('iamge')) {
            $path = $request->file('iamge')->store('goods_images');
            $params['iamge'] = $path;
        }
        $prods = Prods::create($params)->id;

        $goods = Prods::find($prods);

        $images = [];

        if ($request->hasFile('goods_images')) {
            foreach ($request->file('goods_images') as $key => $image) {
                $images[$key] = new Goods_Image(array('iamge' => $image->store('goods_images')));
                $images[$key] = $goods->images()->save($images[$key]);
            }
        }

        foreach ($request->input('unit') as $key => $value) {
            $prop = Prop::findOrFail($key);
            $prop->prodsProps()->attach($prods, ['unit' => $value]);
        }

        return redirect()->route('goods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prods  $prods
     * @return \Illuminate\Http\Response
     */
    public function show(Prods $good)
    {
        return view('auth.goods.show', compact('good'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prods  $prods
     * @return \Illuminate\Http\Response
     */
    public function edit(Prods $good)
    {

        $categories = $good->category;
        $props = $good->propsProds()->get();

        return view('auth.goods.form', compact('good', 'categories', 'props'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prods  $prods
     * @return \Illuminate\Http\Response
     */
    public function update(ProdRequest $request, Prods $good)
    {
        $params = $request->all();
        $params['code'] = Controller::generate_chpu($params['name']);

        unset($params['iamge']);

        if ($request->has('iamge')) {
            Storage::delete($good->iamge);
            $path = $request->file('iamge')->store('goods_images');
            $params['iamge'] = $path;
        }

        $images = [];

        if ($request->hasFile('goods_images')) {
            foreach ($request->file('goods_images') as $key => $image) {
                $images[$key] = new Goods_Image(array('iamge' => $image->store('goods_images')));
                $images[$key] = $good->images()->save($images[$key]);
            }
        }

        $good->update($params);

        foreach ($request->input('unit') as $key => $value) {
            $prop = Prop::findOrFail($key);
            $prop->prodsProps()->updateExistingPivot($good, ['unit' => $value]);
        }

        return redirect()->route('goods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prods  $prods
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prods $good)
    {
        //dd($good->images()->get('iamge')->pluck('iamge')->all());

        Storage::delete($good->images()->get('iamge')->pluck('iamge')->all());
        $good->images()->delete();


        $good->propsProds()->wherePivot('prods_id', $good->id)->detach();
        Storage::delete($good->iamge);
        $good->delete();
        return redirect()->route('goods.index');
    }
}
