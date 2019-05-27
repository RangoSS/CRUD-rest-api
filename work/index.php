<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> REST API</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<br/>
	<h3 class="text-center"> Lets see you Rest Api Skills</h3>
	<br/>
	<div align="right" style="margin_bottom:5px">
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Medicine</th>
					<th>Quantity</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		 </table>
	</div>
</div>

</body>
</html>

<script type="text/javascript">

	//this function runs automatical after receiving data
	$(document).ready(function(){

		fetch_data();
		function fetch_data(){
        
        $.ajax({
        	url:"fetch.php",
        	success:function(data){
        		$('tbody').html(data);
        	}
        })
		}
	});
</script>