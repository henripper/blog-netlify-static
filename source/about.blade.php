@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>
    <p>This is a work in progress blog, I'm building it up 'stone' by 'stone' from scratch using Netlify and Jigsaw blog template. As such, it's going to be very bare bones in the beginning but as time goes on I will be adding more quality of life improvements. </p>
    <p>My hosting is done by <a href="https://netlify.com">Netlify</a> </p>
    <p>The template I use is: <a href="https://templates.netlify.com/template/artisan-static/">Artisan Static </a> (PHP - so thats new) </p>
    <p>Comments are handled by (rather ugly)<a href="https://disqus.com/"> Disqus </a> I'm looking into replacing that</p>
    <p>Contact form was suppose to be handled by Jumprock but their service seems to be down</p>

    {{-- <p>Hi my name is {{ $page->owner->name }}</p> --}}

    <h2>Links:</h2>

    <ul>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>
@endsection
