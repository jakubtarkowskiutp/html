<?php
session_start();
$login_main = $_SESSION['login'];
$connect = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');

$input = filter_input_array(INPUT_POST);

$date = mysqli_real_escape_string($connect, $input["DATE"]);
$text = mysqli_real_escape_string($connect, $input["TEXT"]);
$author = mysqli_real_escape_string($connect, $input["AUTHOR"]);
$id = mysqli_real_escape_string($connect, $input["ID"]);


if($input["action"] === 'edit')
{
 $query = "
 UPDATE info
 SET DATE = '".$date."',
 TEXT = '".$text."',
 AUTHOR = '".$author."'
 WHERE ID = '".$id."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM info
 WHERE ID = '".$id."'
 ";
 mysqli_query($connect, $query);

}
echo json_encode($input);
?>
