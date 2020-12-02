<?php
include("check.php");
include("actionadd.php");

$login = $_SESSION['login'];
 $conn2 = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');
        $query2 = "SELECT * FROM users WHERE LOGIN='$login'";
        $result2 = mysqli_query($conn2, $query2);
        
        while($row = mysqli_fetch_array($result2)){$access= $row["ACCESS"];}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

       <title>Płatności</title>

  <link rel="stylesheet" href="styleaccount.css">
      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Gaegu:300,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

</head>
   <?php  
    
    if($access=='ADMIN'){

        $connect2 = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');

        $query2 = "SELECT * FROM payments order by date_in desc";

        $result2 = mysqli_query($connect2, $query2);

    } else {
        
        $connect2 = mysqli_connect('www.jtarkowski.pl','33472118_inz','Baza$danych','33472118_inz');
       
        $query2 = "SELECT * FROM payments WHERE login = '$login' order by date_in desc";
        
        $result2 = mysqli_query($connect2, $query2);
         
        } ?> 
<body>
    <div class="wrapper">
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-240cad7c-e043-4a55-b5d1-afaf46a8e83b"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="index.php"><img src="img/logo.png"></a>

            </div>

            <div class="lineside"></div>
            <ul class="list-unstyled components">
                <p></p>
                <li>
                    <a href="index.php">Strona Główna</a>
                </li>
                <li>
                    <a href="account_main.php">Konto</a>
                </li>
                <li>
                    <a href="account_users.php">Dane</a>
                </li>
                <li>
                    <a href="account_activities.php">Zajęcia</a>
                </li>
                <li class="active">
                    <a href="account_payments.php">Płatności</a>
                </li>
                <li>
                    <a href="account_contact.php">Kontakt</a>
                </li>

                
            </ul>
            <div class="media">
            <ul>
                <li><a href="https://www.facebook.com/manta.torun/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/manta.torun/?hl=pl"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCXBQ3_TL1F6TjTr2rUFNxLA"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        
                    </button>   
                    
                        <ul class="nav navbar-nav ml-auto">
                            <li><a href="" id="login"><?php echo $login?></a></li>
                            <li><a href="logout.php" id="red"><i class="fa fa-power-off"></i> Wyloguj</a>                           
                        </ul>
                   
                </div>
            </nav>
            <div class="row" id="text">
                <div class="col_sm" id="payments_1">
                <h2>Kup Karnet</h2>
                   <form method="post" action="">
                        <div class="form-row">
                            <div class="form-group col-md">
                            <label>Typ Karnetu</label>
                                <select class="form-control" name="type" style="height:40px;">
                                    <option>Wybierz typ</option>
                                    <option value="Zajecia indywidualne1msc">Karnet indywidualny - 200zł/1msc </option>
                                    <option value="Zajecia grupowe1msc">Karnet grupowy - 150zł/1msc </option>
                                    <option value="Zajecia indywidualne3msc">Pakiet indywidualny - 400zł/3msc </option>
                                    <option value="Zajecia grupowe3msc">Pakiet grupowy - 350zł/3msc </option>
                                    <option value="Plan treningowy">Plan treningowy - 100zł/1msc </option>
                                </select>
                            </div>
                        
                    

                            <div class="form-group col-md">
                            <label>Data uruchomienia karnetu</label>
                                <input class="form-control" type="date" name="date"  id="example-date-input" style="height:40px;">
                            </div>



                       </div>


                        <button type="submit" name="submit_payments" class="btn btn-primary">Kup teraz</button>
                    </form>
                </div>
            </div>
            
            <div class="row" id="text">
            <div class="col-sm" id="payments_1">
                <h2>Historia płatności</h2>
                    <div class="table-responsive">  
                    <table id="editable_table2" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                              <tr>
                                <th>Rodzaj karnetu</th>
                                <th>Ważny od</th>
                                <th>Ważny do</th>
                                <th>Data zakupu</th>
                                <th>Status</th>
                              </tr>
                         </thead>

                         <tbody>
                             <?php
                             while($row = mysqli_fetch_array($result2))
                             {
                                 echo '
                              <tr>
                               <td>'.$row["TYPE"].'</td>
                               <td>'.$row["START"].'</td>
                               <td>'.$row["STOP"].'</td>
                               <td>'.$row["DATE_IN"].'</td>
                               <td>'.$row["STATUS"].'</td>
                              </tr>
                              ';    
                                 
                             }mysqli_close($connect2);
                             ?>
                         </tbody>
                    </table>
                    
           </div> 


            </div>
           
            

        </div>
        </div>
                
    </div>


    
</body>

</html>

 <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="js/jquery.tabledit.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   

    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
                }); 

$(document).ready(function(){  
     $('#editable_table1').Tabledit({
      url:'action5.php',
      columns:{
       identifier:[0, "ID"],
       editable:[[1, 'DATE'], [2, 'TEXT']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>
