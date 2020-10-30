@extends('templates/layout')

@section('heading')
    <span class="icon is-small" style="opacity: 0.2"><i class="fas fa-home"></i></span>
    {!! "&nbsp;" !!}
    Home
@endsection

@section('content')
    <ul>
        <li>Route. Active link. Hỏi vụ href</li>
        <li>View. Blade template.</li>
        <li>Route</li>
        <li>Route</li>
        <li>Route</li>
    </ul>
@endsection
