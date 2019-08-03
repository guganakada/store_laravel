@extends('layout.app')
@section('title', 'Cadastrar ou Editar Categoria de Produtos')
@section('content')

    <div class="page-header espaco1">
        <h1>Gestão de Categorias</h1>
    </div>

    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    @if ( isset($category) )
        <form class="form" method="post" action="{{route('categories.update', $category->id)}}">
            {!! method_field('PUT') !!}
            @else
                <form class="form" method="post" action="{{route('categories.store')}}">
                    @endif
                    {!! csrf_field() !!}
                    <table width="1100">
                        <tr>
                            <td>
                                <label for="category">Categoria:</label>
                                <div class="form-group">
                                    <input type="text" name="category" placeholder="Categoria de Produto" class="form-control" value="{{$category->category or old('category')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="observation">Descrição:</label>
                                <div class="form-group">
                                    <textarea name="description" class="form-control">{{$category->description or old('description')}}</textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <span class="espaco2"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-right">
                                            <div class="form-group">
                                                <button class="btn btn-lg btn-primary" type="submit">Enviar</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <div class="text-left">
                                            <div class="form-group">
                                                <a href="{{route('categories.index')}}" class="btn btn-lg btn-warning">Voltar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                    </table>
                </form>

@endsection