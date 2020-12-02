<?php
session_start();
$error='';

if(isset($_POST['submit_login'])){
    if(empty($_POST['login']) || empty($_POST['pass'])){
        $error = "Wprowadź dane";
    } else{
        $login=$_POST['login'];
        $pass=$_POST['pass'];
        
        /*$conn = mysqli_connect('localhost','root','','inz');*/
        
        $conn = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');
        
        $query = mysqli_query($conn, "SELECT * FROM users WHERE LOGIN='$login' AND PASSWORD='$pass'");

        $rows = mysqli_num_rows($query);
        
        
        if($rows == 1){
            $_SESSION['login'] = $login;
            echo "<script type='text/javascript'>alert(\"Zalogowano jako '$login'\");</script>";
            echo("<script>location.href = 'account_main.php';</script>");
        } else{
            $error = "Błędny login lub hasło";
        }

        mysqli_close($conn);
    }
}

if(isset($_POST['submit_register'])){
    if(empty($_POST['user_reg']) || empty($_POST['mail_reg']) || empty($_POST['phone_reg']) || empty($_POST['login_reg']) || empty($_POST['pass_reg']) || empty($_POST['pass2_reg'])){
         echo "<script type='text/javascript'>alert(\"Wypełnij wszystkie pola\");</script>";
    } else {
        $user_reg=$_POST['user_reg'];
        $mail_reg=$_POST['mail_reg'];
        $phone_reg=$_POST['phone_reg'];
        $login_reg=$_POST['login_reg'];
        $pass_reg=$_POST['pass_reg'];
        $pass2_reg=$_POST['pass2_reg'];
        $date_in = date('Y-m-d H:i:s');
        $access="USER";

    if($_POST['pass_reg']==$_POST['pass2_reg']){
             /*$conn = mysqli_connect('localhost','root','','inz');*/
        
        $conn = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');

            $query = mysqli_query($conn, "SELECT * FROM users WHERE LOGIN='$login_reg'");

            $rows = mysqli_num_rows($query);
            if($rows == 1){
                mysqli_close($conn);
                 echo "<script type='text/javascript'>alert(\"Użytkownik o loginie: '$login_reg' już istnieje\");</script>";
            echo("<script>location.href = 'loginregister.php';</script>");
            } else {

            /*mysqli_connect('www.jtarkowski.pl','30943828_inz','Baza$danych','30943828_inz');
            $db = mysqli_select_db($conn, "30943828_inz");*/



            $sql = "INSERT INTO users (NAME,MAIL,PHONE,LOGIN,PASSWORD,ACCESS,DATE_IN) VALUES ('$user_reg', '$mail_reg', '$phone_reg','$login_reg', '$pass_reg','$access','$date_in')";

            if ($conn->query($sql) === TRUE) {
                $error = "Rejestracja przebiegła pomyślnie";
            } else {
                $errorreg = "Błąd rejestracji";
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            mysqli_close($conn);
            }
    }else{
                $error = "Hasła nie są zgodne";
            }
    }
}


if(isset($_POST['submit_payments'])){
    if(empty($_POST['type']) || empty($_POST['date'])){
         echo "<script type='text/javascript'>alert(\"Wypełnij wszystkie pola\");</script>";
    } else {
        $login=$_SESSION['login'];
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zakupu';
        
        switch ($_POST['type']) {
    case "Zajecia indywidualne1msc":
        $type="Zajecia indywidualne";
        $stop1 = strtotime($_POST['date']);
        $stop = date("Y-m-d", strtotime("+1 month", $stop1));
        $start=$_POST['date'];
        break;
    case "Zajecia indywidualne3msc":
        $type="Zajecia indywidualne";
        $stop1 = strtotime($_POST['date']);
        $stop = date("Y-m-d", strtotime("+3 month", $stop1));
        $start=$_POST['date'];
        break;
    case "Zajecia grupowe1msc":
        $type="Zajecia grupowe";
        $stop1 = strtotime($_POST['date']);
        $stop = date("Y-m-d", strtotime("+1 month", $stop1));
        $start=$_POST['date'];
        break;
    case "Zajecia grupowe3msc":
        $type="Zajecia grupowe";
        $stop1 = strtotime($_POST['date']);
        $stop = date("Y-m-d", strtotime("+3 month", $stop1));
        $start=$_POST['date'];
        break;
    case "Plan treningowy":
        $type="Plan treningowy";
        $stop1 = strtotime($_POST['date']);
        $stop = date("Y-m-d", strtotime("+1 month", $stop1));
        $start=$_POST['date'];
}
        
        
        
        
        $conn = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');
                /*$conn = mysqli_connect('localhost','root','','inz');*/
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $db = mysqli_select_db($conn, "30943828_inz");
                $sql = "INSERT INTO payments (LOGIN,TYPE,START,STOP,DATE_IN,STATUS) VALUES ('$login', '$type','$start','$stop','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Za chwilę przeniesiesz się na stronę płatności\");</script>";
                    echo "<script type='text/javascript'>alert(\"Zakupiono karnet !\");</script>";
                    echo("<script>location.href = 'account_payments.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
        
   
        
        }
        
        
    
}


//Dodawanie zajęć
if(isset($_POST['submit_add_activities'])){
    if(empty($_POST['type_add']) || empty($_POST['day_add']) || empty($_POST['time_add'])){
         echo "<script type='text/javascript'>alert(\"Wypełnij wszystkie pola\");</script>";
    } else {
        $login="ADMIN";
        $type_add=$_POST['type_add'];
        $day_add=$_POST['day_add'];
        $time_add=$_POST['time_add'];
        $date_in = date('Y/m/d H:i:s');
        $status="Harmonogram";
        
        
        
        
                $conn = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "33472118_inz");

                $sql = "INSERT INTO activities (LOGIN,DAY,TIME,TYPE,DATE_IN,STATUS) VALUES ('$login', '$day_add','$time_add','$type_add','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano zajęcia '$type_add' w '$day_add' o '$time_add'\");</script>";
                    echo("<script>location.href = 'account_activities.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
        
   
        
        }
        
        
    
}

if(isset($_POST['submitgroup'])){
   

        $time=$_POST['submitgroup'];
        $day=$_POST['day'];
        $login=$_SESSION['login'];
        $type="Zajecia grupowe";
        $date_in = date('Y/m/d H:i:s');
        $status = "Weryfikacja zapisu";

        
        
                $conn = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "33472118_inz");

                $sql = "INSERT INTO activities (LOGIN,DAY,TIME,TYPE,DATE_IN,STATUS) VALUES ('$login', '$day','$time','$type','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano zajęcia '$type' w '$day' o '$time'\");</script>";
                    echo("<script>location.href = 'account_activities.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
        
   
        
                
        
    
}
if(isset($_POST['submitindyvidual'])){
   

        $time=$_POST['submitindyvidual'];
        $day=$_POST['day'];
        $login=$_SESSION['login'];
        $type="Zajecia indywidualne";
        $date_in = date('Y/m/d H:i:s');
        $status = "Weryfikacja zapisu";

        
        
                $conn = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "33472118_inz");

                $sql = "INSERT INTO activities (LOGIN,DAY,TIME,TYPE,DATE_IN,STATUS) VALUES ('$login', '$day','$time','$type','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano zajęcia '$type' w '$day' o '$time'\");</script>";
                    echo("<script>location.href = 'account_activities.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
        
   
        
                
        
    
}







     ?>