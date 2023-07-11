@extends('layouts.main-layout')

@section('pageName')
    Laravel Comics
@endsection

@section('content')
    <main>
        <div class="container">
            <h1>Hello from home!</h1>
            <a href="{{ route('about') }}">ABOUT</a>
        </div>
    </main>
@endsection
