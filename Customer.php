<?php
ob_start();
session_start();
include 'Connect.php';
$sid="";
$sname="";
$saddress="";
$scity="";
$sphone="";

if(isset($_POST['id']))
{
$sid=$_POST['id'];
}

if(isset($_POST['name']))
{
$sname=$_POST['name'];
}


if(isset($_POST['address']))
{
$saddress=$_POST['address'];
}


if(isset($_POST['city']))
{
$scity=$_POST['city'];
}

if(isset($_POST['phone']))
{
$sphone=$_POST['phone'];
}

 if($link)
{
if(isset($_POST['btnsave']))
{
if(mysqli_query($link,"insert into customer(ID,Name,Address,City,Phone)
values('".$sid."','".$sname."','".$saddress."','".$scity."','".$sphone."')"))
 
{
echo '<script type="text/javascript">';
echo 'alert("Data saved sucessfully")';
echo'</script>';
 
}
else
{
echo '<script type="text/javascript">';
echo 'alert("Data saving failed")';
echo'</script>';
}
}
else if(isset($_POST['btnshow']))
{
$resultSet=mysqli_query($link,"select * from customer");
if(($rows=mysqli_num_rows($resultSet))>0)
{
echo '<table border="1">';
while($array=mysqli_fetch_array
($resultSet,MYSQLI_ASSOC))
{
echo '<tr>';
echo '<td>'.$array['ID'].'</td>';
echo '<td>'.$array['Name'].'</td>';
echo '<td>'.$array['Address'].'</td>';
echo '<td>'.$array['City'].'</td>';
echo '<td>'.$array['Phone'].'</td>';
echo '</tr>';
}
echo '</table>';

}
else
{
echo '<script type="text/javascript">';
echo 'alert("No Records found")';
echo'</script>';
}
}
}
?>



