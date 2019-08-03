@extends('layout.app')
@section('title', 'Informações do Funcionário')
@section('content')

    <div class="page-header espaco1">
        <h2>Informações do Funcionário</h2>
    </div>

    <table width="1100">
        <tr>
            <td>
                <label for="name">Nome: <strong>{{$employee->name}}</strong></label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">E-mail: <strong>{{$employee->email}}</strong></label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="birth_date">Data de Nascimento: {{$employee->birth_date}}</label>
            </td>
            <td>
                <label for="gender">
                    Sexo:
                    @if (isset($employee->gender) && $employee->gender == 'M' )
                        Masculino
                    @endif
                    @if (isset($employee->gender) && $employee->gender == 'F' )
                        Feminino
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="phone">Telefone: {{$employee->phone}}</label>
            </td>
            <td>
                <label for="cellphone">Celular: {{$employee->cellphone}}</label>
            </td>
        </tr>
        <tr>
            <table width="1100">
                <tr>
                    <td>
                        <label for="rg">RG: {{$employee->rg}}</label>
                    </td>
                    <td>
                        <span class="espaco3"></span>
                    </td>
                    <td>
                        <label for="cpf">CPF: {{$employee->cpf}}</label>
                    </td>
                    <td>
                        <span class="espaco3"></span>
                    </td>
                    <td>
                        <label for="cnh">CNH: {{$employee->cnh}}</label>
                    </td>
                </tr>
            </table>
        </tr>
        <tr>
            <table width="1100">
                <tr>
                    <td>
                        <label for="scholarity">Escolaridade: {{$employee->scholarity}}</label>
                    </td>
                    <td>
                        <span class="espaco3"></span>
                    </td>
                    <td>
                        <label for="profession">Profissão: {{$employee->profession}}</label>
                    </td>
                </tr>
            </table>
        </tr>
        <tr>
            <table width="1100">
                <tr>
                    <td>
                        <label for="responsibility">Cargo: @if(isset($employee->responsibility_id)){{$responsibility->responsibility}} @endif</label>
                    </td>
                    <td>
                        <span class="espaco3"></span>
                    </td>
                    <td>
                        <label for="salary">Salário: {{$employee->salary}}</label>
                    </td>
                </tr>
            </table>
        </tr>
        <tr>
            <td>
                <label for="description">Descrição: {{$employee->description}}</label>
            </td>
        </tr>
        <tr>
            <table width="1100">
                <tr>
                    <td>
                        <label for="level">Nivel de Acesso: {{$employee->level}}</label>
                    </td>
                    <td>
                        <span class="espaco2"></span>
                    </td>
                    <td>
                        <label for="user">Usuário de Acesso: {{$employee->user}}</label>
                    </td>
                </tr>
            </table>
        </tr>
        <tr>
            <td>
                <p><h3>Endereço</h3></p>
            </td>
        </tr>
        <tr>
            <td>
                <p><label for="zipcode">CEP: {{$employee->zipcode}}</label></p>
            </td>
        </tr>
        <tr>
            <td>
                <p><label for="address">Logradouro: {{$employee->address}}</label></p>
            </td>
        </tr>
        <tr>
            <table width="1100">
                <tr>
                    <td>
                        <label for="number">Número: {{$employee->number}}</label>
                    </td>
                    <td>
                        <label for="complement">Complemento: {{$employee->complement}}</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="city">Cidade: {{$employee->city}}</label>
                    </td>
                    <td>
                        <label for="state">Estado: {{$employee->state}}</label>
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
        </tr>
    </table>

    <table width="1100">
        <tr>
            <td>
                <div class="text-right">
                    <div class="form-group">
                        <a href="{{route('employees.edit', $employee->id)}}" class="btn btn-lg btn-primary">Editar</a>
                    </div>
                </div>
            </td>
            <td>
                <span class="espaco3"></span>
            </td>
            <td>
                <div class="text-left">
                    <div class="form-group">
                        <a href="{{route('employees.index')}}" class="btn btn-lg btn-warning">Voltar</a>
                    </div>
                </div>
            </td>
        </tr>
    </table>

@endsection
