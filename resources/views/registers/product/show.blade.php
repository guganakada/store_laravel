@extends('layout.app')
@section('title', 'Informações do Produto')
@section('content')

    <div class="page-header espaco1">
        <h2>Informações do Produto</h2>
    </div>

    <table width="1100">
        <tr>
            <td>
                <label for="id">Código: <strong>{{$product->id}}</strong></label>
            </td>
            <td>
                <label for="product">Nome: <strong>{{$product->product}}</strong></label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="category">Categoria: @if(isset($product->category_id)){{$category->category}} @endif</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="description">Descrição: <strong>{{$product->description}}</strong></label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="quantity">Quantidade: {{$product->quantity}}</label>
            </td>
            <td>
                <label for="value">Valor: R$ {{$product->value}}</label>
            </td>
        </tr>
        <table class="table table-striped">
            <tr>
                <th>Valor de Custo</th>
                <th>Valor de Venda</th>
                <th>Data</th>
            </tr>

            @if(isset($values))
                @foreach ($values as $value)
                    <tr>
                        <td>R$ {{$value->cost}}</td>
                        <td>R$ {{$value->value}}</td>
                        <td>{{$value->updated_at}}</td>
                    </tr>
                @endforeach
            @endif

        </table>
    </table>

    <table width="1100">
        <tr>
            <td>
                <div class="text-right">
                    <div class="form-group">
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-lg btn-primary">Editar</a>
                    </div>
                </div>
            </td>
            <td>
                <span class="espaco3"></span>
            </td>
            <td>
                <div class="text-left">
                    <div class="form-group">
                        <a href="{{route('products.index')}}" class="btn btn-lg btn-warning">Voltar</a>
                    </div>
                </div>
            </td>
        </tr>
    </table>

@endsection
