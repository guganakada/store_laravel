@extends('layout.app')
@section('title', 'Cadastrar ou Editar Cliente')
@section('content')

    <div class="page-header espaco1">
        <h2>Gestão de Cliente</h2>
    </div>

    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    @if ( isset($customer) )
        <form class="form" method="post" action="{{route('customers.update', $customer->id)}}">
            {!! method_field('PUT') !!}
            @else
                <form class="form" method="post" action="{{route('customers.store')}}">
                    @endif
                    {!! csrf_field() !!}

                    <table width="1100">
                        <tr>
                            <td>
                                <label for="name">Nome:</label>
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Nome Completo" class="form-control" value="{{$customer->name or old('name')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">E-mail:</label>
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="E-mail" class="form-control" value="{{$customer->email or old('email')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="birth_date">Data de Nascimento:</label>
                                        <div class="form-group">
                                            <input type="date" name="birth_date" class="form-control" value="{{$customer->birth_date or old('birth_date')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco2"></span>
                                    </td>
                                    <td>
                                        <label for="gender">Sexo:</label>
                                        <div class="form-group">
                                            <select name="gender" class="form-control" value="{{$customer->gender or old('gender')}}">
                                                <option></option>
                                                <option value="M" @if(isset($customer->gender) && $customer->gender == 'M')selected @endif>Masculino</option>
                                                <option value="F" @if(isset($customer->gender) && $customer->gender == 'F')selected @endif>Feminino</option>
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
                                            <input type="text" name="phone" class="form-control" value="{{$customer->phone or old('phone')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="cellphone">Celular:</label>
                                        <div class="form-group">
                                            <input type="text" name="cellphone" class="form-control" value="{{$customer->cellphone or old('cellphone')}}">
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
                                            <input type="text" name="rg" class="form-control" value="{{$customer->rg or old('rg')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="cpf">CPF:</label>
                                        <div class="form-group">
                                            <input type="text" name="cpf" class="form-control" value="{{$customer->cpf or old('cpf')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <td>
                                <label for="profession">Profissão:</label>
                                <div class="form-group">
                                    <input type="text" name="profession" class="form-control" value="{{$customer->profession or old('profession')}}">
                                </div>
                            </td>
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
                                            <input type="text" name="zipcode" class="form-control" value="{{$customer->zipcode or old('zipcode')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <td>
                                <label for="address">Logradouro:</label>
                                <div class="form-group">
                                    <input type="text" name="address" placeholder="Avenida, Rua, Praça, ..." class="form-control" value="{{$customer->address or old('address')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="number">Número:</label>
                                        <div class="form-group">
                                            <input type="text" name="number" class="form-control" value="{{$customer->number or old('number')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="complement">Complemento:</label>
                                        <div class="form-group">
                                            <input type="text" name="complement" class="form-control" value="{{$customer->complement or old('complement')}}">
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
                                            <input type="text" name="city" class="form-control" value="{{$customer->city or old('city')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="state">Estado:</label>
                                        <div class="form-group">
                                            <input type="text" name="state" class="form-control" value="{{$customer->state or old('state')}}">
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
                                                <a href="{{route('customers.index')}}" class="btn btn-lg btn-warning">Voltar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                    </table>
                </form>


@endsection
