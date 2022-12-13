<?php

namespace Customers\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Customers\Models\Customer;
use Customers\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{

    public function index()
    {
        return viewPath('customers','backend','index');
    }

    public function store(CustomerRequest $request)
    {
         Customer::create($request->validated());
    }
   
}