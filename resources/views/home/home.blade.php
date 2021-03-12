@php
  $pastaTipi = [];

  foreach ($pastaList as $pasta) {
    if (!in_array($pasta['tipo'], $pastaTipi)) {
      $pastaTipi[] = $pasta['tipo'];
    }
  };

  function getPlurale($parola){
    $plurale = substr($parola, 0, (strlen($parola) - 1));
    if ($plurale[strlen($plurale) - 1] === 'g') {
      $plurale .= 'he';
    } else {
      $plurale .= 'e';
    };
    return $plurale;
  };
@endphp

@extends('layout', ['pastaList' => $pastaList])
@section('main')
  <main class="home-content">
    <div class="container">
      @foreach ($pastaTipi as $tipo)
        <section class="home-content-products">
          @php
          $titolo = getPlurale($tipo);
          @endphp
          <h2>Le {{$titolo}}</h2>
          <ul class="home-content-products-list">
            @foreach ($pastaList as $id => $pasta)
              @if ($pasta['tipo'] === $tipo)
                <li>
                  <a href="products/{{$id + 1}}">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                  </a>
                </li>
              @endif
            @endforeach
          </ul>
        </section>
    @endforeach
  </main>
@endsection
