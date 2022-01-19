<?php include 'includes/header2.php';?>



<nav aria-label="breadcrumb" class="container">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Checkout</li>
	</ol>
</nav>
	
<section class="checkout-section-1">
	<div class="container">
		<div class="genBox">
			<h1 class="heading">Billing Details</h1>
			<form action="" class="checkout-form" autocomplete="off" >
				<div class="form-group row">
					<div class="col-4">
						<label for="">First Name<span>*</span></label>
						<input type="name" required placeholder="selvyn">
					</div>
					<div class="col-4">
						<label for="">Middle Name<span>*</span></label>
						<input type="name" required placeholder="selvyn">
					</div>
					<div class="col-4">
						<label for="">Last Name<span>*</span></label>
						<input type="name" required placeholder="adam">
					</div>
					<div class="col-6">
						<label for="">Email Address<span>*</span></label>
						<input type="email" required placeholder="selwyn@example.com">
					</div>
					<div class="col-6">
						<label for="">Phone Number<span>*</span></label>
						<input type="tel" required placeholder="000-000-0000">
					</div>
					<div class="col-12">
						<label for="">Address<span>*</span></label>
						<input type="text" required placeholder="816 lorum Street, Dummy Address, USa">
					</div>
					<div class="col-6">
						<label for="">State/Country<span>*</span></label>
						<div class="autocomplete" style="width:100%; position: relative;">
							<input id="myInput" type="text" name="myCountry" placeholder="Country">
						</div>
					</div>
					<div class="col-6">
						<label for="">Zip / postal code<span>*</span></label>
						<input type="tel" required placeholder="0000">
					</div>
				</div>
				<div class="form-group row mt-5 cart-section-1 p-0">
					<h1 class="heading border-0">Payment Method</h1>
					<div class="col-12 otherInfo pt-0">
						<div class="chargesWrap p-0">
							<h1 class="heading pickup p-0">
								<label class="checkWrap">
									<input type="checkbox" name="">
									<span class="checkmark"></span>
								</label>
								Credit Card
							</h1>
							<div class="bankCards">
								<img src="assets/images/payment-icon-1.png">
								<img src="assets/images/payment-icon-2.png">
								<img src="assets/images/payment-icon-3.png">
								<img src="assets/images/payment-icon-4.png">
							</div>	
						</div>
					</div>
					<div class="col-12">
						<label for="">Card Number</label>
						<input type="text" required placeholder="4123 6548 321 9999">
					</div>
					<div class="col-4">
						<label for="">Expiration date:</label>
						<select name="" id="">
							<option disabled selected style="color: #8d8d8d;">Month</option>
							<option>January</option>
							<option>February</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>August</option>
							<option>September</option>
							<option>October</option>
							<option>November</option>
							<option>December</option>
						</select>
					</div>
					<div class="col-4">
						<label for="">Year:</label>
						<select id="year"></select>
					</div>
					<div class="col-4">
						<label for="">Security code:</label>
						<input type="tel" required placeholder="Three digits">
					</div>

					<div class="col-12 otherInfo pt-0 agrrement-check">
						<div class="chargesWrap p-0 border-0">
							<h1 class="heading pickup p-0">
								<label class="checkWrap">
									<input type="checkbox" name="" class="m-0">
									<span class="checkmark"></span>
								</label>
								<p class="agree">By clicking the button, you agree to the <a href="#!">Terms and Condtions</a></p> 
							</h1>
						</div>
					</div>
					<div class="col-12 otherInfo pt-0">
						<div class="actionBtn">
							<button class="genBtn">Back</button>
							<button class="genBtn">Place Order</button>
						</div>
					</div>
					<div class="col-5">
						



					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="absImages">
		<img src="assets/images/abs-img-1.png" class="abs-img type-1">
		<img src="assets/images/abs-img-3.png" class="abs-img type-2">
	</div>
</section>	




<?php include 'includes/footer.php';?>
