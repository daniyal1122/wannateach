
@extends('layouts.app')

@section('content')




<div class="container user-type-page ng-scope" ng-controller="userTypePageController">
        <div class="row m-lg-top m-xlg-bottom">
            <div class="col-md-12 m-lg-bottom">
                <hgroup class="text-center">
                    <h1 class="m-xs-top-bottom">Let's get started!</h1>
                    <h1 class="m-xs-top-bottom">First, tell us what you're looking for.</h1>
                </hgroup>
            </div>

            <div class="m-lg-bottom hidden-xs">&nbsp;</div>
            <div class="p-md-bottom visible-xs">&nbsp;</div>

            <div class="col-md-12 text-center">
                <div class="col-md-5">
                    <div class="text-muted">
                        <div><i class="fa fa-book fa-5x"></i></div>
                        <div class="o-user-type-selection">I want to hire a teacher</div>
                    </div>
                    <p class="fs-sm m-lg-bottom">
                        Find, collaborate with,
                        <br>
                        and pay an expert.
                    </p>
                    <a class="btn button btn-primary text-capitalize m-0" href="student.html">Hire</a>
                </div>

                <div class="col-md-2 o-or-divider">OR</div>

                <div class="col-md-5">
                    <div class="text-muted">
                        <div><i class="fa fa-user fa-5x"></i></div>
                        <div class="o-user-type-selection">I'm a teacher</div>
                    </div>
                    <p class="fs-sm m-lg-bottom">
                        Find tuitions and
                        <br>
                        grow your skills.
                    </p>
                    <a class="btn button btn-primary text-capitalize m-0" href="/signup/contractor">Teach</a>
                </div>
            </div>
        </div>
    </div>
	
	


		@include('layouts.partials.footer')