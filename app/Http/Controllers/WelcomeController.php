<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use App\Models\Laptop;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $handphone = Handphone::all();
        $laptop = Laptop::all();
        return view('customer.welcome', compact('handphone', 'laptop'));
    }
}
