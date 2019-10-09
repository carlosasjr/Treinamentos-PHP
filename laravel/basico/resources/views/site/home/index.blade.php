@push('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endpush

@extends('templates.template1')
@section('content')
    <h1>Home Page do Site</h1>
    {{ $teste1 or 'Não existe' }}

    {{--  {{ $xss }} --}}

    @if ($var1 == '1234')
        <p>É igual</p>

    @else
        <p>É Diferente</p>
    @endif

    @unless($var1 == '1234') <!-- testa se é false  -->
    <p>Não é igual </p>
    @endunless

    @for($i = 1; $i < 10; $i++)
        <p>For: {{ $i }}</p>
    @endfor

    @if (count($dados) > 0)
        @foreach($dados as $item)
            <p>Foreach: {{ $item }}</p>
        @endforeach
    @else
        <h1>Não existem item no foreach</h1>
    @endif

    @forelse($dados as $item)
        <p>Forelse: {{ $item }}</p>
    @empty
        <p>Não existem item no forelse</p>
    @endforelse

    {{-- Comentários --}}

    @php

            @endphp


    {{-- Usando includes --}}
    @include('includes.sidebar')

    {{-- Usando includes passando variaveis --}}
    @include('includes.sidebar', compact('var1'))
@endsection

@push('scripts')
 <script>alert('coloque aqui um arquivo javascript')</script>
@endpush





