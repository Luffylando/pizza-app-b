<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

        $request->validate([

            'customer_name'         => 'required|max:100|min:3',
            'customer_address'      => 'required|max:100|min:3',
            'customer_phone'        => 'required|max:40|min:10',
            'order_list'            => 'required',
            'price'                 => 'required',
            'total_price'           => 'required',
        ]);

        $create_order =  Order::create([

            'customer_name'         => $request->input('customer_name'),
            'customer_address'      => $request->input('customer_address'),
            'customer_phone'        => $request->input('customer_phone'),
            'order_list'            => $request->input('order_list'),
            'price'                 => $request->input('price'),
            'total_price'           => $request->input('total_price'),
        ]);

        if ($create_order) {

            return response()->json(['Message' => 'Your order has been created successfully.'], 200);
        }
        return response()->json(['Error Message' => 'Error while trying to post an order.'], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        if ($order) {
            return $order;
        }
        return response()->json(['Error message' => 'Wrong address, redirect.']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
