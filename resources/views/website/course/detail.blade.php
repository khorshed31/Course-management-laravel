@extends('master.front.master')

@section('title')
    Course Detail Page
@endsection

@section('body')
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">
                    <div class="col-md-3">
                        <div class="cor-top-deta cor-side-com">
                            <div class="cor-top-deta">
                                <div class="ho-st-login cor-apply field-com">
                                    <div class="col s12">
                                        <div class="de-left-tit">
                                            <h4>Enroll Our Course</h4>
                                            @if($check == true)
                                                <a class="waves-effect waves-light light-btn">Already Enrolled</a>
                                            @else
                                                <a href="{{ route('enroll-now',['id' => $subject->id]) }}" class="waves-effect waves-light light-btn">Enroll Now </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cor-side-com">
                            <div class="">
                                <div class="de-left-tit">
                                    <h4>Course Teacher</h4>
                                </div>
                            </div>
                            <div class="ho-event">
                                <ul>
                                    <li>
                                        <div class="ho-ev-link ho-ev-link-full">
                                            <a href="#">
                                                <h4>{{ $subject->teacher->name }}</h4>
                                            </a>
                                            <div><img src="{{ asset($subject->teacher->image) }}" alt="teacher" width="90%"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-center text-success"> {{ Session::get('message') }}</p>
                        <div class="cor-mid-img">
                            <img src="{{ asset($subject->image) }}" alt="">
                        </div>
                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h2>{{ $subject->title }}</h2>
                                <span>Teacher: {{ $subject->teacher->name }}</span>
                                <div class="share-btn">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cor-p4">
                                <h3>Course Fee: {{ $subject->fee }} Tk.</h3>
                                <h3>Course Short Details:</h3>
                                <div>{!! $subject->short_description !!}</div>
                            </div>
                            <div class="cor-p5">
                                <h3>Course Description</h3>
                                {!! $subject->long_description !!}
                            </div>
                        </div>
                    </div>
                    @if(!Session::get('student_id'))
                        <div class="col-md-3">
                            <div class="cor-side-com">
                                <div class="ho-ev-latest ho-ev-latest-bg-3">
                                    <div class="ho-lat-ev">
                                        <h4>Student Login</h4>
                                    </div>
                                </div>
                                <div class="ho-st-login">
                                    <div class="col s12">
                                        <form action="{{ route('new-login') }}" method="POST" class="col s12">
                                            @csrf
                                            <p class="text-center text-success">{{ Session::get('message') }}</p>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" class="validate" name="email">
                                                    <label>Student Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="password" class="validate" name="password">
                                                    <label>Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select class="validate" name="check">
                                                        <option value="0">Student</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit" value="Login" class="waves-effect waves-light light-btn">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
