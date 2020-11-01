@extends('templates/layout')

@section('heading')
    <span class="icon is-small" style="opacity: 0.2"><i class="fab fa-discourse"></i></span>
    {!! "&nbsp;" !!}
    404 page
@endsection

@section('content')
  <div class="notification">
      The page is not found.
  </div>
@endsection
