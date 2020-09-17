<!doctype html>
<?php ob_start();?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Update operation</title>
  </head>
  <body>
  <br>
  
  <h1 style="color:red" class="text-center">
    Data of User Table From Users Database
     </h1>
     <a href="create.php" class="btn btn-success" style="margin-left:10px" >
  Create New user
  </a>
<br><br>

    <table class="table table-bordered table-hover">
        <thead class="bg-dark text-bold text-white">
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Phone</td>
                <td>Qualification</td>
                <td>DOB</td>
                <td>City</td>
                <td>Intrested to work</td>
                <td>expirence</td>
                <td>Update</td>
                <td>Delete</td>

          </tr>   
      </thead>
<?php
$connection= mysqli_connect('localhost','root','','users');

if($connection)
{
    $read_query= "SELECT * FROM users";
$result=mysqli_query($connection,$read_query);

   if($result)
   {
     $i=1;
       while($row = mysqli_fetch_array($result))
       {
         $id=$row['id'];
           $name= $row['uname'];
           $email=$row['email'];
           $password=$row['password1'];
           $phone=$row['phone'];
           $edu=$row['edu'];
           $dob=$row['dob'];
           $city=$row['city'];
           $intrest=$row['intrest'];
           $exp=$row['exp'];
?>
<tbody>
<tr>

<td> <?php echo $name; ?></td>
<td> <?php echo $email; ?></td>
<td> <?php echo $password; ?></td>
<td> <?php  echo $phone;  ?></td>
<td><?php echo $edu?></td>
<td> <?php echo $dob; ?></td>
<td> <?php   echo $city; ?></td>
<td><?php echo $intrest?></td>
<td><?php echo $exp?></td>

<td>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $i;?>">
  Update
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $i;?>"> tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

     
     
     
      
      <form action="" method="POST">
      
      <div class="from-group">

<input type="hidden" value="<?php echo $id;?>" class="form-control" name="u_id">
<label for="username">Username <span style="color:red"><sup>*</sup></span></label>
 <input type="text" class="form-control" value="<?php echo $name;?>" name="u_name" placeholder="Username">


 <label for="email">Email <span style="color:red"><sup>*</sup></span></label>
 <input type="email" class="form-control" value="<?php echo $email;?>" name="u_email" placeholder="Email-id">


 <label for="password">Password<span style="color:red"><sup>*</sup></span></label>
 <input type="password" class="form-control" value="<?php echo $password;?>"  name="u_password" placeholder="password">


 <label for="phone">Phone number<span style="color:red"><sup>*</sup></span></label>
 <input type="tel" class="form-control" value="<?php echo $phone;?>"  name="u_phone" placeholder="phone number">




      </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
        
      </div>
      </form>
    </div>
  </div>
</div>
                </td>

         <td>
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deletemodel<?php echo $i;?>">
  Delete 
</button>

<!-- Modal -->
<div class="modal fade" id="deletemodel<?php echo $i;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
      <div class="modal-body">
        Are you wants to Delete User<?php echo $name;?>?
        <input type="hidden" value="<?php echo $id;?>" name="u_id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-danger">Delete User</button>
      </div>
      </form>
    </div>
  </div>
</div>
         </td>      
</tr>       

        <?php
           
           
          
           $i++;
         
       }
   }
   else{
   echo "error".mysqli_error($connection);   
}
}



?>

<?php

if(isset($_POST['update']))
{
  $id=$_POST['u_id'];
   $name=$_POST['u_name'];
   $email=$_POST['u_email'];
   $password=$_POST['u_password'];
   $phone=$_POST['u_phone'];
   

   $update_query= "UPDATE users Set uname='$name', email='$email' ,password1='$password' ,phone='$phone' where id='$id'";
   $result_update= mysqli_query($connection,$update_query);

   if($result_update)
   {
     header("location:update.php");
   }
   else{
     echo "error :".mysqli_error($connection);
   }
}




if(isset($_POST['delete']))
{
  $id=$_POST['u_id'];

  $delete_query="DELETE from users where id='$id'";
  $result_delete=mysqli_query($connection,$delete_query);

  if($result_delete)
  {
    echo "deleted";
  }
  else{
    echo "error".mysqli_error($connection);
  }
}
?>



</tbody>

</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>