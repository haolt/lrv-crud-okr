@extends('templates/layout')

@section('heading')
    <span class="icon is-small" style="opacity: 0.2"><i class="fas fa-folder-plus"></i></span>
    {!! "&nbsp;" !!}
    Create OKR
@endsection

@section('content')
    <form method="post" action="{{ route('okr.store') }}">
      <!-- @method('PATCH') -->
      @csrf
      <div class="field">
        <div class="control">
          <input name="title" class="input is-medium is-rounded" type="text" placeholder="Title" autocomplete="title" required />
        </div>
      </div>
      <div class="field">
        <div class="control">
          <input name="unit" class="input is-medium is-rounded" type="number" placeholder="Unit" autocomplete="unit" required />
        </div>
      </div>
      <br />
      <button class="button is-block is-fullwidth is-primary is-medium is-rounded" type="submit">
        <i class="fas fa-save"></i>Create
      </button>
    </form>
@endsection
