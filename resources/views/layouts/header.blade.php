@php use Illuminate\Http\Request; use Illuminate\Support\Facades\Log; @endphp

<header class="l-header @isset($dark) l-header_overlay @endisset">

    <div class="l-navbar l-navbar_expand @isset($dark) l-navbar_t-dark-trans @else l-navbar_t-light @endisset js-navbar-sticky">

        <div class="container-fluid">
            <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                <!--logo start-->
                <a href="index.html" class="logo-brand">
                    <img class="retina" src="@isset($dark)/assets/img/logo-dark.png @else /assets/img/logo.png @endisset" alt="Massive">
                </a>
                <!--logo end-->
                @php Log::info(request()->path()); @endphp
                <!--mega menu start-->
                <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                    <li class="@if(request()->is('/')) active @endif">
                        <a href="/">Home</a>
                    </li>
                    <li class="@if(request()->is('about')) active @endif">
                        <a href="/about">about</a>
                    </li>
                    <li class="@if(request()->is('contact')) active @endif">
                        <a href="/contact">contact</a>
                    </li>
                    <li class="@if(request()->is('posts')) active @endif">
                        <a href="/posts">blog</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</header>
