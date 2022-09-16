@extends('layouts.navs')
@section('content')
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <div class="phStickyWrap">
            <!-- pageHeader -->
            <header id="pageHeader" class="w-100 headerFixer">
                <div class="container">
                    <!-- hdHolder -->
                    <div class="hdHolder position-relative pt-2 pb-2 pt-lg-4 pb-lg-4 pt-xl-7 pb-xl-7">
                        <div class="row">
                            <div class="col-4 col-md-2">
                                <!-- logo -->
                                <div class="logo mt-1">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('speech/images/logoStyles.png') }}" class="img-fluid"
                                            alt="Asaas">
                                    </a>
                                </div>
                            </div>
                            <div class="col-8 col-md-10 position-static">
                                <!-- pageNav -->
                                <nav id="pageNav"
                                    class="navbar navbar-expand-md navbar-dark justify-content-end p-0 align-items-start position-static">
                                    <!-- pageMainNavCollapse -->
                                    <div class="collapse navbar-collapse pageMainNavCollapse justify-content-end"
                                        id="pageMainNavCollapse">
                                        <!-- mainNavigation -->
                                        <ul class="navbar-nav mainNavigation fwSemi pt-md-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('home') }}">Home <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#scrollTo2">Why?</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#scrollTo3">Features</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#scrollTo4">Testimonials</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#scrollTo5">Pricing</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- hdBtn -->
                                    <a href="{{ route('speech') }}"
                                        class="btn btn-info font-weight-normal text-capitalize hdBtn ml-md-3 ml-md-6 ml-lg-12 position-relative border-0 p-0"
                                        data-hover="Get Started">
                                        <span class="d-block btnText">Get Started</span>
                                    </a>
                                    <!-- pageNavOpener -->
                                    <button class="navbar-toggler pageNavOpener ml-3" type="button" data-toggle="collapse"
                                        data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <main>
            <!-- introBlock -->
            <section class="introBlock d-flex w-100 position-relative text-white bg-secondary">
                <div class="w-100 d-flex align-items-center">
                    <!-- ibHolder -->
                    <div class="w-100 position-relative ibHolder py-19 py-md-23 py-xl-29">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="captionWrap position-relative">
                                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                                            <h1 class="text-white font-weight-bold mb-5">Powerful tools for Note Making
                                                and Minutes Taking
                                            </h1>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay="1s">
                                            <p>Don't waste another minute</p>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay="1.5s">
                                            <a href="javascript:void(0);"
                                                class="btn btn-info btnMin align-top mt-6 p-0 border-0 position-relative"
                                                data-hover="Try it for Free">
                                                <span class="d-block btnText">Try it for Free</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-none d-md-block imageWrap wow bounceInRight"
                                    data-wow-delay="2s">
                                    <!-- imgHolder -->
                                    <div class="imgHolder pl-7 pl-xl-12 position-relative">
                                        <img src="{{ asset('speech/images/img02.png') }}" class="img-fluid"
                                            alt="image description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- svgBg -->
                <svg class="svgBg">
                    <defs>
                        <clipPath id="path01" clipPathUnits="objectBoundingBox">
                            <path d="M 1 0 L 0.93 0 C 0.7 0.18 0.77 0.26 0.51 0.34 Q 0.36 0.38 0.52 1 L 1 1 Z"></path>
                        </clipPath>
                    </defs>
                    <rect width="100%" height="100%" style="clip-path: url(#path01);" fill="#7730ef"></rect>
                </svg>
                <!-- ibBgPattern -->
                <span class="position-absolute w-100 h-100 ibBgPattern"
                    style="background-image: url(images/bgShapes01.png') }});"></span>
            </section>
            <!-- sponsorsAside -->
            <aside class="sponsorsAside position-relative text-center">
                <div class="container">
                    <div class="bg-white mt-n12 mt-md-n15 shadow-lg py-4 py-md-7">
                        <!-- logosSlider -->
                        <div class="logosSlider">
                            <!-- slide -->
                            <div>
                                <!-- logoWrap -->
                                <div class="logoWrap">
                                    <img src="{{ asset('speech/images/logoStyles.png') }}" class="img-fluid" alt="stylus">
                                </div>
                            </div>
                            <!-- slide -->
                            <div>
                                <!-- logoWrap -->
                                <div class="logoWrap">
                                    <img src="{{ asset('speech/images/logoDrkht.png') }}" class="img-fluid" alt="drkht">
                                </div>
                            </div>
                            <!-- slide -->
                            <div>
                                <!-- logoWrap -->
                                <div class="logoWrap">
                                    <img src="{{ asset('speech/images/logoBrook.png') }}" class="img-fluid" alt="Brook.">
                                </div>
                            </div>
                            <!-- slide -->
                            <div>
                                <!-- logoWrap -->
                                <div class="logoWrap">
                                    <img src="{{ asset('speech/images/logoAlive.png') }}" class="img-fluid"
                                        alt="its alive!">
                                </div>
                            </div>
                            <!-- slide -->
                            <div>
                                <!-- logoWrap -->
                                <div class="logoWrap">
                                    <img src="{{ asset('speech/images/logoNowhere.png') }}" class="img-fluid"
                                        alt="nowhere among us">
                                </div>
                            </div>
                            <!-- slide -->
                            <div>
                                <!-- logoWrap -->
                                <div class="logoWrap">
                                    <img src="{{ asset('speech/images/logoStyles.png') }}" class="img-fluid"
                                        alt="stylus">
                                </div>
                            </div>
                            <!-- slide -->
                            <div>
                                <!-- logoWrap -->
                                <div class="logoWrap">
                                    <img src="{{ asset('speech/images/logoDrkht.png') }}" class="img-fluid"
                                        alt="drkht">
                                </div>
                            </div>
                            <!-- slide -->
                            <div>
                                <!-- logoWrap -->
                                <div class="logoWrap">
                                    <img src="{{ asset('speech/images/logoBrook.png') }}" class="img-fluid"
                                        alt="Brook.">
                                </div>
                            </div>
                            <!-- slide -->
                            <div>
                                <!-- logoWrap -->
                                <div class="logoWrap">
                                    <img src="{{ asset('speech/images/logoAlive.png') }}" class="img-fluid"
                                        alt="its alive!">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div id="scrollTo3" class="mt-md-n12 mt-lg-n14 pt-md-12 pt-lg-14">
                <!-- featureBlock -->
                <section class="featureBlock pt-8 pb-8 pt-md-13 pb-md-13 pt-lg-19 pb-lg-20 pt-xl-23 pb-xl-24">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1">
                                <!-- headingHead -->
                                <header class="headingHead textMedium text-center mb-8 mb-lg-10 mb-xl-14 wow bounceInUp">
                                    <h2 class="mb-5">Online SPEECH TO TEXT reliable VOICE RECOGNISION SYSTEM for
                                        impressive
                                        solutions.</h2>
                                    <p>Leading work Management solution to gain visiblity.</p>
                                </header>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-6 col-lg-3 d-flex wow flipInX" data-wow-delay="0.5s">
                                <!-- featColumn -->
                                <article class="featColumn shadow-lg position-relative w-100 pt-8 pb-5 px-6 mb-6">
                                    <span
                                        class="icnWrap d-flex align-items-center justify-content-center text-center rounded-circle mb-5"
                                        data-theme="pink">
                                        <span class="w-100 d-block p-1">
                                            <img src="{{ asset('speech/images/ico01.svg') }}" width="35"
                                                height="31" alt="icon">
                                        </span>
                                    </span>
                                    <h3 class="h6 fontBase font-weight-normal mb-2">
                                        <a href="javascript:void(0);">Get the most out
                                            of your meetings</a>
                                    </h3>
                                    <p>SpiTxt empowers everyone to engage and be more productive in meetings with real
                                        time automated notes and audio transcription..</p>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 d-flex wow flipInX" data-wow-delay="0.5s">
                                <!-- featColumn -->
                                <article class="featColumn shadow-lg position-relative w-100 pt-8 pb-5 px-6 mb-6">
                                    <span
                                        class="icnWrap d-flex align-items-center justify-content-center text-center rounded-circle mb-5"
                                        data-theme="info">
                                        <span class="w-100 d-block p-1">
                                            <img src="{{ asset('speech/images/ico02.svg') }}" width="35"
                                                height="33" alt="icon">
                                        </span>
                                    </span>
                                    <h3 class="h6 fontBase font-weight-normal mb-2">
                                        <a href="javascript:void(0);">Help students and faculty succeed</a>
                                    </h3>
                                    <p>SpiTxt provides faculty and students with real time captions and notes for
                                        in-person and virtual lectures, classes or meetings.</p>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 d-flex wow flipInX" data-wow-delay="0.5s">
                                <!-- featColumn -->
                                <article class="featColumn shadow-lg position-relative w-100 pt-8 pb-5 px-6 mb-6">
                                    <span
                                        class="icnWrap d-flex align-items-center justify-content-center text-center rounded-circle mb-5"
                                        data-theme="yellow">
                                        <span class="w-100 d-block p-1">
                                            <img src="{{ asset('speech/images/ico03.svg') }}" width="35"
                                                height="33" alt="icon">
                                        </span>
                                    </span>
                                    <h3 class="h6 fontBase font-weight-normal mb-2">
                                        <a href="javascript:void(0);">For all
                                            your needs</a>
                                    </h3>
                                    <p>SpiTxt has you covered with real-time voice transcription and features to empower
                                        more productive interactions.</p>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 d-flex wow flipInX" data-wow-delay="0.5s">
                                <!-- featColumn -->
                                <article class="featColumn shadow-lg position-relative w-100 pt-8 pb-5 px-6 mb-6">
                                    <span
                                        class="icnWrap d-flex align-items-center justify-content-center text-center rounded-circle mb-5"
                                        data-theme="purple">
                                        <span class="w-100 d-block p-1">
                                            <img src="{{ asset('speech/images/ico04.svg') }}" width="32"
                                                height="32" alt="icon">
                                        </span>
                                    </span>
                                    <h3 class="h6 fontBase font-weight-normal mb-2">
                                        <a href="javascript:void(0);">Get smarter with Otter</a>
                                    </h3>
                                    <p>SpiTxt's transcription AI technology is built to get smarter and better
                                        understand your conversations over time - applying speaker identification,
                                        custom vocabulary, and advanced summary so you can work and collaborate smarter.
                                    </p>
                                </article>
                            </div>
                        </div>
                        <!-- btnWrap -->
                        <footer class="text-center btnWrap pt-4 pt-md-7 wow slideInRight">
                            <a href="javascript:void(0);"
                                class="btn btnTheme btnMinMedium text-capitalize p-0 border-0 position-relative"
                                data-hover="See All Features">
                                <span class="d-block btnText">See All Features</span>
                            </a>
                        </footer>
                    </div>
                </section>
            </div>
            <div id="scrollTo2" class="mt-md-n12 mt-lg-n14 pt-md-12 pt-lg-14">
                <!-- factsCounterAside -->
                <aside class="factsCounterAside position-relative text-center pb-12 pb-lg-20 pb-xl-24">
                    <div class="container">
                        <div
                            class="fcbHolder rounded-lg bg-primary text-white mx-xlwd-n10 pt-8 pb-2 px-5 pt-md-12 pb-md-10 px-md-10 pt-lg-12 pb-lg-10 px-lg-15 pt-xl-17 pb-xl-13 px-xl-20 position-relative shadow-lg overflow-hidden">
                            <!-- headingHead -->
                            <header
                                class="headingHead textMedium text-center text-gray9da8bc mb-7 mb-lg-14 wow bounceInUp">
                                <h2 class="text-white h2Medium mb-3 mb-md-5">Some Real Facts</h2>
                                <p>We help you increase learning by improving SEO.</p>
                            </header>
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-4 wow flipInX" data-wow-delay="0.5s">
                                    <!-- countColumn -->
                                    <div class="countColumn mx-auto mb-6">
                                        <h3 class="text-info fontBase font-weight-normal mb-0">250+</h3>
                                        <h4 class="font-weight-normal fontBase text-gray86a0bc">Total Viewers</h4>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 wow flipInX" data-wow-delay="0.5s">
                                    <!-- countColumn -->
                                    <div class="countColumn mx-auto mb-6">
                                        <h3 class="text-info fontBase font-weight-normal mb-0">140M</h3>
                                        <h4 class="font-weight-normal fontBase text-gray86a0bc">Total Subscribers</h4>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 wow flipInX" data-wow-delay="0.5s">
                                    <!-- countColumn -->
                                    <div class="countColumn mx-auto mb-6">
                                        <h3 class="text-info fontBase font-weight-normal mb-0">35K</h3>
                                        <h4 class="font-weight-normal fontBase text-gray86a0bc">Total Users</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- bgPattern -->
                            <span class="bgPattern position-absolute w-100 h-100 inaccessible"></span>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- allFeatBlock -->
            <section class="allFeatBlock pt-7 pt-md-10 pt-lg-15 pt-xl-23 pb-3 pb-lg-10 pb-xl-14">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 offset-lg-1 col-xl-6 offset-xl-3">
                            <!-- headingHead -->
                            <header class="headingHead textMedium text-center mb-8 mb-lg-15 wow bounceInUp">
                                <h1 class="mb-5">All features</h1>
                                <p>Drop contact automatically centralizes all the information related to your prospects.
                                </p>
                            </header>
                        </div>
                    </div>
                    <!-- afColumnsWrap -->
                    <div class="afColumnsWrap">
                        <!-- afColumn -->

                        <!-- afColumn -->
                        <article class="afColumn mb-7 mb-md-11 mb-lg-18">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 wow slideInLeft">
                                    <!-- imgHolder -->
                                    <div class="imgHolder position-relative mx-auto mb-4 mb-md-0">
                                        <img src="{{ asset('speech/images/img03.png') }}" class="img-fluid"
                                            alt="image description">
                                        <!-- bgPattern -->
                                        <span class="bgPattern position-absolute"
                                            style="background-image: url(images/bgShapes03.png') }});"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 wow slideInRight">
                                    <div class="extraWrap pr-md-7 pr-lg-14">
                                        <!-- titleWrap -->
                                        <header class="titleWrap">
                                            <h3 class="mb-5">Connects seamlessly to your tools</h3>
                                            <p>Measuring the output of a particular business process or Procedure, then
                                                modifying the process or procedure to increase the output, increase
                                                efficiency.</p>
                                        </header>
                                        <!-- afDefList -->
                                        <dl class="mb-0 mt-6 overflow-hidden afDefList">
                                            <dt>
                                                <i class="icomoon-clock icn"><span class="sr-only">icon</span></i>
                                            </dt>
                                            <dd>Perfect for note taking</dd>
                                            <dt>
                                                <i class="icomoon-lock icn"><span class="sr-only">icon</span></i>
                                            </dt>
                                            <dd>First ever Video Calling Support for meetings</dd>
                                            <dt>
                                                <i class="icomoon-frame icn"><span class="sr-only">icon</span></i>
                                            </dt>
                                            <dd>Dedicated Dashboard Support</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- afColumn -->

                    </div>
                </div>
            </section>
            <!-- tryPetAside -->
            <aside class="tryPetAside text-center text-white py-5 py-lg-8 wow pulse">
                <div class="container">
                    <p class="mb-0">Ready to get started? It's fast, free and very easy! <a href="javascript:void(0);"
                            class="btn btnWhite mt-3 mt-md-0 mx-md-4 mx-lg-10 btnMin p-0 border-0 position-relative"
                            data-hover="Try it for Free"><span class="d-block btnText">Try it for Free</span></a></p>
                </div>
            </aside>
            <div id="scrollTo4" class="mt-md-n12 mt-lg-n14 pt-md-12 pt-lg-14 wow fadeIn" data-wow-delay="1s">
                <!-- testimonialsBlock -->
                <article class="testimonialsBlock bg-light pt-7 pb-5 pt-md-9 pb-md-7 pt-lg-14 pb-lg-12 pt-xl-21 pb-xl-19">
                    <div class="container">
                        <header class="text-center mb-8">
                            <h2 class="h4 font-weight-normal">Customers Feedback</h2>
                        </header>
                        <div class="row">
                            <div class="col-12 col-md-10 offset-md-1">
                                <!-- quotesSlider -->
                                <div class="quotesSlider">
                                    <div>
                                        <!-- clientQuote -->
                                        <blockquote
                                            class="clientQuote fontAlter position-relative text-primary pt-25 pt-sm-0 pl-sm-40 pl-xl-50 mb-0">
                                            <q class="d-block position-relative mb-7 pt-4 pl-12 pl-sm-0">BNI India is
                                                India’s largest and most successful business net working organisation.
                                                We offer our members the opportunity to share ideas, contacts, and most
                                                importantly!</q>
                                            <cite class="d-block pl-12 pl-sm-0">
                                                <!-- profilePicWrap -->
                                                <span
                                                    class="profilePicWrap position-absolute overflow-hidden rounded-circle">
                                                    <img src="{{ asset('speech/images/women_avatar.png') }}"
                                                        class="img-fluid w-100 h-100 imgFit rounded-circle"
                                                        alt="Donald Salvor || Global Initiative">
                                                </span>
                                                <span class="eWrap d-block">
                                                    <strong class="d-block font-weight-normal text-capitalize mb-1">Donald
                                                        Salvor</strong>
                                                    <strong class="d-block subtitle font-weight-normal fontBase">Global
                                                        Initiative</strong>
                                                </span>
                                            </cite>
                                        </blockquote>
                                    </div>
                                    <div>
                                        <!-- clientQuote -->
                                        <blockquote
                                            class="clientQuote fontAlter position-relative text-primary pt-25 pt-sm-0 pl-sm-40 pl-xl-50 mb-0">
                                            <q class="d-block position-relative mb-7 pt-4 pl-12 pl-sm-0">BNI India is
                                                India’s largest and most successful business net working organisation.
                                                We offer our members the opportunity to share ideas, contacts, and most
                                                importantly!</q>
                                            <cite class="d-block pl-12 pl-sm-0">
                                                <!-- profilePicWrap -->
                                                <span
                                                    class="profilePicWrap position-absolute overflow-hidden rounded-circle">
                                                    <img src="{{ asset('speech/images/men_avatar.png') }}"
                                                        class="img-fluid w-100 h-100 imgFit rounded-circle"
                                                        alt="Donald Salvor || Global Initiative">
                                                </span>
                                                <span class="eWrap d-block">
                                                    <strong class="d-block font-weight-normal text-capitalize mb-1">Donald
                                                        Salvor</strong>
                                                    <strong class="d-block subtitle font-weight-normal fontBase">Global
                                                        Initiative</strong>
                                                </span>
                                            </cite>
                                        </blockquote>
                                    </div>
                                    <div>
                                        <!-- clientQuote -->
                                        <blockquote
                                            class="clientQuote fontAlter position-relative text-primary pt-25 pt-sm-0 pl-sm-40 pl-xl-50 mb-0">
                                            <q class="d-block position-relative mb-7 pt-4 pl-12 pl-sm-0">BNI India is
                                                India’s largest and most successful business net working organisation.
                                                We offer our members the opportunity to share ideas, contacts, and most
                                                importantly!</q>
                                            <cite class="d-block pl-12 pl-sm-0">
                                                <!-- profilePicWrap -->
                                                <span
                                                    class="profilePicWrap position-absolute overflow-hidden rounded-circle">
                                                    <img src="{{ asset('speech/images/women_avatar.png') }}"
                                                        class="img-fluid w-100 h-100 imgFit rounded-circle"
                                                        alt="Donald Salvor || Global Initiative">
                                                </span>
                                                <span class="eWrap d-block">
                                                    <strong class="d-block font-weight-normal text-capitalize mb-1">Donald
                                                        Salvor</strong>
                                                    <strong class="d-block subtitle font-weight-normal fontBase">Global
                                                        Initiative</strong>
                                                </span>
                                            </cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div id="scrollTo5" class="mt-md-n12 mt-lg-n14 pt-md-12 pt-lg-14">
                <!-- plansBlock -->
                <section class="plansBlock pt-7 pt-md-11 pt-lg-15 pb-3 pb-md-7 pt-xl-22 pb-xl-12">
                    <div class="container">
                        <!-- headingHead -->
                        <header class="headingHead textMedium text-center mb-8 mb-md-11 mb-lg-15 wow bounceInUp">
                            <h2 class="mb-5">Choose Your Pricing Plan</h2>
                            <p>Get the most efficient pricing method and internal plans!</p>
                        </header>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-6 col-lg-4 d-flex wow pulse" data-wow-delay="0.5s">
                                <!-- planColumn -->
                                <article
                                    class="planColumn position-relative mb-6 pt-6 pb-6 pb-md-8 px-4 px-md-6 w-100 d-flex flex-column shadow-lg bg-white">
                                    <div class="pcHolder flex-grow-1">
                                        <!-- headWrap -->
                                        <header class="headWrap mb-7">
                                            <!-- symbolWrap -->
                                            <span class="symbolWrap d-block mb-3">
                                                <img src="{{ asset('speech/images/ico07.png') }}" class="img-fluid"
                                                    alt="symbol">
                                            </span>
                                            <h3 class="h5 mb-1">Intro</h3>
                                            <em class="d-block textEm">Perfect for Retail Business</em>
                                        </header>
                                        <h4 class="h1 fontBase fwSemi h1Medium mb-1">$24</h4>
                                        <em class="d-block textEm">Billed Monthly</em>
                                        <!-- tickList -->
                                        <ul class="list-unstyled tickList mt-7">
                                            <li>One Brand</li>
                                            <li>2 User</li>
                                            <li>50 Videos, 1000 Images/month</li>
                                            <li>24/7 Online Support</li>
                                            <li>Limited Templates</li>
                                        </ul>
                                    </div>
                                    <!-- btnWrap -->
                                    <footer class="btnWrap flex-shrink-0 pt-8">
                                        <a href="javascript:void(0);"
                                            class="btn btn-primary d-block w-100 p-0 border-0 position-relative"
                                            data-hover="Choose Plan">
                                            <span class="d-block btnText">Choose Plan</span>
                                        </a>
                                    </footer>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 d-flex wow pulse" data-wow-delay="0.5s">
                                <!-- planColumn -->
                                <article
                                    class="planColumn position-relative mb-6 pt-6 pb-6 pb-md-8 px-4 px-md-6 w-100 d-flex flex-column shadow-lg bg-white"
                                    data-pack="Best Pack">
                                    <div class="pcHolder flex-grow-1">
                                        <!-- headWrap -->
                                        <header class="headWrap mb-7">
                                            <!-- symbolWrap -->
                                            <span class="symbolWrap d-block mb-3">
                                                <img src="{{ asset('speech/images/ico08.png') }}" class="img-fluid"
                                                    alt="symbol">
                                            </span>
                                            <h3 class="h5 mb-1">Basic</h3>
                                            <em class="d-block textEm">Small Business Perfect Pack</em>
                                        </header>
                                        <h4 class="h1 fontBase fwSemi h1Medium mb-1">$52</h4>
                                        <em class="d-block textEm">Billed Monthly</em>
                                        <!-- tickList -->
                                        <ul class="list-unstyled tickList mt-7">
                                            <li>10 Brand</li>
                                            <li>Upto 10 User</li>
                                            <li>50 Videos, 1000 Images/month</li>
                                            <li>24/7 Online Support</li>
                                            <li>Unlimited Templates</li>
                                            <li>Upload Upto 500 Gb Data with extra Subscription option</li>
                                        </ul>
                                    </div>
                                    <!-- btnWrap -->
                                    <footer class="btnWrap flex-shrink-0 pt-8">
                                        <a href="javascript:void(0);"
                                            class="btn btnTheme d-block w-100 p-0 border-0 position-relative"
                                            data-hover="Choose Plan">
                                            <span class="d-block btnText">Choose Plan</span>
                                        </a>
                                    </footer>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 d-flex wow pulse" data-wow-delay="0.5s">
                                <!-- planColumn -->
                                <article
                                    class="planColumn position-relative mb-6 pt-6 pb-6 pb-md-8 px-4 px-md-6 w-100 d-flex flex-column shadow-lg bg-white">
                                    <div class="pcHolder flex-grow-1">
                                        <!-- headWrap -->
                                        <header class="headWrap mb-7">
                                            <!-- symbolWrap -->
                                            <span class="symbolWrap d-block mb-3">
                                                <img src="{{ asset('speech/images/ico09.png') }}" class="img-fluid"
                                                    alt="symbol">
                                            </span>
                                            <h3 class="h5 mb-1">Ultra</h3>
                                            <em class="d-block textEm">Enterprice and Corporate</em>
                                        </header>
                                        <h4 class="h1 fontBase fwSemi h1Medium mb-1">$99</h4>
                                        <em class="d-block textEm">Billed Monthly</em>
                                        <!-- tickList -->
                                        <ul class="list-unstyled tickList mt-7">
                                            <li>25 Brand</li>
                                            <li>Upto 20 User</li>
                                            <li>50 Videos, 1000 Images/month</li>
                                            <li>24/7 Online Support</li>
                                            <li>Unlimited Templates</li>
                                            <li>Upload Upto 1 TB Data with extra Subscription option</li>
                                            <li>Third Party Integration</li>
                                        </ul>
                                    </div>
                                    <!-- btnWrap -->
                                    <footer class="btnWrap flex-shrink-0 pt-8">
                                        <a href="javascript:void(0);"
                                            class="btn btn-primary d-block w-100 p-0 border-0 position-relative"
                                            data-hover="Choose Plan">
                                            <span class="d-block btnText">Choose Plan</span>
                                        </a>
                                    </footer>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- getStartedAside -->
            <aside class="getStartedAside textMedium position-relative d-flex w-100 bg-info text-center overflow-hidden">
                <div class="d-flex w-100 gsaHolder align-items-center">
                    <div class="w-100 py-7">
                        <div class="container">
                            <div class="row">
                                <div
                                    class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 wow wobble">
                                    <h1 class="h1Medium fontBase font-weight-normal mb-4">Let us help you with your
                                        design hassles</h1>
                                    <p>Your all-in-one design Solution. Easy Editable. World-class standard.</p>
                                    <a href="javascript:void(0);"
                                        class="btn btn-primary btnMinMedium align-top mt-4 mt-lg-7 p-0 border-0 position-relative"
                                        data-hover="Try it for Free">
                                        <span class="d-block btnText">Try it for Free</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="bgPattern bgPatterni inaccessible position-absolute wow bounceInDown" data-wow-delay="1s">
                    <img src="{{ asset('speech/images/bgShapes05.png') }}" class="img-fluid" alt="image description">
                </span>
                <span class="bgPattern bgPatternii inaccessible position-absolute  wow bounceInUp" data-wow-delay="1s">
                    <img src="{{ asset('speech/images/bgShapes04.jpg') }}" class="img-fluid" alt="image description">
                </span>
            </aside>
        </main>
        <!-- ftAreaWrap -->
        <div class="ftAreaWrap bg-primary text-gray777fa1 wow fadeIn" data-wow-delay="0.5s">
            <!-- footerAside -->

            <!-- pageFooter -->
            <footer id="pageFooter" class="text-center fontAlter">
                <div class="container">
                    <!-- pfHolder -->
                    <div class="pfHolder pt-7 pb-5">
                        <p><a href="javascript:void(0);">Asaas Template</a> - <a href="javascript:void(0);">Markhor
                                Themes</a> © 2020. All Rights Reserved</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
