<?php 
session_start();
$login=$_SESSION['login'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
// PONIEDZIALEK //    
if(isset($_POST['i_pon_1545'])){ $login=$_SESSION['login']; $day='Poniedzialek'; $time='15:45'; $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }
    
if(isset($_POST['g_pon_1630'])){ $login=$_SESSION['login']; $day='Poniedzialek'; $time='16:30'; $type='Zajecia grupowe'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }
    
if(isset($_POST['i_pon_1715'])){ $login=$_SESSION['login']; $day='Poniedzialek'; $time='17:15'; $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }
    
if(isset($_POST['i_pon_1800'])){ $login=$_SESSION['login']; $day='Poniedzialek'; $time='18:00'; $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

// WTOREK //
if(isset($_POST['i_wt_1545'])){ $login=$_SESSION['login']; $day='Wtorek'; $time='15:45'; $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }
    
if(isset($_POST['g_wt_1630'])){ $login=$_SESSION['login']; $day='Wtorek'; $time='16:30'; $type='Zajecia grupowe'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

if(isset($_POST['g_wt_1715'])){ $login=$_SESSION['login']; $day='Wtorek'; $time='17:15'; $type='Zajecia grupowe'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

if(isset($_POST['i_wt_1800'])){ $login=$_SESSION['login']; $day='Wtorek'; $time='18:00'; $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

// * ŚRODA *//
if(isset($_POST['g_sr_1600'])){ $login=$_SESSION['login']; $day='Środa'; $time='16:00'; $type='Zajecia grupowe'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }
    
if(isset($_POST['g_sr_1645'])){ $login=$_SESSION['login']; $day='Środa'; $time='16:45'; $type='Zajecia grupowe'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

if(isset($_POST['i_sr_1730'])){ $login=$_SESSION['login']; $day='Środa'; $time='17:30'; $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

if(isset($_POST['i_sr_1815'])){ $login=$_SESSION['login']; $day='Środa'; $time='18:15'; $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

//* CZWARTEK *//
if(isset($_POST['i_czw_1545'])){ $login=$_SESSION['login']; $day='Czwartek'; $time='15:45'; $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

if(isset($_POST['i_czw_1630'])){ $login=$_SESSION['login']; $day='Czwartek'; $time='16:30'; $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

if(isset($_POST['g_czw_1700'])){ $login=$_SESSION['login']; $day='Czwartek'; $time='17:00'; $type='Zajecia grupowe'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

if(isset($_POST['g_czw_1745'])){ $login=$_SESSION['login']; $day='Czwartek'; $time='17:45'; $type='Zajecia grupowe'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }


//* PIĄTEK *//
if(isset($_POST['i_pt_1545'])){ $login=$_SESSION['login']; $day='Piątek'; $time='15:45';  $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

if(isset($_POST['g_pt_1630'])){ $login=$_SESSION['login']; $day='Piątek'; $time='16:30'; $type='Zajecia grupowe'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

if(isset($_POST['g_pt_1715'])){ $login=$_SESSION['login']; $day='Piątek'; $time='17:15'; $type='Zajecia grupowe'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }

if(isset($_POST['i_pt_1800'])){ $login=$_SESSION['login']; $day='Piątek'; $time='18:00'; $type='Zajecia indywidualne'; $date_in = date('Y/m/d H:i:s'); $status = 'Weryfikacja zapisu'; }
    
                /*$conn = mysqli_connect('localhost','root','','inz');*/
                $conn = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "33472118_inz");

                $sql = "INSERT INTO activities (LOGIN,DAY,TIME,TYPE,DATE_IN,STATUS) VALUES ('$login', '$day','$time','$type','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Zapisano na '$type' w '$day' o '$time'\");</script>";
                    echo("<script>location.href = 'account.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
}
     ?>