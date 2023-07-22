<?php include("include/header.php"); ?>

<!--End Top Nav -->
<div class="container-fluid">
    <div class="col-md-12 px-1">
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-dark p-3 font-700">Account Profile</h3>
            </div>

        </div>

        <div class="row px-3">
            <div class="col-md-4 mb-3">


                <div class="setting_menu_box">

                    <div class="sub-contact_box mb-3"> <i class="fa fa-male" aria-hidden="true"></i> &nbsp;<b style="font-size: 14px;">Account</b>
                        <span class="setting_content"><br>Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit</span>
                    </div>

                    <div class="sub-contact_box mb-3"> <i class="fa fa-bell" aria-hidden="true"></i> &nbsp;<b style="font-size: 14px;">Notification</b>
                        <span class="setting_content"><br>Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit</span>
                    </div>

                    <div class="sub-contact_box mb-3"> <i class="fa fa-shield" aria-hidden="true"></i> &nbsp;<b style="font-size: 14px;">Security</b>
                        <span class="setting_content"><br>Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit</span>
                    </div>


                    <div class="sub-contact_box mb-3"> <i class="fa fa-money" aria-hidden="true"></i> &nbsp;<b style="font-size: 14px;">payment</b>
                        <span class="setting_content"><br>Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit</span>
                    </div>

                    <div class="sub-contact_box mb-3"> <i class="fa fa-yelp" aria-hidden="true"></i> &nbsp;<b style="font-size: 14px;">Help</b>
                        <span class="setting_content"><br>Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit</span>
                    </div>
                    <div class="sub-contact_box mb-3"> <i class="fa fa-user-secret" aria-hidden="true"></i> &nbsp;<b style="font-size: 14px;">Privacy Policy</b>
                        <span class="setting_content"><br>Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit</span>
                    </div>
                </div>

            </div>
            <div class="col-md-7">
                <div class="account_box">
                    <h6 class="text-dark p-3 font-700">Account</h6>

                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url(assets/images/user_new.png);">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 mb-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label cstm_label">UserName</label>
                                <input type="email" class="form-control coustom_control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label cstm_label">Phone </label>
                                <input type="email" class="form-control coustom_control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label cstm_label">Email</label>
                                <input type="email" class="form-control coustom_control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label cstm_label">Password</label>
                                <input type="email" class="form-control coustom_control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label cstm_label">Your Location</label>
                                <iframe width="320" height="150" class="map" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Rosemont+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>


                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label cstm_label">Address Details</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 150px; border-radius:10px;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3"> <button type="button" class="btn save_btn">Save Setting</button></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div><?php include("include/footer.php"); ?>