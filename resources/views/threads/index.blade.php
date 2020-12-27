@extends('layouts.base')
@section('content')
    <div id="app">
        <example-component>
            Loading
        </example-component>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/threads.js') }}"></script>
@endsection