<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class HelloController extends Controller
{
    public function about(){
        return view("about");
    }

    public function services(){


        $services = Service::all();

        return view("services", compact('services'));
    }
}
