<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="grocerstyle2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="groceries.js"></script>
    <script src="navtocart.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<script src="navtoconfirm.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet">
    <title>Ninja Services</title>

</head>
<body>

<div class="horbar1">
       
       <pre class="greet">Welocme                       <button id="confirmorderbut1" onclick="loadpayment()">Confirm the Order</button><button onclick="showcart()" class="cartbut">Your Cart</button></span><br>    <?php  session_start();
           echo $_SESSION['emailid1'];
            ?></pre>
             <pre class="info"> 
             
</div>

<div class="grocers">
<div class="tabrow">

    <div class="tabcol">
        <img height="300px" width="350px" src="mangoes.jpg" alt="">
        <pre font face= 'Love Ya Like A Sister'>
        Alphanso Mangoes           <span><button id="mango"  onclick="mangocall()" name="mango" ><img src="shopping-cart.png" height="30px" width="40px" alt="Add to cart"></button></span>
        Price: 579 Rs             
        Amount: 1 dozen

        </pre>
    </div>
    <div class="tabcol">
        <img height="300px" width="350px"  src="brocoli.jpg" alt="">
        <pre>
        Brocoli                            <span><button id="brocoli" onclick="brocolicall()" name="brocoli"><img src="shopping-cart.png" height="30px" width="40px" alt="Add to cart"></button></span>
        Price: 70 Rs             
        Amount: 1 kg

        </pre>
    </div>
    <div class="tabcol">
        <img height="300px" width="350px"  src="apples.jpg" alt="">
        <pre>
        Apples                            <span><button id="apple" onclick="applecall()" name="apple"><img src="shopping-cart.png" height="30px" width="40px" alt="Add to cart"></button></span>
        Price: 150 Rs
        Amount: 1 dozen

        </pre>
    </div>
    <div class="tabcol">
        <img height="300px" width="350px"  src="tomato.jpg" alt="">
        <pre>
        Tomatoes                       <span><button id="tomato"  onclick="tomatocall()" name="tomato"><img src="shopping-cart.png" height="30px" width="40px" alt="Add to cart"></button></span>
        Price: 119 Rs
        Amount: 1 kg

        </pre>
    </div>
</div>
<div class="tabrow2">
    <div class="tabcol">
        <img height="300px" width="350px" src="oranges.jpg" alt="">
        <pre>
        Oranges                        <span><button id="orange" onclick="orangecall()"  name="orange"><img src="shopping-cart.png" height="30px" width="40px" alt="Add to cart"></button></span>
        Price: 179 Rs
        Amount: 1 kg

        </pre>
    </div>
    <div class="tabcol">
        <img height="300px" width="350px"  src="carrots.jpg" alt="">
        <pre>
        Carrots                          <span><button id="carrot" onclick="carrotcall()"  name="carrot"><img src="shopping-cart.png" height="30px" width="40px" alt="Add to cart"></button></span>
        Price: 79 Rs             
        Amount: 1 kg

        </pre>
    </div>
    <div class="tabcol">
        <img height="300px" width="350px"  src="lettuce.jpg" alt="">
        <pre>
        Lettuce                          <span><button id="lettuce" onclick="lettucecall()"  name="lettuce"><img src="shopping-cart.png" height="30px" width="40px" alt="Add to cart"></button></span>
        Price: 99 Rs             
        Amount: 1 kg

        </pre>
    </div>
    <div class="tabcol">
        <img height="300px" width="350px"  src="grapes.jpg" alt="">
        <pre>
        Green Grapes                     <span><button id="grape"  onclick="grapecall()" name="grape"><img src="shopping-cart.png" height="30px" width="40px" alt="Add to cart"></button></span>
        Price: 129 Rs             
        Amount: 1 dozen

        </pre>
    </div>
   
</div>
</div>

<div id="cartleh">
    <br><br>
<pre>
                Items              Quantity
</pre>
<br>


<div id="mango1">
<pre>Mangoes          <div id="quantity1">0</div></pre><button onclick="addmango()" id="plus1">+</button><button onclick="submango()" id="sub1">-</button>
</div>
<script>
function mangocall(){
    
    document.getElementById("cartleh").style.display="block";
    document.getElementById("mango1").style.display="block";
    }
