@extends('layout')
@section('main')
  <main class="product-content">
    <div class="container">
      <div class="product-content-top">
        <div>
          <img src="{{$pastaList[$idProduct]['src-h']}}" alt="{{$pastaList[$idProduct]['titolo']}}">
        </div>
        <div>
          <img src="{{$pastaList[$idProduct]['src-p']}}" alt="{{$pastaList[$idProduct]['titolo']}}">
        </div>
        <div class="title">
          @if ($idProduct > 0)
            <a href="{{$idProduct}}" class="fa fa-caret-left" aria-hidden="true"></a>
          @endif

          <span>{{$pastaList[$idProduct]['titolo']}}</span>

          @if ($idProduct < count($pastaList) - 1)
            <a href="{{$idProduct + 2}}" class="fa fa-caret-right" aria-hidden="true"></a>
          @endif
        </div>
      </div>
      <div class="product-content-bottom">{!!$pastaList[$idProduct]['descrizione']!!}</div>
      </div>
  </main>
@endsection
