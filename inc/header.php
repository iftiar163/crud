<?php include "inc/database.php" ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <!-- Bootstrap DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- theme Css -->
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    
    <header>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.php">Manage User</a>
                        </li>
                        <!-- <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="edituser.php">Manage User</a>
                        </li> -->
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="adduser.php">Add New User</a>
                        </li>
                      </ul>
                    </div>
                  </div>
              </nav>
          </div>
        </div>
      </div>
    </header>