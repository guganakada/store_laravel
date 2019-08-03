@extends('layout.app')
@section('title', 'Informações do Cliente')
@section('content')

    <div class="page-header espaco1">
        <h2>Informações do Cliente</h2>
    </div>

    <table width="1100">
        <tr>
            <td>
                <label for="name">Nome: <strong>{{$customer->name}}</strong></label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">E-mail: <strong>{{$customer->email}}</strong></label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="birth_date">Data de Nascimento: {{$customer->birth_date}}</label>

            </td>
            <td>
                <label for="gender">
                    Sexo:
                    @if (isset($customer->gender) && $customer->gender == 'M' )
                         Masculino
                    @endif
                    @if (isset($customer->gender) && $customer->gender == 'F' )
                         Feminino
                    @endif
                </label>

            </td>
        </tr>
        <tr>
            <td>
                <label for="phone">Telefone: {{$customer->phone}}</label>
            </td>
            <td>
                <label for="cellphone">Celular: {{$customer->cellphone}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="rg">RG: {{$customer->rg}}</label>
            </td>
            <td>
                <label for="cpf">CPF: {{$customer->cpf}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="profession">Profissão: {{$customer->profession}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                <h3>Endereço</h3></p>
            </td>
        </tr>
        <tr>
            <td>
                <label for="zipcode">CEP: {{$customer->zipcode}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="address">Logradouro: {{$customer->address}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="number">Número: {{$customer->number}}</label>
            </td>
            <td>
                <label for="complement">Complemento: {{$customer->complement}}</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="city">Cidade: {{$customer->city}}</label>
            </td>
            <td>
                <label for="state">Estado: {{$customer->state}}</label>
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
                        <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-lg btn-primary">Editar</a>
                    </div>
                </div>
            </td>
            <td>
                <span class="espaco3"></span>
            </td>
            <td>
                <div class="text-left">
                    <div class="form-group">
                        <a href="{{route('customers.index')}}" class="btn btn-lg btn-warning">Voltar</a>
                    </div>
                </div>
            </td>
        </tr>
    </table>

@endsection
