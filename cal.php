<?php  
 $connect = mysqli_connect("localhost", "root", "", "fun");  
 $query = "SELECT * FROM event";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>event</title>  
          
      </head>  
      <body>  
	  <?php
	  include "header.php";
	  ?>
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h1 align="center">Calendar</h1>  
				<h2>Filterable Table</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">

                <br/>  
                <div class="table-responsive">  
                     <table class="table table-info table-hover table-fixed table-bordered">  
                          <tr>  
                               <th width="70%">Events</th>  
                               <th width="30%">View</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?> 
<tbody id="myTable">						  
                          <tr>  
                               <td><?php echo $row["sport"]; ?></td>  
                              <td> <center><input type="button" name="view" value="view" id="<?php echo $row["e_id"]; ?>" class="btn btn-success btn-xs view_data" /></center>  </td>
                          </tr>  
                          <?php  
                          }  
                          ?> 
</tbody>						  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 
 <div class="modal " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" id="event_detail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var event_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{event_id:event_id},  
                success:function(data){  
                     $('#event_detail').html(data);  
                     $('#myModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
 
 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>