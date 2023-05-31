<?php ob_start(); include "inc/header.php" ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <h2>Update User information</h2>

            <?php

              if ( isset ( $_GET['id'] ) ) {

                  $getId = $_GET['id'];

                  $mySql = "SELECT * FROM user_info WHERE id = '$getId'";

                  $getData = mysqli_query($db, $mySql);

                  while( $dataRow = mysqli_fetch_assoc($getData) ) {
                        $id           = $dataRow['Id'];
                        $name         = $dataRow['name'];
                        $fathersName  = $dataRow['fathersName'];
                        $mothersName  = $dataRow['mothersName'];
                        $email        = $dataRow['email'];
                        $phone        = $dataRow['phone'];
                        $address      = $dataRow['address'];
                        ?>

                          <form action="" method="POST">
                              <div class="mb-3">
                                <label>User Name :</label>
                                <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" required>
                              </div>

                              <div class="mb-3">
                                <label>Fathers Name :</label>
                                <input type="text" name="fathersName" value="<?php echo $fathersName; ?>" class="form-control" required>
                              </div>

                              <div class="mb-3">
                                <label>Mothers Name :</label>
                                <input type="text" name="mothersName" value="<?php echo $mothersName; ?>" class="form-control" required>
                              </div>

                              <div class="mb-3">
                                <label>Email Address :</label>
                                <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" required>
                              </div>

                              <div class="mb-3">
                                <label>Phone No :</label>
                                <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control" required>
                              </div>

                              <div class="mb-3">
                                <label>Permanent Address :</label>
                                <input type="text" name="address" value="<?php echo $address; ?>" class="form-control" required>
                              </div>

                              <div class="mb-3">
                                <input type="submit" name="updateData" value="Save Changes" class="btn btn-success">
                              </div>
                          </form>


                        <?php
                        }

                        if ( isset ($_POST['updateData']) ) {
                          $name         = $_POST['name'];
                          $fathersName  = $_POST['fathersName'];
                          $mothersName  = $_POST['mothersName'];
                          $email        = $_POST['email'];
                          $phone        = $_POST['phone'];
                          $address      = $_POST['address'];

                          $mySql = "UPDATE user_info SET name='$name', fathersName='$fathersName', mothersName='$mothersName', email='$email', phone='$phone', address='$address' WHERE Id = '$getId'";

                          $updateData = mysqli_query($db, $mySql);

                          if($updateData){
                            header('Location: index.php');
                          }
                          else{
                            die("MySQli Connection Failed" . mysqli_error($db));
                          }
                        }
                  
              }

            ?>
          </div>
        </div>
      </div>
    </section>

<?php include "inc/footer.php" ?>