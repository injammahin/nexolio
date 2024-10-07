@extends('master')


@include('frontend.partials.header')
@section('content')

@yield('page-content')
@endsection
@include('frontend.partials.header')

@push('styles')
@endpush

@push('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endpush
