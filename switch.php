<!DOCTYPE html>
<html>
    <center>  
<head>  
    <title>
    Portfolio 
</title>
<style>
body {
    background-image: url("Coder.gif");
    background-color: grey;
}  
</style>
</head> 

<body>
<h1> Apoorva Patil </h1>
<h2> Student <h2>
    <p>
        <a href = "www.linkedin.com/in/theapoorvapatil"> Visit My Linkedin!</a>
    </p>
 <center>
     <img src = "girl.jpg" alt="Coder" width="125" height="125">
 </center>

 <?php 
 $expertise = "cloud";
 
 switch($expertise){
     case "database";
     echo"<p> <font color=blue>My Expertise is in Database.</font> </p>";
     break;
     case "cloud";
     echo"<p> <font color=blue>My Expertise is in Cloud.</font> </p>";
     break;
     case "linux";
     echo"<p> <font color=blue>My Expertise is in linux.</font> </p>";
     break;
     case "networking";
     echo"<p> <font color=blue>My Expertise is in networking.</font> </p>";
     break;
     default:
     echo "My expertise is in neither database, linux nor networking";
 }
?>
</body>  
</center>
</html>