function addmango(){
  var elementa=document.getElementById("quantity1");
  var gha=elementa.innerHTML;
  ++gha;
  elementa.innerHTML=gha;
  sessionStorage.setItem("gha",gha);
}
function submango(){
    if(document.getElementById("quantity1").innerHTML>0){
  var elementa=document.getElementById("quantity1");
  var gha=elementa.innerHTML;
  --gha;
  elementa.innerHTML=gha;
  sessionStorage.setItem('gha',gha);
    }
}

document.getElementById("mango1").style.display="none";
</script>
<div id="brocoli1">
<pre>Brocoli             <div id="quantity2">0</div></pre><button onclick="addbrocoli()" id="plus2">+</button><button onclick="subbrocoli()" id="sub2">-</button>
</div>
<script>

    function addbrocoli(){
  var elementb=document.getElementById("quantity2");
  var ghb=elementb.innerHTML;
  ++ghb;
  elementb.innerHTML=ghb;
  sessionStorage.setItem('ghb',ghb);
}
function subbrocoli(){
    if(document.getElementById("quantity2").innerHTML>0){
  var elementb=document.getElementById("quantity2");
  var ghb=elementb.innerHTML;
  --ghb;
  elementb.innerHTML=ghb;
  sessionStorage.setItem('ghb',ghb);
    }
}
   

function brocolicall(){
    
    document.getElementById("cartleh").style.display="block";
    document.getElementById("brocoli1").style.display="block";
}

document.getElementById("brocoli1").style.display="none";
</script>

<div id="apple1">
<pre>Apples             <div id="quantity3">0</div></pre><button onclick="addapple()" id="plus3">+</button><button onclick="subapple()" id="sub3">-</button>
</div>
<script>
function applecall(){
    
    document.getElementById("cartleh").style.display="block";
    document.getElementById("apple1").style.display="block";
    }
function addapple(){
  var elementc=document.getElementById("quantity3");
  var ghc=elementc.innerHTML;
  ++ghc;
  elementc.innerHTML=ghc;
  sessionStorage.setItem('ghc',ghc);
}
function subapple(){
    if(document.getElementById("quantity3").innerHTML>0){
  var elementc=document.getElementById("quantity3");
  var ghc=elementc.innerHTML;
  --ghc;
  elementc.innerHTML=ghc;
  sessionStorage.setItem('ghc',ghc);
    }
}

document.getElementById("apple1").style.display="none";
</script>
<div id="tomato1">
<pre>Tomatoes          <div id="quantity4">0</div></pre><button onclick="addtomato()" id="plus4">+</button><button onclick="subtomato()" id="sub4">-</button>
</div>
<script>
function tomatocall(){
    
    document.getElementById("cartleh").style.display="block";
    document.getElementById("tomato1").style.display="block";
    }
    function addtomato(){
  var elementd=document.getElementById("quantity4");
  var ghd=elementd.innerHTML;
  ++ghd;
  elementd.innerHTML=ghd;
  sessionStorage.setItem('ghd',ghd);
}
function subtomato(){
    if(document.getElementById("quantity4").innerHTML>0){
  var elementd=document.getElementById("quantity4");
  var ghd=elementd.innerHTML;
  --ghd;
  elementd.innerHTML=ghd;
  sessionStorage.setItem('ghd',ghd);
    }
}

document.getElementById("tomato1").style.display="none";
</script>
<div id="orange1">
<pre>Oranges            <div id="quantity5">0</div></pre><button onclick="addorange()" id="plus5">+</button><button onclick="suborange()" id="sub5">-</button>
</div>
<script>
function orangecall(){
    
    document.getElementById("cartleh").style.display="block";
    document.getElementById("orange1").style.display="block";
    }
