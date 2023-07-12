@extends('layouts.main-layout')

@section('pageName')
    Laravel Comics
@endsection

@section('content')
    <div class="row py-5">
        @foreach ($fumetti as $fumetto)
            <div class="col-2 my-3">
                <img src="{{ $fumetto['thumb'] }}" alt="">
                <a href="" class="title">{{ $fumetto['title'] }}</a>
            </div>
        @endforeach
    </div>

    <a href="{{ route('about') }}">ABOUT</a>
@endsection

<style>
    .title {
        font-weight: bold;
        color: white;
        text-decoration: none;
    }

    .title:hover {
        text-decoration: underline;
    }
</style>
