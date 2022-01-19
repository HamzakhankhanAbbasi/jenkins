<?php include 'includes/header2.php';?>



<nav aria-label="breadcrumb" class="container">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Cart</li>
	</ol>
</nav>
	
<section class="cart-section-1">
	<div class="container">
		<div class="genBox">
			<div class="table-responsive cart-listing">
				<table id="mytable"  class="table  data-table1" style="width: 100%;">
					<thead>
						<tr>
							<th>Items</th>
							<th class="text-start">Description</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
						<tbody>
							<tr>
								<td class="img-box text-center"><img src="assets/images/contact-img-1.png"></td>
								<td>
									<p>Flowers Bouquet Pink</p>
									<span>Product Code: 
										<span>MLSB</span>
									</span>
								</td>

								<td>
									<div class="quaitity-box">
										<form>
											<div class="plus-minus d-flex justify-content-center">
												<span class="add-less minus"><i class="fas fa-minus"></i></span>
												<input type="number" class="count" name="qty" value="1">
												<span class="add-less plus"><i class="fas fa-plus"></i></span>
											</div>
										</form>
									</div>
								</td>
								<td class="text-center price">$24.65</td>
								<th><button class="dlt-item"><i class="fas fa-times"></i></button></th>
							</tr>

							<tr>
								<td class="img-box text-center"><img src="assets/images/gen-card-img-2.png"></td>
								<td>
									<p>Flowers Bouquet Pink</p>
									<span>Product Code: 
										<span>MLSB</span>
									</span>
								</td>

								<td>
									<div class="quaitity-box">
										<form>
											<div class="plus-minus d-flex justify-content-center">
												<span class="add-less minus"><i class="fas fa-minus"></i></span>
												<input type="number" class="count" name="qty" value="1">
												<span class="add-less plus"><i class="fas fa-plus"></i></span>
											</div>
										</form>
									</div>
								</td>
								<td class="text-center price">$24.65</td>
								<th><button class="dlt-item"><i class="fas fa-times"></i></button></th>
							</tr>

							<tr>
								<td class="img-box text-center"><img src="assets/images/contact-img-1.png"></td>
								<td>
									<p>Flowers Bouquet Pink</p>
									<span>Product Code: 
										<span>MLSB</span>
									</span>
								</td>

								<td>
									<div class="quaitity-box">
										<form>
											<div class="plus-minus d-flex justify-content-center">
												<span class="add-less minus"><i class="fas fa-minus"></i></span>
												<input type="number" class="count" name="qty" value="1">
												<span class="add-less plus"><i class="fas fa-plus"></i></span>
											</div>
										</form>
									</div>
								</td>
								<td class="text-center price">$24.65</td>
								<th><button class="dlt-item"><i class="fas fa-times"></i></button></th>
							</tr>
						</tbody>
				</table>
			</div>

			<div class="otherInfo">
				<h1 class="heading">Select Your Zip Code.</h1>
				<div class="zipCode">
					<button>10001
						<span class="markWrap">
							<label class="checkWrap">
								<input type="radio" name="fname">
								<span class="checkmark"></span>
							</label>
						</span>
					</button>
					<button>10002
						<span class="markWrap">
							<label class="checkWrap">
								<input type="radio" name="fname">
								<span class="checkmark"></span>
							</label>
						</span>
					</button>
					<button>10003
						<span class="markWrap">
							<label class="checkWrap">
								<input type="radio" name="fname">
								<span class="checkmark"></span>
							</label>
						</span>
					</button>
					<button>10004
						<span class="markWrap">
							<label class="checkWrap">
								<input type="radio" name="fname">
								<span class="checkmark"></span>
							</label>
						</span>
					</button>
					<button>10005
						<span class="markWrap">
							<label class="checkWrap">
								<input type="radio" name="fname">
								<span class="checkmark"></span>
							</label>
						</span>
					</button>
				</div>

				<h1 class="heading pickup">
					<label class="checkWrap">
						<input type="checkbox" name="">
						<span class="checkmark"></span>
					</label>
					Pickup by Yourself
				</h1>

				<div class="additionalInfo">
					<div class="leftWrap">
						<h1 class="heading">Additional Service</h1>
						<h1 class="heading pickup sub-heading">
							<label class="checkWrap">
								<input type="checkbox" name="">
								<span class="checkmark"></span>
							</label>
							Additional Service
						</h1>
					</div>	
					<div class="rightWrap">
						<p class="finalBill">
							Sub Total
							<span>$18.00</span>
						</p>
						<p class="finalBill additionalCharge justify-content-end ">
							<span>$10.00</span>
						</p>
						<p class="finalBill total">
							Total:
							<span>$28.00</span>
						</p>
					</div>
				</div>

				<div class="actionBtn">
					<button class="genBtn">Continue Shopping</button>
					<button class="genBtn">Proceed to Checkout</button>
				</div>
			</div>
		</div>
	</div>
	<div class="absImages">
		<img src="assets/images/abs-img-1.png" class="abs-img type-1">
		<img src="assets/images/abs-img-3.png" class="abs-img type-2">
	</div>
</section>	




<?php include 'includes/footer.php';?>
