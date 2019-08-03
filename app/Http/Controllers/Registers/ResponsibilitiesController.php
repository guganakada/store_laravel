<?php

namespace App\Http\Controllers\Registers;

use App\Models\Responsibility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ResponsibilitiesController extends Controller
{

    public function index(){
        $responsibilities = DB::table('responsibilities')->paginate(5);
        return view('registers.responsibility.index', array('responsibilities' => $responsibilities));
    }

    public function create(){
        return view('registers.responsibility.create-edit');
    }

    public function edit($id){
        $responsibility = Responsibility::find($id);
        return view('registers.responsibility.create-edit', array('responsibility' => $responsibility));
    }

    public function store(Request $request){

        $responsibility = new Responsibility();

        $responsibility->responsibility = $request->input('responsibility');
        $responsibility->description = $request->input('description');
        $responsibility->salary1 = $request->input('salary1');
        $responsibility->salary2 = $request->input('salary2');

        if ($responsibility->save()){
            return redirect()->route('responsibilities.index')->with(['message' => 'Cargo ou função incluido com sucesso.']);
        }else{
            return redirect()->back()->with(['errors' => 'Falha ao editar cargo ou função.']);
        }
    }

    public function update(Request $request, $id){

        $responsibility = Responsibility::find($id);

        $responsibility->responsibility = $request->input('responsibility');
        $responsibility->description = $request->input('description');
        $responsibility->salary1 = $request->input('salary1');
        $responsibility->salary2 = $request->input('salary2');

        if ($responsibility->save()){
            return redirect()->route('responsibilities.index')->with(['message' => 'Cargo ou função alterado com sucesso.']);
        }else{
            return redirect()->route('responsibilities.edit', $id)->with(['errors' => 'Falha ao editar cargo ou função.']);
        }
    }

}
