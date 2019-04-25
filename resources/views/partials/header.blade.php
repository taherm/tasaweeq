<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Tasaweeq" width="120" height="35" data-sticky-width="120" data-sticky-height="35" data-sticky-top="33" src="{{asset('uploads/logo.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li><a href="http://instagram.com/tsaweeq" target="_blank" title="Instagram">
                                        <i class="fa fa-instagram fa-2x"></i>
                                    </a></li>

                                <li><a href="http://twitter.com/tasaweeq" target="_blank" title="Linkedin">
                                        <i class="fa fa-twitter fa-2x"></i>
                                    </a></li>
                                <li><a href="https://www.linkedin.com/company/tasaweeq" target="_blank" title="Linkedin">
                                        <i class="fa fa-linkedin fa-2x"></i>
                                    </a></li>
                                <li>
                                    <a class="nav-link" href="/home-ar">
                                        <p style="font-size:18px"> ع
                                        </p>
                                    </a>

                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="header-row">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="">
                                            <a class="nav-link" href="/">
                                                Home
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="nav-link" href="/about">
                                                About Tasaweeq
                                            </a>
                                        </li>

                                        @foreach($cat as $item)
                                        @if($item->services->count())

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" onclick="return false" style="cursor:default" href="/">
                                                {{$item->title_en}}
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($item->services as $submenu)
                                                <li>
                                                    <a class="dropdown-item" href="{{url('services_en/'.$submenu->id)}}">{{$submenu->title_en}}</a>
                                                </li>
                                                @endforeach
                                            </ul>

                                        </li>

                                        @else
                                        <li class="">
                                            <a class="nav-link" href="/">
                                                {{$item->title_en}}
                                            </a>

                                        </li>

                                        @endif
                                        @endforeach

                                        <li class="">
                                            <a class="nav-link" href="/workspace">
                                                Workspace
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="nav-link" href="/clients">
                                                Our Clients
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="nav-link" href="/careers">
                                                Careers
                                            </a>
                                        </li>

                                        <li class="">
                                            <a class="nav-link" href="/contact">
                                                Contact Us
                                            </a>

                                        </li>

                                        {{-- <li class="">
                                            <a class="nav-link" href="/blog">
                                                Blog
                                            </a>

                                        </li>
										--}}


                                        {{-- <li class="">
                                            <a href="#" target="_blank" title="Search">
                                                <i class="fa fa-search"></i>
                                            </a>


                                        </li>      --}}
                                    </ul>
                                </nav>
                            </div>

                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>