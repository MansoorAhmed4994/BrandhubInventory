<?php

namespace App\Http\Controllers;

use App\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('customer.index')->with('customer', Customer::all());
    }

    public function printdataslip(Request $request)
    {
        return view('customer.printdata')->with('customer', Customer::all());
        
        
    }
    
    public function printdata(Request $request)
    {
        $customerids = (explode(",",$request->customerids));
        $Customers = Customer::all()->whereIn('id',$customerids);
        //dd($Customers);

        return redirect()->route('customer.printdata');
    }

    
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $valiedation_from_array = [
             
            'first_name' => 'required',
            'number' => 'required',
            'description' => 'required',
            'address' => 'required'
            ];

        $this->validate($request, $valiedation_from_array);


        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->number = $request->number;
        $customer->description = $request->description;
        $customer->address = $request->address;
        $customer->created_by = '0';
        $customer->updated_by ='0';
        $customer->status ='active';
        $customer->save();

        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
        return view('customer.edit')->with([
            'customer' => $customer, 
        ]); ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $valiedation_from_array = [
             
            'first_name' => 'required',
            'number' => 'required',
            'description' => 'required',
            'address' => 'required'
            ];

        $this->validate($request, $valiedation_from_array);

        $customer->first_name = $request->first_name;
        $customer->number = $request->number;
        $customer->description = $request->description;
        $customer->address = $request->address;
        $customer->created_by = '0';
        $customer->updated_by ='0';
        $customer->status ='active';
        $customer->save();

        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
