<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'lms');

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width,height = device-height, initial-scale=1.0">

<title>     Moodle Courses</title>
<link rel="icon" href="http://localhost/moodle/theme/image.php/boost/theme/1611316766/favicon">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

<link rel="stylesheet" type="text/css" href="slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

<body>

<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary" id="nonprintarea">

<a class="navbar-brand" href="http://localhost/moodle/my/">Moodle</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarNavDropdown">

<ul class="navbar-nav">

<li class="nav-item active">

<a class="nav-link" href="index.php">Courses<span class="sr-only">(current)</span></a>

</li>

<li class="nav-item active">

<a class="nav-link" href="instructors.php">Instructors</a>

</li>

<li class="nav-item active">

<a class="nav-link" href="allCourses.php">All Courses</a>

</li>

<li class="nav-item dropdown active">

<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

Add

</a>

<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

<a class="dropdown-item" href="addcourse.php">Add a Course</a>

<a class="dropdown-item" href="addinstructor.php">Add an Instructor</a>

<a class="dropdown-item" href="#">blah blah</a>

</div>

</li>

</ul>

</div>

</nav>
