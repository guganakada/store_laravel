@extends('layout.app')
@section('title', 'Fornecedores')
@section('content')

    <div class="page-header">
        <h2>Fornecedores</h2>
    </div>

    <div class="espaco4 text-right">
        <a href="{{route('providers.create')}}" class="btn btn-lg btn-primary">Cadastrar Fornecedor</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Cidade</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th width='60px'>Editar</th>
            <th width='50px'>Mais</th>
        </tr>

        @foreach ($providers as $provider)
            <tr>
                <td>{{$provider->name}}</td>
                <td>{{$provider->email}}</td>
                <td>{{$provider->city}}</td>
                <td>{{$provider->phone1}}</td>
                <td>{{$provider->cellphone}}</td>
                <td>
                    <a href="{{route('providers.edit', $provider->id)}}"><img src="{{url('img/icon/edit-icon2.png')}}" width="20" alt="Edit"></a>
                </td>
                <td>
                    <a href="{{route('providers.show', $provider->id)}}"><img src="{{url('img/icon/plus-icon2.png')}}" width="20" alt="Show"></a>
                </td>
            </tr>
        @endforeach

    </table>

    <div class="text-center">
        {{ $providers->links() }}
    </div>

@endsection