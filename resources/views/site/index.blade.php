@extends('site.layouts.base')

@section('titulo', $titulo)

<!-- <h1>Conta.Me</h1>
<h4>Programa para monitoramente da sua saúde financeira de forma prática e rápida!</h4>

<a href="{{ route('site.bill.index') }}">Consulte suas contas aqui</a> -->

<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Conta.Me</h1>
  <p class="w3-xlarge">Programa para monitoramento da sua saúde financeira de forma prática e rápida!</p>
  <a href="{{ route('site.bill.index') }}"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Consulte suas contas aqui</button></a>
</header>