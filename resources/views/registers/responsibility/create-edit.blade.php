@extends('layout.app')
@section('title', 'Cadastro de Cargos e Funções')
@section('content')

    <div class="page-header espaco1">
        <h1>Gestão de Cargos</h1>
    </div>

    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    @if ( isset($responsibility) )
        <form class="form" method="post" action="{{route('responsibilities.update', $responsibility->id)}}">
            {!! method_field('PUT') !!}
            @else
                <form class="form" method="post" action="{{route('responsibilities.store')}}">
                    @endif
                    {!! csrf_field() !!}
                    <table width="1100">
                        <tr>
                            <td>
                                <label for="responsibility">Cargo:</label>
                                <div class="form-group">
                                    <input type="text" name="responsibility" placeholder="Cargo ou Função" class="form-control" value="{{$responsibility->responsibility or old('responsibility')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="description">Descrição:</label>
                                <div class="form-group">
                                    <textarea name="description" class="form-control">{{$responsibility->description or old('description')}}</textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="salary">Média Salarial:</label>
                            </td>
                        </tr>
                        <tr>
                            <table width="600">
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="salary1">De: </label>
                                            <input type="text" name="salary1" class="form-control" value="{{$responsibility->salary1 or old('salary1')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco2"></span>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="salary2">Até: </label>
                                            <input type="text" name="salary2" class="form-control" value="{{$responsibility->salary2 or old('salary2')}}">
                                        </div>
                                    </td>
                                </tr>
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
                                                <a href="{{route('responsibilities.index')}}" class="btn btn-lg btn-warning">Voltar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                    </table>
                </form>

@endsection