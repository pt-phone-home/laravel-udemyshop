<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use Session;

class ShoppingController extends Controller
{
    public function add_to_cart(Request $request) {

       if($request['adult_quantity'] > 0) {
            $product1 = Product::find($request['adult_product_id']);

            Cart::add([
                'id' => $product1->id,
                'price' => $product1->price,
                'quantity' => $request['adult_quantity'],
                'name' => $product1->name
            ]);
       }

       if($request['child_quantity'] > 0) {
            $product2 = Product::find($request['child_product_id']);
            Cart::add([
                'id' => $product2->id,
                'price' => $product2->price,
                'quantity' => $request['child_quantity'],
                'name' => $product2->name
            ]);
       }
       if($request['family_1_quantity'] > 0 ) {
            $product3 = Product::find($request['family_1_product_id']);
            Cart::add([
                'id' => $product3->id,
                'price' => $product3->price,
                'quantity' => $request['family_1_quantity'],
                'name' => $product3->name
            ]);
       }
       if($request['family_2_quantity'] > 0 ) {
            $product4 = Product::find($request['family_2_product_id']);
            Cart::add([
                'id' => $product4->id,
                'price' => $product4->price,
                'quantity' => $request['family_2_quantity'],
                'name' => $product4->name
            ]);
       }

       Session::put([
           'IE_date' => $request['date'],
           'IE_time' => $request['time']
       ]);

       
        
        

    //     Cart::add(array(
    //        'id' => 0,
    //        'price' => $product1->price,
    //        'quantity' => $request['adult_quantity'],
    //        'name' => $product1->name
    //    ),
    //         array(
    //         'id' => 1,
    //         'price' => $product2->price,
    //         'quantity' => $request['child_quantity'],
    //         'name' => $product2->name    
    //    ));

     

        // $product = Product::find(request()->product_id);
        

        // $cart = Cart::add([
        //     'id' => $product->id,
        //     'price' => $product->price,
        //     'quantity' => request()->quantity,
        //     'name' => $product->name
        // ]);

        return redirect()->route('cart');
    }

    public function cart(Request $request) {

        $trip_date = $request->session()->get('IE_date');
        $trip_time = $request->session()->get('IE_time');
       

        return view('cart')->with('trip_date', $trip_date)->with('trip_time', $trip_time);
    }

    public function cart_delete($id) {

        Cart::remove($id);

        return redirect()->back();
    }

   
}
