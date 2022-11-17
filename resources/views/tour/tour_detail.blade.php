@extends('layouts.layout')
@section("main")
    <main class="main">
        <section class="breadcrumb-banner" style="background: url('./images/sub-page.png');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="banner-content">
                            <h2>Tour List</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="./index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Tour List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-spacing details-tours">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tour-list-details wow fadeIn animated animated" style="visibility: visible;">
                            <img src="{{$t->tour_image}}" alt="" class="card-img-top" style="height: 600px; object-fit: cover">
                            <div class="tour-body">
                                <div class="tour-content">
                                    <h3>{{$t->tour_title}}</h3>
                                    <span class="tour-place">{{$t->tour_desc}}</span>
                                    <br>
                                    <hr>
                                    <span class="tour-place">Phương tiện di chuyển: <b>{{$t->tour_vehicle}}</b></span>
                                </div>
                                <div class="h-border"></div>
                                <div class="tour-tags">
                                        <span class="tour-duration"> {{$t->tour_time}} Days
                                            </span>
                                    <span class="tour-rating">
                                                        <b>⭐</b>
                                                        <b>⭐</b>
                                                        <b>⭐</b>
                                                        <b>⭐</b>
                                                        <b>⭐</b>
                                                        @php
                                                            echo(rand(10,100));
                                                        @endphp
                                                    </span>
                                    <div class="tour-tag-btn">
                                        <span class="tour-price">From ${{$t->tour_cost}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-8">
                        <div class="tours-overview">
                            <h2 class="faq-hedar">Overview</h2>
                            @php
                            echo html_entity_decode($t->tour_content)
                            @endphp
                        </div>
                        <h2 class="faq-hedar">Tour Amenities</h2>
                        <div class="blog-single-list">
                            <div class="list-item">
                                <ul>
                                    <li>
                                        <i class="fas fa-check"></i>Cruise dinner &amp; music event
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>3 Meal per day
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>Pick and drop services
                                    </li>
                                </ul>
                            </div>
                            <div class="list-item">
                                <ul>
                                    <li>
                                        <i class="fas fa-check"></i>Smoking allow
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>Valet parking
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>Visit 4 best places with group
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-details-reply">
                            <h5>One Review</h5>
                            <div class="blog-reply-wrapper">
                                <div class="blog-reply-item">
                                    <div class="blog-reply-img">
                                        <img src="{{Request::root().'/images/favicon.png'}}" alt="">
                                    </div>
                                    <div class="blog-reply-content">
                                        <h5>Nhóm 7</h5>
                                        <span class="reply-date">21 December, 2021</span>
                                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!empty($success))
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <div>
                                {{$success}}
                            </div>
                        </div>
                        @endif
                        <div class="contact-form">
                            <form action="{{route('themBook')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="id_tour" value="{{$t->id}}" class="form-control" id="your_name" placeholder="Enter your name" hidden>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="your_name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="sdt" class="form-control" id="email_address" placeholder="Enter number phone">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
