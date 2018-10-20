@extends('layouts.app')
	<!-- Header section -->
    <!-- Header section end -->
@section('content')
@include('layouts.partial.header')



<!-- Hero section -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 hero-text">
                <h2>Manage your Network using <br><span>Noliah</span></h2>
                <h4>Manage all your social media in one place.</h4>
                <!-- <form class="hero-subscribe-from">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn sb-gradients">Get Started</button>
					</form> -->
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/img/laptop.png')}}" class="laptop-image" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->


<!-- About section -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6 about-text">
                <h2>What is Noliah?</h2>
                <h5>Noliah is an automating tools used to automate your social network activities.</h5>
                <p>Noliah helps you to perform automated operations such as the scheduling of posts, auto commenting on
                    post, scheduled likes and automating follow/unfollow operations on your twitter and instagram
                    account. It’s the dawn of a better, more and networking platform.</p>
                <a href="{{route('login')}}" class="site-btn sb-gradients sbg-line mt-5">Get Started</a>
            </div>
        </div>
        <div class="about-img">
            <img src="{{asset('assets/img/ingoas.png')}}" alt="">
        </div>
    </div>
</section>
<!-- About section end -->


<!-- Features section -->
<section class="features-section spad gradient-bg">
    <div class="container text-white">
        <div class="section-title text-center">
            <h2>Our Features</h2>
            <p>Noliah is the simplest way to schedule your social network activities.</p>
        </div>
        <div class="row">
            <!-- feature -->
            <div class="col-md-6 col-lg-4 feature">
                <i class="ti-time"></i>
                <div class="feature-content">
                    <h4>Schedule Posts</h4>
                    <p>Noliah provides you with easy to use tools that you can leverage on to manage your social media
                        presence so you can focus on your business while engaging with your online customers.
                    </p>
                    <!-- <a href="" class="readmore">Readmore</a> -->
                </div>
            </div>
            <!-- feature -->
            <div class="col-md-6 col-lg-4 feature">
                <i class="ti-shield"></i>
                <div class="feature-content">
                    <h4>Safe & Secure</h4>
                    <p>The platform is safe and secure, the platform is built with cutting edge technologies that
                        ensures the safety of your online operations.
                    </p>
                </div>
            </div>
            <!-- feature -->
            <div class="col-md-6 col-lg-4 feature">
                <i class="ti-wallet"></i>
                <div class="feature-content">
                    <h4>Affordable</h4>
                    <p>Affordable and reliable platform to use. Noliah gives you a one month free access to the system,
                        so you can explore the platform without paying a dime.
                    </p>
                </div>
            </div>
            <!-- feature -->
            <div class="col-md-6 col-lg-4 feature">
                <i class="ti-bolt"></i>
                <div class="feature-content">
                    <h4>Automate everything</h4>
                    <p>Keep your social presence active 24/7 by automatically scheduling hundreds of social media posts
                        at once, across your social accounts.
                    </p>
                </div>
            </div>
            <!-- feature -->
            <div class="col-md-6 col-lg-4 feature">
                <i class="ti-rocket"></i>
                <div class="feature-content">
                    <h4>Get More Followers + Engagement with Instagram Analytics</h4>
                    <p>Stay on message with pre-approved content your teams can post, stored in your favorite cloud
                        file service. Tagging, searching, and usage stats make curating content a breeze.
                    </p>
                    <!-- <a href="" class="readmore">Readmore</a> -->
                </div>
            </div>
            <!-- feature -->
            <div class="col-md-6 col-lg-4 feature">
                <i class="ti-panel"></i>
                <div class="feature-content">
                    <h4>Make Sales from Your Instagram</h4>
                    <p>Drive traffic and track sales with our seamless tools integrated into the platform, showcase all
                        of your products in your Instagram post by tagging multiple product pages.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features section end -->


