<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>send data module.</title> <!--from local second-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>

<body> 

<form  id="carDetailForm" name="carDetailForm" >            	
	<input type="text"  name="vehicle"  />
    <input type="text"  name="colour" />
    <input type="text"  name="model"  />                   			    
    <input type="submit" value="submit" />
</form>

<br/><br/>
<h3>Second Example for sending data</h3>
<button id="carDetailBtn">Submit above form</button>


<div id="loaderDiv" style="display:none">Loading...</div>


</body>
</html>

<script type="text/javascript">
$(function(){
	$('#carDetailForm').submit(function(){
		
		var formData = $('#carDetailForm').serialize();		
		$(this).sendData({
				data:{formData:formData,otherData:{type:'addCarDetail'}},
				loader:$('#loaderDiv'),
				url:'car_detail.php',				
			});
			
	alert(DF.set.result); //if general response
	//var res = JSON.parse(DF.set.result); //if response with json	 
	//alert(res.formData.colour);			
		return false;	
		
	});	
});
</script>

<!--Second Example-->

<script type="text/javascript">
$(function(){
	$('#carDetailBtn').click(function(){
		
	
			var formData = $('#carDetailForm').serialize();		
			$(this).sendData({
					data:{formData:formData,otherData:{type:'addCarDetail'}},
					loader:$('#loaderDiv'),
					url:'car_detail.php',				
				});
					
			alert(DF.set.result); //if general response
			//var res = JSON.parse(DF.set.result); //if response with json	 
			//alert(res.formData.colour);
		
	});
		
});
</script>




