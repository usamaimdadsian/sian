<header class="page-cover">
    <div class="text-center">
        <a href="user-profile.html" class="user-avatar user-avatar-xl"><img src="{{asset($student->pic_address ?? $teacher->pic_address)}}"
                alt=""></a>
        <h2 class="h4 mt-2 mb-0"> {{$student->first_name ?? $teacher->first_name}} {{$student->last_name ?? $teacher->last_name}} </h2>
        <div class="my-1">
            <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i
                class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i
                class="far fa-star text-yellow"></i>
        </div>
        <p class="text-muted"> Project Manager @CreativeDivision </p>
        <p> Huge fan of HTML, CSS and Javascript. Web design and open source lover. </p>
    </div>
    <div class="cover-controls cover-controls-bottom">
        <a href="#" class="btn btn-light" data-toggle="modal" data-target="#followersModal">2,159 Followers</a> <a
            href="#" class="btn btn-light" data-toggle="modal" data-target="#followingModal">136 Following</a>
    </div>
</header>
<div class="modal fade" id="followersModal" tabindex="-1" role="dialog" aria-labelledby="followersModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 id="followersModalLabel" class="modal-title"> Followers </h6>
            </div>
            <div class="modal-body px-0">
                <div class="list-group list-group-flush list-group-divider">
                    <div class="list-group-item">
                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="{{asset($student->pic_address ?? $teacher->pic_address)}}"
                                    alt="Johnny Day"></a>
                        </div>
                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Johnny Day</a>
                            </h4>
                            <p class="list-group-item-text"> Computer Hardware Engineer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces3.jpg"
                                    alt="Sarah Bishop"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Sarah Bishop</a>
                            </h4>
                            <p class="list-group-item-text"> Designer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces5.jpg"
                                    alt="Craig Hansen"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Craig Hansen</a>
                            </h4>
                            <p class="list-group-item-text"> Software Developer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces9.jpg"
                                    alt="Jane Barnes"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Jane Barnes</a>
                            </h4>
                            <p class="list-group-item-text"> Social Worker </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces4.jpg"
                                    alt="Nicole Barnett"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Nicole Barnett</a>
                            </h4>
                            <p class="list-group-item-text"> Marketing Manager </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces6.jpg"
                                    alt="Michael Ward"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Michael Ward</a>
                            </h4>
                            <p class="list-group-item-text"> Lawyer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces8.jpg"
                                    alt="Juan Fuller"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Juan Fuller</a>
                            </h4>
                            <p class="list-group-item-text"> Budget analyst </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces7.jpg"
                                    alt="Julia Silva"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Julia Silva</a>
                            </h4>
                            <p class="list-group-item-text"> Photographer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces10.jpg"
                                    alt="Joe Hanson"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Joe Hanson</a>
                            </h4>
                            <p class="list-group-item-text"> Logistician </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces11.jpg"
                                    alt="Brenda Griffin"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Brenda Griffin</a>
                            </h4>
                            <p class="list-group-item-text"> Medical Assistant </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces12.jpg"
                                    alt="Ryan Jimenez"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Ryan Jimenez</a>
                            </h4>
                            <p class="list-group-item-text"> Photographer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces13.jpg"
                                    alt="Bryan Hayes"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Bryan Hayes</a>
                            </h4>
                            <p class="list-group-item-text"> Computer Systems Analyst </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces14.jpg"
                                    alt="Cynthia Clark"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Cynthia Clark</a>
                            </h4>
                            <p class="list-group-item-text"> Web Developer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces16.jpg"
                                    alt="Martha Myers"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Martha Myers</a>
                            </h4>
                            <p class="list-group-item-text"> Writer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces15.jpg"
                                    alt="Tammy Beck"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Tammy Beck</a>
                            </h4>
                            <p class="list-group-item-text"> Designer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces17.jpg"
                                    alt="Susan Kelley"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Susan Kelley</a>
                            </h4>
                            <p class="list-group-item-text"> Web Developer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces18.jpg"
                                    alt="Albert Newman"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Albert Newman</a>
                            </h4>
                            <p class="list-group-item-text"> Web Developer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces19.jpg"
                                    alt="Kyle Grant"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Kyle Grant</a>
                            </h4>
                            <p class="list-group-item-text"> Designer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                    </div>
                </div>

                <div class="text-center p-3">

                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="followingModal" tabindex="-1" role="dialog" aria-labelledby="followingModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <h6 id="followingModalLabel" class="modal-title"> Following </h6>
            </div>

            <div class="modal-body px-0">

                <div class="list-group list-group-flush list-group-divider">

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces2.jpg"
                                    alt="Johnny Day"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Johnny Day</a>
                            </h4>
                            <p class="list-group-item-text"> Computer Hardware Engineer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces3.jpg"
                                    alt="Sarah Bishop"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Sarah Bishop</a>
                            </h4>
                            <p class="list-group-item-text"> Designer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces5.jpg"
                                    alt="Craig Hansen"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Craig Hansen</a>
                            </h4>
                            <p class="list-group-item-text"> Software Developer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces9.jpg"
                                    alt="Jane Barnes"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Jane Barnes</a>
                            </h4>
                            <p class="list-group-item-text"> Social Worker </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces4.jpg"
                                    alt="Nicole Barnett"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Nicole Barnett</a>
                            </h4>
                            <p class="list-group-item-text"> Marketing Manager </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces6.jpg"
                                    alt="Michael Ward"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Michael Ward</a>
                            </h4>
                            <p class="list-group-item-text"> Lawyer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces8.jpg"
                                    alt="Juan Fuller"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Juan Fuller</a>
                            </h4>
                            <p class="list-group-item-text"> Budget analyst </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces7.jpg"
                                    alt="Julia Silva"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Julia Silva</a>
                            </h4>
                            <p class="list-group-item-text"> Photographer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces10.jpg"
                                    alt="Joe Hanson"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Joe Hanson</a>
                            </h4>
                            <p class="list-group-item-text"> Logistician </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces11.jpg"
                                    alt="Brenda Griffin"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Brenda Griffin</a>
                            </h4>
                            <p class="list-group-item-text"> Medical Assistant </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces12.jpg"
                                    alt="Ryan Jimenez"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Ryan Jimenez</a>
                            </h4>
                            <p class="list-group-item-text"> Photographer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces13.jpg"
                                    alt="Bryan Hayes"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Bryan Hayes</a>
                            </h4>
                            <p class="list-group-item-text"> Computer Systems Analyst </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces14.jpg"
                                    alt="Cynthia Clark"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Cynthia Clark</a>
                            </h4>
                            <p class="list-group-item-text"> Web Developer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces16.jpg"
                                    alt="Martha Myers"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Martha Myers</a>
                            </h4>
                            <p class="list-group-item-text"> Writer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces15.jpg"
                                    alt="Tammy Beck"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Tammy Beck</a>
                            </h4>
                            <p class="list-group-item-text"> Designer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces17.jpg"
                                    alt="Susan Kelley"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Susan Kelley</a>
                            </h4>
                            <p class="list-group-item-text"> Web Developer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces18.jpg"
                                    alt="Albert Newman"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Albert Newman</a>
                            </h4>
                            <p class="list-group-item-text"> Web Developer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>

                    <div class="list-group-item">

                        <div class="list-group-item-figure">
                            <a href="#" class="user-avatar"><img src="assets/images/avatars/uifaces19.jpg"
                                    alt="Kyle Grant"></a>
                        </div>

                        <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                                <a href="#">Kyle Grant</a>
                            </h4>
                            <p class="list-group-item-text"> Designer </p>
                        </div>

                        <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                    </div>
                </div>

                <div class="text-center p-3">

                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<nav class="page-navs">

    <div class="nav-scroller">

        <div class="nav nav-center nav-tabs">
            <a class="nav-link" href="user-profile.html">Overview</a> <a class="nav-link"
                href="user-activities.html">Activities <span class="badge">16</span></a> <a class="nav-link"
                href="user-teams.html">Teams</a> <a class="nav-link" href="user-projects.html">Projects</a> <a
                class="nav-link" href="user-tasks.html">Tasks</a> <a class="nav-link active"
                href="user-profile-settings.html">Settings</a>
        </div>
    </div>
</nav>