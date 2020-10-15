@extends('layouts.main')
@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Portfolio Details</h2>
                    <div class="page_link">
                        <a href="{{route('main.landing')}}">Home</a>
                        <a href="{{route('main.portfolio')}}">Portfolio</a>
                        <a href="{{route('main.portfolio.show',['project' => $project->id])}}">Portfolio Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left_img">
                            <img class="img-fluid" src="{{asset($project->pic_addr)}}" alt="">
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-5">
                        <div class="portfolio_right_text mt-30">
                            <h4 class="text-uppercase">{{$project->title}}</h4>
                            <p>
                                {{$project->description}}
                            </p>
                            <ul class="list">
                                <li>
                                    <span>Rating</span>: 
                                    {!! Supporter::getRating($project->rating) !!}
                                </li>
                                <li><span>Client</span>: {{$project->client}}</li>
                                <li><span>Completed</span>: {{date("F jS, Y",strtotime($project->completed))}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p>
                    {{$project->explain}}
                </p>
            </div>
        </div>
    </section>
@endsection