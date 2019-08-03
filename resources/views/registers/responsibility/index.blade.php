@extends('layout.app')
@section('title', 'Cargos e Funções')
@section('content')

    <div class="page-header">
        <h2>Cargos e Funções</h2>
    </div>

    <div class="row">
        @if( isset($message) )
            <div class="alert alert-success">
                    <p>{{$message}}</p>
            </div>
        @endif
    </div>

    <div class="espaco4 text-right">
        <a href="{{route('responsibilities.create')}}" class="btn btn-lg btn-primary">Cadastrar Cargo</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>Cargo</th>
            <th>Descrição</th>
            <th>Média Salarial</th>
            <th width='70px'>Editar</th>
        </tr>

        @foreach ($responsibilities as $responsibility)
            <tr>
                <td>{{$responsibility->responsibility}}</td>
                <td>{{$responsibility->description}}</td>
                <td>R$ {{$responsibility->salary1}}</td>
                <td>
                    <a href="{{route('responsibilities.edit', $responsibility->id)}}"><img src="{{url('img/icon/edit-icon2.png')}}" width="20" alt="Edit"></a>
                </td>
            </tr>
        @endforeach

    </table>

    <div class="text-center">
        {{ $responsibilities->links() }}
    </div>

@endsection