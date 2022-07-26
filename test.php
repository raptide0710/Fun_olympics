
<?php  
 $con = mysqli_connect("localhost", "root", "", "fun");  
 $query = "SELECT * FROM event,information where event.e_id=information.e_id";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</title>  
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> 
<link href="style.css" rel="stylesheet">

      </head>  
      <body>  

                         
                         <?php
			include_once("connect.php");
			$sql = "SELECT * FROM event,information where event.e_id=information.e_id";
			$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
            <div class="card hovercard">
                
                <div class="card-body info">
                    <div class="title">
                        <a href="#"><?php echo $record['sport']; ?></a>
                    </div>
						<br> 	
                    <div 
class="desc"><?php echo $record["venue"];?> </div>   <br>   
<div class="desc"><?php echo $record["date_time1"]; ?></div><br> 
<div class="desc"><?php echo $record["details"];?> </div> 
<div class="desc"><?php echo $record["date_time2"]; ?></div><br> 
<div class="desc"><?php echo $record["details_1"];?> </div>
<div class="desc"><?php echo $record["date_time3"]; ?></div><br> 
<div class="desc"><?php echo $record["details_2"];?> </div>		
<div class="desc"><?php echo $record["date_time4"]; ?></div><br> 
<div class="desc"><?php echo $record["details_3"];?> </div>							
                </div>
               
            </div>
			<?php } ?>
                        
								 
                    
      </body>  
 </html>  
 