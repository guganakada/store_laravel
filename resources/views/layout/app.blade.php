<!doctype html>

<!--
Store One - Sistema Loja teste Laravel
Autor: Gustavo B. Nakada
Versão 1.0
-->

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Gustavo B. Nakada">

    <title>Store - @yield('title')</title>
    <link rel="icon" href="{{url('img/logo/icone.png')}}">

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/store.css')}}">

</head>
<body>

<nav class="navbar navbar-expand-sm   navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">
            <!--<strong>Store One</strong>-->
            <img src="{{url('img/logo/logo1.png')}}" width="160" alt="Store">
        </a>

        <div class="navbar-right">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Cadastro
                        </a>
                        <div class="dropdown-menu sm-menu">
                            <a class="dropdown-item" href="/customers">Clientes</a>
                            <a class="dropdown-item" href="/providers">Fornecedores</a>
                            <a class="dropdown-item" href="/categories">Categorias</a>
                            <a class="dropdown-item" href="/products">Produtos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/employees">Funcionários</a>
                            <a class="dropdown-item" href="/responsibilities">Cargos</a>
                            <a class="dropdown-item" href="#">Usuários</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Movimentação
                        </a>
                        <div class="dropdown-menu sm-menu">
                            <a class="dropdown-item" href="/sales">Venda</a>
                            <a class="dropdown-item" href="">Orçamento</a>
                            <a class="dropdown-item" href="/buys">Compra</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Banco
                        </a>
                        <div class="dropdown-menu sm-menu">
                            <a class="dropdown-item" href="#">Contas</a>
                            <a class="dropdown-item" href="#">Cobrança</a>
                            <a class="dropdown-item" href="#">Pagamentos</a>
                            <a class="dropdown-item" href="#">Tributos</a>
                            <a class="dropdown-item" href="#">Folha de Pagamento</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Definições
                        </a>
                        <div class="dropdown-menu sm-menu">
                            <a class="dropdown-item" href="#">Descontos</a>
                            <a class="dropdown-item" href="#">Promoções</a>
                            <a class="dropdown-item" href="#">Aumentos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Relatórios
                        </a>
                        <div class="dropdown-menu sm-menu">
                            <a class="dropdown-item" href="#">Relatório 1</a>
                            <a class="dropdown-item" href="#">Relatório 2</a>
                            <a class="dropdown-item" href="#">Relatório 3</a>
                            <a class="dropdown-item" href="#">Relatório 4</a>
                            <a class="dropdown-item" href="#">Relatório 5</a>
                            <a class="dropdown-item" href="#">Relatório 6</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<nav class="navbar">
    <div class="container text-center">
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    </div>
</nav>

<div class="container espaco1">
    @yield('content')
</div>

<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/store.js')}}"></script>

</body>
</html>
