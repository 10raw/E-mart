<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="stylefront.css">
    <script src="groceries.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant&display=swap" rel="stylesheet">


    <title>Ninja Services</title>
</head>
<body>
    <div class="horbar">
    
     <pre class="greet"> <img src="user1.png" id="userprof" width="60px" height="60px" alt="">Welocme   <?php session_start();
        echo $_SESSION['emailid1'];
         ?></pre> 
          <pre class="info">
Order the Items Online
Exclusively delivered
by bots at Ninja Store!
              
We care about Your
Safety always
Maintain Social
Distancing
And Together we'll
fight Covid-19!!!

        </pre>
    </div>
    
    <div class="categories">
        <div class="table-row">
            <div class="table-cell">
                <p>Groceries</p>
            <img src="groceries.jpg" height="250px"width="300px" alt=""><br>
            <button class="a" >View Items</button>
            <!--unless u write submit it won't work -->
            </div>
            <div class="table-cell">
            <p>Fruits and Vegetables</p>
            <img src="vegiesfruits.jpg" height="250px" width="300px" alt=""><br>
            <button class="b" type="submit" onclick="groceries()">View Items</button>
            </div>
            <div class="table-cell">
            <p>Food Essentials</p>
            <img src="othergroceries.jpg" height="250px"width="300px" alt=""><br>
            <button class="c" >View Items</button>
            </div>
        </div>
        <div class="table-row">
            <div class="table-cell">
                <p>Freezer items</p>
            <img src="freeze.jpg" height="250px"width="300px" alt=""><br>
            <button class="d">View Items</button>
            </div>
            <div class="table-cell">
                <p>Essentials</p>
            <img src="daily.jpg" height="250px"width="300px" alt=""><br>
            <button class="e">View Items</button>
            </div>
            <div class="table-cell">
                <p>Other Items</p>
            <img src="snacks.jpg" height="250px"width="300px" alt=""><br>
            <button class="f">View Items</button>
            </div>
        </div>
    </div>
</body>
</html>