@extends('master.front.master')

@section('title')
    Home Page
@endsection

@section('body')
    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="{{ asset('/') }}website/images/slider/1.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>University</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}website/images/slider/2.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Admission open <span>2018</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}website/images/slider/3.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Education <span>Master</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>

    <!-- QUICK LINKS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="wed-hom-ser">
                    <ul>
                        <li>
                            <a href="awards.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic1.png" alt=""> Academy</a>
                        </li>
                        <li>
                            <a href="admission.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic2.png" alt=""> Admission</a>
                        </li>
                        <li>
                            <a href="all-courses.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic4.png" alt=""> Courses</a>
                        </li>
                        <li>
                            <a href="seminar.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic3.png" alt=""> Seminar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Popular <span>Courses</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                @foreach($subjects as $subject)
                    <div class="col-md-6">
                        <div>
                            <!--POPULAR COURSES-->
                            <div class="home-top-cour">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-3"> <img src="{{asset($subject->image)}}" alt=""> </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-9 home-top-cour-desc">
                                    <a href="{{ route('course-detail', ['id' => $subject->id]) }}">
                                        <h3>{{ $subject->title }}</h3>
                                    </a>
                                    <figcaption class="blockquote-footer">
                                        Teacher: {{ $subject->teacher->name }}
                                    </figcaption>
                                    <div>{!! $subject->short_description !!}</div><span class="home-top-cour-rat">{{ $subject->fee }} Tk.</span>
                                    <div class="hom-list-share">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                            <li><a href="{{ route('course-detail', ['id' => $subject->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i>Details</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FOOTER COURSE BOOKING -->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                    <div class="bot-book">
                        <div class="col-md-2 bb-img">
                            <img src="images/3.png" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>therefore always free from repetition</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                        <div class="col-md-3 bb-link">
                            <a href="course-details.html">Book This Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
