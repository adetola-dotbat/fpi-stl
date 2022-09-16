@extends('layouts.navs')
@section('content')
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
                                                <a class="nav-link" href="{{ route('home') }}">Home </a>
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
                                            <li class="nav-item">
                                                <a class="nav-link" href="#scrollTo6">Faq</a>
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
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <h3>Run Better Meetings</h3>
                                    <p>Automatically capture meeting notes.</p>
                                </div>
                                <div class="wrapperToSpeech" style="z-index:9">


                                    <div class="speech-area">
                                        <div class="speech-buttons">

                                            <span id="copySpeech" class="btn btn-success">Copy</span>

                                            <span id="clearSpeech" class="btn btn-danger">Clear</span>
                                        </div>
                                        <textarea id="textarea" rows="10" placeholder="Your speech goes here..." spellcheck="false"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-around align-content-center py-4">
                                        <button
                                            class="btn btn-warning font-weight-normal text-capitalize hdBtn ml-md-3 ml-md-6 ml-lg-12 position-relative border-0 p-0"
                                            data-hover="" id="voiceStart">Start Recording
                                            {{-- <span class="d-block btnText" id="voiceStart">Start Speaking</span> --}}
                                        </button>

                                        {{-- <button
                                            class="btn btn-success font-weight-normal text-capitalize hdBtn ml-md-3 ml-md-6 ml-lg-12 position-relative border-0 p-0"
                                            data-hover="Finish Speaking" id="voiceStart">Finish Speaking

                                        </button> --}}
                                        {{-- <a href=""
                                            class="btn btn-success font-weight-normal text-capitalize hdBtn ml-md-3 ml-md-6 ml-lg-12 position-relative border-0 p-0"
                                            data-hover="Finish Speaking">
                                            <span class="d-block btnText" id="voiceStart">Start </span>
                                        </a> --}}

                                        <a href=""
                                            class="btn btn-success font-weight-normal text-capitalize hdBtn ml-md-3 ml-md-6 ml-lg-12 position-relative border-0 p-0"
                                            data-hover="Finish Speaking">
                                            <span class="d-block btnText" id="voiceFinish">Stop Recording</span>
                                        </a>
                                    </div>
                                    {{-- <div class="button-container">
                                        <button id="voiceStart">Start Speaking</button>
                                        <button id="voiceFinish">Finish Speaking</button>
                                    </div> --}}
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

        </main>
    </div>
@endsection
