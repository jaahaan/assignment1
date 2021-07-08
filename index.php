<html>
<head>
<title>Time to be happy</title>
<style type="text/css">

body{
margin:0;
background-image: url(Dots.png);
background-size:cover;
background-position:center;
}
a:link,a:hover,a:visited,a:active{
text-decoration:none;
color:#ffffff;
}
.navbar{
width:100%;
height:100px;
background-color:#666666;
padding:10px;
text-align:center;
color:#ffffff;
font-size:20;
}

.structure{
width:900px;
height:1000px;
box-shadow:rgba(0,1,2,.5)1px 5px 15px;
margin-right:auto;
margin-left:auto;
}
.banner{
width:900px;
height:400px;
background-color:#ffffff;
}
.menuBox{
width:100%;
height:35px;
background-color:#999999;
padding:10px;
text-align:left;
display:inline-flex;
list-style:none;
}
.menu{
width:100%;
height:20px;
background-color:#000000;
padding:7px;
text-align:center;
color:#ffffff;

}
.menu:hover{
height:18px;
background-color:#808080;
padding:7px;
text-align:center;
text-decoration: underline;
color:#000000;
}
.structure2{
width:695px;
height:455px;
box-shadow:rgba(0,1,2,0)1px 5px 5px;
margin-right:auto;
margin-left:auto;
text-align:center;
font-size:30;
font-weigt:bold;
color:#601A35;
}
.bottom-container{
width:100%;
background-color: black;
text-align:center;
padding:10px;
color: white;
}
.bottom-container a{
color: white;
margin:20px;
}
.bottom-container p{
color: white;
margin-top:20px;
}


</style>

</head>
<body>
<!--navbar starts-->
<div class="navbar">

<h1>Discover Yourself<h1>
</div>
<!--navbar ends-->
<div class="menuBox">
<div class="menu"><a href="#structure2-id">Home</a></div>
<div class="menu"><a href="#">About Us</a></div>
<div class="menu"><a href="#">Service</a></div>
<div class="menu"><a href="#">Contact</a></div>
<div class="menu"><a href="reg.php">Register</a></div>

</div><!--menuBox end-->
<div class="structure">
<div class="banner">
<script language="javaScript">
var i=0;
var path=new Array();
path[0]="Dreams.png";
path[1]="Coffee.png";
function swapImage()
{
document.slide.src=path[i];
if(i<path.length-1)i++;
else i=0;
setTimeout("swapImage()",3000);
}
window.onload=swapImage;
</script>
<img height="400" name="slide" src="Dreams.png" width="900"/> 
</div><!--banner end-->


<div class="structure2" id="structure2-id">
<br>
Hey there!<br>Welcome to our page.<br><br>
We're glad<br>you're here.
</div><!--structure2 end-->

</div><!--structure end-->
<div class="bottom-container">
<a href="#">Facebook</a>
<a href="#">GitHub</a>
<a href="#">LinkedIn</a>
<p>Copyright &copy; Nargish Jahan 2021</p>
</div>
</body>
</html>