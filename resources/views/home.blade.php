@extends('layouts.app')

@section('styles')
    @include('layouts.components.stylevideo')
@endsection

@section('content')
    <p>Dashboard</p>
    <p>You are logged in!</p>

    {{-- <video-gue 
    raw-poster="http://content.bitsontherun.com/thumbs/3XnJSIm4-480.jpg"
    raw-source="{{ asset('video/testing2.mkv') }}"
    raw-lang="{{ asset('video/test.vtt') }}"
    ></video-gue> --}}
@endsection
