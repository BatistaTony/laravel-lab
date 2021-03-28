<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){

        $services  = Service::all();

        return view("service/index", compact("services"));
    }

    public function store(){

        $data = request()->validate([
            'name' => 'required | min:5 | max:10'
        ]);



        Service::create($data);


        return redirect()->back();

    }
}
