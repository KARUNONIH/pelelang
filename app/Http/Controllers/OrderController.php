<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;
use App\Models\itemModel;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function checkout(Request $request, $id){
        $a = Auth::id();
        $harga = itemModel::where('id', $id)->value('harga_akhir');
        $name = User::where('id',$a)->value('name');
        $item = itemModel::where('id', $id)->get();

       $order = order::create([
            'id_item'=>$id,
            'name' => $name,
            'total_price' => $harga,
            'status'=>'unpaid'
        ]);


        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $harga * 15256,
            ),
            'customer_details' => array(
                'name' => $name,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        itemModel::where('id', $id)->update(['payment'=>'paid']);
        return view('user.pay', compact('snapToken', 'order', 'item','name'));
    }

    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $order = order::find($request->order_id);
                $order->update(['status' => 'paid']);
            }
        }
    }
}
