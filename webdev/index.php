<?php
include 'db.php';
?>
<!DOCTYPE html>

 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
    <link rel="stylesheet" href="style.css">
<script src="script.js"></script> 
<!-- <script src="validate.js"></script> -->
 </head>
 <body>
     <link rel="stylesheet" href="pure-release-1.0.0/pure-release-1.0.0/buttons.css">
<?php
  $con = mysql_connect("localhost","root","");
  $db = mysql_select_db("techkrunch-ajax",$con);
  $get=mysql_query("SELECT id FROM user");
  
?>
<script>function validateForm() {
    var x = document.forms["ian"]["email"].value;
    var y = document.forms["ian"]["pword"].value;
    var z = document.forms["ian"]["name"].value;
    if (x == "")  {
      alert("Please Fill out Email Field");
      return false;
    } else if (y == "")  {
      alert("Please Fill out Password Field");
      return false;
    } else if (z == "")  {
      alert("Please Fill out Names Field");
      return false;
    }
  }</script>
<form name="ian" class="pure-form" method="post" action="#" onsubmit="return validateForm()" autocomplete="off">
    <fieldset>
        <legend>Save Data to the Db</legend>

        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="pword" placeholder="Password"  ><br><br>
        <input type="text" name="name" placeholder="Name"><br><br>

        <button type="submit" class="pure-button pure-button-primary" name="saves">Sign in</button><hr>
    </fieldset>
</form>


<form>
    <select name="users" onchange="showUser(this.value)"> 
    <option value="0">Please Select</option>
        <?php
            while($row = mysql_fetch_assoc($get))
            {
            ?>
            <option value = "<?php echo($row['id'])?>" >
                <?php echo($row['id']) ?>
            </option>
            <?php
            }               
        ?>
    </select>
<form>
<div id="txtHint"><b>Person info will be listed here.</b></div>
      
 </body>
 </html>
 <?php

if(isset($_POST['saves'])){
    $name=$_POST['name'];
    $pword=$_POST['pword'];
    $email=$_POST['email'];


    $query="INSERT INTO user(username,password, name) VALUES ('$email','$pword', '$name')";
    $query=mysqli_real_query($conn, $query);
   if(!$query){
 
	echo "<script>alert('Error!.');</script>";
   }else{
    // echo "<script>alert('Message is Sent.');</script>";
  
    echo "<script>alert('Details are Sent');window.location.href='index.php';</script>";
  
   }
 
  }
       
?>
