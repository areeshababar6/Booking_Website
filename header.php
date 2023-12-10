<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,300&display=swap"
        rel="stylesheet" />
    <script src="jquery.js"></script>
    <link href="web.css" rel="stylesheet" />
</head>

<body id="body">

    <div class=" container-fluid">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-right fixed-top">
            <div class="container-fluid">
                <a href="#" class="navbar-brand"></a>
                <img src="logo2.png" alt="Logo" style="width:100px; height:fit-content" class="fit-content">
                <!-- <a class="navbar-brand" href="javascript:void(0)">Logo</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--Links-->
                <div class="collapse navbar-collapse" id="mynavbar collapsibleNavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="web1.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="bookticket.php" class="nav-link">Book Ticket</a>
                        </li>
                        <li class="nav-item">
                            <a href="cinemaview.php" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown">Contact Us</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="dropdown-item">Phone No</a></li>
                                <li><a href="#" class="dropdown-item">Email</a></li>
                                <li><a href="#" class="dropdown-item">Facebook</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-1" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- <div id="top-bar">
            <nav>
                <a href="login.php">Login</a>
                <a href="web2.php">Sign up</a>
            </nav>
        </div> -->
        <!-- <div class="header">
            <img src="cinemalogo.jpg" alt="logo" />
            <h1>EMPIRE CINEMA & EATERY</h1>
        </div> -->
        <div id="main-menu">
            <nav>
                <a href="web1.php">Home</a>
                <a href="">Now Playing</a>
                <a href="">Coming Soon</a>
                <a href="">Contact & About</a>
                <a href="r-seat.php">Reserved Seats</a>
                <a href="">Eatery</a>
            </nav>
        </div>