<?php

$UserName="ayon";
$Pass="12345";


$userInput =null;
$passInput =null;


$userInput =$_REQUEST["username"];
$passInput =$_REQUEST["password"];


if($UserName==$userInput && $Pass==$passInput){

    echo <<<HTML
    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="http://www.google.com"><strong>Click here to know more about Ayon<strong></a>
HTML;
}else{
echo <<<HTML
<br>
<br>
<br>
<br>
<br>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container">
<div class="card text-white bg-danger mb-3">
  <center><div class="card-header"><h1>Attention<h1><center>
    <ul class="nav nav-pills card-header-pills">
    
    </ul>
  </div>
  <div class="card-body">
  <center>
      <h3>Permission Required</h3>
      <hr>
    <h5 class="card-title">You are not authorized <br>You do not 
    have permission to access this content. 
    <br> Please contact Admin for authorization</h5>
    
    <br>
  
</center> 
    <a href="https://shahnawaz-ayon.github.io/" class="btn btn-primary">Take Permission</a>
    
    <br>
    <br>
    <p>Contact: ayon.webdev@gmail.com</p>   
</div>
</div>
</div>

HTML;
}
?>