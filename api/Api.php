<?php
class API {

var $host="localhost";
	var $user="root";
	var $password="";
	var $db_table="orders";

	public function getConnection(){

	$conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_table) or die("u are worse");
	if($conn){
	
	}
	return $conn;

}
//so here i have to specify wich variable am calling
public function queryConn($query){
    $conn=$this->getConnection();
    $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
    return $result;
}

function fetch_all(){
	$res=$this->queryConn("SELECT * FROM purchase");
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	//print_r($data);
	return $data;
}
function insert(){
	$form_data=array(
			':medicine' => $_POST['medicine'],
			':quantity' => $_POST['quantitys']
		);

	$query="INSERT INTO purchase(medicine,P_quantity)
	                      VALUES(':medicine',':quantity')";

  $postData=$this->queryConn($query);
  if($postData){
  	$data[]=array(
  		'success' => '1'
  	);
  }
  else{
  	$data[]=array(
  		'success' => '0'
  	);
  }
  
  return $data;
}

}







?>