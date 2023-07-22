<?php include("include/header.php"); ?>
<link rel="stylesheet" href="assets/css/new.css" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<style>
    .navigation {
        display: none;
    }

    footer {
        display: none;
    }

    .topbar {
        display: none;
    }
</style>
<div class="container-fluid">
    <div class="col-md-12">
        <section class="vh-100">
            <div class="container  h-100">
                
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col col-xl-10 col-md-10 mt-5">
                        <div class="card login_card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block ">
                                    <img src=assets/images/food_logo/food2.png class="login_sidebar_color" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                        <form>

                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <img src="assets/images/food-tray.gif" class="logo_icon_img" alt="">
                                                <span class="h1 fw-bold mb-0 mt-4 px-4">FOOD-FAMILY</span>
                                            </div>

                                            <h5 class="fw-normal mb-4 " style="letter-spacing: 1px;">login into your account</h5>

                                            <div class="form-outline mb-4">
                                                <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example17">Email address</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example27">Password</label>
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <a href=" dashboard.php"> <button class="btn btn-dark btn-lg btn-block" type="button">Login</button></a>
                                            </div>

                                            <a class="small text-muted" href="#!">Forgot password?</a>
                             
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include("include/footer.php"); ?>