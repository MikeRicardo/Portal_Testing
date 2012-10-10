<html>
<head>
<style type="text/css">
#add{display: none;};
</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#add_new").click(function(){
		$("#add").slideToggle("slow");
	});
		$("#submit").click(function(){
var value=$("#textspace").val();
if(value==""){
	$("#msg").css('border', '1px solid #f00');
	$("#msg").css('width', '450px');
	$("#msg").css('paddding', '5px 5px 5px 0');
	$("#msg").css('background', 'yellow');
	$("#msg").css('color', 'red');
	$("#msg").html("<center><b>missed something?</center></b>");
}
	else{
		$("#msg").css('border', '0px solid #f00');
	$("#msg").css('width', '450px');
	$("#msg").css('paddding', '5px 5px 5px 5px');
	$("#msg").css('background', 'white');
	$("#msg").css('color', 'Blue');
	//$("#msg").html("<center><img src='loading_bar.gif'/> </center>");

	var datastr="p_text="+value;
$.ajax({
	type:'POST', 
	url: 'add_it.php', 
	data:datastr,
	success:function(response){
	$("#msg").html(response);
		
	}
});
	
	}
	});	

	});

</script>
</head>
<body>

<a style="cursor:pointer; color: blue" id="add_new"> +add new item</a><br/>


<div id="msg"></div>
<div id="add">
<form id="my_form">
Enter Name: <input type="text" size="32" id="textspace"/><br/> 
<input type="button" value="submit" id="submit"/>
szlekfn <br>
dfvkljbn <br>
drfkvjn <br>
</form>
</div>



</body>
</html>
