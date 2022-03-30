@extends('master.front.master')

@section('title')
    Enroll Page
@endsection

@section('body')
    <section class="c-all h-quote">
        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="all-title quote-title qu-new">
                    <h2>Enroll Our Course</h2>
                    <p></p>
                    <p></p>
                    <p class="help-line">Help Line <span>+880 1234 56789</span> </p> <span class="help-arrow pulse"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">
                        <form action="{{ route('new-enroll',['id' => $id]) }}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-3">Student Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Mobile:</label>
                                <div class="col-sm-9">
                                    <input type="number" name="mobile" class="form-control" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Email Id:</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                                </div>
                            </div>
                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="APPLY NOW" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


