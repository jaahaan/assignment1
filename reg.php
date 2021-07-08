<html>
<head>
<title>Registration</title>
<style type="text/css">
a:link,a:hover,a:visited,a:active{
text-decoration:none;
color:#ffffff;
}
.structure{
width:700px;
height:800px;
box-shadow:rgba(0,1,2,33)1px 5px 15px;
margin-right:auto;
margin-left:auto;
}
.banner{
width:700px;
height:400px;
background-color:#ffffff;
}
.menuBox{
width:680px;
height:35px;
background-color:#999999;
padding:10px;
text-align:left;
display:inline-flex;
list-style:none;
}
.menu{
width:200px;
height:20px;
background-color:#000000;
padding:7px;
text-allign:center;
color:#ffffff;
}
.menu:hover{
width:198px;
height:18px;
background-color:#808080;
padding:7px;
text-allign:center;
text-decoration: underline;
color:#000000;
}
.structure2{
width:630px;
height:280px;
box-shadow:rgba(0,1,2,33)1px 5px 15px;
margin-right:auto;
margin-left:auto;
padding:30px
}
.bottom-container{
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
body{
background-image: url(Dots.png);
background-size:cover;
background-position:center;
}
</style>

</head>
<body>

<div class="structure">
<div class="banner">
<script language="javaScript">
var i=0;
var path=new Array();
path[0]="Grow1.png";
path[1]="Happiness.png";
function swapImage()
{
document.slide.src=path[i];
if(i<path.length-1)i++;
else i=0;
setTimeout("swapImage()",3000);
}
window.onload=swapImage;
</script>
<img height="400" name="slide" src="Grow1.png" width="700"/> 
</div><!--banner end-->

<div class="menuBox">
<div class="menu"><a href="reg.html">Register</a></div>

</div><!--menuBox end-->
<div class="structure2">
<form action="submit.php" method="POST">
<table>
<tr>
<td>Name: </td>
<td><input type="text" name="sname"></td>
</tr>

<tr>
<td>Email: </td>
<td><input type="text" name="semail"</td>
</tr>
<tr>
<td>Institute: </td>
<td><input type="text" name="institute"></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</div><!--structure2 end-->
<div class="bottom-container">
<a href="#">Facebook</a>
<a href="#">GitHub</a>
<a href="#">LinkedIn</a>
<p>Copyright &copy; Nargish Jahan 2021</p>
</div>
</div><!--structure end-->

</body>
</html>