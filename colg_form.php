<form action="college_choices.php" method="POST">
                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">1st Priority: </label>
                                <input type="hidden" value="1" name="cp1">
                                        <select name="pri1" id="degree" class="form-control" required> 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">2nd Priority: </label>
                                <select name="pri2" id="degree" class="form-control" required> 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>
                                                        
                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">3rd Priority: </label>

                                <select name="pri3" id="degree" class="form-control" required> 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">4th Priority: </label>
                                <select name="pri4" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">5th Priority: </label>
                                <select name="pri5" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">6th Priority: </label>
                                <select name="pri6" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">7th Priority: </label>
                                <select name="pri7" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">8th Priority: </label>
                                <select name="pri8" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">9th Priority: </label>
                                <select name="pri9" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">10th Priority: </label>
                                <select name="pri10" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">11th Priority: </label>
                                <select name="pri11" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">12th Priority: </label>
                                <select name="pri12" id="degree" class="form-control" required> 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">13th Priority: </label>
                                <select name="pri13" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">14th Priority: </label>
                                <select name="pri14" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">15th Priority: </label>
                                <select name="pri15" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">16th Priority: </label>
                                <select name="pri16" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">17th Priority: </label>
                                <select name="pri17" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">18th Priority: </label>
                                <select name="pri18" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">19th Priority: </label>
                                <select name="pri19" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>
                                <br> <hr>
                                <span class=" h4 text-start text-success text-uppercase p-2" >BDS College Choices</span><br><br>
                                <form>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">1st Priority: </label>
                                <select name="pri20" id="degree" class="form-control" required> 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">2nd Priority: </label>
                                <select name="pri21" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col p-2">
                                <label for="name" class="form-label">3rd Priority: </label>
                                <select name="pri22" id="degree" class="form-control" > 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM colleges";
                                                    $result=mysqli_query($conn,$sql);
                                                    // $rowcount=mysqli_num_rows($result);
                                                    //  for ($i=1;$i<=$rowcount;$i++){
                                                        
                                                    //  }
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm ">
                                        <br>
                                        <label class="text-danger">Please save the information before proceeding to next.</label> <br><br>
                                        <?php 
                                        // include("prsquery.php");
                                        ?>
                                    </div>
                                    <div class="col-sm text-end">
                                        <br>
                                        <input type="submit" value="Save" class="btn btn-primary "><br>
                                    </div>
                                </div>

                                


                        

                        
                        </form>
                        
                        <!-- <br><br><br> -->