@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- categories --}}
    @include('pages.categories')

    {{-- videos --}}
    @include('pages.videos')
@endsection
