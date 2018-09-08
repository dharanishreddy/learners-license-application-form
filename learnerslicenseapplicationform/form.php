<?php
$q = $_GET['q'];
$conn= mysqli_connect("localhost:3306","root","dhannu123", "dhannu");
    if(!$conn)
    {
        die("connection failed".mysqli_connect_errno());
    }
    $query="select testcenter from center where district='$q'";
    $result=mysqli_query($conn,$query);
    if($result->num_rows)
    {
        echo "<select id='testcenter' name='testcenter'>";
        while($row=$result->fetch_assoc())
        {
            echo "<option>".$row['testcenter']."</option>";
        }
        echo "</select>";
    }

?>