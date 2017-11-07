<?php
include('db.php');


$sql="SELECT*FROM msg";
$mysqli_result=$mysqli->query($sql);

$row=array();
  while($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)){
	$rows[]=$row;
}

?>

<!DOCTYPE html>
  <html>
	<head>
	  <meta charset='utf-8'/>
	  <body background="beijing.jpg">
	  <title>留言板</title>
	  <h1 align="center">皮皮驴message board</h1>

	 <link rel='stylesheet' href='style.css'/>

	</head>
    
    <body>

	     
      <div class="add">

	     <form action="save.php" method="POST">

         <textarea name="msg"></textarea>

		 <b>留言姓名</b>：<input class="user" name="user"type='text'/>

		 <input class="btn" type='submit' value='发表'/>
		 

		 </form>
	  </div>
	  
	  <div class="msg">

	  <?php
	  foreach($rows as $row){
		  $t=date("Y年-m月-d日 H:i:s",$row['intime']);
	  ?>
      
        <div class="item">
		   <span class="user"><?php echo $row['username'];?></span>
		   <span class="time"><?php echo $t;?></span>
		   <div style="clear:both;"></div>
		   <p><?php echo $row['content'];?></p>
	
 <?php
	  }
		?>
	    </div>
	 </div>
    
 
	</body>
  </html>
