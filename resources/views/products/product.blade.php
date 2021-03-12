@extends('layout')
@section('main')
  <main>
    <ul>
      <li>
        <img src="{{$pastaList[$idProduct]['src']}}" alt="{{$pastaList[$idProduct]['titolo']}}">
        <div>{{$pastaList[$idProduct]['titolo']}}</div>
      </li>
    </ul>
  </main>
@endsection
