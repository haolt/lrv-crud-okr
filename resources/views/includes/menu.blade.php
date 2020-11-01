<div class="tabs is-centered">
  <ul>
  <!-- class="is-active"  -->
    <li class="{{ Request::path() === '/' ? 'is-active' : '' }}">
      <a class="is-text" href="{{ route('home') }}">
        <span class="icon is-small"><i class="fas fa-home"></i></span>
        <span>Home</span>
      </a>
    </li>
    <li class="{{ Request::path() === 'okrs' ? 'is-active' : '' }}">
      <a class="is-text" href="{{ route('okrs') }}">
      <!-- || route('okr.edit') || route('okr.show')  -->
        <span class="icon is-small"><i class="fas fa-th-list"></i></span>
        <span>OKRs</span>
      </a>
    </li>
    <li class="{{ Request::path() === 'okr/create' ? 'is-active' : '' }}">
      <a class="is-text" href="{{ route('okr.create') }}">
        <span class="icon is-small"><i class="fas fa-folder-plus"></i></span>
        <span>Create my own OKR</span>
      </a>
    </li>
  </ul>
</div>
