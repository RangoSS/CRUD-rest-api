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
	<h3 class="text-center"> Lets see your Rest Api Skills</h3>
	<br/>
	<div align="right" style="margin_bottom:5px">
		<button type="button" name="add_button"
  	    class="btn btn-warning btn-xs edit " id="add_button">Add</button></td>
  	    <button type="button" name="aadd_button"
  	    class="btn btn-warning btn-xs edit " id="aadd_button">Show</button></td>
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

<!--testing mordal-->
<div id="bobo" style="width:30%;margin-left: 20%; display: none;">
  
			<form method="post" id="api-crud-form">
				<div class="modal-header">
					<button type="button" class="close"
					data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Data</h4> 
				</div>
				
					<div class="form-group">
						<label>Enter medicine</label>
						<input type=" text" name="medicine" id="medicine" class="form-control"/>
					</div>
					<div class="form-group">
						<label>Enter Quantity</label>
						<input type=" text" name="quantitys" id="quantitys" class="form-control"/>
					</div>

				<div class="form-group">
					<input type=" hidden" name="hidden_input" id="hidden_input" class="form-control"/>
					<input type=" hidden" name="action" id="action" class="form-control" value="insert" />
					<button type="submit" class="btn btn-info" id="button_action" name="button_action" value="Insert">Insert
					</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close
					</button>
				</div>
				
			</form>
		</div>
<script type="text/javascript">

	//this function runs automatical after receiving data
	$(document).ready(function(){

		fetch_data();  //this function fetch data from Fetch.php
		function fetch_data(){
        
        $.ajax({
        	url:"fetch.php",
        	success:function(data){
        		$('tbody').html(data);
        	}
        })
		}
        
         $('#aadd_button').click(function(){
         	$('#bobo').show();
         });
		
		$('#button_action').on('submit',function(){
    
         if($('#medicine').val() ==''){
            alert('fill in the mecine');
		}
		else if($('#quantitys').val() == ''){
			alert('how many items you are looking for');
		}
		else{
          var form_data=$(this).serialise();//convert text to standard url
          $.ajax({
            url:"action.php",
            method:"POST",
            data:form_data,
            success:function(data)//this will receive data from server if successful
            {
              fetch_data(); //here we call the show function again from above
              $("#bobo")[0].reset();
              if(data == 'insert'){
              	alert("data has been inserted successfully");
              }
              if(data=='update'){
              	 alert("data updated successfully");
              }
            }
          });
		}
		});

		
	});
</script>

<?php
/*
$('#action').val('insert');
			$('#button-action').val('Insert');
			$('.modal-title').text('Add Data');
*/
?>