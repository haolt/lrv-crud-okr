@extends('templates/layout')

@section('heading')
    <span class="icon is-small" style="opacity: 0.2"><i class="fas fa-folder-plus"></i></span>
    {!! "&nbsp;" !!}
    Edit the OKR
@endsection

@section('content')
    <form method="post" action="{{ route('okr.update', ['id'=> $okr->id]) }}">
      @csrf
      <div class="field">
        <div class="control">
          <input value="{{ $okr->title }}" name="title" class="input is-medium is-rounded" type="text" placeholder="Title" autocomplete="title" required />
        </div>
      </div>
      <div class="field">
        <div class="control">
          <input value="{{ $okr->unit }}" name="unit" class="input is-medium is-rounded" type="number" placeholder="Unit" autocomplete="unit" required />
        </div>
      </div>
      <br />
      <button class="button is-block is-fullwidth is-primary is-medium is-rounded" type="submit">
        <i class="fas fa-save"></i>Update
      </button>
    </form>
@endsection
