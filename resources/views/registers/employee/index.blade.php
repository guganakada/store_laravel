@extends('layout.app')
@section('title', 'Funcionários')
@section('content')

    <div class="page-header">
        <h2>Funcionários</h2>
    </div>

    <div class="espaco4 text-right">
        <a href="{{route('employees.create')}}" class="btn btn-lg btn-primary">Cadastrar Funcionário</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th width='60px'>Editar</th>
            <th width='50px'>Mais</th>
        </tr>

        @foreach ($employees as $employee)
            <tr>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->cellphone}}</td>
                <td>
                    <a href="{{route('employees.edit', $employee->id)}}"><img src="{{url('img/icon/edit-icon2.png')}}" width="20" alt="Edit"></a>
                </td>
                <td>
                    <a href="{{route('employees.show', $employee->id)}}"><img src="{{url('img/icon/plus-icon2.png')}}" width="20" alt="Show"></a>
                </td>
            </tr>
        @endforeach

    </table>

    <div class="text-center">
        {{ $employees->links() }}
    </div>

@endsection