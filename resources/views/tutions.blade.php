@extends('layouts.app')

@section('content')



<div class="container">
<div >
<div class="row">


<div class="col-md-9">
<div class="search-panel">

                        <form class="form-inline" role="form">
                            <div class="form-group adv">
                                <div class="input-group">

                                    <input class="form-control searchCourse" type="text" placeholder="Search Tuitions">
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="" class="btn btnsearch">Search</a>
                            </div>
                        </form>
                    </div>
					
				
				</div>
				<div class="col-md-3">
					<a class="btn-primary btn button" href="tuitionposting.html" > Post Tuitions</a>
					</div>
</div>


<div class="row">


<div class="col-md-2 " >
			<div class="recent">
			<div>
			<header class="header">Recent Searches</header>
			</div>
			<div  style="padding: 20px 0px 10px 0px;  ">
			<ul>
			<li ><a href="#">Skills:(Accounting,Admath,PHP,css,html,ubuntu,Javascript)</a></li></ul>
			</div>
			</div>
			
			<div class="recent">
			<div>
			<header class="header">Skills</header>
			</div>
			<div  style="padding: 20px 0px 10px 0px;  ">
			<ul>
			<li ><input type="checkbox" style=""> Math</li>
			<li ><input type="checkbox" style=""> Math</li>
			<li ><input type="checkbox" style=""> Math</li>
			<li ><input type="checkbox" style=""> Math</li>
			<li ><input type="checkbox" style=""> Math</li>
			<li ><input type="checkbox" style=""> Math</li>
			<li ><input type="checkbox" style=""> Math</li>
			<li ><input type="checkbox" style=""> Math</li>
			<li ><input type="checkbox" style=""> Math</li>
			</ul>
			</div>
			</div>

</div>

	<div class="col-md-8" style="background:#fff">
			<div class="row question">
				<div class="col-md-8">
				
					<a class="a" href="#">Need a tutor for Unique group of colleges</a><br>
					<strong>Johar Town,Lahore</strong><br>
					<p>An expert teacher of ad-math is required for permanent job in unique college johar town.
						
					</p>
					

					<strong>SKILLS:</strong>
					<a class="tag" href="#">O-Level</a>
					<a class="tag" href="#">Ad-Math</a>
					<a class="tag" href="#">Physics</a>
				</div>

				<div class="col-md-3" style="    margin-top: 5px;">
					<strong>Unique Group of Academies</strong><br />
					<span class="post_date">Jan 13, 2015 06:14PM</span><br><br>
					<a href="#" class="button btn btn-primary">Apply Now</a>
				
				</div>
				
				
			</div>
			
			
			
	</div>
	
	<div class="col-md-2 " >
			<div class="recent">
			<div>
			<header class="header">My Profile</header>
			</div>
			<div  style=" padding: 13px 35px; ">
			<img src="assets/images/logo3.png"><br>
			<a href="#">Edit Your Profile</a>
			</div>
			
			<div style="    padding: 19px;">
			
			<span>Available for new work (</span><a href="#">Change</a>)
			</div>
			<footer class="footer">
			<a href="#">View My profile</a>
			</footer>
			</div>
			
			<div class="recent">
			<div>
			<header class="header">Proposal</header>
			</div>
			<div  style="padding: 20px 0px 10px 0px;  ">
			<span><a href="#">4 Submitted Proposals</a></span>
			</div>
			</div>

			
</div>


	</div>
	
	<ul class="pagination">
  <li><a href="#">1</a></li>
  <li class="active"><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
	</div>
	
</div>



	   @include('layouts.partials.footer')
	   @endsection