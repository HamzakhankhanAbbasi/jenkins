<!-- New Payment Modal Start  -->
<div class="modal payment-popup fade" id="payment-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
      		<h6>Add a new payment method</h6>
      		<p>Payment Type > <span>Payment Inforrnatir ' Billing Address</span> </p>
      		<button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        	</button>
      	</div>
      	<div class="payment-types">
      		<p>Select Payment Type </p>

      		<a href="javascript:void(0)" class="payment-type" data-toggle="modal" data-target="#credit-modal">
          <img src="assets/images/credit-card.png" class="img-fluid"> Credit Card</a>
      		<a href="javascript:void(0)" class="payment-type"><img src="assets/images/paypal.png" class="img-fluid"> PayPal</a>
      		<a href="javascript:void(0)" class="payment-type">Auto Fill From Browser</a>
      	</div>
      </div> 
    </div>
  </div>
</div>
<!-- End -->

<!-- Credit Card Modal Start  -->
<div class="modal payment-popup fade" id="credit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Credit Card Details</h6>
          <p>Payment Type > <span>Payment Inforrnatir ' Billing Address</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="text" name="" maxlength="20" placeholder="Card Holder Name" class="card-input">
            <input type="tel" name="" placeholder="Card Number" class="card-input">
            <input type="text" name="" pattern="[0-9]*" inputmode="numeric" placeholder="Expiration (mm/yy)" class="card-input">
            <input type="text" pattern="[0-9]*" inputmode="numeric" placeholder="Security Code" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>
<!-- End -->

<!-- Change User Name Modal Start -->
<div class="modal payment-popup fade" id="newUsername-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Chanege Your User Name</h6>
          <p><span>Enter a new user name and your existing password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="text" name="" maxlength="20" placeholder="User Name" class="card-input">
            <input type="password" name="" maxlength="15" placeholder="Current Password" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

<!-- Change Address Modal Start -->
<div class="modal payment-popup fade" id="newAddress-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Chanege Your Address</h6>
          <p><span>Enter a new address and your existing password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="text" name="" maxlength="30" placeholder="New Address" class="card-input">
            <input type="text" name="" maxlength="30" placeholder="Address 2" class="card-input">
            <input type="password" name="" maxlength="15" placeholder="Current Password" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

<!-- Change Phone Number Modal Start -->
<div class="modal payment-popup fade" id="newNumber-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Chanege Your Phone Number</h6>
          <p><span>Enter a new number and your existing password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="tel" name="" maxlength="15" placeholder="New Phone Number" class="card-input">
            <input type="password" name="" maxlength="15" placeholder="Current Password" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

<!-- Change Password Modal Start -->
<div class="modal payment-popup fade" id="newPassword-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Chanege Your Password</h6>
          <p><span>Enter a new password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="password" name="" maxlength="30" placeholder="New Password" class="card-input">
            <input type="password" name="" maxlength="15" placeholder="Confirm Password" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

<!-- Change Email Address Modal Start -->
<div class="modal payment-popup fade" id="newEmail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Chanege Your Email Address</h6>
          <p><span>Enter a new email addressand your existing password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="email" name="" maxlength="30" placeholder="New Email Address" class="card-input">
            <input type="email" name="" maxlength="30" placeholder="Confirm Email Address" class="card-input">
            <input type="password" name="" maxlength="30" placeholder="Current Password" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->




  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
  AOS.init();
</script>
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan",	"Feb",	"Mar",	"Apr",	"May","Jun","july","Aug"],
            datasets: [{
                label: 'Achievements', // Name the series
                data: [200,	250,	220,	250, 350, 200, 180, 210], // Specify the data values array
                fill: true,
                borderColor: '#0d2b59', // Add custom color border (Line)
                backgroundColor: '#e8f2ff', // Add custom color background (Points and Fill)
                borderWidth: 2 // Specify bar border width
            }]},
        options: {
          responsive: true, // Instruct chart js to respond nicely.
          maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
        }
    });
  </script>
</body>

</html>