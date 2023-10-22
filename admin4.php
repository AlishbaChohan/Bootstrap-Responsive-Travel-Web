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
                    <span class=" h4 text-start text-success text-uppercase p-2" >Fill Form</span><br><br>

                    <div class="form2 text-center " style="border-top:none;">
                        <form>
                            
                            <label for="name" class="form-label">Name: </label><input type="text" name="name" id="name" required>
                            <!-- <br> -->
                            <label for="" class="form-check-label">Gender: </label>
                            <input type="radio" name="gender" id="gender1" value="1" required><label for="gender1" class="form-check-input">Male</label>
                            <input type="radio" name="gender" id="gender2" value="2" required><label for="gender2" class="form-check-input"> Female</label>
                            <!-- <input type="radio" name="gender" id="gender3" value="3" required><label for="gender3"> Other</label> -->
                            <!-- <br> -->
                            <label for="religon"  class="form-label" >Religon: </label><input type="text" name="religon" id="religon" class="form-control" required>
                            <br>

                            <label for="age"  class="form-label">Age: </label><input type="number" name="age" id="age" class="form-control" required>
                            <label for="dateofbirth" class="form-label">Date of Birth: </label><input type="date" name="dateofbirth" id="dateofbirth" class="form-control" required>
                            <label for="cnic" class="form-label">CNIC:(without dashes) </label><input type="text" maxlength="13" name="cnic" id="cnic" class="form-control" required><br>

                            <label for="fathername"  class="form-label"> Father Name: </label><input type="text" name="fathername" id="fathername" class="form-control"  required>
                            <label for="fathercnic"  class="form-label">Father CNIC : </label><input type="text" name="fathercnic" id="fathercnic" class="form-control"  required><br>
                            <label for="father_occup"  class="form-label">Father Occupation: </label><input type="text" name="father_occup" id="father_occup" class="form-control"  required> 
                            <label for="employer_address"  class="form-label">Father Employer Address: </label><input type="text" name="employer_address" id="employer_address" class="form-control"  required><br>


                            <label for="domicile_no"  class="form-label">Domicile Number: </label><input type="text" name="domicile_no" id="domicile_no" class="form-control"  required>
                            <label for="dateofissue"  class="form-label">Domicile Issue date: </label><input type="text" name="dateofissue" id="dateofissue" class="form-control"  required>
                            <label for="fatherdomicile"  class="form-label">Father Domicile Number: </label><input type="text" name="fatherdomicile" id="fatherdomicile" class="form-control"  required><br>

                            <label for="perm_div" class="form-label">Permenant Division: </label><input type="text" name="perm_div" id="perm_div" class="form-control" required> 
                            <label for="perm_dist" class="form-label">Permenant District: </label><input type="text" name="perm_dist" id="perm_dist" class="form-control" required>
                            <!-- add dropdown -->
                            <label for="perm_add" class="form-label">Permenant Address: </label><input type="text" name="perm_add" id="perm_add" class="form-control" required><br>


                            <label for="pres_div" class="form-label">Present Division: </label><input type="text" name="pres_div" id="pres_div" class="form-control" required>
                            <label for="pres_dist" class="form-label">Present District: </label><input type="text" name="pres_dist" id="pres_dist" class="form-control" required>
                            <!-- add dropdown --> 
                            <label for="pres_add" class="form-label">Present Address: </label><input type="text" name="pres_add" id="pres_add" class="form-control" required><br>


                            <label for="land_no" class="form-label">Landline No: </label><input type="text" name="land_no" id="land_no" class="form-control"  required>
                            <label for="cell_no" class="form-label">Cell No: </label><input type="text" name="cell_no" id="cell_no" class="form-control" required>
                            <label for="whats_no" class="form-label">WhatsApp No: </label><input type="text" name="whats_no" id="whats_no" class="form-control" required>
                            <label for="email" class="form-label">Email: </label><input type="text" name="email" id="email" value="<?php echo $_SESSION['email'];?>" class="form-control" read only><br>


                            <!-- <label for="name">Name: </label><input type="text" name="name" id="name" required><br>
                            <label for="name">Name: </label><input type="text" name="name" id="name" required><br>


                            <label for="name">Name: </label><input type="text" name="name" id="name" required><br>
                            <label for="name">Name: </label><input type="text" name="name" id="name" required><br> -->
<br><br><br>
                        </form>
                      
                    </div>
                </div>  
              <br><br>
            </div>
        </div>
    </div>
</body>
</html>

<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    include('connect.php');
    $id=$_SESSION['id'];
    $name=$_POST['name'];
    $gender =$_POST['gender'];
    $religon=$_POST['religon'];
    $age=$_POST['age'];
    $dob=$_POST['dateofbirth'];
    $cnic=$_POST['cnic'];
    $fathername=$_POST['fathername'];
    $fathercnic=$_POST['fathercnic'];
    $father_occup=$_POST['father_occup'];
    $employer_address=$_POST['employer_address'];
    $domicileno=$_POST['domicileno'];
    $dateofissue=$_POST['dateofissue'];
    $fatherdomicile=$_POST['fatherdomicile'];

    $perm_div=$_POST['perm_div'];
    $perm_dist=$_POST['perm_dist'];
    $perm_add=$_POST['perm_add'];
    $pres_div=$_POST['perm_div'];
    $pres_dist=$_POST['perm_dist'];
    $pres_add=$_POST['perm_add'];

    $land_no=$_POST['perm_div'];
    $whats_no=$_POST['perm_dist'];
    $cell_no=$_POST['perm_add'];
    // $pres_div=$_POST['perm_div'];





 }
?>