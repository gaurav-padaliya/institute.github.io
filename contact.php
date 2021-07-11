<?php 
session_start();
$name =$_POST['name'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$subject =$_POST['subject'];
$message =$_POST['message'];
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'hayat');
$query = "insert into contect( name, email, mobile , subject , message) values ('$name','$email', '$mobile','$subject','$message')";
$i = mysqli_query( $con , $query );
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert form</title>
    <link rel="stylesheet" href="student_rec/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<header>
        
                    <nav class="nevbar">
                        
                        <div class="menu">
                            <ul  style="margin: 0px !important;">
                                <li><a href="/hayat_institute/index.html">HOME</a></li>
                                <!-- <li><a href="/hayat_institute/register/register.html">REGISTER</a></li> -->
                            </ul>
                        </div>
                    </nav>
</header>


<?php

?>
<?php if($i){ ?>

<h2>your response has been submited</h2>
<?php }
else
echo "no connection";
?>
</h3>
</body>
</html>