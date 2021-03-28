<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(Request $request){


        $customers =  Customer::where('active', $request->query('active', 1))->get();
        return response()->json($customers);
    }

    public function create(){


        $customer = new Customer();

        return view("customer/create", compact("customer"));
    }

    public function store(){


       $customer =  Customer::create($this->validateData());

        return redirect('/customers/'. $customer->id);
    }

    public function show(Customer $customer){

        return view('customer/show', compact("customer"));
    }

    public function edit(Customer $customer){


        return view('customer/edit', compact("customer"));
    }

    public function update(Customer $customer){


        $customer->update($this->validateData());

        return redirect("/customers");
    }

    public function destroy(Customer $customer){

        $customer->delete();
        return redirect('/customers');
    }

    protected  function validateData(){
        return request()->validate([
            'name'=> "required",
            "email"=> "required | email"
        ]);
    }
}
