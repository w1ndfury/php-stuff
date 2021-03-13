<?php

require('dbConnection.php');

// Perform query
$sql = "SELECT * FROM client ORDER BY `name`";
$select = mysqli_query($conn,$sql);

if ($select->num_rows > 0) {
  // output data of each row
  while ($result = mysqli_fetch_array($select)) {
?>
    <tr id="delete<?php echo $result['id'] ?>">
			<td><?=$result['name'];?></td>
			<td><?=$result['email'];?></td>
			<td><?=$result['website'];?></td>
      <!-- delete button -->
      <td><button onclick="deleteClient(<?php echo $result['id']; ?>)"  class="btn btn-danger">X</button></td>
		</tr>

<?php
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>

<script type="text/javascript">
	 
	 function deleteClient(id){
   
       if(confirm('are You sure?')){
         
         $.ajax({

              type:'POST',
              url:'delete_client.php',
              data:{delete_id:id},
              success:function(data){
              
                   $('#delete'+id).hide('slow');          // tr element in row 13 

              }
         });
       }
	 }
</script>