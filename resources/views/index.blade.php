<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Arco - 记录 &amp; 分享</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<!-- Preloader Start -->
<div id="preloader">
    {{--loding run-deer form codepen--}}
    <canvas id="loading" class="loading"></canvas>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt="Logo"></a>
                    <canvas id="loading" class="navbar"></canvas>
                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav"
                            aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span></button>
                    <!-- Navbar -->
                    <div class="collapse navbar-collapse" id="worldNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">主页 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">系列</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="index.html">Home</a>
                                    <a class="dropdown-item" href="catagory.html">Catagory</a>
                                    <a class="dropdown-item" href="single-blog.html">Single Blog</a>
                                    <a class="dropdown-item" href="regular-page.html">Regular Page</a>
                                    <a class="dropdown-item" href="contact.html">Contact</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cookies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">翻译</a>
                            </li>
                            {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="#">生活</a>--}}
                            {{--</li>--}}
                        </ul>
                        <!-- Search Form  -->
                        <div id="search-wrapper">
                            <form action="#">
                                <input type="text" id="search" placeholder="Search something...">
                                <div id="close-icon"></div>
                                <input class="d-none" type="submit" value="">
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ********** Hero Area Start ********** -->
<div class="hero-area">

    <!-- Hero Slides Area -->
    <div class="hero-slides owl-carousel">
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay"
             style="background-image: url(images/backgrounds/1.jpg);"></div>
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay"
             style="background-image: url(images/backgrounds/2.jpg);"></div>
    </div>

    <!-- Hero Post Slide -->
    <div class="hero-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-post-slide">
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>1</p>
                            </div>
                            <div class="post-title">
                                <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most
                                    Complex</a>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>2</p>
                            </div>
                            <div class="post-title">
                                <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most
                                    Complex</a>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>3</p>
                            </div>
                            <div class="post-title">
                                <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most
                                    Complex</a>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide d-flex align-items-center">
                            <div class="post-number">
                                <p>4</p>
                            </div>
                            <div class="post-title">
                                <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most
                                    Complex</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ********** Hero Area End ********** -->

