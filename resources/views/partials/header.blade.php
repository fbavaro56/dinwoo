<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 58, 'stickySetTop': '-58px', 'stickyChangeLogo': false}">
    <div class="header-body">
        <div class="header-top header-top-tertiary header-top-style-3">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <p class="text-color-light">
                                <span class="mr-1"><i class="icon-call-end icons mr-1"></i> (123) 456-789</span><span class="d-none d-sm-block"></span>
                            </p>
                            <ul class="header-social-icons social-icons social-icons-transparent social-icons-icon-light ml-1 mt-1 d-none d-sm-block">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img alt="Dinwoo" src="https://via.placeholder.com/150x48">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="">
                                            <a class="active" href="{{url('/')}}">
                                                <i class="fa fa-home" style="margin-right: 5px"></i> Inicio
                                            </a>
                                        </li>

                                        @foreach(\App\Category::all() as $category)
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="{{url('/posts/categoria/'.$category->name)}}">
                                                    <i class="fa {{$category->icon}}" style="font-size: 15px;margin-right: 5px;margin-bottom: 3px"></i> {{$category->name}}
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @foreach(\App\Destiny::all() as $destiny)
                                                        <li><a class="dropdown-item" href="{{url('/posts/categoria/'.$category->name.'/en/'.$destiny->name)}}">{{$destiny->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach


                                        {{--<li class="">--}}
                                            {{--<a class="" href="#">--}}
                                                {{--<i class="fa fa-info" style="margin-right: 5px"></i> Información--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
