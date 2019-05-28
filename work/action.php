<?php
//this is for Posting data on url
if(isset($_POST["action"])){
	if($_POST["action"] == 'insert'){

		$form_data=array(
			'medicine' => $_POST['medicine'],
			'quantity' => $_POST['quantitys']
		);
    
		$api_url="http://localhost/REST_API_CRUD/api/test_api.php?action=insert";
		$client=curl_init($api_url);
       curl_setopt($client, CURLOPT_POST, true);
       curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
       curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response=curl_exec($client);
        curl_close($client);
       $result=json_decode($response,true);
     
       foreach ($result as $key => $values) {
       	if($result[$key]['success'] == '1'){
       		echo 'insert';
       	}
       	else{
       		echo 'error';
       	}
       }
	}
}

?>