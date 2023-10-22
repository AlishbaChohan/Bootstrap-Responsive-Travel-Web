<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image" href="img/logo2.png">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>BMC Admin</title>
</head>
<body style="background-color:azure;">
    <div class="container-sm border">
        <div class="row">
            <div class="col border header">
                <div class="align2">
                   <img src="img/logo4.png"><br><br>
                   <span class=" h4 text-start text-white">Bolan Medical College Quetta</span>
                   <br> 
                   <span class="text-start text-white">Admission Portal </span>
               </div>
            </div>
        </div>
        <?php
        include('admin_menu.php');
        ?>
        
        <div class="row bg-white">
            <div class="col">
                <div class="fc2"><br>
                    <span class=" h4 text-start text-success text-uppercase p-2" >Login </span><br><br><br>

                    <div class="form2 text-center " style="border-top:none;">

                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                            <a class="nav-link active" href="#">Personal Information</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Education</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">MBBS college Selection</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">BDS College Choices</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Picture</a>
                            </li>
                        </ul>

                        <div> hdgdgshaujuyjuyju<br><br>ju</div>
                    </div>
                </div>  
              <br><br>
            </div>
        </div>
    </div>
</body>
</html>