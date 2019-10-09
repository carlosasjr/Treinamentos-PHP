@extends('templates.template1')
@section('content')
    <h1 class="title-pg">Lista de Produtos</h1>

    <a href="" class="btn btn-primary btn-add">
    <span class="glyphicon glyphicon-plus"></span>
        Cadastrar
    </a>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th width="100px">Ações</th>
        </tr>

        @forelse($products as $prod)
            <tr>
                <td>{{$prod->name}}</td>
                <td>{{$prod->description}}</td>
                <td>
                    <a href="" class="edit actions">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <a href="" class="delete actions">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                Nenhum Registro nesta tabela
            </tr>
        @endforelse
    </table>

@endsection

