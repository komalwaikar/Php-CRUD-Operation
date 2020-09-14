<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <h1 class="text-center">   Welcome to Komal's Registration form </h1><br>
  <div class="row">
  <div class="col-lg-4">

</div>

<div class="col-lg-4">


<form action="" method="post" class="form-group">
 <label for="username">Username <span style="color:red"><sup>*</sup></span></label>
 <input type="text" class="form-control" name="uname" placeholder="Username" Required>


 <label for="email">Email <span style="color:red"><sup>*</sup></span></label>
 <input type="email" class="form-control" name="email" placeholder="Email-id" Required>


 <label for="password">Password<span style="color:red"><sup>*</sup></span></label>
 <input type="password" class="form-control" name="password" placeholder="password" Required>


 <label for="phone">Phone number<span style="color:red"><sup>*</sup></span></label>
 <input type="tel" class="form-control" name="phone" placeholder="phone number" Required>

<label for="DOB">Date of Birth<span style="color:red"><sup>*</sup></span> </label>
<input type="date" name="dob" class="form-control" placeholder="DOB" Required id="">
<br>

<legend>are you intersted in my freelenceing project<span style="color:red"><sup>*</sup></span></legend>
<input type="radio" name="intrest" value="Yes" id="">Yes <br>
<input type="radio" name="intrest" value="No" id="">No <br>
<br>


<label for="exp">Enter your experience if any<span style="color:red"><sup>*</sup></span></label>
<select name="exp" id="" class="form-control" name="exp" Required>
<option value="0">0yr</option>
<option value="1">1yr</option>
<option value="2">2yr</option>
<option value="3">3yr</option>
<option value="more">More than 3yr</option>

</select>
<br>


<label for="url">Enter your website if there<span style="color:red"><sup>*</sup></span></label>
<input type="url" id="" class="form-control" name="url1" placeholder="Url" Required>
<br>
<label for="edu">Education</label>
<input type="checkbox" value="10th" name="edu[]" id="">10th
<input type="checkbox" value="12th" name="edu[]" id="">12th
<input type="checkbox" value="Diploma" name="edu[]" id="">Diploma


<br>
<label for="city">You are from</label>
<input list="city" name="city" class="form-control" placeholder="City">
<datalist id="city">

<option value="Pune"></option>
<option value="Mumbai"></option>
<option value="Nagpur"></option>
<option value="Ahemadnagar"></option>
<option value="Other"></option>
</datalist>
<br><br>
<input type="checkbox" value="check" name="checkbox" id="">
<lable>are you sure to submit this form</lable>


<br><br>
<button type="submit" name="reg_btn" class="btn btn-success">Submit</button>
 </form>

</div> 


</div>
  </div>
 




 <?php
 
 if(isset($_POST['reg_btn']))
 {
     $name1 = $_POST['uname'];
     $email1 = $_POST['email'];
     $password1 = $_POST['password'];
     $phone1 = $_POST['phone'];
     $dob1 = $_POST['dob'];
     $intrest1 = $_POST['intrest'];
     $exp1 = $_POST['exp'];
     $url1 = $_POST['url1'];

     $edu1 =implode('',$_POST['edu']);
     $city1 = $_POST['city'];
     $checkbox = $_POST['checkbox'];
     

     $connection = mysqli_connect('localhost','root','','users');

     if($connection)
     {
       $create_query= "INSERT INTO users(uname,email,password1,phone,dob,intrest,exp,url1,edu,city,checkbox) VALUES('$name1','$email1','$password1','$phone1','$dob1','$intrest1','$exp1','$url1','$edu1','$city1','$checkbox')";

       $result= mysqli_query($connection,$create_query);


       if($result)
       {
         echo "data inserted successfully";

       }
       else{
         echo "Error  :  ".mysqli_error($connection);
       }

       
     }
 }
 
 
 
 
 ?>
    
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>