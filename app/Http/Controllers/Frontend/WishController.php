<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WishController extends Controller
{

    public function addWish(Request $request , $product_id)
    {
        $client = Session::get('client');
        if ($client) {
            $product = Product::where('id' , $request->product_id)->first();


                Wish::create([
                    'client_id' => $client->id,
                    'product_id' => $product_id,
                    'price' => $product->price,
                    'name' => $product->name,
                    'image' => $product->image,
                    'discount' => $product->discount,
                    'count' => $product->caunt,
                ]);
                $notification = array(
                    'message' => 'Added Wish successfully!',
                    'alert-type' => 'success'
                );
            }else{
                $notification = array(
                    'message' => 'Not add!',
                    'alert-type' => 'success'
                );
            }


        return redirect()->back()->with($notification);
    }
    public function deleteWish($id)
    {
        $client = session('client');
        $wish = Wish::where('id', $id)->first();
        if ($client && $wish) {
            $wish->delete();
            $notification = array(
                'message' => 'Delete successfully!',
                'alert-type' => 'warning'
            );
        } else {
            $notification = array(
                'message' => 'Delete  successfully!',
                'alert-type' => 'warning'
            );
        }
        return redirect()->back()->with($notification);
    }
}
