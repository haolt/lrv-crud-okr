@extends('templates/layout')

@section('heading')
    <span class="icon is-small" style="opacity: 0.2"><i class="fas fa-folder-plus"></i></span>
    {!! "&nbsp;" !!}
    OKRs
@endsection

@section('content')
    <table class="table">
    <thead>
        <tr>
            <th><i class="fas fa-braille"></i>{!! "&nbsp;" !!}ID</th>
            <th>Title</th>
            <th>Unit</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tfoot>
        @foreach($okrs as $okr)
                <tr>
                    <td><i class="fas fa-braille"></i>{!! "&nbsp;" !!}{{$okr->id}}</td>
                    <td>{{$okr->title}}</td>
                    <td>{{$okr->unit}}</td>
                    <td><a href="./okr/{{$okr->id}}"><i class="fas fa-eye"></i></a> | Edit | Delete</td>
            </a></tr>
        @endforeach
    </tbody>
    </table>
@endsection
