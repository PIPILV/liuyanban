<?php

include('input.class.php');
$input=new input();

include('db.php');




$msg=$input->post('msg');
$user=$input->post('user');
	   
$t=time();	




$sql ="INSERT INTO msg (username,content,intime)values('{$user}','{$msg}','$t')";
$is=$mysqli->query($sql);

if($is){
   echo"留言成功";
}else{
   echo"留言失败";
   }
?>
