@extends('templates/layout')

@section('heading')
    <span class="icon is-small" style="opacity: 0.2"><i class="fas fa-th-list"></i></span>
    {!! "&nbsp;" !!}
    OKR detail
@endsection

@section('content')
    <div class="card detail-card">
      <header class="card-header">
        <p class="card-header-title">
          <!-- <i class="fas fa-calendar-week"></i> -->
          <!-- <i class="far fa-bookmark"></i> -->
          <span><i class="fas fa-bookmark"></i></span>
          {!! "&nbsp;" !!}
          <span>{{ $okr->title }}</span>
        </p>
      </header>
      <div class="card-content">
        <div class="content">
          {{ $okr->title }}
          <span class="tag is-light">{{ $okr->unit }}</span>
        </div>
      </div>
      <footer class="card-footer card-footer-detail">
        <a class="card-footer-item" href="{{ route('okrs') }}"><i class="fas fa-arrow-left"></i></a>
        <a class="card-footer-item" href="../okr/edit/{{$okr->id}}"><i class="fas fa-pencil-alt"></i></a>
          {!! "&nbsp;" !!}
        <a class="card-footer-item">
          <form method="POST" class="table__delete-btn" action="{{ route('okr.delete', [ 'id'=> $okr->id ]) }}" onsubmit="return ConfirmDelete( this )">
              @method('DELETE')
              @csrf
              <button type="submit"><i class="fas fa-trash-alt"></i></button>
          </form>
        </a>
      </footer>
    </div>
@endsection
