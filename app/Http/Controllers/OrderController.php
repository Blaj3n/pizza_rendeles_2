<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return $orders;
    }
    public function show($id){
        $order = Order::find($id);
        return $order;
    }
    public function destroy($id){
        Order::find($id)->delete();
    }
    public function store(Request $request){
        $Order = new Order();
        $Order->user_id = $request->user_id;
        $Order->pizza_id = $request->pizza_id;
        $Order->save();
    }
    public function update(Request $request, $id){
        $Order = Order::find($id);
        $Order->user_id = $request->user_id;
        $Order->pizza_id = $request->pizza_id;
        $Order->save();
    }
}