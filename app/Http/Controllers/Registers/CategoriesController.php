<?php

namespace App\Http\Controllers\Registers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{

    public function index(){

        $categories = DB::table('categories')->paginate(5);

        return view('registers.category.index', array('categories' => $categories));
    }

    public function create(){
        return view('registers.category.create-edit');
    }

    public function store(Request $request){

        $category = new Category();

        $category->category = $request->input('category');
        $category->description = $request->input('description');

        if( $category->save() ){
            return redirect()->route('categories.index')->with('message', 'Categoria incluida com sucesso.');
        }else{
            return redirect()->back()->with(['errors' => 'Falha ao editar categoria.']);
        }
    }

    public function edit($id){
        $category = Category::find($id);
        return view('registers.category.create-edit', array('category' => $category));
    }

    public function update(Request $request, $id){

        $category = Category::find($id);

        $category->category = $request->input('category');
        $category->description = $request->input('description');

        if ( $category->save() ){
            return redirect()->route('categories.index')->with('message', 'Categoria alterada com sucesso.');
        }else{
            return redirect()->route('categories.edit', $id)->with(['errors' => 'Falha ao editar categoria.']);
        }
    }

}
