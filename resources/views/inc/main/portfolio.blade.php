<section class="portfolio_area" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title text-left">
                    <h2>quality work <br>
                        Recently done project </h2>
                </div>
            </div>
        </div>
        <div class="filters portfolio-filter">
            <ul>
                <li class="active" data-filter="*">all</li>
                <li data-filter=".popular">popular</li>
                <li data-filter=".latest"> latest</li>
                <li data-filter=".upcoming">upcoming</li>
            </ul>
        </div>

        <div class="filters-content">
            <div class="row portfolio-grid justify-content-center">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 all {{$project->status}}">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{asset($project->pic_addr)}}" alt="{{$project->title}}">
                                <div class="overlay"></div>
                                <a href="{{asset($project->pic_addr)}}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="{{route('main.portfolio.show',['project' => $project->id])}}">{{$project->title}}</a></h4>
                                <p>{{$project->client}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>