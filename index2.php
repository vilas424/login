<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body bgcolor="lightskyblue">
        <form action="" method="post" name="wt">
        <h1 align="center"><img src="images1.bmp" width="180" height="130"  align="left">
             K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
       <h1 align="center" style=" background-color:orange"><i><marquee>WEB TECHNOLOGY ASSIGNMENT THREE</marquee></i></h1>
                <script>
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","bvb.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;
document.write("<table border='1' bgcolor=00FF99 style=position:absolute;top:250px;left:160px; width='80%' height='100%'>");
var x=xmlDoc.getElementsByTagName("BRANCH");
document.write("<th>Branch-Number </th>");
document.write("<th>Branch-Title </th>");
document.write("<th>Number-of-Staffs </th>");
document.write("<th>Branch-Email </th>");
document.write("<th>Branch-Website</th>");
for (i=0;i<x.length;i++)
  {
  document.write("<tr><td>");
  document.write(x[i].getElementsByTagName("branch-number")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(x[i].getElementsByTagName("branch-title")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(x[i].getElementsByTagName("number-of-staffs")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(x[i].getElementsByTagName("Email")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
   document.write(x[i].getElementsByTagName("branch-website")[0].childNodes[0].nodeValue);
  document.write("</td></tr>");
  }
document.write("</table>");
</script>
        </form>
    </body>
</html>
