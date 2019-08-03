@extends('layout.app')
@section('title', 'Categorias de Produtos')
@section('content')

    <div class="page-header">
        <h2>Categorias de Produtos</h2>
    </div>

    @if( isset($message) )
        <div class="row">
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        </div>
    @endif

    <div class="espaco4 text-right">
        <a href="{{route('categories.create')}}" class="btn btn-lg btn-primary">Cadastrar Categoria</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>Categoria</th>
            <th>Descrição</th>
            <th width='70px'>Editar</th>
        </tr>

        @if(isset($categories))
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->category}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <a href="{{route('categories.edit', $category->id)}}"><img src="{{url('img/icon/edit-icon2.png')}}" width="20" alt="Edit"></a>
                    </td>
                </tr>
            @endforeach
        @endif

    </table>

    <div class="text-center">
        {{ $categories->links() }}
    </div>

@endsection