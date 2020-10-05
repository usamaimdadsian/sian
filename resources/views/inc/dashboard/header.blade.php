<header class="app-header app-header-dark">
    <div class="top-bar">
        <div class="top-bar-brand">
            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu"
                aria-label="toggle aside menu"><span class="hamburger-box"><span
                        class="hamburger-inner"></span></span></button>
            <a href="{{route('main.landing')}}"><img style="width: 50px;" src="{{asset('img/logo.png')}}"></a>
        </div>

        <div class="top-bar-list">

            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">

                <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside"
                    aria-label="toggle menu"><span class="hamburger-box"><span
                            class="hamburger-inner"></span></span></button>
            </div>

            <div class="top-bar-item top-bar-item-full">

                <form class="top-bar-search">

                    <div class="input-group input-group-search dropdown">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                        </div><input type="text" class="form-control" data-toggle="dropdown" aria-label="Search"
                            placeholder="Search">
                        <div class="dropdown-menu dropdown-menu-rich dropdown-menu-xl ml-n4 mw-100">
                            <div class="dropdown-arrow ml-3"></div>
                            <div class="dropdown-scroll perfect-scrollbar h-auto" style="max-height: 360px">

                                <div class="list-group list-group-flush list-group-reflow mb-2">
                                    <h6 class="list-group-header d-flex justify-content-between">
                                        <span>Shortcut</span>
                                    </h6>
                                    <div class="list-group-item py-2">
                                        <a href="#" class="stretched-link"></a>
                                        <div class="tile tile-sm bg-muted">
                                            <i class="fas fa-user-plus"></i>
                                        </div>
                                        <div class="ml-2"> Create user </div>
                                    </div>

                                    <div class="list-group-item py-2">
                                        <a href="#" class="stretched-link"></a>
                                        <div class="tile tile-sm bg-muted">
                                            <i class="fas fa-dollar-sign"></i>
                                        </div>
                                        <div class="ml-2"> Create invoice </div>
                                    </div>
                                    <h6 class="list-group-header d-flex justify-content-between mt-2">
                                        <span>In projects</span> <a href="#" class="font-weight-normal">Show more</a>
                                    </h6>
                                    <div class="list-group-item py-2">
                                        <a href="#" class="stretched-link"><span class="sr-only">Go to search
                                                result</span></a>
                                        <div class="user-avatar user-avatar-sm bg-muted">
                                            <img src="{{asset('assets/images/avatars/bootstrap.svg')}}" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <div class="mb-n1"> Bootstrap </div><small class="text-muted">Just
                                                now</small>
                                        </div>
                                    </div>

                                    <div class="list-group-item py-2">
                                        <a href="#" class="stretched-link"><span class="sr-only">Go to search
                                                result</span></a>
                                        <div class="user-avatar user-avatar-sm bg-muted">
                                            <img src="{{asset('assets/images/avatars/slack.svg')}}" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <div class="mb-n1"> Slack </div><small class="text-muted">Updated 25 minutes
                                                ago</small>
                                        </div>
                                    </div>

                                    <h6 class="list-group-header d-flex justify-content-between mt-2">
                                        <span>Another section</span> <a href="#" class="font-weight-normal">Show
                                            more</a>
                                    </h6>
                                    <div class="list-group-item py-2">
                                        <a href="#" class="stretched-link"><span class="sr-only">Go to search
                                                result</span></a>
                                        <div class="tile tile-sm bg-muted"> P </div>
                                        <div class="ml-2">
                                            <div class="mb-n1"> Product name </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="dropdown-footer">Show all results</a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">

                <ul class="header-nav nav">

                    <li class="nav-item dropdown header-nav-dropdown has-notified">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><span class="oi oi-pulse"></span></a>
                        <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                            <div class="dropdown-arrow"></div>
                            <h6 class="dropdown-header stop-propagation">
                                <span>Activities <span class="badge">(2)</span></span>
                            </h6>
                            <div class="dropdown-scroll perfect-scrollbar">

                                <a href="#" class="dropdown-item unread">
                                    <div class="user-avatar">
                                        <img src="{{asset('assets/images/avatars/uifaces15.jpg')}}" alt="">
                                    </div>
                                    <div class="dropdown-item-body">
                                        <p class="text"> Jeffrey Wells created a schedule </p><span class="date">Just
                                            now</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item unread">
                                    <div class="user-avatar">
                                        <img src="{{asset('assets/images/avatars/uifaces16.jpg')}}" alt="">
                                    </div>
                                    <div class="dropdown-item-body">
                                        <p class="text"> Anna Vargas logged a chat </p><span class="date">3 hours
                                            ago</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="user-avatar">
                                        <img src="{{asset('assets/images/avatars/uifaces17.jpg')}}" alt="">
                                    </div>
                                    <div class="dropdown-item-body">
                                        <p class="text"> Sara Carr invited to Stilearn Admin </p><span class="date">5
                                            hours ago</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="user-avatar">
                                        <img src="{{asset('assets/images/avatars/uifaces18.jpg')}}" alt="">
                                    </div>
                                    <div class="dropdown-item-body">
                                        <p class="text"> Arthur Carroll updated a project </p><span class="date">1 day
                                            ago</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="user-avatar">
                                        <img src="{{asset('assets/images/avatars/uifaces19.jpg')}}" alt="">
                                    </div>
                                    <div class="dropdown-item-body">
                                        <p class="text"> Hannah Romero created a task </p><span class="date">1 day
                                            ago</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="user-avatar">
                                        <img src="{{asset('assets/images/avatars/uifaces20.jpg')}}" alt="">
                                    </div>
                                    <div class="dropdown-item-body">
                                        <p class="text"> Angela Peterson assign a task to you </p><span class="date">2
                                            days ago</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="user-avatar">
                                        <img src="{{asset('assets/images/avatars/uifaces21.jpg')}}" alt="">
                                    </div>
                                    <div class="dropdown-item-body">
                                        <p class="text"> Shirley Mason and 3 others followed you </p><span
                                            class="date">2 days ago</span>
                                    </div>
                                </a>
                            </div>
                            <a href="user-activities.html" class="dropdown-footer">All activities <i
                                    class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                        </div>
                    </li>

                    <li class="nav-item dropdown header-nav-dropdown has-notified">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><span class="oi oi-envelope-open"></span></a>
                        <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                            <div class="dropdown-arrow"></div>
                            <h6 class="dropdown-header stop-propagation">
                                <span>Messages</span> <a href="#">Mark all as read</a>
                            </h6>
                            <div class="dropdown-scroll perfect-scrollbar">

                                <a href="#" class="dropdown-item unread">
                                    <div class="user-avatar">
                                        <img src="{{asset('assets/images/avatars/team1.jpg')}}" alt="">
                                    </div>
                                    <div class="dropdown-item-body">
                                        <p class="subject"> Stilearning </p>
                                        <p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22 </p><span
                                            class="date">2 hours ago</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="user-avatar">
                                        <img src="{{asset('img/logo.png')}}" alt="">
                                    </div>
                                    <div class="dropdown-item-body">
                                        <p class="subject"> Openlane </p>
                                        <p class="text text-truncate"> Final reminder: Upgrade to Pro </p><span
                                            class="date">23 hours ago</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="tile tile-circle bg-green"> GZ </div>
                                    <div class="dropdown-item-body">
                                        <p class="subject"> Gogo Zoom </p>
                                        <p class="text text-truncate"> Live healthy with this wireless sensor. </p><span
                                            class="date">1 day ago</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="tile tile-circle bg-teal"> GD </div>
                                    <div class="dropdown-item-body">
                                        <p class="subject"> Gold Dex </p>
                                        <p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7 </p><span
                                            class="date">1 day ago</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="user-avatar">
                                        <img src="{{asset('assets/images/avatars/team2.png')}}" alt="">
                                    </div>
                                    <div class="dropdown-item-body">
                                        <p class="subject"> Creative Division </p>
                                        <p class="text text-truncate"> Need some feedback on this please </p><span
                                            class="date">2 days ago</span>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="tile tile-circle bg-pink"> LD </div>
                                    <div class="dropdown-item-body">
                                        <p class="subject"> Lab Drill </p>
                                        <p class="text text-truncate"> Our UX exercise is ready </p><span class="date">6
                                            days ago</span>
                                    </div>
                                </a>
                            </div>
                            <a href="page-messages.html" class="dropdown-footer">All messages <i
                                    class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                        </div>
                    </li>

                    <li class="nav-item dropdown header-nav-dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><span class="oi oi-grid-three-up"></span></a>
                        <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-sheets">

                                <div class="dropdown-sheet-item">
                                    <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i
                                                class="oi oi-people"></i></span> <span
                                            class="tile-peek">Teams</span></a>
                                </div>

                                <div class="dropdown-sheet-item">
                                    <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i
                                                class="oi oi-fork"></i></span> <span
                                            class="tile-peek">Projects</span></a>
                                </div>

                                <div class="dropdown-sheet-item">
                                    <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i
                                                class="fa fa-tasks"></i></span> <span class="tile-peek">Tasks</span></a>
                                </div>

                                <div class="dropdown-sheet-item">
                                    <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i
                                                class="oi oi-fire"></i></span> <span class="tile-peek">Feeds</span></a>
                                </div>

                                <div class="dropdown-sheet-item">
                                    <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i
                                                class="oi oi-document"></i></span> <span
                                            class="tile-peek">Files</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <?php
                    $user = auth()->user();
                ?>

                <div class="dropdown d-none d-md-flex">
                    <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                            <span class="user-avatar user-avatar-md">
                                <img src="{{$user->pic_addr}}" alt="">
                            </span> 
                            <span class="account-summary pr-lg-4 d-none d-lg-block">
                            <span class="account-name">
                                {{$user->f_name." ".$user->l_name}}
                            </span> 
                            <span class="account-description">
                                @switch($user->type)
                                    @case('admin')
                                        Admin
                                        @break
                                    @case('blogger')
                                        Blogger                                     
                                        @break
                                @endswitch    
                            </span></span></button>
                    <div class="dropdown-menu">
                        <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                        <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                        <h6 class="dropdown-header d-none d-md-block d-lg-none"> {{$user->f_name." ".$user->l_name}}
                        </h6>
                        <a class="dropdown-item" href="user-profile.html">
                            <span class="dropdown-icon oi oi-person"></span> Profile</a> 
                                <form action={{route('logout')}} method="post" style="cursor:pointer;">
                                    @csrf
                                    <a class="dropdown-item" onclick="parentNode.submit();" ><span class="dropdown-icon oi oi-account-logout"></span>
                                    Logout</a>
                                </form>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a
                            class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard
                            Shortcuts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>