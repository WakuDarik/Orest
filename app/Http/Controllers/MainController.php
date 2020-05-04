<?php

namespace App\Http\Controllers;

use App\Category;
use App\Goods_Image;
use App\Prods;
use App\Testhtml;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        $prods = Prods::get();
        $categories = Category::get();
        $html = Testhtml::get();
        return view('index', compact('categories', 'prods', 'html'));
    }
    public function showStatic(Request $request)
    {
        $path = $request->route()->getName();
        $categories = Category::get();
        return view($path, compact('categories'));
    }
    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }
    public function category($code)
    {
        $categories = Category::get();
        $category = Category::where('code', $code)->first();
        return view('category', compact('category', 'categories'));
    }
    public function prod($category, $prod)
    {
        $prod = Prods::where('code', $prod)->first();
        $categories = Category::get();

        return view('prod', compact('prod', 'categories'));
    }

    public function getProps(Request $request)
    {
        $category = Category::where('id', $request->category)->first();
        $props = $category->props;
        return $props;
    }

    public function delMoreImg(Request $request)
    {
        Storage::delete(Goods_Image::where('id', $request->img_id)->get('iamge')->pluck('iamge')->all());
        Goods_Image::where('id', $request->img_id)->delete();
        return 'ok';
    }

    public function search(Request $request)
    {
        $q = Prods::select('name', 'code', 'rent1', 'category_id')->where('name', 'LIKE', '%' . $request->q . '%')->get();
        foreach ($q as $el) {
            $el['link'] = $el->category->code . '/' . $el->code;
        }

        return $q;
    }

    public function delivery(Request $request)
    {

        $token = "1299373441:AAHhSKNfNxpNQJXwl1TMNinmTJDsKt2KT0E";
        $chat_id = "-425680206";
        $txt = '';
        $arr = array(
            'На когда: ' => $request->time,
            'Телефон: ' => $request->phone,
            'имя: ' => $request->name,
        );

        foreach ($arr as $key => $value) {
            $txt .= "<b>" . $key . "</b> " . $value . "%0A";
        };
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

        if ($sendToTelegram) {
            session()->flash('succsess', 'Ваш заказ принят в обработку');
        } else {
            session()->flash('succsess', 'Произошла ошибка, попробуйте еще раз');
        }
        return redirect()->route('index');
    }
}
