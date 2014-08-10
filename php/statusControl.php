<?php
define('PWD_DEL_DEBUG','aean581126');
if((isset($_POST['POSQUEPASO'])&&($_POST['POSQUEPASO']===PWD_DEL_DEBUG))||(isset($_GET['POSQUEPASO'])&&($_GET['POSQUEPASO']===PWD_DEL_DEBUG)))
	define('DEBUG',true,true);
$status=array(
	"status"=>0,
	"errno"=>0
	);
function error($errno='no',$descripcion=''){
	global $status;
	$status['status']=-1;
	$status['errno']=$errno;
	if(debug){
		$status['descripcion']=$descripcion;
	}
	return json_encode($status);
}
function status($st){
	global $status;
	$status['status']=$st;
	return json_encode($status);
}
function submit($data='false'){
	global $status;
	if($data!=='false'){
		$status['data']=$data;
	}
	die(json_encode($status));
}