<?php include("include/header.php"); ?>

<!--End Top Nav -->
<div class="container-fluid">
    <div class="col-md-12 px-1">
        <div class="col-md-12 px-2">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="text-dark p-3 font-700">Hello Admin
                    </h3>
                </div>

            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 mb-4">
                    <!-- Billing card 1-->
                    <div class="card  border-start-lg border-start-primary main_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-around py-3">
                                <div class="small text-muted ">Total Menu<br>
                                    <span class="h3 d-flex align-items-center ">297</span>
                                </div>


                                <div><img src="assets/images/hot.png" class="dash_menu_img" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3  mb-4">
             
                    <div class="card  border-start-lg border-start-secondary main_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-around py-3">
                                <div class="small text-muted ">Total Revenu<br>
                                    <span class="h3 d-flex align-items-center">500</span>
                                </div>


                                <div><img src="assets/images/dollar-symbol.png" class="dash_menu_img" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 mb-4">
                
                    <div class="card    border-start-lg border-start-secondary main_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-around py-3">
                                <div class="small text-muted ">Total Orders<br>
                                    <span class="h3 d-flex align-items-center">250</span>
                                </div>


                                <div><img src="assets/images/checklist.png" class="dash_menu_img" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 mb-4">
         
                    <div class="card  border-start-lg border-start-success main_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-around py-3">
                                <div class="small text-muted ">Total Customers<br>
                                    <span class="h3 d-flex align-items-center">872</span>
                                </div>


                                <div><img src="assets/images/customer.png" class="dash_menu_img" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card Order_Rate ">
                    <h5 class="px-3 mt-2">Order Rate</h5>
                    <canvas id="piechart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card  popular_food_chart">
                    <h5 class="px-3 mt-2">Popular Food</h5>
                    <canvas id="doughnut"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-3">
            <div class="row">
                <div class="col-md-5">
                    <div class=" card trending_card">
                        <div  class="px-3 mt-2"><h5>Trending</h5>
                        <p class="title">Lorem ipsum dolor sit amet, consectetur</p></div>
                        <div class="progress mt-4">
                            <div class="progress-bar cstm_bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>

                        </div>
                        <div class="mt-1"><span class="title">#pizza</span></div>
                        <div class="progress mt-4">
                            <div class="progress-bar cstm_bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-1 "><span class="title">#Burger</span></div>
                        <div class="progress mt-4">
                            <div class="progress-bar cstm_bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-1"><span class="title">#Coffee</span></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card Activity">
                        <h5 class="px-3 mt-2">Active</h5>
                        <canvas id="chart"></canvas>
                    </div>
                </div>
             
            </div>
        </div>
    </div>

</div>
<?php include("include/footer.php"); ?>