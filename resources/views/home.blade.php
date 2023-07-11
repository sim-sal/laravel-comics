@extends('layouts.main-layout')

@section('pageName')
    Laravel Comics
@endsection

@section('content')
    <h1>Hello from home!</h1>
    <a href="{{ route('about') }}">ABOUT</a>
@endsection
