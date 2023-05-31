<?php include "inc/header.php" ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <h2>Add New User</h2>

            <form action="" method="POST">
              <div class="mb-3">
                <label>User Name :</label>
                <input type="text" name="name" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Fathers Name :</label>
                <input type="text" name="fathersName" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Mothers Name :</label>
                <input type="text" name="mothersName" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Email Address :</label>
                <input type="text" name="email" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Phone No :</label>
                <input type="text" name="phone" class="form-control" required>
              </div>

              <div class="mb-3">
                <label>Permanent Address :</label>
                <input type="text" name="address" class="form-control" required>
              </div>

              <div class="mb-3">
                <input type="submit" name="addUser" value="Add Information" class="btn btn-success">
              </div>
            </form>

            <?php

              if ( isset($_POST['addUser']) ) {

                  $name         = $_POST['name'];
                  $fathersName  = $_POST['fathersName'];
                  $mothersName  = $_POST['mothersName'];
                  $email        = $_POST['email'];
                  $phone        = $_POST['phone'];
                  $address      = $_POST['address'];

                  // Syntax to send these data to system database

                  $mySql = "INSERT INTO user_info (name, fathersName, mothersName, email, phone, address) VALUES ('$name', '$fathersName', '$mothersName', '$email', '$phone', '$address') ";

                  $addUser = mysqli_query($db, $mySql);

                  if ( $addUser ) {
                    header("Location: index.php");
                  }
                  else {
                    die("MySQli Connection Failed" . mysql_error($db));
                  }

              }

            ?>


          </div>
        </div>
      </div>
    </section>

<?php include "inc/footer.php" ?>