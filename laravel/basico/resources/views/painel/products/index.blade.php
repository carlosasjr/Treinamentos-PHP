@extends('templates.template1')
@section('content')
    <h1>Lista de Produtos</h1>

    <table>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>

        @forelse($products as $prod)
            <tr>
                <td>{{$prod->name}}</td>
                <td>{{$prod->description}}</td>
            </tr>
        @empty
            <tr>
                Nenhum Registro nesta tabela
            </tr>
        @endforelse
    </table>

@endsection

