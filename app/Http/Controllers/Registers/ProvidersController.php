<?php

namespace App\Http\Controllers\Registers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Provider;
use Illuminate\Support\Facades\DB;

class ProvidersController extends Controller
{

    public function index(){
        $providers = DB::table('providers')->paginate(10);
        return view('registers.provider.index', array('providers' => $providers));
    }

    public function show($id){
        $provider = Provider::find($id);
        return view('registers.provider.show', array('provider' => $provider));
    }

    public function create(){
        return view('registers.provider.create-edit');
    }

    public function store(Request $request){

        $provider = new Provider();

        $provider->name = $request->input('name');
        $provider->email = $request->input('email');
        $provider->address = $request->input('address');
        $provider->number = $request->input('number');
        $provider->complement = $request->input('complement');
        $provider->city = $request->input('city');
        $provider->state = $request->input('state');
        $provider->zipcode = $request->input('zipcode');
        $provider->phone1 = $request->input('phone1');
        $provider->phone2 = $request->input('phone2');
        $provider->cellphone = $request->input('cellphone');
        $provider->cnpj = $request->input('cnpj');
        $provider->ie = $request->input('ie');
        $provider->cpf = $request->input('cpf');
        $provider->description = $request->input('description');
        // $provider->level = $request->input('level');

        if( $provider->save() ){
            return redirect()->route('providers.index')->with(['message' => 'Fornecedor incluido com sucesso.']);
        }else{
            return redirect()->route('providers.edit', $id)->with(['errors' => 'Falha ao editar fornecedor.']);
        }
    }

    public function edit($id){
        $provider = Provider::find($id);
        return view('registers.provider.create-edit', array('provider' => $provider));
    }

    public function update(Request $request, $id){

        $provider = Provider::find($id);

        $provider->name = $request->input('name');
        $provider->email = $request->input('email');
        $provider->address = $request->input('address');
        $provider->number = $request->input('number');
        $provider->complement = $request->input('complement');
        $provider->city = $request->input('city');
        $provider->state = $request->input('state');
        $provider->zipcode = $request->input('zipcode');
        $provider->phone1 = $request->input('phone1');
        $provider->phone2 = $request->input('phone2');
        $provider->cellphone = $request->input('cellphone');
        $provider->cnpj = $request->input('cnpj');
        $provider->ie = $request->input('ie');
        $provider->cpf = $request->input('cpf');
        $provider->description = $request->input('description');
        // $provider->level = $request->input('level');

        if( $provider->save() ){
            return redirect()->route('providers.index')->with(['message' => 'Fornecedor alterado com sucesso.']);
        }else{
            return redirect()->route('providers.edit', $id)->with(['errors' => 'Falha ao editar fornecedor.']);
        }
    }
}
