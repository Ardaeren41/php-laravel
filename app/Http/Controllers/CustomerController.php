<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    function customers()
    {
       $customer = Customer::get();
       // return Customer::first()->name;
       // return $customer[1]->surname;
         return $customer;
    }
}
