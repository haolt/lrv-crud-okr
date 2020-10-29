@extends('templates/layout')

@section('content')
    <form method="post" action="{{ route('okr.store') }}">
      <!-- @method('PATCH') -->
      @csrf
      <h3 class="title is-3">Create your own OKR</h3>
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
        Create
      </button>
    </form>
@endsection
