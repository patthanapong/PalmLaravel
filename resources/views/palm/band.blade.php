@extends('layouts/main')

@section('title','Band New Song')

@section('content')
    @if ($Band == 'AC DC')
      <h2>Band ::   {{ $Band }}</h2>
      <h3>Song ::   {!! $Song !!}</h3>
    @else
      No Band And Song
    @endif
@endsection
