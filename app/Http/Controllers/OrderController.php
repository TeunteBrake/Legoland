<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{
    public function showAll()
    {
        $orders = Order::all();

        return view('admin.bestellingen', ['orders' => $orders]);
    }

    public function create()
    {
        $order = new Order();

        $order->first_name = request('firstname');
        $order->last_name = request('lastname');
        $order->email = request('email');
        $order->phone = request('phone');
        $order->amount = request('amount');

        $order->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('admin.bestellingedit', compact('order'));
    }

    public function update($id)
    {
        $order = Order::find($id);

        $order->first_name = request('firstname');
        $order->last_name = request('lastname');
        $order->email = request('email');
        $order->phone = request('phone');
        $order->amount = request('amount');

        $order->save();

        return redirect('/admin/bestellingen');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect('/admin/bestellingen');
    }
}
