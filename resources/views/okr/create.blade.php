@extends('templates/layout')

@section('heading')
    <span class="icon is-small" style="opacity: 0.2"><i class="fas fa-folder-plus"></i></span>
    {!! "&nbsp;" !!}
    Create an OKR
@endsection

@section('content')

  <!-- @if (count($errors) > 0)
    <div class="error-message">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif -->

  <form method="post" action="{{ route('okr.store') }}">
    <!-- @method('PATCH') -->
    @csrf
    <div class="field">
      <div class="control">
        <input name="title" class="input is-medium is-rounded @error('title') is-danger @enderror" type="text" placeholder="Title" autocomplete="title" required />
      </div>
    </div>
    @error('title')
      <small class="help is-danger">{{ $errors->first('title') }}</small>
    @enderror
    <div class="field">
      <div class="control">
        <input name="unit" class="input is-medium is-rounded @error('unit') is-danger @enderror" type="number" placeholder="Unit" autocomplete="unit" required />
      </div>
    </div>
    @error('unit')
      <small class="help is-danger">{{ $errors->first('unit') }}</small>
    @enderror
    <br />
    <button class="button is-block is-fullwidth is-primary is-medium is-rounded" type="submit">
      <i class="fas fa-save"></i>{!! "&nbsp;" !!}Create
    </button>
  </form>
@endsection
