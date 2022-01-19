<?php include 'includes/header.php';?>



<nav aria-label="breadcrumb" class="container">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Cart</li>
	</ol>
</nav>
	
<section class="cart-section-1 dealer-cart-section-1">
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

			<div class="otherInfo dealerInfo">
				<div class="chargesWrap">
					<h1 class="heading pickup">
						<label class="checkWrap">
							<input type="radio" name="">
							<span class="checkmark"></span>
						</label>
						Route day Deliver
					</h1>
					<p class="amount">$00.00</p>
				</div>

				<div class="chargesWrap">
					<h1 class="heading pickup">
						<label class="checkWrap">
							<input type="radio" name="">
							<span class="checkmark"></span>
						</label>
						Express Delivery Charges
					</h1>
					<p class="amount">$60.00</p>
				</div>


				<div class="additionalInfo justify-content-end">
					<div class="rightWrap">
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
