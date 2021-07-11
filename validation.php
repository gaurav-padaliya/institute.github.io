<?php
$username = $_POST['email'];
$password = $_POST['password'];
$con =mysqli_connect('localhost','root','','hayat');
mysqli_select_db($con,'hayat');
$q = "select * from logint where username='$username' && password ='$password'";
$result = mysqli_query($con , $q);
// echo $result."hello";
$num = mysqli_num_rows($result);
if($num){
    session_start();
    $_SESSION['password'] = $password;
    // echo "hello world";
    header('location:http://localhost/hayat_institute/contact/view.php');
}
else{
    header('location:http://localhost/hayat_institute/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student login</title>
</head>
<body>
<?php
echo "hello gaurav".$q;
if($num)
?>
</body>
</html>