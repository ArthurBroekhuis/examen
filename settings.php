<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
?>
<body>
<a href="index.php" class="button button1">Uitloggen</a>
</body>
<style>
.button {
    border: none;
    margin-top: 20px;
    text-align: center;
    text-decoration: none;
    font-size: 40px;
    width: 70%;
    height: 70px;
    align-items: center;
    float: left;
    margin-left: 15%;
}
.button1 {
  background-color: var(--first-color); 
  color: white; 
}
</style>