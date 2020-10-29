@extends('templates/layout')

@section('content')
    <h3 class="title is-3">{{ $pageTitle }}</h3>
    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Unit</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tfoot>
        @foreach($okrs as $okr)
            <tr>
                <td>{{$okr->id}}</td>
                <td>{{$okr->title}}</td>
                <td>{{$okr->unit}}</td>
                <td>Edit | Delete</td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection
