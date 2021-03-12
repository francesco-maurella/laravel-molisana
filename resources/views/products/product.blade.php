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
        <div class="title">{{$pastaList[$idProduct]['titolo']}}</div>
      </div>
      <div class="product-content-bottom">{!!$pastaList[$idProduct]['descrizione']!!}</div>
      </div>
  </main>
@endsection
