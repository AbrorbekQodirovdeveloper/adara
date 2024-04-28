<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Main;
use App\Models\Client;
use App\Models\Review;
use App\Models\Ads;
use App\Models\Cart;
use App\Models\Order;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\Wish;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function mainPage()
    {
        $client = Client::get();
        $client = Session::get('client');
        $settings = Main::first();
        $offers = Offer::get();
        $cart = Cart::query();
        $carts = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        $products = Product::get();

        $news = Category::get();
        $partners = Partner::get();
        $reviews = Review::get();
        $ads = Ads::get();

        return view('frontend.main', compact('settings', 'offers', 'products', 'reviews', 'client', 'news', 'partners', 'ads', 'cart', 'carts'));
    }
    //shopdetails
    public function shopDetailPage($product_id)
    {
        $client = Session::get('client');
        $products = Product::where('id', $product_id)->with("category", "sizes", "images", "reviews")->first();
        $cart = Cart::query();
        $carts = Cart::query();
        if ($client) {
            $cart = $cart->where('client_id', $client->id)->where('product_id', $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        // $cart = null;
        $product = Product::get();
        $product = $product->shuffle()->take(4);
        $settings = Main::first();
        $product_ids = Product::get();

        return view('frontend.shop-details', compact('cart', 'carts',  'products',  'product', 'settings',  'product_ids'));
    }
    //cart
    public function cartPage()
    {
        $settings = Main::first();
        $client = Session::get('client');
        $carts = Cart::with('product', 'color', 'size');
        $cart = Cart::query();
        $carts = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        return view('frontend.cart', compact('carts', 'client', 'settings'));
    }
//wish
    public function wishPage()
    {
        $settings = Main::first();
        $product = Product::get();
        $client = Session::get('client');
        $wishs = Wish::with('product', 'color', 'size')->get();
        $wish = Wish::query();
        if ($client) {
            $wish = $wish->where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $wish = [];
        }
        $carts = Cart::with('product', 'color', 'size');
        $cart = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = $carts->where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        return view('frontend.wish', compact('client', 'settings', 'product', 'wishs', 'carts'));
    }
    //order
    public function orderPage()
    {
        $settings = Main::first();
        $categorys = Category::get();
        $client = Session::get('client');
        $orders = Order::with('product', 'color', 'size');
        $orders = Order::query();
        $orders = Order::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $orders = Order::where('client_id', $client->id)->with('products')->get();
        } else {
            $orders = null;
            $orders = [];
        }
        $carts = Cart::with('product', 'color', 'size');
        $cart = Cart::query();
        $carts = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        return view('frontend.order', compact('orders', 'client', 'categorys', 'settings', 'carts'));
    }
    //contact
    public function contactPage()
    {
        $client = Client::get();
        $client = Session::get('client');
        $settings = Main::first();
        $productsize = ProductSize::get();
        $productcolor = ProductColor::get();
        $offers = Offer::get();
        $cart = Cart::query();
        $carts = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        $products = Product::get()->shuffle()->take(8);
        $orders = Cart::with('product', 'color', 'size');
        $orders = Cart::query();
        $orders = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $orders = Cart::where('client_id', $client->id)->get();
        } else {
            $orders = null;
            $orders = [];
        }
        $categorys = Category::get();
        $partners = Partner::get();
        $reviews = Review::get();
        $ads = Ads::get();

        return view('frontend.contact', compact('settings', 'offers', 'products', 'productsize', 'productcolor', 'reviews', 'client', 'categorys', 'partners', 'ads', 'cart', 'carts', 'orders'));
    }
    //shop
    public function shopPage(Request $request)
    {
        $client = Client::get();
        $client = Session::get('client');
        $settings = Main::first();
        $productsize = ProductSize::get();
        $productcolor = ProductColor::get();
        $offers = Offer::get();
        $cart = Cart::query();
        $carts = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        $products = Product::get();
        // $value = $request->query('search');
        // if($value){
        //     $products = $products->where('name',$value);
        // }
        $orders = Cart::with('product', 'color', 'size');
        $orders = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $orders = Cart::where('client_id', $client->id)->get();
        } else {
            $orders = null;
            $orders = [];
        }
        $query = $request->get('query');
        if(isset($query)){
            $products = Product::where('name', 'LIKE', "%$query%")->inRandomOrder()->get();
        } else {
            $products = Product::inRandomOrder()->get();
        }
        $categorys = Category::get();
        $partners = Partner::get();
        $reviews = Review::get();
        $ads = Ads::get();
        return view('frontend.shop', compact('settings', 'offers', 'products', 'productsize', 'productcolor', 'reviews', 'client', 'categorys', 'partners', 'ads', 'cart', 'carts', 'orders'));
    }
    //about
    public function aboutPage()
    {
        $client = Client::get();
        $client = Session::get('client');
        $settings = Main::first();
        $productsize = ProductSize::get();
        $productcolor = ProductColor::get();

        $offers = Offer::get();
        $cart = Cart::query();
        $carts = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        $products = Product::get()->shuffle()->take(8);
        $orders = Cart::with('product', 'color', 'size');
        $orders = Cart::query();
        $orders = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $orders = Cart::where('client_id', $client->id)->get();
        } else {
            $orders = null;
            $orders = [];
        }
        $categorys = Category::get();
        $partners = Partner::get();
        $reviews = Review::get();
        $ads = Ads::get();

        return view('frontend.about', compact('settings', 'offers', 'products', 'productsize', 'productcolor', 'reviews', 'client', 'categorys', 'partners', 'ads', 'cart', 'carts', 'orders'));
    }
//blog
    public function blogPage()
    {
        $client = Client::get();
        $client = Session::get('client');
        $settings = Main::first();
        $productsize = ProductSize::get();
        $productcolor = ProductColor::get();
        $offers = Offer::get();
        $cart = Cart::query();
        $carts = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        $products = Product::get()->shuffle()->take(8);
        $orders = Cart::with('product', 'color', 'size');
        $orders = Cart::query();
        $orders = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $orders = Cart::where('client_id', $client->id)->get();
        } else {
            $orders = null;
            $orders = [];
        }
        $categorys = Category::get();
        $partners = Partner::get();
        $reviews = Review::get();
        $ads = Ads::get();

        return view('frontend.blog', compact('settings', 'offers', 'products', 'productsize', 'productcolor', 'reviews', 'client', 'categorys', 'partners', 'ads', 'cart', 'carts', 'orders'));
    }
     public function blogdetail(){
        $client = Client::get();
        $client = Session::get('client');
        $settings = Main::first();
        $productsize = ProductSize::get();
        $productcolor = ProductColor::get();
        $offers = Offer::get();
        $cart = Cart::query();
        $carts = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        $products = Product::get()->shuffle()->take(8);
        $orders = Cart::with('product', 'color', 'size');
        $orders = Cart::query();
        $orders = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $orders = Cart::where('client_id', $client->id)->get();
        } else {
            $orders = null;
            $orders = [];
        }
        $categorys = Category::get();
        $partners = Partner::get();
        $reviews = Review::get();
        $ads = Ads::get();
           return view('frontend.blogdetail' , compact('settings', 'offers', 'products', 'productsize', 'productcolor', 'reviews', 'client', 'categorys', 'partners', 'ads', 'cart', 'carts', 'orders'));
     }

}
