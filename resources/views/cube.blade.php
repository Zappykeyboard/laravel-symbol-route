@extends('layout.baselayout')

@section('content')

  @foreach ($arr as $elem)
    <div class="cube {{$color}}">
      {{$elem}}
    </div>
  @endforeach


@endsection
