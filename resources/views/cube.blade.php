@extends('layout.baselayout')

@section('content')

  @for ($i=0; $i < 10; $i++)
    <div class="cube number">
      {{$i}}
    </div>
  @endfor


@endsection
