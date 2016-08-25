@extends('app')

@section('title') About James Farrell @endsection

@section('content')

    <div class="row{{-- page-container-content--}}">
        <div class="col-md-12">
            <h1>Consulting</h1>
            <p>I provide consulting services to companies of all sizes.</p>
            <p>I specialise complex Javascript, PHP and .net architecture and development </p>
            <p>and online marketing strategy</p>

            <h3>Check out these case studies to see how I have helped other companies</h3>
            <a href="/consulting/case-studies">Case Studies</a>

        </div>
    </div>

    {{--<div class="page-container-background" style="background: rgba(0, 0, 0, 0.4);">
        <h1 style="background: rgba(0, 0, 0, 1);">About James Farrell</h1>
    </div>--}}
@endsection
