@extends('layouts.base')

@push('head.scripts')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
@endpush

@section('body')
<div id="marketing" class="min-h-screen bg-gray-100">
  @yield('content')
</div>
@endsection