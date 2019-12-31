@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>
    <p>This is a work in progress blog, I'm building it up 'stone' by 'stone' from scratch using Netlify and Jigsaw blog template. As such, it's going to be very bare bones in the beginning but as time goes on I'wll be adding more quality of life improvements. </p>
    {{-- <p>Hi my name is {{ $page->owner->name }}</p> --}}

    <h2>Links:</h2>

    <ul>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>
@endsection
