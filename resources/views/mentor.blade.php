@extends('site.layouts.master')

@section('maincontent')

    <main>
        <section id="hero_in" class="cart_section">
            <div class="wrapper">
                <div class="container">
                    <div class="bs-wizard clearfix">
                        <h1>Mentor Registration Form</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="mentor_form" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Surname</label>
                                        <input type="text" name="surname" class="form-control" placeholder="Enter Surname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">School</label>
                                <input type="text" name="high_school" class="form-control" placeholder="High School">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Collage</label>
                                <input type="text" name="collage" class="form-control" placeholder="Collage">
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Major</label>
                                        <input type="text" name="major" class="form-control" placeholder="Enter GPA">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Minor</label>
                                        <input type="text" name="minor" class="form-control" placeholder="Enter SAT">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="test">Most expertise in</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Essay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Campus life
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Admission process
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        General
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Cost of living questions
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Academic climate
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            @csrf
                            @if(session()->get('message'))
                                <br>
                                <div class="reply-form__box-04 ">
                                    <div class="alert alert-success">
                                        <p>{{session()->get('message')}}</p>
                                    </div>
                                </div>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
