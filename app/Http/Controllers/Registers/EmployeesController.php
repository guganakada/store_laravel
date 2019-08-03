<?php

namespace App\Http\Controllers\Registers;

use App\Models\Employee;
use App\Models\Responsibility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{

    public function index(){

        $employees = DB::table('employees')->paginate(10);

        return view('registers.employee.index', array('employees' => $employees));
    }

    public function show($id){

        $employee = Employee::find($id);

        $responsibility = Responsibility::find($employee->responsibility_id);

        return view('registers.employee.show', array('employee' => $employee, 'responsibility' => $responsibility));
    }

    public function create(){

        $responsibilities = Responsibility::all();

        return view('registers.employee.create-edit', array('responsibilities' => $responsibilities));
    }

    public function store(Request $request){

        $employee = new Employee();

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->birth_date = $request->input('birth_date');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->cellphone = $request->input('cellphone');
        $employee->address = $request->input('address');
        $employee->number = $request->input('number');
        $employee->complement = $request->input('complement');
        $employee->city = $request->input('city');
        $employee->state = $request->input('state');
        $employee->zipcode = $request->input('zipcode');
        $employee->rg = $request->input('rg');
        $employee->cpf = $request->input('cpf');
        $employee->cnh = $request->input('cnh');
        $employee->scholarity = $request->input('scholarity');
        $employee->profession = $request->input('profession');
        $employee->description = $request->input('description');
        $employee->responsibility_id = $request->input('responsibility_id');
        $employee->salary = $request->input('salary');
        $employee->photo = $request->input('photo');
        //$employee->level = $request->input('level');

        if( $employee->save() ){
            return redirect()->route('employees.index')->with(['message' => 'Funcionário incluido com sucesso.']);
        }else{
            return redirect()->back()->with(['errors' => 'Falha ao editar funcionário.']);
        }

    }

    public function edit($id){
        $employee = Employee::find($id);

        $responsibilities = Responsibility::all();

        return view('registers.employee.create-edit', array('employee' => $employee, 'responsibilities' => $responsibilities));
    }

    public function update(Request $request, $id){

        $employee = Employee::find($id);

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->birth_date = $request->input('birth_date');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->cellphone = $request->input('cellphone');
        $employee->address = $request->input('address');
        $employee->number = $request->input('number');
        $employee->complement = $request->input('complement');
        $employee->city = $request->input('city');
        $employee->state = $request->input('state');
        $employee->zipcode = $request->input('zipcode');
        $employee->rg = $request->input('rg');
        $employee->cpf = $request->input('cpf');
        $employee->cnh = $request->input('cnh');
        $employee->scholarity = $request->input('scholarity');
        $employee->profession = $request->input('profession');
        $employee->description = $request->input('description');
        $employee->responsibility_id = $request->input('responsibility_id');
        $employee->salary = $request->input('salary');
        $employee->photo = $request->input('photo');
        //$employee->level = $request->input('level');

        if( $employee->save() ){
            return redirect()->route('employees.index')->with(['message' => 'Cliente alterado com sucesso.']);
        }else{
            return redirect()->back()->with(['errors' => 'Falha ao editar cliente.']);
        }
    }

}
