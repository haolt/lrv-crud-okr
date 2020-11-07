@extends('templates/layout')

@section('heading')
    <span class="icon is-small" style="opacity: 0.2"><i class="fas fa-folder-plus"></i></span>
    {!! "&nbsp;" !!}
    OKRs
@endsection

@section('content')

@if(!$okrs->isEmpty())
    <table class="table">
        <thead>
            <tr>
                <th><i class="fas fa-braille"></i>{!! "&nbsp;" !!}No.</th>
                <th>Title</th>
                <th>Unit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            @foreach($okrs as $okr)
                    <tr>
                        <td><i class="fas fa-braille"></i>{!! "&nbsp;" !!}{{ $loop->index + 1 }}</td>
                        <td>{{$okr->title}}</td>
                        <td>{{$okr->unit}}</td>
                        <td>
                            <a href="{{ route('okr.show', [ 'id'=> $okr->id ]) }}"><i class="fas fa-eye"></i></a>
                            {!! "&nbsp;" !!}
                            <a href="{{ route('okr.edit', [ 'id'=> $okr->id ]) }}"><i class="fas fa-pencil-alt"></i></a>
                            {!! "&nbsp;" !!}

                            <form method="POST" class="table__delete-btn" action="{{ route('okr.delete', [ 'id'=> $okr->id ]) }}" onsubmit="return ConfirmDelete( this )">
                                @method('DELETE')
                                @csrf
                                <button type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                </a></tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="notification">
        Oop ! There's no OKRs. <br/> <a href="{{ route('okr.create') }}">Create an OKR right now</a> {!! "&nbsp;" !!}<i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
    </div>
@endif

    
@endsection
