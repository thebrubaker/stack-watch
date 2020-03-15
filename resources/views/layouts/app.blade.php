@extends('layouts.base')

@push('head.scripts')
<script src="{{ asset('js/app.js') }}" defer></script>
@endpush

@section('body')
<div id="app" class="min-h-screen bg-gray-100">
  @yield('content')
</div>
@endsection