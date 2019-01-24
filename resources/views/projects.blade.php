@extends('app')

@section('title') Cool Javascript projects - Projects @endsection

@section('content')

    <div class="row">
        <div id="projects-page" class="col-md-12">
            <h1>Projects</h1>
            <div class="row">
                <div class="col-md-6">
                    <p><a href="http://139.59.128.155/track/FpTyHQcau"><img style="width:100%;margin-top:15px" src="/images/projects/fluentsynth.png"/></a></p>
                </div>
                <div class="col-md-6">
                    <h2><a href="http://139.59.128.155/track/FpTyHQcau">Fluent Synth</a></h2>
                    <p>This is a Digital Audio Workstation (DAW) in the web browser created using Javascript.</p>
                    <p>It includes a 2 oscillator synthesizor and drum machine that only uses sounds created from Oscillators (no samples here). There is also a recreation of the old school acid house favourite TB-303 baseline synthesisor.</p>
                    <p>Web DAW also allows for live collaboration between 2 or more people with live updates to the tracks made using web sockets</p>
                    <p>Technologies include webpack, React, Redux, Web Components (Poymer), NodeJs, and websockets.io</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p><a href="http://djembefola.com/"><img style="width:100%;margin-top:15px" src="/images/projects/djembefolaSS.png"/></a></p>
                </div>
                <div class="col-md-6">
                    <h2><a href="http://djembefola.com/">Djembefola</a></h2>
                    <p>Djembefola.com is a non-profit website which educates and facilitates learning between people who are passionate and interested in Traditional West African drumming, dancing and culture.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p><a href="http://djembefola.com/drum-notation/player"><img style="width:100%;margin-top:15px" src="/images/projects/df-909.png"/></a></p>
                </div>
                <div class="col-md-6">
                    <h2><a href="http://djembefola.com/drum-notation/player">DF-808</a></h2>
                    <p>My first attempt at a Javascript drum machine that would run in the browser. The DF-808 was inspired by the Man in Blue's JS-808, which was the starting point for this experiment before we had an Audio API in the browser. His version required a quicktime plugin to play the music, and my version in 2011 replaced the quicktime requirement with a html Audio node. This is before we had the Audio API for audio buffers and Javascript workers for more solid time keeping.</p>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="page-container-background" style="background: rgba(0, 0, 0, 0.4);">
        <h1 style="background: rgba(0, 0, 0, 1);">About James Farrell</h1>
    </div>--}}
@endsection
