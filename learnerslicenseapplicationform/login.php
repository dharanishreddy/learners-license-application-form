 <?php
    $x=$_POST["email"];
    $y=$_POST["pwd"];
    $conn=mysqli_connect("localhost","root","dhannu123","dhannu");
    if(!$conn)
    {
        die("Connection failed due to ".mysqli_connect_error());
        
    }$sql1="select * from form where email='$x' ";
   $result1=$conn->query($sql1);
if($result1->num_rows)
{
    while($resu=$result1->fetch_assoc())
    {

    if($resu["password"]==$y)
    {
      echo "<tr><td>".$resu['name'].",</td><td>".$resu['email'].",</td></tr>";
        echo "<tr><td>".$resu['phno'].",</td><td>".$resu['aadhar'].",</td></tr>";
        echo "<tr><td>".$resu['gender'].",</td><td>".$resu['address'].",</td></tr>";
        echo "<tr><td>".$resu['gear'].",</td><td>".$resu['type'].",</td></tr>";
        echo "<tr><td>".$resu['district'].",</td><td>".$resu['testcenter'].",</td></tr>";
        echo "<tr><td>".$resu['landmark'].",</td></tr>";
        echo "<tr><td>".$resu['llrdate'].",</td><td>".$resu['time'].",</td></tr>";   
    }
    }
}
    else
    {
        echo "<p style='text-align:center;color:red;font-size:14px;font-weight:bold'>Wrong Passowrd or Username<br>Please TRy Again</p>";
        include 'login.html';
    }
    mysqli_close($conn);
   
?>