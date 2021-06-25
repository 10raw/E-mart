<!DOCTYPE html>
<head>
    <title>Ninja Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <meta name="description" content="High-tech based online product delivery services from Ninja Marts.">
    <link rel="stylesheet" href="style3.css">
    <sc src="signin.js"></sc>
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    
</head>

<?php
session_start();
 $credentialerr="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
global $emailid;
$emailid=$_POST["mail2"];
global $password;
$password1=$_POST["pass2"];

    $server="localhost";
    $username="root";
    $password="";
    $db="emart";
    $conn=mysqli_connect($server,$username,$password,$db);
    if(!$conn){
        echo "Couldn't connect to database" .mysqli_connect_error();
    }
    
$sql="SELECT email,pass FROM logins";
$resad=mysqli_query($conn,$sql);
$count=1;

while( $row = mysqli_fetch_assoc($resad))
{
    if(strcmp($emailid,$row["email"])==0 && strcmp($password1,$row["pass"])==0){
      
        $_SESSION['emailid1']=$emailid;
        // echo "<script>sendcreds($emailid,$password);</script>";
        header('Location:frontpage.php');
        break;
    }
    else{
        if($count==mysqli_num_rows($resad)){
            $credentialerr="Invalid email or password. Try again.";
            break;
        }
        else{
        $count =$count+1;
        continue;
        }
    }
}
}

?> 
<body>

    <div class="ocard2">
        <div class="card2">
            <div class="content2">
                <p class="title2">Sign in</p><hr>
                <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >
                <label for="email id" id="email2">Email ID: </label>
                <input type="email" name="mail2" placeholder="@ninja.com is only supported" id="mail2">
                <br><span class="red2"><?php echo $credentialerr ?></span>
                <br><br>
                <label for="password" id="pass2">Password:  </label>
                <input type="password" name="pass2" id="passw2">
                <br><span class="red2"></span>
                <hr>
                <button type="submit" value="submit" id="signin2">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
