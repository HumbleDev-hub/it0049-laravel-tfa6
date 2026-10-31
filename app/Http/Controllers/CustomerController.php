<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all(); // Fetches from database via Eloquent
        return view('customers', compact('customers'));
    }
}