@extends('forntend.layout.main')

@section('content')

    <!--
    Welcome Slider
    ==================================== -->

    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-4 mb-lg-0">
                    <div class="video-player">
                        <img class="img-fluid rounded" src="{{ asset('fornt_assets/images/slider/slider-bg-2.jpg') }}"
                            alt="">
                        <a class="play-icon">
                            <i class="tf-ion-ios-play" data-video="https://www.youtube.com/embed/g3-VxLQO7do?autoplay=1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="block">
                        <h2>Bitcoin is a remarkable cryptographic achievement</h2>
                        <p>The ability to create something which is not duplicable in the digital world has enormous
                            value…Lot’s of people will build businesses on top of that.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a data-scroll href="#services" class="btn btn-main">Explore Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-3">
                    <div class="counters-item">
                        <span>$50B+</span>
                        <p>Bitcoin Served</p>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="counters-item">
                        <span>10M+</span>
                        <p>Server Build</p>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="counters-item">
                        <span>68</span>
                        <p>Countries Supported</p>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="counters-item kill-border">
                        <span>10B</span>
                        <p>Active Treades</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
    Start About Section
    ==================================== -->
    <section class="about-2 section bg-gray" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 align-self-center mb-4 mb-md-0">
                    <div class="align-self-center">
                        <h2>A New Kind of Digital Currency to change the world what we think</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae deleniti ipsa labore
                            necessitatibus culpa veritatis quo accusantium, neque enim ea ad eaque iure, quas tempore velit,
                            quibusdam dolor illo! Explicabo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quisquam maiores iste soluta,
                            nihil dolorem?</p>
                        <a href="#" class="btn btn-main">Learn More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div id="myDiv" class="bitcoin-graph">
                        <p>Bitcoin graphs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services section-xs" id="services">
        <div class="container">
            <div class="row">
                <!-- Single Service Item -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block color-bg text-center">
                        <div class="service-icon text-center">
                            <img src="{{ asset('fornt_assets/images/icons/bitcoin-safety-shield.png') }}" alt="">
                        </div>
                        <h3>Easy & Secure</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus.
                            Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <img src="{{ asset('fornt_assets/images/icons/bitcoin-exchange.png') }}" alt="">
                        </div>
                        <h3>Instant Exchange</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus.
                            Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-md-4 col-sm-6 col-xs-12 mx-auto">
                    <div class="service-block color-bg text-center">
                        <div class="service-icon text-center">
                            <img src="{{ asset('fornt_assets/images/icons/bitcoin-network.png') }}" alt="">
                        </div>
                        <h3>Strong Network</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus.
                            Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <!-- Single Service Item -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block color-bg text-center">
                        <div class="service-icon text-center">
                            <img src="{{ asset('fornt_assets/images/icons/bitcoin-safety-shield.png') }}" alt="">
                        </div>
                        <h3>Easy & Secure</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus.
                            Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
                <!-- Single Service Item -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block color-bg text-center">
                        <div class="service-icon text-center">
                            <img src="{{ asset('fornt_assets/images/icons/bitcoin-safety-shield.png') }}" alt="">
                        </div>
                        <h3>Easy & Secure</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus.
                            Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
                <!-- Single Service Item -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block color-bg text-center">
                        <div class="service-icon text-center">
                            <img src="{{ asset('fornt_assets/images/icons/bitcoin-safety-shield.png') }}" alt="">
                        </div>
                        <h3>Easy & Secure</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus.
                            Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->




    <!--
    Start About Section
    ==================================== -->
    <section class="service-2 section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title text-center">
                        <h4>Bitcoin flow</h4>
                        <h2>How It Works</h2>
                        <span class="border"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque,
                            obcaecati atque sit!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 p-0">
                    <div class="service-item text-center">
                        <span class="count">1.</span>
                        <h4>Sign Up</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
                    </div>
                </div>
                <div class="col-md-4 p-0">
                    <div class="service-item text-center">
                        <span class="count">2.</span>
                        <h4>Connect</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
                    </div>
                </div>
                <div class="col-md-4 p-0">
                    <div class="service-item text-center">
                        <span class="count">3.</span>
                        <h4>Buy Digital Currency</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!--
    Start Call To Action
    ==================================== -->
    <section class="call-to-action section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Open account for free and start trading Bitcoins now!</h2>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit
                        consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
                    <a href="" class="btn btn-main">Get Started</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!-- Start Pricing section
      =========================================== -->
    <section class="pricing-table section" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title text-center">
                        <h4>Easy Pricing</h4>
                        <h2>Pricing.</h2>
                        <span class="border"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque,
                            obcaecati atque sit!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="nav nav-pills mb-6 pricing-tab justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="true">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Sell</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="pricing-item">
                                        <h3>Get 0.112 ETH</h3>
                                        <div class="pricing-body">
                                            <div class="price">
                                                <span>€803</span>
                                                <span class="sup">95</span>
                                            </div>
                                            <div class="progress" data-percent="45%">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <p>You get 0.0364727 Bitcoins</p>
                                            <a class="btn btn-main" href="#">Buy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="pricing-item">
                                        <h3>Get 0.112 ETH</h3>
                                        <div class="pricing-body">
                                            <div class="price">
                                                <span>€283</span>
                                                <span class="sup">15</span>
                                            </div>
                                            <div class="progress" data-percent="60%">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <p>You get 0.0364727 Bitcoins</p>
                                            <a class="btn btn-main" href="#">Buy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="pricing-item">
                                        <h3>Get 0.112 ETH</h3>
                                        <div class="pricing-body">
                                            <div class="price">
                                                <span>€122</span>
                                                <span class="sup">00</span>
                                            </div>
                                            <div class="progress" data-percent="75%">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <p>You get 0.0364727 Bitcoins</p>
                                            <a class="btn btn-main" href="#">Buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="pricing-item">
                                        <h3>Get 0.112 ETH</h3>
                                        <div class="pricing-body">
                                            <div class="price">
                                                <span>€803</span>
                                                <span class="sup">95</span>
                                            </div>
                                            <div class="progress" data-percent="45%">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <p>You get 0.0364727 Bitcoins</p>
                                            <a class="btn btn-main" href="#">Sell</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="pricing-item">
                                        <h3>Get 0.112 ETH</h3>
                                        <div class="pricing-body">
                                            <div class="price">
                                                <span>€283</span>
                                                <span class="sup">15</span>
                                            </div>
                                            <div class="progress" data-percent="60%">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <p>You get 0.0364727 Bitcoins</p>
                                            <a class="btn btn-main" href="#">Sell</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="pricing-item">
                                        <h3>Get 0.112 ETH</h3>
                                        <div class="pricing-body">
                                            <div class="price">
                                                <span>€122</span>
                                                <span class="sup">00</span>
                                            </div>
                                            <div class="progress" data-percent="75%">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <p>You get 0.0364727 Bitcoins</p>
                                            <a class="btn btn-main" href="#">Sell</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-pricing text-center mt-30">
                        <p>The price will be recalculated in 27 seconds</p>
                        <p><a href="">How is the price calculated ?</a></p>
                    </div>
                </div>
            </div>
            <form class="custom-pricing-form">
                <h3 class="text-center">You can also input a custom amount:</h3>
                <div class="form-row justify-content-center">
                    <div class="col-md-4">
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="BTC">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control mb-2" id="inlineFormInput2" placeholder="USD">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-main mb-2">Buy</button>
                    </div>
                </div>
            </form>
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!-- Start Testimonial
    =========================================== -->

    <section class="testimonial section" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- testimonial wrapper -->
                    <div class="testimonial-slider">
                        <!-- testimonial single -->
                        <div class="item">
                            <div class="block">
                                <!-- client info -->
                                <div class="client-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dicta eius, nesciunt
                                        laboriosam cumque odio veritatis hic quibusdam, impedit corporis libero tenetur
                                        blanditiis rem maiores mollitia, vero officiis nulla molestias.</p>
                                </div>
                                <!-- /client info -->
                                <!-- client photo -->
                                <div class="media client-meta">
                                    <img class="mr-3 client-thumb"
                                        src="{{ asset('fornt_assets/images/client-logo/clients-1.jpg') }}"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h4 class="mt-0">Matt Cutts</h4>
                                        <p>CEO, Themefisher</p>
                                    </div>
                                </div>

                                <!-- /client photo -->
                            </div>
                        </div>
                        <!-- /testimonial single -->
                        <!-- testimonial single -->
                        <div class="item">
                            <div class="block">
                                <!-- client info -->
                                <div class="client-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dicta eius, nesciunt
                                        laboriosam cumque odio veritatis hic quibusdam, impedit corporis libero tenetur
                                        blanditiis rem maiores mollitia, vero officiis nulla molestias.</p>
                                </div>
                                <!-- /client info -->
                                <!-- client photo -->
                                <div class="media client-meta">
                                    <img class="mr-3 client-thumb"
                                        src="{{ asset('fornt_assets/images/client-logo/clients-1.jpg') }}"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h4 class="mt-0">Matt Cutts</h4>
                                        <p>CEO, Themefisher</p>
                                    </div>
                                </div>

                                <!-- /client photo -->
                            </div>
                        </div>
                        <!-- /testimonial single -->
                        <!-- testimonial single -->
                        <div class="item">
                            <div class="block">
                                <!-- client info -->
                                <div class="client-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dicta eius, nesciunt
                                        laboriosam cumque odio veritatis hic quibusdam, impedit corporis libero tenetur
                                        blanditiis rem maiores mollitia, vero officiis nulla molestias.</p>
                                </div>
                                <!-- /client info -->
                                <!-- client photo -->
                                <div class="media client-meta">
                                    <img class="mr-3 client-thumb"
                                        src="{{ asset('fornt_assets/images/client-logo/clients-1.jpg') }}"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h4 class="mt-0">Matt Cutts</h4>
                                        <p>CEO, Themefisher</p>
                                    </div>
                                </div>

                                <!-- /client photo -->
                            </div>
                        </div>
                        <!-- /testimonial single -->
                        <!-- testimonial single -->
                        <div class="item">
                            <div class="block">
                                <!-- client info -->
                                <div class="client-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dicta eius, nesciunt
                                        laboriosam cumque odio veritatis hic quibusdam, impedit corporis libero tenetur
                                        blanditiis rem maiores mollitia, vero officiis nulla molestias.</p>
                                </div>
                                <!-- /client info -->
                                <!-- client photo -->
                                <div class="media client-meta">
                                    <img class="mr-3 client-thumb"
                                        src="{{ asset('fornt_assets/images/client-logo/clients-1.jpg') }}"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h4 class="mt-0">Matt Cutts</h4>
                                        <p>CEO, Themefisher</p>
                                    </div>
                                </div>

                                <!-- /client photo -->
                            </div>
                        </div>
                        <!-- /testimonial single -->
                        <!-- testimonial single -->
                        <div class="item">
                            <div class="block">
                                <!-- client info -->
                                <div class="client-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dicta eius, nesciunt
                                        laboriosam cumque odio veritatis hic quibusdam, impedit corporis libero tenetur
                                        blanditiis rem maiores mollitia, vero officiis nulla molestias.</p>
                                </div>
                                <!-- /client info -->
                                <!-- client photo -->
                                <div class="media client-meta">
                                    <img class="mr-3 client-thumb"
                                        src="{{ asset('fornt_assets/images/client-logo/clients-1.jpg') }}"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h4 class="mt-0">Matt Cutts</h4>
                                        <p>CEO, Themefisher</p>
                                    </div>
                                </div>

                                <!-- /client photo -->
                            </div>
                        </div>
                        <!-- /testimonial single -->
                    </div>
                </div> <!-- end col lg 12 -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End Section -->

    <!--
    Start Blog Section
    =========================================== -->
    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title text-center">
                        <h4>Our untold story</h4>
                        <h2>Bitcoin Knowledge Base.</h2>
                        <span class="border"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque,
                            obcaecati atque sit!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single blog post -->
                <article class="col-12 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <img class="img-fluid shadow rounded" src="{{ asset('fornt_assets/images/blog/post-1.jpg') }}"
                                alt="Generic placeholder image">
                        </div>
                        <div class="post-title">
                            <h3 class="mt-0"><a href="">Ten things about Business</a></h3>
                        </div>
                        <div class="post-meta">
                            <span>By</span> <a href="" class="">Jonathon Ive</a>
                        </div>
                        <div class="post-content">
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                                ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit. Est voluptatem accusantium dolorum, maxime eos
                                blanditiis sint enim necessitatibus placeat dolor.</p>
                        </div>
                        <a class="btn btn-main" href="#">Read more</a>
                    </div>
                </article>
                <!-- /single blog post -->

                <!-- single blog post -->
                <article class="col-12 col-md-6">
                    <div class="post-item">
                        <div class="post-thumb">
                            <img class="img-fluid shadow rounded" src="{{ asset('fornt_assets/images/blog/post-2.jpg') }}"
                                alt="Generic placeholder image">
                        </div>
                        <div class="post-title">
                            <h3 class="mt-0"><a href="">Something I need to tell you</a></h3>
                        </div>
                        <div class="post-meta">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span>By</span> <a href="" class="">Jonathon Ive</a>
                                </li>
                                <li class="list-inline-item">
                                    <span>By</span> <span> 15th December 2017</span>
                                </li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                                ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit. Est voluptatem accusantium dolorum, maxime eos
                                blanditiis sint enim necessitatibus placeat dolor.</p>
                        </div>
                        <a class="btn btn-main" href="#">Read more</a>
                    </div>
                </article>
                <!-- end single blog post -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->


    <!--
    Start Call To Action
    ==================================== -->
    <section class="call-to-action section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Open account for free and start trading Bitcoins now!</h2>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit
                        consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
                    <a href="" class="btn btn-main">Get Started</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

@endsection
