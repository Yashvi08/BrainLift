<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="stylesheet" href="../css/header.css" >
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BrainLift</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 pl-5 custom-nav" >
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
          </li>

          <!-- Main Dropdown for Courses -->
        <li class="nav-item dropdown">
        <a data-mdb-dropdown-init class="nav-link dropdown-toggle" href="#"
          id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          Courses
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="./courses/progcourses.php">Programming Courses</a>
          </li>
          <li>
            <a class="dropdown-item" href="./courses/designing.php">Designing Courses</a>
          </li>

          <li>
            <a class="dropdown-item" href="./courses/developing.php">Developing Courses</a>
          </li>

          <li>
            <a class="dropdown-item" href="./courses/ml.php">Machine Learning Courses</a>
          </li>

          <li>
            <a class="dropdown-item" href="./courses/db.php">Database Courses</a>
          </li>

          <li>
            <a class="dropdown-item" href="./courses/cyber.php">Cybersecurity Courses</a>
          </li>

          <li>
            <a class="dropdown-item" href="./courses/cc.php">Cloud Computing Courses</a>
          </li>

          <li>
            <a class="dropdown-item" href="./courses/ds.php">Data Science & Analytics Courses</a>
          </li>

          <li>
            <a class="dropdown-item" href="./courses/networking.php">Networking Courses</a>
          </li>

          <li>
            <a class="dropdown-item" href="clg.php">
              Academic Courses &raquo;
            </a>
            <ul class="dropdown-menu dropdown-submenu dropdown-menu-dark">
              <li>
                <a class="dropdown-item" href="#">Submenu item 1</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Submenu item 2</a>
              </li>
              
              <li>
                <a class="dropdown-item" href="#">Submenu item 4</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Submenu item 5</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="dropdown-item" href="placement.php">
              Placement Preparation &raquo;
            </a>
            <ul class="dropdown-menu dropdown-submenu dropdown-menu-dark">
              <li>
                <a class="dropdown-item" href="#">Submenu item 1</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Submenu item 2</a>
              </li>
              
              <li>
                <a class="dropdown-item" href="#">Submenu item 4</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Submenu item 5</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Payment Status</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">My Profile</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#LoginModal">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">Sign up</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#feedback">Feedback</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<script src="../js/header.js"></script>
</body>
</html>