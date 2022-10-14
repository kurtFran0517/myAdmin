<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/adminpage.css">
   <script src="https://kit.fontawesome.com/147e2a0fb0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class = "sidebar">
        
            <div class="sidebar-menu">
            <ul>
                <li><a href="#" class="logo">
                <img src="images/logo2.jpg" alt="" >
                <span class="nav-item">Admin Dashboard</span>
                </a></li>

                <li><a href="#">
                    <i class="fa-solid fa-house-chimney"></i>
                    <span class="nav-item">Dashboard</span>
                </a></li>

                <li><a href="#">
                    <i class="fa-regular fa-clipboard"></i>
                    <span class="nav-item">Quiz Records</span>
                </a></li>

                <li><a href="#">
                    <i class="fa-solid fa-users"></i>
                    <span class="nav-item">Users</span>
                </a></li>

                <li><a href="#">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="nav-item">Activity Tracker</span>
                </a></li>

                <li><a href="#">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item">User Accounts and Rights </span>
                </a></li>

                <li><a href="#">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <span class="nav-item">Send Notifications</span>
                </a></li>

                <li><a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span class="nav-item">Settings</span>
                </a></li>

                <li><a href="#">
                    <i class="fa-solid fa-gears"></i>
                    <span class="nav-item">Web Settings</span>
                </a></li>

                <li><a href="<?php echo base_url(); ?>index.php/user/logout" class="btn btn-danger">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Logout</span>
                </a></li>

            </ul>
        </div>
        </div>
   

<div class="main-content">
        <header>
            <h3>
                    <span class="fa-solid fa-bars"></span>    
            </h3>

            <div class="user-wrapper">
                <i class="fa-solid fa-user-tie"></i>
                <small>kurtfrancisco</small>
            </div>
        </header>

        <main>
            <div class="cards">

            <div class="card-single">
                <div>
                    <span class="fa-solid fa-users-between-lines"></span>
                </div>
                <div>
                    <span>Registered Devices</span>
                    <h4>3512</h4>
            </div>
        </div>
            <div class="card-single">
                <div>
                    <span class="fa-solid fa-user-secret"></span>
                </div>
                <div>
                    <span>System Users</span>
                    <h4>0</h4>
                </div>
                </div>
        </div>
        </main>
</div>
</body>
</html>