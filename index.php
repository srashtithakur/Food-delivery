<?php include("include/header.php"); ?>

<!--End Top Nav -->
<div class="container-fluid px-3">
  <div class="col-md-2">
    <h3 class="text-dark p-3 font-700">Menu
    </h3>
  </div>
  <div class="col-md-12 px-2 mt-4">
    <div class="row">

      <div class="col-md-7 py-3">
        <div class="input-group">
          <input class="form-control  search_control" type="search" placeholder="What do you want to eat today" value="" id="example-search-input">
          <span class="input-group-append">
            <button class="btn icon_btn3" type="button">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </div>
      <div class="col-md-5 py-3">
        <button type="button" class="btn  add_resturant" data-bs-toggle="modal" data-bs-target="#add_menu">Add New Menu</button>
      </div>

    </div>
  </div>
  <div class="col-md-10">
    <div class="offer_box py-4 mt-3">
      <div class="img_box"> <img src="assets/images/girl_img.png" alt=""></div>
      <div>
        <h3 class="text-white px-5">Get 10% Discount Voucher<br></h3>
        <h3 class="text-white px-5">Up To 20 %</h3>
        <p class="text-white px-5 font11">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> Alias deserunt iure consectetur accusantium

      </div>


    </div>
  </div>

  <div class="mb-4 mt-5 ">
    <h5 class="font-bold">Category</h5>
  </div>

  <div class="col-md-12">
    <div class="row mt-3">
      <div class="col-md-5 col-lg-2  col-4 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_card ">
            <div class="card-body">
              <img src="assets/images/pizza_new.png" style="padding: 0px 4px 3px 12px;height: 60px;" class="img-fluid " alt="logo">
              <p class="text-center">Pizza</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-5 col-lg-2  col-4 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_card ">
            <div class="card-body">
              <img src="assets/images/fast-food.png" style="padding: 0px 4px 3px 12px;height: 60px;" class="img-fluid " alt="logo">
              <p class="text-center">Hot Dog</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-5 col-lg-2  col-4 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_card ">
            <div class="card-body">
              <img src="assets/images/french-fries.png" style="padding: 0px 4px 3px 12px;height: 60px;" class="img-fluid " alt="logo">
              <p class="text-center">French-fries</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-5 col-lg-2  col-4 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_card ">
            <div class="card-body">
              <img src="assets/images/pancake.png" style="padding: 0px 4px 3px 12px;height: 60px;" class="img-fluid " alt="logo">
              <p class="text-center">Cake</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-5 col-lg-2  col-4 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_card ">
            <div class="card-body">
              <img src="assets/images/pizza.png" style="padding: 0px 4px 3px 12px;height: 60px;" class="img-fluid " alt="logo">
              <p class="text-center">Pizza</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-5 col-lg-2  col-4 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_card ">
            <div class="card-body">
              <img src="assets/images/smoothie.png" style="padding: 0px 4px 3px 12px;height: 60px;" class="img-fluid " alt="logo">
              <p class="text-center">Smoothie</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-5 col-lg-2  col-4 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_card ">
            <div class="card-body">
              <img src="assets/images/pancake.png" style="padding: 0px 4px 3px 12px;height: 60px;" class="img-fluid " alt="logo">
              <p class="text-center">Cake</p>
            </div>

          </div>
        </a>
      </div>

    </div>
  </div>


  <div class="col-md-12 px-2 mt-5">
    <div class="mb-4 px-2 menu_mobile_box">
      <h5 class="font-bold">BestSeller</h5>
    </div>
    <div class="row mt-3 menu_mobile_box">
      <div class="col-md-2 col-lg-2 col-sm-2 col-2 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_big_card">
            <div class="card-body">
              <span class="badge cstm_badge">15% off</span>
              <span id=heart><i class="fa fa-heart-o heart_icon" aria-hidden="true"></i> </span>
              <img src="assets/images/burger-big.jpg" class="img-fluid " alt="logo">
              <div class="small-ratings px-4">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>

              </div>
              <div class="px-4 dissadd_box">
                <span>Fish burger</span><br>
                <span class="dollar"> &#36; </span><b>5.59</b>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-lg-2 col-sm-2 col-2 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_big_card">
            <div class="card-body">
              <span class="badge cstm_badge">15% off</span>
              <span id=heart><i class="fa fa-heart-o heart_icon" aria-hidden="true"></i> </span>
              <img src="assets/images/burger-big.jpg" class="img-fluid " alt="logo">
              <div class="small-ratings px-4">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>

              </div>
              <div class="px-4 dissadd_box">
                <span>Fish burger</span><br>
                <span class="dollar"> &#36; </span><b>5.59</b>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-lg-2 col-sm-2 col-2 mb-2 w-auto">
        <a href="">

          <div class="card shadow-md food_big_card">

            <div class="card-body">
              <span class="badge cstm_badge">15% off</span>
              <span id=heart><i class="fa fa-heart-o heart_icon" aria-hidden="true"></i> </span>
              <img src="assets/images/burger-big.jpg" class="img-fluid " alt="logo">
              <div class="small-ratings px-4">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>

              </div>
              <div class="px-4 dissadd_box">
                <span> Veg burger</span><br>
                <span class="dollar"> &#36; </span><b>5.59</b>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-lg-2 col-sm-2 col-2 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_big_card">
            <div class="card-body">
              <span class="badge cstm_badge">15% off</span>
              <span id=heart><i class="fa fa-heart-o heart_icon" aria-hidden="true"></i> </span>
              <img src="assets/images/burger-big.jpg" class="img-fluid " alt="logo">
              <div class="small-ratings px-4">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>

              </div>
              <div class="px-4 dissadd_box">
                <span> Cheese burger</span><br>
                <span class="dollar"> &#36; </span><b>5.59</b>
              </div>
            </div>


          </div>
        </a>
      </div>

    </div>
  </div>
  <div class="col-md-10 px-2  menu_mobile_box">
    <div class="mb-4 mt-5 px-2 menu_mobile_box">
      <h5 class="font-bold">Recent Menu</h5>
    </div>
    <div class="row mt-3 menu_mobile_box">
      <div class="col-md-2 col-lg-2 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_big_card">
            <div class="card-body">

              <img src="assets/images/noodles.jpg" class="img-fluid " alt="logo">

              <div class="px-4 disname_box">
                <span>Noodles</span><br>
                <span class="dollar"> &#36; </span><b>5.59</b><br>
                <span>4.97km &nbsp;21min</span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-lg-2 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_big_card">
            <div class="card-body">

              <img src="assets/images/noodles.jpg" class="img-fluid " alt="logo">

              <div class="px-4 disname_box">
                <span>Noodles</span><br>
                <span class="dollar"> &#36; </span><b>5.59</b><br>
                <span>4.97km &nbsp;21min</span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-lg-2 mb-2 w-auto">
        <a href="">

          <div class="card shadow-md food_big_card">

            <div class="card-body">

              <img src="assets/images/american-pizza.jpg" class="img-fluid " alt="logo">

              <div class="px-4 disname_box">
                <span> American-pizza</span><br>
                <span class="dollar"> &#36; </span><b>5.59</b>
                <br>
                <span>4.97km &nbsp;21min</span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-lg-2 mb-2 w-auto">
        <a href="">
          <div class="card shadow-md food_big_card">
            <div class="card-body">

              <img src="assets/images/burger-big.jpg" class="img-fluid " alt="logo">

              <div class="px-4 disname_box">
                <span> Cheese burger</span><br>
                <span class="dollar"> &#36; </span><b>5.59</b>
                <br>
                <span>4.97km &nbsp;21min</span>
              </div>
            </div>


          </div>
        </a>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="add_menu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background: #ecf1f5;border-radius: 15px;">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label cstm_label">Menu Name</label>
                                    <input type="email" class="form-control coustom_control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label cstm_label">Price</label>
                                    <input type="email" class="form-control coustom_control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label cstm_label">Menu Code</label>
                                    <input type="email" class="form-control coustom_control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label cstm_label">Offer Code</label>
                                    <input type="email" class="form-control coustom_control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label cstm_label">Food Category</label>
                                <select class="form-select coustom_control" aria-label="Default select example">
                                    <option selected>South Indian</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label cstm_label">Food Items</label>
                                <select class="form-select coustom_control" aria-label="Default select example">
                                    <option selected>Idli/sambhar</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label cstm_label">Food Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 150px; border-radius:10px;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <label for="exampleFormControlTextarea1" class="form-label cstm_label">Upload Menu Image</label>
                                <form id="file-upload-form" class="uploader">
                                    <input id="file-upload" type="file" name="fileUpload" accept="image/*" style="height: 150px; border-radius:10px;" />

                                    <label for="file-upload" id="file-drag">
                                        <img id="file-image" src="#" alt="Preview" class="hidden">
                                        <div id="start">
                                            <!-- <i class="fa fa-download" aria-hidden="true"></i> -->
                                            <!-- <div>Select a file or drag here</div> -->
                                            <div id="notimage" class="hidden">Please select an image</div>
                                            <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                        </div>
                                        <div id="response" class="hidden">
                                            <div id="messages"></div>
                                         
                                        </div>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn save_btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn save_btn">Save</button>
                    </div>
                </div>
            </div>
        </div>

<?php include("include/footer.php"); ?>