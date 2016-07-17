@extends('layouts.app')

@section('content')



<div class="container">

<div class="row">
<section class="container">

        <div class="row">
            <div class="section-heading">
                <h2>POST A TUITION</h2>
                
            </div>

        </div>
<div class="login">
        <div class="row equal">
            <div class="col-md-12 ">
                
               
                    <div class="row" >
					<div class="col-md-12">	
                        <span>Tuition Title</span>
                        <input class="form-control input-lg" type="text">
                    </div>
					</div>
					<br>
					<div class="row">
					<div class="col-md-12">
                        <span>Description</span>
                        <textarea class="form-control input-lg" type="text"></textarea>
                    </div>
					</div>
            </div>
		</div>	
			<div class="row equal">
			<div class="col-md-6">
                    <br>
                    <div class="row ">
					<div class="col-md-12"">

                        <span>Skills</span>
                        <input class="form-control input-lg" type="text">
                    </div>
					</div>
			</div>
			<div class="col-md-6">
					<br>
					<div class="row">
						<div class="col-md-12">
                        <span>Area</span>
                        <input class="form-control input-lg" type="text">
						</div>
					</div>
					
					
					
					<br>
                    <div class="row">
                        <div class="col-md-12">
						<a href="#" class="btn button pull-right">POST</a>
						</div>
					</div>
					
					
                
          
           

        </div>
		</div>
</div>
    </section>

</div>

















</div>










    @include('layouts.partials.footer')