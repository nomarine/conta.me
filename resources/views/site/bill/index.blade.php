@extends('site.layouts.base')

<div class="records">
@foreach($records as $bill => $info)
        <h2>Registro #{{$info->registration_number}}</h2>
    <p>
        Descrição: {{$info->description}}<br>
        Custo: R$ {{number_format($info->value, 2, ',', '.') }}<br>
        Categoria: {{$info->title}}<br>
    </p>
@endforeach
</div>

<a href="{{ route('site.bill.registration') }}">
    <button class="button-center">Incluir conta</button>
</a>

<div class='total'>
    <p>Total de registros: {{ $total }}</p>
</div>

