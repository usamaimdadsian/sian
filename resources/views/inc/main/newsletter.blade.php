<section class="newsletter_area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12">
                <div class="subscription_box text-center">
                    <h2 class="text-uppercase text-white">get update from anywhere</h2>
                    <p class="text-white">
                        Stay updated to new blogs and projects, enter the email to subscribe.
                    </p>
                    <div class="subcribe-form" id="mc_embed_signup">
                        <form action="{{route('main.newsletter.subscribe')}}" method="post" class="subscription relative">
                            @csrf
                            <input name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
                            <button class="primary-btn submit-form hover d-inline" type="button">Subscribe</button>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>