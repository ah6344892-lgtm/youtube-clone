@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex flex-1 min-w-0 flex-col w-full h-full">
        {{-- @if (request()->routeIs('home')) --}}
        @include('pages.categories')
        {{-- @endif --}}
        {{-- videos --}}
        @include('pages.videos')
    </div>

@endsection
