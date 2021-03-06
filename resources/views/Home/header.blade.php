<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{('/')}}"><img width="250" src="images/logo.png" alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{('/')}}">Hakkımızda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{'/product_sayfa'}}">Ürünler</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{'/contact'}}">İletişim</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="blog_list.html">Sepetim</a>
                    </li>

                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    @if (Route::has('login'))

                        @auth
                            <li class="nav-item">
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                        @else
                    <li class="nav-item">
                        <a class="btn btn-primary" id='logincss'href="{{ route('login') }}">Giriş</a>
                    </li>
                    <style>
                        #logincss{
                            margin-right: 11px;
                        }
                    </style>
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('register') }}">Üye Ol</a>
                    </li>
                        @endauth
                    @endif

                </ul>
            </div>
        </nav>
    </div>
</header>
