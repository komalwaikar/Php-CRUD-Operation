<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Read operation</title>
  </head>
  <body>
  <h1 style="color:red">
    Data of User Table From Users Database
     </h1>
<br>

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
       while($row = mysqli_fetch_array($result))
       {
           $name= $row['uname']."<br>";
           $email=$row['email']."<br>";
           $password=$row['password1']."<br>";
           $phone=$row['phone']."<br>";
           $edu=$row['edu']."<br>";
           $dob=$row['dob']."<br>";
           $city=$row['city']."<br>";
           $intrest=$row['intrest']."<br>";
           $exp=$row['exp']."<br>";
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

</tr>       

        <?php
           
           
          
           
         
       }
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