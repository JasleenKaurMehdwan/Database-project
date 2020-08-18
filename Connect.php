<?php

$link=mysqli_connect("localhost","root","","customer",3308);

if($link)
{
echo '<script type="text/javascript">';
echo 'alert("Connection made successfully")';
echo '</script>';
}
else
{
echo '<script type="text/javascript">';
echo 'alert("Connection failed!")';
echo '</script>';
}
?>