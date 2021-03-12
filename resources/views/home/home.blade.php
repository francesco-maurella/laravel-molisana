@php

  $pastaTipi = [];

  foreach ($pastaList as $pasta) {
    if (!in_array($pasta['tipo'], $pastaTipi)) {
      $pastaTipi[] = $pasta['tipo'];
    }
  };

@endphp

@extends('layout', ['pastaList' => $pastaList])
@section('content')
  <div class="main-products-list">
    @foreach ($pastaTipi as $tipo)
      <div>
        @php
          $titolo = 'Le ' . substr($tipo, 0, strlen($tipo,) - 1) . "e";
        @endphp
        <h2>{{$titolo}}</h2>
        <ul>
          @foreach ($pastaList as $id => $pasta)
            @if ($pasta['tipo'] === $tipo)
              <li>
                <a href="products/{{$id}}">
                  <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </a>
              </li>
            @endif
          @endforeach
        </ul>
      </div>
    @endforeach
  </div>
@endsection
