<?php

namespace App\Http\Controllers\Registers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{

    public function index(){

        $customers = DB::table('customers')->paginate(10);

        return view('registers.customer.index', array('customers' => $customers));
    }

    public function show($id){

        $customer = Customer::find($id);

        return view('registers.customer.show', array('customer' => $customer));
    }

    public function create(){

        return view('registers.customer.create-edit');
    }

    public function store(Request $request){

        $customer = new Customer();

        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->birth_date = $request->input('birth_date');
        $customer->gender = $request->input('gender');
        $customer->phone = $request->input('phone');
        $customer->cellphone = $request->input('cellphone');
        $customer->address = $request->input('address');
        $customer->number = $request->input('number');
        $customer->complement = $request->input('complement');
        $customer->city = $request->input('city');
        $customer->state = $request->input('state');
        $customer->zipcode = $request->input('zipcode');
        $customer->rg = $request->input('rg');
        $customer->cpf = $request->input('cpf');
        $customer->profession = $request->input('profession');
        // $customer->level = $request->input('level');

        if( $customer->save() ){
            return redirect()->route('customers.index')->with(['message' => 'Cliente incluido com sucesso.']);
        }else{
            return redirect()->back()->with(['errors' => 'Falha ao editar cliente.']);
        }
    }

    public function edit($id){

        $customer = Customer::find($id);

        return view('registers.customer.create-edit', array('customer' => $customer));
    }

    public function update(Request $request, $id){

        $customer = Customer::find($id);

        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->birth_date = $request->input('birth_date');
        $customer->gender = $request->input('gender');
        $customer->phone = $request->input('phone');
        $customer->cellphone = $request->input('cellphone');
        $customer->address = $request->input('address');
        $customer->number = $request->input('number');
        $customer->complement = $request->input('complement');
        $customer->city = $request->input('city');
        $customer->state = $request->input('state');
        $customer->zipcode = $request->input('zipcode');
        $customer->rg = $request->input('rg');
        $customer->cpf = $request->input('cpf');
        $customer->profession = $request->input('profession');
        // $customer->level = $request->input('level');

        if( $customer->save() ){
            return redirect()->route('customers.index')->with(['message' => 'Cliente alterado com sucesso.']);
        }else{
            return redirect()->route('customers.edit', $id)->with(['errors' => 'Falha ao editar cliente.']);
        }
    }

}
