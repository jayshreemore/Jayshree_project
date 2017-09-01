

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
 <script>
 $(document).ready(function(){
    $('#myTable').DataTable();
});</script>
<style>
.table table-bordered
{

border: solid 1px back


}

</style>
  </head>
<body>

<?php echo form_open('Searchgrid_controller/searchgrid');?>
<center><div class="form1">
<input type='text' name='name' placeholder='Name'>
<input type='number' name='phone' placeholder='Phone'>

<input type='submit' name='submit'>
</div>
</center>
<?php  echo form_close(); ?>

<div class="container">
<?php echo form_open('Searchgrid_controller/index');?>

<div>

  <table class = "table table-bordered" width='100%'  id='myTable'>
    <thead>
      <tr class="success">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
		 <th>Address</th>
		  <th>Zip</th>
		   <th>Telephone</th>
		    <th>DOB</th>
      </tr>
    </thead>
    <tbody>

        <?php
  foreach($data as $key=>$value)
  {
	  echo"<tr>";
	  echo"<td>".$value->c_id."</td>";
	  echo"<td>".$value->c_name."</td>";
	  echo"<td>".$value->c_email."</td>";
	  echo"<td>".$value->c_address."</td>";
	  echo"<td>".$value->c_zip."</td>";
	  echo"<td>".$value->c_telephone."</td>";
	  echo"<td>".$value->c_dob."</td>";


	  echo"</tr>";
  }
  ?>


    </tbody>
  </table>
</div>
<?php echo form_close();?>
</div>

</body>
</html>
