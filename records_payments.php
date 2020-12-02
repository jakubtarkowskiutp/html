<?php 
session_start();
$login=$_SESSION['login'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
if(isset($_POST['submit_indyvidual'])){ $type='Zajecia indywidualne'; $login=$_SESSION['login']; $start = date('Y-m-d'); $stop = date('Y-m-d', strtotime(" +1 months")); $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zakupu'; $text = 'Zakupiono miesięczny karnet indywidualny'; }

if(isset($_POST['submit_indyvidual3'])){ $type='Zajecia indywidualne'; $login=$_SESSION['login']; $start = date('Y-m-d'); $stop = date('Y-m-d', strtotime(" +3 months")); $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zakupu'; $text = 'Zakupiono 3-miesięczny karnet indywidualny'; }

if(isset($_POST['submit_group'])){ $type='Zajecia grupowe'; $login=$_SESSION['login']; $start = date('Y-m-d'); $stop = date('Y-m-d', strtotime(" +1 months")); $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zakupu'; $text = 'Zakupiono miesięczny karnet grupowy'; }

if(isset($_POST['submit_group3'])){ $type='Zajecia grupowe'; $login=$_SESSION['login']; $start = date('Y-m-d'); $stop = date('Y-m-d', strtotime(" +3 months")); $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zakupu'; $text = 'Zakupiono 3-miesięczny karnet grupowy'; }

if(isset($_POST['submit_plan'])){ $type='Plan treningowy'; $login=$_SESSION['login']; $start = date('Y-m-d'); $stop = date('Y-m-d', strtotime(" +1 months")); $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zakupu'; $text = 'Zakupiono miesięczny plan treningowy'; }

                
                $conn = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');
                /*$conn = mysqli_connect('localhost','root','','inz');*/
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

                $sql = "INSERT INTO payments (LOGIN,TYPE,START,STOP,DATE_IN,STATUS) VALUES ('$login', '$type','$start','$stop','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"'$text'\");</script>";
                    echo("<script>location.href = 'account.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
}
     ?>