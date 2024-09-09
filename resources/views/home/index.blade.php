@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Slider home
        ============================================= -->
        <div class="row justify-content-center slider-box-wrap">
            <div class="col-10">
                <div class="slider-bottom-box">
                    <div class="row align-items-center">
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <h2 class="mb-3 h1 fw-light">Workflow</h2>
                            <p class="fw-normal text-muted mb-0">Step-by-step process for a typical software development project.</p>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <ul class="iconlist m-0">
                                <li><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Requirement Gathering</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">System Analysis</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Software Design</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Module Design</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <ul class="iconlist m-0">
                                <li class="pt-3 pt-lg-0"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Software Development</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Unit Testing</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Integration Testing</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Integration Testing</li>
                                <li class="pt-3"><img src="{{asset('assets/images/svg/checked.svg')}}" width="20" height="20" alt="Image" class="me-2">Acceptance Testing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Workflow & What we do
        ============================================= -->
        <div class="heading-block text-center mt-6 mx-auto border-bottom-0" style="max-width: 700px">
            <h2>What we do.</h2>
            <p>Total solution for Shipping Lines & Logistics Company, mainly built for analyzing operational and commercial efficiency and effectivity on each voyage, and also built to monitor ship’s crews performance</p>
        </div>
        <div class="row col-mb-50 mb-0 mt-4">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box not-dark">
                    <div class="fbox-icon">
                        <img src="{{asset('assets/images/svg/web.svg')}}" class="rounded-0 bg-transparent text-start" alt="Image" style="height: 52px;">
                    </div>
                    <div class="fbox-content">
                        <h3 class="fw-medium text-dark">Business & IT Consulting</h3>
                        <p class="fw-light">Analyzing business processes to meet your business objectives by transforming them into information technology ecosystem.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box not-dark">
                    <div class="fbox-icon">
                        <img src="{{asset('assets/images/svg/cloud.svg')}}" class="rounded-0 bg-transparent text-start" alt="Image" style="height: 52px;">
                    </div>
                    <div class="fbox-content">
                        <h3 class="fw-medium text-dark">Software Development</h3>
                        <p class="fw-light">We provides comprehensive services in the field of product and software construction.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box not-dark">
                    <div class="fbox-icon">
                        <img src="{{asset('assets/images/svg/shared.svg')}}" class="rounded-0 bg-transparent text-start" alt="Image" style="height: 52px;">
                    </div>
                    <div class="fbox-content">
                        <h3 class="fw-medium text-dark">Mobile App Development</h3>
                        <p class="fw-light">Ideation, designing, and development. We provide mobile app development services for your business.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Pasai section
    ============================================= -->
    <div class="section bg-angle mt-0" style="background: #F9F9F9 url('{{asset('assets/images/pattern-dark.png')}}') repeat center center;">
        <div class="container">
            <div class="heading-block text-center mt-5 mx-auto border-bottom-0" style="max-width: 750px">
                <h2>Our product.</h2>
                <h2 class="bungee-inline-regular" style="color: #1d1d74;">PASAI</h2>
                <p>Total solution for Shipping Lines & Logistics Company, mainly built for analyzing operational and commercial efficiency and effectivity on each voyage, and also built to monitor ship’s crews performance.</p>
            </div>

            <div class="row col-mb-30">

                <div class="col-md-6">
                    <div class="feature-box p-5 media-box" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(3,27,78,.1); border: 1px solid #e5e8ed;">
                        <div class="fbox-media">
                            <img src="{{asset('assets/images/svg/ssl.svg')}}" style="width: 42px;" alt="Image">
                        </div>
                        <div class="fbox-content px-0">
                            <h3 class="ls-0">Commercial Report & Analysis</h3>
                            <h3 class="ls-0">Voyage Analysis</h3>
                            <h3 class="ls-0">Operation Report & Analysis</h3>
                            <h3 class="ls-0">Plan Maintenance System</h3>
                            <h3 class="ls-0">Double-entry Accounting & Holding Company Consolidation</h3>
                            <h3 class="ls-0">Budget Plan</h3>
                            <a href="#" class="btn btn-link mt-3 fw-normal color p-0" style="font-size: 16px;">More details <i class="bi-arrow-right position-relative" style="top: 2px"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-box p-5 media-box" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(3,27,78,.1); border: 1px solid #e5e8ed;">
                        <div class="fbox-media">
                            <img src="{{asset('assets/images/svg/team.svg')}}" style="width: 42px;" alt="Image">
                        </div>
                        <div class="fbox-content px-0">
                            <h3 class="ls-0">Purchasing</h3>
                            <h3 class="ls-0">Inventory Management System (Head office, Site, Ship)</h3>
                            <h3 class="ls-0">Bunker (Fuel) Analysis</h3>
                            <h3 class="ls-0">Human Resource Management System</h3>
                            <h3 class="ls-0">Finance</h3>
                            <h3 class="ls-0">Business Intelligence</h3>
                            <a href="#" class="btn btn-link mt-3 fw-normal color p-0" style="font-size: 16px;">More details <i class="bi-arrow-right position-relative" style="top: 2px"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-md-center mt-5">
                <div class="col-12 col-sm-9">
                    <a href="#">
                      <img src="{{asset('assets/images/dashboard-example.png')}}" class="img-thumbnail w-100 d-block">
                    </a>
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
                    <h2>Trusted by.</h2>
                    <p>Competently recaptiualize multifunctional schemas without an expanded array of niches.</p>
                </div>
                <!-- Clients Images -->
                <div class="row text-center">
                    @for ($i = 1; $i < 18; $i++)
                        <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/'.$i.'.png')}}" alt="Image" class="clients mt-5 "></a></div>
                    @endfor
                    <div class="col-sm-3 col-6"><a href="#"><img src="{{asset('assets/images/clients/injatama.jpg')}}" alt="Image" class="clients mt-5 "></a></div>
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
                    <h2 class="fw-bold text-white mb-3">Get Better Application, Website & Hosting Now. Just Consult With Link Below</h2>
                </div>
                <div class="col-md-8">
                    <a href="#" class="button text-center bg-white color button-light button-rounded button-large ms-0">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">

    <style>
        .bungee-inline-regular {
            font-family: "Bungee Inline", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 5rem !important;
        }
    </style>
@endpush