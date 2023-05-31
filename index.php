<?php ob_start(); include "inc/header.php" ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>All User Information</h1>

            <table class="table table-striped" id="allusers">

                <thead class="table-dark text-center">
                  <tr>
                    <th scope="col">SL.</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Fathers Name</th>
                    <th scope="col">Mothers Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <tbody>

                  <?php

                      $mySql    = "SELECT * FROM user_info ORDER BY name ASC";
                      $allUsers = mysqli_query($db, $mySql);
                      $sl = 0;

                      while($dataRow = mysqli_fetch_assoc($allUsers)) {
                        $id           = $dataRow['Id'];
                        $name         = $dataRow['name'];
                        $fathersName  = $dataRow['fathersName'];
                        $mothersName  = $dataRow['mothersName'];
                        $email        = $dataRow['email'];
                        $phone        = $dataRow['phone'];
                        $address      = $dataRow['address'];
                        $sl++;
                        ?>

                        <tr>
                          <th scope="row"><?php echo $sl; ?></th>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $fathersName; ?></td>
                          <td><?php echo $mothersName; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $phone; ?></td>
                          <td><?php echo $address; ?></td>
                          <td>
                            <div class="btn-group">
                              <a href="edituser.php?id=<?php echo $id; ?>" class="btn btn-success btn-sm">Update</a>
                              <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-<?php echo $id; ?>">Erase</a>
                            </div>
                          </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="delete-<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Do You Want To Erase This User?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-lg-12 text-center">
                                      <a href="index.php?did=<?php echo $id; ?>" class="btn btn-success">Yes</a>
                                      <button class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php
                      }

                  ?>

                </tbody>
              </table>
              <!-- Delete Fucntion -->

                  <?php

                    if ( isset( $_GET['did'] ) ){
                          $eraseId = $_GET['did'];

                          $mySql = "DELETE FROM user_info WHERE id ='$eraseId'";

                          $eraseConf = mysqli_query($db, $mySql);

                          if ( $eraseConf ) {
                            header("Location: index.php");
                          }
                          else {
                            die("MySQli Connection Failed" . mysqli_error($db));
                          }
                        }

                  ?>
          </div>
        </div>
      </div>
    </section>

<?php include "inc/footer.php" ?>