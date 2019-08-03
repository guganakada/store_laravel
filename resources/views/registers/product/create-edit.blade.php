@extends('layout.app')
@section('title', 'Cadastrar ou Editar Produtos')
@section('content')

    <div class="page-header espaco1">
        <h2>Gestão de Produtos</h2>
    </div>

    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    @if ( isset($product) )
        <form class="form" method="post" action="{{route('products.update', $product->id)}}">
            {!! method_field('PUT') !!}
            @else
                <form class="form" method="post" action="{{route('products.store')}}">
                    @endif
                    {!! csrf_field() !!}

                    <table width="1100">
                        <tr>
                            <td>
                                <label for="product">Produto:</label>
                                <div class="form-group">
                                    <input type="text" name="product" placeholder="Produto ou Serviço" class="form-control" value="{{$product->product or old('product')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="category">Categoria:</label>
                                <div class="form-group">
                                    <select name="category_id" class="form-control" value="{{$product->category_id or old('category_id')}}">
                                        <option></option>
                                        @foreach( $categories as $category )
                                            <option value="{{$category->id}}" @if(isset($product) && $category->id == $product->category_id ) selected @endif> {{$category->category}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="description">Descrição:</label>
                                <div class="form-group">
                                    <textarea name="description" placeholder="Descrição do produto" class="form-control">{{$product->description or old('description')}}</textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="quantity">Quantidade:</label>
                                <div class="form-group">
                                    <input type="text" name="quantity" placeholder="Quantidade em Estoque"
                                           class="form-control" value="{{$product->quantity or old('quantity')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="cost">Valor de Custo:</label>
                                        <div class="form-group">
                                            <input type="text" name="cost" placeholder="Valor de Custo" class="form-control" value="{{$product->cost or old('cost')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco2"></span>
                                    </td>
                                    <td>
                                        <label for="value">Valor de Venda:</label>
                                        <div class="form-group">
                                            <input type="text" name="value" placeholder="Valor de Venda" class="form-control" value="{{$product->value or old('value')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
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
                                                <a href="{{route('products.index')}}" class="btn btn-lg btn-warning">Voltar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                    </table>

                </form>

@endsection
