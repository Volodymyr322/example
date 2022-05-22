<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valley</title>
    <link rel="stylesheet" href="{{ asset('/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" media="screen,projection" href="{{ asset('/css/ui.totop.css') }}">
    <script src="{{ asset('/assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/loader.js') }}"></script>
    <script src="/js/jquery-1.7.2.min.js" type="text/javascript"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('main.index') }}"><img src="{{ asset('/logo.png') }}" alt="Valley"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('main.index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.main.index') }}">Адмінка</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="blog.html">Blog Archive</a>
                            <a class="dropdown-item" href="blog-single.html">Blog Post</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <a class="dropdown-item" href="404.html">404</a>
                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Увійти</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Зареєструватися</a>
                            </li>
                        @endif
                    @else
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <input class="btn btn-outline-primary" type="submit" value="Вийти">
                                </form>
                            </li>
                        </ul>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</header>



@yield('content')

<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title">Підписуйтесь на нас у фейсбук</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success"> <i class="nav-icon fab fa-facebook"></i> Valley</button>
            </div>
            <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or service.</p>
        </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="index.html" class="footer-brand-wrapper">
                    <img src="{{ asset('/logo.png') }}" alt="Valley">
                </a>
                <p class="contact-details">hello@valley.com</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">Company</a>
                    <a href="#!" class="nav-link">Android App</a>
                    <a href="#!" class="nav-link">ios App</a>
                    <a href="#!" class="nav-link">Blog</a>
                    <a href="#!" class="nav-link">Partners</a>
                    <a href="#!" class="nav-link">Careers</a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">FAQ</a>
                    <a href="#!" class="nav-link">Reporting</a>
                    <a href="#!" class="nav-link">Block Storage</a>
                    <a href="#!" class="nav-link">Tools & Integrations</a>
                    <a href="#!" class="nav-link">API</a>
                    <a href="#!" class="nav-link">Pricing</a>
                </nav>
            </div>
            <div class="col-md-3">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i class="fas fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States
                        </button>
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-content">
            <nav class="nav footer-bottom-nav">
                <a href="/privacy_&_policy">Privacy & Policy</a>
                <a href="#!">Terms</a>
                <a href="#!">Site Map</a>
            </nav>
            <p class="mb-0">© Valley. 2021 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset"></a> . All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
<script src="{{ asset('/js/jquery-1.7.2.min.js') }}" type="text/javascript"></script>
<!-- easing plugin ( optional ) -->
<script src="{{ asset('/js/easing.js') }}" type="text/javascript"></script>
<!-- UItoTop plugin -->
<script src="{{ asset('/js/jquery.ui.totop.js') }}" type="text/javascript"></script>
<!-- Starting the plugin -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
</body>

</html>
