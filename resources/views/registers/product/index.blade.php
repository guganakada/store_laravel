@extends('layout.app')
@section('title', 'Produtos')
@section('content')

    <div class="page-header">
        <h2>Produtos</h2>
    </div>

    <div class="espaco4 text-right">
        <a href="{{route('products.create')}}" class="btn btn-lg btn-primary">Cadastrar Produto</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>Código</th>
            <th>Produto</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th width='60px'>Editar</th>
            <th width='50px'>Mais</th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->product}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->quantity}}</td>
                <td>R$ {{$product->value}}</td>
                <td>
                    <a href="{{route('products.edit', $product->id)}}"><img src="{{url('img/icon/edit-icon2.png')}}" width="20" alt="Edit"></a>
                </td>
                <td>
                    <a href="{{route('products.show', $product->id)}}"><img src="{{url('img/icon/plus-icon2.png')}}" width="20" alt="Show"></a>
                </td>
            </tr>
        @endforeach

    </table>

    <div class="text-center">
        {{ $products->links() }}
    </div>

@endsection