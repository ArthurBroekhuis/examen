<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
?>
<style>
.block{
  min-height: 100px;
  width: 90%;
  margin-left: 5%;
  margin-top: 15px;
  background-color: white;
  border-radius: 15px;
}

.user{
  margin: 5%;
  float: left;
}

.date{
  top: 0;
}

ul {
  list-style-type: none;
}

td {
  width: 33%;
}
}
</style>
<div style="font-size: 30px;text-align: center;">Home</div>
<div class="announcement block">
<table>
  <tr>
    <td class="user">Admin</td>
    <td class="date">24-3-2023</td>
  </tr>
  </table>
  <table>
    <tr>
    <td class="text">
      Welkom bij de vernieuwde versie van de uren app, om je uren in te kunnen vullen moet je eerst een account aanmaken</td>
  </tr>
  </table>
</div>
