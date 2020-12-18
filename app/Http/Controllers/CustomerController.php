<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function showAll()
    {
        $customers = Customer::all();

        return view('admin.klanten', ['customers' => $customers]);
    }

    public function create()
    {
        $customer = new Customer();

        $customer->first_name = request('firstname');
        $customer->last_name = request('lastname');
        $customer->street = request('street');
        $customer->houseNumber = request('housenumber');
        $customer->postalCode = request('postalcode');
        $customer->town = request('town');
        $customer->email = request('email');
        $customer->phone = request('phone');

        $customer->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.klantenedit', compact('customer'));
    }

    public function update($id)
    {
        $customer = Customer::find($id);

        $customer->first_name = request('firstname');
        $customer->last_name = request('lastname');
        $customer->street = request('street');
        $customer->houseNumber = request('housenumber');
        $customer->postalCode = request('postalcode');
        $customer->town = request('town');
        $customer->email = request('email');
        $customer->phone = request('phone');

        $customer->save();

        return redirect('/admin/klanten');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect('/admin/klanten');
    }
}
