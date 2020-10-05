@extends('layouts.main')
@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Services</h2>
                    <div class="page_link">
                        <a href="{{route('main.landing')}}">Home</a>
                        <a href="{{route('main.services')}}">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    @include('inc.main.features')
@endsection