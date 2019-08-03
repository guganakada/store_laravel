@extends('layout.app')
@section('title', 'Informações do Fornecedor')
@section('content')

    <div class="page-header espaco1">
        <h2>Informações do Fornecedor</h2>
    </div>

    <table width="1100">
        <tr>
            <td>
                <label for="name">Razão Social ou Fantasia: <strong>{{$provider->name}}</strong></label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">E-mail: <strong>{{$provider->email}}</strong></label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="phone1">Telefone: {{$provider->phone1}}</label>

            </td>
            <td>
                <label for="phone2">Telefone: {{$provider->phone2}}</label>

            </td>
        </tr>
        <tr>
            <td>
                <label for="cellphone">Celular: {{$provider->cellphone}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="cnpj">CNPJ: {{$provider->cnpj}}</label>
            </td>
            <td>
                <label for="ie">IE: {{$provider->ie}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="cpf">CPF: {{$provider->cpf}}</label>
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td>
                <label for="description">Descrição: {{$provider->description}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <p><h3>Endereço</h3></p>
            </td>
        </tr>
        <tr>
            <td>
                <label for="zipcode">CEP: {{$provider->zipcode}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="address">Logradouro: {{$provider->address}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="number">Número: {{$provider->number}}</label>
            </td>
            <td>
                <label for="complement">Complemento: {{$provider->complement}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="city">Cidade: {{$provider->city}}</label>
            </td>
            <td>
                <label for="state">Estado: {{$provider->state}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <br>
                <span class="espaco2 espaco1"></span>
            </td>
        </tr>
    </table>

    <table width="1100">
        <tr>
            <td>
                <div class="text-right">
                    <div class="form-group">
                        <a href="{{route('providers.edit', $provider->id)}}" class="btn btn-lg btn-primary">Editar</a>
                    </div>
                </div>
            </td>
            <td>
                <span class="espaco3"></span>
            </td>
            <td>
                <div class="text-left">
                    <div class="form-group">
                        <a href="{{route('providers.index')}}" class="btn btn-lg btn-warning">Voltar</a>
                    </div>
                </div>
            </td>
        </tr>
    </table>

@endsection
