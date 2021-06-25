<!DOCTYPE html>
<head>
    <title>Ninja Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <meta name="description" content="High-tech based online product delivery services from Ninja Marts.">
    <link rel="stylesheet" href="stylesignup.css">
    <script src="login.js"></script>
    <script src="signin.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

<?php


function test($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    $data=stripslashes($data);
    return ($data);
}


$emailerr="";
$passerr="";
$email="";
$pass="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(empty($_POST["mail"])){
    $emailerr="* Email is mandatory";
}
elseif(!str_contains($_POST["mail"],"@ninja.com")){
    $emailerr="Only @ninja.com is supported";
}

else{
    $email=test($_POST["mail"]);
}


 $sql="SELECT email,pass FROM logins";
 $resad=mysqli_query($conn,$sql);


 for($v=1;$v<=mysqli_num_rows($resad);$v++)
 {
     $row = mysqli_fetch_assoc($resad);
     if(strcmp($email,$row["email"])==0){
         $email="";
         $emailerr="This email already exists.";
         break;
     }
     else{
         $email=test($_POST["mail"]);
     }
 }

if(empty($_POST["pass"])){
    $passerr="* Password is mandatory";
}
elseif(strlen($_POST["pass"])<8){
    $passerr="Password should be atleast 8 digits long";
}
else{
    $pass=test($_POST["pass"]);
}

if($email==test($_POST["mail"]) && $pass==test($_POST["pass"])){
$server="localhost";
$username="root";
$password="";
$db="emart";

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn){
    echo "Couldn't connect to database" .mysqli_connect_error();
}

$sql="INSERT INTO logins (email,pass)
VALUES ('$email','$pass')";

if(!mysqli_query($conn, $sql)){
    echo "SIGN UP UNSUCCESSFUL";
}
else{
    header('Location:signin.php');
}
mysqli_close($conn);
}
}
?>

<body>
<div class="ocard">
    <div class="card">
        <div class="content">
            <p class="title">Sign up</p><hr>
             <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >
                <label for="email id" id="email">Email ID: </label>
                <input type="email" name="mail" placeholder="only @ninja.com is supported" id="mail">
                <br><span class="red"><?php echo $emailerr ?> </span>
                <br><br>
                <label for="password" id="pass" >Password:  </label>
                <input type="password" name="pass" placeholder="should be atleast 8 characters" id="passw">
                <br><span class="red"><?php echo $passerr ?></span>
                <hr>
                <button type="submit" value="submit" id="signin">Sign up</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>




