<nav id="mainNav" class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavListHolder" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <svg id="svgLogo">
                <rect style="fill: #01A9E8" x="0" y="0" width="40" height="40"/>
            </svg>
            <a class="navbar-brand" href="/">JamesPFarrell.com</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="mainNavListHolder">
            <ul id="mainNavList" class="nav navbar-nav">

            <!-- <li class="{{ $navPage == "home" ? 'active' : ''  }}" ><a href="/">{{ trans('mainNav.home') }}</a></li> -->
                @if (Auth::user())
                    <li class="{{ $navPage == "bookings" ? 'active' : ''  }}" ><a href="/admin/bookings">{{ trans('adminNav.bookings') }}</a></li>
                    <li class="{{ $navPage == "reports" ? 'active' : ''  }}" ><a href="/admin/reports/gantt">{{ trans('adminNav.reports') }}</a></li>
                    <li class="{{ $navPage == "users" ? 'active' : ''  }}" ><a href="/admin/users">{{ trans('adminNav.users') }}</a></li>
                @endif

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="{{ $navPage == "home" ? 'active' : ''  }}"><a href="{{ url('/') }}">home</a></li>
                {{--<li class="{{ $navPage == "code" ? 'active' : ''  }}"><a href="{{ url('/code') }}">code</a></li>--}}
                <li class="{{ $navPage == "projects" ? 'active' : ''  }}"><a href="{{ url('/projects') }}">projects</a></li>
                <li class="{{ $navPage == "consulting" ? 'active' : ''  }}"><a href="{{ url('/consulting') }}">consulting</a></li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>