function addorange(){
  var elemente=document.getElementById("quantity5");
  var ghe=elemente.innerHTML;
  ++ghe;
  elemente.innerHTML=ghe;
  sessionStorage.setItem('ghe',ghe);
}
function suborange(){
    if(document.getElementById("quantity5").innerHTML>0){
  var elemente=document.getElementById("quantity5");
  var ghe=elemente.innerHTML;
  --ghe;
  elemente.innerHTML=ghe;
  sessionStorage.setItem('ghe',ghe);
    }
}
document.getElementById("orange1").style.display="none";
</script>
<div id="carrot1">
<pre>Carrots              <div id="quantity6">0</div></pre><button onclick="addcarrot()" id="plus6">+</button><button onclick="subcarrot()" id="sub6">-</button>
</div><script>
function carrotcall(){
    document.getElementById("cartleh").style.display="block";
    document.getElementById("carrot1").style.display="block";
}
    function addcarrot(){
  var elementf=document.getElementById("quantity6");
  var ghf=elementf.innerHTML;
  ++ghf;
  elementf.innerHTML=ghf;
  sessionStorage.setItem('ghf',ghf);
}
function subcarrot(){
    if(document.getElementById("quantity6").innerHTML>0){
  var elementf=document.getElementById("quantity6");
  var ghf=elementf.innerHTML;
  --ghf;
  elementf.innerHTML=ghf;
  sessionStorage.setItem('ghf',ghf);
    }
}
document.getElementById("carrot1").style.display="none";
</script>
<div id="lettuce1" >
<pre>Lettuce              <div id="quantity7">0</div></pre><button onclick="addlettuce()" id="plus7">+</button><button onclick="sublettuce()" id="sub7">-</button>
</div>
<script>
function lettucecall(){
    
    document.getElementById("cartleh").style.display="block";
    document.getElementById("lettuce1").style.display="block";
    }
    function addlettuce(){
  var elementg=document.getElementById("quantity7");
  var ghg=elementg.innerHTML;
  ++ghg;
  elementg.innerHTML=ghg;
  sessionStorage.setItem('ghg',ghg);
}
function sublettuce(){
    if(document.getElementById("quantity7").innerHTML>0){
  var elementg=document.getElementById("quantity7");
  var ghg=elementg.innerHTML;
  --ghg;
  elementg.innerHTML=ghg;
  sessionStorage.setItem('ghg',ghg);
    }
}
document.getElementById("lettuce1").style.display="none";

</script>
<div id="grape1">
<pre>Grapes              <div id="quantity8">0</div></pre><button onclick="addgrape()" id="plus8">+</button><button onclick="subgrape()" id="sub8">-</button>
</div>
<script>
function grapecall(){
    
    document.getElementById("cartleh").style.display="block";
    document.getElementById("grape1").style.display="block";
    }
    function addgrape(){
  var elementh=document.getElementById("quantity8");
  var ghh=elementh.innerHTML;
  ++ghh;
  elementh.innerHTML=ghh;
  sessionStorage.setItem('ghh',ghh);
}
function subgrape(){
    if(document.getElementById("quantity8").innerHTML>0){
  var elementh=document.getElementById("quantity8");
  var ghh=elementh.innerHTML;
  --ghh;
  elementh.innerHTML=ghh;
  sessionStorage.setItem('ghh',ghh);
    }
}
document.getElementById("grape1").style.display="none";
</script>
<br><br>
<span><pre id="totthing">Total Amount: <div id="totalrs">0</div><button id="calc1" onclick="calctot()">Calculate</button></pre></span>
<script>
    function calctot(){
var totalcash=
579*document.getElementById("quantity1").innerHTML+
70*document.getElementById("quantity2").innerHTML+
150*document.getElementById("quantity3").innerHTML+
119*document.getElementById("quantity4").innerHTML+
179*document.getElementById("quantity5").innerHTML+
79*document.getElementById("quantity6").innerHTML+
99*document.getElementById("quantity7").innerHTML+
129*document.getElementById("quantity8").innerHTML;

document.getElementById("totalrs").innerHTML=totalcash;
sessionStorage.setItem('totcash',totalcash);
    }
</script>

</div>
<script>document.getElementById("cartleh").style.display="none";</script>
</body>
</html>