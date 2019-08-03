@extends('layout.app')
@section('title', 'Cadastrar ou Editar Fornecedor')
@section('content')

    <div class="page-header espaco1">
        <h1>Gestão de Fornecedor</h1>
    </div>

    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    @if ( isset($provider) )
        <form class="form" method="post" action="{{route('providers.update', $provider->id)}}">
            {!! method_field('PUT') !!}
            @else
                <form class="form" method="post" action="{{route('providers.store')}}">
                    @endif
                    {!! csrf_field() !!}

                    <table width="1100">
                        <tr>
                            <td>
                                <label for="name">Nome:</label>
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Razão Social ou Fantasia" class="form-control" value="{{$provider->name or old('name')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">E-mail:</label>
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="E-mail" class="form-control" value="{{$provider->email or old('email')}}">
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
                                        <label for="phone1">Telefone 1:</label>
                                        <div class="form-group">
                                            <input type="text" name="phone1" class="form-control" value="{{$provider->phone1 or old('phone1')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="phone2">Telefone 2:</label>
                                        <div class="form-group">
                                            <input type="text" name="phone2" class="form-control" value="{{$provider->phone2 or old('phone2')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <table width="520">
                                <tr>
                                    <td>
                                        <label for="cellphone">Celular:</label>
                                        <div class="form-group">
                                            <input type="text" name="cellphone" class="form-control" value="{{$provider->cellphone or old('cellphone')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="cnpj">CNPJ:</label>
                                        <div class="form-group">
                                            <input type="text" name="cnpj" class="form-control" value="{{$provider->cnpj or old('cnpj')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="ie">IE:</label>
                                        <div class="form-group">
                                            <input type="text" name="ie" class="form-control" value="{{$provider->ie or old('ie')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <table width="600">
                                <tr>
                                    <td>
                                        <label for="cpf">CPF:</label>
                                        <div class="form-group">
                                            <input type="text" name="cpf" class="form-control" value="{{$provider->cpf or old('cpf')}}">
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
                                            <input type="text" name="zipcode" class="form-control" value="{{$provider->zipcode or old('zipcode')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <td>
                                <label for="address">Logradouro:</label>
                                <div class="form-group">
                                    <input type="text" name="address" placeholder="Avenida, Rua, Praça, ..." class="form-control" value="{{$provider->address or old('address')}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <table width="1100">
                                <tr>
                                    <td>
                                        <label for="number">Número:</label>
                                        <div class="form-group">
                                            <input type="text" name="number" class="form-control" value="{{$provider->number or old('number')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="complement">Complemento:</label>
                                        <div class="form-group">
                                            <input type="text" name="complement" class="form-control" value="{{$provider->complement or old('complement')}}">
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
                                            <input type="text" name="city" class="form-control" value="{{$provider->city or old('city')}}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="espaco3"></span>
                                    </td>
                                    <td>
                                        <label for="state">Estado:</label>
                                        <div class="form-group">
                                            <input type="text" name="state" class="form-control" value="{{$provider->state or old('state')}}">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr>
                            <td>
                                <label for="description">Descrição:</label>
                                <div class="form-group">
                                    <textarea name="description" class="form-control" value="{{$provider->description or old('description')}}"></textarea>
                                </div>
                            </td>
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
                                                <a href="{{route('providers.index')}}" class="btn btn-lg btn-warning">Voltar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                    </table>
                </form>


@endsection
