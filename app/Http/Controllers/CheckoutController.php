<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe\Stripe;
use Stripe\Charge;
use Cart;

class CheckoutController extends Controller
{
    public function index() {

        $trip_date = Session()->get('IE_date');
        $trip_time = Session()->get('IE_time');



        return view('checkout')->with([
            'trip_date' => $trip_date,
            'trip_time' => $trip_time
        ]);
    }

    public function pay(Request $request) {

        // dd(request()->all());
        \Stripe\Stripe::setVerifySslCerts(false);

        Stripe::setApiKey('sk_test_BRcc6kCRVxqdHqaXfuF9MhT4
        ');

        

        $token = $request['stripeToken'];

       $charge = Charge::create([
           'amount' => Cart::getTotal() * 100,
           'currency' => 'eur',
           'description' => 'Island Ferries Payment',
           'source' => $token
       ]);

       dd('Your Card was Charge Successfully');
    }
}
