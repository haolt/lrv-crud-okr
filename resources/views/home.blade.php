@extends('templates/layout')

@section('heading')
    <span class="icon is-small" style="opacity: 0.2"><i class="fas fa-home"></i></span>
    {!! "&nbsp;" !!}
    Intro.
@endsection

@section('content')
    <ul class="content">
        <li>
            <i class="fas fa-caret-right"></i>{!! "&nbsp;" !!}
            <u>Project name</u>: <b>LrvCrudOkr</b>.
        </li>
        <li>
            <i class="fas fa-caret-right"></i>{!! "&nbsp;" !!}
            <u>Features</u>: for CRUD the OKRs.
        </li>
        <li>
            <i class="fas fa-caret-right"></i>{!! "&nbsp;" !!}
            <u>Context</u>: Demo 1st for newbie.
        </li>
        <li class="h-tags">
            <i class="fas fa-caret-right"></i>{!! "&nbsp;" !!}
            <u>Description</u>: Laravel keywords are applied via demo:
                <br/>
                {!! "&nbsp;" !!}
                {!! "&nbsp;" !!}
                <span class="tag is-light">View</span>
                <span class="tag is-light">Route</span>
                <span class="tag is-light">Database access</span>
                <span class="tag is-light">Controller</span>
                <span class="tag is-light">Model</span>
                <span class="tag is-light">Form</span>
                <span class="tag is-light">Migration</span>
        </li>
        <li>
            <i class="fas fa-caret-right"></i>{!! "&nbsp;" !!}
            <u>Stacks</u>: <a href="https://laravel.com/docs/8.x/">Laravel {{ App::VERSION() }}</a>, <a href="https://www.mysql.com/">MySQL</a>, <a href="https://bulma.io/">Bulma CSS</a>.
        </li>
        <li>
            <i class="fas fa-caret-right"></i>{!! "&nbsp;" !!}
            <u>Source code</u>: <a href="https://github.com/haolt/lrv-crud-okr" target="_blank">Github</a>.
        </li>
    </ul>
@endsection
