<?php 

if(isset($_POST['submit_indyvidual'])){
   
        $type='Zajecia indywidualne';
        $login=$_SESSION['login'];
        $start = date('Y-m-d');
        $stop = date('Y-m-d', strtotime(" +1 months"));
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zakupu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

                $sql = "INSERT INTO payments (LOGIN,TYPE,START,STOP,DATE_IN,STATUS) VALUES ('$login', '$type','$start','$stop','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Zakupiono miesięczny karnet na zajęcia indywidualne\");</script>";
                    echo("<script>location.href = 'account.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
    }

if(isset($_POST['submit_indyvidual3'])){
   
        $type='Zajecia indywidualne';
        $login=$_SESSION['login'];
        $start = date('Y-m-d');
        $stop = date('Y-m-d', strtotime(" +3 months"));
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zakupu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");
                
                $sql = "INSERT INTO payments (LOGIN,TYPE,START,STOP,DATE_IN,STATUS) VALUES ('$login', '$type','$start','$stop','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Zakupiono 3 miesięczny karnet na zajęcia indywidualne\");</script>";
                    echo("<script>location.href = 'account.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
    }

if(isset($_POST['submit_group'])){
   
        $type='Zajecia grupowe';
        $login=$_SESSION['login'];
        $start = date('Y-m-d');
        $stop = date('Y-m-d', strtotime(" +1 months"));
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zakupu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

                $sql = "INSERT INTO payments (LOGIN,TYPE,START,STOP,DATE_IN,STATUS) VALUES ('$login', '$type','$start','$stop','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Zakupiono miesięczny karnet na zajęcia grupowe\");</script>";
                    echo("<script>location.href = 'account.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
    }

if(isset($_POST['submit_group3'])){
   
        $type='Zajecia grupowe';
        $login=$_SESSION['login'];
        $start = date('Y-m-d');
        $stop = date('Y-m-d', strtotime(" +3 months"));
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zakupu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

                $sql = "INSERT INTO payments (LOGIN,TYPE,START,STOP,DATE_IN,STATUS) VALUES ('$login', '$type','$start','$stop','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Zakupiono 3 miesięczny karnet na zajęcia grupowe\");</script>";
                    echo("<script>location.href = 'account.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
    }

if(isset($_POST['submit_plan'])){
   
        $type='Plan treningowy';
        $login=$_SESSION['login'];
        $start = date('Y-m-d');
        $stop = date('Y-m-d', strtotime(" +1 months"));
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zakupu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

                $sql = "INSERT INTO payments (LOGIN,TYPE,START,STOP,DATE_IN,STATUS) VALUES ('$login', '$type','$start','$stop','$date_in','$status')";
                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Zakupiono plan treningowy\");</script>";
                    echo("<script>location.href = 'account.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
    }
if(isset($_POST['i_pon_1545'])){
    
        $login=$_SESSION['login'];
        $day='Poniedzialek';
        $time='15:45';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['g_pon_1630'])){
    
        $login=$_SESSION['login'];
        $day='Poniedzialek';
        $time='16:30';
        $type='Zajecia grupowe';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['i_pon_1715'])){
    
        $login=$_SESSION['login'];
        $day='Poniedzialek';
        $time='17:15';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['i_pon_1800'])){
    
        $login=$_SESSION['login'];
        $day='Poniedzialek';
        $time='18:00';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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

// * WTOREK *//
if(isset($_POST['i_wt_1545'])){
    
        $login=$_SESSION['login'];
        $day='Wtorek';
        $time='15:45';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['g_wt_1630'])){
    
        $login=$_SESSION['login'];
        $day='Wtorek';
        $time='16:30';
        $type='Zajecia grupowe';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
               /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['g_wt_1715'])){
    
        $login=$_SESSION['login'];
        $day='Wtorek';
        $time='17:15';
        $type='Zajecia grupowe';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['i_wt_1800'])){
    
        $login=$_SESSION['login'];
        $day='Wtorek';
        $time='18:00';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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

// * ŚRODA *//
if(isset($_POST['g_sr_1600'])){
    
        $login=$_SESSION['login'];
        $day='Środa';
        $time='16:00';
        $type='Zajecia grupowe';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['g_sr_1645'])){
    
        $login=$_SESSION['login'];
        $day='Środa';
        $time='16:45';
        $type='Zajecia grupowe';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
               /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['i_sr_1730'])){
    
        $login=$_SESSION['login'];
        $day='Środa';
        $time='17:30';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
               /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['i_sr_1815'])){
    
        $login=$_SESSION['login'];
        $day='Środa';
        $time='18:15';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
               /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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

//* CZWARTEK *//
if(isset($_POST['i_czw_1545'])){
    
        $login=$_SESSION['login'];
        $day='Czwartek';
        $time='15:45';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['i_czw_1630'])){
    
        $login=$_SESSION['login'];
        $day='Czwartek';
        $time='16:30';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['g_czw_1700'])){
    
        $login=$_SESSION['login'];
        $day='Czwartek';
        $time='17:00';
        $type='Zajecia grupowe';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
               /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['g_czw_17:45'])){
    
        $login=$_SESSION['login'];
        $day='Czwartek';
        $time='17:45';
        $type='Zajecia grupowe';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
//* PIĄTEK *//

if(isset($_POST['i_pt_1545'])){
    
        $login=$_SESSION['login'];
        $day='Piątek';
        $time='15:45';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['g_pt_1630'])){
    
        $login=$_SESSION['login'];
        $day='Piątek';
        $time='16:30';
        $type='Zajecia grupowe';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
               /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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
if(isset($_POST['g_pt_1715'])){
    
        $login=$_SESSION['login'];
        $day='Piątek';
        $time='17:15';
        $type='Zajecia grupowe';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
               /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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

if(isset($_POST['i_pt_1800'])){
    
        $login=$_SESSION['login'];
        $day='Piątek';
        $time='18:00';
        $type='Zajecia indywidualne';
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zapisu';
    
                /*$conn = mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');*/
                $conn = mysqli_connect('localhost','root','','inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "30943828_inz");

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