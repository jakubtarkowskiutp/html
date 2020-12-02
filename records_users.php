<?php 
session_start();
$login=$_SESSION['login'];
    
// PONIEDZIALEK //    
if(isset($_POST['submit_update'])){ 
         $name_upd=$_POST['name_upd'];
        $mail_upd=$_POST['mail_upd'];
        $phone_upd=$_POST['phone_upd'];
        $id_upd = $_POST['id_upd'];

    
                /*$conn = mysqli_connect('localhost','root','','inz');*/
                $conn = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $sql = "UPDATE users SET name = '".$name_upd."', mail = '".$mail_upd."', phone = '".$phone_upd."' WHERE ID = '".$id_upd."'";




                //$sql = "INSERT INTO activities (LOGIN,DAY,TIME,TYPE,DATE_IN,STATUS) VALUES ('$login', '$day','$time','$type','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Pomyślnie dokonano aktualizacji\");</script>";
                    echo("<script>location.href = 'account_users.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd aktualizacji\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
}
     ?>