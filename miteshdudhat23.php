<html>
<head>
<title>java query  </title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <script>
$(document).ready(function(){

$("#hide").click(function(){
  $("#div").hide("");
  $(this).attr('disabled',true);
  $("#show").attr('disabled',false);
  });
  
$("#show").click(function(){
 $("#div").show("");
  $(this).attr('disabled',true);
  $("#hide").attr('disabled',false);
  });
  
  $("#toggle").click(function(){
  $("#div").show("");
  $(this).text($(this).text() == 'show' ? 'hide' : 'show');
  $("#hide").attr('disabled',true);
  $("#hide").attr('disabled',false);
  $("#div").toggle(1500);
  });

   $s  
  

}); 
</script>


<style>
    #div{
	    background-color:gray;
		height:150px;
		width:150px;
		text-align:center;
		}
		
</style>
</head>
<body>
<div id="div">div</div><br/><br/>

<button id="show"type="button">show</button>
 <button id="hide"type="button">hide</button>
 <button id="toggle"type="button">toggle</button>
</body>
</html>