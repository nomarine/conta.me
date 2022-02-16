@extends('site.layouts.base')

<div class="records">
@foreach($records as $bill => $info)
        <h2>Record #{{$info->registration_number}}</h2>
    <p>
        Description: {{$info->description}}<br>
        Cost: {{$info->total_value}}<br>
        Category: {{$info->title}}<br>
    </p>
@endforeach
</div>

<button><a href="{{ route('site.bill.registration') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Incluir conta</a></button>

<div class='total'>
    <p>Total de registros: {{ $total }}</p>
</div>

