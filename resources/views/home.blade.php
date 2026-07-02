@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex flex-1 min-w-0 flex-col w-full h-full">
        @include('pages.categories')
        @include('pages.videos')
    </div>

@endsection
