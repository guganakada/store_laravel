<?php

namespace App\Http\Controllers\Registers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Value;

class ProductsController extends Controller
{

    public function index(){

        $products = DB::table('products')->paginate(10);

        return view('registers.product.index', array('products' => $products));

    }

    public function show($id){

        $product = Product::find($id);

        $category = Category::find($product->category_id);

        $values = Value::all()->where('product_id', '=', $id);

        return view('registers.product.show', array('product' => $product, 'category' => $category, 'values' => $values));
    }

    public function create(){

        $categories = Category::all();

        return view('registers.product.create-edit',  array('categories' => $categories));
    }

    public function store(Request $request){

        $product = new Product();

        $product->product = $request->input('product');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->value = $request->input('value');

        if( $product->save() ){
            return redirect()->route('products.index')->with(['message' => 'Produto incluido com sucesso.']);
        }else{
            return redirect()->back()->with(['errors' => 'Falha ao editar produto.']);
        }

    }

    public function edit($id){

        $product = Product::find($id);

        $categories = Category::all();

        $values = Value::all()->where('product_id', '=', $id);

        return view('registers.product.create-edit', array('product' => $product, 'categories' => $categories, 'values' => $values));
    }

    public function update(Request $request, $id){

        $product = Product::find($id);

        $product->product = $request->input('product');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');

        if ($request->input('value')){

            $product->value = $request->input('value');

            $value = new Value();

            $value->product_id = $id;
            $value->cost = $request->input('cost');
            $value->value = $request->input('value');

            $value->save();
        }

        if( $product->save() ){
            return redirect()->route('products.index')->with(['message' => 'Produto alterado com sucesso.']);
        }else{
            return redirect()->route('products.edit', $id)->with(['errors' => 'Falha ao editar produto.']);
        }
    }

}
