<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Management</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
  <style>
    * {
      font-family: 'Montserrat', serif;
    }
  </style>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E0E6E5;">
    <a class="navbar-brand text-danger" href="./index.php">Class Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="students.php">Students<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="teachers.php">Teachers</a>
        </li>
      </ul>
      <ul class="navbar-nav mr-auto justify-content-center">
        <li class="nav-item active" style="padding-left:20px;">
          <div class="center navbar-collapse my-2 my-lg-2" style="margin: auto;">
            <a href="t_registration.php">
              <button class="btn btn-primary">Register Teacher</button>
            </a>
          </div>
        </li>
        <li class="nav-item active" style="padding-left:20px;">
          <div class="center navbar-collapse my-2 my-lg-2" style="margin: auto;">
            <a href="student_registration.php">
              <button class="btn btn-primary">Register Student</button>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>