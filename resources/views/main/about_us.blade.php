@extends('layouts.main')
@section('styles')
    @include('main.styles.cvdownload_popup')
@endsection
@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>About Us</h2>
                    <div class="page_link">
                        <a href="{{route('main.landing')}}">Home</a>
                        <a href="{{route('main.about')}}">About</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('inc.main.about_us')
@endsection
@section('js')
    @include('main.js.cvpop')
@endsection