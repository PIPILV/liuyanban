<?php
//数据库链接
$mysqli=new	mysqli('localhost','root','root','php105');
       if($mysqli->connect_errno>0){
          echo "链接数据库失败";
          echo $mysqli->connect_error;
          exit;
         }
$mysqli->query("SET NAMES UTF8");
?>
