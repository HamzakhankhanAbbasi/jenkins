<?php include 'inc/header.php'; ?>
<section class="dashboard-sec">
   <div class="row">
   <div class="mobile-wrap">  
   <aside>   
      <button type="button" class="toogle-close-btn">
                        <i class="fas fa-times"></i>
                     </button> 
         <div class="side-logo">
            <a href="../index.php"><img src="assets/images/dash-logo.png" class="img-fluid"></a>
         </div>
         <div class="user-profile">
            <div class="profile-image">
               <img src="assets/images/user-image.jpg" class="img-fluid">
            </div>
            <div class="user-name">
               <p>Hi,<br>
                  <strong>John Doe</strong>
               </p>
            </div>
         </div>
         <div class="dashboard-links">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#myccount" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-user"></i> Profile</a>
               <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#myorder" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-shopping-cart"></i> Orders</a>
               <a class="nav-link"  data-toggle="pill" href="javascript:;"><i class="fas fa-sign-out-alt"></i> Logout</a>
               <a class="nav-link" data-toggle="pill" href="index.php"><i class="fas fa-home"></i> Back to home</a>
            </div>
         </div>
    </aside>
   </div>  
      <div class="right-box-wrap">
         <div class="tab-content" id="v-pills-tabContent">
            <!-- My Account Tab -->
            <div class="tab-pane fade show active" id="myccount" role="tabpanel" aria-labelledby="v-pills-home-tab">
               <h5 class="black-head">Welcome to Your Account</h5>
               <div class="user-info-box">
                  <div class="avatar-upload">
                     <div class="avatar-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"><i class="fas fa-plus"></i></label>
                     </div>
                     <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(assets/images/user-image.jpg);">
                        </div>
                     </div>
                  </div>
                  <div class="info-box">
                     <div class="user-detail-box">
                        <div class="details">
                           <label>User Name</label>
                           <p>John Doe</p>
                        </div>
                        <div class="edit-btn">
                           <a href="javascript:void(0)" data-toggle="modal" data-target="#newUsername-modal">Edit</a>
                        </div>
                     </div>
                     <div class="user-detail-box">
                        <div class="details">
                           <label>Address</label>
                           <p>Lorem ipsum dolor sit</p>
                        </div>
                        <div class="edit-btn">
                           <a href="javascript:void(0)" data-toggle="modal" data-target="#newAddress-modal">Edit</a>
                        </div>
                     </div>
                     <div class="user-detail-box">
                        <div class="details">
                           <label>Phone Number</label>
                           <p>You haven’t added a phone number yet</p>
                        </div>
                        <div class="edit-btn">
                           <a href="javascript:void(0)" data-toggle="modal" data-target="#newNumber-modal">Add</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="change-pass-wrap">
                  <h5 class="black-head m-0">Password & Authentication</h5>
                  <div class="pass-btn-box">
                     <a href="javascript:void(0)" class="black-btn" data-toggle="modal" data-target="#newPassword-modal">Change Password</a>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
               </div>
            </div>
            <!-- My Order Tab -->
            <div class="tab-pane fade" id="myorder" role="tabpanel" aria-labelledby="v-pills-profile-tab">
               <h5 class="black-head">My Orders</h5>
               <div class="order-detail-box">
                     <table class="display nowrap " id="examp" style="width:100%">
                           <thead class="thead-dark">
                              <tr>
                                 <th scope="col">ORDER#</th>
                                 <th scope="col">ORDER DATE</th>
                                 <th scope="col">STATUS</th>
                                 <th scope="col">PRICE</th>
                                 <th scope="col">LAST UPDATE</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">123456</th>
                                 <td>10:50 PM</td>
                                 <td class="green-color">Confirmed</td>
                                 <td>$230.00</td>
                                 <td>Today</td>
                              </tr>
                              <tr>
                                 <th scope="row">123456</th>
                                 <td>10:50 PM</td>
                                 <td class="green-color">Confirmed</td>
                                 <td>$230.00</td>
                                 <td>Today</td>
                              </tr>
                              <tr>
                                 <th scope="row">123456</th>
                                 <td>10:50 PM</td>
                                 <td class="yellow-color">Shipped</td>
                                 <td>$230.00</td>
                                 <td>June 12, 2020</td>
                              </tr>
                              <tr>
                                 <th scope="row">123456</th>
                                 <td>10:50 PM</td>
                                 <td class="green-color">Confirmed</td>
                                 <td>$230.00</td>
                                 <td>Yesterday</td>
                              </tr>
                              <tr>
                                 <th scope="row">123456</th>
                                 <td>10:50 PM</td>
                                 <td class="green-color">Confirmed</td>
                                 <td>$230.00</td>
                                 <td>June 12, 2020</td>
                              </tr>
                              <tr>
                                 <th scope="row">123456</th>
                                 <td>10:50 PM</td>
                                 <td class="green-color">Fullfilled</td>
                                 <td>$230.00</td>
                                 <td>June 12, 2020</td>
                              </tr>
                              <tr>
                                 <th scope="row">123456</th>
                                 <td>10:50 PM</td>
                                 <td class="green-color">Confirmed</td>
                                 <td>$230.00</td>
                                 <td>June 12, 2020</td>
                              </tr>
                              <tr>
                                 <th scope="row">123456</th>
                                 <td>10:50 PM</td>
                                 <td class="green-color">Confirmed</td>
                                 <td>$230.00</td>
                                 <td>June 12, 2020</td>
                              </tr>
                           </tbody>
                        </table>
               </div>
            </div>
         </div>
      </div>
      <!-- Tabs End -->
   </div>
</section>
<?php include 'inc/footer.php'; ?>	