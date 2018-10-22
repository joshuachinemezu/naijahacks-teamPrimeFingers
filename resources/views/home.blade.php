@extends('layouts.app')
	<!-- Header section -->
    <!-- Header section end -->
@section('content')
@include('layouts.partial.header')



<main class="main-wrapper">
    <section id="home" class="dark-section overflow-hidden section-main demo-banner">
        <div class="bg-image" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -25%, 0px)"
            data-bottom-top="transform: translate3d(0px, -75%, 0px)"></div>
        <div class="overlay">
            <div class="demo-banner-root text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="section-title">Get quality feedback </h1>
                            <h3 class="section-subtitle boderad-subtitle">Before launching your product, test and
                                validate your product get user quality user feedback.</h3>
                            <div style="margin-top: 40px"><a href="#" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-highlight btn-large"
                                    rel="nofollow">Test Now</a></div>
                        </div>
                    </div>
                </div>
            </div><a href="#about" data-target="#about" class="move-to-demo menu-smooth-scroll"><i class="zmdi zmdi-chevron-down"></i></a>
        </div>
    </section>
    <section id="about" class="section-main">
        <section class="dark-section overflow-hidden boderd-intro-imodules">
            <div class="section-common-space">
                <div class="container">
                    <div class="text-center section-heading">
                        <h2 class="section-title text-black">Get started in these easy steps</h2>
                    </div>
                    <div class="row">
                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="single-imodule imodule-centerd rbodard-imodule wow fadeInUp animated"
                                data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                                <div class="icon-box"><i class="zmdi zmdi-card-travel"></i></div>
                                <div class="ic-module-content">
                                    <h3 class="imodule-title">Step One</h3>
                                    <p>We respond directly to a project’s objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="single-imodule imodule-centerd rbodard-imodule wow fadeInUp animated"
                                data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <div class="icon-box"><i class="zmdi zmdi-boat"></i></div>
                                <div class="ic-module-content">
                                    <h3 class="imodule-title">Step Two</h3>
                                    <p>We love working with people who embrace the design</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="single-imodule imodule-centerd rbodard-imodule wow fadeInUp animated"
                                data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="icon-box"><i class="zmdi zmdi-fire"></i></div>
                                <div class="ic-module-content">
                                    <h3 class="imodule-title">Step 3</h3>
                                    <p>Great service is achieved through professionalism.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                            <div class="single-imodule imodule-centerd rbodard-imodule wow fadeInUp animated"
                                data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="icon-box"><i class="zmdi zmdi-gesture"></i></div>
                                <div class="ic-module-content">
                                    <h3 class="imodule-title">Step 4</h3>
                                    <p>Working with the latest technology we design.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="ask-for-buy dark-section">
        <div class="section-common-space">
            <div class="container">
                <div class="row">
                    <div class="stay-center">
                        <h2 class="section-title">Get Quality Feedback on your product</h2>
                        <div class="btn-wrap wow fadeInLeftSmall" data-wow-duration="1s"><a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-highlight">Start
                                Testing Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial" class="section-main primary-bg-color section-bd-top testimonial-section overflow-hidden">
        <div class="section-common-space">
            <div class="container">
                <div class="row">
                    <div class="text-center section-heading">
                        <h2 class="section-title">TESTIMONIALS</h2>
                        <h3 class="section-subtitle">Our clients help us to improve and strive for more.</h3>
                    </div>
                </div>
            </div>
            <div class="slider-with-nav container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="testimonial-slider styled-paginantion content-italic colorsch-white nav-arrow-enabled testimonial-with-nav"
                            data-action="testimonialSlider">
                            <div class="text-center single-testimonial">
                                <div class="recomenders-thumb"><img src="{{asset('assets/img/adeniran.jpg')}}" alt=""></div>
                                <div class="recomenders-info">
                                    <p>Distinctively white board interactive partnerships through client-centric
                                        ideas. Uniquely engineer future-proof testing procedures with
                                        bricks-and-clicks metrics. Authoritatively synthesize bleeding-edge supply
                                        chains through granular e-services. Monotonically.</p>
                                    <div><span class="recomenders-name">Adeniran Opeyemi,</span> <span class="recomenders-role">Nettuts+</span></div>
                                </div>
                            </div>
                            <div class="text-center single-testimonial">
                                <div class="recomenders-thumb"><img src="{{asset('assets/img/adeniran.jpg')}}" alt=""></div>
                                <div class="recomenders-info">
                                    <p>Quickly leverage existing quality action items before B2B infrastructures.
                                        Professionally disintermediate enterprise networks after go forward
                                        potentialities. Intrinsicly exploit innovative communities rather than
                                        parallel.</p>
                                    <div><span class="recomenders-name">Sojirin Seyikemi,</span> <span class="recomenders-role">Exolve</span></div>
                                </div>
                            </div>
                            <div class="text-center single-testimonial">
                                <div class="recomenders-thumb"><img src="{{asset('assets/img/adeniran.jpg')}}" alt=""></div>
                                <div class="recomenders-info">
                                    <p>Professionally integrate granular results through performance based content.
                                        Professionally provide access to inexpensive niches after front-end ROI.
                                        Competently synthesize backend methodologies whereas multimedia based.</p>
                                    <div><span class="recomenders-name">Chinemezu Joshua,</span> <span class="recomenders-role">Codecanyon</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="ts-slider-navwrap"><a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect ch-gray-white left-arrow icon-arrow round-arrow ts-slider-nav"><i
                                    class="zmdi zmdi-chevron-left"></i> </a><a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect ch-gray-white right-arrow icon-arrow round-arrow ts-slider-nav"><i
                                    class="zmdi zmdi-chevron-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="contact" class="section bg-image-class location-on-map">
        <div class="overlay">
            <div class="text-center map-content">
                <div class="map-buttons"><button type="button" id="map-open" class="btn-active btn btn-block btn-tranparent btn-animated from-top zmdi zmdi-chevron-down"><span>LOCATE
                            US ON THE MAP</span></button> <button type="button" id="map-close" class="btn btn-block btn-tranparent btn-animated from-bottom zmdi zmdi-chevron-up"><span>Close
                            the map</span></button></div>
                <div class="map-wrapper">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</main>

    	<!-- Footer section -->
        @include('layouts.partial.footer')
    <!-- Footer section end -->
@endsection