<div class="main-content-wrapper section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- ============= Post Content Area Start ============= -->
            <div class="col-12 col-lg-8">
                <div class="post-content-area mb-50">
                    <!-- Catagory Area -->
                    <div class="world-catagory-area">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="title">系列</li>

                            <li class="nav-item">
                                <a class="nav-link active" id="tabAll" data-toggle="tab" href="#world-tab-all"
                                   role="tab"
                                   aria-controls="world-tab-all" aria-selected="true">全部</a>
                            </li>

                            @foreach($serieCates as $serieCate)
                                <li class="nav-item">
                                    <a class="nav-link" id="tab{{ $serieCate->id }}" data-toggle="tab"
                                       href="#world-tab-{{$serieCate->id}}" role="tab"
                                       aria-controls="world-tab-{{ $serieCate->id }}"
                                       aria-selected="false">{{ $serieCate->name }}</a>
                                </li>
                            @endforeach


                            {{--<li class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"--}}
                            {{--aria-haspopup="true" aria-expanded="false">More</a>--}}
                            {{--<div class="dropdown-menu">--}}
                            {{--<a class="nav-link" id="tab7" data-toggle="tab" href="#world-tab-7" role="tab"--}}
                            {{--aria-controls="world-tab-7" aria-selected="false">Sports</a>--}}
                            {{--<a class="nav-link" id="tab8" data-toggle="tab" href="#world-tab-8" role="tab"--}}
                            {{--aria-controls="world-tab-8" aria-selected="false">Politices</a>--}}
                            {{--<a class="nav-link" id="tab9" data-toggle="tab" href="#world-tab-9" role="tab"--}}
                            {{--aria-controls="world-tab-9" aria-selected="false">Features</a>--}}
                            {{--</div>--}}
                            {{--</li>--}}
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="world-tab-all" role="tabpanel"
                                 aria-labelledby="tabAll">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="world-catagory-slider owl-carousel wow fadeInUpBig"
                                             data-wow-delay="0.1s">
                                            @foreach([1,2,3] as $key => $item)

                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="img/blog-img/b1.jpg" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="#">travel</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="#" class="headline">
                                                            <h5>How </h5>
                                                        </a>
                                                        <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                            Complex
                                                            Concepts in...</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                                        href="#"
                                                                        class="post-date">Sep
                                                                    29, 2017 at 9:48 am</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        @foreach([1,2,3,4] as $key=>$item)
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig"
                                                 data-wow-delay="0.{{ $key+2 }}s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b10.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did v</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                                              class="post-date">Sep
                                                                29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>


                            @foreach($serieCates as $serieCate)
                                <div class="tab-pane fade" id="world-tab-{{ $serieCate->id }}" role="tabpanel"
                                     aria-labelledby="tab{{ $serieCate->id }}">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/blog-img/b1.jpg" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                            Complex Concepts in Physics?</h5>
                                                    </a>
                                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex
                                                        Concepts in...</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                                              class="post-date">Sep
                                                                29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-6">
                                        @foreach($serieCate->posts->where('top',0)->take(4) as $key=>$topPost)
                                            {{--<div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig"--}}
                                            {{--data-wow-delay="0.{{ $key+2 }}s">--}}
                                            <!-- Single Blog Post -->
                                                <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="img/blog-img/b10.jpg" alt="">
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="#" class="headline">
                                                            <h5>How Did v</h5>
                                                        </a>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                                        href="#"
                                                                        class="post-date">Sep
                                                                    29, 2017 at 9:48 am</a></p>
                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Catagory Area -->
                <div class="world-catagory-area mt-50">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="title">Cookie</li>

                        <li class="nav-item">
                            <a class="nav-link active" id="tabcall" data-toggle="tab" href="#world-tab-call"
                               role="tab"
                               aria-controls="world-tab-call" aria-selected="true">全部</a>
                        </li>

                        @foreach($cookieCates as $cookieCate)
                            <li class="nav-item">
                                <a class="nav-link" id="tab{{ $cookieCate->id }}" data-toggle="tab" href="#world-tab-{{ $cookieCate->id }}" role="tab"
                                   aria-controls="world-tab-{{ $cookieCate->id }}" aria-selected="false">{{ $cookieCate->name }}</a>
                            </li>
                        @endforeach

                        {{--<li class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"--}}
                               {{--role="button"--}}
                               {{--aria-haspopup="true" aria-expanded="false">More</a>--}}
                            {{--<div class="dropdown-menu">--}}
                                {{--<a class="nav-link" id="tab16" data-toggle="tab" href="#world-tab-16"--}}
                                   {{--role="tab"--}}
                                   {{--aria-controls="world-tab-16" aria-selected="false">Sports</a>--}}
                                {{--<a class="nav-link" id="tab17" data-toggle="tab" href="#world-tab-17"--}}
                                   {{--role="tab"--}}
                                   {{--aria-controls="world-tab-17" aria-selected="false">Politices</a>--}}
                                {{--<a class="nav-link" id="tab18" data-toggle="tab" href="#world-tab-18"--}}
                                   {{--role="tab"--}}
                                   {{--aria-controls="world-tab-18" aria-selected="false">Features</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    </ul>

                    <div class="tab-content" id="myTabContent2">

                        <div class="tab-pane fade show active" id="world-tab-call" role="tabpanel"
                             aria-labelledby="tabcall">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b2.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b3.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="world-catagory-slider2 owl-carousel wow fadeInUpBig"
                                         data-wow-delay="0.4s">
                                        <!-- ========= Single Catagory Slide ========= -->
                                        <div class="single-cata-slide">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="img/blog-img/b14.jpg" alt="">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="#" class="headline">
                                                                <h5>How Did van Gogh’s Turbulent Mind Depict
                                                                    One of
                                                                    the Most</h5>
                                                            </a>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author">Katy
                                                                        Liu</a> on
                                                                    <a href="#" class="post-date">Sep 29,
                                                                        2017 at
                                                                        9:48 am</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="img/blog-img/b15.jpg" alt="">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="#" class="headline">
                                                                <h5>How Did van Gogh’s Turbulent Mind Depict
                                                                    One of
                                                                    the Most</h5>
                                                            </a>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author">Katy
                                                                        Liu</a> on
                                                                    <a href="#" class="post-date">Sep 29,
                                                                        2017 at
                                                                        9:48 am</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="img/blog-img/b16.jpg" alt="">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="#" class="headline">
                                                                <h5>How Did van Gogh’s Turbulent Mind Depict
                                                                    One of
                                                                    the Most</h5>
                                                            </a>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author">Katy
                                                                        Liu</a> on
                                                                    <a href="#" class="post-date">Sep 29,
                                                                        2017 at
                                                                        9:48 am</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="img/blog-img/b17.jpg" alt="">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="#" class="headline">
                                                                <h5>How Did van Gogh’s Turbulent Mind Depict
                                                                    One of
                                                                    the Most</h5>
                                                            </a>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author">Katy
                                                                        Liu</a> on
                                                                    <a href="#" class="post-date">Sep 29,
                                                                        2017 at
                                                                        9:48 am</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ========= Single Catagory Slide ========= -->
                                        <div class="single-cata-slide">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="img/blog-img/b17.jpg" alt="">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="#" class="headline">
                                                                <h5>Most</h5>
                                                            </a>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author">Katy
                                                                        Liu</a> on
                                                                    <a href="#" class="post-date">Sep 29,
                                                                        2017 at
                                                                        9:48 am</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="img/blog-img/b15.jpg" alt="">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="#" class="headline">
                                                                <h5>How Did van Gogh’s Turbulent Mind Depict
                                                                    One of
                                                                    the Most</h5>
                                                            </a>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author">Katy
                                                                        Liu</a> on
                                                                    <a href="#" class="post-date">Sep 29,
                                                                        2017 at
                                                                        9:48 am</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="img/blog-img/b14.jpg" alt="">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="#" class="headline">
                                                                <h5>How Did van Gogh’s Turbulent Mind Depict
                                                                    One of
                                                                    the Most</h5>
                                                            </a>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author">Katy
                                                                        Liu</a> on
                                                                    <a href="#" class="post-date">Sep 29,
                                                                        2017 at
                                                                        9:48 am</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <!-- Single Blog Post -->
                                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="img/blog-img/b16.jpg" alt="">
                                                        </div>
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            <a href="#" class="headline">
                                                                <h5>How Did van Gogh’s Turbulent Mind Depict
                                                                    One of
                                                                    the Most</h5>
                                                            </a>
                                                            <!-- Post Meta -->
                                                            <div class="post-meta">
                                                                <p><a href="#" class="post-author">Katy
                                                                        Liu</a> on
                                                                    <a href="#" class="post-date">Sep 29,
                                                                        2017 at
                                                                        9:48 am</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-11" role="tabpanel"
                             aria-labelledby="tab11">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b2.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b3.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b14.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b15.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b16.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b17.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-12" role="tabpanel"
                             aria-labelledby="tab12">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b2.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b3.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b2.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b3.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-13" role="tabpanel"
                             aria-labelledby="tab13">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b14.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b15.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b16.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b17.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b14.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b15.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b16.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b17.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-14" role="tabpanel"
                             aria-labelledby="tab14">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b2.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b3.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b14.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b15.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b16.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b17.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-15" role="tabpanel"
                             aria-labelledby="tab15">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b2.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b3.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b14.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b15.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b16.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b17.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-16" role="tabpanel"
                             aria-labelledby="tab16">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b2.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b3.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b14.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b15.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b16.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b17.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-17" role="tabpanel"
                             aria-labelledby="tab17">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b2.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b3.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b14.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b15.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b16.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b17.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="world-tab-18" role="tabpanel"
                             aria-labelledby="tab18">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b2.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b3.jpg" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">travel</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                    Complex
                                                    Concepts in Physics?</h5>
                                            </a>
                                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most
                                                Complex
                                                Concepts in...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b14.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b15.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b16.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b17.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the
                                                    Most</h5>
                                            </a>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a
                                                            href="#"
                                                            class="post-date">Sep
                                                        29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!-- ========== Sidebar Area ========== -->
            <div class="col-12 col-md-8 col-lg-4">
                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">About World</h5>
                        <div class="widget-content">
                            <p>The mango is perfect in that it is always yellow and if it’s not, I don’t want to
                                hear
                                about it. The mango’s only flaw, and it’s a minor one, is the effort it
                                sometimes takes
                                to undress the mango, carve it up in a way that makes sense, and find its way to
                                the
                                mouth.</p>
                        </div>
                    </div>
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Top Stories</h5>
                        <div class="widget-content">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="img/blog-img/b11.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the
                                            Most</h5>
                                    </a>
                                </div>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="img/blog-img/b13.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the
                                            Most</h5>
                                    </a>
                                </div>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="img/blog-img/b14.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the
                                            Most</h5>
                                    </a>
                                </div>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="img/blog-img/b10.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the
                                            Most</h5>
                                    </a>
                                </div>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="img/blog-img/b12.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the
                                            Most</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Stay Connected</h5>
                        <div class="widget-content">
                            <div class="social-area d-flex justify-content-between">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Today’s Pick</h5>
                        <div class="widget-content">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post todays-pick">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="img/blog-img/b22.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content px-0 pb-0">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex
                                            Concepts in
                                            Physics?</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- ========== Single Blog Post ========== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="img/blog-img/b4.jpg" alt="">
                        <!-- Post Content -->
                        <div class="post-content d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            <div class="post-tag"><a href="#">travel</a></div>
                            <!-- Headline -->
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                    Physics?</h5>
                            </a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                      class="post-date">Sep 29,
                                        2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Single Blog Post ========== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="img/blog-img/b5.jpg" alt="">
                        <!-- Post Content -->
                        <div class="post-content d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            <div class="post-tag"><a href="#">travel</a></div>
                            <!-- Headline -->
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                    Physics?</h5>
                            </a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                      class="post-date">Sep 29,
                                        2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Single Blog Post ========== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="img/blog-img/b6.jpg" alt="">
                        <!-- Post Content -->
                        <div class="post-content d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            <div class="post-tag"><a href="#">travel</a></div>
                            <!-- Headline -->
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                    Physics?</h5>
                            </a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                      class="post-date">Sep 29,
                                        2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="world-latest-articles">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="title">
                        <h5>Latest Articles</h5>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig"
                         data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b18.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                    Physics?</h5>
                            </a>
                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink
                                coat skin,
                                peel it off with your teeth. Sink them into unripened...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                      class="post-date">Sep 29,
                                        2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig"
                         data-wow-delay="0.3s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b19.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                    Physics?</h5>
                            </a>
                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink
                                coat skin,
                                peel it off with your teeth. Sink them into unripened...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                      class="post-date">Sep 29,
                                        2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig"
                         data-wow-delay="0.4s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b20.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                    Physics?</h5>
                            </a>
                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink
                                coat skin,
                                peel it off with your teeth. Sink them into unripened...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                      class="post-date">Sep 29,
                                        2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig"
                         data-wow-delay="0.5s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b21.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                    Physics?</h5>
                            </a>
                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink
                                coat skin,
                                peel it off with your teeth. Sink them into unripened...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                      class="post-date">Sep 29,
                                        2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="title">
                        <h5>Most Popular Videos</h5>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b7.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                            <!-- Video Button -->
                            <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i
                                        class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                    Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts
                                in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                      class="post-date">Sep 29,
                                        2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b8.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                            <!-- Video Button -->
                            <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i
                                        class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in
                                    Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts
                                in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#"
                                                                                      class="post-date">Sep 29,
                                        2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Load More btn -->
        <div class="row">
            <div class="col-12">
                <div class="load-more-btn mt-50 text-center">
                    <a href="#" class="btn world-btn">Load More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                                    aria-hidden="true"></i> by <a
                                        href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    {{--for loading--}}
    <script src="js/d3.min.js"></script>
    <script src="js/loading.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>