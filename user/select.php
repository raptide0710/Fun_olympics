<head>
        <title>FunOlympics Calendar </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
<?php  
 if(isset($_POST["event_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "fun");  
      $query = "SELECT * FROM event,information WHERE event.e_id=information.e_id and event.e_id = '".$_POST["event_id"]."'";  
      $result = mysqli_query($connect, $query) or die("Error: ".mysqli_error($connect));  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>venue</label></td>  
                     <td width="70%">'.$row["venue"].'</td>  
                </tr>  
				<tr>  
                     <td width="30%"><label></label></td>  
                     <td width="70%"></td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>date and time</label></td>  
                     <td width="70%">'.$row["date_time1"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>details</label></td>  
                     <td width="70%">'.$row["details"].'</td>  
                </tr>  
				<tr>  
                     <td width="30%"><label></label></td>  
                     <td width="70%"></td>  
                </tr>  
				<tr>  
                     <td width="30%"><label>date and time</label></td>  
                     <td width="70%">'.$row["date_time2"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>details</label></td>  
                     <td width="70%">'.$row["details_1"].'</td>  
                </tr>  
				<tr>  
                     <td width="30%"><label></label></td>  
                     <td width="70%"></td>  
                </tr>  
				<tr>  
                     <td width="30%"><label>date and time</label></td>  
                     <td width="70%">'.$row["date_time3"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>details</label></td>  
                     <td width="70%">'.$row["details_2"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>date and time</label></td>  
                     <td width="70%">'.$row["date_time4"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>details</label></td>  
                     <td width="70%">'.$row["details_3"].'</td>  
                </tr>  
                
                ';


      }  
	  
      $output .= "</table></div>";  
      echo $output;  
 }  
 
 ?>