<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food-Family</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
        <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- BOX ICONS CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="../contrast-bootstrap-pro/css/cdb.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="">
        <div class="navigation">
            <ul class="menu sidebar" id="sidebar">
                <li>
                    <a href="#" class="logo-center">
                        <span>
                            <img src="assets/images/food_logo/food.png" class="logo" alt="" srcset="">
                        </span>

                    </a>
                </li>

                <li class="">
                    <a href="dashboard.php" class="menu">
                        <span class="icon">
                            <img src="assets/images/menu (2).png" class="sidebar_img" alt="">
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="index.php" class="menu">
                        <span class="icon">
                            <img src="assets/images/page.png" class="sidebar_img" alt="">
                        </span>
                        <span class="title">Menu</span>
                    </a>
                </li>
                <li>
                    <a href="menu.php" class="menu">
                        <span class="icon">
                            <img src="assets/images/favourite.png" class="sidebar_img" alt="">
                        </span>
                        <span class="title">favourite Menu</span>
                    </a>
                </li>


                <li>
                    <a href="order.php" class="menu">
                        <span class="icon">
                            <img src="assets/images/checklist.png" class="sidebar_img" alt="">
                        </span>
                        <span class="title"> Order Details</span>
                    </a>
                </li>



                <li>
                    <a href="Bills.php" class="menu">
                        <span class="icon">
                            <img src="assets/images/bill2.png" class="sidebar_img" alt="">
                        </span>
                        <span class="title">Bill</span>
                    </a>
                </li>

                <li>
                    <a href="order_history.php" class="menu">
                        <span class="icon">
                            <img src="assets/images/file.png" class="sidebar_img" alt="">
                        </span>
                        <span class="title">Order-history</span>
                    </a>
                </li>

                <li>
                    <a href="resturant.php" class="menu">
                        <span class="icon">
                            <img src="assets/images/restaurant_new.png" class="sidebar_img" alt="">
                        </span>
                        <span class="title">Resturant</span>
                    </a>
                </li>
           
                <li>
                    <a href="setting.php" class="menu">
                        <span class="icon">
                            <img src="assets/images/settings (2).png" class="sidebar_img" alt="">
                        </span>
                        <span class="title">Setting</span>
                    </a>
                </li>

                <li class="upgrade_img_box  mt-5 mb-5 text-white p-3 py-4">
                    <span class="upgrade_content"> upgrade Your Account to get your benefits</span>
                    <button type="button" class="btn btn-light upgrade_btn mt-3">upgrade</button>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>


                <div class="d-flex gap-4 align-items-center">
                    <div class="position-relative">
                        <a href="notification.php"><img src="assets/images/notification.png" class="setting_img" alt="">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span></a>
                    </div>
                    <div class="position-relative">
                      <a href="setting.php">  <img src="assets/images/settings.png" class="setting_img" alt=""></a>

                    </div>
                    <div class="dropdown">
                        <a class=" " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/profile.jpg" alt="" class="user">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item " href="profile.php"><i class="fa fa-user icons" aria-hidden="true"></i> &nbsp; <span class="menu_item"> Profile</span></a></li>
                            <li><a class="dropdown-item " href="setting.php"> <i class="fa fa-cogs icons" aria-hidden="true"></i> &nbsp;<span class="menu_item"> Setting</span></a></li>
                            <li><a class="dropdown-item " href="login.php"> <i class="fa fa-sign-out icons" aria-hidden="true"></i> &nbsp;<span class="menu_item"> Logout</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>