<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body>


    <!-- Navbar Section -->
    <section class="nav-bar navbar-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <h3 class="text-white">Business</h3>
                </a>
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="page-scroll active" href="#hero-area">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#pricing">Pricing</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!-- Home Section -->
    <section id="hero-area" class="header-area header-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="header-body">
                        <h1>{{ $homes[0]->title }}</h1>
                        <p>{{ $homes[0]->description }}</p>
                        <div class="button">
                            <a href="#" class="btn primary-btn">Get Started</a>
                            <a href="#" class="glightbox video-button">
                                <span class="btn icon-btn rounded-full">
                                    <i class="lni lni-play"></i>
                                </span>
                                <span class="text">Watch Intro</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="header-img">
                        <img src="{{ asset($homes[0]->picture) }}" alt="Home Picture">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="about-area story-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="story-img">
                        <img src="{{ asset($abouts[0]->picture) }}" alt="About Picture">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="story-area-body">
                        @foreach ($abouts as $about)
                            <h6 class="text-lg">
                                {{ $about->heading_title }}
                            </h6>
                            <h2 class="main-title fw-bold">
                                {{ $about->heading_description }}
                            </h2>
                            <div class="story-area-tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-who-we-are-tab" data-toggle="tab"
                                            data-target="#nav-who-we-are" type="button" role="tab"
                                            aria-controls="nav-who-we-are" aria-selected="true">
                                            Who We Are
                                        </button>
                                        <button class="nav-link" id="nav-our-vision-tab" data-toggle="tab"
                                            data-target="#nav-our-vision" type="button" role="tab"
                                            aria-controls="nav-our-vision" aria-selected="false">
                                            Our Vision
                                        </button>
                                        <button class="nav-link" id="nav-our-history-tab" data-toggle="tab"
                                            data-target="#nav-our-history" type="button" role="tab"
                                            aria-controls="nav-our-history" aria-selected="false">
                                            Our History
                                        </button>
                                    </div>
                                </nav>
                                <div class="tab-body" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-who-we-are" role="tabpanel"
                                        aria-labelledby="nav-who-we-are-tab">
                                        <p>{{ $about->who_we_are }}</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-our-vision" role="tabpanel"
                                        aria-labelledby="nav-our-vision-tab">
                                        <p>{{ $about->our_vision }}</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-our-history" role="tabpanel"
                                        aria-labelledby="nav-our-history-tab">
                                        <p>{{ $about->our_history }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="section-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h6>Services</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="service-icon">
                                <i class="lni lni-service"></i>
                            </div>
                            <div class="service-body">
                                <h4>{{ $service->title }}</h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing-section">
        <div class="section-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h6>Pricing</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($pricings as $pricing)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pricing-style-section {{ $loop->index == 1 ? 'middle' : '' }}">
                            <div class="table-head">
                                <h6 class="title">
                                    {{ $pricing->plan_title }}
                                </h6>
                                <p>{{ $pricing->plan_description }}
                                </p>
                                <div class="price">
                                    <h2 class="amount">
                                        <span class="currency">$</span>{{ $pricing->plan_price }}<span
                                            class="duration">/mo </span>
                                    </h2>
                                </div>
                            </div>
                            <div class="light-rounded-buttons">
                                <a href="#" class="btn primary-btn-outline">
                                    Start free trial
                                </a>
                            </div>
                            <div class="table-content">
                                <ul class="table-list">
                                    <li> <i class="lni lni-checkmark-circle"></i> {{ $pricing->plan_feature_1 }}</li>
                                    <li> <i class="lni lni-checkmark-circle"></i> {{ $pricing->plan_feature_2 }}</li>
                                    <li> <i class="lni lni-checkmark-circle"></i> {{ $pricing->plan_feature_3 }}</li>
                                    <li> <i class="lni lni-checkmark-circle"></i> {{ $pricing->plan_feature_4 }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="footer" class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                    <div class="inner-content">
                        <h2>{{ $footers[0]->title }}</h2>
                        <p>{{ $footers[0]->description }}</p>
                        <div class="light-rounded-buttons">
                            <a href="#" class="btn primary-btn-outline">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
