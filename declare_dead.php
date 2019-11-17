<html>
<head>
<title>Login</title>
<style>

h1{
    background-color:#587ABF;
}
body{
background-size:1480px 800px;
margin:20;
}

</style>
<body background="images/dd.jpg">
<center>

<h1 style="font-size:60px"><font color="white">Declare dead</font><a href='index.php' style="font-size:20px;color:white;float:right">Log out</a></h1>
<div style="border:2px solid #000000;width:400px;border-radius:20px">



<?php

session_start();
$conn=mysqli_connect("localhost","root","","organ_donation") or die("failed:" . mysqli_connect_error());
$email=$_SESSION['email'];

$sql = "select dead from users where email='$email'";
$result=mysqli_query($conn,$sql) or die("failed".mysqli_error($conn));
while($r=mysqli_fetch_assoc($result))
{
$er=$r['dead'];
if($er){

echo "<h1>RIP ".$_SESSION['name'].". <br>Thank you for your response:) <br> We will contact you shortly.</h1>";

}

else{
echo '
<form action="declare_dead.php" method="post" >
<b><font size=5px>I here by declare that my relative<br>
who had been registered with your organisation<br>
is dead you can proceed with further procedures<br><br>';

}

}
?>
<input type=submit onclick="declare1.php" value="Declare" name=submit style="width:120px;height:35px;border-radius:20px">

</form></div>
</center>
</body>
</head>
</html>