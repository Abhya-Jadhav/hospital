<?php 


   if(!$cxn=mysqli_connect("localhost","root",""))
   {

    echo"mysqli_error($cxn)";
    die();
   }

   mysqli_select_db($cxn,"contact1")or die("could not to database");
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $query=$_POST['query'];

   $que1="INSERT INTO contact(firstname,lastname,email,phone,query) VALUES('$firstname','$lastname','$email','$phone','$query')";
    if(mysqli_query($cxn,$que1)){
        echo"Inserted Successfully";

    }else{
        echo"error..";

    }
   
    mysqli_close($cxn);

?>



