@extends('layout.app')
@section('title', 'Cadastrar ou Editar Funcionário')
@section('content')

    <div class="page-header espaco1">
        <h2>Gestão de Funcionário</h2>
    </div>

    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    @if ( isset($employee) )
        <form class="form" method="post" action="{{route('employees.update', $employee->id)}}">
            {!! method_field('PUT') !!}
            @else
                <form class="form" method="post" action="{{route('employees.store')}}">
                    @endif
                    {!! csrf_field() !!}

                    <table width="1100">
                        <tr>
                            <td>
                                <label for="name">Nome:</label>
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Nome Completo" class="form-control" value="{{$employee->name or old('name')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">E-mail:</label>
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="E-mail" class="form-control" value="{{$employee->email or old('email')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="birth_date">Data de Nascimento:</label>
                                        <div class="form-group">
                                            <input type="date" name="birth_date" class="form-control" value="{{$employee->birth_date or old('birth_date')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco2"></span>
                                    </td>
                                    <td>
                                        <label for="gender">Sexo:</label>
                                        <div class="form-group">
                                            <select name="gender" class="form-control" value="{{$employee->gender or old('gender')}}">
                                                <option></option>
                                                <option value="M" @if(isset($employee->gender) && $employee->gender == 'M')selected @endif>Masculino</option>
                                                <option value="F" @if(isset($employee->gender) && $employee->gender == 'F')selected @endif>Feminino</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="phone">Telefone:</label>
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" value="{{$employee->phone or old('phone')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="cellphone">Celular:</label>
                                        <div class="form-group">
                                            <input type="text" name="cellphone" class="form-control" value="{{$employee->cellphone or old('cellphone')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="rg">RG:</label>
                                        <div class="form-group">
                                            <input type="text" name="rg" class="form-control" value="{{$employee->rg or old('rg')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="cpf">CPF:</label>
                                        <div class="form-group">
                                            <input type="text" name="cpf" class="form-control" value="{{$employee->cpf or old('cpf')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="cnh">CNH:</label>
                                        <div class="form-group">
                                            <input type="text" name="cnh" class="form-control" value="{{$employee->cnh or old('cnh')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="scholarity">Escolaridade:</label>
                                        <div class="form-group">
                                            <input type="text" name="scholarity" class="form-control" value="{{$employee->scholarity or old('scholarity')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="profession">Profissão:</label>
                                        <div class="form-group">
                                            <input type="text" name="profession" class="form-control" value="{{$employee->profession or old('profession')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="responsibility">Cargo:</label>
                                        <div class="form-group">
                                            <select name="responsibility_id" class="form-control" value="{{$employee->responsibility_id or old('responsibility_id')}}">
                                                <option></option>
                                                @foreach( $responsibilities as $responsibility )
                                                    <option value="{{$responsibility->id}}" @if(isset($employee) && $responsibility->id == $employee->responsibility_id) selected @endif> {{$responsibility->responsibility}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="salary">Salário:</label>
                                        <div class="form-group">
                                            <input type="text" name="salary" class="form-control" value="{{$employee->salary or old('salary')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <td>
                                <label for="description">Descrição:</label>
                                <div class="form-group">
                                    <textarea name="description" class="form-control" value="{{$employee->description or old('description')}}"></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="level">Nivel de Acesso:</label>
                                        <div class="form-group">
                                            <select name="level" class="form-control" value="{{ old('level')}}">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco2"></span>
                                    </td>
                                    <td>
                                        <label for="user">Usuário de Acesso:</label>
                                        <div class="form-group">
                                            <select name="user" class="form-control" value="{{ old('user')}}">
                                                <option></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <td>
                                <p><h2>Endereço</h2></p>
                            </td>
                        </tr>
                        <tr>
                            <table width="400">
                                <tr>
                                    <td>
                                        <label for="zipcode">CEP:</label>
                                        <div class="form-group">
                                            <input type="text" name="zipcode" class="form-control" value="{{$employee->zipcode or old('zipcode')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <td>
                                <label for="address">Logradouro:</label>
                                <div class="form-group">
                                    <input type="text" name="address" placeholder="Avenida, Rua, Praça, ..." class="form-control" value="{{$employee->address or old('address')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="number">Número:</label>
                                        <div class="form-group">
                                            <input type="text" name="number" class="form-control" value="{{$employee->number or old('number')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="complement">Complemento:</label>
                                        <div class="form-group">
                                            <input type="text" name="complement" class="form-control" value="{{$employee->complement or old('complement')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="city">Cidade:</label>
                                        <div class="form-group">
                                            <input type="text" name="city" class="form-control" value="{{$employee->city or old('city')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="state">Estado:</label>
                                        <div class="form-group">
                                            <input type="text" name="state" class="form-control" value="{{$employee->state or old('state')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <td>
                                <span class="espaco2 espaco1"></span>
                            </td>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <span class="espaco3"></span>
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
                                                <a href="{{route('employees.index')}}" class="btn btn-lg btn-warning">Voltar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                    </table>
                </form>


@endsection
