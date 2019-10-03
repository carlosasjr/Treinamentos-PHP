<h1>Lista de Tarefas</h1>

@if(count($lista) > 0)
    <ul>
        @foreach($lista as $item)
            <li>{{ $item->item }}</li>
        @endforeach
    </ul>
@else
    <h4>Não existe itens</h4>
@endif

<hr>


<form method="post">
    {{ csrf_field() }}
    <input type="text" name="text">
    <input type="submit" value="+">
</form>