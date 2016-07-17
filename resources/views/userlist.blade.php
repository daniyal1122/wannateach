@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
	<div class="col-md-3" style="margin-top:20px;">
		<div style="margin-top:20px; -webkit-box-shadow: 0px 1px 5px 3px rgba(235,232,235,1);
-moz-box-shadow: 0px 1px 5px 3px rgba(235,232,235,1);
box-shadow: 0px 1px 5px 3px rgba(235,232,235,1); ">
<div style="padding:20px;">
	<h3>City</h3>
	<div>
  <?php

/*$query = mysql_query("select City ,count(*) from Teachers group by City having count(*)>1 "); // Run your query

echo '<select id="select" class="form-control input-lg" name="City">'; // Open your drop down box
echo '<option value="-1">Select City</option>';
// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['City'].'">'.$row['City'].'</option>';
}

echo '</select>';

  
  
  ?>  
<script>

$(document).ready(function() {
    $(document).on("change", "#select", function(){
		
		//Loader starts here
        $.ajax({
			url: "ajaxfunctions.php?cityname="+$('#select option:selected').val()+"&call=getUsersListByCity",
            type: 'GET',
            data:  null,
			contentType:"application/json; charset=utf-8;",
			dataType:"json",
			success:function(resp){
				console.clear();
				console.log(resp);
				if (resp!=null)
				{
				var searchresult='';
				for (var user=0; user< resp.length; user++ )
				{
			searchresult += '<div class="row"> \
				<div class="col-md-12"> \
					<div class="row rowborder"> \
						<div class="col-md-3 "> \
						<img class="Profilestyle" src="Images/adeel.jpg"/> \
						</div> \
						<div class="col-md-9"> \
						<a class="a" href="userprofile.php?Id='+resp[user]['Id']+'">'+resp[user]['FirstName']+' '+resp[user]['LastName']+'</a> \
				<h3 style="font-size:25px; margin-top:10px !important;  "></h3> \
				<p>	\
			<strong>City &nbsp; : &nbsp;</strong> '+resp[user]['City']+' \
	</p><p>	\
			<strong>Experience &nbsp; : &nbsp;</strong> 5 years \
	</p><p> \
			<strong>Description : &nbsp;</strong> I have 2 year experience in web development , if you want to see my work history please visit apperena site. \
	</p> ';
	
	if (resp[user]['Skills']!=null)
	{
	searchresult+='<p><strong>Skills :&nbsp;</strong> ';	
	for (var x=0; x < resp[user]['Skills'].length; x++)
	{
		var skill =resp[user]['Skills'][x];
		searchresult+='<a class="tag" href="#">'+skill['Name']+'</a>';
	}
	searchresult+='</p>';
	}
	
	searchresult+='</div> \
		</div> \
				</div> \
			</div>';
			
			}
			$("#UserListParent").empty().html(searchresult);
			//Loader stops here.
			}
			},
			error : function(errorText){debugger; alert(errorText);}
        });
    });
});

</script>  
	
	</div>
	
	
	
	<h3>Experience</h3>
	<div>
	
	<select class="form-control input-lg">
  <option value="volvo">5 Year</option>
  <option value="saab">4 Year</option>
  <option value="mercedes">3 Year</option>
  <option value="audi">2 Year</option>
</select>
	
	</div>
	
	
	<h3>Skills</h3>
	<div style="margin-bottom:20px;">
	
	<?php
$query = mysql_query("select Id,Name from subjects"); // Run your query

echo '<select id="skillselect" class="form-control input-lg" name="Subject">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['Id'].'">'.$row['Name'].'</option>';
}

echo '</select>';

  
  
  ?>
  <script>

$(document).ready(function() {
    $(document).on("change", "#skillselect", function(){
		
		//Loader starts here
        $.ajax({
			url: "ajaxfunctions.php?Skills="+$('#skillselect option:selected').val()+"&call=getUsersListBySkills",
            type: 'GET',
            data:  null,
			contentType:"application/json; charset=utf-8;",
			dataType:"json",
			success:function(resp){
				console.clear();
				console.log(resp);
				if (resp!=null)
				{
				var searchresult='';
				for (var user=0; user< resp.length; user++ )
				{
			searchresult += '<div class="row"> \
				<div class="col-md-12"> \
					<div class="row rowborder"> \
						<div class="col-md-3 "> \
						<img class="Profilestyle" src="Images/adeel.jpg"/> \
						</div> \
						<div class="col-md-9"> \
						<a class="a" href="userprofile.php?Id='+resp[user]['Id']+'">'+resp[user]['FirstName']+' '+resp[user]['LastName']+'</a> \
				<h3 style="font-size:25px; margin-top:10px !important;  "></h3> \
				<p>	\
			<strong>City &nbsp; : &nbsp;</strong> '+resp[user]['City']+' \
	</p><p>	\
			<strong>Experience &nbsp; : &nbsp;</strong> 5 years \
	</p><p> \
			<strong>Description : &nbsp;</strong> I have 2 year experience in web development , if you want to see my work history please visit apperena site. \
	</p> ';
	
	if (resp[user]['Skills']!=null)
	{
	searchresult+='<p><strong>Skills :&nbsp;</strong> ';	
	for (var x=0; x < resp[user]['Skills'].length; x++)
	{
		var skill =resp[user]['Skills'][x];
		searchresult+='<a class="tag" href="#">'+skill['Name']+'</a>';
	}
	searchresult+='</p>';
	}
	
	searchresult+='</div> \
		</div> \
				</div> \
			</div>';
			
			}
			$("#UserListParent").empty().html(searchresult);
			//Loader stops here.
			}
			},
			error : function(errorText){debugger; alert(errorText);}
        });
    });
});

</script>  
	
  
  
	</div>
	</div>
	</div>
	
	
	</div>
	
	
		<div id="UserListParent" class="col-md-9" style="margin-top:20px;">
			
			
			
			<?php

/*
$query="select Teachers.*,Signup.ProfileImage FROM Teachers join Signup on Teachers.UserId=Signup.Id  order by Teachers.Id desc";
$tuitionResult = mysql_query($query);
while($row=mysql_fetch_array($tuitionResult)){

	$FirstName =$row['FirstName'];
	$LastName=$row['LastName'];
	$City=$row['City'];
	$TeacherId = $row['Id'];
	
	$image_name = $row['ProfileImage'];
	$q = "SELECT * FROM Teachers JOIN Signup ON Teachers.UserId = Signup.id JOIN teacherssubjects ON Teachers.Id = teacherssubjects.teacherid JOIN subjects ON teacherssubjects.subjectid = subjects.id where teacherssubjects.teacherid = $TeacherId";
	$skillsResult = mysql_query($q);
*/
?>
			<div class="row">
				<div class="col-md-12">
					<div class="row rowborder">
						<div class="col-md-3 ">
						<img class="Profilestyle rowborder"/>
						
						</div>
						
						<div class="col-md-9">
						<a class="a" href="userprofile.php"></a>
					
	
					<a id="frame" href="New Conversation.php"><p style="float:right;" class="glyphicon glyphicon-envelope"></p></a>
					
		
						
				<h3 style="font-size:25px; margin-top:10px !important;  "></h3>
				
		
				<p>			
			<strong>City &nbsp; : &nbsp;</strong> 
	</p>	
				
				<p>			
			<strong>Experience &nbsp; : &nbsp;</strong> 5 years
	</p>
				<p>			
			<strong>Description : &nbsp;</strong> I have 2 year experience in web development , if you want to see my work history please visit apperena site.
	</p>
	
	<p><strong>Skills :&nbsp;</strong> 
	
</p>					
					</div>
					</div>
				</div>
			</div>
		
	

   

</div>
</div>
</div>

    @include('layouts.partials.footer')