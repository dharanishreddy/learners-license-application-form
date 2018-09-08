<?php

session_start();
$x=$_GET["llrdate"];
$y=$_GET["time"];
$z=$_SESSION["email"];
 //$p=0;
      //  $j=0;
        //$k=0;
       // $l=0;
        //$v=0;
        //$b=0;
        //$n=0;
        //$m=0;
        //$q=0;
        //$i=0;
        //$t=0;
       
$conn=new mysqli("localhost", "root", "dhannu123", "dhannu");
if($conn->connect_error)
{
    die("connect failed".$conn->connect_error);
}
else{
$sql1="insert into datetable1 values('$z','$x','$y')";
$conn->query($sql1);
$sql2="select slot from datetable where date='$x' and time='$y'";
$res=$conn->query($sql2);
if($res->num_rows)
{
$result=$res->fetch_assoc();
$slot=$result['slot'];
if($slot==0)
{
    echo "slots over";
    include 'table.html';
}
else{
$slot=$slot-1;
echo "$slot";
$sql3="update datetable set slot='$slot' where date='$x' and time='$y'";
$conn->query($sql3);
}
}
else{
    echo "no slot";
}


$sql4="select * from form  where email='$z'";
$sql5="select * from datetable1 where email='$z'";
$result1=$conn->query($sql4);
if($result1->num_rows)
{
    while($resu=$result1->fetch_assoc())
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
$result2=$conn->query($sql5);
if($result->num_rows)
{
    while($resu2->fetch_assoc())
    {
        echo "<tr><td>".$resu2['date']."</td><td>".$resu2['time']."</td></tr>";
    }
}
require '/home/dharanish/Downloads/apache-tomcat-8.5.28/webapps/JavaBridgeTemplate621/learnerslicenseapplicationform/PHPMailer-master/src/PHPMailer.php';
require '/home/dharanish/Downloads/apache-tomcat-8.5.28/webapps/JavaBridgeTemplate621/learnerslicenseapplicationform/PHPMailer-master/src/SMTP.php';
require '/home/dharanish/Downloads/apache-tomcat-8.5.28/webapps/JavaBridgeTemplate621/learnerslicenseapplicationform/PHPMailer-master/src/Exception.php';

$mail= new PHPMailer\PHPMailer\PHPMailer;
$mail->Host='smtp.gmail.com';
$mail->isSMTP();
//$mail->SMTPDebug = 2;
$mail->SMTPAuth= true;
$mail->Username="llrlicenseapp@gmail.com";
$mail->Password="llrlicenseapp123";
$mail->SMTPSecure="tls";
$mail->port=587;
$mail->Subject="email";
$mail->Body="you have applied show this official message at the counter inorder to confirm your slot"
        . "  thank you"
        . "email applied for ".$z;
$mail->setFrom("llrlicenseapp@gmail.com");
$mail->addAddress("$z");
if($mail->send())
{
    echo "<br>mail sent<br>";
}
else
{
    echo "mail not send<br>";

}

echo "<br> the information provided has been sent your mail "."<br>";
echo "you have succesfully applied for the learner's license"."<br>";
echo "please take a printout of your official aadharcard and the mail sent to you"."<br>";
echo "submit the details at the examination center while paying the fee amount "."<br>";
echo "thank you";

session_destroy();
session_unset();
$_SESSION=array();
}

?>
<script>
    history.pushState("null","null",document.title);
    window.addEventListener('popstate',function(){
        history.pushState("null","null",document.title);
    })
</script>


