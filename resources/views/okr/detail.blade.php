@extends('templates/layout')

@section('heading')
    <span class="icon is-small" style="opacity: 0.2"><i class="fas fa-th-list"></i></span>
    {!! "&nbsp;" !!}
    OKR detail
@endsection

@section('content')
    <div class="card">
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
          <br>
          <span>{{ $okr->unit }}</span>
        </div>
      </div>
      <footer class="card-footer">
        <a href="#" class="card-footer-item">Edit</a>
        <a href="#" class="card-footer-item">Delete</a>
      </footer>
    </div>
@endsection
