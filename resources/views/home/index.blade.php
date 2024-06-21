@extends('layouts.app')

@section('content')
    <div class="section mb-0 pt-3 pb-0" style="background-color: #F4F4F4; margin-top: 150px; overflow: visible;">
        <div class="shape-divider" data-shape="wave" data-height="150" data-outside="true" data-flip-vertical="true" data-fill="#F4F4F4"></div>
        <div class="container">
            <div class="row justify-content-center text-center mt-5">
                <div class="col-lg-6">
                    <div>
                        <h3 class="fw-bolder h1 mb-4">Graphics Designer & Frontend Developer, Based in Berlin, Germany. Since 2009.</span></h3>
                        <p class="mb-5 lead text-black-50 fw-extralight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, atque. Minus, harum porro unde quisquam! Minima vitae neque hic vel porro quidem totam.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center position-relative">
            <div class="parallax min-vh-75" style="background-image: url('{{asset('assets/images/me.jpg')}}); background-size: cover; background-position: center center;" data-bottom-top="width: 40vw" data-center-top="width: 100vw;">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-auto text-center">
                        <a href="#" class="display-4 fw-bolder text-white d-inline-block mx-4 h-op-08 op-ts"><u>#dribbble</u></a>
                        <a href="#" class="display-4 fw-bolder text-white d-inline-block mx-4 h-op-08 op-ts"><u>#behance</u></a>
                    </div>
                </div>
            </div>
            <div class="shape-divider" data-shape="wave" data-position="bottom"></div>
        </div>
    </div>

    <div class="container" style="max-width: 1000px">
        <div class="row col-mb-30 mt-5">
            <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="counter counter-xlarge text-dark fw-bolder"><span data-from="1" data-to="15" data-refresh-interval="2" data-speed="600"></span></div>
                    <span>+ Years Of<br>Experience.</span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="counter counter-xlarge text-dark fw-bolder"><span data-from="4" data-to="83" data-refresh-interval="50" data-speed="1500"></span></div>
                    <span>% of Works <br>Completed.</span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="counter counter-xlarge text-dark fw-bolder"><span data-from="5" data-to="100" data-refresh-interval="30" data-speed="1200"></span></div>
                    <span>% Satisfied<br>Customers.</span>
                </div>
            </div>
        </div>
        <div class="line line-sm mb-0"></div>
    </div>

    <div class="section bg-transparent py-5">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-lg-4">
                    <h3 class="fw-bolder h1 mb-4">What Some of my Clients Say</h3>

                    <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget mt-5" data-margin="0" data-items="1" data-pagi="true" data-nav="false">

                        <div class="oc-item">
                            <p class="position-relative font-secondary fst-normal fs-5 mb-4">Quickly redefine resource sucking web services after exceptional customer service. Professionally coordinate focused platforms before visionary architectures.</p>
                            <div class="testi-meta d-flex align-items-center">
                                <img src="{{asset('assets/images/testi/face.jpg')}}" alt="Face" width="30">
                                <div>
                                    <h4 class="h6 mb-0 fw-medium">John Doe</h4>
                                    <small class="op-05">XYZ Inc.</small>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <p class="position-relative font-secondary fst-normal fs-5 mb-4">Dramatically mesh user friendly solutions whereas sticky human capital. Assertively fashion impactful "outside the box".</p>
                            <div class="testi-meta d-flex align-items-center">
                                <img src="{{asset('assets/images/testi/face2.jpg')}}" alt="Face" width="30">
                                <div>
                                    <h4 class="h6 mb-0 fw-medium">John Doe</h4>
                                    <small class="op-05">XYZ Inc.</small>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <p class="position-relative font-secondary fst-normal fs-5 mb-4">Progressively productivate customer directed meta-services without magnetic bandwidth.</p>
                            <div class="testi-meta d-flex align-items-center">
                                <img src="{{asset('assets/images/testi/face3.jpg')}}" alt="Face" width="30">
                                <div>
                                    <h4 class="h6 mb-0 fw-medium">John Doe</h4>
                                    <small class="op-05">XYZ Inc.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{asset('assets/images/testi/bg.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div class="section m-0">
        <div class="container">
            <div class="row align-items-end justify-content-between mb-5">
                <div class="col-lg-5 offset-lg-1">
                    <div>
                        <h3 class="fw-bolder h1 mb-4">Latest Creative Works,<br>and Selected Projects</h3>
                        <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="demo-freelancer-works.html" class="button button-dark button-border rounded-pill">View All Works <i class="bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="row justify-content-center col-mb-50">
                <div class="col-lg-6 h-translatey-3 tf-ts">
                    <a href="demo-store.html" class="portfolio-item" target="_blank">
                        <div class="portfolio-image">
                            <img src="{{asset('assets/images/works/1.jpg')}}" alt="Portfoio Item">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                    <h3 class="mb-0 mt-1">Niche Demo Store</h3>
                                    <h5>Media, Icons</h5>
                                </div>
                                <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                    <div class="overlay-trigger-icon bg-dark text-white" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="bi-link-45deg"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 h-translatey-3 tf-ts">
                    <a href="demo-yoga.html" class="portfolio-item" target="_blank">
                        <div class="portfolio-image">
                            <img src="{{asset('assets/images/works/2.jpg')}}" alt="Portfoio Item">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                    <h3 class="mb-0 mt-1">Niche Demo Yoga</h3>
                                    <h5>Media, Icons</h5>
                                </div>
                                <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                    <div class="overlay-trigger-icon bg-dark text-white" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="bi-link-45deg"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 h-translatey-3 tf-ts">
                    <a href="demo-hostel.html" class="portfolio-item" target="_blank">
                        <div class="portfolio-image">
                            <img src="{{asset('assets/images/works/3.jpg')}}" alt="Portfoio Item">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                    <h3 class="mb-0 mt-1">Niche Demo Hostel</h3>
                                    <h5>Media, Icons</h5>
                                </div>
                                <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                    <div class="overlay-trigger-icon bg-dark text-white" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="bi-link-45deg"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 h-translatey-3 tf-ts">
                    <a href="demo-conference.html" class="portfolio-item" target="_blank">
                        <div class="portfolio-image">
                            <img src="{{asset('assets/images/works/4.jpg')}}" alt="Portfoio Item">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                    <h3 class="mb-0 mt-1">Niche Demo Conference</h3>
                                    <h5>Media, Icons</h5>
                                </div>
                                <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                    <div class="overlay-trigger-icon bg-dark text-white" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="bi-link-45deg"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="clear"></div>

    <div class="section bg-transparent py-5">

        <div class="container">
            <div class="row align-items-end mb-5">
                <div class="col-lg-5 offset-lg-1">
                    <h3 class="fw-bolder h1">The ways I can help you</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam minima error ducimus recusandae sed ipsam, cumque optio reiciendis nihil labore!</p>
                </div>
            </div>

            <div  class="row gutter-50 mb-5 align-items-stretch">
                <div class="col-md-4">
                    <div class="card d-flex align-items-end flex-column p-4 border-0" style="background-color: #E2E8D8;">
                        <div class="mt-5"></div>
                        <div class="mt-auto">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img src="{{asset('assets/images/icons/sketch.svg')}}" height="50" alt="Image">
                                    <img src="{{asset('assets/images/icons/xd.png')}}" height="50" alt="Image" class="ms-3">
                                </div>
                                <h3 class="card-title fw-bolder">Website Design</h3>
                                <p class="card-text mb-0 mt-2 fw-light">Objectively productivate interoperable process improvements after team building testing procedures. Distinctively architect resource-leveling portals.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card d-flex align-items-end flex-column p-4 border-0" style="background-color: #C2DFEC;">
                        <div class="mt-5"></div>
                        <div class="mt-auto">
                            <div class="card-body">
                                <img src="{{asset('assets/seo/images/icons/social.svg')}}" alt="Image" class="mb-4" height="50">
                                <h3 class="card-title fw-bolder">Responsive Website</h3>
                                <p class="card-text mb-0 mt-2 fw-light">Objectively productivate interoperable process improvements after team building testing procedures. Distinctively architect resource-leveling portals.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card d-flex align-items-end flex-column p-4 border-0" style="background-color: #FADCE4">
                        <div class="mt-5"></div>
                        <div class="mt-auto">
                            <div class="card-body">
                                <img src="{{asset('assets/images/icons/wp.png')}}" height="50" alt="Image" class="mb-4">
                                <h3 class="card-title fw-bolder">WordPress Website</h3>
                                <p class="card-text mb-0 mt-2 fw-light">Objectively productivate interoperable process improvements after team building testing procedures. Distinctively architect resource-leveling portals.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card d-flex align-items-end flex-column p-4 border-0" style="background-color: #E4E4E4">
                        <div class="mt-5"></div>
                        <div class="mt-auto">
                            <div class="card-body">
                                <img src="{{asset('assets/seo/images/icons/seo.svg')}}" height="50" alt="Image" class="mb-4">
                                <h3 class="card-title fw-bolder">SEO Optimised</h3>
                                <p class="card-text mb-0 mt-2 fw-light">Objectively productivate interoperable process improvements after team building testing procedures. Distinctively architect resource-leveling portals.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card d-flex align-items-end flex-column p-4 border-0" style="background-color: #E5E3CE;">
                        <div class="mt-5"></div>
                        <div class="mt-auto">
                            <div class="card-body">
                                <img src="{{asset('assets/images/icons/hosting.svg')}}" height="50" alt="Image" class="mb-4">
                                <h3 class="card-title fw-bolder">Web Hosting</h3>
                                <p class="card-text mb-0 mt-2 fw-light">Objectively productivate interoperable process improvements after team building testing procedures. Distinctively architect resource-leveling portals.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card d-flex align-items-end flex-column p-4 border-0" style="background-color: #C9D6CF">
                        <div class="mt-5"></div>
                        <div class="mt-auto">
                            <div class="card-body">
                                <img src="{{asset('assets/images/icons/plugins.png')}}" height="50" alt="Image" class="mb-4">
                                <h3 class="card-title fw-bolder">Plugin Development</h3>
                                <p class="card-text mb-0 mt-2 fw-light">Objectively productivate interoperable process improvements after team building testing procedures. Distinctively architect resource-leveling portals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="container mt-6">
            <div class="row align-items-end">
                <div class="col-lg-6 offset-lg-1">
                    <h3 class="fw-bolder h1">We value our relationships</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam minima error ducimus recusandae sed ipsam, cumque optio reiciendis nihil labore!</p>
                </div>
            </div>
            <div class="section rounded-10 p-6 my-4" style="background-color: #F1F1F1;">
                <div class="row justify-content-between align-items-center col-mb-50">
                    <div class="col-md-3 col-6 text-center"><img src="{{asset('assets/images/clients/amazon.svg')}}" alt="Clients"></div>
                    <div class="col-md-3 col-6 text-center"><img src="{{asset('assets/images/clients/netflix.svg')}}" alt="Clients"></div>
                    <div class="col-md-3 col-6 text-center"><img src="{{asset('assets/images/clients/google.svg')}}" alt="Clients"></div>
                    <div class="col-md-3 col-6 text-center"><img src="{{asset('assets/images/clients/paypal.svg')}}" alt="Clients"></div>
                    <div class="col-md-3 col-6 text-center"><img src="{{asset('assets/images/clients/skype.svg')}}" alt="Clients"></div>
                    <div class="col-md-3 col-6 text-center"><img src="{{asset('assets/images/clients/ps.svg')}}" alt="Clients"></div>
                    <div class="col-md-3 col-6 text-center"><img src="{{asset('assets/images/clients/slack.svg')}}" alt="Clients"></div>
                    <div class="col-md-3 col-6 text-center"><img src="{{asset('assets/images/clients/applemusic.svg')}}" alt="Clients"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section m-0" style="background: #f1efe5 url('{{asset('assets/images/bg.svg')}}) no-repeat right center; padding-top: 240px">
        <div class="shape-divider" data-shape="wave-4" data-height="150" id="shape-divider-6017"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none"><path class="shape-divider-fill" fill="#F8F7F2" d="M0 51.76c36.21-2.25 77.57-3.58 126.42-3.58 320 0 320 57 640 57 271.15 0 312.58-40.91 513.58-53.4V0H0z" opacity="0.3"></path><path class="shape-divider-fill" d="M0 24.31c43.46-5.69 94.56-9.25 158.42-9.25 320 0 320 89.24 640 89.24 256.13 0 307.28-57.16 481.58-80V0H0z" opacity="0.5"></path><path class="shape-divider-fill" d="M0 0v3.4C28.2 1.6 59.4.59 94.42.59c320 0 320 84.3 640 84.3 285 0 316.17-66.85 545.58-81.49V0z"></path></svg></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h3 class="fw-bolder h1 my-5">A few things clients<br>normally ask me</h3>
                    <div class="accordion" data-collapsible="true">

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed uil uil-plus color gradient-text gradient-red-yellow"></i>
                                <i class="accordion-open uil uil-minus color gradient-text gradient-red-yellow"></i>
                            </div>
                            <div class="accordion-title">
                                Design &amp; Development Process
                            </div>
                        </div>
                        <div class="accordion-content">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed uil uil-plus color gradient-text gradient-red-yellow"></i>
                                <i class="accordion-open uil uil-minus color gradient-text gradient-red-yellow"></i>
                            </div>
                            <div class="accordion-title">
                                What is Our Refund Policy
                            </div>
                        </div>
                        <div class="accordion-content">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

                        <div class="accordion-header" id="id-accordion-3">
                            <div class="accordion-icon">
                                <i class="accordion-closed uil uil-plus color gradient-text gradient-red-yellow"></i>
                                <i class="accordion-open uil uil-minus color gradient-text gradient-red-yellow"></i>
                            </div>
                            <div class="accordion-title">
                                Our Processing Time
                            </div>
                        </div>
                        <div class="accordion-content">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

                        <div class="accordion-header" id="id-accordion-4">
                            <div class="accordion-icon">
                                <i class="accordion-closed uil uil-plus color gradient-text gradient-red-yellow"></i>
                                <i class="accordion-open uil uil-minus color gradient-text gradient-red-yellow"></i>
                            </div>
                            <div class="accordion-title">
                                How do I Pay and Payment Method
                            </div>
                        </div>
                        <div class="accordion-content">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <img src="{{asset('assets/images/ask.svg')}}" alt="FAQs" class="px-5">
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
@endsection