<!-- Process section -->
<section class="process-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h2>Get Started With Noliah</h2>
            <p>Learn how Noliah makes finding, scheduling, managing, and reporting on social media content easier. <br />It’s
                fun, easy, and takes only a few minutes to setup! </p>
        </div>
        <div class="row">
            <div class="col-md-4 process">
                <div class="process-step">
                    <figure class="process-icon">
                        <!-- <img src="{{asset('assets/img/process-icons/1.png')}}" alt="#"> -->
                        <i style="font-size: 70px; color: #20509e" class="ti-write"></i>
                    </figure>
                    <h4>Create Your Noliah Account</h4>
                    <p>Signup with a single account and create a different content library for each Instagram/Twitter
                        account
                    </p>
                </div>
            </div>
            <div class="col-md-4 process">
                <div class="process-step">
                    <figure class="process-icon">
                        <!-- <img src="{{asset('assets/img/process-icons/2.png')}}" alt="#"> -->
                        <i style="font-size: 70px; color: #20509e" class="ti-plug"></i>
                    </figure>
                    <h4>Connect Your Social Account</h4>
                    <p>Connect your social account to the platform. <b>Note: We don't access or post anything to
                            your social media</b>
                    </p>
                </div>
            </div>
            <div class="col-md-4 process">
                <div class="process-step">
                    <figure class="process-icon">
                        <!-- <img src="{{asset('assets/img/process-icons/3.png')}}" alt="#"> -->
                        <i style="font-size: 70px; color: #20509e" class="ti-widget"></i>
                    </figure>
                    <h4>Experience Awesomeness</h4>
                    <p>Leverage on our intuitive and easy to use platform, and start scheduling Instagram/Twitter posts
                        in minutes
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Process section end -->


<!-- Fact section -->
<section class="fact-section gradient-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="fact">
                    <h2>10</h2>
                    <p>Support <br> Countries</p>
                    <i class="ti-basketball"></i>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="fact">
                    <h2>10K+</h2>
                    <p>Scheduling <br> per week</p>
                    <i class="ti-panel"></i>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="fact">
                    <h2>3K+</h2>
                    <p>Active <br> Users</p>
                    <i class="ti-stats-up"></i>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="fact">
                    <h2>2</h2>
                    <p>Years <br> of Experience</p>
                    <i class="ti-user"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fact section end -->


<!-- Review section -->
<section class="review-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 push-8">
                <img src="{{asset('assets/img/quote.png')}}" alt="" class="quote mb-5">
                <div class="review-text-slider owl-carousel">
                    <div class="review-text">
                        <p>"My favorite thing about using Noliah is how intuitive and visual the platform is.
                            Maintaining a consistent feed for us was our top priority and Noliah's grid preview was
                            exactly what we needed to organize our content. Our marketing team is spread across the US
                            and UK, so having Noliah really helped us all stay connected. .”</p>
                    </div>
                    <div class="review-text">
                        <p>"You name the social media scheduler, I've tried it. Noliah is hands down the best one out
                            there. ”</p>
                    </div>
                    <div class="review-text">
                        <p>"We've been using Noliah for a little over 2 years. The visual planner is one of the tools
                            that has helped us become more efficient and it's an important part of our marketing
                            toolkit..”</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pr-0 pull-3">
                <div class="review-meta-slider owl-carousel pt-5">
                    <div class="author-meta">
                        <div class="author-avatar set-bg" data-setbg="{{asset('assets/img/review/1.jpg')}}"></div>
                        <div class="author-name">
                            <h4>Aaron Ballance</h4>
                            <p>Social Media Manager</p>
                        </div>
                    </div>
                    <div class="author-meta">
                        <div class="author-avatar set-bg" data-setbg="{{asset('assets/img/review/2.jpg')}}"></div>
                        <div class="author-name">
                            <h4>Jackson Nash</h4>
                            <p>Social Media Manager</p>
                        </div>
                    </div>
                    <div class="author-meta">
                        <div class="author-avatar set-bg" data-setbg="{{asset('assets/img/review/3.jpg')}}"></div>
                        <div class="author-name">
                            <h4>Katy Abrams</h4>
                            <p>Social Media Strategist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Review section end -->


<!-- Newsletter section -->
<section class="newsletter-section gradient-bg">
    <div class="container text-white">
        <div class="row">
            <div class="col-lg-7 newsletter-text">
                <h2>Subscribe to our Newsletter</h2>
                <p>Sign up for our weekly industry updates, insider perspectives and in-depth market analysis.</p>
            </div>
            <div class="col-lg-5 col-md-8 offset-lg-0 offset-md-2">
                <form class="newsletter-form">
                    <input type="text" placeholder="Enter your email">
                    <button>Get Started</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter section end -->

    	<!-- Footer section -->
        @include('layouts.partial.footer')
    <!-- Footer section end -->
@endsection

