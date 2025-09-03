@extends('layouts.app')

@section('title', 'About - ShopTec')

@section('content')
<section class="shopping-cart">
			<h1 class="heading">Your <span>Products</span></h1>

			<div class="box-container">
				<div class="box">
					<i class="fas fa-times"></i>
					<img src="template/images/product-phone-2.jpg" alt="" />
					<div class="content">
						<h3>Smartphone</h3>
						<form action="">
							<span>Quantity: </span>
							<input type="number" name="" value="1" id="" />
						</form>
						<div class="price">$130.000</div>
					</div>
				</div>

				<div class="box">
					<i class="fas fa-times"></i>
					<img src="template/images/product-2.jpg" alt="" />
					<div class="content">
						<h3>Camera</h3>
						<form action="">
							<span>Quantity: </span>
							<input type="number" name="" value="1" id="" />
						</form>
						<div class="price">$29.999 <span>$39.999</span></div>
					</div>
				</div>

				<div class="box">
					<i class="fas fa-times"></i>
					<img src="template/images/product-tv-1.png" alt="" />
					<div class="content">
						<h3>Smart TV</h3>
						<form action="">
							<span>Quantity: </span>
							<input type="number" name="" value="1" id="" />
						</form>
						<div class="price">$149.999</div>
					</div>
				</div>

				<div class="box">
					<i class="fas fa-times"></i>
					<img src="template/images/product-4.jpg" alt="" />
					<div class="content">
						<h3>Speaker</h3>
						<form action="">
							<span>Quantity: </span>
							<input type="number" name="" value="1" id="" />
						</form>
						<div class="price">$49.999</div>
					</div>
				</div>

				<div class="box">
					<i class="fas fa-times"></i>
					<img src="template/images/product-6.jpg" alt="" />
					<div class="content">
						<h3>Smartwatch</h3>
						<form action="">
							<span>Quantity: </span>
							<input type="number" name="" value="1" id="" />
						</form>
						<div class="price">$20.00 <span>$39.999</span></div>
					</div>
				</div>

				<div class="box">
					<i class="fas fa-times"></i>
					<img src="template/images/product-au-4.jpg" alt="" />
					<div class="content">
						<h3>Headphones</h3>
						<form action="">
							<span>Quantity: </span>
							<input type="number" name="" value="1" id="" />
						</form>
						<div class="price">$25.999</div>
					</div>
				</div>
			</div>

			<div class="cart-total">
				<h3>Total: <span>$405.000</span></h3>
				<h3>Discount: <span>-$15.000</span></h3>
				<h3>Grand Total: <span>$390.000</span></h3>
				<a href="#" class="btn">Proceed to Checkout</a>
			</div>
		</section>
@endsection
@section('scripts')
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="{{ asset('template/js/script.js') }}"></script>
@endsection

