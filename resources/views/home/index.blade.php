@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Slider negetive Box
        ============================================= -->
        <div class="row justify-content-center slider-box-wrap">
            <div class="col-10">
                <div class="slider-bottom-box">
                    <div class="row align-items-center">
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <h2 class="mb-3 h1 fw-light">Features</h2>
                            <p class="fw-normal text-muted mb-0">Enthusiastically orchestrate orthogonal core competencies before processes.</p>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <ul class="iconlist m-0">
                                <li><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Assertively Fabricate.</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Distinctively disseminate.</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Appropriately predominate.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <ul class="iconlist m-0">
                                <li class="pt-3 pt-lg-0"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Competently facilitate synergist</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Front-end leadership skills.</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Infomediaries with front-end</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section
        ============================================= -->
        <div class="heading-block text-center mt-6 mx-auto border-bottom-0" style="max-width: 700px">
            <h2>We provide best services for you.</h2>
            <p>Competently recaptiualize multifunctional schemas without an expanded array of niches. Continually engage cooperative sources vis-a-vis web-enabled benefits.</p>
        </div>
        <div class="row col-mb-50 mb-0 mt-4">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box not-dark">
                    <div class="fbox-icon">
                        <img src="{{asset('assets/images/svg/web.svg')}}" class="rounded-0 bg-transparent text-start" alt="Image" style="height: 52px;">
                    </div>
                    <div class="fbox-content">
                        <h3 class="fw-medium text-dark">Web Hosting</h3>
                        <p class="fw-light">Is a type of Internet hosting service that allows individuals and organizations to make their website accessible via the World Wide Web.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box not-dark">
                    <div class="fbox-icon">
                        <img src="{{asset('assets/images/svg/cloud.svg')}}" class="rounded-0 bg-transparent text-start" alt="Image" style="height: 52px;">
                    </div>
                    <div class="fbox-content">
                        <h3 class="fw-medium text-dark">Cloud Hosting</h3>
                        <p class="fw-light">The major benefit cloud hosting offers over shared hosting is that it allows you to utilize the resources of multiple servers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box not-dark">
                    <div class="fbox-icon">
                        <img src="{{asset('assets/images/svg/dedicated.svg')}}" class="rounded-0 bg-transparent text-start" alt="Image" style="height: 52px;">
                    </div>
                    <div class="fbox-content">
                        <h3 class="fw-medium text-dark">Dedicated Hosting</h3>
                        <p class="fw-light">Dedicated server or managed hosting service is a type of Internet hosting in which the client leases an entire server not shared.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box not-dark">
                    <div class="fbox-icon">
                        <img src="{{asset('assets/images/svg/shared.svg')}}" class="rounded-0 bg-transparent text-start" alt="Image" style="height: 52px;">
                    </div>
                    <div class="fbox-content">
                        <h3 class="fw-medium text-dark">Shared Hosting</h3>
                        <p class="fw-light">Shared Web Hosting service refers to a web hosting service where many websites reside on one web server connected to the Internet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box not-dark">
                    <div class="fbox-icon">
                        <img src="{{asset('assets/images/svg/domain.svg')}}" class="rounded-0 bg-transparent text-start" alt="Image" style="height: 52px;">
                    </div>
                    <div class="fbox-content">
                        <h3 class="fw-medium text-dark">Domain Registration</h3>
                        <p class="fw-light">Shared Web Hosting service refers to a web hosting service where many websites reside on one web server connected to the Internet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box not-dark">
                    <div class="fbox-icon">
                        <img src="{{asset('assets/images/svg/activation.svg')}}" class="rounded-0 bg-transparent text-start" alt="Image" style="height: 52px;">
                    </div>
                    <div class="fbox-content">
                        <h3 class="fw-medium text-dark">Instant Activation</h3>
                        <p class="fw-light">Shared Web Hosting service refers to a web hosting service where many websites reside on one web server connected to the Internet.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Domain Section
    ============================================= -->
    <div class="section section-domain mt-4 mb-3" style="background: #F5F5F5 url('{{asset('assets/images/pattern-dark.png')}}') repeat center center;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5">
                    <div class="heading-block mb-0 border-bottom-0">
                        <h3 class="ls-0 text-transform-none">Looking For Your Premium Domain?</h3>
                        <p class="mb-0">Competently recaptiualize multifunctional schemas without an expanded array of niches. Continually engage cooperative.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-lg-0">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control w-auto" placeholder="Your New Domain Name" aria-label="Enter Domain Name">
                        <select class="form-select" id="inputGroupSelect01">
                            <option value="com" selected>.com</option>
                            <option value="org">.org</option>
                            <option value="net">.net</option>
                            <option value="info">.info</option>
                            <option value="us">.us</option>
                        </select>
                        <button class="btn bg-color text-white dark">Search</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Loaction Section
    ============================================= -->
    <div class="section m-0 bg-transparent">
        <div class="container">
            <div class="heading-block text-center mt-0 mx-auto border-bottom-0" style="max-width: 700px">
                <h2>We provide best services for you.</h2>
                <p>Competently recaptiualize multifunctional schemas without an expanded array of niches. Continually engage cooperative sources vis-a-vis web-enabled benefits.</p>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="heading-block mt-md-3 mt-0">
                        <div class="before-heading color">Our Network</div>
                        <h3 class=" text-transform-none ls-0">16 TBPS Capacity and 140 Data Center Global Network</h3>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <ul class="iconlist ms-0">
                                <li><img src="{{asset('assets/images/flags/uk.png')}}" alt="Image"><a href="#">United Kingdom</a></li>
                                <li><img src="{{asset('assets/images/flags/us.png')}}" alt="Image"><a href="#">USA</a></li>
                                <li><img src="{{asset('assets/images/flags/br.png')}}" alt="Image"><a href="#">Brazil</a></li>
                                <li><img src="{{asset('assets/images/flags/sa.png')}}" alt="Image"><a href="#">South Africa</a></li>
                                <li><img src="{{asset('assets/images/flags/in.png')}}" alt="Image"><a href="#">India</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="iconlist ms-0">
                                <li><img src="{{asset('assets/images/flags/si.png')}}" alt="Image"><a href="#">Singapore</a></li>
                                <li><img src="{{asset('assets/images/flags/ja.png')}}" alt="Image"><a href="#">Japan</a></li>
                                <li><img src="{{asset('assets/images/flags/au.png')}}" alt="Image"><a href="#">Australia</a></li>
                                <li><img src="{{asset('assets/images/flags/ca.png')}}" alt="Image"><a href="#">Canada</a></li>
                                <li><a href="#">See More..</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div id="hotspot-img" class="hotspot-img mt-2 responsive-hotspot-wrap">
                <img src="{{asset('assets/images/svg/map.png')}}" class="img-responsive" alt="Image">

                <!-- Circle #1 -->
                <div class="hot-spot" data-x="1970" data-y="830">
                    <div class="circle"></div>
                    <div class="tooltip"><p>singapore</p></div>
                </div>
                <!-- Circle #2 -->
                <div class="hot-spot" data-x="330" data-y="522">
                    <div class="circle"></div>
                    <div class="tooltip"><p>San Fransisco</p></div>
                </div>
                <!-- Circle #3 -->
                <div class="hot-spot" data-x="2350" data-y="1110">
                    <div class="circle"></div>
                    <div class="tooltip"><p>Sydney</p></div>
                </div>
                <!-- Circle #4 -->
                <div class="hot-spot" data-x="1222" data-y="395">
                    <div class="circle"></div>
                    <div class="tooltip"><p>London</p></div>
                </div>
                <!-- Circle #5 -->
                <div class="hot-spot" data-x="1800" data-y="760">
                    <div class="circle"></div>
                    <div class="tooltip"><p>Bangalore</p></div>
                </div>
                <!-- Circle #6 -->
                <div class="hot-spot" data-x="2250" data-y="560">
                    <div class="circle"></div>
                    <div class="tooltip"><p>Tokyo</p></div>
                </div>
                <!-- Circle #7 -->
                <div class="hot-spot" data-x="1366" data-y="1134">
                    <div class="circle"></div>
                    <div class="tooltip"><p>Cape Town</p></div>
                </div>
                <!-- Circle #8 -->
                <div class="hot-spot" data-x="880" data-y="990">
                    <div class="circle"></div>
                    <div class="tooltip"><p>Brasilla</p></div>
                </div>
                <!-- Circle #8 -->
                <div class="hot-spot" data-x="710" data-y="395">
                    <div class="circle"></div>
                    <div class="tooltip"><p>Toronto</p></div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section
    ============================================= -->
    <div class="section bg-angle mt-0" style="background: #F9F9F9 url('{{asset('assets/images/pattern-dark.png')}}') repeat center center;">
        <div class="container">
            <div class="heading-block text-center mt-5 mx-auto border-bottom-0" style="max-width: 750px">
                <h2>Hosting that scales with your Business</h2>
                <p>Competently recaptiualize multifunctional schemas without an expanded array of niches. Continually engage cooperative sources vis-a-vis web-enabled benefits.</p>
            </div>

            <div class="row mb-2 align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="row align-items-stretch g-4">
                        <div class="col-md-12">
                            <!-- vCPU Section -->
                            <div class="row align-items-stretch g-4">
                                <div class="col-md-8 col-sm-8">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="mb-4">vCPU</h4>
                                            </div>
                                            <!-- CPU Slider
                                            ============================================= -->
                                            <input class="range-slider-cpu">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 d-none d-sm-flex card bg-transparent border-0 text-center mb-4">
                                    <div class="card-body bg-color text-white rounded">
                                        <!-- CPU Price Value
                                        ============================================= -->
                                        <h2 class="cpu-price text-white mb-0 fw-bold"></h2>
                                        <p class="card-text mb-0" style="opacity: .8;">$10 <span class="fst-italic">per Core/vCPU</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- RAM Section -->
                            <div class="row align-items-stretch">
                                <div class="col-md-8 col-sm-8">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="mb-4">Ram</h4>
                                            </div>
                                            <!-- RAM Slider
                                            ============================================= -->
                                            <input class="range-slider-ram">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 d-none d-sm-flex card bg-transparent border-0 text-center mb-4">
                                    <div class="card-body bg-color text-white rounded">
                                        <!-- RAM Proce Value
                                        ============================================= -->
                                        <h2 class="ram-price text-white mb-0 fw-bold"></h2>
                                        <p class="card-text mb-0" style="opacity: .8;">$8 <span class="fst-italic">per GB/RAM</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Storage Section -->
                            <div class="row align-items-stretch">
                                <div class="col-md-8 col-sm-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="mb-4">Storage</h4>
                                            </div>
                                            <!-- Storage Slider
                                            ============================================= -->
                                            <input class="range-slider-storage">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 d-none d-sm-flex card bg-transparent border-0 text-center">
                                    <div class="card-body bg-color text-white rounded">
                                        <!-- Storage Price Value
                                        ============================================= -->
                                        <h2 class="storage-price text-white mb-0 fw-bold"></h2>
                                        <p class="card-text mb-0" style="opacity: .8;">$0.5 <span class="fst-italic">per GB/Storage</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Price Area -->
                <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                    <div class="card text-center">
                        <div class="card-body py-4">
                            <h3 class="card-title fw-normal">Your Plan</h3>
                            <!-- Price Value -->
                            <div class="pricing-price fw-semibold py-2"></div>
                            <p class="card-text pricing-sub">Billed Monthly</p>
                        </div>
                        <div class="line my-1"></div>
                        <div class="card-body py-4">
                            <ul class="iconlist d-flex flex-column align-items-center" style="opacity: .8">
                                <li>Un-Mitered Bandwith</li>
                                <li>2 Dedicated IPs</li>
                                <li>Shared SSL certificate</li>
                                <li>30 Days Money Back</li>
                            </ul>
                            <a href="#" class="button button-rounded button-large ls-0 fw-normal m-0 text-transform-none">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-6">
                <div class="col-lg-3 col-sm-6">
                    <h4 class="fw-medium mb-3">Free Includes:</h4>
                    <ul class="iconlist price-compare mb-2">
                        <li><a href="#" class="fw-light">Unmetered Mitigation of DDoS</a></li>
                        <li><a href="#" class="fw-light">Global CDN</a></li>
                        <li><a href="#" class="fw-light">Shared SSL certificate</a></li>
                        <li><a href="#" class="fw-light">I'm Under Attack™ mode</a></li>
                        <li><a href="#" class="fw-light">Access to account Audit Logs</a></li>
                    </ul>
                    <a href="#" class="btn btn-link mt-2 fw-normal color p-0" style="font-size: 14px">All Features &#8250;</a>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4 mt-sm-0">
                    <h4 class="fw-medium mb-3">Pro Includes:</h4>
                    <ul class="iconlist price-compare mb-2">
                        <li><a href="#" class="fw-light">100 GB of disk space</a></li>
                        <li><a href="#" class="fw-light">1000 GB/mo data transfer</a></li>
                        <li><a href="#" class="fw-light">1 domain + 100 subdomains</a></li>
                        <li><a href="#" class="fw-light">10 site pages</a></li>
                        <li><a href="#" class="fw-light">5 email addresses</a></li>
                        <li><a href="#" class="fw-light">Site design tools</a></li>
                        <li><a href="#" class="fw-light">Account access for colleagues/friends</a></li>
                    </ul>
                    <a href="#" class="btn btn-link mt-2 fw-normal color p-0" style="font-size: 14px">All Features &#8250;</a>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                    <h4 class="fw-medium mb-3">Business Includes:</h4>
                    <ul class="iconlist price-compare mb-2">
                        <li><a href="#" class="fw-light">Unlimited site pages</a></li>
                        <li><a href="#" class="fw-light">10 email addresses</a></li>
                        <li><a href="#" class="fw-light">500 GB of disk space</a></li>
                        <li><a href="#" class="fw-light">5000 GB/mo data transfer</a></li>
                        <li><a href="#" class="fw-light">1 domain + 500 subdomains</a></li>
                        <li><a href="#" class="fw-light">Secure FTP File Manager</a></li>
                        <li><a href="#" class="fw-light">Canvas blogging</a></li>
                        <li><a href="#" class="fw-light">PHP 5.3.6, Perl 5.8.7, MySQL 5.1</a></li>
                    </ul>
                    <a href="#" class="btn btn-link mt-2 fw-normal color p-0" style="font-size: 14px">All Features &#8250;</a>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                    <h4 class="fw-medium mb-3">Advanced Includes:</h4>
                    <ul class="iconlist price-compare mb-2">
                        <li><a href="#" class="fw-light">20 email addresses</a></li>
                        <li><a href="#" class="fw-light">Unlimited disk space</a></li>
                        <li><a href="#" class="fw-light">Unlimited data transfer</a></li>
                        <li><a href="#" class="fw-light">Private registration</a></li>
                        <li><a href="#" class="fw-light">Named solution and customer success engineers
                        Access to China data centers (additional cost)</a></li>
                        <li><a href="#" class="fw-light">30-day satisfaction guarantee</a></li>
                        <li><a href="#" class="fw-light">24/7 phone, chat and online support</a></li>

                    </ul>
                    <a href="#" class="btn btn-link mt-2 fw-normal color p-0" style="font-size: 14px">All Features &#8250;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Addition Service Section
    ============================================= -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="before-heading">Other Additional Services</div>
                <h3>Highly Available Services</h3>
                <div class="row col-mb-30">
                    <div class="col-md-6">
                        <div class="feature-box p-5 media-box" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(3,27,78,.1); border: 1px solid #e5e8ed;">
                            <div class="fbox-media">
                                <img src="{{asset('assets/images/svg/balancing.svg')}}" style="width: 42px;" alt="Image">
                            </div>
                            <div class="fbox-content px-0">
                                <h3 class="ls-0">Load Balancing</h3>
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita sint explicabo quis at voluptatum autem, cupiditate officiis maxime deserunt soluta! consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-link mt-3 fw-normal color p-0" style="font-size: 16px;">$15/month for Load Balancing <i class="bi-arrow-right position-relative" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box p-5 media-box" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(3,27,78,.1); border: 1px solid #e5e8ed;">
                            <div class="fbox-media">
                                <img src="{{asset('assets/images/svg/location.svg')}}" style="width: 42px;" alt="Image">
                            </div>
                            <div class="fbox-content px-0">
                                <h3 class="ls-0">Location Zone</h3>
                                <p class="mt-2">Distinctively enhance front-end outsourcing after cross-platform synergy. Interactively implement an expanded array of collaboration and idea-sharing and innovative bandwidth.</p>
                                <a href="#" class="btn btn-link mt-3 fw-normal color p-0" style="font-size: 16px;">$5/month for Location <i class="bi-arrow-right position-relative" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box p-5 media-box" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(3,27,78,.1); border: 1px solid #e5e8ed;">
                            <div class="fbox-media">
                                <img src="{{asset('assets/images/svg/ssl.svg')}}" style="width: 42px;" alt="Image">
                            </div>
                            <div class="fbox-content px-0">
                                <h3 class="ls-0">Dedicated SSL Certificate</h3>
                                <p class="mt-2">Assertively harness stand-alone communities through front-end networks. Globally engage plug-and-play sources through multidisciplinary portals. Enthusiastically synergize orthogonal.</p>
                                <a href="#" class="btn btn-link mt-3 fw-normal color p-0" style="font-size: 16px;">$7/month for SSL Certificate <i class="bi-arrow-right position-relative" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box p-5 media-box" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(3,27,78,.1); border: 1px solid #e5e8ed;">
                            <div class="fbox-media">
                                <img src="{{asset('assets/images/svg/team.svg')}}" style="width: 42px;" alt="Image">
                            </div>
                            <div class="fbox-content px-0">
                                <h3 class="ls-0">Team Accounts</h3>
                                <p class="mt-2">Uniquely harness prospective information through long-term high-impact portals. Rapidiously enable principle-centered users rather than inexpensive sources. Distinctively enhance front-end outsourcing.</p>
                                <a href="#" class="btn btn-link mt-3 fw-normal color p-0" style="font-size: 16px;">$4/month for Team <i class="bi-arrow-right position-relative" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>

    <!-- Testimonials Section
    ============================================= -->
    <div class="section">
        <div class="container">

            <div class="heading-block text-center mt-2 mb-3 mx-auto border-bottom-0" style="max-width: 700px">
                <div class="before-heading">See what Our Customers say</div>
                <h2>3,583 Happy Users &amp; Counting</h2>
            </div>

            <!-- Owl Carousel
            ============================================= -->
            <div id="oc-testimonials" class="owl-carousel text-center testimonials-carousel carousel-widget mt-5" data-margin="0" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="2" data-items-xl="3" data-center="true" data-loop="true" data-autoplay="4000" data-speed="500">

                <!-- Item 1 -->
                <div class="oc-item">
                    <div class="card rounded-6 shadow-sm overflow-hidden">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-12">
                                    <img class="rounded-circle d-inline-block w-auto" src="{{asset('assets/images/users/1.jpg')}}" width="64" height="64" alt="Customer Testimonails">

                                    <ul class="list-unstyled ms-0 mt-4 mb-3">
                                        <li class="color">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-half"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <p class="mb-4 font-primary fst-normal">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
                                    <h4 class="h6 mb-0 fw-bold">John Doe</h4>
                                    <small class="text-muted">XYZ Inc.</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-icon bi-quote op-02"></div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="oc-item">
                    <div class="card rounded-6 shadow-sm overflow-hidden">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-12">
                                    <img class="rounded-circle d-inline-block w-auto" src="{{asset('assets/images/users/2.jpg')}}" width="64" height="64" alt="Customer Testimonails">

                                    <ul class="list-unstyled ms-0 mt-4 mb-3">
                                        <li class="color">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <p class="mb-4 font-primary fst-normal">Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <h4 class="h6 mb-0 fw-bold">Collis Ta'eed</h4>
                                    <small class="text-muted">Envato Inc.</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-icon bi-quote op-02"></div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="oc-item">
                    <div class="card rounded-6 shadow-sm overflow-hidden">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-12">
                                    <img class="rounded-circle d-inline-block w-auto" src="{{asset('assets/images/users/5.jpg')}}" width="64" height="64" alt="Customer Testimonails">

                                    <ul class="list-unstyled ms-0 mt-4 mb-3">
                                        <li class="color">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <p class="mb-4 font-primary fst-normal">Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
                                    <h4 class="h6 mb-0 fw-bold">Mary Jane</h4>
                                    <small class="text-muted">Google Inc.</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-icon bi-quote op-02"></div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="oc-item">
                    <div class="card rounded-6 shadow-sm overflow-hidden">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-12">
                                    <img class="rounded-circle d-inline-block w-auto" src="{{asset('assets/images/users/4.jpg')}}" width="64" height="64" alt="Customer Testimonails">

                                    <ul class="list-unstyled ms-0 mt-4 mb-3">
                                        <li class="color">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <p class="mb-4 font-primary fst-normal">Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                    <h4 class="h6 mb-0 fw-bold">Steve Jobs</h4>
                                    <small class="text-muted">Apple Inc.</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-icon bi-quote op-02"></div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="oc-item">
                    <div class="card rounded-6 shadow-sm overflow-hidden">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-12">
                                    <img class="rounded-circle d-inline-block w-auto" src="{{asset('assets/images/users/3.jpg')}}" width="64" height="64" alt="Customer Testimonails">

                                    <ul class="list-unstyled ms-0 mt-4 mb-3">
                                        <li class="color">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <p class="mb-4 font-primary fst-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
                                    <h4 class="h6 mb-0 fw-bold">Jamie Morrison</h4>
                                    <small class="text-muted">Adobe Inc.</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-icon bi-quote op-02"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Trusted Client Section
    ============================================= -->
    <div class="section mt-3 mb-4 pt-0 bg-transparent">
        <div class="container">
            <div class="mx-auto" style="max-width: 1000px">
                <div class="heading-block text-center mx-auto border-bottom-0" style="max-width: 700px">
                    <div class="before-heading">Already with Us</div>
                    <h2>Trusted By</h2>
                    <p>Competently recaptiualize multifunctional schemas without an expanded array of niches. Continually engage cooperative sources vis-a-vis web-enabled benefits.</p>
                </div>
                <!-- Clients Images -->
                <div class="row text-center">
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/1.png')}}" alt="Image" class="clients"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/2.png')}}" alt="Image" class="clients"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/3.png')}}" alt="Image" class="clients mt-5 mt-sm-0"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/4.png')}}" alt="Image" class="clients mt-5 mt-sm-0"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/5.png')}}" alt="Image" class="clients mt-5"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/6.png')}}" alt="Image" class="clients mt-5"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/7.png')}}" alt="Image" class="clients mt-5"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/8.png')}}" alt="Image" class="clients mt-5"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/9.png')}}" alt="Image" class="clients mt-5"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/10.png')}}" alt="Image" class="clients mt-5"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/11.png')}}" alt="Image" class="clients mt-5"></a></div>
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/12.png')}}" alt="Image" class="clients mt-5"></a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Section
    ============================================= -->
    <div class="section bg-color dark m-0">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold text-white mb-3">Get Better Hosting Now. Try Free for 10 days.</h2>
                </div>
                <div class="col-md-8">
                    <a href="#" class="button text-center bg-white color button-light button-rounded button-large ms-0">Sign Up for free</a>
                </div>
            </div>
        </div>
    </div>
@endsection