<!DOCTYPE html>
<html >
<head>
	<title>Rating</title>
	<meta charset="utf-8"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
</head>

<style type="text/css">
fieldset, label 
{ 
	margin: 0; 
	padding: 0; 

}
body
{
	margin: 20px; 
}
h1 
{ 
	font-size: 1.5em; 
	margin: 10px; 

}

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;

}
.rating input:after{
	display: none;
}

.rating  input 
{ 
	
	display: none;
	
} 
.rating  label:before { 
  
  font-size: 3.25em;
  font-family:none;
  display: inline-block;
  content: "";
  margin: 0em;
  padding: 0.2em;
  position: absolute;
}

.rating > .full:before { 
  content: "\2726";
  position: relative;
  left: 0.5em;
  top: 0em;
  z-index: 1;
}

.rating > label { 
  color: #ddd; 
 float: right; 

}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating  input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label 
{ 
	color: #FFD700;  

} /* hover previous stars in list */

.rating  input:checked + label:hover, /* hover current star when changing rating */
.rating  input:checked ~ label:hover,
.rating  label:hover ~ input:checked ~ label, /* lighten current selection */
.rating  input:checked ~ label:hover ~ label 
{ 
	color: #FFED85;  
} 




</style>

<body>

   <fieldset class="rating" method="post" id="fieldset" name="fi">
   
    <input type="radio" id="star5" name="rating" value="5"  /><label class = "full" for="star5" title="Awesome - 5 stars" ></label>
    
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars" ></label>
    
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars" ></label>
    
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
	</fieldset>

<p></p>



 <script type="text/javascript">
 $(document).ready(function(){
 	/*$(".rating input:radio").attr("checked",false);
 	$(".rating input:radio").click(function(){
 		$(".rating").removeClass('checked');
 		$(this).parent().addClass('checked');
 	});*/
 	
 	$('input:radio').click(function(){
 	<?php
 		if(isset($_SESSION['user']))
 		{
 	?>	
 		var userating=this.value;
 		alert(userating);

 	<?php
 		}
 		else
 		echo 'alert("please log in !!")';

 	?>
 	});
 	
 	 });
 </script>
</body>
</html>
