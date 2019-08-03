@extends('layout.app')
@section('title', 'Clientes')
@section('content')

    <div class="page-header">
        <h2>Clientes</h2>
    </div>

    <div class="espaco4 text-right">
        <a href="{{route('customers.create')}}" class="btn btn-lg btn-primary">Cadastrar Cliente</a>
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

        @foreach ($customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->city}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->cellphone}}</td>
                <td>
                    <a href="{{route('customers.edit', $customer->id)}}"><img src="{{url('img/icon/edit-icon2.png')}}" width="20" alt="Edit"></a>
                </td>
                <td>
                    <a href="{{route('customers.show', $customer->id)}}"><img src="{{url('img/icon/plus-icon2.png')}}" width="20" alt="Show"></a>
                </td>
            </tr>
        @endforeach

    </table>

    <div class="text-center">
        {{ $customers->links() }}
    </div>

@endsection