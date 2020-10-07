<section class="about_area section_gap">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-5">
                <div class="about_img">
                    <img class="" src="img/about-us.png" alt="">
                </div>
            </div>

            <div class="offset-lg-1 col-lg-5">
                <div class="main_title text-left">
                    <h2>let’s <br>
                        Introduce about <br>
                        myself</h2>
                    <p style="text-align: justify;">
                        I am Usama Imdad, but you can call me Sian.
                    </p>
                    <p style="text-align: justify;">
                        Computer Engineering graduate from COMSAT University Islamabad, Lahore
                        Campus. Skills include Networking, Web Development, Automation using PLC's, Computer Programming with multiple languages, Leadership
                        Qualities, Teamwork, and Creative Thinking.
                    </p>
                    <p style="text-align: justify;">
                        My skills include: Network Administration, PLC Programming, Laravel, PHP, HTML5, CSS3, JavaScript, JQuery.
                    </p>
                    <a class="primary_btn" data-toggle="modal" data-target="#cv-download" href="#"><span>Download CV</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade cv-pop" id="cv-download" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content cv-content">
        <div class="modal-header cv-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Download CV's</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body cv-body">
            <form id="download-cv-frm" action="{{route('main.cv.download')}}" method="post">
                @csrf
                <ul class="cv-items">
                    @foreach ($cvs as $cv)
                        <li class="cv-item"><span>{{$cv->title}}</span><div class="primary-radio"><input type="radio" class="cv-radio" id="cv-{{$cv->id}}" name="cv" value="{{$cv->id}}"><label for="cv-{{$cv->id}}"></label></div></li>
                    @endforeach
                </ul>
            </form>
        </div>
        <div class="modal-footer cv-footer">
            <a class="primary_btn tr-bg" data-dismiss="modal" href="#"><span>Close</span></a>
            <a class="primary_btn" data-dismiss="modal" onclick="document.getElementById('download-cv-frm').submit();" href="#"><span>Download</span></a>
        </div>
      </div>
    </div>
</div>