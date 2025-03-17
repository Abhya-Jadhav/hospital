<?php 
$result=getdata();
echo"<table border=1>";

while($row=mysqli_fetch_assoc($result))
{

  echo"<tr>";
  echo"<td>$row[employeename]</td><td>$row[salary]<td>";
  echo"</tr>";
}

echo"</table>";

function getdata()
{

   if(!$cxn=mysqli_connect("localhost","root",""))
   {

    echo"mysqli_error($cxn)";
    die();
   }

   mysqli_select_db($cxn,"employee")or die("could not to database");
   $employeename=$_POST['name'];
   $salary=$_POST['city'];
   
   $que1="INSERT INTO record(emplyoeename,salary) VALUES('$emplyoeename','$salary')";
    if(mysqli_query($cxn,$que1)){
        echo"Inserted Successfully";

    }else{
        echo"error..";

    }
    $que="SELECT * FROM record";
    if($result=mysqli_query($cxn,$que))
    {
        return $result;
    }
    mysqli_close($cxn);
}
?>



