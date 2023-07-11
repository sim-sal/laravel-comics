@extends('layouts.main-layout')

@section('pageName')
    Section Comics
@endsection

@section('content')
    <h1>Hello from about!</h1>
    <a href="{{ route('home') }}">HOME</a>
@endsection
