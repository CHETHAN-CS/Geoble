<!DOCTYPE html>
<html>
<head>
  <title>Geoble Homepage</title>
<style>
  input
  {
    width: 700px;
    height: 35px;
    border-radius: 5px;
    border: 1px solid green;
  }
  #searchbtn
  {
    width: 100px;
    height: 35px;
    border-radius: 5px;
    border: 1px solid blue;
    color: blue;
    font-size: 18px;
    background-color: white;
  }
  #searchbtn:hover
  {
    background-color: blue;
    color: white;
  }
</style>
</head>
<body>
  <br><br><br><br>
  <form method="post">
  <center><img src="homepagelogo.jpg" width="45%"></center>
  <br>
  <center><input type="text" name="searchbar"></center>
  <br>
  <center><input type="submit" name="search" id="searchbtn" value="Search"></center>
</body>
</html>
<?php
 if(isset($_POST['search'])){
   $x=$_POST['searchbar'];
   if($x !=''){
     $du='Location: https://www.google.co.in/search?q=';
     $a=$du.$x;
     $lu='&source=hp&ei=bFt9YIOKOYvA3LUPu7GTkA0&iflsig=AINFCbYAAAAAYH1pfOGr-dpi8JDdK-lfjdMh1TZGlxx4&oq=space+space&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAELEDMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADIECAAQAzICCAA6CAgAELEDEIMBOggIABCxAxDJAzoFCAAQkgM6BQguELEDOgsILhCxAxDHARCjAjoICC4QsQMQkwI6BwgAELEDEAo6CAguEMcBEK8BUMAQWI0qYOMsaABwAHgBgAG3DYgB9DySAQs0LTIuMy4wLjMuMZgBAKABAaoBB2d3cy13aXo&sclient=gws-wiz&ved=0ahUKEwiD8KvijIrwAhULILcAHbvYBNIQ4dUDCAg&uact=5';
     $furl=$a.$lu;
     header($furl);
     exit;
   }
 }
?>
