@extends('layouts.main')
@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contact Us</h2>
                    <div class="page_link">
                        <a href="{{route('main.landing')}}">Home</a>
                        <a href="{{route('main.contact')}}">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Punjab, Pakistan</h6>
                            <p>Hafizabad</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">+923460576456</a></h6>
                            <p>Mon to Fri 9 AM to 6 PM</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">usamaimdadsian@gmail.com</a></h6>
                            <p>Send me your query anytime!</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-camera-video"></i>
                            <h6><a href="https://join.skype.com/invite/QdImYWlVMAUy">usamaimdadsian</a></h6>
                            <p>Connect with me on Skype!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="{{route('main.contact.mail')}}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control {{FrmErrHelp::hasError($errors, 'name')}}" id="name" name="name" placeholder="Enter your name">
                                {!! FrmErrHelp::showErrors($errors, 'name') !!} 
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control  {{FrmErrHelp::hasError($errors, 'email')}}" id="email" name="email" placeholder="Enter email address">
                                {!! FrmErrHelp::showErrors($errors, 'email') !!} 
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control  {{FrmErrHelp::hasError($errors, 'subject')}}" id="subject" name="subject" placeholder="Enter Subject">
                                {!! FrmErrHelp::showErrors($errors, 'subject') !!} 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control  {{FrmErrHelp::hasError($errors, 'message')}}" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                {!! FrmErrHelp::showErrors($errors, 'message') !!} 
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary_btn">
                                <span>Send Message</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection