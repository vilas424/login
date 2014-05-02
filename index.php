<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<?php
include("index_1.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']);
$sql="SELECT * FROM login WHERE aid='$myusername' and pass='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;
header("location: index2.php");
}
else
{
    echo "<script>
            alert('Invalid Adminname And Password!!!');
            window.location.href='index.php'
            </script> ";
}
}
?>
<script type='text/javascript'>
function validate()
{
var op=document.getElementById("operator").value;
op=parseInt(op);
if(op==0)
{
var x=document.forms["login"]["username"].value
var y=document.forms["login"]["password"].value
if(x==null && y==null || x=="" && y=="")
    {
        alert("Adminname and password Cannot Be Left Blank.");
        return false;
    }
if (x==null || x=="")
{
alert("Adminname Cannot Be Left Blank.");
return false;
}
if (y==null || y=="")
{
alert("password Cannot Be Left Blank.");
return false;
}
else
{
return true;
}
}
else  if(op==1)
{
    var x2=document.forms["login"]["username"].value
var y2=document.forms["login"]["password"].value
if(x2==null && y2==null || x2=="" && y2=="")
    {
        alert("Username and password Cannot Be Left Blank.");
        return false;
    }
if (x2==null || x2=="")
{
alert("Username Cannot Be Left Blank.");
return false;
}
if (y2==null || y2=="")
{
alert("password Cannot Be Left Blank.");
return false;
}
else
{
return true;
}
}
else
    {
        alert("Select the type of login first.");
        return false;
    }
}

function log()
{
    this.close();
}
</script>
    <style type="text/css">
        .one{
     text-align:center;

            background-color: cornflowerblue;

           margin-top: 7px;
            margin-left: 7px;
            margin-right: 7px;
            margin-bottom: 7px;
}
.two{
            font-size: 20px;
            font: bolder;
}

    </style>
  </head>
  <body bgcolor="lightskyblue">
      <form action="" method="post" name="login" onsubmit=" return validate();" >
          <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background:  orange"><i><marquee>WELCOME TO BVB COLLEGE</marquee></i></h1>
          <br>
          <br>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
   <p></p>
  <p></p>
  <p></p>
  <table align="center">
      <tr>
          <td rowspan="6">
         <img src="login.png" width="360" height="310" id="rotator">
          </td>
          <td>
                  <br>
              <br>
              <br>
      </tr>
      <tr>
          <td><b class="two">UserName</b> <input type="text" name="username" autofocus ></td>
      </tr>
      <tr>
          <td><b class="two">Password</b> <input type="password" name="password" style=" margin-left: 10px"><br>
              <br>

              <input type="submit"  name="admin" value="LOGIN" style="margin-left: 120px; font-size: 20"> &nbsp;
              
          </td>
      </tr>
  </table>
  <p></p>
  <br>
 <h4 align="center" style=" background:orange "><i>Get ready for quiz!!!!......</i></h4>
      </form>
      </body>
</html>
